<?php

$menuActive = "home";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$homePage = new homePage;
$themeWebsite = 'theme-3';


$callBanner = $homePage->callTopGraphic($config['ban']['main']['masterkey']);
$smarty->assign("callBanner", $callBanner);

switch ($themeWebsite) {
    case 'theme-3':
        $settingPage = array(
            "page" => $menuActive,
            "template" => "index-3.tpl",
            "display" => "page-theme-3",
        );
        break;
    
    case 'theme-2':
        $settingPage = array(
            "page" => $menuActive,
            "template" => "index-2.tpl",
            "display" => "page-theme-2",
        );
        break;
    
    default:
        $settingPage = array(
            "page" => $menuActive,
            "template" => "index.tpl",
            "display" => "page"
        );
        break;
}

/*## Start SEO #####*/
$seo_desc = "";
$seo_title = $lang['menu']['home'];
$seo_keyword = "";
Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
/*## End SEO #####*/


$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("fileInclude", $settingPage);
$smarty->assign("MenuID", $MenuID);
$smarty->assign("settingModulus", $settingModulus);
$smarty->assign("showslick", $showslick);