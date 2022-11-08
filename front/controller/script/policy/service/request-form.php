<?php

// $callCMSS = $contactPage->callCMSS($config['contact']['cu']['masterkey']);
// $smarty->assign("callCMSS", $callCMSS);

// $callContactGroup = $policyPage->callContactGroup($config['policy']['complaint']['masterkey']);
// $smarty->assign("callContactGroup", $callContactGroup);

// $Call_File = $callSetWebsite->Call_File_table($callCMSS->fields['id'], $config['cmsf']['db']['main']);
// $smarty->assign("Call_File", $Call_File);

## breadcrumb
$breadcrumb = explode("-", $settingModulus['title']);
$settingModulus['breadcrumb'] = $breadcrumb[0];

## lang variable
$lang_concat = $url->pagelang['3'];
$smarty->assign("lang_concat", "address" . $lang_concat);

$settingPage = array(
    "page" => $menuActive,
    "template" => "req-policy.tpl",
    "display" => "page",
    "control" => "component",
);