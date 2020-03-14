<?php
vc_map(
	array(
		"name" =>esc_html__("K2 Medical Examination", 'kaily'),
	    "base" => "k2_medical_examination",
	    "category" =>esc_html__("Theme Shortcodes", 'kaily'),
	    "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title Step", "kaily" ),
                "param_name" => "title1",
                'group' => esc_html__('Step 1','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 1.', 'kaily' ),
                'param_name' => 'image1_1',
                'group' => esc_html__('Step 1','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 2.', 'kaily' ),
                'param_name' => 'image1_2',
                'group' => esc_html__('Step 1','kaily'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title Step", "kaily" ),
                "param_name" => "title2",
                'group' => esc_html__('Step 2','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 1.', 'kaily' ),
                'param_name' => 'image2_1',
                'group' => esc_html__('Step 2','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 2.', 'kaily' ),
                'param_name' => 'image2_2',
                'group' => esc_html__('Step 2','kaily'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title Step", "kaily" ),
                "param_name" => "title3",
                'group' => esc_html__('Step 3','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 1.', 'kaily' ),
                'param_name' => 'image3_1',
                'group' => esc_html__('Step 3','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 2.', 'kaily' ),
                'param_name' => 'image3_2',
                'group' => esc_html__('Step 3','kaily'),
            ),

            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title Step", "kaily" ),
                "param_name" => "title4",
                'group' => esc_html__('Step 4','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 1.', 'kaily' ),
                'param_name' => 'image4_1',
                'group' => esc_html__('Step 4','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 2.', 'kaily' ),
                'param_name' => 'image4_2',
                'group' => esc_html__('Step 4','kaily'),
            ),

            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title Step", "kaily" ),
                "param_name" => "title5",
                'group' => esc_html__('Step 5','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 1.', 'kaily' ),
                'param_name' => 'image5_1',
                'group' => esc_html__('Step 5','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 2.', 'kaily' ),
                'param_name' => 'image5_2',
                'group' => esc_html__('Step 5','kaily'),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Title Step", "kaily" ),
                "param_name" => "title6",
                'group' => esc_html__('Step 6','kaily'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 1.', 'kaily' ),
                'param_name' => 'image6_1',
                'group' => esc_html__('Step 6','kaily'),
            ),
			array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Image 2.', 'kaily' ),
                'param_name' => 'image6_2',
                'group' => esc_html__('Step 6','kaily'),
            ),
            array(
                "type"       => "dropdown",
                "heading"    => esc_html__("Select Layout", "kaily"),
                "param_name" => "layout",
                "value"      => array(
                    "Style 1"   => "style_1",
                    "Style 2" => "style_2",
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
class WPBakeryShortCode_k2_medical_examination extends CmsShortCode{
	protected function content($atts, $content = null){
		global $wp_query,$post;

        $html_id = cmsHtmlID('k2-book');
        $atts['html_id'] = $html_id;
		return parent::content($atts, $content);
	}
}

?>