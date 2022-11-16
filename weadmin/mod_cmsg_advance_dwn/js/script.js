function onChangeSelect(fileAc, elemID) {

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
  var URL = fileAc;

  var dataSet = jQuery("#myForm").serialize();

  jQuery.ajax({
      type: TYPE,
      url: URL,
      data: dataSet,
      success: function(html) {
          jQuery(elemID).show();
          jQuery(elemID).html(html);
          setTimeout(jQuery.unblockUI, 200);
      }
  });
}

function onChangeSelect2(fileAc, elemID) {

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
    var URL = fileAc;
  
    var dataSet = jQuery("#myForm").serialize();
  
    jQuery.ajax({
        type: TYPE,
        url: URL,
        data: dataSet,
        success: function(html) {
            jQuery(elemID).show();
            jQuery(elemID).html(html);
            setTimeout(jQuery.unblockUI, 200);
            document.myForm.submit();
        }
    });
  }

$('select[name="inputGroupID"]').on('change', function(){
    let type = $('option:selected', $(this)).data('type');
    if (type == 2) {
        $('.boxPic').show();
    }else{
        $('.boxPic').hide();
    }
});