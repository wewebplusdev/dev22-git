<?php

## print pre ##

function print_pre($expression, $wrap = false) {
   $css = 'border:1px dashed #06f;background:#69f;padding:1em;text-align:left;z-index:99999;font-size:12px;position:relative';
   if ($wrap) {
      $str = '<p style="' . $css . '"><tt>' . str_replace(
                      array('  ', "\n"),
                      array('&nbsp; ', '<br />'),
                      htmlspecialchars(print_r($expression, true))
              ) . '</tt></p>';
   } else {
      $str = '<pre style="' . $css . '">' . print_r($expression, true) . '</pre>';
   }
   echo $str;
}

## clean array ##

function cleanArray($arr) {
   $size = sizeof($arr);
   for ($i = 0; $i < $size; $i++) {
      $thum = trim($arr[$i]);
      if ($thum != "") {
         $r[] = $thum;
      }
   }
   return $r;
}

## include Page to template #####

function templateInclude($setting) {
   global $path_template, $templateweb;
   #################################
   switch ($setting['control']) {
      case 'component':
         $page = _DIR . "/" . $path_template[$templateweb][0] . "/_component/" . $setting['template'];
         break;

      default:
         $page = _DIR . "/front/controller/script/" . $setting['page'] . "/template/" . $setting['template'];
         break;
   }

   return $page;
}

## link lang ##

function configlang($lang) {
   global $url_show_lang, $path_root;
   if (!empty($url_show_lang)) {
      return $path_root . "/" . $lang;
   } else {
      if (!empty($path_root)) {
         return $path_root;
      } else {
         return "";
      }
   }
}

## loop number ##

function loopnum($min, $max, $sort = "asc") {
   $list = array();
   while ($min <= $max) {
      $list[$min] = $min;
      $min++;
   }
   switch ($sort) {
      case 'desc':
         krsort($list);
         break;

      default:
         ksort($list);
         break;
   }

   return $list;
}

## show month ##

function showmonth($month, $lang, $type = "shot") {
   global $strMonthCut;
   return $strMonthCut[$type][$lang][$month];
}

## sql insert ##

function sqlinsert($array, $dbname, $key) {
   global $db;

   $sql_insert = "Select * From " . $dbname . " where " . $key . " = -1";

   $result_insert = $db->Execute($sql_insert);

   $sql_create_insert = $db->GetInsertSQL($result_insert, $array);
   $result_insert_execute = $db->Execute($sql_create_insert);

   $return['id'] = $db->Insert_ID();
   $return['sql'] = $sql_create_insert;
   $return['status'] = $result_insert_execute;
   $return['sqle'] = $sql_insert;
   return $return;
}

## sql update ##

function sqlupdate($array, $dbname, $key, $where = null) {
   global $db;

   $listWhere = "";

   if (is_array($key)) {
      foreach ($key as $para => $value) {
         $listWhere .= " " . $para . " " . $value;
      }
   } else {
      $listWhere = $key;
   }

   if (!empty($where)) {
      $sql_update = "Select * From " . $dbname . " where " . $listWhere . " = " . $where;
   } else {
      $sql_update = "Select * From " . $dbname . " where " . $listWhere;
   }

   $result_update = $db->Execute($sql_update);

   $updateSQL = $db->GetUpdateSQL($result_update, $array);
   $result_update_execute = $db->execute($updateSQL);

   $return['where'] = $where;
   $return['sql'] = $sql_update;
   $return['sqlexecute'] = $updateSQL;
   $return['status'] = $result_update_execute;

   return $return;
}

## sql delete ##
## get ip ##

function getip() {

   $ip = false;
   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
   }
   if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ips = explode(", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
      if ($ip) {
         array_unshift($ips, $ip);
         $ip = false;
      }
      for ($i = 0; $i < count($ips); $i++) {
         if (!preg_match("/^(10|172\.16|192\.168)\./i", $ips[$i])) {
            if (version_compare(phpversion(), "5.0.0", ">=")) {
               if (ip2long($ips[$i]) != false) {
                  $ip = $ips[$i];
                  break;
               }
            } else {
               if (ip2long($ips[$i]) != -1) {
                  $ip = $ips[$i];
                  break;
               }
            }
         }
      }
   }
   return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}

## encodeStr ##

function encodeStr($variable) {

   ############################################
   $key = "xitgmLwmp";
   $index = 0;
   $temp = "";
   $variable = str_replace("=", "?O", $variable);
   for ($i = 0; $i < strlen($variable); $i++) {
      $temp .= $variable[$i] . $key[$index];
      $index++;
      if ($index >= strlen($key)) {
         $index = 0;
      }
   }
   $variable = strrev($temp);
   $variable = base64_encode($variable);
   $variable = utf8_encode($variable);
   $variable = urlencode($variable);
   $variable = str_rot13($variable);
   $variable = str_replace("%", "WewEb", $variable);
   return $variable;
}

