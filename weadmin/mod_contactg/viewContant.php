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

$update = array();
$update[] = $mod_tb_root . "_status  	='Read'";

$sql = "UPDATE " . $mod_tb_root . " SET " . implode(",", $update) . " WHERE " . $mod_tb_root . "_id='" . $_POST["valEditID"] . "'  ";

$Query = wewebQueryDB($coreLanguageSQL, $sql);


$sql = "SELECT   ";
$sql .= "   
" . $mod_tb_root . "_id ,
" . $mod_tb_root . "_credate, 
" . $mod_tb_root . "_status, 
" . $mod_tb_root . "_subject, 
" . $mod_tb_root . "_message, 
" . $mod_tb_root . "_fname  ,  
" . $mod_tb_root . "_address  ,  
" . $mod_tb_root . "_email  ,  
" . $mod_tb_root . "_tel   ,  
" . $mod_tb_root . "_ip,  
" . $mod_tb_root . "_gid, 
" . $mod_tb_root . "_lname ,
" . $mod_tb_root . "_company ,
" . $mod_tb_root . "_model ,
" . $mod_tb_root . "_qty,
" . $mod_tb_root . "_sid
";
$sql .= " FROM " . $mod_tb_root . "  WHERE " . $mod_tb_root . "_masterkey='" . $_REQUEST["masterkey"] . "'  AND  " . $mod_tb_root . "_id='" . $_REQUEST['valEditID'] . "' ";
// print_pre($sql);die;
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
$valID = $Row[0];
$valCredate = DateFormat($Row[1]);
$valStatus = $Row[2];
$valSubject = rechangeQuot($Row[3]);
$valMessage = rechangeQuot($Row[4]);
$valFName = rechangeQuot($Row[5]);
$valAddress = rechangeQuot($Row[6]);
$valEmail = rechangeQuot($Row[7]);
$valTel = rechangeQuot($Row[8]);
$valIp = rechangeQuot($Row[9]);
$valGid = $Row[10];
$valLName = rechangeQuot($Row[11]);
$valCompany = rechangeQuot($Row[12]);
$valModel = rechangeQuot($Row[13]);
$valQty = rechangeQuot($Row[14]);
$valaclaim = unserialize($row[17]);
$valanewclaim = implode(",",array_values($valaclaim));
$claim = claim($valaclaim);
foreach ($valclaim as $value){
    $valanewclaim = $value;
}
$valSid = unserialize($Row[15]);
$arr_sid = array();
foreach ($valSid as $keyvalSid => $valuevalSid) {
    $arr_sid[] = "'".$valuevalSid."'";
}
$valCity = $Row[16];
$valCt = $Row[17];
$valIden = $Row[18];
if ($valStatus == "Read") {
    $valStatusClass = "fontContantTbEnable";
} else {
    $valStatusClass = "fontContantTbDisable";
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
        <input name="inputLt" type="hidden" id="inputLt" value="<?php echo  $_REQUEST['inputLt'] ?>" />
        <?php if ($_REQUEST['viewID'] <= 0) { ?>
            <div class="divRightNav">
                <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo  $valLinkNav1 ?>" target="_self"><?php echo  $valNav1 ?></a> <img src="../img/btn/navblack.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo  getNameMenu($_REQUEST["menukeyid"]) ?></a> <img src="../img/btn/navblack.png" align="absmiddle" vspace="5" /> <?php echo  $langMod["txt:titleview"] ?></span></td>
                        <td class="divRightNavTb" align="right">



                        </td>
                    </tr>
                </table>
            </div>
        <?php } ?>
        <div class="divRightHead">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
                <tr>
                    <td height="77" align="left"><span class="fontHeadRight"><?php echo  $langMod["txt:titleview"] ?></span></td>
                    <td align="left">
                        <table border="0" cellspacing="0" cellpadding="0" align="right">
                            <tr>
                                <td align="right">
                                    <?php if ($_REQUEST['viewID'] <= 0) { ?>

                                        <div class="btnBack" title="<?php echo  $langTxt["btn:back"] ?>" onclick="btnBackPage('index.php')"></div>
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
                        <span class="formFontSubjectTxt"><?php echo  $langMod["txt:info"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo  $langMod["txt:infoDe"] ?></span>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:fname"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo  $valFName . " " . $valLName; ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:email"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo  $valEmail ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:tel"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo  $valTel ?></div>
                    </td>
                </tr>
               
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:subjectsg"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?php
                            if (!empty($arr_sid)) {
                                $sql_group = "SELECT ";
                                $sql_group .= " ".$mod_tb_root_group."_id, 
                                ".$mod_tb_root_group."_subject, 
                                ".$mod_tb_root_group."_title";
                                $sql_group .= "  FROM ".$mod_tb_root_group." WHERE  " . $mod_tb_root_group . "_id IN (".implode(",",array_values($arr_sid)).")";
                                $query_group = wewebQueryDB($coreLanguageSQL, $sql_group);
                                $count_record=wewebNumRowsDB($coreLanguageSQL,$query_group);
                                while ($row_group = wewebFetchArrayDB($coreLanguageSQL, $query_group)) {
                                    echo "- ".$row_group[1]."<br>";
                                }
                            }else{
                                echo "-";
                            }
                            ?>

                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:reason"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo  $valSubject ?></div>
                    </td>
                </tr>
<!--                 <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:iden"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo  $valIden ?></div>
                    </td>
                </tr> -->
                <!-- <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Message:<span class="fontContantAlert"></span></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo  nl2br($valMessage) ?></div></td>
                                </tr> -->


            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder " style="display: none;">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?= $langMod["tit:iden"] ?></span><br />
                        <span class="formFontTileTxt"><?= $langMod["txt:attfileDe"] ?></span>
                    </td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langMod["tit:file"] ?> :<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">

                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <div class="formDivView">


                                    <?
                                    $sql = "SELECT " . $mod_tb_file . "_id," . $mod_tb_file . "_filename," . $mod_tb_file . "_name," . $mod_tb_file . "_download FROM " . $mod_tb_file . " WHERE " . $mod_tb_file . "_contantid   ='" . $valID . "'  ORDER BY " . $mod_tb_file . "_id ASC";
                                    $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                                    $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                                    if ($number_row >= 1) {
                                        while ($row_file = wewebFetchArrayDB($coreLanguageSQL, $query_file)) {
                                            $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                                            $downloadFile = $row_file[1];
                                            $downloadID = $row_file[0];
                                            $downloadName = $row_file[2];
                                            $countDownload = $row_file[3];
                                            $imageType = strstr($downloadFile, '.');

                                    ?>
                                            <tr>
                                                <td>
                                                    <div style="float:left; width:100%; height:30px; margin-bottom:15px;"><img src="<?= get_Icon($downloadFile) ?>" align="absmiddle" width="30" /><a href="../<?= $mod_fd_root ?>/download.php?linkPath=<?= $linkRelativePath ?>&amp;downloadFile=<?= $downloadName ?>"><?= $downloadName . "" . $imageType ?></a>
                                                        <font class="fontfile"> | <?= $langMod["file:type"] ?>: <?= $imageType ?> | <?= $langMod["file:size"] ?>: <?= get_IconSize($linkRelativePath) ?> | <?= $langMod["file:download"] ?>: <?= number_format($countDownload) ?></font>
                                                    </div>
                                                    <div></div>
                                                </td>
                                            </tr>
                                        <?
                                            $index++;
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td><?php echo "-"; ?></td>
                                        </tr>
                                    <?
                                    }
                                    ?>
                            </table>
                        </div>
                    </td>
                </tr>

            </table>
            <br style="display: none;">

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
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">IP:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?php
                            echo $valIp;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:status"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">

                            <?php if ($valStatus == "Read") { ?>
                                <span class="<?php echo  $valStatusClass ?>"><?php echo  $valStatus ?></span>
                            <?php } else { ?>
                                <span class="<?php echo  $valStatusClass ?>"><?php echo  $valStatus ?></span>
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            </table>
            <br />
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
    <?php include("../lib/disconnect.php"); ?>
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

</body>

</html>