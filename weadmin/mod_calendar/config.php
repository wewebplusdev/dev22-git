<?php

## Mod Table ###################################
$mod_tb_root = "md_cas";
$mod_tb_date = "md_cae";
$mod_tb_root_group = "md_cag";
$mod_tb_file = "md_caf";
$mod_tb_fileTemp = "md_catp";
$mod_tb_root_album = "md_caa";
$mod_tb_root_albumTemp = "md_caatp";

$mod_tb_tag = "md_tag";
$masterkey_tag = "tag";
## Mod Folder ###################################
$mod_fd_root = "mod_calendar";

## Mod Link ###################################
$urlSegment = array(
  'cl' => 'calendar',
);

## Size Photo ###################################
$sizeWidthMap = "480";
$sizeHeightMap = "415";

$sizeWidthPic = "480";
$sizeHeightPic = "415";

$sizeWidthPicApp = "480";
$sizeHeightPicApp = "415";

$sizeWidthOff = "50";
$sizeHeightOff = "50";

$sizeWidthAlbum = "700";
$sizeHeightAlbum = "463";

$sizeWidthAlbumOff = "50";
$sizeHeightAlbumOff = "50";

## URL Search ###################################
$mod_url_search_th = "th/|page|/detail";
$mod_url_search_en = "en/|page|/detail";
$mod_url_search_cn = "cn/|page|/detail";

## Setting Value ###################################
$modTxtSalary = array("", "ทั้งวัน", "ช่วงเวลา");
$modTxtStatusSnEnShow = array("", "Registration pending", "Registration confirmed", "Registration cancelled");
$modTxtStatusSnEn = array("", "Waiting for confirmation", "Confirm your registration", "Cancel your registration");

$modTxtStatusSn = array("", "รอยีนยันการลงทะเบียน", "ยืนยันการลงทะเบียนแล้ว", "ยกเลิกการลงทะเบียน");
$modTxtFood = array("", "General / อาหารทั่วไป", "Halal Food / อาหารอิสลาม");
$modTxtHotel = array("", "Yes / ประสงค์เข้าพัก", "No / ไม่ประสงค์เข้าพัก");
$modTxtRoomType = array("", "Single / ห้องเดี่ยว (ผู้เข้าร่วมอบรม-สัมมนาต้องชำระค่าห้องพักในส่วนที่เกิน)", "Double / ห้องคู่");
$modTxtLive = array("", "ผู้จัดอบรม-สัมมนาเป็นผู้จัด", "พักคู่กับ โปรดระบุ");
## Mod Path ###################################

$mod_path_html = $core_pathname_upload . "/" . $masterkey . "/html";
$mod_path_html_fornt = $core_pathname_upload_fornt . "/" . $masterkey . "/html";

$mod_path_file = $core_pathname_upload . "/" . $masterkey . "/file";
$mod_path_file_fornt = $core_pathname_upload_fornt . "/" . $masterkey . "/file";

$mod_path_pictures = $core_pathname_upload . "/" . $masterkey . "/pictures";
$mod_path_pictures_fornt = $core_pathname_upload_fornt . "/" . $masterkey . "/pictures";

$mod_path_office = $core_pathname_upload . "/" . $masterkey . "/office";
$mod_path_office_fornt = $core_pathname_upload_fornt . "/" . $masterkey . "/office";

$mod_path_real = $core_pathname_upload . "/" . $masterkey . "/real";
$mod_path_real_fornt = $core_pathname_upload_fornt . "/" . $masterkey . "/real";

$mod_path_album = $core_pathname_upload . "/" . $masterkey . "/album";
$mod_path_album_fornt = $core_pathname_upload_fornt . "/" . $masterkey . "/album";

$mod_path_vdo = $core_pathname_upload . "/" . $masterkey . "/vdo";
$mod_path_vdo_fornt = $core_pathname_upload_fornt . "/" . $masterkey . "/vdo";

$mod_path_resume = $core_pathname_upload . "/" . $masterkey . "/resume";
$mod_path_resume_fornt = $core_pathname_upload_fornt . "/" . $masterkey . "/resume";
?>
