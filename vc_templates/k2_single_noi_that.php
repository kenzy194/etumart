<?php
extract(shortcode_atts(array(
    'values'  => '',
), $atts));

$options = (array) vc_param_group_parse_atts( $values );
wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/js/lightbox.min.js', array('jquery'), '1.1.1', true);
wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.min.css', array(), 'all');

?>
<div class="k2-single-noi-that">
    
    <div class="row">
        
        <?php
            foreach ($options as $key => $value) {


                $select_image = $value['select_image'];
                $attachment_image = wp_get_attachment_image_src($select_image, 'full');
                $image_url = $attachment_image[0];
                    
                ?>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <div class="wrap-img">
                        
                        <a href="<?php echo $image_url; ?>" data-lightbox="noi-that">
                            
                            <img src="<?php echo $image_url; ?>" alt="IMG">
                        </a>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</div>