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
if ($_REQUEST['inputLt'] == "Thai") {
	$sql .= "  " . $mod_tb_root . "_id , " . $mod_tb_root . "_htmlfilename, " . $mod_tb_root . "_lastdate, " . $mod_tb_root . "_creby, " . $mod_tb_root . "_status ,    " . $mod_tb_root . "_subject  	,    " . $mod_tb_root . "_sdate,    " . $mod_tb_root . "_edate,    " . $mod_tb_root . "_title,    " . $mod_tb_root . "_pic , " . $mod_tb_root . "_type , " . $mod_tb_root . "_filevdo , " . $mod_tb_root . "_url  ,    " . $mod_tb_root . "_metatitle  	 	 ,    " . $mod_tb_root . "_description  	 	 ,    " . $mod_tb_root . "_keywords , " . $mod_tb_root . "_address      ";
} elseif ($_REQUEST['inputLt'] == "Eng") {
	$sql .= "  " . $mod_tb_root . "_id , " . $mod_tb_root . "_htmlfilenameen, " . $mod_tb_root . "_lastdate, " . $mod_tb_root . "_creby, " . $mod_tb_root . "_status  ,    " . $mod_tb_root . "_subjecten  	,    " . $mod_tb_root . "_sdate,    " . $mod_tb_root . "_edate,    " . $mod_tb_root . "_titleen,    " . $mod_tb_root . "_pic , " . $mod_tb_root . "_type , " . $mod_tb_root . "_filevdo , " . $mod_tb_root . "_urlen ,    " . $mod_tb_root . "_metatitleen  	 	 ,    " . $mod_tb_root . "_descriptionen  	 	 ,    " . $mod_tb_root . "_keywordsen , " . $mod_tb_root . "_addressen   ";
} else {
	$sql .= "  " . $mod_tb_root . "_id , " . $mod_tb_root . "_htmlfilenamecn, " . $mod_tb_root . "_lastdate, " . $mod_tb_root . "_creby, " . $mod_tb_root . "_status  ,    " . $mod_tb_root . "_subjectcn  	,    " . $mod_tb_root . "_sdate,    " . $mod_tb_root . "_edate,    " . $mod_tb_root . "_titlecn,    " . $mod_tb_root . "_pic , " . $mod_tb_root . "_type , " . $mod_tb_root . "_filevdo , " . $mod_tb_root . "_urlcn ,    " . $mod_tb_root . "_metatitlecn  	 	 ,    " . $mod_tb_root . "_descriptioncn  	 	 ,    " . $mod_tb_root . "_keywordscn , " . $mod_tb_root . "_addresscn   ";
}

$sql .= "  ," . $mod_tb_root . "_typeSal , " . $mod_tb_root . "_salaryFr, " . $mod_tb_root . "_salaryTo, " . $mod_tb_root . "_salaryOne, " . $mod_tb_root . "_quantity , " . $mod_tb_root . "_gid as gid ";
$sql .= "  , " . $mod_tb_root . "_langth, " . $mod_tb_root . "_langen , " . $mod_tb_root . "_langcn ";

$sql .= " 	FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_masterkey='" . $_POST["masterkey"] . "' AND  " . $mod_tb_root . "_id 	='" . $_POST["valEditID"] . "'";
// print_pre($sql);
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
$valid = $Row[0];
$valhtml = $mod_path_html . "/" . $Row[1];
$valhtmlname = $Row[1];
$valcredate = DateFormat($Row[2]);
$valcreby = $Row[3];
$valstatus = $Row[4];
$valSubject = $Row[5];
if ($Row[6] != "0000-00-00 00:00:00") {
	$valSdate = DateFormatInsertRe($Row[6]);
}
if ($Row[7] != "0000-00-00 00:00:00") {
	$valEdate = DateFormatInsertRe($Row[7]);
}
$valTitle = $Row[8];
$valPicName = $Row[9];
$valPic = $mod_path_pictures . "/" . $Row[9];
$valType = $Row[10];
$valFilevdo = $Row[11];
$valPathvdo = $mod_path_vdo . "/" . $Row[11];
$valUrl = $Row[12];
$valMetatitle = $Row[13];
$valDescription = $Row[14];
$valKeywords = $Row[15];

$valAddress = $Row[16];
$valTypeSal = $Row[17];
$valSalaryFr = $Row[18];
$valSalaryTo = $Row[19];
$valSalaryOne = $Row[20];
$valQuantity = $Row[21];

$valGid = $Row['gid'];

