<?php
## Mod Table ###################################
$mod_tb_root = $core_tb_menu;
$mod_tb_root_type= "md_cmt";

## Mod Folder ###################################
$mod_fd_root = "mod_setting_menu";

## Mod Array Config ###################################
$mod_array_conf = array(
  'sort_t3' => array(
    'key' => '_t3',
    'order' => '_order_theme_3',
    'component' => array(
      "'ab_nm'",
    ),
  ),
  'sort_t2' => array(
    'key' => '_t2',
    'order' => '_order_theme_2',
  ),
  'sort_t1' => array(
    'key' => '_t1',
    'order' => '_order_theme_1',
  ),
);

## Setting Value ###################################
$modTxtTarget=array("","เปิดหน้าต่างเดิม","เปิดหน้าต่างใหม่");

## Size Pic ###################################
$sizeWidthReal="1920";
$sizeHeightReal="310";

$sizeWidthPic="800";
$sizeHeightPic="800";

$sizeWidthOff="50";
$sizeHeightOff="50";

## Mod Path ###################################

$mod_path_office        = $core_pathname_upload."/".$masterkey."/office";
$mod_path_office_fornt  = $core_pathname_upload_fornt."/".$masterkey."/office";

$mod_path_real        = $core_pathname_upload."/".$masterkey."/real";
$mod_path_real_fornt  = $core_pathname_upload_fornt."/".$masterkey."/real";

$mod_path_pictures        = $core_pathname_upload."/".$masterkey."/pictures";
$mod_path_pictures_fornt  = $core_pathname_upload_fornt."/".$masterkey."/pictures";

?>
