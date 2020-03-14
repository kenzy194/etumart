<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>
		
		<div class="k2-product-rec">

            <div class="rec-carousel cms-carousel owl-carousel owl-theme" data-margin="30" data-loop="true" data-nav="true" data-dots="false" data-autoplay="false" data-large-items="6" data-medium-items="5" data-small-items="3" data-xsmall-items="2">

				<?php foreach ( $related_products as $related_product ) : ?>

					<?php
					 	$post_object = get_post( $related_product->get_id() );

						setup_postdata( $GLOBALS['post'] =& $post_object );?>

						<div class="item">

                            <div class="wrap-k2-image">

                                <a href="<?php echo esc_url( get_permalink() ); ?>">
                                    
                                    <?php woocommerce_template_loop_product_thumbnail(); ?>
                                </a>
                            </div>

                            <div class="wrap-k2-info">
                        
                                <a class="title-post" href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>

				<?php endforeach; ?>
			</div>
		</div>

	</section>
	<?php
endif;

wp_reset_postdata();
