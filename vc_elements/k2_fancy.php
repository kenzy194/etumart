<?php
vc_map(
    array(
        "name" => esc_html__("K2 Fancy", "kaily"),
        "base" => "k2_fancy",
        "category" => esc_html__("Theme Shortcodes", "kaily"),
        "params" => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'Fancy Style', 'kaily' ),
                'value' => array(
                    esc_html__( 'Style 1', 'kaily' ) => 'style-1',
                    esc_html__( 'Style 2', 'kaily' ) => 'style-2',
                    esc_html__( 'Style 3', 'kaily' ) => 'style-3',
                    esc_html__( 'Style 4', 'kaily' ) => 'style-4',
                ),
                'param_name' => 'fancy_style',
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title", "kaily" ),
                "param_name" => "title_fc",
            ),

            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Select Image.', 'kaily' ),
                'param_name' => 'select_image',
                'dependency' => array(
                    'element' => 'fancy_style',
                    'value' => array('style-1','style-2','style-3'),
                ),
            ),

            array(
                "type" => "vc_link",
                "heading" => esc_html__( 'Link', "kaily" ),
                "param_name" => "link_fc",
                'dependency' => array(
                    'element' => 'fancy_style',
                    'value' => array('style-1','style-3'),
                ),
            ),
            array(
                "type" => "textarea",
                "heading" => esc_html__("Description","kaily"),
                "param_name" => "description",
                'dependency' => array(
                    'element' => 'fancy_style',
                    'value' => array('style-2','style-3','style-4'),
                ),
                "description" => esc_html__("Description Of Fancy Icon Box","kaily"),
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
class WPBakeryShortCode_k2_fancy extends CmsShortCode{
    protected function content($atts, $content = null){

        $html_id = cmsHtmlID('k2-fancy');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>