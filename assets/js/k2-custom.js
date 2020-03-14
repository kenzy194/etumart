jQuery(function ($) {
    $(window).load(function () {
        var element = $('#row_banner');
        var w_width = $(window).width();
        var e_width = element.width();
        var c_width = (w_width - e_width)/2;
        element.css({'position': 'relative','left': '-'+c_width+'px','width': w_width+'px'});
    });
    $('#menu-left_menu>li>a').click(function () {
        $('.sidebar_menu>li>a').removeClass('active');
        $('.sub-menu').removeClass('active').slideUp();
        $(this).addClass('active');
        $(this).next().addClass('active').slideDown();
        $(this).removeAttr('href');
    });
});