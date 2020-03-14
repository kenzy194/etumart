<?php
/**
 * Template Name: About Us
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
    <div class="about-page">
        <div class="header">
            <h1>About Us <span>Delivering Happiness Worldwide</span></h1>
        </div>

        <div class="what-is-ubuy">
            <div class="row">
                <div class="col-md-12 pull-none">
                    <h4>What is Ubuy?</h4>
                    <p>Ubuy is not your usual e-commerce website, we provide our customers with access to an excellent variety of products. Today’s shoppers want more in a shorter time period, and let's not forget the easy purchase methods and delivery to make it worth their while. Based in Kuwait, Ubuy offer its services in more than 50 countries around the world to provide its shoppers with access to product categories that keeps them coming back.</p>
                </div>
            </div>
        </div>

        <div class="world-map">
            <h2>Ubuy, We Deliver <span>6 Continents | 50+ Countries | 10,000+ Cities | 50+ Million Products</span></h2>
            <div class="ubuy-world-map-block"><img class="tablet-display" alt="ubuy all Continents" src="<?php echo get_template_directory_uri().'/assets/images/world-map-all-regions.png'; ?>"></div>
        </div>

        <div class="ubuy-core-values">
            <div class="row">
                <div class="col-md-4 core-value-block">
                    <img alt="ubuy category" src="<?php echo get_template_directory_uri().'/assets/images/ubuy-core-values.png'; ?>">
                    <p>Our core <strong>values</strong></p>
                </div>
                <div class="col-md-8 core-value-points">
                    <h4>Ubuy Core Values:</h4>
                    <p>As we grew, it became more important to state and define our core values, in which we develop our brand and business strategy. These are our values that we live by:</p>
                    <ol>
                        <li>Deliver the Supercalifragilisticexpialidocious Philosophy.</li>
                        <li>Drive Change</li>
                        <li>Be Creative</li>
                        <li>Be Passionate</li>
                        <li>Pursue Growth</li>
                        <li>Do More With Less</li>
                        <li>Customer Service Isn't Just A Department!</li>
                    </ol>
                </div>
            </div>

            <div class="about-us-content">
                <p>We have been asked how we’ve grown so quickly, the answer is simple. We have positioned the organization in providing the best and cheapest products and to provide the best customer service possible through technology. Internally, we call this our Supercalifragilisticexpialidocious philosophy.</p>
                <h5>Affiliation with Manufacturers</h5>
                <p>Ubuy.com is a non-affiliated third-party provider of products found on this website. Unless otherwise specified, Ubuy is not affiliated with the manufacturers of the products found on the site and products found here are independently sourced on behalf of the buyer.</p>
                <h5>Nature of Products Provided – Disclaimer of Manufacturer Warranties &amp; Policies</h5>
                <p>While Ubuy provides products that it acquires through genuine sources, as a non- affiliated third-party source of products, purchases made through this site, MAY void various benefits offered by the good’s manufacturer, such as warranties, return policies, and service agreements. Furthermore, the products MAY be subject to different quality control policies than those offered by authorized dealers, such as, climate control, stock aging controls, and other quality control measures.</p>
                <h5>Third Party Trademarks</h5>
                <p>All product names, logos, and brands on this site are property of their respective owners. All company, product and service names used in this website are for identification purposes only. Products provided by Ubuy are not produced by Ubuy and use of company names, logos, and brands does not imply endorsement.</p>
                <h5>Manufacturer’s Warranties</h5>
                <p>As a non-affiliated third-party provider of products, purchases made through Ubuy MAY void various benefits offered by the product’s manufacturer, such as warranties, return policies, and service agreements. UBUY RECOMMENDS THAT ANY PURCHASER OF PRODUCTS ON THIS SITE REVIEW ANY WARRANTY OR OTHER POLICIES OF THE MANUFACTURER TO DETERMINE IF THE PURCHASE THROUGH UBUY WILL AFFECT THE APPLICABILITY OF ANY WARRANTY OR POLICY OF THE MANUFACTURER Any description is for the sole purpose of identifying the Goods and shall not be deemed to create a warranty of any kind by Ubuy. All goods sold on this site are provided by Ubuy on an "As Is" basis without additional warranty of any kind.</p>
                <div class="happy-shopping">!! Happy Shopping !! <img style="width: 60px;" alt="" src="<?php echo get_template_directory_uri().'/assets/images/ubuy-happy-shopping.png'; ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();