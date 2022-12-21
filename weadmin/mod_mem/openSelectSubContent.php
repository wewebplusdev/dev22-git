<?php
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("incModLang.php");
include("config.php");
$sql_group = "SELECT ";
if ($_SESSION[$valSiteManage . 'core_session_language'] == "Thai") {
    $sql_group .= "  " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subject";
} else if($_SESSION[$valSiteManage . 'core_session_language'] == "Eng") {
    $sql_group .= " " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subject ";
} else {
  $sql_group .= " " . $mod_tb_root_group . "_id," . $mod_tb_root_group . "_subject ";
}

$sql_group .= " 
FROM " . $mod_tb_root_group . " 
WHERE 
" . $mod_tb_root_group . "_masterkey ='" . $_REQUEST['masterkey'] . "' AND
" . $mod_tb_root_group . "_gid ='" . $_REQUEST['inputPh'] . "'
ORDER BY " . $mod_tb_root_group . "_order DESC ";
$query_group = wewebQueryDB($coreLanguageSQL, $sql_group);
$numrow_group = wewebNumRowsDB($coreLanguageSQL, $query_group);
// print_pre($numrow_group);
?>

<select name="inputGh" id="inputGh" onchange="document.myForm.submit(); " class="formSelectSearchStyle">
  <option value="0"><?php echo $langMod["tit:selectg"] ?> </option>
  <?php
  while ($row_group = wewebFetchArrayDB($coreLanguageSQL, $query_group)) {
      $row_groupid = $row_group[0];
      $row_groupname = $row_group[1];
  ?>
      <option value="<?php echo $row_groupid ?>" <?php if ($_REQUEST['inputGh'] == $row_groupid) { ?> selected="selected" <?php } ?>><?php echo $row_groupname ?></option>
  <?php } ?>
</select>