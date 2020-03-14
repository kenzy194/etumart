<?php
vc_map(
	array(
		"name" =>esc_html__("K2 Book Notice", 'kaily'),
	    "base" => "k2_book_notice",
	    "category" =>esc_html__("Theme Shortcodes", 'kaily'),
	    "params" => array(
			array(
                "type" => "textfield",
                "heading" => esc_html__( "Number Show", "kaily" ),
                "param_name" => "number",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Number Click", "kaily" ),
                "param_name" => "number2",
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
class WPBakeryShortCode_k2_book_notice extends CmsShortCode{
	protected function content($atts, $content = null){
		global $wp_query,$post;

        $html_id = cmsHtmlID('k2-book');
        $atts['html_id'] = $html_id;
		return parent::content($atts, $content);
	}
}

?>