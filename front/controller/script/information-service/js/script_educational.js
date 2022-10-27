var langs = $("meta[name='lang']").attr('content');

$(document).on('change','#chengeemount',function name() {
    var nameThis = $(this).attr("id");
    CutYearEdu(nameThis);
});

function CutYearEdu(nameSelect) {
    var start = $('select[id="'+nameSelect+'"]').val();
    var StartYear = start - 10;
    var StartYearNow = new Date().getFullYear();
    var StartYearNowTH = StartYearNow + 543;
    var StartYearNowTHDelTen = StartYearNowTH - 10;

    for (ij = StartYearNowTHDelTen; ij <= StartYearNowTH; ij++) {
        var to =  $('select[id="chengeemount"] option[value=' + ij + ']').removeAttr('disabled');
    }
    for (ii = StartYear; ii < start; ii++) {
        var to =  $('select[id="chengeeyear"] option[value=' + ii + ']').attr('disabled','disabled');
    }
}

$(document).on('click','.clickdel_educational',function () {
    let CheckAction = $(this).data('action');
    
    if (CheckAction == 'adds') {
        $('#clone_educational .select-control').select2("destroy").end(); //destroy select2 before clone
        var htmlClone = $('#clone_educational').clone(); //clone after destroy select2
        $('#clone_educational').find('.select-control').select2({ minimumResultsForSearch: Infinity}).end();// select2 after clone html

        if (langs == 'th') {
            $(htmlClone).find('.clickdel_educational').text('ลบ');
        } else {
            $(htmlClone).find('.clickdel_educational').text('Delete');
        }
        
        $(htmlClone).find('.clickdel_educational').attr('data-action','dels');
        $(htmlClone).appendTo( ".educational" );
        let addPara = 'add';
        addcount_edu(addPara);
    } else {
        $(this).closest('#clone_educational').remove();
        let delPara = 'del';
        addcount_edu(delPara);
    }
});

function addcount_edu(action) {
    $('.educational #clone_educational').each(function(index,elem) {
        var count = index+1;
        if (action == 'add') {
            $(this).removeClass('d-none');

            // input
            $(this).find('input[name="education[tmp][]"]').attr('name','education['+(count)+'][]');
            $(this).find('input[name="education['+(count)+'][]"]').val('');
            //select2
            $(this).find('select[name="education[tmp][]"]').attr('name','education['+(count)+'][]');
            $(this).find('select.select-control').select2({minimumResultsForSearch: -1}).end();//select2 after appendTo

            // required inputs
            $(this).find('input[name="education['+(count)+'][]"]').attr('required', "required");
            $(this).find('select[name="education['+(count)+'][]"]').attr('required', "required");
            
            $(this).validator('destroy');
            $(this).validator('validate');
        }


        if (action == 'del') {
            // input
            $(this).find('input[name="education['+(count+1)+'][]"]').attr('name','education['+(count)+'][]');
            //select2
            $(this).find('select[name="education['+(count+1)+'][]"]').attr('name','education['+(count)+'][]');
            $(this).find('select.select-control').select2({minimumResultsForSearch: -1}).end();//select2 after appendTo

            $(this).validator('destroy');
            $(this).validator('validate');
        }
    });
}
