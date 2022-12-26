<?php
$menuActive = "information-center";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="' . _URL . 'front/controller/script/' . $menuActive . '/js/script.js' . $lastModify . '"></script>';

$informationPage = new informationPage;

## REQUEST_URI
$req_params = array();
$req_params['year'] = $_REQUEST['year'] ? $_REQUEST['year'] : $url->segment['1'];
$req_params['order'] = $_REQUEST['order'];
$req_params['keywords'] = $_REQUEST['keywords'];
$req_params['selectcareer'] = $_REQUEST['selectCareer'];
$smarty->assign("req_params", $req_params);

$listjs[] = '<script src="https://www.google.com/recaptcha/api.js?render=' . $sitekey . '"></script>';
require_once _DIR . '/front/controller/script/' . $menuActive . '/service/info.php';

$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);
$smarty->assign("settingModulus", $settingModulus);
