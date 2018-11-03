$(document).ready(function () {
    $('#intro-slider').flexslider({
        namespace: "flex-",
        slideshowSpeed: 7000,
        animationSpeed: 600,
        smoothHeight: true,
        directionNav: true,
        controlNav: false,
        controlsContainer: "",
        animation: 'fade'
    });
    var num = $(".menu").offset().top;
    $(window).bind('scroll', function() {
        if ($(window).screenTop() > num) {
            $('.menu').addClass('sticky');
        }
        else {
            $('.menu').removeClass('sticky');
        }
    });
});