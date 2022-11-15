<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Manage Contant</title>
</head>

<body>
	<?php
	if ($execute == "update") {
		$randomNumber = rand(111111111111, 999999999999);

		if (!is_dir($core_pathname_upload . "/" . $masterkey)) {
			mkdir($core_pathname_upload . "/" . $masterkey, 0777);
		}
		if (!is_dir($mod_path_html)) {
			mkdir($mod_path_html, 0777);
		}


		if (@file_exists($mod_path_html . "/" . $_REQUEST['inputHtmlDel'])) {
			@unlink($mod_path_html . "/" . $_REQUEST['inputHtmlDel']);
		}

		if ($_POST['inputHtml'] != "") {
			$filename = $_POST["valEditID"] . "-" . $randomNumber . ".html";
			$HTMLToolContent = str_replace("\\\"", "\"", $_POST['inputHtml']);
			$fp = fopen($mod_path_html . "/" . $filename, "w");
			chmod($mod_path_html . "/" . $filename, 0777);
			fwrite($fp, $HTMLToolContent);
			fclose($fp);
		}

		if ($_REQUEST['inputChkDate'] >= 1) {
			$valInsertEdate = DateFormatInsert($_REQUEST['edateInput']);
		} else {
			$valInsertEdate = DateFormatInsert($_REQUEST['sdateInput']);
		}

		$update = array();
		if ($_REQUEST['inputLt'] == "Thai") {
			$update[] = $mod_tb_root . "_subject='" . changeQuot($_POST['inputSubject']) . "'";
			$update[] = $mod_tb_root . "_title='" . changeQuot($_POST['inputDescription']) . "'";
			$update[] = $mod_tb_root . "_address='" . changeQuot($_POST['inputAddress']) . "'";
			$update[] = $mod_tb_root . "_htmlfilename  	='" . $filename . "'";
			$update[] = $mod_tb_root . "_description='" . changeQuot($_POST['inputTagDescription']) . "'";
			$update[] = $mod_tb_root . "_keywords='" . changeQuot($_POST['inputTagKeywords']) . "'";
			$update[] = $mod_tb_root . "_metatitle='" . changeQuot($_POST['inputTagTitle']) . "'";
			$update[] = $mod_tb_root . "_type='" . $_POST["inputType"] . "'";
			$update[] = $mod_tb_root . "_url='" . changeQuot($_REQUEST['inputurl']) . "'";
		} else if ($_REQUEST['inputLt'] == "Eng"){
			$update[] = $mod_tb_root . "_subjecten='" . changeQuot($_POST['inputSubject']) . "'";
			$update[] = $mod_tb_root . "_titleen='" . changeQuot($_POST['inputDescription']) . "'";
			$update[] = $mod_tb_root . "_addressen='" . changeQuot($_POST['inputAddress']) . "'";
			$update[] = $mod_tb_root . "_htmlfilenameen  	='" . $filename . "'";
			$update[] = $mod_tb_root . "_descriptionen='" . changeQuot($_POST['inputTagDescription']) . "'";
			$update[] = $mod_tb_root . "_keywordsen='" . changeQuot($_POST['inputTagKeywords']) . "'";
			$update[] = $mod_tb_root . "_metatitleen='" . changeQuot($_POST['inputTagTitle']) . "'";
			$update[] = $mod_tb_root . "_typeen='" . $_POST["inputType"] . "'";
			$update[] = $mod_tb_root . "_urlen='" . changeQuot($_REQUEST['inputurl']) . "'";
		}else{
			$update[] = $mod_tb_root . "_subjectcn='" . changeQuot($_POST['inputSubject']) . "'";
			$update[] = $mod_tb_root . "_titlecn='" . changeQuot($_POST['inputDescription']) . "'";
			$update[] = $mod_tb_root . "_addresscn='" . changeQuot($_POST['inputAddress']) . "'";
			$update[] = $mod_tb_root . "_htmlfilenamecn  	='" . $filename . "'";
			$update[] = $mod_tb_root . "_descriptioncn='" . changeQuot($_POST['inputTagDescription']) . "'";
			$update[] = $mod_tb_root . "_keywordscn='" . changeQuot($_POST['inputTagKeywords']) . "'";
			$update[] = $mod_tb_root . "_metatitlecn='" . changeQuot($_POST['inputTagTitle']) . "'";
			$update[] = $mod_tb_root . "_typecn='" . $_POST["inputType"] . "'";
			$update[] = $mod_tb_root . "_urlcn='" . changeQuot($_REQUEST['inputurl']) . "'";
		}

		$update[] = $mod_tb_root . "_showicon='" . changeQuot($_POST['inputShowIcon']) . "'";
		$update[] = $mod_tb_root . "_typeDateTo='" . $_POST["inputIsDateTo"] . "'";
		$update[] = $mod_tb_root . "_typeTimeTo='" . $_POST["inputIsTimeTo"] . "'";
		$update[] = $mod_tb_root . "_typeSal='" . $_POST["inputTypeSal"] . "'";
		$update[] = $mod_tb_root . "_fromHH='" . changeQuot($_POST['inputTimeFromHH']) . "'";
		$update[] = $mod_tb_root . "_fromMM='" . changeQuot($_POST['inputTimeFromMM']) . "'";
		$update[] = $mod_tb_root . "_toHH='" . changeQuot($_POST['inputTimeToHH']) . "'";
		$update[] = $mod_tb_root . "_toMM='" . changeQuot($_POST['inputTimeToMM']) . "'";

		$update[] = $mod_tb_root . "_quantity='" . changeQuot($_POST['inputQuantity']) . "'";
		$update[] = $mod_tb_root . "_price='" . changeQuot($_POST['inputPrice']) . "'";
		$update[] = $mod_tb_root . "_sale='" . changeQuot($_POST['inputSale']) . "'";

		$update[] = $mod_tb_root . "_gid='" . changeQuot($_POST['inputGroupID']) . "'";

		$update[] = $mod_tb_root . "_walk='" . changeQuot($_POST['inputWalk']) . "'";
		$update[] = $mod_tb_root . "_person='" . changeQuot($_POST['inputPerson']) . "'";
		$update[] = $mod_tb_root . "_hotelname='" . changeQuot($_POST['inputHotelName']) . "'";

		$update[] = $mod_tb_root . "_lastbyid='" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
		$update[] = $mod_tb_root . "_lastby='" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
		$update[] = $mod_tb_root . "_lastdate=NOW()";
		
		$setLangTH = (!empty($_REQUEST['inputSetLang'][0])) ? $_REQUEST['inputSetLang'][0] : 0;
		$setLangEN = (!empty($_REQUEST['inputSetLang'][1])) ? $_REQUEST['inputSetLang'][1] : 0;
		$setLangCN = (!empty($_REQUEST['inputSetLang'][2])) ? $_REQUEST['inputSetLang'][2] : 0;
		$update[] = $mod_tb_root . "_langth='" . $setLangTH . "'";
		$update[] = $mod_tb_root . "_langen='" . $setLangEN . "'";
		$update[] = $mod_tb_root . "_langcn='" . $setLangCN . "'";

		$update[] = $mod_tb_root . "_sdate  	='" . DateFormatInsert($sdateInput) . "'";
		$update[] = $mod_tb_root . "_edate  	='" . $valInsertEdate . "'";

		$update[] = $mod_tb_root . "_resdate  	='" . DateFormatInsert($_POST['resdateInput']) . "'";
		$update[] = $mod_tb_root . "_reedate  	='" . DateFormatInsert($_POST['reedateInput']) . "'";
		$update[] = $mod_tb_root . "_dwswitch='" . $_POST['inputDwswitch'] . "'";

		$update[] = $mod_tb_root . "_tid='" . serialize(array_filter($_REQUEST['inputTag'])) . "'"; // remove array at values empty before use fnc serialize

		$sql = "UPDATE " . $mod_tb_root . " SET " . implode(",", $update) . " WHERE " . $mod_tb_root . "_id='" . $_POST["valEditID"] . "' ";
		$Query = wewebQueryDB($coreLanguageSQL, $sql);

		$sqlDate = "DELETE FROM " . $mod_tb_date . " WHERE " . $mod_tb_date . "_cid=" . $_POST["valEditID"] . " ";
		$QueryDate = wewebQueryDB($coreLanguageSQL, $sqlDate);

		$startTime = strtotime(DateFormatInsert($_REQUEST['sdateInput']));
		if ($_REQUEST['inputChkDate'] >= 1) {
			$endTime = strtotime(DateFormatInsert($_REQUEST['edateInput']));
		} else {
			$endTime = strtotime(DateFormatInsert($_REQUEST['sdateInput']));
		}

		// Loop between timestamps, 1 day at a time 
		$i = 0;
		do {
			$newTime = strtotime('+' . $i++ . ' days', $startTime);
			$newTimeDate = date("Y-m-d", $newTime);

			$insert = array();
			$insert[$mod_tb_date . "_date"] = "'" . $newTimeDate . "'";
			$insert[$mod_tb_date . "_cid"] = "'" . $_POST["valEditID"] . "'";
			$insert[$mod_tb_date . "_type"]  = "'1'";
			$insert[$mod_tb_date . "_typeUsed"]  = "'1'";
			$sqlInsert = "INSERT INTO " . $mod_tb_date . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
			//echo  $sqlInsert."<br/>";
			$queryInsert = wewebQueryDB($coreLanguageSQL, $sqlInsert);
		} while ($newTime < $endTime);

		logs_access('3', 'Update');

		## URL Search ###################################

		$updateSch = array();
		if ($_REQUEST['inputLt'] == "Thai") {
			$updateSch[] = $core_tb_search . "_subject='" . changeQuot($_REQUEST['inputSubject']) . "'";
			$updateSch[] = $core_tb_search . "_title='" . changeQuot($_REQUEST['inputDescription']) . "'";
			$updateSch[] = $core_tb_search . "_keyword='" . addslashes($_POST["inputSubject"]) . " " . htmlspecialchars($_POST['inputHtml']) . "'";
		} else if ($_REQUEST['inputLt'] == "Eng"){
			$updateSch[] = $core_tb_search . "_subjecten='" . changeQuot($_REQUEST['inputSubject']) . "'";
			$updateSch[] = $core_tb_search . "_titleen='" . changeQuot($_REQUEST['inputDescription']) . "'";
			$updateSch[] = $core_tb_search . "_keyworden='" . addslashes($_POST["inputSubject"]) . " " . htmlspecialchars($_POST['inputHtml']) . "'";
		}else{
			$updateSch[] = $core_tb_search . "_subjectcn='" . changeQuot($_REQUEST['inputSubject']) . "'";
			$updateSch[] = $core_tb_search . "_titlecn='" . changeQuot($_REQUEST['inputDescription']) . "'";
			$updateSch[] = $core_tb_search . "_keywordcn='" . addslashes($_POST["inputSubject"]) . " " . htmlspecialchars($_POST['inputHtml']) . "'";
		}
		$updateSch[] = $core_tb_search . "_tid='" . serialize(array_filter($_REQUEST['inputTag'])) . "'"; // remove array at values empty before use fnc serialize

		$updateSch[] = $core_tb_search . "_sdate  	='" . DateFormatInsert($_REQUEST['sdateInput']) . "'";
		$updateSch[] = $core_tb_search . "_edate  	='" . DateFormatInsert($_REQUEST['edateInput']) . "'";
		if ($_REQUEST['cdateInput'] != "") {
			$updateSch[] = $core_tb_search . "_credate='" . DateFormatInsert($_REQUEST['cdateInput']) . "'";
		} else {
			$updateSch[] = $core_tb_search . "_credate='" . wewebNow($coreLanguageSQL) . "'";
		}

		$sqlSch = "UPDATE " . $core_tb_search . " SET " . implode(",", $updateSch) . " WHERE " . $core_tb_search . "_contantid='" . $_POST["valEditID"] . "'  AND " . $core_tb_search . "_masterkey='" . $_POST["masterkey"] . "' ";
		$querySch = wewebQueryDB($coreLanguageSQL, $sqlSch);

	?>
	<?php } ?>
	<?php include("../lib/disconnect.php"); ?>
	<form action="index.php" method="post" name="myFormAction" id="myFormAction">
		<input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
		<input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
		<input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow'] ?>" />
		<input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize'] ?>" />
		<input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby'] ?>" />
		<input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
		<input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
		<input name="sdateInputSe" type="hidden" id="sdateInputSe" value="<?php echo $_REQUEST['sdateInputSe'] ?>" />
		<input name="edateInputSe" type="hidden" id="edateInputSe" value="<?php echo $_REQUEST['edateInputSe'] ?>" />

	</form>
	<script language="JavaScript" type="text/javascript">
		document.myFormAction.submit();
	</script>
</body>

</html>