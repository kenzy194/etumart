<?php

extract(shortcode_atts(array(
    'css_animation' => '',
    'el_class' => '',
), $atts));

$animation_classes = $this->getCSSAnimation( $css_animation );
?>

<div class="k2-breadcumb  <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>">
	<ul>
		<li><a href="<?php echo esc_url(home_url( '/' )); ?>">Trang Chủ</a></li>
		<li><span><?php echo get_the_title(); ?></span></li>
	</ul>
</div>