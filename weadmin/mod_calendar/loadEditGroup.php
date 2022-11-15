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
    $sql .= "  " . $mod_tb_root_group . "_id ,  " . $mod_tb_root_group . "_lastdate, " . $mod_tb_root_group . "_creby, " . $mod_tb_root_group . "_status ,    " . $mod_tb_root_group . "_subject  ,    " . $mod_tb_root_group . "_title  ,    " . $mod_tb_root_group . "_color ";
} else if ($_REQUEST['inputLt'] == "Eng"){
    $sql .= "  " . $mod_tb_root_group . "_id , " . $mod_tb_root_group . "_lastdate, " . $mod_tb_root_group . "_creby, " . $mod_tb_root_group . "_status  ,    " . $mod_tb_root_group . "_subjecten  ,    " . $mod_tb_root_group . "_titleen  ,    " . $mod_tb_root_group . "_color ";
}
else {
    $sql .= "  " . $mod_tb_root_group . "_id , " . $mod_tb_root_group . "_lastdate, " . $mod_tb_root_group . "_creby, " . $mod_tb_root_group . "_status  ,    " . $mod_tb_root_group . "_subjectcn  ,    " . $mod_tb_root_group . "_titlecn  ,    " . $mod_tb_root_group . "_color ";
}

$sql .= " 	FROM " . $mod_tb_root_group . " WHERE " . $mod_tb_root_group . "_masterkey='" . $_POST["masterkey"] . "' AND  " . $mod_tb_root_group . "_id 	='" . $_POST["valEditID"] . "'";
$Query = wewebQueryDB($coreLanguageSQL,$sql);
$Row = wewebFetchArrayDB($coreLanguageSQL,$Query);
$valid = $Row[0];
$valcredate = DateFormat($Row[1]);
$valcreby = $Row[2];
$valstatus = $Row[3];
$valSubject = $Row[4];
$valTitle = $Row[5];
$valColor = $Row[6];

