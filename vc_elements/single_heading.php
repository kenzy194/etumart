<?php
vc_map(
    array(
        "name" => esc_html__("K2 Heading Single", "kaily"),
        "base" => "k2_heading_single",
        "category" => esc_html__("Single Post", "kaily"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__("Heading Single","kaily"),
                "param_name" => "heading_single",
                "admin_label" => true,
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

class WPBakeryShortCode_k2_heading_single extends CmsShortCode
{

    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}
?>