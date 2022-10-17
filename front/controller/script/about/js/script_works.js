var langs = $("meta[name='lang']").attr('content');

$(document).on('change','#chengeemount-3',function name() {
    var nameThis = $(this).attr("id");
    CutYearTran(nameThis);
});

function CutYearTran(nameSelect) {
    var start = $('select[id="'+nameSelect+'"]').val();
    var StartYear = start - 10;
    var StartYearNow = new Date().getFullYear();
    var StartYearNowTH = StartYearNow + 543;
    var StartYearNowTHDelTen = StartYearNowTH - 10;

    for (ij = StartYearNowTHDelTen; ij <= StartYearNowTH; ij++) {
        var to =  $('select[id="chengeemount-3"] option[value=' + ij + ']').removeAttr('disabled');
    }
    for (ii = StartYear; ii < start; ii++) {
        var to =  $('select[id="chengeeyear-3"] option[value=' + ii + ']').attr('disabled','disabled');
    }
}

$(document).on('click','.clickdel_works',function () {
    let CheckAction = $(this).data('action');
    
    if (CheckAction == 'adds') {
        $('#clone_works .select-control').select2("destroy").end(); //destroy select2 before clone
        var htmlClone = $('#clone_works').clone(); //clone after destroy select2
        $('#clone_works').find('.select-control').select2({ minimumResultsForSearch: Infinity}).end();// select2 after clone html
        console.log(htmlClone);

        if (langs == 'th') {
            $(htmlClone).find('.clickdel_works').text('ลบ');
        } else {
            $(htmlClone).find('.clickdel_works').text('Delete');
        }
        
        $(htmlClone).find('.clickdel_works').attr('data-action','dels');
        $(htmlClone).appendTo( ".working" );
        let addPara = 'add';
        addcount_edu(addPara);
    } else {
        $(this).closest('#clone_works').remove();
        let delPara = 'del';
        addcount_edu(delPara);
    }
});

function addcount_edu(action) {
    $('.working #clone_works').each(function(index,elem) {
        var count = index+1;
        if (action == 'add') {
            $(this).removeClass('d-none');
            $(this).find('.-title').text((count+1) + '. ชื่อบริษัท / Company’s Nam<');
            
            // input
            $(this).find('input[name="workhistory[tmp][]"]').attr('name','workhistory['+(count)+'][]');
            $(this).find('input[name="workhistory['+(count)+'][]"]').val('');
            //select2
            $(this).find('select[name="workhistory[tmp][]"]').attr('name','workhistory['+(count)+'][]');
            $(this).find('select.select-control').select2({minimumResultsForSearch: -1}).end();//select2 after appendTo

            $(this).validator('destroy');
            $(this).validator('validate');
        }


        if (action == 'del') {
            // input
            $(this).find('input[name="training['+(count+1)+'][]"]').attr('name','training['+(count)+'][]');
            //select2
            $(this).find('select[name="training['+(count)+'][]"]').attr('name','training['+(count)+'][]');
            $(this).find('select.select-control').select2({minimumResultsForSearch: -1}).end();//select2 after appendTo

            $(this).validator('destroy');
            $(this).validator('validate');
        }
    });
}
