<?
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("incModLang.php");
include("config.php");

	$sql_fileNew="SELECT ".$mod_tb_file."_filename  FROM ".$mod_tb_file." WHERE ".$mod_tb_file."_id 	='".$_REQUEST['valDelFile']."' ";
	$query_fileNew=wewebQueryDB($coreLanguageSQL,$sql_fileNew);
	$row_fileNew=wewebFetchArrayDB($coreLanguageSQL,$query_fileNew);
	$downloadFile=$row_fileNew[0];
	if(file_exists($mod_path_file."/".$downloadFile)) {
		@unlink($mod_path_file."/".$downloadFile);
	}	
		
	$sql="DELETE FROM ".$mod_tb_file." WHERE   ".$mod_tb_file."_id='".$_REQUEST['valDelFile']."' ";
	$Query=wewebQueryDB($coreLanguageSQL,$sql);
	$sqlSelect = "".$mod_tb_file."_id,".$mod_tb_file."_filename,".$mod_tb_file."_name,".$mod_tb_file."_download,".$mod_tb_file."_title";


		// $sql="SELECT ".$sqlSelect."  FROM ".$mod_tb_file." WHERE ".$mod_tb_file."_contantid 	='".$_REQUEST['valEditID']."' AND " . $mod_tb_file . "_type='1'  ORDER BY ".$mod_tb_file."_id ASC ".$valLimitMysql."";
			
		$sql = "SELECT " . $mod_tb_file . "_id," . $mod_tb_file . "_filename," . $mod_tb_file . "_name," . $mod_tb_file . "_title," . $mod_tb_file . "_url FROM " . $mod_tb_file . "
                        WHERE  " . $mod_tb_file . "_language  ='" . $_SESSION[$valSiteManage . 'core_session_language'] . "' 
                        AND " . $mod_tb_file . "_file='".$_REQUEST['inputType_sub']."'
						AND " . $mod_tb_file . "_contantid='" . $_POST["valEditID"] . "' ";
						$sql .= " ORDER BY ".$mod_tb_file."_order DESC";
							
		$query_file=wewebQueryDB($coreLanguageSQL,$sql);
			$number_row=wewebNumRowsDB($coreLanguageSQL,$query_file);
			//print_pre($sql);
			if($number_row>=1){
				$txtFile="";
					while($row_file=wewebFetchArrayDB($coreLanguageSQL,$query_file)){
					$linkRelativePath = $mod_path_file."/".$row_file[1];
					$downloadFile = $row_file[1];
					$downloadID = $row_file[0];
					$downloadName = $row_file[2];
					$valTitle= $row_file[3];
					$valUrl= $row_file[4];
					$imageType = strstr($downloadFile,'.');	
					
					
					if ($_REQUEST['inputType_sub'] == 'file') {
						if ($downloadName != "") {
							$txtFileTitle .= "• <span>$valTitle</span> <a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUploadTitle('deleteFileTitle.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $downloadName . "" . $imageType . " | " . $langMod["file:type"] . ": " . $imageType . "  | " . $langMod["file:size"] . ": " . get_IconSize($linkRelativePath) . "<br/>";
						} else {
							$txtFileTitle .= "• <span>$valTitle</span> <a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUploadTitle('deleteFileTitle.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $downloadFile . " | " . $langMod["file:type"] . ": " . $imageType . "  | " . $langMod["file:size"] . ": " . get_IconSize($linkRelativePath) . "<br/>";
						}
					}else{
						if ($downloadName != "") {

							$txtFileTitle .= "• <span>$valTitle</span> <a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUploadLinkTitle('deleteFileTitle.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $valUrl . "<br/>";
						} else {

							$txtFileTitle .= "• <span>$valTitle</span> <a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=" . $downloadID . ";delFileUploadLinkTitle('deleteFileTitle.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>" . $valUrl . "<br/>";
						}
					}																			
									 
				}
			}
			echo $txtFileTitle;
include("../lib/disconnect.php");
			
?>