<?php
/**
 * Helper functions for the theme
 *
 * @package kaily
 */

/**
 * Get theme option based on its id.
 *
 * @param  string $opt_id Required. the option id.
 * @param  mixed $default Optional. Default if the option is not found or not yet saved.
 *                         If not set, false will be used
 * @return mixed
 */
function kaily_get_opt($opt_id, $default = false)
{
    $opt_name = kaily_get_opt_name();

    if (empty($opt_name)) {
        return $default;
    }

    global ${$opt_name};

    if (!isset(${$opt_name}) || !isset(${$opt_name}[$opt_id])) {
        return $default;
    }

    return ${$opt_name}[$opt_id];
}

function k2_slider() {

    $a = kaily_get_opt( 'gallery','' );
    $b = explode(",", $a);
    ?>
    <div class="home-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators">
                <?php 
                $i = 1;
                $c = count( $b );
                /*for( $j = 0; $j < $c; $j++) {
                    ?>
                    <li data-target="#carousel-slider" data-slide-to="<?php echo $j; ?>" class="<?php if( $j == 0) { echo "active"; } ?>"></li>
                    <?php
                }*/
                ?>
            </ol> -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $k = 0;
                for( $k = 0; $k < $c; $k++) {
                    $l = wp_get_attachment_image_src( $b[ $k ], 'full' );
                    ?>
                    <div class="item <?php if( $k == 0) { echo "active"; } ?>">
                        <a href="#">
                            <img src="<?php echo $l[0]; ?>" alt="slider">
                        </a>
                      </div>
                    <?php
                } ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <?php
}

/**
 * Get theme option based on its id.
 *
 * @param  string $opt_id Required. the option id.
 * @param  mixed $default Optional. Default if the option is not found or not yet saved.
 *                         If not set, false will be used
 * @return mixed
 */
function kaily_get_page_opt($opt_id, $default = false)
{
    $page_opt_name = kaily_get_page_opt_name();
    if (empty($page_opt_name)) {
        return $default;
    }
    global $post;
    return $options = !empty($post->ID) ? get_post_meta($post->ID, $opt_id, true) : $default;
}

function kaily_get_post_opt($opt_id, $default = false)
{
    $page_opt_name = kaily_get_post_opt_name();
    if (empty($page_opt_name)) {
        return $default;
    }
    global $post;
    return $options = !empty($post->ID) ? get_post_meta($post->ID, $opt_id, true) : $default;
}

function kaily_get_pro_opt($opt_id, $default = false)
{
    $page_opt_name = kaily_get_pro_opt_name();
    if (empty($page_opt_name)) {
        return $default;
    }
    global $post;
    return $options = !empty($post->ID) ? get_post_meta($post->ID, $opt_id, true) : $default;
}

/**
 *
 * Get post format values.
 *
 * @param $post_format_key
 * @param bool $default
 * @return bool|mixed
 */
function kaily_get_post_format_value($post_format_key, $default = false)
{
    global $post;
    return $value = !empty($post->ID) ? get_post_meta($post->ID, $post_format_key, true) : $default;
}


/**
 * Get opt_name for Redux Framework options instance args and for
 * getting option value.
 *
 * @return string
 */
function kaily_get_opt_name()
{
    return apply_filters('kaily_opt_name', 'cms_theme_options');
}

/**
 * Get opt_name for Redux Framework options instance args and for
 * getting option value.
 *
 * @return string
 */
function kaily_get_page_opt_name()
{
    return apply_filters('kaily_page_opt_name', 'cms_page_options');
}

/**
 * Get opt_name for Redux Framework options instance args and for
 * getting option value.
 *
 * @return string
 */
function kaily_get_pro_opt_name()
{
    return apply_filters('kaily_pro_opt_name', 'cms_pro_options');
}

/**
 * Get opt_name for Redux Framework options instance args and for
 * getting option value.
 *
 * @return string
 */
function kaily_get_post_opt_name()
{
    return apply_filters('kaily_post_opt_name', 'cms_post_options');
}

/**
 * Get page title and description.
 *
 * @return array Contains 'title' and 'desc'
 */
