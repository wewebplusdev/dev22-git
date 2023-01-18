<?
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

//$myRand = time() . rand(111, 999);
$myRand = randomNameUpdate(2);
$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_POST["menukeyid"]);
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <link href="../css/theme.css" rel="stylesheet" />
    <link href="js/uploadfile.css" rel="stylesheet" />

    <title><?= $core_name_title ?></title>


    <link href="../js/select2/css/select2.css" rel="stylesheet" />
    <script language="JavaScript" type="text/javascript" src="../js/select2/js/select2.js"></script>

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
            if (inputSubgroupID.value == 0) {
                inputSubgroupID.focus();
                jQuery("#inputSubgroupID").addClass("formInputContantTbAlertY");
                return false;
            } else {
                jQuery("#inputSubgroupID").removeClass("formInputContantTbAlertY");
            }

            if (isBlank(inputSubject)) {
                inputSubject.focus();
                jQuery("#inputSubject").addClass("formInputContantTbAlertY");
                return false;
            } else {
                jQuery("#inputSubject").removeClass("formInputContantTbAlertY");
            }

        }

        insertContactNew('insertContant.php');
    }
    </script>
</head>

<body>
    <form action="?" method="get" name="myForm" id="myForm" enctype="multipart/form-data">
        <input name="execute" type="hidden" id="execute" value="insert" />
        <input name="masterkey" type="hidden" id="masterkey" value="<?= $_REQUEST['masterkey'] ?>" />
        <input name="menukeyid" type="hidden" id="menukeyid" value="<?= $_REQUEST['menukeyid'] ?>" />
        <input name="inputSearch" type="hidden" id="inputSearch" value="<?= $_REQUEST['inputSearch'] ?>" />
        <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?= $_REQUEST['module_pageshow'] ?>" />
        <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?= $_REQUEST['module_pagesize'] ?>" />
        <input name="module_orderby" type="hidden" id="module_orderby" value="<?= $_REQUEST['module_orderby'] ?>" />
        <input name="inputGh" type="hidden" id="inputGh" value="<?= $_REQUEST['inputGh'] ?>" />
        <input name="valEditID" type="hidden" id="valEditID" value="<?= $myRand ?>" />
        <input name="valDelFile" type="hidden" id="valDelFile" value="" />
        <input name="valDelAlbum" type="hidden" id="valDelAlbum" value="" />
        <input name="inputHtml" type="hidden" id="inputHtml" value="" />
        <input name="inputHtmlDel" type="hidden" id="inputHtmlDel" value="<?= $valhtmlname ?>" />
        <input name="inputLt" type="hidden" id="inputLt" value="<?= $_REQUEST['inputLt'] ?>" />
        <input name="inputSGh" type="hidden" id="inputSGh" value="<?=$_REQUEST['inputSGh']?>" />
        <div class="divRightNav">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a
                                href="<?= $valLinkNav1 ?>" target="_self"><?= $valNav1 ?></a> <img
                                src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)"
                                onclick="btnBackPage('index.php')"
                                target="_self"><?=$langMod["meu:contant"] //$langMod["tit:inpName"] ?></a> <img
                                src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?= $langMod["txt:titleadd"] ?>
                            <? if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?= $langTxt["lg:thai"] ?>)
                            <? } ?></span></td>
                    <td class="divRightNavTb" align="right">
                    </td>
                </tr>
            </table>
        </div>
        <div class="divRightHead">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
                <tr>
                    <td height="77" align="left"><span class="fontHeadRight"><?= $langMod["txt:titleadd"] ?>
                            <? if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?= $langTxt["lg:thai"] ?>)
                            <? } ?></span></td>
                    <td align="left">
                        <table border="0" cellspacing="0" cellpadding="0" align="right">
                            <tr>
                                <td align="right">
                                    <? if ($valPermission == "RW") { ?>
                                    <div class="btnSave" title="<?= $langTxt["btn:save"] ?>" onclick="executeSubmit();">
                                    </div>
                                    <? } ?>
                                    <div class="btnBack" title="<?= $langTxt["btn:back"] ?>"
                                        onclick="btnBackPage('index.php')"></div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="divRightMain">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder " style="display: none">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?= $langMod["lang:title"] ?></span><br />
                        <span class="formFontTileTxt"><?= $langMod["lang:desciption"] ?></span> </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>

                <tr style="display: show;">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langMod["lang:subject"] ?>
                    </td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">

                        <label>
                            <div class="formDivRadioL"><input name="inputAddlang" id="inputAddlang" value="onlythai"
                                    type="radio" class="formRadioContantTb" checked="checked" /></div>
                            <div class="formDivRadioR"><?= $langMod["lang:onlyth"] ?></div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input name="inputAddlang" id="inputAddlang" value="onlyeng"
                                    type="radio" class="formRadioContantTb" /></div>
                            <div class="formDivRadioR"><?= $langMod["lang:onlyen"] ?></div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input name="inputAddlang" id="inputAddlang" value="alllang"
                                    type="radio" class="formRadioContantTb" /></div>
                            <div class="formDivRadioR"><?= $langMod["lang:all"] ?></div>
                        </label>
                    </td>
                </tr>

            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?= $langMod["txt:subject"] ?></span><br />
                        <span class="formFontTileTxt"><?= $langMod["txt:subjectDe"] ?></span> </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?= $langMod["tit:selectgn"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <select name="inputGroupID" id="inputGroupID" class="formSelectContantTb"
                            onchange="openSelectSub('openSelectSub.php')">
                            <!--onchange="openSelectSub('openSelectSub.php')"-->
                            <option value="0"><?= $langMod["tit:selectg"] ?></option>
                            <?
                                            $sql_group = "SELECT ";
                                            if ($_REQUEST['inputLt'] == "Thai") {
                                                $sql_group .= "  " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subject";
                                            } else if ($_REQUEST['inputLt'] == "Eng") {
                                                $sql_group .= "  " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subject";
                                            } else {
                                                $sql_group .= " " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subjecten ";
                                            }

                                            $sql_group .= "  FROM " . $mod_tb_root_group . " WHERE  ".$mod_tb_root_group."_status !='Disable' AND " . $mod_tb_root_group . "_masterkey ='" . $_REQUEST['masterkey'] . "  '   ORDER BY " . $mod_tb_root_group . "_order DESC ";
                                            $query_group = wewebQueryDB($coreLanguageSQL, $sql_group);
                                            while ($row_group =wewebFetchArrayDB($coreLanguageSQL, $query_group)) {
                                                $row_groupid = $row_group[0];
                                                $row_groupname = $row_group[1];
                                                ?>
                            <option value="<?= $row_groupid ?>" <? if ($_REQUEST['inputGh']==$row_groupid) { ?>
                                selected="selected"
                                <? } ?>><?= $row_groupname ?></option>
                            <? } ?>
                        </select></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?= $langMod["tit:selectsgn"] ?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb" id="boxSubSelect">
                        <select name="inputSubgroupID" id="inputSubgroupID" class="formSelectContantTb"
                        onchange="openSelectSub2('openSelectSub2.php')">
                        >
                            <option value="0"><?= $langMod["tit:selectsg"] ?></option>
                            <?
                                            $sql_group = "SELECT ";
                                            if ($_REQUEST['inputLt'] == "Thai") {
                                                $sql_group .= "  " . $mod_tb_root_sub_group . "_id," . $mod_tb_root_sub_group . "_subject";
                                            }else if ($_REQUEST['inputLt'] == "Eng") {
                                                $sql_group .= "  " . $mod_tb_root_sub_group . "_id," . $mod_tb_root_sub_group . "_subjecten";
                                            } else {
                                                $sql_group .= " " . $mod_tb_root_sub_group . "_id," . $mod_tb_root_sub_group . "_subjectcn ";
                                            }
                                            $sql_group .= "  FROM " . $mod_tb_root_sub_group . " WHERE  ".$mod_tb_root_sub_group."_status !='Disable' ";
                                            $sql_group .= " AND " . $mod_tb_root_sub_group . "_masterkey ='" . $_REQUEST['masterkey'] . "'";
                                            $sql_group .= " AND ".$mod_tb_root_sub_group."_gid ='".$_REQUEST['inputGh']."' 
                                            ORDER BY " . $mod_tb_root_sub_group . "_order DESC ";
                                            
                                            $query_group = wewebQueryDB($coreLanguageSQL, $sql_group);
                                            while ($row_group =wewebFetchArrayDB($coreLanguageSQL, $query_group)) {
                                                $row_groupid = $row_group[0];
                                                $row_groupname = $row_group[1];
                                                ?>
                            <option value="<?= $row_groupid ?>" <? if ($_REQUEST['inputSGh']==$row_groupid) { ?>
                                selected="selected"
                                <? } ?>><?= $row_groupname ?></option>
                            <? } ?>
                        </select></td>
                </tr>

                <tr id="boxSSubSelect" style="display:none">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?= $langMod["tit:selectsgn"] ?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb" id="boxSSubGroup" >
                        <select name="inputSSubgroupID" id="inputSSubgroupID" class="formSelectContantTb">
                            <option value="0"><?= $langMod["tit:selectsg"] ?></option>
                            <?
                                            $sql_group = "SELECT ";
                                            if ($_REQUEST['inputLt'] == "Thai") {
                                                $sql_group .= "  " . $mod_tb_root_sub_group . "_id," . $mod_tb_root_sub_group . "_subject";
                                            }else if ($_REQUEST['inputLt'] == "Eng") {
                                                $sql_group .= "  " . $mod_tb_root_sub_group . "_id," . $mod_tb_root_sub_group . "_subjecten";
                                            } else {
                                                $sql_group .= " " . $mod_tb_root_sub_group . "_id," . $mod_tb_root_sub_group . "_subjectcn ";
                                            }
                                            $sql_group .= "  FROM " . $mod_tb_root_sub_group . " WHERE  ".$mod_tb_root_sub_group."_status !='Disable' ";
                                            $sql_group .= " AND " . $mod_tb_root_sub_group . "_masterkey ='" . $_REQUEST['masterkey'] . "'";
                                            $sql_group .= " AND ".$mod_tb_root_sub_group."_parentid ='".$_REQUEST['inputSGh']."' 
                                            ORDER BY " . $mod_tb_root_sub_group . "_order DESC ";
                                            
                                            $query_group = wewebQueryDB($coreLanguageSQL, $sql_group);
                                            while ($row_group =wewebFetchArrayDB($coreLanguageSQL, $query_group)) {
                                                $row_groupid = $row_group[0];
                                                $row_groupname = $row_group[1];
                                                ?>
                            <option value="<?= $row_groupid ?>" <? if ($_REQUEST['inputSGh']==$row_groupid) { ?>
                                selected="selected"
                                <? } ?>><?= $row_groupname ?></option>
                            <? } ?>
                        </select></td>
                </tr>
               
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?= $langMod["tit:inpName"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input
                            name="inputSubject" id="inputSubject" type="text" class="formInputContantTb" /></td>
                </tr>
                <tr >
                <td align="right"  valign="top"  class="formLeftContantTb" ><?= $langMod["tit:title"] ?><span class="fontContantAlert">*</span></td>
                <td colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                    <textarea name="inputDescription" id="inputDescription" cols="45" rows="5" class="formTextareaContantTb"></textarea>     </td>
            </tr>

            <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">หัวข้อย่อย</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputSubtype" id="inputSubtype" value="0" checked/>
                            </div>
                            <div class="formDivRadioR">ไม่มี</div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputSubtype" id="inputSubtype" value="1" />
                            </div>
                            <div class="formDivRadioR">มี</div>
                        </label>
                    </td>
                </tr>
            </table>
        

            <br>

            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder " id="subTitle0">
            
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?= $langMod["txt:attfile"] ?></span><br />
                        <span class="formFontTileTxt"><?=$langMod["txt:attfileDe"]?></span> </td>
                </tr>
                <tr >
                    <td colspan="7" align="right"  valign="top"   height="15" ></td>
                </tr>
                <tr >
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?= $langMod["file:type"] ?></td>

                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType" id="inputType"   value="file" checked="checked" onClick="document.getElementById('row_link').style.display='none';document.getElementById('row_comment').style.display='';document.getElementById('row_file').style.display='';document.getElementById('row_pic').style.display='none';document.getElementById('row_facebook').style.display='none';document.getElementById('row_gmail').style.display='none';document.getElementById('row_youtube').style.display='none';document.getElementById('row_line').style.display='none';document.getElementById('row_ig').style.display='none';document.getElementById('row_twitter').style.display='none';"/></div>
                            <div class="formDivRadioR"><?=$arrayType[0]?></div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType" id="inputType"  value="url"  onClick="document.getElementById('row_link').style.display='';document.getElementById('row_comment').style.display='none';document.getElementById('row_file').style.display='none';document.getElementById('row_pic').style.display='none';document.getElementById('row_facebook').style.display='none';document.getElementById('row_gmail').style.display='none';document.getElementById('row_youtube').style.display='none';document.getElementById('row_line').style.display='none';document.getElementById('row_ig').style.display='none';document.getElementById('row_twitter').style.display='none';"/></div>
                            <div class="formDivRadioR"><?=$arrayType[1]?></div>
                        </label>

                        <!-- <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType" id="inputType"  value="pic"  onClick="document.getElementById('row_link').style.display='none';document.getElementById('row_comment').style.display='none';document.getElementById('row_file').style.display='none';document.getElementById('row_pic').style.display='';document.getElementById('row_facebook').style.display='none';document.getElementById('row_gmail').style.display='none';document.getElementById('row_youtube').style.display='none';document.getElementById('row_line').style.display='none';"/></div>
                            <div class="formDivRadioR">รูปภาพ</div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType" id="inputType"  value="social"  onClick="document.getElementById('row_link').style.display='none';document.getElementById('row_comment').style.display='none';document.getElementById('row_file').style.display='none';document.getElementById('row_pic').style.display='none';document.getElementById('row_facebook').style.display='';document.getElementById('row_gmail').style.display='';document.getElementById('row_youtube').style.display='';document.getElementById('row_line').style.display='';document.getElementById('row_ig').style.display='';document.getElementById('row_twitter').style.display='';"/></div>
                            <div class="formDivRadioR">Social Network</div>
                        </label> -->
                    </td>
                </tr>

                <tr id="row_facebook" style="display:none;">
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Facebook</td>
                    <td width="82%"> <textarea name="inputfacebook" id="inputfacebook" class="formTextareaContantTb">http://</textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_gmail" style="display:none;">
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Email</td>
                    <td width="82%"> <textarea name="inputemail" id="inputemail" class="formTextareaContantTb">http://</textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_line" style="display:none;">
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Line</td>
                    <td width="82%"> <textarea name="inputline" id="inputline" class="formTextareaContantTb">http://</textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_youtube" style="display:none;">
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Youtube</td>
                    <td width="82%"> <textarea name="inputyoutube" id="inputyoutube" class="formTextareaContantTb">http://</textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_ig" style="display:none;">
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Instagram</td>
                    <td width="82%"> <textarea name="inputig" id="inputig" class="formTextareaContantTb">http://</textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_twitter" style="display:none;">
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Twitter</td>
                    <td width="82%"> <textarea name="inputtwitter" id="inputtwitter" class="formTextareaContantTb">http://</textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                
                
                <tr id="row_link" style="display:none;">
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?=$langMod["inp:link"]?>  </td>
                    <td width="82%"> <textarea name="inputurl" id="inputurl" class="formTextareaContantTb">http://</textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>


                <tr id="row_pic" style="display:none;">
                        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?=$langMod["inp:album"]?></td>
                        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                        <div class="file-input-wrapper">
                        <button class="btn-file-input"><?=$langTxt["us:inputpicselect"]?></button>
                        <input type="file" name="fileToUpload" id="fileToUpload" onchange="ajaxFileUpload();" />
                        </div>

                        <span class="formFontNoteTxt"><?=$langMod["inp:notepic"]?></span>
                        <div class="clearAll"></div>
                        <div id="boxPicNew" class="formFontTileTxt">
                        <input type="hidden" name="picname" id="picname" />
                        </div></td>
                </tr> 
               
                <tr id="row_file">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?=$langMod["inp:uploadfile"]?>
                    </td>
                    <td width="82%">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input"><?=$langTxt["us:inputpicselect"]?></button>
                            <input type="file" name="inputFileUpload" id="inputFileUpload"
                                onchange="ajaxFileUploadDoc();" />
                        </div>
                    <td>
                </tr>
                <tr id="row_comment">
                    <td width="18%" align="right"> </td>
                    <td width="82%" valign="top"><span class="formFontNoteTxt"><?=$txt_mod["edit:vdonote"]?></span>
                        <div class="clearAll"></div>
                        <div id="boxFileNew" class="formFontTileTxt">
                            <input name="inputFileName" id="inputFileName" type="hidden" class="formInputContantTb" />
                        </div>
                    </td>
                </tr>
            </table>


            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder " id="subTitle1" style="display:none">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?= $langMod["txt:attfile"] ?></span><br />
                        <span class="formFontTileTxt"><?=$langMod["txt:attfileDe"]?></span> </td>                       
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>
                <tr >
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?= $langMod["file:type"] ?></td>

                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType_sub" id="inputType_sub" checked   value="file" onClick="document.getElementById('row_link_comment').style.display='none';document.getElementById('row_link_sub').style.display='none';document.getElementById('row_comment_sub').style.display='';document.getElementById('row_file_sub').style.display='';"/></div>
                            <div class="formDivRadioR"><?=$arrayType[0]?></div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType_sub" id="inputType_sub"  value="url"  onClick="document.getElementById('row_link_comment').style.display='';document.getElementById('row_link_sub').style.display='';document.getElementById('row_comment_sub').style.display='none';document.getElementById('row_file_sub').style.display='none';"/></div>
                            <div class="formDivRadioR"><?=$arrayType[1]?></div>
                        </label>

                        <!-- <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType" id="inputType"  value="pic"  onClick="document.getElementById('row_link').style.display='none';document.getElementById('row_comment').style.display='none';document.getElementById('row_file').style.display='none';document.getElementById('row_pic').style.display='';document.getElementById('row_facebook').style.display='none';document.getElementById('row_gmail').style.display='none';document.getElementById('row_youtube').style.display='none';document.getElementById('row_line').style.display='none';"/></div>
                            <div class="formDivRadioR">รูปภาพ</div>
                        </label> -->
                        <!-- <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType" id="inputType"  value="social"  onClick="document.getElementById('row_link').style.display='none';document.getElementById('row_comment').style.display='none';document.getElementById('row_file').style.display='none';document.getElementById('row_pic').style.display='none';document.getElementById('row_facebook').style.display='';document.getElementById('row_gmail').style.display='';document.getElementById('row_youtube').style.display='';document.getElementById('row_line').style.display='';"/></div>
                            <div class="formDivRadioR">Social Network</div>
                        </label> -->
                    </td>
                </tr>

                <tr id="row_file_title">
                    <td width="20%" align="right" valign="top" class="formLeftContantTb">รหัสหัวข้อ</td>
                    <td width="70%">
                    <input width="10%" name="inputCode" id="inputCode" type="text" class="formInputContantTb"/>
                    </td>
                    <td width="10%" align="right" valign="top" class="formLeftContantTb">
                        <div  class="btnAdd" id="btnTitle"  style="width: 35px;" title="<?=$langTxt["btn:add"]?>" onclick="addTitle();"></div>
                    </td>
                </tr>
                <tr id="row_file_title">
                    <td width="20%" align="right" valign="top" class="formLeftContantTb">ชื่อหัวข้อ</td>
                    <td width="70%">
                    <input width="10%" name="inputName" id="inputName" type="text" class="formInputContantTb"/>
                    </td>
                </tr>
                <tr id="row_file_title">
                    <td width="20%" align="right" valign="top" class="formLeftContantTb">รายละเอียด</td>
                    <td width="70%">
                    <input width="10%" name="inputTitle" id="inputTitle" type="text" class="formInputContantTb"/>
                    </td>
                </tr>

                <tr id="row_file_sub">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?=$langMod["inp:uploadfile"]?>
                    </td>
                    <td width="82%">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input" id="showFileName"><?=$langTxt["us:inputpicselect"]?></button>
                            <input type="file" name="inputFileUploadTitle" id="inputFileUploadTitle"
                                onchange="ajaxFileUploadDocTitle();" />
                        </div>
                    <td>
                </tr>
                
                <tr id="row_comment_sub">
                    <td width="18%" align="right"> </td>
                    <td width="82%" valign="top"><span class="formFontNoteTxt"><?=$txt_mod["edit:vdonote"]?></span>
                        <div class="clearAll"></div>
                        <div id="boxFileNewTitle" class="formFontTileTxt">
                            <input name="inputFileNameTitle" id="inputFileNameTitle" type="hidden" class="formInputContantTb" />
                        </div>
                    </td>
                </tr>

                <tr id="row_link_sub" style="display:none;">
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?=$langMod["inp:link"]?>  </td>
                    <td width="82%"> <textarea name="inputurl1" id="inputurl1" class="formTextareaContantTb">http://</textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_link_comment" style="display:none;" >
                    <td width="18%" align="right"> </td>
                    <td width="82%" valign="top"><span class="formFontNoteTxt"></span>

                        <div id="boxFileNewTitleSub" class="formFontTileTxt">
                            <input name="inputFileNameTitleSub" id="inputFileNameTitleSub" type="hidden" class="formInputContantTb" />
                        </div>
                    </td>
                </tr>

            </table>

            <br>



            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td colspan="7" align="right" valign="top" height="20"></td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="middle" class="formEndContantTb"><a href="#defTop"
                            title="<?= $langTxt["btn:gototop"] ?>"><?= $langTxt["btn:gototop"] ?> <img
                                src="../img/btn/top.png" align="absmiddle" /></a></td>
                </tr>
            </table>
        </div>
    </form>
    <script type="text/javascript" src="../js/ajaxfileupload.js"></script>
    <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
    <script type="text/javascript" language="javascript">

    $(document).ready(function () {
        var valueType = $('input[type=radio][name=inputSubtype]:checked').val();
        
        if (valueType == 0) {
            $("#subTitle1").hide();
        }else{
            $("#subTitle0").hide();
        }
    });

    $('input[type=radio][name=inputSubtype]').change(function() {
       
        if (this.value == 0) {   
            $("#subTitle1").hide();         
            $("#subTitle0").show();         
        }else{           
            $("#subTitle0").hide();
            $("#subTitle1").show();
        }        
    });

    function delFileUploadTitle(fileAc) {

        jQuery.blockUI({
            message: jQuery('#tallContent'),
            css: {border: 'none', padding: '35px', backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'
            }
        });


        var TYPE = "POST";
        var URL = fileAc;

        var dataSet = jQuery("#myForm").serialize();

        jQuery.ajax({type: TYPE, url: URL, data: dataSet,
            success: function (html) {

                jQuery("#boxFileNewTitle").show();
                jQuery("#boxFileNewTitle").html(html);
                setTimeout(jQuery.unblockUI, 200);

            }
        });
    }
    function delFileUploadLinkTitle(fileAc) {

        jQuery.blockUI({
            message: jQuery('#tallContent'),
            css: {border: 'none', padding: '35px', backgroundColor: '#000', '-webkit-border-radius': '10px', '-moz-border-radius': '10px', opacity: .9, color: '#fff'
            }
        });


        var TYPE = "POST";
        var URL = fileAc;

        var dataSet = jQuery("#myForm").serialize();

        jQuery.ajax({type: TYPE, url: URL, data: dataSet,
            success: function (html) {

                jQuery("#boxFileNewTitleSub").show();
                jQuery("#boxFileNewTitleSub").html(html);
                setTimeout(jQuery.unblockUI, 200);

            }
        });
    }
    

    function ajaxFileUploadDoc() {

        var valuefilename = jQuery("input#inputFileName").val();
        var valueType = $('input[name=inputSubtype]:checked').val();
        var valueTitle = $('#inputTitle').val();

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
            url: 'loadInsertFile.php?myID=<?=$myRand?>&masterkey=<?=$_REQUEST['masterkey']?>&langt=<?=$_REQUEST['inputLt']?>&nametodoc=' + valuefilename + '&menuid=<?=$_REQUEST['menukeyid']?>' + '&valueType='+valueType + '&valueTitle='+valueTitle,
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

    function addTitle(){
        
        var valuefilename = jQuery("input#inputFileNameTitle").val();

        var valueType = $('input[name=inputSubtype]:checked').val();

        var valueTypeSub = $('input[name=inputType_sub]:checked').val();

        var valueTitle = $('#inputTitle').val();
        var valueCode = $('#inputCode').val();
        var valueName = $('#inputName').val();
        var valueUrl = $('#inputurl1').val();
  
        with(document.myForm) {
            if (isBlank(inputTitle)) {
                inputTitle.focus();
                jQuery("#inputTitle1").addClass("formInputContantTbAlertY");
                return false;
            } else {
                jQuery("#inputTitle1").removeClass("formInputContantTbAlertY");
            }
        }

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

        if (valueTypeSub == 'url') {
            
            jQuery.ajaxFileUpload({
            url: 'loadInsertFileTitle.php?myID=<?=$myRand?>&masterkey=<?=$_REQUEST['masterkey']?>&langt=<?=$_REQUEST['inputLt']?>&nametodoc=' + valuefilename + '&menuid=<?=$_REQUEST['menukeyid']?>' + '&valueType='+valueType + '&valueTitle='+valueTitle+ '&valueCode='+valueCode+ '&valueName='+valueName+ '&valueTypeSub='+valueTypeSub,
            dataType: 'json',
            data: {'valueUrl' : valueUrl},
            success: function(data, status) {            
                if (typeof(data.error) != 'undefined') {
                    if (data.error != '') {
                        alert(data.error);
                    } else {
                        $("#inputTitle").val('');
                        $('#inputCode').val('');
                        $('#inputName').val('');
                        $("#inputurl1").val('http://');
                        jQuery("#boxFileNewTitleSub").show();
                        jQuery("#boxFileNewTitleSub").html(data.msg);
                        document.myForm.inputFileName.value = "";
                        setTimeout(jQuery.unblockUI, 200);
                    }

                }
            },
            error: function(data, status, e) {
                alert(e);
            }
        })
        }else{
            jQuery.ajaxFileUpload({
                url: 'loadInsertFileTitle.php?myID=<?=$myRand?>&masterkey=<?=$_REQUEST['masterkey']?>&langt=<?=$_REQUEST['inputLt']?>&nametodoc=' + valuefilename + '&menuid=<?=$_REQUEST['menukeyid']?>' + '&valueType='+valueType + '&valueTitle='+valueTitle+ '&valueCode='+valueCode+ '&valueName='+valueName+ '&valueTypeSub='+valueTypeSub,
                secureuri: true,
                fileElementId: 'inputFileUploadTitle',
                dataType: 'json',
                success: function(data, status) {
                    if (typeof(data.error) != 'undefined') {

                        if (data.error != '') {
                            alert(data.error);
                        } else {

                            $("#showFileName").text('<?=$langTxt["us:inputpicselect"]?>');
                            $("#inputTitle").val('');
                            $('#inputCode').val('');
                            $('#inputName').val('');
                            jQuery("#boxFileNewTitle").show();
                            jQuery("#boxFileNewTitle").html(data.msg);
                            document.myForm.inputFileName.value = "";
                            setTimeout(jQuery.unblockUI, 200);
                        }

                    }
                },
                error: function(data, status, e) {
                    alert(e);
                }
            })
        }
       

        
            
    }


    function ajaxFileUploadDocTitle() {

    var valuefilename = jQuery("input#inputFileNameTitle").val();
    var valueType = $('input[name=inputSubtype]:checked').val();
    var valueTitle = $('#inputTitle').val();
    var valueTypeSub = $('input[name=inputType_sub]:checked').val();

   
    with(document.myForm) {
        if (isBlank(inputTitle)) {
            inputTitle.focus();
            jQuery("#inputTitle").addClass("formInputContantTbAlertY");
            return false;
        } else {
            jQuery("#inputTitle").removeClass("formInputContantTbAlertY");
        }
    }

    // var valuefile = jQuery("input#inputFileUploadTitle").val();
    var valuefile = $('input#inputFileUploadTitle').val().replace(/C:\\fakepath\\/i, '');
    $("#showFileName").text(valuefile);

    return false;

}

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
            url: 'loadInsertPic.php?myID=<?=$myRand?>&masterkey=<?=$_REQUEST['masterkey']?>&langt=<?=$_REQUEST['inputLt']?>&delpicname=' + valuepicname + '&menuid=<?=$_REQUEST['menukeyid']?>',
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
    </script>




    <? if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") { ?>
    <script language="JavaScript" type="text/javascript" src="../js/datepickerThai.js"></script>
    <? } else { ?>
    <script language="JavaScript" type="text/javascript" src="../js/datepickerEng.js"></script>
    <? } ?>

    <? include("../lib/disconnect.php"); ?>

</body>

</html>