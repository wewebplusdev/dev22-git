<?php
@include("../lib/session.php");
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="report_register_'.date('Y-m-d').'.xls"');#ชื่อไฟล์
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
      <td width="56" height="30" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:no"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["inp:order"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:select"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["inp:officeth"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:name"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:address"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:mobile"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:email"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:food"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:count"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:hotel"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:Checkin"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:Checkout"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:roomType"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:Live"]?></td>
      
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["tit:noteg"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langMod["ep:regisdate"]?></td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle">IP</td>
      <td width="175" align="center" bgcolor="#eeeeee" class="bold" valign="middle"><?php echo $langTxt["mg:status"]?></td>
    </tr>
    
    <?php
$sql=str_replace('\\','',$_POST['sql_export']);
$query=wewebQueryDB($coreLanguageSQL,$sql) ;
$count_record=wewebNumRowsDB($coreLanguageSQL,$query);
$date_print=DateFormat(date("Y-m-d"));

			  if($count_record>=1){
			  $index=1;
			while($Row=wewebFetchArrayDB($coreLanguageSQL,$query)) {
			$valID=$Row[0];
			$valCredate=DateFormat($Row[1]);
			$valStatus=$Row[2];
			if($valStatus=="1"){
				$valStatusClass=	"fontContantTbHomeSt";
			}else if($valStatus=="2"){
				$valStatusClass=	"fontContantTbEnable";
			}else if($valStatus=="3"){
				$valStatusClass=	"fontContantTbDisable";
			}
			
			$valofficeth=rechangeQuot($Row[3]);
			$valName=rechangeQuot($Row[4]);
			$valIp=rechangeQuot($Row[5]);
			$valGid=rechangeQuot($Row[6]);
			$valOrderNumber=rechangeQuot($Row[7]);
			$valAddress=rechangeQuot($Row[8]);
			$valMobile=rechangeQuot($Row[9]);
			$valEmail=rechangeQuot($Row[10]);
			$valFood=$modTxtFood[$Row[11]];
			$valHotel=rechangeQuot($Row[12]);
			$valHotelShow=$modTxtHotel[$valHotel];
			
			if($valHotel==1){
				$valCheckin=DateFormatReal($Row[13]);
				$valCheckout=DateFormatReal($Row[14]);
				$valRoom=rechangeQuot($Row[15]);
				$valRoomShow=$modTxtRoomType[$valRoom];
				 if($valRoom==2){
					$valLive=rechangeQuot($Row[16]);
					$valButdy=rechangeQuot($Row[17]);
					if($valLive==2){
						$valLiveShow=$modTxtLive[$valLive]." ".$valButdy;
					}else{
						$valLiveShow=$modTxtLive[$valLive];
					}
				}else{
					$valLive="";
					$valLiveShow="";
					$valButdy="";
				}
			}else{
				$valCheckin="";
				$valCheckout="";
				$valRoom="";
				$valRoomShow="";
				$valLive="";
				$valLiveShow="";
				$valButdy="";
			}
				$valCountSn=number_format($Row[18]);
				$valSubject=rechangeQuot($Row[19]);
				$valNote=rechangeQuot($Row[20]);
			?>
    
    <tr bgcolor="#ffffff">
      <td height="30" align="center"  valign="middle"><?php echo $index?></td>
      <td align="left"  valign="middle">'<?php echo $valOrderNumber?></td>
      <td align="left"  valign="middle"><?php echo $valSubject?></td>
      <td align="left"  valign="middle"><?php echo $valofficeth?></td>
      <td align="left" valign="middle"><?php echo $valName?></td>
      <td align="left" valign="middle"><?php echo $valAddress?></td>
      <td align="left" valign="middle">'<?php echo $valMobile?></td>
      <td align="left" valign="middle"><?php echo $valEmail?></td>
      <td align="left" valign="middle"><?php echo $valFood?></td>
      <td align="left" valign="middle"><?php echo $valCountSn?></td>
      <td align="left" valign="middle"><?php echo $valHotelShow?></td>
      <td align="left" valign="middle"><?php echo $valCheckin?></td>
      <td align="left" valign="middle"><?php echo $valCheckout?></td>
      <td align="left" valign="middle"><?php echo $valRoomShow?></td>
      <td align="left" valign="middle"><?php echo $valLiveShow?></td>
      <td align="left" valign="middle"><?php echo $valNote?></td>
      <td align="left" valign="middle"><?php echo $valCredate?></td>
      <td align="left" valign="middle"><?php echo $valIp?></td>
      <td align="left" valign="middle"><?php echo $modTxtStatusSn[$valStatus]?></td>
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
