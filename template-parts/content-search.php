<?php
/**
 * Template part for displaying results in search pages
 *
 * @package kaily
 */

?>
<?php $cat =  get_the_category(); $category = $cat[0]->name ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'loop-entry search' ); ?>>
    <div class="media">
        <div class="media-left">
            <div class="post_img">
                <?=(has_post_thumbnail())?'<a href="'.get_the_permalink().'"><img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'"></a>':''?>
            </div>
        </div>
        <div class="media-body">
            <h2 class="archive_title text-uppercase"><a href="<?=get_the_permalink()?>"><?=get_the_title()?></a></h2>
            <p class="m0 archive_text"><?=wp_trim_words(get_the_excerpt(),30,'...')?></p>
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
    <div class="archive_button">
        <div class="row">
            <div class="col-md-5 col-sm-12">
                    <div class="posts_left">
                        <span><img src="<?= get_template_directory_uri().'/assets/images/cat_icon.png'?>" alt="Chuyên mục tinh tức"></span>
                        <span>Chuyên mục: <?=(!empty($cats))?$cats:'Tin Tức'?></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="middle-tv">
                        <a href="#" class="tu van"><img src="<?= get_template_directory_uri().'/assets/images/icon_tv.png'?>" alt="Icon tv"><span>Tư vấn giải đáp thắc mắc</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="right-detail">
                        <a href="<?php echo get_the_permalink(); ?>">Xem Chi Tiết <i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
