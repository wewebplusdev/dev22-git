<?php

$menuActive = "about";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$aboutPage = new aboutPage;
$arrMenu = array();
$getMenuDetail = array();
$ContentID = GetContentID($url->segment[2]);
$PageAction = $url->segment[3];
$MenuID = GetContentID($url->segment[1]);
$MenuID = $callSetWebsite->getMenuID($MenuID);
$MasterkeyTemp = "ab_"; // master about like this
$showslick = true; // slick shows

if (empty($MenuID)) {
    $MenuID = $config['about']['ab_odc']['masterkey'];
}

## REQUEST_URI
$req_params = array();
$req_params['year'] = $_REQUEST['year'];
$req_params['order'] = $_REQUEST['order'];
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
        if ($MenuID == $config['about']['ab_odw']['masterkey']) { // break loop when master key is equal ab_odw
            break;
        }
        if ($valuegetMenuDetail['masterkey'] == $MenuID) {
            break;
        } else {
            $initialSlide++;
        }
    }
}
$smarty->assign("initialSlide", '{"initialSlide": ' . $initialSlide . '}');

switch ($MenuID) {
    case 'ab_pap': //นโยบายและแผน
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/ab_pap.php';
        break;

    case 'ab_ib': //คณะกรรมการสถาบัน
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/ab_ib.php';
        break;

    case 'ab_st': //โครงสร้าง
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/ab_st.php';
        break;

    case 'ab_pcm': //การจัดซื้อ/ จัดจ้าง
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/ab_pcm.php';
        break;

    case 'ab_hrm': //การบริหารและพัฒนาทรัพยากรบุคคล
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/ab_hrm.php';
        break;

    case 'ab_qs': //ระบบคุณภาพ
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/ab_qs.php';
        break;

    case 'ab_nm': //ข่าวสารความเคลื่อนไหว
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/ab_nm.php';
        break;
    
    default: //ทิศทางองค์กร
        require_once _DIR . '/front/controller/script/' . $menuActive . '/service/ab_odc-ab_odw.php';
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