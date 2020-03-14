<?php

extract(shortcode_atts(array(
    'name_1' => '',
    'link_1' => '#',
    'image_1' => '',
    'name_2' => '',
    'link_2' => '#',
    'image_2' => '',
    'name_3' => '',
    'link_3' => '#',
    'image_3' => '',
    'name_4' => '',
    'link_4' => '#',
    'image_4' => '',
    'css_animation' => '',
    'el_class' => '',
), $atts));

$animation_classes = $this->getCSSAnimation( $css_animation );

$attachment_image1 = wp_get_attachment_image_src( $image_1 , 'full');
$image_url1 = $attachment_image1[0];

$attachment_image2 = wp_get_attachment_image_src( $image_2 , 'full');
$image_url2 = $attachment_image2[0];

$attachment_image3 = wp_get_attachment_image_src( $image_3 , 'full');
$image_url3 = $attachment_image3[0];

$attachment_image4 = wp_get_attachment_image_src( $image_4 , 'full');
$image_url4 = $attachment_image4[0];
?>
<div class="k2-social-disease <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>">

    <div class="k2-social-disease-wrap clearfix">
    	
    	<div class="wrap-disease">
    		
    		<a href="<?php echo esc_url( $link_1 ); ?>">

    			<img src="<?php echo esc_url( $image_url1 ); ?>" alt="Social Disease 1">
    			<h3><?php echo esc_attr( $name_1 ); ?></h3>
    		</a>
    	</div>
    	
    	<div class="wrap-disease">
    		
    		<a href="<?php echo esc_url( $link_2 ); ?>">

    			<img src="<?php echo esc_url( $image_url2 ); ?>" alt="Social Disease 2">
    			<h3><?php echo esc_attr( $name_2 ); ?></h3>
    		</a>
    	</div>
    	
    	<div class="wrap-disease">
    		
    		<a href="<?php echo esc_url( $link_3 ); ?>">

    			<img src="<?php echo esc_url( $image_url3 ); ?>" alt="Social Disease 3">
    			<h3><?php echo esc_attr( $name_3 ); ?></h3>
    		</a>
    	</div>
    	
    	<div class="wrap-disease">

    		<a href="<?php echo esc_url( $link_4 ); ?>">

    			<img src="<?php echo esc_url( $image_url4 ); ?>" alt="Social Disease 4">
    			<h3><?php echo esc_attr( $name_4 ); ?></h3>
    		</a>
    	</div>
    </div>
</div>