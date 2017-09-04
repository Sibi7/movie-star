$(document).ready(function () {
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'disableScrolling': true
    });
    $('.owl-carousel').owlCarousel({
        margin:10,
        loop:true,
        autoWidth:true,
        items:4,
        autoplay: true,
    })
});