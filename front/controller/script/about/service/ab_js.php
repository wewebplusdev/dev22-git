<?php
// $showslick = false; // slick shows
// ## default menu lv1
// $getMenuDetailFc = $policyPage->callCMS($config['about']['plc']['masterkey']);
// foreach ($getMenuDetailFc as $keygetMenuDetailFc => $valuegetMenuDetailFc) {
//     $getMenuDetail[$keygetMenuDetailFc]['masterkey'] = $valuegetMenuDetailFc['masterkey'].$valuegetMenuDetailFc['id'];
//     $getMenuDetail[$keygetMenuDetailFc]['id'] = $valuegetMenuDetailFc['id'];
//     $getMenuDetail[$keygetMenuDetailFc]['subject'] = $valuegetMenuDetailFc['subject'];
// }
// $smarty->assign("getMenuDetail", $getMenuDetail);

switch ($PageActionCareer) {

  case 'career-form':
    $ContentID = GetContentID($url->segment[3]);

    $Call_File = $callSetWebsite->Call_File_table($callCMS->fields['id'], $config['jof']['db']['main']);
    $smarty->assign("Call_File", $Call_File);

    ## breadcrumb
    $breadcrumb = explode("-", $callCMS->fields['menuname']);
    $settingModulus['breadcrumb'] = $breadcrumb[0];

    /*## Start SEO #####*/
    $seo_desc ="";
    $seo_title =$lang['menu']['career'];
    $seo_keyword ="";
    Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
    /*## End SEO #####*/

    $settingPage = array(
        "page" => $menuActive,
        "template" => "career-form.tpl",
        "display" => "page",
        "control" => "component",
    );
    break;

  case 'detail':
    $ContentID = GetContentID($url->segment[3]);
    $callCMS = $aboutPage->callCareerDetail($config['about']['ab_js']['masterkey'], $ContentID);
    if ($callCMS->_numOfRows < 1) {
        header('location:' . $linklang . '/404');
        exit(0);
    }
    $smarty->assign("callCMS", $callCMS);

    $Call_File = $callSetWebsite->Call_File_table($callCMS->fields['id'], $config['jof']['db']['main']);
    $smarty->assign("Call_File", $Call_File);

    ## breadcrumb
    $breadcrumb = explode("-", $callCMS->fields['menuname']);
    $settingModulus['breadcrumb'] = $breadcrumb[0];

    /*## Start Update View #####*/
    if (!isset($_COOKIE['VIEW_DETAIL_' . $MenuID . '_' . urldecode($callCMS->fields['id'])])) {
        setcookie("VIEW_DETAIL_" . $MenuID . '_' . urldecode($callCMS->fields['id']), true, time() + 600);
        $viewContent = $callSetWebsite->updateView($callCMS->fields['id'], $MenuID, $config['jos']['db']['main']);
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

    $settingPage = array(
        "page" => $menuActive,
        "template" => "career-detail.tpl",
        "display" => "page",
        "control" => "component",
    );
    break;
  
  default:
    $limit = 10;
    $order = $_REQUEST['order'];
    if ($order == 2) {
        $sorting = "ASC";
    } else {
        $sorting = "DESC";
        $order = 1;
    }
    $smarty->assign("order", $order);
    $callCMS = $aboutPage->callListCareer($config['about']['ab_js']['masterkey'], $page['on'], $limit, $sorting, $req_params['keywords'], $req_params['selectcareer']);

    if ($callCMS->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callCMS", $callCMS);

    $callSetting = $aboutPage->callSetting($config['about']['ab_js']['masterkey']);
    $smarty->assign("callSetting", $callSetting);

    //select list
    $callListCareerSelect = $aboutPage->callListCareer($config['about']['ab_js']['masterkey'], $page['on'], $limit, $sorting);
    $smarty->assign("callListCareerSelect", $callListCareerSelect);

    ## breadcrumb
    $breadcrumb = explode("-", $callCMS->fields['menuname']);
    $settingModulus['breadcrumb'] = $breadcrumb[0];

    /*## Start SEO #####*/
    $seo_desc ="";
    $seo_title =$lang['menu']['career'];
    $seo_keyword ="";
    Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
    /*## End SEO #####*/

    /*## Set up pagination #####*/
    $pagination['total'] = $callListCareer->_maxRecordCount;
    $pagination['totalpage'] = ceil(($pagination['total'] / $limit));
    $pagination['limit'] = $limit;
    $pagination['curent'] = $page['on'];
    $pagination['method'] = $page;
    $smarty->assign("pagination", $pagination);
    /*## Set up pagination #####*/

    $settingPage = array(
        "page" => $menuActive,
        "template" => "career-list.tpl",
        "display" => "page",
        "control" => "component",
    );
    break;
}