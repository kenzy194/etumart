<?php
	extract(shortcode_atts(array(
	    'values'  => '',
	    'layout'  => 'style_1',
	    'el_class'  => '',
	    'css_animation' => '',
	), $atts));

    $animation_classes = $this->getCSSAnimation( $css_animation );
    $options = (array) vc_param_group_parse_atts( $values );

switch ( $layout ) {
	case 'style_1': ?>
	
	<div class="k2-slider-docter <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>" id="<?php echo esc_attr($atts['html_id']); ?>">
	
		<div class="cms-carousel owl-carousel owl-theme" data-margin="20" data-loop="true" data-nav="true" data-dots="false" data-autoplay="true" data-large-items="4" data-medium-items="3" data-small-items="2" data-xsmall-items="1">

		    <?php
		        foreach ($options as $key => $value) {

		        	$attachment_image = wp_get_attachment_image_src( $value['select_image'] , 'full');
		    		$image_url = $attachment_image[0];

		    		$text_khoa = !empty( $value['text_khoa'] ) ? $value['text_khoa'] : 'Đa Khoa';
		    		$text_year = !empty( $value['text_year'] ) ? $value['text_year'] : '6 Năm';
		    		$text_bang = !empty( $value['text_bang'] ) ? $value['text_bang'] : 'Thạc Sỹ';
		    		?>

		    		<div class="item">

						<img src="<?php echo esc_url( $image_url ); ?>" alt="Image Slider">

						<div class="wrap-content">
							<ul>
								<li>Chuyên Khoa: <span><?php echo esc_attr( $text_khoa ); ?></span></li>
								<li>Năm Kinh Nghiệm: <span><?php echo esc_attr( $text_year ); ?></span></li>
								<li>Bằng Cấp: <span><?php echo esc_attr( $text_bang ); ?></span></li>
							</ul>
						</div>
					</div>
		    		<?php
		        }
		    ?>
		</div>
	</div>
	<?php break;
	
	default: ?>
	<div class="k2-slider-docter <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>" id="<?php echo esc_attr($atts['html_id']); ?>">
	
		<div class="cms-carousel owl-carousel owl-theme" data-margin="20" data-loop="true" data-nav="true" data-dots="false" data-autoplay="true" data-large-items="3" data-medium-items="3" data-small-items="2" data-xsmall-items="1">

		    <?php
		        foreach ($options as $key => $value) {

		        	$attachment_image = wp_get_attachment_image_src( $value['select_image'] , 'full');
		    		$image_url = $attachment_image[0];

		    		$text_note = !empty( $value['text_note'] ) ? $value['text_note'] : 'Phòng Khám';
		    		?>

		    		<div class="item">

						<img src="<?php echo esc_url( $image_url ); ?>" alt="Image Slider">
						<p><?php echo esc_attr( $text_note ); ?></p>
					</div>
		    		<?php
		        }
		    ?>
		</div>
	</div>
	<?php break;
}
?>