<?php
vc_map(
    array(
        "name" => esc_html__("K2 Social Disease", "kaily"),
        "base" => "k2_social",
        "category" => esc_html__("Theme Shortcodes", "kaily"),
        "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Name disease", "kaily" ),
                "param_name" => "name_1",
                "group" => esc_html__('Disease 1','kaily'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link disease", "kaily" ),
                "param_name" => "link_1",
                "group" => esc_html__('Disease 1','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image Disease.', 'kaily' ),
                'param_name' => 'image_1',
                "group" => esc_html__('Disease 1','kaily'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Name disease", "kaily" ),
                "param_name" => "name_2",
                "group" => esc_html__('Disease 2','kaily'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link disease", "kaily" ),
                "param_name" => "link_2",
                "group" => esc_html__('Disease 2','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image Disease.', 'kaily' ),
                'param_name' => 'image_2',
                "group" => esc_html__('Disease 2','kaily'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Name disease", "kaily" ),
                "param_name" => "name_3",
                "group" => esc_html__('Disease 3','kaily'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link disease", "kaily" ),
                "param_name" => "link_3",
                "group" => esc_html__('Disease 3','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image Disease.', 'kaily' ),
                'param_name' => 'image_3',
                "group" => esc_html__('Disease 3','kaily'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Name disease", "kaily" ),
                "param_name" => "name_4",
                "group" => esc_html__('Disease 4','kaily'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Link disease", "kaily" ),
                "param_name" => "link_4",
                "group" => esc_html__('Disease 4','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image Disease.', 'kaily' ),
                'param_name' => 'image_4',
                "group" => esc_html__('Disease 4','kaily'),
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
class WPBakeryShortCode_k2_social extends CmsShortCode{
    protected function content($atts, $content = null){

        $html_id = cmsHtmlID('k2-call');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>