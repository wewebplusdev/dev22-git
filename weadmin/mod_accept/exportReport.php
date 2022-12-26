<?php
@include("../lib/session.php");
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="report_accept_'.date('Y-m-d').'.xls"');#ชื่อไฟล์
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("config.php");
if($_REQUEST['language_export']=="Thai"){
		include("language_thai.php");
}else{
		include("language_eng.php");
}
$masterkey=$_REQUEST['masterkey'];
$menukeyid=$_REQUEST['menukeyid'];

		logs_access('3','Export');
		$valnamereport = getNameMenu($_REQUEST["menukeyid"]);
?>
<html xmlns:o="urn:schemas-microsoft-com:office:office"

xmlns:x="urn:schemas-microsoft-com:office:excel"

xmlns="http://www.w3.org/TR/REC-html40">


<HEAD>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
/* <!-- */
.bold {font-weight:bold;
}
/* --> */
</style>
</HEAD>
<BODY>
<table border="1" cellspacing="1" cellpadding="2"  align="center">
  <tbody>
  
    <tr >
      <td width="56" height="30" align="center" bgcolor="#eeeeee" class="bold" valign="middle">ลำดับ</td>
      <!-- <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle">ชื่อเว็บไซต์</td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle">URL</td> -->
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle">IP Address</td>
      <!-- <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle">IP Router</td> -->
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle">Token</td>
      <!-- <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle">Secret Key</td> -->
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle">วันที่สร้าง</td>
    </tr>
    
    <?php
$sql=str_replace('\\','',$_POST['sql_export']);
$query=wewebQueryDB($coreLanguageSQL, $sql) ;
$count_record=wewebNumRowsDB($coreLanguageSQL, $query);
//$date_print=DateFormat(date("Y-m-d"));
$date_print=DateFormat(date("Y-m-d h:i:s A"));

			  if($count_record>=1){
			  $index=1;
			while($row_member=wewebFetchArrayDB($coreLanguageSQL, $query)) {
			$row_id=$row_member[0];
		 	$row_subject=$row_member[1];
			$row_file=$row_member[2];
			if($row_member[3]!="0000-00-00 00:00:00"){
			$row_sdate=DateFormatInsertRe($row_member[3]);
			}
			if($row_member[4]!="0000-00-00 00:00:00"){
			$row_edate=DateFormatInsertRe($row_member[4]);
			}
			$row_gid=$row_member[5];
			$row_pic=$mod_path_pictures."/".$row_member[6];
			$row_picname=$row_member[6];
			$row_type=$row_member[7];
			$row_url=$row_member[8];
			$row_title=$row_member[2];
			$row_did= $row_member[10];
			$row_cid= $row_member[11];
			$row_tid= $row_member[12];
			$row_mm= $row_member[13];
			$row_yy= $row_member[14];
			$row_isbn=$row_member[15];
			$row_book=$row_member[16];
			$row_author=$row_member[17];
			$row_print=$row_member[18];
			 $row_fileUp=$row_member[19];
			 $row_urlUp=$row_member[20];
			 $row_typeUp=$row_member[21];
			 $row_exp=$row_member[23];
			$row_credate=DateFormatInsertRe($row_member[4]);
			$txt_cms_view=$row_member[20];
			$row_status=$row_member[7];
			$row_html=$mod_path_html."/".$row_member[3];
			$valHtmlContant="";
			 if (is_file($row_html)) {
                        $fd = @fopen ($row_html, "r");
                        $contents = @fread ($fd, @filesize ($row_html));
                        @fclose ($fd);
                        $valHtmlContant= txtReplaceHTML($contents);
					}

			$valDateCredate = dateFormatReal($row_member['credate']);
			$valTimeCredate = timeFormatReal($row_member['credate']);
			$valIP=$row_member['ipaddress'];
			$valKeySite=$row_member['keysite'];
			$valCountSecretKey=$row_member['countsecretkey'];
			$valIProuter=$row_member['iprouter'];
			$valGroupID=$row_member['group_id'];
			$valGroupName=$row_member['group_name'];
			$valGroupUrl=$row_member['group_url'];
			$valToken=$row_member['token'];
			$valSecretKey=$row_member['secretkey'];
			?>
    
   <tr bgcolor="#ffffff">
      <td height="30" align="center"  valign="middle"><?php echo $index?></td>
      <!-- <td align="left"  valign="middle"><?php echo $valGroupName?></td>
      <td align="left"  valign="middle"><?php echo $valGroupUrl?></td> -->
      <td align="left"  valign="middle"><?php echo $valIP?></td>
      <!-- <td align="left"  valign="middle"><?php echo $valIProuter?></td> -->
      <td align="left"  valign="middle">'<?php echo $valToken?></td>
      <!-- <td align="left"  valign="middle"><?php echo $valSecretKey?></td> -->
      <td align="left" valign="middle"><?php echo $row_credate?></td>
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