## decodeStr ##

function decodeStr($enVariable) {
   $enVariable = str_replace("WewEb", "%", $enVariable);
   $enVariable = str_rot13($enVariable);
   $enVariable = urldecode($enVariable);
   $enVariable = utf8_decode($enVariable);
   $enVariable = base64_decode($enVariable);
   $enVariable = strrev($enVariable);
   $current = 0;
   $temp = "";
   for ($i = 0; $i < strlen($enVariable); $i++) {
      if ($current % 2 == 0) {
         $temp .= $enVariable[$i];
      }
      $current++;
   }
   $temp = str_replace("?O", "=", $temp);
   parse_str($temp, $variable);
   return $temp;
}

##############################################

function DateThai($strDate, $function = null, $lang = "th", $type = "shot") {

   global $strMonthCut, $url;

   ##############################################
   $strYear = date("Y", strtotime($strDate)) + 543;
   $strYear2 = date("Y", strtotime($strDate));
   $strYear_mini = substr($strYear, 2, 4);
   $strYear_mini_en = substr($strYear2, 2, 4);
   $strMonth = date("n", strtotime($strDate));
   $strMonth_real = date("n", strtotime($strDate));
   $strMonth_full = date("n", strtotime($strDate));
   $strMonth_number = date("n", strtotime($strDate));
   $strDay = date("j", strtotime($strDate));
   $strHour = date("H", strtotime($strDate));
   $strMinute = date("i", strtotime($strDate));
   $strSeconds = date("s", strtotime($strDate));
   if ($lang == 'en') {
      $strYear_current = date("Y", strtotime($strDate));
   } else {
      $strYear_current = date("Y", strtotime($strDate)) + 543;
   }

   $strMonth = $strMonthCut[$type][$lang][$strMonth];
   $strMonth_full = $strMonthCut['full'][$lang][$strMonth_full];
   if (!empty($strDate)) {
      switch ($function) {
         case '1':
            $day = "$strDay $strMonth $strYear";
            break;
         case '2':
            $day = "$strDay $strMonth $strYear2";
            break;
         case '3':
            $day = "$strDay $strMonth $strYear_mini";
            break;
         case '4':
            $day = "$strDay $strMonth $strYear , $strHour:$strMinute ";
            break;

         case '5':
            $day = "$strDay $strMonth $strYear , $strHour:$strMinute:$strSeconds ";
            break;
         case '6':
            $day = "$strDay";
            break;
         case '7':
            $day = "$strMonth $strYear";
            break;
         case '8':
            $day = "$strHour:$strMinute";
            break;
         case '9':
            $day = "$strMonth";
            break;
         case '10':
            $day = "$strYear";
            break;
         case '11':
            $day = "วันที่ $strDay $strMonth $strYear | เวลา $strHour:$strMinute น.";
            break;
         case '12':

            $previousTimeStamp = strtotime(str_replace("-", "/", $strDate));
            $lastTimeStamp = strtotime(str_replace("-", "/", date("Y-m-d H:i:s")));

            $menos = $lastTimeStamp - $previousTimeStamp;

            $mins = $menos / 60;
            if ($mins < 1) {
               $showing = $menos . " วินาที";
            } else {
               $minsfinal = floor($mins);
               $secondsfinal = $menos - ($minsfinal * 60);
               $hours = $minsfinal / 60;
               if ($hours < 1) {
                  $showing = $minsfinal . " นาที " . $secondsfinal . " วินาที";
               } else {
                  $hoursfinal = floor($hours);
                  $minssuperfinal = $minsfinal - ($hoursfinal * 60);
                  $days = $hoursfinal / 24;
                  if ($days < 1) {
                     $showing = $hoursfinal . " ชั่วโมง " . $minssuperfinal . " นาที " . $secondsfinal . " วินาที";
                  } else {
                     $daysfinal = floor($days);
                     $hourssuperfinal = $hoursfinal - ($daysfinal * 24);
                     $showing = "ผ่านมาแล้ว " . $daysfinal . " วัน " . $hourssuperfinal . " ชั่วโมง " . $minssuperfinal . " นาที " . $secondsfinal . " วินาที";
                  }
               }
            }
            $day = $showing;
            break;

         case '13':
            $day = "$strDay<br/>$strMonth";
            break;
         case '14':
            $day = "$strDay" . "th" . " $strMonth_full $strYear2";
            break;
         case '15':
            $day = "$strMonth_full $strDay, $strYear2";
            break;
         case '16':
            $day = "$strDay.$strMonth_number.$strYear_mini_en";
            break;
         case '17':
            $day = "$strDay.$strMonth_number.$strYear2";
            break;
         case '18':
            $strMonth_number = sprintf("%02d", $strMonth_number);
            $day = "<strong>$strDay</strong>$strMonth_number.$strYear2";
            break;
         case '19':
            $strMonth_number = sprintf("%02d", $strMonth_number);
            $day = "$strDay.$strMonth_number.$strYear2";
            break;
         case '20':
            $strMonth = $strMonthCut['shot2']['en'][$strMonth_real];
            $day = "$strMonth $strDay, $strYear2";
            break;
         case '21':
            $day = "$strDay $strMonth";
            break;
         case '22':
            $day = "$strDay $strMonth $strYear " . "เวลา" . $strHour . ":" . $strMinute . " น. ";
            break;
         case '23':
            $day = "$strDay.$strMonth.$strYear_current";
            break;
         default:
            break;
      }
   } else {
      $day = "-";
   }


   return $day;
}

