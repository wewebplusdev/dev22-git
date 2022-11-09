<?php
$menuActive = "embed";
$menuDetail = "content";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$embedPage = new embedPage;
switch ($url->segment[1]) {
    case 'video': //video gallery
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/video.php';
    break;

    case 'photo': //photo gallery
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/photo.php';
    break;

    default: //video
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/video.php';
        break;
}

$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);
$smarty->assign("settingModulus", $settingModulus);