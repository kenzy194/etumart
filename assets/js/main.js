// Input 0
(function(a){
	var window_width, window_height, scroll_top,header_top;
	var header = a('#masthead .info-header');

	/* admin bar */
    var adminbar = a('.admin-bar');
    var adminbar_height = 0;

	/* ====================
     Scroll To Top
     ====================== */
    /* Check to see if the window is top if not then display button */
    function back_to_top() {

        if (c > f) {

            a('.back-to-top').addClass('show');
        } else {

            a('.back-to-top').removeClass('show');
        }
    }

	function l(){1200>d&&(
		a(".mb-menu .middle-desc .menu-mb-drop li.menu-item-has-children").append('<span class="main-menu-toggle"></span>'),

		a(".mb-menu .middle-desc .menu-mb-drop li.menu-item-has-children > .main-menu-toggle").on("click",function(z){
			z.preventDefault();
			a(this).parent().find("> .sub-menu").toggleClass("submenu-open");
			a(this).parent().find("> .main-menu-toggle").toggleClass("close")
		}),

		a(".mb-menu .middle-desc .menu-mbb").on("click",function(zz){
			zz.preventDefault();
			a(this).parent().find(".primary-menu").toggleClass("pri-menu-open")
		}),

		a(".header-mobile .mb-wrap-top .button-mb").on("click",function(){

			a(".mb-menu").addClass("mb-menu-open")
		}),

		a(".mb-menu .sidebar-desc .close-desc .fa").on("click",function(){

			a(".mb-menu").removeClass("mb-menu-open")
		})

		)}
	var f,c,d;
	a(window).load(function(){
		d=a(window).width();
		/* get admin bar height */
        adminbar_height = adminbar.length > 0 ? 32 : 0;

        /* get top header menu */
        header_top = header.length > 0 ? header.offset().top - adminbar_height : 0;
		a("#page-loadding").fadeOut("slow");
		c=a(window).scrollTop();
		f=a(window).height();l();stiky_menu();back_to_top();

		});
	a(window).on("resize",function(){
		d=a(window).width();
		stiky_menu();
	});
	a(window).scroll(function(){

		c=a(window).scrollTop();
		stiky_menu();
	});

/**
 * Stiky menu
 *
 * Show or hide sticky menu.
 * @author Fox
 * @since 1.0.0
 */
function stiky_menu() {
    if ( (d > 991) && (header.length > 0) ) {
        if ( header_top < c ) {
            a('body').addClass('hd-fixed');
        }
        else {
            a('body').removeClass('hd-fixed');
        }
    }
}

a(document).ready(function(){

	a('.search_categories').on( 'change', function(){

	  var t=a(this),
		i=t.find("option:selected").text(),
		n=a('<span class="select-resize-ghost">').html(i);
		n.appendTo(t.parent());
		var o=n.width();
		n.remove(),t.width(o+7)

	}).change();

	if ( ! String.prototype.getDecimals ) {
        String.prototype.getDecimals = function() {
            var num = this,
                match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?a/);
            if ( ! match ) {
                return 0;
            }
            return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
        }
    }
    // Quantity "plus" and "minus" buttons
    a( document.body ).on( 'click', '.plus, .minus', function() {
        var aqty        = a( this ).closest( '.quantity' ).find( '.qty'),
            currentVal  = parseFloat( aqty.val() ),
            max         = parseFloat( aqty.attr( 'max' ) ),
            min         = parseFloat( aqty.attr( 'min' ) ),
            step        = aqty.attr( 'step' );

        // Format values
        if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
        if ( max === '' || max === 'NaN' ) max = '';
        if ( min === '' || min === 'NaN' ) min = 0;
        if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

        // Change the value
        if ( a( this ).is( '.plus' ) ) {
            if ( max && ( currentVal >= max ) ) {
                aqty.val( max );
            } else {
                aqty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
            }
        } else {
            if ( min && ( currentVal <= min ) ) {
                aqty.val( min );
            } else if ( currentVal > 0 ) {
                aqty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
            }
        }

        // Trigger change event
        aqty.trigger( 'change' );
    });

	a(".cms-carousel").each(function(){a(this).find("> .vc_row-full-width").remove();

a(this).owlCarousel({margin:parseInt(a(this).attr("data-margin")),lazyLoad: 1,loop:"true"===a(this).attr("data-loop")?!0:!1,nav:"true"===a(this).attr("data-nav")?!0:!1,navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],dots:"true"===a(this).attr("data-dots")?!0:!1,autoplay:"false"===a(this).attr("data-autoplay")?!1:a(this).attr("data-autoplay"),responsive:{0:{items:parseInt(a(this).attr("data-xsmall-items"))},768:{items:parseInt(a(this).attr("data-small-items"))},992:{items:parseInt(a(this).attr("data-medium-items"))},
1200:{items:parseInt(a(this).attr("data-large-items"))}}})})
})})(jQuery);