## check date expire ##

function checkexpire($date) {

   $expire = strtotime($date);
   $today = strtotime("today midnight");

   if ($today >= $expire) {
      return true;
   } else {
      return false;
   }
}

############################################

function changeQuot($Data) {
   ############################################
   global $coreLanguageSQL;

   $valTrim = trim($Data);

   $valChangeQuot = $valTrim;

   $valChangeQuot = str_replace("'", "&rsquo;", str_replace('"', '&quot;', $valChangeQuot));

   return $valChangeQuot;
}

## page pagination ##

function pagepagination($uri, $limit = null) {
   global $limitpage;

   $pageOn = array();
   if (!empty($limit)) {
      $pageOn['limit'] = $limit;
   } else {
      $pageOn['limit'] = $limitpage['showperPageSeller'];
   }
   $pagemain = str_replace($uri->pagelang[2] . "/", "", explode("?", $uri->url));

   $pageOn['page'] = $pagemain[0];
   $listparameter = array();

   foreach ($uri->uri as $key => $value) {
      if ($key != "page") {
         $listparameter[] = $key . "=" . $value;
      }
   }

   $countPara = count($listparameter);

   if ($countPara >= 1) {
      $pageOn['parambefor'] = "?" . implode("&", $listparameter);
      $pageOn['parameter'] = "&page=";
   } else {
      $pageOn['parambefor'] = "";
      $pageOn['parameter'] = "?page=";
   }


   if (array_key_exists('page', $uri->uri)) {
      $pageOn['on'] = $uri->uri['page'];
   } else {
      $pageOn['on'] = 1;
   }


   return $pageOn;
}

############################################

function resize($img, $w, $h, $newfilename) {
   ############################################
   //Check if GD extension is loaded
   if (!extension_loaded('gd') && !extension_loaded('gd2')) {
      trigger_error("GD is not loaded", E_USER_WARNING);
      return false;
   }

   //Get Image size info
   $imgInfo = getimagesize($img);
   switch ($imgInfo[2]) {
      case 1:
         $im = imagecreatefromgif($img);
         break;
      case 2:
         $im = imagecreatefromjpeg($img);
         break;
      case 3:
         $im = imagecreatefrompng($img);
         break;
      default:
         trigger_error('Unsupported filetype!', E_USER_WARNING);
         break;
   }

   //If image dimension is smaller, do not resize
   if ($imgInfo[0] <= $w && $imgInfo[1] <= $h) {
      $nHeight = $imgInfo[1];
      $nWidth = $imgInfo[0];
   } else {
      //yeah, resize it, but keep it proportional
      if ($w / $imgInfo[0] > $h / $imgInfo[1]) {
         $nWidth = $w;
         $nHeight = $imgInfo[1] * ($w / $imgInfo[0]);
      } else {
         $nWidth = $imgInfo[0] * ($h / $imgInfo[1]);
         $nHeight = $h;
      }
   }
   $nWidth = round($nWidth);
   $nHeight = round($nHeight);

   $newImg = imagecreatetruecolor($nWidth, $nHeight);

   /* Check if this image is PNG or GIF, then set if Transparent */
   if (($imgInfo[2] == 1) || ($imgInfo[2] == 3)) {
      imagealphablending($newImg, false);
      imagesavealpha($newImg, true);
      $transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
      imagefilledrectangle($newImg, 0, 0, $nWidth, $nHeight, $transparent);
   }
   imagecopyresampled($newImg, $im, 0, 0, 0, 0, $nWidth, $nHeight, $imgInfo[0], $imgInfo[1]);

   //Generate the file, and rename it to $newfilename
   switch ($imgInfo[2]) {
      case 1:
         imagegif($newImg, $newfilename);
         break;
      case 2:
         imagejpeg($newImg, $newfilename);
         break;
      case 3:
         imagepng($newImg, $newfilename);
         break;
      default:
         trigger_error('Failed resize image!', E_USER_WARNING);
         break;
   }

   return $newfilename;
}

