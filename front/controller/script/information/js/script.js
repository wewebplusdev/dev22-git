function isNumberKey(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  return true;
}

$(document).ready(function () {
  var page = $('.site-container').data('page');

  switch (page) {
    case 'graphic-map':
      $('.menu-full').hide();
      $('.site-header-topbar').hide();
      $('.site-header-main').hide();
      $('.site-header-topbar.mobile').hide();
      $('.site-header').addClass('map-header');
      break;

    case 'google-map':
      $('.menu-full').hide();
      $('.site-header-topbar').hide();
      $('.site-header-main').hide();
      $('.site-header-topbar.mobile').hide();
      $('.site-header').addClass('map-header');
      break;

    case 'index':
      // recaptcha v3
      grecaptcha.ready(function () {
        // do request for recaptcha token
        // response is promise with passed token
        grecaptcha
          .execute($(".sitekey").data("id"), { action: "validate_captcha" })
          .then(function (token) {
            // add token value to form
            document.getElementById("g-recaptcha-response").value = token;
        });
      });

      // Request Form
      $("#contactForm").validator().on("submit", function (e) {
        if (e.isDefaultPrevented()) {
          // not show
        } else {
          $("#submitForm").attr("disabled", true);
          
          var formData = new FormData($("#contactForm")[0]);
          var path = $("base").attr("href") + base_url_lang;
          var baselang = $("base").attr("href") + base_url_lang + "/contact";

          $.ajax({
            url: path + "/contact/insert-form",
            type: "POST",
            xhr: function () {
              var myXhr = $.ajaxSettings.xhr();
              return myXhr;
            },
            success: function (data) {
              Swal.fire({
                icon: data.icon,
                title: data.title,
                text: data.msg,
                // timer: 3000,
                confirmButtonText: data.btn,
                confirmButtonColor: data.color,
                timerProgressBar: false,
                showConfirmButton: true,
                showCancelButton: false,
                allowOutsideClick: false,
              }).then((result) => {
                // refresh page
                window.location.replace(baselang);
              });
              return false;
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
          });
          return false;
        }
      });

      // reset form
      $('#cancelForm').on('click', ()=>{
        $("#contactForm")[0].reset();
        $("#contactForm").validator('validate');  
      })
      break;
  
    default:
      // ...
      break;
  }
});
