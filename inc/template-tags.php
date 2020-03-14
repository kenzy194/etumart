<?php
/**
 * Custom template tags for this theme.
 *
 * @package kaily
 */

/**
 * Prints HTML for breadcrumbs.
 */
function kaily_breadcrumb()
{
    if ( ! class_exists( 'kaily_Breadcrumb' ) )
    {
        return;
    }

    $breadcrumb = new kaily_Breadcrumb();
    $entries = $breadcrumb->get_entries();

    if ( empty( $entries ) )
    {
        return;
    }

    ob_start();

    foreach ( $entries as $entry )
    {
        $entry = wp_parse_args( $entry, array(
            'label' => '',
            'url'   => ''
        ) );

        if ( empty( $entry['label'] ) )
        {
            continue;
        }

        echo '<li>';

        if ( ! empty( $entry['url'] ) )
        {
            printf(
                '<a class="breadcrumb-entry" href="%1$s">%2$s</a>',
                esc_url( $entry['url'] ),
                esc_attr( $entry['label'] )
            );
        }
        else
        {
            printf( '<span class="breadcrumb-entry" >%s</span>', esc_html( $entry['label'] ) );
        }

        echo '</li>';
    }

    $output = ob_get_clean();

    if ( $output )
    {
        printf( '<ul class="breadcrumb">%s</ul>', wp_kses_post($output) );
    }
}

function custom_meta() {
    $custom_h1 = kaily_get_page_opt( 'custom_h1' ) ? kaily_get_page_opt( 'custom_h1' ) : '';

    if( !empty( $custom_h1 ) ) {
        echo "<h1 style='display: none;'>";
        echo esc_attr( $custom_h1 );
        echo "</h1>";
    }
}

function custom_meta2() {
    $custom_h2 = kaily_get_page_opt( 'custom_h2' ) ? kaily_get_page_opt( 'custom_h2' ) : '';

    if( !empty( $custom_h2 ) ) {
        echo "<h2 style='display: none;'>";
        echo esc_attr( $custom_h2 );
        echo "</h2>";
    }
}


if ( ! function_exists( 'kaily_entry_posted_by' ) ) :
    /**
     * Prints HTML with meta information for the current post author.
     */
    function kaily_entry_posted_by()
    {
        $author_name = $author_url = '';

        if ( ! get_the_author() )
        {
            global $post;

            if ( ! $post instanceof WP_Post )
            {
                return;
            }

            $author_id   = $post->post_author;
            $author_name = get_the_author_meta( 'display_name', $author_id );
            $author_url  = get_author_posts_url( $author_id );
        }
        else
        {
            $author_name = get_the_author();
            $author_url  = get_author_posts_url( get_the_author_meta( 'ID' ) );
        }
        printf(
            '<div class="entry-posted-by">
                <i class="fa fa-user-circle-o"></i>
                <span class="screen-reader-text">%1$s</span>
                <span class="author vcard"><a class="url fn n" href="%2$s">%3$s</a></span>
            </div>',
            esc_html__( 'Posted by: ', 'kaily' ),
            esc_url( $author_url ),
            esc_html( $author_name )
        );
    }
endif;


if ( ! function_exists( 'kaily_entry_posted_on' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function kaily_entry_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) )
        {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf( '<span class="screen-reader-text">%s</span>', esc_html__( 'Posted on: ', 'kaily' ) );

        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) )
        {
            $time_string .= '<time class="entry-date published" datetime="%1$s">%2$s</time>';
            $time_string .= sprintf( '<span class="screen-reader-text">%s</span>', esc_html__( 'Updated on: ', 'kaily' ) );
            $time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
        }
        else
        {
            $time_string .= '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        }

        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( 'c' ) ),
            esc_html( get_the_modified_date() )
        );

        printf(
            '<div class="entry-posted-on">
                <i class="fa fa-clock-o"></i>
                <a href="%1$s" rel="bookmark">%2$s</a>
            </div>',
            esc_url( get_permalink() ),
            wp_kses($time_string,wp_kses_allowed_html())
        );
    }
endif;


