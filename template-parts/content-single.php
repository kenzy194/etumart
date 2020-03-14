<?php
/**
 * Template part for displaying posts in loop
 *
 * @package kaily
 */
?>

<div class="single-content">
    
    <h1><?php the_title(); ?></h1>

    <?php
    $star = rand(4,5);

    $people = rand(338,368);

    ?>

    <div class="rate">

        <div class="rate-star vote star-<?php echo esc_attr( $star ); ?>" data-rate="star-<?php echo esc_attr( $star ); ?>">

            <i class="fa fa-star" aria-hidden="true"></i>

            <i class="fa fa-star" aria-hidden="true"></i>

            <i class="fa fa-star" aria-hidden="true"></i>

            <i class="fa fa-star" aria-hidden="true"></i>

            <i class="fa fa-star" aria-hidden="true"></i>

        </div>

        <p>Điểm trung bình <?php echo esc_attr( $star ); ?>/5 ( <?php echo esc_attr( $people ); ?> lượt đánh giá )</p>

    </div>
    <div class="entry-content">

        <?php the_content(); ?>
    </div><!-- .entry-content -->

    <div class="img-single">
        <a href="#" class="tu-van">
        <img style="width: 100%;" src="<?php echo get_template_directory_uri().'/assets/images/1.jpg';?>" alt="IMG">
        </a>
    </div>

    <?php
    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() )
    {
        //comments_template();
    }
    ?>
</div>