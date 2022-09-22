<?php
switch ($req_display) {
  case 'detail':
    // group slide
    $callCmg_list = $aboutPage->callCmg($req_masterkey);
    foreach ($callCmg_list as $keycallCmg_list => $valuecallCmg_list) {
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['id'] = $valuecallCmg_list['id'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['subject'] = $valuecallCmg_list['subject'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['title'] = $valuecallCmg_list['title'];
    }
    $callCmsDetail = $aboutPage->callCmsDetail($req_masterkey, $req_contentid);
    $arrData['dataset']['about']['status'] = false;
    foreach ($callCmsDetail as $keycallCmsDetail => $valuecallCmsDetail) {
      $arrData['dataset']['about']['status'] = true;
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['id'] = $valuecallCmsDetail['id'];
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['gid'] = $valuecallCmsDetail['gid'];
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['masterkey'] = $valuecallCmsDetail['masterkey'];
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['subject'] = $valuecallCmsDetail['subject'];
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['title'] = $valuecallCmsDetail['title'];
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['url'] = $valuecallCmsDetail['url'];
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['view'] = number_format($valuecallCmsDetail['view']);
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['html'] = fileinclude($valuecallCmsDetail['htmlfilename'], 'html', $valuecallCmsDetail['masterkey'], 'link');
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['pic'] = fileinclude($valuecallCmsDetail['pic'], 'pictures', $valuecallCmsDetail['masterkey'], 'link');
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['credate'] = DateThai($valuecallCmsDetail['credate'], 1, $url->pagelang[2], 'full');
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['keywords'] = $valuecallCmsDetail['keywords'];
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['metatitle'] = $valuecallCmsDetail['metatitle'];
      $arrData['dataset']['about']['list'][$keycallCmsDetail]['description'] = $valuecallCmsDetail['description'];
      $Call_File = $callSetWebsite->Call_File($valuecallCmsDetail['id']);
      foreach ($Call_File as $keyCall_File => $valueCall_File) {
        $fileinfo = fileinclude($valueCall_File['filename'],"file",$valuecallCmsDetail['masterkey']);
        $fileinfoType = get_Icon($fileinfo);
        $fileinfoSize = get_IconSize($fileinfo);
        $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['name'] = $valueCall_File['name'];
        $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['filename'] = $valueCall_File['filename'];
        $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['size'] = $fileinfoSize;
        $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['type'] = $fileinfoType['type'];
        $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['count'] = number_format($valueCall_File['download']);
        $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['relative'] = fileinclude($valueCall_File['filename'],"file",$valuecallCmsDetail['masterkey'],"link");
        $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['download'] = _URL_FRONTEND . $url->pagelang[2] . "/download/" . fileinclude($valueCall_File['filename'],"file",$valuecallCmsDetail['masterkey'],"download"). "&n=" . $valueCall_File['name'] . "&t=" .encodeStr('md_cmf');
      }
      $Call_Album = $callSetWebsite->Call_Album($valuecallCmsDetail['id'], $config['cma']['db']);
      foreach ($Call_Album as $keyCall_Album => $valueCall_Album) {
        $arrData['dataset']['about']['list'][$keycallCmsDetail]['album'][$keyCall_Album]['relative'] = fileinclude($valueCall_Album['filename'],"album",$valuecallCmsDetail['masterkey'],"link");
      }
    }
    break;
  
  default:
    // group slide
    $callCmg_list = $aboutPage->callCmg($req_masterkey);
    foreach ($callCmg_list as $keycallCmg_list => $valuecallCmg_list) {
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['id'] = $valuecallCmg_list['id'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['subject'] = $valuecallCmg_list['subject'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['title'] = $valuecallCmg_list['title'];
    }
    // data list
    $callCmg = $aboutPage->callCmg($req_masterkey, $req_gid);
    $callCmg_list = $aboutPage->callCmsDetailList($req_masterkey, $req_pageon, $req_limit, $req_order, $callCmg->fields['id']);
    foreach ($callCmg_list as $keycallCmg_list => $valuecallCmg_list) {
      $arrData['dataset']['about']['list'][$keycallCmg_list]['id'] = $valuecallCmg_list['id'];
      $arrData['dataset']['about']['list'][$keycallCmg_list]['masterkey'] = $valuecallCmg_list['masterkey'];
      $arrData['dataset']['about']['list'][$keycallCmg_list]['subject'] = $valuecallCmg_list['subject'];
      $arrData['dataset']['about']['list'][$keycallCmg_list]['title'] = $valuecallCmg_list['title'];
      $arrData['dataset']['about']['list'][$keycallCmg_list]['pic'] = fileinclude($valuecallCmg_list['pic'], 'pictures', $valuecallCmg_list['masterkey'], 'link');
      $arrData['dataset']['about']['list'][$keycallCmg_list]['credate'] = DateThai($valuecallCmg_list['credate'], 1, $url->pagelang[2], 'full');
    }
    $arrData['dataset']['about']['_maxRecordCount'] = $callCmg_list->_maxRecordCount;
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


