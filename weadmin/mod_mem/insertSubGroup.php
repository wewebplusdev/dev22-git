<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("config.php");

if ($_REQUEST['execute'] == "insert") {

	$sql = "SELECT MAX(" . $mod_tb_root_subgroup . "_order) FROM " . $mod_tb_root_subgroup;
	$Query = wewebQueryDB($coreLanguageSQL, $sql); //******/
	$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
	$maxOrder = $Row[0] + 1;

	$insert = array();
	$insert[$mod_tb_root_subgroup . "_language"] = "'" . $_SESSION[$valSiteManage . 'core_session_language'] . "'";
	$insert[$mod_tb_root_subgroup . "_masterkey"] = "'" . $_REQUEST["masterkey"] . "'";
	$insert[$mod_tb_root_subgroup . "_subject"] = "'" . changeQuot($_REQUEST['inputSubject']) . "'";
	$insert[$mod_tb_root_subgroup . "_title"] = "'" . changeQuot($_REQUEST['inputComment']) . "'";
	$insert[$mod_tb_root_subgroup . "_crebyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
	$insert[$mod_tb_root_subgroup . "_creby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
	$insert[$mod_tb_root_subgroup . "_lastbyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
	$insert[$mod_tb_root_subgroup . "_lastby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
	$insert[$mod_tb_root_subgroup . "_credate"] = "NOW()";
	$insert[$mod_tb_root_subgroup . "_lastdate"] = "NOW()";
	$insert[$mod_tb_root_subgroup . "_status"] = "'Disable'";
	$insert[$mod_tb_root_subgroup . "_pic"] = "'" . $_POST["picname"] . "'";
	$insert[$mod_tb_root_subgroup . "_pic2"] = "'" . $_POST["picname2"] . "'";
	$insert[$mod_tb_root_subgroup . "_order"] = "'" . $maxOrder . "'";
	$insert[$mod_tb_root_subgroup . "_type"] = "'" . $_REQUEST["inputType"] . "'";
	$insert[$mod_tb_root_subgroup . "_url"] = "'" . $_REQUEST["inputurl"] . "'";
	$insert[$mod_tb_root_subgroup . "_target"] = "'" . $_REQUEST["inputTarget"] . "'";

	// $insert[$mod_tb_root_subgroup."_pic"] = "'".$_POST["picname"]."'";

	$sql = "INSERT INTO " . $mod_tb_root_subgroup . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
	$Query = wewebQueryDB($coreLanguageSQL, $sql);
	$contantID = wewebInsertID($coreLanguageSQL);

	$sql_filetemp = "SELECT " . $mod_tb_fileTemp . "_id," . $mod_tb_fileTemp . "_filename," . $mod_tb_fileTemp . "_name  FROM " . $mod_tb_fileTemp . " WHERE " . $mod_tb_fileTemp . "_contantid 	='" . $_REQUEST['valEditID'] . "' ORDER BY " . $mod_tb_fileTemp . "_id ASC";
	$query_filetemp = wewebQueryDB($coreLanguageSQL, $sql_filetemp);
	$number_filetemp = wewebNumRowsDB($coreLanguageSQL, $query_filetemp);
	if ($number_filetemp >= 1) {
		while ($row_filetemp = wewebFetchArrayDB($coreLanguageSQL, $query_filetemp)) {
			$downloadID = $row_filetemp[0];
			$downloadFile = $row_filetemp[1];
			$downloadName = $row_filetemp[2];

			$insert = array();
			$insert[$mod_tb_file . "_contantid"] = "'" . $contantID . "'";
			$insert[$mod_tb_file . "_filename"] = "'" . $downloadFile . "'";
			$insert[$mod_tb_file . "_name"] = "'" . $downloadName . "'";
			$insert[$mod_tb_file . "_language"] = "'" . $_REQUEST['inputLt'] . "'";
			$insert[$mod_tb_file . "_masterkey"] = "'" . $_REQUEST['masterkey'] . "'";
			$insert[$mod_tb_file . "_credate"] = "NOW()";

			$sql = "INSERT INTO " . $mod_tb_file . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
			$Query = wewebQueryDB($coreLanguageSQL, $sql);

			$sql_del = "DELETE FROM " . $mod_tb_fileTemp . " WHERE   " . $mod_tb_fileTemp . "_id='" . $downloadID . "'";
			$Query_del = wewebQueryDB($coreLanguageSQL, $sql_del);
		}
	}




	logs_access('3', 'Insert SubGroup');
} ?>
<?php include("../lib/disconnect.php"); ?>
<form action="sub.php" method="post" name="myFormAction" id="myFormAction">
	<input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
	<input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
	<input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
	<input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputgroupid'] ?>" />
</form>
<script language="JavaScript" type="text/javascript">
	document.myFormAction.submit();
</script>