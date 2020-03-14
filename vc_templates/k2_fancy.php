<?php
    extract(shortcode_atts(array(
        'fancy_style'=> 'style-1',
        'title_fc'=> '',
        'description'=> '',
        'select_image'=> '',
        'link_fc'=> '',
        'css_animation'     => '',
        'el_class'     => '',
    ), $atts) );

    $animation_classes = $this->getCSSAnimation( $css_animation );

    $attachment_image = wp_get_attachment_image_src($select_image, 'full');
    $image_url = $attachment_image[0];

    $a_href = $a_title = $a_target = '';
    $link = vc_build_link( $link_fc );
    if ( strlen( $link['url'] ) > 0 ) {
        $a_href = $link['url'];
        $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
    }

switch ( $fancy_style ) {
    case 'style-1':
    ?>
    
    <div class="<?php echo esc_attr( $el_class . ' '. $animation_classes );?>">
    
        <div class="k2-fancy">

            <a href="<?php echo esc_url( $a_href );?>">

                <div class="wrap-header">

                    <img src="<?php echo esc_attr( $image_url ); ?>" alt="Fancy Image">
                </div>

                <div class="info-pricing">
                    
                    <h3><?php echo esc_attr( $title_fc ); ?></h3>
                </div>
            </a>
        </div>
    </div>
    <?php
    # code...
    break;
    
    case 'style-2':

    ?>
    <div class="<?php echo esc_attr( $el_class . ' '. $animation_classes );?>">
    
        <div class="k2-fancy-2">

            <div class="wrap-header">

                <img src="<?php echo esc_attr( $image_url ); ?>" alt="Fancy Image">
            </div>

            <h3><?php echo esc_attr( $title_fc ); ?></h3>

            <p><?php echo esc_attr( $description ); ?></p>
        </div>
    </div>
    <?php
    # code...
    break;
    
    case 'style-3':

    ?>
    <div class="<?php echo esc_attr( $el_class . ' '. $animation_classes );?>">
    
        <div class="k2-fancy-3">
            <a href="<?php echo esc_url( $a_href );?>">

                <div class="wrap-header">

                    <img src="<?php echo esc_attr( $image_url ); ?>" alt="Fancy Image">
                </div>

                <h3><?php echo esc_attr( $title_fc ); ?></h3>

                <p><?php echo esc_attr( $description ); ?></p>
            </a>
        </div>
    </div>
    <?php
    # code...
    break;
    
    case 'style-4':

    ?>
    <div class="<?php echo esc_attr( $el_class . ' '. $animation_classes );?>">
    
        <div class="k2-fancy-4">
            
            <h3><?php echo esc_attr( $title_fc ); ?></h3>

            <p><?php echo esc_attr( $description ); ?></p>
        </div>
    </div>
    <?php
    # code...
    break;
}
?>

