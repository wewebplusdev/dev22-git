var menuid = $('.site-container').data('menuid');
// ############## Start Upload ##############
// $('#clickuploadProfile').click(function() {
//   $("input[name='uploadProfile']").trigger("click");
// });
// $("input[name='uploadProfile']").change(function(e) {
//   $(".showProfile").append('<div class="loadding" style="position: absolute; top: 50%;left: 50%; transform: translate(-50%, -50%);pointer-events: none; color:red; opacity:0.7;font-size: 35px;"><i class="fas fa-circle-notch fa-spin fa-3x fa-fw"></i></div>');

//   e.preventDefault();
//   var path = $("path").attr("href");
//   var key = $("input[name=keyProfile]").val();
//   //var typeupload = $("input[name=typeupImage]").val();

//   var formData = new FormData($("#form-career")[0]);
//   // alert(formData);
  
//   $.ajax({
//       url: path + $('html').attr('lang') + "/about/" + menuid + "/upload-profile?type=add",
//       type: 'POST',
//       xhr: function() {
//           var myXhr = $.ajaxSettings.xhr();
//           return myXhr;
//       },
//       success: function(data) {
//           if (data.status == "error") {
//             Swal.fire({
//               title: data.text,
//               text: data.msg,
//               icon: data.status,
//               confirmButtonText: data.btn
//             });
//           }else{
//             $(".showProfile img").attr("src", data.real);
//             $("input[name='picProfile']").val(data.name);    
//           }

//       },
//       data: formData,
//       cache: false,
//       contentType: false,
//       processData: false,
//       dataType: 'json'
//   });
//   return false;

// });
// ############## End Upload ##############

// ############## Start Submit ##############
//submit
function checkFocus() {
  // console.log($("input, select").is(":focus"));
  $(":focus").each(function() {
      console.log(this.id);
      $("html, body").animate({scrollTop: $('#'+this.id).offset().top - 300}, 1000);
  });
}

$('#form-career').validator().on('submit', function (e) { 
  if (e.isDefaultPrevented()) { 
    $('#form-career').validator('validate');
    checkFocus();
  } else {
      e.preventDefault();
      $('.clicksubmitfromcar').html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:32px; vertical-align: middle;"></i>');
  
      // if ($('.clicksubmitfromcar').hasClass('disabled'))  return false;

      // $(".clicksubmitfromcar").removeClass('disabled');

      $(".clicksubmitfromcar").prop("disabled", true);
      
      var GroupID = $('select[name="inputGroup"]').val();
      var type="POST";
      var url= path + $('html').attr('lang') + "/career/insert-career?type=add ";
      var data= $(this).serialize();
      return false
      $.ajax({type:type,url:url,data:data,
          success:function(data){
              
              var data = JSON.parse(data);
              // console.log(data);
              switch (data.status) {
                  case 'Success':
                      modalalert(data.msg, data.msg_desc, 1, '#modal-member');

                      break;
                  default:
                      modalalert(data.msg, data.msg_desc, 2, '#modal-member');

                      break;
              }

          }
      }).done(function() {
          
          // $("#modal_success").on("hidden.bs.modal", function () {
          //     window.location = path  + langs +"/career";
          // });
          
          // $("#modal_failed").on("hidden.bs.modal", function () {
          //     window.location = path + langs +"/career/career-form/"+ GroupID ;
          // });

      }); 
  }
});
// ############## End Submit ##############


function hidearmy() {
  var x = document.getElementById("inputPrefix").value;
  //alert(x);
   if(x =="นาง"){
       jQuery('#textarmy').hide();
   }
   if(x =="นางสาว"){
       jQuery('#textarmy').hide(); 
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
   }
   if(x =="Miss."){
       jQuery('#textarmy').hide(); 
   }
   if(x == "Mr."){
     jQuery('#textarmy').show();
   }
 
//  x.value = x.value.toUpperCase();
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
  }else{
      jQuery('#textvaluebro').hide();
  }
 
//  x.value = x.value.toUpperCase();
}
// ############## End Brother ##############