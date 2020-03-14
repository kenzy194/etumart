<?php
extract(shortcode_atts(array(
    'contact_style' => 'style-home',
    'hot_image' => '',
    'number_show' => '',
    'number_click' => '#',
    'con_image' => '',
    'con_link' => '#',
    'con_1' => '',
    'con_2' => '',
    'fb_image' => '',
    'fb_link' => '#',
    'fb_1' => '',
    'fb_2' => '',
    'za_image' => '',
    'za_link' => '#',
    'za_1' => '',
    'za_2' => '',
    'emai_image' => '',
    'emai_link' => 'mailto:phongkhamdakhoakinhdo79@gmail.com',
    'emai_1' => '',
    'emai_2' => '',
    'css_animation' => '',
), $atts));

$animation_classes = $this->getCSSAnimation( $css_animation );

$attachment_image = wp_get_attachment_image_src($hot_image, 'full');
$hot_url = $attachment_image[0];

$attachment_image = wp_get_attachment_image_src($con_image, 'full');
$con_url = $attachment_image[0];

$attachment_image = wp_get_attachment_image_src($fb_image, 'full');
$fb_url = $attachment_image[0];

$attachment_image = wp_get_attachment_image_src($za_image, 'full');
$za_url = $attachment_image[0];

$attachment_image = wp_get_attachment_image_src($emai_image, 'full');
$emai_url = $attachment_image[0];

switch ( $contact_style ) {
    case 'style-home':
    ?>
    <div class="k2-contact <?php echo esc_attr( $animation_classes ); ?>">

        <div class="wrap-contact clearfix">

            <div class="k2-cont hotline">
                
                <a href="tel:<?php echo esc_attr( $number_click ); ?>">

                    <div class="k2-con--content">
                        
                        <img src="<?php echo esc_url( $hot_url ); ?>" alt="HotLine">

                        <div class="k2-con--info">

                            <p>HOTLINE</p>
                            <span><?php echo esc_attr( $number_show ); ?></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="k2-cont contact">
                
                <a rel="nofollow" href="<?php echo esc_attr( $con_link ); ?>">

                    <div class="k2-con--content">
                        
                        <img src="<?php echo esc_url( $con_url ); ?>" alt="Contact">

                        <div class="k2-con--info">

                            <p><?php echo esc_attr( $con_1 ); ?></p>
                            <span><?php echo esc_attr( $con_2 ); ?></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="k2-cont faceboo">
                
                <a rel="nofollow" href="<?php echo esc_attr( $fb_link ); ?>">

                    <div class="k2-con--content">
                        
                        <img src="<?php echo esc_url( $fb_url ); ?>" alt="Contact">

                        <div class="k2-con--info">

                            <p>&nbsp;</p>
                            <span><?php echo esc_attr( $fb_2 ); ?></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="k2-cont zaloo">
                
                <a rel="nofollow" href="<?php echo esc_attr( $za_link ); ?>">

                    <div class="k2-con--content">
                        
                        <img src="<?php echo esc_url( $za_url ); ?>" alt="Contact">

                        <div class="k2-con--info">

                            <p>&nbsp;</p>
                            <span><?php echo esc_attr( $za_2 ); ?></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="k2-cont emaill">
                
                <a href="<?php echo esc_attr( $emai_link ); ?>">

                    <div class="k2-con--content">
                        
                        <img src="<?php echo esc_url( $emai_url ); ?>" alt="Contact">

                        <div class="k2-con--info">

                            <p>&nbsp;</p>
                            <span><?php echo esc_attr( $emai_2 ); ?></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
        # code...
        break;
    
    case 'style-man':
    ?>
    <div class="k2-contact-2 <?php echo esc_attr( $animation_classes ); ?>">

        <div class="wrap-contact clearfix">

            <div class="k2-cont hotline">
                
                <a rel="nofollow" href="tel:<?php echo esc_attr( $number_click ); ?>">

                    <div class="k2-con--content">
                        
                        <img src="<?php echo esc_url( $hot_url ); ?>" alt="HotLine">

                        <div class="k2-con--info">

                            <p>HOTLINE</p>
                            <span><?php echo esc_attr( $number_show ); ?></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="k2-cont contact">
                
                <a rel="nofollow" href="<?php echo esc_attr( $con_link ); ?>">

                    <div class="k2-con--content">
                        
                        <img src="<?php echo esc_url( $con_url ); ?>" alt="Contact">

                        <div class="k2-con--info">

                            <p><?php echo esc_attr( $con_1 ); ?></p>
                            <span><?php echo esc_attr( $con_2 ); ?></span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="k2-cont faceboo">
                
                <a rel="nofollow" href="<?php echo esc_attr( $fb_link ); ?>">

                    <div class="k2-con--content">
                        
                        <img src="<?php echo esc_url( $fb_url ); ?>" alt="Contact">

                        <div class="k2-con--info">

                            <p><?php echo esc_attr( $fb_1 ); ?></p>
                            <span><?php echo esc_attr( $fb_2 ); ?></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
        # code...
        break;
}
?>
