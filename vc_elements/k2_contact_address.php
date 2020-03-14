<?php
vc_map(array(
    "name" => 'K2 Contact Address',
    "base" => "k2_contact_address",
    "category" => esc_html__('Theme Shortcodes', "kaily"),
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => esc_html__( "Number Phone", "kaily" ),
            "param_name" => "number_phone",
        ),
        array(
            "type" => "textarea_raw_html",
            "heading" => esc_html__("Content Tab","kaily"),
            "param_name" => "content_address",
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

class WPBakeryShortCode_k2_contact_address extends CmsShortCode
{   

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>