<?php
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/checkMember.php");
include("config.php");

		if(!is_dir($core_pathname_upload."/".$_REQUEST['masterkey'])) { mkdir($core_pathname_upload."/".$_REQUEST['masterkey'],0777); }
		if(!is_dir($mod_path_resume)) { mkdir($mod_path_resume,0777); }  
		
		$certificate_phpFile = 'loadResume.php';
		$certificate_phpPathnewfile = $mod_path_resume.'/doc_'.$_GET['valEditID'].'_'.$_GET['nID'].'.php';
		$certificate_phpNewfile='doc_'.$_GET['valEditID'].'_'.$_GET['nID'].'.php';
		if(!is_file($certificate_phpPathnewfile)){
			if (!copy($certificate_phpFile, $certificate_phpPathnewfile)) {
				echo "failed to copy $certificate_phpNewfile...\n";
				
			}
		}
		include($certificate_phpPathnewfile);
		@unlink($certificate_phpPathnewfile);
		
?>
