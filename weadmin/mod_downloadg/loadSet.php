<?php
//include("../lib/session.php");
//include("../lib/config.php");
//include("../lib/connect.php");
//include("../lib/function.php");
//include("../lib/checkMember.php");
//include("../core/incLang.php");
//include("incModLang.php");
//include("config.php");

include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");
$valClassNav = 2;
$valNav1 = $langTxt["nav:home2"];
$valLinkNav1 = "../core/index.php";

$sqlCheck = "SELECT " . $mod_tb_root_set . "_id   FROM " . $mod_tb_root_set . " WHERE " . $mod_tb_root_set . "_masterkey='" . $_REQUEST["masterkey"] . "'  ";
$queryCheck = wewebQueryDB($coreLanguageSQL, $sqlCheck);
$countNumCheck = wewebNumRowsDB($coreLanguageSQL, $queryCheck);

 //$queryCheck = $dbConnect->execute($sqlCheck);
 //print_pre($queryCheck);
 //$countNumCheck = $queryCheck->nu

if ($countNumCheck <= 0) {
    $insert = array();
    $insert[$mod_tb_root_set . "_language"] = "'" . $_SESSION[$valSiteManage . 'core_session_language'] . "'";
    $insert[$mod_tb_root_set . "_masterkey"] = "'" . $_REQUEST["masterkey"] . "'";
    $insert[$mod_tb_root_set . "_crebyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root_set . "_creby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root_set . "_lastbyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root_set . "_lastby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root_set . "_lastdate"] = "NOW()";
    $insert[$mod_tb_root_set . "_credate"] = "NOW()";
    $sqlInsert = "INSERT INTO " . $mod_tb_root_set . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
    $queryInsert = wewebQueryDB($coreLanguageSQL, $sqlInsert);
   //$queryInsert = $dbConnect->execute($queryInsert);
}

$sql = "SELECT
" . $mod_tb_root_set . "_id,
" . $mod_tb_root_set . "_masterkey,
" . $mod_tb_root_set . "_language,
" . $mod_tb_root_set . "_subject,
" . $mod_tb_root_set . "_subjecten,
" . $mod_tb_root_set . "_title,
" . $mod_tb_root_set . "_titleen,
" . $mod_tb_root_set . "_credate,
" . $mod_tb_root_set . "_crebyid,
" . $mod_tb_root_set . "_creby,
" . $mod_tb_root_set . "_lastdate,
" . $mod_tb_root_set . "_lastbyid,
" . $mod_tb_root_set . "_lastby,
" . $mod_tb_root_set . "_pic

 FROM " . $mod_tb_root_set . " WHERE " . $mod_tb_root_set . "_masterkey='" . $_REQUEST["masterkey"] . "'  ";
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
$valID = $Row[0];
$valSubject = rechangeQuot($Row[3]);
$valSubjecten = rechangeQuot($Row[4]);

$valTitle = rechangeQuot($Row[5]);
$valTitleEn = rechangeQuot($Row[6]);

$valCredate = DateFormat($Row[7]);
$valCrebyid = $Row[8];
$valCreby = $Row[9];

$valLastdate = DateFormat($Row[10]);
$valLastbyid = $Row[11];
$valLastby = $Row[12];


// $valTitle = $Row[$mod_tb_root_set . "_title"];
// $valTitleEn = $Row[$mod_tb_root_set . "_titleen"];

$valPicName = $Row[13];
$valPic = $mod_path_pictures . "/" . $Row[13];


