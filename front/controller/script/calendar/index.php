<?php
$menuActive = "calendar";
$menuDetail = "detail";
// include script for page
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

// class loaded
$calendarPage = new calendarPage;
$ContantID = intval(decodeStr($url->segment[2]));

switch ($url->segment[1]) {
    case 'load-carlendar-home':
        // api calendar home page
        require_once _DIR . '/front/controller/script/'.$menuActive.'/service/load-carlendar-home.php';
        break;

    case 'load-calendar':
        // load calendar body
        require_once _DIR . '/front/controller/script/'.$menuActive.'/service/load-calendar.php';
        break;

    case 'load-calendar-list':
        // api calendar list item
        require_once _DIR . '/front/controller/script/'.$menuActive.'/service/load-calendar-list.php';
        break;

    case 'detail':
        // page active for js
        $pagenow = "detail";
        $smarty->assign("pagenow", $pagenow);

        // call calendar detail
        $callCalendarDetail = $calendarPage->callCalendarDetail($config['cl']['masterkey'], $ContantID);
        $smarty->assign("callCalendarDetail", $callCalendarDetail);

        // not found data
        if ($callCalendarDetail->_numOfRows < 1) {
            header('Location:' . $linklang . "/" . $menuActive);
        }

        // call album
        $Call_Album = $callSetWebsite->Call_Album($callCalendarDetail->fields['id'], $config['caa']['db']['main']);
        $smarty->assign("Call_Album", $Call_Album);

        // call download
        $Call_File = $callSetWebsite->Call_File_table($callCalendarDetail->fields['id'], $config['caf']['db']['main']);
        $smarty->assign("Call_File", $Call_File);

        // call hashtag
        if (!empty(unserialize($callCalendarDetail->fields['tid']))) {
            $call_hashtag = $callSetWebsite->call_hashtag($config['tag']['masterkey'], unserialize($callCalendarDetail->fields['tid']));
            $smarty->assign("call_hashtag", $call_hashtag);
        }

        /*## Start Update View #####*/
        if (!isset($_COOKIE['VIEW_DETAIL_' . $config['cl']['masterkey'] . '_' . urldecode($ContantID)])) {
            setcookie("VIEW_DETAIL_" . $config['cl']['masterkey'] . '_' . urldecode($ContantID), true, time() + 600);
            $viewContent = $callSetWebsite->updateView($ContantID, $config['cl']['masterkey'], $config['cas']['db']['main']);
        }
        /*## End Update View #####*/

        /*## Start SEO #####*/
        $fullpath_pic = fileinclude($callCalendarDetail->fields['pic'],'real',$callCalendarDetail->fields['masterkey'],'album');
        $smarty->assign("valSeoImages", $fullpath_pic);
        $seo_desc =($callCalendarDetail->fields['description']!='' ? $callCalendarDetail->fields['description'] : '');
        $seo_title =($callCalendarDetail->fields['metatitle']!='' ? $callCalendarDetail->fields['metatitle'] : $callCalendarDetail->fields['subject']);
        $seo_keyword =($callCalendarDetail->fields['keywords']!='' ? $callCalendarDetail->fields['keywords'] : '');
        $seo_pic =($callNewsDetail->fields['pic']!='' ? $fullpath_pic : '');
        Seo($seo_title, $seo_desc, $seo_keyword);
        /*## End SEO #####*/

        $settingPage = array(
            "page" => $menuActive,
            "template" => "detail.tpl",
            "display" => "page"
        );
        break;

    default:
        // page active for js
        $pagenow = "home";
        $smarty->assign("pagenow", $pagenow);

        // call calendar group
        $callCalendarGroup = $calendarPage->callCalendarGroup($config['cl']['masterkey']);
        $smarty->assign("callCalendarGroup", $callCalendarGroup);

        /*## Start SEO #####*/
        $seo_desc = "";
        $seo_title = $lang['menu']['calendar'];
        $seo_keyword = "";
        Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
        /*## End SEO #####*/

        $settingPage = array(
            "page" => $menuActive,
            "template" => "index.tpl",
            "display" => "page"
        );
        break;
}

$smarty->assign("calendarPage", $calendarPage);
$smarty->assign("day_array", $day_array);
$smarty->assign("date_array", $date_array);
$smarty->assign("pageMasterkey", $config['cl']['masterkey']);
$smarty->assign("langFull", $url->pagelang[4]);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);

$urlfull = _FullUrl;
$smarty->assign("domain", _Domain);
$smarty->assign("urlfull", $urlfull);
$smarty->assign("settingModulus", $settingModulus);