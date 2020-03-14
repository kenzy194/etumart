<?php
vc_map(
    array(
        "name" => esc_html__("K2 Counter", "kaily"),
        "base" => "k2_counter",
        "category" => esc_html__("Theme Shortcodes", "kaily"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__("Title","kaily"),
                "param_name" => "title",
                "admin_label" => true,
                "description" => esc_html__("Title Of Item","kaily"),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Digit","kaily"),
                "param_name" => "digit",
                "value" => "668",
                "description" => esc_html__("Enter number only","kaily"),
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__("Image","kaily"),
                "param_name" => "image",
                "description" => esc_html__("If you select image, icon will replace by image","kaily"),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Suffix","kaily"),
                "param_name" => "suffix",
                "value" => "",
                "description" => esc_html__("","kaily"),
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
    )
);
class WPBakeryShortCode_k2_counter extends CmsShortCode{
    protected function content($atts, $content = null){
        return parent::content($atts, $content);
    }
}
?>