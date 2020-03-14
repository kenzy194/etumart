<?php
/**
 * Search Form
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
    <div class="searchform-wrap">
        <input type="text" placeholder="<?php esc_attr_e('Search on the site', 'kaily'); ?>" name="s" class="search-field pull-left" />
        <button type="submit" class="btn-primary search-submit"><i class="fa fa-search"></i></button>
    </div>
</form>