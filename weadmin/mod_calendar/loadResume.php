<?php
@include("../lib/session.php");
header("Content-Type: application/vnd.ms-word");
header('Content-Disposition: attachment; filename="resume_'.$_GET['valEditID'].'_'.$_GET['nID'].'.doc"');
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("config.php");
include("incModLang.php");
		
		
				$sql = "SELECT   ";
				$sql .= "   ".$mod_tb_apply."_id ,
				".$mod_tb_apply."_pic, 
				".$mod_tb_apply."_credate , 
				".$mod_tb_apply."_status,    
				".$mod_tb_apply."_position1,   
				".$mod_tb_apply."_position2, 
				".$mod_tb_apply."_lastdate, 
				".$mod_tb_apply."_position3 , 
				".$mod_tb_apply."_salary,    
				".$mod_tb_apply."_name,    
				".$mod_tb_apply."_address , 
				".$mod_tb_apply."_province , 
				".$mod_tb_apply."_zipcode , 
				".$mod_tb_apply."_mobile,    
				".$mod_tb_apply."_tel,    
				".$mod_tb_apply."_email,
				".$mod_tb_apply."_date, 
				".$mod_tb_apply."_month,
				".$mod_tb_apply."_year , 
				".$mod_tb_apply."_love, 
				".$mod_tb_apply."_sex, 
				".$mod_tb_apply."_nationality, 
				".$mod_tb_apply."_religion, 
				".$mod_tb_apply."_h, 
				".$mod_tb_apply."_w, 
				".$mod_tb_apply."_army, 
				".$mod_tb_apply."_edu, 
				".$mod_tb_apply."_academy, 
				".$mod_tb_apply."_qualification, 
				".$mod_tb_apply."_eduyear, 
				".$mod_tb_apply."_gpa, 
				".$mod_tb_apply."_thail, 
				".$mod_tb_apply."_thais, 
				".$mod_tb_apply."_thair, 
				".$mod_tb_apply."_thaiw, 
				".$mod_tb_apply."_engl, 
				".$mod_tb_apply."_engs, 
				".$mod_tb_apply."_engr, 
				".$mod_tb_apply."_engw, 
				".$mod_tb_apply."_otherl, 
				".$mod_tb_apply."_others, 
				".$mod_tb_apply."_otherr, 
				".$mod_tb_apply."_otherw, 
				".$mod_tb_apply."_otherlang, 
				".$mod_tb_apply."_printt, 
				".$mod_tb_apply."_printe, 
				".$mod_tb_apply."_car, 
				".$mod_tb_apply."_driving, 
				".$mod_tb_apply."_special, 
				".$mod_tb_apply."_ref ";
		  	$sql .= " FROM ".$mod_tb_apply." WHERE ".$mod_tb_apply."_masterkey='".$_REQUEST["masterkey"]."'  AND  ".$mod_tb_apply."_id='".$_REQUEST['valEditID']."' ";
			$Query=wewebQueryDB($coreLanguageSQL,$sql);
			$Row=wewebFetchArrayDB($coreLanguageSQL,$Query);
			$valID=$Row[0];
			$valPicName=$Row[1];
			 $valPic=$mod_path_pictures."/".$Row[1];
			 if(!is_file($valPic)){
			 $valPic= $core_full_path."/weadmin/mod_career/img/noPic.jpg";
			 }else{
			 $valPic= $core_full_path."/upload/".$_REQUEST["masterkey"]."/pictures/".$Row[1];
			 }
			$valCredate=DateFormat($Row[2]);
			$valStatus=$Row[3];
			if($valStatus=="Enable"){
				$valStatusClass=	"fontContantTbEnable";
			}else{
				$valStatusClass=	"fontContantTbDisable";
			}
			
			$valPosition1=rechangeQuot($Row[4]);
			$valPosition2=rechangeQuot($Row[5]);
			$valLastdate=DateFormat($Row[6]);
			$valPosition3=rechangeQuot($Row[7]);
			$valSalary=number_format($Row[8]);
			$valName=rechangeQuot($Row[9]);
			$valAddress=rechangeQuot($Row[10]);
			
			$valProvince=$Row[11];
			$valZipcode=$Row[12];
			$valMobile=rechangeQuot($Row[13]);
			$valTel=rechangeQuot($Row[14]);
			$valEmail=rechangeQuot($Row[15]);
			
			$valBdate=substr("0".$Row[16],-2)."&nbsp;".$modMonthMem[$Row[17]]."&nbsp;".$Row[18];
			$valLove=$Row[19];
			$valSex=$Row[20];
			$valNationality=$Row[21];
			$valReligion=$Row[22];
			$valH=rechangeQuot($Row[23]);
			$valW=rechangeQuot($Row[24]);
			$valArmy=$Row[25];

			$valEdu=$Row[26];
			$valAcademy=rechangeQuot($Row[27]);
			$valQualification=rechangeQuot($Row[28]);
			$valEduyear=rechangeQuot($Row[29]);
			$valGpa=rechangeQuot($Row[30]);
			
			$valThaiL=$Row[31];
			$valThaiS=$Row[32];
			$valThaiR=$Row[33];
			$valThaiW=$Row[34];
			
			$valEngL=$Row[35];
			$valEngS=$Row[36];
			$valEngR=$Row[37];
			$valEngW=$Row[38];
			
			$valOtherL=$Row[39];
			$valOtherS=$Row[40];
			$valOtherR=$Row[41];
			$valOtherW=$Row[42];
			
			$valOtherlang=rechangeQuot($Row[43]);
			$valPrintt=rechangeQuot($Row[44]);
			$valPrinte=rechangeQuot($Row[45]);
			$valCar=$Row[46];
			$valDriving=$Row[47];
			$valSpecial=rechangeQuot($Row[48]);
			$valRef=rechangeQuot($Row[49]);
	
		?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Profile</title>
