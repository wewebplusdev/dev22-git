<?php

$menuActive = "home";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$homePage = new homePage;
$smarty->assign("homePage", $homePage);

$callTopGraphic = $homePage->callTopGraphic($config['tgp']['masterkey']);
$smarty->assign("callTopGraphic", $callTopGraphic);

//product
$callGroupProduct = $homePage->callGroupProduct($config['cms']['product']['masterkey']);
$smarty->assign("callGroupProduct", $callGroupProduct);
$smarty->assign("callGroupProductlist", $callGroupProduct);

//news
$callNews = $homePage->callcms($config['news']['masterkey'], null, null, "Home", 15);
$smarty->assign("callNews", $callNews);

//ir download
$callIrdownload = $homePage->callcms($config['investor']['masterkey:ir_pub'], null, null, "Home", 4);
$smarty->assign("callIrdownload", $callIrdownload);

//ir news download
$callIrnewsDownload = $homePage->callcms($config['ir_nd']['masterkey'], null, null, "Home", 2);
$smarty->assign("callIrnewsDownload", $callIrnewsDownload);

//เครือข่ายธุรกิจของ บริษัท เอสจี แคปปิตอล จำกัด (มหาชน)
$callWeblinkBun = $homePage->callWeblink($config['bun']['masterkey']);
$smarty->assign("callWeblinkBun", $callWeblinkBun);

//career
$callCareerDetail = $homePage->callCareerDetail($config['jos']['masterkey'], 3);
$smarty->assign("callCareerDetail", $callCareerDetail);

// popup
$callPopup = $homePage->callPopup($config['popup']['masterkey']);
$smarty->assign("callPopup", $callPopup);
// print_pre($callPopup->fields);

//5Products
$callWeblink5pd = $homePage->callcms5pd($config['5pd']['masterkey']);
$arr5pd_data_1 = array();
$arr5pd_data_2 = array();
$arr5pd_data_3 = array();
foreach ($callWeblink5pd as $keycallWeblink5pd => $valuecallWeblink5pd) {
    $arr5pd_data_1[] = $valuecallWeblink5pd;
    $arr5pd_data_2[] = $valuecallWeblink5pd;
    $arr5pd_data_3[] = $valuecallWeblink5pd;
}
$smarty->assign("arr5pd_data_1", $arr5pd_data_1);
$smarty->assign("arr5pd_data_2", $arr5pd_data_2);
$smarty->assign("arr5pd_data_3", $arr5pd_data_3);

//truck registration
$callWeblinkRel = $homePage->callWeblink($config['rel']['masterkey']);
$smarty->assign("callWeblinkRel", $callWeblinkRel);
// print_pre($callWeblinkRel);

/*## Start SEO #####*/
$seo_desc ="";
$seo_title =$lang['menu']['home'];
$seo_keyword ="";
Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
/*## End SEO #####*/

$settingPage = array(
    "page" => $menuActive,
    "template" => "index.tpl",
    "display" => "page"
);

$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("fileInclude", $settingPage);