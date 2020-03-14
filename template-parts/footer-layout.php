<footer class="site-footer">									
									
	<div class="footer-top">								
		<div class="container-fluid">							
			<div class="sub">						
				<form action="" method="post" id="newsletter-subscribe-email">					
					<h4 class="col-md-4 col-xs-12 col-md-offset-2 full-width">									
					All the latest offers delivered right to your inbox!									
					</h4>									
									
					<div class="block-content col-md-5 col-xs-12 full-width" style="display:flex;">									
					<div class="input-box">									
					<i id="newsletter-loader" class="fa fa-circle-notch fa-spin hide"></i>									
					<input placeholder="Subscribe Now" name="email" id="newsletter" title="Sign up for our newsletter" type="text">									
					<div class="error" data-msg="Please enter a valid email address." id="validate-newsletter"></div>									
					</div>									
					<div class="actions">									
					<button type="submit" onclick="return newsletter_submit('male');" title="Male" class="button"><i class="fa fa-male"></i></button>									
					<button type="submit" onclick="return newsletter_submit('female');" title="Female" class="button"><i class="fa fa-female"></i></button>									
					</div>									
					<div class="overlay"></div>									
					</div>									
				</form>									
			</div>						
		</div>							
	</div>								
									
<div class="menu-bt">									
<div class="container-fluid">									
<?php									
wp_nav_menu( array(									
'theme_location' => 'footer_menu',									
'container'  => '',									
'menu_id'    => 'footermenu',									
'menu_class' => 'footer-menu',									
) );									
?>									
</div>									
</div>									
									
<div class="container-fluid footer-links-extra">									
<div class="row">									
<!--We Accept-->									
<div class="col-md-3 col-sm-6 col-xs-12 we-accept">									
<h4>We Accept</h4>									
<ul>									
<li>									
<img height="44" width="67" alt="paypal-pay" title="Paypal" src="<?php echo get_template_directory_uri() .'/assets/images/paypal-pay.png.webp';?>" defer="defer">									
</li>									
<li>									
<img height="44" width="67" alt="Visa" title="Visa" src="<?php echo get_template_directory_uri() .'/assets/images/visa-pay.png.webp'; ?>" defer="defer">									
</li>									
<li>									
<img height="44" width="67" alt="Mastercard" title="Mastercard" src="<?php echo get_template_directory_uri() .'/assets/images/master-card-pay.png.webp'; ?>" defer="defer">									
</li>									
</ul>									
</div>									
<!--Shipping Method-->									
<div class="col-md-3 col-sm-6 col-xs-12 shipping-method">									
<h4>Shipping Methods</h4>									
<ul>									
<li>									
<img height="39" width="38" alt="ubuy-fulfilled" src="<?php echo get_template_directory_uri() .'/assets/images/ubuy-fulfilled.png.webp'; ?>" defer="defer">									
<span class="bussiness-days">									
3-6 business days                            </span>									
</li>									
<li>									
<img height="39" width="38" alt="ubuy-not-fulfilled" src="<?php echo get_template_directory_uri() .'/assets/images/ubuy-not-fulfilled.png.webp';?>" defer="defer">									
<span class="bussiness-days">									
Minimum 10 business days                            </span>									
</li>									
</ul>									
</div>									
<!--Our Locations-->									
	<div class="col-md-3 col-sm-6 col-xs-12 our-locations">									
		<h4>Our Locations</h4>									
		<div class="country-list">
			<div class="cms-carousel owl-carousel owl-theme ft-cr" data-margin="10" data-loop="true" data-nav="true" data-dots="false" data-autoplay="true" data-large-items="3" data-medium-items="3" data-small-items="2" data-xsmall-items="2">

                <div class="item">
                    <img height="39" width="38" alt="ubuy-not-fulfilled" src="<?php echo get_template_directory_uri() .'/assets/images/egypt.png.webp';?>" defer="defer">
                </div>

                <div class="item">
                    <img height="39" width="38" alt="ubuy-not-fulfilled" src="<?php echo get_template_directory_uri() .'/assets/images/egypt.png.webp';?>" defer="defer">
                </div>

                <div class="item">
                    <img height="39" width="38" alt="ubuy-not-fulfilled" src="<?php echo get_template_directory_uri() .'/assets/images/egypt.png.webp';?>" defer="defer">
                </div>

                <div class="item">
                    <img height="39" width="38" alt="ubuy-not-fulfilled" src="<?php echo get_template_directory_uri() .'/assets/images/egypt.png.webp';?>" defer="defer">
                </div>
            </div>									
		</div>									
	</div>									
	<!--Customer Service-->									
	<div class="col-md-3 col-sm-6 col-xs-12 customer-service">									
		<h4>Customer Service</h4>									
		<div class="service-block"> <img height="74" width="160" src="<?php echo get_template_directory_uri() .'/assets/images/support-guaranteed.png.webp';?>" title="ubuy support 24 / 7" alt="ubuy support 24 / 7" defer="defer"> </div>									
	</div>									
</div>									
</div>	
<div class="ubuy-popular-search">
            <h6>© 2020 Etumart Co.</h6>
            <h5>ETUMART POPULAR SEARCHES</h5>
            <?php									
				wp_nav_menu( array(									
				'theme_location' => 'ftbt_menu',									
				'container'  => '',									
				'menu_id'    => 'ftbtmenu',									
				'menu_class' => 'footer-bt-menu',									
				) );									
			?>
        </div>								
									
</footer><!-- #colophon -->									
									
									
									
									
									
