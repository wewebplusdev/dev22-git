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

        <tr>
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
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:w"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valGeneral['weight'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:h"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valGeneral['height'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:place"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valGeneral['placeofbirth'] ?></div>
          </td>
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
            <div class="formDivView"><?php echo $valMilitary['status'];
                                      if ($valMilitary['status'] == 'อื่นๆ') {
                                        echo " อื่นๆ : " . $valMilitary['other'];
                                      } ?></div>
          </td>
        </tr>

        <tr colspan="7" height="20">
          <td></td>
        </tr>
        <tr>
          <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
            <span class="formFontSubjectTxt"><?php echo $langMod["ca:emergency"] ?></span><br />
            <span class="formFontTileTxt"><?php echo $langMod["ca:emergencyDe"] ?></span>
          </td>
        </tr>

        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:name"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valEmergency['fname'] . " " . $valEmergency['lname'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["emergency:bdate"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valEmergency['bdaty'] . "/" . $valEmergency['bmonth'] . "/" . $valEmergency['byear'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:age"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAge ?> <?php echo $valEmergency["age"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:relations"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAge ?> <?php echo $valEmergency["relations"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:addwork"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAge ?> <?php echo $valEmergency["address"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:tel"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valAge ?> <?php echo $valEmergency["tel"]; ?></div>
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
        <!-- Father -->
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:name"] . $langMod["family:first"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily['fname1'] . " " . $valFamily['lname1'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:bdate"] . $langMod["family:first"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily['bday1'] . "/" . $valFamily['bmonth1'] . "/" . $valFamily['byear1'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:age"] . $langMod["family:first"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily["age1"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:relations"] . $langMod["family:first"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily["relations1"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:addwork"] . $langMod["family:first"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily["address1"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:tel"] . $langMod["family:first"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily["tel1"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["family:status"] . $langMod["family:first"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php if ($valFamily['alive1'] == 'Live' || $valFamily['alive1'] == 'มีชีวิต') { ?>
                <?php echo $valFamily['alive1']; ?>
              <?php } else { ?>
                <?php echo $valFamily['status'] . ' เมื่อ ' . ($valFamily['dday1'] . '/' . $valFamily['dmonth1'] . '/' . $valFamily['dyear1']); ?>
              <?php } ?>
            </div>
          </td>
        </tr>

        <!-- Mother -->
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:name"] . $langMod["family:seconde"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily['fname2'] . " " . $valFamily['lname2'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:bdate"] . $langMod["family:seconde"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily['bday2'] . "/" . $valFamily['bmonth2'] . "/" . $valFamily['byear2'] ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:age"] . $langMod["family:seconde"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily["age2"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:relations"] . $langMod["family:seconde"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily["relations2"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:addwork"] . $langMod["family:seconde"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily["address2"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:tel"] . $langMod["family:seconde"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView"><?php echo $valFamily["tel2"]; ?></div>
          </td>
        </tr>
        <tr>
          <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["family:status"] . $langMod["family:seconde"] ?>:<span class="fontContantAlert"></span></td>
          <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
            <div class="formDivView">
              <?php if ($valFamily['alive2'] == 'Live' || $valFamily['alive2'] == 'มีชีวิต') { ?>
                <?php echo $valFamily['alive2']; ?>
              <?php } else { ?>
                <?php echo $valFamily['status'] . ' เมื่อ ' . ($valFamily['dday2'] . '/' . $valFamily['dmonth2'] . '/' . $valFamily['dyear2']); ?>
              <?php } ?>
            </div>
          </td>
        </tr>

        <!-- Brother -->
        <?php $indexBro = 1; ?>
        <?php unset($valBrothers['main']); ?>
        <?php foreach ($valBrothers as $key => $valBrother) { ?>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:name"] . $indexBro ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valBrother['fname'] . " " . $valBrother['lname'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:bdate"] . $indexBro ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo dateFormatReal($valBrother['byear'] . '/' . $valBrother['bmonth'] . '/' . $valBrother['bdaty']); ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:age"] . $indexBro ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valBrother['age'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:relations"] . $indexBro ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valBrother["relations"]; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:addwork"] . $indexBro ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valBrother['address'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:tel"] . $indexBro ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valBrother['tel'] ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["brother:status"] . $indexBro ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php if ($valBrother['alive'] == 'Live' || $valBrother['alive'] == 'มีชีวิต') { ?>
                  <?php echo $valBrother['alive']; ?>
                <?php } else { ?>
                  <?php echo $valBrother['alive'] . ' เมื่อ ' . ($valBrother['dday'] . '/' . $valBrother['dmonth'] . '/' . $valBrother['dyear']); ?>
                <?php } ?>
              </div>
            </td>
          </tr>
        <?php $indexBro++; ?>
        <?php } ?>

        <?php if(count($valEducation) > 0){ ?>

        <tr colspan="7" height="20">
          <td></td>
        </tr>

        <?php $indexEdu = 1; ?>
        <?php foreach ($valEducation as $key => $valEducations) { ?>
          <tr>
            <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
              <span class="formFontSubjectTxt"><?php echo $langMod["txt:regis3"] ?></span><br />
              <span class="formFontTileTxt"><?php echo $langMod["txt:regis3De"] ?></span>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:edu"]." ".$indexEdu ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valEducations['level'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:academy"]." ".$indexEdu ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valEducations['academy-name'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:from"]." ".$indexEdu ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valEducations['from'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:qualification"]." ".$indexEdu ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valEducations['majors'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:background"]." ".$indexEdu ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valEducations['educational-background'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:eduYear"]." ".$indexEdu ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valEducations['education-end'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:gpa"]." ".$indexEdu ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valEducations['grade'] ?></div>
            </td>
          </tr>
        <?php $indexEdu++; ?>
        <?php } ?>
        <?php } ?>

        <?php if(count($valTraining) > 0){ ?>

        <tr colspan="7" height="20">
          <td></td>
        </tr>

        <?php $indexTra = 1; ?>
        <?php foreach ($valTraining as $key => $valTrainings) { ?>
          <tr>
            <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
              <span class="formFontSubjectTxt"><?php echo $langMod["txt:training"] ?></span><br />
              <span class="formFontTileTxt"><?php echo $langMod["txt:trainingDe"] ?></span>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:trainingname"]." ".$indexTra ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valTrainings['course'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:traininginstitute"]." ".$indexTra ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valTrainings['institute'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:trainingdegree"]." ".$indexTra ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valTrainings['degree'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:trainingperiod"]." ".$indexTra ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valTrainings['period'] ?> <?php echo $langMod["ep:trainingyear"]." ".$valTrainings['training-start']." - ".$valTrainings['training-end']; ?></div>
            </td>
          </tr>
          </tr>
        <?php $indexTra++; ?>
        <?php } ?>
        <?php } ?>

        <?php if (count($valWorkhistory)>0) { ?>
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
        <?php $indexWork = 1; ?>
        <?php
        foreach ($valWorkhistory as $valWorkhistorys) {
        ?>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:office"]." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['company']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:officetype"]." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['type']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:address"]." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['address']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:tel"]." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['tel']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:firstposition"]." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['first-position']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:lastposition"]." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['last-position']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:lastsalary"] ." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['last-salary']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:incomeother"] ." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['other']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:responsibility"] ." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['responsibility']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:trainingperiod"] ." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['period']; ?> <?php echo $langMod["ep:trainingyear"]." ".$valWorkhistorys['work-start']." - ".$valWorkhistorys['work-end']; ?>
              </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:trainingyear"] ." ".$indexWork; ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView">
                <?php echo $valWorkhistorys['work-start']." ถึง ".$valWorkhistorys['work-end']; ?>
              </div>
            </td>
          </tr>
        <?php $indexWork++; ?>
        <?php } ?>

        <?php if(count($valLanguage) > 0){ ?>

        <tr colspan="7" height="20">
          <td></td>
        </tr>

        <?php $indexLang = 1; ?>
        <?php foreach ($valLanguage as $key => $valLanguages) { ?>
          <tr>
            <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
              <span class="formFontSubjectTxt"><?php echo $langMod["txt:training"] ?></span><br />
              <span class="formFontTileTxt"><?php echo $langMod["txt:trainingDe"] ?></span>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $valLanguages['language']."/".$langMod["ep:langspeaking"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valLanguages['speaking'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $valLanguages['language']."/".$langMod["ep:langlistening"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valLanguages['listening'] ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $valLanguages['language']."/".$langMod["ep:langwriting"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valLanguages['writing'] ?></div>
            </td>
          </tr>
          </tr>
        <?php $indexLang++; ?>
        <?php } ?>
        <?php } ?>

        <tr colspan="7" height="20">
          <td></td>
        </tr>
        <tr>
            <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
              <span class="formFontSubjectTxt"><?php echo $langMod["txt:generalinfo"] ?></span><br />
              <span class="formFontTileTxt"><?php echo $langMod["txt:generalinfoDe"] ?></span>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:infoworkupcountry"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $langMod["ep:infopermanent"]." : ".$valInformation["country-out-permanent"]?>, <?php echo $langMod["ep:infotemporary"]." : ".$valInformation["country-out-temporary"]?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:infodisease"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valInformation['contagious'] ?> <?php if($$valInformation['contagious'] == 'เคย'){ echo "เพราะ ".$valInformation['contagious-other']; } ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:infohandicap"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valInformation['contagious'] ?> <?php if($$valInformation['handicap'] == 'มี'){ echo "เพราะ ".$valInformation['handicap-other']; } ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:infoquestioning"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valInformation['investigation'] ?> <?php if($$valInformation['investigation'] == 'เคย เพราะ'){ echo "เพราะ ".$valInformation['investigation-other']; } ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:infodischarged"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valInformation['discharged'] ?> <?php if($$valInformation['discharged'] == 'เคย เพราะ'){ echo "เพราะ ".$valInformation['discharged-other']; } ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:inforelative"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valInformation['friend'] ?> <?php if($$valInformation['friend'] == 'เคย เพราะ'){ echo "เพราะ ".$valInformation['friend-other']; } ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:infohearing"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valInformation['vacancy'] ?> <?php if($$valInformation['friend'] == 'เจ้าหน้าที่สภาบัน'){ echo $valInformation['vacancy-other-1']; }else{ echo $valInformation['vacancy-other-2']; } ?></div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:infoother"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valInformation['beneficial'] ?></div>
            </td>
          </tr>

          <tr colspan="7" height="20">
          <td></td>
          </tr>
          <tr>
            <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
              <span class="formFontSubjectTxt"><?php echo $langMod["txt:reference"] ?></span><br />
              <span class="formFontTileTxt"><?php echo $langMod["txt:referenceDe"] ?></span>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["txt:reference"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
              <div class="formDivView"><?php echo $valReference['main']['reference'] ?></div>
            </td>
          </tr>
          <?php $statusRef = $valReference['main']['reference'] ?>
          <?php unset($valReference2['main']); ?>
          <?php if(count($valReference2) > 0 && $statusRef == 'มี'){ ?>
            <?php foreach ($valReference2 as $key => $valReferences) { ?>
              <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:name"] ?>:<span class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                  <div class="formDivView"><?php echo $valReferences['fname'] ?></div>
                </td>
              </tr>
              <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:addwork"] ?>:<span class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                  <div class="formDivView"><?php echo $valReferences['address'] ?></div>
                </td>
              </tr>
              <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:position1"] ?>:<span class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                  <div class="formDivView"><?php echo $valReferences['position'] ?></div>
                </td>
              </tr>
              <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:tel"] ?>:<span class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                  <div class="formDivView"><?php echo $valReferences['tel'] ?></div>
                </td>
              </tr>
              <tr>
                <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ca:relations"] ?>:<span class="fontContantAlert"></span></td>
                <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                  <div class="formDivView"><?php echo $valReferences['relations'] ?></div>
                </td>
              </tr>
            <?php } ?>
          <?php } ?>

          <tr colspan="7" height="20">
            <td></td>
          </tr>

          <tr>
            <td colspan="7" align="left" valign="middle" class="formTileTxt tbBoxViewBorderBottom">
              <span class="formFontSubjectTxt"><?php echo $langMod["txt:Fileinfo"] ?></span><br />
              <span class="formFontTileTxt"><?php echo $langMod["txt:FileinfoDe"] ?></span>
            </td>
          </tr>

          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:filetranscript"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                <div class="formDivView">
                    <?php
                    $sql = "SELECT " . $mod_tb_file_apply . "_id," . $mod_tb_file_apply . "_filename," . $mod_tb_file_apply . "_name," . $mod_tb_file_apply . "_download FROM " . $mod_tb_file_apply . " WHERE " . $mod_tb_file_apply . "_contantid 	='" . $valID . "' AND " . $mod_tb_file_apply . "_key ='file-1' ORDER BY " . $mod_tb_file_apply . "_id ASC";
                    $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                    $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                    if ($number_row >= 1) {
                        $txtFile = "";
                        while ($row_file = wewebFetchArrayDB($coreLanguageSQL, $query_file)) {
                            $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                            $downloadFile = $row_file[1];
                            $downloadID = $row_file[0];
                            $downloadName = $row_file[2];
                            $countDownload = $row_file[3];
                            $imageType = strstr($downloadFile, '.');
                    ?>
                            <div style="float:left; width:100%; height:30px; margin-bottom:15px;"><img src="<?php echo get_Icon($downloadFile) ?>" align="absmiddle" width="30" /><a href="../<?php echo $mod_fd_root ?>/download.php?linkPath=<?php echo $linkRelativePath ?>&amp;downloadFile=<?php echo $downloadFile ?>"><?php echo $downloadName . "" . $imageType ?></a> | <?php echo $langMod["file:type"] ?>: <?php echo $imageType ?> | <?php echo $langMod["file:size"] ?>: <?php echo get_IconSize($linkRelativePath) ?> | <?php echo $langMod["file:download"] ?>: <?php echo number_format($countDownload) ?></div>
                            <div></div>
                    <?php
                        }
                    } else {
                        echo "-";
                    }
                    ?>
                </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:filehouse"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                <div class="formDivView">
                    <?php
                    $sql = "SELECT " . $mod_tb_file_apply . "_id," . $mod_tb_file_apply . "_filename," . $mod_tb_file_apply . "_name," . $mod_tb_file_apply . "_download FROM " . $mod_tb_file_apply . " WHERE " . $mod_tb_file_apply . "_contantid 	='" . $valID . "' AND " . $mod_tb_file_apply . "_key ='file-2' ORDER BY " . $mod_tb_file_apply . "_id ASC";
                    $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                    $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                    if ($number_row >= 1) {
                        $txtFile = "";
                        while ($row_file = wewebFetchArrayDB($coreLanguageSQL, $query_file)) {
                            $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                            $downloadFile = $row_file[1];
                            $downloadID = $row_file[0];
                            $downloadName = $row_file[2];
                            $countDownload = $row_file[3];
                            $imageType = strstr($downloadFile, '.');
                    ?>
                            <div style="float:left; width:100%; height:30px; margin-bottom:15px;"><img src="<?php echo get_Icon($downloadFile) ?>" align="absmiddle" width="30" /><a href="../<?php echo $mod_fd_root ?>/download.php?linkPath=<?php echo $linkRelativePath ?>&amp;downloadFile=<?php echo $downloadFile ?>"><?php echo $downloadName . "" . $imageType ?></a> | <?php echo $langMod["file:type"] ?>: <?php echo $imageType ?> | <?php echo $langMod["file:size"] ?>: <?php echo get_IconSize($linkRelativePath) ?> | <?php echo $langMod["file:download"] ?>: <?php echo number_format($countDownload) ?></div>
                            <div></div>
                    <?php
                        }
                    } else {
                        echo "-";
                    }
                    ?>
                </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:fileiden"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                <div class="formDivView">
                    <?php
                    $sql = "SELECT " . $mod_tb_file_apply . "_id," . $mod_tb_file_apply . "_filename," . $mod_tb_file_apply . "_name," . $mod_tb_file_apply . "_download FROM " . $mod_tb_file_apply . " WHERE " . $mod_tb_file_apply . "_contantid 	='" . $valID . "' AND " . $mod_tb_file_apply . "_key ='file-3' ORDER BY " . $mod_tb_file_apply . "_id ASC";
                    $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                    $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                    if ($number_row >= 1) {
                        $txtFile = "";
                        while ($row_file = wewebFetchArrayDB($coreLanguageSQL, $query_file)) {
                            $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                            $downloadFile = $row_file[1];
                            $downloadID = $row_file[0];
                            $downloadName = $row_file[2];
                            $countDownload = $row_file[3];
                            $imageType = strstr($downloadFile, '.');
                    ?>
                            <div style="float:left; width:100%; height:30px; margin-bottom:15px;"><img src="<?php echo get_Icon($downloadFile) ?>" align="absmiddle" width="30" /><a href="../<?php echo $mod_fd_root ?>/download.php?linkPath=<?php echo $linkRelativePath ?>&amp;downloadFile=<?php echo $downloadFile ?>"><?php echo $downloadName . "" . $imageType ?></a> | <?php echo $langMod["file:type"] ?>: <?php echo $imageType ?> | <?php echo $langMod["file:size"] ?>: <?php echo get_IconSize($linkRelativePath) ?> | <?php echo $langMod["file:download"] ?>: <?php echo number_format($countDownload) ?></div>
                            <div></div>
                    <?php
                        }
                    } else {
                        echo "-";
                    }
                    ?>
                </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:filemarriage"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                <div class="formDivView">
                    <?php
                    $sql = "SELECT " . $mod_tb_file_apply . "_id," . $mod_tb_file_apply . "_filename," . $mod_tb_file_apply . "_name," . $mod_tb_file_apply . "_download FROM " . $mod_tb_file_apply . " WHERE " . $mod_tb_file_apply . "_contantid 	='" . $valID . "' AND " . $mod_tb_file_apply . "_key ='file-4' ORDER BY " . $mod_tb_file_apply . "_id ASC";
                    $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                    $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                    if ($number_row >= 1) {
                        $txtFile = "";
                        while ($row_file = wewebFetchArrayDB($coreLanguageSQL, $query_file)) {
                            $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                            $downloadFile = $row_file[1];
                            $downloadID = $row_file[0];
                            $downloadName = $row_file[2];
                            $countDownload = $row_file[3];
                            $imageType = strstr($downloadFile, '.');
                    ?>
                            <div style="float:left; width:100%; height:30px; margin-bottom:15px;"><img src="<?php echo get_Icon($downloadFile) ?>" align="absmiddle" width="30" /><a href="../<?php echo $mod_fd_root ?>/download.php?linkPath=<?php echo $linkRelativePath ?>&amp;downloadFile=<?php echo $downloadFile ?>"><?php echo $downloadName . "" . $imageType ?></a> | <?php echo $langMod["file:type"] ?>: <?php echo $imageType ?> | <?php echo $langMod["file:size"] ?>: <?php echo get_IconSize($linkRelativePath) ?> | <?php echo $langMod["file:download"] ?>: <?php echo number_format($countDownload) ?></div>
                            <div></div>
                    <?php
                        }
                    } else {
                        echo "-";
                    }
                    ?>
                </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:filelicense"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                <div class="formDivView">
                    <?php
                    $sql = "SELECT " . $mod_tb_file_apply . "_id," . $mod_tb_file_apply . "_filename," . $mod_tb_file_apply . "_name," . $mod_tb_file_apply . "_download FROM " . $mod_tb_file_apply . " WHERE " . $mod_tb_file_apply . "_contantid 	='" . $valID . "' AND " . $mod_tb_file_apply . "_key ='file-5' ORDER BY " . $mod_tb_file_apply . "_id ASC";
                    $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                    $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                    if ($number_row >= 1) {
                        $txtFile = "";
                        while ($row_file = wewebFetchArrayDB($coreLanguageSQL, $query_file)) {
                            $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                            $downloadFile = $row_file[1];
                            $downloadID = $row_file[0];
                            $downloadName = $row_file[2];
                            $countDownload = $row_file[3];
                            $imageType = strstr($downloadFile, '.');
                    ?>
                            <div style="float:left; width:100%; height:30px; margin-bottom:15px;"><img src="<?php echo get_Icon($downloadFile) ?>" align="absmiddle" width="30" /><a href="../<?php echo $mod_fd_root ?>/download.php?linkPath=<?php echo $linkRelativePath ?>&amp;downloadFile=<?php echo $downloadFile ?>"><?php echo $downloadName . "" . $imageType ?></a> | <?php echo $langMod["file:type"] ?>: <?php echo $imageType ?> | <?php echo $langMod["file:size"] ?>: <?php echo get_IconSize($linkRelativePath) ?> | <?php echo $langMod["file:download"] ?>: <?php echo number_format($countDownload) ?></div>
                            <div></div>
                    <?php
                        }
                    } else {
                        echo "-";
                    }
                    ?>
                </div>
            </td>
          </tr>
          <tr>
            <td width="18%" align="right" valign="top" class="formLeftContantTb"><?php echo $langMod["ep:fileother"] ?>:<span class="fontContantAlert"></span></td>
            <td width="82%" colspan="6" align="left" valign="top" class="formRightContantTb">
                <div class="formDivView">
                    <?php
                    $sql = "SELECT " . $mod_tb_file_apply . "_id," . $mod_tb_file_apply . "_filename," . $mod_tb_file_apply . "_name," . $mod_tb_file_apply . "_download FROM " . $mod_tb_file_apply . " WHERE " . $mod_tb_file_apply . "_contantid 	='" . $valID . "' AND " . $mod_tb_file_apply . "_key ='file-6' ORDER BY " . $mod_tb_file_apply . "_id ASC";
                    $query_file = wewebQueryDB($coreLanguageSQL, $sql);
                    $number_row = wewebNumRowsDB($coreLanguageSQL, $query_file);
                    if ($number_row >= 1) {
                        $txtFile = "";
                        while ($row_file = wewebFetchArrayDB($coreLanguageSQL, $query_file)) {
                            $linkRelativePath = $mod_path_file . "/" . $row_file[1];
                            $downloadFile = $row_file[1];
                            $downloadID = $row_file[0];
                            $downloadName = $row_file[2];
                            $countDownload = $row_file[3];
                            $imageType = strstr($downloadFile, '.');
                    ?>
                            <div style="float:left; width:100%; height:30px; margin-bottom:15px;"><img src="<?php echo get_Icon($downloadFile) ?>" align="absmiddle" width="30" /><a href="../<?php echo $mod_fd_root ?>/download.php?linkPath=<?php echo $linkRelativePath ?>&amp;downloadFile=<?php echo $downloadFile ?>"><?php echo $downloadName . "" . $imageType ?></a> | <?php echo $langMod["file:type"] ?>: <?php echo $imageType ?> | <?php echo $langMod["file:size"] ?>: <?php echo get_IconSize($linkRelativePath) ?> | <?php echo $langMod["file:download"] ?>: <?php echo number_format($countDownload) ?></div>
                            <div></div>
                    <?php
                        }
                    } else {
                        echo "-";
                    }
                    ?>
                </div>
            </td>
          </tr>

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