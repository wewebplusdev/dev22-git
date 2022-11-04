<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");

$valClassNav = 2;
$valNav1 = $langTxt["nav:home2"];
$valLinkNav1 = "../core/index.php";


$sql = "SELECT  ";
$sql .= "   " . $mod_tb_root_group . "_id, " . $mod_tb_root_group . "_credate ,
      " . $mod_tb_root_group . "_crebyid, " . $mod_tb_root_group . "_status  ";

if ($_REQUEST['inputLt'] == "Thai") {
	$sql .= "  ,    " . $mod_tb_root_group . "_subject  ,    " . $mod_tb_root_group . "_title  ";
} else if ($_REQUEST['inputLt'] == "Eng") {
	$sql .= "  ," . $mod_tb_root_group . "_subjecten  ,    " . $mod_tb_root_group . "_titleen 	  ";
} else {
	$sql .= "  ," . $mod_tb_root_group . "_subjectcn  ,    " . $mod_tb_root_group . "_titlecn 	  ";
}
// $sql .= " ,".$mod_tb_root_group."_pic ";
$sql .= " , " . $mod_tb_root_group . "_pic , " . $mod_tb_root_group . "_ratio, " . $mod_tb_root_group . "_factor
			FROM " . $mod_tb_root_group . " WHERE " . $mod_tb_root_group . "_masterkey='" . $_POST["masterkey"] . "' AND  " . $mod_tb_root_group . "_id 	='" . $_POST["valEditID"] . "'";
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
$valid = $Row[0];
$valcredate = DateFormat($Row[1]);
$valcreby = $Row[2];
$valstatus = $Row[3];
$valSubject = rechangeQuot($Row[4]);
$valTitle = rechangeQuot($Row[5]);
$valPicName = $Row[6];
$valPic = $mod_path_pictures . "/" . $Row[6];
$valRatio = $Row[7];
$valFactor = $Row[8];
$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_POST["menukeyid"]);


// setiing page
$display = "style='display:none;'";
if ($_REQUEST['masterkey'] == 'news') {
	$display = "";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow">
	<meta name="googlebot" content="noindex, nofollow">
	<link href="../css/theme.css" rel="stylesheet" />

	<title><?php echo $core_name_title ?></title>
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


				if (isBlank(inputLength)) {
					inputLength.focus();
					jQuery("#inputLength").addClass("formInputContantTbAlertY");
					return false;
				} else {
					jQuery("#inputLength").removeClass("formInputContantTbAlertY");
				}

				if (isBlank(inputFactor)) {
					inputFactor.focus();
					jQuery("#inputFactor").addClass("formInputContantTbAlertY");
					return false;
				} else {
					jQuery("#inputFactor").removeClass("formInputContantTbAlertY");
				}
			}

			updateContactNew('updateGroup.php');

		}


		function loadCheckUser() {
			with(document.myForm) {
				var inputValuename = document.myForm.inputUserName.value;
			}
			if (inputValuename != '') {
				checkUsermember(inputValuename);
			}
		}



		jQuery(document).ready(function() {

			jQuery('#myForm').keypress(function(e) {
				/* Start  Enter Check CKeditor */

				if (e.which == 13) {
					executeSubmit();
					return false;
				}
				/* End  Enter Check CKeditor */
			});
		});
	</script>
</head>

