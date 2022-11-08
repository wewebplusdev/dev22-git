var path = $("base").attr("href");
var base_url_lang = $("html").attr("lang");

$(document).ready(function () {
    $('.popup-item').first().trigger('click');
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $('.slider.default-slider').slick('setPosition');
});