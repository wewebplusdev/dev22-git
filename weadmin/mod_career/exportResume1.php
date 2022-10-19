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
  $sql = "SELECT 
        " . $mod_tb_apply . "_id              as id,
        " . $mod_tb_apply . "_name            as name,   
        " . $mod_tb_apply . "_credate         as credate, 
				" . $mod_tb_apply . "_status          as status, 
        " . $mod_tb_apply . "_pic             as pic,        
				" . $mod_tb_apply . "_province        as province, 
				" . $mod_tb_apply . "_sex             as sex, 
        " . $mod_tb_apply . "_salary          as salary, 
        " . $mod_tb_apply . "_email           as email, 
				" . $mod_tb_apply . "_jID             as jID,
				" . $mod_tb_apply . "_prefix          as prefix,

				" . $mod_tb_apply . "_info             as info,
				" . $mod_tb_apply . "_general             as general,
				" . $mod_tb_apply . "_address             as address,
				" . $mod_tb_apply . "_military             as military,
				" . $mod_tb_apply . "_emergency             as emergency,
				" . $mod_tb_apply . "_family             as family,
				" . $mod_tb_apply . "_brother             as brother,
				" . $mod_tb_apply . "_education             as education,
				" . $mod_tb_apply . "_training             as training,
				" . $mod_tb_apply . "_workhistory             as workhistory,
				" . $mod_tb_apply . "_language             as language,
				" . $mod_tb_apply . "_information             as information,
				" . $mod_tb_apply . "_reference             as reference,
				" . $mod_tb_apply . "_comment             as comment,
				" . $mod_tb_apply . "_sdate             as sdate,
				" . $mod_tb_root . "_subject             as subject ";

  $sql .= " FROM " . $mod_tb_apply . "
  INNER JOIN  " . $mod_tb_root . "  ON " . $mod_tb_root . "." . $mod_tb_root . "_id=" . $mod_tb_apply . "." . $mod_tb_apply . "_jID
   WHERE " . $mod_tb_apply . "_masterkey='" . $_REQUEST["masterkey"] . "'  AND  " . $mod_tb_apply . "_id='" . $_REQUEST['valEditID'] . "' ";
  // print_pre($sql);
$Query = wewebQueryDB($coreLanguageSQL, $sql);
$Row = wewebFetchArrayDB($coreLanguageSQL, $Query);
$valID = $Row[0];
$valName = rechangeQuot($Row[1]);
$valCredate = DateFormat($Row[2]);
$valStatus = $Row[3];
if ($valStatus == "Enable") {
  $valStatusClass =  "fontContantTbDisable";
} else {
  $valStatusClass =  "fontContantTbEnable";
}
$valPicName = $Row[4];
$valPic = $mod_path_pictures . "/" . $Row[4];
$valProvince = $Row[5];
$valSex = $Row[6];
$valSalary = number_format($Row[7]);
$valEmail = rechangeQuot($Row[8]);
$valPosition1 = rechangeQuot($Row[9]);
$valStartDate = dateFormatReal($Row['sdate']);

