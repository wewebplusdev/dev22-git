<?php

$menuActive = "career";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$policyPage = new policyPage;
$arrMenu = array();
$getMenuDetail = array();
$ContentID = GetContentID($url->segment[2]);
$PageAction = $url->segment[3];
// $MenuID = GetContentID($url->segment[1]);
$MenuID = $callSetWebsite->getMenuID($MenuID);
$MasterkeyTemp = $config['about']['ab_js']['masterkey']; // master about like this
$showslick = true; // slick shows

if (empty($MenuID)) {
    $MenuID = $config['about']['ab_js']['masterkey'];
}

## REQUEST_URI
$req_params = array();
$req_params['year'] = $_REQUEST['year'];
$req_params['order'] = $_REQUEST['order'];
$smarty->assign("req_params", $req_params);

switch ($MenuID) {
    default: //นโยบาย
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/career.php';
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