<?php

## default menu lv2
$arrMenu = $informationPage->callGroup($MenuID);
$smarty->assign("arrMenu", $arrMenu);
$menuMasterkey = "feed";
## RSS feed
$settingModulus['group'] = $callGroup->fields['id'];
$settingModulus['rssfeed'] = 1;
// print_pre($url->segment[1]);

switch ($url->segment[1]) {
   case 'detail':
      $ContentID = GetContentID($url->segment[2]);
      $callCMS = $informationPage->callCMS($menuMasterkey, $ContentID);
      // if ($callCMS->_numOfRows < 1) {
      //    header('location:' . $linklang . '/404');
      //    exit(0);
      // }
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

      /* ## Start Update View ##### */
      if (!isset($_COOKIE['VIEW_DETAIL_' . $menuMasterkey . '_' . urldecode($callCMS->fields['id'])])) {
         setcookie("VIEW_DETAIL_" . $menuMasterkey . '_' . urldecode($callCMS->fields['id']), true, time() + 600);
         $viewContent = $callSetWebsite->updateView($callCMS->fields['id'], $menuMasterkey, $config['cms']['db']['main']);
      }
      /* ## End Update View ##### */

      /* ## Start SEO ##### */
      if ($callCMS->fields['pic'] !== '') {
         $fullpath_pic = fileinclude($callCMS->fields['pic'], 'real', $menuMasterkey, 'link');
      } else {
         $fullpath_pic = '';
      }
      $smarty->assign("valSeoImages", $fullpath_pic);
      $seo_desc = ($callCMS->fields['description'] != '' ? $callCMS->fields['description'] : '');
      $seo_title = ($callCMS->fields['metatitle'] != '' ? $callCMS->fields['metatitle'] : $callCMS->fields['subject']);
      $seo_keyword = ($callCMS->fields['keywords'] != '' ? $callCMS->fields['keywords'] : '');
      $seo_pic = ($callCMS->fields['pic'] != '' ? $fullpath_pic : '');
      Seo($seo_title, $seo_desc, $seo_keyword);
      /* ## End SEO ##### */

      $settingPage = array(
          "page" => $menuActive,
          "template" => "cmsg_advance_detail_information_center.tpl",
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

    //   $callGroup = $informationPage->callGroup($MenuID, $ContentID);
    //   if ($callGroup->_numOfRows < 1) {
    //      header('location:' . $linklang . '/404');
    //      exit(0);
    //   }

      if ($callGroup->fields['isstatic']) {
         $rss = simplexml_load_file('https://www.diamondworld.net/rss/news.xml');

         $items = $rss->xpath('/rss/channel/item');

         $smarty->assign("rss", $rss->channel->item);
      }

      $smarty->assign("callGroup", $callGroup);

      $callCMS = $informationPage->callCMSList($menuMasterkey, 0, $callGroup->fields['id'], $page['on'], $limit, $req_params['order'], intval($req_params['year']),$req_params['keywords']);
      $smarty->assign("callCMS", $callCMS);

      ## menu lv 2 active
      $menuidLv2 = $callGroup->fields['id'];
      $smarty->assign("menuidLv2", $menuidLv2);

      ## breadcrumb
      $breadcrumb = explode("-", $callGroup->fields['menuname']);
      $settingModulus['breadcrumb'] = $breadcrumb[0];

      ## group by year for filter
      $callYear = $informationPage->callYear($menuMasterkey, $callGroup->fields['id']);
      $smarty->assign("callYear", $callYear);

      $smarty->assign("orderArray", $OrderArray);

      /* ## Start SEO ##### */
      $seo_desc = "";
      $seo_title = $settingModulus['breadcrumb'];
      $seo_keyword = "";
      Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
      /* ## End SEO ##### */

      /* ## Set up pagination ##### */
      $pagination['total'] = $callCMS->_maxRecordCount;
      $pagination['totalpage'] = ceil(($pagination['total'] / $limit));
      $pagination['limit'] = $limit;
      $pagination['curent'] = $page['on'];
      $pagination['method'] = $page;
      $smarty->assign("pagination", $pagination);
      /* ## Set up pagination ##### */

      $settingPage = array(
          "page" => $menuActive,
          "template" => "cms_advance_list_information_center.tpl",
          "display" => "page",
          "control" => "component",
      );
      break;
}