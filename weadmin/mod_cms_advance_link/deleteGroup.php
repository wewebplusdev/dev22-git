<?
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("config.php");

for($i=1;$i<=$_REQUEST['TotalCheckBoxID'];$i++) {
 $myVar=$_REQUEST['CheckBoxID'.$i];


	if(strlen($myVar)>=1) {
	$permissionID=$myVar;
		
		// $sql = "SELECT  ".$mod_tb_root_group."_pic FROM ".$mod_tb_root_group." WHERE  ".$mod_tb_root_group."_id='".$permissionID."' ";
		// 	$Query=wewebQueryDB($coreLanguageSQL, $sql);
		// 	$Row=wewebFetchArrayDB($coreLanguageSQL, $Query);
			//$deletepichtml=$Row[0];
			//$deletepic=$Row[0];
			// if(file_exists($mod_path_html."/".$deletepichtml)) {
			// 	@unlink($mod_path_html."/".$deletepichtml);
			// // }
			// 	if(file_exists($mod_path_pictures."/".$deletepic)) {
			// 	@unlink($mod_path_pictures."/".$deletepic);
			// }
			
			// if(file_exists($mod_path_office."/".$deletepic)) {
			// 	@unlink($mod_path_office."/".$deletepic);
			// }
			
			// if(file_exists($mod_path_real."/".$deletepic)) {
			// 	@unlink($mod_path_real."/".$deletepic);
			// }


			$sql="DELETE FROM ".$mod_tb_root_group." WHERE ".$mod_tb_root_group."_id=".$permissionID." ";
			$Query=wewebQueryDB($coreLanguageSQL, $sql);
		
		}

	}
		 logs_access('3','Delete Group');
	?>
<? include("../lib/disconnect.php");?>
<form action="group.php" method="post" name="myFormAction" id="myFormAction">
    <input name="masterkey" type="hidden" id="masterkey" value="<?=$_REQUEST['masterkey']?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?=$_REQUEST['menukeyid']?>" />
    <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?=$_REQUEST['module_pageshow']?>" />
    <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?=$_REQUEST['module_pagesize']?>" />
    <input name="module_orderby" type="hidden" id="module_orderby" value="<?=$_REQUEST['module_orderby']?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?=$_REQUEST['inputSearch']?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?=$_REQUEST['inputGh']?>" />
</form>            
<script language="JavaScript" type="text/javascript"> document.myFormAction.submit(); </script>
