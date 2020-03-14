<?php
/**
 * The template for displaying search results pages
 *
 * @package kaily
 */
get_header();
$blog_column = $sidebar_col = '';
if( is_active_sidebar( 'sidebar-blog' ) )
{

    $blog_column = 'blog-area col-xs-12 col-sm-12 col-md-8 col-lg-9';
    $sidebar_col = 'sidebar_archive hidden-xs hidden-sm col-md-4 col-lg-3';
}

else
{

    $blog_column = 'blog-area col-xs-12 col-sm-12 col-md-12 col-lg-12';
    $sidebar_col = 'sidebar_archive hidden-xs hidden-sm hidden-md hidden-lg';
}
?>

    <p>Kenji</p>
<?php
get_footer();