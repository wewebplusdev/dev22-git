<?php
## default menu lv2
$arrMenuFc = $researchPage->callGroup($MenuID);
foreach ($arrMenuFc as $keyarrMenuFc => $valuearrMenuFc) {
    $arrMenu[] = $valuearrMenuFc;
}
$smarty->assign("arrMenu", $arrMenu);
if(empty($ContentID)){
    $ContentID = "179";
}

switch ($ContentID) {
    case('179'):
        
    $ContentID = GetContentID($url->segment[2]);
    $callCMS = $researchPage->callCMS($MenuID,'2539',$ContentID);
    if ($callCMS->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callCMS", $callCMS);

    // slick slide
    $initialSlide2 = 0;
    if (count($callCMS->_numOfRows) > 4) {
        foreach ($arrMenu as $key => $valuearrMenu) {
            if ($valuearrMenu['id'] == $callCMS->fields['id']) {
                break;
            } else {
                $initialSlide2++;
            }
        }
    }
    $smarty->assign("initialSlide2", '{"initialSlide": ' . $initialSlide2 . '}');

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
        switch ($PageAction_default) {
            case 'detail':
                $ContentID = GetContentID($url->segment[4]);
                $callCMS = $researchPage->callCMS($MenuID, $ContentID);

                if ($callCMS->_numOfRows < 1) {
                    header('location:' . $linklang . '/404');
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
                    "template" => "cms_advance_detail_file.tpl",
                    "display" => "page",
                    "control" => "component",
                );
                break;

            default:

                $callGroup = $researchPage->callGroup($MenuID, $ContentID);
                $SubGroupID = $url->segment[3];
                //print_pre($SubGroupID);
                if ($callGroup->_numOfRows < 1) {
                    header('location:' . $linklang . '/404');
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
                $smarty->assign("callGroupType", $callGroup->fields['types']);
                // print_pre($callGroup->fields['types']);die;
                ## list data
                if ($callGroup->fields['types'] == 1) { ## for group
                    $callCMS = $researchPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $req_params['order'], intval($req_params['year']), $req_params['keywords']);
                    $smarty->assign("callCMS", $callCMS);
                    $smarty->assign("orderArray", $OrderArray);
                    $MaxRecord = $callCMS->_maxRecordCount;
                    $settingPage = array(
                        "page" => $menuActive,
                        "template" => "download-list-group.tpl",
                        "display" => "page",
                        "control" => "component",
                    );
                } else { ## for subgroup
                    $callSubGroup = $researchPage->callSubGroup($MenuID, $callGroup->fields['id'], $page['on'], $limit, $sorting, null);
                    $smarty->assign("callSubGroup", $callSubGroup);
                    $MaxRecordsubgroup = $callSubGroup->_maxRecordCount;
                    if (empty($SubGroupID) && $MaxRecordsubgroup > 0) {
                        $SubGroupID = $callSubGroup->fields['id'];
                    }
                    $smarty->assign("SubGroupID", $SubGroupID);
                    $callCMS = $researchPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $req_params['order'], intval($req_params['year']), $req_params['keywords'], $SubGroupID);
                    $smarty->assign("callCMS", $callCMS);
                    $smarty->assign("orderArray", $OrderArray);
                    $MaxRecord = $callSubGroup->_maxRecordCount;
                    $settingPage = array(
                        "page" => $menuActive,
                        "template" => "download-list-subgroup.tpl",
                        "display" => "page",
                        "control" => "component",
                    );
                }
                $smarty->assign("masterkey_rs_ri", 'rs_ri');

                ## breadcrumb
                $breadcrumb = explode("-", $callGroup->fields['menuname']);
                $settingModulus['breadcrumb'] = $breadcrumb[0];

                ## menu lv 2 active
                $menuidLv2 = $callGroup->fields['id'];
                $smarty->assign("menuidLv2", $menuidLv2);

                ## group by year for filter
                $callYear = $researchPage->callYear($MenuID, $callGroup->fields['id']);
                $smarty->assign("callYear", $callYear);

                /*## Start SEO #####*/
                if ($callGroup->fields['pic'] !== '') {
                    $fullpath_pic = fileinclude($callGroup->fields['pic'], 'real', $MenuID, 'link');
                } else {
                    $fullpath_pic = '';
                }
                $smarty->assign("valSeoImages", $fullpath_pic);
                $seo_desc = ($callGroup->fields['description'] != '' ? $callGroup->fields['description'] : '');
                $seo_title = ($callGroup->fields['metatitle'] != '' ? $callGroup->fields['metatitle'] : $callGroup->fields['subject']);
                $seo_keyword = ($callGroup->fields['keywords'] != '' ? $callGroup->fields['keywords'] : '');
                $seo_pic = ($callGroup->fields['pic'] != '' ? $fullpath_pic : '');
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
        break;
}
// slick slide
$initialSlide2 = 0;
if (count($arrMenu) > 4) {
    foreach ($arrMenu as $key => $valuearrMenu) {
        if ($valuearrMenu['id'] == $menuidLv2) {
            break;
        } else {
            $initialSlide2++;
        }
    }
}
$smarty->assign("initialSlide2", '{"initialSlide": ' . $initialSlide2 . '}');
