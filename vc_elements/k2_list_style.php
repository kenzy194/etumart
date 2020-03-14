<?php
vc_map(
	array(
		"name" =>esc_html__("K2 List Style", 'kaily'),
	    "base" => "k2_list_style",
	    "category" =>esc_html__("Single Post", 'kaily'),
	    "params" => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__( 'List Style Type', 'kaily' ),
                'value' => array(
                    esc_html__( 'Normal', 'kaily' ) => 'style-normal',
                    esc_html__( 'Warning', 'kaily' ) => 'style-warning',
                    esc_html__( 'Confirm', 'kaily' ) => 'style-confirm',
                ),
                'param_name' => 'list_style',
            ),
			array(
                'type' => 'param_group',
                'heading' => esc_html__( 'Add Contents', 'k2-kinhdo' ),
                'param_name' => 'values',
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__( 'Add Content.', 'kaily' ),
                        'param_name' => 'list_content',
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
class WPBakeryShortCode_k2_list_style extends CmsShortCode{
	protected function content($atts, $content = null){
		return parent::content($atts, $content);
	}
}

?>