function fileinclude($filename, $fileType = 'html', $mod_tb_about_masterkey, $for = 'check', $crop = false, $cropthumb = false) {
   global $path_upload, $path_upload_url, $path_template, $templateweb, $core_pathname_upload, $detectDivice;

   if ($for == 'linkthumb') {
      $fileType = "album";
      $filename = "reO_" . $filename;
   }

   if (!empty($fileType)) {
      $checkFile = $path_upload . "/" . $mod_tb_about_masterkey . "/" . $fileType . "/" . $filename;
   } else {
      $checkFile = $path_upload . "/" . $mod_tb_about_masterkey . "/" . $filename;
   }
   $path_url_vdo = _URL . 'upload/';
   $checkFileCrop = $path_upload . "/" . $mod_tb_about_masterkey . "/crop/" . $filename;

   if (!empty($cropthumb)) {
      $checkFileCropThumb = $path_upload . "/" . $mod_tb_about_masterkey . "/cropthumb/" . $filename;
   }

   if (file_exists($checkFile) && $filename) {
      $setFoldet = $path_upload_url;
      $setimg = str_replace($path_upload, "", $checkFile);

      if (!empty($crop)) {
         if (file_exists($checkFileCrop)) {
            $setimg = str_replace($path_upload, "", $checkFileCrop);
         }
      }

      if (!empty($cropthumb)) {
         if (file_exists($checkFileCropThumb)) {
            $setimg = str_replace($path_upload, "", $checkFileCropThumb);
         }
      }
   } else {
      $setFoldet = _URL . $path_template[$templateweb][0];
      if ($mod_tb_about_masterkey == 'cu') {
         $setimg = "/public/image/asset/default_boss.png";
      } else {
         $setimg = "/assets/img/static/no-img.jpg";
      }
   }

   switch ($for) {
      case 'linkthumb':
      case 'link':
         $pathFile = $setFoldet . $setimg;
         break;

      case 'download':
         $fileLoad = encodeStr($path_upload . "/" . $mod_tb_about_masterkey . "/" . $fileType . "/" . $filename);
         $pathFile = "?file=" . $fileLoad;
         break;
      case 'vdo':
         $pathFile = $path_url_vdo . $mod_tb_about_masterkey . "/" . $fileType . "/" . $filename;
         break;

      default:
         $pathFile = $path_upload . "/" . $mod_tb_about_masterkey . "/" . $fileType . "/" . $filename;
         break;
   }


   return $pathFile;
}

function callhtml($valhtml) {
   if (is_file($valhtml)) {
      $fd = @fopen($valhtml, "r");
      $contents = @fread($fd, @filesize($valhtml));
      @fclose($fd);
      echo txtReplaceHTML($contents);
   }
}

####################################################

function txtReplaceHTML($data) {
   ####################################################
   return str_replace("\\", "", $data);
}

## texttolink ##

function texttolink($txt) {
   $txt = trim($txt);
   $txt = str_replace(" ", "-", $txt);
   return $txt;
}

## gennerateencode to include image ##

function gennerateencode($namefile, $masterkey, $folder, $crop = false) {
   return _URL . "file?p=" . encodeStr($namefile . "," . $masterkey . "," . $folder . "," . $crop) . "&d=" . date('YmdH');
}

## clear method ##

function clearmethod() {
   if (empty($_SESSION['sessionMetod'])) {
      $_SESSION['sessionMetod'] = true;
      header("Location:" . $_SERVER['REQUEST_URI']);
   } else {
      $_SESSION['sessionMetod'] = false;
   }
}

## goto 404 ##

function page404() {
   global $linklang;
   header("Location:" . $linklang . "/404");
}

function checkDiscount($price, $discount) {

   if ($discount >= 1) {
      return ((($price - $discount) / $price) * 100);
   } else {
      return 0;
   }
}

function embetyoutube($link) {
   ####################################
   return str_replace("watch?v=", "embed/", $link);
}

####################################################

function get_IconSize($LinkRelativePath) {
   ####################################################
   $filesize = @filesize($LinkRelativePath);
   if ($filesize < 10485) {
      $sizeFile = number_format($filesize / 1024, 2) . " Kb";
   } else {
      $sizeFile = number_format($filesize / (1024 * 1024), 2) . " Mb";
   }
   return ($sizeFile);
}

####################################################

