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
$valNav2 = $langTxt["nav:menuManage2"];

$masterkey_arr = explode('sit', $_REQUEST['masterkey']);
$sql = "SELECT " . $mod_tb_root . "_id , " . $mod_tb_root . "_namethai, " . $mod_tb_root . "_nameeng    FROM " . $mod_tb_root . " WHERE " . $mod_tb_root . "_masterkey LIKE '" . $masterkey_arr[0] . "%'";
$query = wewebQueryDB($coreLanguageSQL, $sql);
$row = wewebFetchArrayDB($coreLanguageSQL, $query);
$valId = $row[0];
if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
  $valName = rechangeQuot($row[$mod_tb_root . "_namethai"]);
} else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
  $valName = rechangeQuot($row[$mod_tb_root . "_nameeng"]);
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
    var countArrSort = '';
    jQuery(function() {

      jQuery("#boxPermissionSort").sortable({
        update: function() {
          var order = jQuery('#boxPermissionSort').sortable('serialize');
          countArrSort = order;
          jQuery("#inputSort").val(countArrSort);
          // alert(countArrSort);
        }
      });
    });
  </script>
</head>

<body>
  <form action="?" method="get" name="myForm" id="myForm">
    <input name="execute" type="hidden" id="execute" value="insert" />
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
    <input name="myParentID" type="hidden" id="myParentID" value="<?php echo $_REQUEST['myParentID'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
    <input name="inputSort" type="hidden" id="inputSort" value="" />

    <div class="divRightNav">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td  class="divRightNavTb" align="left"  id="defTop" ><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1?>" target="_self"><?php echo $valNav1?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a  href="javascript:void(0)"  onclick="btnBackPage('index.php')" target="_self"><?php echo getNameMenu($_REQUEST["menukeyid"])?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:sortpermis"]?></span></td>
          <td class="divRightNavTb" align="right">



          </td>
        </tr>
      </table>
    </div>
    <div class="divRightHead">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
        <tr>
          <td height="77" align="left"><span class="fontHeadRight"><?php echo  $langMod["txt:sortpermis"] ?><?php if ($_REQUEST["myParentID"] >= 1) { ?> (<?php echo $valName ?>)<?php } ?></span></td>
          <td align="left">
            <table border="0" cellspacing="0" cellpadding="0" align="right">
              <tr>
                <td align="right">
                  <div class="btnSave" title="<?php echo $langTxt["btn:save"] ?>" onclick="sortingContactNew('sortingContant.php');"></div>
                  <div class="btnBack" title="<?php echo $langTxt["btn:back"] ?>" onclick="btnBackPage('index.php')"></div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
    <div class="divRightMain">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center" style="	border-top:#c8c7cc solid 1px;">
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt">
            <?php
            $sql = "SELECT " . $mod_tb_root . "_id , " . $mod_tb_root . "_namethai, " . $mod_tb_root . "_nameeng , " . $mod_tb_root . "_credate   FROM 
            " . $mod_tb_root . " WHERE 1=1 ";
            $sql = $sql . "  AND " . $mod_tb_root . "_masterkey NOT LIKE '" . $_REQUEST['masterkey'] . "' ";

            $sql = $sql . "  AND " . $mod_tb_root . "_masterkey LIKE '%" . $mod_array_conf[$_REQUEST['masterkey']]['key'] . "' ";

            if (count($mod_array_conf[$_REQUEST['masterkey']]['component']) > 0) {
                $sql = $sql . "  OR " . $mod_tb_root . "_masterkey IN (" . implode(",", array_values($mod_array_conf[$_REQUEST['masterkey']]['component'])) . ") ";
            }
            $sql .= " ORDER BY " . $mod_tb_root . "".$mod_array_conf[$_REQUEST['masterkey']]['order']." DESC";
            $query = wewebQueryDB($coreLanguageSQL, $sql);
            $recordCount = wewebNumRowsDB($coreLanguageSQL, $query);
            if ($recordCount >= 1) {
            ?>
              <ul id="boxPermissionSort">
                <?php
                while ($row = wewebFetchArrayDB($coreLanguageSQL, $query)) {
                  $valID =  $row[$mod_tb_root . "_id"];
                  if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
                    $valName = rechangeQuot($row[$mod_tb_root . "_namethai"]);
                  } else if ($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
                    $valName = rechangeQuot($row[$mod_tb_root . "_nameeng"]);
                  }

                  $valType =  $row[$mod_tb_root . "_moduletype"];
                  $valDateCredate = dateFormatReal($row[$mod_tb_root . "_credate"]);
                  $valTimeCredate = timeFormatReal($row[$mod_tb_root . "_credate"]);
                  $valStatus = $row[$mod_tb_root . "_status"];
                  if ($valStatus == "Enable") {
                    $valStatusClass =  "fontContantTbEnable";
                  } else {
                    $valStatusClass =  "fontContantTbDisable";
                  }

                  $valParentType = $row[$mod_tb_root . "_moduletype"];
                ?>
                  <li id="listItem_<?php echo $valID ?>" class="divSortDrop">

                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="58%" align="left" valign="top"><?php echo $valName ?></td>
                        <td width="14%" align="center" valign="top">
                          <span class="fontContantTbupdate"><?php echo $valType ?></span>
                        </td>
                        <td width="14%" align="center" valign="top">
                          <span class="fontContantTbupdate"><?php echo $valDateCredate ?></span><br />
                          <span class="fontContantTbTime"><?php echo $valTimeCredate ?></span>
                        </td>
                      </tr>
                    </table>

                  </li>
                <?php } ?>
              </ul>
            <?php } ?>
          </td>
        </tr>


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