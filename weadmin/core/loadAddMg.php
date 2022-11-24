<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");

$valClassNav = 2;
$valNav1 = $langTxt["nav:home2"];
$valLinkNav1 = "../core/index.php";
$valNav2 = $langTxt["nav:menuManage2"];

if ($_REQUEST["myParentID"] >= 1) {
    $sql = "SELECT " . $core_tb_menu . "_id , " . $core_tb_menu . "_namethai, " . $core_tb_menu . "_nameeng, " . $core_tb_menu . "_namechi    FROM " . $core_tb_menu . " WHERE " . $core_tb_menu . "_id='" . $_REQUEST["myParentID"] . "'";
    $query = wewebQueryDB($coreLanguageSQL, $sql);
    $row = wewebFetchArrayDB($coreLanguageSQL, $query);
    $valId = $row[0];
    if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
        $valName = rechangeQuot($row[$core_tb_menu . "_namethai"]);
    } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
        $valName = rechangeQuot($row[$core_tb_menu . "_nameeng"]);
    } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Chi") {
        $valName = rechangeQuot($row[$core_tb_menu . "_namechi"]);
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="th">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">

    <link href="../css/theme.css" rel="stylesheet" />

    <title><?php echo  $core_name_title ?></title>
    <link href="../js/select2/css/select2.css" rel="stylesheet" />
    <script language="JavaScript" type="text/javascript" src="../js/select2/js/select2.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
    <script language="JavaScript" type="text/javascript">
        function executeSubmit() {
            with(document.myForm) {
                if (isBlank(inputmenuname)) {
                    inputmenuname.focus();
                    jQuery("#inputmenuname").addClass("formInputContantTbAlertY");
                    return false;
                } else {
                    jQuery("#inputmenuname").removeClass("formInputContantTbAlertY");
                }

                <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                    if (isBlank(inputmenunameen)) {
                        inputmenunameen.focus();
                        jQuery("#inputmenunameen").addClass("formInputContantTbAlertY");
                        return false;
                    } else {
                        jQuery("#inputmenunameen").removeClass("formInputContantTbAlertY");
                    }
                <?php } ?>
                <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                    if (isBlank(inputmenunamecn)) {
                        inputmenunamecn.focus();
                        jQuery("#inputmenunamecn").addClass("formInputContantTbAlertY");
                        return false;
                    } else {
                        jQuery("#inputmenunamecn").removeClass("formInputContantTbAlertY");
                    }
                <?php } ?>

                if (inputMenu_LinkType[0].checked) {
                    if (isBlank(inputlinkpath)) {
                        inputlinkpath.focus();
                        jQuery("#inputlinkpath").addClass("formInputContantTbAlertY");
                        return false;
                    } else {
                        jQuery("#inputlinkpath").removeClass("formInputContantTbAlertY");
                    }

                    if (isBlank(inputmasterkey)) {
                        inputmasterkey.focus();
                        jQuery("#inputmasterkey").addClass("formInputContantTbAlertY");
                        return false;
                    } else {
                        jQuery("#inputmasterkey").removeClass("formInputContantTbAlertY");
                    }

                }

                if (inputMenu_LinkType[1].checked) {

                    if (isBlank(inputmenuurl)) {
                        inputmenuurl.focus();
                        jQuery("#inputmenuurl").addClass("formInputContantTbAlertY");
                        return false;
                    } else {
                        jQuery("#inputmenuurl").removeClass("formInputContantTbAlertY");
                    }

                    if (inputmenuurl.value == 'http://') {
                        inputmenuurl.focus();
                        jQuery("#inputmenuurl").addClass("formInputContantTbAlertY");
                        return false;
                    } else {
                        jQuery("#inputmenuurl").removeClass("formInputContantTbAlertY");
                    }

                }

            }

            insertContactNew('../core/insertMg.php');
        }

        jQuery(document).ready(function() {

            jQuery('#myForm').keypress(function(e) {
                if (e.which == 13) {
                    //e.preventDefault();
                    executeSubmit();
                    return false;
                }
            });
            $('.select2').select2();
        });
    </script>
