<?php
extract(shortcode_atts(array(
    'heading_single'  => '',
    'el_class'  => '',
), $atts));

?>

<div class="k2-heading-single <?php echo esc_attr( $el_class ); ?>">
	<h2><?php echo esc_attr( $heading_single ); ?></h2>
</div>