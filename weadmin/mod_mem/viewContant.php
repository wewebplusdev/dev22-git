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

$sql = "SELECT   ";
$sql .= "   " . $mod_tb_root . "_id , " . $mod_tb_root . "_credate , " . $mod_tb_root . "_crebyid, " . $mod_tb_root . "_status,    " . $mod_tb_root . "_sdate  	 	 ,    " . $mod_tb_root . "_edate  ,    " . $mod_tb_root . "_pic ," . $mod_tb_root . "_gid    ";

if ($_REQUEST['inputLt'] == "Thai") {
    $sql .= " , " . $mod_tb_root . "_fname  ,    " . $mod_tb_root . "_lname , " . $mod_tb_root . "_position , " . $mod_tb_root . "_education , " . $mod_tb_root . "_depart , " . $mod_tb_root . "_trian , " . $mod_tb_root . "_share , " . $mod_tb_root . "_htmlfilename   ,    " . $mod_tb_root . "_metatitle  	 	 ,    " . $mod_tb_root . "_description  	 	 ,    " . $mod_tb_root . "_keywords    ";
} elseif ($_REQUEST['inputLt'] == "Eng") {
    $sql .= " , " . $mod_tb_root . "_fnameen  ,    " . $mod_tb_root . "_lnameen , " . $mod_tb_root . "_positionen , " . $mod_tb_root . "_educationen , " . $mod_tb_root . "_departen , " . $mod_tb_root . "_trianen , " . $mod_tb_root . "_shareen , " . $mod_tb_root . "_htmlfilenameen   ,    " . $mod_tb_root . "_metatitleen  	 	 ,    " . $mod_tb_root . "_descriptionen  	 	 ,    " . $mod_tb_root . "_keywordsen    ";
} else {
    $sql .= " , " . $mod_tb_root . "_fnamecn  ,    " . $mod_tb_root . "_lnamecn, " . $mod_tb_root . "_positioncn , " . $mod_tb_root . "_educationcn , " . $mod_tb_root . "_departcn , " . $mod_tb_root . "_triancn , " . $mod_tb_root . "_sharecn , " . $mod_tb_root . "_htmlfilenamecn   ,    " . $mod_tb_root . "_metatitlecn  	 	 ,    " . $mod_tb_root . "_descriptioncn  	 	 ,    " . $mod_tb_root . "_keywordscn    ";
}

$sql .= ", " . $mod_tb_root . "_langth, " . $mod_tb_root . "_langen , " . $mod_tb_root . "_langcn, " . $mod_tb_root . "_lastbyid," . $mod_tb_root . "_lastdate," . $mod_tb_root . "_view";
if ($_REQUEST['inputLt'] == "Thai") {
	$sql .= " , " . $mod_tb_root . "_sdatetxt  ,    " . $mod_tb_root . "_email , " . $mod_tb_root . "_tel , " . $mod_tb_root . "_typec ";
} elseif ($_REQUEST['inputLt'] == "Eng") {
	$sql .= " , " . $mod_tb_root . "_sdatetxten  ,    " . $mod_tb_root . "_emailen , " . $mod_tb_root . "_telen , " . $mod_tb_root . "_typec ";
} else {
	$sql .= " , " . $mod_tb_root . "_sdatetxtcn  ,    " . $mod_tb_root . "_emailcn, " . $mod_tb_root . "_telcn , " . $mod_tb_root . "_typec ";
}
$sql .= " FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_masterkey='" . $_POST["masterkey"] . "' AND  " . $mod_tb_root . "_id 	='" . $_POST["valEditID"] . "'";
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
// $Row=wewebNumRowsDB($coreLanguageSQL,$Query);
$valID = $Row[0];
$valcredate = DateFormatInsertRe($Row[1]);
$valcreby = $Row[2];
$valstatus = $Row[3];
if ($valStatus == "Enable") {
    $valStatusClass =  "fontContantTbEnable";
  } else if ($valStatus == "Home") {
    $valStatusClass =  "fontContantTbHomeSt";
  } else {
    $valStatusClass =  "fontContantTbDisable";
  }
if ($Row[4] != "0000-00-00 00:00:00") {
    $valSdate = DateFormatInsertRe($Row[4]);
}
if ($Row[5] != "0000-00-00 00:00:00") {
    $valEdate = DateFormatInsertRe($Row[5]);
}
$valPicName = $Row[6];
$valPic = $mod_path_pictures . "/" . $Row[6];
$valGid = unserialize($Row[7]);

