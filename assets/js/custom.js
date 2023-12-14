$(document).ready(function () {

    // Mobile Menu
    $(".hamburger").click(function () {
        $(this).toggleClass("active");
        $(".mobile-navigation").toggleClass("active");
        $("body").toggleClass("over-hidden");
    });

    /* Tabbing Function */
    $("[data-targetit]").on("click", function (e) {
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
        var target = $(this).data("targetit");
        $("." + target).siblings('[class^="box-"]').hide();
        $("." + target).fadeIn();
        $(".process-slider").slick("setPosition", 0);
    });


    // Accordian
    $(".accordian h5").click(function () {
        $(".accordian li").removeClass("active");
        $(this).parent("li").addClass("active");
        $(".accordian li div").slideUp();
        $(this).parent("li").find("div").slideDown();
    });

    // Popup
    $(".popup-default-click").on("click", function () {
        $("#default-popup").addClass("active");
    });

    // Popup Default
    $(".popup-default-click").click(function () {
        $("body").addClass("over-hidden");
        $(".overlay").fadeIn();
        $(".popup-default").fadeIn();
    });
    $(".popup-close").click(function () {
        closePopup();
    });


});


// Window Scroll
$(window).scroll(function () {
    
    var scroll = $(window).scrollTop();

    if ($(window).scrollTop() >= 50) {
        $("header").addClass("sticky-header");
    } else {
        $("header").removeClass("sticky-header");
    }

});


if ($(window).width() < 825) {

    $(".responsive-slider").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
    });

}


$(window).on('load', function () {

    var currentUrl = window.location.href.split('/').reverse()[1];
    $('.menuu li a').each(function() {

        var hrefVal = $(this).attr('href');
        if (hrefVal == currentUrl) {
            $(this).removeClass('active');
            $(this).closest('li').addClass('active')
            $('.menuu li:first-child').removeClass('active');
        }
    });

});

function closePopup() {
    $(".popup-overlay").removeClass('active');
    $("body").removeClass("over-hidden");
}  