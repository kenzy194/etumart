<?php
    extract(shortcode_atts(array(
        'list_style'  => 'style-normal',
        'values'  => '',
        'el_class'  => '',
    ), $atts));

    $options = (array) vc_param_group_parse_atts( $values );
?>
<div class="k2-list-style <?php echo esc_attr( $el_class ); ?>">
    <ul class="<?php echo esc_attr( $list_style ); ?>">
        <?php
            foreach ($options as $key => $value) {
                ?>
                    <li><?php echo esc_attr( $value['list_content'] ); ?></li>
                <?php
            }
        ?>
    </ul>
</div>