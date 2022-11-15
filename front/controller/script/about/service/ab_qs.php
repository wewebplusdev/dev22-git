<?php
$showslick = true; // slick shows
## default menu lv2
$call_list_first = $aboutPage->callCMS($config['about']['ab_qs']['masterkey']);
## merg array
foreach ($call_list_first as $keycall_list_first => $valuecall_list_first) {
    $arrMenu[] = $valuecall_list_first;
}
$smarty->assign("arrMenu", $arrMenu);

switch ($PageAction) {
  
  default:
    $ContentID = GetContentID($url->segment[2]);
    $callCMS = $aboutPage->callCMS($MenuID, $ContentID);
    if ($callCMS->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callCMS", $callCMS);

    // slick slide
    $initialSlide2 = 0;
    if (count($call_list_first->_numOfRows) > 4) {
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
    $breadcrumb = explode("-", $callCMS->fields['subject']);
    $settingModulus['breadcrumb'] = $breadcrumb[0];

    ## menu lv 2 active
    $menuidLv2 = $callCMS->fields['id'];
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
}