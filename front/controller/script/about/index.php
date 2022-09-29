<?php

$menuActive = "about";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$aboutPage = new aboutPage;
$arrMenu = array();
$ContentID = GetContentID($url->segment[2]);
$PageAction = $url->segment[3];
$MenuID = GetContentID($url->segment[1]);
$MenuID = $callSetWebsite->getMenuID($MenuID);
$MasterkeyTemp = "ab_";

if (empty($MenuID)) {
    $MenuID = 'ab_odc';
}

## REQUEST_URI
$req_params = array();
$req_params['year'] = $_REQUEST['year'];
$req_params['order'] = $_REQUEST['order'];
$smarty->assign("req_params", $req_params);

## default menu lv1
$getMenuDetail = $callSetWebsite->getMenuDetail(0, $MasterkeyTemp, $FixmenuID);
$smarty->assign("getMenuDetail", $getMenuDetail);

switch ($MenuID) {
    case 'ab_pap':
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/ab_pap.php';
        break;
    
    default:
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/ab_odc-ab_odw.php';
        break;
}

$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);
$smarty->assign("MenuID", $MenuID);
$smarty->assign("settingModulus", $settingModulus);