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


$sql = "SELECT  ";
if ($_REQUEST['inputLt'] == "Thai") {
    $sql .= "  " . $mod_tb_root . "_id , " . $mod_tb_root . "_htmlfilename, " . $mod_tb_root . "_lastdate, " . $mod_tb_root . "_creby, " . $mod_tb_root . "_status ,    " . $mod_tb_root . "_subject  	,    " . $mod_tb_root . "_sdate,    " . $mod_tb_root . "_edate,    " . $mod_tb_root . "_title,    " . $mod_tb_root . "_pic , " . $mod_tb_root . "_type , " . $mod_tb_root . "_filevdo , " . $mod_tb_root . "_url  ,    " . $mod_tb_root . "_metatitle  	 	 ,    " . $mod_tb_root . "_description  	 	 ,    " . $mod_tb_root . "_keywords , " . $mod_tb_root . "_address      ";
} else {
    $sql .= "  " . $mod_tb_root . "_id , " . $mod_tb_root . "_htmlfilenameen, " . $mod_tb_root . "_lastdate, " . $mod_tb_root . "_creby, " . $mod_tb_root . "_status  ,    " . $mod_tb_root . "_subjecten  	,    " . $mod_tb_root . "_sdate,    " . $mod_tb_root . "_edate,    " . $mod_tb_root . "_titleen,    " . $mod_tb_root . "_pic , " . $mod_tb_root . "_type , " . $mod_tb_root . "_filevdo , " . $mod_tb_root . "_url ,    " . $mod_tb_root . "_metatitleen  	 	 ,    " . $mod_tb_root . "_descriptionen  	 	 ,    " . $mod_tb_root . "_keywordsen , " . $mod_tb_root . "_addressen   ";
}

$sql .= "  ,
			" . $mod_tb_root . "_typeSal ,
			" . $mod_tb_root . "_typeDateTo,
			" . $mod_tb_root . "_typeTimeTo,
			" . $mod_tb_root . "_fromHH,
			" . $mod_tb_root . "_quantity,
			" . $mod_tb_root . "_fromMM,
			" . $mod_tb_root . "_toHH,
			" . $mod_tb_root . "_toMM,
			" . $mod_tb_root . "_price,
			" . $mod_tb_root . "_sale,
			" . $mod_tb_root . "_eat,
			" . $mod_tb_root . "_walk,
			" . $mod_tb_root . "_map,
			" . $mod_tb_root . "_showicon,
			" . $mod_tb_root . "_gid ,
			" . $mod_tb_root . "_person,
			" . $mod_tb_root . "_hotelname,
			" . $mod_tb_root . "_resdate,
			" . $mod_tb_root . "_reedate,
			" . $mod_tb_root . "_dwswitch
			 ";
$sql .= " , " . $mod_tb_root . "_tid as tid ";
$sql .= " 	FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_masterkey='" . $_POST["masterkey"] . "' AND  " . $mod_tb_root . "_id 	='" . $_POST["valEditID"] . "'";
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
$valid = $Row[0];
$valhtml = $mod_path_html . "/" . $Row[1];
$valhtmlname = $Row[1];
$valcredate = DateFormat($Row[2]);
$valcreby = $Row[3];
$valstatus = $Row[4];
$valSubject = rechangeQuot($Row[5]);
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
$valTypeDateTo = $Row[18];
$valTypeTimeTo = $Row[19];
$valFromHH = $Row[20];
$valQuantity = $Row[21];
$valFromMM = $Row[22];
$valToHH = $Row[23];
$valToMM = $Row[24];
$valPrice = $Row[25];
$valSale = $Row[26];
$valEat = $Row[27];
$valWalk = $Row[28];
$valMapName = $Row[29];
$valMap = $mod_path_pictures . "/" . $Row[29];

