<?php
vc_map(
	array(
		"name" =>esc_html__("K2 Pay", 'kaily'),
	    "base" => "k2_pay",
	    "category" =>esc_html__("Theme Shortcodes", 'kaily'),
	    "params" => array(
	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Image.', 'kaily' ),
			    'param_name' => 'image_1',
			    'group' => esc_html__('SS 1','kaily'),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'title_1',
				'heading' => esc_html__( 'Title', 'kaily' ),
			    'group' => esc_html__('SS 1','kaily'),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'title_12',
				'heading' => esc_html__( 'Title', 'kaily' ),
			    'group' => esc_html__('SS 1','kaily'),
			),
	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Image.', 'kaily' ),
			    'param_name' => 'image_2',
			    'group' => esc_html__('SS 2','kaily'),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'title_2',
				'heading' => esc_html__( 'Title', 'kaily' ),
			    'group' => esc_html__('SS 2','kaily'),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'title_22',
				'heading' => esc_html__( 'Title', 'kaily' ),
			    'group' => esc_html__('SS 2','kaily'),
			),
	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Image.', 'kaily' ),
			    'param_name' => 'image_3',
			    'group' => esc_html__('SS 3','kaily'),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'title_3',
				'heading' => esc_html__( 'Title', 'kaily' ),
			    'group' => esc_html__('SS 3','kaily'),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'title_32',
				'heading' => esc_html__( 'Title', 'kaily' ),
			    'group' => esc_html__('SS 3','kaily'),
			),
	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Image.', 'kaily' ),
			    'param_name' => 'image_4',
			    'group' => esc_html__('SS 4','kaily'),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'title_4',
				'heading' => esc_html__( 'Title', 'kaily' ),
			    'group' => esc_html__('SS 4','kaily'),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'title_42',
				'heading' => esc_html__( 'Title', 'kaily' ),
			    'group' => esc_html__('SS 4','kaily'),
			),
	    	array(
			    'type' => 'attach_image',
			    'heading' => esc_html__( 'Image.', 'kaily' ),
			    'param_name' => 'image_5',
			    'group' => esc_html__('SS 5','kaily'),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'title_5',
				'heading' => esc_html__( 'Title', 'kaily' ),
			    'group' => esc_html__('SS 5','kaily'),
			),
	        array(
				'type' => 'textfield',
				'param_name' => 'title_52',
				'heading' => esc_html__( 'Title', 'kaily' ),
			    'group' => esc_html__('SS 5','kaily'),
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
class WPBakeryShortCode_k2_pay extends CmsShortCode{
	
	protected function content($atts, $content = null){

		return parent::content($atts, $content);
	}
}

?>