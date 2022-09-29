window.onload = function() {
    // script
};

$(function() {
    ("use strict");
    // script
});

AOS.init({
    once: true,
    duration: 2000,
});

$(document).ready(function() {

    $('.main-menu-list .link-submenu').click(function() {

        $('.main-menu-list .link-submenu').removeClass('active');
        $(this).addClass('active');

        $('.menu-full').addClass('show');

        var link = $(this).data('link');
        $('.' + link + ' .submenu').click();
        $('.site-header .menu-toggle').addClass('close');

        return false;
    });

    $('.site-header .search-toggle').click(function() {
        $(".search").addClass('show');
    });
    $('.site-header .search .close').click(function() {
        $(".search").removeClass('show');
    });


    $('.site-header .menu-toggle').click(function() {
        $('.menu-full').toggleClass('show');
        // $('.site-header-topbar').toggleClass('show');
        // $('.site-header').toggleClass('position');
        $(this).toggleClass('close');
        $('.main-menu-list .link-submenu').removeClass('active');
        $('.menu-full .main-menu').removeClass('hide')


    });

    $('.menu-full .main-menu .link').click(function() {
        // $('.menu-full .main-menu').css('transform', 'translateX(-100%)');
        $('.menu-full .main-menu').addClass('hide')
    });
    $('.menu-full .dropdown-menu.level-II').click(function() {
        // $('.menu-full .main-menu').css('transform', 'translateX(0)');
        $('.menu-full .main-menu').removeClass('hide')
    });

    $('.attachment-slider').slick({
        infinite: true,
        centerPadding: 50,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        responsive: [{
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            },

        ]
    });


    $('.default-nav-slider').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 3,
        arrows: true,
        dots: false,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 376,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.default-tab-slider').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        responsive: [{
                breakpoint: 778,
                settings: {
                    arrows: false,
                    slidesToShow: 3
                }

            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 376,
                settings: {
                    slidesToShow: 1
                }
            },
        ]
    });

    $('.default-nav .slider').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.top-graphic .slider').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
    });

    $(".default-nav-slider .item a").click(function() {
        $("a").removeClass("active");
        $(this).addClass("active");
    });

    $(".default-tab-slider .item .tab-block").click(function() {
        $(".tab-block").removeClass("active");
        $(this).addClass("active");
    });


    $('.select-control').select2({
        minimumResultsForSearch: -1
    });

    $('.select-control.filter').select2({
        minimumResultsForSearch: -1,
    });

    $('.select-control.select-year').select2({
        theme: 'option-year',
        minimumResultsForSearch: -1,
    });



});