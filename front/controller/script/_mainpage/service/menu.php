<?php
$arrMenu = array();

// about
$menuHeader_ab = $callSetWebsite->getMenuDetail(null, 'ab_');
$arrMenu['about']['group']['subject'] = "เกี่ยวกับเรา";
$arrMenu['about']['group']['page'] = "about";
foreach ($menuHeader_ab as $keymenuHeader_ab => $valuemenuHeader_ab) {
  if ($valuemenuHeader_ab['masterkey'] !== $config['about']['ab_odw']['masterkey']) { // break loop when master key is equal ab_odw
    $nameMnu = explode('-', $valuemenuHeader_ab['subject']);
    $arrMenu['about']['subgroup'][$keymenuHeader_ab]['id'] = $valuemenuHeader_ab['id'];
    $arrMenu['about']['subgroup'][$keymenuHeader_ab]['subject'] = $nameMnu[0];
  }
}

// service
$menuHeader_sv = $callSetWebsite->getMenuDetail(null, 'sv_');
$arrMenu['service']['group']['subject'] = "งานบริการ";
$arrMenu['service']['group']['page'] = "service";
foreach ($menuHeader_sv as $keymenuHeader_sv => $valuemenuHeader_sv) {
  $nameMnu = explode('-', $valuemenuHeader_sv['subject']);
  $arrMenu['service']['subgroup'][$keymenuHeader_sv]['id'] = $valuemenuHeader_sv['id'];
  $arrMenu['service']['subgroup'][$keymenuHeader_sv]['subject'] = $nameMnu[0];
}

// information-service
$menuHeader_is = $callSetWebsite->getMenuDetail(null, 'is_');
$arrMenu['information-service']['group']['subject'] = "งานบริการข้อมูล";
$arrMenu['information-service']['group']['page'] = "information-service";
foreach ($menuHeader_is as $keymenuHeader_is => $valuemenuHeader_is) {
  $nameMnu = explode('-', $valuemenuHeader_is['subject']);
  $arrMenu['information-service']['subgroup'][$keymenuHeader_is]['id'] = $valuemenuHeader_is['id'];
  $arrMenu['information-service']['subgroup'][$keymenuHeader_is]['subject'] = $nameMnu[0];
}

// research
$menuHeader_is = $callSetWebsite->getMenuDetail(null, 'rs_');
$arrMenu['research']['group']['subject'] = "งานวิจัย";
$arrMenu['research']['group']['page'] = "research";
foreach ($menuHeader_is as $keymenuHeader_is => $valuemenuHeader_is) {
  $nameMnu = explode('-', $valuemenuHeader_is['subject']);
  $arrMenu['research']['subgroup'][$keymenuHeader_is]['id'] = $valuemenuHeader_is['id'];
  $arrMenu['research']['subgroup'][$keymenuHeader_is]['subject'] = $nameMnu[0];
}

// online-service
$arrMenu['online-service']['group']['subject'] = "บริการออนไลน์";
$arrMenu['online-service']['group']['page'] = "online-service";

// member-relations
$arrMenu['member-relations']['group']['subject'] = "สมาชิกสัมพันธ์";
$arrMenu['member-relations']['group']['page'] = "member-relations";

// contact
$arrMenu['contact']['group']['subject'] = "ติดต่อเรา";
$arrMenu['contact']['group']['page'] = "contact";
// print_pre($arrMenu);
$smarty->assign("arrMenu", $arrMenu);
