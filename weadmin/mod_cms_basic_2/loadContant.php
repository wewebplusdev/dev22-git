<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'http://localhost:8080/th/api/update-chat-facebook',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'GET',
//   CURLOPT_SSL_VERIFYPEER => FALSE,
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// print_pre($response);


$valClassNav = 2;
$valNav1 = $langTxt["nav:home2"];
$valLinkNav1 = "../core/index.php";

$sqlCheck = "SELECT " . $mod_tb_root . "_id   FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_masterkey='" . $_REQUEST["masterkey"] . "'  ";
$queryCheck = wewebQueryDB($coreLanguageSQL, $sqlCheck);
$countNumCheck = wewebNumRowsDB($coreLanguageSQL, $queryCheck);
if ($countNumCheck <= 0) {

    $insert = array();
    $insert[$mod_tb_root . "_language"] = "'" . $_SESSION[$valSiteManage . 'core_session_language'] . "'";
    $insert[$mod_tb_root . "_masterkey"] = "'" . $_REQUEST["masterkey"] . "'";
    $insert[$mod_tb_root . "_crebyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root . "_creby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root . "_lastbyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root . "_lastby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root . "_lastdate"] = "" . wewebNow($coreLanguageSQL) . "";
    $insert[$mod_tb_root . "_credate"] = "" . wewebNow($coreLanguageSQL) . "";
    $insert[$mod_tb_root . "_status"] = "'Disable'";
    $sqlInsert = "INSERT INTO " . $mod_tb_root . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";

    $queryInsert = wewebQueryDB($coreLanguageSQL, $sqlInsert);
}



$sql = "SELECT
" . $mod_tb_root . "_id ,
" . $mod_tb_root . "_htmlfilename,
" . $mod_tb_root . "_credate ,
" . $mod_tb_root . "_crebyid,
" . $mod_tb_root . "_status,
 " . $mod_tb_root . "_metatitle  	 	 ,
  " . $mod_tb_root . "_description  	 	 ,
  " . $mod_tb_root . "_keywords,
  " . $mod_tb_root . "_lastdate,
  " . $mod_tb_root . "_htmlfilenameen ,
  " . $mod_tb_root . "_metatitleen  	 	 ,
  " . $mod_tb_root . "_descriptionen  	 	 ,
  " . $mod_tb_root . "_keywordsen	 ,
  " . $mod_tb_root . "_lastbyid ,
  " . $mod_tb_root . "_title ,
  " . $mod_tb_root . "_titleen,
  " . $mod_tb_root . "_sdate,
  " . $mod_tb_root . "_edate

FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_masterkey='" . $_REQUEST["masterkey"] . "'  ";

$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
$valID = $Row[0];
$valHtml = $mod_path_html . "/" . $Row[1];
// print_pre($valHtml);
$valCredate = DateFormat($Row[2]);
$valCreby = $Row[3];
$valStatus = $Row[4];
if ($valStatus == "Enable") {
    $valStatusClass = "fontContantTbEnable";
} else {
    $valStatusClass = "fontContantTbDisable";
}

$valMetatitle = rechangeQuot($Row[5]);
$valDescription = rechangeQuot($Row[6]);
$valKeywords = rechangeQuot($Row[7]);
$valLastdate = DateFormat($Row[8]);

$valHtmlEng = $mod_path_html . "/" . $Row[9];
// $valMetatitleEng = rechangeQuot($Row[10]);
// $valDescriptionEng = rechangeQuot($Row[11]);
// $valKeywordsEng = rechangeQuot($Row[12]);
$valLastby = $Row[13];
$valTitle = rechangeQuot($Row[14]);

// $valTitle = $mod_path_html . "/" . $Row[14];
// $valTitleEng = $mod_path_html . "/" . $Row[15];
if ($Row[16] == "0000-00-00 00:00:00") {
    $valSdate = "-";
  } else {
    $valSdate = DateFormatReal($Row[16]);
  }
  if ($Row[17] == "0000-00-00 00:00:00") {
    $valEdate = "-";
  } else {
    $valEdate = DateFormatReal($Row[17]);
  }
$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_REQUEST["menukeyid"]);

