<?php

$menuActive = "information-service";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$infoServicePage = new infoServicePage;
$arrMenu = array();
$getMenuDetail = array();
$ContentID = GetContentID($url->segment[2]);
$PageAction = $url->segment[3];
$PageAction_pic = $url->segment[2];
$MenuID = GetContentID($url->segment[1]);
$MenuID = $callSetWebsite->getMenuID($MenuID);
$MasterkeyTemp = "is_"; // master about like this
$showslick = true; // slick shows

if (empty($MenuID)) {
    $MenuID = $config['infoservice']['is_art']['masterkey'];
}

## REQUEST_URI
$req_params = array();
$req_params['year'] = $_REQUEST['year'] ? $_REQUEST['year'] : $url->segment['3'];
$req_params['order'] = $_REQUEST['order'];
$req_params['keywords'] = $_REQUEST['keywords'];
$req_params['selectcareer'] = $_REQUEST['selectCareer'];
$smarty->assign("req_params", $req_params);

## default menu lv1
$getMenuDetailFc = $callSetWebsite->getMenuDetail(0, $MasterkeyTemp, $FixmenuID);
foreach ($getMenuDetailFc as $keygetMenuDetailFc => $valuegetMenuDetailFc) {
    $getMenuDetail[] = $valuegetMenuDetailFc;
}
$smarty->assign("getMenuDetail", $getMenuDetail);
// slick slide
$initialSlide = 0;
if (count($getMenuDetail) > 4) {
    foreach ($getMenuDetail as $key => $valuegetMenuDetail) {
        // if ($MenuID == $config['about']['ab_odw']['masterkey']) { // break loop when master key is equal ab_odw
        //     break;
        // }
        if ($valuegetMenuDetail['masterkey'] == $MenuID) {
            break;
        } else {
            $initialSlide++;
        }
    }
}
$smarty->assign("initialSlide", '{"initialSlide": ' . $initialSlide . '}');

switch ($MenuID) {
    case 'is_ms': //พิพิธภัณฑ์
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/is_ms.php';
        break;
    
    case 'is_rs': //เว็บไซต์ที่เกี่ยวข้อง
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/is_rs.php';
        break;
    
    case 'is_gal': //ห้องแสดงภาพ
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/is_gal.php';
        break;
    
    default: //บทความ
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/is_art.php';
        break;
}

$urlfull = _FullUrl;
$smarty->assign("urlfull", $urlfull);
$smarty->assign("menuActive", $menuActive);
$smarty->assign("menuDetail", $menuDetail);
$smarty->assign("fileInclude", $settingPage);
$smarty->assign("MenuID", $MenuID);
$smarty->assign("settingModulus", $settingModulus);
$smarty->assign("showslick", $showslick);