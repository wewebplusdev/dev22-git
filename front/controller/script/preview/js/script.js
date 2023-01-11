var path = $("base").attr("href");
var base_url_lang = $("html").attr("lang");

$(document).ready(function () {
    $('.popup-item').first().trigger('click');
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $('.slider.default-slider').slick('setPosition');
});

function SearchOPACT2(){
    var action_src = "https://opac.git.or.th/BibList.aspx?word="+document.getElementsByName("bookSearch")[0].value+"&type=ti=&log=true";
    // console.log(action_src);
    var your_form = document.getElementById('search-opac-t2');
    your_form.action = action_src ;
}