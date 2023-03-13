<?php
## tgp
$settingModulus['tgp'] = '/assets/img/background/mock-top-grapphic-1.png';

## default menu lv2
$call_list_first = $aboutPage->callGroupMem('ab_ib');
$call_list_seconde = $aboutPage->callGroup('ab_ibdwn');
## merg array
foreach ($call_list_first as $keycall_list_first => $valuecall_list_first) {
    $arrMenu[] = $valuecall_list_first;
}
foreach ($call_list_seconde as $keycall_list_seconde => $valuecall_list_seconde) {
    $arrMenu[] = $valuecall_list_seconde;
}
$smarty->assign("arrMenu", $arrMenu);

## call group active
$arrMenuActive = $aboutPage->callGroupMem($MenuID, $ContentID);
$smarty->assign("arrMenuActive", $arrMenuActive);

$ContantBoard = intval($url->segment[4]);
## case 2 menu
switch ($MenuID) {
    case 'ab_ib':
        switch ($url->segment[3]) {
            case 'detail':
                $callCMS = $aboutPage->callMem($MenuID, 0, $arrMenuActive->fields['id'], $ContantBoard);
                $smarty->assign("callCMS", $callCMS);

                ## breadcrumb
                $breadcrumb = explode("-", $callCMS->fields['menuname']);
                $settingModulus['breadcrumb'] = $breadcrumb[0];

                ## menu lv 2 active
                $menuidLv2 = $arrMenuActive->fields['id'];
                $smarty->assign("menuidLv2", $menuidLv2);

                /* ## Start Update View ##### */
                if (!isset($_COOKIE['VIEW_DETAIL_' . $MenuID . '_' . urldecode($callCMS->fields['id'])])) {
                    setcookie("VIEW_DETAIL_" . $MenuID . '_' . urldecode($callCMS->fields['id']), true, time() + 600);
                    $viewContent = $callSetWebsite->updateView($callCMS->fields['id'], $MenuID, $config['mem']['db']['main']);
                }
                /* ## End Update View ##### */

                /*## Start SEO #####*/
                if ($arrMenuActive->fields['pic'] !== '') {
                    $fullpath_pic = fileinclude($arrMenuActive->fields['pic'], 'real', $MenuID, 'link');
                } else {
                    $fullpath_pic = '';
                }
                $smarty->assign("valSeoImages", $fullpath_pic);
                $seo_desc = ($arrMenuActive->fields['description'] != '' ? $arrMenuActive->fields['description'] : '');
                $seo_title = ($arrMenuActive->fields['metatitle'] != '' ? $arrMenuActive->fields['metatitle'] : $arrMenuActive->fields['subject']);
                $seo_keyword = ($arrMenuActive->fields['keywords'] != '' ? $arrMenuActive->fields['keywords'] : '');
                $seo_pic = ($arrMenuActive->fields['pic'] != '' ? $fullpath_pic : '');
                Seo($seo_title, $seo_desc, $seo_keyword);
                /*## End SEO #####*/

                $settingPage = array(
                    "page" => $menuActive,
                    "template" => "cms_advance_detail_board.tpl",
                    "display" => "page",
                    "control" => "component",
                );
                break;

            default:
                ## call subgroup
                $callPositionMem  = $aboutPage->callPositionMem($MenuID, 0, $arrMenuActive->fields['id']);
                $arrSubGroup = array();
                foreach ($callPositionMem as $keycallPositionMem => $valuecallPositionMem) {
                    $arrSubGroup[] = "'" . $valuecallPositionMem['gid'] . "'";
                    // $arrSubGroup[] = $valuecallPositionMem['gid'];
                }
                // print_pre($arrSubGroup);

                // if ($callPositionMem->_numOfRows < 1) {
                //     header('location:'.$linklang.'/404');
                //     exit(0);
                // }

                ## create array of member
                $sid = implode(",", $arrSubGroup);
                $callSubGroupMem = $aboutPage->callSubGroupMem($MenuID, null, $sid);
                $arrMem = array();
                foreach ($callSubGroupMem as $keycallSubGroupMem => $valuecallSubGroupMem) {
                    $callMem = $aboutPage->callMem($MenuID, "'" . $valuecallSubGroupMem['id'] . "'", $arrMenuActive->fields['id']);
                    $menuname = $callMem->fields['menuname'];
                    foreach ($callMem as $keycallMem => $valuecallMem) {
                        $arrMem[$keycallSubGroupMem][$valuecallMem['posi_gid']]['group'] = $valuecallMem['namegroup'];
                        $arrMem[$keycallSubGroupMem][$valuecallMem['posi_gid']]['list'][] = $valuecallMem;
                    }
                }
                $smarty->assign("arrMem", $arrMem);
                // print_pre($arrMem);

                ## breadcrumb
                $breadcrumb = explode("-", $menuname);
                $settingModulus['breadcrumb'] = $breadcrumb[0];

                ## menu lv 2 active
                $menuidLv2 = $arrMenuActive->fields['id'];
                $smarty->assign("menuidLv2", $menuidLv2);

                ## detail page
                $Call_File_table = $callSetWebsite->Call_File_table($arrMenuActive->fields['id'], $config['memf']['db']['main']);
                $smarty->assign("Call_File", $Call_File_table);

                /*## Start SEO #####*/
                if ($arrMenuActive->fields['pic'] !== '') {
                    $fullpath_pic = fileinclude($arrMenuActive->fields['pic'], 'real', $MenuID, 'link');
                } else {
                    $fullpath_pic = '';
                }
                $smarty->assign("valSeoImages", $fullpath_pic);
                $seo_desc = ($arrMenuActive->fields['description'] != '' ? $arrMenuActive->fields['description'] : '');
                $seo_title = ($arrMenuActive->fields['metatitle'] != '' ? $arrMenuActive->fields['metatitle'] : $arrMenuActive->fields['subject']);
                $seo_keyword = ($arrMenuActive->fields['keywords'] != '' ? $arrMenuActive->fields['keywords'] : '');
                $seo_pic = ($arrMenuActive->fields['pic'] != '' ? $fullpath_pic : '');
                Seo($seo_title, $seo_desc, $seo_keyword);
                /*## End SEO #####*/

                $settingPage = array(
                    "page" => $menuActive,
                    "template" => "cms_board.tpl",
                    "display" => "page",
                    "control" => "component",
                );
                break;
        }
        break;

    case 'ab_ibdwn':
        
        switch ($url->segment[3]) {
            case 'detail':
                $ContentID = GetContentID($url->segment[4]);
                $callCMS = $aboutPage->callCMS('ab_ibdwn', $ContentID);

                // if ($callCMS->_numOfRows < 1) {
                //     header('location:' . $linklang . '/404');
                //     exit(0);
                // }
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

                $MenuID = "ab_ibdwn"; // fixed ไว้ เพื่อ active menu แรกเสมอ
                $settingPage = array(
                    "page" => $menuActive,
                    "template" => "cms_advance_detail_file.tpl",
                    "display" => "page",
                    "control" => "component",
                );
                break;

            default:
                $callGroup = $aboutPage->callGroup($MenuID, $ContentID);
                $SubGroupID = $url->segment[3];
                // if ($callGroup->_numOfRows < 1) {
                //     header('location:' . $linklang . '/404');
                //     exit(0);
                // }
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
                ## list data
                if ($callGroup->fields['type'] == 1) {
                    if ($callGroup->fields['types'] == 1) { ## for group
                        $callCMS = $aboutPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $req_params['order'], intval($req_params['year']), $req_params['keywords']);
                        $masterkey_page = $callCMS->fields['masterkey'];
                        $smarty->assign("callCMS", $callCMS);
                        $smarty->assign("orderArray", $OrderArray);
                        $MaxRecord = $callCMS->_maxRecordCount;
                        $MenuID = "ab_ibdwn"; // fixed ไว้ เพื่อ active menu แรกเสมอ
                        $settingPage = array(
                            "page" => $menuActive,
                            "template" => "download-list-group.tpl",
                            "display" => "page",
                            "control" => "component",
                        );
                    } else { ## for subgroup
                        $callSubGroup = $aboutPage->callSubGroup($MenuID, $callGroup->fields['id'], $page['on'], null);
                        $smarty->assign("callSubGroup", $callSubGroup);
                        $MaxRecordsubgroup = $callSubGroup->_maxRecordCount;
                        if (empty($SubGroupID) && $MaxRecordsubgroup > 0) {
                            $SubGroupID = $callSubGroup->fields['id'];
                        }
                        $smarty->assign("SubGroupID", $SubGroupID);
                        $callCMS = $aboutPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $req_params['order'], intval($req_params['year']), $req_params['keywords'], $SubGroupID);
                        $smarty->assign("callCMS", $callCMS);
                        $smarty->assign("orderArray", $OrderArray);
                        $MaxRecord = $callCMS->_maxRecordCount;
                        $MenuID = "ab_ibdwn"; // fixed ไว้ เพื่อ active menu แรกเสมอ
                        $settingPage = array(
                            "page" => $menuActive,
                            "template" => "download-list-subgroup.tpl",
                            "display" => "page",
                            "control" => "component",
                        );
                    }
                } else {
                    $callCMS = $aboutPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']));
                    $masterkey_page = $callCMS->fields['masterkey'];
                    $smarty->assign("callCMS", $callCMS);
                    $MaxRecord = $callCMS->_maxRecordCount;
                    $MenuID = "ab_ibdwn"; // fixed ไว้ เพื่อ active menu แรกเสมอ
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

                ## menu lv 2 active
                $menuidLv2 = $callGroup->fields['id'];
                $smarty->assign("menuidLv2", $menuidLv2);

                ## group by year for filter
                $callYear = $aboutPage->callYear($masterkey_page, $callGroup->fields['id']);
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
