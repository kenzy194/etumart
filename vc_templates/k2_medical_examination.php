<?php
extract(shortcode_atts(array(
    'title1'=> '',
    'title2'=> '',
    'title3'=> '',
    'title4'=> '',
    'title5'=> '',
    'title6'=> '',
    'image1_1'=> '',
    'image1_2'=> '',
    'image2_1'=> '',
    'image2_2'=> '',
    'image3_1'=> '',
    'image3_2'=> '',
    'image4_1'=> '',
    'image4_2'=> '',
    'image5_1'=> '',
    'image5_2'=> '',
    'image6_1'=> '',
    'image6_2'=> '',
    'css_animation'     => '',
    'layout'     => 'style_1',
    'el_class'     => '',
), $atts) );

$animation_classes = $this->getCSSAnimation( $css_animation );

$image1_1 = wp_get_attachment_image_src($image1_1, 'full');
$url1_1 = $image1_1[0];

$image1_2 = wp_get_attachment_image_src($image1_2, 'full');
$url1_2 = $image1_2[0];

$image2_1 = wp_get_attachment_image_src($image2_1, 'full');
$url2_1 = $image2_1[0];

$image2_2 = wp_get_attachment_image_src($image2_2, 'full');
$url2_2 = $image2_2[0];

$image3_1 = wp_get_attachment_image_src($image3_1, 'full');
$url3_1 = $image3_1[0];

$image3_2 = wp_get_attachment_image_src($image3_2, 'full');
$url3_2 = $image3_2[0];

$image4_1 = wp_get_attachment_image_src($image4_1, 'full');
$url4_1 = $image4_1[0];

$image4_2 = wp_get_attachment_image_src($image4_2, 'full');
$url4_2 = $image4_2[0];

$image5_1 = wp_get_attachment_image_src($image5_1, 'full');
$url5_1 = $image5_1[0];

$image5_2 = wp_get_attachment_image_src($image5_2, 'full');
$url5_2 = $image5_2[0];

$image6_1 = wp_get_attachment_image_src($image6_1, 'full');
$url6_1 = $image6_1[0];

$image6_2 = wp_get_attachment_image_src($image6_2, 'full');
$url6_2 = $image6_2[0];

