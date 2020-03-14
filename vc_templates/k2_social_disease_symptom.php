<?php

extract(shortcode_atts(array(
    's_m_1' => '',
    's_m_2' => '',
    's_m_3' => '',
    's_m_4' => '',
    's_m_5' => '',
    's_m_6' => '',
    's_m_7' => '',
    's_m_8' => '',
    'l_m_1' => '',
    'l_m_2' => '',
    'l_m_3' => '',
    'l_m_4' => '',
    'l_m_5' => '',
    'l_m_6' => '',
    'l_m_7' => '',
    'l_m_8' => '',

    's_w_1' => '',
    's_w_2' => '',
    's_w_3' => '',
    's_w_4' => '',
    's_w_5' => '',
    's_w_6' => '',
    's_w_7' => '',
    's_w_8' => '',
    'l_w_1' => '',
    'l_w_2' => '',
    'l_w_3' => '',
    'l_w_4' => '',
    'l_w_5' => '',
    'l_w_6' => '',
    'l_w_7' => '',
    'l_w_8' => '',

    'css_animation' => '',
    'el_class' => '',
), $atts));

$m = get_template_directory_uri() . '/assets/images/icon_sexy_03.png';
$w = get_template_directory_uri() . '/assets/images/icon_sexy_05.png';

?>

<div class="k2-social-disease-sym">

	<div class="sym-content clearfix">

		<div class="sym-man">
			
			<div class="sym-top">
			
				<img src="<?php echo esc_url( $m ); ?>" alt="Icon Man">
				<h3>NAM GIỚI</h3>
			</div>

			<div class="sym-bottom">
				
				<div class="sym-bottom-content clearfix">
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_m_1 ); ?>">
							
							<p><?php echo esc_attr( $s_m_1 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_m_2 ); ?>">
							
							<p><?php echo esc_attr( $s_m_2 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_m_3 ); ?>">
							
							<p><?php echo esc_attr( $s_m_3 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_m_4 ); ?>">
							
							<p><?php echo esc_attr( $s_m_4 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_m_5 ); ?>">
							
							<p><?php echo esc_attr( $s_m_5 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_m_6 ); ?>">
							
							<p><?php echo esc_attr( $s_m_6 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_m_7 ); ?>">
							
							<p><?php echo esc_attr( $s_m_7 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_m_8 ); ?>">
							
							<p><?php echo esc_attr( $s_m_8 ); ?></p>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="sym-woman">
			
			<div class="sym-top">
			
				<img src="<?php echo esc_url( $w ); ?>" alt="Icon Woman">
				<h3>NỮ GIỚI</h3>
			</div>

			<div class="sym-bottom">
				
				<div class="sym-bottom-content">
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_w_1 ); ?>">
							
							<p><?php echo esc_attr( $s_w_1 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_w_2 ); ?>">
							
							<p><?php echo esc_attr( $s_w_2 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_w_3 ); ?>">
							
							<p><?php echo esc_attr( $s_w_3 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_w_4 ); ?>">
							
							<p><?php echo esc_attr( $s_w_4 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_w_5 ); ?>">
							
							<p><?php echo esc_attr( $s_w_5 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_w_6 ); ?>">
							
							<p><?php echo esc_attr( $s_w_6 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_w_7 ); ?>">
							
							<p><?php echo esc_attr( $s_w_7 ); ?></p>
						</a>
					</div>
					
					<div class="bottom-content">
						
						<a href="<?php echo esc_url( $l_w_8 ); ?>">
							
							<p><?php echo esc_attr( $s_w_8 ); ?></p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>