<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("config.php");

if ($_REQUEST['execute'] == "update") {
	$update = array();
	$update[] = $mod_tb_root . "_subject  	='" . changeQuot($_REQUEST['inputSubject']) . "'";
	$update[] = $mod_tb_root . "_theme  	='" . changeQuot($_REQUEST['inputMainpage']) . "'";
	$update[] = $mod_tb_root . "_col  	='" . changeQuot($_REQUEST['inputColor']) . "'";
	

	$sql = "UPDATE " . $mod_tb_root . " SET " . implode(",", $update) . " WHERE " . $mod_tb_root . "_id='" . $_REQUEST["valEditID"] . "' ";
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