function get_Icon($DownloadFile, $type = "") {
   ####################################################

   $ImageType = strrchr($DownloadFile, '.');

   if (($ImageType == ".jpg") || ($ImageType == ".png") || ($ImageType == ".gif") || ($ImageType == ".bmp")) {
      $tocss = "picture";
      $TypeImgFile = "file-picture-o";
   } elseif ($ImageType == ".pdf") {
      $tocss = "pdf";
      $TypeImgFile = "file-pdf-o";
   } elseif ($ImageType == ".txt") {
      $tocss = "txt";
      $TypeImgFile = "file-text-o";
   } elseif (($ImageType == ".zip") || ($ImageType == ".rar")) {
      $tocss = "achive";
      $TypeImgFile = "file-zip-o";
   } elseif ($ImageType == ".xls" || $ImageType == ".xlsx") {
      $tocss = "xls";
      $TypeImgFile = "file-excel-o";
   } elseif ($ImageType == ".ppt" || $ImageType == ".pptx") {
      $tocss = "ppt";
      $TypeImgFile = "file-powerpoint-o";
   } elseif ($ImageType == ".rtf" || $ImageType == ".doc" || $ImageType == ".docx") {
      $tocss = "doc";
      $TypeImgFile = "file-word-o";
   } else {
      $tocss = "other";
      $TypeImgFile = "file-o";
   }


   $fileCheck = array(
       "icon" => $TypeImgFile,
       "type" => $ImageType,
       "tocss" => $tocss
   );
   if (!empty($type)) {
      return $fileCheck[$type];
   } else {
      return $fileCheck;
   }
}

# log web ######################################################################

function counter_web() {
   global $core_tb_log, $db, $cookie_log, $setcookie, $core_pathname_logs, $config;
   if (isset($_COOKIE['logview']) && $_COOKIE['logview'] == true) {
// //     // IS SET and has a true value
   } else {

      $sqlUpdateView = "SELECT * FROM " . $config['sys']['db']['counter'] . " WHERE " . $config['sys']['db']['counter'] . "_ssid='" . session_id() . "'";
      $resultView = $db->execute($sqlUpdateView);
      $idcount = 0;
      $count = 0;
      if (empty($resultView->fields)) {
         $insert = array();
         $insert[$config['sys']['db']['counter'] . "_ssid"] = "'" . session_id() . "'";
         $insert[$config['sys']['db']['counter'] . "_ip"] = "'" . getip() . "'";
         $sqlLog = "INSERT INTO " . $config['sys']['db']['counter'] . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
         $logResult = $db->execute($sqlLog);
         $idcount = $db->insert_Id();
      } else {
         $idcount = $resultView->fields[$config['sys']['db']['counter'] . '_id'];
         $count = $resultView->fields[$config['sys']['db']['counter'] . '_count'] + 1;
      }
//      echo $count;
//      $formView = array();
//      $formView[$config['sys']['db']['counter'] . '_count'] = $resultView->fields[$config['sys']['db']['counter'] . '_count'] + 1;
//      $formView[$config['sys']['db']['counter'] . '_timestamp'] = date("Y/m/d H:i:s");
//      $updateSQLView = $db->GetUpdateSQL($resultView, $formView);
      $sql = "UPDATE " . $config['sys']['db']['counter'] . " SET " . $config['sys']['db']['counter'] . "_count=$count WHERE " . $config['sys']['db']['counter'] . "_id=$idcount";
      $db->execute($sql);

      setcookie("logview", true, time() + (60 * 1)); // 60 seconds ( 1 minute) * 20 = 20 minutes
   }

   $sql = "SELECT SUM(" . $config['sys']['db']['counter'] . "_count) AS counter FROM " . $config['sys']['db']['counter'] . " WHERE 1";
   $resultView = $db->execute($sql);
   return $resultView->fields["counter"];
}

