<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package Kennji
 */

get_header();
?>
    <div class="container-fluid">
        <div class="breadcrumbs">
            <ul>
                <li><a href="<?php echo esc_url(home_url( '/' )); ?>">Home</a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php
                while ( have_posts() )
                {
                    the_post();

                    get_template_part( 'template-parts/content', 'page' );
                }

                ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
<?php
get_footer();