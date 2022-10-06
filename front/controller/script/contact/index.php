<?php
$menuActive = "contact";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$contactPage = new contactPage;

switch ($url->segment[1]) {
    case 'graphic-map': //graphic-map
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/graphic-map.php';
    break;

    case 'google-map': //google-map
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/google-map.php';
    break;

    case 'insert-form': //insert
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/insert-form.php';
    break;

    default: //ติดต่อเรา
        $listjs[] = '<script src="https://www.google.com/recaptcha/api.js?render='.$sitekey.'"></script>';
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/contact.php';
        break;
}

$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);
$smarty->assign("settingModulus", $settingModulus);