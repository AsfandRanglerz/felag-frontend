$(function() {
    /*footer*/
    var currentYear = (new Date).getFullYear();
    $('.footer #current-year').text(currentYear);
    /*footer*/

    /*header view, if user not at page top*/
    if ($(window).scrollTop() != 0) {
        $('.header-navbar').addClass('bg-white light-box-shadow');
        if ($(window).width() >= 992) {
            $('.sign-in-btn').css({'border': '2px solid #48a955', 'color': '#48a955'});
        }
        $('.header-navbar .navbar-links .nav-link').css({'color': '#000', 'text-shadow': 'unset'});
        $('.header-navbar .navbar-brand .feelag-logo').css('filter', 'invert(1)');
    }
    /*header view, if user not at page top*/

    $(window).on('scroll', function () {
        /*header view on scroll*/
        $('.header-navbar').addClass('bg-white light-box-shadow');
        if ($(window).width() >= 992) {
            $('.sign-in-btn').css({'border': '2px solid #48a955', 'color': '#48a955'});
            if ($(window).scrollTop() == 0) {
                $('.sign-in-btn').css({'border': '2px solid #FFF', 'color': '#FFF'});
            }
        }
        $('.header-navbar .navbar-links .nav-link').css({'color': '#000', 'text-shadow': 'unset'});
        $('.header-navbar .navbar-brand .feelag-logo').css('filter', 'invert(1)');
        if ($(window).scrollTop() == 0) {
            $('.header-navbar').removeClass('bg-white light-box-shadow');
            $('.header-navbar .navbar-links .nav-link').css({'color': '', 'text-shadow': ''});
            $('.header-navbar .navbar-brand .feelag-logo').css('filter', '');
        }
        /*header view on scroll*/
    });

    if ($(window).width() >= 992) {
        /*header navbar link hover effect*/
        $(".header-navbar .navbar-nav .nav-item.dropdown").hover(function () {
            $(this).addClass("show");
            $(this).find(".dropdown-menu").addClass("show");
        }, function () {
            $(this).removeClass("show");
            $(this).find(".dropdown-menu").removeClass("show");
        });
        /*header navbar link hover effect*/
    }

    $(window).resize(function () {
        if ($(window).width() >= 992) {
            /*header navbar link hover effect*/
            $(".header-navbar .navbar-nav .nav-item.dropdown").hover(function () {
                $(this).addClass("show");
                $(this).find(".dropdown-menu").addClass("show");
            }, function () {
                $(this).removeClass("show");
                $(this).find(".dropdown-menu").removeClass("show");
            });
            /*header navbar link hover effect*/
        }
    });
});
