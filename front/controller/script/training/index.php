<?php

$menuActive = "training";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$trainingPage = new trainingPage;
$arrMenu = array();
$getMenuDetail = array();
$ContentID = GetContentID($url->segment[2]);
$PageAction = $url->segment[3];
$MenuID = GetContentID($url->segment[1]);
$MenuID = $callSetWebsite->getMenuID($MenuID);
$MasterkeyTemp = "trw_"; // master about like this
$showslick = true; // slick shows

if (empty($MenuID)) {
    $MenuID = $config['cou_trw']['main']['masterkey'];
}

## REQUEST_URI
$req_params = array();
$req_params['year'] = $_REQUEST['year'] ? $_REQUEST['year'] : $url->segment['3'];
$req_params['order'] = $_REQUEST['order'];
$req_params['keywords'] = $_REQUEST['keywords'];
$smarty->assign("req_params", $req_params);

## default menu lv1
$getMenuDetailFc = $callSetWebsite->getMenuDetail(0, $MasterkeyTemp, null, $FixmenuID);
foreach ($getMenuDetailFc as $keygetMenuDetailFc => $valuegetMenuDetailFc) {
    $getMenuDetail[] = $valuegetMenuDetailFc;
}
$smarty->assign("getMenuDetail", $getMenuDetail);

// slick slide
$initialSlide = 0;
if (count($getMenuDetail) > 4) {
    foreach ($getMenuDetail as $key => $valuegetMenuDetail) {
        if ($MenuID == $config['trw_con']['main']['masterkey'] || $MenuID == $config['trw_web']['main']['masterkey']) { // break loop when master key is equal ab_odw
            break;
        }
        if ($valuegetMenuDetail['masterkey'] == $MenuID) {
            break;
        } else {
            // $initialSlide++;
        }
    }
}
$smarty->assign("initialSlide", '{"initialSlide": ' . $initialSlide . '}');

switch ($MenuID) {
    case 'trw_semi': //สัมนา/workshop
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/trw_semi.php';
        break;

    case 'trw_pri': //ราคา
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/trw_pri.php';
        break;

    case 'trw_cou': //หลักสูตร
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/cms_detail.php';
        break;

    default: //การประกวดออกแบบ
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/trw_his.php';
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