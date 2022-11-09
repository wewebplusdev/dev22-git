// JavaScript Document
// ####################################### Start Product ################################################# //


function modInsertEmail(fileAc) {
	
 jQuery.blockUI({
		message: jQuery('#tallContent'),
		css: { border: 'none',padding: '35px',backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'
		}
	});


	var TYPE="POST";
	var URL=fileAc;

	var dataSet= jQuery("#myForm").serialize();

		jQuery.ajax({type:TYPE,url:URL,data:dataSet,
		success:function(html){
			
			jQuery("#boxMailContact").show();
			jQuery("#boxMailContact").html(html);
			setTimeout(jQuery.unblockUI, 200);
        	
		}
	}); 
}


function modDelEmail(fileAc) {
	
 jQuery.blockUI({
		message: jQuery('#tallContent'),
		css: { border: 'none',padding: '35px',backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'
		}
	});


	var TYPE="POST";
	var URL=fileAc;

	var dataSet= jQuery("#myForm").serialize();

		jQuery.ajax({type:TYPE,url:URL,data:dataSet,
		success:function(html){
			
			jQuery("#boxMailContact").show();
			jQuery("#boxMailContact").html(html);
			setTimeout(jQuery.unblockUI, 200);
        	
		}
	}); 
}



function delMapUpload(fileAc) {
	
 jQuery.blockUI({
		message: jQuery('#tallContent'),
		css: { border: 'none',padding: '35px',backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'
		}
	});


	var TYPE="POST";
	var URL=fileAc;

	var dataSet= jQuery("#myForm").serialize();

		jQuery.ajax({type:TYPE,url:URL,data:dataSet,
		success:function(html){
			
			jQuery("#boxMapNew").show();
			jQuery("#boxMapNew").html(html);
			setTimeout(jQuery.unblockUI, 200);
        	
		}
	}); 
}





function changeStatusBook(bID,valueID,fileAc) {
	
 jQuery.blockUI({
		message: jQuery('#tallContent'),
		css: { border: 'none',padding: '35px',backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'
		}
	});

	var TYPE="POST";
	var URL=fileAc;

	var dataSet={ 
	bID : bID,
	valueID : valueID
	
	};
		jQuery.ajax({type:TYPE,url:URL,data:dataSet,
		success:function(html){
			
			jQuery("#load_status"+bID).show();
			jQuery("#load_status"+bID).html(html);
			setTimeout(jQuery.unblockUI, 200);
        	
		}
	}); 
}	


// ####################################### End Product ################################################# //
