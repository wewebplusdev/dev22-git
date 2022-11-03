<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("config.php");
include("incModLang.php");
// $langMod = getRreplaceForView($langMod);
$valClassNav    = 2;
$valNav1        = $langTxt["nav:home2"];
$valLinkNav1    = "../core/index.php";
$dataselect     = "";
if($_REQUEST['inputLt'] == "Thai"){
    $dataselect = "
    ".$mod_tb_root.".".$mod_tb_root."_id,
    ".$mod_tb_root.".".$mod_tb_root."_subject,
    ".$mod_tb_root.".".$mod_tb_root."_lastdate,
    ".$mod_tb_root.".".$mod_tb_root."_lastbyid,
    ".$mod_tb_root.".".$mod_tb_root."_status,
    ".$mod_tb_root.".".$mod_tb_root."_title,
    ".$mod_tb_root.".".$mod_tb_root."_credate,
    ".$mod_tb_root.".".$mod_tb_root."_crebyid
    ";
}elseif($_REQUEST['inputLt'] == "Eng"){
    $dataselect = "
    ".$mod_tb_root.".".$mod_tb_root."_id,
    ".$mod_tb_root.".".$mod_tb_root."_subjecten,
    ".$mod_tb_root.".".$mod_tb_root."_lastdate,
    ".$mod_tb_root.".".$mod_tb_root."_lastbyid,
    ".$mod_tb_root.".".$mod_tb_root."_status,
    ".$mod_tb_root.".".$mod_tb_root."_titleen,
    ".$mod_tb_root.".".$mod_tb_root."_credate,
    ".$mod_tb_root.".".$mod_tb_root."_crebyid
    ";
}else{
    $dataselect = "
    ".$mod_tb_root.".".$mod_tb_root."_id,
    ".$mod_tb_root.".".$mod_tb_root."_subjectcn,
    ".$mod_tb_root.".".$mod_tb_root."_lastdate,
    ".$mod_tb_root.".".$mod_tb_root."_lastbyid,
    ".$mod_tb_root.".".$mod_tb_root."_status,
    ".$mod_tb_root.".".$mod_tb_root."_titlecn,
    ".$mod_tb_root.".".$mod_tb_root."_credate,
    ".$mod_tb_root.".".$mod_tb_root."_crebyid
    ";
}
$dataselect .= "
    ,
    ".$mod_tb_root.".".$mod_tb_root."_pic
    ";
$sql    = "SELECT ".$dataselect." FROM ".$mod_tb_root." WHERE 1=1 AND ".$mod_tb_root."_masterkey = '".$_REQUEST['masterkey']."' AND ".$mod_tb_root."_id = '".$_REQUEST['valEditID']."' ";
$Query  = wewebQueryDB($coreLanguageSQL,$sql);
$Row    = wewebFetchArrayDB($coreLanguageSQL,$Query);
$valid          = $Row[0];
$valSubject     = $Row[1];
$valhtml        = $mod_path_html."/".$Row[2];
$valhtmlname    = $Row[2];
// $valPathOurHis  = $mod_path_html . "/" . $Row[2];
// $valhtmlOurHis  = $Row[2];
// $valPathReward  = $mod_path_html . "/" . $Row[3];
// $valhtmlReward  = $Row[3];
// $valPathBod     = $mod_path_html . "/" . $Row[4];
// $valhtmlBod     = $Row[4];
$vallastdate    = DateFormat($Row[2]);
$vallastby      = $Row[3];
$valcredate   = DateFormat($Row[6]);
$valcreby   = $Row[7];
$valstatus      = $Row[4];
if ($valstatus == "Enable") {
    $valstatusclass = "fontContantTbEnable";
} else {
    $valstatusclass = "fontContantTbDisable";
}
$valmetatitle   = $Row[8];
$valdescription = $Row[9];
$valkeywords    = $Row[10];
$valTitle    = $Row[5];
$valPicName=$Row[8];
$valPic=$mod_path_pictures."/".$Row[8];
$valTypec= $Row[13];
$valUrlc = $Row[14];
$valTarget = $Row[15];

$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_REQUEST["menukeyid"]);
logs_access('3', 'View');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <link href="../css/theme.css" rel="stylesheet"/>
    <title><?php echo $core_name_title;?></title>
    <script language="JavaScript"  type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
