<?php
## default menu lv2
$arrMenu = $aboutPage->callGroup($MenuID);
$smarty->assign("arrMenu", $arrMenu);

switch ($PageAction) {
  case 'detail':
    $ContentID = GetContentID($url->segment[4]);
    $callCMS = $aboutPage->callCMS($MenuID, $ContentID);

    if ($callCMS->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callCMS", $callCMS);

    $Call_File = $callSetWebsite->Call_File($callCMS->fields['id']);
    $smarty->assign("Call_File", $Call_File);

    ## breadcrumb
    $breadcrumb = explode("-", $callCMS->fields['menuname']);
    $settingModulus['breadcrumb'] = $breadcrumb[0];

    ## menu lv 2 active
    $menuidLv2 = $callCMS->fields['gid'];
    $smarty->assign("menuidLv2", $menuidLv2);

    /*## Start Update View #####*/
    if (!isset($_COOKIE['VIEW_DETAIL_' . $MenuID . '_' . urldecode($callCMS->fields['id'])])) {
        setcookie("VIEW_DETAIL_" . $MenuID . '_' . urldecode($callCMS->fields['id']), true, time() + 600);
        $viewContent = $callSetWebsite->updateView($callCMS->fields['id'], $MenuID, $config['cms']['db']['main']);
    }
    /*## End Update View #####*/

    /*## Start SEO #####*/
    if($callCMS->fields['pic'] !== ''){
        $fullpath_pic = fileinclude($callCMS->fields['pic'],'real',$MenuID,'link');
    }else{
        $fullpath_pic = '';
    }
    $smarty->assign("valSeoImages", $fullpath_pic);
    $seo_desc =($callCMS->fields['description']!='' ? $callCMS->fields['description'] : '');
    $seo_title =($callCMS->fields['metatitle']!='' ? $callCMS->fields['metatitle'] : $callCMS->fields['subject']);
    $seo_keyword =($callCMS->fields['keywords']!='' ? $callCMS->fields['keywords'] : '');
    $seo_pic =($callCMS->fields['pic']!='' ? $fullpath_pic : '');
    Seo($seo_title, $seo_desc, $seo_keyword);
    /*## End SEO #####*/

    $settingPage = array(
        "page" => $menuActive,
        "template" => "cms_advance_detail.tpl",
        "display" => "page",
        "control" => "component",
    );
    break;

  default:
    $callGroup = $aboutPage->callGroup($MenuID, $ContentID);

    if ($callGroup->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callGroup", $callGroup);

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

    ## list data
    if ($callGroup->fields['type'] == 1) {
        if ($callGroup->fields['types'] == 1) { ## for group
            $callCMS = $aboutPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']));
            $smarty->assign("callCMS", $callCMS);
            $MaxRecord = $callCMS->_maxRecordCount;
            $settingPage = array(
                "page" => $menuActive,
                "template" => "download-list-group.tpl",
                "display" => "page",
                "control" => "component",
            );
        }else{ ## for subgroup
            $callSubGroup = $aboutPage->callSubGroup($MenuID, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']));
            $MaxRecord = $callSubGroup->_maxRecordCount;
            $arrListData = array();
            foreach ($callSubGroup as $keycallSubGroup => $valuecallSubGroup) {
                $callCMS = $aboutPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']), $valuecallSubGroup['id']);
                $arrListData[$keycallSubGroup]['subgroup'] = $valuecallSubGroup;
                foreach ($callCMS as $keycallCMS => $valuecallCMS) {
                    $arrListData[$keycallSubGroup]['list'][] = $valuecallCMS;
                }
            }
            $smarty->assign("arrListData", $arrListData);
            $settingPage = array(
                "page" => $menuActive,
                "template" => "download-list-subgroup.tpl",
                "display" => "page",
                "control" => "component",
            );
        }
    }else{
        $callCMS = $aboutPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']));
        $smarty->assign("callCMS", $callCMS);
        $MaxRecord = $callCMS->_maxRecordCount;
        $settingPage = array(
            "page" => $menuActive,
            "template" => "download-list-group-theme-2.tpl",
            "display" => "page",
            "control" => "component",
        );
    }

    ## breadcrumb
    $breadcrumb = explode("-", $callGroup->fields['menuname']);
    $settingModulus['breadcrumb'] = $breadcrumb[0];

    ## group by year for filter
    $callYear = $aboutPage->callYear($MenuID, $callGroup->fields['id']);
    $smarty->assign("callYear", $callYear);

    /*## Start SEO #####*/
    if($callGroup->fields['pic'] !== ''){
        $fullpath_pic = fileinclude($callGroup->fields['pic'],'real',$MenuID,'link');
    }else{
        $fullpath_pic = '';
    }
    $smarty->assign("valSeoImages", $fullpath_pic);
    $seo_desc =($callGroup->fields['description']!='' ? $callGroup->fields['description'] : '');
    $seo_title =($callGroup->fields['metatitle']!='' ? $callGroup->fields['metatitle'] : $callGroup->fields['subject']);
    $seo_keyword =($callGroup->fields['keywords']!='' ? $callGroup->fields['keywords'] : '');
    $seo_pic =($callGroup->fields['pic']!='' ? $fullpath_pic : '');
    Seo($seo_title, $seo_desc, $seo_keyword);
    /*## End SEO #####*/

    /*## Set up pagination #####*/
    $pagination['total'] = $MaxRecord;
    $pagination['totalpage'] = ceil(($pagination['total'] / $limit));
    $pagination['limit'] = $limit;
    $pagination['curent'] = $page['on'];
    $pagination['method'] = $page;
    $smarty->assign("pagination", $pagination);
    /*## Set up pagination #####*/
    break;
}