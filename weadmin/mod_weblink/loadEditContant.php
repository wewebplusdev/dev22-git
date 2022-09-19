<?php
include "../lib/session.php";
include "../lib/config.php";
include "../lib/connect.php";
include "../lib/function.php";
include "../lib/checkMember.php";
include "../core/incLang.php";
include "config.php";
include "incModLang.php";

$valClassNav = 2;
$valNav1 = $langTxt["nav:home2"];
$valLinkNav1 = "../core/index.php";


if ($_REQUEST['inputLt'] == "Thai") {

  $sql = "SELECT  ";
  $sql .= "
        " . $mod_tb_root . "_id,
        " . $mod_tb_root . "_lastdate,
        " . $mod_tb_root . "_creby,
        " . $mod_tb_root . "_status ,
        " . $mod_tb_root . "_subject    ,
        " . $mod_tb_root . "_sdate,
        " . $mod_tb_root . "_edate,
        " . $mod_tb_root . "_target,
        " . $mod_tb_root . "_url as url,
        " . $mod_tb_root . "_title as title,
        " . $mod_tb_root . "_typevdo as vdotype,
        " . $mod_tb_root . "_filevdo as filevdo,
        " . $mod_tb_root . "_desc as descript,
        " . $mod_tb_root . "_urlvdo as urlvdo,
        " . $mod_tb_root . "_pic as pic 
         ";
} elseif ($_REQUEST['inputLt'] == "Eng") {

  $sql = "SELECT  ";
  $sql .= "
      " . $mod_tb_root . "_id,
      " . $mod_tb_root . "_lastdate,
      " . $mod_tb_root . "_creby,
      " . $mod_tb_root . "_status ,
      " . $mod_tb_root . "_subjecten    ,
      " . $mod_tb_root . "_sdate,
      " . $mod_tb_root . "_edate,
      " . $mod_tb_root . "_target,
      " . $mod_tb_root . "_urlen as url,
      " . $mod_tb_root . "_titleen as title,
      " . $mod_tb_root . "_typevdo as vdotype,
      " . $mod_tb_root . "_filevdoen as filevdo,
      " . $mod_tb_root . "_descen as descript,
      " . $mod_tb_root . "_urlvdoen as urlvdo,
      " . $mod_tb_root . "_picen as pic 
      ";
} else {

  $sql = "SELECT  ";
  $sql .= "
      " . $mod_tb_root . "_id,
      " . $mod_tb_root . "_lastdate,
      " . $mod_tb_root . "_creby,
      " . $mod_tb_root . "_status ,
      " . $mod_tb_root . "_subjectcn    ,
      " . $mod_tb_root . "_sdate,
      " . $mod_tb_root . "_edate,
      " . $mod_tb_root . "_target,
      " . $mod_tb_root . "_urlcn as url,
      " . $mod_tb_root . "_titlecn as title,
      " . $mod_tb_root . "_typevdo as vdotype,
      " . $mod_tb_root . "_filevdocn as filevdo,
      " . $mod_tb_root . "_desccn as descript,
      " . $mod_tb_root . "_urlvdocn as urlvdo ,
      " . $mod_tb_root . "_piccn as pic 
      ";
}

$sql .= " ,  
" . $mod_tb_root . "_langth as langth,
" . $mod_tb_root . "_langen as langen,
" . $mod_tb_root . "_langcn as langcn
FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_masterkey='" . $_POST["masterkey"] . "' AND  " . $mod_tb_root . "_id 	='" . $_POST["valEditID"] . "'";
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
$valid = $Row[0];
$valcredate = DateFormat($Row[1]);
$valcreby = $Row[2];
$valstatus = $Row[3];
$valSubject = $Row[4];
$valDescript = $Row['descript'];
if ($Row[5] != "0000-00-00 00:00:00" && $Row[5] != "") {
  $valSdate = DateFormatInsertRe($Row[5]);
}
if ($Row[6] != "0000-00-00 00:00:00" && $Row[6] != "") {
  $valEdate = DateFormatInsertRe($Row[6]);
}

