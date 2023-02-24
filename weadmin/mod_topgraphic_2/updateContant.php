<?php
include "../lib/session.php";
include "../lib/config.php";
include "../lib/connect.php";
include "../lib/function.php";
include "config.php";
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
    $randomNumber = randomNameupdate(2);

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
        $filename = "html-".$randomNumber . ".html";
        $HTMLToolContent = str_replace("\\\"", "\"", $_POST['inputHtml']);
        $fp = fopen($mod_path_html . "/" . $filename, "w");
        chmod($mod_path_html . "/" . $filename, 0777);
        fwrite($fp, $HTMLToolContent);
        fclose($fp);
    }else{
        $filename = '';
    }

    $update = array();
    if ($_REQUEST['inputLt'] == "Thai") {
        $update[] = $mod_tb_root . "_subject='" . changeQuot($_POST['inputSubject']) . "'";
        $update[] = $mod_tb_root . "_url='" . changeQuot($_REQUEST['inputurl']) . "'";
        $update[] = $mod_tb_root . "_title='" . changeQuot($_REQUEST['inputTitle']) . "'";
        $update[] = $mod_tb_root . "_desc='" . changeQuot($_REQUEST['inputDesc']) . "'";
        $update[] = $mod_tb_root . "_htmlfilename  	='" . $filename . "'";

    } else if ($_REQUEST['inputLt'] == "Eng") {
        $update[] = $mod_tb_root . "_subjecten='" . changeQuot($_POST['inputSubject']) . "'";
        $update[] = $mod_tb_root . "_urlen='" . changeQuot($_REQUEST['inputurl']) . "'";
        $update[] = $mod_tb_root . "_titleen='" . changeQuot($_REQUEST['inputTitle']) . "'";
        $update[] = $mod_tb_root . "_descen='" . changeQuot($_REQUEST['inputDesc']) . "'";
        $update[] = $mod_tb_root . "_htmlfilenameen  	='" . $filename . "'";
    
    }else{
        $update[] = $mod_tb_root . "_subjectcn='" . changeQuot($_POST['inputSubject']) . "'";
        $update[] = $mod_tb_root . "_urlcn='" . changeQuot($_REQUEST['inputurl']) . "'";
        $update[] = $mod_tb_root . "_titlecn='" . changeQuot($_REQUEST['inputTitle']) . "'";
        $update[] = $mod_tb_root . "_desccn='" . changeQuot($_REQUEST['inputDesc']) . "'";
        $update[] = $mod_tb_root . "_htmlfilenamecn  	='" . $filename . "'";
    
    }

    $update[] = $mod_tb_root . "_typevdo='".$_POST["inputType"]."'";
    $update[] = $mod_tb_root . "_typevdoen='".$_POST["inputType"]."'";
    $update[] = $mod_tb_root . "_typevdocn='".$_POST["inputType"]."'";
    if ($_POST["inputType"] == 'url') {
        $update[] = $mod_tb_root."_urlvdo='".$_POST["inputurlvdo"]."'";
        $update[] = $mod_tb_root."_urlvdoen='".$_POST["inputurlvdo"]."'";
        $update[] = $mod_tb_root."_urlvdocn='".$_POST["inputurlvdo"]."'";

        if(file_exists($mod_path_vdo."/".$_REQUEST['vdoname'])) {
            @unlink($mod_path_vdo."/".$_REQUEST['vdoname']);
        }
        $update[] = $mod_tb_root."_filevdo=''";
        $update[] = $mod_tb_root."_filevdoen=''";
        $update[] = $mod_tb_root."_filevdocn=''";

    }
    if ($_POST["inputType"] == 'file') {
        $update[] = $mod_tb_root."_filevdo='".$_POST["vdoname"]."'";
        $update[] = $mod_tb_root."_filevdoen='".$_POST["vdoname"]."'";
        $update[] = $mod_tb_root."_filevdocn='".$_POST["vdoname"]."'";

        $update[] = $mod_tb_root."_urlvdo=''";
        $update[] = $mod_tb_root."_urlvdoen=''";
        $update[] = $mod_tb_root."_urlvdocn=''";
    }

    $update[] = $mod_tb_root . "_target='" . $_POST["inputmenutarget"] . "'";

    $setLangTH = (!empty($_REQUEST['inputSetLang'][0])) ? $_REQUEST['inputSetLang'][0] : 0 ;
    $setLangEN = (!empty($_REQUEST['inputSetLang'][1])) ? $_REQUEST['inputSetLang'][1] : 0 ;
    $setLangCN = (!empty($_REQUEST['inputSetLang'][2])) ? $_REQUEST['inputSetLang'][2] : 0 ;
    $update[]=$mod_tb_root."_langth='".$setLangTH."'";
    $update[]=$mod_tb_root."_langen='".$setLangEN."'";
    $update[]=$mod_tb_root."_langcn='".$setLangCN."'";

    $update[] = $mod_tb_root . "_lastbyid='" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
    $update[] = $mod_tb_root . "_lastby='" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
    $update[] = $mod_tb_root . "_lastdate=" . wewebNow($coreLanguageSQL) . "";

    $update[] = $mod_tb_root."_sdate  	='".DateFormatInsert($sdateInput)."'";
    $update[] = $mod_tb_root."_edate  	='".DateFormatInsert($edateInput)."'";

    
    
    $sql = "UPDATE " . $mod_tb_root . " SET " . implode(",", $update) . " WHERE " . $mod_tb_root . "_id='" . $_POST["valEditID"] . "' ";
    $Query = wewebQueryDB($coreLanguageSQL, $sql);

    logs_access('3', 'Update');
    ?>
        <?php } ?>
 <?php include "../lib/disconnect.php";?>
<form action="index.php" method="post" name="myFormAction" id="myFormAction">
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
    <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow'] ?>" />
    <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize'] ?>" />
    <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
    <input name="inputTh" type="hidden" id="inputTh" value="<?php echo $_REQUEST['inputTh'] ?>" />
</form>
<script language="JavaScript" type="text/javascript"> document.myFormAction.submit(); </script></body></html>
