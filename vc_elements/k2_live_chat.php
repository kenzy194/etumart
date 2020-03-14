<?php
vc_map(array(
    "name" => 'K2 Live Chat',
    "base" => "k2_live_chat",
    "category" => esc_html__('Single Post', "namkhoabg"),
    "params" => array(
        array(
            'type' => 'dropdown',
            'heading' => esc_html__( 'Live Style', 'namkhoabg' ),
            'value' => array(
                esc_html__( 'Style 1', 'namkhoabg' ) => 'style-1',
                esc_html__( 'Style 2', 'namkhoabg' ) => 'style-2',
                esc_html__( 'Style 3', 'namkhoabg' ) => 'style-3',
            ),
            'param_name' => 'live_style',
        ),
        array(
            "type" => "vc_link",
            "heading" => esc_html__( 'Link Button', "namkhoabg" ),
            "param_name" => "link_button",
        ),
    )
));

class WPBakeryShortCode_k2_live_chat extends CmsShortCode
{   

    protected function content($atts, $content = null)
    {
        $html_id = cmsHtmlID('k2-live-chat');
        $atts['html_id'] = $html_id;
        return parent::content($atts, $content);
    }
}

?>