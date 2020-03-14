<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package kaily
 */

get_header(); ?>

    <div class="entry-page-404">

        <div class="container">

            <div class="row">

                <div class="col-xs-12">

                    <div class="wrap-content-404">
                        <h1><?php esc_html_e('404 : ERROR','kaily'); ?></h1>
                        <p class="title-404"><?php esc_html_e('OOPS, THIS PAGE COULD NOT BE FOUND!','kaily'); ?></p>
                        <p class="sub-title-404"><?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.','kaily'); ?></p>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('BACK HOME','kaily'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
