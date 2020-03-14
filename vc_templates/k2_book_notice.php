<?php 
	extract(shortcode_atts(array(
	    'number' => '',
	    'number2' => '',
	    'css_animation' => '',
	    'el_class' => '',
	), $atts));

	$animation_classes = $this->getCSSAnimation( $css_animation );
	$img_doctor = get_template_directory_uri() . '/assets/images/docter_03.png';
	$img_item = get_template_directory_uri() . '/assets/images/docter-item_03.png';
	$img_bg1 = get_template_directory_uri() . '/assets/images/docter-item_11.png';
	$img_bg2 = get_template_directory_uri() . '/assets/images/docter-item_07.png';
	$img_phone = get_template_directory_uri() . '/assets/images/phone-old_03.png';
?>

<div class="k2-notice <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>">
	
	<div class="k2-notice-wrap clearfix">

		<div class="notice-left">
			
			<h2>ĐẶT HẸN ONLINE NHẬN NGAY <span>ƯU ĐÃI</span></h2>
			<div class="notice-middle">
				<img src="<?php echo esc_url( $img_bg1 ); ?>" alt="Image Middle">
				<img class="image-sexy" src="<?php echo esc_url( $img_item ); ?>" alt="Image Sexy">
				
				<div class="notice-content">
					<span>- 50%</span>
					<p>Chi phí thăm khám & Điều trị</p>
				</div>
			</div>

			<div class="notice-bottom">
				<img src="<?php echo esc_url( $img_bg2 ); ?>" alt="Image Middle">
				<p>Thương hiệu lớn - Đáng tin cậy</p>
			</div>

			<div class="notice-phone">
				<a href="tel:<?php echo esc_attr( $number2 ); ?>">
					<div class="phone-wrap clearfix">
						<img class="image-phone" src="<?php echo esc_url( $img_phone ); ?>" alt="Image Phone">

						<div class="phone-content">
							<p>HOTLINE</p>
							<span><?php echo esc_attr( $number ); ?></span>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="notice-right">
			
			<img src="<?php echo esc_url( $img_doctor ); ?>" alt="Image Doctor">
		</div>
	</div>
</div>