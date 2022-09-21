<?php
require_once _DIR . '/controller/script/'.$menuActive.'/service/home/modulus.php'; // load modulus page
$homePage = new homePage;
$arrData = array();

$callTgp = $homePage->callTgp();
if ($callTgp->_numOfRows > 0) {
  $arrData['dataset']['tgp']['_maxRecordCount'] = $callTgp->_numOfRows;
  foreach ($callTgp as $keycallTgp => $valuecallTgp) {
    $arrData['dataset']['tgp']['list'][$keycallTgp]['id'] = $valuecallTgp['id'];
    $arrData['dataset']['tgp']['list'][$keycallTgp]['masterkey'] = $valuecallTgp['masterkey'];
    $arrData['dataset']['tgp']['list'][$keycallTgp]['subject'] = $valuecallTgp['subject'];
    $arrData['dataset']['tgp']['list'][$keycallTgp]['title'] = $valuecallTgp['title'];
    $arrData['dataset']['tgp']['list'][$keycallTgp]['pic'] = fileinclude($valuecallTgp['pic'], 'pictures', $valuecallTgp['masterkey'], 'link');
    $arrData['dataset']['tgp']['list'][$keycallTgp]['credate'] = DateThai($valuecallTgp['credate'], 1, $url->pagelang[2], 'full');
    $arrData['dataset']['tgp']['list'][$keycallTgp]['url'] = $valuecallTgp['url'];
    if ($valuecallTgp['url'] == 1) {
      $arrData['dataset']['tgp']['list'][$keycallTgp]['target'] = "_self";
    }else{
      $arrData['dataset']['tgp']['list'][$keycallTgp]['target'] = "_blank";
    }
  }
}else{
  $arrData['dataset']['tgp']['_maxRecordCount'] = 0;
}

$arrJson = array(
    'status' => 200,
    'msg' => 'API Fetch Home Successfully.',
    'time' => date('Y-m-d H:i:s'),
    'fetch' => $arrData,
);
echo json_encode($arrJson);
exit(0);


