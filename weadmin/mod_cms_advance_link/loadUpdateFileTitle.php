<?
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("incModLang.php");
include("config.php");
?>

<?php
$datetime = date('Y-m-d H:i:s');
	
$error = "";
$msg = "";
$type = "";
	
	$fileElementName = 'inputFileUploadTitle';
	if(!empty($_FILES['inputFileUploadTitle']['error'])){
		switch($_FILES['inputFileUploadTitle']['error']){

			case '1':
				$error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
				break;
			case '2':
				$error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
				break;
			case '3':
				$error = 'The uploaded file was only partially uploaded';
				break;
			case '4':
				$error = 'No file was uploaded.';
				break;

			case '6':
				$error = 'Missing a temporary folder';
				break;
			case '7':
				$error = 'Failed to write file to disk';
				break;
			case '8':
				$error = 'File upload stopped by extension';
				break;
			case '999':
			default:
				$error = 'No error code avaiable';
		}
	}elseif($_FILES['inputFileUploadTitle']['tmp_name'] == 'none'){
		$error = 'No file was uploaded..';
	}else{
			if(!is_dir($core_pathname_upload."/".$_REQUEST['masterkey'])) { mkdir($core_pathname_upload."/".$_REQUEST['masterkey'],0777); }
			if(!is_dir($mod_path_file)) { mkdir($mod_path_file,0777); }
			$inputFileToUpload=$_FILES['inputFileUploadTitle']['tmp_name'];
			$inputFileToName=$_FILES['inputFileUploadTitle']['name'];
			$fileType=explode(".",$inputFileToName);
			$countBtType = count($fileType)-1;
			$fileNameNew=$fileType[0];
			$fileTypeName=$fileType[$countBtType];
		
			$myNewRand=randomNameUpdate(2);
			$filenamedoc = "file-"."$myNewRand.$fileTypeName";

			if(copy($inputFileToUpload,$mod_path_file."/".$filenamedoc)){
				@chmod($mod_path_file."/".$filenamedoc,0777);
			}

			
			
		$nameToinput= $fileNameNew;

		$sql = "SELECT MAX(" . $mod_tb_file . "_order) FROM " . $mod_tb_file;
        $Query = wewebQueryDB($coreLanguageSQL, $sql);
        $Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
        $maxOrder = $Row[0] + 1;
	
		
		$insert= array();
		$insert[$mod_tb_file."_contantid"] = "'".$_REQUEST['myID']."'";
		if ($_REQUEST['valueTypeSub'] != 'url') {
			$insert[$mod_tb_file."_filename"] = "'".$filenamedoc."'";
		}else{
			$insert[$mod_tb_file."_filename"] = "''";
		}
		$insert[$mod_tb_file."_code"]="'".$_REQUEST['valueCode']."'";
		$insert[$mod_tb_file."_name"]="'".$_REQUEST['valueName']."'";
		$insert[$mod_tb_file."_language"]="'".$_REQUEST['langt']."'";
		$insert[$mod_tb_file."_type"]="'".$_REQUEST['valueType']."'";

		$insert[$mod_tb_file."_url"]="'".$_REQUEST['valueUrl']."'";		
		
		$insert[$mod_tb_file."_title"]="'".$_REQUEST['valueTitle']."'";
		$insert[$mod_tb_file."_file"]="'".$_REQUEST['valueTypeSub']."'";
		$insert[$mod_tb_file."_order"]="'".$maxOrder."'";
		
		$sql="INSERT INTO ".$mod_tb_file."(".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";
		$Query=wewebQueryDB($coreLanguageSQL, $sql);
		
		
		 $sql="SELECT
		 ".$mod_tb_file."_id,
		 ".$mod_tb_file."_filename,
		 ".$mod_tb_file."_name,
		 ".$mod_tb_file."_download,
		 ".$mod_tb_file."_title, 
		".$mod_tb_file."_url,
		".$mod_tb_file."_code
		 FROM ".$mod_tb_file."
		 WHERE ".$mod_tb_file."_contantid 	='".$_REQUEST['myID']."'
		 AND ".$mod_tb_file."_language ='".$_REQUEST['langt']."'  
		 AND ".$mod_tb_file."_type ='".$_REQUEST['valueType']."'
		AND ".$mod_tb_file."_file ='".$_REQUEST['valueTypeSub']."'  
		 ORDER BY ".$mod_tb_file."_order DESC";
		
			$query_file=wewebQueryDB($coreLanguageSQL, $sql);
			$number_row=wewebNumRowsDB($coreLanguageSQL, $query_file);

			if($number_row>=1){
			while($row_file=wewebFetchArrayDB($coreLanguageSQL,$query_file)){
			
			$linkRelativePath = $mod_path_file."/".$row_file[1];
			$downloadFile = $row_file[1];
			$downloadID = $row_file[0];
			$downloadName = $row_file[2];
			$countDownload= $row_file[3];
			$valTitle= $row_file[4];
			$valUrl=$row_file[5];
			$valCode=$row_file[6];

			$imageType = strstr($downloadFile,'.');
			if ($_REQUEST['valueTypeSub'] != 'url') {
			$msg .= "• <span>$valCode</span>-<span>$valTitle</span> <a href=\"javascript:void(0)\"  onclick=\" document.myForm.valDelFile.value=".$downloadID.";delFileUploadTitle(\'deleteFileTitle.php\')\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>".$downloadName."".$imageType." | ".$langMod["file:type"].":".$imageType."  | ".$langMod["file:size"].": ".get_IconSize($linkRelativePath).
			 " <br/>";
		 	$msg .= "<input name=\"inputFileName\" type=\"hidden\" id=\"inputFileName\" value=\"$downloadName\" /> ";
		}else{
			
			$msg .= "• <span>$valCode</span>-<span>$valTitle</span> <a href=\"javascript:void(0)\"  onclick=\" document.myForm.valDelFile.value=".$downloadID.";delFileUploadLinkTitle(\'deleteFileTitle.php\')\" ><img src=\"../img/btn/delete.png\" align=\"absmiddle\" title=\"Delete file\"  hspace=\"10\"  vspace=\"10\"   border=\"0\" /></a>".$valUrl.
			 " <br/>";
		 	$msg .= "<input name=\"inputFileName\" type=\"hidden\" id=\"inputFileName\" value=\"$downloadName\" /> ";

			}
			 
			}
		}

	}
echo "{";

	echo				"error: '" . $error . "',\n";
	echo				"msg: '" . $msg . "',\n";
	echo				"type: '" . $type . "'\n";
	echo "}";

include("../lib/disconnect.php");
?>

