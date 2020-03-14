<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div class="k2-single-woo">
	
	<div class="row">
		<div class="col-xs-12 col-md-6">
			
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			//do_action( 'woocommerce_before_single_product_summary' );
			woocommerce_show_product_images();
			?>
		</div>

		<div class="col-xs-12 col-md-6">
			<?php
			woocommerce_template_single_title();

			echo "<p class='sku-it'>item#: <span>". $product->get_sku()."</span></p>";

			woocommerce_template_single_price();
			$colors = get_post_meta($product->get_id(),"_product_color",true);
			$asin = get_post_meta($product->get_id(),"_sku",true);
			?>
            <div id="k2-product-colors" class="k2-product-options">
                <label for="k2_select_color">
                    <span>Color</span>
                    <select class="input-select" id="k2_select_color" name="k2_select_color">
                        <?php
                        foreach (explode(",",$colors) as $color){
                            $cl = explode("|",$color);
                            ?>
                            <option value="<?php echo $cl[0] ?>"<?php echo $asin === $cl[0]?" selected":"" ?>><?php echo $cl[1] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </label>
            </div>
			<div class="prime-text">
            	<span>This product is not Fulfilled by Ubuy and can take minimum 10 days in delivery. We might cancel the product from the order and refund you if any issue arise with the delivery of this product.</span>
            </div>
            <?php
            woocommerce_template_single_add_to_cart();

            echo "<div class='k2-share'>";
            woocommerce_template_single_sharing();
            echo "</div>";

            echo "<div class='k2-exscrept'";
            woocommerce_template_single_excerpt();
            echo "</div>";
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			//do_action( 'woocommerce_single_product_summary' );
			?>
		</div>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	woocommerce_output_product_data_tabs();
	woocommerce_output_related_products()
	//do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
