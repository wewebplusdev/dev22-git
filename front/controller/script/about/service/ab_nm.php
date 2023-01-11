<?php

## default menu lv2
$arrMenu = $aboutPage->callGroup($MenuID);
$smarty->assign("arrMenu", $arrMenu);

## RSS feed
$settingModulus['group'] = $callGroup->fields['id'];
$settingModulus['rssfeed'] = 1;

switch ($PageAction) {
   case 'detail':
      $ContentID = GetContentID($url->segment[4]);
      $callCMS = $aboutPage->callCMS($MenuID, $ContentID);
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

      $Call_Album = $callSetWebsite->Call_Album($callCMS->fields['id'], $config['cma']['db']['main']);
      $smarty->assign("Call_Album", $Call_Album);
      $smarty->assign("Call_AlbumList", $Call_Album);

      ## breadcrumb
      $breadcrumb = explode("-", $callCMS->fields['menuname']);
      $settingModulus['breadcrumb'] = $breadcrumb[0];

      ## menu lv 2 active
      $menuidLv2 = $callCMS->fields['gid'];
      $smarty->assign("menuidLv2", $menuidLv2);

      /* ## Start Update View ##### */
      if (!isset($_COOKIE['VIEW_DETAIL_' . $MenuID . '_' . urldecode($callCMS->fields['id'])])) {
         setcookie("VIEW_DETAIL_" . $MenuID . '_' . urldecode($callCMS->fields['id']), true, time() + 600);
         $viewContent = $callSetWebsite->updateView($callCMS->fields['id'], $MenuID, $config['cms']['db']['main']);
      }
      /* ## End Update View ##### */

      /* ## Start SEO ##### */
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
      /* ## End SEO ##### */

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

      //$ContentID = GetContentID($url->segment[2]);
      $callGroup = $aboutPage->callGroup($MenuID, $ContentID);
      $SubGroupID = $url->segment[3];
      //print_pre($SubGroupID."=".$callGroup->fields['type']);
      //print_pre($SubGroupID."=".$callGroup);
      if ($callGroup->_numOfRows < 1) {
         header('location:' . $linklang . '/404');
         exit(0);
      }

      if ($callGroup->fields['isstatic']) {
         $rss = simplexml_load_file('https://www.diamondworld.net/rss/news.xml');

         $items = $rss->xpath('/rss/channel/item');

         $smarty->assign("rss", $rss->channel->item);
      }

      $smarty->assign("callGroupType", $callGroup->fields['types']);

      $smarty->assign("callGroup", $callGroup);
      $smarty->assign("callGroupType", $callGroup->fields['types']);

       ## group by year for filter
       $callYear = $aboutPage->callYear($MenuID, $callGroup->fields['id']);
       $smarty->assign("callYear", $callYear);
      ## list data
    if ($callGroup->fields['type'] == 1) {
      if ($callGroup->fields['types'] == 1) { ## for group
          $callCMS = $aboutPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $req_params['order'], intval($req_params['year']),$req_params['keywords']);
          $smarty->assign("callCMS", $callCMS);
          $MaxRecord = $callCMS->_maxRecordCount;
          $smarty->assign("orderArray", $OrderArray);
          $settingPage = array(
              "page" => $menuActive,
              "template" => "download-list-group.tpl",
              "display" => "page",
              "control" => "component",
          );
      }else{ ## for subgroup
          $callSubGroup = $aboutPage->callSubGroup($MenuID, $callGroup->fields['id'], $page['on'], null);
          //print_pre($callSubGroup->fields);
          $MaxRecord = $callSubGroup->_maxRecordCount;
          if(empty($SubGroupID) && $MaxRecord > 0){
              $SubGroupID = $callSubGroup->fields['id'];
           }
          $smarty->assign("orderArray", $OrderArray);
          $smarty->assign("subGroup",  $SubGroupID);
          $smarty->assign("callSubGroup", $callSubGroup);
          $smarty->assign("callSubGroupRows", $MaxRecord);
          $arrListData = array();
          $callCMS = $aboutPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $req_params['order'], null,$req_params['keywords'], $SubGroupID);    
          $smarty->assign("callCMS", $callCMS);
          $settingPage = array(
              "page" => $menuActive,
              "template" => "cms_advance_list.tpl",
              "display" => "page",
              "control" => "component",
          );
      }
  }else{
      $callCMS = $aboutPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']),$req_params['keywords']);
      $smarty->assign("callCMS", $callCMS);
      $MaxRecord = $callCMS->_maxRecordCount;
      $settingPage = array(
          "page" => $menuActive,
          "template" => "cms_advance_list.tpl",
          "display" => "page",
          "control" => "component",
      );
  }


      
      ## menu lv 2 active
      $menuidLv2 = $callGroup->fields['id'];
      $smarty->assign("menuidLv2", $menuidLv2);

      ## breadcrumb
      $breadcrumb = explode("-", $callGroup->fields['menuname']);
      $settingModulus['breadcrumb'] = $breadcrumb[0];


      //$smarty->assign("orderArray", $OrderArray);

      ## for subgroup ##
      $callSubGroup = $aboutPage->callSubGroup($MenuID, $callGroup->fields['id'], $page['on'], 20, $sorting, null);
      $MaxRecord = $callSubGroup->_maxRecordCount;
      if(empty($SubGroupID) && $MaxRecord > 0){
          $SubGroupID = $callSubGroup->fields['id'];
       }
       $SubGroupID = $url->segment[3];
      $smarty->assign("orderArray", $OrderArray);
      $smarty->assign("subGroup",  $SubGroupID);
      $smarty->assign("callSubGroup", $callSubGroup);
      $smarty->assign("callSubGroupRows", $MaxRecord);
      $arrListData = array();
      //foreach ($callSubGroup as $keycallSubGroup => $valuecallSubGroup) {
          $callCMS = $aboutPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $req_params['order'], null,$req_params['keywords'], $SubGroupID);
          $smarty->assign("callCMS", $callCMS);
          $arrListData[0]['subgroup'] = $SubGroupID;
          foreach ($callCMS as $keycallCMS => $valuecallCMS) {
              $arrListData[0]['list'][] = $valuecallCMS;
          }
      //}
      $smarty->assign("arrListData", $arrListData);

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

      /*$settingPage = array(
          "page" => $menuActive,
          "template" => "cms_advance_list.tpl",
          "display" => "page",
          "control" => "component",
      );*/
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
