<?php

extract( shortcode_atts( array(
    'values' => '',
    'css_animation' => '',
	'el_class' => '',
), $atts ) );

$animation_classes = $this->getCSSAnimation( $css_animation );
$options = (array) vc_param_group_parse_atts( $values );

?>
<div class="k2-test-sick <?php echo esc_attr( $animation_classes . ' ' . $el_class ); ?>">
	<?php if( count($options) > 1 ) : ?>
	<div class="nav-tabs">
        <ul>
            <?php
            $i = 1;
            foreach ($options as $key => $value) :
                $class_title = ( $i == 1) ? 'active' : '';
                ?>
                <li class="<?php echo esc_attr( $class_title ); ?>">
                    <a data-toggle="tab" href="#k2stab<?php echo esc_attr($atts['html_id']); ?><?php echo esc_attr( $i ); ?>"><span><?php echo esc_attr( $value['title_tab'] ); ?></span></a>
                </li>
            <?php
            $i++;
            endforeach; ?>
        </ul>
    </div>
	<?php endif; ?>

    <div class="tab-content">
            <?php
            $i = 1;
            foreach ($options as $key => $value) :
                $class_tabs = ( $i == 1) ? ' fade in active' : '';
                $id_form = !empty( $value['id_form'] ) ? $value['id_form'] : '';
                ?>

                <div id="k2stab<?php echo esc_attr($atts['html_id']); ?><?php echo esc_attr( $i ); ?>" class="tab-pane<?php echo esc_attr( $class_tabs ); ?>">

                    <?php echo apply_filters('the_content','[contact-form-7 id=" ' . $id_form . ' "]'); ?>
                </div>
            <?php
            $i++;
            endforeach; ?>
        </div>
</div>