<?php
extract(shortcode_atts(array(
    'fancybox_style' => 'fancybox-1',
    'align_fancy' => 'left',
    'title' => '',
    'description' => '',
    'icon_type' => 'fontawesome',
    'image' => '',
    'bg_fc_color' => '',
    'mar_left' => '',
    'mar_right' => '',
    'title_fc_color' => '',
    'content_fc_color' => '',
    'icon_fc_color' => '',
    'el_class' => '',
    'css_animation' => '',
), $atts));

switch ( $fancybox_style ) {
    case 'fancybox-1':

        // Build the animation classes
        $animation_classes = $this->getCSSAnimation( $css_animation );
        vc_icon_element_fonts_enqueue( $icon_type );
        $icon_name = "icon_" . $icon_type;
        $iconClass = isset($atts[$icon_name]) ? $atts[$icon_name] : 'fa fa-handshake-o';

        $color_icon = !empty( $icon_fc_color ) ? $icon_fc_color : '#1b334d';
        $color_title = !empty( $title_fc_color ) ? $title_fc_color : '#041e37';
        $color_content = !empty( $content_fc_color ) ? $content_fc_color : '#333333';
        ?>
        <div class="fancybox-layout1 <?php echo esc_attr($el_class.' '.$animation_classes);?>" style="background-color: <?php echo esc_attr( $bg_fc_color ); ?>">

            <div class="cms-fancybox-item">

                <div class="cms-fancybox-icon">

                    <i style="color: <?php echo esc_attr( $color_icon ); ?>" class="<?php echo esc_attr($iconClass); ?>"></i>
                </div>

                <div class="cms-fancybox-content">

                    <?php if($title):?>

                        <h3 style="color: <?php echo esc_attr( $color_title ); ?>" class="cms-fancybox-title">

                            <?php echo esc_attr($title);?>
                        </h3>
                    <?php endif;?>

                    <?php if($description): ?>

                        <div style="color: <?php echo esc_attr( $color_content ); ?>" class="cms-fancybox-description">

                            <?php echo wp_kses_post($description);?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php
    break;

    case 'fancybox-2':

        // Build the animation classes
        $animation_classes = $this->getCSSAnimation( $css_animation );
        vc_icon_element_fonts_enqueue( $icon_type );
        $icon_name = "icon_" . $icon_type;
        $iconClass = isset($atts[$icon_name]) ? $atts[$icon_name] : 'fa fa-handshake-o';


        $image_url = '';
        if (!empty($image)) {
            $attachment_image = wp_get_attachment_image_src($image, 'full');
            $image_url = $attachment_image[0];
        }

        $color_icon = !empty( $icon_fc_color ) ? $icon_fc_color : '#1b334d';
        $color_title = !empty( $title_fc_color ) ? $title_fc_color : '#041e37';
        $color_content = !empty( $content_fc_color ) ? $content_fc_color : '#333333';
        $bg_color = !empty( $bg_fc_color ) ? $bg_fc_color : 'transparent';
        ?>
        <div class="fancybox-layout2 <?php echo esc_attr($el_class.' '.$animation_classes);?>" style="background-color: <?php echo esc_attr( $bg_color ); ?>">

            <div class="cms-fancybox-item">

                <?php if($image_url):?>

                    <div class="cms-fancybox-icon">

                        <img src="<?php echo esc_attr($image_url);?>" alt="<?php echo esc_attr__('image fancy','kaily'); ?>"/>
                    </div>
                <?php else:?>
                    <div class="cms-fancybox-icon">

                        <?php if( $iconClass ): ?>

                            <i style="color: <?php echo esc_attr( $color_icon ); ?>" class="<?php echo esc_attr($iconClass); ?>"></i>
                        <?php endif; ?>
                    </div>
                <?php endif;?>

                <div class="cms-fancybox-content">

                    <?php if($title):?>

                        <h3 style="color: <?php echo esc_attr( $color_title ); ?>" class="cms-fancybox-title">

                            <?php echo esc_attr($title);?>
                        </h3>
                    <?php endif;?>

                    <?php if($description): ?>

                        <div style="color: <?php echo esc_attr( $color_content ); ?>" class="cms-fancybox-description">

                            <?php echo wp_kses_post($description);?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php
    break;

    case 'fancybox-3':

        // Build the animation classes
        $animation_classes = $this->getCSSAnimation( $css_animation );
        vc_icon_element_fonts_enqueue( $icon_type );
        $icon_name = "icon_" . $icon_type;
        $iconClass = isset($atts[$icon_name]) ? $atts[$icon_name] : 'fa fa-handshake-o';


        $image_url = '';
        if (!empty($image)) {
            $attachment_image = wp_get_attachment_image_src($image, 'full');
            $image_url = $attachment_image[0];
        }

        $color_icon = !empty( $icon_fc_color ) ? $icon_fc_color : '#1b334d';
        $color_title = !empty( $title_fc_color ) ? $title_fc_color : '#041e37';
        $color_content = !empty( $content_fc_color ) ? $content_fc_color : '#333333';
        $bg_color = !empty( $bg_fc_color ) ? $bg_fc_color : 'transparent';
        ?>
        <div class="fancybox-layout3 <?php echo esc_attr($el_class.' '.$animation_classes);?>" style="background-color: <?php echo esc_attr( $bg_color ); ?>">

            <div class="cms-fancybox-item">

                <?php if($image_url):?>

                    <div class="cms-fancybox-icon">

                        <img src="<?php echo esc_attr($image_url);?>" alt="<?php echo esc_attr__('image fancy','kaily'); ?>" />
                    </div>
                <?php else:?>
                    <div class="cms-fancybox-icon">

                        <?php if( $iconClass ): ?>

                            <i style="color: <?php echo esc_attr( $color_icon ); ?>" class="<?php echo esc_attr($iconClass); ?>"></i>
                        <?php endif; ?>
                    </div>
                <?php endif;?>

                <div class="cms-fancybox-content">

                    <?php if($title):?>

                        <h3 style="color: <?php echo esc_attr( $color_title ); ?>" class="cms-fancybox-title">

                            <?php echo esc_attr($title);?>
                        </h3>
                    <?php endif;?>

                    <?php if($description): ?>

                        <div style="color: <?php echo esc_attr( $color_content ); ?>" class="cms-fancybox-description">

                            <?php echo wp_kses_post($description);?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php
    break;

    case 'fancybox-4':

        // Build the animation classes
        $animation_classes = $this->getCSSAnimation( $css_animation );
        vc_icon_element_fonts_enqueue( $icon_type );
        $icon_name = "icon_" . $icon_type;
        $iconClass = isset($atts[$icon_name]) ? $atts[$icon_name] : 'fa fa-handshake-o';


        $image_url = '';
        if (!empty($image)) {
            $attachment_image = wp_get_attachment_image_src($image, 'full');
            $image_url = $attachment_image[0];
        }

        $color_icon = !empty( $icon_fc_color ) ? $icon_fc_color : '#e9d16f';
        $color_title = !empty( $title_fc_color ) ? $title_fc_color : '#ffffff';
        $color_content = !empty( $content_fc_color ) ? $content_fc_color : '#ffffff';
        $bg_color = !empty( $bg_fc_color ) ? $bg_fc_color : 'transparent';
        $mar_l = !empty( $mar_left ) ? $mar_left : '0';
        $mar_r = !empty( $mar_right ) ? $mar_right : '0';
        ?>
        <div class="fancybox-layout4 <?php echo esc_attr($el_class.' '.$animation_classes.' '. $align_fancy);?>" style="background-color: <?php echo esc_attr( $bg_color ); ?>;margin-left:<?php echo esc_attr( $mar_l ); ?>;margin-right:<?php echo esc_attr( $mar_r ); ?>;">

            <div class="cms-fancybox-item clearfix">

                <?php if($image_url):?>

                    <div class="cms-fancybox-icon">

                        <img src="<?php echo esc_attr($image_url);?>" alt="<?php echo esc_attr__('image fancy','kaily'); ?>" />
                    </div>
                <?php else:?>
                    <div class="cms-fancybox-icon">

                        <?php if( $iconClass ): ?>

                            <i style="color: <?php echo esc_attr( $color_icon ); ?>" class="<?php echo esc_attr($iconClass); ?>"></i>
                        <?php endif; ?>
                    </div>
                <?php endif;?>

                <div class="cms-fancybox-content">

                    <?php if($title):?>

                        <h3 style="color: <?php echo esc_attr( $color_title ); ?>" class="cms-fancybox-title">

                            <?php echo esc_attr($title);?>
                        </h3>
                    <?php endif;?>

                    <?php if($description): ?>

                        <div style="color: <?php echo esc_attr( $color_content ); ?>" class="cms-fancybox-description">

                            <?php echo wp_kses_post($description);?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php
    break;
}