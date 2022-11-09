<?php

$menuActive = "search";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="' . _URL . 'front/controller/script/' . $menuActive . '/js/script.js' . $lastModify . '"></script>';

switch ($PageAction) {
   default:
      $limit = 5;
      $sorting = "DESC";

      $srchtxt_main = trim($_REQUEST['srchtxt_main']);
      $smarty->assign("srchtxt_main", $srchtxt_main);

      $search = new search();
      $search_result = $search->searching($srchtxt_main, $page['on'], $limit, $sorting);
      $smarty->assign("search_result", $search_result);
      /* ## Set up pagination ##### */

      $str_array = array($lang['search']['result'], $srchtxt_main, $search_result->_maxRecordCount);
      $result_txt = strformat($str_array);
      $smarty->assign("result_txt", $result_txt);

      $pagination['total'] = $search_result->_maxRecordCount;
      $pagination['totalpage'] = ceil(($pagination['total'] / $limit));
      $pagination['limit'] = $limit;
      $pagination['curent'] = $page['on'];
      $pagination['method'] = $page;
      $smarty->assign("pagination", $pagination);
      /* ## Set up pagination ##### */

## lang variable
      $lang_concat = $url->pagelang['3'];
      $smarty->assign("lang_concat", "address" . $lang_concat);

      $settingPage = array(
          "page" => $menuActive,
          "template" => "search.tpl",
          "display" => "page",
          "control" => "component",
      );
      break;
}

//require_once _DIR . '/front/controller/script/' . $menuActive . '/service/search.php';

$urlfull = _FullUrl;
$smarty->assign("domain", _Domain);
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);
$smarty->assign("settingModulus", $settingModulus);
