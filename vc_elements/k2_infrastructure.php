<?php
vc_map(array(
    "name" => 'K2 Infrastructure',
    "base" => "k2_infrastructure",
    "category" => esc_html__('Theme Shortcodes', "kaily"),
    "params" => array(
        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Add Image', 'k2-kinhdo' ),
            'param_name' => 'values',
            'params' => array(
                array(
                    'type' => 'attach_image',
                    'heading' => esc_html__( 'Select Image.', 'kaily' ),
                    'param_name' => 'select_image',
                ),
            ),
        ),
        array(
            'type' => 'animation_style',
            'heading' => esc_html__( 'Animation Style', 'kaily' ),
            'param_name' => 'css_animation',
            'description' => esc_html__( 'Choose your animation style', 'kaily' ),
            'admin_label' => false,
            'weight' => 0,
        ),
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Extra class name", "kaily" ),
            "param_name" => "el_class",
            "description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "kaily" ),
        ),
    )
));

class WPBakeryShortCode_k2_infrastructure extends CmsShortCode
{   

    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('k2-infrastructure');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>