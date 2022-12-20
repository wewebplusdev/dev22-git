<?php
include "../lib/session.php";
include "../lib/config.php";
include "../lib/connect.php";
include "../lib/function.php";
include "../lib/checkMember.php";
include "config.php";

if ($_REQUEST['execute'] == "insert") {
    $sql = "SELECT MAX(" . $mod_tb_root . "_order) FROM " . $mod_tb_root;
    $Query = wewebQueryDB($coreLanguageSQL, $sql);
    $Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
    $maxOrder = $Row[0] + 1;

    $insert = array();
    $insert[$mod_tb_root . "_language"] = "'" . $_SESSION[$valSiteManage . 'core_session_language'] . "'";
    $insert[$mod_tb_root . "_masterkey"] = "'" . $_REQUEST["masterkey"] . "'";
    $insert[$mod_tb_root . "_subject"] = "'" . changeQuot($_REQUEST['inputSubject']) . "'";
    $insert[$mod_tb_root . "_title"] = "'" . changeQuot($_REQUEST['inputTitle']) . "'";
    $insert[$mod_tb_root . "_desc"] = "'" . changeQuot($_REQUEST['inputDesc']) . "'";
    $insert[$mod_tb_root . "_url"] = "'" . changeQuot($_REQUEST['inputurl']) . "'";
    $insert[$mod_tb_root . "_target"] = "'" . changeQuot($_REQUEST['inputmenutarget']) . "'";
    $insert[$mod_tb_root . "_targetlang"] = "'" . changeQuot($_REQUEST['inputtargetlang']) . "'";
    $insert[$mod_tb_root . "_targetlangen"] = "'" . changeQuot($_REQUEST['inputtargetlangen']) . "'";
    $insert[$mod_tb_root . "_targetlangcn"] = "'" . changeQuot($_REQUEST['inputtargetlangcn']) . "'";
    $insert[$mod_tb_root . "_pic"] = "'" . $_POST["picname"] . "'";
    $insert[$mod_tb_root . "_crebyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root . "_creby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root . "_lastbyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root . "_lastby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";

    $setLangTH = (!empty($_REQUEST['inputSetLang'][0])) ? $_REQUEST['inputSetLang'][0] : 0 ;
    $setLangEN = (!empty($_REQUEST['inputSetLang'][1])) ? $_REQUEST['inputSetLang'][1] : 0 ;
    $setLangCN = (!empty($_REQUEST['inputSetLang'][2])) ? $_REQUEST['inputSetLang'][2] : 0 ;
    $insert[$mod_tb_root . "_langth"]="'".$setLangTH."'";
    $insert[$mod_tb_root . "_langen"]="'".$setLangEN."'";
    $insert[$mod_tb_root . "_langcn"]="'".$setLangCN."'";



    $insert[$mod_tb_root."_sdate"]="'".DateFormatInsert($_REQUEST['sdateInput'])."'";
    $insert[$mod_tb_root."_edate"]="'".DateFormatInsert($_REQUEST['edateInput'])."'";

    $insert[$mod_tb_root . "_credate"] = "" . wewebNow($coreLanguageSQL) . "";
    $insert[$mod_tb_root . "_lastdate"] = "" . wewebNow($coreLanguageSQL) . "";
    $insert[$mod_tb_root . "_status"] = "'Disable'";
    $insert[$mod_tb_root . "_order"] = "'" . $maxOrder . "'";
    
    $insert[$mod_tb_root."_typevdo"] = "'".$_POST["inputType"]."'";
    $insert[$mod_tb_root."_typevdoen"] = "'".$_POST["inputType"]."'";
    $insert[$mod_tb_root."_typevdocn"] = "'".$_POST["inputType"]."'";
		
    if ($_POST["inputType"] == 'url') {
        $insert[$mod_tb_root."_urlvdo"] = "'".$_POST["inputurlvdo"]."'";
        $insert[$mod_tb_root."_urlvdoen"] = "'".$_POST["inputurlen"]."'";
        $insert[$mod_tb_root."_urlvdocn"] = "'".$_POST["vdonamecn"]."'";
    } 
    if ($_POST["inputType"] == 'file') {
        $insert[$mod_tb_root."_filevdo"] = "'".$_POST["vdoname"]."'";
        $insert[$mod_tb_root."_filevdoen"] = "'".$_POST["vdonameen"]."'";
        $insert[$mod_tb_root."_filevdocn"] = "'".$_POST["vdonamecn"]."'";
    }


    $sql = "INSERT INTO " . $mod_tb_root . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
    $Query = wewebQueryDB($coreLanguageSQL, $sql);
    $contantID = wewebInsertID($coreLanguageSQL);
    
    logs_access('3', 'Insert');
} ?>
<?php include "../lib/disconnect.php";?>
<form action="index.php" method="post" name="myFormAction" id="myFormAction">
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
    <input name="inputTh" type="hidden" id="inputTh" value="<?php echo $_REQUEST['inputTh'] ?>" />

</form>
<script language="JavaScript" type="text/javascript"> document.myFormAction.submit(); </script>
