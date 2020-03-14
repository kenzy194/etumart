<?php
/*
 * VC
 */
vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__("CMS Custom Style", 'kaily'),
    "param_name" => "el_class",
    "value" => array(
        'None' => '',
        'Hidden-XS Hidden-SM' => 'hidden-xs hidden-sm',
        'Iten 2' => 'row-item-2',
        'Extra Custom Class 1' => 'custom-class1', 
        'Extra Custom Class 2' => 'custom-class2',
        'Extra Custom Class 3' => 'custom-class3',
        'Extra Custom Class 4' => 'custom-class4',
        'Extra Custom Class 5' => 'custom-class5',
    ),   
    "description" => 'Select Extra Custom Class (1->5): You user custom class style css: ( custom-class1 to custom-class5 )',
));

vc_add_param('vc_custom_heading', array(
    'type' => 'textfield',
    'heading' => esc_html__("Letter Spacing", 'kaily'),
    'param_name' => 'letter_font',
    'group' => esc_html__('Design Options','kaily'),
));
