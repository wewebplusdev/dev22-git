<?php

$_config['replace'] = array(
  '/dev22-git' => '',
  'https://www.git.or.th/images' => '/images',
  'http://www.git.or.th/images' => '/images',
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
      'msg' => 'Version Found.',
    );
        
    echo json_encode($dataJson);
    exit();
    break;
}