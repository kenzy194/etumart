<?php 
extract(shortcode_atts(array(
    'link_button' => '',
    'live_style' => 'style-1',
), $atts));

$live_1 = get_template_directory_uri() . '/assets/images/live_1.gif';
$live_2 = get_template_directory_uri() . '/assets/images/live_2.gif';

$rd = rand(1,2);
$live_style = 'style-' . $rd;

switch ( $live_style ) {
	case 'style-1':
		?>
		<div class="live-chat">

			<a href="#" class="tu-van">

				<div class="wrap-content">

					<div class="wrap-img">

						<img src="<?php echo esc_url( $live_1 ); ?>" alt="Live chat">
					</div>
				</div>
			</a>
		</div>
		<?php
		break;
	
	case 'style-2':
		?>
		<div class="live-chat">

			<a href="#" class="tu-van">

				<div class="wrap-content">

					<div class="wrap-img">

						<img src="<?php echo esc_url( $live_2 ); ?>" alt="Live chat">
					</div>
				</div>
			</a>
		</div>
		<?php
		break;
	
	case 'style-3':
		?>
		<div class="live-chat">

			<a href="#" class="tu-van">

				<div class="wrap-content">

					<div class="wrap-img">

						<img src="<?php echo esc_url( $live_3 ); ?>" alt="Live chat">
					</div>
				</div>
			</a>
		</div>
		<?php
		break;
}
?>