<style type="text/css">

body { 
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-size: 14px; 
	font-family: "tahoma"; 
	color: #000000; 
} 
</style>

</head>

<body style="font-size:9px; width:950px;">
<table width="950" border="0" cellspacing="0" cellpadding="0" align="center">
                
                <tr>
                  <td style="padding-top:50px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    
                    
                    <tr>
                      <td width="9%" height="25" valign="top"><img src="<?php echo $core_full_path."/weadmin/mod_career/"?>img/logoPrint.jpg" /></td>
                      <td width="74%" align="center"  valign="top" style="line-height:32px;" >
                        <span style="font-size:20px;">APPLICATION FOR EMPLOYMENT</span><br />

                      <span style="font-size:20px;">ใบสมัครงาน</span><br />

กรอกข้อมูลด้วยตัวท่านเอง<br />

(To be completed in own handwriting)                      </td>
                      <td width="17%" colspan="2" align="right"  valign="top" >
                      <table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="170" height="105" align="right"><img  src="<?php echo $valPic?>"   width="220" /></td>
  </tr>
</table>                      </td>
                    </tr>
                  
                    <tr>
                      <td height="50"></td>
                      <td align="right" style="padding-right:10px;"></td>
                      <td colspan="2" align="right" style="padding-right:10px;"></td>
                    </tr>
                      
                  </table></td>
                </tr>
                <tr>
                  <td>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td  height="30" colspan="5" >
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="35" align="left" valign="bottom"><?php echo $langMod["ep:name"]?></td>
    <td width="81%" style="border-bottom:#999999 dashed 1px;" valign="bottom" align="left"><?php echo $valName?></td>
  </tr>
</table>    </td>
    </tr>
  <tr>
    <td width="19%" height="35" align="left"  valign="bottom"><?php echo $langMod["ep:select"]?>  </td>
    <td width="27%" align="left"  valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valPosition1?></td>
    <td width="18%" align="left"  valign="bottom">&nbsp;<?php echo $langMod["ep:money"]?></td>
    <td width="26%" align="left"  valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valSalary?></td>
    <td width="10%" align="left"  valign="bottom">&nbsp;<?php echo $langMod["ep:bam"]?></td>
  </tr>