</head>

<body>
    <form action="?" method="get" name="myForm" id="myForm">
        <input name="execute" type="hidden" id="execute" value="insert" />
        <input name="masterkey" type="hidden" id="masterkey" value="<?php echo  $_REQUEST['masterkey'] ?>" />
        <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo  $_REQUEST['menukeyid'] ?>" />
        <input name="myParentID" type="hidden" id="myParentID" value="<?php echo  $_REQUEST['myParentID'] ?>" />
        <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo  $_REQUEST['inputSearch'] ?>" />

        <div class="divRightNav">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <th class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo  $valLinkNav1 ?>" target="_self"><?php echo  $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('../core/menuManage.php')" target="_self"><?php echo  $valNav2 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo  $langTxt["mg:crepermis"] ?><?php if ($_REQUEST["myParentID"] >= 1) { ?> (<?php echo  $valName ?>)<?php } ?></span></th>
                    <th class="divRightNavTb" align="right">



                    </th>
                </tr>
            </table>
        </div>
        <div class="divRightHead">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
                <tr>
                    <th height="77" align="left"><span class="fontHeadRight"><?php echo  $langTxt["mg:crepermis"] ?><?php if ($_REQUEST["myParentID"] >= 1) { ?> (<?php echo  $valName ?>)<?php } ?></span></th>
                    <th align="left">
                        <table border="0" cellspacing="0" cellpadding="0" align="right">
                            <tr>
                                <th align="right">
                                    <div class="btnSave" title="<?php echo  $langTxt["btn:save"] ?>" onclick="executeSubmit();"></div>
                                    <div class="btnBack" title="<?php echo  $langTxt["btn:back"] ?>" onclick="btnBackPage('../core/menuManage.php')"></div>
                                </th>
                            </tr>
                        </table>
                    </th>
                </tr>
            </table>
        </div>
        <div class="divRightMain">
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <th colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langTxt["mg:title"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langTxt["mg:titleDe"] ?></span>
                    </th>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:inpnthai"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputmenuname" id="inputmenuname" type="text" class="formInputContantTb" /></td>
                </tr>
                <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                    <tr>
                        <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:inpneng"] ?><span class="fontContantAlert">*</span></td>
                        <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputmenunameen" id="inputmenunameen" type="text" class="formInputContantTb" /></td>
                    </tr>
                <?php } ?>
                <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>
                    <tr>
                        <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:inpnchi"] ?><span class="fontContantAlert">*</span></td>
                        <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputmenunamecn" id="inputmenunamecn" type="text" class="formInputContantTb" /></td>
                    </tr>
                <?php } ?>
            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">

                <tr>
                    <th colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langTxt["mg:titleset"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langTxt["mg:titlesetDe"] ?></span>
                    </th>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:inptype"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <label>
                            <div class="formDivRadioL"><input name="inputMenu_LinkType" id="inputMenu_LinkType" type="radio" class="formRadioContantTb" checked="checked" value="1" onclick="
                                                    jQuery('#rowModule').show();
                                                    jQuery('#rowModuleKey').show();
                                                    jQuery('#rowURL').hide();
                                                    jQuery('#rowTarget').show();
                                                    jQuery('#tags').show();
                                                                              " /></div>
                            <div class="formDivRadioR">Application</div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input name="inputMenu_LinkType" id="inputMenu_LinkType" type="radio" class="formRadioContantTb" value="0" onclick="
                                                    jQuery('#rowModule').hide();
                                                    jQuery('#rowModuleKey').hide();
                                                    jQuery('#rowURL').show();
                                                    jQuery('#rowTarget').show();
                                                    jQuery('#tags').hide();
                                                                              " /></div>
                            <div class="formDivRadioR">Link</div>
                        </label>
                        <?php if ($_REQUEST["myParentID"] <= 0) { ?>
                            <label>
                                <div class="formDivRadioL"><input name="inputMenu_LinkType" id="inputMenu_LinkType" type="radio" class="formRadioContantTb" value="2" onclick="
                                                        jQuery('#rowModule').hide();
                                                        jQuery('#rowModuleKey').hide();
                                                        jQuery('#rowURL').hide();
                                                        jQuery('#rowTarget').hide();
                                                        jQuery('#tags').hide();
                                                                                  " /></div>
                                <div class="formDivRadioR">Group</div>
                            </label>
                        <?php } ?>
                    </td>
                </tr>
                <tr id="rowModule">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:inpfile"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <table width="91%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="left">
                                    <input name="inputlinkpath" style="width:100%;" id="inputlinkpath" type="text" class="formInputContantTb" />
                                </td>
                                <td width="180" align="center" valign="top" style=" background-color:#f9f9f9; border-top:#c8c7cc solid 1px; border-right:#c8c7cc solid 1px; border-bottom:#c8c7cc solid 1px;padding-top:8px;padding-bottom:10px;padding-left:10px; 

                                                    ">
                                    <a href="javascript:void(0)" onclick="popup('popupIconWindow', 'menuMgFile.php', 500, 300, 1)"><?php echo  $langTxt["mg:inpfileAd"] ?></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr id="rowURL" style="display:none">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:inpurl"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputmenuurl" id="inputmenuurl" type="text" class="formInputContantTb" /></td>
                </tr>
                <tr id="rowModuleKey">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:inpkey"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputmasterkey" id="inputmasterkey" type="text" class="formInputContantTb" /></td>
                </tr>
                <tr id="rowTarget">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:inpshow"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <label>
                            <div class="formDivRadioL"><input name="inputmenutarget" id="inputmenutarget" type="radio" class="formRadioContantTb" checked="checked" value="_parent" /></div>
                            <div class="formDivRadioR"><?php echo  $langTxt["mg:inpwindows"] ?></div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input name="inputmenutarget" id="inputmenutarget" type="radio" class="formRadioContantTb" value="_blank" /></div>
                            <div class="formDivRadioR"><?php echo  $langTxt["mg:inpwindowsnew"] ?></div>
                        </label>
                    </td>
                </tr>
            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" id="tags" class="tbBoxViewBorder">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langMod["tit:theme"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["tit:themeDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["inp:theme"] ?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <select name="inputTag[]" id="inputTag" class="formSelectContantTb select2" multiple>
                            <option value=""><?php echo  $langMod["tit:selectgtheme"] ?></option>
                            <?php
                            foreach ($core_arr_theme as $keycore_arr_theme => $valuecore_arr_theme) { ?>
                                <option value="<?php echo  $keycore_arr_theme ?>" ><?php echo  $valuecore_arr_theme ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>

            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">

                <tr>
                    <th colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langTxt["mg:titleicon"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langTxt["mg:titleiconDe"] ?></span>
                    </th>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:inpicon"] ?></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <table width="39%" border="0" cellspacing="0" cellpadding="1" style="background-color:#fefefe;
                                               border:#c8c7cc solid 1px;
                                               height:35px;
                                               ">
                            <tr>
                                <td align="center"><img src="../img/btn/blank.gif" name="LibraryIconSample" id="LibraryIconSample" />
                                    <input name="inputIconName" type="hidden" id="inputIconName" />
                                </td>
                                <td width="180" align="center" valign="top" style="padding-top:10px;padding-bottom:10px;padding-left:10px; background-color:#f9f9f9; border-left:#c8c7cc solid 1px;  ">
                                    <a href="javascript:void(0)" onclick="popup('popupIconWindow', 'menuMgIcon.php', 500, 210, 1)"><?php echo  $langTxt["mg:inpiconAd"] ?></a>
                                </td>
                            </tr>
                        </table>
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
    <?php include("../lib/disconnect.php"); ?>

</body>

</html>