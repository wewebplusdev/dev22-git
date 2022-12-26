var origin_url = window.location.href;
var page = $('.site-container').data('page');

function isNumberKey(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  return true;
}

$(document).ready(function () {
  // select year
  $('#yearSelect').on('change', function () {
    $('#filter-component').attr('action', origin_url); // change url 
    $('#year').val($(this).val()); // set parameter
    $('#filter-component').submit(); // submit filter
  });

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
          var baselang = $("base").attr("href") + base_url_lang + "/policy/complaint-system";

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

      case 'step-2':
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
        break;

      case 'req':
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
        $("#reqForm").validator().on("submit", function (e) {
          if (e.isDefaultPrevented()) {
            // not show
          } else {
            $("#submitForm").attr("disabled", true);
  
            var formData = new FormData($("#reqForm")[0]);
            var path = $("base").attr("href") + base_url_lang;
            var baselang = $("base").attr("href") + base_url_lang + "/policy/request";
  
            $.ajax({
              url: path + "/policy/request/verify",
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

// check timeout
var timer = $('.site-container').data('timer');
if(timer === 'timeout'){
  var baselang = $("base").attr("href") + base_url_lang + "/policy/request";
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
    },
    buttonsStyling: false
  })
  if(base_url_lang == 'th'){
    swalWithBootstrapButtons.fire({
      title: 'เกินระยะเวลาที่กำหนด',
      text: 'กรุณาทำรายการให้อีกครั้ง',
      icon: 'error',
      showCancelButton: false,
      confirmButtonText: 'ตกลง',
      reverseButtons: false,
      customClass: {
        confirmButton: 'btn btn-primary',
      },
      allowOutsideClick: false,
    }).then((result) => {
      if (result.isConfirmed) {
        // refresh page
        window.location.replace(baselang);
      }
    })
  }else{
    swalWithBootstrapButtons.fire({
      title: 'Beyond the specified time !',
      text: 'Please do the transaction again.',
      icon: 'error',
      showCancelButton: false,
      confirmButtonText: 'OK',
      reverseButtons: true,
      customClass: {
        confirmButton: 'btn btn-primary',
      },
      allowOutsideClick: false,
    }).then((result) => {
      if (result.isConfirmed) {
        // refresh page
        window.location.replace(baselang);
      }
    })
  }
}else if(timer === 'no-data'){ // check no data
  var baselang = $("base").attr("href") + base_url_lang + "/policy/request";
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
    },
    buttonsStyling: false
  })
  if(base_url_lang == 'th'){
    swalWithBootstrapButtons.fire({
      title: 'ไม่พบข้อมูลในระบบ',
      text: 'กรุณาทำรายการให้อีกครั้ง',
      icon: 'error',
      showCancelButton: false,
      confirmButtonText: 'ตกลง',
      reverseButtons: false,
      customClass: {
        confirmButton: 'btn btn-primary',
      },
      allowOutsideClick: false,
    }).then((result) => {
      if (result.isConfirmed) {
        // refresh page
        window.location.replace(baselang);
      }
    })
  }else{
    swalWithBootstrapButtons.fire({
      title: 'No information found in the system !',
      text: 'Please do the transaction again.',
      icon: 'error',
      showCancelButton: false,
      confirmButtonText: 'OK',
      reverseButtons: true,
      customClass: {
        confirmButton: 'btn btn-primary',
      },
      allowOutsideClick: false,
    }).then((result) => {
      if (result.isConfirmed) {
        // refresh page
        window.location.replace(baselang);
      }
    })
  }
}

// check input checkbox
$('.required-chb').on('change', function(){
  var status= jQuery('input:checkbox[class=required-chb]').is(':checked');
  if (status) {
    $('.required-chb').prop('required',false);
  }else{
    $('.required-chb').prop('required',true);
  }
  $("#requestForm_step2").validator('validate');  
});

// check all
$('.checkall').on('change', function(){
  var checkall = $(this).is(':checked');
  if (checkall) {
    $('.required-chb').prop('checked', true);
  }else{
    $('.required-chb').prop('checked', false);
    $('.required-chb').prop('required',true);
  }
  $("#requestForm_step2").validator('validate');  
});


// Request Form
$('#requestForm_step2').validator().on('submit', function (e) {

  if ($('#confirm-box').is(':checked') == false) {
    return false;
  }

  if (e.isDefaultPrevented()) {
      // not show
  } else {
    $("#submitform").attr("disabled", true);

    var formData = new FormData($("#requestForm_step2")[0]);
    var path = $("base").attr("href") + base_url_lang;
    var baselang = $("base").attr("href") + base_url_lang + "/policy/request";
    
    $.ajax({
        url: path + "/policy/request/insert-req",
        type: 'POST',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },
        success: function(data) {
          const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-primary',
            },
            buttonsStyling: false
          })
          
          swalWithBootstrapButtons.fire({
            title: data.title,
            text: data.msg,
            icon: data.icon,
            showCancelButton: false,
            confirmButtonText: data.btn,
            reverseButtons: false
          }).then((result) => {
            if (result.isConfirmed) {
              // refresh page
              window.location.replace(baselang);
            }
          })
          return false;
        },
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json'
    });
    return false;
  }
});
