<?php
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("config.php");

$loaddder = $_POST['Valueloaddder'];
$tablename = $_POST['Valuetablename'];
$statusname = $_POST['Valuestatusname'];
$statusid = $_POST['Valuestatusid'];
$loadderstatus = $_POST['Valueloadderstatus'];
$filestatus = $_POST['Valuefilestatus'];


if ($statusname == "Show") {
    $inputstatusname = "Hide";
} else if ($statusname == "Hide") {
    $inputstatusname = "Show";
}


$sql = "UPDATE " . $tablename . " SET "
    . $tablename . "_status_show= '$inputstatusname'  WHERE " . $tablename . "_id='" . $statusid . "'";
$Query = wewebQueryDB($coreLanguageSQL, $sql);
?>
<?php if ($inputstatusname == "Show") { ?>
    <a href="javascript:void(0)" onclick="changeStatus('<?php echo  $loaddder ?>', '<?php echo  $tablename ?>', '<?php echo  $inputstatusname ?>', '<?php echo  $statusid ?>', '<?php echo  $loadderstatus ?>', '<?php echo  $filestatus ?>')"><span class="fontContantTbEnable"><?php echo  $inputstatusname ?></span></a>
<?php } else { ?>
    <a href="javascript:void(0)" onclick="changeStatus('<?php echo  $loaddder ?>', '<?php echo  $tablename ?>', '<?php echo  $inputstatusname ?>', '<?php echo  $statusid ?>', '<?php echo  $loadderstatus ?>', '<?php echo  $filestatus ?>')"><span class="fontContantTbDisable"><?php echo  $inputstatusname ?></span></a>
<?php } ?>

<img src="../img/loader/ajax-loaderstatus.gif" alt="waiting" style="display:none;" id="<?php echo  $loaddder ?>" />