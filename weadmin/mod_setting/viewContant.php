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
" . $mod_tb_root . "_col,
" . $mod_tb_root . "_credate,
" . $mod_tb_root . "_crebyid,
" . $mod_tb_root . "_status ,
" . $mod_tb_root . "_lastdate ,
" . $mod_tb_root . "_lastbyid
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

$valCredate = DateFormat($row[5]);
$valCreby = $row[6];
$valStatus = $row[7];
if ($valStatus == "Enable") {
  $valStatusClass =  "fontContantTbEnable";
} else {
  $valStatusClass =  "fontContantTbDisable";
}

$valLastdate = DateFormat($row[8]);
$valLastby = $row[9];
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
  <script language="JavaScript" type="text/javascript" src="./js/script.js"></script>
  <script>
    jQuery(document).ready(function() {
      chooseMainpage('<?php echo  $data_Mainpage ?>');
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

    <div class="divRightNav">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo getNameMenu($_REQUEST["menukeyid"]) ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleview"] ?></span></td>
          <td class="divRightNavTb" align="right">
          </td>
        </tr>
      </table>
    </div>
    <div class="divRightHead">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
        <tr>
          <td height="77" align="left"><span class="fontHeadRight"><?php echo $langMod["txt:titleview"] ?></span></td>
          <td align="left">
            <table border="0" cellspacing="0" cellpadding="0" align="right">
              <tr>
                <td align="right">
                  <div class="btnEditView" title="<?php echo $langTxt["btn:edit"] ?>" onclick="editContactNew('editContant.php');"></div>
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
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["tit:inpName"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valSubject ?></div>
          </td>
        </tr>
      </table>
      <br>
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
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><span class="fontContantAlert"></span></td>
          <td width="5%" height="20" bgcolor="<?php echo  rechangeQuot($valFcolor) ?>">&nbsp;</td>
          <td>&nbsp;<?php echo  rechangeQuot($valFcolor) ?></td>
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
              }


              ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo  $langTxt["mg:status"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">

              <?php if ($valStatus == "Enable") { ?>
                <span class="<?php echo  $valStatusClass ?>"><?php echo  $valStatus ?></span>
              <?php } else { ?>
                <span class="<?php echo  $valStatusClass ?>"><?php echo  $valStatus ?></span>
              <?php } ?>
            </div>
          </td>
        </tr>
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
  <?php include("../lib/disconnect.php"); ?>

</body>

</html>