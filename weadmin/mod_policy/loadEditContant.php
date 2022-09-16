<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("config.php");
include("incModLang.php");

$valClassNav = 2;
$valNav1 = $langTxt["nav:home2"];
$valLinkNav1 = "../core/index.php";


$sql = "SELECT   ";
$sql .= "   " . $mod_tb_root . "_id , " . $mod_tb_root . "_credate , " . $mod_tb_root . "_crebyid, " . $mod_tb_root . "_status,    " . $mod_tb_root . "_sdate  	 	 ,    " . $mod_tb_root . "_edate , " . $mod_tb_root . "_type , " . $mod_tb_root . "_filevdo , " . $mod_tb_root . "_url  ,  " . $mod_tb_root . "_gid    ";

if ($_REQUEST['inputLt'] == "Thai") {
	$sql .= " ,    " . $mod_tb_root . "_pic, " . $mod_tb_root . "_subject  ,    " . $mod_tb_root . "_title , " . $mod_tb_root . "_htmlfilename   ,    " . $mod_tb_root . "_metatitle  	 	 ,    " . $mod_tb_root . "_description  	 	 ,    " . $mod_tb_root . "_keywords    ";
} elseif ($_REQUEST['inputLt'] == "Eng") {
	$sql .= " ,    " . $mod_tb_root . "_picen, " . $mod_tb_root . "_subjecten  ,    " . $mod_tb_root . "_titleen , " . $mod_tb_root . "_htmlfilenameen   ,    " . $mod_tb_root . "_metatitleen  	 	 ,    " . $mod_tb_root . "_descriptionen  	 	 ,    " . $mod_tb_root . "_keywordsen    ";
} else {
	$sql .= " ,    " . $mod_tb_root . "_picen, " . $mod_tb_root . "_subjectcn  ,    " . $mod_tb_root . "_titlecn, " . $mod_tb_root . "_htmlfilenamecn   ,    " . $mod_tb_root . "_metatitlecn  	 	 ,    " . $mod_tb_root . "_descriptioncn  	 	 ,    " . $mod_tb_root . "_keywordscn    ";
}

$sql .= " , " . $mod_tb_root . "_picshow, " . $mod_tb_root . "_typec , " . $mod_tb_root . "_urlc, " . $mod_tb_root . "_target";

// if ($_REQUEST['inputLt'] == "Thai") {
// 	$sql .= " ," . $mod_tb_root . "_htmlfilename2	," . $mod_tb_root . "_credit";
// } elseif ($_REQUEST['inputLt'] == "Eng") {
// 	$sql .= " ," . $mod_tb_root . "_htmlfilename2en	," . $mod_tb_root . "_crediten";
// } else {
// 	$sql .= " ," . $mod_tb_root . "_htmlfilename2cn	," . $mod_tb_root . "_creditcn	";
// }

$sql .= " , " . $mod_tb_root . "_langth, " . $mod_tb_root . "_langen , " . $mod_tb_root . "_langcn ";
$sql .= " 
			FROM " . $mod_tb_root . " 
			WHERE " . $mod_tb_root . "_masterkey='" . $_POST["masterkey"] . "' AND  " . $mod_tb_root . "_id 	='" . $_POST["valEditID"] . "'";
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
// print_pre($Row);
$valid = $Row[0];
$valcredate = DateFormatInsertRe($Row[1]);
$valcreby = $Row[2];
$valstatus = $Row[3];
if ($Row[4] != "0000-00-00 00:00:00") {
	$valSdate = DateFormatInsertRe($Row[4]);
}
if ($Row[5] != "0000-00-00 00:00:00") {
	$valEdate = DateFormatInsertRe($Row[5]);
}

$valType = $Row[6];
$valFilevdo = $Row[7];
$valPathvdo = $mod_path_vdo . "/" . $Row[7];
$valUrl = $Row[8];
$valGid = $Row[9];
$valPicName = $Row[10];
$valPic = $mod_path_pictures . "/" . $Row[10];

