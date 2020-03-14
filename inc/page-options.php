<?php
/**
 * Register metabox for posts based on Redux Framework. Supported methods:
 *     isset_args( $post_type )
 *     set_args( $post_type, $redux_args, $metabox_args )
 *     add_section( $post_type, $sections )
 * Each post type can contains only one metabox. Pease note that each field id
 * leads by an underscore sign ( _ ) in order to not show that into Custom Field
 * Metabox from WordPress core feature.
 *
 * @param  kaily_Post_Metabox $metabox
 */

function kaily_page_options_register($metabox)
{
    
    if (!$metabox->isset_args('page')) {
        $metabox->set_args('page', array(
            'opt_name'     => kaily_get_page_opt_name(),
            'class' => 'fully-expanded',
            'display_name' => esc_html__('Page Settings', 'kaily'),
        ), array(
            'context'  => 'advanced',
            'priority' => 'default'
        ));
    }

    if (!$metabox->isset_args('post')) {
        $metabox->set_args('post', array(
            'opt_name'     => kaily_get_post_opt_name(),
            'class' => 'fully-expanded',
            'display_name' => esc_html__('Post Settings', 'kaily'),
        ), array(
            'context'  => 'advanced',
            'priority' => 'default'
        ));
    }

    $metabox->add_section('page', array(
        'title'  => esc_html__('General', 'kaily'),
        'desc'   => esc_html__('General settings for the page.', 'kaily'),
        'icon'   => 'el-icon-home',
        'fields' => array(
            /*array(
                'id'       => 'page_paddings',
                'type'     => 'spacing',
                'title'    => esc_html__('Paddings', 'kaily'),
                'subtitle' => esc_html__('Page paddings.', 'kaily'),
                'mode'     => 'padding',
                'units'    => array('em', 'px', '%'),
                'top'      => true,
                'right'    => false,
                'bottom'   => true,
                'left'     => false,
            ),*/

            /*array(
                'id'      => 'page_title_op_on',
                'type'    => 'switch',
                'title'   => esc_html__('Custom Page Title', 'kaily'),
                'default' => false,
                'force_output'=> true,
            ),
            array(
                'id'       => 'page_ptitle_layout',
                'type'     => 'image_select',
                'title'    => esc_html__('Layout', 'kaily'),
                'subtitle' => esc_html__('Select a layout for page title.', 'kaily'),
                'options'  => array(
                    '1' => get_template_directory_uri() . '/assets/images/page_title_1.jpg',
                    '2' => get_template_directory_uri() . '/assets/images/page_title_2.jpg'
                ),
                'force_output'=> true,
                'required' => array('page_title_op_on', '=', true),
            ),*/
        )
    ));
}


add_action('cms_post_metabox_register', 'kaily_page_options_register');