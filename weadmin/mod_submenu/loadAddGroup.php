<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");

$valClassNav=2;
$valNav1=$langTxt["nav:home2"];
$valLinkNav1="../core/index.php";

			 $myRand = time().rand(111,99);
		 	$valPermission= getUserPermissionOnMenu($_SESSION[$valSiteManage."core_session_groupid"],$_POST["menukeyid"]);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow">
	<meta name="googlebot" content="noindex, nofollow">
	<link href="../css/theme.css" rel="stylesheet" />

	<title><?php echo  $core_name_title ?></title>
	<script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
	<script language="JavaScript" type="text/javascript">
		function executeSubmit() {
			with(document.myForm) {


				if (isBlank(inputSubject)) {
					inputSubject.focus();
					jQuery("#inputSubject").addClass("formInputContantTbAlertY");
					return false;
				} else {
					jQuery("#inputSubject").removeClass("formInputContantTbAlertY");
				}

				if (isBlank(inputURL)) {
					inputURL.focus();
					jQuery("#inputURL").addClass("formInputContantTbAlertY");
					return false;
				} else {
					jQuery("#inputURL").removeClass("formInputContantTbAlertY");
				}

				if (inputURL.value == "http://") {
					inputURL.focus();
					jQuery("#inputURL").addClass("formInputContantTbAlertY");
					return false;
				} else {
					jQuery("#inputURL").removeClass("formInputContantTbAlertY");
				}
			}

			insertContactNew('insertGroup.php');

		}



		jQuery(document).ready(function() {

			jQuery('#myForm').keypress(function(e) {
				var checkFocusTitle = jQuery("#inputComment").is(":focus");
				/* Start  Enter Check CKeditor */

				if (e.which == 13) {
					if (!checkFocusTitle) {
						executeSubmit();
						return false;
					}

				}
				/* End  Enter Check CKeditor */
			});
		});
	</script>
</head>