$valSubject = rechangeQuot($Row[11]);
$valTitle = $Row[12];
$valhtml = $mod_path_html . "/" . $Row[13];
$valhtmlname = $Row[13];
$valMetatitle = rechangeQuot($Row[14]);
$valDescription = rechangeQuot($Row[15]);
$valKeywords = rechangeQuot($Row[16]);
$valPicShow = $Row[17];
$valTypeC = $Row[18];
$valUrlC = $Row[19];
$valTarget = $Row[20];
$valPicName2 = $Row[21];
$valPic2 = $mod_path_pictures . "/" . $Row[21];
$valTitle2 = $Row[22];

$valhtml2 = $mod_path_html . "/" . $Row[23];
$valhtmlname2 = $Row[23];
$valCredit = rechangeQuot($Row[24]);
$valUrlfriendly = rechangeQuot($Row[25]);
$valLang[0] = $Row[21];
$valLang[1] = $Row[22];
$valLang[2] = $Row[23];
$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_POST["menukeyid"]);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow">
	<meta name="googlebot" content="noindex, nofollow">
	<link href="../css/theme.css" rel="stylesheet" />
	<link href="js/uploadfile.css" rel="stylesheet" />

	<title><?php echo $core_name_title ?></title>
	<link href="../js/select2/css/select2.css" rel="stylesheet" />
	<script language="JavaScript" type="text/javascript" src="../js/select2/js/select2.js"></script>

	<script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
	<script language="JavaScript" type="text/javascript">
		function executeSubmit() {
			with(document.myForm) {

				var checkbokSetLang = $('input.checkbokSetLang:checkbox:checked').length;
				if (checkbokSetLang == 0) {
					alert('<?php echo $langMod["set:lang:web:alert"]; ?>');
					return false;
				}

				if (isBlank(inputSubject)) {
					inputSubject.focus();
					jQuery("#inputSubject").addClass("formInputContantTbAlertY");
					return false;
				} else {
					jQuery("#inputSubject").removeClass("formInputContantTbAlertY");
				}

				if (isBlank(inputDescription)) {
					inputDescription.focus();
					jQuery("#inputDescription").addClass("formInputContantTbAlertY");
					return false;
				} else {
					jQuery("#inputDescription").removeClass("formInputContantTbAlertY");
				}

				var alleditDetail = CKEDITOR.instances.editDetail.getData();
				if (alleditDetail == "") {
					jQuery("#inputEditHTML").addClass("formInputContantTbAlertY");
					window.location.hash = '#inputEditHTML';
					return false;
				} else {
					jQuery("#inputEditHTML").removeClass("formInputContantTbAlertY");
				}
				jQuery('#inputHtml').val(alleditDetail);
			}

			updateContactNew('updateContant.php');

		}

		jQuery(document).ready(function() {

			jQuery('#myForm').keypress(function(e) {
				/* Start  Enter Check CKeditor */
				var focusManager = new CKEDITOR.focusManager(editDetail);
				var checkFocus = CKEDITOR.instances.editDetail.focusManager.hasFocus;
				var checkFocusTitle = jQuery("#inputDescription").is(":focus");

				if (e.which == 13) {
					if (!checkFocusTitle) {
						if (!checkFocus) {
							executeSubmit();
							return false;
						}
					}
				}
				/* End  Enter Check CKeditor */
			});
		});
	</script>
</head>

