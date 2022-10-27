// JavaScript Document

// $(document).on('keyup','#inputSubject', function(){
// 	let inputSubject = $(this).val();
// 	// console.log(inputSubject);
// 	let str_url = (inputSubject).trim();
// 	// let str_url = inputGroupID + ' (' + inputPackageID + ' ' + inputCountUnitPackage + ' ' + inputPronounPackage + ') x ' + inputCountPackage;
// 	$('p#fullsubjectProduct').text(str_url);
// 	$('#inputUrlFriendly').val(str_url).change();
// 	urlfriendly('inputUrlFriendly','inputUrlFriendly','checkurl.php');
// });
// ####################################### Start Product ################################################# //


// function checkCodeProduct(fileAc) {
	
//  jQuery.blockUI({
// 		message: jQuery('#tallContent'),
// 		css: { border: 'none',padding: '35px',backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'
// 		}
// 	});


// 	var TYPE="POST";
// 	var URL=fileAc;

// 	var dataSet= jQuery("#myForm").serialize();

// 		jQuery.ajax({type:TYPE,url:URL,data:dataSet,
// 		success:function(html){
			
// 			jQuery("#boxCheckCodePro").show();
// 			jQuery("#boxCheckCodePro").html(html);
// 			setTimeout(jQuery.unblockUI, 200);
        	
// 		}
// 	}); 
// }



function openSelectType(fileAc) {
	
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
			
			jQuery("#boxTypeSelect").show();
			jQuery("#boxTypeSelect").html(html);
			setTimeout(jQuery.unblockUI, 200);
        	
		}
	}); 
}


function executeAddFactor(el, permis) {
	let arrData = new Array();
	$(el).parent().parent().find('input').each(function(index, value){
		if (isBlank(value)) {
			$(value).focus();
			$(value).addClass("formInputContantTbAlertY");
			return false;
		} else {
			arrData.push($(value).val());
			$(value).removeClass("formInputContantTbAlertY");
		}
	});

	strHTML = `<tr class="data"><td align="left" valign="top" class="formLeftContantTb">NaN.</td><td><input name="inputFactorLength[]" id="inputFactorLength" placeholder="Length" type="number" class="formInputContantTbShort" value="${arrData[0]}" /></td><td><input name="inputFactorWidth[]" id="inputFactorWidth" placeholder="Width" type="number" class="formInputContantTbShort" value="${arrData[1]}"/></td><td >Adjustment Factor</td><td><input name="inputFactorList[]" id="inputFactorList" type="number" class="formInputContantTbShort" value="${arrData[2]}"/></td>`;
	if (permis == 'RW') {
		strHTML += `<td><div  class="btnDel2" title="Delete" onclick="DelFactor($(this))"></div></td>`;
	}
	strHTML += `</tr>`;
	$(strHTML).insertBefore($(el).parent().parent());

	$(el).parent().parent().parent().find('tr.data').each(function(index, value){
		$(value).find('td.formLeftContantTb').text(index+1+'.');
	});

	// clear input fields
	$(el).parent().parent().find('td input').val("");
}

function DelFactor(el){
	$(el).parent().parent().remove();
}

// ####################################### End Product ################################################# //
