<?php
switch ($PageAction) {
  
  default:
    $ContentID = GetContentID($url->segment[2]);
    $callWel = $servicePage->callWel($MenuID, $ContentID);

    if ($callWel->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callWel", $callWel);

    ## breadcrumb
    $breadcrumb = explode("-", $callWel->fields['menuname']);
    $settingModulus['breadcrumb'] = $breadcrumb[0];

    ## title
    $settingModulus['title'] = $breadcrumb[0];

    /*## Start SEO #####*/
    $seo_desc = "";
    $seo_title = $lang['menu']['online-service'];
    $seo_keyword = "";
    Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
    /*## End SEO #####*/

    $settingPage = array(
        "page" => $menuActive,
        "template" => "weblink.tpl",
        "display" => "page",
        "control" => "component",
    );
    break;
}