$valIcon = $Row[30];
$valGid = $Row[31];
$valPerson = $Row[32];
$valHotelname = $Row[33];
if ($Row[34] != "0000-00-00 00:00:00") {
    $valReSdate = DateFormatInsertRe($Row[34]);
}
if ($Row[35] != "0000-00-00 00:00:00") {
    $valReEdate = DateFormatInsertRe($Row[35]);
}
$valDwswitch = $Row[36];
$valTid = unserialize($Row['tid']);
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
    <title><?php echo  $core_name_title ?></title>
    <link href="../js/select2/css/select2.css" rel="stylesheet" />
    <script language="JavaScript" type="text/javascript" src="../js/select2/js/select2.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/jquery.blockUI.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
    <script language="JavaScript" type="text/javascript">
        function executeSubmit() {
            with(document.myForm) {

                if (inputGroupID.value == 0) {
                    inputGroupID.focus();
                    jQuery("#inputGroupID").addClass("formInputContantTbAlertY");
                    return false;
                } else {
                    jQuery("#inputGroupID").removeClass("formInputContantTbAlertY");
                }


                if (isBlank(inputSubject)) {
                    inputSubject.focus();
                    jQuery("#inputSubject").addClass("formInputContantTbAlertY");
                    return false;
                } else {
                    jQuery("#inputSubject").removeClass("formInputContantTbAlertY");
                }

                /*	if(isBlank(inputDescription)) {
                 inputDescription.focus();
                 jQuery("#inputDescription").addClass("formInputContantTbAlertY");
                 return false;
                 }else{
                 jQuery("#inputDescription").removeClass("formInputContantTbAlertY");
                 }*/

                if (isBlank(sdateInput)) {
                    sdateInput.focus();
                    jQuery("#sdateInput").addClass("formInputContantTbAlertY");
                    return false;
                } else {
                    jQuery("#sdateInput").removeClass("formInputContantTbAlertY");
                }

                var valTypesal = jQuery("input[name='inputTypeSal']:checked").val();

                var valIsDateTo = jQuery("input[name='inputIsDateTo']:checked").val();
                if (valIsDateTo == 1) {
                    if (isBlank(edateInput)) {
                        edateInput.focus();
                        jQuery("#edateInput").addClass("formInputContantTbAlertY");
                        return false;
                    } else {
                        jQuery("#edateInput").removeClass("formInputContantTbAlertY");
                    }

                }


                /*		if(isBlank(inputPrice)) {
                             inputPrice.focus();
                             jQuery("#inputPrice").addClass("formInputContantTbAlertY");
                             return false;
                             }else{
                             jQuery("#inputPrice").removeClass("formInputContantTbAlertY");
                             }

                             if (!isNumber(inputPrice)) {
                             inputPrice.focus();
                             jQuery("#inputPrice").addClass("formInputContantTbAlertY");
                             return false;
                             }else{
                             jQuery("#inputPrice").removeClass("formInputContantTbAlertY");
                             }



                             if(isBlank(inputSale)) {
                             inputSale.focus();
                             jQuery("#inputSale").addClass("formInputContantTbAlertY");
                             return false;
                             }else{
                             jQuery("#inputSale").removeClass("formInputContantTbAlertY");
                             }

                             if (!isNumber(inputSale)) {
                             inputSale.focus();
                             jQuery("#inputSale").addClass("formInputContantTbAlertY");
                             return false;
                             }else{
                             jQuery("#inputSale").removeClass("formInputContantTbAlertY");
                             }

                         


                            if (isBlank(inputAddress)) {
                                inputAddress.focus();
                                jQuery("#inputAddress").addClass("formInputContantTbAlertY");
                                return false;
                            } else {
                                jQuery("#inputAddress").removeClass("formInputContantTbAlertY");
                            }



                            if (isBlank(inputHotelName)) {
                                inputHotelName.focus();
                                jQuery("#inputHotelName").addClass("formInputContantTbAlertY");
                                return false;
                            } else {
                                jQuery("#inputHotelName").removeClass("formInputContantTbAlertY");
                            }

    */


                /*		if(isBlank(inputEat)) {
                 inputEat.focus();
                 jQuery("#inputEat").addClass("formInputContantTbAlertY");
                 return false;
                 }else{
                 jQuery("#inputEat").removeClass("formInputContantTbAlertY");
                 }

                 if(isBlank(inputWalk)) {
                 inputWalk.focus();
                 jQuery("#inputWalk").addClass("formInputContantTbAlertY");
                 return false;
                 }else{
                 jQuery("#inputWalk").removeClass("formInputContantTbAlertY");
                 }

                 */

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

        function clickChkDate() {
            with(document.myForm) {
                var valChkDate = jQuery('#inputChkDate').val();

                if (valChkDate == 1) {
                    jQuery('#idDateTo1').hide();
                    jQuery('#inputChkDate').val('0')
                } else {
                    jQuery('#idDateTo1').show();
                    jQuery('#inputChkDate').val('1')
                }

            }
        }


        function clickChkTime() {
            with(document.myForm) {
                var valChkTime = jQuery('#inputChkTime').val();

                if (valChkTime == 1) {
                    jQuery('#idTimeTo1').hide();
                    jQuery('#inputChkTime').val('0')
                } else {
                    jQuery('#idTimeTo1').show();
                    jQuery('#inputChkTime').val('1')
                }

            }
        }


        jQuery(document).ready(function() {

            jQuery('#myForm').keypress(function(e) {
                /* Start  Enter Check CKeditor */
                var focusManager = new CKEDITOR.focusManager(editDetail);
                var checkFocus = CKEDITOR.instances.editDetail.focusManager.hasFocus;

                if (e.which == 13) {
                    //e.preventDefault();
                    if (!checkFocus) {
                        executeSubmit();
                        return false;
                    }
                }
                /* End  Enter Check CKeditor */
            });
            $('.select2').select2();
        });
    </script>
</head>

<body>
    <form action="?" method="get" name="myForm" id="myForm" enctype="multipart/form-data">
        <input name="execute" type="hidden" id="execute" value="update" />
        <input name="masterkey" type="hidden" id="masterkey" value="<?php echo  $_REQUEST['masterkey'] ?>" />
        <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo  $_REQUEST['menukeyid'] ?>" />
        <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo  $_REQUEST['inputSearch'] ?>" />
        <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo  $_REQUEST['module_pageshow'] ?>" />
        <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo  $_REQUEST['module_pagesize'] ?>" />
        <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo  $_REQUEST['module_orderby'] ?>" />
        <input name="inputGh" type="hidden" id="inputGh" value="<?php echo  $_REQUEST['inputGh'] ?>" />
        <input name="valEditID" type="hidden" id="valEditID" value="<?php echo  $_REQUEST['valEditID'] ?>" />
        <input name="valDelFile" type="hidden" id="valDelFile" value="" />
        <input name="valDelAlbum" type="hidden" id="valDelAlbum" value="" />
        <input name="inputHtml" type="hidden" id="inputHtml" value="" />
        <input name="inputHtmlDel" type="hidden" id="inputHtmlDel" value="<?php echo  $valhtmlname ?>" />
        <input name="inputLt" type="hidden" id="inputLt" value="<?php echo  $_REQUEST['inputLt'] ?>" />
        <input name="inputChkDate" type="hidden" id="inputChkDate" value="<?php echo  $valTypeDateTo ?>" />
        <input name="inputChkTime" type="hidden" id="inputChkTime" value="<?php echo  $valTypeTimeTo ?>" />
        <input name="sdateInputSe" type="hidden" id="sdateInputSe" value="<?php echo  $_REQUEST['sdateInputSe'] ?>" />
        <input name="edateInputSe" type="hidden" id="edateInputSe" value="<?php echo  $_REQUEST['edateInputSe'] ?>" />

        <div class="divRightNav">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo  $valLinkNav1 ?>" target="_self"><?php echo  $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo  getNameMenu($_REQUEST["menukeyid"]) ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo  $langMod["txt:titleedit"] ?> <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2) { ?>(<?php echo  getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"]) ?>)<?php } ?></span></td>
                    <td class="divRightNavTb" align="right">



                    </td>
                </tr>
            </table>
        </div>
        <div class="divRightHead">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
                <tr>
                    <td height="77" align="left"><span class="fontHeadRight"><?php echo  $langMod["txt:titleedit"] ?> <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2) { ?>(<?php echo  getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"]) ?>)<?php } ?></span></td>
                    <td align="left">
                        <table border="0" cellspacing="0" cellpadding="0" align="right">
                            <tr>
                                <td align="right">
                                    <?php if ($valPermission == "RW") { ?>
                                        <div class="btnSave" title="<?php echo  $langTxt["btn:save"] ?>" onclick="executeSubmit();"></div>
                                    <?php } ?>
                                    <div class="btnBack" title="<?php echo  $langTxt["btn:back"] ?>" onclick="btnBackPage('index.php')"></div>
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
                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:subject"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["txt:subjectDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:selectgn"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <select name="inputGroupID" id="inputGroupID" class="formSelectContantTb">
                            <option value="0"><?php echo  $langMod["tit:selectg"] ?></option>
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
                                <option value="<?php echo  $row_groupid ?>" <?php if ($valGid == $row_groupid) { ?> selected="selected" <?php } ?>><?php echo  $row_groupname ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:subject"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputSubject" id="inputSubject" type="text" class="formInputContantTb" value="<?php echo  $valSubject ?>" /></td>
                </tr>
                <tr style="display:none;">
                    <td align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:title"] ?><span class="fontContantAlert">*</span></td>
                    <td colspan="6" align="left" valign="top" class="formRightContantTb">
                        <textarea name="inputDescription" id="inputDescription" cols="45" rows="5" class="formTextareaContantTb"><?php echo  $valTitle ?></textarea>
                    </td>
                </tr>

            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:date"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["txt:dateDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:sdate"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tr>
                                <td width="152"><input name="sdateInput" id="sdateInput" type="text" class="formInputContantTbShot" value="<?php echo  $valSdate ?>" /></td>
                                <td align="left" width="98" style="padding-left:10px;"> <label>
                                        <div class="formDivRadioL"><input name="inputIsDateTo" id="inputIsDateTo" value="1" type="checkbox" class="formRadioContantTb" onclick="clickChkDate();" <?php if ($valTypeDateTo == 1) { ?>checked="checked" <?php } ?> /></div>
                                        <div class="formDivRadioR"><?php echo  $langMod["tit:edate"] ?></div>
                                    </label></td>
                                <td width="587"><span id="idDateTo1" <?php if ($valTypeDateTo <= 0) { ?>style="display:none;" <?php } ?>><input name="edateInput" id="edateInput" type="text" class="formInputContantTbShot" value="<?php echo  $valEdate ?>" /></span></td>
                            </tr>
                            <tr>
                                <td colspan="3"><span class="formFontNoteTxt"><?php echo  $langMod["inp:notedate"] ?></span></td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:salary"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <label>
                            <div class="formDivRadioL"><input name="inputTypeSal" id="inputTypeSal" value="1" type="radio" class="formRadioContantTb" <?php if ($valTypeSal == 1) { ?>checked="checked" <?php } ?> onclick="jQuery('#salInput1').hide()" /></div>
                            <div class="formDivRadioR"><?php echo  $modTxtSalary[1] ?></div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input name="inputTypeSal" id="inputTypeSal" value="2" type="radio" class="formRadioContantTb" <?php if ($valTypeSal == 2) { ?>checked="checked" <?php } ?> onclick="jQuery('#salInput1').show();" /></div>
                            <div class="formDivRadioR"><?php echo  $modTxtSalary[2] ?></div>
                        </label>
                    </td>
                </tr>
                <tr id="salInput1" <?php if ($valTypeSal == 1) { ?>style="display:none;" <?php } ?>>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:salaryinfo"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tr>
                                <td width="134">
                                    <table width="130" border="0" cellspacing="0" cellpadding="1">
                                        <tr>

                                            <td><select name="inputTimeFromHH" class="formSelectContantTbShort" id="inputTimeFromHH">
                                                    <?php
                                                    for ($i = 0; $i <= 23; $i++) {
                                                        if ($i < 10) {
                                                            $myi = "0" . $i;
                                                        } else {
                                                            $myi = $i;
                                                        }
                                                    ?>
                                                        <option value="<?php echo  $myi ?>" <?php
                                                                                            if ($valFromHH == $i) {
                                                                                                echo " selected";
                                                                                            }
                                                                                            ?>>
                                                            <?php echo  $myi ?>
                                                        </option>
                                                    <?php } ?>
                                                </select></td>
                                            <td><b>:</b></td>
                                            <td><select name="inputTimeFromMM" class="formSelectContantTbShort" id="inputTimeFromMM">
                                                    <?php
                                                    for ($i = 0; $i <= 59; $i++) {
                                                        if ($i < 10) {
                                                            $myi = "0" . $i;
                                                        } else {
                                                            $myi = $i;
                                                        }
                                                    ?>
                                                        <option value="<?php echo  $myi ?>" <?php
                                                                                            if ($valFromMM == $i) {
                                                                                                echo " selected";
                                                                                            }
                                                                                            ?>>
                                                            <?php echo  $myi ?>
                                                        </option>
                                                    <?php } ?>
                                                </select></td>
                                        </tr>
                                    </table>
                                </td>
                                <td align="left" width="67" style="padding-left:10px;"> <label>
                                        <div class="formDivRadioL"><input name="inputIsTimeTo" id="inputIsTimeTo" value="1" type="checkbox" class="formRadioContantTb" onclick="clickChkTime();" <?php if ($valTypeTimeTo == 1) { ?>checked="checked" <?php } ?> /></div>
                                        <div class="formDivRadioR"><?php echo  $langMod["tit:edate"] ?></div>
                                    </label></td>
                                <td width="636"><span id="idTimeTo1" <?php if ($valTypeTimeTo <= 0) { ?>style="display:none;" <?php } ?>>
                                        <table width="130" border="0" cellspacing="0" cellpadding="1">
                                            <tr>

                                                <td><select name="inputTimeToHH" class="formSelectContantTbShort" id="inputTimeToHH">
                                                        <?php
                                                        for ($i = 0; $i <= 23; $i++) {
                                                            if ($i < 10) {
                                                                $myi = "0" . $i;
                                                            } else {
                                                                $myi = $i;
                                                            }
                                                        ?>
                                                            <option value="<?php echo  $myi ?>" <?php
                                                                                                if ($valToHH == $i) {
                                                                                                    echo " selected";
                                                                                                }
                                                                                                ?>>
                                                                <?php echo  $myi ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select></td>
                                                <td><b>:</b></td>
                                                <td><select name="inputTimeToMM" class="formSelectContantTbShort" id="inputTimeToMM">
                                                        <?php
                                                        for ($i = 0; $i <= 59; $i++) {
                                                            if ($i < 10) {
                                                                $myi = "0" . $i;
                                                            } else {
                                                                $myi = $i;
                                                            }
                                                        ?>
                                                            <option value="<?php echo  $myi ?>" <?php
                                                                                                if ($valToMM == $i) {
                                                                                                    echo " selected";
                                                                                                }
                                                                                                ?>>
                                                                <?php echo  $myi ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select></td>
                                            </tr>
                                        </table>
                                    </span></td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <tr style="display:none;">
                    <td align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:work"] ?><span class="fontContantAlert">*</span></td>
                    <td colspan="6" align="left" valign="top" class="formRightContantTb">
                        <textarea name="inputAddress" id="inputAddress" cols="45" rows="5" class="formTextareaContantTb"><?php echo  $valAddress ?></textarea>
                    </td>
                </tr>

                <tr style="display:none;">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:hotelname"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputHotelName" id="inputHotelName" type="text" class="formInputContantTb" value="<?php echo  $valHotelname ?>" /></td>
                </tr>
            </table>

            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:pic"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["txt:picDe"] ?></span>
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

                        <span class="formFontNoteTxt"><?php echo  $langMod["inp:notepic"] ?></span>
                        <div class="clearAll"></div>
                        <div id="boxPicNew" class="formFontTileTxt">
                            <?php if (is_file($valPic)) { ?>
                                <img src="<?php echo  $valPic ?>" style="float:left;border:#c8c7cc solid 1px;" />
                                <div style="width:22px; height:22px;float:left;z-index:1; margin-left:-22px;cursor:pointer;" onclick="delPicUpload('deletePic.php')" title="Delete file"><img src="../img/btn/delete.png" width="22" height="22" border="0" /></div>
                                <input type="hidden" name="picname" id="picname" value="<?php echo  $valPicName ?>" />
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langMod["tit:hashtag"]  ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["tit:hashtagDes"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:hashtag"] ?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <select name="inputTag[]" id="inputTag" class="formSelectContantTb select2" multiple>
                            <option value="0"><?php echo  $langMod["tit:selectghasg"] ?></option>
                            <?php
                            $sql_group = "SELECT ";
                            if ($_REQUEST['inputLt'] == "Thai") {
                                $sql_group .= "  " . $mod_tb_tag . "_id," . $mod_tb_tag . "_subject";
                            } else {
                                $sql_group .= " " . $mod_tb_tag . "_id," . $mod_tb_tag . "_subjecten ";
                            }
                            $sql_group .= "  FROM " . $mod_tb_tag . " WHERE  " . $mod_tb_tag . "_masterkey ='" . $masterkey_tag . "' AND " . $mod_tb_tag . "_status != 'Disable'  ORDER BY " . $mod_tb_tag . "_order DESC ";
                            $query_group = wewebQueryDB($coreLanguageSQL, $sql_group);

                            while ($row_group = wewebFetchArrayDB($coreLanguageSQL, $query_group)) {
                                $row_groupid = $row_group[0];
                                $row_groupname = $row_group[1];
                            ?>
                                <option value="<?php echo $row_groupid ?>" <?php foreach ($valTid as $keyvalTag => $valuevalTag) {
                                                                                if ($valuevalTag == $row_groupid) {
                                                                                    echo "selected='selected'";
                                                                                }
                                                                            } ?>><?php echo $row_groupname; ?></option>
                            <?php  } ?>
                        </select>
                    </td>
                </tr>

            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:title"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["txt:titleDe"] ?></span>
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
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:album"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["txt:albumDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:album"] ?></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div id="mulitplefileuploader"><?php echo  $langTxt["us:inputpicselect"] ?></div>

                        <span class="formFontNoteTxt"><?php echo  $langMod["inp:notealbum"] ?></span>
                        <div class="clearAll"></div>
                        <div id="status" class="formFontTileTxt"></div>
                        <div id="boxAlbumNew" class="formFontTileTxt">
                            <?php
                            $sql_filetemp = "SELECT  " . $mod_tb_root_album . "_id," . $mod_tb_root_album . "_filename," . $mod_tb_root_album . "_name," . $mod_tb_root_album . "_download  FROM " . $mod_tb_root_album . " WHERE " . $mod_tb_root_album . "_contantid 	='" . $_REQUEST['valEditID'] . "'    ORDER BY " . $mod_tb_root_album . "_id ASC";
                            $query_filetemp = wewebQueryDB($coreLanguageSQL, $sql_filetemp);
                            $number_filetemp = wewebNumRowsDB($coreLanguageSQL, $query_filetemp);
                            if ($number_filetemp >= 1) {
                                $valAlbum = "";
                                while ($row_filetemp = wewebFetchArrayDB($coreLanguageSQL, $query_filetemp)) {
                                    $linkRelativePath = $mod_path_album . "/" . $row_filetemp[1];
                                    $downloadFile = $row_filetemp[1];
                                    $downloadID = $row_filetemp[0];
                                    $downloadName = $row_filetemp[2];
                                    $countDownload = $row_filetemp[3];
                                    $imageType = strstr($downloadFile, '.');

                                    $valAlbum .= "<img src=\"" . $mod_path_album . "/reO_" . $downloadFile . "\"  width=\"50\" height=\"50\"   style=\"float:left;border:#c8c7cc solid 1px;margin-top:15px;\"  />";
                                    $valAlbum .= "<div style=\"width:15px; height:15px;float:left;z-index:1; margin-left:-15px;cursor:pointer;margin-right:15px;margin-top:15px;\" onclick=\"document.myForm.valDelAlbum.value=" . $downloadID . ";delAlbumUpload('deleteAlbum.php');\"  title=\"Delete file\" ><img src=\"../img/btn/delete.png\" width=\"15\" height=\"15\"  border=\"0\"/></div>";
                                }
                            }
                            echo $valAlbum;
                            ?>
                        </div>
                    </td>
                </tr>
            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:video"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["txt:videoDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>
                <tr style="display:none;">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:typevdo"] ?></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <label>
                            <div class="formDivRadioL"><input name="inputType" id="inputType" value="url" type="radio" class="formRadioContantTb" onclick="jQuery('#boxInputfile').hide();
                                                    jQuery('#boxInputlink').show();" <?php if ($valType == "url") { ?> checked="checked" <?php } ?> /></div>
                            <div class="formDivRadioR"><?php echo  $langMod["tit:linkvdo"] ?></div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input name="inputType" id="inputType" value="file" type="radio" class="formRadioContantTb" onclick="jQuery('#boxInputlink').hide();
                                                    jQuery('#boxInputfile').show();" <?php if ($valType == "file") { ?> checked="checked" <?php } ?> /></div>
                            <div class="formDivRadioR"><?php echo  $langMod["tit:uploadvdo"] ?></div>
                        </label>
                        </label>
                    </td>
                </tr>
                <tr id="boxInputlink" <?php if ($valType == "file") { ?> style="display:none;" <?php } ?>>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:linkvdo"] ?></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><textarea name="inputurl" id="inputurl" cols="45" rows="5" class="formTextareaContantTb"><?php echo  $valUrl ?></textarea><br />
                        <span class="formFontNoteTxt"><?php echo  $langMod["tit:linkvdonote"] ?></span>
                    </td>
                </tr>
                <tr id="boxInputfile" <?php if ($valType == "url") { ?> style="display:none;" <?php } ?>>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:uploadvdo"] ?></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input"><?php echo  $langTxt["us:inputpicselect"] ?></button>
                            <input type="file" name="inputVideoUpload" id="inputVideoUpload" onchange="ajaxVideoUpload();" />
                        </div>

                        <span class="formFontNoteTxt"><?php echo  $langMod["tit:uploadvdonote"] ?></span>
                        <div class="clearAll"></div>
                        <div id="boxVideoNew" class="formFontTileTxt">
                            <?php
                            if (is_file($valPathvdo)) {
                                $linkRelativePath = $valPathvdo;
                                $imageType = strstr($valFilevdo, '.');
                            ?>
                                <a href="javascript:void(0)" onclick=" delVideoUpload('deleteVideo.php')"><img src="../img/btn/delete.png" align="absmiddle" title="Delete file" hspace="10" vspace="10" border="0" /></a>Video Upload | <?php echo  $langMod["file:type"] ?>: <?php echo  $imageType ?> | <?php echo  $langMod["file:size"] ?>: <?php echo  get_IconSize($linkRelativePath) ?>
                                <input type="hidden" name="picname" id="picname" value="<?php echo  $valFilevdo ?>" />
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:attfile"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["txt:attfileDe"] ?></span>
                    </td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">แสดงเอกสารแนบ</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <label>
                            <div class="formDivRadioL"><input name="inputDwswitch" id="inputDwswitch" value="On" type="radio" class="formRadioContantTb" <?php if ($valDwswitch == 'On') { ?> checked="checked" <?php } ?> /></div>
                            <div class="formDivRadioR">เปิด</div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input name="inputDwswitch" id="inputDwswitch" value="Off" type="radio" class="formRadioContantTb" <?php if ($valDwswitch == 'Off') { ?> checked="checked" <?php } ?> /></div>
                            <div class="formDivRadioR">ปิด</div>
                        </label>
                    </td>
                </tr>

                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>
                <tr style="display:none;">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:chfile"] ?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputFileName" id="inputFileName" type="text" class="formInputContantTb" /></td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:sefile"] ?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">

                        <div class="file-input-wrapper">
                            <button class="btn-file-input"><?php echo  $langTxt["us:inputpicselect"] ?></button>
                            <input type="file" name="inputFileUpload" id="inputFileUpload" onchange="ajaxFileUploadDoc();" />
                        </div>
                        <span class="formFontNoteTxt"><?php echo  $langMod["inp:notefile"] ?></span>
                        <div class="clearAll"></div>
                        <div id="boxFileNew" class="formFontTileTxt">
                            <?php
                            $sql = "SELECT " . $mod_tb_file . "_id," . $mod_tb_file . "_filename," . $mod_tb_file . "_name," . $mod_tb_file . "_download FROM " . $mod_tb_file . " WHERE " . $mod_tb_file . "_contantid 	='" . $valid . "' ORDER BY " . $mod_tb_file . "_id ASC";
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
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:seo"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["txt:seoDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:seotitle"] ?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputTagTitle" id="inputTagTitle" type="text" class="formInputContantTb" value="<?php echo  $valMetatitle ?>" /><br />
                        <span class="formFontNoteTxt"><?php echo  $langMod["inp:seotitlenote"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:seodes"] ?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputTagDescription" id="inputTagDescription" type="text" class="formInputContantTb" value="<?php echo  $valDescription ?>" /><br />
                        <span class="formFontNoteTxt"><?php echo  $langMod["inp:seodesnote"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:seokey"] ?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputTagKeywords" id="inputTagKeywords" type="text" class="formInputContantTb" value="<?php echo  $valKeywords ?>" /><br />
                        <span class="formFontNoteTxt"><?php echo  $langMod["inp:seokeynote"] ?></span>
                    </td>
                </tr>





            </table>
            <br />
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
    <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
    <script type="text/javascript" language="javascript">
        /*################################# Upload Map #######################*/
        function ajaxFileUploadMap() {
            var valuepicname = jQuery("input#picnameMap").val();

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
                url: 'loadUpdateMap.php?myID=<?php echo  $_POST["valEditID"] ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&delpicname=' + valuepicname + '&menuid=<?php echo  $_REQUEST['menukeyid'] ?>',
                secureuri: false,
                fileElementId: 'fileToUploadMap',
                dataType: 'json',
                success: function(data, status) {
                    if (typeof(data.error) != 'undefined') {

                        if (data.error != '') {
                            alert(data.error);

                        } else {
                            jQuery("#boxMapNew").show();
                            jQuery("#boxMapNew").html(data.msg);
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
                url: 'loadUpdatePic.php?myID=<?php echo  $_POST["valEditID"] ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&delpicname=' + valuepicname + '&menuid=<?php echo  $_REQUEST['menukeyid'] ?>',
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
                url: 'loadUpdateAlbum.php?myID=<?php echo  $_POST["valEditID"] ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&menuid=<?php echo  $_REQUEST['menukeyid'] ?>',
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
                url: 'loadUpdateVideo.php?myID=<?php echo  $_POST["valEditID"] ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&delvdoname=' + valuevdoname + '&menuid=<?php echo  $_REQUEST['menukeyid'] ?>',
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
                url: 'loadUpdateFile.php?myID=<?php echo  $_POST["valEditID"] ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&nametodoc=' + valuefilename + '&menuid=<?php echo  $_REQUEST['menukeyid'] ?>',
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

    <script type="text/javascript" src="js/jquery.uploadfile.js"></script>
    <script type="text/javascript" language="javascript">
        jQuery(document).ready(function() {
            var vajSelectFile = 0;
            var valUploadFile = 0;
            var settings = {
                url: "loadUpdateAlbum.php?myID=<?php echo  $_POST["valEditID"] ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&menuid=<?php echo  $_REQUEST['menukeyid'] ?>",
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
    </script>

    <?php if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") { ?>
        <script language="JavaScript" type="text/javascript" src="../js/datepickerThai.js"></script>
    <?php } else { ?>
        <script language="JavaScript" type="text/javascript" src="../js/datepickerEng.js"></script>
    <?php } ?>
    <?php include("../lib/disconnect.php"); ?>

</body>

</html>