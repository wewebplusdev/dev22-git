<?php

switch ($req_display) {
  case 'detail':
    // menu slide
    $callCmg_list = $aboutPage->callCmg($req_masterkey);
    foreach ($callCmg_list as $keycallCmg_list => $valuecallCmg_list) {
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['id'] = $valuecallCmg_list['id'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['subject'] = $valuecallCmg_list['subject'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['title'] = $valuecallCmg_list['title'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['theme'] = $valuecallCmg_list['theme'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['typesub'] = $valuecallCmg_list['typesub'];
    }
    // data list
    $callCmsDetail = $aboutPage->callCmsDetail($req_masterkey, $req_contentid);
    if ($callCmsDetail->_numOfRows > 0) {
      $arrData['dataset']['about']['status'] = true;
      foreach ($callCmsDetail as $keycallCmsDetail => $valuecallCmsDetail) {
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
      }
    }else{
      $arrData['dataset']['about']['status'] = false;
    }
    break;

  default:
    // menu slide
    $callCmg_list = $aboutPage->callCmg($req_masterkey);
    foreach ($callCmg_list as $keycallCmg_list => $valuecallCmg_list) {
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['id'] = $valuecallCmg_list['id'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['subject'] = $valuecallCmg_list['subject'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['title'] = $valuecallCmg_list['title'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['theme'] = $valuecallCmg_list['theme'];
      $arrData['dataset']['about']['menu'][$keycallCmg_list]['typesub'] = $valuecallCmg_list['typesub'];
    }
    // data list
    $callCmg = $aboutPage->callCmg($req_masterkey, $req_gid);
    if ($callCmg->_numOfRows > 0) {
      if ($callCmg->fields['typesub'] == 2) { // have sub group
        $callCmsg = $aboutPage->callCmsg($req_masterkey, $callCmg->fields['id']);
        foreach ($callCmsg as $keycallCmsg => $valuecallCmsg) {
          $callCmsDetail = $aboutPage->callCmsDetailList($req_masterkey, $req_pageon, $req_limit, $req_order, $callCmg->fields['id'], $valuecallCmsg['id']);
          foreach ($callCmsDetail as $keycallCmsDetail => $valuecallCmsDetail) {
            // cmg
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['id'] = $valuecallCmsDetail['id'];
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['gid'] = $callCmg->fields['id'];
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['gsubject'] = $callCmg->fields['subject'];
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['theme'] = $callCmg->fields['theme'];
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['typesub'] = $callCmg->fields['typesub'];
            // cmsg
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['sgid'] = $valuecallCmsg['id'];
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['sgsubject'] = $valuecallCmsg['subject'];
            // cms
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['subject'] = $valuecallCmsDetail['subject'];
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['title'] = $valuecallCmsDetail['title'];
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['typeshow'] = $valuecallCmsDetail['typec'];
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['pic'] = fileinclude($valuecallCmsDetail['pic'], 'pictures', $valuecallCmsDetail['masterkey'], 'link');
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['view'] = number_format($valuecallCmsDetail['view']);
            $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['credate'] = DateThai($valuecallCmsDetail['credate'], 23, $url->pagelang[2], 'shot3');
            // file upload
            $Call_File = $callSetWebsite->Call_File($valuecallCmsDetail['id']);
            foreach ($Call_File as $keyCall_File => $valueCall_File) {
              $fileinfo = fileinclude($valueCall_File['filename'], "file", $valuecallCmsDetail['masterkey']);
              $fileinfoType = get_Icon($fileinfo);
              $fileinfoSize = get_IconSize($fileinfo);
              $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['file'][$keyCall_File]['name'] = $valueCall_File['name'];
              $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['file'][$keyCall_File]['filename'] = $valueCall_File['filename'];
              $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['file'][$keyCall_File]['size'] = $fileinfoSize;
              $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['file'][$keyCall_File]['type'] = $fileinfoType['type'];
              $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['file'][$keyCall_File]['count'] = number_format($valueCall_File['download']);
              $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['file'][$keyCall_File]['relative'] = fileinclude($valueCall_File['filename'], "file", $valuecallCmsDetail['masterkey'], "link");
              $arrData['dataset']['about']['list'][$keycallCmsg][$keycallCmsDetail]['file'][$keyCall_File]['download'] = _URL_FRONTEND . $url->pagelang[2] . "/download/" . fileinclude($valueCall_File['filename'], "file", $valuecallCmsDetail['masterkey'], "download") . "&n=" . $valueCall_File['name'] . "&t=" . encodeStr('md_cmf');
            }
          }
        }
      } else { // not have sub group
        $callCmsDetail = $aboutPage->callCmsDetailList($req_masterkey, $req_pageon, $req_limit, $req_order, $callCmg->fields['id']);
        foreach ($callCmsDetail as $keycallCmsDetail => $valuecallCmsDetail) {
          // cmg
          $arrData['dataset']['about']['list'][$keycallCmsDetail]['id'] = $valuecallCmsDetail['id'];
          $arrData['dataset']['about']['list'][$keycallCmsDetail]['gid'] = $callCmg->fields['id'];
          $arrData['dataset']['about']['list'][$keycallCmsDetail]['gsubject'] = $callCmg->fields['subject'];
          $arrData['dataset']['about']['list'][$keycallCmsDetail]['theme'] = $callCmg->fields['theme'];
          $arrData['dataset']['about']['list'][$keycallCmsDetail]['typesub'] = $callCmg->fields['typesub'];
          // cms
          $arrData['dataset']['about']['list'][$keycallCmsDetail]['subject'] = $valuecallCmsDetail['subject'];
          $arrData['dataset']['about']['list'][$keycallCmsDetail]['title'] = $valuecallCmsDetail['title'];
          $arrData['dataset']['about']['list'][$keycallCmsDetail]['typeshow'] = $valuecallCmsDetail['typec'];
          $arrData['dataset']['about']['list'][$keycallCmsDetail]['view'] = number_format($valuecallCmsDetail['view']);
          $arrData['dataset']['about']['list'][$keycallCmsDetail]['credate'] = DateThai($valuecallCmsDetail['credate'], 23, $url->pagelang[2], 'shot3');
          // file upload
          $Call_File = $callSetWebsite->Call_File($valuecallCmsDetail['id']);
          foreach ($Call_File as $keyCall_File => $valueCall_File) {
            $fileinfo = fileinclude($valueCall_File['filename'], "file", $valuecallCmsDetail['masterkey']);
            $fileinfoType = get_Icon($fileinfo);
            $fileinfoSize = get_IconSize($fileinfo);
            $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['name'] = $valueCall_File['name'];
            $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['filename'] = $valueCall_File['filename'];
            $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['size'] = $fileinfoSize;
            $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['type'] = $fileinfoType['type'];
            $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['count'] = number_format($valueCall_File['download']);
            $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['relative'] = fileinclude($valueCall_File['filename'], "file", $valuecallCmsDetail['masterkey'], "link");
            $arrData['dataset']['about']['list'][$keycallCmsDetail]['file'][$keyCall_File]['download'] = _URL_FRONTEND . $url->pagelang[2] . "/download/" . fileinclude($valueCall_File['filename'], "file", $valuecallCmsDetail['masterkey'], "download") . "&n=" . $valueCall_File['name'] . "&t=" . encodeStr('md_cmf');
          }
        }
      }
    }
    $arrData['dataset']['about']['_maxRecordCount'] = number_format($callCmsDetail->_numOfRows);
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
