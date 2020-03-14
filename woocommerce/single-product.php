<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
	
	<div class="container-fluid">
		<div class="row">
		    <div class="col-xs-12">
		    	<div class="important-notes-block">
			        <span class="note-heading">Important information : </span>
			        <ol class="note-list">
			            <li>Limitations : For products shipped internationally, please note that any manufacturer warranty may not be valid; manufacturer service options may not be available; product manuals, instructions, and safety warnings may not be in destination country languages; the products (and accompanying materials) may not be designed in accordance with destination country standards, specifications, and labeling requirements; and the products may not conform to destination country voltage and other electrical standards (requiring use of an adapter or converter if appropriate). The recipient is responsible for assuring that the product can be lawfully imported to the destination country. When ordering from Ubuy or its affiliates, the recipient is the importer of record and must comply with all laws and regulations of the destination country.</li>
			            <li>Not all the products listed on Ubuy are for sale, as Ubuy is a global search engine. Products are subject to export/trade regulations.</li>
			        </ol>
		        </div>
		    </div>
		</div>
	</div>

<?php get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
