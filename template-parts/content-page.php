<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package kaily
 */

?>

<article <?php post_class(); ?>>
    <div class="entry-content">
        <?php
            the_content();
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
