var menuid = $('.site-container').data('menuid');

// // recaptcha v3
// grecaptcha.ready(function () {
//   // do request for recaptcha token
//   // response is promise with passed token
//   grecaptcha
//     .execute($(".sitekey").data("id"), { action: "validate_captcha" })
//     .then(function (token) {
//       // add token value to form
//       document.getElementById("g-recaptcha-response").value = token;
//   });
// });


// ############## Start Submit ##############
//submit
function checkFocus() {
  $(":focus").each(function() {
    $("html, body").animate({scrollTop: $(this).parent().offset().top - 130}, 1000);
  });
}

$('#form-career').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) { 
    $('#form-career').validator('validate');
    checkFocus();
  } else {

      e.preventDefault();

      $("#clicksubmitfromcar").prop("disabled", true);

      var url= path + $('html').attr('lang') + "/about/" + menuid + "/insert-career";
      var formCareer = new FormData($("#form-career")[0]); //form data

      // append file upload to new form career
      if (formData.get('fileTranscript') !== null) {
        formCareer.append('fileTranscript', formData.get('fileTranscript'));
      }
      if (formData.get('fileMilitary') !== null) {
        formCareer.append('fileMilitary', formData.get('fileMilitary'));
      }
      if (formData.get('workexperience') !== null) {
        formCareer.append('workexperience', formData.get('workexperience'));
      }
      if (formData.get('marriage') !== null) {
        formCareer.append('marriage', formData.get('marriage'));
      }
      if (formData.get('license') !== null) {
        formCareer.append('license', formData.get('license'));
      }
      if (formData.get('other') !== null) {
        formCareer.append('other', formData.get('license'));
      }
      
      $.ajax({
        url: url,
        type: 'POST',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },
        success: function(data) {
          Swal.fire({
            title: data.msg,
            text: data.msg_desc,
            icon: data.status,
            confirmButtonText: data.btn
          }).then(function() {
            window.location.href = path + $('html').attr('lang') + "/about/" + menuid;
          });
        },
        data: formCareer,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json'
    })
  }
});
// ############## End Submit ##############


function hidearmy() {
  var x = document.getElementById("inputPrefix").value;
  //alert(x);
   if(x =="นาง"){
       jQuery('#textarmy').hide();
      $('.mili-other').removeAttr("required"); // remove required อื่นของ section สถานภาพทางทหาร
   }
   if(x =="นางสาว"){
       jQuery('#textarmy').hide(); 
      $('.mili-other').removeAttr("required"); // remove required อื่นของ section สถานภาพทางทหาร
   }
   if(x == "นาย"){
     jQuery('#textarmy').show();
   }
 
//  x.value = x.value.toUpperCase();
}

function hidearmyen() {
  var x = document.getElementById("inputPrefixen").value;
  //alert(x);
   if(x =="Mrs."){
      jQuery('#textarmy').hide();
      $('.mili-other').removeAttr("required"); // remove required อื่นของ section สถานภาพทางทหาร
   }
   if(x =="Miss."){
      jQuery('#textarmy').hide(); 
      $('.mili-other').removeAttr("required"); // remove required อื่นของ section สถานภาพทางทหาร
   }
   if(x == "Mr."){
     jQuery('#textarmy').show();
   }
 
//  x.value = x.value.toUpperCase();
}
$('.military-other').hide();
$(document).on("click", ".military-checking", function () {
    let check = $(this).val();
    if(check == 'อื่นๆ' || check == 'อื่นๆ'){
      $('.military-other').show();
      $('.mili-other').attr('required', "required");
    }else{
      $('.military-other').hide();
      $('.mili-other').removeAttr("required");
    }
});

$('.family-date').hide();
$(document).on("click", ".family-checking", function () {
    let check = $(this).val();
    if(check == 'เสียชีวิต' || check == 'เสียชีวิต'){
      $('.family-date').show();
      $('#family-day-1').attr('required', "required");
      $('#family-month-1').attr('required', "required");
      $('#family-year-1').attr('required', "required");
    }else{
      $('.family-date').hide();
      $('#family-day-1').removeAttr("required");
      $('#family-month-1').removeAttr("required");
      $('#family-year-1').removeAttr("required");
    }
});

