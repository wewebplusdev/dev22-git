<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("config.php");


if ($_REQUEST['execute'] == "insert") {

    $sql = "SELECT MAX(" . $mod_tb_root_sub . "_order) FROM " . $mod_tb_root_sub;
    $Query = wewebQueryDB($coreLanguageSQL, $sql);
    $Row = wewebFetchArrayDB($coreLanguageSQL,$Query);
    $maxOrder = $Row[0] + 1;

    $insert = array();
    $insert[$mod_tb_root_sub . "_language"] = "'" . $_SESSION[$valSiteManage . 'core_session_language'] . "'";
    $insert[$mod_tb_root_sub . "_masterkey"] = "'" . $_REQUEST["masterkey"] . "'";
    $insert[$mod_tb_root_sub . "_subject"] = "'" . changeQuot($_REQUEST['inputSubject']) . "'";
    $insert[$mod_tb_root_sub . "_title"] = "'" . changeQuot($_REQUEST['inputComment']) . "'";
    $insert[$mod_tb_root_sub . "_crebyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root_sub . "_creby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root_sub . "_lastbyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root_sub . "_lastby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root_sub . "_credate"] = "" . wewebNow($coreLanguageSQL) . "";
    $insert[$mod_tb_root_sub . "_lastdate"] = "" . wewebNow($coreLanguageSQL) . "";
    $insert[$mod_tb_root_sub . "_status"] = "'Disable'";
    $insert[$mod_tb_root_sub . "_order"] = "'" . $maxOrder . "'";
    $sql = "INSERT INTO " . $mod_tb_root_sub . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
    $Query = wewebQueryDB($coreLanguageSQL, $sql);
    $contantID = wewebInsertID($coreLanguageSQL);




    logs_access('3', 'Insert Sub');
}
?>
<?php include("../lib/disconnect.php"); ?>
<form action="sub.php" method="post" name="myFormAction" id="myFormAction">
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo   $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo   $_REQUEST['menukeyid'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo   $_REQUEST['inputSearch'] ?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?php echo   $_REQUEST['inputGh'] ?>" />
</form>            
<script language="JavaScript" type="text/javascript"> document.myFormAction.submit();</script>
