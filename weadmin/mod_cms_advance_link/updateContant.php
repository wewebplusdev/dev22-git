<?
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Contant</title>
</head>
<body>
<?
	if($execute=="update"){
		
		$update=array();
		if($_REQUEST['inputLt']=="Thai"){
		$update[]=$mod_tb_root."_subject='".changeQuot($_POST['inputSubject'])."'";
		$update[]=$mod_tb_root."_title='".changeQuot($_POST['inputDescription'])."'";
		
		}else if($_REQUEST['inputLt']=="Eng"){
		$update[]=$mod_tb_root."_subjecten='".changeQuot($_POST['inputSubject'])."'";
		$update[]=$mod_tb_root."_titleen='".changeQuot($_POST['inputDescription'])."'";
	
		}else{
		$update[]=$mod_tb_root."_subjectcn='".changeQuot($_POST['inputSubject'])."'";
		$update[]=$mod_tb_root."_titlecn='".changeQuot($_POST['inputDescription'])."'";
		$update[]=$mod_tb_root."_htmlfilenamecn  	='".$filename."'";
		$update[]=$mod_tb_root."_descriptioncn='".changeQuot($_POST['inputTagDescription'])."'";
		$update[]=$mod_tb_root."_keywordscn='".changeQuot($_POST['inputTagKeywords'])."'";
		$update[]=$mod_tb_root."_metatitlecn='".changeQuot($_POST['inputTagTitle'])."'";
		}

		$update[]=$mod_tb_root."_gid='".$_POST["inputGroupID"]."'";
		$update[]=$mod_tb_root."_sgid='".$_POST["inputSubgroupID"]."'";
		$update[]=$mod_tb_root."_ssgid='".$_POST["inputSSubgroupID"]."'";
		$update[]=$mod_tb_root."_type='".$_POST["inputType"]."'";

		
		if ($_REQUEST['inputSubtype'] == 0) {
			$update[]=$mod_tb_root."_type='".$_POST["inputType"]."'";
		}else{
			$update[]=$mod_tb_root."_type='".$_POST["inputType_sub"]."'";
		}

		$update[]=$mod_tb_root."_subtype='".$_POST["inputSubtype"]."'";

		if($_POST["inputType"]=='url'){
			$update[]=$mod_tb_root."_url='".changeQuot($_REQUEST['inputurl'])."'";
		}
		if($_POST["inputType"]=='social'){
			$update[]=$mod_tb_root."_facebook='".changeQuot($_REQUEST['inputfacebook'])."'";
			$update[]=$mod_tb_root."_email='".changeQuot($_REQUEST['inputemail'])."'";
			$update[]=$mod_tb_root."_youtube='".changeQuot($_REQUEST['inputyoutube'])."'";
			$update[]=$mod_tb_root."_line='".changeQuot($_REQUEST['inputline'])."'";
			$update[]=$mod_tb_root."_ig='".changeQuot($_REQUEST['inputig'])."'";
			$update[]=$mod_tb_root."_twitter='".changeQuot($_REQUEST['inputtwitter'])."'";
		}
		
		//$update[]=$mod_tb_root."_url='".changeQuot($_REQUEST['inputurl'])."'";
		$update[]=$mod_tb_root."_lastbyid='".$_SESSION[$valSiteManage.'core_session_id']."'";
		$update[]=$mod_tb_root."_lastby='".$_SESSION[$valSiteManage.'core_session_name']."'";
		if($_REQUEST['cdateInput']!=""){
			$update[]=$mod_tb_root."_credate  	='".DateFormatInsertCre($_REQUEST['cdateInput'])."'";
		}else{
		$update[]=$mod_tb_root."_credate=NOW()";
		}
		
		$update[]=$mod_tb_root."_lastdate=NOW()";
		$update[]=$mod_tb_root."_sdate  	='".DateFormatInsert($sdateInput)."'";
		$update[]=$mod_tb_root."_edate  	='".DateFormatInsert($edateInput)."'";
		
		
		
		 $sql="UPDATE ".$mod_tb_root." SET ".implode(",",$update)." WHERE ".$mod_tb_root."_id='".$_POST["valEditID"]."' ";
		$Query=wewebQueryDB($coreLanguageSQL, $sql);
	//print_pre($sql);



		logs_access('3','Update');

	## URL Search ###################################
	$txt_value_to=	encodeURL("c=".$contantID);
       
	if($_SESSION[$valSiteManage . 'core_session_language']=="Thai"){
	$mod_path_url_fornt =$mod_url_search_th."?".$txt_value_to;
	}else{
	$mod_path_url_forntEN=$mod_url_search_en."?".$txt_value_to;
	}
	
	$updateSch=array();
	// if($_REQUEST['inputLt']=="Thai"){
		 $updateSch[]=$core_tb_search."_subject='".changeQuot($_REQUEST['inputSubject'])."'";
		 $updateSch[]=$core_tb_search."_title='".changeQuot($_REQUEST['inputDescription'])."'";
		$updateSch[]=$core_tb_search."_keyword='".addslashes($_POST["inputSubject"])." ".addslashes($_POST["inputDescription"])." ".htmlspecialchars($_POST['inputHtml'])."'";
	// }else{
	// 	$updateSch[]=$core_tb_search."_subjecten='".changeQuot($_REQUEST['inputSubject'])."'";
	// 	$updateSch[]=$core_tb_search."_titleen='".changeQuot($_REQUEST['inputDescription'])."'";
	// 	$updateSch[]=$core_tb_search."_keyworden='".addslashes($_POST["inputSubject"])." ".addslashes($_POST["inputDescription"])." ".htmlspecialchars($_POST['inputHtml'])."'";
	// }
	
	$updateSch[]=$core_tb_search."_url='".$mod_path_url_fornt."'";
	$updateSch[]=$core_tb_search."_urlen='".$mod_path_url_forntEN."'";
	
	$updateSch[]=$core_tb_search."_sdate  	='".DateFormatInsert($_REQUEST['sdateInput'])."'";
	$updateSch[]=$core_tb_search."_edate  	='".DateFormatInsert($_REQUEST['edateInput'])."'";
	
	 $sqlSch="UPDATE ".$core_tb_search." SET ".implode(",",$updateSch)." WHERE ".$core_tb_search."_contantid='".$_POST["valEditID"]."'  AND ".$core_tb_search."_masterkey='".$_POST["masterkey"]."' ";
	$querySch=wewebQueryDB($coreLanguageSQL,$sqlSch);

	//include("../lib/incRss.php");
		?>
        <? } ?>
 <? include("../lib/disconnect.php");?>
<form action="index.php" method="post" name="myFormAction" id="myFormAction">
    <input name="masterkey" type="hidden" id="masterkey" value="<?=$_REQUEST['masterkey']?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?=$_REQUEST['menukeyid']?>" />
    <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?=$_REQUEST['module_pageshow']?>" />
    <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?=$_REQUEST['module_pagesize']?>" />
    <input name="module_orderby" type="hidden" id="module_orderby" value="<?=$_REQUEST['module_orderby']?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?=$_REQUEST['inputSearch']?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?=$_REQUEST['inputGh']?>" />
    <input name="inputTh" type="hidden" id="inputTh" value="<?=$_REQUEST['inputTh']?>" />
	<input name="inputSGh" type="hidden" id="inputSGh" value="<?=$_REQUEST['inputSGh']?>" />
</form>
<script language="JavaScript" type="text/javascript">document.myFormAction.submit(); </script>
            		</body></html>
