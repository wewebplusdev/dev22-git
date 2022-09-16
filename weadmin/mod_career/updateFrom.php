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

            if (@file_exists($mod_path_html . "/" . $_REQUEST['inputHtmlHomeDel'])) {
                @unlink($mod_path_html . "/" . $_REQUEST['inputHtmlHomeDel']);
            }

            if ($_POST['inputHtml'] != "") {
                $filename = $_POST["valEditID"] . "-" . $randomNumber . ".html";
                $HTMLToolContent = str_replace("\\\"", "\"", $_POST['inputHtml']);
                $fp = fopen($mod_path_html . "/" . $filename, "w");
                chmod($mod_path_html . "/" . $filename, 0777);
                fwrite($fp, $HTMLToolContent);
                fclose($fp);
            }


            if ($_POST['inputHtmlHome'] != "") {
                $randomNumber = rand(111111111111, 999999999999);
                $filenameHome = $_POST["valEditID"] . "-" . $randomNumber . ".html";
                $HTMLToolContentHome = str_replace("\\\"", "\"", $_POST['inputHtmlHome']);
                $fp = fopen($mod_path_html . "/" . $filenameHome, "w");
                chmod($mod_path_html . "/" . $filenameHome, 0777);
                fwrite($fp, $HTMLToolContentHome);
                fclose($fp);
            }

            $update = array();
            if ($_REQUEST['inputLt'] == "Thai") {
                $update[] = $mod_tb_root . "_htmlfilename   ='" . $filename . "'";
                $update[] = $mod_tb_root . "_title     ='" . $filenameHome . "'";
                $update[] = $mod_tb_root . "_description='" . changeQuot($_POST['inputTagDescription']) . "'";
                $update[] = $mod_tb_root . "_keywords='" . changeQuot($_POST['inputTagKeywords']) . "'";
                $update[] = $mod_tb_root . "_metatitle='" . changeQuot($_POST['inputTagTitle']) . "'";
            } else {
                $update[] = $mod_tb_root . "_htmlfilenameen     ='" . $filename . "'";
                 $update[] = $mod_tb_root . "_titleen   ='" . $filenameHome . "'";
                $update[] = $mod_tb_root . "_descriptionen='" . changeQuot($_POST['inputTagDescription']) . "'";
                $update[] = $mod_tb_root . "_keywordsen='" . changeQuot($_POST['inputTagKeywords']) . "'";
                $update[] = $mod_tb_root . "_metatitleen='" . changeQuot($_POST['inputTagTitle']) . "'";
            }

            $update[] = $mod_tb_root . "_lastbyid='" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
            $update[] = $mod_tb_root . "_lastby='" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
            $update[] = $mod_tb_root . "_lastdate=" . wewebNow($coreLanguageSQL) . "";
            $update[] = $mod_tb_root . "_language=" . $_REQUEST['inputLt'] . "";

            $sql = "UPDATE " . $mod_tb_root . " SET " . implode(",", $update) . " WHERE " . $mod_tb_root . "_id='" . $_POST["valEditID"] . "' ";
            $Query = wewebQueryDB($coreLanguageSQL, $sql);

            logs_access('3', 'Update');
            ?>
        <?php } ?>
        <?php include("../lib/disconnect.php"); ?>
        <form action="from.php" method="post" name="myFormAction" id="myFormAction">
            <input name="masterkey" type="hidden" id="masterkey" value="<?php echo  $_REQUEST['masterkey'] ?>" />
            <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo  $_REQUEST['menukeyid'] ?>" />
            <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo  $_REQUEST['module_pageshow'] ?>" />
            <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo  $_REQUEST['module_pagesize'] ?>" />
            <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo  $_REQUEST['module_orderby'] ?>" />
        </form>            
        <script language="JavaScript" type="text/javascript"> document.myFormAction.submit();</script>
    </body></html>  
