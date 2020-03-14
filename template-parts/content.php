<?php
/**
 * Template part for displaying posts in loop
 *
 * @package kaily
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'wrap-content' ); ?>>

    <div class="wrap-content__entry-featured">
        <?php 
        if (has_post_thumbnail()) {

            echo '<div class="post-image">';
            the_post_thumbnail('large');
            echo '</div>';
        }
        else {

        if (has_post_format('quote')) : ?>
            <?php
            $quote_text = kaily_get_post_format_value('post-quote-cite', ''); //Value is string
            if( !empty( $quote_text ) ) :
                echo "<blockquote>";
            endif;
            echo esc_attr($quote_text);
            if( !empty( $quote_text ) ) :
                echo "</blockquote>";
            endif;
            ?>
        <?php elseif (has_post_format('video')) : ?>
            <?php
            $video_url = kaily_get_post_format_value('post-video-url', '#');
            $video_file = kaily_get_post_format_value('post-video-file', '');
            $video_html = kaily_get_post_format_value('post-video-html', '');
            $video = '';
            if (!empty($video_url)) {
                global $wp_embed;
                echo $wp_embed->run_shortcode('[embed]' . $video_url . '[/embed]');
            } elseif (!empty($video_file)) {
                if (strpos('[embed', $video_file)) {
                    global $wp_embed;
                    echo $wp_embed->run_shortcode($video_file);
                } else {
                    echo do_shortcode($video_file);
                }
            } else {
                if ('' != $video_html) {
                    $my_allowed = wp_kses('post',wp_kses_allowed_html());

                    $my_allowed['iframe'] = array(
                        'align'        => true,
                        'width'        => true,
                        'height'       => true,
                        'frameborder'  => true,
                        'name'         => true,
                        'src'          => true,
                        'id'           => true,
                        'class'        => true,
                        'style'        => true,
                        'scrolling'    => true,
                        'marginwidth'  => true,
                        'marginheight' => true,
                    );
                    echo wp_kses($video_html, $my_allowed);
                }
            }
        endif;
        }
        ?>
    </div><!-- .entry-featured -->

    <div class="wrap-content__info">

        <header class="entry-header">

            <?php

                if ( 'post' === get_post_type() )
                {
                    kaily_entry_meta_archive();
                }

                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">

            <?php

                kaily_entry_excerpt();
            ?>
        </div><!-- .entry-content -->

        <?php kaily_entry_read_more(); ?>

        <?php //kaily_entry_footer(); ?>
    </div>

</article><!-- #post -->