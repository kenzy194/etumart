<?php

extract(shortcode_atts(array(
    'link_button' => '',
), $atts));

$a_href = $a_title = $a_target = '';
$link = vc_build_link( $link_button );
if ( strlen( $link['url'] ) > 0 ) {
    $a_href = $link['url'];
    $a_title = $link['title'];
    $a_target = strlen( $link['target'] ) > 0 ? $link['target'] : '_self';
}
?>
<div class="k2-button">

    <a rel="nofollow" target="<?php echo esc_attr($a_target);?>" href="<?php echo esc_url($a_href);?>">
        <?php echo esc_attr($a_title); ?>
    </a>
</div>