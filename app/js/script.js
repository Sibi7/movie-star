$(document).ready(function () {

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'disableScrolling': true
    });

    $('.slide-one').owlCarousel({
        margin: 10,
        loop: true,
        autoWidth: true,
        items: 4,
        nav: true,
        dots: true,
        autoplay: true
    });

    $(window).load(function() {
        // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: true,
            animationLoop: true,
            slideshow: false,
            itemWidth: 63,
            directionNav: false,
            itemMargin: 35,
            asNavFor: '#slider'
        });
        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            directionNav: true,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    });
//    menu header
    $( ".menu-link" ).click(function() {
        $( ".header__menu ul" ).slideToggle( "slow", function() {
        });
    });
});