$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_POST["menukeyid"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="noindex, nofollow">
            <meta name="googlebot" content="noindex, nofollow">
                <link href="../css/theme.css" rel="stylesheet"/>

                <title><?php echo  $core_name_title ?></title>
                <script language="JavaScript"  type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
                <script language="JavaScript" type="text/javascript">
                    function executeSubmit() {
                        with (document.myForm) {

                            if (isBlank(inputSubject)) {
                                inputSubject.focus();
                                jQuery("#inputSubject").addClass("formInputContantTbAlertY");
                                return false;
                            } else {
                                jQuery("#inputSubject").removeClass("formInputContantTbAlertY");
                            }



                        }

                        updateContactNew('updateGroup.php');

                    }


                    function executeAddEmail() {
                        with (document.myForm) {
                            jQuery("#boxAlertEmail").hide();
                            if (isBlank(inputEmail)) {
                                inputEmail.focus();
                                jQuery("#inputEmail").addClass("formInputContantTbAlertY");
                                return false;
                            } else {
                                jQuery("#inputEmail").removeClass("formInputContantTbAlertY");
                            }

                            if (!isBlank(inputEmail)) {
                                if (!isEmail(inputEmail.value)) {
                                    inputEmail.focus();
                                    jQuery("#inputEmail").addClass("formInputContantTbAlertY");
                                    return false;
                                } else {
                                    jQuery("#inputEmail").removeClass("formInputContantTbAlertY");
                                }
                            }

                        }
                        modInsertEmail('insertEmail.php');

                    }

                    jQuery(document).ready(function () {

                        jQuery('#myForm').keypress(function (e) {
                            if (e.which == 13) {
                                //e.preventDefault();
                                executeSubmit();
                                return false;
                            }
                        });
                    });

                </script>
                </head>

                <body>
                    <form action="?" method="get" name="myForm" id="myForm">
                        <input name="execute" type="hidden" id="execute" value="update" />
                        <input name="masterkey" type="hidden" id="masterkey" value="<?php echo  $_REQUEST['masterkey'] ?>" />
                        <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo  $_REQUEST['menukeyid'] ?>" />
                        <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo  $_REQUEST['inputSearch'] ?>" />
                        <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo  $_REQUEST['module_pageshow'] ?>" />
                        <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo  $_REQUEST['module_pagesize'] ?>" />
                        <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo  $_REQUEST['module_orderby'] ?>" />
                        <input name="inputGh" type="hidden" id="inputGh" value="<?php echo  $_REQUEST['inputGh'] ?>" />
                        <input name="valEditID" type="hidden" id="valEditID" value="<?php echo  $_REQUEST['valEditID'] ?>" />
                        <input name="inputLt" type="hidden" id="inputLt" value="<?php echo  $_REQUEST['inputLt'] ?>" />
                        <input name="valDelFile" type="hidden" id="valDelFile" value="" />
                        <div class="divRightNav">
                            <table width="96%" border="0" cellspacing="0" cellpadding="0"  align="center" >
                                <tr>
                                    <td  class="divRightNavTb" align="left"  id="defTop" ><span class="fontContantTbNav"><a href="<?php echo  $valLinkNav1 ?>" target="_self"><?php echo  $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a  href="javascript:void(0)"  onclick="btnBackPage('group.php')" target="_self"><?php echo  $langMod["meu:group"] ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo  $langMod["txt:titleeditg"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2) { ?>(<?php echo  getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"]) ?>)<?php } ?></span></td>
                                    <td  class="divRightNavTb" align="right">



                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="divRightHead">
                            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center" >
                                <tr>
                                    <td height="77" align="left"><span class="fontHeadRight"><?php echo  $langMod["txt:titleeditg"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2) { ?>(<?php echo  getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"]) ?>)<?php } ?></span></td>
                                    <td align="left">
                                        <table  border="0" cellspacing="0" cellpadding="0" align="right">
                                            <tr>
                                                <td align="right">
                                                    <?php if ($valPermission == "RW") { ?>
                                                        <div  class="btnSave" title="<?php echo  $langTxt["btn:save"] ?>" onclick="executeSubmit();"></div>
                                                    <?php } ?>
                                                    <div  class="btnBack" title="<?php echo  $langTxt["btn:back"] ?>" onclick="btnBackPage('group.php')"></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="divRightMain" >
                            <br />
                            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder "> 
                                <tr >
                                    <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:subjectg"] ?></span><br/>
                                        <span class="formFontTileTxt"><?php echo  $langMod["txt:subjectgDe"] ?></span>    </td>
                                </tr>
                                <tr ><td colspan="7" align="right"  valign="top"   height="15" ></td></tr>
                                <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo  $langMod["tit:subjectg"] ?><span class="fontContantAlert">*</span></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><input name="inputSubject" id="inputSubject" type="text"  class="formInputContantTb" value="<?php echo  $valSubject ?>"/></td>
                                </tr>
                                <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo  $langMod["tit:noteg"] ?></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                                        <textarea name="inputComment"  id="inputComment" cols="20" rows="5" class="formTextareaContantTb"><?php echo  $valTitle ?></textarea>
                                    </td>
                                </tr>
                                
                                 <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo  $langMod["tit:color"] ?><span class="fontContantAlert"></span></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><input name="inputColor" id="inputColor"  value="<?php echo  $valColor ?>" type="text"  class="formInputContantTbShot izzyColor"/></td>
                                </tr>
                                
                                
                            </table>
                            <br />
                            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" > 


                                <tr >
                                    <td colspan="7" align="right"  valign="top" height="20"></td>
                                </tr>
                                <tr >
                                    <td colspan="7" align="right"  valign="middle" class="formEndContantTb"><a href="#defTop" title="<?php echo  $langTxt["btn:gototop"] ?>"><?php echo  $langTxt["btn:gototop"] ?> <img src="../img/btn/top.png"  align="absmiddle"/></a></td>
                                </tr>
                            </table>
                        </div>
                    </form> 
                     <script src="izzyColor.js"></script>
                    <?php include("../lib/disconnect.php"); ?>

                </body>
                </html>
