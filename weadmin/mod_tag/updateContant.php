<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("config.php");
if ($execute == "update") {
    $sqlChk    = "SELECT " . $mod_tb_root . "_subject FROM " . $mod_tb_root . " WHERE  (" . $mod_tb_root . "." . $mod_tb_root . "_subject = '" . trim($_REQUEST['inputSubject']) . "' ) AND " . $mod_tb_root . "_id != " . $_REQUEST["valEditID"] . " ";
    $QueryChk  = wewebQueryDB($coreLanguageSQL, $sqlChk);
    $count_totalrecord = wewebNumRowsDB($coreLanguageSQL, $QueryChk);
    //print_pre($count_totalrecord);
    if ($count_totalrecord <= 0) {

        $randomNumber = randomNameUpdate(2);

        $update = array();
        if ($_REQUEST['inputLt'] == 'Thai') {
            $update[] = $mod_tb_root . "_subject            = '" . changeQuot($_REQUEST['inputSubject']) . "'";
            $update[] = $mod_tb_root . "_title            = '" . changeQuot($_REQUEST['inputComment']) . "'";
        } elseif($_REQUEST['inputLt'] == 'Eng') {
            $update[] = $mod_tb_root . "_subjecten          = '" . changeQuot($_REQUEST['inputSubject']) . "'";
            $update[] = $mod_tb_root . "_titleen           = '" . changeQuot($_REQUEST['inputComment']) . "'";
        } else {
            $update[] = $mod_tb_root . "_subjectcn          = '" . changeQuot($_REQUEST['inputSubject']) . "'";
            $update[] = $mod_tb_root . "_titlecn           = '" . changeQuot($_REQUEST['inputComment']) . "'";
        }
        $update[] = $mod_tb_root . "_lastbyid   = '" . $_SESSION[$valSiteManage . 'core_session_id'] . "'";
        $update[] = $mod_tb_root . "_lastby     = '" . $_SESSION[$valSiteManage . 'core_session_name'] . "'";
        $update[] = $mod_tb_root . "_lastdate   = NOW()";
        $sql    = "UPDATE " . $mod_tb_root . " SET " . implode(",", $update) . " WHERE " . $mod_tb_root . "_id='" . $_REQUEST["valEditID"] . "' ";
        $Query  = wewebQueryDB($coreLanguageSQL, $sql);
        logs_access('3', 'Update Tag');
    }
}
?>
<?php include("../lib/disconnect.php"); ?>
<form action="index.php" method="post" name="myFormAction" id="myFormAction">
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo  $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo  $_REQUEST['menukeyid'] ?>" />
    <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo  $_REQUEST['module_pageshow'] ?>" />
    <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo  $_REQUEST['module_pagesize'] ?>" />
    <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo  $_REQUEST['module_orderby'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo  $_REQUEST['inputSearch'] ?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?php echo  $_REQUEST['inputGh'] ?>" />
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