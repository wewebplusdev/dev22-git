<?php
## default menu lv2
$arrMenuFc = $infoServicePage->callGroup($MenuID);
foreach ($arrMenuFc as $keyarrMenuFc => $valuearrMenuFc) {
  $arrMenu[] = $valuearrMenuFc;
}
$smarty->assign("arrMenu", $arrMenu);


$callGroup = $infoServicePage->callGroup($MenuID, $ContentID);
// if ($callGroup->_numOfRows < 1) {
//     header('location:'.$linklang.'/404');
//     exit(0);
// }
$smarty->assign("callGroup", $callGroup);

## setting list
$limit = 12;
$order = $req_params['order'];
if ($order == 2) {
    $sorting = "ASC";
} else {
    $sorting = "DESC";
    $order = 1;
}
$smarty->assign("order", $order);

$callCMS = $infoServicePage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']), $valuecallSubGroup['id']);
$smarty->assign("callWel", $callCMS);

## menu lv 2 active
$menuidLv2 = $callGroup->fields['id'];
$smarty->assign("menuidLv2", $menuidLv2);

## breadcrumb
$breadcrumb = explode("-", $callGroup->fields['menuname']);
$settingModulus['breadcrumb'] = $breadcrumb[0];

## group by year for filter
$callYear = $infoServicePage->callYear($MenuID, $callGroup->fields['id']);
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
$pagination['total'] = $callCMS->_maxRecordCount;
$pagination['totalpage'] = ceil(($pagination['total'] / $limit));
$pagination['limit'] = $limit;
$pagination['curent'] = $page['on'];
$pagination['method'] = $page;
$smarty->assign("pagination", $pagination);
/*## Set up pagination #####*/

$settingPage = array(
  "page" => $menuActive,
  "template" => "weblink-2.tpl",
  "display" => "page",
  "control" => "component",
);