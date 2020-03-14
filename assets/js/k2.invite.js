;jQuery( function( $ ) {
    var window_width;
    var d=$(window).width();

	"use strict";
    function show_invite() {
        $(".k2-invite-chatting").fadeIn( "slow" );
        $('body').addClass('k2-invite-body');
    }

	/*function show_invite_ft() {
		$(".k2-invite-footer").css( "bottom","0px" );
	}*/

	$(window).load( function() {
        d = $(window).width();

        setTimeout(
            function(){ 
                //show_invite();
            },
            300000
            //30s for 1s
        );
    });

    $(document).ready( function() {
    	var check_invite_refuse = $('.k2-invite-chatting .invite-refuse');
        var check_invite_accept = $('.k2-invite-chatting .invite-accept');
    	var check_invite_ft = $('.k2-invite-footer .k2-close-footer');

        /*if( check_invite_ft.length > 0 ){

            check_invite_ft.on('click', function(e) {
                e.preventDefault();
                $(".k2-invite-footer").css( "bottom","-170px" );

                setTimeout(
                    function(){ 
                        show_invite(); 
                    },
                    30000
                    //60s for 1s
                );
            })
        }*/

        $('.list_link li').click(function () {
            let id = $(this).attr('data-link');
            $('.list_link li').removeClass('active');
            $('.list_content li').removeClass('active');
            $(this).addClass('active');
            $('#'+id).addClass('active');
        });
        $('.proce_list_link li').click(function () {
            let id = $(this).attr('data-tab');
            $('.proce_list_link li').removeClass('active');
            $('.proce_list_content li').removeClass('active');
            $(this).addClass('active');
            $('#'+id).addClass('active')
        });

    	if( check_invite_refuse.length > 0 ){
    		
    		check_invite_refuse.on('click', function(e) {
    			e.preventDefault();
    			$(".k2-invite-chatting").fadeOut( "slow" );
				$('body').removeClass('k2-invite-body');

                setTimeout(
                    function(){ 
                        show_invite(); 
                    },
                    30000
                    //1000 for 1s
                );

    			/*if( d > 767 ) {
                    setTimeout(
                        function(){ 
                            show_invite(); 
                        },
                        60000
                        //1000 for 1s
                    );
                } else {
                    setTimeout(
                        function(){
                            show_invite_ft();
                        },
                        30000
                        //40s for 1s
                    );
                }*/
    		})
    	}

    	if( check_invite_accept.length > 0 ){
    		
    		check_invite_accept.on('click', function(e) {
    			if ( d > 768 ) {
                    e.preventDefault();
                    window.open('http://tv.suckhoemienbac.com/lr/chatpre.aspx?id=mwd41382893&lng=en');
                } else {
                    e.preventDefault();
                    $("#LR-BTN").trigger("click");
                }
    			$(".k2-invite-chatting").fadeOut( "slow" );
                $('body').removeClass('k2-invite-body');

    			setTimeout(
    				function(){ 
    					show_invite(); 
    				},
    				90000
    				//90s
    			);
    		})
    	}

        var crs = $('.lh-pl-crs');
        if( crs.length > 0 ) {
            crs.owlCarousel({
                center: true,
                loop:true,
                margin:50,
                nav: true,
                navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
                dots: false,
                responsive:{
                    0:{
                        items: 2,
                        margin: 20,
                        center: false,
                    },
                    768:{
                        items: 3,
                        margin: 20,
                    },
                    992:{
                        items: 3,
                        margin: 20,
                    },
                    1200:{
                        items: 3
                    },
                }
            });
        }


    });
});