<?php
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/classpic.php");
include("../lib/connect.php");
include("../lib/function.php");
include("incModLang.php");
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Uuload File</title>
</head>
<body>
<?phpphp
	$error = "";
	$msg = "";
	$fileElementName = 'inputAlbumUpload';
	if(!empty($_FILES['inputAlbumUpload']['error'])){
		switch($_FILES['inputAlbumUpload']['error']){

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
	}elseif($_FILES['inputAlbumUpload']['tmp_name'] == 'none'){
		$error = 'No file was uploaded..';
	}else{
			


			if(!is_dir($core_pathname_upload."/".$_REQUEST['masterkey'])) { mkdir($core_pathname_upload."/".$_REQUEST['masterkey'],0777); }
			if(!is_dir($mod_path_album)) { mkdir($mod_path_album,0777); }  
			
			
			$inputGallery=$_FILES['inputAlbumUpload']['tmp_name'];
			$arrfile=$_FILES['inputAlbumUpload'];
			$ERROR=$_FILES['inputAlbumUpload']['error'];
			$TIME=time();
			if(!$ERROR) {
			$myNewRand = rand(119,999);
			$filename = "pic-".$_REQUEST['myID']."-".$_REQUEST['langt']."-".$myNewRand."";

			$p=new pic();
			$p->addpic($arrfile);
			$p->chktypepic(); 
			$ext=$p->ret(); 
			$picname=$filename.".".$ext;
			
			##  Real ################################################################################
			if(copy($inputGallery,$mod_path_album."/".$picname)){
				@chmod($mod_path_album."/".$picname,0777);
			}
			
			$imgReal = $mod_path_album."/".$picname; // File image location
			
			
			##  Pictures ################################################################################
			$arrImgInfo=getimagesize($imgReal);
			if($arrImgInfo[0]<=($sizeWidthPic+10)){
			
				if(copy($inputGallery,$mod_path_album."/reB_".$picname)){
					@chmod($mod_path_real."/reB_".$picname,0777);
				}
			
			}else{
				$newfilename = $mod_path_album."/reB_".$picname; // New file name for thumb
				$w = $sizeWidthAlbum;
				$h = $sizeHeightAlbum;
				$thumbnail = resize($imgReal, $w, $h, $newfilename);
			}
			

			##  Offilce ################################################################################
			$newfilename = $mod_path_album."/reO_".$picname; // New file name for thumb
			$w = $sizeWidthAlbumOff;
			$h = $sizeHeightAlbumOff;
			$thumbnail = resize($imgReal, $w, $h, $newfilename);

		$insert = array();
		$insert[$mod_tb_root_album."_contantid"] = "'".$_REQUEST['myID']."'";
		$insert[$mod_tb_root_album."_filename"] = "'".$picname."'";
		$insert[$mod_tb_root_album."_language"]="'".$_REQUEST['langt']."'";
		
		$sql="INSERT INTO ".$mod_tb_root_album."(".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";
		$Query=wewebQueryDB($coreLanguageSQL,$sql);	
		
		}
		
			$sql_filetemp="SELECT  ".$mod_tb_root_album."_id,".$mod_tb_root_album."_filename,".$mod_tb_root_album."_name,".$mod_tb_root_album."_download  FROM ".$mod_tb_root_album." WHERE ".$mod_tb_root_album."_contantid 	='".$_REQUEST['myID']."'    ORDER BY ".$mod_tb_root_album."_id ASC";
			$query_filetemp=wewebQueryDB($coreLanguageSQL,$sql_filetemp);
		 	$number_filetemp=wewebNumRowsDB($coreLanguageSQL,$query_filetemp);
			if($number_filetemp>=1){
			while($row_filetemp=wewebFetchArrayDB($coreLanguageSQL,$query_filetemp)){
			$linkRelativePath = $mod_path_album."/".$row_filetemp[1];
			$downloadFile = $row_filetemp[1];
			$downloadID = $row_filetemp[0];
			$downloadName = $row_filetemp[2];
			$countDownload= $row_filetemp[3];
			$imageType = strstr($downloadFile,'.');														

				$msg .= "<img src=\"".$mod_path_album."/reO_".$downloadFile."\"  width=\"50\" height=\"50\"   style=\"float:left;border:#c8c7cc solid 1px;margin-top:15px;\"  />";
				$msg .= "<div style=\"width:15px; height:15px;float:left;z-index:1; margin-left:-15px;cursor:pointer;margin-right:15px;margin-top:15px;\" onclick=\"document.myForm.valDelAlbum.value=".$downloadID.";delAlbumUpload(\'deleteAlbum.php\')\"  title=\"Delete file\" ><img src=\"../img/btn/delete.png\" width=\"15\" height=\"15\"  border=\"0\"/></div>";
			}}
	}		
	echo "{";
	
	echo				"error: '" . $error . "',\n";
	echo				"msg: '" . $msg . "'\n";
	echo "}";
include("../lib/disconnect.php");
?>
</body>
</html>