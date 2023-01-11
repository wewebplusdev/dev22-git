<?php
switch ($PageAction) {
    case 'detail':
        $embed_type = "video";
        $sitelang = $url->pagelang[2];
        $ContentID = GetContentID($url->segment[3]);
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

        /* ## Start SEO ##### */
        if ($callCMS->fields['pic'] !== '') {
            $fullpath_pic = fileinclude($callCMS->fields['pic'], 'real', $MenuID, 'link');
        } else {
            $fullpath_pic = '';
        }
        $smarty->assign("valSeoImages", $fullpath_pic);
        $seo_desc = ($callCMS->fields['description'] != '' ? $callCMS->fields['description'] : '');
        $seo_title = ($callCMS->fields['metatitle'] != '' ? $callCMS->fields['metatitle'] : str_replace("<br>", "", $callCMS->fields['subject']));
        $seo_keyword = ($callCMS->fields['keywords'] != '' ? $callCMS->fields['keywords'] : '');
        $seo_pic = ($callCMS->fields['pic'] != '' ? $fullpath_pic : '');
        Seo($seo_title, $seo_desc, $seo_keyword);
        /* ## End SEO ##### */
    
        $settingPage = array(
            "page" => $menuActive,
            "template" => "video-detail.tpl",
            "display" => "page",
            "control" => "component",
        );  
    break;
  default:
    ## setting list
    $limit = 10;
    $order = $req_params['order'];
    if ($order == 2) {
        $sorting = "ASC";
    } else {
        $sorting = "DESC";
        $order = 1;
    }
    $smarty->assign("order", $order);

    $groupID = GetContentID($url->segment[1]);
    $arrMenu = $videoPage->callGroup($MenuID);
    if ($arrMenu->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("arrMenu", $arrMenu);
    
    $callGroupActive = $videoPage->callGroup($MenuID, $groupID);
    $smarty->assign("callGroupActive", $callGroupActive);
    $ContentID = GetContentID($url->segment[3]);
    $callCMS = $videoPage->callCMSList($MenuID, $ContentID, $callGroupActive->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']));

    $smarty->assign("callCMS", $callCMS);
    $smarty->assign("albumCMSImageURL", $albumCMSImageURL);
    ## breadcrumb
    $breadcrumb = $callCMS->fields['menuname'];
    $settingModulus['breadcrumb'] = $breadcrumb;

    ## title
    $settingModulus['title'] = $breadcrumb;

    // slick slide
    $initialSlide2 = 0;
    if (count($arrMenu) > 4) {
    foreach ($arrMenu as $key => $valuearrMenu) {
        if ($valuearrMenu['id'] == $callGroupActive->fields['id']) {
            break;
        } else {
            $initialSlide2++;
        }
    }
    }
    $smarty->assign("initialSlide2", '{"initialSlide": ' . $initialSlide2 . '}');

    /* ## Set up pagination ##### */
    $pagination['total'] = $callCMS->_maxRecordCount;
    $pagination['totalpage'] = ceil(($pagination['total'] / $limit));
    $pagination['limit'] = $limit;
    $pagination['curent'] = $page['on'];
    $pagination['method'] = $page;
    $smarty->assign("pagination", $pagination);
    /* ## Set up pagination ##### */

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