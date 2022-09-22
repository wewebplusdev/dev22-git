<?php
require_once _DIR . '/controller/script/'.$menuActive.'/service/about/modulus.php'; // load modulus page
$aboutPage = new aboutPage;
$arrData = array();

// configurations
$req_masterkey = $_REQUEST['masterkey'] ? $_REQUEST['masterkey'] : '';
$req_gid = $_REQUEST['gid'] ? $_REQUEST['gid'] : 0;
$req_contentid = $_REQUEST['contentid'] ? $_REQUEST['contentid'] : 0;
$req_pageon = $_REQUEST['pageon'] ? $_REQUEST['pageon'] : 1;
$req_limit = $_REQUEST['limit'] ? $_REQUEST['limit'] : 10;
$req_display = $_REQUEST['display'];
$req_order = $_REQUEST['order'] ? $_REQUEST['order'] : 'DESC';
$req_year = $_REQUEST['year'] ? $_REQUEST['year'] : '';

switch ($req_masterkey) {
  case 'ab_odc':
    header('Content-Type: application/json; charset=utf-8');
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_odc.php'; // load resource page
    break;

  case 'ab_odw':
    header('Content-Type: application/json; charset=utf-8');
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_odw.php'; // load resource page
    break;

  case 'ab_ib':
    header('Content-Type: application/json; charset=utf-8');
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_ib.php'; // load resource page
    break;

  case 'ab_st':
    header('Content-Type: application/json; charset=utf-8');
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_st.php'; // load resource page
    break;

  case 'ab_pcm':
    header('Content-Type: application/json; charset=utf-8');
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_pcm.php'; // load resource page
    break;

  case 'ab_hrm':
    header('Content-Type: application/json; charset=utf-8');
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_hrm.php'; // load resource page
    break;

  case 'ab_qs':
    header('Content-Type: application/json; charset=utf-8');
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_qs.php'; // load resource page
    break;

  case 'ab_nm':
    header('Content-Type: application/json; charset=utf-8');
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_nm.php'; // load resource page
    break;

  case 'ab_js':
    header('Content-Type: application/json; charset=utf-8');
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/ab_js.php'; // load resource page
    break;
  
  default:
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(403);
    $arrJson = array(
        'status' => 403,
        'msg' => 'API Unavailable, Masterkey Not Declare',
    );
    echo json_encode($arrJson);
    break;
}



