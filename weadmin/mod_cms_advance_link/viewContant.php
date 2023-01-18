<?
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("config.php");
include("incModLang.php");
if ($_REQUEST['inputLt'] == "Thai"){ $txt_download="ดาวน์โหลดคลิกที่นี่";}else{ $txt_download="Download Click"; }

$valClassNav = 2;
$valNav1 = $langTxt["nav:home2"];
$valLinkNav1 = "../core/index.php";
$sql = "SELECT   ";
$sql .= "   
      " . $mod_tb_root . "_id ,
      " . $mod_tb_root . "_credate ,
      " . $mod_tb_root . "_crebyid,
      " . $mod_tb_root . "_status,
      " . $mod_tb_root . "_sdate  	 	 ,
      " . $mod_tb_root . "_edate  	,
      " . $mod_tb_root . "_lastdate,
      " . $mod_tb_root . "_lastbyid,
      " . $mod_tb_root . "_type ,     
      " . $mod_tb_root . "_url  ,
      " . $mod_tb_root . "_view,
      " . $mod_tb_root . "_gid ,
      " . $mod_tb_root . "_file  ,
      " . $mod_tb_root . "_pic  ";

if ($_REQUEST['inputLt'] == "Thai") {
    $sql .= " , 
    " . $mod_tb_root . "_subject  ,    
    " . $mod_tb_root . "_title   , ";

} elseif ($_REQUEST['inputLt'] == "Eng") {
    $sql .= " , 
    " . $mod_tb_root . "_subjecten ,    
    " . $mod_tb_root . "_titleen , ";
} 

$sql .= "
    " . $mod_tb_root . "_facebook  ,
      " . $mod_tb_root . "_email  ,
      " . $mod_tb_root . "_youtube  ,
      " . $mod_tb_root . "_line,  
      " . $mod_tb_root . "_subtype,
      " . $mod_tb_root . "_ig,
      " . $mod_tb_root . "_twitter,
      " . $mod_tb_root . "_sgid as sgid
";

$sql .= " FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_masterkey='" . $_REQUEST["masterkey"] . "'  
AND  " . $mod_tb_root . "_id='" . $_REQUEST['valEditID'] . "' ";
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);

$valID = $Row[0];
$valCredate = DateFormat($Row[1]);
$valCreby = $Row[2];
$valStatus = $Row[3];
if ($valStatus == "Enable") {
    $valStatusClass = "fontContantTbEnable";
} elseif ($valStatus == "Related") {
    $valStatusClass = "fontContantTbRelated";
} else {
    $valStatusClass = "fontContantTbDisable";
}
if ($Row[4] == "0000-00-00 00:00:00") {
    $valSdate = "-";
} else {
    $valSdate = DateFormatReal($Row[4]);
}
if ($Row[5] == "0000-00-00 00:00:00") {
    $valEdate = "-";
} else {
    $valEdate = DateFormatReal($Row[5]);
}
$valLastdate = DateFormat($Row[6]);
$valLastby = $Row[7];
$valType = $Row[8];
$valUrl = rechangeQuot($Row[9]);
$valView = number_format($Row[10]);
$valGid = $Row[11];
$valSgid = $Row['sgid'];
$fileUp = $Row[12];

$valPic=$mod_path_real."/".$Row[13];

$valSubject = rechangeQuot($Row[14]);
$valTitle = rechangeQuot($Row[15]);

$valFacebook = rechangeQuot($Row[16]);
$valEmail = rechangeQuot($Row[17]);
$valYoutube = rechangeQuot($Row[18]);
$valLine = rechangeQuot($Row[19]);
$valSubtype = rechangeQuot($Row[20]);
$valIg = rechangeQuot($Row[21]);
$valTwitter = rechangeQuot($Row[22]);

$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_REQUEST["menukeyid"]);
logs_access('3', 'View');
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <link href="../css/theme.css" rel="stylesheet" />

    <title><?= $core_name_title ?></title>
    <script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
</head>