</table>                  </td>
  </tr>
                <tr>
                  <td height="20"></td>
                </tr>
  <tr>
                  <td height="35">
                  <span style="font-size:18px;"><?php echo $langMod["txt:regis"]?></span>                  </td>
                  </tr>
                    <tr>
                  <td height="20">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="19%" height="35" align="left" valign="bottom"><?php echo $langMod["ep:address"]?></td>
    <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valAddress?></td>
    </tr>
  <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:province"]?></td>
    <td width="27%" height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo loadNameProvince($valProvince)?></td>
    <td width="19%" height="35" align="left" valign="bottom">&nbsp;&nbsp;<?php echo $langMod["ep:zipcode"]?></td>
    <td width="35%" height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valZipcode?></td>
    </tr>

  <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:tel"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valTel?></td>
    <td height="35" valign="bottom" align="left">&nbsp;&nbsp;<?php echo $langMod["ep:mobile"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valMobile?></td>
    </tr>
  <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:email"]?></td>
    <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valEmail?></td>
    </tr>
      
    <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:date"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valBdate?></td>
    <td height="35" valign="bottom" align="left">&nbsp;&nbsp;<?php echo $langMod["ep:status"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $modTxtStatusThai[$valLove]?>&nbsp;</td>
    </tr>
  <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:nationality"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo loadNameNation($valNationality)?></td>
    <td height="35" valign="bottom" align="left">&nbsp;&nbsp;<?php echo $langMod["ep:religion"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $modTxtBuddhaThai[$valReligion]?></td>
    </tr>
  
  <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:h"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valH?>&nbsp;</td>
    <td height="35" valign="bottom" align="left">&nbsp;&nbsp;<?php echo $langMod["ep:w"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valW?>&nbsp;</td>
    </tr>
      <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:sex"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $modTxtStatusThai[$valSex]?>&nbsp;</td>
    <td height="35" valign="bottom" align="left">&nbsp;&nbsp;<?php echo $langMod["ep:army"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $modTxtArmyThai[$valArmy]?>&nbsp;</td>
    </tr>
</table>                  </td>
                </tr>
                      <tr>
                  <td height="20"></td>
                </tr>
  <tr>
                  <td height="35">
                  <span style="font-size:18px;"><?php echo $langMod["txt:regis3"]?></span>                  </td>
                  </tr>
                    <tr>
                  <td height="20">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="19%" height="35" align="left" valign="bottom"><?php echo $langMod["ep:edu"]?></td>
    <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $modTxtEduThai[$valEdu]?></td>
    </tr>
  <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:academy"]?></td>
    <td width="27%" height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valAcademy?></td>
    <td width="19%" height="35" align="left" valign="bottom">&nbsp;&nbsp;<?php echo $langMod["ep:qualification"]?></td>
    <td width="35%" height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valQualification?></td>
    </tr>

  <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:eduYear"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valEduyear?></td>
    <td height="35" valign="bottom" align="left">&nbsp;&nbsp;<?php echo $langMod["ep:gpa"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valGpa?></td>
    </tr>
</table>                  </td>
                </tr>
                   <tr>
                  <td height="20"></td>
                </tr>
  <tr>
                  <td height="35">
                  <span style="font-size:18px;"><?php echo $langMod["txt:regis5"]?></span>                  </td>
                  </tr>
                    <tr>
                  <td height="20"></td>
                </tr>
                    <tr>
                  <td height="20"><table  width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr style="border:#000000 solid 1px;">
                      <td width="52%" height="30"  align="center"  style="border-left:#000000 solid 1px;border-top:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $langMod["ep:lange"]?></td>
                      <td  width="12%" align="center"  style="border-left:#000000 solid 1px;border-top:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $langMod["ep:tl"]?></td>
                      <td  width="12%" align="center"  style="border-left:#000000 solid 1px;border-top:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $langMod["ep:ts"]?></td>
                      <td  width="12%" align="center"  style="border-left:#000000 solid 1px;border-top:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $langMod["ep:tr"]?></td>
                      <td width="12%" align="center"  style="border-left:#000000 solid 1px;border-top:#000000 solid 1px;border-bottom:#000000 solid 1px;border-right:#000000 solid 1px;font-size: 14px;"><?php echo $langMod["ep:tw"]?></td>
              </tr>
                    <tr style="border:#000000 solid 1px;">
                      <td height="30"align="left"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" >&nbsp;&nbsp;<?php echo $langMod["ep:thai"]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $modTxtLangThai[$valThaiL]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $modTxtLangThai[$valThaiS]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $modTxtLangThai[$valThaiR]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;border-right:#000000 solid 1px;font-size: 14px;"><?php echo $modTxtLangThai[$valThaiW]?></td>
                    </tr>
                     <tr style="border:#000000 solid 1px;">
                      <td height="30"align="left"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" >&nbsp;&nbsp;<?php echo $langMod["ep:eng"]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $modTxtLangThai[$valEngL]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $modTxtLangThai[$valEngS]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $modTxtLangThai[$valEngR]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;border-right:#000000 solid 1px;font-size: 14px;"><?php echo $modTxtLangThai[$valEngW]?></td>
                    </tr>
                     <tr style="border:#000000 solid 1px;">
                      <td height="30"align="left"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" >&nbsp;&nbsp;<?php echo $langMod["ep:other"]?>(<?php echo $valOtherlang?>)</td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $modTxtLangThai[$valOtherL]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $modTxtLangThai[$valOtherS]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;font-size: 14px;" ><?php echo $modTxtLangThai[$valOtherR]?></td>
                      <td  align="center"  style="border-left:#000000 solid 1px;border-bottom:#000000 solid 1px;border-right:#000000 solid 1px;font-size: 14px;"><?php echo $modTxtLangThai[$valOtherW]?></td>
                    </tr>
          </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:printt"]?></td>
    <td width="27%" height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valPrintt?></td>
    <td width="19%" height="35" align="left" valign="bottom">&nbsp;&nbsp;<?php echo $langMod["ep:printe"]?></td>
    <td width="35%" height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valPrinte?></td>
    </tr>
    <tr>
    <td height="35" valign="bottom" align="left"><?php echo $langMod["ep:car"]?></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $modTxtCarThai[$valCar]?></td>
    <td height="35" valign="bottom" align="left">&nbsp;&nbsp;<?php echo $langMod["ep:driving"]?> </td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $modTxtDrivingThai[$valDriving]?></td>
    </tr>
    <tr>
    <td width="19%" height="35" align="left" valign="bottom"><?php echo $langMod["ep:special"]?></td>
    <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valSpecial?></td>
    </tr>
    <tr>
    <td width="19%" height="35" align="left" valign="bottom"><?php echo $langMod["ep:ref"]?></td>
    <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dashed 1px;"><?php echo $valRef?></td>
    </tr>
</table></td>
                </tr>
                <tr>
                  <td height="50"></td>
                </tr>
              </table>
              
