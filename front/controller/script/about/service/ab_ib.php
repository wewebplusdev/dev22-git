<?php
## tgp
$settingModulus['tgp'] = '/assets/img/background/mock-top-grapphic-1.png';

## default menu lv2
$arrMenu = $aboutPage->callGroupMem($MenuID);
$smarty->assign("arrMenu", $arrMenu);

## call group active
$arrMenuActive = $aboutPage->callGroupMem($MenuID, $ContentID);
$smarty->assign("arrMenuActive", $arrMenuActive);

## call subgroup
$callPositionMem  = $aboutPage->callPositionMem($MenuID, 0, $arrMenuActive->fields['id']);
$arrSubGroup = array();
foreach ($callPositionMem as $keycallPositionMem => $valuecallPositionMem) {
    $arrSubGroup[] = "'".$valuecallPositionMem['gid']."'";
}

if ($callPositionMem->_numOfRows < 1) {
    header('location:'.$linklang.'/404');
    exit(0);
}

## create array of member
$sid = implode(",", $arrSubGroup);
$callMem = $aboutPage->callMem($MenuID, $sid);
$menuname = $callMem->fields['menuname'];
$arrMem = array();
foreach ($callMem as $keycallMem => $valuecallMem) {
    $arrMem[$valuecallMem['posi_gid']]['group'] = $valuecallMem['namegroup'];
    $arrMem[$valuecallMem['posi_gid']]['list'][] = $valuecallMem;
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
if($arrMenuActive->fields['pic'] !== ''){
    $fullpath_pic = fileinclude($arrMenuActive->fields['pic'],'real',$MenuID,'link');
}else{
    $fullpath_pic = '';
}
$smarty->assign("valSeoImages", $fullpath_pic);
$seo_desc =($arrMenuActive->fields['description']!='' ? $arrMenuActive->fields['description'] : '');
$seo_title =($arrMenuActive->fields['metatitle']!='' ? $arrMenuActive->fields['metatitle'] : $arrMenuActive->fields['subject']);
$seo_keyword =($arrMenuActive->fields['keywords']!='' ? $arrMenuActive->fields['keywords'] : '');
$seo_pic =($arrMenuActive->fields['pic']!='' ? $fullpath_pic : '');
Seo($seo_title, $seo_desc, $seo_keyword);
/*## End SEO #####*/

$settingPage = array(
    "page" => $menuActive,
    "template" => "cms_board.tpl",
    "display" => "page",
    "control" => "component",
);