$('.family-date-2').hide();
$(document).on("click", ".family2-checking", function () {
    let check = $(this).val();
    if(check == 'เสียชีวิต' || check == 'เสียชีวิต'){
      $('.family-date-2').show();
      $('#family-day-2').attr('required', "required");
      $('#family-month-2').attr('required', "required");
      $('#family-year-2').attr('required', "required");
    }else{
      $('.family-date-2').hide();
      $('#family-day-2').removeAttr("required");
      $('#family-month-2').removeAttr("required");
      $('#family-year-2').removeAttr("required");
    }
});

$('.brother-date-1').hide();
$(document).on("click", ".brethren-checking-1", function () {
    let check = $(this).val();
    if(check == 'เสียชีวิต' || check == 'เสียชีวิต'){
      $('.brother-date-1').show();
      $('#brother-day-1').attr('required', "required");
      $('#brother-month-1').attr('required', "required");
      $('#brother-year-1').attr('required', "required");
    }else{
      $('.brother-date-1').hide();
      $('#brother-day-1').removeAttr("required");
      $('#brother-month-1').removeAttr("required");
      $('#brother-year-1').removeAttr("required");
    }
});

function swap(html){
  let target = $(html).parent().parent().parent().parent().parent().parent().find('.borther-date');
  let check = $(html).val();
  if(check == 'เสียชีวิต' || check == 'เสียชีวิต'){
    $(target).show();
    $(target).find('.select-day').attr('required', "required");
    $(target).find('.select-month').attr('required', "required");
    $(target).find('.select-year').attr('required', "required");
  }else{
    $(target).hide();
    $(target).find('.select-day').removeAttr("required");
    $(target).find('.select-month').removeAttr("required");
    $(target).find('.select-year').removeAttr("required");
  }
}

//call provice
$(document).on("change", "#inputProvince", function () {
  // console.log($('html').attr('lang'));
  var id = $(this).val();
  var district = '.inputDistrict';
  var subDistrict = '.inputSubdictrict';
  // var postcode = '.inputPostalcode';
  var postcode = '';
  var textsubDistrict = $(subDistrict).find(":selected").text();
  var textpostcode = $(postcode).find(":selected").text();
  callDistrict(id,district,subDistrict,postcode,textsubDistrict,textpostcode);
});
$(document).on("change", "#inputDistrict", function () {
  var id = $(this).val();
  var subDistrict = '.inputSubdictrict';
  // var postcode = '.inputPostalcode';
  var postcode = '';
  var textpostcode = $(postcode).find(":selected").text();
  callSubDistrict(id,subDistrict,postcode,textpostcode);
});
// $(document).on("change", "#inputSubdictrict ", function () {
//   var id = $(this).val();
//   var postcode = '.inputPostalcode';
//   callPostcode(id,postcode);
// });

// event 2
$(document).on("change", "#inputProvince2", function () {
  // console.log($('html').attr('lang'));
  var id = $(this).val();
  var district = '.inputDistrict2';
  var subDistrict = '.inputSubdictrict2';
  // var postcode = '.inputPostalcode';
  var postcode = '';
  var textsubDistrict = $(subDistrict).find(":selected").text();
  var textpostcode = $(postcode).find(":selected").text();
  callDistrict(id,district,subDistrict,postcode,textsubDistrict,textpostcode);
});
$(document).on("change", "#inputDistrict2", function () {
  var id = $(this).val();
  var subDistrict = '.inputSubdictrict2';
  // var postcode = '.inputPostalcode2';
  var postcode = '';
  var textpostcode = $(postcode).find(":selected").text();
  callSubDistrict(id,subDistrict,postcode,textpostcode);
});

function callDistrict(id,district,subDistrict,postcode,textsubDistrict,textpostcode) {   
  $.ajax({
      url: path + $('html').attr('lang') + "/about/" + menuid + "/district",
      type: 'post',
      data: {
          districtID: id
      },
      success: function (data) {
          // console.log(data);
          $(district).html(data);
          $(subDistrict).html('<option disabled value="0" selected="">'+textsubDistrict+'</option>');
          // $(postcode).html('<option value="0" selected="">'+textpostcode+'</option>');
      }
  });
}

