<?php
/**
 * kaily functions and definitions
 *
 * @package kaily
 */

if (!function_exists('kaily_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function kaily_setup()
    {
        // Make theme available for translation.
        load_theme_textdomain('kaily', get_template_directory() . '/languages');

        // Custom Header
        add_theme_support("custom-header");

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title.
        add_theme_support('title-tag');

        add_theme_support('woocommerce');
        //add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');

        /* Change default image thumbnail sizes in wordpress */
        update_option('thumbnail_size_w', 0);
        update_option('thumbnail_size_h', 0);
        update_option('thumbnail_crop', 0);

        update_option('medium_size_w', 0);
        update_option('medium_size_h', 0);
        update_option('medium_crop', 0);

        update_option('large_size_w', 0);
        update_option('large_size_h', 0);
        update_option('large_crop', 0);

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'kaily'),
            'sec_menu' => esc_html__('Top Category Menu', 'kaily'),
            'footer_menu' => esc_html__('Footer Menu', 'kaily'),
            'ftbt_menu' => esc_html__('Footer Bottom Menu', 'kaily'),
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'kaily_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kaily_content_width()
{
    $GLOBALS['content_width'] = apply_filters('kaily_content_width', 640);
}

add_action('after_setup_theme', 'kaily_content_width', 0);

/**
 * Register widget area.
 */
function kaily_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Blog Sidebar', 'kaily'),
        'id'            => 'sidebar-blog',
        'description'   => esc_html__('Add widgets here.', 'kaily'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
    ));
    register_sidebar(array(
        'name'          => esc_html__('Woo Sidebar', 'kaily'),
        'id'            => 'sidebar-woo',
        'description'   => esc_html__('Add widgets here.', 'kaily'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
    ));
}

add_action('widgets_init', 'kaily_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function kaily_scripts()
{
    $theme = wp_get_theme(get_template());

    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '4.7.0', 'screen');

    wp_enqueue_style('kaily-theme', get_template_directory_uri() . '/assets/css/theme.min.css', array(), 'all');

    wp_enqueue_style('kaily-style', get_stylesheet_uri());

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.1.1', true);

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.3.6', true);

    wp_enqueue_script('kaily-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $theme->get('Version'), true);
}

add_action('wp_enqueue_scripts', 'kaily_scripts');

/* add editor styles */
function kaily_add_editor_styles()
{
    add_editor_style('editor-style.css');
}

add_action('admin_init', 'kaily_add_editor_styles');

/**
 * Helper functions for this theme.
 */
require_once get_template_directory() . '/inc/template-functions.php';

/**
 * Page options
 */
require_once get_template_directory() . '/inc/page-options.php';
require_once get_template_directory() . '/inc/theme-options.php';

/**
 * CSS Generator.
 */
if (!class_exists('kaily_CSS_Generator')) {
    require_once get_template_directory() . '/inc/classes/class-css-generator.php';
}

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/*
* Widget
*/
require_once get_template_directory() . '/widgets/title.php';


/**
 * Custom params & remove VC Elements.
 *
 */

/*function kaily_vc_after_init()
{
    require_once(get_template_directory() . '/vc_params/cms_custom_pagram_vc.php');
}

add_action('vc_after_init', 'kaily_vc_after_init');*/

/**
 * Add new elements for VC
 */
/*
function kaily_vc_elements()
{
    if (class_exists('CmsShortCode')) {
        cms_require_folder('vc_elements', get_template_directory());
    }
}
add_action('vc_before_init', 'kaily_vc_elements');*/

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require_once get_template_directory() . '/inc/extends.php';


/**
 * Tutorials snippet functions. You should add those to extends.php
 * and remove the file.
 */
//require_once get_template_directory() . '/inc/snippets.php';

/**
 * Register Google fonts
 */
function kaily_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin,latin-ext';

    /* translators: If there are characters in your language that are not supported by Source Sans Pro, translate this to 'off'. Do not translate into your own language. */
    /*if ( 'off' !== _x( 'on', 'Source Sans Pro font: on or off', 'kaily' ) ) {
        $fonts[] = 'Source+Sans+Pro:400,600,700,900';
    }*/

    /* translators: If there are characters in your language that are not supported by PT Serif, translate this to 'off'. Do not translate into your own language. */
    /*if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'kaily' ) ) {
        $fonts[] = 'Noto+Serif:700';
    }*/

    /* translators: If there are characters in your language that are not supported by PT Serif, translate this to 'off'. Do not translate into your own language. */
    /*if ( 'off' !== _x( 'on', 'Open San font: on or off', 'kaily' ) ) {
        $fonts[] = 'Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
    }*/

    /* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Roboto font: on or off', 'kaily' ) ) {
        $fonts[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
    }

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), 'https://fonts.googleapis.com/css' );
    }

    return $fonts_url;
}

function kaily_slug_scripts_styles() {
    wp_enqueue_style( 'kaily-add-fonts', kaily_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'kaily_slug_scripts_styles' );


/**
 * Move comment field to bottom of Comment form
 */
/*function kaily_field_comment($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;

    return $fields;
}

add_filter('comment_form_fields', 'kaily_field_comment');*/

function kaily_carousel() {
    return false;
}

add_filter( 'enable_cms_carousel', 'kaily_carousel' );


/**
 * Example for create Teams Post Type
 */
add_filter('cms_extra_post_types', 'kaily_add_custom_portfolio');

function kaily_add_custom_portfolio($postypes)
{
    $postypes['portfolio'] = array(
        'status'     => false,//require
    );

    return $postypes;
}

add_filter('swa_ie_export_mode', 'kaily_enable_export_mode');

function kaily_enable_export_mode()
{
    return false;
}

function shopin_enable_megamenu() {
    return false;
}
add_filter( 'cms_enable_megamenu', 'shopin_enable_megamenu' );

add_filter('use_block_editor_for_post', '__return_false');
add_filter('gutenberg_can_edit_post_type', '__return_false');


/**
 * Output the related products.
 */
function woocommerce_output_related_products() {

    $args = array(
        'posts_per_page' => 7,
        'columns'        => 7,
        'orderby'        => 'rand', // @codingStandardsIgnoreLine.
    );

    woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
}