$valGeneral = json_decode($Row['general'], true);
$valAddress = json_decode($Row['address'], true);
$valBdate = $valGeneral['bday'] . "/" . $valGeneral['bmonth'] . "/" . $valGeneral['byear'];
$valMilitary = json_decode($Row['military'], true);
$valEmergency = json_decode($Row['emergency'], true);
$valFamily = json_decode($Row['family'], true);
$valBrothers = json_decode($Row['brother'], true);
$valEducation = json_decode($Row['education'], true);
$valTraining = json_decode($Row['training'], true);
$valWorkhistory = json_decode($Row['workhistory'], true);
$valLanguage = json_decode($Row['language'], true);
$valInformation = json_decode($Row['information'], true);
$valReference = json_decode($Row['reference'], true);
$valReference2 = json_decode($Row['reference'], true);
// print_pre($valReference);
  ?>

  <table width="740" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td style="font-size:12px;" valign="top">
        <table width="740" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="193" height="160" valign="top"><img src="<?php echo  "./img/git-logo.png" ?>" width="100" height="100" /></td>
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
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:w"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valGeneral['weight'] ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:h"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valGeneral['height'] ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:sex"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valGeneral['sex'] ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ca:iden"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valAddress['identification'] ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:creat"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valAddress['issued-at'] ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ca:exp"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valAddress['expiry-date'] ?></span></td>
            <!-- <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:military"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMilitary['status'];
                                      if ($valMilitary['status'] == 'อื่นๆ') {
                                        echo " อื่นๆ : " . $valMilitary['other'];
                                      } ?></span></td> -->
          </tr>
          <tr>
            <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["ep:address"] ?></span></td>
            <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
                <?php echo $valAddress['housenumber'] ?>
                หมู่ <?php echo $valAddress['moo'] ?>
                หมู่บ้าน <?php echo $valAddress['village'] ?>
                ซอย <?php echo $valAddress['alley'] ?>
                ถนน <?php echo $valAddress['road'] ?>
                ตำบล <?php echo loadNameDis($valAddress['subdictrict']) ?>
                อำเภอ <?php echo loadNameAmp($valAddress['district']) ?>
                <?php echo $langMod["ep:province"] ?> <?php echo loadNameProvince($valAddress['province']) ?>
                <?php echo $langMod["ep:zipcode"] ?> <?php echo $valAddress['postcode'] ?>

          </tr>
          <tr>
            <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["ep:addressnow"] ?></span></td>
            <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
                <?php echo $valAddress['housenumbernow'] ?>
                หมู่ <?php echo $valAddress['moonow'] ?>
                หมู่บ้าน <?php echo $valAddress['villagenow'] ?>
                ซอย <?php echo $valAddress['alleynow'] ?>
                ถนน <?php echo $valAddress['roadnow'] ?>
                ตำบล <?php echo loadNameDis($valAddress['subdictrictnow']) ?>
                อำเภอ <?php echo loadNameAmp($valAddress['districtnow']) ?>
                <?php echo $langMod["ep:province"] ?> <?php echo loadNameProvince($valAddress['provincenow']) ?>
                <?php echo $langMod["ep:zipcode"] ?> <?php echo $valAddress['postcodenow'] ?>

          </tr>
          <tr>
            <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:province"] ?></span></td>
            <td width="250" height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo loadNameProvince($valAddress['provincenow']) ?></span></td>
            <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:zipcode"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valAddress['postcodenow'] ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:email"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valEmail ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:mobile"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valAddress['telmobile'] ?></span></td>
          </tr>


          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:sex"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valSex ?></span>&nbsp;</td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:military"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valMilitary['status'];
                                      if ($valMilitary['status'] == 'อื่นๆ') {
                                        echo " อื่นๆ : " . $valMilitary['other'];
                                      } ?></span></td>
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
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:name"] . $langMod["family:first"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFamily['fname1'] . " " . $valFamily['lname1'] ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["father:age"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFamily["age1"] ?></span></td>
          </tr>

          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ca:relations"] . $langMod["family:first"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFamily["relations1"] ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:addwork"] . $langMod["family:first"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFamily["address1"] ?></span></td>
          </tr>

          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:bdate"] . $langMod["family:first"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo dateFormatReal($valFamily['bday1'] . "/" . $valFamily['bmonth1'] . "/" . $valFamily['byear1']) ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:tel"] . $langMod["family:first"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFamily["tel1"] ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["family:status"] . $langMod["family:first"]; ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;">
              <span style="font-size:12px;">
                <?php if ($valFamily['alive1'] == 'Live' || $valFamily['alive1'] == 'มีชีวิต') { ?>
                  <?php echo $valFamily['alive1']; ?>
                <?php } else { ?>
                  <?php echo $valFamily['alive1']; ?> เมื่อ <?php echo ($valFamily['dday1'] . '/' . $valFamily['dmonth1'] . '/' . $valFamily['dyear1']); ?>
                <?php } ?>
              </span>
            </td>
            <td height="35" valign="bottom" align="left"></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"></td>
          </tr>

          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:name"] . $langMod["family:seconde"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFamily['fname1'] . " " . $valFamily['lname1'] ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["father:age"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFamily["age1"] ?></span></td>
          </tr>

          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ca:relations"] . $langMod["family:seconde"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFamily["relations1"] ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:addwork"] . $langMod["family:seconde"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFamily["address1"] ?></span></td>
          </tr>

          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:bdate"] . $langMod["family:seconde"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo dateFormatReal($valFamily['bday1'] . "/" . $valFamily['bmonth1'] . "/" . $valFamily['byear1']) ?></span></td>
            <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:tel"] . $langMod["family:seconde"] ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valFamily["tel1"] ?></span></td>
          </tr>
          <tr>
            <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["family:status"] . $langMod["family:seconde"]; ?></span></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;">
              <span style="font-size:12px;">
                <?php if ($valFamily['alive2'] == 'Live' || $valFamily['alive2'] == 'มีชีวิต') { ?>
                  <?php echo $valFamily['alive2']; ?>
                <?php } else { ?>
                  <?php echo $valFamily['alive2']; ?> เมื่อ <?php echo $valFamily['dday2'] . '/' . $valFamily['dmonth2'] . '/' . $valFamily['dyear2']; ?>
                <?php } ?>
              </span>
            </td>
            <td height="35" valign="bottom" align="left"></td>
            <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"></td>
          </tr>

    </tr>
    <?php $indexBro = 1; ?>
    <?php unset($valBrothers['main']); ?>
    <?php foreach ($valBrothers as $key => $valBrother) { ?>
      <tr>
        <td height="50" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["brother:name"] . $indexBro ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valBrother['fname'] . " " . $valBrother['lname'] ?></span></td>
        <td height="50" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["brother:bdate"] . $indexBro ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo dateFormatReal($valBrother['byear'] . '/' . $valBrother['bmonth'] . '/' . $valBrother['bdaty']); ?></span></td>

      </tr>
      <tr>
        <td height="50" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["brother:age"] . $indexBro ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valBrother['age'] ?></span></td>
        <td height="50" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:relations"] . $indexBro ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valBrother["relations"] ?></span></td>

      </tr>

      <tr>
        <td height="50" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ca:addwork"] . $indexBro ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"> <?php echo $valBrother['address'] ?></span></td>
        <td height="50" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["brother:tel"] . $indexBro ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">&nbsp;<?php echo $valBrother['tel'] ?></span></td>
      </tr>

      <tr>
        <td height="50" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["brother:status"] . $indexBro ?></span></td>
        <td height="30" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;">
          <span style="font-size:12px;">
            <?php if ($valBrother['alive'] == "Live" || $valBrother['alive'] == 'มีชีวิต') { ?>
              <?php echo $valBrother['alive'] ?>
            <?php } else { ?>
              <?php echo $valBrother['alive'] ?> เมื่อ <?php echo dateFormatReal($valBrother['dday'] . '/' . $valBrother['dmonth'] . '/' . $valBrother['dyear']) ?>
            <?php } ?>
          </span>
        </td>
      </tr>
    <?php $indexBro++; ?>
    <?php } ?>

  </table>
  </td>
  </tr>

  <?php if(count($valEducation) > 0){ ?>
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td height="35" style="border-bottom:#999999 solid 1px;">
      <span style="font-size:16px;"><?php echo $langMod["txt:regis3"] ?></span>
    </td>
  </tr>
  <?php $indexEdu = 1; ?>
  <?php foreach ($valEducation as $key => $valEducations) { ?>
  <tr>
    <td height="20">
      <table width="740" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="115" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["ep:edu"]." ".$indexEdu ?></span></td>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valEducations['level'] ?></span></td>
        </tr>
        <tr>
          <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:academy"]." ".$indexEdu ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><span style=""><?php echo $valEducations['academy-name'] ?></span></span>&nbsp;</td>
          <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:from"]." ".$indexEdu ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valEducations['from'] ?></span></td>
        </tr>

        <tr>
          <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:qualification"]." ".$indexEdu ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valEducations['majors'] ?></span></td>
          <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:background"]." ".$indexEdu ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valEducations['educational-background'] ?></span></td>
        </tr>

        <tr>
          <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:eduYear"]." ".$indexEdu ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valEducations['education-end'] ?></span></td>
          <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:gpa"]." ".$indexEdu ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valEducations['grade'] ?></span></td>
        </tr>
      </table>
    </td>
  </tr>
  <?php $indexEdu++; ?>
  <?php } ?>
  <?php } ?>


  <?php if(count($valTraining) > 0){ ?>
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td height="35" style="border-bottom:#999999 solid 1px;">
      <span style="font-size:16px;"><?php echo $langMod["txt:training"] ?></span>
    </td>
  </tr>
  <?php $indexTra = 1; ?>
  <?php foreach ($valTraining as $key => $valTrainings) { ?>
  <tr>
    <td height="20">
      <table width="740" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:trainingname"]." ".$indexTra ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><span style=""><?php echo $valTrainings['course'] ?></span></span>&nbsp;</td>
          <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:traininginstitute"]." ".$indexTra ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valTrainings['institute'] ?></span></td>
        </tr>

        <tr>
          <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:trainingdegree"]." ".$indexTra ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valTrainings['degree'] ?></span></td>
          <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:trainingperiod"]." ".$indexTra ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valTrainings['period'] ?> <?php echo $langMod["ep:trainingyear"]." ".$valTrainings['training-start']." - ".$valTrainings['training-end']; ?></span></td>
        </tr>
      </table>
    </td>
  </tr>
  <?php $indexEdu++; ?>
  <?php } ?>
  <?php } ?>


  <?php if(count($valWorkhistory) > 0){ ?>
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td height="35" style="border-bottom:#999999 solid 1px;">
      <span style="font-size:16px;"><?php echo $langMod["txt:regis8"] ?></span>
    </td>
  </tr>
  <?php $indexWork = 1; ?>
  <?php foreach ($valWorkhistory as $key => $valWorkhistorys) { ?>
  <tr>
    <td height="20">
      <table width="740" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="115" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["ep:office"]." ".$indexWork ?></span></td>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valWorkhistorys['company'] ?></span></td>
        </tr>
        <tr>
          <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:officetype"]." ".$indexWork ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valWorkhistorys['type'] ?></span></td>
          <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:address"]." ".$indexWork ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valWorkhistorys['address'] ?></span></td>
        </tr>

        <tr>
          <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:tel"]." ".$indexWork ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valWorkhistorys['tel'] ?></span></td>
          <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:firstposition"]." ".$indexWork ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valWorkhistorys['first-position'] ?></span></td>
        </tr>

        <tr>
          <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:lastposition"]." ".$indexWork ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valWorkhistorys['last-position'] ?></span></td>
          <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:lastsalary"] ." ".$indexWork ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valWorkhistorys['last-salary'] ?></span></td>
        </tr>

        <tr>
          <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:incomeother"] ." ".$indexWork ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valWorkhistorys['other'] ?></span></td>
          <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:responsibility"] ." ".$indexWork ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valWorkhistorys['responsibility'] ?></span></td>
        </tr>

        <tr>
          <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ep:trainingperiod"] ." ".$indexWork ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valWorkhistorys['period']; ?> <?php echo $langMod["ep:trainingyear"]." ".$valWorkhistorys['work-start']." - ".$valWorkhistorys['work-end'] ?></span></td>
        </tr>
      </table>
    </td>
  </tr>
  <?php $indexEdu++; ?>
  <?php } ?>
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
        <?php foreach ($valLanguage as $valLanguages) { ?>
          <tr>
          <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $valLanguages['language']."/".$langMod["ep:langlistening"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><span style="">
                <?php echo $valLanguages['listening'] ?> 
              </span></span>&nbsp;</td>
          <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $valLanguages['language']."/".$langMod["ep:langlistening"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"> <?php echo $valPrinte ?></td>
        </tr>


        <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $valLanguages['language']."/".$langMod["ep:langwriting"] ?></span></td>
        <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
            <?php echo $valLanguages['writing'] ?>

          </span></td>
        </tr>
        <?php } ?>

        
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
          <td width="115" height="35" align="left" valign="bottom"><span style="font-size:12px;"><?php echo $langMod["txt:reference"] ?></span></td>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valReference['main']['reference'] ?></span></td>
        </tr>
        <?php $statusRef = $valReference['main']['reference'] ?>
          <?php unset($valReference2['main']); ?>
          <?php if(count($valReference2) > 0 && $statusRef == 'มี'){ ?>
        <?php foreach ($valReference2 as $key => $valReferences) { ?>
        <tr>
          <td width="110" height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:name"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><span style=""><?php echo $valReferences['fname'] ?></span></span>&nbsp;</td>
          <td width="110" height="35" align="left" valign="bottom">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:addwork"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valReferences['address'] ?></span></td>
        </tr>

        <tr>
          <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ep:position1"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valReferences['position'] ?></span></td>
          <td height="35" valign="bottom" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px;"><?php echo $langMod["ca:tel"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valReferences['tel'] ?></span></td>
        </tr>

        <tr>
          <td height="35" valign="bottom" align="left"><span style="font-size:12px;"><?php echo $langMod["ca:relations"] ?></span></td>
          <td height="35" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;"><?php echo $valReferences['relations'] ?></span></td>
        </tr>
        <?php $indexEdu++; ?>
        <?php } ?>
        <?php } ?>
      </table>
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
                <?php echo $langMod["ep:infoworkupcountry"] ?>
              </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
            <?php echo $langMod["ep:infopermanent"]." : ".$valInformation["country-out-permanent"]?>, <?php echo $langMod["ep:infotemporary"]." : ".$valInformation["country-out-temporary"]?>
            </span></td>
        </tr>

        <tr>
          <td height="35" align="left" valign="bottom"><span style="font-size:12px;"><span style="font-size:12px;">
                <?php $langMod["ep:infodisease"]; ?>
              </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
            <?php echo $valInformation['contagious'] ?> <?php if($$valInformation['contagious'] == 'เคย'){ echo "เพราะ ".$valInformation['contagious-other']; } ?>
            </span></td>
        </tr>

        <tr>
          <td height="35" align="left" valign="bottom"><span style="font-size:12px;"><span style="font-size:12px;">
              <?php echo $langMod["ep:infohandicap"] ?>
              </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
            <?php echo $valInformation['contagious'] ?> <?php if($$valInformation['handicap'] == 'มี'){ echo "เพราะ ".$valInformation['handicap-other']; } ?>
            </span></td>
        </tr>

        <tr>
          <td height="35" align="left" valign="bottom"><span style="font-size:12px;"><span style="font-size:12px;">
                <?php echo $langMod["ep:infoquestioning"]; ?>
              </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
            <?php echo $valInformation['investigation'] ?> <?php if($$valInformation['investigation'] == 'เคย เพราะ'){ echo "เพราะ ".$valInformation['investigation-other']; } ?>
            </span></td>
        </tr>


        <tr>
          <td height="35" align="left" valign="bottom"><span style="font-size:12px;"><span style="font-size:12px;">
                <?php echo $langMod["ep:infodischarged"]; ?>
              </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
            <?php echo $valInformation['discharged'] ?> <?php if($$valInformation['discharged'] == 'เคย เพราะ'){ echo "เพราะ ".$valInformation['discharged-other']; } ?>
            </span></td>
        </tr>


        <tr>
          <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;">
              <?php echo $langMod["ep:inforelative"]; ?>
            </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
            <?php echo $valInformation['friend'] ?> <?php if($$valInformation['friend'] == 'เคย เพราะ'){ echo "เพราะ ".$valInformation['friend-other']; } ?>
            </span></td>
        </tr>


        <tr>
          <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;">
              <?php echo $langMod["ep:infohearing"]; ?>
            </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
            <?php echo $valInformation['vacancy'] ?> <?php if($$valInformation['friend'] == 'เจ้าหน้าที่สภาบัน'){ echo $valInformation['vacancy-other-1']; }else{ echo $valInformation['vacancy-other-2']; } ?>
            </span></td>
        </tr>


        <tr>
          <td width="110" height="35" align="left" valign="bottom"><span style="font-size:12px;">
              <?php echo $langMod["ep:infoother"]; ?>
            </span>
          </td>
        </tr>
        <tr>
          <td height="35" colspan="3" align="left" valign="bottom" style="border-bottom:#999999 dotted 1px;"><span style="font-size:12px;">
            <?php echo $valInformation['beneficial'] ?>
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
// $pdf->Output(''.$valNamePdf.'.pdf','I');
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