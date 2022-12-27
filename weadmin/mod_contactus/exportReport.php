<?php
 @include("../lib/session.php");
 header("Content-Type: application/vnd.ms-excel");
 header('Content-Disposition: attachment; filename="report_contact_'.date('Y-m-d').'.xls"');#ชื่อไฟล์
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");

logs_access('3','Export');
$valnamereport = getNameMenu($_REQUEST["menukeyid"]);
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"

xmlns:x="urn:schemas-microsoft-com:office:excel"

xmlns="http://www.w3.org/TR/REC-html40">


<HEAD>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">

</style>
</HEAD>
<BODY>
<table border="1" cellspacing="1" cellpadding="2"  align="center">
  <tbody>
 
    <tr >
      <td width="56" height="30" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:no"]?></td>
      <!-- <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:selectgn"]?></td> -->
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["meu:group"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:subject"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:name"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:Message"] ?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:email"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:tel"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:address"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langTxt["us:credate"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:by"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle">IP </td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langTxt["mg:status"]?></td>
      
    </tr>
    
    <?php
$sql=str_replace('\\','',$_POST['sql_export']);
// print_pre($sql);
$query = wewebQueryDB($coreLanguageSQL, $sql);
$count_record=wewebNumRowsDB($coreLanguageSQL,$query);
$date_print=DateFormat(date("Y-m-d h:i:s A"));
$valSdate = DateFormatExport($_REQUEST['sdateInputSe']);
$valEdate = DateFormatExport($_REQUEST['edateInputSe']);

			  if($count_record>=1){
			  $index=1;
			while($rowExport=wewebFetchArrayDB($coreLanguageSQL,$query)) {;
        
			$valID=$rowExport[0];
			$valCredate=DateFormat($rowExport[1]);
			$valStatus=$rowExport[2];
			$valSubject=rechangeQuot($rowExport[3]);
			$valMessage=rechangeQuot($rowExport[4]);
			$valCreby=rechangeQuot($rowExport[5]);
			$valAddress=rechangeQuot($rowExport[6]);
			$valEmail=rechangeQuot($rowExport[7]);
			$valTel=rechangeQuot($rowExport[8]);
			$valIp=rechangeQuot($rowExport[9]);
			$valGid=$rowExport[10];
			
			$sql_group = "SELECT ";
			if($_SESSION[$valSiteManage.'core_session_language']=="Thai"){
				$sql_group .= "  ".$mod_tb_root_group."_id,".$mod_tb_root_group."_subject";
			}else{
				$sql_group .= " ".$mod_tb_root_group."_id,".$mod_tb_root_group."_subjecten ";
			}
			 
			$sql_group .= "  FROM ".$mod_tb_root_group." WHERE  ".$mod_tb_root_group."_id='".$valGid."'  ORDER BY ".$mod_tb_root_group."_order DESC ";

    $query_group = wewebQueryDB($coreLanguageSQL, $sql_group);
    $row_group = wewebFetchArrayDB($coreLanguageSQL, $query_group);
		$row_groupid=$row_group[0];
	 	$row_groupname=$row_group[1];
		
			?>
    
    <tr bgcolor="#ffffff">
      <td height="30" align="center"  valign="middle"><?php echo $index?></td>
      <td align="left"  valign="middle"><?php echo $row_groupname?></td>
      <td align="left"  valign="middle"><?php echo $valSubject?></td>
      <td align="left"  valign="middle"><?php echo $valCreby?></td>
      <td align="left"  valign="middle"><?php echo $valMessage?></td>
      <td align="left" valign="middle"><?php echo $valEmail?></td>
      <td align="left" valign="middle">'<?php echo $valTel?></td>
      <td align="left" valign="middle"><?php echo $valAddress?></td>
      <td align="left" valign="middle">'<?php echo $valCredate?></td>
      <td align="left" valign="middle"><?php echo $valCreby?></td>
      <td align="left" valign="middle"><?php echo $valIp?></td>
      <td align="left" valign="middle"><?php echo $valStatus?></td>
    </tr>
    <?php 
								$index++;
									}
									?>
    

    <?php } ?>
    </tbody>
    </table>
    <table border="0" cellspacing="1" cellpadding="2"  align="left">
  <tbody>
        <tr >
      <td width="175" align="right" valign="middle" class="bold">Print date : </td>
      <td  width="175" align="left" valign="middle"><?php echo $date_print?></td>
      
    </tr>
  </tbody>
</table>
</BODY>

</HTML>
