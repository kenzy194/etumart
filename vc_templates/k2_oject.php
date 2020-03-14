<?php
	extract(shortcode_atts(array(
	    'name_v_1' => '',
	    'name_e_1' => '',
	    'img_1' => '',
	    's_1_1' => '',
	    's_1_2' => '',
	    's_1_3' => '',
	    's_1_4' => '',
	    'l_1_1' => '#',
	    'l_1_2' => '#',
	    'l_1_3' => '#',
	    'l_1_4' => '#',
	    'ques_1' => '',
	    'link_1' => '',

	    'name_v_2' => '',
	    'name_e_2' => '',
	    'img_2' => '',
	    's_2_1' => '',
	    's_2_2' => '',
	    's_2_3' => '',
	    's_2_4' => '',
	    'l_2_1' => '#',
	    'l_2_2' => '#',
	    'l_2_3' => '#',
	    'l_2_4' => '#',
	    'ques_2' => '',
	    'link_2' => '',

	    'name_v_3' => '',
	    'name_e_3' => '',
	    'img_3' => '',
	    's_3_1' => '',
	    's_3_2' => '',
	    's_3_3' => '',
	    's_3_4' => '',
	    'l_3_1' => '#',
	    'l_3_2' => '#',
	    'l_3_3' => '#',
	    'l_3_4' => '#',
	    'ques_3' => '',
	    'link_3' => '',

	    'name_v_4' => '',
	    'name_e_4' => '',
	    'img_4' => '',
	    's_4_1' => '',
	    's_4_2' => '',
	    's_4_3' => '',
	    's_4_4' => '',
	    'l_4_1' => '#',
	    'l_4_2' => '#',
	    'l_4_3' => '#',
	    'l_4_4' => '#',
	    'ques_4' => '',
	    'link_4' => '',

	    'name_v_5' => '',
	    'name_e_5' => '',
	    'img_5' => '',
	    's_5_1' => '',
	    's_5_2' => '',
	    's_5_3' => '',
	    's_5_4' => '',
	    'l_5_1' => '#',
	    'l_5_2' => '#',
	    'l_5_3' => '#',
	    'l_5_4' => '#',
	    'ques_5' => '',
	    'link_5' => '',

	    'name_v_6' => '',
	    'name_e_6' => '',
	    'img_6' => '',
	    's_6_1' => '',
	    's_6_2' => '',
	    's_6_3' => '',
	    's_6_4' => '',
	    'l_6_1' => '#',
	    'l_6_2' => '#',
	    'l_6_3' => '#',
	    'l_6_4' => '#',
	    'ques_6' => '',
	    'link_6' => '',

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

    $a_href_1 = $a_title_1 = $a_target_1 = '';
    $link = vc_build_link( $link_1 );
    if ( strlen( $link['url'] ) > 0 ) {
        $a_href_1 = $link['url'];
        $a_title_1 = (!empty($link['title'])) ? $link['title'] : esc_html__('Tư Vấn', 'kaily');
        $a_target_1 = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
    }
    
    $attachment_image_2 = wp_get_attachment_image_src($img_2, 'full');

    if( !empty( $attachment_image_2[0] ) ) {

    	$image_url_2 = $attachment_image_2[0];
    } else {

    	$image_url_2 = '';
    }

    $a_href_2 = $a_title_2 = $a_target_2 = '';
    $link_2 = vc_build_link( $link_2 );
    if ( strlen( $link_2['url'] ) > 0 ) {
        $a_href_2 = $link_2['url'];
        $a_title_2 = (!empty($link_2['title'])) ? $link_2['title'] : esc_html__('Tư Vấn', 'kaily');
        $a_target_2 = strlen( $link_2['target'] ) > 0 ? $link_2['target'] : '_self';
    }
    
    $attachment_image_3 = wp_get_attachment_image_src($img_3, 'full');

    if( !empty( $attachment_image_3[0] ) ) {

    	$image_url_3 = $attachment_image_3[0];
    } else {

    	$image_url_3 = '';
    }

    $a_href_3 = $a_title_3 = $a_target_3 = '';
    $link_3 = vc_build_link( $link_3 );
    if ( strlen( $link_3['url'] ) > 0 ) {
        $a_href_3 = $link_3['url'];
        $a_title_3 = (!empty($link_3['title'])) ? $link_3['title'] : esc_html__('Tư Vấn', 'kaily');
        $a_target_3 = strlen( $link_3['target'] ) > 0 ? $link_3['target'] : '_self';
    }
    
    $attachment_image_4 = wp_get_attachment_image_src($img_4, 'full');

    if( !empty( $attachment_image_4[0] ) ) {

    	$image_url_4 = $attachment_image_4[0];
    } else {

    	$image_url_4 = '';
    }

    $a_href_4 = $a_title_4 = $a_target_4 = '';
    $link_4 = vc_build_link( $link_4 );
    if ( strlen( $link_4['url'] ) > 0 ) {
        $a_href_4 = $link_4['url'];
        $a_title_4 = (!empty($link_4['title'])) ? $link_4['title'] : esc_html__('Tư Vấn', 'kaily');
        $a_target_4 = strlen( $link_4['target'] ) > 0 ? $link_4['target'] : '_self';
    }
    
    $attachment_image_5 = wp_get_attachment_image_src($img_5, 'full');

    if( !empty( $attachment_image_5[0] ) ) {

    	$image_url_5 = $attachment_image_5[0];
    } else {

    	$image_url_5 = '';
    }

    $a_href_5 = $a_title_5 = $a_target_5 = '';
    $link_5 = vc_build_link( $link_5 );
    if ( strlen( $link_5['url'] ) > 0 ) {
        $a_href_5 = $link_5['url'];
        $a_title_5 = (!empty($link_5['title'])) ? $link_5['title'] : esc_html__('Tư Vấn', 'kaily');
        $a_target_5 = strlen( $link_5['target'] ) > 0 ? $link_5['target'] : '_self';
    }

    $attachment_image_6 = wp_get_attachment_image_src($img_6, 'full');

    if( !empty( $attachment_image_6[0] ) ) {

    	$image_url_6 = $attachment_image_6[0];
    } else {

    	$image_url_6 = '';
    }

    $a_href_6 = $a_title_6 = $a_target_6 = '';
    $link_6 = vc_build_link( $link_6 );
    if ( strlen( $link_6['url'] ) > 0 ) {
        $a_href_6 = $link_6['url'];
        $a_title_6 = (!empty($link_6['title'])) ? $link_6['title'] : esc_html__('Tư Vấn', 'kaily');
        $a_target_6 = strlen( $link_6['target'] ) > 0 ? $link_6['target'] : '_self';
    }
?>
<div class="k2-object <?php echo esc_attr($el_class.' '.$animation_classes ); ?>">
	<div class="row">
		
		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-offset-0 col-lg-6">

			<div class="wrap-object">
				
				<div class="wrap-top clearfix">

					<div class="wrap-left">

						<div class="wrap-left--content">
							<img src="<?php echo esc_url( $image_url_1 ); ?>" alt="Benh 1">
							<h4><?php echo esc_attr( $name_v_1 ); ?></h4>
						</div>
					</div>

					<div class="wrap-right clearfix">
						
						<div class="right-top clearfix">
							
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
						</div>
						
						<div class="right-bottom clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_1_3 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_1_3 ); ?></p>
								</div>
							</a>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_1_4 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_1_4 ); ?></p>
								</div></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="wrap-bottom">
					
					<p><?php echo esc_attr( $ques_1 ); ?></p>

					<a class="tu-van" href="<?php echo esc_attr( $a_href_1 ); ?>"><?php echo esc_attr( $a_title_1 ); ?></a>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-offset-0 col-lg-6">

			<div class="wrap-object">
				
				<div class="wrap-top clearfix">

					<div class="wrap-left">

						<div class="wrap-left--content">
							<img src="<?php echo esc_url( $image_url_2 ); ?>" alt="Benh 2">
							<h4><?php echo esc_attr( $name_v_2 ); ?></h4>
						</div>
					</div>

					<div class="wrap-right clearfix">
						
						<div class="right-top clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_2_1 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_2_1 ); ?></p>
								</div></a>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_2_2 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_2_2 ); ?></p>
								</div></a>
							</div>
						</div>
						
						<div class="right-bottom clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_2_3 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_2_3 ); ?></p>
								</div></a>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_2_4 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_2_4 ); ?></p>
								</div></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="wrap-bottom">
					
					<p><?php echo esc_attr( $ques_2 ); ?></p>

					<a class="tu-van" href="<?php echo esc_attr( $a_href_2 ); ?>"><?php echo esc_attr( $a_title_2 ); ?></a>
				</div>
			</div>
		</div>
	</div>	

	<div class="row">
		
		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-offset-0 col-lg-6">

			<div class="wrap-object">
				
				<div class="wrap-top clearfix">

					<div class="wrap-left">

						<div class="wrap-left--content">
							<img src="<?php echo esc_url( $image_url_3 ); ?>" alt="Benh 3">
							<h4><?php echo esc_attr( $name_v_3 ); ?></h4>
						</div>
					</div>

					<div class="wrap-right clearfix">
						
						<div class="right-top clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_3_1 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_3_1 ); ?></p>
								</div></a>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_3_2 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_3_2 ); ?></p>
								</div></a>
							</div>
						</div>
						
						<div class="right-bottom clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_3_3 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_3_3 ); ?></p>
								</div></a>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_3_4 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_3_4 ); ?></p>
								</div></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="wrap-bottom">
					
					<p><?php echo esc_attr( $ques_3 ); ?></p>

					<a class="tu-van" href="<?php echo esc_attr( $a_href_3 ); ?>"><?php echo esc_attr( $a_title_3 ); ?></a>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-offset-0 col-lg-6">

			<div class="wrap-object">
				
				<div class="wrap-top clearfix">

					<div class="wrap-left">

						<div class="wrap-left--content">
							<img src="<?php echo esc_url( $image_url_4 ); ?>" alt="Benh 4">
							<h4><?php echo esc_attr( $name_v_4 ); ?></h4>
						</div>
					</div>

					<div class="wrap-right clearfix">
						
						<div class="right-top clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_4_1 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_4_1 ); ?></p>
								</div></a>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_4_2 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_4_2 ); ?></p>
								</div></a>
							</div>
						</div>
						
						<div class="right-bottom clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_4_3 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_4_3 ); ?></p>
								</div>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_4_4 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_4_4 ); ?></p>
								</div></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="wrap-bottom">
					
					<p><?php echo esc_attr( $ques_4 ); ?></p>

					<a class="tu-van" href="<?php echo esc_attr( $a_href_4 ); ?>"><?php echo esc_attr( $a_title_4 ); ?></a>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		
		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-offset-0 col-lg-6">

			<div class="wrap-object">
				
				<div class="wrap-top clearfix">

					<div class="wrap-left">

						<div class="wrap-left--content">
							<img src="<?php echo esc_url( $image_url_5 ); ?>" alt="Benh 5">
							<h4><?php echo esc_attr( $name_v_5 ); ?></h4>
						</div>
					</div>

					<div class="wrap-right clearfix">
						
						<div class="right-top clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_5_1 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_5_1 ); ?></p>
								</div></a>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_5_2 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_5_2 ); ?></p>
								</div></a>
							</div>
						</div>
						
						<div class="right-bottom clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_5_3 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_5_3 ); ?></p>
								</div></a>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_5_4 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_5_4 ); ?></p>
								</div></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="wrap-bottom">
					
					<p><?php echo esc_attr( $ques_5 ); ?></p>

					<a class="tu-van" href="<?php echo esc_attr( $a_href_5 ); ?>"><?php echo esc_attr( $a_title_5 ); ?></a>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-offset-0 col-lg-6">

			<div class="wrap-object">
				
				<div class="wrap-top clearfix">

					<div class="wrap-left">

						<div class="wrap-left--content">
							<img src="<?php echo esc_url( $image_url_6 ); ?>" alt="Benh 6">
							<h4><?php echo esc_attr( $name_v_6 ); ?></h4>
						</div>
					</div>

					<div class="wrap-right clearfix">
						
						<div class="right-top clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_6_1 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_6_1 ); ?></p>
								</div></a>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_6_2 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_6_2 ); ?></p>
								</div></a>
							</div>
						</div>
						
						<div class="right-bottom clearfix">
							
							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_6_3 ); ?>">
								<div class="sick-wrap-content">
									
									<p><?php echo esc_attr( $s_6_3 ); ?></p>
								</div></a>
							</div>

							<div class="sick-wrap">
								<a href="<?php echo esc_url( $l_6_4 ); ?>">
								<div class="sick-wrap-content">

									<p><?php echo esc_attr( $s_6_4 ); ?></p>
								</div></a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="wrap-bottom">
					
					<p><?php echo esc_attr( $ques_6 ); ?></p>

					<a class="tu-van" href="<?php echo esc_attr( $a_href_6 ); ?>"><?php echo esc_attr( $a_title_6 ); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>