<?php
$ContentID = $ContentID ? $ContentID : $arrMenu[0]['id'];
$callCMS = $researchPage->callCMSS($MenuID, $ContentID);

if ($callCMS->_numOfRows < 1) {
    header('location:' . $linklang . '/404');
    exit(0);
}
$smarty->assign("callCMS", $callCMS);

$settingModulus['tgp'] = "/assets/img/background/top-graphic-research.jpg";

## breadcrumb
$breadcrumb = explode("-", $callCMS->fields['menuname']);
$settingModulus['breadcrumb'] = $breadcrumb[0];

## menu lv 2 active
$menuidLv2 = $callCMS->fields['id'];
$smarty->assign("menuidLv2", $menuidLv2);

/*## Start Update View #####*/
if (!isset($_COOKIE['VIEW_DETAIL_' . $MenuID . '_' . urldecode($callCMS->fields['id'])])) {
    setcookie("VIEW_DETAIL_" . $MenuID . '_' . urldecode($callCMS->fields['id']), true, time() + 600);
    $viewContent = $callSetWebsite->updateView($callCMS->fields['id'], $MenuID, $config['cms']['db']['main']);
}
/*## End Update View #####*/

/*## Start SEO #####*/
if ($callCMS->fields['pic'] !== '') {
    $fullpath_pic = fileinclude($callCMS->fields['pic'], 'real', $MenuID, 'link');
} else {
    $fullpath_pic = '';
}
$smarty->assign("valSeoImages", $fullpath_pic);
$seo_desc = ($callCMS->fields['description'] != '' ? $callCMS->fields['description'] : '');
$seo_title = ($callCMS->fields['metatitle'] != '' ? $callCMS->fields['metatitle'] : $callCMS->fields['subject']);
$seo_keyword = ($callCMS->fields['keywords'] != '' ? $callCMS->fields['keywords'] : '');
$seo_pic = ($callCMS->fields['pic'] != '' ? $fullpath_pic : '');
Seo($seo_title, $seo_desc, $seo_keyword);
/*## End SEO #####*/

$MenuID = "rs_cod_s";
$settingPage = array(
    "page" => $menuActive,
    "template" => "cms_advance_detail_research.tpl",
    "display" => "page",
    "control" => "component",
);