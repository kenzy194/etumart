<?php

if ( (is_front_page() && is_home()) || is_archive() || is_single() )
{
    return;
}

$titles = kaily_get_page_titles();

ob_start();

if ( $titles['title'] )
{
    printf( '<h1 class="page-title--title">%s</h1>', wp_kses_post($titles['title']) );
}

$titles_html = ob_get_clean();

if ( ! $titles_html )
{
    return;
}
?>
<div id="pagetitle" class="page-title">

    <div class="container">

            <?php
                printf( '<div class="page-title--wrap">%s', wp_kses_post($titles_html));

            ?>
            <ul>
                <li>Trang Chủ</li>
                <li><span><?php echo $titles['title']; ?></span></li>
            </ul>
        </div>
    </div>
</div>