function kaily_get_page_titles()
{
    $title = $desc = '';

    // Default titles
    if (!is_archive()) {
        // Posts page view
        if (is_home()) {
            // Only available if posts page is set.
            if (!is_front_page() && $page_for_posts = get_option('page_for_posts')) {
                $title = get_the_title($page_for_posts);
            }
        } // Single page view
        elseif (is_page()) {
            
            $otp_check = get_post_meta(get_the_ID(), 'page_title_op_on', true);

            if( !empty( $otp_check ) ) {

                $title = get_post_meta(get_the_ID(), 'custom_title', true);
            } else {

                $title = '';
            }

            if ( ! $title ) {
                $title = get_the_title();
            }
        } // 404
        elseif (is_404()) {
            $title = esc_html__('404', 'kaily');
        } // Search result
        elseif (is_search()) {
            $title = esc_html__('Tìm Kiếm: ', 'kaily') . ' "'. get_search_query(). '" ';
        }
        elseif ( is_single() ) {
            $title = esc_html__('Blog Detail', 'kaily');
        } // Anything else
        else {
            $title = get_the_title();
        }
    } else {
        $title = single_cat_title( '', false );
    }

    if( is_single() ) {
        $title = get_the_title();
    }

    return array(
        'title' => $title,
        'desc'  => $desc
    );
}

/**
 * Generates an excerpt from the post content with custom length.
 * Default length is 55 words, same as default the_excerpt()
 *
 * The excerpt words amount will be 55 words and if the amount is greater than
 * that, then the string '&hellip;' will be appended to the excerpt. If the string
 * is less than 55 words, then the content will be returned as it is.
 *
 * @param int $length Optional. Custom excerpt length, default to 55.
 * @param int|WP_Post $post Optional. You will need to provide post id or post object if used outside loops.
 * @return string           The excerpt with custom length.
 */
function kaily_get_the_excerpt($length = 55, $post = null)
{
    $post = get_post($post);

    if (empty($post) || 0 >= $length) {
        return '';
    }

    if (post_password_required($post)) {
        return esc_html__('Post password required.', 'kaily');
    }

    if( !empty( $post->post_excerpt ) ) {

        $content = apply_filters('the_content', strip_shortcodes($post->post_excerpt));
    }
    else {

        $content = apply_filters('the_content', strip_shortcodes($post->post_content));
    }
    $content = str_replace(']]>', ']]&gt;', $content);

    $excerpt_more = apply_filters('kaily_excerpt_more', '&hellip;');
    $excerpt = wp_trim_words($content, $length, $excerpt_more);

    return $excerpt;
}


/**
 * Check if provided color string is valid color.
 * Only supports 'transparent', HEX, RGB, RGBA.
 *
 * @param  string $color
 * @return boolean
 */
function kaily_is_valid_color($color)
{
    $color = preg_replace("/\s+/m", '', $color);

    if ($color === 'transparent') {
        return true;
    }

    if ('' == $color) return false;

    // Hex format
    if (preg_match("/(?:^#[a-fA-F0-9]{6}$)|(?:^#[a-fA-F0-9]{3}$)/", $color)) return true;

    // rgb or rgba format
    if (preg_match("/(?:^rgba\(\d+\,\d+\,\d+\,(?:\d*(?:\.\d+)?)\)$)|(?:^rgb\(\d+\,\d+\,\d+\)$)/", $color)) {
        preg_match_all("/\d+\.*\d*/", $color, $matches);
        if (empty($matches) || empty($matches[0])) return false;

        $red = empty($matches[0][0]) ? $matches[0][0] : 0;
        $green = empty($matches[0][1]) ? $matches[0][1] : 0;
        $blue = empty($matches[0][2]) ? $matches[0][2] : 0;
        $alpha = empty($matches[0][3]) ? $matches[0][3] : 1;

        if ($red < 0 || $red > 255 || $green < 0 || $green > 255 || $blue < 0 || $blue > 255 || $alpha < 0 || $alpha > 1.0) return false;
    } else {
        return false;
    }

    return true;
}

/**
 * Minify css
 *
 * @param  string $css
 * @return string
 */
