/**
 * Created by kamch on 12/20/2016.
 */

$(document).ready(function () {
    $("#content .block-banner .owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        dotsEach: true,
        autoplay: true,
        nav: true,
        pagination: true,
        navText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ]
    });

    $("#content .block-brand .block-brand-wrap .owl-carousel").owlCarousel({
        items: 4,
        nav: false,
        loop: true,
        responsiveClass: true,
        responsive: {
            600: {
                items: 3
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });

    $("#content .block-buy-now .buy-now-slider-wrap .owl-carousel").owlCarousel({
        items: 4,
        nav: true,
        loop: true,
        navText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });

    $("#content .block-news .wrap-news .news-right .owl-carousel").owlCarousel({
        items: 1,
        nav: false,
        loop: true,
        dots: true
    });


    $(".page .block-filter-ajax .manufacturer-block .manufacture-overview .manufacture-li>.check").on('click', function () {

        if($(this).hasClass("label-active"))  $(this).removeClass("label-active");
        else
            $(this).addClass("label-active");

    });


});
