$(document).on('click','.addbrethren',function () {
  $( "#temp_brethrens .select-control" ).select2("destroy").end(); //destroy select2 before clone
  var htmlClone = $("#temp_brethrens" ).clone(); //clone after destroy select2
  $( "#temp_brethrens" ).find('.select-control').select2({ minimumResultsForSearch: -1}).end();// select2 after clone html

  $(htmlClone).find('.clickdel').show();
  $(htmlClone).find('.form-set').removeClass('d-none');
  $(htmlClone).appendTo( ".brethren" );
  let addPara = 'add';
  addcount(addPara);

});

$(document).on('click','.clickdel',function () {
  $(this).closest('#temp_brethrens').remove();
  let delPara = 'del';
  addcount(delPara);
});


function addcount(action) {
  $('.brethren #temp_brethrens').each(function(index,elem) {
      var count = index+1;
      if (action == 'add') {
        // input
        $(this).find('input[name="brethren[temp][]"]').attr('name','brethren['+(count)+'][]');
        $(this).find('input[name="brethren['+(count)+'][]"]').val('');
        // radio
        $(this).find('input[name="brethren[temp][alive]"]').attr('name','brethren['+(count)+'][alive]');
        $(this).find('input[name="brethren['+(count)+'][alive]"]').attr('checked','checked');
        //select2
        $(this).find('select[name="brethren[temp][]"]').attr('name','brethren['+(count)+'][]');
        $(this).find('select.select-control').select2({minimumResultsForSearch: -1}).end();//select2 after appendTo
        // required inputs
        $(this).find('input[name="brethren['+(count)+'][]"]').attr('required', "required");
        $(this).find('select[name="brethren['+(count)+'][]"]').attr('required', "required");

        $(this).validator('destroy');
        $(this).validator('validate');
      }

      if (action == 'del') {
        // input
        $(this).find('input[name="brethren['+(count+1)+'][]"]').attr('name','brethren['+(count)+'][]');
        // radio
        $(this).find('input[name="brethren['+(count+1)+'][alive]"]').attr('name','brethren['+(count)+'][alive]');
        //select2
        $(this).find('select[name="brethren['+(count+1)+'][]"]').attr('name','brethren['+(count)+'][]');
        $(this).find('select.select-control').select2({minimumResultsForSearch: -1}).end();//select2 after appendTo

        $(this).validator('destroy');
        $(this).validator('validate');
      }
  });
}
