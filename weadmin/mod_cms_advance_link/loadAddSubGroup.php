<?
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

$myRand = time() . rand(111, 99);
$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_POST["menukeyid"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="noindex, nofollow">
            <meta name="googlebot" content="noindex, nofollow">
                <link href="../css/theme.css" rel="stylesheet"/>

                <title><?= $core_name_title ?></title>
                <script language="JavaScript"  type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
                <script language="JavaScript" type="text/javascript">
                    function executeSubmit() {
                        with (document.myForm) {
                         if (myParentID.value == 0 || myParentID.value == "") {
                            if (inputGroupID.value == 0) {
                                inputGroupID.focus();
                                jQuery("#inputGroupID").addClass("formInputContantTbAlertY");
                                return false;
                            } else {
                                jQuery("#inputGroupID").removeClass("formInputContantTbAlertY");
                            }
                        }

                            if (isBlank(inputSubject)) {
                                inputSubject.focus();
                                jQuery("#inputSubject").addClass("formInputContantTbAlertY");
                                return false;
                            } else {
                                jQuery("#inputSubject").removeClass("formInputContantTbAlertY");
                            }
                        }

                        insertContactNew('insertSubGroup.php');

                    }


                    jQuery(document).ready(function () {

                    jQuery('#myForm').keypress(function (e) {
                        var checkFocusTitle = jQuery("#inputComment").is(":focus");
                            if (e.which == 13) {
                                //e.preventDefault();
                                if(!checkFocusTitle){
                                executeSubmit();
                                return false;
                                }
                            }
                        });
                    });


                </script>
                </head>

                <body>
                    <form action="?" method="get" name="myForm" id="myForm">
                        <input name="execute" type="hidden" id="execute" value="insert" />
                        <input name="masterkey" type="hidden" id="masterkey" value="<?= $_REQUEST['masterkey'] ?>" />
                        <input name="menukeyid" type="hidden" id="menukeyid" value="<?= $_REQUEST['menukeyid'] ?>" />
                        <input name="inputSearch" type="hidden" id="inputSearch" value="<?= $_REQUEST['inputSearch'] ?>" />
                        <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?= $_REQUEST['module_pageshow'] ?>" />
                        <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?= $_REQUEST['module_pagesize'] ?>" />
                        <input name="module_orderby" type="hidden" id="module_orderby" value="<?= $_REQUEST['module_orderby'] ?>" />
                        <input name="inputGh" type="hidden" id="inputGh" value="<?= $_REQUEST['inputGh'] ?>" />
                        <input name="inputLt" type="hidden" id="inputLt" value="<?= $_REQUEST['inputLt'] ?>" />
                        <input name="myParentID" type="hidden" id="myParentID" value="<?=$_REQUEST['myParentID'] ?>" />
                        <div class="divRightNav">
                            <table width="96%" border="0" cellspacing="0" cellpadding="0"  align="center" >
                                <tr>
                                    <td  class="divRightNavTb" align="left"  id="defTop" ><span class="fontContantTbNav"><a href="<?= $valLinkNav1 ?>" target="_self"><?= $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a  href="javascript:void(0)"  onclick="btnBackPage('subgroup.php')" target="_self"><?= $langMod["meu:subgroup"] ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?= $langMod["txt:titleaddsg"] ?> <? if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2) { ?>(<?= $langTxt["lg:thai"] ?>)<? } ?></span></td>
                                    <td  class="divRightNavTb" align="right">



                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="divRightHead">
                            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center" >
                                <tr>
                                    <td height="77" align="left"><span class="fontHeadRight"><?= $langMod["txt:titleaddsg"] ?> <? if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2) { ?>(<?= $langTxt["lg:thai"] ?>)<? } ?></span></td>
                                    <td align="left">
                                        <table  border="0" cellspacing="0" cellpadding="0" align="right">
                                            <tr>
                                                <td align="right">
                                                    <? if ($valPermission == "RW") { ?>
                                                        <div  class="btnSave" title="<?= $langTxt["btn:save"] ?>" onclick="executeSubmit();"></div>
                                                    <? } ?>
                                                    <div  class="btnBack" title="<?= $langTxt["btn:back"] ?>" onclick="btnBackPage('subgroup.php')"></div>
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
                                        <span class="formFontSubjectTxt"><?= $langMod["txt:subjectsg"] ?></span><br/>
                                        <span class="formFontTileTxt"><?= $langMod["txt:subjectsgDe"] ?></span>    </td>
                                </tr>
                                <tr ><td colspan="7" align="right"  valign="top"   height="15" ></td></tr>
                                <?php if ($_REQUEST["myParentID"] <= 0) { ?>
                                <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?= $langMod["tit:selectgn"] ?><span class="fontContantAlert">*</span></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                                        <select name="inputGroupID"  id="inputGroupID"class="formSelectContantTb">
                                            <option value="0"><?= $langMod["tit:selectg"] ?></option>
                                            <?
                                            $sql_group = "SELECT ";
                                            if ($_REQUEST['inputLt'] == "Thai") {
                                                $sql_group .= "  " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subject";
                                            } else {
                                                $sql_group .= " " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subjecten ";
                                            }

                                            $sql_group .= "  FROM " . $mod_tb_root_group . " WHERE  " . $mod_tb_root_group . "_masterkey ='" . $_REQUEST['masterkey'] . "' AND ". $mod_tb_root_group . "_Status != 'Disable'   ORDER BY " . $mod_tb_root_group . "_order DESC ";
                                            
                                            $query_group = wewebQueryDB($coreLanguageSQL, $sql_group);
                                            while ($row_group =wewebFetchArrayDB($coreLanguageSQL, $query_group)) {
                                                $row_groupid = $row_group[0];
                                                $row_groupname = $row_group[1];
                                                ?>
                                                <option value="<?= $row_groupid ?>" <? if ($_REQUEST['inputGh'] == $row_groupid) { ?> selected="selected" <? } ?>><?= $row_groupname ?></option>
                                            <? } ?>
                                        </select></td>
                                </tr>
                            <?php } ?>
                                <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?= $langMod["tit:selectsgn"] ?><span class="fontContantAlert">*</span></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><input name="inputSubject" id="inputSubject" type="text"  class="formInputContantTb"/></td>
                                </tr>
                                <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?= $langMod["tit:noteg"] ?></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                                        <textarea name="inputComment"  id="inputComment" cols="20" rows="5" class="formTextareaContantTb"></textarea>
										<input name="inputType" id="inputType" type="hidden" value="link"  class="formInputContantTb"/>
                                    </td>
                                </tr>

                               <!-- <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?= $langMod["tit:type"] ?></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >

										<input name="inputType" id="inputType" type="hidden" value="link"  class="formInputContantTb"/>


                                    </td>
                                </tr>-->

                            </table>
                            <br />
                            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" >


                                <tr >
                                    <td colspan="7" align="right"  valign="top" height="20"></td>
                                </tr>
                                <tr >
                                    <td colspan="7" align="right"  valign="middle" class="formEndContantTb"><a href="#defTop" title="<?= $langTxt["btn:gototop"] ?>"><?= $langTxt["btn:gototop"] ?> <img src="../img/btn/top.png"  align="absmiddle"/></a></td>
                                </tr>
                            </table>
                        </div>
                    </form>

                    <? include("../lib/disconnect.php"); ?>

                </body>
                </html>