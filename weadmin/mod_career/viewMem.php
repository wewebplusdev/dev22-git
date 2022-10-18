<?php
include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("../lib/checkMember.php");
include("../core/incLang.php");
include("incModLang.php");
include("config.php");

$valClassNav = 2;
$valNav1 = $langTxt["nav:home2"];
$valLinkNav1 = "../core/index.php";

$update = array();
$update[] = $mod_tb_apply . "_status  	='Read'";

$sql = "UPDATE " . $mod_tb_apply . " SET " . implode(",", $update) . " WHERE " . $mod_tb_apply . "_id='" . $_POST["valEditID"] . "'  ";
$Query = wewebQueryDB($coreLanguageSQL, $sql);

$sql = "SELECT   ";
$sql .= "   
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
				" . $mod_tb_apply . "_sdate             as sdate

        
         ";
$sql .= " FROM " . $mod_tb_apply . " WHERE " . $mod_tb_apply . "_masterkey='" . $_REQUEST["masterkey"] . "'  AND  " . $mod_tb_apply . "_id='" . $_REQUEST['valEditID'] . "' ";
print_pre($sql);
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
// print_pre($valPic);
$valProvince = $Row[5];
$valSex = $Row[6];
$valSalary = number_format($Row[7]);
$valEmail = rechangeQuot($Row[8]);
$valPosition1 = rechangeQuot($Row[9]);
$valStartDate = dateFormatReal($Row['sdate']);

$valGeneral = json_decode($Row['general'], true);
$valAddress = json_decode($Row['address'], true);
$valBdate=$valGeneral['bday']."/".$valGeneral['bmonth']."/".$valGeneral['byear'];
$valMilitary = json_decode($Row['military'], true);
print_pre($valMilitary);

//   $valHistory=json_decode($Row[7],true);
//   $valEdu = array_slice($valHistory['grade'],0,1)[0];
//   $valMobile=rechangeQuot($Row[10]);
//   $valamphur=$Row[12];
//   $valdistrict=$Row[13];
//   $valZipcode=$Row[14];
//   // $valBdate=substr("0".$Row[15],-2)."&nbsp;".$Row[16]."&nbsp;".$Row[17];
//   $valReligion=$Row[18];
//   $valLove=$Row[19]; 
//   $valW=rechangeQuot($Row[20]);
//   $valH=rechangeQuot($Row[21]);
//   $valArmy=$Row[22];
// 	// $valAcademy=rechangeQuot($Row[23]);
// 	$valAcademy=rechangeQuot(array_slice($valHistory['school'],0,1)[0]);
// 	// $valQualification=rechangeQuot($Row[24]);
// 	$valQualification=rechangeQuot(array_slice($valHistory['graduation'],0,1)[0]);
// 	// $valEduyear=rechangeQuot($Row[25]);
// 	$valEduyear=rechangeQuot(array_slice($valHistory['yearfrom'],0,1)[0])." - ".rechangeQuot(array_slice($valHistory['yearto'],0,1)[0]);
// 	// $valGpa=rechangeQuot($Row[26]);
// 	$valGpa=rechangeQuot(array_slice($valHistory['gpa'],0,1)[0]);
//   $valSpecial=rechangeQuot($Row[27]);
//   $valAddress=json_decode($Row[28],true);
//   $valFileName=$Row[29];
//   $valFileNameShow=$Row[29];
//   $valNationality=$Row[30];
//   // print_pre();
//   $valAge=$Row['age'];
//   $valRace=$Row['race'];
//   $valBlood=$Row['blood'];
//   $valPositionID=$Row['positionID'];
//   $valNationcard=json_decode($Row['nationcard'],true);
//   $valNationcardID=rechangeQuot($valNationcard['id']);
//   $valNationcardBY=rechangeQuot($valNationcard['by']);
//   $valNationcardProvince=rechangeQuot($valNationcard['provin']);
//   $valRelationparent=rechangeQuot($Row['relationparent']);
//   $valFather=json_decode($Row['father'],true);
//   $valMother=json_decode($Row['mother'],true);
//   $arrBrother=json_decode($Row['brother'],true);
//   foreach ($arrBrother as $key => $value) {
//     $valBrothers[$key+1][$key] = $value[$key+1];
//   }
//   // print_pre($valBrothers);
//   // print_pre($arrBrother);
//   $valMate=json_decode($Row['mate'],true);
//   // print_pre($valLove);



