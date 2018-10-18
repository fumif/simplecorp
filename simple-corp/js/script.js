jQuery(document).ready(function($) {
    $(window).scroll(function() {
        navScroll();
    });


    // Hide top navigation when scrolled to the bottom
    function navScroll() {
        if ((!$('#offcanvas-wrapper').hasClass('show-nav')) && ($(window).scrollTop() + $(window).height() > $(document).height() - 100)) {
            $('nav').removeClass('nav-down').addClass('nav-up');
        } else {
            $('nav').removeClass('nav-up').addClass('nav-down');
        }
    }

    //  Toggle to change search bar colour when clicked
    $('form#searchform input[type="text"]').focus(function() {
        $('form#searchform input[type="submit"]').css('background-color', '#fff');
    });

    $('form#searchform input[type="text"]').blur(function() {
        $('form#searchform input[type="submit"]').css('background-color', 'transparent');
    });

    $('form#commentsform .comment-form').addClass('form-group');

    $('#comments.comments input[type="submit"]').addClass('btn btn-default');



    // Change layout when resized the browser
    $(window).resize(function() {
        resize_social_link();
        resize_masonry();
    });

    // Change social links layout on navbar
    function resize_social_link() {
        if ($(window).width() <= 767) {
            $('#main-nav .social').toggleClass('row', 'navbar-right').removeClass('navbar-right');
        } else {
            $('#main-nav .social').removeClass('row').addClass('navbar-right');
        }
    }

    // Change masonry layout 
    function resize_masonry() {
        if ($(window).width() <= 992) {
            $('.masonry').addClass('column1').removeClass('column2');
        } else {
            $('.masonry').addClass('column2').removeClass('column1');
        }
    }


    // Hamberger menu toggle effect
    $('.fa-bars').click(function() {
        toggleNav();
    });

// remove media query navigaton when window size is more than 767px
    function checkWidth() {
        var windowSize = $(window).width();
        if (windowSize > 767) {
            $('#offcanvas-wrapper').removeClass('show-nav');
        }
    }

    function toggleNav() {
        $('#offcanvas-wrapper').toggleClass('show-nav');
        // Fire checkWidth function when window resize
        $(window).resize(checkWidth);
    }
});