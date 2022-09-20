window.onload = function() {
    $(".preload").delay(400).fadeOut("200", function () {
        $('#preload').addClass('move');
        $('#preload').fadeOut(200);
    });
};

$(document).ready(function () {
    new WOW().init();

    $(function() {
        AOS.init({
            duration: 2000,
            once: true,
            offset: 0,
        });
    });

    $('.select-control').select2({
        minimumResultsForSearch: Infinity,
        placeholder: "Select"
    });
    
    $('.select-control.has-search').select2({
        placeholder: "Select"
    });

    $("[data-fancybox]").fancybox({
        thumbs     : false,
        slideShow  : false,
        fullScreen : false
    });

    $(".mcscroll").mCustomScrollbar({
       axis : "y",
       scrollButtons: {
           enable: true
       }
    });
    $(".mcscrollX").mCustomScrollbar({
       axis : "x",
       scrollButtons: {
           enable: true
       }
    });

    $('.item-matchHeight').matchHeight({
        byRow: true,
        property: 'height',
        target: null,
        remove: false
    });

    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });

    $('.overflow-line-1').trunk8({
       lines: 1,
       tooltip : false
    });
    $('.overflow-line-2').trunk8({
       lines: 2,
       tooltip : false
    });
    $('.overflow-line-3').trunk8({
       lines: 3,
       tooltip : false
    });

    var topbar = $('.site-header').height();
    $(window).scroll(function() {
        if ($(window).scrollTop() > topbar) {
            $(".site-header").addClass("tiny");
        } else {
            $(".site-header").removeClass("tiny");
        }
    });

    $('[data-toggle="menu-mobile"]').click(function(){
        $(this).toggleClass('close');
        $('.global-container').toggleClass('sidebar-open');
        $('nav.menu').toggleClass('open');
    });
    $('[data-toggle="menu-overlay"]').click(function(){
        $('[data-toggle="menu-mobile"]').removeClass('close');
        $('.global-container').removeClass('sidebar-open');
        $('nav.menu').removeClass('open');
    });

    $('.Totop').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
    
    $('.acept-btn').click(function() {
        $('.cookie-tab').addClass('hide');
    });
	$('.reject-btn').click(function() {
        $('.cookie-tab').addClass('hide');
    });
 
    // if ($('.header-contact').offsetHeight < ('.site-container').scrollHeight)
    //      {
    //         $('.header-contact').hide(1000);
    //      }
    
    // var siteContainer = $('.site-container').height();
    // $(window).scroll(function () {
    //     if ($(window).scrollTop() > siteContainer) {
    //         $('.header-contact').addClass('hidden-sm');
    //         // alert(siteContainer)
    //     } else {
    //         $('.header-contact').removeClass('hidden-sm');
    //     }
    // });

    $('.modal-warning .slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        infinite: true,
        focusOnSelect: true,
        touchMove: true,
        autoplay: true,
        autoplaySpeed: 5000,
    });

});