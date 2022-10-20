<?php
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("config.php");

for ($i = 1; $i <= $_REQUEST['TotalCheckBoxID']; $i++) {
	$myVar = $_REQUEST['CheckBoxID' . $i];


	if (strlen($myVar) >= 1) {
		$permissionID = $myVar;

		$sql = "SELECT  " . $mod_tb_apply . "_pic FROM " . $mod_tb_apply . " WHERE  " . $mod_tb_apply . "_id='" . $permissionID . "' ";
		$Query = wewebQueryDB($coreLanguageSQL, $sql);
		$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
		$deletepic = $Row[0];
		$deletefilename = $Row[1];

		######################### Delete  In Folder Pic ###############################
		if (file_exists($mod_path_pictures . "/" . $deletepic)) {
			@unlink($mod_path_pictures . "/" . $deletepic);
		}

		if (file_exists($mod_path_office . "/" . $deletepic)) {
			@unlink($mod_path_office . "/" . $deletepic);
		}

		if (file_exists($mod_path_real . "/" . $deletepic)) {
			@unlink($mod_path_real . "/" . $deletepic);
		}

		if (file_exists($mod_path_file . "/" . $deletefilename)) {
			@unlink($mod_path_file . "/" . $deletefilename);
		}

		######################### Delete  In Folder File ###############################
		$sql = "SELECT " . $mod_tb_file_apply . "_id," . $mod_tb_file_apply . "_filename FROM " . $mod_tb_file_apply . " WHERE " . $mod_tb_file_apply . "_contantid ='" . $permissionID . "'";
		$query_file = wewebQueryDB($coreLanguageSQL, $sql);
		$number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
		if ($number_row >= 1) {
			while ($row_file = wewebFetchArrayDB($coreLanguageSQL, $query_file)) {
				$downloadID = $row_file[0];
				$deletefilename = $row_file[1];

				if (file_exists($mod_path_file . "/" . $deletefilename)) {
					@unlink($mod_path_file . "/" . $deletefilename);
				}
			}
		}
		$sql="DELETE FROM ".$mod_tb_file_apply." WHERE   ".$mod_tb_file_apply."_contantid='".$permissionID."' ";
		$Query=wewebQueryDB($coreLanguageSQL,$sql);

		######################### Delete  Contant ###############################
		$sql = "DELETE FROM " . $mod_tb_apply . " WHERE " . $mod_tb_apply . "_id=" . $permissionID . " ";
		$Query = wewebQueryDB($coreLanguageSQL, $sql);
	}
}
logs_access('3', 'Delete');
?>
<?php include("../lib/disconnect.php"); ?>
<form action="mem.php" method="post" name="myFormAction" id="myFormAction">
	<input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
	<input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
	<input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow'] ?>" />
	<input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize'] ?>" />
	<input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby'] ?>" />
	<input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
	<input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
	<input name="inputProvince" type="hidden" id="inputProvince" value="<?php echo $_REQUEST['inputProvince'] ?>" />
	<input name="inputSex" type="hidden" id="inputSex" value="<?php echo $_REQUEST['inputSex'] ?>" />
	<input name="inputEdu" type="hidden" id="inputEdu" value="<?php echo $_REQUEST['inputEdu'] ?>" />
	<input name="inputSalary" type="hidden" id="inputSalary" value="<?php echo $_REQUEST['inputSalary'] ?>" />

</form>
<script language="JavaScript" type="text/javascript">
	document.myFormAction.submit();
</script>