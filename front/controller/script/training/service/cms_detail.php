<?php
## default menu lv2
$arrMenu = $trainingPage->callGroup($MenuID);
$smarty->assign("arrMenu", $arrMenu);
switch ($PageAction) {
    case 'detail':
        $ContentID = GetContentID($url->segment[4]);
        $callCMS = $trainingPage->callCMS($MenuID, $ContentID);
        if ($callCMS->_numOfRows < 1) {
            header('location:' . $linklang . '/404');
            exit(0);
        }
        $smarty->assign("callCMS", $callCMS);

        // call hashtag in news
        if (!empty(unserialize($callCMS->fields['tid']))) {
            $call_hashtag = $callSetWebsite->call_hashtag($config['tag']['main']['masterkey'], unserialize($callCMS->fields['tid']));
            $smarty->assign("call_hashtag", $call_hashtag);
        }

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
            "template" => "cmsg_advance_detail.tpl",
            "display" => "page",
            "control" => "component",
        );
        break;

    default:
        ## setting list
        $limit = 7;
        $order = $req_params['order'];
        if ($order == 2) {
            $sorting = "ASC";
        } else {
            $sorting = "DESC";
            $order = 1;
        }
        $smarty->assign("order", $order);

        $ContentID = GetContentID($url->segment[2]);
        $callGroup = $trainingPage->callGroup($MenuID, $ContentID);
        $smarty->assign("callGroup", $callGroup);
        if ($callGroup->_numOfRows < 1) {
            header('location:' . $linklang . '/404');
            exit(0);
        }


        $callCMS = $trainingPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']));
        $smarty->assign("callCMS", $callCMS);

        ## menu lv 2 active
        $menuidLv2 = $callGroup->fields['id'];
        $smarty->assign("menuidLv2", $menuidLv2);

        ## breadcrumb
        $breadcrumb = explode("-", $callGroup->fields['menuname']);
        $settingModulus['breadcrumb'] = $breadcrumb[0];
        $smarty->assign("TitleName",  $breadcrumb[0]."".$callGroup->fields['subject']);  

        /*## Start SEO #####*/
        $seo_desc = "";
        $seo_title = $settingModulus['breadcrumb'];
        $seo_keyword = "";
        Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
        /*## End SEO #####*/

        /*## Set up pagination #####*/
        $pagination['total'] = $callCMS->_maxRecordCount;
        $pagination['totalpage'] = ceil(($pagination['total'] / $limit));
        $pagination['limit'] = $limit;
        $pagination['curent'] = $page['on'];
        $pagination['method'] = $page;
        $smarty->assign("pagination", $pagination);
        /*## Set up pagination #####*/

        $settingPage = array(
            "page" => $menuActive,
            "template" => "cms_advance_training_list.tpl",
            "display" => "page",
            "control" => "component",
        );
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