<?php
$menuActive = "intro";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';
$introPage = new introPage;

$settingPage = array(
    "page" => $menuActive,
    "template" => "index.tpl",
    "display" => "page"
);

$callintro = $introPage->callintro($config['intro']['main']['masterkey']);
if($callintro->_numOfRows > 0){
    $smarty->assign("callintro", $callintro);
    // $_SESSION['intro'] = "";
    // $_SESSION['intro'] = "intro";
}else{
    header("Location:" . $linklang . "/home");
}

/*## Start SEO #####*/
if($callintro->fields['pic'] !== ''){
    $fullpath_pic = fileinclude($callintro->fields['pic'],'real',$callintro->fields['masterkey'],'album');
}else{
    $fullpath_pic = '';
}
$seo_desc =($callintro->fields['description']!='' ? $callintro->fields['description'] : '');
$seo_title =($callintro->fields['metatitle']!='' ? $callintro->fields['metatitle'] : $callintro->fields['subject']);
$seo_keyword =($callintro->fields['keywords']!='' ? $callintro->fields['keywords'] : '');
$seo_pic =($callintro->fields['pic']!='' ? $fullpath_pic : '');
Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
/*## End SEO #####*/

$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);