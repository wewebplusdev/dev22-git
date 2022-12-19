<?php
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/scriptCal.js'.$lastModify.'"></script>';

$callCMS = $researchPage->callCMS($config['cod_f']['main']['masterkey'], $ContentID);
$smarty->assign("callCMS", $callCMS);
$smarty->assign("callCMSFields", $callCMS->fields);

$settingModulus['tgp'] = "/assets/img/background/top-graphic-research.jpg";
$settingModulus['breadcrumb'] = $lang['research']['diamond-cal'];

$MenuID = "sv_cod_s";
$settingPage = array(
    "page" => $menuActive,
    "template" => "diamond-weight-calculato.tpl",
    "display" => "page",
    "control" => "component",
);