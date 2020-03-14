<?php
vc_map(
    array(
        "name" => esc_html__("K2 Heading", "kaily"),
        "base" => "k2_heading",
        "category" => esc_html__("Theme Shortcodes", "kaily"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__("Main Title 1","kaily"),
                "param_name" => "main_title_1",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Main Title 2","kaily"),
                "param_name" => "main_title_2",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Sub Title Inline","kaily"),
                "param_name" => "sub_inline",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__("Sub Title Bottom","kaily"),
                "param_name" => "sub_button",
            ),
            array(
                "type" => "vc_link",
                "heading" => esc_html__( 'Link Heading', "kaily" ),
                "param_name" => "link_heading",
            ),
            array(
                "type" => "attach_image",
                "heading" => esc_html__("Icon","kaily"),
                "param_name" => "image_icon",
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

class WPBakeryShortCode_k2_heading extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}
?>