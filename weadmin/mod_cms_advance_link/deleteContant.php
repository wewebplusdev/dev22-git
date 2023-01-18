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
		
			$sql = "SELECT  ".$mod_tb_root."_file,".$mod_tb_root."_pic FROM ".$mod_tb_root." WHERE  ".$mod_tb_root."_id='".$permissionID."' ";
			$Query=wewebQueryDB($coreLanguageSQL, $sql);
			$Row=wewebFetchArrayDB($coreLanguageSQL, $Query);
			$deletefile=$Row[0];
			$deletepic=$Row[1];
			
			######################### Delete  In Folder HTML ###############################
			if(file_exists($mod_path_file."/".$deletefile)) {
				@unlink($mod_path_file."/".$deletefile);
			}
			if(file_exists($mod_path_office."/".$deletepic)) {
				@unlink($mod_path_office."/".$deletepic);
			}
			if(file_exists($mod_path_real."/".$deletepic)) {
				@unlink($mod_path_real."/".$deletepic);
			}
			if(file_exists($mod_path_pictures."/".$deletepic)) {
				@unlink($mod_path_pictures."/".$deletepic);
			}

			$sql_file="SELECT ".$mod_tb_file."_id, ".$mod_tb_file."_filename
			FROM ".$mod_tb_file." WHERE ".$mod_tb_file."_contantid  ='".$permissionID."'  
			 ORDER BY ".$mod_tb_file."_id ASC";
			// print_pre($sql_file);
			$query_filetemp=wewebQueryDB($coreLanguageSQL,$sql_file);
			$number_filetemp=wewebNumRowsDB($coreLanguageSQL, $query_filetemp);
			while($row_filetemp=wewebFetchArrayDB($coreLanguageSQL,$query_filetemp)){
			$downloadID = $row_filetemp[0];
			$downloadFile = $row_filetemp[1];
			
			if(file_exists($mod_path_file."/".$downloadFile)) {
				@unlink($mod_path_file."/".$downloadFile);
			}
			$sql_delete = "DELETE FROM  " . $mod_tb_file . " WHERE ".$mod_tb_file."_id='".$downloadID."' ";
			$query_del = wewebQueryDB($coreLanguageSQL,$sql_delete);
			//print_pre($sql_delete);
}
			

			
			######################### Delete  Contant ###############################
			$sql="DELETE FROM ".$mod_tb_root." WHERE ".$mod_tb_root."_id=".$permissionID." ";
			$Query=wewebQueryDB($coreLanguageSQL, $sql);
			
			## URL Search ###################################
			$sqlSch="DELETE FROM ".$core_tb_search." WHERE   ".$core_tb_search."_contantid='".$permissionID."'  AND ".$core_tb_search."_masterkey='".$_POST["masterkey"]."'  ";
			$querySch=wewebQueryDB($coreLanguageSQL,$sqlSch);
		
		}}
		 logs_access('3','Delete');
	include("../lib/incRss.php");
	?>
<? include("../lib/disconnect.php");?>
<form action="index.php" method="post" name="myFormAction" id="myFormAction">
    <input name="masterkey" type="hidden" id="masterkey" value="<?=$_REQUEST['masterkey']?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?=$_REQUEST['menukeyid']?>" />
    <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?=$_REQUEST['module_pageshow']?>" />
    <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?=$_REQUEST['module_pagesize']?>" />
    <input name="module_orderby" type="hidden" id="module_orderby" value="<?=$_REQUEST['module_orderby']?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?=$_REQUEST['inputSearch']?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?=$_REQUEST['inputGh']?>" />
</form>            
<script language="JavaScript" type="text/javascript"> document.myFormAction.submit(); </script>
