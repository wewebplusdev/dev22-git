<?php
## default menu lv2
$call_list_first = $trainingPage->callCMS($config['trw_his']['main']['masterkey']);
$call_list_seconde = $trainingPage->callGroup($config['trw_con']['main']['masterkey']);
$call_list_thrid = $trainingPage->callGroup($config['trw_web']['main']['masterkey']);
$call_list_thrid = $callSetWebsite->getMenuDetail(0, $config['trw_web']['main']['masterkey']);
## merg array
foreach ($call_list_first as $keycall_list_first => $valuecall_list_first) {
    $arrMenu[] = $valuecall_list_first;
}
foreach ($call_list_seconde as $keycall_list_seconde => $valuecall_list_seconde) {
    $arrMenu[] = $valuecall_list_seconde;
}
foreach ($call_list_thrid as $keycall_list_thrid => $valuecall_list_thrid) {
    $arrMenu[$keygetMenuDetailFc][0] = $valuecall_list_thrid[0];
    $arrMenu[$keygetMenuDetailFc]['id'] = $valuecall_list_thrid['id'];
    $arrMenu[$keygetMenuDetailFc][1] = $valuecall_list_thrid[1];
    $arrMenu[$keygetMenuDetailFc]['masterkey'] = $valuecall_list_thrid['masterkey'];
  
    $subjectMnu = explode('-', $valuecall_list_thrid['subject']);
    $arrMenu[$keygetMenuDetailFc][2] = $subjectMnu[1];
    $arrMenu[$keygetMenuDetailFc]['subject'] = $subjectMnu[1];
}
$smarty->assign("arrMenu", $arrMenu);

