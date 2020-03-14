<?php
/**
 * Template part for displaying default header layout
 */

?>
<header id="masthead" class="site-header hidden-xs hidden-sm hidden-md">

    <div class="header-top">

        <div class="container-fluid">

            <div class="row">
            <div class="top-header clearfix">
                <!--Social Icons-->
                <div class="col-sm-4 col-md-5 social-icons">
                    <ul>
                        <li>
                            <span>App Download</span>
                            <a href="#" target="_blank">
                                <i class="fa fa-android"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa fa-apple"></i>
                            </a>
                        </li>
                        <li>
                            <span>Follow Us</span>
                            <a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
                <!--Login Language-->
                <div class="col-sm-offset-2 col-sm-5 login-language">
                    <div class="pull-right">
                        <ul>
                            <li class="your_account cats_section" id="customer_short_section">
                                <div class="dropdown">
                                    <a href="javascript:void(0);"><i class="fa fa-lock" aria-hidden="true"></i><abbr>Account</abbr>
                                    </a>
                                    <div class="dropdown-content">
                                        <ul>
                                            <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="fa fa-lock" aria-hidden="true"></i> Sign in</a></li>
                                            <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="fa fa-user" aria-hidden="true"></i> Create an Account</a></li>
                                            <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i class="fa fa-inbox"></i> Your Orders</a></li>
                                            <li><a href="<?php echo get_permalink(get_option('yith_wcwl_wishlist_page_id')); ?>"><i class="fa fa-heart"></i> Your Wish List</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="<?php echo get_permalink(get_option('yith_wcwl_wishlist_page_id')); ?>"><i class="fa fa-heart"></i>
                                    <span>Wishlist</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="info-header">

        <div class="container-fluid">
            
            <div class="header-m-top">

                <div class="row">
                    <div class="col-sm-1">
                        <div class="logo-hd">
                            <?php 
                                $logo_url = get_template_directory_uri() . "/assets/images/logo.png.webp";

                                if ( is_front_page() ) {
                                    printf(
                                        '<h1 class="site-title" style="display: none;">%2$s</h1>',
                                        esc_url( home_url( '/' ) ),
                                        esc_attr( get_bloginfo( 'name' ) )
                                    );
                                }

                                printf(
                                    '<a class="site-logo" href="%1$s" title="%2$s" rel="home"><img src="%3$s" alt="%4$s"/></a>',
                                    esc_url( home_url( '/' ) ),
                                    esc_attr( get_bloginfo( 'name' ) ),
                                    esc_url( $logo_url ),
                                    esc_attr__( 'Logo','kaily' )
                                );
                            ?>
                        </div>
                    </div>
                    
                    <div class="col-sm-11">
                        <div class="header-search-form-wrapper">

                            <div class="searchform-wrapper">

                                <form role="search" method="get" class="searchform" action="<?php echo esc_url(home_url( '/' )); ?>">
                                    
                                    <div class="flex-row-s clearfix">
                                        
                                        <div class="input-s">
                                            <input type="search" class="search-field" name="s" value="" placeholder="Search our global search engine for products, categories" autocomplete="off">
                                            <input type="hidden" name="post_type" value="product">
                                        </div><!-- .flex-col -->
                                        
                                        <div class="button-s">
                                            <button type="submit" class="submit-button">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </div><!-- .flex-col -->
                                    </div><!-- .flex-row -->
                                </form>
                            </div>
                            <div class="dropdown order-from">
                                <div class="order-from-store">
                                    <strong class="order-from-text">ORDER FROM <i class="fa fa-caret-right"></i></strong>
                                    <a class="know-about-stores" href="javascript:void(0);" data-toggle="modal" data-target="#knowAboutStoresModal"><i class="fa fa-info-circle"></i> Know about stores</a>
                                </div>

                                <div class="stores-icons">
                                    <img height="31" width="50" alt="current store icon" src="<?php echo get_template_directory_uri() . '/assets/images/new-us-icon.png.webp'; ?>" class="store-icon">
                                </div>

                                <div class="dropdown-content">
                                    <ul>
                                        <li>
                                            <span class="stores-flag-text">
                                                <img height="20" width="32" alt="US store icon" src="<?php echo get_template_directory_uri().'/assets/images/new-us-icon.png.webp';?>">
                                                <strong>US</strong>
                                            </span>
                                            <span class="stores-text-link">
                                                <a class="active" href="javascript:void(0);" data-mstore="us" data-store="us" data-href="#">Store</a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="stores-flag-text">
                                                <img height="20" width="32" alt="UK store icon" src="<?php echo get_template_directory_uri().'/assets/images/new-uk-icon.png.webp';?>">
                                                <strong>UK</strong>
                                            </span>
                                            <span class="stores-text-link">
                                                <a class="storeswap" href="javascript:void(0);" data-mstore="uk" data-store="uk" data-href="#">Store</a>
                                            </span>
                                        </li>                                  
                                    </ul>
                                </div>
                            </div>
                            <div class="cart">
                                <div class="carts_box cats_section">
                                    <a href="<?php echo wc_get_cart_url(); ?>">
                                        <span id="user_cart_count">
                                            <?php 
                                                global $woocommerce;
                                                echo $woocommerce->cart->cart_contents_count; 
                                            ?>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="wrap-nav">

            <div class="container-fluid">
                
                <div class="menu-s">
                    <div class="main-navigation">
                        
                        <i class="fa fa-bars"></i>
                        <div class="menu-drop">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'container'  => '',
                                    'menu_id'    => 'mastmenu',
                                    'menu_class' => 'primary-menu',
                                ) );
                            ?>
                        </div>
                    </div>

                    <div class="sec-menu">
                        <div class="top-mn">
                            <strong>Top Categories</strong>
                        </div>
                        <div class="sec-top">
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'sec_menu',
                                    'container'  => '',
                                    'menu_id'    => 'sec-menu',
                                    'menu_class' => 'sec-menu',
                                ) );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<header class="header-mobile hidden-lg">
    <div class="container-fluid">
    <div class="mb-wrap-top">
        <div class="button-mb">
            <i class="fa fa-bars"></i>
        </div>
        <div class="logo-mb">
            <?php 
                $logo_url = get_template_directory_uri() . "/assets/images/logo.png.webp";

                if ( is_front_page() ) {
                    printf(
                        '<h1 class="site-title" style="display: none;">%2$s</h1>',
                        esc_url( home_url( '/' ) ),
                        esc_attr( get_bloginfo( 'name' ) )
                    );
                }

                printf(
                    '<a class="site-logo" href="%1$s" title="%2$s" rel="home"><img src="%3$s" alt="%4$s"/></a>',
                    esc_url( home_url( '/' ) ),
                    esc_attr( get_bloginfo( 'name' ) ),
                    esc_url( $logo_url ),
                    esc_attr__( 'Logo','kaily' )
                );
            ?>
        </div>
        <div class="cart-mb">
            <div class="carts_box cats_section">
                <a href="<?php echo wc_get_cart_url(); ?>">
                    <i class="fa fa-shopping-cart"></i>
                    <span id="user_cart_count">
                        <?php 
                            global $woocommerce;
                            echo $woocommerce->cart->cart_contents_count; 
                        ?>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="mb-wrap-search">
        <form role="search" method="get" class="searchform" action="<?php echo esc_url(home_url( '/' )); ?>">
                                    
            <div class="flex-row-s clearfix">
                
                <div class="input-s">
                    <input type="search" class="search-field" name="s" value="" placeholder="Search our global search engine for products, categories" autocomplete="off">
                    <input type="hidden" name="post_type" value="product">
                </div><!-- .flex-col -->
                
                <div class="button-s">
                    <button type="submit" class="submit-button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div><!-- .flex-col -->
            </div><!-- .flex-row -->
        </form>
    </div>
    </div>
</header>