$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_REQUEST["menukeyid"]);
logs_access('3', 'View');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="noindex, nofollow"/>
        <meta name="googlebot" content="noindex, nofollow"/>
        <link href="../css/theme.css" rel="stylesheet"/>

        <title><?php echo   $core_name_title ?></title>
        <script language="JavaScript"  type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
    </head>

    <body>
        <form action="?" method="get" name="myForm" id="myForm">
            <input name="execute" type="hidden" id="execute" value="update" />
            <input name="masterkey" type="hidden" id="masterkey" value="<?php echo   $_REQUEST['masterkey'] ?>" />
            <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo   $_REQUEST['menukeyid'] ?>" />
            <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo   $_REQUEST['inputSearch'] ?>" />
            <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo   $_REQUEST['module_pageshow'] ?>" />
            <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo   $_REQUEST['module_pagesize'] ?>" />
            <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo   $_REQUEST['module_orderby'] ?>" />
            <input name="inputGh" type="hidden" id="inputGh" value="<?php echo   $_REQUEST['inputGh'] ?>" />
            <input name="valEditID" type="hidden" id="valEditID" value="<?php echo   $_REQUEST['valEditID'] ?>" />
            <?php if ($_REQUEST['viewID'] <= 0) { ?>
                <div class="divRightNav">

                    <table width="96%" border="0" cellspacing="0" cellpadding="0"  align="center" >
                        <tr>
                            <td  class="divRightNavTb" align="left"  id="defTop" ><span class="fontContantTbNav"><a href="<?php echo   $valLinkNav1 ?>" target="_self"><?php echo   $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo   getNameMenu($_REQUEST["menukeyid"]) ?></span></td>
                            <td  class="divRightNavTb" align="right">

                            </td>

                            <td  class="divRightNavTb" align="right">

                        <!-- ######### Start Menu Sub Mod ########## -->
                        
                        <div class="menuSubMod active">
                            <a  href="set.php?masterkey=<?php echo  $_REQUEST['masterkey']?>&menukeyid=<?php echo  $_REQUEST['menukeyid']?>">
                <?php echo  $langTxt["set:content"] ?>
                            </a>
                        </div>
                        <?php  if ($_SESSION['neda_core_session_level'] == "admin") { ?>
                        <div class="menuSubMod">
                            <a  href="group.php?masterkey=<?php echo  $_REQUEST['masterkey']?>&menukeyid=<?php echo  $_REQUEST['menukeyid']?>">
                                <?php echo  $langMod["meu:group"]?>
                            </a>
                        </div>
                        <?php } ?>
                        <div class="menuSubMod">
                            <a  href="index.php?masterkey=<?php echo  $_REQUEST['masterkey']?>&menukeyid=<?php echo  $_REQUEST['menukeyid']?>">
                <?php echo  $langMod["meu:contant"]?>
                            </a>
                        </div>

                        <!-- ######### End Menu Sub Mod ########## -->

                        </td>
                        </tr>
                    </table>

                </div>
            <?php } ?>
            <div class="divRightHead">
                <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center" >
                    <tr>
                        <td height="77" align="left"><span class="fontHeadRight"><?php echo   getNameMenu($_REQUEST["menukeyid"]) ?></span></td>
                        <td align="left">
                            <table  border="0" cellspacing="0" cellpadding="0" align="right">
                                <tr>
                                    <td align="right">
                                        <?php if ($valPermission == "RW" && $_REQUEST['viewID'] <= 0) { ?>

                                            <table  border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td align="center">
                                                        <table  align="center" border="0" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td align="center">
                                                                    <div  class="btnEditView" title="<?php echo   $langTxt["btn:edit"] ?>" onclick="
                                                                                document.myFormHome.valEditID.value =<?php echo   $valID ?>;
                                                                                editContactNew('../<?php echo   $mod_fd_root ?>/editSet.php')"></div>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </td>
                                                </tr>
                                            </table>

                                        <?php } ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="divRightMain" >
                <br />
                <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder">
                    <tr >
                        <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom" style="padding-top:10px;" >
                            <span class="formFontSubjectTxt"><?php echo   $langTxt["set:infomeu"] ?> (<?php echo   $langTxt["lg:thai"] ?>)</span><br/>
                            <span class="formFontTileTxt"><?php echo   $langTxt["set:infomeudes"] ?> (<?php echo   $langTxt["lg:thai"] ?>)</span>                            </td>
                    </tr>

                    <tr >
                        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo   $langTxt["mg:subject"] ?>(<?php echo   $langTxt["lg:thai"] ?>) :<span class="fontContantAlert"></span></td>
                        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo   $valSubject ?></div></td>
                    </tr>

                    <tr >
                        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo   $langTxt["set:description"] ?>(<?php echo   $langTxt["lg:thai"] ?>) :<span class="fontContantAlert"></span></td>
                        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo   $valTitle ?></div></td>
                    </tr>
                </table><br />


                <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder">
                    <tr >
                        <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom" style="padding-top:10px;" >
                            <span class="formFontSubjectTxt"><?php echo   $langTxt["set:infomeu"] ?> (<?php echo   $langTxt["lg:eng"] ?>)</span><br/>
                            <span class="formFontTileTxt"><?php echo   $langTxt["set:infomeudes"] ?> (<?php echo   $langTxt["lg:eng"] ?>)</span>                            </td>
                    </tr>

                    <tr >
                        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo   $langTxt["mg:subject"] ?>(<?php echo   $langTxt["lg:eng"] ?>) :<span class="fontContantAlert"></span></td>
                        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo   $valSubjecten ?></div></td>
                    </tr>

                    <tr >
                        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo   $langTxt["set:description"] ?>(<?php echo   $langTxt["lg:eng"] ?>) :<span class="fontContantAlert"></span></td>
                        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo   $valTitleEn ?></div></td>
                    </tr>
                </table><br />

                <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
    <tr >
    <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom">
    <span class="formFontSubjectTxt"><?php echo  $langMod["txt:pic"]?></span><br/>
    <span class="formFontTileTxt"><?php echo  $langMod["txt:picDe"]?></span>    </td>
    </tr>
    <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView">
    <img src="<?php echo  $valPic?>"  style="float:left;border:#c8c7cc solid 1px; max-width:600px;"  onerror="this.src='<?php echo  "../img/btn/nopic.jpg"?>'"  />
    </div></td>
  </tr>
   <tr style="display:none;">
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo  $modTxtShowPic[0]?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo  $modTxtShowPic[$valPicShow]?></div></td>
  </tr>
  </table>
         <br />

                <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder">
                    <tr >
                        <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom" >
                            <span class="formFontSubjectTxt"><?php echo   $langTxt["us:titleinfo"] ?></span><br/>
                            <span class="formFontTileTxt"><?php echo   $langTxt["us:titleinfoDe"] ?></span>     </td>
                    </tr>
                    <tr >
                        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo   $langTxt["us:credate"] ?>:</td>
                        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                            <div class="formDivView"><?php echo   $valCredate ?></div>         </td>
                    </tr>
                    <tr >
                        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo   $langTxt["us:creby"] ?>:</td>
                        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                            <div class="formDivView">
                                <?php
                                if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                                    echo getUserThai($valCrebyid);
                                } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                                    echo getUserEng($valCrebyid);
                                }
                                ?>
                            </div>         </td>
                    </tr>


                    <tr >
                        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo   $langTxt["us:lastdate"] ?>:</td>
                        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                            <div class="formDivView"><?php echo   $valLastdate ?></div>         </td>
                    </tr>
                    <tr >
                        <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo   $langTxt["us:creby"] ?>:</td>
                        <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                            <div class="formDivView">
                                <?php
                                if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                                    echo getUserThai($valLastbyid);
                                } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                                    echo getUserEng($valLastbyid);
                                }
                                ?>
                            </div>         </td>
                    </tr>



                    <tr >
                        <td colspan="7" align="right"  valign="top" height="20"></td>
                    </tr>
                </table>
                <br />

                <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" >
                    <?php if ($_REQUEST['viewID'] <= 0) { ?>


                        <tr >
                            <td colspan="7" align="right"  valign="middle" class="formEndContantTb"><a href="#defTop" title="<?php echo   $langTxt["btn:gototop"] ?>"><?php echo   $langTxt["btn:gototop"] ?> <img src="../img/btn/top.png"  align="absmiddle"/></a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </form>
        <?php include("../lib/disconnect.php"); ?>

    </body>
</html>
