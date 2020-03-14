<?php
/**
 * Template part for displaying results in search pages
 *
 * @package kaily
 */

?>

<div class="item-archive clearfix">
    <div class="archive_img">
        <a href="<?php echo esc_url( get_permalink() ); ?>">
            <?php
                if ( has_post_thumbnail() ) { 

                    echo '<div class="post-image">';
                    the_post_thumbnail('full');
                    echo '</div>';
                }
                else {
                    $img = get_template_directory_uri() . '/assets/images/single_thubmnail.jpg';
                    echo '<div class="post-image">';
                    echo "<img src='" . $img . "' alt='Image Post'>";
                    echo '</div>';
                }

            ?>
        </a>
    </div>

    <div class="archive_content">

        <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo wp_trim_words(get_the_excerpt(),30,'...'); ?></p>
        <div class="wrap-bottom">
            <a href="<?php the_permalink(); ?>"><?php esc_html_e('Xem Thêm', 'kaily') ?></a>
            <a class="tu-van" href="#"><?php esc_html_e('Tư Vấn', 'kaily') ?></a>
        </div>
    </div>
</div>
