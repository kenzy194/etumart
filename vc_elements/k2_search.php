<?php
vc_map(
	array(
		"name" =>esc_html__("K2 Search posts news", 'kaily'),
	    "base" => "k2_search",
	    "category" =>esc_html__("Theme Shortcodes", 'kaily'),
	    "params" => array(
	        array(
				'type' => 'textfield',
				'param_name' => 'placeholder',
				'heading' => esc_html__( 'placeholder', 'kaily' ),
			),
	    )
	)
);
class WPBakeryShortCode_k2_search extends CmsShortCode{
	
	protected function content($atts, $content = null){

		return parent::content($atts, $content);
	}
}

?>