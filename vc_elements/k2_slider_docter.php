<?php
vc_map(array(
    "name" => 'K2 Slider Docter',
    "base" => "k2_slider_docter",
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
                array(
                    "type" => "textfield",
                    "heading" => esc_html__( "Ban Khoa:", "kaily" ),
                    "param_name" => "text_khoa",
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__( "Năm Kinh Nghiệm:", "kaily" ),
                    "param_name" => "text_year",
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__( "Bằng Cấp:", "kaily" ),
                    "param_name" => "text_bang",
                ),
                array(
                    "type" => "textfield",
                    "heading" => esc_html__( "Chú Thích:", "kaily" ),
                    "param_name" => "text_note",
                ),
            ),
        ),
        array(
            "type"       => "dropdown",
            "heading"    => esc_html__("Select Layout", "kaily"),
            "param_name" => "layout",
            "value"      => array(
                "Style 1"   => "style_1",
                "Style 2" => "style_2",
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

class WPBakeryShortCode_k2_slider_docter extends CmsShortCode
{   

    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('k2-slider-docter');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>