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
$valNav2 = $langTxt["nav:menuManage2"];


$sql = "SELECT 
" . $mod_tb_root . "_id, 
" . $mod_tb_root . "_masterkey, 
" . $mod_tb_root . "_subject, 
" . $mod_tb_root . "_theme, 
" . $mod_tb_root . "_col
";


$sql .= "
FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_id='" . $_REQUEST["valEditID"] . "'";
$query = wewebQueryDB($coreLanguageSQL, $sql);
$row = wewebFetchArrayDB($coreLanguageSQL, $query);
$valId = $row[0];
$valMasterkey = $row[1];
$valSubject = $row[2];
$data_Mainpage = $row[3];
$valFcolor = $row[4];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">

  <link href="../css/theme.css" rel="stylesheet" />

  <title><?php echo $core_name_title ?></title>
  <script language="JavaScript" type="text/javascript" src="../js/jscolor.js"></script>
  <script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
  <script language="JavaScript" type="text/javascript" src="./js/script.js"></script>
  <script language="JavaScript" type="text/javascript">
    function executeSubmit() {
      with(document.myForm) {
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


    jQuery(document).ready(function() {
      chooseMainpage('<?php echo  $data_Mainpage ?>');

      jQuery('#myForm').keypress(function(e) {
        if (e.which == 13) {
          //e.preventDefault();
          executeSubmit();
          return false;
        }
      });
    });
  </script>
</head>

<body>
  <form action="?" method="get" name="myForm" id="myForm">
    <input name="execute" type="hidden" id="execute" value="update" />
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
    <input name="myParentID" type="hidden" id="myParentID" value="<?php echo $_REQUEST['myParentID'] ?>" />
    <input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
    <input name="inputLt" type="hidden" id="inputLt" value="<?php echo  $_REQUEST['inputLt'] ?>" />
    <input type="hidden" name="inputMainpage" id="inputMainpage" value="" />


    <div class="divRightNav">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo getNameMenu($_REQUEST["menukeyid"]) ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleedit"] ?></span></td>
          <td class="divRightNavTb" align="right">



          </td>
        </tr>
      </table>
    </div>
    <div class="divRightHead">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
        <tr>
          <td height="77" align="left"><span class="fontHeadRight"><?php echo $langMod["txt:titleedit"] ?></span></td>
          <td align="left">
            <table border="0" cellspacing="0" cellpadding="0" align="right">
              <tr>
                <td align="right">
                  <div class="btnSave" title="<?php echo $langTxt["btn:save"] ?>" onclick="executeSubmit();"></div>
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
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:inpName"] ?><span class="fontContantAlert">*</span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb"><input name="inputSubject" id="inputSubject" type="text" value="<?php echo $valSubject; ?>" class="formInputContantTb" /></td>
        </tr>

      </table>
      <br />

      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="formTileTxt tbBoxViewBorder ">
        <tr>
            <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
                <span class="formFontSubjectTxt"><?php echo  $langMod["txt:mainpage"] ?></span><br />
                <span class="formFontTileTxt"><?php echo  $langMod["txt:titleDeMainpage"] ?></span>
            </td>
        </tr>
        <tr>
            <td colspan="7" align="right" valign="top" height="15"></td>
        </tr>
        <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb borderBottom1"><?php echo  $langMod["txt:mainpage1"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb borderBottom1">
                <ul class="selectMainpage">
                    <?php
                    foreach ($core_main_mainpage as $keyMainpage => $valueMainpage) {
                    ?>
                        <!-- <li class="parentMainpage" style="background:url(<?php echo  $valueMainpage["color"] ?>) no-repeat top; background-size:cover;cursor: pointer;" onclick="chooseMainpage('<?php echo  $valueMainpage['file'] ?>')"> -->
                        <li class="parentMainpage" style="background:url(<?php echo  $valueMainpage["color"] ?>) no-repeat top; background-size:cover;cursor: pointer;">
                            <div class="mainpageActive m_main" id="<?php echo  $valueMainpage['file'] ?>" style="display: none; text-align:center;">
                                <div style="padding-top:50px; color:#ff0000;"><?php echo  $valueMainpage['name'] ?></div>
                            </div>

                        </li>
                    <?php } ?>
                </ul>
            </td>
        </tr>
      </table>
      <br />

      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" class="tbBoxViewBorder ">
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo  $langMod["txt:picFooter"] ?></span><br />
            <span class="formFontTileTxt"><?php echo  $langMod["txt:picFooterDe"] ?></span>
          </td>
        </tr>
        <tr>
          <td colspan="7" align="right" valign="top" height="15"></td>
        </tr>
        <tr class="valueR1">
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  "เลือกสี" ?></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="file-input-wrapper">
              <input class="jscolor {closable:true,closeText:'ปิด'}" name="inputColor" value="<?php echo $valFcolor; ?>" id="inputColor">
            </div>
          </td>
        </tr>

      </table>

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
  <?php include("../lib/disconnect.php"); ?>

</body>

</html>