var path = $("base").attr("href");
var base_url_lang = $("html").attr("lang");

$(document).ready(function () {
    // IR API
    $.ajax({
        url: path + "/" + base_url_lang + "/api/scraping/v3",
        type: "POST",
        xhr: function () {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },
        success: function (data) {
            // console.log(data);
            $('.stock-ir.name').text(data.name);
            if (data.price != "-") {
                $('.stock-ir.price').text(data.price + " THB");
            } else {
                $('.stock-ir.price').text("-");
            }
            if (data.percent != "") {
                $('.stock-ir.change').text(data.unit + " (" + data.percent + ")");
            } else {
                $('.stock-ir.change').text("-");
            }

            $('.stock-ir.icon').removeClass('-up');
            $('.stock-ir.icon').removeClass('-down');
            if (data.type == "increase") {
                $('.stock-ir.icon').addClass('-up');
                $('.stock-ir.icon').show();
            } else if (data.type == "decrease") {
                $('.stock-ir.icon').addClass('-down');
                $('.stock-ir.icon').show();
            }
        },
        data: { action: 'ir' },
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
    });



    $('.nav-home').addClass('active');
    $('.main-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        focusOnSelect: true
    });
    $('.wg-product-slider').slick({
        prevArrow: "<div class='slick-prev'><span class='feather icon-arrow-left'></span></div>",
        nextArrow: "<div class='slick-next'><span class='feather icon-arrow-right'></span></div>",
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        e.target
        e.relatedTarget
        $('.wg-product-slider').slick('setPosition');
    });
    // $('.wg-business-network-slider').slick({
    //     prevArrow:"<div class='slick-prev'><span class='feather icon-arrow-left'></span></div>",
    //     nextArrow:"<div class='slick-next'><span class='feather icon-arrow-right'></span></div>",
    //     infinite: true,
    //     slidesToShow:3,
    //     slidesToScroll: 1,
    //     dots: true,
    //     arrows: false,
    //     autoplay: true,
    //     autoplaySpeed: 3000,
    //     focusOnSelect: true,
    //     responsive: [
    //         {
    //             breakpoint: 767,
    //             settings: {
    //                 slidesToShow:1,
    //                 slidesToScroll: 1
    //             }
    //         },
    //         {
    //             breakpoint: 1366,
    //             settings: {
    //                 slidesToShow:3,
    //                 slidesToScroll: 1
    //             }
    //         }
    //     ]
    // });
    $('.wg-five-product-slideI').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        asNavFor: '.wg-five-product-slideII,.wg-five-product-slideIII'
    });
    $('.wg-five-product-slideII').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        asNavFor: '.wg-five-product-slideI,.wg-five-product-slideIII'
    });
    $('.wg-five-product-slideIII').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        fade: true,
        cssEase: 'linear',
        asNavFor: '.wg-five-product-slideI,.wg-five-product-slideII'
    });
    $('.wg-toBnoI-slider .slider').slick({
        prevArrow: "<div class='slick-prev'><span class='feather icon-arrow-left'></span></div>",
        nextArrow: "<div class='slick-next'><span class='feather icon-arrow-right'></span></div>",
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1366,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.wg-news-slider').slick({
        prevArrow: "<div class='slick-prev'><span class='feather icon-arrow-left'></span></div>",
        nextArrow: "<div class='slick-next'><span class='feather icon-arrow-right'></span></div>",
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    variableWidth: false,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    variableWidth: false,
                    dots: true,
                    arrows: false
                }
            },
            {
                breakpoint: 1366,
                settings: {
                    dots: false,
                    arrows: true
                }
            }
        ]
    });
    $('.default-nav-slider').slick({
        prevArrow: "<div class='slick-prev'><span class='fa fa-caret-left'></span></div>",
        nextArrow: "<div class='slick-next'><span class='fa fa-caret-right'></span></div>",
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 3000,
        focusOnSelect: false,
        responsive: [{
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 1366,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }
        ]
    });
    
    $('.nav-tabs .nav-item a').click(function () {
        $('.nav-tabs .nav-item a').removeClass('active')
    })

	$("#modal_warning").modal('show');
    
});