switch ( $layout ) {
    case 'style_1':
    ?>
        <div class="k2-medical-examination <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>">

            <div class="k2-medical-wrap clearfix">
                
                <div class="step">
                    <a href="#" class="tu-van">
                    <div class="wrap-step">
                        
                        <img src="<?php echo esc_url( $url1_1 ); ?>" alt="Medical 1 1">
                        <img class="transform" src="<?php echo esc_url( $url1_2 ); ?>" alt="Medical 1 2">
                        <p><?php echo esc_attr( $title1 ); ?></p>
                    </div>
                </a>
                </div>
                
                <div class="step">
                    <a href="#" class="tu-van">
                    <div class="wrap-step">
                        
                        <img src="<?php echo esc_url( $url2_1 ); ?>" alt="Medical 2 1">
                        <img class="transform" src="<?php echo esc_url( $url2_2 ); ?>" alt="Medical 2 2">
                        <p><?php echo esc_attr( $title2 ); ?></p>
                    </div>
                </a>
                </div>
                
                <div class="step">
                    <a href="#" class="tu-van">
                    <div class="wrap-step">
                        
                        <img src="<?php echo esc_url( $url3_1 ); ?>" alt="Medical 3 1">
                        <img class="transform" src="<?php echo esc_url( $url3_2 ); ?>" alt="Medical 3 2">
                        <p><?php echo esc_attr( $title3 ); ?></p>
                    </div>
                </a>
                </div>
                
                <div class="step">
                    <a href="#" class="tu-van">
                    <div class="wrap-step">
                        
                        <img src="<?php echo esc_url( $url4_1 ); ?>" alt="Medical 4 1">
                        <img class="transform" src="<?php echo esc_url( $url4_2 ); ?>" alt="Medical 4 2">
                        <p><?php echo esc_attr( $title4 ); ?></p>
                    </div>
                </a>
                </div>
                
                <div class="step">
                    <a href="#" class="tu-van">
                    <div class="wrap-step">
                        
                        <img src="<?php echo esc_url( $url5_1 ); ?>" alt="Medical 5 1">
                        <img class="transform" src="<?php echo esc_url( $url5_2 ); ?>" alt="Medical 5 2">
                        <p><?php echo esc_attr( $title5 ); ?></p>
                    </div>
                </a>
                </div>
                
                <div class="step">
                    <a href="#" class="tu-van">
                    <div class="wrap-step">
                        
                        <img src="<?php echo esc_url( $url6_1 ); ?>" alt="Medical 6 1">
                        <img class="transform" src="<?php echo esc_url( $url6_2 ); ?>" alt="Medical 6 2">
                        <p><?php echo esc_attr( $title6 ); ?></p>
                    </div>
                </a>
                </div>
            </div>
        </div>
    <?php break;
    
    case 'style_2':
    ?>
        <div class="k2-medical-examination2 <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>">
            <span class="start-medical"></span>
            <div class="k2-medical-wrap clearfix">
                
                <div class="step">
                    
                    <div class="wrap-step">
                        <a href="#" class="tu-van">
                        <div class="wrap-image">

                            <img src="<?php echo esc_url( $url1_1 ); ?>" alt="Medical 1 1">
                        </div>
                        </a>
                        <p><?php echo esc_attr( $title1 ); ?></p>
                        <span>Hiểu rõ thông tin và được chuyên gia giải đáp thắc mắc trực tuyến</span>
                    </div>
                </div>
                
                <div class="step">
                    
                    <div class="wrap-step">
                        <a href="#" class="tu-van">
                        <div class="wrap-image">
                            <img src="<?php echo esc_url( $url2_1 ); ?>" alt="Medical 2 1">
                        </div>
                        </a>
                        <p><?php echo esc_attr( $title2 ); ?></p>
                        <span>Chủ động: tự chọn thời gian và bác sĩ mong muốn</span>
                    </div>
                </div>
                
                <div class="step">
                    
                    <div class="wrap-step">
                        <a href="#" class="tu-van">
                        <div class="wrap-image">
                            <img src="<?php echo esc_url( $url3_1 ); ?>" alt="Medical 3 1">
                        </div>
                        </a>
                        <p><?php echo esc_attr( $title3 ); ?></p>
                        <span>Không đợi chờ, thuận tiện cho người đi làm, bận rộn</span>
                    </div>
                </div>
                
                <div class="step">
                    
                    <div class="wrap-step">
                        <a href="#" class="tu-van">
                        <div class="wrap-image">
                            <img src="<?php echo esc_url( $url4_1 ); ?>" alt="Medical 4 1">
                        </div>
                        </a>
                        <p><?php echo esc_attr( $title4 ); ?></p>
                        <span>Phương pháp hiệu quả nhờ thiết bị hiện đại. Bác sĩ giỏi</span>
                    </div>
                </div>
                
                <div class="step">
                    
                    <div class="wrap-step">
                        <a href="#" class="tu-van">
                        <div class="wrap-image">
                            <img src="<?php echo esc_url( $url5_1 ); ?>" alt="Medical 5 1">
                        </div>
                        </a>
                        <p><?php echo esc_attr( $title5 ); ?></p>
                        <span>Không cần nằm viện, tiết kiệm được khoản chi phí điều trị lớn</span>
                    </div>
                </div>
                
                <div class="step">
                    
                    <div class="wrap-step">
                        <a href="#" class="tu-van">
                        <div class="wrap-image">
                            <img src="<?php echo esc_url( $url6_1 ); ?>" alt="Medical 6 1">
                        </div>
                        </a>
                        <p><?php echo esc_attr( $title6 ); ?></p>
                        <span>Đảm bảo hiệu quả lâu dài</span>
                    </div>
                </div>
            </div>
        </div>
    <?php break;
}

?>

