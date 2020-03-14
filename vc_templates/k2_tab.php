<?php

extract( shortcode_atts( array(
    'titte_tabs'  => '',
    'titte_tabs2'  => '',
	'select_image'  => '',
    'values' => '',
    'css_animation' => '',
	'el_class' => '',
), $atts ) );

$animation_classes = $this->getCSSAnimation( $css_animation );
$options = (array) vc_param_group_parse_atts( $values );

$attachment_image = wp_get_attachment_image_src($select_image, 'full');
$image_url = $attachment_image[0];

?>
<div class="k2-tabs <?php echo esc_attr( $el_class . ' '. $animation_classes );?>">

    <div class="clearfix wrap-k2-tabs">
        
        <div class="nav-tabs">
            <div class="wrap-title-tabs">
                <h4><?php echo esc_attr( $titte_tabs ); ?></h4>
            </div>

            <ul>
                <?php
                $i = 1;
                foreach ($options as $key => $value) :
                    $class_title = ( $i == 1) ? 'active' : '';
                    ?>
                    <li class="<?php echo esc_attr( $class_title ); ?>">
                        <a data-toggle="tab" href="#k2tab<?php echo esc_attr( $i ); ?>"><span><?php echo esc_attr( $value['title_tab'] ); ?></span></a>
                    </li>
                <?php
                $i++;
                endforeach; ?>
            </ul>
            
            <?php if( !empty( $titte_tabs2 ) ) : ?>

                <div class="wrap-title-tabs2">
                    
                    <div class="wrap-title">

                        <h5><?php echo esc_attr( $titte_tabs2 ); ?></h5>
                    </div>

                    <img src="<?php echo esc_html( $image_url ); ?>" alt="Image Tab">
                </div>
            <?php endif; ?>
        </div>

        <div class="tab-content">
            <?php
            $i = 1;
            foreach ($options as $key => $value) :

                $attachment_image = wp_get_attachment_image_src( $value['image_tab'] , 'full');
                $image_url = $attachment_image[0];
                $class_tabs = ( $i == 1) ? ' fade in active' : '';


                $content = !empty( $value['content_tab2'] ) ? rawurldecode( base64_decode( strip_tags( $value['content_tab2'] ) ) ) : '';
                ?>

                <div id="k2tab<?php echo esc_attr( $i ); ?>" class="tab-pane<?php echo esc_attr( $class_tabs ); ?>">

                    <h3><?php echo esc_attr( $value['title_content'] ); ?></h3>
                    <p><?php echo wp_kses_post( $content ); ?></p>

                    <div class="wrap-img-tab">

                        <img src="<?php echo esc_url( $image_url ); ?>" alt="Image Tabs">
                    </div>
                </div>
            <?php
            $i++;
            endforeach; ?>
        </div>
    </div>
</div>