if ( ! function_exists( 'kaily_entry_posted_in' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function kaily_entry_posted_in()
    {
        $categories_list = get_the_category_list( ', ' );

        if ( $categories_list )
        {
            printf(
                '<div class="entry-posted-in">
                    <i class="fa fa-bookmark"></i>
                    <span class="screen-reader-text">%1$s</span>
                    %2$s
                </div>',
                esc_html__( 'Posted in: ', 'kaily' ),
                esc_url($categories_list)
            );
        }
    }
endif;


if ( ! function_exists( 'kaily_entry_tagged_in' ) ) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function kaily_entry_tagged_in()
    {
        $tags_list = get_the_tag_list( '', ', ' );

        if ( $tags_list )
        {
            printf(
                '<footer class="entry-footer"><div class="entry-tagged-in">
                    <i class="fa fa-tag"></i>
                    <span class="screen-reader-text">%1$s</span>
                    %2$s
                </div></footer>',
                esc_html__( 'Tagged in: ', 'kaily' ),
                $tags_list
            );
        }
    }
endif;


if ( ! function_exists( 'kaily_entry_comments_popup_link' ) ) :
    /**
     * Prints comments count with link to single post comment form.
     */
    function kaily_entry_comments_popup_link()
    {
        if ( ! post_password_required() && ( comments_open() || get_comments_number() ) )
        {
            echo '<div class="entry-comments-link"><i class="fa fa-comment"></i>';
            comments_popup_link(
                wp_kses(
                    esc_html__( 'Leave a Comment','kaily').'<span class="screen-reader-text">'.' '.esc_html__('on','kaily').' "'.get_the_title().'"</span>',
                    array( 'span' => array( 'class' => array() ) )
                ),
                esc_html__( '1 Comment', 'kaily' ), 
                esc_html__( '% Comments', 'kaily' )
            );
            echo '</div>';
        }
    }
endif;

/**
 * Prints post edit link when applicable
 */
function kaily_entry_edit_link()
{
    edit_post_link(
        sprintf(
            wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                esc_html__( 'Edit', 'kaily' ),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            )
        ),
        '<div class="entry-edit-link"><i class="fa fa-edit"></i>',
        '</div>'
    );
}


function kaily_entry_link_pages()
{
    wp_link_pages( array(
        'before' => sprintf( '<div class="page-links"><span class="screen-reader-text">%s</span>', esc_html__( 'Pages:', 'kaily' ) ),
        'after'  => '</div>',
    ) );
}


if ( ! function_exists( 'kaily_entry_excerpt' ) ) :
    /**
     * Print post excerpt based on length.
     * 
     * @param  integer $length
     */
    function kaily_entry_excerpt( $length = 55 )
    {
        echo wp_kses_post(kaily_get_the_excerpt( $length ));
    }
endif;


if ( ! function_exists( 'kaily_entry_read_more' ) ) :
    /**
     * Prints post read more link
     */
    function kaily_entry_read_more()
    {
        $archive_share_on   = kaily_get_opt( 'archive_share_on', false );


        ?>
        <div class="wrap-readmore-share clearfix">
        <?php
        printf(
            '<div class="entry-readmore"><a href="%1$s" title="%2$s">%3$s <i class="fa fa-angle-right"></i></a></div>',
            esc_url( get_permalink() ),
            esc_attr( get_the_title() ),
            esc_html__( 'Read More', 'kaily' )
        );

        if( $archive_share_on ) {
            ?>
            <ul class="single_share clearfix">
                <p><?php esc_html_e('Share:','kaily'); ?></p>
                <li><a class="button-share facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook"></i></a></li>

                <li><a class="button-share twitter" href="https://twitter.com/home?status=<?php esc_html_e('Check out this article', 'kaily'); ?>:%20<?php the_title(); ?>%20-%20<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a></li>

                <li><a class="button-share google-plus" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i></a></li>

                <li><a class="button-share linkedin" href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
            <?php
        }

        ?>
        </div>
        <?php
    }
endif;

/**
 * Prints HTML with meta information for the current post.
 */
function kaily_entry_meta_single()
{
    $post_author_on = $cats_on = $post_comments_on = $post_date_on = true;

    $post_author_on   = kaily_get_opt( 'post_author_on', true );
    $post_comments_on = kaily_get_opt( 'post_comments_on', true );
    $post_date_on = kaily_get_opt( 'post_date_on', true );
    $cats_on     = kaily_get_opt( 'post_categories_on', true );

    ob_start();

    if ( $post_author_on )
    {
        $author_name = '';

        if ( ! get_the_author() )
        {
            global $post;

            if ( ! $post instanceof WP_Post )
            {
                return;
            }

            $author_id   = $post->post_author;
            $author_name = get_the_author_meta( 'display_name', $author_id );
        }
        else
        {
            $author_name = get_the_author();
        }
        printf(
            '<li class="entry-posted-by">
                <i class="fa fa-user"></i>
                <span class="author vcard">%s</span>
            </li>',
            esc_html( $author_name )
        );
    }

    if ( $post_comments_on )
    {
        if ( ! post_password_required() && ( comments_open() || get_comments_number() ) )
        {
            echo '<li class="detail-comment"><i class="fa fa-comment"></i>';
            echo comments_number( esc_html__('No Comment','kaily'),esc_html__('1 Comment','kaily'),esc_html__('% Comments','kaily'));
            echo '</li>';
        }
    }

    if( $post_date_on ) {
        echo '<li class="date-time"><i class="fa fa-calendar"></i>';
        echo get_the_date();
        echo '</li>';
    }

    if ( $cats_on )
    {
        $categories_list = get_the_category_list( ', ' );

        if ( $categories_list )
        {
            echo '<li class="detail-terms">';
            the_terms( get_the_ID(), 'category', esc_html__('Cat: ','kaily'), ', ' );
            echo '</li>';
        }
    }

    kaily_entry_edit_link();

    $output = ob_get_clean();

    if ( $output )
    {
        printf( '<ul class="entry-meta-archive">%s</ul>', wp_kses_post($output,wp_kses_allowed_html()));
    }
}

/**
 * Prints HTML with meta information for the current post.
 */
function kaily_entry_meta_archive()
{
    $author_on = $cats_on = $comments_on = $archive_date_on = true;

    $author_on   = kaily_get_opt( 'archive_author_on', true );
    $comments_on = kaily_get_opt( 'archive_comments_on', true );
    $archive_date_on = kaily_get_opt( 'archive_date_on', true );
    $cats_on     = kaily_get_opt( 'archive_cat_on', true );

    ob_start();

    if ( $cats_on )
    {
        $categories_list = get_the_category_list( ', ' );

        if ( $categories_list )
        {
            echo '<li class="detail-terms">';
            the_terms( get_the_ID(), 'category', '', ', ' );
            echo ',</li>';
        }
    }

    if( $archive_date_on ) {
        echo '<li class="date-time">';
        echo get_the_date('F d Y');
        echo '</li>';
    }

    if ( $author_on )
    {
        $author_name = '';

        if ( ! get_the_author() )
        {
            global $post;

            if ( ! $post instanceof WP_Post )
            {
                return;
            }

            $author_id   = $post->post_author;
            $author_name = get_the_author_meta( 'display_name', $author_id );
        }
        else
        {
            $author_name = get_the_author();
        }
        printf(
            '<li class="entry-posted-by">
                <span class="author vcard"> %1$s <span>%2$s<span></span>
            </li>',
            esc_html__('by','kaily'),
            esc_html( $author_name )
        );
    }

    kaily_entry_edit_link();

    $output = ob_get_clean();

    if ( $output )
    {
        printf( '<ul class="entry-meta-archive">%s</ul>', wp_kses_post($output,wp_kses_allowed_html()));
    }
}

if ( ! function_exists( 'kaily_entry_meta' ) ) :
    /**
     * Prints HTML with meta information for the current post.
     */
    function kaily_entry_meta()
    {
        $author_on = $date_on = $cats_on = $comments_on = true;

        if ( is_single() )
        {
            $author_on   = kaily_get_opt( 'post_author_on', true );
            $date_on     = kaily_get_opt( 'post_date_on', true );
            $cats_on     = kaily_get_opt( 'post_categories_on', true );
            $comments_on = kaily_get_opt( 'post_comments_on', true );
        }
        else
        {
            $author_on   = kaily_get_opt( 'archive_author_on', true );
            $date_on     = kaily_get_opt( 'archive_date_on', true );
            $cats_on     = kaily_get_opt( 'archive_categories_on', true );
            $comments_on = kaily_get_opt( 'archive_comments_on', true );
        }
        ob_start();

        if ( $author_on )
        {
            kaily_entry_posted_by();
        }

        if ( $date_on )
        {
            kaily_entry_posted_on();
        }

        if ( $cats_on )
        {
            kaily_entry_posted_in();
        }

        if ( $comments_on )
        {
            kaily_entry_comments_popup_link();
        }

        kaily_entry_edit_link();

        $output = ob_get_clean();

        if ( $output )
        {
            printf( '<div class="entry-meta">%s</div>', wp_kses($output,wp_kses_allowed_html()));
        }
    }
endif;

/**
 * Prints posts pagination based on query
 *
 * @param  WP_Query $query     Custom query, if left blank, this will use global query ( current query )
 * @return void
 */
function kaily_posts_pagination( $query = null )
{
    $classes = array();

    if ( empty( $query ) )
    {
        $query = $GLOBALS['wp_query'];
    }

    if ( empty( $query->max_num_pages ) || ! is_numeric( $query->max_num_pages ) || $query->max_num_pages < 2 )
    {
        return;
    }

    $paged = get_query_var( 'paged' );

    if ( ! $paged && is_front_page() && ! is_home() )
    {
        $paged = get_query_var( 'page' );
    }

    $paged = $paged ? intval( $paged ) : 1;

    $pagenum_link = html_entity_decode( get_pagenum_link() );
    $query_args   = array();
    $url_parts    = explode( '?', $pagenum_link );

    if ( isset( $url_parts[1] ) )
    {
        wp_parse_str( $url_parts[1], $query_args );
    }

    $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
    $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

    // Set up paginated links.
    $links = paginate_links( array(
        'base'     => $pagenum_link,
        'total'    => $query->max_num_pages,
        'current'  => $paged,
        'mid_size' => 1,
        'add_args' => array_map( 'urlencode', $query_args ),
        'prev_text' => '</span><i class="fa fa-angle-left"></i>',
        'next_text' => '<i class="fa fa-angle-right"></i>',
    ) );

    ?>
    <nav class="navigation posts-pagination">
        <div class="pagination loop-pagination">
            <?php echo wp_kses_post($links); ?>
        </div><!-- .pagination -->
    </nav>
    <?php
}


/**
 * Prints posts pagination based on theme options or nav type. Custom query only works with paged.
 *
 * @param  WP_Query $query     Custom query, if left blank, this will use global query ( current query )
 * @param  string   $nav_type  Force it to output type you want. Accept 'default' and 'paged'
 * @return void
 */
function kaily_posts_navigation( $query = null, $nav_type = '' )
{
    if ( empty($nav_type) )
    {
        $nav_type = kaily_get_opt( 'archive_nav_type', 'paged' );
    }
    switch ( $nav_type )
    {
        case 'paged':
            kaily_posts_pagination( $query );
            break;
        default:
            posts_nav_link('',esc_html__('Prev','kaily'),esc_html__('Next','kaily'));
            break;
    }
}

function kinhdo_single( $id_post = '' ) {
    $categories_list = wp_get_post_categories( $id_post );
    //$cats = '-5';
    $cats = '';


    foreach($categories_list as $c ){
        $cat = get_category( $c );
        $catid = $cat->category_parent;

        if( $catid != 0 ) {
            $cats = $cats . ',' . $cat ->term_id;
        }
    }
    
    $arg = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'cat' => array( $cats ),
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC',
        'post__not_in' => array($id_post),
    );

    $k = new WP_Query( $arg );

    if( $k ->have_posts() ) :

        ?>
        <div class="container">
            <div class="wrap-recent">

                <div class="recent-title">
                    <h3><img src="<?php echo get_template_directory_uri().'/assets/images/icon_recent.png'; ?>" alt="IMG">BÀI VIẾT LIÊN QUAN</h3>
                </div>
                
                <div class="wrap-rec">
                    <div class="row">
                        <?php
                         while( $k ->have_posts() ) :
                    
                            $k ->the_post();
                            ?>
                            
                            <div class="col-xs-12 col-sm-6">
                                <div class="recent-image">

                                    <a href="<?php echo esc_url( get_permalink() ); ?>">
                                        
                                        <?php
                                        if ( has_post_thumbnail() ) {

                                            echo '<div class="post-image">';
                                            the_post_thumbnail('full');
                                            echo '</div>';
                                        }
                                        else {
                                            $img = get_template_directory_uri() . '/assets/images/single_thubmnail.jpg';
                                            echo "<div class='post-image'><img src='" . $img . "' alt='Image Post'></div>";
                                        }

                                        ?>
                                    </a>
                                </div>

                                <div class="recent-info">
                                    
                                    <a class="re-title" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_title(); ?></a>
                                    <p><?php echo wp_trim_words( get_the_excerpt(), '15', '...'); ?></p>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endif;
}

function k2_single_tag() {
    $tags_list = get_the_tag_list( '', ', ' );

    if ( $tags_list )
    {
        printf(
            '<footer class="entry-footer"><div class="entry-tagged-in">
                <span>%1$s</span>
                %2$s
            </div></footer>',
            esc_html__( 'Tagged in: ', 'kaily' ),
            $tags_list
        );
    }
}


