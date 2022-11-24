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


$sql = "SELECT " . $mod_tb_root . "_id , " . $mod_tb_root . "_icon, " . $mod_tb_root . "_namethai, " . $mod_tb_root . "_moduletype, " . $mod_tb_root . "_linkpath, " . $mod_tb_root . "_masterkey, " . $mod_tb_root . "_target, " . $mod_tb_root . "_nameeng  , " . $mod_tb_root . "_credate  FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_id='" . $_REQUEST["valEditID"] . "'";
$query = wewebQueryDB($coreLanguageSQL, $sql);
$row = wewebFetchArrayDB($coreLanguageSQL, $query);
$valId = $row[0];
$valIcon = $row[1];
$valNamethai = $row[2];
$valModuletype = $row[3];
$valLinkpath = $row[4];
$valMasterkey = $row[5];
$valTarget = $row[6];
$valNameeng = $row[7];
$valCredate = DateFormat($row[8]);

$sqlP = "SELECT " . $mod_tb_root . "_id , " . $mod_tb_root . "_namethai, " . $mod_tb_root . "_nameeng    FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_id='" . $_REQUEST["myParentID"] . "'";
$queryP = wewebQueryDB($coreLanguageSQL, $sqlP);
$rowP = wewebFetchArrayDB($coreLanguageSQL, $queryP);
if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
  $valName = rechangeQuot($rowP[$mod_tb_root . "_namethai"]);
} else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
  $valName = rechangeQuot($rowP[$mod_tb_root . "_nameeng"]);
}

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
  <script language="JavaScript" type="text/javascript">
    function executeSubmit() {
      with(document.myForm) {
        if (isBlank(inputmenuname)) {
          inputmenuname.focus();
          jQuery("#inputmenuname").addClass("formInputContantTbAlertY");
          return false;
        } else {
          jQuery("#inputmenuname").addClass("formInputContantTbAlertN");
        }

        if (isBlank(inputmenunameen)) {
          inputmenunameen.focus();
          jQuery("#inputmenunameen").addClass("formInputContantTbAlertY");
          return false;
        } else {
          jQuery("#inputmenunameen").addClass("formInputContantTbAlertN");
        }

        if (inputMenu_LinkType[0].checked) {
          if (isBlank(inputlinkpath)) {
            inputlinkpath.focus();
            jQuery("#inputlinkpath").addClass("formInputContantTbAlertY");
            return false;
          } else {
            jQuery("#inputlinkpath").addClass("formInputContantTbAlertN");
          }

          if (isBlank(inputmasterkey)) {
            inputmasterkey.focus();
            jQuery("#inputmasterkey").addClass("formInputContantTbAlertY");
            return false;
          } else {
            jQuery("#inputmasterkey").addClass("formInputContantTbAlertN");
          }

        }

        if (inputMenu_LinkType[1].checked) {

          if (isBlank(inputmenuurl)) {
            inputmenuurl.focus();
            jQuery("#inputmenuurl").addClass("formInputContantTbAlertY");
            return false;
          } else {
            jQuery("#inputmenuurl").addClass("formInputContantTbAlertN");
          }

          if (inputmenuurl.value == 'http://') {
            inputmenuurl.focus();
            jQuery("#inputmenuurl").addClass("formInputContantTbAlertY");
            return false;
          } else {
            jQuery("#inputmenuurl").addClass("formInputContantTbAlertN");
          }

        }

      }

      updateContactNew('../core/updateMg.php');
    }
  </script>
</head>

<body>
  <form action="?" method="get" name="myForm" id="myForm">
    <input name="execute" type="hidden" id="execute" value="update" />
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
    <input name="myParentID" type="hidden" id="myParentID" value="<?php echo $_REQUEST['myParentID'] ?>" />
    <input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID'] ?>" />
    <input name="tagEditID" type="hidden" id="tagEditID" value="<?php echo $_REQUEST['tagEditID'] ?>" />

    <div class="divRightNav">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td  class="divRightNavTb" align="left"  id="defTop" ><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1?>" target="_self"><?php echo $valNav1?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a  href="javascript:void(0)"  onclick="btnBackPage('index.php')" target="_self"><?php echo getNameMenu($_REQUEST["menukeyid"])?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleview"]?></span></td>
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
            <span class="formFontSubjectTxt"><?php echo $langTxt["mg:title"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langTxt["mg:titleDe"] ?></span>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["mg:inpnthai"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valNamethai ?></div>
          </td>
        </tr>
        <!-- <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["mg:inpneng"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valNameeng ?></div>
          </td>
        </tr> -->
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["mg:inpicon"] ?></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><img src="<?php echo $valIcon ?>" name="LibraryIconSample" id="LibraryIconSample" onerror="this.src='<?php echo "../img/btn/blank.gif" ?>'" /></div>
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