$(document).ready(function() {
    $('.theme-style-1').click(function() {
        $(this).parent().addClass('active');
        $('.theme-style-2').parent().removeClass('active');
        $('.theme-style-3').parent().removeClass('active');
        $('body').removeClass('theme-style-2');
        $('body').removeClass('theme-style-3');
        $('body').addClass('theme-style-1');
    });
    $('.theme-style-2').click(function() {
        $(this).parent().addClass('active');
        $('.theme-style-1').parent().removeClass('active');
        $('.theme-style-3').parent().removeClass('active');
        $('body').removeClass('theme-style-1');
        $('body').removeClass('theme-style-3');
        $('body').addClass('theme-style-2');
    });
    $('.theme-style-3').click(function() {
        $(this).parent().addClass('active');
        $('.theme-style-1').parent().removeClass('active');
        $('.theme-style-2').parent().removeClass('active');
        $('body').removeClass('theme-style-1');
        $('body').removeClass('theme-style-2');
        $('body').addClass('theme-style-3');
    });
});