<?php
if ( ! class_exists( 'ReduxFrameworkInstances' ) )
{
    return;
}

class kaily_CSS_Generator
{
    /**
     * scssc class instance
     *
     * @access protected
     * @var scssc
     */
    protected $scssc = null;

    /**
     * ReduxFramework class instance
     *
     * @access protected
     * @var ReduxFramework
     */
    protected $redux = null;

    /**
     * Debug mode is turn on or not
     *
     * @access protected
     * @var boolean
     */
    protected $dev_mode = false;

    /**
     * opt_name of ReduxFramework
     *
     * @access protected
     * @var string
     */
    protected $opt_name = '';


    /**
     * Constructor
     */
    function __construct()
    {
        $this->opt_name = kaily_get_opt_name();

        if ( empty( $this->opt_name ) )
        {
            return;
        }

        add_filter( 'cms_scssc_on', '__return_true' );
        add_action( 'init', array( $this, 'init' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ), 20 );
    }

    /**
     * init hook - 10
     */
    function init()
    {
        if ( ! class_exists( 'scssc' ) )
        {
            return;
        }

        $this->redux = ReduxFrameworkInstances::get_instance( $this->opt_name );

        if ( empty( $this->redux ) || ! $this->redux instanceof ReduxFramework )
        {
            return;
        }

        $this->generate_file();
    }

    /**
     * Generate options and css files
     */
    function generate_file()
    {
        $scss_dir = get_template_directory() . '/assets/scss/';
        $css_dir  = get_template_directory() . '/assets/css/';

        $this->scssc = new scssc();
        $this->scssc->setImportPaths( $scss_dir );

        $_options = $scss_dir . 'variables.scss';

        $this->redux->filesystem->execute( 'put_contents', $_options, array(
            'content' => $this->options_output()
        ) );

        $this->scssc->setFormatter( 'scss_formatter_compressed' );
        $css_file = $css_dir . 'theme.min.css';

        $this->redux->filesystem->execute( 'put_contents', $css_file, array(
            'content' => $this->scssc->compile( '@import "theme.scss"' )
        ) );
    }

    /**
     * Output options to _variables.scss
     *
     * @access protected
     * @return string
     */
    protected function options_output()
    {
        ob_start();

        echo ( '$primary_color: #f9b128;' );
        echo ( '$secondary_color: #464646;' );

        return ob_get_clean();
    }

    /**
     * Hooked wp_enqueue_scripts - 20
     * Make sure that the handle is enqueued from earlier wp_enqueue_scripts hook.
     */
    function enqueue()
    {
        $css = $this->inline_css();

        if ( $css )
        {
            wp_add_inline_style( 'kaily-theme', $this->dev_mode ? $css : kaily_css_minifier( $css ) );
        }
    } 

    /**
     * Generate inline css based on theme options
     */
    protected function inline_css()
    {
        ob_start();

        /* Space Content */
        if( ! is_search() ) :

            $page_paddings = kaily_get_page_opt( 'page_paddings' );

            if( $page_paddings['padding-top'] != null ) {

                echo '
                .site-content {
                    padding-top: ' . $page_paddings['padding-top'] . ';
                }
                ';
            }

            if( $page_paddings['padding-bottom'] != null ) {

                echo '
                .site-content {
                    padding-bottom: ' . $page_paddings['padding-bottom'] . ';
                }
                ';
            }
        endif;

        return ob_get_clean();
    }
}

new kaily_CSS_Generator();