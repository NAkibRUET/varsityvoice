$(function() {
    'use strict'; // Start of use strict
   
   
     /*------------------------------------
    01. Sticky Menu
	-------------------------------------- */  
    var windows = $(window);
    var stick = $(".header-sticky");
	windows.on('scroll',function() {    
		var scroll = windows.scrollTop();
		if (scroll < 245) {
			stick.removeClass("sticky");
		}else{
			stick.addClass("sticky");
		}
	}); 
	  
	/*------------ Start gallery popup ------------*/
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
            }
        }
    });
	/*----------------------------------------
    Slider Carousel
	---------------------------------------- */
     /*---------------------
    Nivo Slider active js 
    --------------------- */
    $('#mainSlider').nivoSlider({
        directionNav: true,
        animSpeed: 500,
        slices: 18,
        pauseTime: 300000,
        pauseOnHover: false,
        controlNav: true,
        prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',
        nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>'
    });
	
	//Two Item Carousel
	if ($('.two-item-carousel').length) {
		$('.two-item-carousel').owlCarousel({
			loop:true,
			margin:70,
			nav:true,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1,
					margin:30
				},
				600:{
					items:1,
					margin:30
				},
				800:{
					items:2,
					margin:30
				},
				1024:{
					items:2,
					margin:30
				},
				1200:{
					items:2
				}
			}
		});    		
	}
		
	//Testimonial Carousel
		$(".team-members").owlCarousel({
		 
		  	items:3,
			loop:true,
			margin:10,
			autoplay:true,
			autoplayTimeout:2000,
			autoplayHoverPause:true,            
            responsiveClass:true,
            responsive:{
                    320:{
                        items:1,
                    },
                    480:{
                        items:2,
                    },
                    768:{
                        items:3,
                    }
                }
			});	
	/*==============================
        FAQ pAGE Owl Carousel Testimonial One
      ================================*/ 
        $('#testimonial-2').owlCarousel({

            autoplay:true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            loop:true,
            dots: false,
            singleItem:true,
            // margin:10,
            navText: ["<i class='icofont-long-arrow-left'></i>","<i class='icofont-long-arrow-right'></i>"],
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            smartSpeed:450,
            responsive:{
              0:{
                items: 1,
                nav: false
              },
              768:{
                items: 1,
                nav: true
              },
              991:{
                items: 1,
                nav: true,
                singleItem:true,
              }
            }
        });		
	/*----------------------------------------
    Our Team Carousel
	---------------------------------------- */
    $('.testimoni').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        smartSpeed: 900,
        autoplayTimeout: 3000,
        items: 1
    });
	/*----------------------------------------
    About Carousel
	---------------------------------------- */
    $('#about').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        smartSpeed: 900,
		nav:true,
        autoplayTimeout: 3000,
        items: 1
    });
	/*----------------------------------------
    Our Partners Carousel
	---------------------------------------- */
    $('.partners').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        smartSpeed: 900,
        autoplayTimeout: 3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
			700:{
                items:3
            },
            1000:{
                items:3
            },
			1300:{
                items:5
            },
            1600:{
                items:5
            }
        }
    });
    /*--------------------------
    scrollUp
    ---------------------------- */
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    /* ---------------------------------------------------
     Start Magnific Popup in Video Popup Section
    ----------------------------------------------------- */   
    $('.video-btn').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    }); 
	 
    /*--------------------------
     Tabs
    ---------------------------- */	
	if($('.tab-box').length){
		//Tabs
		$('.tab-box .tab-list .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('href'));			
			$('.tab-box .tab-list .tab-btn').removeClass('active-btn');
			$(this).addClass('active-btn');
			$('.tab-content .tab-item').fadeOut(0);
			$('.tab-content .tab-item').removeClass('active-tab');
			$(target).fadeIn(300);
			$(target).addClass('active-tab');
		});
	}
	/*-----------------------
    jQuery MeanMenu
	------------------------- */
	$('#mobile-menu-active').meanmenu({
    meanScreenWidth: "767",
    meanMenuContainer: ".mobile-menu-area .mobile-menu",
	});  
	/*------------------------------------------------------------------
       Fancybox
    ------------------------------------------------------------------*/
        var fancy = $ (".fancybox");
        if(fancy.length) {
          fancy.fancybox({
            arrows: true,
            animationEffect: "zoom-in-out",
            transitionEffect: "zoom-in-out",
          });
        }
	/*------------------------------------------------------------------
        Year
    ------------------------------------------------------------------*/
	$(function(){
    var theYear = new Date().getFullYear();
    $('#year').html(theYear);
	});
	
	/*------------------------------------------------------------------
        Animation Numbers
    ------------------------------------------------------------------*/
    jQuery('.animateNumber').each(function() {
        var num = jQuery(this).attr('data-num');

        var top = jQuery(document).scrollTop() + (jQuery(window).height());
        var pos_top = jQuery(this).offset().top;
        if (top > pos_top && !jQuery(this).hasClass('active')) {
            jQuery(this).addClass('active').animateNumber({
                number: num
            }, 2000);
        }
    });
	/*------------------------------------------------------------------
      Coming Soon Countdown
    ------------------------------------------------------------------*/
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime(
                '<div class="cntdown"><span class="days"><strong>%-D</strong><p>Days</p></span></div><div class="cntdown"><span class="hour"><strong> %-H</strong><p>Hours</p></span></div> <div class="cntdown"><span class="minutes"><strong>%M</strong> <p>MINUTES</p></span></div><div class="cntdown"><span class="second"><strong> %S</strong><p>SECONDS</p></span></div>'
            ));
        });
    });
	/*---------------------------------------------------------------------
    		Magnific Popup 
    ------------------------------------------------------------------------*/
    if ($('.front-gallery, .gallery-section').length) {

        $('.front-gallery, .gallery-section').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title') + '<small>by sbtechnosoft</small>';
                }
            }
        });
    }
    if ($('.image-popup-no-margins').length) {

        $('.image-popup-no-margins').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom',
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300
            }
        });
    }
	
	/*---------------------------------------------------------------------
    Gallery Post Hove Effect for Caption Script
    ------------------------------------------------------------------------*/
    function gallery_hover() {

        if ($(".gallery-caption img").length) {
            $(".gallery-caption img").on('mouseover', function() {
                var img_width = $(".gallery-caption img").width();
                var img_height = $(".gallery-caption img").height();
                $(".gallery-caption .blur").css({
                    "height": img_height,
                    "width": img_width
                });
            });
        }
    }
    gallery_hover();

});

/*------------------------------------------------------------------
WOW
------------------------------------------------------------------*/
 new WOW().init();
/*------------------------------------------------------------------
 Loader 
------------------------------------------------------------------*/
jQuery(window).on("load scroll", function() {
    'use strict'; // Start of use strict
    // Loader 
     $('#dvLoading').fadeOut('slow', function () {
            $(this).remove();
        });
	$('.google-map').on('click', function() {
            $('.google-map').find('iframe').css("pointer-events", "auto");
        });
    //Animation Numbers	 
    jQuery('.animateNumber').each(function() {
        var num = jQuery(this).attr('data-num');
        var top = jQuery(document).scrollTop() + (jQuery(window).height());
        var pos_top = jQuery(this).offset().top;
        if (top > pos_top && !jQuery(this).hasClass('active')) {
            jQuery(this).addClass('active').animateNumber({
                number: num
            }, 2000);
        }
    });
	});
	/*------------------------------------------------------------------
    FAQ
    ------------------------------------------------------------------*/
    $('.panel-heading a').on('click', function() {
        $('.panel-heading').removeClass('active');
        $(this).parents('.panel-heading').addClass('active');
    });