<body>
	<form action="?" method="get" name="myForm" id="myForm">
		<input name="execute" type="hidden" id="execute" value="insert" />
		<input name="masterkey" type="hidden" id="masterkey" value="<?php echo  $_REQUEST['masterkey'] ?>" />
		<input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo  $_REQUEST['menukeyid'] ?>" />
		<input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo  $_REQUEST['inputSearch'] ?>" />
		<input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo  $_REQUEST['module_pageshow'] ?>" />
		<input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo  $_REQUEST['module_pagesize'] ?>" />
		<input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo  $_REQUEST['module_orderby'] ?>" />
		<input name="inputGh" type="hidden" id="inputGh" value="<?php echo  $_REQUEST['inputGh'] ?>" />
		<input name="inputLt" type="hidden" id="inputLt" value="<?php echo  $_REQUEST['inputLt'] ?>" />
		<!-- <input name="inputgroupID" type="hidden" id="inputgroupID" value="<?php echo  $_REQUEST['inputgroupID'] ?>" /> -->
		<div class="divRightNav">
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo  $valLinkNav1 ?>" target="_self"><?php echo  $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('group.php')" target="_self"><?php echo  $langMod["meu:group"] ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo  $langMod["txt:titleaddg"] ?>
							<?php if($_SESSION[$valSiteManage.'core_session_languageT']==2 || $_SESSION[$valSiteManage.'core_session_languageT']==3){ ?>(<?php echo  $langTxt["lg:thai"] ?>)
							<?php } ?></span></td>
					<td class="divRightNavTb" align="right">



					</td>
				</tr>
			</table>
		</div>
		<div class="divRightHead">
			<table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
				<tr>
					<td height="77" align="left"><span class="fontHeadRight"><?php echo  $langMod["txt:titleaddg"] ?>
							<?php if($_SESSION[$valSiteManage.'core_session_languageT']==2 || $_SESSION[$valSiteManage.'core_session_languageT']==3){ ?>(<?php echo  $langTxt["lg:thai"] ?>)
							<?php } ?></span></td>
					<td align="left">
						<table border="0" cellspacing="0" cellpadding="0" align="right">
							<tr>
								<td align="right">
									<?php if($valPermission=="RW" ){ ?>
									<div class="btnSave" title="<?php echo  $langTxt["btn:save"] ?>" onclick="executeSubmit();"></div>
									<?php } ?>
									<div class="btnBack" title="<?php echo  $langTxt["btn:back"] ?>" onclick="btnBackPage('group.php')"></div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<div class="divRightMain">
			<br />
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
				<tr>
					<td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
						<span class="formFontSubjectTxt"><?php echo  $langMod["txt:subjectg"] ?></span><br />
						<span class="formFontTileTxt"><?php echo  $langMod["txt:subjectgDe"] ?></span> </td>
				</tr>
				<tr>
					<td colspan="7" align="right" valign="top" height="15"></td>
				</tr>

				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:subjectg"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputSubject" id="inputSubject" type="text" class="formInputContantTb" /></td>
				</tr>

				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:noteg"] ?></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
						<textarea name="inputComment" id="inputComment" cols="20" rows="5" class="formTextareaContantTb"></textarea>
					</td>
				</tr>

				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:linkvdo"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><textarea name="inputURL" id="inputURL" cols="45" rows="5" class="formTextareaContantTb">http://</textarea><br />
						<span class="formFontNoteTxt"><?php echo  $langMod["edit:linknote"] ?></span></td>
				</tr>

				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:typevdo"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
						<label>
							<div class="formDivRadioL"><input name="inputTarget" id="inputTarget" type="radio" class="formRadioContantTb" value="1" checked="checked" /></div>
							<div class="formDivRadioR"><?php echo  $modTxtTarget[1] ?></div>
						</label>

						<label>
							<div class="formDivRadioL"><input name="inputTarget" id="inputTarget" type="radio" class="formRadioContantTb" value="2" /></div>
							<div class="formDivRadioR"><?php echo  $modTxtTarget[2] ?></div>
						</label>
						</label> </td>
				</tr>

			</table>
			<br />

			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder " style="display: none;">
				<tr>
					<td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
						<span class="formFontSubjectTxt"><?php echo  $langMod["txt:pic"] ?></span><br />
						<span class="formFontTileTxt"><?php echo  $langMod["txt:picDe"] ?></span> </td>
				</tr>
				<tr>
					<td colspan="7" align="right" valign="top" height="15"></td>
				</tr>

				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:album"] ?></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
						<div class="file-input-wrapper">
							<button class="btn-file-input"><?php echo  $langTxt["us:inputpicselect"] ?></button>
							<input type="file" name="fileToUpload" id="fileToUpload" onchange="ajaxFileUpload();" />
						</div>

						<span class="formFontNoteTxt"><?php echo  $langMod["inp:notepic"] ?></span>
						<div class="clearAll"></div>
						<div id="boxPicNew" class="formFontTileTxt">
							<input type="hidden" name="picname" id="picname" />
						</div>
					</td>
				</tr>

			</table>

			<br style="display: none;"/>

			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">

				<tr>
					<td colspan="7" align="right" valign="top" height="20"></td>
				</tr>
				<tr>
					<td colspan="7" align="right" valign="middle" class="formEndContantTb"><a href="#defTop" title="<?php echo  $langTxt["btn:gototop"] ?>"><?php echo  $langTxt["btn:gototop"] ?> <img src="../img/btn/top.png" align="absmiddle" /></a></td>
				</tr>
			</table>
		</div>
	</form>
	<script type="text/javascript" src="../js/ajaxfileupload.js"></script>
	<!-- <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script> -->
	<script type="text/javascript" language="javascript">
		/*################################# Upload Pic #######################*/
		function ajaxFileUpload() {
			var valuepicname = jQuery("input#picname").val();

			jQuery.blockUI({
				message: jQuery('#tallContent'),
				css: {
					border: 'none',
					padding: '35px',
					backgroundColor: '#000',
					'-webkit-border-radius': '10px',
					'-moz-border-radius': '10px',
					opacity: .9,
					color: '#fff'
				}
			});


			jQuery.ajaxFileUpload({
				url: 'loadInsertPic.php?myID=<?php echo  $myRand ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&delpicname=' + valuepicname + '&menuid=<?php echo  $_REQUEST['menukeyid'] ?>',
				secureuri: false,
				fileElementId: 'fileToUpload',
				dataType: 'json',
				success: function(data, status) {
					if (typeof(data.error) != 'undefined') {

						if (data.error != '') {
							alert(data.error);

						} else {
							jQuery("#boxPicNew").show();
							jQuery("#boxPicNew").html(data.msg);
							setTimeout(jQuery.unblockUI, 200);
						}
					}
				},
				error: function(data, status, e) {
					alert(e);
				}
			})
			return false;

		}
		/*############################# Upload Album ################################## */

		// function ajaxFileUploadAlbum(){
		// 	 jQuery.blockUI({
		// 			message: jQuery('#tallContent'),
		// 			css: { border: 'none',padding: '35px',backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'
		// 			}
		// 		});
		//
		//
		// 	jQuery.ajaxFileUpload({
		// 			url:'loadInsertAlbum.php?myID=<?php echo  $myRand ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&menuid=<?php echo  $_REQUEST['menukeyid'] ?>',
		// 			secureuri:true,
		// 			fileElementId:'inputAlbumUpload',
		// 			dataType: 'json',
		// 			success: function (data, status){
		// 				if(typeof(data.error) != 'undefined'){
		//
		// 					if(data.error != ''){
		// 						alert(data.error);
		// 					}else{
		// 						jQuery("#boxAlbumNew").show();
		// 						jQuery("#boxAlbumNew").html(data.msg);
		// 						setTimeout(jQuery.unblockUI, 200);
		// 					}
		//
		// 				}
		// 			},
		// 			error: function (data, status, e){
		// 				alert(e);
		// 			}
		// 		}
		// 	)
		//
		// 	return false;
		//
		// }

		/*################################# Upload Video #######################*/
		function ajaxVideoUpload() {
			var valuevdoname = jQuery("input#vdoname").val();

			jQuery.blockUI({
				message: jQuery('#tallContent'),
				css: {
					border: 'none',
					padding: '35px',
					backgroundColor: '#000',
					'-webkit-border-radius': '10px',
					'-moz-border-radius': '10px',
					opacity: .9,
					color: '#fff'
				}
			});


			jQuery.ajaxFileUpload({
				url: 'loadInsertVideo.php?myID=<?php echo  $myRand ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&delvdoname=' + valuevdoname + '&menuid=<?php echo  $_REQUEST['menukeyid'] ?>',
				secureuri: false,
				fileElementId: 'inputVideoUpload',
				dataType: 'json',
				success: function(data, status) {
					if (typeof(data.error) != 'undefined') {

						if (data.error != '') {
							alert(data.error);

						} else {
							jQuery("#boxVideoNew").show();
							jQuery("#boxVideoNew").html(data.msg);
							setTimeout(jQuery.unblockUI, 200);
						}
					}
				},
				error: function(data, status, e) {
					alert(e);
				}
			})
			return false;

		}

		/*############################# Upload File ####################################*/
		function ajaxFileUploadDoc() {
			var valuefilename = jQuery("input#inputFileName").val();
			jQuery.blockUI({
				message: jQuery('#tallContent'),
				css: {
					border: 'none',
					padding: '35px',
					backgroundColor: '#000',
					'-webkit-border-radius': '10px',
					'-moz-border-radius': '10px',
					opacity: .9,
					color: '#fff'
				}
			});


			jQuery.ajaxFileUpload({
				url: 'loadInsertFile.php?myID=<?php echo  $myRand ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&nametodoc=' + valuefilename + '&menuid=<?php echo  $_REQUEST['menukeyid'] ?>',
				secureuri: true,
				fileElementId: 'inputFileUpload',
				dataType: 'json',
				success: function(data, status) {
					if (typeof(data.error) != 'undefined') {

						if (data.error != '') {
							alert(data.error);
						} else {
							jQuery("#boxFileNew").show();
							jQuery("#boxFileNew").html(data.msg);
							document.myForm.inputFileName.value = "";
							setTimeout(jQuery.unblockUI, 200);
						}

					}
				},
				error: function(data, status, e) {
					alert(e);
				}
			})

			return false;

		}

		/*################### Load FCK Editor ######################*/
		// jQuery(function() {
		// 	onLoadFCK();
		// });
	</script>

	<script type="text/javascript" src="js/jquery.uploadfile.js"></script>
	<script type="text/javascript" language="javascript">
		jQuery(document).ready(function() {
			var vajSelectFile = 0;
			var valUploadFile = 0;
			var settings = {
				url: "loadInsertAlbum.php?myID=<?php echo  $myRand ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&menuid=<?php echo  $_REQUEST['menukeyid'] ?>",
				dragDrop: false,
				fileName: "myfile",
				allowedTypes: "jpg,png,gif",
				returnType: "json",
				onSelect: function(files) {
					vajSelectFile = files.length;
				},

				onSuccess: function(files, data, xhr) {
					valUploadFile = valUploadFile + 1;
					if (vajSelectFile == valUploadFile) {
						loadShowPhotoUpdate('loadShowAlbumNew.php', 'boxAlbumNew');
						// alert('goooo');
						valUploadFile = 0;
					}
				},
				showStatusAfterSuccess: false,
				showAbort: false,
				showDone: false,
				showDelete: false,
				deleteCallback: function(data, pd) {
					for (var i = 0; i < data.length; i++) {

						$.post("delete.php", {
								op: "delete",
								name: data[i]
							},
							function(resp, textStatus, jqXHR) {

								//Show Message
								jQuery("#status").append("<div>File Deleted</div>");
							});

					}
					pd.statusbar.hide(); //You choice to hide/not.

				}
			}
			var uploadObj = jQuery("#mulitplefileuploader").uploadFile(settings);


		});
	</script>


	<?php if($_SESSION[$valSiteManage.'core_session_language']=="Thai"){ ?>
	<script language="JavaScript" type="text/javascript" src="../js/datepickerThai.js"></script>
	<?php }else{ ?>
	<script language="JavaScript" type="text/javascript" src="../js/datepickerEng.js"></script>
	<?php } ?>

	<?php include("../lib/disconnect.php");?>

</body>

</html>