$valTarget = $Row[7];
$valPicName = $Row['pic'];
$valPic = $mod_path_real . "/" . $Row['pic'];
$valUrl = $Row['url'];
$valTitle = rechangeQuot($Row['title']);
$valTargetlang = rechangeQuot($Row['targetlang']);
$valTargetlangen = rechangeQuot($Row['targetlangen']);
$valTargetlangcn = rechangeQuot($Row['targetlangcn']);

$valType = $Row['vdotype'];
$valPathvdo =  $mod_path_vdo . "/" . $Row['filevdo'];
$valFilevdo = $Row['filevdo'];
$valUrlvdo = $Row['urlvdo'];
$valLang[0] = $Row['langth'];
$valLang[1] = $Row['langen'];
$valLang[2] = $Row['langcn'];
// print_pre($valType);
$valPermission = getUserPermissionOnMenu($_SESSION[$valSiteManage . "core_session_groupid"], $_POST["menukeyid"]);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="googlebot" content="noindex, nofollow" />
  <link href="../css/theme.css" rel="stylesheet" />

  <title><?php echo $core_name_title ?></title>
  <script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
  <script language="JavaScript" type="text/javascript">
    function executeSubmit() {
      with(document.myForm) {

        var checkbokSetLang = $('input.checkbokSetLang:checkbox:checked').length;
        if (checkbokSetLang == 0) {
          alert('<?php echo $langMod["set:lang:web:alert"]; ?>');
          return false;
        }

        if (isBlank(inputSubject)) {
          inputSubject.focus();
          jQuery("#inputSubject").addClass("formInputContantTbAlertY");
          return false;
        } else {
          jQuery("#inputSubject").removeClass("formInputContantTbAlertY");
        }

        if (inputurl.value == "http://" || isBlank(inputurl)) {
          inputurl.focus();
          jQuery("#inputurl").addClass("formInputContantTbAlertY");
          return false;
        } else {
          jQuery("#inputurl").removeClass("formInputContantTbAlertY");
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

        var checkFocusTitle = jQuery("#inputurl").is(":focus");
        var checkFocusDesc = jQuery("#inputDesc").is(":focus");

        if (e.which == 13) {
          //e.preventDefault();
          if (!checkFocusDesc) {
            executeSubmit();
            return false;

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
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
    <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow'] ?>" />
    <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize'] ?>" />
    <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby'] ?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
    <input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID'] ?>" />
    <input name="valDelFile" type="hidden" id="valDelFile" value="" />
    <input name="valDelAlbum" type="hidden" id="valDelAlbum" value="" />
    <input name="inputHtml" type="hidden" id="inputHtml" value="" />
    <input name="inputHtmlDel" type="hidden" id="inputHtmlDel" value="<?php echo $valhtmlname ?>" />
    <input name="inputLt" type="hidden" id="inputLt" value="<?php echo $_REQUEST['inputLt'] ?>" />
    <div class="divRightNav">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo getNameMenu($_REQUEST["menukeyid"]) ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleedit"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)<?php } ?></span></td>
          <td class="divRightNavTb" align="right">



          </td>
        </tr>
      </table>
    </div>
    <div class="divRightHead">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
        <tr>
          <td height="77" align="left"><span class="fontHeadRight"><?php echo $langMod["txt:titleedit"] ?><?php if ($_SESSION[$valSiteManage . 'core_session_languageT'] == 2 || $_SESSION[$valSiteManage . 'core_session_languageT'] == 3) { ?>(<?php echo getSystemLangTxt($_REQUEST['inputLt'], $langTxt["lg:thai"], $langTxt["lg:eng"], $langTxt["lg:chi"]) ?>)<?php } ?></span></td>
          <td align="left">
            <table border="0" cellspacing="0" cellpadding="0" align="right">
              <tr>
                <td align="right">
                  <?php if ($valPermission == "RW") { ?>
                    <div class="btnSave" title="<?php echo $langTxt["btn:save"] ?>" onclick="executeSubmit();"></div>
                  <?php } ?>
                  <div class="btnBack" title="<?php echo $langTxt["btn:back"] ?>" onclick="btnBackPage('index.php')"></div>
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
            <span class="formFontTileTxt"><?php echo $langMod["txt:subjectDe"] ?></span>
          </td>
        </tr>

        <tr>
          <td colspan="7" align="right" valign="top" height="15"></td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["set:lang:web"] ?><span class="fontContantAlert">*</span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <?php
            foreach ($modTxtSetLang as $key => $value) {
            ?>
              <label>
                <div class="formDivRadioL"><input name="inputSetLang[<?php echo $key ?>]" id="inputSetLang-<?php echo $key ?>" value="1" type="checkbox" class="formRadioContantTb checkbokSetLang" <?php if ($valLang[$key] == 1) {
                                                                                                                                                                                                      echo 'checked';
                                                                                                                                                                                                    } ?> /></div>
                <div class="formDivRadioR"><?php echo $value ?></div>
              </label>
            <?php
            }
            ?>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:inpName"] ?><span class="fontContantAlert">*</span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputSubject" id="inputSubject" type="text" class="formInputContantTb" value="<?php echo $valSubject ?>" /></td>
        </tr>

        <tr id="">
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:linkvdo"] ?><span class="fontContantAlert">*</span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><textarea name="inputurl" id="inputurl" cols="45" rows="5" class="formTextareaContantTb"><?php echo $valUrl ?></textarea><br />
            <span class="formFontNoteTxt"><?php echo $langMod["edit:linknote"] ?></span>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:typevdo"] ?><span class="fontContantAlert">*</span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <label>
              <div class="formDivRadioL"><input name="inputmenutarget" id="inputmenutarget" type="radio" class="formRadioContantTb" value="1" <?php if ($valTarget == 1) { ?> checked="checked" <?php } ?> /></div>
              <div class="formDivRadioR"><?php echo $modTxtTarget[1] ?></div>
            </label>

            <label>
              <div class="formDivRadioL"><input name="inputmenutarget" id="inputmenutarget" type="radio" class="formRadioContantTb" value="2" <?php if ($valTarget == 2) { ?> checked="checked" <?php } ?> /></div>
              <div class="formDivRadioR"><?php echo $modTxtTarget[2] ?></div>
            </label>
            </label>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:title"] ?><span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <textarea name="inputTitle" id="inputTitle" cols="45" rows="5" class="formTextareaContantTb"><?php echo $valTitle ?></textarea><br />
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:desc"] ?><span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <textarea name="inputDesc" id="inputDesc" cols="45" rows="5" class="formTextareaContantTb"><?php echo $valDescript ?></textarea><br />
          </td>
        </tr>

      </table>
      <br />
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["txt:pic"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["txt:picDe"] ?></span>
          </td>
        </tr>
        <tr>
          <td colspan="7" align="right" valign="top" height="15"></td>
        </tr>

        <tr style="display: none;">
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:typevdo"] ?></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <label>
              <div class="formDivRadioL"><input name="inputType" id="inputType" value="url" type="radio" class="formRadioContantTb" onclick="jQuery('#boxInputfile').hide();
                            jQuery('#boxInputlink').show(); jQuery('#boxInputPic').hide();" <?php if ($valType == "url") { ?> checked="checked" <?php } ?> /></div>
              <div class="formDivRadioR"><?php echo  $langMod["tit:linkvdo"] ?> Youtube</div>
            </label>

            <label>
              <div class="formDivRadioL"><input name="inputType" id="inputType" value="file" type="radio" class="formRadioContantTb" onclick="jQuery('#boxInputlink').hide();
                            jQuery('#boxInputfile').show(); jQuery('#boxInputPic').hide();" <?php if ($valType == "file") { ?> checked="checked" <?php } ?> /></div>
              <div class="formDivRadioR"><?php echo  $langMod["tit:uploadvdo"] ?></div>
            </label>

            <label>
              <div class="formDivRadioL"><input name="inputType" id="inputType" value="pic" type="radio" class="formRadioContantTb" onclick="jQuery('#boxInputlink').hide();
                            jQuery('#boxInputfile').hide(); jQuery('#boxInputPic').show();" <?php if ($valType == "pic") { ?> checked="checked" <?php } ?> /></div>
              <div class="formDivRadioR"><?php echo  $langMod["txt:pic"] ?></div>
            </label>
          </td>
        </tr>

        <tr id="boxInputlink" <?php if ($valType == "url") { ?> style="display:show;" <?php } else { ?> style="display:none;" <?php } ?>>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:linkvdo"] ?> Youtube<span class="fontContantAlert">*</span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <textarea name="inputurlvdo" id="inputurlvdo" cols="45" rows="5" class="formTextareaContantTb"><?php echo  $valUrlvdo ?></textarea><br />
            <span class="formFontNoteTxt"><?php echo  $langMod["tit:linkvdonote"] ?></span>
          </td>
        </tr>
        <tr id="boxInputfile" <?php if ($valType == "file") { ?> style="display:show;" <?php } else { ?> style="display:none;" <?php } ?>>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langMod["tit:uploadvdo"] ?></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="file-input-wrapper">
              <button class="btn-file-input"><?php echo  $langTxt["us:inputpicselect"] ?></button>
              <input type="file" name="inputVideoUpload" id="inputVideoUpload" onchange="ajaxVideoUpload();" />
            </div>

            <span class="formFontNoteTxt"><?php echo  $langMod["tit:uploadvdonote"] ?></span>
            <div class="clearAll"></div>
            <div id="boxVideoNew" class="formFontTileTxt">
              <?php
              if (is_file($valPathvdo)) {
                $linkRelativePath = $valPathvdo;
                $imageType = strstr($valFilevdo, '.');
              ?>
                <a href="javascript:void(0)" onclick=" delVideoUpload('deleteVideo.php')"><img src="../img/btn/delete.png" align="absmiddle" title="Delete file" hspace="10" vspace="10" border="0" /></a>Video Upload | <?php echo  $langMod["file:type"] ?>: <?php echo  $imageType ?> | <?php echo  $langMod["file:size"] ?>: <?php echo  get_IconSize($linkRelativePath) ?>
                <input type="hidden" name="vdoname" id="vdoname" value="<?php echo  $valFilevdo ?>" />
              <?php } ?>
            </div>
          </td>
        </tr>

        <tr id="boxInputPic" <?php if ($valType == "pic") { ?> style="display:show;" <?php } else { ?> style="display:none;" <?php } ?>>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["inp:album"] ?></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="file-input-wrapper">
              <button class="btn-file-input"><?php echo $langTxt["us:inputpicselect"] ?></button>
              <input type="file" name="fileToUpload" id="fileToUpload" onchange="ajaxFileUpload();" />
            </div>

            <span class="formFontNoteTxt"><?php echo $langMod["inp:notepic"] ?></span>
            <div class="clearAll"></div>
            <div id="boxPicNew" class="formFontTileTxt">
              <?php if (is_file($valPic)) { ?>
                <img src="<?php echo $valPic ?>" style="float:left;border:#c8c7cc solid 1px;max-width:650px;" />
                <div style="width:22px; height:22px;float:left;z-index:1; margin-left:-22px;cursor:pointer;" onclick="delPicUpload('deletePic.php')" title="Delete file"><img src="../img/btn/delete.png" width="22" height="22" border="0" /></div>
                <input type="hidden" name="picname" id="picname" value="<?php echo $valPicName ?>" />
              <?php } ?>
            </div>
          </td>
        </tr>

      </table>
      <br />
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["txt:seo"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["txt:seoDe"] ?></span>
          </td>
        </tr>
        <tr>
          <td colspan="7" align="right" valign="top" height="15"></td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:sdate"] ?><span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="sdateInput" id="sdateInput" type="text" class="formInputContantTbShot" value="<?php echo $valSdate ?>" /></td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:edate"] ?><span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="edateInput" id="edateInput" type="text" class="formInputContantTbShot" value="<?php echo $valEdate ?>" /><br />
            <span class="formFontNoteTxt"><?php echo $langMod["inp:notedate"] ?></span>
          </td>
        </tr>


        <!-- <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["tit:sdate"] ?><span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><input name="sdateInput" id="sdateInput" type="text"  class="formInputContantTbShot" value="<?php echo $valSdate ?>"/></td>
  </tr>
  <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["tit:edate"] ?><span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><input name="edateInput" id="edateInput"  type="text"  class="formInputContantTbShot" value="<?php echo $valEdate ?>"/><br />
    <span class="formFontNoteTxt"><?php echo $langMod["inp:notedate"] ?></span></td>
  </tr> -->




      </table>
      <br />
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td colspan="7" align="right" valign="top" height="20"></td>
        </tr>
        <tr>
          <td colspan="7" align="right" valign="middle" class="formEndContantTb"><a href="#defTop" title="<?php echo $langTxt["btn:gototop"] ?>"><?php echo $langTxt["btn:gototop"] ?> <img src="../img/btn/top.png" align="absmiddle" /></a></td>
        </tr>
      </table>
    </div>
  </form>
  <script type="text/javascript" src="../js/ajaxfileupload.js"></script>
  <script type="text/javascript" language="javascript">
    /*################################# Upload Pic #######################*/
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
        url: 'loadUpdatePic.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&delpicname=' + valuepicname + '&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
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

    function ajaxFileUpload2() {
      var valuepicname = jQuery("input#picname2").val();

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
        url: 'loadUpdatePic2.php?myID=<?php echo $_POST["valEditID"] ?>&masterkey=<?php echo $_REQUEST['masterkey'] ?>&langt=<?php echo $_REQUEST['inputLt'] ?>&delpicname=' + valuepicname + '&menuid=<?php echo $_REQUEST['menukeyid'] ?>',
        secureuri: false,
        fileElementId: 'fileToUpload2',
        dataType: 'json',
        success: function(data, status) {
          if (typeof(data.error) != 'undefined') {

            if (data.error != '') {
              alert(data.error);

            } else {
              jQuery("#boxPicNew2").show();
              jQuery("#boxPicNew2").html(data.msg);
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

    /*################################# Upload Video #######################*/
    function ajaxVideoUpload() {
      var valuevdoname = jQuery("input#vdoname").val();

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
        url: 'loadUpdateVideo.php?myID=<?php echo  $_POST["valEditID"] ?>&masterkey=<?php echo  $_REQUEST['masterkey'] ?>&langt=<?php echo  $_REQUEST['inputLt'] ?>&delvdoname=' + valuevdoname + '&menuid=<?php echo  $_REQUEST['menukeyid'] ?>',
        secureuri: false,
        fileElementId: 'inputVideoUpload',
        dataType: 'json',
        success: function(data, status) {
          if (typeof(data.error) != 'undefined') {

            if (data.error != '') {
              alert(data.error);

            } else {
              jQuery("#boxVideoNew").show();
              jQuery("#boxVideoNew").html(data.msg);
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
  <?php if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") { ?>
    <script language="JavaScript" type="text/javascript" src="../js/datepickerThai.js"></script>
  <?php } else { ?>
    <script language="JavaScript" type="text/javascript" src="../js/datepickerEng.js"></script>
  <?php } ?>
  <?php include "../lib/disconnect.php"; ?>

</body>

</html>