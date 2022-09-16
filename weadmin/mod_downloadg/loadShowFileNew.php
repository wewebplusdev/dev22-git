<?php
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/classpic.php");
include("../lib/connect.php");
include("../lib/function.php");
include("incModLang.php");
include("config.php");

			$sql_filetemp="SELECT  ".$mod_tb_fileTemp."_id,".$mod_tb_fileTemp."_filename,".$mod_tb_fileTemp."_name,".$mod_tb_fileTemp."_download  FROM ".$mod_tb_fileTemp." WHERE ".$mod_tb_fileTemp."_contantid 	='".$_REQUEST['valEditID']."'    ORDER BY ".$mod_tb_fileTemp."_id ASC";
			$query_filetemp=wewebQueryDB($coreLanguageSQL,$sql_filetemp);
		 	$number_filetemp=wewebNumRowsDB($coreLanguageSQL,$query_filetemp);
			if($number_filetemp>=1){
			$msg="";
			while($row_filetemp=wewebFetchArrayDB($coreLanguageSQL,$query_filetemp)){
			$linkRelativePath = $mod_path_file."/".$row_filetemp[1];
			$downloadFile = $row_filetemp[1];
			$downloadID = $row_filetemp[0];
			$downloadName = $row_filetemp[2];
			$countDownload= $row_filetemp[3];
			$imageType = strstr($downloadFile,'.');

				// $valAlbum .= "<img src=\"".$mod_path_file."/".$downloadFile."\"  width=\"50\" height=\"50\"   style=\"float:left;border:#c8c7cc solid 1px;margin-top:15px;\"  />";
				// $valAlbum .= "<div style=\"width:15px; height:15px;float:left;z-index:1; margin-left:-15px;cursor:pointer;margin-right:15px;margin-top:15px;\" onclick=\"document.myForm.valDelAlbum.value=".$downloadID.";delAlbumUpload('deleteAlbumInsert.php');\"  title=\"Delete file\" ><img src=\"../img/btn/delete.png\" width=\"15\" height=\"15\"  border=\"0\"/></div>";
				// $msg .= "<div style=\"width:15px; height:15px;float:left;z-index:1; margin-left:-15px;cursor:pointer;margin-right:15px;margin-top:5px;\" onclick=\"document.myForm.valDelFile.value=".$downloadID.";delFileUpload('deleteFileInsert.php');\"  title=\"Delete file\" ><img src=\"../img/btn/delete.png\" width=\"20\" height=\"20\" border=\"0\"/></div>";
				// $msg .= "".$downloadName."".$imageType." | ".$langMod["file:type"].": ".$imageType."  | ".$langMod["file:size"].": ".get_IconSize($linkRelativePath)." <br/>";
				$msg .= "<a href=\"javascript:void(0)\"  onclick=\"document.myForm.valDelFile.value=".$downloadID.";delFileUpload('deleteFileInsert.php');\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>".$downloadName."".$imageType." | ".$langMod["file:type"].": ".$imageType."  | ".$langMod["file:size"].": ".get_IconSize($linkRelativePath)."<br/>";

			}}
			echo $msg;


include("../lib/disconnect.php");
?>
