<?php
	extract(shortcode_atts(array(
	    'contact_image' => '',
	    'id_form' => '',
	    'css_animation' => '',
	    'el_class' => '',
	), $atts));

	$attachment_image = wp_get_attachment_image_src( $contact_image , 'full');
	$image_url = $attachment_image[0];
?>

<div class="k2-address-contact">
	
	<div class="wrap-image">
		
		<img src="<?php echo esc_url( $image_url ); ?>" alt="Address Contact">
	</div>
	<div class="wrap-ctf7">

		<?php echo apply_filters('the_content','[contact-form-7 id=" ' . $id_form . ' "]'); ?>
	</div>
</div>