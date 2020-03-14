<?php
	extract(shortcode_atts(array(
	    'name_v_1' => '',
	    'img_1' => '',
	    's_1_1' => '',
	    's_1_2' => '',
	    's_1_3' => '',
	    's_1_4' => '',
	    'l_1_1' => '#',
	    'l_1_2' => '#',
	    'l_1_3' => '#',
	    'l_1_4' => '#',

	    'name_v_2' => '',
	    'img_2' => '',
	    's_2_1' => '',
	    's_2_2' => '',
	    's_2_3' => '',
	    's_2_4' => '',
	    'l_2_1' => '#',
	    'l_2_2' => '#',
	    'l_2_3' => '#',
	    'l_2_4' => '#',

	    'name_v_3' => '',
	    'img_3' => '',
	    's_3_1' => '',
	    's_3_2' => '',
	    's_3_3' => '',
	    's_3_4' => '',
	    'l_3_1' => '#',
	    'l_3_2' => '#',
	    'l_3_3' => '#',
	    'l_3_4' => '#',

	    'name_v_4' => '',
	    'img_4' => '',
	    's_4_1' => '',
	    's_4_2' => '',
	    's_4_3' => '',
	    's_4_4' => '',
	    's_4_5' => '',
	    'l_4_1' => '#',
	    'l_4_2' => '#',
	    'l_4_3' => '#',
	    'l_4_4' => '#',
	    'l_4_5' => '#',

	    'css_animation' => '',
	    'el_class' => '',
	), $atts));


    $animation_classes = $this->getCSSAnimation( $css_animation );
    
    $attachment_image_1 = wp_get_attachment_image_src($img_1, 'full');

    if( !empty( $attachment_image_1[0] ) ) {

    	$image_url_1 = $attachment_image_1[0];
    } else {

    	$image_url_1 = '';
    }
    
    $attachment_image_2 = wp_get_attachment_image_src($img_2, 'full');

    if( !empty( $attachment_image_2[0] ) ) {

    	$image_url_2 = $attachment_image_2[0];
    } else {

    	$image_url_2 = '';
    }
    
    $attachment_image_3 = wp_get_attachment_image_src($img_3, 'full');

    if( !empty( $attachment_image_3[0] ) ) {

    	$image_url_3 = $attachment_image_3[0];
    } else {

    	$image_url_3 = '';
    }
    
    $attachment_image_4 = wp_get_attachment_image_src($img_4, 'full');

    if( !empty( $attachment_image_4[0] ) ) {

    	$image_url_4 = $attachment_image_4[0];
    } else {

    	$image_url_4 = '';
    }

?>
<div class="k2-object-social-disease <?php echo esc_attr($el_class.' '.$animation_classes ); ?>">
	<div class="row">
		
		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-offset-0 col-lg-6">

			<div class="wrap-object clearfix">

				<div class="wrap-left">
					
					<div class="content-left">

						<img src="<?php echo esc_url( $image_url_1 ); ?>" alt="Benh 1">
						<h4><?php echo esc_attr( $name_v_1 ); ?></h4>
					</div>
				</div>

				<div class="wrap-right">
					
					<div class="sick-wrap">
						<a href="<?php echo esc_url( $l_1_1 ); ?>">
							<div class="sick-wrap-content">
								
								<p><?php echo esc_attr( $s_1_1 ); ?></p>
							</div>
						</a>
					</div>

					<div class="sick-wrap">
						<a href="<?php echo esc_url( $l_1_2 ); ?>">
							<div class="sick-wrap-content">

								<p><?php echo esc_attr( $s_1_2 ); ?></p>
							</div>
						</a>
					</div>

					<div class="sick-wrap">
						<a href="<?php echo esc_url( $l_1_3 ); ?>">
							<div class="sick-wrap-content">
								
								<p><?php echo esc_attr( $s_1_3 ); ?></p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-offset-0 col-lg-6">

			<div class="wrap-object clearfix">

				<div class="wrap-left">
					
					<div class="content-left">

						<img src="<?php echo esc_url( $image_url_2 ); ?>" alt="Benh 2">
						<h4><?php echo esc_attr( $name_v_2 ); ?></h4>
					</div>
				</div>

				<div class="wrap-right">
					
					<div class="sick-wrap">
						<a href="<?php echo esc_url( $l_2_1 ); ?>">
							<div class="sick-wrap-content">
								
								<p><?php echo esc_attr( $s_2_1 ); ?></p>
							</div>
						</a>
					</div>

					<div class="sick-wrap">
						<a href="<?php echo esc_url( $l_2_2 ); ?>">
							<div class="sick-wrap-content">

								<p><?php echo esc_attr( $s_2_2 ); ?></p>
							</div>
						</a>
					</div>

					<div class="sick-wrap">
						<a href="<?php echo esc_url( $l_2_3 ); ?>">
							<div class="sick-wrap-content">
								
								<p><?php echo esc_attr( $s_2_3 ); ?></p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-offset-0 col-lg-6">

			<div class="wrap-object clearfix">

				<div class="wrap-left">
					
					<div class="content-left">

						<img src="<?php echo esc_url( $image_url_3 ); ?>" alt="Benh 3">
						<h4><?php echo esc_attr( $name_v_3 ); ?></h4>
					</div>
				</div>

				<div class="wrap-right">
					
					<div class="sick-wrap">
						<a href="<?php echo esc_url( $l_3_1 ); ?>">
							<div class="sick-wrap-content sick-wrap-content-2">
								
								<p><?php echo esc_attr( $s_3_1 ); ?></p>
							</div>
						</a>
					</div>

					<div class="sick-wrap">
						<a href="<?php echo esc_url( $l_3_2 ); ?>">
							<div class="sick-wrap-content sick-wrap-content-2">

								<p><?php echo esc_attr( $s_3_2 ); ?></p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-offset-0 col-lg-6">

			<div class="wrap-object wrap-object-backout clearfix">

				<div class="wrap-left">
					
					<div class="content-left">

						<img src="<?php echo esc_url( $image_url_4 ); ?>" alt="Benh 4">
						<h4><?php echo esc_attr( $name_v_4 ); ?></h4>
					</div>
				</div>

				<div class="wrap-right">
					
					<div class="content-right clearfix">

						<div class="sick-wrap">
							<a href="<?php echo esc_url( $l_4_1 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_4_1 ); ?></p>
								</div>
							</a>
						</div>

						<div class="sick-wrap">
							<a href="<?php echo esc_url( $l_4_2 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_4_2 ); ?></p>
								</div>
							</a>
						</div>

						<div class="sick-wrap">
							<a href="<?php echo esc_url( $l_4_3 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_4_3 ); ?></p>
								</div>
							</a>
						</div>

						<div class="sick-wrap">
							<a href="<?php echo esc_url( $l_4_4 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_4_4 ); ?></p>
								</div>
							</a>
						</div>
					</div>

					<div class="sick-wrap-bottom">
						<a href="<?php echo esc_url( $l_4_5 ); ?>">
							<div class="sick-wrap-content">
								
								<p><?php echo esc_attr( $s_4_5 ); ?></p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>