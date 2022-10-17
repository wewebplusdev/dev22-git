var langs = $("meta[name='lang']").attr('content');

$(document).on('click','.clickdel_reference',function () {
    let CheckAction = $(this).data('action');
    
    if (CheckAction == 'adds') {
        $('#clone_reference .select-control').select2("destroy").end(); //destroy select2 before clone
        var htmlClone = $('#clone_reference').clone(); //clone after destroy select2
        $('#clone_reference').find('.select-control').select2({ minimumResultsForSearch: Infinity}).end();// select2 after clone html

        if (langs == 'th') {
            $(htmlClone).find('.clickdel_reference').text('ลบ');
        } else {
            $(htmlClone).find('.clickdel_reference').text('Delete');
        }
        
        $(htmlClone).find('.clickdel_reference').attr('data-action','dels');
        $(htmlClone).appendTo( ".reference_append" );
        let addPara = 'add';
        addcount_reference(addPara);
    } else {
        $(this).closest('#clone_reference').remove();
        let delPara = 'del';
        addcount_reference(delPara);
    }
});

function addcount_reference(action) {
    $('.reference_append #clone_reference').each(function(index,elem) {
        var count = index+1;
        if (action == 'add') {
            $(this).removeClass('d-none');
            
            // input
            $(this).find('input[name="reference[tmp][]"]').attr('name','reference['+(count)+'][]');
            // $(this).find('input[name="reference['+(count)+'][]"]').attr('id', $(this).find('input[name="reference['+(count)+'][]"]').attr('id')+'-'+count);
            $(this).find('input[name="reference['+(count)+'][]"]').val('');
            //select2
            $(this).find('select[name="reference[tmp][]"]').attr('name','reference['+(count)+'][]');
            $(this).find('select.select-control').select2({minimumResultsForSearch: -1}).end();//select2 after appendTo

            // required inputs
            $(this).find('input[name="reference['+(count)+'][]"]').attr('required', "required");
            $(this).find('select[name="reference['+(count)+'][]"]').attr('required', "required");

            $(this).validator('destroy');
            $(this).validator('validate');
        }


        if (action == 'del') {
            // input
            $(this).find('input[name="reference['+(count+1)+'][]"]').attr('name','reference['+(count)+'][]');
            //select2
            console.log($(this).find('select[name="reference['+(count)+'][]"]'));
            $(this).find('select[name="reference['+(count+1)+'][]"]').attr('name','reference['+(count)+'][]');
            $(this).find('select.select-control').select2({minimumResultsForSearch: -1}).end();//select2 after appendTo

            $(this).validator('destroy');
            $(this).validator('validate');
        }
    });
}
