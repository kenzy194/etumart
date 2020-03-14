<?php
extract(shortcode_atts(array(
    'title' => '',
    'type' => 'Random',
    'digit' => '668',
    'image' => '',
    'suffix' => '',
    'css_animation' => '',
    'el_class' => '',
), $atts));
$html_id = cmsHtmlID('cms-counter');
wp_register_script('counter', get_template_directory_uri().'/assets/js/counter.min.js', array('jquery'),'1.0.0',true);
wp_enqueue_script('k2-do-counter', get_template_directory_uri().'/assets/js/do.counter.js', array('counter','waypoints'),'1.0.0',true);

// Build the animation classes
$animation_classes = $this->getCSSAnimation( $css_animation );

$image_url = '';
$attachment_image = wp_get_attachment_image_src( $image, 'full');
$image_url = $attachment_image[0];

?>
<div class="k2-counter counter <?php echo esc_attr($el_class.' '.$animation_classes);?>">

    <div class="counter-inner clearfix">

        <?php if( $image_url ): ?>

            <div class="counter-image">

                <img src="<?php echo esc_attr($image_url);?>" alt="Image Counter" >
            </div>
        <?php endif; ?>

        <div class="counter-content">
            <div id="<?php echo esc_attr($html_id) ?>" class="k2-counter-con" data-suffix="<?php echo esc_attr($suffix);?>" data-type="<?php echo esc_attr(strtolower($type));?>" data-digit="<?php echo esc_attr($digit);?>"></div>
        </div>
    </div>

    <h3 class="counter-title">
        
        <?php echo esc_attr($title);?>
    </h3>
</div>