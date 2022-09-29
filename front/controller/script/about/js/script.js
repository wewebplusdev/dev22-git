var origin_url = window.location.href;
$(document).ready(function () {
  // select year
  $('#yearSelect').on('change', function(){
    $('#filter-component').attr('action', origin_url); // change url 
    $('#year').val($(this).val()); // set parameter
    $('#filter-component').submit(); // submit filter
  })
});
