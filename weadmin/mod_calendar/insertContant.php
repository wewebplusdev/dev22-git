<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("config.php");

if ($_REQUEST['execute'] == "insert") {
    $randomNumber = rand(111, 999);

    if (!is_dir($core_pathname_upload . "/" . $masterkey)) {
        mkdir($core_pathname_upload . "/" . $masterkey, 0777);
    }
    if (!is_dir($mod_path_html)) {
        mkdir($mod_path_html, 0777);
    }


    if (@file_exists($mod_path_html . "/" . $htmlfiledelete)) {
        @unlink($mod_path_html . "/" . $htmlfiledelete);
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
		$valInsertEdate =DateFormatInsert($_REQUEST['sdateInput']);
	}else{
		$valInsertEdate =DateFormatInsert($_REQUEST['edateInput']);
	}


    $sql = "SELECT MAX(" . $mod_tb_root . "_order) FROM " . $mod_tb_root;
    $Query = wewebQueryDB($coreLanguageSQL, $sql);
    $Row = wewebFetchArrayDB($coreLanguageSQL,$Query);
    $maxOrder = $Row[0] + 1;

    $insert = array();
    $insert[$mod_tb_root . "_language"] = "'" . $_SESSION[$valSiteManage . 'core_session_language'] . "'";
    $insert[$mod_tb_root . "_masterkey"] = "'" . $_REQUEST["masterkey"] . "'";
    $insert[$mod_tb_root . "_subject"] = "'" . changeQuot($_REQUEST['inputSubject']) . "'";
    $insert[$mod_tb_root . "_title"] = "'" . changeQuot($_REQUEST['inputDescription']) . "'";
    $insert[$mod_tb_root . "_showicon"] = "'" . changeQuot($_REQUEST['inputShowIcon']) . "'";

    $insert[$mod_tb_root . "_typeday"] = "'" . changeQuot($_REQUEST['inputChkDate']) . "'";
    $insert[$mod_tb_root . "_typeDateTo"] = "'" . changeQuot($_REQUEST['inputIsDateTo']) . "'";
    $insert[$mod_tb_root . "_typeTimeTo"] = "'" . changeQuot($_REQUEST['inputIsTimeTo']) . "'";
    $insert[$mod_tb_root . "_typeSal"] = "'" . changeQuot($_REQUEST['inputTypeSal']) . "'";
    $insert[$mod_tb_root . "_fromHH"] = "'" . changeQuot($_REQUEST['inputTimeFromHH']) . "'";
    $insert[$mod_tb_root . "_fromMM"] = "'" . changeQuot($_REQUEST['inputTimeFromMM']) . "'";
    $insert[$mod_tb_root . "_toHH"] = "'" . changeQuot($_REQUEST['inputTimeToHH']) . "'";
    $insert[$mod_tb_root . "_toMM"] = "'" . changeQuot($_REQUEST['inputTimeToMM']) . "'";

    $insert[$mod_tb_root . "_quantity"] = "'" . changeQuot($_REQUEST['inputQuantity']) . "'";
    $insert[$mod_tb_root . "_price"] = "'" . changeQuot($_REQUEST['inputPrice']) . "'";
    $insert[$mod_tb_root . "_sale"] = "'" . changeQuot($_REQUEST['inputSale']) . "'";
    $insert[$mod_tb_root . "_address"] = "'" . changeQuot($_REQUEST['inputAddress']) . "'";
    $insert[$mod_tb_root . "_eat"] = "'" . changeQuot($_REQUEST['inputEat']) . "'";
    $insert[$mod_tb_root . "_walk"] = "'" . changeQuot($_REQUEST['inputWalk']) . "'";
    $insert[$mod_tb_root . "_person"] = "'" . changeQuot($_REQUEST['inputPerson']) . "'";
    $insert[$mod_tb_root . "_hotelname"] = "'" . changeQuot($_REQUEST['inputHotelName']) . "'";
	$insert[$mod_tb_root . "_tid"] = "'".serialize(array_filter($_REQUEST['inputTag']))."'"; // remove array at values empty before use fnc serialize


    $insert[$mod_tb_root . "_gid"] = "'" . $_POST["inputGroupID"] . "'";

    $insert[$mod_tb_root . "_pic"] = "'" . $_POST["picname"] . "'";
    $insert[$mod_tb_root . "_type"] = "'" . $_POST["inputType"] . "'";
    $insert[$mod_tb_root . "_url"] = "'" . changeQuot($_REQUEST['inputurl']) . "'";
    $insert[$mod_tb_root . "_filevdo"] = "'" . $_POST["vdoname"] . "'";
    $insert[$mod_tb_root . "_htmlfilename"] = "'" . $filename . "'";
    $insert[$mod_tb_root . "_crebyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root . "_creby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root . "_lastbyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root . "_lastby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root . "_description"] = "'" . changeQuot($_REQUEST['inputTagDescription']) . "'";
    $insert[$mod_tb_root . "_keywords"] = "'" . changeQuot($_REQUEST['inputTagKeywords']) . "'";
    $insert[$mod_tb_root . "_metatitle"] = "'" . changeQuot($_REQUEST['inputTagTitle']) . "'";

    $insert[$mod_tb_root . "_sdate"] = "'" . DateFormatInsert($_REQUEST['sdateInput']) . "'";
    $insert[$mod_tb_root . "_edate"] = "'" . $valInsertEdate . "'";

    $insert[$mod_tb_root . "_resdate"] = "'" . DateFormatInsert($_REQUEST['resdateInput']) . "'";
    $insert[$mod_tb_root . "_reedate"] = "'" . DateFormatInsert($_REQUEST['reedateInput']) . "'";

    $setLangTH = (!empty($_REQUEST['inputSetLang'][0])) ? $_REQUEST['inputSetLang'][0] : 0 ;
    $setLangEN = (!empty($_REQUEST['inputSetLang'][1])) ? $_REQUEST['inputSetLang'][1] : 0 ;
    $setLangCN = (!empty($_REQUEST['inputSetLang'][2])) ? $_REQUEST['inputSetLang'][2] : 0 ;
    $insert[$mod_tb_root . "_langth"]="'".$setLangTH."'";
    $insert[$mod_tb_root . "_langen"]="'".$setLangEN."'";
    $insert[$mod_tb_root . "_langcn"]="'".$setLangCN."'";

    $insert[$mod_tb_root . "_credate"] = "NOW()";
    $insert[$mod_tb_root . "_lastdate"] = "NOW()";
    $insert[$mod_tb_root . "_status"] = "'Disable'";
    $insert[$mod_tb_root . "_order"] = "'" . $maxOrder . "'";
    $insert[$mod_tb_root . "_dwswitch"] = "'".$_REQUEST['inputDwswitch']."'";
    $sql = "INSERT INTO " . $mod_tb_root . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
    $Query = wewebQueryDB($coreLanguageSQL,$sql);
    $contantID = wewebInsertID($coreLanguageSQL);

    $startTime = strtotime(DateFormatInsert($_REQUEST['sdateInput']));

    if ($_REQUEST['inputChkDate'] >= 1) {
        $endTime = strtotime(DateFormatInsert($_REQUEST['sdateInput']));
    } else {
        $endTime = strtotime(DateFormatInsert($_REQUEST['edateInput']));
    }

    // Loop between timestamps, 1 day at a time 
    $i = 0;
    do {
        $newTime = strtotime('+' . $i++ . ' days', $startTime);
        $newTimeDate = date("Y-m-d", $newTime);

        $insert = array();
        $insert[$mod_tb_date . "_date"] = "'" . $newTimeDate . "'";
        $insert[$mod_tb_date . "_cid"] = "'" . $contantID . "'";
        $insert[$mod_tb_date . "_type"] = "'1'";
        $insert[$mod_tb_date . "_typeUsed"] = "'1'";
        $sqlInsert = "INSERT INTO " . $mod_tb_date . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
        $queryInsert = wewebQueryDB($coreLanguageSQL,$sqlInsert);
			//echo  $sqlInsert."<br/>";
    } while ($newTime < $endTime);


    $sql_albumtemp = "SELECT " . $mod_tb_root_albumTemp . "_id," . $mod_tb_root_albumTemp . "_filename," . $mod_tb_root_albumTemp . "_name  FROM " . $mod_tb_root_albumTemp . " WHERE " . $mod_tb_root_albumTemp . "_contantid 	='" . $_REQUEST['valEditID'] . "' ORDER BY " . $mod_tb_root_albumTemp . "_id ASC";
    $query_albumtemp = wewebQueryDB($coreLanguageSQL,$sql_albumtemp);
    $number_albumtemp = wewebNumRowsDB($coreLanguageSQL,$query_albumtemp);
    if ($number_albumtemp >= 1) {
        while ($row_albumtemp = wewebFetchArrayDB($coreLanguageSQL,$query_albumtemp)) {
            $downloadID = $row_albumtemp[0];
            $downloadFile = $row_albumtemp[1];
            $downloadName = $row_albumtemp[2];

            $insert = array();
            $insert[$mod_tb_root_album . "_contantid"] = "'" . $contantID . "'";
            $insert[$mod_tb_root_album . "_filename"] = "'" . $downloadFile . "'";
            $insert[$mod_tb_root_album . "_name"] = "'" . $downloadName . "'";
            $insert[$mod_tb_root_album . "_language"] = "'" . $_REQUEST['inputLt'] . "'";

            $sql = "INSERT INTO " . $mod_tb_root_album . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
            $Query = wewebQueryDB($coreLanguageSQL,$sql);

            $sql_del = "DELETE FROM " . $mod_tb_root_albumTemp . " WHERE   " . $mod_tb_root_albumTemp . "_id='" . $downloadID . "'";
            $Query_del = wewebQueryDB($coreLanguageSQL,$sql_del);
        }
    }


    $sql_filetemp = "SELECT " . $mod_tb_fileTemp . "_id," . $mod_tb_fileTemp . "_filename," . $mod_tb_fileTemp . "_name  FROM " . $mod_tb_fileTemp . " WHERE " . $mod_tb_fileTemp . "_contantid 	='" . $_REQUEST['valEditID'] . "' ORDER BY " . $mod_tb_fileTemp . "_id ASC";
    $query_filetemp = wewebQueryDB($coreLanguageSQL,$sql_filetemp);
    $number_filetemp = wewebNumRowsDB($coreLanguageSQL,$query_filetemp);
    if ($number_filetemp >= 1) {
        while ($row_filetemp = wewebFetchArrayDB($coreLanguageSQL,$query_filetemp)) {
            $downloadID = $row_filetemp[0];
            $downloadFile = $row_filetemp[1];
            $downloadName = $row_filetemp[2];

            $insert = array();
            $insert[$mod_tb_file . "_contantid"] = "'" . $contantID . "'";
            $insert[$mod_tb_file . "_filename"] = "'" . $downloadFile . "'";
            $insert[$mod_tb_file . "_name"] = "'" . $downloadName . "'";
            $insert[$mod_tb_file . "_language"] = "'" . $_REQUEST['inputLt'] . "'";

            $sql = "INSERT INTO " . $mod_tb_file . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
            $Query = wewebQueryDB($coreLanguageSQL,$sql);

            $sql_del = "DELETE FROM " . $mod_tb_fileTemp . " WHERE   " . $mod_tb_fileTemp . "_id='" . $downloadID . "'";
            $Query_del = wewebQueryDB($coreLanguageSQL,$sql_del);
        }
    }


    logs_access('3', 'Insert');


    ## URL Search ###################################
	//$txt_value_to=	encodeURL("c=".$contantID."");
	$txt_value_to =	$contantID;

	$valUrlSearchTH = $mod_url_search_th . "/" . $txt_value_to . "/";
	$valUrlSearchEN = $mod_url_search_en . "/" . $txt_value_to . "/";
	$valUrlSearchCN = $mod_url_search_cn . "/" . $txt_value_to . "/";


	$insertSch = array();
	$insertSch[$core_tb_search . "_language"] = "'" . $_REQUEST['inputLt'] . "'";
	$insertSch[$core_tb_search . "_contantid"] = "'" . $contantID . "'";
	$insertSch[$core_tb_search . "_masterkey"] =  "'" . $_POST["masterkey"] . "'";
	$insertSch[$core_tb_search . "_subject"] =  "'" . changeQuot($_POST["inputSubject"]) . "'";
	$insertSch[$core_tb_search . "_title"] =  "'" . changeQuot($_POST["inputDescription"]) . "'";
	$insertSch[$core_tb_search . "_keyword"] =  "'" . addslashes($_POST["inputSubject"]) . " " . htmlspecialchars($_POST['inputHtml']) . "'";
	$insertSch[$core_tb_search . "_url"] = "'" . $valUrlSearchTH . "'";
	$insertSch[$core_tb_search . "_urlen"] = "'" . $valUrlSearchEN . "'";
	$insertSch[$core_tb_search . "_urlcn"] = "'" . $valUrlSearchCN . "'";
	$insertSch[$core_tb_search . "_edate"] = "'" . DateFormatInsert($_POST["edateInput"]) . "'";
	$insertSch[$core_tb_search . "_sdate"] = "'" . DateFormatInsert($_POST["sdateInput"]) . "'";
	$insertSch[$core_tb_search . "_status"] = "'Disable'";
	$insertSch[$core_tb_search . "_tid"] = "'" . serialize(array_filter($_REQUEST['inputTag'])) . "'"; // remove array at values empty before use fnc serialize

	$sqlSch = "INSERT " . $core_tb_search . " (" . implode(",", array_keys($insertSch)) . ") VALUES (" . implode(",", array_values($insertSch)) . ")";
	$querySch = wewebQueryDB($coreLanguageSQL, $sqlSch);
}
?>
<?php include("../lib/disconnect.php"); ?>
<form action="index.php" method="post" name="myFormAction" id="myFormAction">
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo  $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo  $_REQUEST['menukeyid'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo  $_REQUEST['inputSearch'] ?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?php echo  $_REQUEST['inputgroupid'] ?>" />
    <input name="sdateInputSe" type="hidden" id="sdateInputSe" value="<?php echo  $_REQUEST['sdateInputSe'] ?>" />
    <input name="edateInputSe" type="hidden" id="edateInputSe" value="<?php echo  $_REQUEST['edateInputSe'] ?>" />

</form>            
<script language="JavaScript" type="text/javascript"> document.myFormAction.submit();</script>
