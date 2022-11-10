<?php
switch ($PageAction) {
    case 'detail':
        $embed_type = "video";
        $sitelang = $url->pagelang[2];
        $ContentID = GetContentID($url->segment[2]);
        $callCMS = $videoPage->callCMS($MenuID, $ContentID);
        $callCMSAlbum = $videoPage->callCMSAlbum($ContentID);
        if ($callCMS->_numOfRows < 1) {
            header('location:'.$linklang.'/404');
            exit(0);
        }
        $smarty->assign("callCMS", $callCMS);
        $fullpath_vdo = "";
        if (!empty($callCMS->fields['filevdo'])) {
            $fullpath_vdo = fileinclude($callCMS->fields['filevdo'], 'vdo', $MenuID, 'link');
        }
        $smarty->assign("fullpath_vdo", $fullpath_vdo);
        $embed_url = _URL.$sitelang."/embed/".$embed_type."/".$ContentID;
        $smarty->assign("embed_url", $embed_url);
        ## breadcrumb
        $breadcrumb = explode("-", $callCMS->fields['menuname']);
        $settingModulus['breadcrumb'] = $breadcrumb[0];
    
        ## title
        $settingModulus['title'] = $breadcrumb[0];
        /*## Start Update View #####*/
        if (!isset($_COOKIE['VIEW_DETAIL_' . $MenuID . '_' . urldecode($callCMS->fields['id'])])) {
            setcookie("VIEW_DETAIL_" . $MenuID . '_' . urldecode($callCMS->fields['id']), true, time() + 600);
            $viewContent = $callSetWebsite->updateView($callCMS->fields['id'], $MenuID, $config['cms']['db']['main']);
        }
        /*## Start SEO #####*/
        $seo_desc = "";
        $seo_title = $lang['menu']['video-gallary'];
        $seo_keyword = "";
        Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
        /*## End SEO #####*/
    
        $settingPage = array(
            "page" => $menuActive,
            "template" => "video-detail.tpl",
            "display" => "page",
            "control" => "component",
        );  
    break;
  default:
    $ContentID = GetContentID($url->segment[2]);
    $callCMS = $videoPage->callCMS($MenuID, $ContentID);
    if ($callCMS->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callCMS", $callCMS);
    $smarty->assign("albumCMSImageURL", $albumCMSImageURL);
    ## breadcrumb
    $breadcrumb = explode("-", $callCMS->fields['menuname']);
    $settingModulus['breadcrumb'] = $breadcrumb[0];

    ## title
    $settingModulus['title'] = $breadcrumb[0];

    /*## Start SEO #####*/
    $seo_desc = "";
    $seo_title = $lang['menu']['video-gallary'];
    $seo_keyword = "";
    Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
    /*## End SEO #####*/

    $settingPage = array(
        "page" => $menuActive,
        "template" => "video.tpl",
        "display" => "page",
        "control" => "component",
    );
    break;
}