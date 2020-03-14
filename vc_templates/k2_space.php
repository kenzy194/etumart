<?php
extract(shortcode_atts(array(
    'space_value'  => '',
    'el_class'  => '',
), $atts));

?>

<div class="k2-space <?php echo esc_attr( $el_class ); ?>">
	<div style="height: <?php echo esc_attr( $space_value ); ?>px;display: block;"></div>
</div>