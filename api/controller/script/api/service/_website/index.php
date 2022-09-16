<?php
require_once _DIR . '/controller/script/'.$menuActive.'/service/_website/modulus.php'; // load modulus page
$_website = new _website;
$arrData = array();

$infoSetting = $_website->SettingWeb();

$arrData['dataset']['setting']['masterkey'] = $infoSetting->fields['masterkey'];
$arrData['dataset']['setting']['subject'] = $infoSetting->fields['subject'];
$arrData['dataset']['setting']['subjectoffice'] = $infoSetting->fields['subjectoffice'];
$arrData['dataset']['setting']['description'] = $infoSetting->fields['description'];
$arrData['dataset']['setting']['keywords'] = $infoSetting->fields['keywords'];
$arrData['dataset']['setting']['metatitle'] = $infoSetting->fields['metatitle'];
$arrData['dataset']['setting']['contact'] = unserialize($infoSetting->fields['config']);
$arrData['dataset']['setting']['social'] = unserialize($infoSetting->fields['social']);
$arrData['dataset']['setting']['addresspic'] = fileinclude($infoSetting->fields['addresspic'], 'pictures', $infoSetting->fields['masterkey'], 'link');;
$arrData['dataset']['setting']['qr'] = $infoSetting->fields['qr'];

$arrJson = array(
    'status' => 200,
    'msg' => 'API Fetch SettingWebsite Successfully.',
    'time' => date('Y-m-d H:i:s'),
    'fetch' => $arrData,
);
echo json_encode($arrJson);
exit(0);