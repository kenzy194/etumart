<?php
vc_map(
	array(
		"name" =>esc_html__("K2 Contact", 'kaily'),
	    "base" => "k2_contact",
	    "category" =>esc_html__("Theme Shortcodes", 'kaily'),
	    "params" => array(
	    	array(
	    		'type' => 'dropdown',
	    	 	'value' => array(
                    esc_html__( 'Style Home', 'kaily' ) => 'style-home',
                    esc_html__( 'Style Man', 'kaily' ) => 'style-man',
                ),
                "param_name" => "contact_style",
                'heading' => esc_html__( 'Contact Style', 'kaily' ),
            ),

	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Select Image.', 'kaily' ),
			    'param_name' => 'hot_image',
				'group' => esc_html__( 'Hot Line', 'kaily' ),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'number_show',
				'heading' => esc_html__( 'Number Show', 'kaily' ),
				'group' => esc_html__( 'Hot Line', 'kaily' ),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'number_click',
				'heading' => esc_html__( 'Number Click', 'kaily' ),
				'group' => esc_html__( 'Hot Line', 'kaily' ),
			),



	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Select Image.', 'kaily' ),
			    'param_name' => 'con_image',
				'group' => esc_html__( 'Contact', 'kaily' ),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'con_link',
				'heading' => esc_html__( 'Contact Link', 'kaily' ),
				'group' => esc_html__( 'Contact', 'kaily' ),
			),
			array(
				'type' => 'textfield',
				'param_name' => 'con_1',
				'heading' => esc_html__( 'Line 1', 'kaily' ),
				'group' => esc_html__( 'Contact', 'kaily' ),
			),
			array(
				'type' => 'textfield',
				'param_name' => 'con_2',
				'heading' => esc_html__( 'Line 2', 'kaily' ),
				'group' => esc_html__( 'Contact', 'kaily' ),
			),



	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Select Image.', 'kaily' ),
			    'param_name' => 'fb_image',
				'group' => esc_html__( 'Facebook', 'kaily' ),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'fb_link',
				'heading' => esc_html__( 'Contact Link', 'kaily' ),
				'group' => esc_html__( 'Facebook', 'kaily' ),
			),
			array(
				'type' => 'textfield',
				'param_name' => 'fb_1',
				'heading' => esc_html__( 'Line 1', 'kaily' ),
				'group' => esc_html__( 'Facebook', 'kaily' ),
			),
			array(
				'type' => 'textfield',
				'param_name' => 'fb_2',
				'heading' => esc_html__( 'Line 2', 'kaily' ),
				'group' => esc_html__( 'Facebook', 'kaily' ),
			),



	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Select Image.', 'kaily' ),
			    'param_name' => 'za_image',
				'group' => esc_html__( 'Zalo', 'kaily' ),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'za_link',
				'heading' => esc_html__( 'Contact Link', 'kaily' ),
				'group' => esc_html__( 'Zalo', 'kaily' ),
			),
			array(
				'type' => 'textfield',
				'param_name' => 'za_1',
				'heading' => esc_html__( 'Line 1', 'kaily' ),
				'group' => esc_html__( 'Zalo', 'kaily' ),
			),
			array(
				'type' => 'textfield',
				'param_name' => 'za_2',
				'heading' => esc_html__( 'Line 2', 'kaily' ),
				'group' => esc_html__( 'Zalo', 'kaily' ),
			),



	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Select Image.', 'kaily' ),
			    'param_name' => 'emai_image',
				'group' => esc_html__( 'Email', 'kaily' ),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'emai_link',
				'heading' => esc_html__( 'Contact Link', 'kaily' ),
				'group' => esc_html__( 'Email', 'kaily' ),
			),
			array(
				'type' => 'textfield',
				'param_name' => 'emai_1',
				'heading' => esc_html__( 'Line 1', 'kaily' ),
				'group' => esc_html__( 'Email', 'kaily' ),
			),
			array(
				'type' => 'textfield',
				'param_name' => 'emai_2',
				'heading' => esc_html__( 'Line 2', 'kaily' ),
				'group' => esc_html__( 'Email', 'kaily' ),
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
class WPBakeryShortCode_k2_contact extends CmsShortCode{
	
	protected function content($atts, $content = null){

		return parent::content($atts, $content);
	}
}

?>