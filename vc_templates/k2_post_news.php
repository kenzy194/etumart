<?php
    extract(shortcode_atts(array(
        'category'    => '',
        'limit'    => '',
        'cats'  => ''
    ), $atts));
    ?>

<div class="k2_post_news">
    <?php
    $args = array(
        'post_type' => 'post',
        'cat' => $category,
        'posts_per_page' => intval($limit),
        'paged' => get_query_var( 'paged' )
    );
    $query = new WP_Query($args);
    ?> 
    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
    <div class="posts_box">
        <div class="row">
            <div class="col-md-5 col-sm-3">
                <div class="posts_box_img">
                    <?=(has_post_thumbnail())?"<a href='".get_the_permalink()."'><img src='".get_the_post_thumbnail_url()."' alt='".get_the_title()."'></a>":''?>
                </div>
            </div>
            <div class="col-md-7 col-sm-9">
                <div class="posts_box_content">
                    <h2 class="posts_header text-uppercase"><a href="<?=get_the_permalink()?>"><?=get_the_title()?></a></h2>
                    <p class="m0"><?=wp_trim_words(get_the_excerpt(),'30','...')?></p>
                </div>

                <div class="meta-post">
                    <?php 
                        $coun = rand(500,700);
                        $star = rand(7,10);//kaily_get_post_opt('select_rate', '9');
                    ?>
                    <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i><?php echo esc_attr( $star ); ?>/10 đánh giá</li>
                        <li><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $coun; ?> Lượt xem</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="posts_advysory">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="posts_left">
                        <img src="<?= get_template_directory_uri().'/assets/images/cat_icon.png'?>" alt="Chuyên mục tinh tức">
                        <span>Chuyên mục: <?=(!empty($cats))?$cats:'Tin Tức'?></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="middle-tv">
                        <a href="#" class="tu van"><img src="<?= get_template_directory_uri().'/assets/images/icon_tv.png'?>" alt="Icon tv">Tư vấn giải đáp thắc mắc</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="right-detail">
                        <a href="<?php echo get_the_permalink(); ?>">Xem Chi Tiết <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; endif; kaily_posts_pagination($query); wp_reset_query() ?>
</div>
