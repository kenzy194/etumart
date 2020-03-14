<?php
/**
 * The template for displaying search results pages
 *
 * @package kaily
 */
get_header();
$blog_column = $sidebar_col = '';
if( is_active_sidebar( 'sidebar-blog' ) )
{

    $blog_column = 'blog-area col-xs-12 col-sm-7 col-md-8 col-lg-8';
    $sidebar_col = 'col-xs-12 col-sm-5 col-md-4 col-lg-4';
}

else
{

    $blog_column = 'blog-area col-xs-12 col-sm-12 col-md-12 col-lg-12';
    $sidebar_col = 'hidden-xs hidden-sm hidden-md hidden-lg';
}

?>
    <div class="container content-container">

        <div class="row content-row">

            <div id="primary" class="<?php echo esc_html($blog_column);?>">
                <main id="main" class="site-main">
                    <?php

                    if ( have_posts() )
                    {
                        while ( have_posts() )
                        {
                            the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called loop-post-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content-search' );
                        }
                    }
                    else
                    {
                        get_template_part( 'template-parts/content', 'none' );
                    }

                    ?>
                </main><!-- #main -->
                
                <?php kaily_posts_pagination(); ?>
            </div><!-- #primary -->

            <?php if( is_active_sidebar( 'sidebar-blog' ) ) : ?>
            
                <div class="<?php echo esc_html($sidebar_col);?>">

                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
<?php
get_footer();