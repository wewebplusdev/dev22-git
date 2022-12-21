<?php

switch ($url->segment[2]) {
    case 'calculator':
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/calculator.php';
        break;
    
    default:
        $listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/scriptCal.js'.$lastModify.'"></script>';

        $callCMS = $servicePage->callCMS($config['cod_f']['main']['masterkey'], $ContentID);
        $smarty->assign("callCMS", $callCMS);
        $smarty->assign("callCMSFields", $callCMS->fields);

        $settingModulus['tgp'] = "/assets/img/background/top-graphic-research.jpg";
        $settingModulus['breadcrumb'] = $lang['research']['diamond-cal'];

        /*## Start SEO #####*/
        $seo_desc = "";
        $seo_title = $lang['service']['calculator'];
        $seo_keyword = "";
        Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
        /*## End SEO #####*/

        $MenuID = "rs_cod_s";
        $settingPage = array(
            "page" => $menuActive,
            "template" => "diamond-weight-calculato.tpl",
            "display" => "page",
            "control" => "component",
        );
        break;
}