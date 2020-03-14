<?php
vc_map(
	array(
		"name" =>esc_html__("K2 Contact Page Guide", 'kaily'),
	    "base" => "k2_address_guide",
	    "category" =>esc_html__("Theme Shortcodes", 'kaily'),
	    "params" => array(
	    	array(
                "type" => "textarea",
                "heading" => esc_html__("Description Phone Support","kaily"),
                "param_name" => "call_support",
                "group" => esc_html__('Call Support','kaily'),
            ),
	    	array(
                "type" => "textarea",
                "heading" => esc_html__("Description Maps","kaily"),
                "param_name" => "maps_support",
                "group" => esc_html__('Maps Support','kaily'),
            ),
            array(
	            "type" => "textarea_raw_html",
	            "heading" => esc_html__("Address Map","kaily"),
	            "param_name" => "content_address",
                "group" => esc_html__('Maps Support','kaily'),
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
class WPBakeryShortCode_k2_address_guide extends CmsShortCode{
	
	protected function content($atts, $content = null){

		return parent::content($atts, $content);
	}
}

?>