<?php
/**
 * Recent Posts widgets
 *
 * @package kaily
 * @version 1.0
 */

class kaily_title extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'k2_title',
            esc_html__( '[K2] Widget', 'kaily' ),
            array(
                'description' => esc_html__( 'Shows on widget.', 'kaily' ),
                'customize_selective_refresh' => true,
            )
        );
    }

    /**
     * Outputs the HTML for this widget.
     *
     * @param array $args An array of standard parameters for widgets in this theme
     * @param array $instance An array of settings for this widget instance
     * @return void Echoes it's output
     **/
    function widget( $args, $instance )
    {
        if ( ! is_shop() && ! is_product_taxonomy() ) {
            return;
        }

        $taxonomy           = 'pa_mau';
        $query_type         = $this->get_instance_query_type( $instance );
        $terms = get_terms( $taxonomy, array( 'hide_empty' => '1' ) );

        ob_start();

        $found = $this->layered_nav_list( $terms, $taxonomy, $query_type );

        if ( ! $found ) {
            ob_end_clean();
        } else {
            echo ob_get_clean(); // @codingStandardsIgnoreLine
        }
    }

    /**
     * Get this widgets query type.
     *
     * @param array $instance Array of instance options.
     * @return string
     */
    protected function get_instance_query_type( $instance ) {
        return 'and';
    }

    /**
     * Get this widgets display type.
     *
     * @param array $instance Array of instance options.
     * @return string
     */
    protected function get_instance_display_type( $instance ) {
        return 'list';
    }

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array $new_instance An array of new settings as submitted by the admin
     * @param array $old_instance An array of the previous settings
     * @return array The validated and (if necessary) amended settings
     **/
    function update( $new_instance, $old_instance )
    {
    }

    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array $instance An array of the current settings for this widget
     * @return void Echoes it's output
     **/
    function form( $instance )
    {   
    }

    /**
     * Count products within certain terms, taking the main WP query into consideration.
     *
     * This query allows counts to be generated based on the viewed products, not all products.
     *
     * @param  array  $term_ids Term IDs.
     * @param  string $taxonomy Taxonomy.
     * @param  string $query_type Query Type.
     * @return array
     */
    protected function get_filtered_term_product_counts( $term_ids, $taxonomy, $query_type ) {
        global $wpdb;

        $tax_query  = WC_Query::get_main_tax_query();
        $meta_query = WC_Query::get_main_meta_query();

        if ( 'or' === $query_type ) {
            foreach ( $tax_query as $key => $query ) {
                if ( is_array( $query ) && $taxonomy === $query['taxonomy'] ) {
                    unset( $tax_query[ $key ] );
                }
            }
        }

        $meta_query     = new WP_Meta_Query( $meta_query );
        $tax_query      = new WP_Tax_Query( $tax_query );
        $meta_query_sql = $meta_query->get_sql( 'post', $wpdb->posts, 'ID' );
        $tax_query_sql  = $tax_query->get_sql( $wpdb->posts, 'ID' );

        // Generate query.
        $query           = array();
        $query['select'] = "SELECT COUNT( DISTINCT {$wpdb->posts}.ID ) as term_count, terms.term_id as term_count_id";
        $query['from']   = "FROM {$wpdb->posts}";
        $query['join']   = "
            INNER JOIN {$wpdb->term_relationships} AS term_relationships ON {$wpdb->posts}.ID = term_relationships.object_id
            INNER JOIN {$wpdb->term_taxonomy} AS term_taxonomy USING( term_taxonomy_id )
            INNER JOIN {$wpdb->terms} AS terms USING( term_id )
            " . $tax_query_sql['join'] . $meta_query_sql['join'];

        $query['where'] = "
            WHERE {$wpdb->posts}.post_type IN ( 'product' )
            AND {$wpdb->posts}.post_status = 'publish'"
            . $tax_query_sql['where'] . $meta_query_sql['where'] .
            'AND terms.term_id IN (' . implode( ',', array_map( 'absint', $term_ids ) ) . ')';

        $search = WC_Query::get_main_search_query_sql();
        if ( $search ) {
            $query['where'] .= ' AND ' . $search;
        }

        $query['group_by'] = 'GROUP BY terms.term_id';
        $query             = apply_filters( 'woocommerce_get_filtered_term_product_counts_query', $query );
        $query             = implode( ' ', $query );

        // We have a query - let's see if cached results of this query already exist.
        $query_hash = md5( $query );

        // Maybe store a transient of the count values.
        $cache = apply_filters( 'woocommerce_layered_nav_count_maybe_cache', true );
        if ( true === $cache ) {
            $cached_counts = (array) get_transient( 'wc_layered_nav_counts_' . sanitize_title( $taxonomy ) );
        } else {
            $cached_counts = array();
        }

        if ( ! isset( $cached_counts[ $query_hash ] ) ) {
            $results                      = $wpdb->get_results( $query, ARRAY_A ); // @codingStandardsIgnoreLine
            $counts                       = array_map( 'absint', wp_list_pluck( $results, 'term_count', 'term_count_id' ) );
            $cached_counts[ $query_hash ] = $counts;
            if ( true === $cache ) {
                set_transient( 'wc_layered_nav_counts_' . sanitize_title( $taxonomy ), $cached_counts, DAY_IN_SECONDS );
            }
        }

        return array_map( 'absint', (array) $cached_counts[ $query_hash ] );
    }

    /**
     * Get current page URL with various filtering props supported by WC.
     *
     * @return string
     * @since  3.3.0
     */
    protected function get_current_page_url() {
        if ( defined( 'SHOP_IS_ON_FRONT' ) ) {
            $link = home_url();
        } elseif ( is_shop() ) {
            $link = get_permalink( wc_get_page_id( 'shop' ) );
        } elseif ( is_product_category() ) {
            $link = get_term_link( get_query_var( 'product_cat' ), 'product_cat' );
        } elseif ( is_product_tag() ) {
            $link = get_term_link( get_query_var( 'product_tag' ), 'product_tag' );
        } else {
            $queried_object = get_queried_object();
            $link           = get_term_link( $queried_object->slug, $queried_object->taxonomy );
        }

        // Min/Max.
        if ( isset( $_GET['min_price'] ) ) {
            $link = add_query_arg( 'min_price', wc_clean( wp_unslash( $_GET['min_price'] ) ), $link );
        }

        if ( isset( $_GET['max_price'] ) ) {
            $link = add_query_arg( 'max_price', wc_clean( wp_unslash( $_GET['max_price'] ) ), $link );
        }

        // Order by.
        if ( isset( $_GET['orderby'] ) ) {
            $link = add_query_arg( 'orderby', wc_clean( wp_unslash( $_GET['orderby'] ) ), $link );
        }

        /**
         * Search Arg.
         * To support quote characters, first they are decoded from &quot; entities, then URL encoded.
         */
        if ( get_search_query() ) {
            $link = add_query_arg( 's', rawurlencode( htmlspecialchars_decode( get_search_query() ) ), $link );
        }

        // Post Type Arg.
        if ( isset( $_GET['post_type'] ) ) {
            $link = add_query_arg( 'post_type', wc_clean( wp_unslash( $_GET['post_type'] ) ), $link );

            // Prevent post type and page id when pretty permalinks are disabled.
            if ( is_shop() ) {
                $link = remove_query_arg( 'page_id', $link );
            }
        }

        // Min Rating Arg.
        if ( isset( $_GET['rating_filter'] ) ) {
            $link = add_query_arg( 'rating_filter', wc_clean( wp_unslash( $_GET['rating_filter'] ) ), $link );
        }

        // Min Rating Arg.
        if ( isset( $_GET['filter_cat'] ) ) {
            $link = add_query_arg( 'filter_cat', $_GET['filter_cat'], $link );
        }

        // All current filters.
        if ( $_chosen_attributes = WC_Query::get_layered_nav_chosen_attributes() ) { // phpcs:ignore Squiz.PHP.DisallowMultipleAssignments.Found, WordPress.CodeAnalysis.AssignmentInCondition.Found
            foreach ( $_chosen_attributes as $name => $data ) {
                $filter_name = 'filter_' .wc_attribute_taxonomy_slug( $name );
                if ( ! empty( $data['terms'] ) ) {
                    $link = add_query_arg( $filter_name, implode( ',', $data['terms'] ), $link );
                }
                if ( 'or' === $data['query_type'] ) {
                    $link = add_query_arg( 'query_type_' . $filter_name, 'or', $link );
                }
            }
        }

        return apply_filters( 'woocommerce_widget_get_current_page_url', $link, $this );
    }

    /**
     * Return the currently viewed term ID.
     *
     * @return int
     */
    protected function get_current_term_id() {
        return absint( is_tax() ? get_queried_object()->term_id : 0 );
    }

    /**
     * Return the currently viewed term slug.
     *
     * @return int
     */
    protected function get_current_term_slug() {
        return absint( is_tax() ? get_queried_object()->slug : 0 );
    }

    /**
     * Show list based layered nav.
     *
     * @param  array  $terms Terms.
     * @param  string $taxonomy Taxonomy.
     * @param  string $query_type Query Type.
     * @return bool   Will nav display?
     */
    protected function layered_nav_list( $terms, $taxonomy, $query_type ) {
        // List display.
        $term_counts        = $this->get_filtered_term_product_counts( wp_list_pluck( $terms, 'term_id' ), $taxonomy, $query_type );
        $base_link          = $this->get_current_page_url();
        $filter_name = "filter_mau";
        $found = true;
        $c_filter = isset( $_GET[ $filter_name ] ) ? explode( ',', wc_clean( wp_unslash( $_GET[ $filter_name ] ) ) ) : array();
        $link_rm = remove_query_arg( $filter_name, $base_link );
        $link_rm = str_replace( '%2C', ',', $link_rm );

        echo "<div class='k2-wrap-filter'>";
        echo "<ul>";
        foreach ( $terms as $term ) {
            $current_values = $c_filter;
            $option_is_set  = in_array( $term->slug, $current_values, true );
            $count          = isset( $term_counts[ $term->term_id ] ) ? $term_counts[ $term->term_id ] : 0;
            $current_filter = isset( $_GET[ $filter_name ] ) ? explode( ',', wc_clean( wp_unslash( $_GET[ $filter_name ] ) ) ) : array(); // WPCS: input var ok, CSRF ok.
            $current_filter = array_map( 'sanitize_title', $current_filter );

            if ( ! in_array( $term->slug, $current_filter, true ) ) {
                $current_filter[] = $term->slug;
            }
            $link = remove_query_arg( $filter_name, $base_link );
            
            $taxonomy_images = get_option( 'taxonomy_image_plugin' );

            $attachment_id = $taxonomy_images[ $term->term_id ]; // Image ID
            $image = wp_get_attachment_image( $attachment_id ); // Image
        

            // Add current filters to URL.
            foreach ( $current_filter as $key => $value ) {
                // Exclude query arg for current term archive term.
                if ( $value === $this->get_current_term_slug() ) {
                    unset( $current_filter[ $key ] );
                }

                // Exclude self so filter can be unset on click.
                if ( $option_is_set && $value === $term->slug ) {
                    unset( $current_filter[ $key ] );
                }
            }

            if ( ! empty( $current_filter ) ) {
                asort( $current_filter );
                $link = add_query_arg( $filter_name, implode( ',', $current_filter ), $link );
                $link = str_replace( '%2C', ',', $link );
            }

            echo '<li><a href="' . esc_url( $link_rm ) .'?'.$filter_name.'='.$term->slug.'"><span>'. $image.'</span><p>'.$term->name .'</p></a></li>';
        }
        echo "</ul>";
        echo "</div>";

        return $found;
    }
}

function kaily_title_register_widgets() {
    register_widget( 'kaily_title' );
}

add_action( 'widgets_init', 'kaily_title_register_widgets' );