function logs($action, $actionType, $ccheck = true) {
   global $core_tb_log, $db, $cookie_log, $setcookie, $core_pathname_logs, $config;

   if (!empty($_SESSION['front_session_ssid'])) {
      $typeUserAction = 1;
      $sessionOnlogs_ssid = $_SESSION["front_session_ssid"];
      $sessionOnlogs_name = $_SESSION["front_session_name"];
   } else {
      $typeUserAction = 0;
      $sessionOnlogs_ssid = null;
      $sessionOnlogs_name = null;
   }

   $myDateNow = date("Y-m-d");
   $myTimeNow = date("H:i:s");
   $ipOnligs = getIP();

   #save log file  start
   $CurrentPath = _DIR . $core_pathname_logs . "";

   if (strpos($action, "view") !== false) {
      $dirLog = "view";
   } else {
      $dirLog = $actionType;
   }

   if (!is_dir($CurrentPath)) {
      mkdir($CurrentPath, 0777);
   }

   if (!is_dir($CurrentPath . "/front")) {
      mkdir($CurrentPath . "/front", 0777);
   }

   if (!is_dir($CurrentPath . "/front/" . $dirLog)) {
      mkdir($CurrentPath . "/front/" . $dirLog, 0777);
   }

   $logsfile = $CurrentPath . "/front/" . $dirLog . "/" . $myDateNow . ".logs";

   if (!is_file($logsfile)) {
      $fp = @fopen($logsfile, 'w+');
      fwrite($fp, $action . "|:|" . session_id() . "|:|" . $actionType . "|:|" . $sessionOnlogs_ssid . "|:|" . $sessionOnlogs_name . "|:|" . $ipOnligs . "|:|" . $myDateNow . " " . $myTimeNow . "\n");
      fclose($fp);
      chmod($logsfile, 0666);
   } else {
      $fp = @fopen($logsfile, 'a');
      fwrite($fp, $action . "|:|" . session_id() . "|:|front-" . $actionType . "|:|" . $sessionOnlogs_ssid . "|:|" . $sessionOnlogs_name . "|:|" . $ipOnligs . "|:|" . $myDateNow . " " . $myTimeNow . "\n");
      fclose($fp);
   }
   #save log file  end

   $insert[$core_tb_log . "_action"] = "'" . $action . "'";
   $insert[$core_tb_log . "_sessid"] = "'" . session_id() . "'";

   if (!empty($sessionOnlogs_ssid)) {
      $insert[$core_tb_log . "_sid"] = "'" . $sessionOnlogs_ssid . "'";
      $insert[$core_tb_log . "_sname"] = "'" . $sessionOnlogs_name . "'";
   }

   $insert[$core_tb_log . "_ip"] = "'" . $ipOnligs . "'";
   $insert[$core_tb_log . "_time"] = "'" . date("Y-m-d H:i:s") . "'";
   $insert[$core_tb_log . "_type"] = "'front-" . $actionType . "'";
   $insert[$core_tb_log . "_actiontype"] = "'" . $typeUserAction . "'";
   $insert[$core_tb_log . "_url"] = "'" . _FullUrl . "'";

   $sqlLog = "INSERT INTO " . $core_tb_log . "(" . implode(",", array_keys($insert)) . ") VALUES (" . implode(",", array_values($insert)) . ")";
   $logResult = $db->execute($sqlLog);

   if (!empty($logResult)) {
      setcookie("log-" . $actionType . "-" . $action . "-" . $typeUserAction, $setcookie, time() + (60 * $cookie_log), _FullUrl);
   }
}

function multiexplode($delimiters, $string) {

   $ready = str_replace($delimiters, $delimiters[0], $string);
   return explode($delimiters[0], $ready);
}

/* =Function
  -------------------------------------------------------------- */


/* ############################################### */

function loadSendEmailTo($mailTo, $subjectMail = null, $messageMail = null) {
   global $coreLanguageSQL;

   /* ############################################### */
   // new sent email to user
   require_once _DIR . '/front/libs/sendEmailPHP7.php';

   return $valSendMailStatus;
}

function checkLink($varlink = "#") {
   if ($varlink == '#' || $varlink == '') {
      $link = 'javascript:void(0)';
   } else {
      $link = $varlink;
   }
   return $link;
}

function checkTarget($vartarget = 1, $varlink = "#") {
   if ($varlink != '#' && $varlink != '') {
      if ($vartarget == 1) {
         $target = "_self";
      } else {
         $target = "_blank";
      }
   } else {
      $target = "_self";
   }
   return $target;
}

function checkMenuActive($munu, $menuActive) {
   if ($munu == $menuActive) {
      return 'class="active"';
   }
}

function is_txtNumber($number) {
   if ($number < 10) {
      $str = "0" . ($number + 1);
   } else {
      $str = $number + 1;
   }

   return $str;
}

############################################

function sanitize($input) {
   ############################################
   global $coreLanguageSQL;

   if (get_magic_quotes_gpc()) { //check if magic_quotes is on;
      $input = stripslashes($input); //it is, so strip any slashes and prepare for next step;
   }
   //if get_magic_quotes_gpc() is on, slashes were already stripped .. if it's off, mysqli_real_escape_string() will take care of the rest;
   return addslashes($input);
}

function rechangeQuot($Data) {
   ############################################
   $valChangeQuot = sanitize($Data);
   $valChangeQuot = htmlspecialchars(str_replace("&rsquo;", "'", str_replace('&quot;', '"', $valChangeQuot)));
   return $valChangeQuot;
}

//#################################################
function DateFormatInsertcar($DateTime) {
   //#################################################
   global $core_session_language;
   if ($DateTime == "") {
      $DateTime = "00/00/0000";
   }

   $Time = "00:00:00";

   $DateArr = explode("/", $DateTime);

   if ($DateArr[2] >= 1) {
      $dataYear = $DateArr[2];
   } else {
      $dataYear = "0000";
   }

   if ($DateArr[0] >= 1) {
      $dataD = $DateArr[1];
   } else {
      $dataD = "00";
   }

   if ($DateArr[1] >= 1) {
      $dataM = $DateArr[0];
   } else {
      $dataM = "00";
   }

   return $dataYear . "-" . $dataM . "-" . $dataD . " " . $Time;
}

