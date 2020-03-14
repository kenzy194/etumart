<?php
vc_map(array(
    "name" => 'K2 Button',
    "base" => "k2_button",
    "category" => esc_html__('Theme Shortcodes', "kaily"),
    "params" => array(
        array(
            "type" => "vc_link",
            "heading" => esc_html__( 'Link Button', "kaily" ),
            "param_name" => "link_button",
        ),
    )
));

class WPBakeryShortCode_k2_button extends CmsShortCode
{   

    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('k2-button');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>