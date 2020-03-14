<?php
vc_map(
	array(
		"name" =>esc_html__("K2 Post News", 'kaily'),
	    "base" => "k2_post_news",
	    "category" =>esc_html__("Theme Shortcodes", 'kaily'),
	    "params" => array(
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Category ID", "kaily" ),
                "param_name" => "category",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "limit posts news", "kaily" ),
                "param_name" => "limit",
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Categories name", "kaily" ),
                "param_name" => "cats",
            ),
	    )
	)
);
class WPBakeryShortCode_k2_post_news extends CmsShortCode{
    protected function content($atts, $content = null){

        return parent::content($atts, $content);
    }
}

?>