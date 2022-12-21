<?php

$menuActive = "service";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$servicePage = new servicePage;
$arrMenu = array();
$getMenuDetail = array();
$ContentID = GetContentID($url->segment[2]);
$PageAction = $url->segment[3];
$MenuID = GetContentID($url->segment[1]);
$settingModulus['menuid'] = $MenuID;
$MenuID = $callSetWebsite->getMenuID($MenuID);
$MasterkeyTemp = "sv_"; // master about like this
$MasterkeyTemp2 = array("'cod_f'"); // master about like this
$showslick = true; // slick shows

if (empty($MenuID)) {
    $MenuID = $config['about']['sv_gc']['masterkey'];
}

## REQUEST_URI
$req_params = array();
$req_params['year'] = $_REQUEST['year'];
$req_params['order'] = $_REQUEST['order'];
$smarty->assign("req_params", $req_params);

## default menu lv1
$getMenuDetailFc = $callSetWebsite->getMenuDetail(0, $MasterkeyTemp, null, null, null, $MasterkeyTemp2);
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
// print_pre($MenuID);

switch ($MenuID) {
    // case 'cod_f': //คำนวนณเพชร
    //     require_once _DIR . '/front/controller/script/' . $menuActive . '/service/rs_cod_s.php';
    //     break;

    case 'cod_f':
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/rs_cod_s-cal.php';
        break;

    default: //งานบริการ
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/cms_detail.php';
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