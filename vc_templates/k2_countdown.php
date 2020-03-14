<?php
    extract(shortcode_atts(array(
        'date_count'=> '',
        'css_animation'     => '',
        'el_class'     => '',
    ), $atts) );

    $animation_classes = $this->getCSSAnimation( $css_animation );
 
    wp_enqueue_script( 'count-down', get_template_directory_uri().'/assets/js/countdown.min.js', array( 'jquery' ), '1.0.0', true );
?>

<div class="k2-countdown <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>">
   
    <div class="comming-soon">

        <?php
            $time = !empty( $date_count ) ? $date_count : '2018, 10, 28';
        ?>

        <div id="countdown" data-count="<?php echo esc_attr($time); ?>"></div>
    </div>
</div>