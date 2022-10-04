var origin_url = window.location.href;
$(document).ready(function () {
  // select year
  $('#yearSelect').on('change', function(){
    $('#filter-component').attr('action', origin_url); // change url 
    $('#year').val($(this).val()); // set parameter
    $('#filter-component').submit(); // submit filter
  })
});

$('.modal-alert').on('click', function(){
  $('#profileBlock .profile-thumbnail .cover img').attr('src', $(this).data('pic'));
  $('#profileBlock .profile-desc .profile-name').text($(this).data('name'));
  $('#profileBlock .profile-desc .profile-position').text($(this).data('depart'));
  $('#profileBlock .profile-desc .profile-timeline').text($(this).data('sdatetxt'));
  if ($(this).data('email') != "") {
    $('#profileBlock .profile-desc .profile-contact .email').text($(this).data('txtemail') + ": " + $(this).data('email'));
  }else{
    $('#profileBlock .profile-desc .profile-contact .email').text('');
  }
  if($(this).data('tel') != ""){
    $('#profileBlock .profile-desc .profile-contact .telephone').text($(this).data('txttel') + ": " + $(this).data('tel'));
  }else{
    $('#profileBlock .profile-desc .profile-contact .telephone').text('');
  }
});
