<?php
vc_map(
	array(
		"name"     => esc_html__( "K2 Test Sick", "kaily" ),
		"base"     => "k2_test_sick",
		"category" => esc_html__( "Theme Shortcodes", "kaily" ),
		"params"   => array(
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
		                "heading" => esc_html__( "ID Form", "kaily" ),
		                "param_name" => "id_form",
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

class WPBakeryShortCode_k2_test_sick extends CmsShortCode {
	protected function content( $atts, $content = null ) {

		$html_id = cmsHtmlID('k2-test-sk');
        $atts['html_id'] = $html_id;
		return parent::content( $atts, $content );
	}
}

?>