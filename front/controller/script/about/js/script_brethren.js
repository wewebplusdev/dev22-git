$(document).on('click','.addbrethren',function () {
  // $( ".place_brethren .temp_brethren .temp_brethrens" ).clone().appendTo( ".brethren" );
  // $('.brethren .temp_brethrens .clickdel').show();
  
  // let addPara = 'add';
  // addcount(addPara);

  // $( ".place_brethren .temp_brethren .temp_brethrens .select-control" ).select2("destroy").end(); //destroy select2 before clone
  // var htmlClone = $( ".place_brethren .temp_brethren .temp_brethrens" ).clone(); //clone after destroy select2
  // $( ".place_brethren .temp_brethren .temp_brethrens" ).find('.select-control').select2({ minimumResultsForSearch: Infinity}).end();// select2 after clone html
  
  $( "#temp_brethrens .select-control" ).select2("destroy").end(); //destroy select2 before clone
  var htmlClone = $("#temp_brethrens" ).clone(); //clone after destroy select2
  $( "#temp_brethrens" ).find('.select-control').select2({ minimumResultsForSearch: Infinity}).end();// select2 after clone html

  $(htmlClone).find('.clickdel').show();
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


          $(this).attr('data-count',count+1);
          var getname = $(this).find('.getnamebro').text().trim().split(' ');

          $(this).find('.s-title').html(getname[0]+" "+(count+1));

          $(this).find('.select-show').attr('id', 'select'+(count+1));

          // input
          $(this).find('input[id="inputBrethfname[1]"]').val('');
          $(this).find('input[name="inputBrethfname[1]"]').attr('name','inputBrethfname['+(count+1)+']');
          $(this).find('input[id="inputBrethfname[1]"]').attr('id','inputBrethfname['+(count+1)+']');

          $(this).find('input[id="inputBrethlname[1]"]').val('');
          $(this).find('input[name="inputBrethlname[1]"]').attr('name','inputBrethlname['+(count+1)+']');
          $(this).find('input[id="inputBrethlname[1]"]').attr('id','inputBrethlname['+(count+1)+']');

          $(this).find('input[id="inputBrethage[1]"]').val('');
          $(this).find('input[name="inputBrethage[1]"]').attr('name','inputBrethage['+(count+1)+']');
          $(this).find('input[id="inputBrethage[1]"]').attr('id','inputBrethage['+(count+1)+']');

          $(this).find('input[id="inputBrethagecarposi[1]"]').val('');
          $(this).find('input[name="inputBrethagecarposi[1]"]').attr('name','inputBrethagecarposi['+(count+1)+']');
          $(this).find('input[id="inputBrethagecarposi[1]"]').attr('id','inputBrethagecarposi['+(count+1)+']');

          $(this).find('input[id="inputBrethageaddressoffice[1]"]').val('');
          $(this).find('input[name="inputBrethageaddressoffice[1]"]').attr('name','inputBrethageaddressoffice['+(count+1)+']');
          $(this).find('input[id="inputBrethageaddressoffice[1]"]').attr('id','inputBrethageaddressoffice['+(count+1)+']');

          $(this).find('input[id="inputBrethtel[1]"]').val('');
          $(this).find('input[name="inputBrethtel[1]"]').attr('name','inputBrethtel['+(count+1)+']');
          $(this).find('input[id="inputBrethtel[1]"]').attr('id','inputBrethtel['+(count+1)+']');

          // $(this).find('input[id="inputBrethstatus[1]"]').val('');
          $(this).find('input[name="inputBrethstatus[1]"]').attr('name','inputBrethstatus['+(count+1)+']');
          $(this).find('input[id="inputBrethstatus[1]"]').attr('id','inputBrethstatus['+(count+1)+']');

          //select
          $(this).find('select[name="inputBirthday[1]"]').attr('name','inputBirthday['+(count+1)+']');
          $(this).find('select[id="inputBirthday[1]"]').attr('id','inputBirthday['+(count+1)+']');


          $(this).find('select[name="inputBirthmonth[1]"]').attr('name','inputBirthmonth['+(count+1)+']');
          $(this).find('select[id="inputBirthmonth[1]"]').attr('id','inputBirthmonth['+(count+1)+']');

          $(this).find('select[name="inputBirthyear[1]"]').attr('name','inputBirthyear['+(count+1)+']');
          $(this).find('select[id="inputBirthyear[1]"]').attr('id','inputBirthyear['+(count+1)+']');
          
          $(this).find('select[name="inputBrethdeadday[1]"]').attr('name','inputBrethdeadday['+(count+1)+']');
          $(this).find('select[id="inputBrethdeadday[1]"]').attr('id','inputBrethdeadday['+(count+1)+']');

          $(this).find('select[name="inputBrethdeadmonth[1]"]').attr('name','inputBrethdeadmonth['+(count+1)+']');
          $(this).find('select[id="inputBrethdeadmonth[1]"]').attr('id','inputBrethdeadmonth['+(count+1)+']');

          $(this).find('select[name="inputBrethdeadyear[1]"]').attr('name','inputBrethdeadyear['+(count+1)+']');
          $(this).find('select[id="inputBrethdeadyear[1]"]').attr('id','inputBrethdeadyear['+(count+1)+']');


          $(this).find('select.select-control').select2({minimumResultsForSearch: Infinity}).end();//select2 after appendTo

          // console.log((count+1));
                
      }


      if (action == 'del') {

          // var countCheck = $(this).data('count');
          console.log(count+1);

          $(this).attr('data-count',count+1);

          var getname = $(this).find('.getnamebro').text().trim().split(' ');
          $(this).find('.s-title').html(getname[0]+" "+(count+1));

          // input
          $(this).find('input[name="inputBrethfname['+(count+2)+']"]').attr('name','inputBrethfname['+(count+1)+']');
          $(this).find('input[id="inputBrethfname['+(count+2)+']"]').attr('id','inputBrethfname['+(count+1)+']');

          $(this).find('input[name="inputBrethlname['+(count+2)+']"]').attr('name','inputBrethlname['+(count+1)+']');
          $(this).find('input[id="inputBrethlname['+(count+2)+']"]').attr('id','inputBrethlname['+(count+1)+']');

          $(this).find('input[name="inputBrethage['+(count+2)+']"]').attr('name','inputBrethage['+(count+1)+']');
          $(this).find('input[id="inputBrethage['+(count+2)+']"]').attr('id','inputBrethage['+(count+1)+']');

          $(this).find('input[name="inputBrethagecarposi['+(count+2)+']"]').attr('name','inputBrethagecarposi['+(count+1)+']');
          $(this).find('input[id="inputBrethagecarposi['+(count+2)+']"]').attr('id','inputBrethagecarposi['+(count+1)+']');

          $(this).find('input[name="inputBrethageaddressoffice['+(count+2)+']"]').attr('name','inputBrethageaddressoffice['+(count+1)+']');
          $(this).find('input[id="inputBrethageaddressoffice['+(count+2)+']"]').attr('id','inputBrethageaddressoffice['+(count+1)+']');

          $(this).find('input[name="inputBrethtel['+(count+2)+']"]').attr('name','inputBrethtel['+(count+1)+']');
          $(this).find('input[id="inputBrethtel['+(count+2)+']"]').attr('id','inputBrethtel['+(count+1)+']');

          $(this).find('input[name="inputBrethstatus['+(count+2)+']"]').attr('name','inputBrethstatus['+(count+1)+']');
          $(this).find('input[id="inputBrethstatus['+(count+2)+']"]').attr('id','inputBrethstatus['+(count+1)+']');

          //select
          $(this).find('select[name="inputBirthday['+(count+2)+']"]').attr('name','inputBirthday['+(count+1)+']');
          $(this).find('select[id="inputBirthday['+(count+2)+']"]').attr('id','inputBirthday['+(count+1)+']');

          $(this).find('select[name="inputBirthmonth['+(count+2)+']"]').attr('name','inputBirthmonth['+(count+1)+']');
          $(this).find('select[id="inputBirthmonth['+(count+2)+']"]').attr('id','inputBirthmonth['+(count+1)+']');

          $(this).find('select[name="inputBirthyear['+(count+2)+']"]').attr('name','inputBirthyear['+(count+1)+']');
          $(this).find('select[id="inputBirthyear['+(count+2)+']"]').attr('id','inputBirthyear['+(count+1)+']');
          
          $(this).find('select[name="inputBrethdeadday['+(count+2)+']"]').attr('name','inputBrethdeadday['+(count+1)+']');
          $(this).find('select[id="inputBrethdeadday['+(count+2)+']"]').attr('id','inputBrethdeadday['+(count+1)+']');

          $(this).find('select[name="inputBrethdeadmonth['+(count+2)+']"]').attr('name','inputBrethdeadmonth['+(count+1)+']');
          $(this).find('select[id="inputBrethdeadmonth['+(count+2)+']"]').attr('id','inputBrethdeadmonth['+(count+1)+']');

          $(this).find('select[name="inputBrethdeadyear['+(count+2)+']"]').attr('name','inputBrethdeadyear['+(count+1)+']');
          $(this).find('select[id="inputBrethdeadyear['+(count+2)+']"]').attr('id','inputBrethdeadyear['+(count+1)+']');
      }

      
  
  });
}
