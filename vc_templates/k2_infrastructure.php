<?php
	extract(shortcode_atts(array(
	    'values'  => '',
	    'el_class'  => '',
	    'css_animation' => '',
	), $atts));

    $animation_classes = $this->getCSSAnimation( $css_animation );
    $options = (array) vc_param_group_parse_atts( $values );

    wp_enqueue_style( 'kaily-swiper' );
    wp_enqueue_script('kaily-swiper-js', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery'), '4.4.1', true);

?>
<div class="k2-infrastructure <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>" id="<?php echo esc_attr($atts['html_id']); ?>">
	
	<div class="cms-carousel owl-carousel owl-theme" data-margin="0" data-loop="true" data-nav="false" data-dots="true" data-autoplay="true" data-large-items="1" data-medium-items="1" data-small-items="1" data-xsmall-items="1">

	    
	</div>

	<div class="swiper-container">

	    <div class="swiper-wrapper">
	      <!-- <div class="swiper-slide" style="background-image:url(http://lorempixel.com/600/600/nature/1)"></div> -->
	      
	      	<?php
		        foreach ($options as $key => $value) {

		        	$attachment_image = wp_get_attachment_image_src( $value['select_image'] , 'full');
		    		$image_url = $attachment_image[0];
		    		?>

		    		<div class="swiper-slide">

						<img src="<?php echo esc_url( $image_url ); ?>" alt="Image Slider">
					</div>
		    		<?php
		        }
		    ?>
	    </div>
	    <!-- Add Pagination -->
	    <div class="swiper-pagination"></div>
  	</div>
</div>