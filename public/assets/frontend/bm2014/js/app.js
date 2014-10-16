;
(function ($, window, undefined) {
    'use strict';

    var $doc = $(document),
        Modernizr = window.Modernizr;


    $.fn.foundationAlerts ? $doc.foundationAlerts() : null;
    $.fn.foundationAccordion ? $doc.foundationAccordion() : null;
    $.fn.foundationTooltips ? $doc.foundationTooltips() : null;
    $('input, textarea').placeholder();


    $.fn.foundationButtons ? $doc.foundationButtons() : null;


    $.fn.foundationNavigation ? $doc.foundationNavigation() : null;


    $.fn.foundationTopBar ? $doc.foundationTopBar({breakPoint: 940}) : null;


    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;


    $.fn.foundationTabs ? $doc.foundationTabs() : null;

    $.ajax_Complete = function (response, status) {
        $('.ajax-message').remove();
        var loginCheck = new RegExp("login-container");
        if (loginCheck.test(response.responseText)) {
            window.location.href = '/login';
        }
    }

    $("#featured").orbit();


    // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
    // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
    // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
    // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
    // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

    // Hide address bar on mobile devices
    if (Modernizr.touch) {
        $(window).load(function () {
            setTimeout(function () {
                window.scrollTo(0, 1);
            }, 0);
        });
    }


    //menu toggle
    $(".menubtn").click(function () {
        $(".header_nav").slideToggle("slow", function () {
            // Animation complete.
        });
        $(this).toggleClass('active')
    });


    //menu toggle
    $(".searchbtn-mobile").click(function () {
        $("header .searcharea").slideToggle("slow", function () {
            // Animation complete.
        });
        $(this).toggleClass('active')
    });


    //accordion for faq page
    $('.accordion').find('.accordion-toggle').click(function () {


        //Hide the other panels
        $(".accordion-toggle").not($(this).next()).removeClass('active');

        //Expand or collapse this panel
        $(this).addClass('active');

        //Expand or collapse this panel
        $(this).next().slideToggle('slow');

        //Hide the other panels
        $(".accordion-content").not($(this).next()).slideUp('slow');

    });

    //fade in animation


    //odd even
    $('.blockrow:even').addClass('even');
    $('.blockrow:odd').addClass('odd');


    $(".collapsible_header").click(function () {

        $(this).parent().children(".collapsible_content").slideToggle(500);
        $(this).parent().children(".collapsible_content").toggleClass('active');


    });


    $(window).on("scroll", function (e) {

        var sidepos = parseFloat($('footer').offset().top - $('.stadiumpicture').outerHeight());

        if ($(window).scrollTop() > 500 && $(window).scrollTop() < sidepos) {
            $('.stadiumpicture').css('position', 'fixed');
            $('.stadiumpicture').css('top', '0');
        }

        else if ($(window).scrollTop() > 500 && $(window).scrollTop() >= sidepos) {
            $('.stadiumpicture').css('position', '');
            $('.stadiumpicture').css('top', '' + sidepos + 'px');
        }

        else if ($(window).scrollTop() < 500) {
            $('.stadiumpicture').css('position', 'static');
            $('.stadiumpicture').css('top', '');
        }
    });


    $(".hottickets .block-heading").click(function () {
        $(".hottickets .block-content").toggleClass('open');
    });

    $(".topteams .block-heading").click(function () {
        $(".topteams .block-content").toggleClass('open');
    });



})(jQuery, this);
