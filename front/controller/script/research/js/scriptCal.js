var origin_menuid = $('.site-container').data('menuid');

$('#diaform').on('change', function(){
    let dataType = $(this).find(':selected').data('type');
    let img = $(this).find(':selected').data('pic');
    let subject = $(this).find(':selected').data('subject');
    let factor = $(this).find(':selected').data('factor');
    $('.-shape-diamon img').attr('src', img);
    $('.-shape-title .title').text(subject);
    $('input[name="type"]').val(dataType);
    $('input[name="factor"]').val(factor);
    switch (dataType) {
        case 1:
            $('.confition-cal').hide();
            $('.type-1').show();
            break;
    
        default:
            $('.confition-cal').hide();
            $('.type-other').show();
            break;
    }
});

$("#form-calculator").on("submit", function (e) {
  var formData = new FormData($("#form-calculator")[0]);
    var path = $("base").attr("href") + base_url_lang;
    var baselang = $("base").attr("href") + base_url_lang + "/research/" + origin_menuid + "/calculator";

    $.ajax({
      url: baselang,
      type: "POST",
      xhr: function () {
        var myXhr = $.ajaxSettings.xhr();
        return myXhr;
      },
      success: function (data) {
        if (data.status) {
          $('.calc-detail .-percentage span').text(data.dataset.deptpercentage);
          $('.calc-detail .-ratio span').text(data.dataset.ratio);
          $('.calc-detail .-weighs span').text(data.dataset.calculator.toFixed(4));
        }else{
          $('.calc-detail .-weighs span').text('Error: Not enough data');
        }
      },
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
    });
    return false;
});

$('#cancelForm').on('click', function(){
  $('#diamcut1').val(0);
  $('#diamcut').val(0);
  $('#widecut').val(0);
  $('#heightcut').val(0);
  $('#girth').prop('selectedIndex',0);
  $('#girth').val(0).change();
  $('#pavbul').val(0);
});