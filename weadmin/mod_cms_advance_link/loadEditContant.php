<?
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("config.php");
include("incModLang.php");

$valClassNav=2;
$valNav1=$langTxt["nav:home2"];
$valLinkNav1="../core/index.php";


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
    " . $mod_tb_root . "_title    ";

} elseif ($_REQUEST['inputLt'] == "Eng") {
    $sql .= " , 
    " . $mod_tb_root . "_subjecten ,    
    " . $mod_tb_root . "_titleen   ";
} 


$sql .= " ,
     " . $mod_tb_root . "_sgid , " . $mod_tb_root . "_subtype, ";
     
$sql .= "
" . $mod_tb_root . "_facebook  ,
    " . $mod_tb_root . "_email  ,
    " . $mod_tb_root . "_youtube  ,
    " . $mod_tb_root . "_line,  
    " . $mod_tb_root . "_ig,  
    " . $mod_tb_root . "_twitter,
    " . $mod_tb_root . "_ssgid  
";
$sql .= " FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_masterkey='" . $_REQUEST["masterkey"] . "'  
AND  " . $mod_tb_root . "_id='" . $_REQUEST['valEditID'] . "' ";
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
// print_pre($sql);
$valID = $Row[0];
$valCredate = DateFormatInsertRe($Row[1]);

$valCreby = $Row[2];
$valStatus = $Row[3];
if ($valStatus == "Enable") {
    $valStatusClass = "fontContantTbEnable";
} elseif ($valStatus == "Related") {
    $valStatusClass = "fontContantTbRelated";
} else {
    $valStatusClass = "fontContantTbDisable";
}
if ($Row[4] != "0000-00-00 00:00:00") {
  $valSdate = DateFormatInsertRe($Row[4]);
} 
if ($Row[5] != "0000-00-00 00:00:00") {
  $valEdate = DateFormatInsertRe($Row[5]);
} 

$valLastdate = DateFormat($Row[6]);
$valLastby = $Row[7];
$valType = $Row[8];
$valURL = rechangeQuot($Row[9]);
//print_pre($valURL);
$valView = number_format($Row[10]);
$valGid = $Row[11];

$valSubject = rechangeQuot($Row[14]);
$valTitle = rechangeQuot($Row[15]);

$valSgid = $Row[16];
$valPic=$mod_path_real."/".$Row[13];
$valPicName=$Row[13];
$valPermission= getUserPermissionOnMenu($_SESSION[$valSiteManage."core_session_groupid"],$_POST["menukeyid"]);

$valSubTitle=$Row[17];


$valFacebook = rechangeQuot($Row[18]);
$valGmail = rechangeQuot($Row[19]);
$valYoutube = rechangeQuot($Row[20]);
$valLine = rechangeQuot($Row[21]);
$valIg = rechangeQuot($Row[22]);
$valTwitter = rechangeQuot($Row[23]);
$valSSgid = $Row[24];


?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <link href="../css/theme.css" rel="stylesheet" />
    <link href="js/uploadfile.css" rel="stylesheet" />

    <title><?=$core_name_title?></title>
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


            if (isBlank(inputSubject)) {
                inputSubject.focus();
                jQuery("#inputSubject").addClass("formInputContantTbAlertY");
                return false;
            } else {
                jQuery("#inputSubject").removeClass("formInputContantTbAlertY");
            }

        }

        updateContactNew('updateContant.php');

    }

    function loadCheckUser() {
        with(document.myForm) {
            var inputValuename = document.myForm.inputUserName.value;
        }
        if (inputValuename != '') {
            checkUsermember(inputValuename);
        }
    }


    jQuery(document).ready(function() {

        jQuery('#myForm').keypress(function(e) {
            /* Start  Enter Check CKeditor */
            // var focusManager = new CKEDITOR.focusManager( editDetail );
            // var checkFocus =CKEDITOR.instances.editDetail.focusManager.hasFocus;
            var checkFocusTitle = jQuery("#inputDescription").is(":focus");

            if (e.which == 13) {
                //e.preventDefault();
                if (!checkFocusTitle) {
                    //	if(!checkFocus){
                    executeSubmit();
                    return false;
                    //}
                }
            }
            /* End  Enter Check CKeditor */
        });
    });
    </script>
</head>

