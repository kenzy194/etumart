<?php
	extract(shortcode_atts(array(
	    'call_support' => '',
	    'maps_support' => '',
	    'content_address' => '',
	    'css_animation' => '',
	    'el_class' => '',
	), $atts));
?>

<div class="k2-guide">
	<h3>Để tìm đường dễ dàng hơn, click ngay:</h3>

	<div class="wrap-guide">
		
		<div class="row">

			<div class="col-xs-12 col-md-6">
				
				<div class="wrap-content phone-support">
					
					<a href="tel:18006953">
						<p>HOTLINE CHỈ ĐƯỜNG</p>
						<span>1800 - 6953</span>
					</a>

					<div class="descrip">
						<span>
							<?php echo esc_attr( $call_support ); ?>
						</span>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-6">
				
				<div class="wrap-content maps-support">
					
					<a href="#" data-toggle="modal" data-target="#k2-maps">
						<p>TÌM ĐƯỜNG ONLINE</p>
						<span>XEM BẢN ĐỒ</span>
					</a>

					<div class="descrip">
						<span>
							<?php echo esc_attr( $maps_support ); ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>