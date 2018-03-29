jQuery(function($) {
    "use strict";
    
    jQuery(document).ready(function() {
        //meanmenu
        $('header nav').meanmenu();
        if ($.fn.owlCarousel) {
            //this code is for client_crsl
            $('.client_crsl').owlCarousel({
                nav: false,
                dots: false,
                autoplay: false,
                loop: true,
                responsiveClass: true,
                responsive: {
                    300: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    768: {
                        items: 3

                    },
                    1170: {
                        items: 3
                    }
                }
            });
            // Slider_crsl
            $('.hero_slider').owlCarousel({
                nav: false,
                dots: true,
                autoplay: false,
                loop: true,
                items: 1,
                animation: true,
            });
  if( $(window).width() > 768 ) {
            //tihs code is for slider effect
            $(".hero_slider").on('translate.owl.carousel', function() {
                $('.slider_text h1').removeClass('slideInLeft animated').hide();
                $('.slider_text h2').removeClass('slideInLeft animated').hide();
                $('.slider_text p').removeClass('slideInLeft animated').hide();
                $('.slider_text .slider_btn').removeClass('slideLeInft animated').hide();
            });
            $(".hero_slider").on('translated.owl.carousel', function() {
                $('.owl-item.active .slider_text h1').addClass('slideInLeft animated').show();
                $('.owl-item.active .slider_text h2').addClass('slideInLeft animated').show();
                $('.owl-item.active .slider_text p').addClass('slideInLeft animated').show();
                $('.owl-item.active .slider_text .slider_btn').addClass('slideInLeft animated').show();
            });

  }

        }
        
        $('.header').on('click', '.search-toggle', function(e) {
            var selector = $(this).data('selector');

            $(selector).toggleClass('show').find('.search-input').focus();
            $(this).toggleClass('active');

            e.preventDefault();
        });
        
        
        
        //this code is for venobox
        if ($.fn.venobox) {
            $('.venobox').venobox({
                titleattr: 'data-title'
            });
        }
        //SearchBox Trigger
        $( '.search_box .searchTrigger' ).on( 'click', function(){
            $('.search-box-container').toggleClass( 'show_search_box' );
        } );
        //this code is for accordion
        $('.accordion-title').on('click', function(e) {
            $(this).find('i').toggleClass('fa-angle-down');
            $(this)
                .parents('.panel-custom')
                .siblings()
                .find('.accordion-title')
                .find('i')
                .removeClass('fa-angle-down')
                .addClass('fa-angle-up');
        });
        // makes sure the whole site is loaded
        $('#preloader').fadeOut(); // will first fade out the loading animation
        $('.preloader_spinner').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $("body").removeClass("preloader_active");
    });
    // this code is for isotope
    jQuery(window).load(function() {
        if ($.fn.isotope) {
            // this code is for isotope
            var $portfolio = $('.gallery_items');
            $portfolio.isotope({
                itemSelector: '.grid-item',
                layoutMode: 'masonry',
                filter: '*'
            });
            $('.filter-menu li').on('click', function() {
                $('.filter-menu li').removeClass('current_menu_item');
                $(this).addClass('current_menu_item');
                var selector = $(this).attr('data-filter');
                $portfolio.isotope({
                    filter: selector
                });
            });
        }

    });

})(jQuery);