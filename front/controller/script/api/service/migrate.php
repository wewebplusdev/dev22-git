<?php

$_config['replace'] = array(
  '/dev22-git' => "",
  'https://www.git.or.th/images' => _http."://".$_SERVER['HTTP_HOST'] ."/images",
  'http://www.git.or.th/images' => _http."://".$_SERVER['HTTP_HOST'] ."/images",
  'https://www.git.or.th/thai' => _http."://".$_SERVER['HTTP_HOST'] ."/thai",
  'http://www.git.or.th/thai' => _http."://".$_SERVER['HTTP_HOST'] ."/thai",
  'https://www.git.or.th/eng' => _http."://".$_SERVER['HTTP_HOST'] ."/eng",
  'http://www.git.or.th/eng' => _http."://".$_SERVER['HTTP_HOST'] ."/eng",
);

switch ($url->segment[2]) {
  case 'v1':
    require_once _DIR . '/front/controller/script/'.$menuActive.'/service/migrate-version-1.php';
    break;

  case 'v2':
    require_once _DIR . '/front/controller/script/'.$menuActive.'/service/migrate-version-2.php';
    break;
  
  default:
    header('Content-Type: application/json; charset=utf-8');
    $dataJson = array(
      'status' => 403,
      'msg' => 'Version Not Found.',
    );
        
    echo json_encode($dataJson);
    exit();
    break;
}