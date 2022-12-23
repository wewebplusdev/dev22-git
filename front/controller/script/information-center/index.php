<?php
$menuActive = "information-center";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="' . _URL . 'front/controller/script/' . $menuActive . '/js/script.js' . $lastModify . '"></script>';

$informationPage = new informationPage;

$listjs[] = '<script src="https://www.google.com/recaptcha/api.js?render=' . $sitekey . '"></script>';
require_once _DIR . '/front/controller/script/' . $menuActive . '/service/info.php';

$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);
$smarty->assign("settingModulus", $settingModulus);
