<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");

if ($_REQUEST['execute'] == "update") {
	$update = array();
	$update[] = $core_tb_menu . "_icon  	='" . changeQuot($_REQUEST['inputIconName']) . "'";
	if ($_REQUEST['inputLt'] == 'Thai') {
		$update[] = $core_tb_menu . "_namethai  ='" . changeQuot($_REQUEST['inputmenuname']) . "'";
	}elseif($_REQUEST['inputLt'] == 'Eng'){
		$update[] = $core_tb_menu . "_nameeng  ='" . changeQuot($_REQUEST['inputmenuname']) . "'";
	}else{
		$update[] = $core_tb_menu . "_namechi  ='" . changeQuot($_REQUEST['inputmenuname']) . "'";
	}

	$sql = "UPDATE " . $core_tb_menu . " SET " . implode(",", $update) . " WHERE " . $core_tb_menu . "_id='" . $_REQUEST["valEditID"] . "' ";
	$Query = wewebQueryDB($coreLanguageSQL, $sql);
} ?>
<?php include("../lib/disconnect.php"); ?>
<form action="index.php" method="post" name="myFormAction" id="myFormAction">
	<input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
	<input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
	<input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
</form>
<script language="JavaScript" type="text/javascript">
	document.myFormAction.submit();
</script>