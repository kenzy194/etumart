<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 *
 * @package kaily
 */

?>
    
  	</div><!-- #content -->
  
  	<?php get_template_part('template-parts/footer-layout'); ?>
  	<a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
</div><!-- #page -->
<div class="mb-menu">
	<div class="mb-overlay"></div>
	<div class="sidebar-desc">
		<div class="close-desc"><i class="fa fa-times"></i></div>
		<div class="top-desc">
			<ul>
				<li>
					<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
                        <span><i class="fa fa-user"></i></span>
                        <span>Hello,<?php if( is_user_logged_in() ) { $current_user = wp_get_current_user(); 
        				printf( ' %s!', esc_html( $current_user->display_name ) ); } else { echo "Sign In"; } ?></span>
                    </a>
				</li>
				<li><a href="<?php echo get_permalink(get_option('yith_wcwl_wishlist_page_id')); ?>"><i class="fa fa-heart"></i> My Wish List</a></li>
				<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="fa fa-inbox"></i> My Orders</a></li>
			</ul>
		</div>

		<div class="middle-desc">
			<ul>
				<li>
					<a href="#" class="menu-mbb"><div class="span-l"><i class="fa fa-list-ul"></i> Shop By Category</div><div class="span-r"><i class="fa fa-angle-down"></i></div></a>
                    <div class="menu-mb-drop">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'container'  => '',
                                'menu_id'    => 'mastmenu',
                                'menu_class' => 'primary-menu',
                            ) );
                        ?>
                    </div>
				</li>
				<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="fa fa-truck"></i> Track Orders</a></li>
			</ul>
		</div>

		<div class="bottom-desc">
			<div class="panel panel-default social-icons social-icons-mobile">
                <ul>
                    <li>
                        <span>Follow Us</span>

                        <div class="pull-right">
                            <a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="panel panel-default social-icons social-icons-mobile">
                <ul>
                    <li style="line-height: 50px;"><span class="app-download">App Download</span>
                        <div class="pull-right">
                            <a href="#" target="_blank">
                                <i class="fa fa-android"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa fa-apple"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
		</div>
	</div>
</div>
<?php
wp_footer(); ?>
</body>
</html>