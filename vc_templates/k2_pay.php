<?php
    extract(shortcode_atts(array(
        'image_1'=> '',
        'title_1'=> '',
        'title_12'=> '',
        'image_2'=> '',
        'title_2'=> '',
        'title_22'=> '',
        'image_3'=> '',
        'title_3'=> '',
        'title_32'=> '',
        'image_4'=> '',
        'title_4'=> '',
        'title_42'=> '',
        'image_5'=> '',
        'title_5'=> '',
        'title_52'=> '',
        'css_animation'     => '',
        'el_class'     => '',
    ), $atts) );

    $animation_classes = $this->getCSSAnimation( $css_animation );

    $attachment_image = wp_get_attachment_image_src( $image_1, 'full');
	$image_1 = $attachment_image[0];

    $attachment_image = wp_get_attachment_image_src( $image_2, 'full');
	$image_2 = $attachment_image[0];

    $attachment_image = wp_get_attachment_image_src( $image_3, 'full');
	$image_3 = $attachment_image[0];

    $attachment_image = wp_get_attachment_image_src( $image_4, 'full');
	$image_4 = $attachment_image[0];

    $attachment_image = wp_get_attachment_image_src( $image_5, 'full');
	$image_5 = $attachment_image[0];
?>

<div class="k2-pay <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>">

	<div class="wrap-pay">

		<div class="wrap-item">
			<div class="wrap-image">
				<img src="<?php echo esc_url( $image_1 ); ?>" alt="Image Pay">
			</div>
			<p><?php echo esc_attr( $title_1 ); ?></p>
			<p><?php echo esc_attr( $title_12 ); ?></p>
		</div>

		<div class="wrap-item">
			<div class="wrap-image pay-add">
				<img src="<?php echo esc_url( $image_2 ); ?>" alt="Image Pay">
			</div>
			<p><?php echo esc_attr( $title_2 ); ?></p>
			<p><?php echo esc_attr( $title_22 ); ?></p>
		</div>

		<div class="wrap-item">
			<div class="wrap-image pay-add">
				<img src="<?php echo esc_url( $image_3 ); ?>" alt="Image Pay">
			</div>
			<p><?php echo esc_attr( $title_3 ); ?></p>
			<p><?php echo esc_attr( $title_32 ); ?></p>
		</div>

		<div class="wrap-item">
			<div class="wrap-image pay-minus">
				<img src="<?php echo esc_url( $image_4 ); ?>" alt="Image Pay">
			</div>
			<p><?php echo esc_attr( $title_4 ); ?></p>
			<p><?php echo esc_attr( $title_42 ); ?></p>
		</div>

		<div class="wrap-item">
			<div class="wrap-image pay-total">
				<img src="<?php echo esc_url( $image_5 ); ?>" alt="Image Pay">
			</div>
			<p><?php echo esc_attr( $title_5 ); ?></p>
			<p><?php echo esc_attr( $title_52 ); ?></p>
		</div>
	</div>
</div>