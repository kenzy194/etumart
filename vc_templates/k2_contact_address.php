<?php 
extract( shortcode_atts( array(
    'number_phone'  => '',
    'content_address'  => '',
    'css_animation' => '',
	'el_class' => '',
), $atts ) );

$content = !empty( $content_address ) ? rawurldecode( base64_decode( strip_tags( $content_address ) ) ) : '';
$animation_classes = $this->getCSSAnimation( $css_animation );

?>
<div class="k2-contact-address <?php echo esc_attr( $el_class . ' '. $animation_classes );?>">

	<div class="row">
		
		<div class="col-xs-12 col-lg-6">

			<div class="wrap-contact-address">

				
			</div>
		</div>
		<div class="col-xs-12 col-lg-6">

			<div class="wrap-contact-address">
				
			</div>
		</div>
	</div>
	<p><?php echo wp_kses_post( $content ); ?></p>
</div>