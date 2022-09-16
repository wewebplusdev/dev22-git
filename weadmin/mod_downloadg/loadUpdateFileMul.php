<?php
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/classpic.php");
include("../lib/connect.php");
include("../lib/function.php");
include("incModLang.php");
include("config.php");

			if(!is_dir($core_pathname_upload."/".$_REQUEST['masterkey'])) { mkdir($core_pathname_upload."/".$_REQUEST['masterkey'],0777); }
			if(!is_dir($mod_path_file)) { mkdir($mod_path_file,0777); }


			$inputFileToUpload=$_FILES['myfile']['tmp_name'];
			$inputFileToName=$_FILES['myfile']['name'];
			$fileType=explode(".",$inputFileToName);
			$countBtType = count($fileType)-1;
			$fileNameNew=$fileType[0];
			$fileTypeName=$fileType[$countBtType];
			$myNewRand = rand(119,999);
			$filenamedoc = "file-".$_REQUEST['myID']."-".$_REQUEST['langt']."-".$myNewRand.".$fileTypeName";


			##  Real ################################################################################
			if(copy($inputFileToUpload,$mod_path_file."/".$filenamedoc)){
				@chmod($mod_path_file."/".$filenamedoc,0777);
			}

			$imgReal = $mod_path_file."/".$filenamedoc; // File image location


			$fileNameLast=explode(".".$fileTypeName,$inputFileToName);
			if($_REQUEST['nametodoc']==""){
			// $nameToinput= $fileNameNew;
			$nameToinput= $fileNameLast[0];
			}else{
			$nameToinput=$_REQUEST['nametodoc'];
			}



		// $insert = array();
		// $insert[$mod_tb_root_album."_contantid"] = "'".$_REQUEST['myID']."'";
		// $insert[$mod_tb_root_album."_filename"] = "'".$picname."'";
		// $insert[$mod_tb_root_album."_language"]="'".$_REQUEST['langt']."'";
    //
		// $sql="INSERT INTO ".$mod_tb_root_album."(".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";
		// $Query=wewebQueryDB($coreLanguageSQL,$sql);

		$insert = array();
		$insert[$mod_tb_file."_contantid"] = "'".$_REQUEST['myID']."'";
		$insert[$mod_tb_file."_filename"] = "'".$filenamedoc."'";
		$insert[$mod_tb_file."_name"]="'".$nameToinput."'";
		$insert[$mod_tb_file."_language"]="'".$_REQUEST['langt']."'";

		$sql="INSERT INTO ".$mod_tb_file."(".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";
		$Query=wewebQueryDB($coreLanguageSQL,$sql);

		// }

  echo json_encode($ret);

include("../lib/disconnect.php");
?>