$valLang[0] = $Row[23];
$valLang[1] = $Row[24];
$valLang[2] = $Row[25];
$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_POST["menukeyid"]);

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

				// if(inputGroupID.value==0) {
				// 	inputGroupID.focus();
				// 	jQuery("#inputGroupID").addClass("formInputContantTbAlertY");
				// 	return false;
				// }else{
				// 	jQuery("#inputGroupID").removeClass("formInputContantTbAlertY");
				// }

				// if(isBlank(inputDescription)) {
				// 	inputDescription.focus();
				// 	jQuery("#inputDescription").addClass("formInputContantTbAlertY"); 
				// 	return false; 
				// }else{ 
				// 	jQuery("#inputDescription").removeClass("formInputContantTbAlertY"); 
				// }

				var valTypesal = jQuery("input[name='inputTypeSal']:checked").val();

				if (valTypesal == 2) {

					if (isBlank(inputSalaryOne)) {
						inputSalaryOne.focus();
						jQuery("#inputSalaryOne").addClass("formInputContantTbAlertY");
						return false;
					} else {
						jQuery("#inputSalaryOne").removeClass("formInputContantTbAlertY");
					}

					if (!isNumber(inputSalaryOne)) {
						inputSalaryOne.focus();
						jQuery("#inputSalaryOne").addClass("formInputContantTbAlertY");
						return false;
					} else {
						jQuery("#inputSalaryOne").removeClass("formInputContantTbAlertY");
					}


				} else if (valTypesal == 3) {

					if (isBlank(inputSalaryFrom)) {
						inputSalaryFrom.focus();
						jQuery("#inputSalaryFrom").addClass("formInputContantTbAlertY");
						return false;
					} else {
						jQuery("#inputSalaryFrom").removeClass("formInputContantTbAlertY");
					}

					if (!isNumber(inputSalaryFrom)) {
						inputSalaryFrom.focus();
						jQuery("#inputSalaryFrom").addClass("formInputContantTbAlertY");
						return false;
					} else {
						jQuery("#inputSalaryFrom").removeClass("formInputContantTbAlertY");
					}


					if (isBlank(inputSalaryTo)) {
						inputSalaryTo.focus();
						jQuery("#inputSalaryTo").addClass("formInputContantTbAlertY");
						return false;
					} else {
						jQuery("#inputSalaryTo").removeClass("formInputContantTbAlertY");
					}

					if (!isNumber(inputSalaryTo)) {
						inputSalaryTo.focus();
						jQuery("#inputSalaryTo").addClass("formInputContantTbAlertY");
						return false;
					} else {
						jQuery("#inputSalaryTo").removeClass("formInputContantTbAlertY");
					}

					var newSalaryTo = (inputSalaryTo.value) * 1;
					var newSalaryFrom = (inputSalaryFrom.value) * 1;

					if (newSalaryFrom >= newSalaryTo) {
						inputSalaryTo.focus();
						jQuery("#inputSalaryTo").addClass("formInputContantTbAlertY");
						jQuery("#inputSalaryFrom").addClass("formInputContantTbAlertY");
						return false;
					} else {
						jQuery("#inputSalaryTo").removeClass("formInputContantTbAlertY");
						jQuery("#inputSalaryFrom").removeClass("formInputContantTbAlertY");
					}


				}

				if (isBlank(inputQuantity)) {
					inputQuantity.focus();
					jQuery("#inputQuantity").addClass("formInputContantTbAlertY");
					return false;
				} else {
					jQuery("#inputQuantity").removeClass("formInputContantTbAlertY");
				}

				if (!isNumber(inputQuantity)) {
					inputQuantity.focus();
					jQuery("#inputQuantity").addClass("formInputContantTbAlertY");
					return false;
				} else {
					jQuery("#inputQuantity").removeClass("formInputContantTbAlertY");
				}

				if (isBlank(inputAddress)) {
					inputAddress.focus();
					jQuery("#inputAddress").addClass("formInputContantTbAlertY");
					return false;
				} else {
					jQuery("#inputAddress").removeClass("formInputContantTbAlertY");
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
				var focusManager = new CKEDITOR.focusManager(editDetail);
				var checkFocus = CKEDITOR.instances.editDetail.focusManager.hasFocus;

				if (e.which == 13) {
					//e.preventDefault();
					if (checkFocus) {} else {
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
					<td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo getNameMenu($_REQUEST["menukeyid"]) ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleedit"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)<?php } ?></span></td>
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
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder">
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
				<!-- <tr>
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["tit:selectgn"] ?><span class="fontContantAlert">*</span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
			<select name="inputGroupID"  id="inputGroupID"class="formSelectContantTb">
					<option value="0"><?php echo $langMod["tit:selectg"] ?></option>
					<?php
					$sql_group = "SELECT ";
					if ($_REQUEST['inputLt'] == "Thai") {
						$sql_group .= "  " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subject";
					} else if ($_REQUEST['inputLt'] == "Eng") {
						$sql_group .= " " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subjecten ";
					} else {
						$sql_group .= " " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subjectcn ";
					}

					$sql_group .= "  FROM " . $mod_tb_root_group . " WHERE  " . $mod_tb_root_group . "_masterkey ='" . $_REQUEST['masterkey'] . "'   ORDER BY " . $mod_tb_root_group . "_order DESC ";
					$query_group = wewebQueryDB($coreLanguageSQL, $sql_group);
					while ($row_group = wewebFetchArrayDB($coreLanguageSQL, $query_group)) {
						$row_groupid = $row_group[0];
						$row_groupname = $row_group[1];
					?>
						<option value="<?php echo $row_groupid ?>" <?php if ($valGid == $row_groupid) { ?> selected="selected" <?php  } ?>><?php echo $row_groupname ?></option>
					<?php } ?>
			</select>
		</td>
  </tr> -->
				<tr>
					<td align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:title"] ?>
						<!-- <span class="fontContantAlert">*</span> -->
					</td>
					<td colspan="6" align="left" valign="top" class="formRightContantTb">
						<textarea name="inputDescription" id="inputDescription" cols="45" rows="5" class="formTextareaContantTb"><?php echo $valTitle ?></textarea>
					</td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:salary"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
						<label>
							<div class="formDivRadioL"><input name="inputTypeSal" id="inputTypeSal" value="1" type="radio" class="formRadioContantTb" <?php if ($valTypeSal == 1) { ?>checked="checked" <?php } ?> onclick="jQuery('#salInput1').hide();jQuery('#salInput2').hide();" /></div>
							<div class="formDivRadioR"><?php echo $modTxtSalary[1] ?></div>
						</label>

						<label>
							<div class="formDivRadioL"><input name="inputTypeSal" id="inputTypeSal" value="2" type="radio" class="formRadioContantTb" <?php if ($valTypeSal == 2) { ?>checked="checked" <?php } ?> onclick="jQuery('#salInput2').hide();jQuery('#salInput1').show();" /></div>
							<div class="formDivRadioR"><?php echo $modTxtSalary[2] ?></div>
						</label>

						<label>
							<div class="formDivRadioL"><input name="inputTypeSal" id="inputTypeSal" value="3" type="radio" class="formRadioContantTb" <?php if ($valTypeSal == 3) { ?>checked="checked" <?php } ?> onclick="jQuery('#salInput1').hide();jQuery('#salInput2').show();" /></div>
							<div class="formDivRadioR"><?php echo $modTxtSalary[3] ?></div>
						</label>

						<label>
							<div class="formDivRadioL"><input name="inputTypeSal" id="inputTypeSal" value="4" type="radio" class="formRadioContantTb" <?php if ($valTypeSal == 4) { ?>checked="checked" <?php } ?> onclick="jQuery('#salInput1').hide();jQuery('#salInput2').hide();" /></div>
							<div class="formDivRadioR"><?php echo $modTxtSalary[4] ?></div>
						</label>
					</td>
				</tr>
				<tr id="salInput1" <?php if ($valTypeSal != 2) { ?>style="display:none;" <?php } ?>>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:salaryinfo"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputSalaryOne" id="inputSalaryOne" type="text" class="formInputContantTbShot" value="<?php echo $valSalaryOne ?>" OnKeyPress="return chkvalue_char(this)" maxlength="" /><br />
						<span class="formFontNoteTxt"><?php echo $langMod["inp:pricesale"] ?></span>
					</td>
				</tr>
				<tr id="salInput2" <?php if ($valTypeSal != 3) { ?>style="display:none;" <?php } ?>>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:salaryinfo"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
						<div style="float:left;width:18%;min-width:150px;"><input name="inputSalaryFrom" id="inputSalaryFrom" type="text" class="formInputContantTbShot2" value="<?php echo $valSalaryFr ?>" OnKeyPress="return chkdot(this)" maxlength="" /></div>
						<div style="width:20px; padding-top:6px; float:left; text-align:center;">-</div>
						<div style="float:left;width:18%;min-width:150px;"><input name="inputSalaryTo" id="inputSalaryTo" type="text" class="formInputContantTbShot2" value="<?php echo $valSalaryTo ?>" OnKeyPress="return chkdot(this)" maxlength="" /></div>
						<div style="clear:both;"></div>

						<span class="formFontNoteTxt"><?php echo $langMod["inp:pricesale"] ?></span>
					</td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:qua"] ?><span class="fontContantAlert">*</span></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputQuantity" id="inputQuantity" type="text" class="formInputContantTbShot" value="<?php echo $valQuantity ?>" OnKeyPress="return chkNumber(this)" maxlength="" /><br />
						<span class="formFontNoteTxt"><?php echo $langMod["inp:pricesale"] ?></span>
					</td>
				</tr>
				<tr>
					<td align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:work"] ?><span class="fontContantAlert">*</span></td>
					<td colspan="6" align="left" valign="top" class="formRightContantTb">
						<textarea name="inputAddress" id="inputAddress" cols="45" rows="5" class="formTextareaContantTb"><?php echo $valAddress ?></textarea>
					</td>
				</tr>
			</table>
			<br>
			<!-- <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder">
				<tr>
					<td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
						<span class="formFontSubjectTxt"><?php echo $langMod["txt:pic"] ?></span><br />
						<span class="formFontTileTxt"><?php echo $langMod["txt:picDe"] ?></span>
					</td>
				</tr>
				<tr>
					<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:album"] ?></td>
					<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
						<div class="file-input-wrapper">
							<button class="btn-file-input"><?php echo $langTxt["us:inputpicselect"] ?></button>
							<input type="file" name="fileToUpload" id="fileToUpload" onchange="ajaxFileUpload();" />
						</div>

						<span class="formFontNoteTxt"><?php echo $langMod["inp:notepic"] ?></span>
						<div class="clearAll"></div>
						<div id="boxPicNew" class="formFontTileTxt">
							<?php if (is_file($valPic)) { ?>
								<img src="<?php echo $valPic ?>" style="float:left;border:#c8c7cc solid 1px;" />
								<div style="width:22px; height:22px;float:left;z-index:1; margin-left:-22px;cursor:pointer;" onclick="delPicUpload('deletePic.php')" title="Delete file"><img src="../img/btn/delete.png" width="22" height="22" border="0" /></div>
								<input type="hidden" name="picname" id="picname" value="<?php echo $valPicName ?>" />
							<?php } ?>
						</div>
					</td>
				</tr>
			</table>
			<br /> -->
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder">
				<tr>
					<td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
						<span class="formFontSubjectTxt"><?php echo $langMod["txt:title"] ?></span><br />
						<span class="formFontTileTxt"><?php echo $langMod["txt:titleDe"] ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="7" align="center" valign="top" class="formRightContantTb">
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
			<br>
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ckabout">
					<tr>
						<td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
							<span class="formFontSubjectTxt"><?php echo $langMod["txt:video"] ?></span><br />
							<span class="formFontTileTxt"><?php echo $langMod["txt:videoDe"] ?></span>
						</td>
					</tr>
					<tr>
						<td colspan="7" align="right" valign="top" height="15"></td>
					</tr>

					<tr style="display:none;">
						<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:typevdo"] ?></td>
						<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
							<label>
								<div class="formDivRadioL"><input name="inputType" id="inputType" value="url" type="radio" class="formRadioContantTb" onclick="jQuery('#boxInputfile').hide();jQuery('#boxInputlink').show();" <?php if ($valType == "url") { ?> checked="checked" <?php } ?> /></div>
								<div class="formDivRadioR"><?php echo $langMod["tit:linkvdo"] ?></div>
							</label>

							<label>
								<div class="formDivRadioL"><input name="inputType" id="inputType" value="file" type="radio" class="formRadioContantTb" onclick="jQuery('#boxInputlink').hide();jQuery('#boxInputfile').show();" <?php if ($valType == "file") { ?> checked="checked" <?php } ?> /></div>
								<div class="formDivRadioR"><?php echo $langMod["tit:uploadvdo"] ?></div>
							</label>
							</label>
						</td>
					</tr>
					<tr id="boxInputlink" <?php if ($valType == "file") { ?> style="display:none;" <?php } ?>>
						<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:linkvdo"] ?></td>
						<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><textarea name="inputurl" id="inputurl" cols="45" rows="5" class="formTextareaContantTb"><?php echo $valUrl ?></textarea><br />
							<span class="formFontNoteTxt"><?php echo $langMod["tit:linkvdonote"] ?></span>
						</td>
					</tr>
					<tr id="boxInputfile" <?php if ($valType == "url") { ?> style="display:none;" <?php } ?>>
						<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:uploadvdo"] ?></td>
						<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
							<div class="file-input-wrapper">
								<button class="btn-file-input"><?php echo $langTxt["us:inputpicselect"] ?></button>
								<input type="file" name="inputVideoUpload" id="inputVideoUpload" onchange="ajaxVideoUpload();" />
							</div>

							<span class="formFontNoteTxt"><?php echo $langMod["tit:uploadvdonote"] ?></span>
							<div class="clearAll"></div>
							<div id="boxVideoNew" class="formFontTileTxt">
								<?php if (is_file($valPathvdo)) {
									$linkRelativePath = $valPathvdo;
									$imageType = strstr($valFilevdo, '.');
								?>
									<a href="javascript:void(0)" onclick=" delVideoUpload('deleteVideo.php')"><img src="../img/btn/delete.png" align="absmiddle" title="Delete file" hspace="10" vspace="10" border="0" /></a>Video Upload | <?php echo $langMod["file:type"] ?>: <?php echo $imageType ?> | <?php echo $langMod["file:size"] ?>: <?php echo get_IconSize($linkRelativePath) ?>
									<input type="hidden" name="picname" id="picname" value="<?php echo $valFilevdo ?>" />
								<?php } ?>
							</div>
						</td>
					</tr>
				</table>
				<br class="ckabout" />
				<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ckabout">
					<tr>
						<td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
							<span class="formFontSubjectTxt"><?php echo $langMod["txt:attfile"] ?></span><br />
							<span class="formFontTileTxt"><?php echo $langMod["txt:attfileDe"] ?></span>
						</td>
					</tr>
					<tr>
						<td colspan="7" align="right" valign="top" height="15"></td>
					</tr>

					<tr>
						<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:chfile"] ?><span class="fontContantAlert"></span></td>
						<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputFileName" id="inputFileName" type="text" class="formInputContantTb" /></td>
					</tr>
					<tr>
						<td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:sefile"] ?><span class="fontContantAlert"></span></td>
						<td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
							<div class="file-input-wrapper">
								<button class="btn-file-input"><?php echo $langTxt["us:inputpicselect"] ?></button>
								<input type="file" name="inputFileUpload" id="inputFileUpload" onchange="ajaxFileUploadDoc();" />
							</div>
							<span class="formFontNoteTxt"><?php echo $langMod["inp:notefile"] ?></span>
							<div class="clearAll"></div>
							<div id="boxFileNew" class="formFontTileTxt">
								<?php
								$sql = "SELECT 
								" . $mod_tb_file . "_id,
								" . $mod_tb_file . "_filename,
								" . $mod_tb_file . "_name,
								" . $mod_tb_file . "_download 
								FROM " . $mod_tb_file . " 
								WHERE " . $mod_tb_file . "_contantid 	='" . $valid . "' AND " . $mod_tb_file . "_language ='" . $_REQUEST['inputLt'] . "' ORDER BY " . $mod_tb_file . "_id ASC";
								$query_file = wewebQueryDB($coreLanguageSQL, $sql);
								$number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
								if ($number_row >= 1) {
									$txtFile = "";
									while ($row_file = wewebFetchArrayDB($coreLanguageSQL, $query_file)) {
										$linkRelativePath = $mod_path_file . "/" . $row_file[1];
										$downloadFile = $row_file[1];
										$downloadID = $row_file[0];
										$downloadName = $row_file[2];
										$countDownload = $row_file[3];
										$imageType = strstr($downloadFile, '.');
										$txtFile .= "<a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUpload('deleteFile.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $downloadName . "" . $imageType . " | " . $langMod["file:type"] . ": " . $imageType . "  | " . $langMod["file:size"] . ": " . get_IconSize($linkRelativePath) . "<br/>";
									}
								}

								echo $txtFile;
								?>
							</div>
						</td>
					</tr>
				</table>
				<br class="ckabout" />
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder">

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
			<br>
			<table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder">

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

			<br>


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
		/*############################# Upload Album ##################################*/

		function ajaxFileUploadAlbum() {
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
				url: 'loadUpdateAlbum.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
				secureuri: true,
				fileElementId: 'inputAlbumUpload',
				dataType: 'json',
				success: function(data, status) {
					if (typeof(data.error) != 'undefined') {

						if (data.error != '') {
							alert(data.error);
						} else {
							jQuery("#boxAlbumNew").show();
							jQuery("#boxAlbumNew").html(data.msg);
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