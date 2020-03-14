<?php
extract(shortcode_atts(array(
    'main_title_1'  => '',
    'main_title_2'  => '',
    'sub_inline'  => '',
    'sub_button'  => '',
    'link_heading'  => '',
    'image_icon'  => '',
    'el_class'  => '',
    'css_animation' => '',
), $atts));

$attachment_image = wp_get_attachment_image_src($image_icon, 'full');
$image_url = $attachment_image[0];

// Build the animation classes
$animation_classes = $this->getCSSAnimation( $css_animation );

$a_href = $a_title = $a_target = '';
$link = vc_build_link( $link_heading );
if ( strlen( $link['url'] ) > 0 ) {
    $a_href = $link['url'];
    $a_title = $link['title'];
    $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
}
?>
<style type="text/css">
.k2-heading .title--top .title h2::before {
    content: url("<?php echo esc_attr( $image_url ); ?>");
}
</style>

<div class="k2-heading <?php echo esc_attr($el_class.' '.$animation_classes); ?>">

    <div class="title--top">

        <div class="row">

            <div class="col-xs-12 col-md-8">

                <div class="title">

                    <h2><?php echo esc_attr( $main_title_1 ); ?> <span><?php echo esc_attr( $main_title_2 ); ?></span></h2>
                </div>
            </div>

            <div class="hidden-xs hidden-sm col-md-4">

                <div class="sub-title-inline">

                    <?php echo esc_attr( $sub_inline ); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php if( !empty( $sub_button ) || !empty( $a_title ) ) : ?>

    <div class="title--bottom">

        <div class="row">

            <div class="col-xs-12 col-sm-6">
                
                <?php if( !empty( $sub_button ) ) : ?>

                <div class="sub-title-bottom">

                    <?php echo esc_attr( $sub_button ); ?>
                </div>
                <?php endif;?>
            </div>

            <div class="col-xs-12 col-sm-6">

                <?php if( !empty( $a_title ) ) : ?>

                <div class="link">

                    <a href="<?php echo esc_url( $a_href ); ?>" target="<?php echo esc_attr( $a_target ); ?>"><?php echo esc_attr( $a_title ); ?></a>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>