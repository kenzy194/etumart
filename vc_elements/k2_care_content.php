<?php
vc_map(
	array(
		"name" =>esc_html__("K2 single", 'kaily'),
	    "base" => "k2_single_noi_that",
	    "category" =>esc_html__("Single Noi That", 'kaily'),
	    "params" => array(
			array(
                'type' => 'param_group',
                'heading' => esc_html__( 'Add Links', 'k2-kinhdo' ),
                'param_name' => 'values',
                'params' => array(
                    array(
                        'type' => 'attach_image',
                        'heading' => esc_html__( 'Select Image.', 'kaily' ),
                        'param_name' => 'select_image',
                    ),
                ),
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
class WPBakeryShortCode_k2_single_noi_that extends CmsShortCode{
	protected function content($atts, $content = null){
		return parent::content($atts, $content);
	}
}

?>