## case 2 menu
switch ($MenuID) {
  case 'trw_web':
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

      $arrData = array();
      $callGroup = $trainingPage->callGroupList($MenuID, 0, $page['on'], $limit, $sorting);
      foreach ($callGroup as $keycallGroup => $valuecallGroup) {
        $arrData[$keycallGroup]['group']['id'] = $valuecallGroup['id'];
        $arrData[$keycallGroup]['group']['subject'] = $valuecallGroup['subject'];

        $callCMS = $trainingPage->callCMS($MenuID, 0, $valuecallGroup['id']);
        foreach ($callCMS as $keycallCMS => $valuecallCMS) {
            $arrData[$keycallGroup]['list'][] = $valuecallCMS;
            $activeID = $valuecallCMS['menuid'];
            $activeName = $valuecallCMS['menuname'];
        }
      }
      $smarty->assign("callCMS_arr", $arrData);
    //   print_pre($arrData);

      // slick slide
      $initialSlide2 = 0;
      if (count($callCMS->_numOfRows) > 4) {
          foreach ($arrMenu as $key => $valuearrMenu) {
              if ($valuearrMenu['id'] == $callCMS->fields['menuid'] && $callCMS->fields['masterkey'] == $valuearrMenu['masterkey']) {
                  break;
              } else {
                  $initialSlide2++;
              }
          }
      }
      $smarty->assign("initialSlide2", '{"initialSlide": ' . $initialSlide2 . '}');

      ## breadcrumb
      $breadcrumb = explode("-", $activeName);
      $settingModulus['breadcrumb'] = $breadcrumb[0];
      $settingModulus['namepage'] = $breadcrumb[1];

      ## menu lv 2 active
      $menuidLv2 = $activeID;
      $smarty->assign("menuidLv2", $menuidLv2);

    /*## Start SEO #####*/
    $seo_desc = "";
    $seo_title = $breadcrumb[1];
    $seo_keyword = "";
    Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
    /*## End SEO #####*/

    
    /*## Set up pagination #####*/
    $pagination['total'] = $callGroup->_maxRecordCount;
    $pagination['totalpage'] = ceil(($pagination['total'] / $limit));
    $pagination['limit'] = $limit;
    $pagination['curent'] = $page['on'];
    $pagination['method'] = $page;
    $smarty->assign("pagination", $pagination);
    /*## Set up pagination #####*/

      $MenuID = "trw_his";
      $settingPage = array(
          "page" => $menuActive,
          "template" => "weblink_group.tpl",
          "display" => "page",
          "control" => "component",
      );
      break;
  case 'trw_his':
        $ContentID = GetContentID($url->segment[2]);
      $callCMS = $trainingPage->callCMS($MenuID, $ContentID);
      if ($callCMS->_numOfRows < 1) {
          header('location:' . $linklang . '/404');
          exit(0);
      }
      $smarty->assign("callCMS", $callCMS);

      // slick slide
      $initialSlide2 = 0;
      if (count($callCMS->_numOfRows) > 4) {
          foreach ($arrMenu as $key => $valuearrMenu) {
              if ($valuearrMenu['id'] == $callCMS->fields['id'] && $callCMS->fields['masterkey'] == $valuearrMenu['masterkey']) {
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
      $breadcrumb = explode("-", $callCMS->fields['menuname']);
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

      $MenuID = "trw_his";
      $settingPage = array(
          "page" => $menuActive,
          "template" => "cms_advance_detail.tpl",
          "display" => "page",
          "control" => "component",
      );
      break;

  case 'trw_con':
      switch ($PageAction) {
          case 'detail':
              $ContentID = GetContentID($url->segment[4]);
              $callCMS = $trainingPage->callCMS($MenuID, $ContentID);

              if ($callCMS->_numOfRows < 1) {
                  header('location:' . $linklang . '/404');
                  exit(0);
              }
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

              $MenuID = $config['trw_his']['main']['masterkey']; // fixed ไว้ เพื่อ active menu แรกเสมอ
              $settingPage = array(
                  "page" => $menuActive,
                  "template" => "cms_advance_detail_file.tpl",
                  "display" => "page",
                  "control" => "component",
              );
              break;

          default:
              $callGroup = $trainingPage->callGroup($MenuID, $ContentID);

              if ($callGroup->_numOfRows < 1) {
                  header('location:' . $linklang . '/404');
                  exit(0);
              }
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

              ## list data
              if ($callGroup->fields['types'] == 1) { ## for group
                  $callCMS = $trainingPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']));
                  $masterkey_page = $callCMS->fields['masterkey'];
                  $smarty->assign("callCMS", $callCMS);
                  $MaxRecord = $callCMS->_maxRecordCount;
                  $MenuID = $config['trw_his']['main']['masterkey']; // fixed ไว้ เพื่อ active menu แรกเสมอ
                  $settingPage = array(
                      "page" => $menuActive,
                      "template" => "download-list-group.tpl",
                      "display" => "page",
                      "control" => "component",
                  );
              } else { ## for subgroup
                  $callSubGroup = $trainingPage->callSubGroup($MenuID, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']));
                  $masterkey_page = $callSubGroup->fields['masterkey'];
                  $MaxRecord = $callSubGroup->_maxRecordCount;
                  $arrListData = array();
                  foreach ($callSubGroup as $keycallSubGroup => $valuecallSubGroup) {
                      $callCMS = $trainingPage->callCMSList($MenuID, 0, $callGroup->fields['id'], $page['on'], $limit, $sorting, intval($req_params['year']), $valuecallSubGroup['id']);
                      $arrListData[$keycallSubGroup]['subgroup'] = $valuecallSubGroup;
                      foreach ($callCMS as $keycallCMS => $valuecallCMS) {
                          $arrListData[$keycallSubGroup]['list'][] = $valuecallCMS;
                      }
                  }
                  $smarty->assign("arrListData", $arrListData);
                  $MenuID = $config['trw_his']['main']['masterkey']; // fixed ไว้ เพื่อ active menu แรกเสมอ
                  $settingPage = array(
                      "page" => $menuActive,
                      "template" => "download-list-subgroup.tpl",
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
              $callYear = $trainingPage->callYear($masterkey_page, $callGroup->fields['id']);
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
      // slick slide
      $initialSlide2 = 0;
      if (count($arrMenu) > 4) {
          foreach ($arrMenu as $key => $valuearrMenu) {
              if ($valuearrMenu['id'] == $menuidLv2 && $callGroup->fields['masterkey'] == $valuearrMenu['masterkey']) {
                  break;
              } else {
                  $initialSlide2++;
              }
          }
      }
      $smarty->assign("initialSlide2", '{"initialSlide": ' . $initialSlide2 . '}');
      break;

  default:
      header('location:' . $linklang . '/404');
      exit(0);
      break;
}