logs_access('3', 'View');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <link href="../css/theme.css" rel="stylesheet" />

    <title><?php echo  $core_name_title ?></title>
    <script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
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
        <?php if ($_REQUEST['viewID'] <= 0) { ?>
            <div class="divRightNav">
                <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo  $valLinkNav1 ?>" target="_self"><?php echo  $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo  getNameMenu($_REQUEST["menukeyid"]) ?></span></td>
                        <td class="divRightNavTb" align="right">



                        </td>
                    </tr>
                </table>
            </div>
        <?php } ?>
        <div class="divRightHead">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
                <tr>
                    <td height="77" align="left"><span class="fontHeadRight"><?php echo  getNameMenu($_REQUEST["menukeyid"]) ?></span></td>
                    <td align="left">
                        <table border="0" cellspacing="0" cellpadding="0" align="right">
                            <tr>
                                <td align="right">
                                    <?php if ($valPermission == "RW" && $_REQUEST['viewID'] <= 0) { ?>
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center">
                                                    <table align="center" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td align="center">
                                                                <div class="btnEditView" title="<?php echo  $langTxt["btn:edit"] ?>" onclick="
                                                                                        document.myFormHome.inputLt.value = 'Thai';
                                                                                        document.myFormHome.valEditID.value =<?php echo  $valID ?>;
                                                                                        editContactNew('../<?php echo  $mod_fd_root ?>/editContant.php')"></div>
                                                            </td>
                                                        </tr>
                                                        <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 && false) { ?>
                                                            <tr>
                                                                <td align="right" style="padding-right:13px;"><span class="fontContantTbManage">(<?php echo  $langTxt["lg:thai"] ?>)</span></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </table>

                                                </td>
                                                <?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 && false) { ?>

                                                    <td align="center">
                                                        <table align="center" border="0" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td align="center">
                                                                    <div class="btnEditView" title="<?php echo  $langTxt["btn:edit"] ?>" onclick="
                                                                                            document.myFormHome.inputLt.value = 'Eng';
                                                                                            document.myFormHome.valEditID.value =<?php echo  $valID ?>;
                                                                                            editContactNew('../<?php echo  $mod_fd_root ?>/editContant.php')"></div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right" style="padding-right:13px;"><span class="fontContantTbManage">(<?php echo  $langTxt["lg:eng"] ?>)</span></td>
                                                            </tr>

                                                        </table>
                                                    </td>
                                                <?php } ?>
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
        <div class="divRightMain">
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">

                <tr>

                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:title"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["txt:titleDe"] ?></span>
                    </td>

                </tr>

                <tr>

                    <td colspan="7" align="right" valign="top" height="15"></td>

                </tr>

                <tr>

                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["txt:code"] ?> :<span class="fontContantAlert"></span></td>

                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">

                        <div class="formDivView"><?php if ($valTitle != '') {
                                                        echo nl2br($valTitle);
                                                    } else {
                                                        echo '-';
                                                    }; ?></div>

                    </td>

                </tr>
            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:date"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo $langMod["txt:dateDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:sdate"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valSdate ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:edate"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valEdate ?></div>
                    </td>
                </tr>


            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo  $langTxt["us:titleinfo"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langTxt["us:titleinfoDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["us:credate"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo  $valCredate ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["us:creby"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?php
                            if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                                echo getUserThai($valCreby);
                            } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                                echo getUserEng($valCreby);
                            } else {
                                echo getUserThai($valCreby);
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["us:lastdate"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo  $valLastdate ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["us:creby"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?php
                            if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                                echo getUserThai($valLastby);
                            } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                                echo getUserEng($valLastby);
                            } else {
                                echo getUserThai($valLastby);
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:status"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?php if ($valPermission == "RW") { ?>
                                <div id="load_status<?php echo  $valID ?>">
                                    <?php if ($valStatus == "Enable") { ?>

                                        <a href="javascript:void(0)" onclick="changeStatus('load_waiting<?php echo  $valID ?>', '<?php echo  $mod_tb_root ?>', '<?php echo  $valStatus ?>', '<?php echo  $valID ?>', 'load_status<?php echo  $valID ?>', '../<?php echo  $mod_fd_root ?>/statusMg.php')"><span class="<?php echo  $valStatusClass ?>"><?php echo  $valStatus ?></span></a>

                                    <?php } else { ?>

                                        <a href="javascript:void(0)" onclick="changeStatus('load_waiting<?php echo  $valID ?>', '<?php echo  $mod_tb_root ?>', '<?php echo  $valStatus ?>', '<?php echo  $valID ?>', 'load_status<?php echo  $valID ?>', '../<?php echo  $mod_fd_root ?>/statusMg.php')"> <span class="<?php echo  $valStatusClass ?>"><?php echo  $valStatus ?></span> </a>

                                    <?php } ?>

                                    <img src="../img/loader/ajax-loaderstatus.gif" alt="waiting" style="display:none;" id="load_waiting<?php echo  $valID ?>" />
                                </div>
                            <?php } else { ?>
                                <?php if ($valStatus == "Enable") { ?>
                                    <span class="<?php echo  $valStatusClass ?>"><?php echo  $valStatus ?></span>
                                <?php } else { ?>
                                    <span class="<?php echo  $valStatusClass ?>"><?php echo  $valStatus ?></span>
                                <?php } ?>

                            <?php } ?>
                        </div>
                    </td>
                </tr>
            </table>
            <?php if ($_REQUEST['viewID'] <= 0) { ?>
                <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">

                    <tr>
                        <td colspan="7" align="right" valign="top" height="20"></td>
                    </tr>
                    <tr>
                        <td colspan="7" align="right" valign="middle" class="formEndContantTb"><a href="#defTop" title="<?php echo  $langTxt["btn:gototop"] ?>"><?php echo  $langTxt["btn:gototop"] ?> <img src="../img/btn/top.png" align="absmiddle" /></a></td>
                    </tr>
                <?php } ?>
                </table>
        </div>
    </form>
    <link rel="stylesheet" type="text/css" href="../js/fancybox/jquery.fancybox.css" media="screen" />
    <script language="JavaScript" type="text/javascript" src="../js/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript">
        jQuery(function() {
            jQuery('a[rel=viewAlbum]').fancybox({
                'padding': 0,
                'transitionIn': 'fade',
                'transitionOut': 'fade',
                'autoSize': false,
            });
        });
    </script>
    <?php include("../lib/disconnect.php"); ?>

</body>

</html>