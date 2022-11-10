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

/*## Start SEO #####*/
$seo_desc ="";
$seo_title =$lang["policy"]["request"];
$seo_keyword ="";
Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
/*## End SEO #####*/

$settingPage = array(
    "page" => $menuActive,
    "template" => "req-policy.tpl",
    "display" => "page",
    "control" => "component",
);