<?php

$menuActive = "preview";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$previewPage = new previewPage;

$callBanner = $previewPage->callTopGraphic($config['ban']['main']['masterkey']);
$smarty->assign("callBanner", $callBanner);

$callTopGraphic = $previewPage->callTopGraphic($config['tgp']['main']['masterkey']);
$smarty->assign("callTopGraphic", $callTopGraphic);

switch ($themeWebsite['class']) {
    case 'theme-3':
        // call section sorting
        $callSection = $previewPage->callSection($mod_array_conf['theme-3']['key'], $mod_array_conf['theme-3']['order'], 'theme-3');
        $sectionMainpage = array();
        foreach ($callSection as $keycallSection => $valuecallSection) {
            $sectionMainpage[$keycallSection]['file'] = $arrThemeFile['theme-3'][$valuecallSection['masterkey']];
        }
        $smarty->assign("sectionMainpage", $sectionMainpage);
        
        // call top graphic
        $callBannerSection = $previewPage->callTopGraphic($config['ban_t3']['main']['masterkey']);
        $smarty->assign("callBannerSection", $callBannerSection);

        // call weblink
        $callWeblinkSection = $previewPage->callTopGraphic($config['wb_t3']['main']['masterkey']);
        $smarty->assign("callWeblinkSection", $callWeblinkSection);

        // call news
        $callcms = $previewPage->callcms($config['ab_nm']['main']['masterkey']);
        $arrNews = array();
        foreach ($callcms as $keycallcms => $valuecallcms) {
            $arrNews[$valuecallcms['gid']]['group']['subject'] = $valuecallcms['subjectg'];
            $arrNews[$valuecallcms['gid']]['group']['gid'] = $valuecallcms['gid'];
            $arrNews[$valuecallcms['gid']]['list'][] = $valuecallcms;
            $about_newsmenuid = $valuecallcms['menuid'];
        }
        $smarty->assign("arrNewspreview", $arrNews);
        $smarty->assign("about_newsmenuid", $about_newsmenuid);
        
        // call km
        $callKmSection = $previewPage->callTopGraphic($config['km_t3']['main']['masterkey']);
        $smarty->assign("callKmSection", $callKmSection);

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
$seo_title = $lang['menu']['preview'];
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