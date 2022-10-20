var base = $("base").attr("href");

$('#contactus').validator().on('submit', function (e) {    
    if (e.isDefaultPrevented()) {
        $('#contactus').validator('validate');
    } else {
        e.preventDefault();
        
        // $('.loadspinner').show();
        $('#submit-contact').html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:32px; vertical-align: middle;"></i>');
        $("#submit-contact").attr("disabled", true);
        var type="POST";
        var url= base +"/contact/incontact";
        var data= $(this).serialize();
        $.ajax({type:type,url:url,data:data,
            success:function(data){
                
            }
        }).done(function(data){
            var datajson = JSON.parse(data);
            if (datajson.status == 'Success') {
                window.location.href = base+'contact/success?st='+datajson.code+'';
            } else {
                window.location.href = base+'contact/success?st='+datajson.code+'';
            }
            return false;
        } ); 
        
    }
});