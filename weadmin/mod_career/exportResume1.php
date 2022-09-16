<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");
logs_access('3', 'Export');
require_once('../lib/mpdf/mpdf.php');

//ob_start();
?>
<?php
//  $filename = $mod_path_resume.'/resume_'.$_GET['valEditID'].'.pdf';
// if (file_exists($filename)) {

// 		$downloadFile ='resume_'.$_GET['valEditID'].'.pdf';
// 		$linkPath = $mod_path_resume.'/resume_'.$_GET['valEditID'].'.pdf'; 
// 		$downloadFileName ='resume_'.$_GET['nID'].'';
// 		$filename = explode(".",$linkPath);
// 		$file_extension = $filename[count($filename)-1];
// 		$myDateArray=explode(".",$downloadFile);
// 		header("Content-type: application/".$file_extension);
// 		header("Content-Disposition: attachment; filename=".$downloadFileName.".".$file_extension);
// 		echo readfile($linkPath);

// }
?>
<html>

<HEAD>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</HEAD>

<BODY>

  <?php
  $sql = "SELECT   ";
  $sql .= "   
    " . $mod_tb_apply . "_id ,
    " . $mod_tb_apply . "_name,   
    " . $mod_tb_apply . "_credate , 
		" . $mod_tb_apply . "_status, 
    " . $mod_tb_apply . "_pic,        
		" . $mod_tb_apply . "_province , 
		" . $mod_tb_apply . "_sex, 
		" . $mod_tb_apply . "_edu,
    " . $mod_tb_apply . "_salary, 
    " . $mod_tb_apply . "_email, 
		" . $mod_tb_apply . "_mobile, 
		" . $mod_tb_apply . "_jID, 
		" . $mod_tb_apply . "_amphur, 
		" . $mod_tb_apply . "_district, 
		" . $mod_tb_apply . "_postcode, 
		" . $mod_tb_apply . "_bdate, 
		" . $mod_tb_apply . "_bmonth, 
		" . $mod_tb_apply . "_byear, 
		" . $mod_tb_apply . "_religion, 
		" . $mod_tb_apply . "_marry, 
		" . $mod_tb_apply . "_weight, 
		" . $mod_tb_apply . "_height, 
		" . $mod_tb_apply . "_soider, 
		" . $mod_tb_apply . "_school, 
		" . $mod_tb_apply . "_branch, 
		" . $mod_tb_apply . "_graduation, 
		" . $mod_tb_apply . "_gpa, 
		" . $mod_tb_apply . "_talent, 
		" . $mod_tb_apply . "_address, 
		" . $mod_tb_apply . "_file ,
    " . $mod_tb_apply . "_nationality,
    " . $mod_tb_apply . "_age             as age,
    " . $mod_tb_apply . "_race            as race,
    " . $mod_tb_apply . "_nationcard      as nationcard,
    " . $mod_tb_apply . "_relationparent  as relationparent,
    " . $mod_tb_apply . "_father          as father,
    " . $mod_tb_apply . "_mather          as mother,
    " . $mod_tb_apply . "_brethren        as brother,
    " . $mod_tb_apply . "_languageAbility  as languageAbility,
    " . $mod_tb_apply . "_mate            as mate,
    " . $mod_tb_apply . "_wordsTh         as wordsTh ,
    " . $mod_tb_apply . "_wordsEng        as wordsEng ,
    " . $mod_tb_apply . "_talent          as talent, 
    " . $mod_tb_apply . "_driver       as driver ,
    " . $mod_tb_apply . "_vehicle      as vehicle ,
    " . $mod_tb_apply . "_driverOther     as driverOther ,
    " . $mod_tb_apply . "_refperson       as refperson ,
    " . $mod_tb_apply . "_general       as general,
    " . $mod_tb_apply . "_program        as program ,
    " . $mod_tb_apply . "_training  as training,
    " . $mod_tb_apply . "_work   as work,
    " . $mod_tb_apply . "_blood   as blood,
    " . $mod_tb_apply . "_positionID   as positionID,
    " . $mod_tb_apply . "_history         as history";
  $sql .= " FROM " . $mod_tb_apply . " WHERE " . $mod_tb_apply . "_masterkey='" . $_REQUEST["masterkey"] . "'  AND  " . $mod_tb_apply . "_id='" . $_REQUEST['valEditID'] . "' ";
  $query = wewebQueryDB($coreLanguageSQL, $sql);
  $count_record = wewebNumRowsDB($coreLanguageSQL, $query);
  $date_print = DateFormat(date("Y-m-d H:i:s"));
  $Row = wewebFetchArrayDB($coreLanguageSQL, $query);
  $valID = $Row[0];
  $valName = rechangeQuot($Row[1]);
  $valCredate = DateFormat($Row[2]);
  $valStatus = $Row[3];
  if ($valStatus == "Enable") {
    $valStatusClass =  "fontContantTbEnable";
  } else {
    $valStatusClass =  "fontContantTbDisable";
  }

  //$valPicName=$Row[4];
  //$valPic=$mod_path_pictures."/".$Row[4];
  // if(!is_file($valPic)){
  // $valPic=$mod_path_pictures."/".$Row[4];
  // }else{
  // $valPic= $core_full_path."/upload/".$_REQUEST["masterkey"]."/pictures/".$Row[4];
  $valPic = "../../upload/" . $_REQUEST["masterkey"] . "/pictures/" . $Row[4];
  //}
  $valProvince = $Row[5];
  $valSex = $Row[6];
  $valHistory = json_decode($Row['history'], true);
  $valAcademy = rechangeQuot(array_slice($valHistory['school'], 0, 1)[0]);
  // $valQualification=rechangeQuot($Row[24]);
  $valQualification = rechangeQuot(array_slice($valHistory['graduation'], 0, 1)[0]);
  // $valEduyear=rechangeQuot($Row[25]);
  $valEduyear = rechangeQuot(array_slice($valHistory['yearfrom'], 0, 1)[0]) . " - " . rechangeQuot(array_slice($valHistory['yearto'], 0, 1)[0]);
  // $valGpa=rechangeQuot($Row[26]);
  $valGpa = rechangeQuot(array_slice($valHistory['gpa'], 0, 1)[0]);
  // print_pre($valHistory);
  $valEdu = array_slice($valHistory['grade'], 0, 1)[0];

  $valSalary = number_format($Row[8]);
  $valEmail = rechangeQuot($Row[9]);
  $valMobile = rechangeQuot($Row[10]);
  $valPosition1 = rechangeQuot($Row[11]);
  $valamphur = $Row[12];
  $valdistrict = $Row[13];
  $valZipcode = $Row[14];
  $valBdate = dateFormatReal($Row[15]);
  $valAddress = json_decode($Row[28], true);
  $valReligion = $Row[18];
  $valLove = $Row[19];
  $valW = rechangeQuot($Row[20]);
  $valH = rechangeQuot($Row[21]);
  $valArmy = $Row[22];
  //	$valAcademy=rechangeQuot($Row[23]);
  //$valQualification=rechangeQuot($Row[24]);
  //	$valEduyear=rechangeQuot($Row[25]);
  //$valGpa=rechangeQuot($Row[26]);
  $valSpecial = rechangeQuot($Row[27]);
  $valFileName = $Row[29];
  $valFileNameShow = $Row[29];
  $valNationality = $Row[30];
  $valAge = $Row['age'];
  $valRace = $Row['race'];
  $valPositionID = $Row['positionID'];
  $valNationcard = json_decode($Row['nationcard'], true);
  $valNationcardID = rechangeQuot($valNationcard['id']);
  $valNationcardBY = rechangeQuot($valNationcard['by']);
  $valNationcardProvince = rechangeQuot($valNationcard['provin']);
  $valRelationparent = rechangeQuot($Row['relationparent']);
  $valFather = json_decode($Row['father'], true);
  $valMother = json_decode($Row['mother'], true);
  $arrBrother = json_decode($Row['brother'], true);
  $index = 0;
  foreach ($arrBrother as $key => $value) {
    foreach ($value as $keyinner => $valueinner) {
      $valBrothers[$keyinner][$key] = $valueinner;
    }
    $index++;
  }

  $valMate = json_decode($Row['mate'], true);

  $valWork = json_decode($Row['work'], true);
  foreach ($valWork as $key => $value4) {
    foreach ($value4 as $keyinner4 => $valueinner4) {
      $valWorkfrom[$keyinner4][$key] = $valueinner4;
    }
  }
  $vallanguageAbility = json_decode($Row['languageAbility'], true);

  foreach ($vallanguageAbility as $key => $value) {
    foreach ($value as $keyinner => $valueinner) {
      $vallangฺAb[$keyinner][$key] = $valueinner;
    }
  }
  $valPrintt = rechangeQuot($Row['wordsTh']);
  $valPrinte = rechangeQuot($Row['wordsEng']);
  $valprogram = $Row['program'];
  $valSpecial = rechangeQuot($Row['talent']);
  $valCar = $Row['vehicle'];
  $valDriv = $Row['driver'];
  $valBlood = $Row['blood'];
  $valDriving = json_decode($Row['driverOther']);
  $valRef = json_decode($Row['refperson'], true);
  foreach ($valRef as $key => $value2) {
    foreach ($value2 as $keyinner => $valueinner) {
      $valRefperson[$keyinner][$key] = $valueinner;
    }
  }
  $valgeneral = json_decode($Row['general']);

  $valTran = json_decode($Row['training'], true);
  foreach ($valTran as $key => $value5) {
    foreach ($value5 as $keyinner => $valueinner) {
      $valTranfrom[$keyinner][$key] = $valueinner;
    }
  }
  ?>

  <table width="740" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td style="font-size:12px;" valign="top">
        <table width="740" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="193" height="160" valign="top"><img src="<?php echo  "./img/logo-img.png" ?>" width="100" height="100" /></td>
            <td width="290" align="center" valign="top">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center"><span style="font-size:16px;">APPLICATION FOR EMPLOYMENT</span></td>
                </tr>
                <tr>
                  <td align="center" height="10"></td>
                </tr>
                <tr>
                  <td align="center"><span style="font-size:16px;">ใบสมัครงาน</span></td>
                </tr>
                <tr>
                  <td align="center" height="25"></td>
                </tr>
                <tr>
                  <td align="center"><span style="font-size:12px;">กรอกข้อมูลด้วยตัวท่านเอง</span></td>
                </tr>
                <tr>
                  <td align="center" height="10"></td>
                </tr>
                <tr>
                  <td align="center"><span style="font-size:12px;">(To be completed in own handwriting) </span></td>
                </tr>

              </table>

            </td>
            <td width="150" colspan="2" align="right" valign="top">
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="150" align="right"><img src="<?php echo $valPic ?>" width="150" /></td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td height="10" colspan="4"></td>

          </tr>

        </table>
      </td>
    </tr>
    <tr>
      <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="30" colspan="5">
              <table width="740" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["ep:name"] ?></span></td>
                  <td style="border-bottom:#999999 dotted 1px;" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $valName ?></span></td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["ep:select"] ?></span> </td>
            <td width="250" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php
                                                                                                                                  $sql = "SELECT " . $mod_tb_root . "_id," . $mod_tb_root . "_subject FROM " . $mod_tb_root;
                                                                                                                                  $sql = $sql . "  WHERE " . $mod_tb_root . "_masterkey ='" . $_REQUEST['masterkey'] . "'  and " . $mod_tb_root . "_id = '" . $valPosition1 . "'";
                                                                                                                                  $query = wewebQueryDB($coreLanguageSQL, $sql);

                                                                                                                                  $Row = wewebFetchArrayDB($coreLanguageSQL, $query);
                                                                                                                                  $valNameCareer = $Row[1];
                                                                                                                                  echo $valNameCareer

                                                                                                                                  ?></span></td>
            <td width="110" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:money"] ?></span></td>
            <td width="230" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valSalary ?></span></td>
            <td width="65" align="left" valign="bottom">&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:bam"] ?></span></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td height="20"></td>
    </tr>
    <tr>
      <td height="35" style="border-bottom:#999999 solid 1px;">
        <span style="font-size:16px;"><?php echo $langMod["txt:regis"] ?></span>
      </td>
    </tr>
    <tr>
      <td height="20">
        <table width="740" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:date"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valBdate ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo "อายุ" ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valAge ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:nationality"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valNationality ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:religion"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valReligion ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo "เชื้อชาติ" ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valRace ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:blood"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valBlood ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo "เลขที่บัตรประชาชน" ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valNationcardID ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo "ที่อยู่ตามบัตรประชาชน" ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valPositionID ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo "ออกให้โดย" ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valNationcardBY ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo "จังหวัด" ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valNationcardProvince ?></span></td>
          </tr>
          <tr>
            <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["ep:address"] ?></span></td>
            <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
                <?php echo $valAddress['addressNo'] ?>
                หมู่ <?php echo $valAddress['addressMoo'] ?>
                หมู่บ้าน <?php echo $valAddress['addressVillage'] ?>
                ซอย <?php echo $valAddress['addressAlley'] ?>
                ถนน <?php echo $valAddress['addressRoad'] ?>
                ตำบล <?php echo loadNameDis($valdistrict) ?>
                อำเภอ <?php echo loadNameAmp($valamphur) ?>
                <?php echo $langMod["ep:province"] ?> <?php echo loadNameProvince($valProvince) ?>
                <?php echo $langMod["ep:zipcode"] ?> <?php echo $valZipcode ?>

          </tr>
          <tr>
            <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:province"] ?></span></td>
            <td width="250" height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo loadNameProvince($valProvince) ?></span></td>
            <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:zipcode"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valZipcode ?></span></td>
          </tr>
          <tr>
            <!--<td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:tel"] ?></span></td>
