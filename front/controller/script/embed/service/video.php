<?php
$callVideo = $embedPage->callVideoInfo($config['contact']['cu']['masterkey'],0);
$smarty->assign("callCMSS", $callVideo);

$callContactGroup = $embedPage->callContactGroup($config['contact']['cu']['masterkey']);
$smarty->assign("callContactGroup", $callContactGroup);

$Call_File = $callSetWebsite->Call_File_table($callVideo->fields['id'], $config['cmsf']['db']['main']);
$smarty->assign("Call_File", $Call_File);

## breadcrumb
$settingModulus['breadcrumb'] = $lang['menu']['contact'];

## lang variable
$lang_concat = $url->pagelang['3'];
$smarty->assign("lang_concat", "address".$lang_concat);

$settingPage = array(
    "page" => $menuActive,
    "template" => "contact.tpl",
    "display" => "page",
    "control" => "component",
);