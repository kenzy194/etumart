<?php

extract(shortcode_atts(array(
    'text_1' => '',
    'text_2' => '',
    'text_3' => '',
    'text_4' => '',
    'text_5' => '',
    'text_6' => '',
    'text_7' => '',
    'text_8' => '',
    'css_animation' => '',
    'el_class' => '',
), $atts));

?>

<div class="k2-ruler">

	<div class="row-up clearfix">
		
		<div class="hex">
			
			<div class="hex-content">
				
				<div class="wrap-content">

					<span class="hex-number">1</span>
					<span class="hex-text"><?php echo esc_attr( $text_1 ); ?></span>
				</div>
			</div>
		</div>
		<div class="hex">
			
			<div class="hex-content">
				
				<div class="wrap-content">

					<span class="hex-number">2</span>
					<span class="hex-text"><?php echo esc_attr( $text_2 ); ?></span>
				</div>
			</div>
		</div>
		<div class="hex">
			
			<div class="hex-content">
				
				<div class="wrap-content">

					<span class="hex-number">3</span>
					<span class="hex-text"><?php echo esc_attr( $text_3 ); ?></span>
				</div>
			</div>
		</div>
		<div class="hex hex-4">
			
			<div class="hex-content">
				
				<div class="wrap-content">

					<span class="hex-number">4</span>
					<span class="hex-text"><?php echo esc_attr( $text_4 ); ?></span>
				</div>
			</div>
		</div>
		<div class="hex hex-2">
			
			<div class="hex-content">
				
				<div class="wrap-content">

					<span class="hex-number">5</span>
					<span class="hex-text"><?php echo esc_attr( $text_5 ); ?></span>
				</div>
			</div>
		</div>

		<div class="hex">
			
			<div class="hex-content">
				
				<div class="wrap-content">

					<span class="hex-number">6</span>
					<span class="hex-text"><?php echo esc_attr( $text_6 ); ?></span>
				</div>
			</div>
		</div>

		<div class="hex">
			
			<div class="hex-content">
				
				<div class="wrap-content">

					<span class="hex-number">7</span>
					<span class="hex-text"><?php echo esc_attr( $text_7 ); ?></span>
				</div>
			</div>
		</div>

		<div class="hex">
			
			<div class="hex-content">
				
				<div class="wrap-content">

					<span class="hex-number">8</span>
					<span class="hex-text"><?php echo esc_attr( $text_8 ); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>