<body>
	<form action="?" method="get" name="myForm" id="myForm">
		<input name="execute" type="hidden" id="execute" value="update" />
		<input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
		<input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
		<input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
		<input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow'] ?>" />
		<input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize'] ?>" />
		<input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby'] ?>" />
		<input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
		<input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID'] ?>" />
		<input name="inputLt" type="hidden" id="inputLt" value="<?php echo $_REQUEST['inputLt'] ?>" />
		<div class="divRightNav">
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a> <img src="../img/btn/navblack.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('group.php')" target="_self"><?php echo $langMod["meu:group"] ?></a> <img src="../img/btn/navblack.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleeditg"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"]) ?>)<?php } ?></span></td>
					<td class="divRightNavTb" align="right">



					</td>
				</tr>
			</table>
		</div>
		<div class="divRightHead">
			<table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
				<tr>
					<td height="77" align="left"><span class="fontHeadRight"><?php echo $langMod["txt:titleeditg"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"]) ?>)<?php } ?></span></td>
					<td align="left">
						<table border="0" cellspacing="0" cellpadding="0" align="right">
							<tr>
								<td align="right">
									<?php if ($valPermission == "RW") { ?>
										<div class="btnSave" title="<?php echo $langTxt["btn:save"] ?>" onclick="executeSubmit();"></div>
									<?php } ?>
									<div class="btnBack" title="<?php echo $langTxt["btn:back"] ?>" onclick="btnBackPage('group.php')"></div>
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
						<span class="formFontSubjectTxt"><?php echo $langMod["txt:subjectg"] ?></span><br />
						<span class="formFontTileTxt"><?php echo $langMod["txt:subjectgDe"] ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="7" align="right" valign="top" height="15"></td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:subjectg"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputSubject" id="inputSubject" type="text" class="formInputContantTb" value="<?php echo $valSubject ?>" /></td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:factorrange"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
						<input name="inputLength" id="inputLength" type="number" class="formInputContantTbShort" value="<?php echo $valRatio; ?>" />
						<!-- <input name="inputLength" id="inputLength" type="number" class="formInputContantTbShort" /> -->
						: 1
					</td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:factor"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputFactor" id="inputFactor" type="number" class="formInputContantTbShort" value="<?php echo $valFactor; ?>" /></td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:noteg"] ?></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
						<textarea name="inputComment" id="inputComment" cols="20" rows="5" class="formTextareaContantTb"><?php echo $valTitle ?></textarea>
					</td>
				</tr>
			</table>
			<br />
			<!-- <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                                <tr >
                                    <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:groupType"] ?></span><br/>
                                        <span class="formFontTileTxt"><?php echo  $langMod["txt:groupTypeDe"] ?></span>    </td>
                                </tr>
                                <tr ><td colspan="7" align="right"  valign="top"   height="15" ></td></tr>
                                <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo  $langMod["tit:groupType"] ?></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >


                                        <label>
                                            <div class="formDivRadioL"><input name="inputType" id="inputType" value="1" class="formRadioContantTb" <?php if ($valType == 1) { ?> checked="checked" <?php } ?>   type="radio" onclick="jQuery('#boxInputlink').hide();jQuery('#boxInputTarget').hide();"/></div>
                                            <div class="formDivRadioR"><?php echo  $modGroupType[1]; ?></div>
                                        </label>

                                        <label>
                                            <div class="formDivRadioL"><input name="inputType" id="inputType" value="2" class="formRadioContantTb" <?php if ($valType == 2) { ?> checked="checked" <?php } ?>  type="radio" onclick="jQuery('#boxInputlink').show();jQuery('#boxInputTarget').show();"/></div>
                                            <div class="formDivRadioR"><?php echo  $modGroupType[2]; ?></div>
                                        </label>
                                    </td>
                                </tr>

                                <tr id="boxInputlink"  <?php if ($valType == 1) { ?> style="display:none;" <?php } ?>>
                                        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >ชื่อ URL<span class="fontContantAlert">*</span></td>
                                        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><textarea name="inputurl" id="inputurl" cols="45" rows="5" class="formTextareaContantTb"><?php echo $valUrl ?></textarea><br />
                                    <span class="formFontNoteTxt"><?php echo $langMod["edit:linknote"] ?></span></td>
                                    </tr>

                                <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >การแสดงผล</td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >


                                        <label>
                                            <div class="formDivRadioL"><input name="inputTarget" id="inputTarget" value="1" class="formRadioContantTb" <?php if ($valTarget == 1) { ?> checked="checked" <?php } ?>   type="radio" /></div>
                                            <div class="formDivRadioR"><?php echo  $modTxtTarget[1]; ?></div>
                                        </label>

                                        <label>
                                            <div class="formDivRadioL"><input name="inputTarget" id="inputTarget" value="2" class="formRadioContantTb" <?php if ($valTarget == 2) { ?> checked="checked" <?php } ?>  type="radio" /></div>
                                            <div class="formDivRadioR"><?php echo  $modTxtTarget[2]; ?></div>
                                        </label>
                                    </td>
                                </tr>
                            </table>
         <br /> -->
			<table <?php echo $display; ?> width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
				<tr>
					<td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
						<span class="formFontSubjectTxt"><?php echo $langMod["txt:pic"] ?></span><br />
						<span class="formFontTileTxt"><?php echo $langMod["txt:picDe"] ?></span>
					</td>
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

						<span class="formFontNoteTxt"><?php echo $langMod["inp:noteG"] ?></span>
						<div class="clearAll"></div>
						<div id="boxPicNew" class="formFontTileTxt">
							<?php if (is_file($valPic)) { ?>
								<img src="<?php echo $valPic ?>" style="float:left;border:#c8c7cc solid 1px;max-width:600px;" />
								<div style="width:22px; height:22px;float:left;z-index:1; margin-left:-22px;cursor:pointer;" onclick="delPicUpload('deletePic.php')" title="Delete file"><img src="../img/btn/delete.png" width="22" height="22" border="0" /></div>
								<input type="hidden" name="picname" id="picname" value="<?php echo $valPicName ?>" />
							<?php } ?>
						</div>
					</td>
				</tr>



			</table>
			<!-- <br /> -->
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
	<script type="text/javascript">
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
				url: 'loadUpdatePicG.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&delpicname=' + valuepicname + '&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
				secureuri: false,
				fileElementId: 'fileToUpload',
				dataType: 'json',
				success: function(data, status) {
					if (typeof(data.error) != 'undefined') {

						if (data.error != '') {
							alert(data.error);
							setTimeout(jQuery.unblockUI, 200);
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

		/*################################# Upload Pic #######################*/
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
				url: 'loadUpdatePicG2.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&delpicname=' + valuepicname + '&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
				secureuri: false,
				fileElementId: 'fileToUpload2',
				dataType: 'json',
				success: function(data, status) {
					if (typeof(data.error) != 'undefined') {

						if (data.error != '') {
							alert(data.error);
							setTimeout(jQuery.unblockUI, 200);
						} else {
							jQuery("#boxPic2").show();
							jQuery("#boxPic2").html(data.msg);
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
	</script>

	<?php include("../lib/disconnect.php"); ?>

</body>

</html>