$valFname = rechangeQuot($Row[8]);
$valLname = rechangeQuot($Row[9]);
$valPosition = rechangeQuot($Row[10]);
$valEducat = rechangeQuot($Row[11]);
$valDepart = rechangeQuot($Row[12]);
$valTain = rechangeQuot($Row[13]);
$valShare = rechangeQuot($Row[14]);
$valhtml = $mod_path_html . "/" . $Row[15];
$valhtmlname = $Row[15];
$valMetatitle = rechangeQuot($Row[16]);
$valDescription = rechangeQuot($Row[17]);
$valKeywords = rechangeQuot($Row[18]);

$valLang[0] = $Row[19];
$valLang[1] = $Row[20];
$valLang[2] = $Row[21];
$vallastby = $Row[22];
$vallastdate = $Row[23];
$valview = $Row[24];

$valSdatetxt = rechangeQuot($Row[25]);
$valEmail = rechangeQuot($Row[26]);
$valTel = rechangeQuot($Row[27]);
$valTypeC = $Row[28];
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

    <title><?php echo $core_name_title ?></title>
    <script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
</head>

<body>
    <form action="?" method="get" name="myForm" id="myForm">
        <input name="execute" type="hidden" id="execute" value="update" />
        <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
        <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
        <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
        <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow'] ?>" />
        <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize'] ?>" />
        <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby'] ?>" />
        <input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
        <input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID'] ?>" />
        <input name="inputLt" type="hidden" id="inputLt" value="<?php echo $_REQUEST['inputLt'] ?>" />
        <?php if ($_REQUEST['viewID'] <= 0) { ?>
            <div class="divRightNav">
                <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a> <img src="../img/btn/navblack.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo $langMod["meu:contant"] ?></a> <img src="../img/btn/navblack.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleview"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)<?php } ?></span></td>
                        <td class="divRightNavTb" align="right">



                        </td>
                    </tr>
                </table>
            </div>
        <?php } ?>
        <div class="divRightHead">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
                <tr>
                    <td height="77" align="left"><span class="fontHeadRight"><?php echo $langMod["txt:titleview"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)<?php } ?></span></td>
                    <td align="left">
                        <table border="0" cellspacing="0" cellpadding="0" align="right">
                            <tr>
                                <td align="right">
                                    <?php if ($_REQUEST['viewID'] <= 0) { ?>
                                        <?php if ($valPermission == "RW") { ?>
                                            <div class="btnEditView" title="<?php echo $langTxt["btn:edit"] ?>" onclick="
                                                                        document.myFormHome.valEditID.value =<?php echo $valID ?>;
                                                                        editContactNew('../<?php echo $mod_fd_root ?>/editContant.php')"></div>
                                        <?php } ?>
                                        <div class="btnBack" title="<?php echo $langTxt["btn:back"] ?>" onclick="btnBackPage('index.php')"></div>
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
                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:subject"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo $langMod["txt:subjectDe"] ?></span> </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["set:lang:web"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <?php
                        foreach ($modTxtSetLang as $key => $value) {
                        ?>
                            <div class="formDivView">
                                <?php
                                if ($valLang[$key] == 1) {
                                    echo '- ' . $value;
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:selectgn"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">

                    <?php
				$sql_position = " SELECT 
						".$md_mem_position."_mid,
						".$md_mem_position."_gid,
						".$md_mem_position."_pid
						FROM
						".$md_mem_position."
						WHERE
						".$md_mem_position."_mid = '".$valID."' ORDER BY ".$md_mem_position."_id ASC
				";
				$Query_position = wewebQueryDB($coreLanguageSQL,$sql_position);
				$count_posi = 1;
				while ($row_position = wewebFetchArrayDB($coreLanguageSQL,$Query_position)) {
					$Group_ID = $row_position[$md_mem_position.""."_gid"];
					$Position_ID = $row_position[$md_mem_position.""."_pid"];
					// print_pre($Position_ID);
				?>
			

				<div class="temp_brethrens findid"  data-count="<?php echo $count_posi ?>">
					<table border="0" cellspacing="0" cellpadding="0" class="">

						<tr class="">
							<td>
                                <div class="formDivView">
									<?php
									$sql_group = "SELECT ";
									if ($_REQUEST['inputLt'] == "Thai") {
										$sql_group .= "  " . $mod_tb_root_subgroup . "_id," . $mod_tb_root_subgroup . "_subject";
									} else {
										$sql_group .= " " . $mod_tb_root_subgroup . "_id," . $mod_tb_root_subgroup . "_subjecten ";
									}

									$sql_group .= "  FROM " . $mod_tb_root_subgroup . " WHERE  " . $mod_tb_root_subgroup . "_masterkey ='" . $_REQUEST['masterkey'] . "'  ORDER BY " . $mod_tb_root_subgroup . "_order DESC ";
									$query_group = wewebQueryDB($coreLanguageSQL,$sql_group);
									while ($row_group = wewebFetchArrayDB($coreLanguageSQL,$query_group)) {
										$row_groupid = $row_group[0];
										$row_groupname = $row_group[1];
										?>
                                        <?php if ($Position_ID == $row_groupid) { ?> 
                                            <?php echo $row_groupname ?>
                                        <?php } ?>
									<?php } ?>
                                </div>
							</td>

							<td>
                                <div class="formDivView">
									<?php
									$sql_group = "SELECT ";
									if ($_REQUEST['inputLt'] == "Thai") {
										$sql_group .= "  " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subject";
									} else {
										$sql_group .= " " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subjecten ";
									}

									$sql_group .= "  FROM " . $mod_tb_root_group . " WHERE  " . $mod_tb_root_group . "_masterkey ='" . $_REQUEST['masterkey'] . "'  ORDER BY " . $mod_tb_root_group . "_order DESC ";
									$query_group = wewebQueryDB($coreLanguageSQL,$sql_group);
									while ($row_group = wewebFetchArrayDB($coreLanguageSQL,$query_group)) {
										$row_groupid = $row_group[0];
										$row_groupname = $row_group[1];
										?>
                                        <?php if ($Group_ID == $row_groupid) { ?>
                                            &nbsp<?php echo " - ".$row_groupname ?>
                                        <?php } ?>
									<?php } ?>
                                </div>
							</td>
						</tr>
						

					</table>
				</div>
			<?php $count_posi++; ?>
			<?php  } ?>
                    </td>
                </tr>


                <!-- xxx -->
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:subject"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valDepart; ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:fname"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valFname; ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:lname"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"> <?php echo $valLname; ?></div>
                    </td>
                </tr>
                <!-- <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:position"] ?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valPosition; ?></div>
                    </td>
                </tr> -->
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:jobstartdate"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valSdatetxt; ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:email"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valEmail; ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:tel"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valTel; ?></div>
                    </td>
                </tr>
                
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:typeshow"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $modType[$valTypeC] ?></div>
                    </td>
                </tr>
                <!-- <tr>
                    <td align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:education"] ?><span class="fontContantAlert"></span></td>
                    <td colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valEducat; ?></div>
                    </td>
                </tr>

                <tr>
                    <td align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:train"] ?><span class="fontContantAlert"></span></td>
                    <td colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valTain; ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:share"] ?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"> <?php echo $valShare; ?></div>
                    </td>
                </tr> -->
            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:pic"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo $langMod["txt:picDe"] ?></span> </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <img src="<?php echo $valPic ?>" style="float:left;border:#c8c7cc solid 1px; max-width:600px;" onerror="this.src='<?php echo "../img/btn/nopic.jpg" ?>'" />
                        </div>
                    </td>
                </tr>
                <!-- <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $modTxtShowPic[0] ?>:<span class="fontContantAlert"></span></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $modTxtShowPic[$valPicShow] ?></div></td>
                                </tr> -->
            </table>
            <br />
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:title"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo $langMod["txt:titleDe"] ?></span> </td>
                </tr>
                <tr>
                    <td colspan="7" align="left" valign="top" class="formTileTxt">
                        <div class="viewEditorTileTxt">
                            <?php
                            $fd = @fopen($valhtml, "r");
                            $contents = @fread($fd, filesize($valhtml));
                            @fclose($fd);
                            echo txtReplaceHTML($contents);
                            ?>
                        </div>
                    </td>
                </tr>
            </table>
            <br />
            <!-- <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:album"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo $langMod["txt:albumDe"] ?></span> </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["txt:album"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?php
                            $sql_filetemp = "SELECT  " . $mod_tb_root_album . "_id," . $mod_tb_root_album . "_filename," . $mod_tb_root_album . "_name," . $mod_tb_root_album . "_download  FROM " . $mod_tb_root_album . " WHERE " . $mod_tb_root_album . "_contantid 	='" . $_REQUEST['valEditID'] . "'   ORDER BY " . $mod_tb_root_album . "_id ASC";
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
                            ?>
                                    <?php if ($_REQUEST['viewID'] <= 0) { ?>
                                        <a rel="viewAlbum" title="" href="<?php echo $mod_path_album . "/reB_" . $downloadFile ?>">
                                            <img src="<?php echo $mod_path_album . "/reO_" . $downloadFile ?>" width="50" height="50" style="float:left;border:#c8c7cc solid 1px;margin-bottom:15px;margin-right:15px;" /></a>
                                    <?php } else { ?>
                                        <img src="<?php echo $mod_path_album . "/reO_" . $downloadFile ?>" width="50" height="50" style="float:left;border:#c8c7cc solid 1px;margin-bottom:15px;margin-right:15px;" />
                                    <?php } ?>
                                <?php }
                            } else { ?>
                                -
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            </table>
            <br /> -->
            <!-- <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:video"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo $langMod["txt:videoDe"] ?></span> </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["txt:video"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?php
                            if ($valType == "file") {
                                if ($valFilevdo != "") {
                                    $filename = $valFilevdo;
                                    $arrstrfile = explode(".", $valFilevdo);
                                    $filetype = strtolower($arrstrfile[sizeof($arrstrfile) - 1]);
                            ?>
                                    <div id="areaPlayer" style="z-index:-1999; "></div>
                                <?php } else { ?>
                                    -
                                <?php
                                }
                            } else {
                                if ($valUrl != "") {
                                    $myUrlArray = explode("v=", $valUrl);
                                    $myUrlCut = $myUrlArray[1];
                                    $myUrlCutArray = explode("&", $myUrlCut);
                                    $myUrlCutAnd = $myUrlCutArray[0];
                                ?>
                                    <iframe width="560" height="315" src="//www.youtube-nocookie.com/embed/<?php echo $myUrlCutAnd ?>" frameborder="0" allowfullscreen style="z-index:-1999; "></iframe>
                                <?php } else { ?>
                                    -
                            <?php }
                            } ?>

                        </div>
                    </td>
                </tr>
            </table>
            <br /> -->
            <!-- <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:attfile"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo $langMod["txt:attfileDe"] ?></span> </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["txt:attfile"] ?>:<span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?php
                            $sql = "SELECT " . $mod_tb_file . "_id," . $mod_tb_file . "_filename," . $mod_tb_file . "_name," . $mod_tb_file . "_download FROM " . $mod_tb_file . " WHERE " . $mod_tb_file . "_contantid 	='" . $valID . "'  ORDER BY " . $mod_tb_file . "_id ASC";
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
                            ?>

                                    <div style="float:left; width:100%; height:30px; margin-bottom:15px;"><img src="<?php echo get_Icon($downloadFile) ?>" align="absmiddle" width="30" /><a href="../<?php echo $mod_fd_root ?>/download.php?linkPath=<?php echo $linkRelativePath ?>&amp;downloadFile=<?php echo $downloadFile ?>"><?php echo $downloadName . "" . $imageType ?></a> | <?php echo $langMod["file:type"] ?>: <?php echo $imageType ?> | <?php echo $langMod["file:size"] ?>: <?php echo get_IconSize($linkRelativePath) ?> | <?php echo $langMod["file:download"] ?>: <?php echo number_format($countDownload) ?></div>
                                    <div></div>

                            <?php
                                }
                            } else {
                                echo "-";
                            }
                            ?>
                        </div>
                    </td>
                </tr>
            </table>
            <br  /> -->
                           <!--  <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder " >
                                <tr >
                                    <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:seo"] ?></span><br/>
                                        <span class="formFontTileTxt"><?php echo $langMod["txt:seoDe"] ?></span>    </td>
                                </tr>
                                <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["inp:seotitle"] ?>:<span class="fontContantAlert"></span></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valMetatitle ?></div></td>
                                </tr>
                                <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["inp:seodes"] ?>:<span class="fontContantAlert"></span></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valDescription ?></div></td>
                                </tr>
                                <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["inp:seokey"] ?>:<span class="fontContantAlert"></span></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valKeywords ?></div></td>
                                </tr>
                            </table>
            <br /> -->
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?php echo $langMod["txt:date"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo $langMod["txt:dateDe"] ?></span> </td>
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
                        <span class="formFontSubjectTxt"><?php echo $langTxt["us:titleinfo"] ?></span><br />
                        <span class="formFontTileTxt"><?php echo $langTxt["us:titleinfoDe"] ?></span> </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:view"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valview ?></div>
                    </td>
                </tr>
                <!-- <tr >
                                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >URL :<span class="fontContantAlert"></span></td>
                                    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView">
                                    <?php if ($_REQUEST['inputLt'] == "Thai") { ?>
                                    <a href="<?php echo  loadGetURLByMod($core_full_path, 'th', $mod_fd_frontdetailUrl, $valID, 1) ?>" target="_blank"><?php echo loadGetURLByMod($core_full_path, 'th', $mod_fd_frontdetailUrl, $valID, 1) ?></a><br />
                                    <?php } else { ?>
                                    <a href="<?php echo  loadGetURLByMod($core_full_path, 'en', $mod_fd_frontdetailUrl, $valID, 1) ?>" target="_blank"><?php echo loadGetURLByMod($core_full_path, 'en', $mod_fd_frontdetailUrl, $valID, 1) ?></a><br />
                                     <?php   }  ?>
                                     </div></td>
                                </tr> -->
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["us:credate"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $valcredate ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["us:creby"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
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
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["us:lastdate"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView"><?php echo $vallastdate ?></div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["us:creby"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">
                            <?php
                            if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                                echo getUserThai($vallastby);
                            } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                                echo getUserEng($vallastby);
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["mg:status"] ?>:</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <div class="formDivView">

                            <?php if ($valstatus == "Enable") { ?>
                                <span class="<?php echo $valStatusClass ?>"><?php echo $valstatus ?></span>
                            <?php } else { ?>
                                <span class="<?php echo $valStatusClass ?>"><?php echo $valstatus ?></span>
                            <?php } ?>
                        </div>
                    </td>
                </tr>
            </table>
            <br /> <?php if ($_REQUEST['viewID'] <= 0) { ?>

                <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">

                    <tr>
                        <td colspan="7" align="right" valign="top" height="20"></td>
                    </tr>
                    <tr>
                        <td colspan="7" align="right" valign="middle" class="formEndContantTb"><a href="#defTop" title="<?php echo $langTxt["btn:gototop"] ?>"><?php echo $langTxt["btn:gototop"] ?> <img src="../img/btn/top.png" align="absmiddle" /></a></td>
                    </tr>
                <?php } ?>
                </table>
        </div>
    </form>
    <?php include("../lib/disconnect.php"); ?>
    <?php if ($_REQUEST['viewID'] <= 0) { ?>
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
    <?php } ?>

    <script type='text/javascript' src='../<?php echo $mod_fd_root ?>/swfobject.js'></script>
    <script type='text/javascript' src='../<?php echo $mod_fd_root ?>/silverlight.js'></script>
    <script type='text/javascript' src='../<?php echo $mod_fd_root ?>/wmvplayer.js'></script>
    <script type='text/javascript'>
        var filename = "<?php echo $filename ?>";
        var filetype = "<?php echo $filetype ?>";
        var cnt = document.getElementById("areaPlayer");
        if (filetype == "flv") {
            var s1 = new SWFObject('../<?php echo $mod_fd_root ?>/player.swf', 'player', '560', '315', '9');
            s1.addParam('allowfullscreen', 'true');
            s1.addParam('wmode', 'transparent');
            s1.addParam('allowscriptaccess', 'always');
            s1.addParam('flashvars', 'file=<?php echo $mod_path_vdo ?>/' + filename);
            s1.write('areaPlayer');
        } else /* if(filetype=="wmv")*/ {

            var src = '../<?php echo $mod_fd_root ?>/wmvplayer.xaml';
            var cfg = "";
            var ply;
            cfg = {
                file: '<?php echo $mod_path_vdo ?>/' + filename,
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