var langs = $("meta[name='lang']").attr('content');

// $(document).on('change','#chengeemount-3',function name() {
//     var nameThis = $(this).attr("id");
//     CutYearTran(nameThis);
// });

// function CutYearTran(nameSelect) {
//     var start = $('select[id="'+nameSelect+'"]').val();
//     var StartYear = start - 10;
//     var StartYearNow = new Date().getFullYear();
//     var StartYearNowTH = StartYearNow + 543;
//     var StartYearNowTHDelTen = StartYearNowTH - 10;

//     for (ij = StartYearNowTHDelTen; ij <= StartYearNowTH; ij++) {
//         var to =  $('select[id="chengeemount-3"] option[value=' + ij + ']').removeAttr('disabled');
//     }
//     for (ii = StartYear; ii < start; ii++) {
//         var to =  $('select[id="chengeeyear-3"] option[value=' + ii + ']').attr('disabled','disabled');
//     }
// }

$(document).on('click','.clickdel_language',function () {
    let CheckAction = $(this).data('action');
    
    if (CheckAction == 'adds') {
        $('#clone_language .select-control').select2("destroy").end(); //destroy select2 before clone
        var htmlClone = $('#clone_language').clone(); //clone after destroy select2
        $('#clone_language').find('.select-control').select2({ minimumResultsForSearch: Infinity}).end();// select2 after clone html

        if (langs == 'th') {
            $(htmlClone).find('.clickdel_language').text('ลบ');
        } else {
            $(htmlClone).find('.clickdel_language').text('Delete');
        }
        
        $(htmlClone).find('.clickdel_language').attr('data-action','dels');
        $(htmlClone).appendTo( ".language" );
        let addPara = 'add';
        addcount_lang(addPara);
    } else {
        $(this).closest('#clone_language').remove();
        let delPara = 'del';
        addcount_lang(delPara);
    }
});

function addcount_lang(action) {
    $('.language #clone_language').each(function(index,elem) {
        var count = index+1;
        if (action == 'add') {
            $(this).removeClass('d-none');
            // $(this).find('.-title').text((count+1) + '. ชื่อบริษัท / Company’s Nam<');
            
            // // input
            // $(this).find('input[name="language[tmp][]"]').attr('name','language['+(count)+'][]');
            // // $(this).find('input[name="language['+(count)+'][]"]').attr('id', $(this).find('input[name="language['+(count)+'][]"]').attr('id')+'-'+count);
            // $(this).find('input[name="language['+(count)+'][]"]').val('');
            //select2
            $(this).find('select[name="language[tmp][]"]').attr('name','language['+(count)+'][]');
            $(this).find('select.select-control').select2({minimumResultsForSearch: -1}).end();//select2 after appendTo

            // required inputs
            $(this).find('input[name="language['+(count)+'][]"]').attr('required', "required");
            $(this).find('select[name="language['+(count)+'][]"]').attr('required', "required");

            $(this).validator('destroy');
            $(this).validator('validate');
        }


        if (action == 'del') {
            // // input
            // $(this).find('input[name="language['+(count+1)+'][]"]').attr('name','language['+(count)+'][]');
            //select2
            console.log($(this).find('select[name="language['+(count)+'][]"]'));
            $(this).find('select[name="language['+(count+1)+'][]"]').attr('name','language['+(count)+'][]');
            $(this).find('select.select-control').select2({minimumResultsForSearch: -1}).end();//select2 after appendTo

            $(this).validator('destroy');
            $(this).validator('validate');
        }
    });
}
