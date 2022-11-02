
function checkUrl(el) {
  jQuery.blockUI({
      message: jQuery('#tallContent'),
      css: {
          border: 'none',
          padding: '35px',
          backgroundColor: '#000',
          '-webkit-border-radius': '10px',
          '-moz-border-radius': '10px',
          opacity: .9,
          color: '#fff'
      }
  });

  var TYPE = "POST";
  var URL = "./checkurl.php";
  var dataSet = jQuery("#myForm").serialize();

  var url = jQuery(el).val();

  // make the url lowercase         
  var encodedUrl = url.toString().toLowerCase();

  // replace & with and           
  encodedUrl = encodedUrl.split(/\&+/).join("-and-")

  // remove invalid characters 
  encodedUrl = encodedUrl.split(/[^a-z0-9ก-๙]/).join("-");

  // remove duplicates 
  encodedUrl = encodedUrl.split(/-+/).join("-");

  // trim leading & trailing characters 
  encodedUrl = encodedUrl.trim('-');

  jQuery(el).val(encodedUrl);

  jQuery.ajax({
      type: TYPE,
      url: URL,
      data: dataSet,
      success: function(res) {
        let data = JSON.parse(res);
        $('#urlstatus').html(data.msg);
        $('#inputUrlcheck').val(data.status);
        $('#urlstatus').css('color',data.color);
        if (data.status == 'Disabled') {
          jQuery("#inputShortUrl").addClass("formInputContantTbAlertY");
        }else{
          jQuery("#inputShortUrl").removeClass("formInputContantTbAlertY");
        }

        if (!$(el).val()) {
          $('#inputUrlEmpty').val('false');
          $('#urlstatus').text(" - ");
          $('#urlstatus').css('color' ,'#8496aa');
        }else{
          $('#inputUrlEmpty').val('true');
        }
        setTimeout(jQuery.unblockUI, 200);
      }
  });
}
