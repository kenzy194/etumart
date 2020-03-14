<?php
/**
 * Template Name: Home
 *
 * @since 1.0.0
 * @author Kenji
 */

get_header();
?>
    <div class="page-home">
        <div class="home-slider">
            <?php k2_slider(); ?>
        </div>
        <div class="wrap-intro">
            <div class="container-fluid">
                <div class="k2-intro">
                    <div class="intro-carousel cms-carousel owl-carousel owl-theme" data-margin="20" data-loop="true"
                         data-nav="false" data-dots="false" data-autoplay="false" data-large-items="3"
                         data-medium-items="3" data-small-items="2" data-xsmall-items="2">
                        <div class="item">
                            <div class="wrap-k2-image">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/image.jpg.webp'; ?>"
                                         alt="">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wrap-k2-image">
                                <a href="#">

                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/image.jpg.webp'; ?>"
                                         alt="">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wrap-k2-image">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/image.jpg.webp'; ?>"
                                         alt="">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="wrap-k2-image">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/image.jpg.webp'; ?>"
                                         alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-product">
            <div class="container-fluid">
                <div class="home-title">
                    <div class="wrap-h">
                        <h2>Health & Personal Care</h2>
                    </div>
                    <a href="#">view all</a>
                </div>
                <div class="k2-product">
                    <div class="product-carousel cms-carousel owl-carousel owl-theme" data-margin="10" data-loop="true"
                         data-nav="true" data-dots="false" data-autoplay="false" data-large-items="6"
                         data-medium-items="5" data-small-items="4" data-xsmall-items="2">
                        <?php
                        $arg = array(
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'posts_per_page' => 8,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'slug',
                                    'terms' => 'sports-action-video-cameras', // Possibly 'exclude-from-search' too
                                )
                            )
                        );
                        $a = new WP_Query($arg);
                        if ($a->have_posts()) :
                            while ($a->have_posts()) :
                                $a->the_post();
                                ?>

                                <div class="item">
                                    <div class="wrap-k2-image">
                                        <a href="<?php echo esc_url(get_permalink()); ?>">
                                            <?php woocommerce_template_loop_product_thumbnail(); ?>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                wp_reset_query();
                            endwhile;
                        else :
                            ?>

                            <p>Chưa có bài viết !</p>
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-product">
            <div class="container-fluid">
                <div class="home-title">
                    <div class="wrap-h">
                        <h2>Top Selling Products</h2>
                    </div>
                    <a href="#">view all</a>
                </div>
                <div class="k2-product">
                    <div class="product-carousel cms-carousel owl-carousel owl-theme" data-margin="10" data-loop="true"
                         data-nav="true" data-dots="false" data-autoplay="false" data-large-items="6"
                         data-medium-items="5" data-small-items="4" data-xsmall-items="2">
                        <?php
                        $arg = array(
                            'post_type' => 'product',
                            'meta_key' => 'total_sales',
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => 8
                        );
                        $a = new WP_Query($arg);
                        if ($a->have_posts()) :
                            while ($a->have_posts()) :
                                $a->the_post();
                                ?>

                                <div class="item">
                                    <div class="wrap-k2-image">
                                        <a href="<?php echo esc_url(get_permalink()); ?>">
                                            <?php woocommerce_template_loop_product_thumbnail(); ?>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                wp_reset_query();
                            endwhile;
                        else :
                            ?>

                            <p>Chưa có bài viết !</p>
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php
get_footer();
