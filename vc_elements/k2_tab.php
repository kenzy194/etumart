<?php
vc_map(
	array(
		"name"     => esc_html__( "K2 Tab", "kaily" ),
		"base"     => "k2_tab",
		"category" => esc_html__( "Theme Shortcodes", "kaily" ),
		"params"   => array(
			array(
                "type" => "textfield",
                "heading" => esc_html__( "Title Tabs", "kaily" ),
                "param_name" => "titte_tabs",
            ),
			array(
                "type" => "textfield",
                "heading" => esc_html__( "Title Tabs 2", "kaily" ),
                "param_name" => "titte_tabs2",
            ),
            array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Select Image.', 'kaily' ),
			    'param_name' => 'select_image',
			),
			array(
	            'type' => 'param_group',
	            'heading' => esc_html__( 'Tabs Content', 'k2-kinhdo' ),
	            'param_name' => 'values',
	            'params' => array(
	            	array(
		                "type" => "textfield",
		                "heading" => esc_html__( "Title Tab", "kaily" ),
		                "param_name" => "title_tab",
		            ),
	            	array(
		                "type" => "textfield",
		                "heading" => esc_html__( "Title Content", "kaily" ),
		                "param_name" => "title_content",
		            ),
		            array(
		                "type" => "textarea_raw_html",
		                "heading" => esc_html__("Content Tab","kaily"),
		                "param_name" => "content_tab2",
		            ),
	                array(
	                    'type' => 'attach_image',
	                    'heading' => esc_html__( 'Select Image.', 'kaily' ),
	                    'param_name' => 'image_tab',
	                ),
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
	)
);

class WPBakeryShortCode_k2_tab extends CmsShortCode {
	protected function content( $atts, $content = null ) {
		return parent::content( $atts, $content );
	}
}

?>