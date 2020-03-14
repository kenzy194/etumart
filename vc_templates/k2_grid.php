<?php
extract(shortcode_atts(array(
    'layout'   => 'style_1',
    'select_image'  => '',
    'link'  => '#',
    'limit'    => '8',
    'source'    => '',
    'source2'    => '',
    'el_class' => '',
), $atts));

switch ( $layout ) {

    case 'style_1':

    $attachment_image = wp_get_attachment_image_src($select_image, 'full');
    $image_url = $attachment_image[0];

    $arg = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => $source,
        'posts_per_page' => intval($limit),
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => get_query_var( 'paged' ),
    );

    $a = new  WP_Query( $arg );
    ?>
        <div class="k2-grid <?php echo esc_attr( $el_class ); ?>">
            
            <div class="image-grid">

                <a href="#" class="tu-van">

                    <img src="<?php echo esc_url( $image_url ); ?>" alt="Image Grid">
                </a>
            </div>

            <?php if( $a ->have_posts() ) : ?>

                <?php while( $a ->have_posts() ) : ?>
                    <?php $a ->the_post(); ?>

                    <div class="k2-content clearfix">
                        
                        <div class="wrap-k2-image">

                            <a href="<?php echo esc_url( get_permalink() ); ?>">
                                
                                <?php
                                if ( has_post_thumbnail() ) { 

                                    echo '<div class="post-image">';
                                    the_post_thumbnail('full');
                                    echo '</div>';
                                }
                                else {
                                    $img = get_template_directory_uri() . '/assets/images/single_thubmnail.jpg';
                                    echo "<img src='" . $img . "' alt='Image Post'>";
                                }

                                ?>
                            </a>
                        </div>

                        <div class="wrap-k2-info">
                            
                            <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                            <p><?php kaily_entry_excerpt( $length = 28 ); ?></p>

                            <div class="wrap-bottom">
                                <a class="tu-van" href="#"><?php esc_html_e('Tư Vấn', 'kaily') ?></a>
                                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Xem Thêm', 'kaily') ?></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

                <?php kaily_posts_pagination( $a ); ?>
            <?php else : ?>

                <p>Chưa có bài viết !</p>
            <?php endif; ?>
        </div>
    <?php
    break;

    case 'style_2':

    $arg = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => $source2,
        'posts_per_page' => intval($limit),
        'orderby' => 'rand',
        'order' => 'DESC',
        'paged' => get_query_var( 'paged' ),
    );

    $a = new WP_Query( $arg );

    ?>
        <div class="k2-grid2 <?php echo esc_attr( $el_class ); ?>">
            <p class="abc">CÁC BÀI VIẾT</p>

            <?php if( $a ->have_posts() ) : ?>

                <div class="k2-row">

                <?php while( $a ->have_posts() ) : ?>

                    <?php $a ->the_post(); ?>

                    <div class="k2-col">

                        <div class="k2-content">
                            
                            <div class="wrap-k2-image">

                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                    
                                    <?php
                                    if ( has_post_thumbnail( get_the_ID() ) ) {

                                        echo '<div class="post-image">';
                                        the_post_thumbnail('full');
                                        echo '</div>';
                                    }
                                    else {
                                        $img = get_template_directory_uri() . '/assets/images/single_thubmnail.jpg';
                                        echo "<img src='" . $img . "' alt='Image Post'>";
                                    }

                                    ?>
                                </a>
                            </div>

                            <div class="wrap-k2-info">
                                
                                <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                <p><?php kaily_entry_excerpt( $length = 28 ); ?></p>

                                <div class="wrap-bottom">
                                    <a class="tu-van" href="#"><?php esc_html_e('Tư Vấn', 'kaily') ?></a>
                                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('Xem Thêm', 'kaily') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>

                <?php kaily_posts_pagination( $a ); ?>
            <?php else : ?>

                <p>Chưa có bài viết !</p>
            <?php endif; ?>
        </div>
    <?php break;case 'style_3':

    $arg = array(
        'post_type' => 'promotion',
        'post_status' => 'publish',
        'posts_per_page' => intval($limit),
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => get_query_var( 'paged' ),
    );

    $a = new WP_Query( $arg );

    ?>
        <div class="k2-grid3 <?php echo esc_attr( $el_class ); ?>">
            <div class="wrap-title-ctkm text-center">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/ctkm_title.png'; ?>" alt="Image Title">
            </div>

            <?php if( $a ->have_posts() ) : ?>

                <div class="k2-row">

                <?php while( $a ->have_posts() ) : ?>

                    <?php $a ->the_post(); ?>

                    <div class="k2-col">

                        <div class="k2-content">
                            
                            <div class="wrap-k2-image">

                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                    
                                    <?php
                                    if ( has_post_thumbnail( get_the_ID() ) ) {

                                        echo '<div class="post-image">';
                                        the_post_thumbnail('full');
                                        echo '</div>';
                                    }
                                    else {
                                        $img = get_template_directory_uri() . '/assets/images/bg_comming.jpg.jpg';
                                        echo "<img src='" . $img . "' alt='Image Post'>";
                                    }

                                    ?>
                                </a>
                            </div>

                            <div class="wrap-k2-info">
                                
                                <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                <div class="wrap-meta">
                                    <?php $coun = rand(500,700); ?>
                                    <?php $coun2 = rand(40,120); ?>
                                    <ul>
                                        <li><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $coun; ?> Lượt xem</li>
                                        <li><i class="fa fa-check-square-o" aria-hidden="true"></i> <?php echo $coun2; ?> Người đăng ký</li>
                                    </ul>
                                </div>
                                <?php the_excerpt(); ?>

                                <div class="wrap-bottom">
                                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('Xem Chi Tiết', 'kaily') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>

                <?php kaily_posts_pagination( $a ); ?>
            <?php else : ?>

                <p>Chưa có bài viết !</p>
            <?php endif; ?>
        </div>
    <?php break;
}
?>