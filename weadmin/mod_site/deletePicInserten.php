<?php
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("incModLang.php");
include("config.php");

		
	if(file_exists($mod_path_pictures."/".$_REQUEST['picnameen'])) {
		@unlink($mod_path_pictures."/".$_REQUEST['picnameen']);
	}	
		
	if(file_exists($mod_path_office."/".$_REQUEST['picnameen'])) {
		@unlink($mod_path_office."/".$_REQUEST['picnameen']);
	}	

	if(file_exists($mod_path_real."/".$_REQUEST['picnameen'])) {
		@unlink($mod_path_real."/".$_REQUEST['picnameen']);
	}

	$update = array();
	$update[]=$mod_tb_set."_addresspicen  	=''";
	$sql="UPDATE ".$mod_tb_set." SET ".implode(",",$update)." WHERE ".$mod_tb_set."_id='".$_REQUEST["valEditID"]."'  ";
	$Query=wewebQueryDB($coreLanguageSQL,$sql);
			
include("../lib/disconnect.php");
?>