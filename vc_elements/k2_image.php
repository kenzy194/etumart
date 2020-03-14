<?php
vc_map(
	array(
		"name" =>esc_html__("K2 Image", 'kaily'),
	    "base" => "k2_image",
	    "category" =>esc_html__("Theme Shortcodes", 'kaily'),
	    "params" => array(
	    	array(
                "type"       => "dropdown",
                "heading"    => esc_html__("Select Layout", "kaily"),
                "param_name" => "layout",
                "value"      => array(
                    "Default" => "style_1",
                    "Banner" => "style_2",
                ),
            ),
	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Select Image.', 'kaily' ),
			    'param_name' => 'select_image',
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
                "heading" => esc_html__( "Link", "kaily" ),
                "param_name" => "el_link",
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
class WPBakeryShortCode_k2_image extends CmsShortCode{
	protected function content($atts, $content = null){
		global $wp_query,$post;

        $html_id = cmsHtmlID('cms-image');
        $atts['html_id'] = $html_id;
		return parent::content($atts, $content);
	}
}

?>