<?php
/**
 * Template Name: Contact Us
 *
 * @since 1.0.0
 * @author Kenji
 */

get_header();
?>
<div class="container-fluid">
    <div class="breadcrumbs">
        <ul>
            <li><a href="<?php echo esc_url(home_url( '/' )); ?>">Home</a></li>
            <li><?php the_title(); ?></li>
        </ul>
    </div>
    <div class="contactus-page">
        <h1>
            Contact us for any further questions.
        </h1>
        <div class="contact-us-ul">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="first-step-contact">
                        <div class="icon_wrapper"><i class="fa fa-comment"></i></div>
                        <h3>Drop your query!</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="infoo">
                        <div class="icon_wrapper">
            				<i class="fa fa-phone"></i>
            			</div>
        			    <div class="ubuy-india-address">

                            <h3>Let's have a talk!</h3>
                            <p><i class="fa fa-phone"></i> (+965) - 22204472/ 22055305</p>
                            <p>Arabic Call Center timings :-<br>Sun To Thu - 8:00 AM-9:00 PM<br>Fri and Sat - 11:30 AM-8:00 PM</p>
                        
                            <h5>Our Address:</h5>
                            <p>Al Murqab, Block 3, Khalid Ibn Al Waleed Street, Mazaya Tower 3, Floor 22,Kuwait</p>
                            <a class="wa-msg-us-btn" href="#" target="_blank">
                            <i class="fa fa-whatsapp"></i> What's app</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="make-mn">
                        <div class="icon_wrapper">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="ct">
                            <h3>Make Money With Us</h3>
                            <p>Affiliate programs are common throughout the Internet and offer website owners an additional way to spread the word about their websites. Among others, our program is free to join, easy to sign up and requires no technical knowledge! As our affiliates, you will generate traffic and sales for our website and receive attractive commissions in return. <br> <a class="cl-mo" target="_blank" href="#">Click here for more details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();