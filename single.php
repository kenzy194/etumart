<?php
/**
 * The template for displaying all single posts
 *
 * @package kaily
 */

get_header();
?>
<?php k2_slider(); ?>

    <div class="home-info">
        <div class="container">
            <div class="wrap-content clearfix">
                <div class="item">
                    <div class="wrap-item">
                        <h3>Thời gian làm việc</h3>
                        <p><span>Thời gian:</span><br/>
                        Từ 8h - 20h00 tất cả các ngày trong tuần, kể cả các ngày lễ Tết
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="wrap-item">
                        <h3>Cổng tư vấn</h3>
                        <p><span>Đội ngũ bác sĩ: </span><br/>
                        luôn túc trực để giải đáp thắc mắc tận tình cho bệnh nhân 24/24
                        </p>
                    </div>
                </div>
                <div class="item it-last">
                    <div class="wrap-item">
                        <h3>ĐẶT LỊCH KHÁM</h3>
                        <div class="form-home">
                            <a href="#" class="tu-van">
                            <form action="#">
                                <div class="name">
                                    <input type="text" placeholder="Họ và tên">
                                </div>
                                <div class="phone-n">
                                    <input type="text" placeholder="Số điện thoại">
                                </div>
                                <div class="date-k">
                                    <input type="text" placeholder="Ngày khám">
                                </div>
                                <div class="sub-btn">
                                    <button>đăng ký</button>
                                </div>
                            </form>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container content-single">

        <div class="row">

            <div class="sidebar_archive hidden-xs hidden-sm col-md-4 col-lg-3">

                <div class="wrap-ss-sing">
                    <?php if( is_active_sidebar( 'sidebar-blog' ) ) : ?>

                        <?php get_sidebar(); ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="single-area col-xs-12 col-sm-12 col-md-8 col-lg-9">

                <main id="main" class="site-main">
                    <?php

                        while ( have_posts() )
                        {
                            the_post();

                            get_template_part( 'template-parts/content-single' );
                        }
                    ?>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>

    <?php kinhdo_single( get_the_ID() ); ?>

    <div class="gt-contact">
        <div class="container">
            <div class="item clearfix">
                <a href="#" class="tu-van">
                <div class="img">
                    <img src="<?php echo get_template_directory_uri(). '/assets/images/gioi_thieu/icon_gt_info_1.jpg'; ?>" alt="IMG">
                </div>

                <div class="info">
                    <h3>BÁC SĨ TƯ VẤN</h3>
                    <p>0388 036 248</p>
                </div>
                </a>
            </div>
            <div class="item clearfix">
                <a href="#" class="tu-van">
                <div class="img">
                    <img src="<?php echo get_template_directory_uri(). '/assets/images/gioi_thieu/icon_gt_info_2.jpg'; ?>" alt="IMG">
                </div>

                <div class="info">
                    <h3>TƯ VẤN TRỰC TUYẾN</h3>
                    <p>GẶP BÁC SĨ NGAY</p>
                </div>
                </a>
            </div>
            <div class="item clearfix">
                <a href="#" class="tu-van">
                <div class="img">
                    <img src="<?php echo get_template_directory_uri(). '/assets/images/gioi_thieu/icon_gt_info_3.jpg'; ?>" alt="IMG">
                </div>

                <div class="info">
                    <h3>ĐĂNG KÝ KHÁM</h3>
                    <p>ĐẶT LỊCH HẸN KHÁM</p>
                </div>
                </a>
            </div>
            <div class="item clearfix">
                <a href="#" class="tu-van">
                <div class="img">
                    <img src="<?php echo get_template_directory_uri(). '/assets/images/gioi_thieu/icon_gt_info_4.jpg'; ?>" alt="IMG">
                </div>

                <div class="info">
                    <h3>HỖ TRỢ</h3>
                    <p>CHỈ DẪN ĐƯỜNG</p>
                </div>
                </a>
            </div>
        </div>
    </div>
<?php
get_footer();