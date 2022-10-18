<?php
$pathupload_front = $path_upload . "/" . $config['about']['ab_js']['masterkey']; 

/* Start Upload Pic */
if ($_FILES['uploadProfile']['size'] > 0) {
  $temporary = explode(".", $_FILES['uploadProfile']["name"]);
  $file_extension = end($temporary);
    
  // mkdir
  if (!is_dir($pathupload_front)) {
    mkdir($pathupload_front, 0777);
  }
  if (!is_dir($pathupload_front . "/real")) {
    mkdir($pathupload_front . "/real", 0777);
  }
  if (!is_dir($pathupload_front . "/pictures")) {
    mkdir($pathupload_front . "/pictures", 0777);
  }
  if (!is_dir($pathupload_front . "/office")) {
    mkdir($pathupload_front . "/office", 0777);
  }
  
  $inputGallery = $_FILES['uploadProfile']['tmp_name'];
  $myNewRand = $ContentID . "-" . date("dhis");
  $filename = "profile-career" . $myNewRand . "";
  $picname = $filename . "." . $file_extension;
  
  ##  Real ################################################################################
  $imgReal = $pathupload_front . "/real/" . $picname;
  if (copy($inputGallery, $pathupload_front . "/real/" . $picname)) {
    @chmod($imgReal, 0777);
  }
  
  ##  Pictures ################################################################################
  $arrImgInfo = getimagesize($imgReal);
  $newfilename = $pathupload_front . "/pictures/" . $picname; // New file name for thumb
  $w = 220;
  $h = 220;
  $thumbnail = resize($imgReal, $w, $h, $newfilename);
  
  ##  Offilce ################################################################################
  $newfilename = $pathupload_front . "/office/" . $picname; // New file name for thumb
  $w = 50;
  $h = 50;
  $thumbnail = resize($imgReal, $w, $h, $newfilename);
  
  $update = array();
  $update[] = $config['career']['join']['main'] . "_pic='" . $picname . "'";
  $sql = "UPDATE " . $config['career']['join']['main'] . " SET " . implode(",", $update) . " WHERE " . $config['career']['join']['main'] . "_id='" . $ContentID . "' ";
  $db->execute($sql);
} 
/* End Upload Pic */ 

/* Start Upload File Transcript*/
$Transcript = fileTranfer($_FILES['fileTranscript'], $ContentID, 'file-1');
/* End Upload File Transcript*/ 

/* Start Upload File Military*/
$Transcript = fileTranfer($_FILES['fileMilitary'], $ContentID, 'file-2');
/* End Upload File Military*/ 

/* Start Upload File work*/
$Transcript = fileTranfer($_FILES['workexperience'], $ContentID, 'file-3');
/* End Upload File work*/ 

/* Start Upload File Marriage*/
$Transcript = fileTranfer($_FILES['marriage'], $ContentID, 'file-4');
/* End Upload File Marriage*/ 

/* Start Upload File License*/
$Transcript = fileTranfer($_FILES['license'], $ContentID, 'file-5');
/* End Upload File License*/ 

/* Start Upload File Other*/
$Transcript = fileTranfer($_FILES['other'], $ContentID, 'file-6');
/* End Upload File Other*/ 

function fileTranfer($temfile = array(), $ContentID, $keytype = 0){
  global $db, $pathupload_front, $config, $url;

  if (empty($temfile['size'])) {
    return false;
  }

  // mkdir
  if (!is_dir($pathupload_front)) {
    mkdir($pathupload_front, 0777);
  }
  if (!is_dir($pathupload_front . "/file")) {
    mkdir($pathupload_front . "/file", 0777);
  }

  $temporary = explode(".", $temfile["name"]);
  $file_extension = end($temporary);

  $inputFile = $temfile['tmp_name'];
  $myNewRand = time() . rand(111, 999);
  $filename = $temporary[0] . "-" . $myNewRand . "";
  $file = $filename . "." . $file_extension;

  ##  Real ################################################################################
  $FileReal = $pathupload_front . "/file/" . $file;

  if (copy($inputFile, $pathupload_front . "/file/" . $file)) {
    @chmod($FileReal, 0777);
  }

  $insert=array();
  $insert[$config['career']['file']['main']."_contantid"] = "'".$ContentID."'";
  $insert[$config['career']['file']['main']."_filename"] = "'".$file."'";
  $insert[$config['career']['file']['main']."_name"]="'".$temporary[0]."'";
  $insert[$config['career']['file']['main']."_language"]="'".$url->pagelang[4]."'";
  $insert[$config['career']['file']['main']."_key"]="'".$keytype."'";
  $insert[$config['career']['file']['main']."_masterkey"]="'".$config['about']['ab_js']['masterkey']."'";
  $insert[$config['career']['file']['main']."_credate"]="NOW()";

  $sql="INSERT INTO ".$config['career']['file']['main']."(".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";
  $db->execute($sql);

}