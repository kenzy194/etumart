<?php
	extract(shortcode_atts(array(
	    'values'  => '',
	    'el_class'  => '',
	    'css_animation' => '',
	), $atts));

    $animation_classes = $this->getCSSAnimation( $css_animation );
    $options = (array) vc_param_group_parse_atts( $values );

?>
<div class="k2-slider <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>" id="<?php echo esc_attr($atts['html_id']); ?>">
	
	<div class="cms-carousel owl-carousel owl-theme" data-margin="0" data-loop="true" data-nav="false" data-dots="true" data-autoplay="true" data-large-items="1" data-medium-items="1" data-small-items="1" data-xsmall-items="1">

	    <?php
	        foreach ($options as $key => $value) {

	        	$attachment_image = wp_get_attachment_image_src( $value['select_image'] , 'full');
	    		$image_url = $attachment_image[0];
	    		?>

	    		<div class="item">

					<img src="<?php echo esc_url( $image_url ); ?>" alt="Image Slider">
				</div>
	    		<?php
	        }
	    ?>
	</div>
</div>