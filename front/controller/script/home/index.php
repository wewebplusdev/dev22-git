<?php

$menuActive = "home";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$homePage = new homePage;

$callBanner = $homePage->callTopGraphic($config['ban']['main']['masterkey']);
$smarty->assign("callBanner", $callBanner);

$callTopGraphic = $homePage->callTopGraphic($config['tgp']['main']['masterkey']);
$smarty->assign("callTopGraphic", $callTopGraphic);

if ($_GET['tmp'] == 1 ) {
    $themeWebsite['class'] = 'theme-1';
}else if($_GET['tmp'] == 2 ){
    $themeWebsite['class'] = 'theme-2';
}else{
    $themeWebsite['class'] = 'theme-3';
}

$core_theme_web = explode("-", $themeWebsite['class']);
$callSection = $homePage->callSection($core_theme_web[1], $mod_array_conf[$themeWebsite['class']]['order'], $themeWebsite['class']);
// print_pre($callSection);
switch ($themeWebsite['class']) {
    case 'theme-3':
        // call top graphic
        $callBannerSection = $homePage->callTopGraphic($config['ban_t3']['main']['masterkey']);
        $smarty->assign("callBannerSection", $callBannerSection);

        // call weblink
        $callWeblinkSection = $homePage->callTopGraphic($config['wb_t3']['main']['masterkey']);
        $smarty->assign("callWeblinkSection", $callWeblinkSection);

        // call news
        $callcms = $homePage->callcms($config['ab_nm']['main']['masterkey']);
        $arrNews = array();
        foreach ($callcms as $keycallcms => $valuecallcms) {
            $arrNews[$valuecallcms['gid']]['group']['subject'] = $valuecallcms['subjectg'];
            $arrNews[$valuecallcms['gid']]['group']['gid'] = $valuecallcms['gid'];
            $arrNews[$valuecallcms['gid']]['list'][] = $valuecallcms;
            $about_newsmenuid = $valuecallcms['menuid'];
        }
        $smarty->assign("arrNewsHome", $arrNews);
        $smarty->assign("about_newsmenuid", $about_newsmenuid);
        
        // call km
        $callKmSection = $homePage->callTopGraphic($config['km_t3']['main']['masterkey']);
        $smarty->assign("callKmSection", $callKmSection);

        // $sectionMainpage = array();
        // foreach ($callSection as $keycallSection => $valuecallSection) {
        //     $sectionMainpage[$keycallSection]['file'] = $arrThemeFile[$callSection[1]][$valuecallSection['masterkey']];
        // }
        // $smarty->assign("sectionMainpage", $sectionMainpage);

        $smarty->assign("headerBody", $incfile['header3']);
        $smarty->assign("footerBody", $incfile['footer3']);
        $settingPage = array(
            "page" => $menuActive,
            "template" => "index-3.tpl",
            "display" => "page",
        );
        break;
    
    case 'theme-2':
        // call html ban 1
        $calHTML_ban_1 = $homePage->callCMSS($arr_conf['banI_t2']['masterkey']);
        $smarty->assign("calHTML_ban_1", $calHTML_ban_1);
        // call html ban 2
        $calHTML_ban_2 = $homePage->callCMSS($arr_conf['banII_t2']['masterkey']);
        $smarty->assign("calHTML_ban_2", $calHTML_ban_2);
        // call html ban 3
        $calHTML_ban_3 = $homePage->callCMSS($arr_conf['banIII_t2']['masterkey']);
        $smarty->assign("calHTML_ban_3", $calHTML_ban_3);
        // call library
        $calHTML_library_t2 = $homePage->callCMSS($arr_conf['library_t2']['masterkey']);
        $smarty->assign("calHTML_library_t2", $calHTML_library_t2);
        // call weblink
        $callWeblinkSection = $homePage->callTopGraphic($config['wb_t3']['main']['masterkey']);
        $smarty->assign("callWeblinkSection", $callWeblinkSection);
        // call online service
        $callService = $homePage->callWel($arr_conf['osv']['masterkey']);
        $smarty->assign("callService", $callService);
        // call git book
        $callGitBookSection = $homePage->callTopGraphic($arr_conf['book']['masterkey']);
        $smarty->assign("callGitBookSection", $callGitBookSection);
        // call training
        $callGroupTraining = $homePage->callcmg_thmem_1($arr_conf['trw_semi']['masterkey']);
        $arrTrainingList = array();
        foreach ($callGroupTraining as $keycallGroupTraining => $valuecallGroupTraining) {
            $arrTrainingList[$keycallGroupTraining]['group']['id'] = $valuecallGroupTraining['id'];
            $arrTrainingList[$keycallGroupTraining]['group']['subject'] = $valuecallGroupTraining['subject'];

            $callNews = $homePage->callcms_thmem_1($arr_conf['trw_semi']['masterkey'], $valuecallGroupTraining['id'],7);
            foreach ($callNews as $keycallNews => $valuecallNews) {
                $arrTrainingList[$keycallGroupTraining]['list'][] = $valuecallNews;
            }
        }
        $smarty->assign("arrTrainingList", $arrTrainingList);
        // call news
        $callGroupNews = $homePage->callcmg_thmem_1($arr_conf['ab_nm']['masterkey']);
        $arrNewsList = array();
        foreach ($callGroupNews as $keycallGroupNews => $valuecallGroupNews) {
            $arrNewsList[$keycallGroupNews]['group']['id'] = $valuecallGroupNews['id'];
            $arrNewsList[$keycallGroupNews]['group']['subject'] = $valuecallGroupNews['subject'];

            $callNews = $homePage->callcms_thmem_1($arr_conf['ab_nm']['masterkey'], $valuecallGroupNews['id'], 4);
            foreach ($callNews as $keycallNews => $valuecallNews) {
                if ($keycallNews < 7) {
                    $arrNewsList[$keycallGroupNews]['list']['pin'][] = $valuecallNews;
                }else{
                    $arrNewsList[$keycallGroupNews]['list']['unpin'][] = $valuecallNews;
                }
            }
        }
        $smarty->assign("arrNewsList", $arrNewsList);
        // call git lab update
        $callGroupGitLab = $homePage->callcmsg($arr_conf['is_art']['masterkey']);
        $arrGitLabList = array();
        foreach ($callGroupGitLab as $keycallGroupGitLab => $valuecallGroupGitLab) {
            $arrGitLabList[$keycallGroupGitLab]['group']['id'] = $valuecallGroupGitLab['id'];
            $arrGitLabList[$keycallGroupGitLab]['group']['subject'] = $valuecallGroupGitLab['subject'];

            $callGitLab = $homePage->callcmsBySid($arr_conf['is_art']['masterkey'], $valuecallGroupGitLab['id'],10);
            foreach ($callGitLab as $keycallGitLab => $valuecallGitLab) {
                $arrGitLabList[$keycallGroupGitLab]['list'][] = $valuecallGitLab;
            }
        }
        $smarty->assign("arrGitLabList", $arrGitLabList);


        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['banI_t2']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['banII_t2']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['banIII_t2']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['library_t2']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$config['wb_t3']['main']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['trw_semi']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['ab_nm']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['osv']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['book']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['is_art']['masterkey']];
        //  print_pre($sectionMainpage);
        
        $smarty->assign("headerBody", $incfile['header2']);
        $smarty->assign("footerBody", $incfile['footer2']);
        $settingPage = array(
            "page" => $menuActive,
            "template" => "index-2.tpl",
            "display" => "page",
        );
        break;
    
    default:
        // call html section 1
        $calHTML_section_1 = $homePage->callCMSS($arr_conf['gcon_t1']['masterkey']);
        $smarty->assign("calHTML_section_1", $calHTML_section_1);
        
        // call news
        $callGroupNews = $homePage->callcmg_thmem_1($arr_conf['ab_nm']['masterkey']);
        $arrNewsList = array();
        foreach ($callGroupNews as $keycallGroupNews => $valuecallGroupNews) {
            $arrNewsList[$keycallGroupNews]['group']['id'] = $valuecallGroupNews['id'];
            $arrNewsList[$keycallGroupNews]['group']['subject'] = $valuecallGroupNews['subject'];

            $callNews = $homePage->callcms_thmem_1($arr_conf['ab_nm']['masterkey'], $valuecallGroupNews['id'], 10);
            foreach ($callNews as $keycallNews => $valuecallNews) {
                if ($keycallNews < 7) {
                    $arrNewsList[$keycallGroupNews]['list']['pin'][] = $valuecallNews;
                }else{
                    $arrNewsList[$keycallGroupNews]['list']['unpin'][] = $valuecallNews;
                }
            }
        }
        $smarty->assign("arrNewsList", $arrNewsList);

        // call training
        $callGroupTraining = $homePage->callcmg_thmem_1($arr_conf['trw_semi']['masterkey']);
        $arrTrainingList = array();
        foreach ($callGroupTraining as $keycallGroupTraining => $valuecallGroupTraining) {
            $arrTrainingList[$keycallGroupTraining]['group']['id'] = $valuecallGroupTraining['id'];
            $arrTrainingList[$keycallGroupTraining]['group']['subject'] = $valuecallGroupTraining['subject'];

            $callNews = $homePage->callcms_thmem_1($arr_conf['trw_semi']['masterkey'], $valuecallGroupTraining['id'], 3);
            foreach ($callNews as $keycallNews => $valuecallNews) {
                $arrTrainingList[$keycallGroupTraining]['list'][] = $valuecallNews;
            }
        }
        $smarty->assign("arrTrainingList", $arrTrainingList);

        // call weblink
        $callWeblinkSection = $homePage->callTopGraphic($arr_conf['gel_t1']['masterkey']);
        $smarty->assign("callWeblinkSection", $callWeblinkSection);

        // call html section 2
        $calHTML_section_2 = $homePage->callCMSS($arr_conf['gca_t1']['masterkey']);
        $smarty->assign("calHTML_section_2", $calHTML_section_2);

        // call html section 3
        $calHTML_section_3 = $homePage->callCMSS($arr_conf['gwj_t1']['masterkey']);
        $smarty->assign("calHTML_section_3", $calHTML_section_3);

        // call html section 4
        $calHTML_section_4 = $homePage->callCMSS($arr_conf['gjt_t1']['masterkey']);
        $smarty->assign("calHTML_section_4", $calHTML_section_4);

        // call service
        $callService = $homePage->callWel($arr_conf['osv']['masterkey']);
        $smarty->assign("callService", $callService);

        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['gcon_t1']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['ab_nm']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['gel_t1']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['trw_semi']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['gca_t1']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['gwj_t1']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['gjt_t1']['masterkey']];
        $sectionMainpage[]['file'] = $arrThemeFile[$core_theme_web[1]][$arr_conf['osv']['masterkey']];
        // print_pre($sectionMainpage);

        $smarty->assign("headerBody", $incfile['header']);
        $smarty->assign("footerBody", $incfile['footer']);
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
$smarty->assign("themeWebsite", $themeWebsite);
$smarty->assign("sectionMainpage", $sectionMainpage);