function textHighlight($text, $keyword) {
   $wordsAry = explode(" ", $keyword);
   $wordsCount = count($wordsAry);

   for ($i = 0; $i < $wordsCount; $i++) {
      $highlighted_text = "<span class='color'>$wordsAry[$i]</span>";
      $text = str_ireplace($wordsAry[$i], $highlighted_text, $text);
   }

   return $text;
}

function GetContentID($data, $type = null) {
   switch ($type) {
      case 'encode':
         $data = decodeStr($data);
         break;

      default:
         $data = intval($data);
         break;
   }
   return $data;
}

//#################################################
function DateFormat($DateTime) {
   //#################################################
   global $core_session_language, $url;
   $langFull = strtolower($url->pagelang[4]);

   if ($DateTime == "") {
      $DateTime = "0000";
   }

   $DateArr = explode(" ", $DateTime);
   $DateArr = explode("-", $DateArr[0]);

   if ($DateArr[0] >= 1) {
      if ($langFull == 'thai') {
         $dataYear = $DateArr[0] + 543;
      } else {
         $dataYear = $DateArr[0];
      }
   } else {
      $dataYear = "0000";
   }

   if ($DateArr[2] >= 1) {
      $dataD = $DateArr[2];
   } else {
      $dataD = "00";
   }

   if ($DateArr[1] >= 1) {
      $dataM = $DateArr[1];
   } else {
      $dataM = "00";
   }
   return $dataYear . "-" . $dataM . "-" . $dataD;
}

function url_segment_menu($url) {
   global $linklang, $path_root;
   // $this_uri = explode(_URL , $url);
   $this_uri = explode($linklang."/".$path_root, $url);
   $current_uri = explode("/", $this_uri[1]);
   if (!empty($path_root)) {
      array_splice($current_uri, 0, 1);
   }else{
      array_splice($current_uri, 0, 0);
   }
   
   return $current_uri;
}

function themeWebsite($theme = 'theme-3') {
   $arrFile = array();
   switch ($theme) {
      case 'theme-2':
         $arrFile['header'] = "inc/inc-header-theme-2.tpl";
         $arrFile['footer'] = "inc/inc-footer-theme-2.tpl";
         $arrFile['class'] = "theme-2";
         break;

      case 'theme-1':
         $arrFile['header'] = "inc/inc-header.tpl";
         $arrFile['footer'] = "inc/inc-footer.tpl";
         $arrFile['class'] = "theme-1";
         break;

      default:
         $arrFile['header'] = "inc/inc-header-theme-3.tpl";
         $arrFile['footer'] = "inc/inc-footer-theme-3.tpl";
         $arrFile['class'] = "theme-3";
         break;
   }
   return $arrFile;
}

function rechangeQuot_code($Data) {
############################################
   $valChangeQuot = sanitize($Data);
   $valChangeQuot = htmlspecialchars(str_replace("&rsquo;", "'", str_replace('&quot;', '"', $valChangeQuot)));
   return $valChangeQuot;
}

function strformat($str_array) {

   $num_array = count($str_array);

   $main_string = $str_array[0];

   for ($i = 1; $i <= $num_array; $i++) {
      $main_string = str_replace('{' . $i . '}', (string) $str_array[$i], $main_string);
   }

   return $main_string;
}

############################### Start Mod  Calendar #########################################
############################################

function getDateNow() {
############################################
   $today = getdate();
   $Day = $today['mday'];
   $Month = $today['mon'];
   $Year = $today['year'];
   $DateIs = sprintf("%04d-%02d-%02d", $Year, $Month, $Day);
   return($DateIs);
}

