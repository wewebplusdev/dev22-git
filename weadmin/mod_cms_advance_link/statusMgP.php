<?
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("config.php");
$loaddder=$_POST['Valueloaddder'];
$tablename=$_POST['Valuetablename'];
$statusname=$_POST['Valuestatusname'];
$statusid=$_POST['Valuestatusid'];
$loadderstatus=$_POST['Valueloadderstatus'];
$filestatus=$_POST['Valuefilestatus'];
$menukeyid=7;
		if($tablename==$mod_tb_root_group){
			$sqlSch = "SELECT ".$tablename."_masterkey  FROM ".$tablename." WHERE  ".$tablename."_id='".$statusid."' ";
			$querySch=wewebQueryDB($coreLanguageSQL,$sqlSch);
			$rowSch=wewebFetchArrayDB($coreLanguageSQL,$querySch);
			$valMasterkey=$rowSch[0];
		}
$masterkey=$valMasterkey;
include("config.php");

// $sql = "UPDATE ".$tablename." SET "
// .$tablename."_pin= 'Pin' ";
// $Query=wewebQueryDB($coreLanguageSQL, $sql);

// print_pre($_REQUEST);
// die;

if($statusname=="Yes"){
$inputstatusname="No";
}else if($statusname=="No"){
$inputstatusname="Yes";
}


     	$sql = "UPDATE ".$tablename." SET "
		.$tablename."_statuspin= '$inputstatusname'  WHERE ".$tablename."_id='". $statusid."'";
		$Query=wewebQueryDB($coreLanguageSQL, $sql);
		// if($tablename==$mod_tb_root_group){
		//
		// 	$updateSch="";
		// 	$updateSch[]=$core_tb_search."_status  	='$inputstatusname'";
		// 	$sqlUpdateSch="UPDATE ".$core_tb_search." SET ".implode(",",$updateSch)." WHERE ".$core_tb_search."_contantid='".$statusid."'  AND  ".$core_tb_search."_masterkey 	='".$valMasterkey."'";
		// 	$querylUpdateSch=wewebQueryDB($coreLanguageSQL,$sqlUpdateSch);
		// }

	?>
	<? if($inputstatusname=="Yes"){?>
    <a href="javascript:void(0)"  onclick="changeStatus('<?=$loaddder?>','<?=$tablename?>','<?=$inputstatusname?>','<?=$statusid?>','<?=$loadderstatus?>','<?=$filestatus?>')" ><span class="fontContantTbEnable"><?=$inputstatusname?></span></a>
                <? }else{?>
    <a href="javascript:void(0)"  onclick="changeStatus('<?=$loaddder?>','<?=$tablename?>','<?=$inputstatusname?>','<?=$statusid?>','<?=$loadderstatus?>','<?=$filestatus?>')" ><span class="fontContantTbDisable"><?=$inputstatusname?></span></a>


                <? }?>

                <img src="../img/loader/ajax-loaderstatus.gif" alt="waiting"  style="display:none;"  id="<?=$loaddder?>" />
                <?
//include("../lib/incRss.php");

				?>
