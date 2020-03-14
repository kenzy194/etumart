<?php
vc_map(
	array(
		"name"     => esc_html__( "K2 Ruler", "kaily" ),
		"base"     => "k2_ruler",
		"category" => esc_html__( "Theme Shortcodes", "kaily" ),
		"params"   => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Text 1", "kaily" ),
                "param_name" => "text_1",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Text 2", "kaily" ),
                "param_name" => "text_2",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Text 3", "kaily" ),
                "param_name" => "text_3",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Text 4", "kaily" ),
                "param_name" => "text_4",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Text 5", "kaily" ),
                "param_name" => "text_5",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Text 6", "kaily" ),
                "param_name" => "text_6",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Text 7", "kaily" ),
                "param_name" => "text_7",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Text 8", "kaily" ),
                "param_name" => "text_8",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Text 9", "kaily" ),
                "param_name" => "text_9",
            ),

			array(
                "type" => "textfield",
                "heading" => esc_html__( "Extra class name", "kaily" ),
                "param_name" => "el_class",
                "description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "kaily" ),
            ),
            array(
                'type' => 'animation_style',
                'heading' => esc_html__( 'Animation Style', 'kaily' ),
                'param_name' => 'css_animation',
                'description' => esc_html__( 'Choose your animation style', 'kaily' ),
                'admin_label' => false,
                'weight' => 0,
            ),
		)
	)
);

class WPBakeryShortCode_k2_ruler extends CmsShortCode {
	protected function content( $atts, $content = null ) {
		return parent::content( $atts, $content );
	}
}

?>