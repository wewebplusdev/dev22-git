<?php

switch ($req_display) {
  case 'insert-img':
    require_once _DIR . '/controller/script/'.$menuActive.'/service/about/resource/career-insert-pic.php'; // load resource page
    exit(0); // end of scripts
    break;

  case 'province':
    $callProvince_mains = $callSetWebsite->callProvince_main();
    $arrData['dataset']['about']['status'] = false;
    foreach ($callProvince_mains as $keycallProvince_mains => $valuecallProvince_mains) {
      $arrData['dataset']['about']['status'] = true;
      $arrData['dataset']['about']['list'][$keycallProvince_mains]['id'] = $valuecallProvince_mains['id'];
      $arrData['dataset']['about']['list'][$keycallProvince_mains]['subject'] = $valuecallProvince_mains['name'];
    }
    break;

  case 'district':
    $callDistrict_main = $callSetWebsite->callDistrict_main($req_gid);
    $arrData['dataset']['about']['status'] = false;
    foreach ($callDistrict_main as $keycallDistrict_main => $valuecallDistrict_main) {
      $arrData['dataset']['about']['status'] = true;
      $arrData['dataset']['about']['list'][$keycallDistrict_main]['id'] = $valuecallDistrict_main['id'];
      $arrData['dataset']['about']['list'][$keycallDistrict_main]['subject'] = $valuecallDistrict_main['name'];
    }
    break;

  case 'subDistrict':
    $callSubDistrict_main = $callSetWebsite->callSubDistrict_main($req_gid);
    $arrData['dataset']['about']['status'] = false;
    foreach ($callSubDistrict_main as $keycallSubDistrict_main => $valuecallSubDistrict_main) {
      $arrData['dataset']['about']['status'] = true;
      $arrData['dataset']['about']['list'][$keycallSubDistrict_main]['id'] = $valuecallSubDistrict_main['id'];
      $arrData['dataset']['about']['list'][$keycallSubDistrict_main]['subject'] = $valuecallSubDistrict_main['name'];
    }
    break;

  case 'postcode':
    $callPostcode_main = $callSetWebsite->callPostcode_main($req_gid);
    $arrData['dataset']['about']['status'] = false;
    foreach ($callPostcode_main as $keycallPostcode_main => $valuecallPostcode_main) {
      $arrData['dataset']['about']['status'] = true;
      $arrData['dataset']['about']['list'][$keycallPostcode_main]['id'] = $valuecallPostcode_main['id'];
      $arrData['dataset']['about']['list'][$keycallPostcode_main]['zip_code'] = $valuecallPostcode_main['zip_code'];
    }
    break;

  case 'career-select':
    $callCareerList = $aboutPage->callCareerDetail($req_masterkey);
    $arrData['dataset']['about']['status'] = false;
    foreach ($callCareerList as $keycallCareerList => $valuecallCareerList) {
      $arrData['dataset']['about']['status'] = true;
      $arrData['dataset']['about']['list'][$keycallCareerList]['id'] = $valuecallCareerList['id'];
      $arrData['dataset']['about']['list'][$keycallCareerList]['subject'] = $valuecallCareerList['subject'];
      $arrData['dataset']['about']['list'][$keycallCareerList]['title'] = $valuecallCareerList['title'];
      $arrData['dataset']['about']['list'][$keycallCareerList]['address'] = $valuecallCareerList['address'];
      $arrData['dataset']['about']['list'][$keycallCareerList]['quantity'] = $valuecallCareerList['quantity'];
    }
    break;

  case 'detail':
    $callCareerList = $aboutPage->callCareerDetail($req_masterkey, $req_contentid);
    $arrData['dataset']['about']['status'] = false;
    if ($callCareerList->_numOfRows == 1) {
      $arrData['dataset']['about']['status'] = true;
      foreach ($callCareerList as $keycallCareerList => $valuecallCareerList) {
        $arrData['dataset']['about']['list'][$keycallCareerList]['id'] = $valuecallCareerList['id'];
        $arrData['dataset']['about']['list'][$keycallCareerList]['masterkey'] = $valuecallCareerList['masterkey'];
        $arrData['dataset']['about']['list'][$keycallCareerList]['subject'] = $valuecallCareerList['subject'];
        $arrData['dataset']['about']['list'][$keycallCareerList]['title'] = $valuecallCareerList['title'];
        $arrData['dataset']['about']['list'][$keycallCareerList]['url'] = $valuecallCareerList['url'];
        $arrData['dataset']['about']['list'][$keycallCareerList]['view'] = number_format($valuecallCareerList['view']);
        $arrData['dataset']['about']['list'][$keycallCareerList]['html'] = fileinclude($valuecallCareerList['htmlfilename'], 'html', $valuecallCareerList['masterkey'], 'link');
        $Call_File = $callSetWebsite->Call_File_tbl($valuecallCareerList['id'], $config['jof']['db']);
        foreach ($Call_File as $keyCall_File => $valueCall_File) {
          $fileinfo = fileinclude($valueCall_File['filename'],"file",$valuecallCareerList['masterkey']);
          $fileinfoType = get_Icon($fileinfo);
          $fileinfoSize = get_IconSize($fileinfo);
          $arrData['dataset']['about']['list'][$keycallCareerList]['file'][$keyCall_File]['name'] = $valueCall_File['name'];
          $arrData['dataset']['about']['list'][$keycallCareerList]['file'][$keyCall_File]['filename'] = $valueCall_File['filename'];
          $arrData['dataset']['about']['list'][$keycallCareerList]['file'][$keyCall_File]['size'] = $fileinfoSize;
          $arrData['dataset']['about']['list'][$keycallCareerList]['file'][$keyCall_File]['type'] = $fileinfoType['type'];
          $arrData['dataset']['about']['list'][$keycallCareerList]['file'][$keyCall_File]['count'] = number_format($valueCall_File['download']);
          $arrData['dataset']['about']['list'][$keycallCareerList]['file'][$keyCall_File]['relative'] = fileinclude($valueCall_File['filename'],"file",$valuecallCareerList['masterkey'],"link");
          $arrData['dataset']['about']['list'][$keycallCareerList]['file'][$keyCall_File]['download'] = _URL_FRONTEND . $url->pagelang[2] . "/download/" . fileinclude($valueCall_File['filename'],"file",$valuecallCareerList['masterkey'],"download"). "&n=" . $valueCall_File['name'] . "&t=" .encodeStr('md_jof');
        }
      }
    }
    break;
  
  default:
    $callCareerList = $aboutPage->callCareerList($req_masterkey, $req_pageon, $req_limit, $req_order,$req_contentid);
    $arrData['dataset']['about']['status'] = false;
    $arrData['dataset']['about']['_maxRecordCount'] = $callCareerList->_maxRecordCount;
    foreach ($callCareerList as $keycallCareerList => $valuecallCareerList) {
      $arrData['dataset']['about']['status'] = true;
      $arrData['dataset']['about']['list'][$keycallCareerList]['id'] = $valuecallCareerList['id'];
      $arrData['dataset']['about']['list'][$keycallCareerList]['subject'] = $valuecallCareerList['subject'];
      $arrData['dataset']['about']['list'][$keycallCareerList]['title'] = $valuecallCareerList['title'];
      $arrData['dataset']['about']['list'][$keycallCareerList]['address'] = $valuecallCareerList['address'];
      $arrData['dataset']['about']['list'][$keycallCareerList]['quantity'] = $valuecallCareerList['quantity'];
    }
    break;
}
$arrJson = array(
  'status' => 200,
  'msg' => 'API Fetch About Successfully.',
  'time' => date('Y-m-d H:i:s'),
  'fetch' => $arrData,
);
echo json_encode($arrJson);
exit(0);