<td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valTel ?></span></td>-->
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:email"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valEmail ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:mobile"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMobile ?></span></td>
          </tr>


          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:sex"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $modTxtSexThai[$valSex] ?></span>&nbsp;</td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:army"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valArmy ?></span>&nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>


    <tr>
      <td height="20"></td>
    </tr>
    <tr>
      <td height="35" style="border-bottom:#999999 solid 1px;">
        <span style="font-size:16px;"><?php echo "สถานภาพครอบครัว" ?></span>
      </td>
    </tr>

    <tr>
      <td height="20">
        <table width="740" border="0" cellspacing="0" cellpadding="0">

          <tr>
            <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:status"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><span style=""><?php echo $valLove ?></span></span>&nbsp;</td>
            <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:parent"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"> <?php echo $valRelationparent ?></span></td>
          </tr>

          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["father:name"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFather['prefix'] . " " . $valFather['fname'] . " " . $valFather['lname'] ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["father:age"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFather['age'] ?></span></td>
          </tr>

          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["father:job"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFather['occupation'] ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["father:office"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFather['office'] ?></span></td>
          </tr>

          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["father:bdate"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo dateFormatReal($valFather['yearbirth'] . '/' . $valFather['monthbirth'] . '/' . $valFather['daybirth']) ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["father:tel"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFather['tel'] ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["father:status"]; ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;">
              <span style="font-size:12px;">
                <?php if ($valFather['status'] == 'Live' || $valFather['status'] == 'มีชีวิต') { ?>
                  <?php echo $valFather['status']; ?>
                <?php } else { ?>
                  <?php echo $valFather['status']; ?> เมื่อ <?php echo $valFather['daydie'] . '/' . $valFather['monthdie'] . '/' . $valFather['yeardie']; ?>
                <?php } ?>
              </span>
            </td>
            <td height="35" valign="bottom" align="left"></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"></td>
          </tr>

          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["mother:name"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMother['prefix'] . " " . $valMother['fname'] . " " . $valMother['lname'] ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["mother:age"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMother['age'] ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["mother:job"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMother['occupation'] ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["mother:office"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMother['office'] ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["mother:bdate"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo dateFormatReal($valMother['yearbirth'] . '/' . $valMother['monthbirth'] . '/' . $valMother['daybirth']) ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["mother:tel"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMother['tel'] ?></span></td>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["mother:status"]; ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;">
              <span style="font-size:12px;">
                <?php if ($valMother['status'] == 'Live' || $valFather['status'] == 'มีชีวิต') { ?>
                  <?php echo $valMother['status']; ?>
                <?php } else { ?>
                  <?php echo $valMother['status']; ?> เมื่อ <?php echo $valMother['daydie'] . '/' . $valMother['monthdie'] . '/' . $valMother['yeardie']; ?>
                <?php } ?>
              </span>
            </td>
            <td height="35" valign="bottom" align="left"></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"></td>
          </tr>

    </tr>
    <?php foreach ($valBrothers as $key => $valBrother) { ?>
      <tr>
        <td height="50" valign="bottom" align="left"><span style="font-size:12px;"><?php echo "ชื่อพี่น้องคนที่" . $key ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valBrother['prefix'] . " " . $valBrother['fname'] . " " . $valBrother['lname'] ?></span></td>
        <td height="50" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["brother:age"] . $key ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valBrother['age'] ?></span></td>

      </tr>
      <tr>
        <td height="50" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["brother:job"] . $key ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valBrother['occupation'] ?></span></td>
        <td height="50" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo "ที่ทำงานพี่น้องคนที่" . $key ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valBrother['office'] ?></span></td>

      </tr>

      <tr>
        <td height="50" valign="bottom" align="left"><span style="font-size:12px;"><?php echo "เบอร์พี่น้องคนที่" . $key ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"> <?php echo $valBrother['tel'] ?></span></td>
        <td height="50" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["brother:bdate"] . $key ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo dateFormatReal($valBrother['yearbirth'] . '/' . $valBrother['monthbirth'] . '/' . $valBrother['daybirth']) ?></span></td>
      </tr>

      <tr>
        <td height="50" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["brother:status"] . $key ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;">
          <span style="font-size:12px;">
            <?php if ($valBrother['status'] == "Live" || $valBrother['status'] == 'มีชีวิต') { ?>
              <?php echo $valBrother['status'] ?>
            <?php } else { ?>
              <?php echo $valBrother['status'] ?> เมื่อ <?php echo dateFormatReal($valBrother['yeardie'] . '/' . $valBrother['monthdie'] . '/' . $valBrother['daydie']) ?>
            <?php } ?>
          </span>
        </td>
      </tr>

    <?php } ?>

    <?php if ($valLove == "แต่งงาน" || $valLove == "แยกกันอยู่") { ?>
      <tr>
        <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["mate:name"] ?></span></td>
        <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMate['prefix'] . " " . $valMate['fname'] . " " . $valMate['lname'] ?></span></td>
        <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["mate:age"] ?></span></td>
        <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMate['age'] ?></span></td>

      </tr>
      <tr>
        <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["mate:job"]  ?></span></td>
        <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMate['occupation'] ?></span></td>
        <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["mate:office"] ?></span></td>
        <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMate['office'] ?></span></td>

      </tr>
      <tr>
        <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["mate:tel"] ?></span></td>
        <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"> <?php echo $valMate['tel'] ?></span></td>
        <td height="35" valign="bottom" align="left"></td>
        <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"></td>

      </tr>
    <?php } ?>


  </table>
  </td>
  </tr>

  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td height="35" style="border-bottom:#999999 solid 1px;">
      <span style="font-size:16px;"><?php echo $langMod["txt:regis3"] ?></span>
    </td>
  </tr>

  <tr>
    <td height="20">
      <table width="740" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["ep:edu"] ?></span></td>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valEdu ?></span></td>
        </tr>
        <tr>
          <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:academy"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><span style=""><?php echo $valAcademy ?></span></span>&nbsp;</td>
          <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:qualification"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valQualification ?></span></td>
        </tr>

        <tr>
          <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:eduYear"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valEduyear ?></span></td>
          <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:gpa"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valGpa ?></span></td>
        </tr>
      </table>
    </td>
  </tr>

  <?php if ($valWorkfrom != "") { ?>
    <tr>
      <td height="20"></td>
    </tr>
    <tr>
      <td height="35" style="border-bottom:#999999 solid 1px;">
        <span style="font-size:16px;"><?php echo $langMod["txt:regis8"] ?></span>
      </td>
    </tr>

    <tr>
      <td height="20">
        <table width="740" border="0" cellspacing="0" cellpadding="0">
          <?php
          $index = 1;
          foreach ($valWorkfrom as $work) {
          ?>
            <tr>
              <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;">ระยะเวลาทำงาน <?php echo $index; ?></span></td>
              <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
                  <?php echo "เดือน " . $work['Workmonthfrom'] . " ปี " . $work['Workyearfrom'] ?> ถึง <?php echo "เดือน " . $work['Workmonthto'] . " ปี " . $work['Workyearto'] ?>
                </span></td>
            </tr>
            <tr>
              <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;">บริษัท <?php echo $index; ?></span></td>
              <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><span style="">
                    <?php echo $work['Office']; ?>
                  </span></span>&nbsp;</td>
              <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">ตำแหน่ง <?php echo $index; ?></span></td>
              <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"> <?php echo $work['Workposition']; ?></td>
            </tr>

            <tr>
              <td height="35" valign="bottom" align="left"><span style="font-size:12px;">อัตราจ้าง <?php echo $index; ?></span></td>
              <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $work['Worksaraly'] . " " . $langMod["ep:bam"]; ?></span></td>
              <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">เหตุผลที่ลาออก <?php echo $index; ?></span></td>
              <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $work['WorkNote']; ?></span></td>
            </tr>
          <?php $index++; ?>
          <?php } ?>
        </table>
      </td>
    </tr>
  <?php } ?>
  <?php if ($valTranfrom != "") { ?>
    <tr>
      <td height="20"></td>
    </tr>
    <tr>
      <td height="35" style="border-bottom:#999999 solid 1px;">
        <span style="font-size:16px;"><?php echo $langMod["txt:regis9"] ?></span>
      </td>
    </tr>

    <tr>
      <td height="20">
        <table width="740" border="0" cellspacing="0" cellpadding="0">
          <?php
          $index = 1;
          foreach ($valTranfrom as $tran) {
          ?>
            <tr>
              <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;">บริษัท <?php echo $index; ?></span></td>
              <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
                <?php echo $tran['office']; ?>

                </span></td>
              <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">หลักสูตร <?php echo $index; ?></span></td>
              <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
                  <?php echo $tran['education']; ?></span></td>
            </tr>

            <tr>
              <td height="35" valign="bottom" align="left"><span style="font-size:12px;">วุฒิที่ได้ <?php echo $index; ?></span></td>
              <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
                  <?php echo $tran['cert']; ?></span></td>
              <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">ระยะเวลา <?php echo $index; ?></span></td>
              <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
                  <?php echo $tran['time']; ?></span></td>
            </tr>
            <?php $index++; ?>
          <?php } ?>
        </table>
      </td>
    </tr>
  <?php } ?>


  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td height="35" style="border-bottom:#999999 solid 1px;">
      <span style="font-size:16px;"><?php echo $langMod["txt:regis5"] ?></span>
    </td>
  </tr>

  <tr>
    <td height="20">
      <table width="740" border="0" cellspacing="0" cellpadding="0">
        <?php foreach ($vallangฺAb as $languageAbility) { ?>

          <tr>
            <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;">ทักษะภาษา<?php echo $languageAbility['laguage'] ?></span></td>

            <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
                <?php echo $langMod["ep:ts"] ?>(<?php echo $languageAbility['tell'] ?>)
                <?php echo $langMod["ep:tw"] ?>(<?php echo $languageAbility['write']  ?>)
                <?php echo $langMod["ep:tr"] ?>(<?php echo $languageAbility['read'] ?>)

              </span></td>
          </tr>
        <?php } ?>
        <tr>
          <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;">พิมพ์ดีดไทย</span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><span style="">
                <?php echo $valPrintt ?> (คำ / นาที)
              </span></span>&nbsp;</td>
          <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;">พิมพ์ดีดอังกฤษ</span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"> <?php echo $valPrinte ?> (คำ / นาที)</td>
        </tr>


        <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;">ทักษะคอมพิวเตอร์</span></td>
        <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
            <?php echo $valprogram ?>

          </span></td>
  </tr>
  <tr>
    <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["ep:special"] ?></span></td>
    <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
        <?php if ($valSpecial != "") {
          echo $valSpecial;
        } else {
          echo "-";
        } ?>


      </span></td>
  </tr>


  <tr>
    <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;">ขับรถยนต์</span></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><span style="">
          <?php echo $valDriv ?>
        </span></span>&nbsp;</td>
    <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:car"] ?></span></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"> <?php echo $valCar ?></td>
  </tr>
  <tr>
    <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:driving"] ?></span></td>
    <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valDriving->drivCard ?> <?php echo $valDriving->id ?></span></td>
    <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"></span></td>
    <td height="35" align="left" valign="bottom" style=" dotted 1px;"><span style="font-size:12px;"></span></td>
  </tr>


  <?php $i = 1; ?>
  <?php foreach ($valRefperson as $Refperson) { ?>
    <tr>
      <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["ep:ref"] ?><?php echo $i; ?></span></td>
      <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
          <?php echo "ชื่อ: " . $Refperson['name'] . "  ตำแหน่ง: " . $Refperson['position'] . "  ที่ทำงาน: " . $Refperson['office'] . "  เบอร์โทร: " . $Refperson['tel'] ?>

        </span></td>
    </tr>
  <?php $i++;
  } ?>






  </table>
  </td>
  </tr>
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td height="35" style="border-bottom:#999999 solid 1px;">
      <span style="font-size:16px;"><?php echo "คำถามอื่นๆ"; ?></span>
    </td>
  </tr>
  <tr>
    <td height="20">
      <table width="740" border="0" cellspacing="0" cellpadding="0">

        <tr>
          <td height="20"></td>
        </tr>
        <tr>

          <td height="35" align="left" valign="bottom"><span style="font-size:12px;"><span style="font-size:12px;">
                <?php echo "ท่านมีความบกพร่องของร่างกาย หรือเป็นโรงติดต่อเรื้อรังที่เป็นอุปสรรค์ต่อการทำงานหรือไม่"; ?>
              </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
              <?php echo $valgeneral->deformed . " " . $valgeneral->deformedref . " ";  ?>

            </span></td>
        </tr>

        <tr>
          <td height="35" align="left" valign="bottom"><span style="font-size:12px;"><span style="font-size:12px;">
                <?php echo "ท่ายเคยเจ็บป่วยหรือได้รับอุบัติเหตุจนต้องเข้ารับการรักษาในโรงพยาบาลหรือไม่"; ?>
              </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
              <?php echo $valgeneral->accident . " " . $valgeneral->accidentref . " ";  ?>

            </span></td>
        </tr>

        <tr>
          <td height="35" align="left" valign="bottom"><span style="font-size:12px;"><span style="font-size:12px;">
                <?php echo "สุขภาพโดยทั่วไปของท่าน"; ?>
              </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
              <?php echo $valgeneral->health;  ?>

            </span></td>
        </tr>

        <tr>
          <td height="35" align="left" valign="bottom"><span style="font-size:12px;"><span style="font-size:12px;">
                <?php echo "ท่ายเคยถูกพิพากษาให้เป็นบุคคลล้มละลาย หรือทำผิดทางอาญาหรือไม่"; ?>
              </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
              <?php echo $valgeneral->doom . " " . $valgeneral->doomref . " ";  ?>

            </span></td>
        </tr>


        <tr>
          <td height="35" align="left" valign="bottom"><span style="font-size:12px;"><span style="font-size:12px;">
                <?php echo "ท่านเคยถูกไล่ออกจากงานด้วยกรณีใดๆ หรือไม่"; ?>
              </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
              <?php echo $valgeneral->resign . " " . $valgeneral->resignref . " ";  ?>

            </span></td>
        </tr>


        <tr>
          <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;">
              <?php echo "ท่านมีเพื่อนหรือญาติทำงานที่บริษัทนี้หรือไม่"; ?>
            </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
              <?php echo $valgeneral->relation . " " . $valgeneral->relationref . " ";  ?>

            </span></td>
        </tr>


        <tr>
          <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;">
              <?php echo "ท่านรับทราบข่าวการสมัครงานของบริษัทจากช่องทางใด"; ?>
            </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
              <?php if ($valgeneral->job1) {
                echo $valgeneral->job1 . ",";
              } ?>
              <?php if ($valgeneral->job2) {
                echo $valgeneral->job2 . ",";
              } ?>
              <?php if ($valgeneral->job3) {
                echo $valgeneral->job3 . ",";
              } ?>
              <?php if ($valgeneral->job4) {
                echo $valgeneral->job4 . ",";
              } ?>
              <?php if ($valgeneral->job5) {
                echo $valgeneral->job5 . ":";
              } ?>
              <?php if ($valgeneral->jobref) {
                echo $valgeneral->jobref;
              } ?>

            </span></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height="20"></td>
  </tr>

  </table>
</body>

</html>

<?php
if (!is_dir($core_pathname_upload . "/" . $_REQUEST['masterkey'])) {
  mkdir($core_pathname_upload . "/" . $_REQUEST['masterkey'], 0777);
}
if (!is_dir($mod_path_resume)) {
  mkdir($mod_path_resume, 0777);
}

// $valNamePdf = iconv('UTF-8', 'CP874', '' . $_GET['valEditID'] . '_' . $_GET['nID'] . '');

$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF('th', 'A4', '0', 'THSaraban');
$pdf->SetAutoFont();
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html, 2);
//$pdf->Output(''..$valNamePdf.'.pdf','I');
$pdf->Output('' . $mod_path_resume . '/resume_' . $_GET['valEditID'] . '.pdf', 'F');

$downloadFile = 'resume_' . $_GET['valEditID'] . '.pdf';
$linkPath = $mod_path_resume . '/resume_' . $_GET['valEditID'] . '.pdf';
$downloadFileName = 'resume_' . $_GET['nID'] . '';
$filename = explode(".", $linkPath);
$file_extension = $filename[count($filename) - 1];
$myDateArray = explode(".", $downloadFile);
header("Content-type: application/" . $file_extension);
header("Content-Disposition: attachment; filename=" . $downloadFileName . "." . $file_extension);
echo readfile($linkPath);
?>

<?php
// $html = ob_get_contents();
// ob_end_clean();
//
//print_pre($html);
//
//header("Content-disposition: attachment; filename=filename.pdf");
//header("Content-type: application/pdf");
//
// $pdf = new mPDF('th', 'A4-L', '0', 'THSaraban'); //การตั้งค่ากระดาษถ้าต้องการแนวตั้ง ก็ A4 เฉยๆครับ ถ้าต้องการแนวนอนเท่ากับ A4-L
// $pdf->SetAutoFont();
// $pdf->SetDisplayMode('fullpage');
// $pdf->WriteHTML($html, 2);
// $pdf->Output("report_member_". date('Y-m-d')." .pdf", "D");
?>