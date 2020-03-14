<?php
    extract(shortcode_atts(array(
        'number'=> '',
        'number2'=> '',
        'number3'=> '',
        'css_animation'     => '',
        'el_class'     => '',
    ), $atts) );

    $animation_classes = $this->getCSSAnimation( $css_animation );
?>

<div class="k2-call <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>">

    <div class="k2-wrap clearfix">
        
        <div class="wrap-image">
            
            <a href="tel:<?php echo esc_attr( $number2 ); ?>">

                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/call.png' ); ?>" alt="Image Call">
            </a>
        </div>

        <div class="wrap-content">
            <h3>HOTLINE</h3>
            <P><?php echo esc_attr( $number ); ?></P>
            <P><?php echo esc_attr( $number3 ); ?></P>
        </div>
    </div>
</div>