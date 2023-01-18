<?
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("config.php");


if ($_REQUEST['execute'] == "insert") {

    $sql = "SELECT MAX(" . $mod_tb_root . "_order) FROM " . $mod_tb_root;
    $Query = wewebQueryDB($coreLanguageSQL, $sql);
    $Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
    $maxOrder = $Row[0] + 1;

    if ($_POST['inputAddlang'] == "alllang") {
        $arrayLoop = ['th', 'en'];
    } elseif ($_POST['inputAddlang'] == "onlyeng") {
        $arrayLoop = ['en'];
    } elseif ($_POST['inputAddlang'] == "onlythai") {
        $arrayLoop = ['th'];
    }
  
    $insert = array();
    $insert[$mod_tb_root . "_language"] = "'" . $_SESSION[$valSiteManage . 'core_session_language'] . "'";
    $insert[$mod_tb_root . "_masterkey"] = "'" . $_REQUEST["masterkey"] . "'";
    $insert[$mod_tb_root . "_gid"] = "'" . $_POST["inputGroupID"] . "'";
    $insert[$mod_tb_root . "_sgid"] = "'" . $_POST["inputSubgroupID"] . "'";
    $insert[$mod_tb_root . "_ssgid"] = "'" . $_POST["inputSSubgroupID"] . "'";
    if ($_REQUEST['inputSubtype'] == 0) {
        $insert[$mod_tb_root . "_type"] = "'".$_POST["inputType"]."'";
    }else{
        $insert[$mod_tb_root . "_type"] = "'".$_POST["inputType_sub"]."'";
    }

    $insert[$mod_tb_root . "_pic"] = "'" . $_POST["picname"] . "'";
    $insert[$mod_tb_root . "_subtype"] = "'" . $_POST["inputSubtype"] . "'";
    $insert[$mod_tb_root . "_crebyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root . "_creby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root . "_lastbyid"] = "'" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $insert[$mod_tb_root . "_lastby"] = "'" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $insert[$mod_tb_root . "_sdate"] = "'" . DateFormatInsert($_REQUEST['sdateInput']) . "'";
    $insert[$mod_tb_root . "_edate"] = "'" . DateFormatInsert($_REQUEST['edateInput']) . "'";
    if ($_REQUEST["inputType"] == "url") {
        $insert[$mod_tb_root . "_url"] = "'" . changeQuot($_REQUEST['inputurl']) . "'";
    }
    if ($_REQUEST["inputType"] == "social") {
        $insert[$mod_tb_root . "_facebook"] = "'" . changeQuot($_REQUEST['inputfacebook']) . "'";
        $insert[$mod_tb_root . "_email"] = "'" . changeQuot($_REQUEST['inputemail']) . "'";
        $insert[$mod_tb_root . "_youtube"] = "'" . changeQuot($_REQUEST['inputyoutube']) . "'";
        $insert[$mod_tb_root . "_line"] = "'" . changeQuot($_REQUEST['inputline']) . "'";
        $insert[$mod_tb_root . "_ig"] = "'" . changeQuot($_REQUEST['inputig']) . "'";
        $insert[$mod_tb_root . "_twitter"] = "'" . changeQuot($_REQUEST['inputtwitter']) . "'";
    }

    if ($_REQUEST['cdateInput'] != "") {
        $insert[$mod_tb_root . "_credate"] = "'" . DateFormatInsert($_REQUEST['cdateInput']) . "'";
    } else {
        $insert[$mod_tb_root . "_credate"] = "NOW()";
    }

    $insert[$mod_tb_root . "_lastdate"] = "NOW()";
    $insert[$mod_tb_root . "_status"] = "'Disable'";
    $insert[$mod_tb_root . "_statuspin"] = "'No'";
    $insert[$mod_tb_root . "_order"] = "'" . $maxOrder . "'";
    $sql = "INSERT INTO " . $mod_tb_root . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
    $Query = wewebQueryDB($coreLanguageSQL, $sql);
    
    
    $contantID = wewebInsertID($coreLanguageSQL);
    foreach ($arrayLoop as $key => $value) {
        if ($value == 'th') {
            $langInertDb = "";
        } elseif ($value == 'en') {
            $langInertDb = "en";
        }
        $update = array();
        // $update[] = $mod_tb_root . "_gid ='" . $_POST["inputGroupID"] . "'";
        $update[] = $mod_tb_root . "_subject" . $langInertDb . "= '" . changeQuot($_REQUEST['inputSubject']) . "'";
        $update[] = $mod_tb_root . "_title" . $langInertDb . "= '" . changeQuot($_REQUEST['inputDescription']) . "'";
        $sql = "UPDATE " . $mod_tb_root . " SET " . implode(",", $update) . " WHERE " . $mod_tb_root . "_id='" . $contantID . "' ";
        $Query = wewebQueryDB($coreLanguageSQL, $sql);
    }


    $sql_filetemp = "SELECT " . $mod_tb_fileTemp . "_id, " . $mod_tb_fileTemp . "_filename," . $mod_tb_fileTemp . "_name," . $mod_tb_fileTemp . "_title," . $mod_tb_fileTemp . "_type," . $mod_tb_fileTemp . "_url," . $mod_tb_fileTemp . "_file," . $mod_tb_fileTemp . "_code
    FROM " . $mod_tb_fileTemp . " WHERE " . $mod_tb_fileTemp . "_contantid  ='" . $_REQUEST['valEditID'] . "'  
    AND   " . $mod_tb_fileTemp . "_masterkey='" . $masterkey . "'AND   " . $mod_tb_fileTemp . "_type='" . $_REQUEST['inputSubtype'] . "' ORDER BY " . $mod_tb_fileTemp . "_id ASC";
    
    $query_filetemp = wewebQueryDB($coreLanguageSQL,$sql_filetemp);
    $number_filetemp = wewebNumRowsDB($coreLanguageSQL, $query_filetemp);
    while ($row_filetemp = wewebFetchArrayDB($coreLanguageSQL,$query_filetemp)) {

        $sql = "SELECT MAX(" . $mod_tb_file . "_order) FROM " . $mod_tb_file;
        $Query = wewebQueryDB($coreLanguageSQL, $sql);
        $Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
        $maxOrder = $Row[0] + 1;

        $downloadID = $row_filetemp[0];
        $downloadFile = $row_filetemp[1];
        $downloadName = $row_filetemp[2];
        $valTtile = $row_filetemp[3];
        $valType = $row_filetemp[4];
        $valUrl = $row_filetemp[5];
        $valFile = $row_filetemp[6];
        $valCode = $row_filetemp[7];

        $insert_file = array();
        $insert_file[$mod_tb_file . "_contantid"] = "'" . $contantID . "'";
        $insert_file[$mod_tb_file . "_filename"] = "'" . $downloadFile . "'";
        $insert_file[$mod_tb_file . "_name"] = "'" . $downloadName . "'";
        $insert_file[$mod_tb_file . "_code"] = "'" . $valCode . "'";
        $insert_file[$mod_tb_file . "_language"] = "'" . $_SESSION[$valSiteManage . 'core_session_language'] . "'";
        $insert_file[$mod_tb_file . "_title"] = "'" . $valTtile . "'";
        $insert_file[$mod_tb_file . "_type"] = "'" . $valType . "'";
        $insert_file[$mod_tb_file . "_url"] = "'" . $valUrl . "'";
        $insert_file[$mod_tb_file . "_file"] = "'" . $valFile . "'";
        $insert_file[$mod_tb_file . "_order"] = "'" . $maxOrder . "'";
        $sql = "INSERT INTO " . $mod_tb_file . "(" . implode(",", array_keys($insert_file)) . ") VALUES (" . implode(",", array_values($insert_file)) . ")";
        $Query = wewebQueryDB($coreLanguageSQL, $sql);

    }
    $sql_delete = "DELETE FROM  " . $mod_tb_fileTemp . " WHERE " . $mod_tb_fileTemp . "_contantid='" . $_REQUEST['valEditID'] . "' ";
    $query_del = wewebQueryDB($coreLanguageSQL,$sql_delete);

    logs_access('3', 'Insert');

    ## URL Search ###################################
    $txt_value_to=	encodeURL("c=".$contantID);
       
    if($_SESSION[$valSiteManage . 'core_session_language']=="Thai"){
    $mod_path_url_fornt =$mod_url_search_th."?".$txt_value_to;
    }else{
    $mod_path_url_forntEN=$mod_url_search_en."?".$txt_value_to;
    }


// $txt_value_to = encodeURL("c=" . $contantID . "");

// $valUrlSearchTH = $mod_url_search_th . "/" . $contantID . "/";
//  $valUrlSearchEN = $mod_url_search_en . "/" . $contantID . "/";


 $insertSch = array();
 $insertSch[$core_tb_search . "_language"] = "'" . $_REQUEST['inputLt'] . "'";
 $insertSch[$core_tb_search . "_contantid"] = "'" . $contantID . "'";
 $insertSch[$core_tb_search . "_masterkey"] = "'" . $_POST["masterkey"] . "'";
 $insertSch[$core_tb_search . "_subject"] = "'" . changeQuot($_POST["inputSubject"]) . "'";
 $insertSch[$core_tb_search . "_title"] = "'" . changeQuot($_POST["inputDescription"]) . "'";
 $insertSch[$core_tb_search . "_keyword"] = "'" . addslashes($_POST["inputSubject"]) . " " . addslashes($_POST["inputDescription"]) . " " . htmlspecialchars($_POST['inputHtml']) . "'";
 $insertSch[$core_tb_search . "_url"] = "'" . $mod_path_url_fornt . "'";
 $insertSch[$core_tb_search . "_urlen"] = "'" . $mod_path_url_forntEN . "'";
 $insertSch[$core_tb_search . "_edate"] = "'" . DateFormatInsert($_POST["edateInput"]) . "'";
 $insertSch[$core_tb_search . "_sdate"] = "'" . DateFormatInsert($_POST["sdateInput"]) . "'";
 $insertSch[$core_tb_search . "_status"] = "'Disable'";
 $insertSch[$core_tb_search . "_lastdate"] = "NOW()";
 $sqlSch = "INSERT " . $core_tb_search . " (" . implode(",", array_keys($insertSch)) . ") VALUES (" . implode(",", array_values($insertSch)) . ")";
 $querySch = wewebQueryDB($coreLanguageSQL,$sqlSch);

   

    // print_pre($sqlSch);
}
?>
<? include("../lib/disconnect.php"); ?>
<form action="index.php" method="post" name="myFormAction" id="myFormAction">
    <input name="masterkey" type="hidden" id="masterkey" value="<?= $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?= $_REQUEST['menukeyid'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?= $_REQUEST['inputSearch'] ?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?= $_REQUEST['inputGh'] ?>" />
    <!-- <input name="inputTh" type="hidden" id="inputTh" value="<?= $_REQUEST['inputTh'] ?>" /> -->
    <input name="inputSGh" type="hidden" id="inputSGh" value="<?=$_REQUEST['inputSGh']?>" />
</form>
<script language="JavaScript" type="text/javascript"> document.myFormAction.submit();</script>