// 	// $valThaiL=$Row[31];
// 	// $valThaiS=$Row[32];
// 	// $valThaiR=$Row[33];
// 	// $valThaiW=$Row[34];

// 	// $valEngL=$Row[35];
// 	// $valEngS=$Row[36];
// 	// $valEngR=$Row[37];
// 	// $valEngW=$Row[38];

// 	// $valOtherL=$Row[39];
// 	// $valOtherS=$Row[40];
// 	// $valOtherR=$Row[41];
// 	// $valOtherW=$Row[42];

//    $vallanguageAbility=json_decode($Row['languageAbility'],true);

//    foreach ($vallanguageAbility as $key => $value) {
//     $vallangฺAb[$key+1][$key] = $value[$key+1];
//   }
// 	 $valPrintt=rechangeQuot($Row['wordsTh']);
// 	 $valPrinte=rechangeQuot($Row['wordsEng']);
// 	 $valCar=$Row['vehicle'];
//    $valDriv=$Row['driver'];
//    $valDriving= json_decode($Row['driverOther']) ;
//    $valprogram=$Row['program'];

//      $valRef=json_decode($Row['refperson'],true);
//      foreach ($valRef as $key => $value2) {
//       $valRefperson[$key+1][$key] = $value2[$key+1];
//     }
//    $valgeneral=json_decode($Row['general']);
//    $valWork=json_decode($Row['work'],true);
//    foreach ($valWork as $key => $value4) {
//     $valWorkfrom[$key+1][$key] = $value4[$key+1];
//   }

//   $valTran=json_decode($Row['training'],true);
//   foreach ($valTran as $key => $value5) {
//    $valTranfrom[$key+1][$key] = $value5[$key+1];
//  }
// 	  // $valFileNameShow=$Row[51];

$valPermission = getUserPermissionOnMenu($_SESSION["core_session_groupid"], $_REQUEST["menukeyid"]);

logs_access('3', 'View');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <link href="../css/theme.css" rel="stylesheet" />

  <title><?php echo $core_name_title ?></title>
  <script language="JavaScript" type="text/javascript" src="../js/scriptCoreWeweb.js"></script>
</head>