<body>
    <form action="?" method="get" name="myForm" id="myForm" enctype="multipart/form-data">
        <input name="execute" type="hidden" id="execute" value="update" />
        <input name="masterkey" type="hidden" id="masterkey" value="<?=$_REQUEST['masterkey']?>" />
        <input name="menukeyid" type="hidden" id="menukeyid" value="<?=$_REQUEST['menukeyid']?>" />
        <input name="inputSearch" type="hidden" id="inputSearch" value="<?=$_REQUEST['inputSearch']?>" />
        <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?=$_REQUEST['module_pageshow']?>" />
        <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?=$_REQUEST['module_pagesize']?>" />
        <input name="module_orderby" type="hidden" id="module_orderby" value="<?=$_REQUEST['module_orderby']?>" />
        <input name="inputGh" type="hidden" id="inputGh" value="<?=$_REQUEST['inputGh']?>" />
        <input name="valEditID" type="hidden" id="valEditID" value="<?=$_REQUEST['valEditID']?>" />
        <input name="valDelFile" type="hidden" id="valDelFile" value="" />
        <input name="valDelAlbum" type="hidden" id="valDelAlbum" value="" />
        <input name="inputHtml" type="hidden" id="inputHtml" value="" />
        <input name="inputHtmlDel" type="hidden" id="inputHtmlDel" value="<?=$valhtmlname?>" />
        <input name="inputLt" type="hidden" id="inputLt" value="<?=$_REQUEST['inputLt']?>" />
        <input name="inputSGh" type="hidden" id="inputSGh" value="<?=$_REQUEST['inputSGh']?>" />
        <div class="divRightNav">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a
                                href="<?=$valLinkNav1?>" target="_self"><?=$valNav1?></a> <img src="../img/btn/nav.png"
                                align="absmiddle" vspace="5" /> <a href="javascript:void(0)"
                                onclick="btnBackPage('index.php')"
                                target="_self"><?=$langMod["meu:contant"]//$langMod["tit:inpName"]?></a> <img
                                src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?=$langMod["txt:titleedit"]?>
                            <? if($_SESSION[$valSiteManage.'core_session_languageT']==2 || $_SESSION[$valSiteManage.'core_session_languageT']==3){?>(<?=getSystemLangTxt($_REQUEST['inputLt'],$langTxt["lg:thai"],$langTxt["lg:eng"])?>)
                            <? }?></span></td>
                    <td class="divRightNavTb" align="right">
                    </td>
                </tr>
            </table>
        </div>
        <div class="divRightHead">
            <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
                <tr>
                    <td height="77" align="left"><span class="fontHeadRight"><?=$langMod["txt:titleedit"]?>
                            <? if($_SESSION[$valSiteManage.'core_session_languageT']==2 || $_SESSION[$valSiteManage.'core_session_languageT']==3){?>(<?=getSystemLangTxt($_REQUEST['inputLt'],$langTxt["lg:thai"],$langTxt["lg:eng"])?>)
                            <? }?></span></td>
                    <td align="left">
                        <table border="0" cellspacing="0" cellpadding="0" align="right">
                            <tr>
                                <td align="right">
                                    <? if($valPermission=="RW" ){?>
                                    <div class="btnSave" title="<?=$langTxt["btn:save"]?>" onclick="executeSubmit();">
                                    </div>
                                    <? }?>
                                    <div class="btnBack" title="<?=$langTxt["btn:back"]?>"
                                        onclick="btnBackPage('index.php')"></div>
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
                        <span class="formFontSubjectTxt"><?=$langMod["txt:subject"]?></span><br />
                        <span class="formFontTileTxt"><?=$langMod["txt:subjectDe"]?></span> </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?=$langMod["tit:selectgn"]?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <select name="inputGroupID" id="inputGroupID" class="formSelectContantTb"
                            onchange="openSelectSub('openSelectSub.php')">
                            <option value="0"><?=$langMod["tit:selectg"]?></option>
                            <?
	$sql_group = "SELECT ";
			if($_REQUEST['inputLt']=="Thai"){
				$sql_group .= "  ".$mod_tb_root_group."_id,".$mod_tb_root_group."_subject";
			}else if($_REQUEST['inputLt']=="Eng"){
				$sql_group .= " ".$mod_tb_root_group."_id,".$mod_tb_root_group."_subjecten ";
			}else{
				$sql_group .= " ".$mod_tb_root_group."_id,".$mod_tb_root_group."_subjectcn ";
			}

			$sql_group .= "  FROM ".$mod_tb_root_group." WHERE  ".$mod_tb_root_group."_masterkey ='".$_REQUEST['masterkey']."'   ORDER BY ".$mod_tb_root_group."_order DESC ";
		$query_group=wewebQueryDB($coreLanguageSQL, $sql_group);
		while($row_group=wewebFetchArrayDB($coreLanguageSQL,$query_group)) {
		$row_groupid=$row_group[0];
		$row_groupname=$row_group[1];
		?>
                            <option value="<?=$row_groupid?>" <? if($valGid==$row_groupid){ ?> selected="selected"
                                <?  }?>><?=$row_groupname?></option>
                            <? }?>
                        </select></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?=$langMod["tit:selectgn"]?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb" id="boxSubSelect">
                        <select name="inputSubgroupID" id="inputSubgroupID" class="formSelectContantTb"
                        onchange="openSelectSub2('openSelectSub2.php')"
                        >
                            <option value="0"><?=$langMod["tit:selectsg"]?></option>
                            <?
	$sql_group = "SELECT ";
			if($_REQUEST['inputLt']=="Thai"){
				$sql_group .= "  ".$mod_tb_root_sub_group."_id,".$mod_tb_root_sub_group."_subject";
			}else if($_REQUEST['inputLt']=="Eng"){
				$sql_group .= " ".$mod_tb_root_sub_group."_id,".$mod_tb_root_sub_group."_subjecten ";
			}else{
				$sql_group .= " ".$mod_tb_root_sub_group."_id,".$mod_tb_root_sub_group."_subjectcn ";
			}

			$sql_group .= "  FROM ".$mod_tb_root_sub_group." WHERE  ".$mod_tb_root_sub_group."_masterkey ='".$_REQUEST['masterkey']."' AND  ".$mod_tb_root_sub_group."_gid ='".$valGid."'   ORDER BY ".$mod_tb_root_sub_group."_order DESC ";
		$query_group=wewebQueryDB($coreLanguageSQL, $sql_group);
		while($row_group=wewebFetchArrayDB($coreLanguageSQL,$query_group)) {
		$row_groupid=$row_group[0];
		$row_groupname=$row_group[1];
		?>
                            <option value="<?=$row_groupid?>" <? if($valSgid==$row_groupid){ ?> selected="selected"
                                <?  }?>><?=$row_groupname?></option>
                            <? }?>
                        </select></td>
                </tr>
                <tr id="boxSSubSelect">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?=$langMod["tit:selectgn"]?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb" id="boxSSubGroup">
                        <select name="inputSSubgroupID" id="inputSSubgroupID" class="formSelectContantTb">
                            <option value="0"><?=$langMod["tit:selectsg"]?></option>
                            <?
	$sql_group = "SELECT ";
			if($_REQUEST['inputLt']=="Thai"){
				$sql_group .= "  ".$mod_tb_root_sub_group."_id,".$mod_tb_root_sub_group."_subject";
			}else if($_REQUEST['inputLt']=="Eng"){
				$sql_group .= " ".$mod_tb_root_sub_group."_id,".$mod_tb_root_sub_group."_subjecten ";
			}else{
				$sql_group .= " ".$mod_tb_root_sub_group."_id,".$mod_tb_root_sub_group."_subjectcn ";
			}

			echo $sql_group .= "  FROM ".$mod_tb_root_sub_group." WHERE  ".$mod_tb_root_sub_group."_masterkey ='".$_REQUEST['masterkey']."' AND  ".$mod_tb_root_sub_group."_parentid ='".$valSgid."'   ORDER BY ".$mod_tb_root_sub_group."_order DESC ";
		$query_group=wewebQueryDB($coreLanguageSQL, $sql_group);
		while($row_group=wewebFetchArrayDB($coreLanguageSQL,$query_group)) {
		$row_groupid=$row_group[0];
		$row_groupname=$row_group[1];
		?>
                            <option value="<?=$row_groupid?>" <? if($valSSgid==$row_groupid){ ?> selected="selected"
                                <?  }?>><?=$row_groupname?></option>
                            <? }?>
                        </select></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?=$langMod["tit:inpName"]?><span class="fontContantAlert">*</span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input
                            name="inputSubject" id="inputSubject" type="text" class="formInputContantTb"
                            value="<?=$valSubject?>" /></td>
                </tr>
                <tr>
                    <td align="right" valign="top" class="formLeftContantTb"><?=$langMod["tit:title"]?><span
                            class="fontContantAlert">*</span></td>
                    <td colspan="6" align="left" valign="top" class="formRightContantTb">
                        <textarea name="inputDescription" id="inputDescription" cols="45" rows="5"
                            class="formTextareaContantTb"><?=$valTitle?></textarea> </td>
                </tr>


                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">หัวข้อย่อย</td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputSubtype" id="inputSubtype" value="0" <? if($valSubTitle == 0){ echo "checked";}?> />
                            </div>
                            <div class="formDivRadioR">ไม่มี</div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputSubtype" id="inputSubtype" value="1" <? if($valSubTitle == 1){ echo "checked";}?> />
                            </div>
                            <div class="formDivRadioR">มี</div>
                        </label>
                    </td>
                </tr>

            </table>
           <br/>
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder " id="subTitle0" <?php if ($valSubTitle == "1"){ ?> style="display: none;" <?php } ?>>
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
                            <div class="formDivRadioL"><input type="radio" name="inputType" id="inputType"   value="file" <?php if($valType == 'file'){ echo "checked";} ?> onClick="document.getElementById('row_link').style.display='none';document.getElementById('row_comment').style.display='';document.getElementById('row_file').style.display='';document.getElementById('row_pic').style.display='none';document.getElementById('row_facebook').style.display='none';document.getElementById('row_email').style.display='none';document.getElementById('row_youtube').style.display='none';document.getElementById('row_line').style.display='none';document.getElementById('row_ig').style.display='none';document.getElementById('row_twitter').style.display='none';"/></div>
                            <div class="formDivRadioR"><?=$arrayType[0]?></div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType" id="inputType"  value="url" <?php if($valType == 'url'){ echo "checked";} ?>  onClick="document.getElementById('row_link').style.display='';document.getElementById('row_comment').style.display='none';document.getElementById('row_file').style.display='none';document.getElementById('row_pic').style.display='none';document.getElementById('row_facebook').style.display='none';document.getElementById('row_email').style.display='none';document.getElementById('row_youtube').style.display='none';document.getElementById('row_line').style.display='none';document.getElementById('row_ig').style.display='none';document.getElementById('row_twitter').style.display='none';"/></div>
                            <div class="formDivRadioR"><?=$arrayType[1]?></div>
                        </label>


                        <!--<label>
                            <div class="formDivRadioL"><input type="radio" name="inputType" id="inputType"  value="social" <?php if($valType == 'social'){ echo "checked";} ?> onClick="document.getElementById('row_link').style.display='none';document.getElementById('row_comment').style.display='none';document.getElementById('row_file').style.display='none';document.getElementById('row_pic').style.display='none';document.getElementById('row_facebook').style.display='';document.getElementById('row_email').style.display='';document.getElementById('row_youtube').style.display='';document.getElementById('row_line').style.display='';document.getElementById('row_ig').style.display='';document.getElementById('row_twitter').style.display='';"/></div>
                            <div class="formDivRadioR">Social Network</div>
                        </label>-->
                    </td>
                </tr>

                <tr id="row_facebook" <?php if ($valType != "social"){ ?> style="display: none;" <?php } ?> >
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Facebook</td>
                    <td width="82%"> <textarea name="inputfacebook" id="inputfacebook" class="formTextareaContantTb"><?if($valFacebook!=''){echo $valFacebook;}else{?>http://<?}?></textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_email" <?php if ($valType != "social"){ ?> style="display: none;" <?php } ?>>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Email</td>
                    <td width="82%"> <textarea name="inputemail" id="inputemail" class="formTextareaContantTb"><?if($valGmail!=''){echo $valGmail;}else{?>http://<?}?></textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_line" <?php if ($valType != "social"){ ?> style="display: none;" <?php } ?>>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Line</td>
                    <td width="82%"> <textarea name="inputline" id="inputline" class="formTextareaContantTb"><?if($valLine!=''){echo $valLine;}else{?>http://<?}?></textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_youtube" <?php if ($valType != "social"){ ?> style="display: none;" <?php } ?>>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Youtube</td>
                    <td width="82%"> <textarea name="inputyoutube" id="inputyoutube" class="formTextareaContantTb"><?if($valYoutube!=''){echo $valYoutube;}else{?>http://<?}?></textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_ig" <?php if ($valType != "social"){ ?> style="display: none;" <?php } ?>>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Instagram</td>
                    <td width="82%"> <textarea name="inputig" id="inputig" class="formTextareaContantTb"><?if($valIg!=''){echo $valIg;}else{?>http://<?}?></textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_twitter" <?php if ($valType != "social"){ ?> style="display: none;" <?php } ?>>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" >Twitter</td>
                    <td width="82%"> <textarea name="inputtwitter" id="inputtwitter" class="formTextareaContantTb"><?if($valTwitter!=''){echo $valTwitter;}else{?>http://<?}?></textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_link" <?php if ($valType != "url"){ ?> style="display: none;" <?php } ?>>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?=$langMod["inp:link"]?>  </td>
                    <td width="82%"> <textarea name="inputurl" id="inputurl" class="formTextareaContantTb"><?if($valURL!=''){echo $valURL;}else{?>http://<?}?></textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_pic" <?php if ($valType != "pic"){ ?> style="display: none;" <?php } ?>>
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
                <tr id="row_file" <?php if ($valType != "file"){ ?> style="display: none;" <?php } ?>>
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
                <tr id="row_comment" <?php if ($valType != "file"){ ?> style="display: none;" <?php } ?>>
                    <td width="18%" align="right"> </td>
                    <td width="82%" valign="top"><span class="formFontNoteTxt"><?=$txt_mod["edit:vdonote"]?></span>
                        <div class="clearAll"></div>
                        <div id="boxFileNew" class="formFontTileTxt">
                        <?
                            $sql = "SELECT " . $mod_tb_file . "_id," . $mod_tb_file . "_filename," . $mod_tb_file . "_name FROM " . $mod_tb_file . "
                            WHERE  " . $mod_tb_file . "_language  ='" . $_SESSION[$valSiteManage . 'core_session_language'] . "' 
                            AND " . $mod_tb_file . "_type='0'
                            AND " . $mod_tb_file . "_contantid='" . $_POST["valEditID"] . "' ";
                            $sql .= " ORDER BY ".$mod_tb_file."_order DESC";
                            //s print_pre($sql);
                            $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                            $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                            if ($number_row >= 1) {
                                $txtFile = "";
                                while ($row_file = wewebFetchArrayDB($coreLanguageSQL,$query_file)) {
                                    $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                                    $downloadFile = $row_file[1];
                                    $downloadID = $row_file[0];
                                    $downloadName = $row_file[2];
                                    $imageType = strstr($downloadFile, '.');
                                    if ($downloadName != "") {
                                        $txtFile .= "<a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUpload('deleteFile.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $downloadName . "" . $imageType . " | " . $langMod["file:type"] . ": " . $imageType . "  | " . $langMod["file:size"] . ": " . get_IconSize($linkRelativePath) . "<br/>";
                                    } else {

                                        $txtFile .= "<a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUpload('deleteFile.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $downloadFile . " | " . $langMod["file:type"] . ": " . $imageType . "  | " . $langMod["file:size"] . ": " . get_IconSize($linkRelativePath) . "<br/>";
                                    }
                                }
                            }

                            echo $txtFile;
                            ?>
                            <input name="inputFileName" id="inputFileName" type="hidden" class="formInputContantTb" />
                        </div>
                    </td>
                </tr>

            </table>

                        </br>
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder " id="subTitle1" <?php if ($valSubTitle == "0"){ ?> style="display: none;" <?php } ?>>
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
                        <!-- <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType_sub" id="inputType_sub" value="file" <? if($valType == 'file'){ echo "checked";}?> onClick="document.getElementById('row_link_comment').style.display='none';document.getElementById('row_link_sub').style.display='none';document.getElementById('row_comment_sub').style.display='';document.getElementById('row_file_sub').style.display='';document.getElementById('btnTitle').style.display='none';"/></div>
                            <div class="formDivRadioR"><?=$arrayType[0]?></div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType_sub" id="inputType_sub" value="url" <? if($valType == 'url'){ echo "checked";}?> onClick="document.getElementById('row_link_comment').style.display='';document.getElementById('row_link_sub').style.display='';document.getElementById('row_comment_sub').style.display='none';document.getElementById('row_file_sub').style.display='none';document.getElementById('btnTitle').style.display='';"/></div>
                            <div class="formDivRadioR"><?=$arrayType[1]?></div>
                        </label> -->
                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType_sub" id="inputType_sub" <? if($valType == 'file'){ echo "checked";}?>   value="file" onClick="document.getElementById('row_link_comment').style.display='none';document.getElementById('row_link_sub').style.display='none';document.getElementById('row_comment_sub').style.display='';document.getElementById('row_file_sub').style.display='';"/></div>
                            <div class="formDivRadioR"><?=$arrayType[0]?></div>
                        </label>

                        <label>
                            <div class="formDivRadioL"><input type="radio" name="inputType_sub" id="inputType_sub" <? if($valType == 'url'){ echo "checked";}?>  value="url"  onClick="document.getElementById('row_link_comment').style.display='';document.getElementById('row_link_sub').style.display='';document.getElementById('row_comment_sub').style.display='none';document.getElementById('row_file_sub').style.display='none';"/></div>
                            <div class="formDivRadioR"><?=$arrayType[1]?></div>
                        </label>
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
                <tr id="row_file_title" >
                    <td width="20%" align="right" valign="top" class="formLeftContantTb">ชื่อหัวข้อ</td>
                    <td width="70%">
                    <input width="10%" name="inputName" id="inputName" type="text" class="formInputContantTb"/>
                    </td>
                </tr>
                <tr id="row_file_title" >
                    <td width="20%" align="right" valign="top" class="formLeftContantTb">รายละเอียด</td>
                    <td width="70%">
                    <input width="10%" name="inputTitle" id="inputTitle" type="text" class="formInputContantTb"/>
                    </td>
                </tr>

                <tr id="row_file_sub" <?php if ($valType != "file"){ ?> style="display: none;" <?php } ?>>
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
                
                <tr id="row_comment_sub" <?php if ($valType != "file"){ ?> style="display: none;" <?php } ?>>
                    <td width="18%" align="right"> </td>
                    <td width="82%" valign="top"><span class="formFontNoteTxt"><?=$txt_mod["edit:vdonote"]?></span>
                    <div class="clearAll"></div>
                    
                        <div id="boxFileNewTitle" class="formFontTileTxt">
                        <?
                        $sql = "SELECT " . $mod_tb_file . "_id," 
                        . $mod_tb_file . "_filename," 
                        . $mod_tb_file . "_name," 
                        . $mod_tb_file . "_title,"
                        . $mod_tb_file . "_code
                        FROM " . $mod_tb_file . "
                        WHERE  " . $mod_tb_file . "_language  ='" . $_SESSION[$valSiteManage . 'core_session_language'] . "' 
                        AND " . $mod_tb_file . "_file='file'
                        AND " . $mod_tb_file . "_contantid='" . $_POST["valEditID"] . "' ";
                        $sql .= " ORDER BY ".$mod_tb_file."_order DESC";
                        //s print_pre($sql);
                        $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                        $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                        if ($number_row >= 1) {
                            $txtFileTitle = "";
                            while ($row_file = wewebFetchArrayDB($coreLanguageSQL,$query_file)) {
                                $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                                $downloadFile = $row_file[1];
                                $downloadID = $row_file[0];
                                $downloadName = $row_file[2];
                                $valTtile = $row_file[3];
                                $valCode = $row_file[4];
                                $imageType = strstr($downloadFile, '.');
                                if ($downloadName != "") {

                                    $txtFileTitle .= "• <span>$valCode</span>-<span>$valTtile</span> <a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUploadTitle('deleteFileTitle.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $downloadName . "" . $imageType . " | " . $langMod["file:type"] . ": " . $imageType . "  | " . $langMod["file:size"] . ": " . get_IconSize($linkRelativePath) . "<br/>";
                                } else {

                                    $txtFileTitle .= "• <span>$valCode</span>-<span>$valTtile</span> <a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUploadTitle('deleteFileTitle.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $downloadFile . " | " . $langMod["file:type"] . ": " . $imageType . "  | " . $langMod["file:size"] . ": " . get_IconSize($linkRelativePath) . "<br/>";
                                }
                            }
                        }

                        echo $txtFileTitle;
                        ?>
                            <input name="inputFileNameTitle" id="inputFileNameTitle" type="hidden" class="formInputContantTb" />
                        </div>
                    </td>
                </tr>

                <tr id="row_link_sub" <?php if ($valType != "url"){ ?> style="display: none;" <?php } ?>>
                    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?=$langMod["inp:link"]?>  </td>
                    <td width="82%"> <textarea name="inputurl1" id="inputurl1" class="formTextareaContantTb">http://</textarea><br/>
                        <span class="formFontNoteTxt"><?=$txt_mod["edit:linknote"]?></span>
                    </td>
                </tr>
                <tr id="row_link_comment" <?php if ($valType != "url"){ ?> style="display: none;" <?php } ?>>
                    <td width="18%" align="right"> </td>
                    <td width="82%" valign="top"><span class="formFontNoteTxt"></span>

                        <div id="boxFileNewTitleSub" class="formFontTileTxt">
                        <?
                        $sql = "SELECT " . $mod_tb_file . "_id," . $mod_tb_file . "_filename," . $mod_tb_file . "_name," . $mod_tb_file . "_title," . $mod_tb_file . "_url," . $mod_tb_file . "_code FROM " . $mod_tb_file . "
                        WHERE  " . $mod_tb_file . "_language  ='" . $_SESSION[$valSiteManage . 'core_session_language'] . "' 
                        AND " . $mod_tb_file . "_file='url'
                        AND " . $mod_tb_file . "_contantid='" . $_POST["valEditID"] . "' ";
                        $sql .= " ORDER BY ".$mod_tb_file."_order DESC";
                        $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                        $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                        if ($number_row >= 1) {
                            $txtFileTitle1 = "";
                            while ($row_file = wewebFetchArrayDB($coreLanguageSQL,$query_file)) {
                                $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                                $downloadFile = $row_file[1];
                                $downloadID = $row_file[0];
                                $downloadName = $row_file[2];
                                $valTitle = $row_file[3];
                                $valUrl = $row_file[4];
                                $valCode = $row_file[5];
                                $imageType = strstr($downloadFile, '.');
                                if ($downloadName != "") {

                                    $txtFileTitle1 .= "• <span>$valCode</span>-<span>$valTitle</span> <a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUploadLinkTitle('deleteFileTitle.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $valUrl . "<br/>";
                                } else {

                                    $txtFileTitle1 .= "• <span>$valCode</span>-<span>$valTitle</span> <a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUploadLinkTitle('deleteFileTitle.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $valUrl . "<br/>";
                                }
                            }
                        }

                        echo $txtFileTitle1;
                        ?>
                            <input name="inputFileNameTitleSub" id="inputFileNameTitleSub" type="hidden" class="formInputContantTb" />
                        </div>
                    </td>
                </tr>
              

                <!-- <tr id="row_file">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">หัวข้อย่อย
                    </td>
                    <td width="82%">
                    <input  name="inputTitle" id="inputTitle" type="text" class="formInputContantTb"/>
                    <td>
                </tr>

                <tr id="row_file">
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?=$langMod["inp:uploadfile"]?>
                    </td>
                    <td width="82%">
                        <div class="file-input-wrapper">
                            <button class="btn-file-input"><?=$langTxt["us:inputpicselect"]?></button>
                            <input type="file" name="inputFileUploadTitle" id="inputFileUploadTitle"
                                onchange="ajaxFileUploadDocTitle();" />
                        </div>
                    <td>
                </tr>
                <tr id="row_comment">
                    <td width="18%" align="right"> </td>
                    <td width="82%" valign="top"><span class="formFontNoteTxt"><?=$txt_mod["edit:vdonote"]?></span>
                        <div class="clearAll"></div>
                        <div id="boxFileNewTitle" class="formFontTileTxt">
                        <?
                        $sql = "SELECT " . $mod_tb_file . "_id," . $mod_tb_file . "_filename," . $mod_tb_file . "_name," . $mod_tb_file . "_title FROM " . $mod_tb_file . "
                        WHERE  " . $mod_tb_file . "_language  ='" . $_SESSION[$valSiteManage . 'core_session_language'] . "' 
                        AND " . $mod_tb_file . "_type='1'
                        AND " . $mod_tb_file . "_contantid='" . $_POST["valEditID"] . "' ";
                        $sql .= " ORDER BY ".$mod_tb_file."_order DESC";
                        //s print_pre($sql);
                        $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                        $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                        if ($number_row >= 1) {
                            $txtFileTitle = "";
                            while ($row_file = wewebFetchArrayDB($coreLanguageSQL,$query_file)) {
                                $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                                $downloadFile = $row_file[1];
                                $downloadID = $row_file[0];
                                $downloadName = $row_file[2];
                                $valTtile = $row_file[3];
                                $imageType = strstr($downloadFile, '.');
                                if ($downloadName != "") {

                                    $txtFileTitle .= "• <span>$valTtile</span> <a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUploadTitle('deleteFileTitle.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $downloadName . "" . $imageType . " | " . $langMod["file:type"] . ": " . $imageType . "  | " . $langMod["file:size"] . ": " . get_IconSize($linkRelativePath) . "<br/>";
                                } else {

                                    $txtFileTitle .= "• <span>$valTtile</span> <a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUploadTitle('deleteFileTitle.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $downloadFile . " | " . $langMod["file:type"] . ": " . $imageType . "  | " . $langMod["file:size"] . ": " . get_IconSize($linkRelativePath) . "<br/>";
                                }
                            }
                        }

                        echo $txtFileTitle;
                        ?>
                            <input name="inputFileNameTitle" id="inputFileNameTitle" type="hidden" class="formInputContantTb" />
                        </div>
                    </td>
                </tr> -->
            </table>

            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder "
                style="display:none;">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?=$langMod["txt:seo"]?></span><br />
                        <span class="formFontTileTxt"><?=$langMod["txt:seoDe"]?></span> </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?=$langMod["inp:seotitle"]?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input
                            name="inputTagTitle" id="inputTagTitle" type="text" class="formInputContantTb"
                            value="<?=$valMetatitle?>" /><br />
                        <span class="formFontNoteTxt"><?=$langMod["inp:seotitlenote"]?></span></td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?=$langMod["inp:seodes"]?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input
                            name="inputTagDescription" id="inputTagDescription" type="text" class="formInputContantTb"
                            value="<?=$valDescription?>" /><br />
                        <span class="formFontNoteTxt"><?=$langMod["inp:seodesnote"]?></span></td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?=$langMod["inp:seokey"]?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input
                            name="inputTagKeywords" id="inputTagKeywords" type="text" class="formInputContantTb"
                            value="<?=$valKeywords?>" /><br />
                        <span class="formFontNoteTxt"><?=$langMod["inp:seokeynote"]?></span></td>
                </tr>
            </table>
            <br />
            <!-- <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?=$langMod["txt:datec"]?></span><br />
                        <span class="formFontTileTxt"><?=$langMod["txt:datecDe"]?></span> </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb">
                        <?=$langTxt["us:credate"]?><span class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <input name="cdateInput" id="cdateInput" type="text" class="formInputContantTbShot"
                            value="<?=$valCredate?>" /></td>
                </tr>
            </table>
            <br /> -->
            <!-- <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
                <tr>
                    <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                        <span class="formFontSubjectTxt"><?=$langMod["txt:date"]?></span><br />
                        <span class="formFontTileTxt"><?=$langMod["txt:dateDe"]?></span> </td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="top" height="15"></td>
                </tr>

                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?=$langMod["tit:sdate"]?><span
                            class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <input name="sdateInput" id="sdateInput" type="text" class="formInputContantTbShot"
                            value="<?=$valSdate?>" /></td>
                </tr>
                <tr>
                    <td width="18%" align="right" valign="top" class="formLeftContantTb"><?=$langMod["tit:edate"]?><span
                            class="fontContantAlert"></span></td>
                    <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                        <input name="edateInput" id="edateInput" type="text" class="formInputContantTbShot"
                            value="<?=$valEdate?>" /><br />
                        <span class="formFontNoteTxt"><?=$langMod["inp:notedate"]?></span></td>
                </tr>




            </table>
            <br /> -->
            <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">

                <tr>
                    <td colspan="7" align="right" valign="top" height="20"></td>
                </tr>
                <tr>
                    <td colspan="7" align="right" valign="middle" class="formEndContantTb"><a href="#defTop"
                            title="<?=$langTxt["btn:gototop"]?>"><?=$langTxt["btn:gototop"]?> <img
                                src="../img/btn/top.png" align="absmiddle" /></a></td>
                </tr>
            </table>
        </div>
    </form>
    <script type="text/javascript" src="../js/ajaxfileupload.js"></script>
    <script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
    <script type="text/javascript" language="javascript">

$('input[type=radio][name=inputSubtype]').change(function() {
       
       if (this.value == 0) {   
           $("#subTitle1").hide();         
           $("#subTitle0").show();         
       }else{           
           $("#subTitle0").hide();
           $("#subTitle1").show();
       }        
   });
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
  
    function addTitle(){
        
        var valuefilename = jQuery("input#inputFileNameTitle").val();

        var valueType = $('input[name=inputSubtype]:checked').val();

        var valueTypeSub = $('input[name=inputType_sub]:checked').val();

        var valueTitle = $('#inputTitle').val();
        var valueName = $('#inputName').val();
        var valueCode = $('#inputCode').val();
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
            url: 'loadUpdateFileTitle.php?myID=<?=$_REQUEST["valEditID"]?>&masterkey=<?=$_REQUEST['masterkey']?>&langt=<?=$_REQUEST['inputLt']?>&nametodoc=' + valuefilename + '&menuid=<?=$_REQUEST['menukeyid']?>' + '&valueType=<?php echo $valSubTitle ?>' + '&valueTitle='+valueTitle+ '&valueCode='+valueCode+ '&valueName='+valueName+ '&valueTypeSub='+valueTypeSub,
            data: {'valueUrl' : valueUrl},
            dataType: 'json',
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
            url: 'loadUpdateFileTitle.php?myID=<?=$_REQUEST["valEditID"]?>&masterkey=<?=$_REQUEST['masterkey']?>&langt=<?=$_REQUEST['inputLt']?>&nametodoc=' + valuefilename + '&menuid=<?=$_REQUEST['menukeyid']?>' + '&valueType=<?php echo $valSubTitle ?>' + '&valueTitle='+valueTitle+ '&valueCode='+valueCode+ '&valueName='+valueName+ '&valueTypeSub='+valueTypeSub,
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

            url: 'loadUpdateFile.php?myID=<?=$_REQUEST["valEditID"]?>&masterkey=<?=$_REQUEST['masterkey']?>&langt=<?=$_REQUEST['inputLt']?>&nametodoc=' + valuefilename + '&menuid=<?=$_REQUEST['menukeyid']?>'+ '&valueType=<?php echo $valSubTitle ?>' + '&valueTitle='+valueTitle,
            secureuri: true,
            fileElementId: 'inputFileUpload',
            dataType: 'json',
            success: function(data, status) {
                if (typeof(data.error) != 'undefined') {

                    if (data.error != '') {
                        alert(data.error);
                        setTimeout(jQuery.unblockUI, 200);
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
            url: 'loadUpdatePic.php?myID=<?=$_POST["valEditID"]?>&masterkey=<?=$_REQUEST['masterkey']?>&langt=<?=$_REQUEST['inputLt']?>&delpicname=' + valuepicname + '&menuid=<?=$_REQUEST['menukeyid']?>',
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

    <? if($_SESSION[$valSiteManage.'core_session_language']=="Thai"){?>
    <script language="JavaScript" type="text/javascript" src="../js/datepickerThai.js"></script>
    <? }else{?>
    <script language="JavaScript" type="text/javascript" src="../js/datepickerEng.js"></script>
    <? }?>
    <? include("../lib/disconnect.php");?>

</body>

</html>