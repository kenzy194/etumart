<?php

	extract(shortcode_atts(array(
        'layout' => 'style_1',
        'el_link' => '#',
	    'select_image' => '',
	    'css_animation' => '',
	    'el_class' => '',
	), $atts));

    $animation_classes = $this->getCSSAnimation( $css_animation );

    $attachment_image = wp_get_attachment_image_src($select_image, 'full');
    $image_url = $attachment_image[0];

switch ( $layout ) {
    case 'style_1': ?>
        <div class="k2-image <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>" id="<?php echo esc_attr($atts['html_id']); ?>">

            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr__('K2 image','kaily'); ?>">
        </div>
    <?php break;

    case 'style_2': ?>
        <div class="k2-image-2 <?php echo esc_attr( $animation_classes ); ?>" id="<?php echo esc_attr($atts['html_id']); ?>">

            <a href="<?php echo esc_url( $el_link ); ?>" class="<?php echo esc_attr( $el_class ); ?>">
                
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr__('K2 image','kaily'); ?>">
            </a>
        </div>
    <?php break;
}
?>
