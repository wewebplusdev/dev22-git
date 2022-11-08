var origin_url = window.location.href;
var page = $('.site-container').data('page');
$(document).ready(function () {
  // select year
  $('#yearSelect').on('change', function () {
    $('#filter-component').attr('action', origin_url); // change url 
    $('#year').val($(this).val()); // set parameter
    $('#filter-component').submit(); // submit filter
  })
  switch (page) {
    case 'formcomplain':
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
      $("#complainForm").validator().on("submit", function (e) {
        if (e.isDefaultPrevented()) {
          // not show
        } else {
          $("#submitForm").attr("disabled", true);
          
          var formData = new FormData($("#complainForm")[0]);
          var path = $("base").attr("href") + base_url_lang;
          var baselang = $("base").attr("href") + base_url_lang + "/policy";

          $.ajax({
            url: path + "/policy/insert-formcomplaint",
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
        $("#complainForm")[0].reset();
        $("#complainForm").validator('validate');  
      })
      break;

      case 'req':
        // recaptcha v3
        // grecaptcha.ready(function () {
        //   // do request for recaptcha token
        //   // response is promise with passed token
        //   grecaptcha
        //     .execute($(".sitekey").data("id"), { action: "validate_captcha" })
        //     .then(function (token) {
        //       // add token value to form
        //       document.getElementById("g-recaptcha-response").value = token;
        //     });
        // });
  
        // Request Form
        $("#reqForm").validator().on("submit", function (e) {
          if (e.isDefaultPrevented()) {
            // not show
          } else {
            $("#submitForm").attr("disabled", true);
  
            var formData = new FormData($("#reqForm")[0]);
            var path = $("base").attr("href") + base_url_lang;
            var baselang = $("base").attr("href") + base_url_lang + "/policy";
  
            $.ajax({
              url: path + "/policy/insert-req",
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
        break;  
  
    default:
      // ...
      break;
  }
});