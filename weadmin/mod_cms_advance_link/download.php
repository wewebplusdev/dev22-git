<? 
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect-file.php");
include("../lib/function.php");
decodeURL($_SERVER["QUERY_STRING"]);
 $masterkey=$kID;
include("config.php");

	$sql="SELECT ".$mod_tb_file."_id,".$mod_tb_file."_filename, ".$mod_tb_file."_name  FROM ".$mod_tb_file." WHERE ".$mod_tb_file."_id 	='".$cID."'";
	$query_file=wewebQueryDB($coreLanguageSQL, $sql);
	$row_file=wewebFetchArrayDB($coreLanguageSQL,$query_file);
		$downloadID = $row_file[0];
		$linkRelativePath = $mod_path_file."/".$row_file[1];
		$downloadFile = $row_file[1];
		$downloadName=rechangeQuot($row_file[2]);						

		$linkPath = $linkRelativePath;
		$downloadNameFile =$downloadName;

	$filename = explode(".",$linkPath);
	$file_extension = $filename[count($filename)-1];

		header("Content-type: application/".$file_extension);
		header("Content-Disposition: attachment; filename=".txtReplaceDownload($downloadNameFile).".".$file_extension);
		header("Content-Length: ".get_IconSize($linkPath));
		echo readfile($linkPath);
		
?>
<? include("../lib/disconnect.php");?>