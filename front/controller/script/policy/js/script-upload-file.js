
$('#clickuploadFile').click(function() {
  $("input[name='uploadFile']").trigger("click");
  $('#complainForm').find('#submitform').attr('disabled', 'disabled');
});

$("input[name='uploadFile']").change(function(e) {
  e.preventDefault();
  var formData = new FormData($("#complainForm")[0]);
  var path = $("base").attr("href") + base_url_lang;

  $.ajax({
      url: path + "/policy/upload-file?type=add",
      type: 'POST',
      xhr: function() {
          var myXhr = $.ajaxSettings.xhr();
          return myXhr;
      },
      success: function(data) {
          // alert("Data Uploaded: " + data);
          var strHTML = '';
          // $('.-in-text .desc').hide();
          if (data.status == "error") {
              // alert(data.text);
              $('#clickuploadFile').text(data.text_respone);
              $('#clickuploadFile').addClass('btn-try');
              strHTML = `
                <span class="feather icon-refresh-cw text-warning"></span>
              `;
              $('#clickuploadFile').append(strHTML);
              $('.-in-text .title').html(data.text_title);
          }else{
              strHTML = `
              <span class="filename"></span><span class="typefile"></span>
              `;
              $('.-in-text .title').empty();
              $('.-in-text .title').append(strHTML);
              //btn
              $('#clickuploadFile').removeClass('btn-try');
              $('#clickuploadFile').empty();
              $.each(data, function(index, element) {
                  $("input[name='Uploadpicname']").val(element.uploadname);
                  $("input[name='delpicname']").val(element.uploadname);
                  $('.-in-text .title .filename').html(element.name);
                  $('.-in-text .title .typefile').html(element.typefile);
                  $('#clickuploadFile').text(element.text_respone);
              });
          }
          $('#complainForm').find('#submitform').removeAttr('disabled');
      },
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json'
  });
  return false;
});