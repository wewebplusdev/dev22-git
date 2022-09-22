<?php
if (!empty($_REQUEST['type'])) {
$p_real = "/real/";
$p_pic = "/pictures/";
$p_office = "/office/";
  if ($_REQUEST['type'] == "add") {
    $pathUploadPicAvatar = $path_upload . "/" . $_REQUEST['masterkey']; # ส่ง masterkey มาด้วย
    if (!empty($_REQUEST['picProfile'])) { # ลบรูปโปรไฟล์ก่อนหน้า
      unlink($pathUploadPicAvatar . $p_real . $_REQUEST['picProfile']);
      unlink($pathUploadPicAvatar . $p_pic . $_REQUEST['picProfile']);
      unlink($pathUploadPicAvatar . $p_office . $_REQUEST['picProfile']);
    }

    if (!empty($_REQUEST['masterkey'])) {

      $idProfile = $_REQUEST['contentid']; # id profile
      if (!empty($_FILES)) {
        $temporary = explode(".", $_FILES['uploadProfile']["name"]);
        $file_extension = end($temporary);
        $filelimit = $validsizefile * 1024;

        if (in_array($file_extension, $validextensions)) {
          if ($_FILES['uploadProfile']['size'] < $filelimit) {
            if ($_FILES["file"]["error"] > 0) {
              $_FILES['uploadProfile']['name'];
              $_FILES['uploadProfile']['error'];
            } else {


              if (!is_dir($pathUploadPicAvatar)) {
                mkdir($pathUploadPicAvatar, 0777);
              }
              if (!is_dir($pathUploadPicAvatar . "/real")) {
                mkdir($pathUploadPicAvatar . "/real", 0777);
              }
              if (!is_dir($pathUploadPicAvatar . "/pictures")) {
                mkdir($pathUploadPicAvatar . "/pictures", 0777);
              }
              if (!is_dir($pathUploadPicAvatar . "/office")) {
                mkdir($pathUploadPicAvatar . "/office", 0777);
              }


              if (file_exists($pathUploadPicAvatar . $p_office . $_REQUEST['delpicname'])) {
                @unlink($pathUploadPicAvatar . $p_office . $_REQUEST['delpicname']);
              }

              if (file_exists($pathUploadPicAvatar . $p_real . $_REQUEST['delpicname'])) {
                @unlink($pathUploadPicAvatar . $p_real . $_REQUEST['delpicname']);
              }

              if (file_exists($pathUploadPicAvatar . $p_pic . $_REQUEST['delpicname'])) {
                @unlink($pathUploadPicAvatar . $p_pic . $_REQUEST['delpicname']);
              }

              $inputGallery = $_FILES['uploadProfile']['tmp_name'];
              $myNewRand = $idProfile . "-" . date("dhis");
              $filename = "profile-career" . $myNewRand . "";
              $picname = $filename . "." . $file_extension;
              

              ##  Real ################################################################################
              $imgReal = $pathUploadPicAvatar . $p_real . $picname;
              if (copy($inputGallery, $pathUploadPicAvatar . $p_real . $picname)) {
                @chmod($imgReal, 0777);
              }

              ##  Pictures ################################################################################
              $arrImgInfo = getimagesize($imgReal);
              $newfilename = $pathUploadPicAvatar . $p_pic . $picname; // New file name for thumb
              $w = 220;
              $h = 220;
              $thumbnail = resize($imgReal, $w, $h, $newfilename);
              ##  Offilce ################################################################################
              $newfilename = $pathUploadPicAvatar . $p_office . $picname; // New file name for thumb
              $w = 50;
              $h = 50;
              $thumbnail = resize($imgReal, $w, $h, $newfilename);


              ## update Avatar

              if (!empty($imgReal)) {
                $listreturn[$key]['real'] = _URL_FRONTEND . str_replace(_DIR, "", $imgReal);
                $listreturn[$key]['name'] = $picname;
                $listreturn[$key]['id'] = $idProfile;
              } else {
                $listreturn[$key]['real'] = "error";
              }
              echo json_encode($listreturn);
            }
          } else {
            $errorUpload = array();
            $errorUpload['status'] = "error";
            $errorUpload['text'] = "ขนาดไฟล์ของคุณใหญ่เกินที่กำหนด";
            echo json_encode($errorUpload);
          }
        }
      }else{
        $errorUpload = array();
        $errorUpload['status'] = "error";
        $errorUpload['text'] = "เกิดข้อผิดพลาด ไม่พบไฟล์อัพโหลด";
        echo json_encode($errorUpload);
      }
    }
  } else {
    $errorUpload = array();
    $errorUpload['status'] = "error";
    $errorUpload['text'] = "เกิดข้อผิดพลาด";
    echo json_encode($errorUpload);
  }
}else{
  $errorUpload = array();
  $errorUpload['status'] = "error";
  $errorUpload['text'] = "เกิดข้อผิดพลาด";
  echo json_encode($errorUpload);
}
