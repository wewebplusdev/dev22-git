<?php

$menuActive = "research";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$researchPage = new researchPage;
$arrMenu = array();
$getMenuDetail = array();
$ContentID = GetContentID($url->segment[2]);
$PageAction = $url->segment[2];
$PageAction_default = $url->segment[3];
$MenuID = GetContentID($url->segment[1]);
$settingModulus['menuid'] = $MenuID;
$MenuID = $callSetWebsite->getMenuID($MenuID);
$MasterkeyTemp = "rs_"; // master about like this
$showslick = true; // slick shows

if (empty($MenuID)) {
    $MenuID = $config['about']['rs_ri']['masterkey'];
}

## REQUEST_URI
$req_params = array();
$req_params['year'] = $_REQUEST['year'];
$req_params['order'] = $_REQUEST['order'];
$smarty->assign("req_params", $req_params);

## default menu lv1
$getMenuDetailFc = $callSetWebsite->getMenuDetail(0, $MasterkeyTemp);
foreach ($getMenuDetailFc as $keygetMenuDetailFc => $valuegetMenuDetailFc) {
    $getMenuDetail[] = $valuegetMenuDetailFc;
}
$smarty->assign("getMenuDetail", $getMenuDetail);

// slick slide
$initialSlide = 0;
if (count($getMenuDetail) > 4) {
    foreach ($getMenuDetail as $key => $valuegetMenuDetail) {
        if ($valuegetMenuDetail['masterkey'] == $MenuID) {
            break;
        } else {
            $initialSlide++;
        }
    }
}
$smarty->assign("initialSlide", '{"initialSlide": ' . $initialSlide . '}');


switch ($MenuID) {

    case 'rs_cod_s': //คำนวนณเพชร
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/rs_cod_s.php';
        break;

    default: //คลังงานวิจัยสถาบัน
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/rs_ri.php';
        break;
}

$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);
$smarty->assign("MenuID", $MenuID);
$smarty->assign("settingModulus", $settingModulus);
$smarty->assign("showslick", $showslick);