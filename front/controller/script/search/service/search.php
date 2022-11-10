<?php

$limit = 5;
$sorting = "DESC";
$order = $_REQUEST['order'];
$dateStart = $_REQUEST['trip-start'];
$dateEnd = $_REQUEST['trip-end'];
$typeSearch = $_REQUEST['typeSch'] ? $_REQUEST['typeSch'] : "1" ;
$typeOption = $_REQUEST['typeOption'] ? $_REQUEST['typeOption'] : "1" ;
$txtMasterkey = $_REQUEST['inputGroup'];
$keywords = trim($_REQUEST['srchtxt_main']);
$smarty->assign("srchtxt_main", $keywords);
echo $url->segment[1];
if ($url->segment[1] == 'hashtag') {
    $newhashtag = array();
    if ($typeSearch == 2) {
        if (!empty($keywords)) {
            $call_hashtag_page = $searchPage->call_hashtag($config['tag']['masterkey'], null, $keywords);
            foreach ($call_hashtag_page as $keycall_hashtag => $valuecall_hashtag) {
                array_push($newhashtag, $valuecall_hashtag['id']);
            }
            // setting txt search 
            $txt =" AND (";
            foreach ($newhashtag as $keynewhashtag => $valuenewhashtag) {
                if ($keynewhashtag > 0) {
                    $txt .= " OR ";
                }
                $txt .= "" . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_tid REGEXP '.*;s:[0-9]+:\"".$valuenewhashtag."\".*'";
            }
            $txt .=")";
            $smarty->assign("call_hashtag_page", $call_hashtag_page);
        }
    }else{
        if (!empty($hashtagID)) {
            array_push($newhashtag, $hashtagID);
            // setting txt search 
            $txt =" AND (";
            foreach ($newhashtag as $keynewhashtag => $valuenewhashtag) {
                if ($keynewhashtag > 0) {
                    $txt .= " OR ";
                }
                $txt .= "" . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_tid REGEXP '.*;s:[0-9]+:\"".$valuenewhashtag."\".*'";
            }
            $txt .=")";
            $call_hashtag_page = $searchPage->call_hashtag($config['tag']['masterkey'], $newhashtag);
            $smarty->assign("call_hashtag_page", $call_hashtag_page);
        }
        
    }

    $callSearchAll = $searchPage->callSearchAll($page['on'], $limit, $sorting, null, $txt, $dateStart, $dateEnd, $txtMasterkey);
    $smarty->assign("callSearchAll", $callSearchAll);

    $type_logs = 2;
}else{
    $callSearchAll = $searchPage->callSearchAll($page['on'], $limit, $sorting, $keywords, null, $dateStart, $dateEnd, $txtMasterkey);
    $smarty->assign("callSearchAll", $callSearchAll);
    $type_logs = 1;
}
$callText = $searchPage->callText($keywords);
        if (!isset($_COOKIE['SEARCH_UPDATE_' . $config['sch_logs']['masterkey'] . '_' . urldecode($keywords)]) && !empty($keywords)) {
            setcookie("SEARCH_UPDATE_" . $config['sch_logs']['masterkey'] . '_' . urldecode($keywords), true, time() + 600);
            $getip = getip();
            if ($callText->_numOfRows < 1) {
                $insertText = $searchPage->insertText($keywords, $type);
                $gid = $db->insert_Id();
            }else{
                $updateText = $searchPage->updateText($callText->fields['id'], $callText->fields['counter']+1);
                $gid = $callText->fields['id'];
            }
            $callText = $searchPage->insertLogs($gid, $getip);
        }
        /*## End Logs Search #####*/

        /*## Start Options Group #####*/
        $getSjon = file_get_contents('./webservice_json/menu.json');
        $arr_Json = json_decode($getSjon, true); // json decode from web service
        $arrNameMenu = array();
        foreach ($arr_Json as $keyarr_Json => $valuearr_Json) {
            array_push($arrNameMenu, "'".$valuearr_Json['menulv1']['dataset']['subject']."'");
        }
        $callSystemMenu = $searchPage->callSystemMenu($arrNameMenu);
        $smarty->assign("callSystemMenu", $callSystemMenu);
        /*## End Options Group #####*/

        /*## Start SEO #####*/
        $seo_pic = fileinclude($callService->fields['pic'],'real',$callService->fields['masterkey'],'link');
        $seo_desc ='';
        $seo_title = $lang['system']['search'];
        $seo_keyword ='';
        Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
        /*## End SEO #####*/

        /*## Set up pagination #####*/
        $pagination['total'] = $callSearchAll->_maxRecordCount;
        $pagination['totalpage'] = ceil(($pagination['total'] / $limit));
        $pagination['limit'] = $limit;
        $pagination['curent'] = $page['on'];
        $pagination['method'] = $page;
        $smarty->assign("pagination", $pagination);
        /*## Set up pagination #####*/

        $settingPage = array(
            "page" => $menuActive,
            "template" => "search.tpl",
            "display" => "page",
            "control" => "component",
        );
