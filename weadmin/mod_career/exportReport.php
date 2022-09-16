<?php
include("../lib/session.php");
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="report_apply_'.date('Y-m-d').'.xls"');#ชื่อไฟล์
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");

logs_access('3','Export');

?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"

xmlns:x="urn:schemas-microsoft-com:office:excel"

xmlns="http://www.w3.org/TR/REC-html40">


<HEAD>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
<!--
.bold {font-weight:bold;
}
-->
</style>
</HEAD>
<BODY>
<table border="1" cellspacing="1" cellpadding="2"  align="center">
  <tbody>
    <tr >
      <td width="80" height="30" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:no"]?></td>
      <td width="150" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:name"]?></td>
      <td width="150" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:email"]?></td>
      <td width="150" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:mobile"]?></td>
      <td width="150" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:select"]?></td>
      <td width="150" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:money"]?> </td>
      <td width="150" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:province"]?></td>
      <td width="150" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:sex"]?></td>
      <td width="150" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:edu"]?></td>
      <td width="150" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:regisdate"]?></td>
      <td width="150" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langTxt["mg:status"]?></td>
      
    </tr>
    
    <?php
$sql=str_replace('\\','',$_POST['sql_export']);
//echo $sql;
$query=wewebQueryDB($coreLanguageSQL,$sql) ;
$count_record=wewebNumRowsDB($coreLanguageSQL,$query);
$date_print=DateFormat(date("Y-m-d"));

			  if($count_record>=1){
			  $index=1;
			while($row=wewebFetchArrayDB($coreLanguageSQL,$query)) {
		$valID=$row[0];
		$valName=rechangeQuot($row[1]);
		$valSubject=rechangeQuot($row[2]);
	 	$valDateCredate = dateFormatReal($row[3]);
	 	$valTimeCredate = timeFormatReal($row[3]);
		$valStatus=$row[4];
	 	$valPic=$mod_path_office."/".$row[5];
		if(is_file($valPic)){
			$valPic=$valPic;
		}else{
			$valPic="../img/btn/nopic.jpg";
		}
		
		$valProvince=$row[6];
		$valSex=$row[7];
    $valHistory=json_decode($row[8],true);
    // print_pre($valHistory);
    $valEdu = array_slice($valHistory['grade'],0,1)[0];
		$valSalary=number_format($row[9]);
		
		$valEmail=rechangeQuot($row[10]);
		$valMobile=rechangeQuot($row[11]);

		
			?>
    
    <tr bgcolor="#ffffff">
      <td width ="80" height="30" align="center"  valign="middle"><?php echo $index?></td>
      <td width ="150" align="left"  valign="middle"><?php echo $valName?></td>
      <td width ="150" align="left"  valign="middle"><?php echo $valEmail?></td>
      <td width ="150" align="left"  valign="middle"><?php echo $valMobile?></td>
      <td width ="150" align="left" valign="middle"><?php echo $valSubject?></td>
      <td width ="150" align="left" valign="middle"><?php echo $valSalary?></td>
      <td width ="150" align="left" valign="middle"><?php echo loadNameProvince($valProvince)?></td>
      <td width ="150" align="left" valign="middle"><?php echo $modTxtSexThai[$valSex]?></td>
      <td width ="150" align="left" valign="middle"><?php echo $valEdu ?></td>
      <td width ="150" align="left" valign="middle"><?php echo $valDateCredate?></td>
      <td width ="150" align="left" valign="middle"><?php echo $valStatus?></td>
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