function callSubDistrict(id,subDistrict,postcode,textpostcode) {   
  $.ajax({
      url: path + $('html').attr('lang') + "/about/" + menuid + "/subDistrict",
      type: 'post',
      data: {
          subDistrictID: id
      },
      success: function (data) {
          $(subDistrict).html(data);
          // $(postcode).html('<option disabled value="0" selected="">'+textpostcode+'</option>');
      }
  });
}

// ############## Start Brother ##############
function hidebrother() {
  var x = document.getElementById("inputNumberbrother").value;
  if(x>0){
      jQuery('#textvaluebro').show();
      jQuery('.addbrethren').show();
  }else{
      jQuery('#textvaluebro').hide();
      jQuery('.addbrethren').hide();
  }
 
//  x.value = x.value.toUpperCase();
}
// ############## End Brother ##############

// ############## Start Other ##############
$('.contagiousExplain').hide();
$(document).on("click", ".contagious-checking", function () {
    let check = $(this).val();
    if(check == 'เคย' || check == 'เคย'){
      $('.contagiousExplain').show();
      $('input[name="information[contagiousExplain]"]').attr('required', "required");
    }else{
      $('.contagiousExplain').hide();
      $('input[name="information[contagiousExplain]"]').removeAttr("required");
    }
});

$('.handicap').hide();
$(document).on("click", ".handicap-checking", function () {
    let check = $(this).val();
    if(check == 'มี' || check == 'มี'){
      $('.handicap').show();
      $('input[name="information[handicap]"]').attr('required', "required");
    }else{
      $('.handicap').hide();
      $('input[name="information[handicap]"]').removeAttr("required");
    }
});

$('.arrested').hide();
$(document).on("click", ".arrested-checking", function () {
    let check = $(this).val();
    if(check == 'เคย เพราะ' || check == 'เคย เพราะ'){
      $('.arrested').show();
      $('input[name="information[arrestedExplain]"]').attr('required', "required");
    }else{
      $('.arrested').hide();
      $('input[name="information[arrestedExplain]"]').removeAttr("required");
    }
});

$('.dischargedemployment').hide();
$(document).on("click", ".dischargedemployment-checking", function () {
    let check = $(this).val();
    if(check == 'เคย เพราะ' || check == 'เคย เพราะ'){
      $('.dischargedemployment').show();
      $('input[name="information[dischargedemploymentExplain]"]').attr('required', "required");
    }else{
      $('.dischargedemployment').hide();
      $('input[name="information[dischargedemploymentExplain]"]').removeAttr("required");
    }
});

$('.relativeExplain').hide();
$(document).on("click", ".relative-checking", function () {
    let check = $(this).val();
    if(check == 'เคย เพราะ' || check == 'เคย เพราะ'){
      $('.relativeExplain').show();
      $('input[name="information[relativeExplain]"]').attr('required', "required");
    }else{
      $('.relativeExplain').hide();
      $('input[name="information[relativeExplain]"]').removeAttr("required");
    }
});

$('.hearingPerson2').hide();
$(document).on("click", ".hearing-checking", function () {
    let check = $(this).val();
    if(check == 'อื่นๆ' || check == 'อื่นๆ'){
      $('.hearingPerson2').show();
      $('input[name="information[hearingPerson2]"]').attr('required', "required");
      $('.hearingPerson1').hide();
      $('input[name="information[hearingPerson1]"]').removeAttr("required");
    }else{
      $('.hearingPerson1').show();
      $('input[name="information[hearingPerson1]"]').attr('required', "required");
      $('.hearingPerson2').hide();
      $('input[name="information[hearingPerson2]"]').removeAttr("required");
    }
});

$('.clickdel_reference').hide();
$('.reference').hide();
$(document).on("click", ".reference-checking", function () {
    let check = $(this).val();
    if(check == 'มี' || check == 'มี'){
      $('.clickdel_reference').show();
      $('.reference').show();
      $('input[name="reference[0][]"]').attr('required', "required");
    }else{
      $('.reference_append').empty();
      $('.clickdel_reference').hide();
      $('.reference').hide();
      $('input[name="reference[0][]"]').removeAttr("required");
    }
});
// ############## End Other ##############