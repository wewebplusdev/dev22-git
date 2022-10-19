<?php
$menuActive = "pdpa";
// $listjs[] = '<script type="text/javascript" src="front/controller/script/' . $menuActive . '/js/script.js"></script>';


switch ($url->segment[0]) {

  case 'pdpa':
    require_once _DIR . '/front/controller/script/' . $menuActive . '/inpdpa.php';
    break;

  default:
    $output = array(
      'status'    => false,
      'statuscode'    => 400,
      'data'    => "",
      'msg'       => 'NOT POST DATA',
    );
    die(json_encode($output));
    break;
}

$smarty->assign("menuActive", $menuActive);
$smarty->assign("contact", true);
$smarty->assign("fileInclude", $settingPage);
