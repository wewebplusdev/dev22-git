var origin_url = window.location.href;
$(document).ready(function () {
  // select year
  $('#yearSelect').on('change', function(){
    $('#filter-component').attr('action', origin_url); // change url 
    $('#year').val($(this).val()); // set parameter
    $('#filter-component').submit(); // submit filter
  })
});

$('.simple-search-icon').on('click', function(){
  // moving input keywords outside form to inside form
  let inputSearch = $('.outer-form > input').val();
  $('input[name="keywords"]').val(inputSearch);

   // select type keywords or hashtag
   let selectOption = $('#hashtag').val();
   if (selectOption == 2) {
       $('form[name="advancedSearchForm"]').attr('action', path + '' + base_url_lang + '/search/hashtag');

   }else{
       $('form[name="advancedSearchForm"]').attr('action', path + '' + base_url_lang + '/search');
   }

  $('form[name="advancedSearchForm"]').submit();
});

$('.outer-form > input').on('keyup', function (e) {
  if (e.key === 'Enter' || e.keyCode === 13) {
    let inputSearch = $('.outer-form > input').val();
    $('input[name="keywords"]').val(inputSearch);

    $('form[name="advancedSearchForm"]').submit();
  }
});

// change search type
$('.toggle-change').on('click', function(){
  if ($('#collapse').hasClass('show')) {
    $('input[name="typeSch"]').val('1');
  }else{
    $('input[name="typeSch"]').val('2');
  }
});