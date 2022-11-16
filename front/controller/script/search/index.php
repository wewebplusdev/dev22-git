<?php
$menuActive = "search";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="' . _URL . 'front/controller/script/' . $menuActive . '/js/script.js' . $lastModify . '"></script>';

$searchPage = new searchPage;
$arrMenu = array();
$getMenuDetail = array();
$PageAction = $url->segment[0];
$hashtagID = intval($url->segment[2]);

$MenuID = GetContentID($url->segment[0]);
$MenuID = $callSetWebsite->getMenuID($MenuID);
$MasterkeyTemp = $config['video']['vdo']['masterkey']; // master about like this
$showslick = true; // slick shows

if (empty($MenuID)) {
    $MenuID = $config['video']['vdo']['masterkey'];
}

## REQUEST_URI
$req_params = array();
$req_params['year'] = $_REQUEST['year'];
$req_params['order'] = $_REQUEST['order'];
$smarty->assign("req_params", $req_params);
$limit = 12;
$order = $_REQUEST['order'];
$keywords = $_REQUEST['keywords'] ? trim($_REQUEST['keywords']) : trim($_REQUEST['srchtxt_main']);
$dateStart = $_REQUEST['trip-start'];
$dateEnd = $_REQUEST['trip-end'];
$typeSearch = $_REQUEST['typeSch'] ? $_REQUEST['typeSch'] : "1" ;
$typeOption = $_REQUEST['typeOption'] ? $_REQUEST['typeOption'] : "1" ;
$txtMasterkey = $_REQUEST['inputGroup'];
if (!empty($order)) {
    $sorting = $order;
} else {
    $sorting = "DESC";
}
$smarty->assign("typeOption", $typeOption);
$smarty->assign("typeSearch", $typeSearch);
$smarty->assign("order", $sorting);
$smarty->assign("keywords", $keywords);
$smarty->assign("dateStart", $dateStart);
$smarty->assign("dateEnd", $dateEnd);
$smarty->assign("txtMasterkey", $txtMasterkey);

switch ($MenuID) {

    default: //
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/search.php';
        break;
}

$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("domain", _Domain);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);
$smarty->assign("MenuID", $MenuID);
$smarty->assign("settingModulus", $settingModulus);
$smarty->assign("showslick", $showslick);
$smarty->assign("arrconm", $arrconm);
$smarty->assign("arrcong", $arrcong);
$smarty->assign("searchPage", $searchPage);