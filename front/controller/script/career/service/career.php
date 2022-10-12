<?php
$showslick = false; // slick shows
## default menu lv1
$getMenuDetailFc = $policyPage->callCMS($config['about']['plc']['masterkey']);
foreach ($getMenuDetailFc as $keygetMenuDetailFc => $valuegetMenuDetailFc) {
    $getMenuDetail[$keygetMenuDetailFc]['masterkey'] = $valuegetMenuDetailFc['masterkey'].$valuegetMenuDetailFc['id'];
    $getMenuDetail[$keygetMenuDetailFc]['id'] = $valuegetMenuDetailFc['id'];
    $getMenuDetail[$keygetMenuDetailFc]['subject'] = $valuegetMenuDetailFc['subject'];
}
$smarty->assign("getMenuDetail", $getMenuDetail);

switch ($PageAction) {
  
  default:
    $ContentID = GetContentID($url->segment[1]);
    $callCMS = $policyPage->callCMS($MenuID, $ContentID);

    // if ($callCMS->_numOfRows < 1) {
    //     header('location:'.$linklang.'/404');
    //     exit(0);
    // }
    // $smarty->assign("callCMS", $callCMS);

    // $Call_File = $callSetWebsite->Call_File($callCMS->fields['id']);
    // $smarty->assign("Call_File", $Call_File);

    // ## title
    // $settingModulus['title'] = $callCMS->fields['subject'];

    // ## breadcrumb
    // $breadcrumb = explode("-", $settingModulus['title']);
    // $settingModulus['breadcrumb'] = $breadcrumb[0];

    // ## menu lv 2 active
    // $menuidLv2 = $callCMS->fields['gid'];
    // $smarty->assign("menuidLv2", $menuidLv2);

    // /*## Start Update View #####*/
    // if (!isset($_COOKIE['VIEW_DETAIL_' . $MenuID . '_' . urldecode($callCMS->fields['id'])])) {
    //     setcookie("VIEW_DETAIL_" . $MenuID . '_' . urldecode($callCMS->fields['id']), true, time() + 600);
    //     $viewContent = $callSetWebsite->updateView($callCMS->fields['id'], $MenuID, $config['cms']['db']['main']);
    // }
    // /*## End Update View #####*/

    // /*## Start SEO #####*/
    // if($callCMS->fields['pic'] !== ''){
    //     $fullpath_pic = fileinclude($callCMS->fields['pic'],'real',$MenuID,'link');
    // }else{
    //     $fullpath_pic = '';
    // }
    // $smarty->assign("valSeoImages", $fullpath_pic);
    // $seo_desc =($callCMS->fields['description']!='' ? $callCMS->fields['description'] : '');
    // $seo_title =($callCMS->fields['metatitle']!='' ? $callCMS->fields['metatitle'] : $callCMS->fields['subject']);
    // $seo_keyword =($callCMS->fields['keywords']!='' ? $callCMS->fields['keywords'] : '');
    // $seo_pic =($callCMS->fields['pic']!='' ? $fullpath_pic : '');
    // Seo($seo_title, $seo_desc, $seo_keyword);
    // /*## End SEO #####*/

    
    // // slick slide
    // $MenuID = $MenuID.$callCMS->fields['id'];
    // $initialSlide = 0;
    // if (count($getMenuDetail) > 4) {
    //     foreach ($getMenuDetail as $key => $valuegetMenuDetail) {
    //         if ($valuegetMenuDetail['masterkey'] == $MenuID) {
    //             break;
    //         } else {
    //             $initialSlide++;
    //         }
    //     }
    // }
    // $smarty->assign("initialSlide", '{"initialSlide": ' . $initialSlide . '}');

    $settingPage = array(
        "page" => $menuActive,
        "template" => "cms_advance_detail.tpl",
        "display" => "page",
        "control" => "component",
    );
    break;
}