<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("config.php");

if ($_REQUEST['execute'] == "insert") {

	$sqlChk    = "SELECT " . $mod_tb_root . "_subject FROM " . $mod_tb_root . " WHERE  (" . $mod_tb_root . "." . $mod_tb_root . "_subject = '" . trim($_REQUEST['inputSubject']) . "' )";
	$QueryChk  = wewebQueryDB($coreLanguageSQL, $sqlChk);
	$count_totalrecord = wewebNumRowsDB($coreLanguageSQL, $QueryChk);
	if ($count_totalrecord <= 0) {

		$randomNumber = randomNameUpdate(2);

		$sql    = "SELECT MAX(" . $mod_tb_root . "_order) FROM " . $mod_tb_root;
		$Query  = wewebQueryDB($coreLanguageSQL, $sql);
		$Row    = wewebFetchArrayDB($coreLanguageSQL, $Query);
		$maxOrder = $Row[0] + 1;

		$insert = array();
		$insert[$mod_tb_root . "_language"]             = "'" . $_SESSION[$valSiteManage . 'core_session_language'] . "'";
		$insert[$mod_tb_root . "_masterkey"]            = "'" . $_REQUEST["masterkey"] . "'";
		if ($_REQUEST['inputLt'] == 'Thai') {
			$insert[$mod_tb_root . "_subject"]          = "'" . changeQuot($_REQUEST['inputSubject']) . "'";
			$insert[$mod_tb_root . "_title"]        = "'" . changeQuot($_REQUEST['inputComment']) . "'";
		} else {
			$insert[$mod_tb_root . "_subjecten"]        = "'" . changeQuot($_REQUEST['inputSubject']) . "'";
			$insert[$mod_tb_root . "_titleen"]        = "'" . changeQuot($_REQUEST['inputComment']) . "'";
		}
		$insert[$mod_tb_root . "_pic"] = "'" . $_POST["picname"] . "'";
		$insert[$mod_tb_root . "_crebyid"]  = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
		$insert[$mod_tb_root . "_creby"]    = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
		$insert[$mod_tb_root . "_lastbyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
		$insert[$mod_tb_root . "_lastby"]   = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
		$insert[$mod_tb_root . "_credate"]  = "NOW()";
		$insert[$mod_tb_root . "_lastdate"] = "NOW()";
		$insert[$mod_tb_root . "_status"]   = "'Disable'";
		$insert[$mod_tb_root . "_order"]    = "'" . $maxOrder . "'";

		$sql        = "INSERT INTO " . $mod_tb_root . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
		$Query      = wewebQueryDB($coreLanguageSQL, $sql);

		logs_access('3', 'Insert Tag');
	}
}
?>
<?php include("../lib/disconnect.php"); ?>
<form action="index.php" method="post" name="myFormAction" id="myFormAction">
	<input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
	<input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
	<input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
	<input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
	<input name="inputG3" type="hidden" id="inputG3" value="<?php echo $_REQUEST['inputG3'] ?>" />
</form>
<?php
if ($count_totalrecord <= 0) {
?>
	<script language="JavaScript" type="text/javascript">
		document.myFormAction.submit();
	</script>
<?php } else { ?>
	<script language="JavaScript" type="text/javascript">
		jQuery("#inputSubject").addClass("formInputContantTbAlertY");
		$(".formFontNoteTxt").remove();
		$("#inputSubject").after("<div class='formFontNoteTxt' style='color:#FF0000;'>* ชื่อแท็กเชื่อมโยงนี้มีอยู่ในระบบฐานข้อมูลแล้ว กรุณากรอกใหม่อีกครั้ง</div>");
	</script>
<?php } ?>