//#################################################
function getEndDayOfMonth($myDate) {
//#################################################
   $myEndOfMonth = array(0, 31, 0, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
   $myDateArray = explode("-", $myDate);
   $myMonth = $myDateArray[1] * 1;
   $myYear = $myDateArray[0] * 1;
   if ($myMonth >= 1 && $myMonth <= 12) {
      if ($myMonth == 2) {
         //check leap year ---
         if (($myYear % 4) == 0) {
            return 29;
         } else {
            return 28;
         }
      } else {
         return $myEndOfMonth[$myMonth];
      }
   } else {
      return 0;
   }
}

function showDateCalendarDay($myDate) {
   $myDateArray = explode(" ", $myDate);
   $myDateArray = explode("-", $myDateArray[0]);
   return $myDateArray[2];
}

############################################

function getMonthLang($valDate, $valLang) {
############################################
   if ($valLang == "en") {
      $valYearReturn = showDateCalendarMonth($valDate);
   } else {
      $valYearReturn = showDateCalendarMonthEn($valDate);
   }
   return $valYearReturn;
}

function showDateCalendarMonth($myDate) {
   $myDateArray = explode("-", $myDate);
   $myDay = sprintf("%d", $myDateArray[2]);
   switch ($myDateArray[1]) {
      case "01" : $myMonth = "ม.ค.";
         break;
      case "02" : $myMonth = "ก.พ.";
         break;
      case "03" : $myMonth = "มี.ค.";
         break;
      case "04" : $myMonth = "เม.ย.";
         break;
      case "05" : $myMonth = "พ.ค.";
         break;
      case "06" : $myMonth = "มิ.ย.";
         break;
      case "07" : $myMonth = "ก.ค.";
         break;
      case "08" : $myMonth = "ส.ค.";
         break;
      case "09" : $myMonth = "ก.ย.";
         break;
      case "10" : $myMonth = "ต.ค.";
         break;
      case "11" : $myMonth = "พ.ย.";
         break;
      case "12" : $myMonth = "ธ.ค.";
         break;
   }
   $myYear = sprintf("%d", $myDateArray[0]) + 543;
   return($myMonth);
}

function showDateCalendarMonthEn($myDate) {
   $myDateArray = explode("-", $myDate);
   $myDay = sprintf("%d", $myDateArray[2]);
   switch ($myDateArray[1]) {
      case "01" : $myMonth = "Jan";
         break;
      case "02" : $myMonth = "Feb";
         break;
      case "03" : $myMonth = "Mar";
         break;
      case "04" : $myMonth = "Apr";
         break;
      case "05" : $myMonth = "May";
         break;
      case "06" : $myMonth = "Jun";
         break;
      case "07" : $myMonth = "Jul";
         break;
      case "08" : $myMonth = "Aug";
         break;
      case "09" : $myMonth = "Sep";
         break;
      case "10" : $myMonth = "Oct";
         break;
      case "11" : $myMonth = "Nov";
         break;
      case "12" : $myMonth = "Dec";
         break;
   }
   $myYear = sprintf("%d", $myDateArray[0]);
   return($myMonth);
}

#################################################

function format($num, $length) {
#################################################

   $formated_num = strval($num);
   while (strlen($formated_num) < $length) {
      $formated_num = "0" . $formated_num;
   }
   return $formated_num;
}

############################################

function getYearLang($valYear, $valLang) {
############################################
   if ($valLang == "en") {
      $valYearReturn = $valYear;
   } else 
   if ($valLang == "cn") {
      $valYearReturn = $valYear;
   }else
   if ($valLang == "th") {
      $valYearReturn = ($valYear + 543);
   }
   return $valYearReturn;
}

#################################################

function concatsmarty($str1, $str2) {
#################################################
   $result = $str1 . $str2;
   return $result;
}

//#################################################
function formatNum($myNumber) {
//#################################################
   $myNumber = intval($myNumber);
   if ($myNumber < 10)
      return ("0" . $myNumber);
   else
      return ($myNumber);
}

# user online ######################################################################

function userOnline($page = FALSE) {
   global $db, $config;
   $timeoutseconds = 380;

   $timestamp = time();

   $timeout = $timestamp - $timeoutseconds;

   $ipOn = getIP();
   $pageOn = _FullUrl;
   $valKeyAccount = '';

   $insertUser = "INSERT INTO " . $config['sys']['db']['online'] . " VALUES ('$timestamp','$ipOn','$pageOn','$valKeyAccount')";
   $insertUserResult = $db->execute($insertUser);

   $delUserTimeout = "DELETE FROM " . $config['sys']['db']['online'] . " WHERE " . $config['sys']['db']['online'] . "_time<$timeout";
   $delUserResult = $db->execute($delUserTimeout);

   $showUserOnline = "Select
  Count(Distinct " . $config['sys']['db']['online'] . "." . $config['sys']['db']['online'] . "_ip) As  useronline
  From " . $config['sys']['db']['online'] . "";

   $showUserOnline .= " WHERE  " . $config['sys']['db']['online'] . "_ip !=0 ";

   if (!empty($page)) {
      $showUserOnline .= " AND  " . $config['sys']['db']['online'] . "_file = '" . _FullUrl . "' ";
   }

   if ($valKeyAccount != "") {
      $showUserOnline .= " AND  " . $config['sys']['db']['online'] . "_key = '" . $valKeyAccount . "' ";
   }

//print_pre($showUserOnline);
   $onlineUserResult = $db->execute($showUserOnline);
   if (!empty($onlineUserResult->fields['useronline'])) {
      return $onlineUserResult->fields['useronline'];
   } else {
      return 1;
      // return 0;
   }
}
