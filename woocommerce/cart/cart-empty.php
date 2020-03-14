<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
//do_action( 'woocommerce_cart_is_empty' );
?>
	<div class="page-title-cart-emtry">
	    <h1>Shopping Cart is Empty </h1>
	</div>
	<div class="empty-cart-page">
		<div class="row">
		    <div class="cart-image hidden-xs hidden-sm col-md-6">
		        <img src="<?php echo get_template_directory_uri().'/assets/images/empty_cart.jpg'; ?>">
		    </div>
		    <div class="cart-page-text col-md-6 col-xs-12">
		        <div class="cart-text">
		            <h5>Your shopping cart is empty</h5>
		            <h6>Lets Change that !</h6>
		            <a href="<?php echo home_url(); ?>">start shopping</a>
		                    </div>
		    </div>
		</div>
	</div>

	<div class="suggested-products">
	    <h1>PRODUCTS YOU MAY LIKE</h1>
	    <div class="product-slider">

	    	<div class="product-carousel cms-carousel owl-carousel owl-theme" data-margin="10" data-loop="true" data-nav="true" data-dots="false" data-autoplay="false" data-large-items="6" data-medium-items="5" data-small-items="3" data-xsmall-items="2">

                    <?php 
                        $arg = array(
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'posts_per_page' => 8,
                            'orderby' => 'rand',
                        );

                        $a = new WP_Query( $arg );

                        if( $a ->have_posts() ) :

                            while( $a ->have_posts() ) :

                                $a ->the_post();
                                ?>

                                <div class="item">

                                    <div class="wrap-k2-image">

                                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                                            
                                            <?php woocommerce_template_loop_product_thumbnail(); ?>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                wp_reset_query();
                            endwhile;
                        else :
                        ?>

                            <p>Chưa có bài viết !</p>
                        <?php endif;
                    ?>
                </div>
	    </div>
    </div>
