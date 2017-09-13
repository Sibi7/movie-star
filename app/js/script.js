$(document).ready(function () {

    /*header scroll*/
    $(document).on('click', '.SmothtoScroll', function (event) {/*функция прокрутки на блок страницы при клике по элементам меню */
        event.preventDefault();
        var href = $(this).attr('href');
        var target = $(href);
        var top = target.offset().top;
        $('html,body').animate({scrollTop: top}, 1000);
        return false;
    });
    /*close a
    /*close scroll*/

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
        navText: ["<i class='fa fa-3x fa-chevron-left'></i>","<i class='fa fa-3x fa-chevron-right'></i>"],
        autoplay: true
    });
    $('.form-slide').owlCarousel({
        margin: 0,
        loop: true,
        items: 1,
        nav: false,
        autoplayTimeout:7000,
        dots: false,
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

