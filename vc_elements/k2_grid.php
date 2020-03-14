<?php
$term_list['auto_complete'] = array();
$terms = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false,
) );

foreach ( $terms as $term ) {
    $term_list['auto_complete'][] = array(
        'value' => $term->slug,
        'label' => $term->name,
    );
}

vc_map(
    array(
        "name"     => esc_html__("K2 Grid", "kaily"),
        "base"     => "k2_grid",
        "category" => esc_html__("Theme Shortcodes", "kaily"),
        "params"   => array(
            array(
                "type"       => "dropdown",
                "heading"    => esc_html__("Select Layout", "kaily"),
                "param_name" => "layout",
                "value"      => array(
                    "Style 1" => "style_1",
                    "Style 2" => "style_2",
                    "Style Page Promotion" => "style_3",
                ),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Select Image.', 'kaily' ),
                'param_name' => 'select_image',
                'dependency' => array(
                    'element' => 'layout',
                    'value' => 'style_1',
                ),
            ),
            array(
                "type"       => "textfield",
                "heading"    => esc_html__("Total items", "kaily"),
                "param_name" => "limit",
                "value"      => "8",
            ),
            array(
                "type"       => "textfield",
                "heading"    => esc_html__("Link", "kaily"),
                "param_name" => "link",
                'dependency' => array(
                    'element' => 'layout',
                    'value' => 'style_1',
                ),
            ),
            array(
                 "type"       => "autocomplete",
                "heading"    => __("Select Categories", "kaily"),
                "param_name" => "source",
                'settings'   => array(
                    'multiple' => false,
                    'values'   => $term_list['auto_complete'],
                ),
                'dependency' => array(
                    'element' => 'layout',
                    'value' => 'style_1',
                ),
            ),
            array(
                 "type"       => "autocomplete",
                "heading"    => __("Select Categories 2", "kaily"),
                "param_name" => "source2",
                'settings'   => array(
                    'multiple' => true,
                    'values'   => $term_list['auto_complete'],
                ),
                'dependency' => array(
                    'element' => 'layout',
                    'value' => 'style_2',
                ),
            ),
            array(
                "type" => "textfield",
                "heading" => esc_html__( "Extra class name", "kaily" ),
                "param_name" => "el_class",
                "description" => esc_html__( "Style particular content element differently - add a class name and refer to it in Custom CSS.", "kaily" ),
                "group"            => esc_html__("Grid Settings", "kaily")
            ),
        )
    )
);

class WPBakeryShortCode_k2_grid extends CmsShortCode
{
    protected function content($atts, $content = null)
    {
        return parent::content($atts, $content);
    }
}

?>