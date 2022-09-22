<?php
// menu slide
$callMemsg_menu = $aboutPage->callMemsg($req_masterkey);
foreach ($callMemsg_menu as $keycallMemsg_menu => $valuecallMemsg_menu) {
  $arrData['dataset']['about']['menu'][$keycallMemsg_menu]['id'] = $valuecallMemsg_menu['id'];
  $arrData['dataset']['about']['menu'][$keycallMemsg_menu]['subject'] = $valuecallMemsg_menu['subject'];
  $arrData['dataset']['about']['menu'][$keycallMemsg_menu]['title'] = $valuecallMemsg_menu['title'];
}

// group list
$callMemsg = $aboutPage->callMemsg($req_masterkey, $req_gid);
$arrData['dataset']['about']['group']['id'] = $callMemsg->fields['id'];
$arrData['dataset']['about']['group']['subject'] = $callMemsg->fields['subject'];
$arrData['dataset']['about']['group']['url'] = $callMemsg->fields['url'];
$Call_File_tbl = $callSetWebsite->Call_File_tbl($callMemsg->fields['id'], $config['memf']['db']);
  foreach ($Call_File_tbl as $keyCall_File => $valueCall_File) {
    $fileinfo = fileinclude($valueCall_File['filename'],"file",$callMemsg->fields['masterkey']);
    $fileinfoType = get_Icon($fileinfo);
    $fileinfoSize = get_IconSize($fileinfo);
    $arrData['dataset']['about']['group']['file'][$keyCall_File]['name'] = $valueCall_File['name'];
    $arrData['dataset']['about']['group']['file'][$keyCall_File]['filename'] = $valueCall_File['filename'];
    $arrData['dataset']['about']['group']['file'][$keyCall_File]['size'] = $fileinfoSize;
    $arrData['dataset']['about']['group']['file'][$keyCall_File]['type'] = $fileinfoType['type'];
    $arrData['dataset']['about']['group']['file'][$keyCall_File]['count'] = number_format($valueCall_File['download']);
    $arrData['dataset']['about']['group']['file'][$keyCall_File]['relative'] = fileinclude($valueCall_File['filename'],"file",$callMemsg->fields['masterkey'],"link");
    $arrData['dataset']['about']['group']['file'][$keyCall_File]['download'] = _URL_FRONTEND . $url->pagelang[2] . "/download/" . fileinclude($valueCall_File['filename'],"file",$valuecallCmsDetail['masterkey'],"download"). "&n=" . $valueCall_File['name'] . "&t=" .encodeStr('md_cmf');
  }

// data list
$callMemPos = $aboutPage->callMemPos($req_masterkey, $callMemsg->fields['id']);
foreach ($callMemPos as $keycallMemPos => $valuecallMemPos) {
  $arrData['dataset']['about']['list'][$valuecallMemPos['gid']][$keycallMemPos]['id'] = $valuecallMemPos['id'];
  $arrData['dataset']['about']['list'][$valuecallMemPos['gid']][$keycallMemPos]['position'] = $valuecallMemPos['gsubject'];
  $arrData['dataset']['about']['list'][$valuecallMemPos['gid']][$keycallMemPos]['fname'] = $valuecallMemPos['fname'];
  $arrData['dataset']['about']['list'][$valuecallMemPos['gid']][$keycallMemPos]['lname'] = $valuecallMemPos['lname'];
  $arrData['dataset']['about']['list'][$valuecallMemPos['gid']][$keycallMemPos]['depart'] = $valuecallMemPos['depart'];
  $arrData['dataset']['about']['list'][$valuecallMemPos['gid']][$keycallMemPos]['sdatetxt'] = $valuecallMemPos['sdatetxt'];
  $arrData['dataset']['about']['list'][$valuecallMemPos['gid']][$keycallMemPos]['email'] = $valuecallMemPos['email'];
  $arrData['dataset']['about']['list'][$valuecallMemPos['gid']][$keycallMemPos]['tel'] = $valuecallMemPos['tel'];
  $arrData['dataset']['about']['list'][$valuecallMemPos['gid']][$keycallMemPos]['pic'] = fileinclude($valuecallMemPos['pic'], 'pictures', $valuecallMemPos['masterkey'], 'link');
  $arrData['dataset']['about']['list'][$valuecallMemPos['gid']][$keycallMemPos]['html'] = fileinclude($valuecallMemPos['htmlfilename'], 'html', $valuecallMemPos['masterkey'], 'link');
}
$arrData['dataset']['about']['_maxRecordCount'] = $callMemPos->_numOfRows;

$arrJson = array(
  'status' => 200,
  'msg' => 'API Fetch About Successfully.',
  'time' => date('Y-m-d H:i:s'),
  'fetch' => $arrData,
);
echo json_encode($arrJson);
exit(0);