</head>
<body>
    <form action="?" method="get" name="myForm" id="myForm">
        <input name="execute" type="hidden" id="execute" value="update" />
        <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'];?>"/>
        <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'];?>"/>
        <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'];?>"/>
        <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow'];?>"/>
        <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize'];?>"/>
        <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby'];?>"/>
        <input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
        <input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID'];?>"/>
        <input name="inputHtml" type="hidden" id="inputHtml" value="" />
        <input name="inputHtmlDel" type="hidden" id="inputHtmlDel" value="<?php echo $valhtmlname; ?>" />
        <input name="inputG3" type="hidden" id="inputG3" value="<?php echo $_REQUEST['inputG3'] ?>" />
        <!-- <input name="inputHtmlOurHis" type="hidden" id="inputHtmlOurHis" value=""/>
        <input name="inputHtmlDelOurHis" type="hidden" id="inputHtmlDelOurHis" value="<?php echo $valhtmlOurHis;?>"/>
        <input name="inputHtmlReward" type="hidden" id="inputHtmlReward" value=""/>
        <input name="inputHtmlDelReward" type="hidden" id="inputHtmlDelReward" value="<?php echo $valhtmlReward;?>"/>
        <input name="inputHtmlBod" type="hidden" id="inputHtmlBod" value=""/>
        <input name="inputHtmlDelBod" type="hidden" id="inputHtmlDelBod" value="<?php echo $valhtmlBod;?>"/> -->
        <input name="inputLt" type="hidden" id="inputLt" value="<?php echo $_REQUEST['inputLt'];?>"/>
        <?php if ($_REQUEST['viewID'] <= 0) { ?>
            <div class="divRightNav">
                <table width="96%" border="0" cellspacing="0" cellpadding="0"  align="center" >
                    <tr>
                        <td class="divRightNavTb" align="left" id="defTop" >
                            <span class="fontContantTbNav">
                                <a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a>
                                <img src="../img/btn/nav.png" align="absmiddle" vspace="5" />
                                <a href="javascript:void(0)"  onclick="btnBackPage('index.php')" target="_self">
                                    <?php echo getNameMenu($_REQUEST["menukeyid"])?>
                                </a>
                                <img src="../img/btn/nav.png" align="absmiddle" vspace="5" />
                                <?php echo $langMod["txt:titleview"] ?> <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2) { ?>
                                    (<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"]) ?>)
                                    <?php } ?>
                            </span>
                        </td>
                        <td class="divRightNavTb" align="right">
                        </td>
                    </tr>
                </table>
            </div>
        <?php } ?>
        <div class="divRightHead">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center" >
                <tr>
                    <td height="77" align="left">
                        <span class="fontHeadRight">
                            <?php echo $langMod["txt:titleview"] ?> <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2) { ?>
                                (<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"]) ?>)
                                <?php } ?>
                        </span>
                    </td>
                    <td align="left">
                        <table  border="0" cellspacing="0" cellpadding="0" align="right">
                            <tr>
                                <td align="right">
                                    <?php if ($_REQUEST['viewID'] <= 0) { ?>
                                        <?php if ($valPermission == "RW") { ?>
                                            <div  class="btnEditView" title="<?php echo $langTxt["btn:edit"] ?>" onclick="
                                                document.myFormHome.inputLt.value = '<?php echo $_REQUEST['inputLt'];?>';
                                                document.myFormHome.valEditID.value =<?php echo $valid;?>;
                                                editContactNew('../<?php echo $mod_fd_root ?>/editContant.php')">
                                            </div>
                                        <?php } ?>
                                        <div  class="btnBack" title="<?php echo $langTxt["btn:back"] ?>" onclick="btnBackPage('index.php')"></div>
                                    <?php } ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div class="divRightMain">
            <br/>
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:subject"] ?></span>
                        <br/>
                        <span class="formFontTileTxt"><?php echo $langMod["txt:subjectDe"] ?></span>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["tit:inpName"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valSubject ?></div></td>
                </tr>
                <tr>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["tit:noteg"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valTitle ?></div></td>
                </tr>
            </table>
            <br />
            <!-- <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                    <span class="formFontSubjectTxt"><?php echo  $langMod["txt:pic"] ?></span><br />
                    <span class="formFontTileTxt"><?php echo  $langMod["txt:picDe"] ?></span>
                </td>
                </tr>
                <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><span class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView">
                    <img src="<?php echo  $valPic ?>" style="float:left;border:#c8c7cc solid 1px; max-width:600px;" onerror="this.src='<?php echo  "../img/btn/nopic.jpg" ?>'" />
                    </div>
                </td>
                </tr>
            </table>
            <br /> -->
           <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder">
                <tr>
                    <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo $langTxt["us:titleinfo"] ?></span>
                        <br/>
                        <span class="formFontTileTxt"><?php echo $langTxt["us:titleinfoDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langTxt["us:credate"] ?>:</td>
                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                        <div class="formDivView"><?php echo $valcredate ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langTxt["us:creby"] ?>:</td>
                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                        <div class="formDivView">
                            <?php
                                if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                                    echo getUserThai($valcreby);
                                } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                                    echo getUserEng($valcreby);
                                }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["us:lastdate"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo  $vallastdate ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["us:creby"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                        <?php
                            if($_SESSION[$valSiteManage.'core_session_language']=="Thai"){
                                echo getUserThai($vallastby);
                            }else if($_SESSION[$valSiteManage.'core_session_language']=="Eng"){
                                echo getUserEng($vallastby);
                            }
                        ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langTxt["mg:status"] ?>:</td>
                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                        <div class="formDivView">
                            <?php if ($valStatus == "Enable") { ?>
                                <span class="<?php echo $valstatusclass ?>"><?php echo $valstatus ?></span>
                            <?php } else { ?>
                                <span class="<?php echo $valstatusclass ?>"><?php echo $valstatus ?></span>
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            </table>
            <br/>
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td colspan="7" align="right"  valign="top" height="20"></td>
                </tr>
                <tr>
                    <td colspan="7" align="right"  valign="middle" class="formEndContantTb">
                        <a href="#defTop" title="<?php echo $langTxt["btn:gototop"];?>"><?php echo $langTxt["btn:gototop"];?> <img src="../img/btn/top.png"  align="absmiddle"/></a>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>