<body>
    <form action="?" method="get" name="myForm" id="myForm">
        <input name="execute" type="hidden" id="execute" value="update" />
        <input name="masterkey" type="hidden" id="masterkey" value="<?= $_REQUEST['masterkey'] ?>" />
        <input name="menukeyid" type="hidden" id="menukeyid" value="<?= $_REQUEST['menukeyid'] ?>" />
        <input name="inputSearch" type="hidden" id="inputSearch" value="<?= $_REQUEST['inputSearch'] ?>" />
        <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?= $_REQUEST['module_pageshow'] ?>" />
        <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?= $_REQUEST['module_pagesize'] ?>" />
        <input name="module_orderby" type="hidden" id="module_orderby" value="<?= $_REQUEST['module_orderby'] ?>" />
        <input name="inputGh" type="hidden" id="inputGh" value="<?= $_REQUEST['inputGh'] ?>" />
        <input name="inputSGh" type="hidden" id="inputSGh" value="<?=$_REQUEST['inputSGh']?>" />
        <input name="valEditID" type="hidden" id="valEditID" value="<?= $_REQUEST['valEditID'] ?>" />
        <input name="inputLt" type="hidden" id="inputLt" value="<?= $_REQUEST['inputLt'] ?>" />
        <? if ($_REQUEST['viewID'] <= 0) { ?>
        <div class="divRightNav">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a
                                href="<?= $valLinkNav1 ?>" target="_self"><?= $valNav1 ?></a> <img
                                src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)"
                                onclick="btnBackPage('index.php')"
                                target="_self"><?= getNameMenu($_REQUEST["menukeyid"]); ?></a> <img
                                src="../img/btn/nav.png" align="absmiddle" vspace="5" />
                            <?= $langMod["txt:titleview"] ?>
                            <? if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?= getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"]) ?>)
                            <? } ?></span></td>
                    <td class="divRightNavTb" align="right">
                    </td>
                </tr>
            </table>
        </div>
        <? } ?>
        
        <div class="divRightHead">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
                <tr>
                    <td height="77" align="left"><span class="fontHeadRight"><?= $langMod["txt:titleview"] ?>
                            <? if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?= getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"]) ?>)
                            <? } ?></span></td>
                    <td align="left">
                        <table border="0" cellspacing="0" cellpadding="0" align="right">
                            <tr>
                                <td align="right">
                                    <? if ($_REQUEST['viewID'] <= 0) { ?>
                                    <? if ($valPermission == "RW") { ?>
                                    <div class="btnEditView" title="<?= $langTxt["btn:edit"] ?>"
                                        onclick="
                                                                        document.myFormHome.valEditID.value =<?= $valID ?>;
                                                                        editContactNew('../<?= $mod_fd_root ?>/editContant.php')"></div>
                                    <? } ?>
                                    <div class="btnBack" title="<?= $langTxt["btn:back"] ?>"
                                        onclick="btnBackPage('index.php')"></div>
                                    <? } ?>
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
                        <span class="formFontSubjectTxt"><?= $langMod["txt:subject"] ?></span><br />
                        <span class="formFontTileTxt"><?= $langMod["txt:subjectDe"] ?></span> </td>
                </tr>
                <!-- <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><span
                            class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?if(is_file($valPic)){?>
                            <img src="<?=$valPic?>" width="450" />

                            <? }else{?>

                            <img src='<?="../img/btn/nopic.jpg"?>'
                                style="float:left;border:#c8c7cc solid 1px;max-width:300;" />

                            <? }?>

                        </div>
                    </td>
                </tr> -->

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?= $langMod["tit:selectgn"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?
                                            $sql_group = "SELECT ";
                                            if ($_REQUEST['inputLt'] == "Thai") {
                                                $sql_group .= "  " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subject";
                                            } else if ($_REQUEST['inputLt'] == "Eng") {
                                                $sql_group .= "  " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subjecten";
                                            } else {
                                                $sql_group .= " " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subjectcn ";
                                            }
                                            $sql_group .= "  FROM " . $mod_tb_root_group . " WHERE  " . $mod_tb_root_group . "_id='" . $valGid . "'  ORDER BY " . $mod_tb_root_group . "_order DESC ";
                                            $query_group = wewebQueryDB($coreLanguageSQL, $sql_group);
                                            $row_group =wewebFetchArrayDB($coreLanguageSQL, $query_group);
                                            $row_groupid = $row_group[0];
                                            echo $row_groupname = $row_group[1];
                                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?= $langMod["tit:selectsgn"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?
                                            $sql_group = "SELECT ";
                                            if ($_REQUEST['inputLt'] == "Thai") {
                                                $sql_group .= "  " . $mod_tb_root_sub_group . "_id," . $mod_tb_root_sub_group . "_subject";
                                            } else if ($_REQUEST['inputLt'] == "Eng") {
                                                $sql_group .= "  " . $mod_tb_root_sub_group . "_id," . $mod_tb_root_sub_group . "_subjecten";
                                            } else {
                                                $sql_group .= " " . $mod_tb_root_sub_group . "_id," . $mod_tb_root_sub_group . "_subjectcn ";
                                            }
                                            $sql_group .= "  FROM " . $mod_tb_root_sub_group . " WHERE  " . $mod_tb_root_sub_group . "_id='" . $valSgid . "'";
                                            $query_group = wewebQueryDB($coreLanguageSQL, $sql_group);
                                            $row_group =wewebFetchArrayDB($coreLanguageSQL, $query_group);
                                            $row_groupid = $row_group[0];
                                            echo $row_groupname = $row_group[1];
                                            ?>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?= $langMod["tit:inpName"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?= $valSubject ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?= $langMod["tit:title"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?= $valTitle ?></div>
                    </td>
                </tr>
              
        
        </table>

        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder "
            style="display:none;">
            <tr>
                <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                    <span class="formFontSubjectTxt"><?= $langMod["txt:pic"] ?></span><br />
                    <span class="formFontTileTxt"><?= $langMod["txt:picDe"] ?></span> </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><span
                        class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView">
                        <img src="<?= $mod_path_pictures . "/" .$valPic ?>"
                            style="float:left;border:#c8c7cc solid 1px; max-width:600px;"
                            onerror="this.src='<?= "../img/btn/nopic.jpg" ?>'" />
                    </div>
                </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $modTxtShowPic[0] ?>:<span
                        class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView"><?= $modTxtShowPic[$valPicShow] ?></div>
                </td>
            </tr>
        </table>

        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder "
            style="display:none;">
            <tr>
                <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                    <span class="formFontSubjectTxt"><?= $langMod["txt:title"] ?></span><br />
                    <span class="formFontTileTxt"><?= $langMod["txt:titleDe"] ?></span> </td>
            </tr>
            <tr>
                <td colspan="7" align="left" valign="top" class="formTileTxt">
                    <div class="viewEditorTileTxt">
                        <?
                                            $fd = @fopen($valHtml, "r");
                                            $contents = @fread($fd, filesize($valHtml));
                                            @ fclose($fd);
                                            echo txtReplaceHTML($contents);
                                            ?>
                    </div>
                </td>
            </tr>
        </table>


        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder "
            style="display:none;">
            <tr>
                <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                    <span class="formFontSubjectTxt"><?=$langMod["txt:album"]?></span><br />
                    <span class="formFontTileTxt"><?=$langMod["txt:albumDe"]?></span> </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?=$langMod["txt:album"]?>:<span
                        class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView">
                        <?
           $sql_filetemp="SELECT  ".$mod_tb_root_album."_id,".$mod_tb_root_album."_filename,".$mod_tb_root_album."_name,".$mod_tb_root_album."_download  FROM ".$mod_tb_root_album." WHERE ".$mod_tb_root_album."_contantid   ='".$_REQUEST['valEditID']."'   ORDER BY ".$mod_tb_root_album."_id ASC";
            $query_filetemp=wewebQueryDB($coreLanguageSQL,$sql_filetemp);
            $number_filetemp=wewebNumRowsDB($coreLanguageSQL, $query_filetemp);
            if($number_filetemp>=1){
            $valAlbum="";
            while($row_filetemp=wewebFetchArrayDB($coreLanguageSQL,$query_filetemp)){
            $linkRelativePath = $mod_path_album."/".$row_filetemp[1];
            $downloadFile = $row_filetemp[1];
            $downloadID = $row_filetemp[0];
            $downloadName = $row_filetemp[2];
            $countDownload= $row_filetemp[3];
            $imageType = strstr($downloadFile,'.');
?>
                        <? if($_REQUEST['viewID']<=0){?>
                        <!-- <a rel="viewAlbum"  title=""  href="<?=$mod_path_album."/reB_".$downloadFile?>"> -->
                        <img src="<?=$mod_path_album."/reO_".$downloadFile?>" width="50" height="50"
                            style="float:left;border:#c8c7cc solid 1px;margin-bottom:15px;margin-right:15px;" />
                        <!-- </a> -->
                        <? }else{?>
                        <img src="<?=$mod_path_album."/reO_".$downloadFile?>" width="50" height="50"
                            style="float:left;border:#c8c7cc solid 1px;margin-bottom:15px;margin-right:15px;" />
                        <? }?>
                        <? }}else{?>
                        -
                        <? }?>
                    </div>
                </td>
            </tr>
        </table>


        
        <br>

        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
            <tr>
                <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                    <span class="formFontSubjectTxt"><?=$langMod["txt:attfile"]?></span><br />
                    <span class="formFontTileTxt"><?=$langMod["txt:attfileDe"]?></span> </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?=$langMod["txt:attfile"]?>:<span
                        class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView">
                                             

                        <?
       if($valType=='file' && $valSubtype == 0){
             if(!empty($fileUp)){
            $sql="SELECT ".$mod_tb_root."_id,".$mod_tb_root."_file,".$mod_tb_root."_download,".$mod_tb_root."_filename,".$mod_tb_root."_title FROM ".$mod_tb_root." WHERE ".$mod_tb_root."_id   ='".$valID."'  ORDER BY ".$mod_tb_root."_id ASC";

            $query_file=wewebQueryDB($coreLanguageSQL, $sql);
            $number_row=wewebNumRowsDB($coreLanguageSQL, $query_file);
           
            $txtFile="";
            while($row_file=wewebFetchArrayDB($coreLanguageSQL,$query_file)){
              if($row_file[3]!=""){
                 $downloadName = $row_file[3];
              }else {
                 $downloadName = $row_file[1];
              }
            $linkRelativePath = $mod_path_file."/".$row_file[1];
            $downloadFile = $row_file[1];
            $downloadID = $row_file[0];
            $valSubTitle = $row_file[4];
           
            $countDownload= $row_file[2];
            $imageType = strstr($downloadFile,'.');
              ?>
                            
                        <div style="float:left; width:100%; height:30px; margin-bottom:15px;">
                            <span><? echo $valSubTitle ?></span>
                            <img src="<?=get_Icon($downloadFile)?>" align="absmiddle" width="30" />
                            <a href="../<?=$mod_fd_root?>/download.php?linkPath=<?=$linkRelativePath?>&amp;downloadFile=<?=$downloadName?>"><?=$txt_download?>
                                </a> |
                            <font class="fontfile"><?=$langMod["file:type"]?>: <?=$imageType?> |
                                <?=$langMod["file:size"]?>: <?=get_IconSize($linkRelativePath)?> |
                                <?=$langMod["file:download"]?>: <?=number_format($countDownload)?></font>
                        </div>

                        <? } }?>

                        <?
            $sql="SELECT ".$mod_tb_file."_id,".$mod_tb_file."_filename,".$mod_tb_file."_name,".$mod_tb_file."_download,".$mod_tb_file."_title FROM ".$mod_tb_file." WHERE ".$mod_tb_file."_contantid   ='".$valID."'  ORDER BY ".$mod_tb_file."_id ASC";
            $query_file=wewebQueryDB($coreLanguageSQL, $sql);
            $number_row=wewebNumRowsDB($coreLanguageSQL, $query_file);
            if($number_row>=1){
            $txtFile="";
            while($row_file=wewebFetchArrayDB($coreLanguageSQL,$query_file)){
            $linkRelativePath = $mod_path_file."/".$row_file[1];
            $downloadFile = $row_file[1];
            $downloadID = $row_file[0];
            $downloadName = $row_file[2];
            $countDownload= $row_file[3];
            $valSubTitle = $row_file[4];
            $imageType = strstr($downloadFile,'.');
            ?>

                        <div style="float:left; width:100%; height:30px; margin-bottom:15px;">
                         <span> <? echo $valSubTitle ?></span>
                        <img
                                src="<?=get_Icon($downloadFile)?>" align="absmiddle" width="30" />
                                <a href="../<?=$mod_fd_root?>/download.php?<?=encodeURL("cID=$downloadID&kID=$masterkey")?>"><?=$txt_download?>
                                <?//=$downloadName."".$imageType?></a>
                            <font class="fontfile">| <?=$langMod["file:type"]?>: <?=$imageType?> |
                                <?=$langMod["file:size"]?>: <?=get_IconSize($linkRelativePath)?> |
                                <?=$langMod["file:download"]?>: <?=number_format($countDownload)?></font>
                        </div>

                        <? } }
        }else if($valType=='url' && $valSubtype == 0){
            if($valUrl !='http://'){ ?>
           
                <div class="formDivView">
                    <a href="<?=$valUrl?>" target="_blank"><?=$valUrl?></a>
                    <font class="fontfile"> ประเภท : link </font>
                </div>     
                <? } } else if($valType=='pic' && $valSubtype == 0){ ?>
                    <div class="formDivView">
                        <img src="<?=$valPic?>" width="450" />
                        <font class="fontfile"> ประเภท : Picture </font>
                    </div>     
                        <? }else if($valType=='social' && $valSubtype == 0){                            
                            if ($valFacebook != 'http://') { ?>
                                <div class="formDivView">
                                    <a href="<?=$valFacebook?>" target="_blank"><?=$valFacebook?></a>
                                    <font class="fontfile"> ประเภท : Facebook </font>
                                </div> 
                            <?} if($valEmail != 'http://'){?>
                                <div class="formDivView">
                                    <a href="<?=$valEmail?>" target="_blank"><?=$valEmail?></a>
                                    <font class="fontfile"> ประเภท : Email </font>
                                </div>
                        <?} if($valYoutube != 'http://'){ ?>
                            <div class="formDivView">
                                    <a href="<?=$valYoutube?>" target="_blank"><?=$valYoutube?></a>
                                    <font class="fontfile"> ประเภท : Youtube </font>
                                </div>
                        <?} if($valLine != 'http://'){ ?>
                            <div class="formDivView">
                                    <a href="<?=$valLine?>" target="_blank"><?=$valLine?></a>
                                    <font class="fontfile"> ประเภท : Line </font>
                                </div>
                                <?} if($valIg != 'http://'){ ?>
                            <div class="formDivView">
                                    <a href="<?=$valIg?>" target="_blank"><?=$valIg?></a>
                                    <font class="fontfile"> ประเภท : Instagram </font>
                                </div>
                                <?} if($valTwitter != 'http://'){ ?>
                            <div class="formDivView">
                                    <a href="<?=$valTwitter?>" target="_blank"><?=$valTwitter?></a>
                                    <font class="fontfile"> ประเภท : Twitter </font>
                                </div>
                        <?} }else if($valType=='file' && $valSubtype == 1){
                            $sql="SELECT ".$mod_tb_file."_id,".$mod_tb_file."_filename,".$mod_tb_file."_name,".$mod_tb_file."_download,".$mod_tb_file."_title FROM ".$mod_tb_file." WHERE ".$mod_tb_file."_contantid   ='".$valID."' AND ".$mod_tb_file."_file   ='file'   ORDER BY ".$mod_tb_file."_order DESC";
                            $query_file=wewebQueryDB($coreLanguageSQL, $sql);
                            $number_row=wewebNumRowsDB($coreLanguageSQL, $query_file);
                            if($number_row>=1){
                            $txtFile="";
                            while($row_file=wewebFetchArrayDB($coreLanguageSQL,$query_file)){
                            $linkRelativePath = $mod_path_file."/".$row_file[1];
                            $downloadFile = $row_file[1];
                            $downloadID = $row_file[0];
                            $downloadName = $row_file[2];
                            $countDownload= $row_file[3];
                            $valSubTitle = $row_file[4];
                            $imageType = strstr($downloadFile,'.');
                            ?>
                            <div style="float:left; width:100%; height:30px; margin-bottom:15px;">
                                <span>• <? echo $valSubTitle ?></span>
                                <img
                                        src="<?=get_Icon($downloadFile)?>" align="absmiddle" width="30" />
                                        <a href="../<?=$mod_fd_root?>/download.php?<?=encodeURL("cID=$downloadID&kID=$masterkey")?>"><?=$txt_download?>
                                        <?//=$downloadName."".$imageType?></a>
                                    <font class="fontfile">| <?=$langMod["file:type"]?>: <?=$imageType?> |
                                        <?=$langMod["file:size"]?>: <?=get_IconSize($linkRelativePath)?> |
                                        <?=$langMod["file:download"]?>: <?=number_format($countDownload)?></font>
                                </div>
                        <? }}} else if($valType=='url' && $valSubtype == 1){
                            $sql="SELECT ".$mod_tb_file."_id,".$mod_tb_file."_filename,".$mod_tb_file."_name,".$mod_tb_file."_download,".$mod_tb_file."_title,".$mod_tb_file."_url FROM ".$mod_tb_file." WHERE ".$mod_tb_file."_contantid   ='".$valID."' AND ".$mod_tb_file."_file   ='url'   ORDER BY ".$mod_tb_file."_order DESC";
                            $query_file=wewebQueryDB($coreLanguageSQL, $sql);
                            $number_row=wewebNumRowsDB($coreLanguageSQL, $query_file);
                            if($number_row>=1){
                            $txtFile="";
                            while($row_file=wewebFetchArrayDB($coreLanguageSQL,$query_file)){
                            $linkRelativePath = $mod_path_file."/".$row_file[1];
                            $downloadFile = $row_file[1];
                            $downloadID = $row_file[0];
                            $downloadName = $row_file[2];
                            $countDownload= $row_file[3];
                            $valSubTitle = $row_file[4];
                            $valUrl = $row_file[5];
                            $imageType = strstr($downloadFile,'.');
                            ?>
                            <div class="formDivView">
                                <label for=""><? echo $valSubTitle ?></label>
                                    <a href="<?=$valUrl?>" target="_blank"><?=$valUrl?></a>
                                    <font class="fontfile"> ประเภท : Link </font>
                                </div>
                        <?}}}?>
                    </div>
                </td>
            </tr>
        </table>

        <br>
        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder "
            style="display:none;">
            <tr>
                <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                    <span class="formFontSubjectTxt"><?= $langMod["txt:seo"] ?></span><br />
                    <span class="formFontTileTxt"><?= $langMod["txt:seoDe"] ?></span> </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb">
                    <?= $langMod["inp:seotitle"] ?>:<span class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView"><?= $valMetatitle ?></div>
                </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langMod["inp:seodes"] ?>:<span
                        class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView"><?= $valDescription ?></div>
                </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langMod["inp:seokey"] ?>:<span
                        class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView"><?= $valKeywords ?></div>
                </td>
            </tr>
        </table>

        <!-- <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
            <tr>
                <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                    <span class="formFontSubjectTxt"><?= $langMod["txt:date"] ?></span><br />
                    <span class="formFontTileTxt"><?= $langMod["txt:dateDe"] ?></span> </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langMod["tit:sdate"] ?>:<span
                        class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView"><?= $valSdate ?></div>
                </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langMod["tit:edate"] ?>:<span
                        class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView"><?= $valEdate ?></div>
                </td>
            </tr>


        </table>
        <br /> -->
        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
            <tr>
                <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                    <span class="formFontSubjectTxt"><?= $langTxt["us:titleinfo"] ?></span><br />
                    <span class="formFontTileTxt"><?= $langTxt["us:titleinfoDe"] ?></span> </td>
            </tr>

            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langTxt["us:credate"] ?>:</td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView"><?= $valCredate ?></div>
                </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langTxt["us:creby"] ?>:</td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView">
                        <?
                                            if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                                                echo getUserThai($valCreby);
                                            } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                                                echo getUserEng($valCreby);
                                            }
                                            ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langTxt["us:lastdate"] ?>:
                </td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView"><?= $valLastdate ?></div>
                </td>
            </tr>
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langTxt["us:creby"] ?>:</td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView">
                        <?
                                            if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                                                echo getUserThai($valLastby);
                                            } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                                                echo getUserEng($valLastby);
                                            }
                                            ?>
                    </div>
                </td>
            </tr>
            <!-- <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?= $langMod["tit:view"] ?>:</td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
                                        <div class="formDivView"><?= $valView ?></div>         </td>
                                </tr> -->
            <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?= $langTxt["mg:status"] ?>:</td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                    <div class="formDivView">

                        <? if ($valStatus == "Enable") { ?>
                        <span class="<?= $valStatusClass ?>"><?= $valStatus ?></span>
                        <? } else { ?>
                        <span class="<?= $valStatusClass ?>"><?= $valStatus ?></span>
                        <? } ?>
                    </div>
                </td>
            </tr>
        </table>
        <br />
        <? if ($_REQUEST['viewID'] <= 0) { ?>

        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">

            <tr>
                <td colspan="7" align="right" valign="top" height="20"></td>
            </tr>
            <tr>
                <td colspan="7" align="right" valign="middle" class="formEndContantTb"><a href="#defTop"
                        title="<?= $langTxt["btn:gototop"] ?>"><?= $langTxt["btn:gototop"] ?> <img
                            src="../img/btn/top.png" align="absmiddle" /></a></td>
            </tr>
            <? } ?>
        </table>
        </div>
    </form>
    <? include("../lib/disconnect.php"); ?>
    <? if ($_REQUEST['viewID'] <= 0) { ?>
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
    <? } ?>

    <script type='text/javascript' src='../<?= $mod_fd_root ?>/swfobject.js'></script>
    <script type='text/javascript' src='../<?= $mod_fd_root ?>/silverlight.js'></script>
    <script type='text/javascript' src='../<?= $mod_fd_root ?>/wmvplayer.js'></script>
    <script type='text/javascript'>
    var filename = "<?= $filename ?>";
    var filetype = "<?= $filetype ?>";
    var cnt = document.getElementById("areaPlayer");
    if (filetype == "flv") {
        var s1 = new SWFObject('../<?= $mod_fd_root ?>/player.swf', 'player', '560', '315', '9');
        s1.addParam('allowfullscreen', 'true');
        s1.addParam('wmode', 'transparent');
        s1.addParam('allowscriptaccess', 'always');
        s1.addParam('flashvars', 'file=<?= $mod_path_vdo ?>/' + filename);
        s1.write('areaPlayer');
    } else /* if(filetype=="wmv")*/ {

        var src = '../<?= $mod_fd_root ?>/wmvplayer.xaml';
        var cfg = "";
        var ply;
        cfg = {
            file: '<?= $mod_path_vdo ?>/' + filename,
            image: '',
            height: '315',
            width: '560',
            autostart: "false",
            windowless: 'true',
            showstop: 'true'
        };
        ply = new jeroenwijering.Player(cnt, src, cfg);
    }
    </script>


</body>

</html>