<?php

$menuActive = "video";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$videoPage = new videoPage;
$arrMenu = array();
$getMenuDetail = array();
$ContentID = GetContentID($url->segment[2]);
$PageAction = $url->segment[2];
$MenuID = GetContentID($url->segment[0]);
$MenuID = $callSetWebsite->getMenuID($MenuID);
$MasterkeyTemp = $config['video']['vdo']['masterkey']; // master about like this
$showslick = true; // slick shows

if (empty($MenuID)) {
    $MenuID = $config['video']['vdo']['masterkey'];
}

## REQUEST_URI
$req_params = array();
$req_params['year'] = $_REQUEST['year'] ? $_REQUEST['year'] : $url->segment['3'];
$req_params['order'] = $_REQUEST['order'];
$req_params['keywords'] = $_REQUEST['keywords'];
$req_params['selectcareer'] = $_REQUEST['selectCareer'];
$smarty->assign("req_params", $req_params);

switch ($MenuID) {

    default: //
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/video.php';
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