<body>
  <form action="?" method="get" name="myForm" id="myForm">
    <input name="execute" type="hidden" id="execute" value="update" />
    <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_REQUEST['masterkey'] ?>" />
    <input name="menukeyid" type="hidden" id="menukeyid" value="<?php echo $_REQUEST['menukeyid'] ?>" />
    <input name="inputSearch" type="hidden" id="inputSearch" value="<?php echo $_REQUEST['inputSearch'] ?>" />
    <input name="module_pageshow" type="hidden" id="module_pageshow" value="<?php echo $_REQUEST['module_pageshow'] ?>" />
    <input name="module_pagesize" type="hidden" id="module_pagesize" value="<?php echo $_REQUEST['module_pagesize'] ?>" />
    <input name="module_orderby" type="hidden" id="module_orderby" value="<?php echo $_REQUEST['module_orderby'] ?>" />
    <input name="inputGh" type="hidden" id="inputGh" value="<?php echo $_REQUEST['inputGh'] ?>" />
    <input name="valEditID" type="hidden" id="valEditID" value="<?php echo $_REQUEST['valEditID'] ?>" />
    <input name="inputLt" type="hidden" id="inputLt" value="<?php echo $_REQUEST['inputLt'] ?>" />
    <?php if ($_REQUEST['viewID'] <= 0) { ?>
      <div class="divRightNav">
        <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <td class="divRightNavTb" align="left" id="defTop"><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <a href="javascript:void(0)" onclick="btnBackPage('index.php')" target="_self"><?php echo $langMod["btn:mem"] ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo $langMod["txt:titleview_app"] ?></span></td>
            <td class="divRightNavTb" align="right">



            </td>
          </tr>
        </table>
      </div>
    <?php } ?>
    <div class="divRightHead">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" class="borderBottom" align="center">
        <tr>
          <td height="77" align="left"><span class="fontHeadRight"><?php echo $langMod["txt:titleview_app"] ?></span></td>
          <td align="left">
            <table border="0" cellspacing="0" cellpadding="0" align="right">
              <tr>
                <td align="right">
                  <?php if ($_REQUEST['viewID'] <= 0) { ?>

                    <div class="btnBack" title="<?php echo $langTxt["btn:back"] ?>" onclick="btnBackPage('mem.php')"></div>
                  <?php } ?>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
    <div class="divRightMain">
      <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis4"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["txt:regis4De"] ?></span>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:position1"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php
              $sql = "SELECT " . $mod_tb_root . "_id," . $mod_tb_root . "_subject FROM " . $mod_tb_root;
              $sql = $sql . "  WHERE " . $mod_tb_root . "_masterkey ='" . $_REQUEST['masterkey'] . "'  and " . $mod_tb_root . "_id = '" . $valPosition1 . "'";
              $query = wewebQueryDB($coreLanguageSQL, $sql);

              $Row = wewebFetchArrayDB($coreLanguageSQL, $query);
              $valNameCareer = $Row[1];
              echo $valNameCareer

              ?>
            </div>
          </td>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:money"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valSalary ?></div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo "วันที่พร้อมเริ่มงานได้" ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valStartDate ?></div>
          </td>
        </tr>
        <tr>

        <tr colspan="7" height="20">
          <td></td>
        </tr>

        <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
          <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis"] ?></span><br />
          <span class="formFontTileTxt"><?php echo $langMod["txt:regisDe"] ?></span>
        </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <img src="<?php echo $valPic ?>" style="float:left;border:#c8c7cc solid 1px;" onerror="this.src='<?php echo "../img/btn/nopic.jpg" ?>'" />
            </div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:name"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valName ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:address"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valAddress['housenumber'] ?>
              หมู่ <?php echo $valAddress['moo'] ?>
              หมู่บ้าน <?php echo $valAddress['village'] ?>
              ซอย <?php echo $valAddress['alley'] ?>
              ถนน <?php echo $valAddress['road'] ?>
              ตำบล <?php echo loadNameDis($valAddress['subdictrict']) ?>
              อำเภอ <?php echo loadNameAmp($valAddress['district']) ?>
              <?php echo $langMod["ep:province"] ?> <?php echo loadNameProvince($valAddress['province']) ?>
              <?php echo $langMod["ep:zipcode"] ?> <?php echo $valAddress['postcode'] ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:addressnow"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valAddress['housenumbernow'] ?>
              หมู่ <?php echo $valAddress['moonow'] ?>
              หมู่บ้าน <?php echo $valAddress['villagenow'] ?>
              ซอย <?php echo $valAddress['alleynow'] ?>
              ถนน <?php echo $valAddress['roadnow'] ?>
              ตำบล <?php echo loadNameDis($valAddress['subdictrictnow']) ?>
              อำเภอ <?php echo loadNameAmp($valAddress['districtnow']) ?>
              <?php echo $langMod["ep:province"] ?> <?php echo loadNameProvince($valAddress['provincenow']) ?>
              <?php echo $langMod["ep:zipcode"] ?> <?php echo $valAddress['postcodenow'] ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:province"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo loadNameProvince($valAddress['provincenow']) ?></div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:zipcode"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAddress['postcodenow'] ?></div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:mobile"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAddress['telmobile'] ?></div>
          </td>
        </tr>

        <tr >
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:tel"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAddress['tel'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:email"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAddress['email'] ?></div>
          </td>
        </tr>

        <tr colspan="7" height="20">
          <td></td>
        </tr>

        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis2"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["txt:regis2De"] ?></span>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:date"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valBdate ?></div>
          </td>
        </tr>
        <tr >
          <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:w"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valGeneral['weight'] ?></div></td>
        </tr>
        <tr >
          <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:h"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valGeneral['height'] ?></div></td>
        </tr>
        <tr >
          <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ca:place"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView"><?php echo $valGeneral['placeofbirth'] ?></div></td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:sex"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valGeneral['sex'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:iden"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAddress['identification'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:creat"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo loadNameProvince($valAddress['issued-at']) ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:exp"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAddress['expiry-date'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:military"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valMilitary['status']; if($valMilitary['status'] == 'ได้รับการยกเว้น'){ echo " อื่นๆ : ". $valMilitary['other']; }?></div>
          </td>
        </tr>

        <tr colspan="7" height="20">
          <td></td>
        </tr>
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["ca:military"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["ca:militaryDe"] ?></span>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:blood"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valBlood ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo "อายุ" ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAge ?> <?php echo $langMod["age"]; ?></div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:nationality"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valNationality ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo "เชื้อชาติ" ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valRace ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:religion"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><? php //=$modTxtBuddhaThai[$valReligion]
                                      ?><?php echo $valReligion ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo "เลขที่บัตรประชาชน" ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valNationcardID ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo "ที่อยู่ตามบัตรประชาชน" ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valPositionID ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo "ออกให้โดย" ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valNationcardBY ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo "จังหวัด" ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valNationcardProvince ?></div>
          </td>
        </tr>
        
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:army"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><? php //=$modTxtArmyThai[$valArmy]
                                      ?>
              <?php echo $valArmy ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:status"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valLove ?></div>
          </td>
        </tr>

        <tr colspan="7" height="20">
          <td></td>
        </tr>

        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis6"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["txt:regis6De"] ?></span>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:parent"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valRelationparent ?>
            </div>
          </td>
        </tr>
        <!-- Father -->
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["father:name"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valFather['prefix'] . " " . $valFather['fname'] . " " . $valFather['lname'] ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["father:bdate"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo dateFormatReal($valFather['yearbirth'] . '/' . $valFather['monthbirth'] . '/' . $valFather['daybirth']); ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["father:age"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valFather['age'] ?> <?php echo $langMod["age"]; ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["father:job"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valFather['occupation'] ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["father:office"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valFather['office'] ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["father:tel"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valFather['tel'] ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["father:status"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php if ($valFather['status'] == 'Live' || $valFather['status'] == 'มีชีวิต') { ?>
                <?php echo $valFather['status']; ?>
              <?php } else { ?>
                <?php echo $valFather['status'] . ' เมื่อ ' . ($valFather['daydie'] . '/' . $valFather['monthdie'] . '/' . $valFather['yeardie']); ?>
              <?php } ?>
            </div>
          </td>
        </tr>

        <!-- Mother -->
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mother:name"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valMother['prefix'] . " " . $valMother['fname'] . " " . $valMother['lname'] ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mother:bdate"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo dateFormatReal($valMother['yearbirth'] . '/' . $valMother['monthbirth'] . '/' . $valMother['daybirth']); ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mother:age"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valMother['age'] ?> <?php echo $langMod["age"]; ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mother:job"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valMother['occupation'] ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mother:office"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valMother['office'] ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mother:tel"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php echo $valMother['tel'] ?>
            </div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mother:status"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php if ($valMother['status'] == 'Live' || $valMother['status'] == 'มีชีวิต') { ?>
                <?php echo $valMother['status']; ?>
              <?php } else { ?>
                <?php echo $valMother['status'] . ' เมื่อ ' . ($valMother['daydie'] . '/' . $valMother['monthdie'] . '/' . $valMother['yeardie']); ?>
              <?php } ?>
            </div>
          </td>
        </tr>

        <!-- Brother -->
        <?php foreach ($valBrothers as $key => $valBrother) { ?>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:name"] . $key ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valBrother['prefix'] . " " . $valBrother['fname'] . " " . $valBrother['lname'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:bdate"] . $key ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo dateFormatReal($valBrother['yearbirth'] . '/' . $valBrother['monthbirth'] . '/' . $valBrother['daybirth']); ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:age"] . $key ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valBrother['age'] ?> <?php echo $langMod["age"]; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:job"] . $key ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valBrother['occupation'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:office"] . $key ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valBrother['office'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:tel"] . $key ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valBrother['tel'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:status"] . $key ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php if ($valBrother['status'] == 'Live' || $valBrother['status'] == 'มีชีวิต') { ?>
                  <?php echo $valBrother['status']; ?>
                <?php } else { ?>
                  <?php echo $valBrother['status'] . ' เมื่อ ' . ($valBrother['daydie'] . '/' . $valBrother['monthdie'] . '/' . $valBrother['yeardie']); ?>
                <?php } ?>
              </div>
            </td>
          </tr>
        <?php } ?>

        <!-- Mate -> Husband/Wife -->
        <?php if ($valLove == "แต่งงาน" || $valLove == "แยกกันอยู่" || $valLove == "marry" || $valLove == "separate") { ?>

          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mate:name"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valMate['prefix'] . " " . $valMate['fname'] . " " . $valMate['lname'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mate:bdate"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo dateFormatReal($valMate['yearbirth'] . '/' . $valMate['monthbirth'] . '/' . $valMate['daybirth']); ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mate:age"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valMate['age'] ?> <?php echo $langMod["age"]; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mate:job"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valMate['occupation'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mate:office"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valMate['office'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["mate:tel"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valMate['tel'] ?>
              </div>
            </td>
          </tr>
        <?php } ?>


        <tr colspan="7" height="20">
          <td></td>
        </tr>

        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis3"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["txt:regis3De"] ?></span>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:edu"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valEdu ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:academy"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAcademy ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:qualification"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valQualification ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:eduYear"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valEduyear ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:gpa"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valGpa ?></div>
          </td>
        </tr>


        <?php if ($valWorkfrom != "") { ?>
          <tr colspan="7" height="20">
            <td></td>
          </tr>
          <tr>
            <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
              <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis8"] ?></span><br />
              <span class="formFontTileTxt"><?php echo $langMod["txt:regis8De"] ?></span>
            </td>
          </tr>
        <?php } ?>
        <?php
        foreach ($valWorkfrom as $work) {
        ?>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb">ระยะเวลาทำงาน:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo "เดือน " . $work['Workmonthfrom'] . " ปี " . $work['Workyearfrom'] ?> ถึง <?php echo "เดือน " . $work['Workmonthto'] . " ปี " . $work['Workyearto'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb">บริษัท:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">

                <?php echo $work['Office']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb">ตำแหน่ง:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $work['Workposition']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb">อัตราจ้าง:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $work['Worksaraly'] . " " . $langMod["ep:bam"]; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb">เหตุผลที่ลาออก :<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $work['WorkNote']; ?>
              </div>
            </td>
          </tr>
        <?php } ?>
        <?php if ($valTranfrom != "") { ?>
          <tr colspan="7" height="20">
            <td></td>
          </tr>
          <tr>
            <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
              <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis9"] ?></span><br />
              <span class="formFontTileTxt"><?php echo $langMod["txt:regis9De"] ?></span>
            </td>
          </tr>
        <?php } ?>
        <?php
        foreach ($valTranfrom as $tran) {
        ?>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb">บริษัท<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $tran['office']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb">หลักสูตร<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">

                <?php echo $tran['education']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb">วุฒิที่ได้<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $tran['cert']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb">ระยะเวลา<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $tran['time']; ?>
              </div>
            </td>
          </tr>
        <?php } ?>


        <tr colspan="7" height="20">
          <td></td>
        </tr>

        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis5"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["txt:regis5De"] ?></span>
          </td>
        </tr>
        <?php foreach ($vallangฺAb as $languageAbility) { ?>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb">ทักษะภาษา<?php echo $languageAbility['laguage'] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivRadioJob"><?php echo $langMod["ep:ts"] ?>(<?php echo $languageAbility['tell'] ?>)</div>

              <div class="formDivRadioJob"><?php echo $langMod["ep:tw"] ?>(<?php echo $languageAbility['write']  ?>)</div>
              <div class="formDivRadioJob"><?php echo $langMod["ep:tr"] ?>(<?php echo $languageAbility['read'] ?>)</div>
            </td>
          </tr>
        <?php } ?>
        <!-- <tr  >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:eng"] ?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
        <div class="formDivRadioJob"><?php echo $langMod["ep:tl"] ?>(<?php echo $modTxtLangThai[$valEngL] ?>)</div>
    <div class="formDivRadioJob"><?php echo $langMod["ep:ts"] ?>(<?php echo $modTxtLangThai[$valEngS] ?>)</div>
    <div class="formDivRadioJob"><?php echo $langMod["ep:tr"] ?>(<?php echo $modTxtLangThai[$valEngR] ?>)</div>
    <div class="formDivRadioJob"><?php echo $langMod["ep:tw"] ?>(<?php echo $modTxtLangThai[$valEngW] ?>)</div>

    </td>
  </tr>    -->
        <!-- <tr   >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["ep:other"] ?>(<?php echo $valOtherlang ?>):<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" >
        <div class="formDivRadioJob"><?php echo $langMod["ep:tl"] ?>(<?php echo $modTxtLangThai[$valOtherL] ?>)</div>
    <div class="formDivRadioJob"><?php echo $langMod["ep:ts"] ?>(<?php echo $modTxtLangThai[$valOtherS] ?>)</div>
    <div class="formDivRadioJob"><?php echo $langMod["ep:tr"] ?>(<?php echo $modTxtLangThai[$valOtherR] ?>)</div>
    <div class="formDivRadioJob"><?php echo $langMod["ep:tw"] ?>(<?php echo $modTxtLangThai[$valOtherW] ?>)</div>
    </td>
  </tr>    -->
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:printt"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valPrintt ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:printe"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valPrinte ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb">ทักษะคอมพิวเตอร์:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valprogram ?></div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb">ขับรถยนต์:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valDriv ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:car"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valCar ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:driving"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valDriving->drivCard ?> <?php echo $valDriving->id ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:special"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php if ($valSpecial != "") {
                echo $valSpecial;
              } else {
                echo "-";
              } ?></div>
          </td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($valRefperson as $Refperson) { ?>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:ref"] ?><?php echo $i; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo "ชื่อ: " . $Refperson['name'] . "  ตำแหน่ง: " . $Refperson['position'] . "  ที่ทำงาน: " . $Refperson['office'] . "  เบอร์โทร: " . $Refperson['tel'] ?>

              </div>
            </td>
          </tr>
        <?php $i++;
        } ?>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb">ความบกพร่องทางร่างกาย:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">

              <?php echo $valgeneral->deformed . " " . $valgeneral->deformedref . " ";  ?>
            </div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb">เคยเจ็บป่วยหรือได้รับอุบัติเหตุ:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">

              <?php echo $valgeneral->accident . " " . $valgeneral->accidentref . " ";  ?>
            </div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb">สุขภาพโดยทั่วไปของท่าน:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">

              <?php echo $valgeneral->health;  ?>
            </div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb">บุคคลล้มละลาย หรือทำผิดทางอาญา:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">

              <?php echo $valgeneral->doom . " " . $valgeneral->doomref . " ";  ?>
            </div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb">เคยถูกไล่ออกจากงาน:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">

              <?php echo $valgeneral->resign . " " . $valgeneral->resignref . " ";  ?>
            </div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb">ท่านมีเพื่อนหรือญาติทำงานที่บริษัทนี้หรือไม่:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">

              <?php echo $valgeneral->relation . " " . $valgeneral->relationref . " ";  ?>
            </div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb">ท่านรับทราบข่าวการสมัครงานของบริษัทจากช่องทางใด:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
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
            </div>
          </td>
        </tr>


        <!-- <tr colspan="7" height="20"><td></td></tr>

 <tr >
    <td colspan="7" align="left"  valign="middle" class="formTileTxt tbBoxViewBorderBottom">
    <span class="formFontSubjectTxt"><?php echo $langMod["txt:attfile"] ?></span><br/>
    <span class="formFontTileTxt"><?php echo $langMod["txt:attfileDe"] ?></span>   </td>
    </tr>

    <tr >
    <td width="18%" align="right"  valign="top"  class="formLeftContantTb" ><?php echo $langMod["txt:attfile"] ?>:<span class="fontContantAlert"></span></td>
    <td width="82%" colspan="6" align="left"  valign="top"  class="formRightContantTb" ><div class="formDivView">

    </div>    </td>
  </tr>  -->

        <tr colspan="7" height="20">
          <td></td>
        </tr>

        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langTxt["us:titleinfo"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langTxt["us:titleinfoDe"] ?></span>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["us:credate"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valCredate ?></div>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langTxt["mg:status"] ?>:</td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">

              <?php if ($valStatus == "Read") { ?>
                <span class="<?php echo $valStatusClass ?>"><?php echo $valStatus ?></span>
              <?php } else { ?>
                <span class="<?php echo $valStatusClass ?>"><?php echo $valStatus ?></span>
              <?php } ?>
            </div>
          </td>
        </tr>
        <?php if ($_REQUEST['viewID'] <= 0) { ?>

          <tr>
            <td colspan="7" align="right" valign="top" height="20"></td>
          </tr>
          <tr>
            <td colspan="7" align="right" valign="middle" class="formEndContantTb"><a href="#defTop" title="<?php echo $langTxt["btn:gototop"] ?>"><?php echo $langTxt["btn:gototop"] ?> <img src="../img/btn/top.png" align="absmiddle" /></a></td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </form>
  <?php include("../lib/disconnect.php"); ?>
  <link rel="stylesheet" type="text/css" href="../js/fancybox/jquery.fancybox.css" media="screen" />
  <script language="JavaScript" type="text/javascript" src="../js/fancybox/jquery.fancybox.js"></script>
  <script type="text/javascript">
    jQuery(function() {
      jQuery('a[rel=viewAlbum]').fancybox({
        'padding': 0,
        'transitionIn': 'fade',
        'transitionOut': 'fade',
        'autoSize': false,
      });
    });
  </script>
  <script type='text/javascript' src='swfobject.js'></script>
  <script type='text/javascript' src='silverlight.js'></script>
  <script type='text/javascript' src='wmvplayer.js'></script>
  <script type='text/javascript'>
    var filename = "<?php echo $filename ?>";
    var filetype = "<?php echo $filetype ?>";
    var cnt = document.getElementById("areaPlayer");
    if (filetype == "flv") {
      var s1 = new SWFObject('player.swf', 'player', '560', '315', '9');
      s1.addParam('allowfullscreen', 'true');
      s1.addParam('wmode', 'transparent');
      s1.addParam('allowscriptaccess', 'always');
      s1.addParam('flashvars', 'file=<?php echo $mod_path_vdo ?>/' + filename);
      s1.write('areaPlayer');
    } else /* if(filetype=="wmv")*/ {

      var src = 'wmvplayer.xaml';
      var cfg = "";
      var ply;
      cfg = {
        file: '<?php echo $mod_path_vdo ?>/' + filename,
        image: '',
        height: '315',
        width: '560',
        autostart: "false",
        windowless: 'true',
        showstop: 'true'
      };
      ply = new jeroenwijering.Player(cnt, src, cfg);
    }
  </script>


</body>

</html>