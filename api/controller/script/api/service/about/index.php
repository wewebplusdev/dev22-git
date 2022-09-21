<?php
require_once _DIR . '/controller/script/'.$menuActive.'/service/about/modulus.php'; // load modulus page
$aboutPage = new aboutPage;
$arrData = array();

// configurations
$req_masterkey = $_REQUEST['masterkey'] ? $_REQUEST['masterkey'] : 'ab_odc';
$req_gid = $_REQUEST['gid'] ? $_REQUEST['gid'] : 0;
$req_contentid = $_REQUEST['contentid'] ? $_REQUEST['contentid'] : 0;
$req_pageon = $_REQUEST['pageon'] ? $_REQUEST['pageon'] : 1;
$req_limit = $_REQUEST['limit'] ? $_REQUEST['limit'] : 10;
$req_display = $_REQUEST['display'];
$req_order = $_REQUEST['order'] ? $_REQUEST['order'] : 'DESC';
$req_year = $_REQUEST['year'] ? $_REQUEST['year'] : '';


switch ($req_masterkey) {
  case 'ab_odc':
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_odc.php'; // load resource page
    break;

  case 'ab_odw':
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_odw.php'; // load resource page
    break;
  
  default:
    # code...
    break;
}



