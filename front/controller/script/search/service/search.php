<?php

$limit = 5;
$sorting = "DESC";

$srchtxt_main = trim($_REQUEST['srchtxt_main']);
$smarty->assign("srchtxt_main", $srchtxt_main);

$search = new search($srchtxt_main, $page['on'], $limit, $sorting);
$smarty->assign("search", $search);
/* ## Set up pagination ##### */

$pagination['total'] = $search->_maxRecordCount;
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
