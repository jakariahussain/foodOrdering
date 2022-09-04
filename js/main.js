(function($) {
    /*============================================= signIn Hover Effect =============================================*/
    $(".signIn").hover(function() {
        $(this).css("background-color", "#f8730a");
        $(".signUp").css({
            "background-color": "#ffffff",
            "color": "#4c4c4c",
            "text-decoration": "underline",
        });
    }, function() {
        $(this).css("background-color", "#ffffff");
        $(".signUp").css({
            "background-color": "#f8730a",
            "color": "#fff",
            "text-decoration": "none",
        });
    });

    /******************** Aside Togglebar ********************/
    $('.filter_toggle').click(function() {
            $('.restaurants-filters-wrap').slideToggle();
        })
        /******************** mobile menu ********************/
    $('#mobile-menu').meanmenu({
        meanMenuContainer: '.mobile-menu',
        meanScreenWidth: "991",
    });
    /*============================================= Wow Plugin =============================================*/
    new WOW().init();




    $('.rating').click(function() {
        $('.rating input').val();
        return false;
    })

    /*============================================= slider_area =============================================*/
    $('.slider_area .owl-carousel').owlCarousel({
        margin: 10,
        loop: true,
        autoplay: true,
        navText: false,
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    /*============================================= slider_area =============================================*/
    $('.product_offer_area .owl-carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: false,
        navText: false,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    /*============================================= nice selected =============================================*/
    $('select').niceSelect();
    /*============================================= Data-Background =============================================*/
    $("[data-background]").each(function() {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    })


    //
    /*============================================= Work file =============================================*/
    var $grid = $('.grid').isotope({
        // options
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
    });
    var $buttonGroup = $('.filters');
    $buttonGroup.on('click', 'li', function(event) {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        var $button = $(event.currentTarget);
        $button.addClass('is-checked');
        var filterValue = $button.attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
    /*============================================= more content =============================================*/
    $('.details_coupon_content .m1').click(function() {
        $('.more_content').slideToggle(500);
        return false;
    })

    $('.dt1 .m1').click(function() {
        $('.more_content').slideToggle(500);
        return false;
    })

    /*============================================= magnificPopup =============================================*/

    $('.gallery-item').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*============================================= magnificPopup =============================================*/
    var scroll = new SmoothScroll('a[href*="#"]', {
        ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
        header: null, // Selector for fixed headers (must be a valid CSS selector)
        speed: 2000,
        offset: 50,
        easing: 'easeInOutCubic',
        customEasing: function(time) {
            return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;
        },
    });



    $('input[name="restaurant-dates"]').daterangepicker({
            "singleDatePicker": true,
            "timePicker": true,
            "timePicker24Hour": true,
            "timePickerIncrement": 15,
            "timePickerSeconds": true,
            "autoApply": true,
            "endDate": "02/04/2020",
            "locale": {
                format: 'DD/MM/YYYY hh:mm A',
            }
        },

        function(start, end, label) {
            console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
        });

    /*============================================= input:checkbox =============================================*/
    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });






})(jQuery);