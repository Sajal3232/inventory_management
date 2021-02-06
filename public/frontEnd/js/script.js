jQuery(document).ready(function () {
    "use strict";
      $(function(){
		  new WOW().init(); 
		});

        $(window).load(function () {
        $("#sticker").sticky({
            topSpacing: 0
        });
    });
    //    skticky js
        
        
    //    meanmenu js end
        // Header Sticky
        $(window).on('scroll',function() {
            if ($(this).scrollTop() > 120){  
                $('.sinmun-nav').addClass("is-sticky");
            }
            else{
                $('.sinmun-nav').removeClass("is-sticky");
            }
        });
//   MAIN SLIDER START
    $('.textslider').owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        autoplay: true,
        nav: false,
        autoplayHoverPause: false,
        margin: 0,
        smartSpeed: 1000,
        autoplayTimeout: 5000,
        mouseDrag: false,
        animateIn: 'rotateInDownLeft',
        animateOut: 'slideOutDown',
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });
    // home text slider 
    $('.video-list').owlCarousel({
        items: 3,
        loop: true,
        dots: false,
        autoplay: true,
        nav: true,
        autoplayHoverPause: true,
        margin: 0,
        smartSpeed: 1000,
        autoplayTimeout: 5000,
        mouseDrag: true,
        animateIn: 'slideInUp',
        animateOut: 'fadeOutDown',
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });
    
    // home text slider
    $('.recent-work-slider').owlCarousel({
        items: 3,
        loop: true,
        dots: false,
        autoplay: true,
        nav: false,
        autoplayHoverPause: false,
        margin: 30,
        smartSpeed: 1000,
        autoplayTimeout: 5000,
        mouseDrag: true,
        animateIn: 'slideInUp',
        animateOut: 'fadeOutDown',
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });
    // home text slider 
    $('.clientslider').owlCarousel({
        items: 1,
        loop: true,
        dots: false,
        autoplay: true,
        nav: true,
        autoplayHoverPause: false,
        margin: 30,
        smartSpeed: 1000,
        autoplayTimeout: 5000,
        mouseDrag: false,
        navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>'],
    });
    // home text slider 

    $('.mobile-menu').meanmenu();


/*======scroll up======*/
    (function ($) {
        var $main_nav = $('#main-nav');
        var $toggle = $('.toggle');

        var defaultData = {
            maxWidth: false,
            customToggle: $toggle,
            navTitle: 'Giftcards',
            levelTitles: true,
            pushContent: '#container'
        };

        // add new items to original nav
        $main_nav.find('li.add').children('a').on('click', function () {
            var $this = $(this);
            var $li = $this.parent();
            var items = eval('(' + $this.attr('data-add') + ')');

            $li.before('<li class="new"><a>' + items[0] + '</a></li>');

            items.shift();

            if (!items.length) {
                $li.remove();
            } else {
                $this.attr('data-add', JSON.stringify(items));
            }

            Nav.update(true);
        });

        // call our plugin
        var Nav = $main_nav.hcOffcanvasNav(defaultData);

        // demo settings update

        const update = (settings) => {
            if (Nav.isOpen()) {
                Nav.on('close.once', function () {
                    Nav.update(settings);
                    Nav.open();
                });

                Nav.close();
            } else {
                Nav.update(settings);
            }
        };

        $('.actions').find('a').on('click', function (e) {
            e.preventDefault();

            var $this = $(this).addClass('active');
            var $siblings = $this.parent().siblings().children('a').removeClass('active');
            var settings = eval('(' + $this.data('demo') + ')');

            update(settings);
        });

        $('.actions').find('input').on('change', function () {
            var $this = $(this);
            var settings = eval('(' + $this.data('demo') + ')');

            if ($this.is(':checked')) {
                update(settings);
            } else {
                var removeData = {};
                $.each(settings, function (index, value) {
                    removeData[index] = false;
                });

                update(removeData);
            }
        });
    })(jQuery);
    /*========scrollUp end========*/



    

   })