function kaily_css_minifier($css)
{
    // Normalize whitespace
    $css = preg_replace('/\s+/', ' ', $css);
    // Remove spaces before and after comment
    $css = preg_replace('/(\s+)(\/\*(.*?)\*\/)(\s+)/', '$2', $css);
    // Remove comment blocks, everything between /* and */, unless
    // preserved with /*! ... */ or /** ... */
    $css = preg_replace('~/\*(?![\!|\*])(.*?)\*/~', '', $css);
    // Remove ; before }
    $css = preg_replace('/;(?=\s*})/', '', $css);
    // Remove space after , : ; { } */ >
    $css = preg_replace('/(,|:|;|\{|}|\*\/|>) /', '$1', $css);
    // Remove space before , ; { } ( ) >
    $css = preg_replace('/ (,|;|\{|}|\(|\)|>)/', '$1', $css);
    // Strips leading 0 on decimal values (converts 0.5px into .5px)
    $css = preg_replace('/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css);
    // Strips units if value is 0 (converts 0px to 0)
    $css = preg_replace('/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css);
    // Converts all zeros value into short-hand
    $css = preg_replace('/0 0 0 0/', '0', $css);
    // Shortern 6-character hex color codes to 3-character where possible
    $css = preg_replace('/#([a-f0-9])\\1([a-f0-9])\\2([a-f0-9])\\3/i', '#\1\2\3', $css);
    return trim($css);
}

/**
 * Header Tracking Code to wp_head hook.
 */
function kaily_header_code()
{
    $site_header_code = kaily_get_opt('site_header_code');
    if ($site_header_code !== '') print wp_kses($site_header_code,wp_kses_allowed_html());
}

add_action('wp_head', 'kaily_header_code');

/**
 * Footer Tracking Code to wp_footer hook.
 */
function kaily_footer_code()
{
    $site_footer_code = kaily_get_opt('site_footer_code');
    if ($site_footer_code !== '') print wp_kses($site_footer_code,wp_kses_allowed_html());
}

add_action('wp_footer', 'kaily_footer_code');

/**
 * Custom CSS to wp_head hook.
 */
function kaily_custom_css()
{

    $styles = null;
    $custom_css = kaily_get_opt('site_css');

    if ($custom_css !== '') $styles .= $custom_css;

    $css_output = "\n<style type=\"text/css\">\n" . preg_replace('/\s+/', ' ', $styles) . "\n</style>\n";

    if (!empty($custom_css)) print wp_kses($css_output,wp_kses_allowed_html());

}

add_action('wp_head', 'kaily_custom_css');

function menu_mobile() {
    ?>
    <div class="menu-mo hidden-md hidden-lg">
        <div class="overlay-mo"></div>
        <div class="content-mo">

            <div class="header-search-form-mo">

                <div class="searchform-mo">

                    <form role="search" method="get" class="searchform" action="<?php echo esc_url(home_url( '/' )); ?>">
                        
                        <div class="flex-row-s clearfix">

                            <div class="search-form-categories">
                                <select class="search_categories" name="product_cat">
                                    <option value="" selected="selected">All</option>
                                    <option value="ao-thun">Áo Thun</option>
                                    <option value="op-lung">Ốp Lưng</option>
                                    <option value="phu-kien-dien-thoai">Phụ Kiện Điện Thoại</option>
                                </select>
                            </div><!-- .flex-col -->
                            
                            <div class="input-s">
                                <input type="search" class="search-field" name="s" value="" placeholder="Tìm kiếm…" autocomplete="off">
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

            <div class="wrap-nav-mo">

                <nav class="mo-navigation">

                    <?php
                        wp_nav_menu( 
                            array(
                                'theme_location' => 'mobile_me',
                                'container'  => '',
                                'menu_id'    => 'mobile-me',
                                'menu_class' => 'mobile-menu',
                            ) 
                        );
                    ?>
                </nav>
            </div>

            <div class="social-mo">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
}

function cart_mobile() {
    ?>
    <div class="cart-mn-ct hidden-md hidden-lg">
        <div class="overlay-mo"></div>
        <div class="wrap-cart-mo">
            <h3><?php echo esc_html_e('giỏ hàng','k2-woo'); ?></h3>
            <?php woocommerce_mini_cart(); ?>
        </div>
    </div>
    <?php
}





