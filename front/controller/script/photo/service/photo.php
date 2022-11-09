<?php
switch ($PageAction) {
    case 'detail':
        $ContentID = GetContentID($url->segment[2]);
        $callCMS = $photoPage->callCMS($MenuID, $ContentID);
        $callCMSAlbum = $photoPage->callCMSAlbum($ContentID);
        if ($callCMS->_numOfRows < 1) {
            header('location:'.$linklang.'/404');
            exit(0);
        }
        $smarty->assign("callCMS", $callCMS);
        foreach ($callCMSAlbum as $key => $image) {
            if (!empty($image['filename'])) {
                $fullpath_pic = fileinclude($image['filename'], 'album', $MenuID, 'link');
                $albumCMSImageURL[] = $fullpath_pic;
            }
        }
        $smarty->assign("albumCMSImageURL", $albumCMSImageURL);
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
        $seo_title = $lang['menu']['photo-gallary'];
        $seo_keyword = "";
        Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
        /*## End SEO #####*/
    
        $settingPage = array(
            "page" => $menuActive,
            "template" => "photo-detail.tpl",
            "display" => "page",
            "control" => "component",
        );  
    break;
  default:
    $ContentID = GetContentID($url->segment[2]);
    $callCMS = $photoPage->callCMS($MenuID, $ContentID);
    if ($callCMS->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callWel", $callCMS);
    $smarty->assign("albumCMSImageURL", $albumCMSImageURL);
    ## breadcrumb
    $breadcrumb = explode("-", $callCMS->fields['menuname']);
    $settingModulus['breadcrumb'] = $breadcrumb[0];

    ## title
    $settingModulus['title'] = $breadcrumb[0];

    /*## Start SEO #####*/
    $seo_desc = "";
    $seo_title = $lang['menu']['photo-gallary'];
    $seo_keyword = "";
    Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
    /*## End SEO #####*/

    $settingPage = array(
        "page" => $menuActive,
        "template" => "photo.tpl",
        "display" => "page",
        "control" => "component",
    );
    break;
}