$(document).ready(function() {
    $(".one-time").slick({
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 2,
        touchMove: false,
        prevArrow:
            '<button type="button" data-role="none" class="slick-prev">Previous</button>',
        nextArrow:
            '<button type="button" data-role="none" class="slick-next">Next</button>'
    });
});