<body>
	<form action="?" method="get" name="myForm" id="myForm" enctype="multipart/form-data">
		<input name="execute" type="hidden" id="execute" value="update" />
		<input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
		<input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
		<input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
		<input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow'] ?>" />
		<input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize'] ?>" />
		<input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby'] ?>" />
		<input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
		<input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID'] ?>" />
		<input name="valDelFile" type="hidden" id="valDelFile" value="" />
		<input name="valDelAlbum" type="hidden" id="valDelAlbum" value="" />
		<input name="inputHtml" type="hidden" id="inputHtml" value="" />
		<input name="inputHtmlDel" type="hidden" id="inputHtmlDel" value="<?php echo $valhtmlname ?>" />
		<input name="inputLt" type="hidden" id="inputLt" value="<?php echo $_REQUEST['inputLt'] ?>" />
		<div class="divRightNav">
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a> <img src="../img/btn/navblack.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo $langMod["meu:contant"] ?></a> <img src="../img/btn/navblack.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleedit"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)<?php } ?></span></td>
					<td class="divRightNavTb" align="right">



					</td>
				</tr>
			</table>
		</div>
		<div class="divRightHead">
			<table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
				<tr>
					<td height="77" align="left"><span class="fontHeadRight"><?php echo $langMod["txt:titleedit"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)<?php } ?></span></td>
					<td align="left">
						<table border="0" cellspacing="0" cellpadding="0" align="right">
							<tr>
								<td align="right">
									<?php if ($valPermission == "RW") { ?>
										<div class="btnSave" title="<?php echo $langTxt["btn:save"] ?>" onclick="executeSubmit();"></div>
									<?php } ?>
									<div class="btnBack" title="<?php echo $langTxt["btn:back"] ?>" onclick="btnBackPage('index.php')"></div>
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
						<span class="formFontSubjectTxt"><?php echo $langMod["txt:subject"] ?></span><br />
						<span class="formFontTileTxt"><?php echo $langMod["txt:subjectDe"] ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="7" align="right" valign="top" height="15"></td>
				</tr>

				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["set:lang:web"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
						<?php
						foreach ($modTxtSetLang as $key => $value) {
						?>
							<label>
								<div class="formDivRadioL"><input name="inputSetLang[<?php echo $key ?>]" id="inputSetLang-<?php echo $key ?>" value="1" type="checkbox" class="formRadioContantTb checkbokSetLang" <?php if ($valLang[$key] == 1) {
																																																																																																			echo 'checked';
																																																																																																		} ?> /></div>
								<div class="formDivRadioR"><?php echo $value ?></div>
							</label>
						<?php
						}
						?>
					</td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:subject"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputSubject" id="inputSubject" type="text" class="formInputContantTb" value="<?php echo $valSubject ?>" /></td>
				</tr>
				<tr>
					<td align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:title"] ?><span class="fontContantAlert">*</span></td>
					<td colspan="6" align="left" valign="top" class="formRightContantTb">
						<textarea name="inputDescription" id="inputDescription" cols="45" rows="5" class="formTextareaContantTb"><?php echo $valTitle ?></textarea>
					</td>
				</tr>

			</table>
			<br />
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ckabout">
				<tr>
					<td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
						<span class="formFontSubjectTxt"><?php echo $langMod["txt:title"] ?></span><br />
						<span class="formFontTileTxt"><?php echo $langMod["txt:titleDe"] ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="7" align="center" valign="top" class="formRightContantTbEditor">
						<div id="inputEditHTML">
							<textarea name="editDetail" id="editDetail">
      <?php
			if (is_file($valhtml)) {
				$fd = @fopen($valhtml, "r");
				$contents = @fread($fd, @filesize($valhtml));
				@fclose($fd);
				echo txtReplaceHTML($contents);
			}
			?>
      </textarea>
						</div>
					</td>
				</tr>
			</table>
			<br class="ckabout" />
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ckabout">
				<tr>
					<td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
						<span class="formFontSubjectTxt"><?php echo $langMod["txt:seo"] ?></span><br />
						<span class="formFontTileTxt"><?php echo $langMod["txt:seoDe"] ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="7" align="right" valign="top" height="15"></td>
				</tr>

				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:seotitle"] ?><span class="fontContantAlert"></span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputTagTitle" id="inputTagTitle" type="text" class="formInputContantTb" value="<?php echo $valMetatitle ?>" /><br />
						<span class="formFontNoteTxt"><?php echo $langMod["inp:seotitlenote"] ?></span>
					</td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:seodes"] ?><span class="fontContantAlert"></span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputTagDescription" id="inputTagDescription" type="text" class="formInputContantTb" value="<?php echo $valDescription ?>" /><br />
						<span class="formFontNoteTxt"><?php echo $langMod["inp:seodesnote"] ?></span>
					</td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:seokey"] ?><span class="fontContantAlert"></span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputTagKeywords" id="inputTagKeywords" type="text" class="formInputContantTb" value="<?php echo $valKeywords ?>" /><br />
						<span class="formFontNoteTxt"><?php echo $langMod["inp:seokeynote"] ?></span>
					</td>
				</tr>
			</table>
			<br />
			<!-- <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
    <tr >
    <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom">
    <span class="formFontSubjectTxt"><?php echo $langMod["txt:datec"] ?></span><br/>
    <span class="formFontTileTxt"><?php echo $langMod["txt:datecDe"] ?></span>    </td>
    </tr>
                            <tr ><td colspan="7" align="right"  valign="top"   height="15" ></td></tr>

  <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langTxt["us:credate"] ?><span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><input name="cdateInput" id="cdateInput" type="text"  class="formInputContantTbShot" value="<?php echo $valcredate ?>"/></td>
  </tr>
  </table>
         <br /> -->
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
				<tr>
					<td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
						<span class="formFontSubjectTxt"><?php echo $langMod["txt:date"] ?></span><br />
						<span class="formFontTileTxt"><?php echo $langMod["txt:dateDe"] ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="7" align="right" valign="top" height="15"></td>
				</tr>

				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:sdate"] ?><span class="fontContantAlert"></span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="sdateInput" id="sdateInput" type="text" class="formInputContantTbShot" value="<?php echo $valSdate ?>" /></td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:edate"] ?><span class="fontContantAlert"></span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="edateInput" id="edateInput" type="text" class="formInputContantTbShot" value="<?php echo $valEdate ?>" /><br />
						<span class="formFontNoteTxt"><?php echo $langMod["inp:notedate"] ?></span>
					</td>
				</tr>




			</table>
			<br />
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">

				<tr>
					<td colspan="7" align="right" valign="top" height="20"></td>
				</tr>
				<tr>
					<td colspan="7" align="right" valign="middle" class="formEndContantTb"><a href="#defTop" title="<?php echo $langTxt["btn:gototop"] ?>"><?php echo $langTxt["btn:gototop"] ?> <img src="../img/btn/top.png" align="absmiddle" /></a></td>
				</tr>
			</table>
		</div>
	</form>
	<script type="text/javascript" src="../js/ajaxfileupload.js"></script>
	<script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
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
				url: 'loadUpdatePic.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&delpicname=' + valuepicname + '&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
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

		function ajaxFileUpload2() {
			var valuepicname = jQuery("input#picname2").val();

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
				url: 'loadUpdatePic2.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&delpicname=' + valuepicname + '&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
				secureuri: false,
				fileElementId: 'fileToUpload2',
				dataType: 'json',
				success: function(data, status) {
					if (typeof(data.error) != 'undefined') {

						if (data.error != '') {
							alert(data.error);

						} else {
							jQuery("#boxPicNew2").show();
							jQuery("#boxPicNew2").html(data.msg);
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
		/*############################# Upload Album ##################################

		function ajaxFileUploadAlbum(){
			 jQuery.blockUI({
					message: jQuery('#tallContent'),
					css: { border: 'none',padding: '35px',backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'
					}
				});


			jQuery.ajaxFileUpload({
					url:'loadUpdateAlbum.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
					secureuri:true,
					fileElementId:'inputAlbumUpload',
					dataType: 'json',
					success: function (data, status){
						if(typeof(data.error) != 'undefined'){

							if(data.error != ''){
								alert(data.error);
							}else{
								jQuery("#boxAlbumNew").show();
								jQuery("#boxAlbumNew").html(data.msg);
								setTimeout(jQuery.unblockUI, 200);
							}

						}
					},
					error: function (data, status, e){
						alert(e);
					}
				}
			)

			return false;

		}*/

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
				url: 'loadUpdateVideo.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&delvdoname=' + valuevdoname + '&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
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
				url: 'loadUpdateFile.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&nametodoc=' + valuefilename + '&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
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
		jQuery(function() {
			onLoadFCK();
			// onLoadFCK2();
		});
	</script>

	<script type="text/javascript" src="js/jquery.uploadfile.js"></script>
	<script type="text/javascript" language="javascript">
		jQuery(document).ready(function() {
			var vajSelectFile = 0;
			var valUploadFile = 0;
			var settings = {
				url: "loadUpdateAlbum.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&menuid=<?php echo $_REQUEST['menukeyid'] ?>",
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
						loadShowPhotoUpdate('loadShowAlbumNewUpdate.php', 'boxAlbumNew');
						//	alert('goooo');
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

		$(document).ready(function() {
			$(".selectProject").select2();
		});
	</script>


	<?php if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") { ?>
		<script language="JavaScript" type="text/javascript" src="../js/datepickerThai.js"></script>
	<?php } else { ?>
		<script language="JavaScript" type="text/javascript" src="../js/datepickerEng.js"></script>
	<?php } ?>
	<?php include("../lib/disconnect.php"); ?>

</body>

</html>