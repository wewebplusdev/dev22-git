<?php

function logs_usage($actionType, $clientip){

    $core_pathname_logs = _DIR . "/logs";

    $CurrentPath = $core_pathname_logs . "";
    if (!is_dir($CurrentPath)) {
        mkdir($CurrentPath, 0777);
    }
    $myDateNow = date("Y-m-d");
    $myTimeNow = date("H:i:s");

    $logsfile = $CurrentPath . "/" . $myDateNow . "_" . $clientip . ".logs";

    if (!is_file($logsfile)) {
        $fp = @fopen($logsfile, 'w+');
        fwrite($fp, $actionType. "|:|" . $clientip . "|:|" . $myDateNow . " " . $myTimeNow . "\n");
        fclose($fp);
        chmod($logsfile, 0666);
    } else {
        $fp = @fopen($logsfile, 'a');
        fwrite($fp, $actionType. "|:|" . $clientip . "|:|" . $myDateNow . " " . $myTimeNow . "\n");
        fclose($fp);
    }
}

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

## print pre ##

function print_pre($expression, $return = false, $wrap = false)
{
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
    if ($return) {
        if (is_string($return) && $fh = fopen($return, 'a')) {
            fwrite($fh, $str);
            fclose($fh);
        }
        return $str;
    } else
        echo $str;
}

## clean array ##

function cleanArray($arr)
{
    $size = sizeof($arr);
    for ($i = 0; $i < $size; $i++) {
        $thum = trim($arr[$i]);
        if ($thum != "") {
            $r[] = $thum;
        }
    }
    return $r;
}

## encodeStr ##

function encodeStr($variable)
{

    ############################################
    $key = "xitgmLwmp";
    $index = 0;
    $temp = "";
    $variable = str_replace("=", "?O", $variable);
    for ($i = 0; $i < strlen($variable); $i++) {
        $temp .= $variable[$i] . $key[$index];
        $index++;
        if ($index >= strlen($key))
            $index = 0;
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

function decodeStr($enVariable)
{
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

## link lang ##

function configlang($lang)
{
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


## page pagination ##

function pagepagination($uri, $limit = null)
{
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

    // print_pre($pageOn);
    return $pageOn;
}

function decodeURL($enVariable) {
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
//-- ฟังก์ชั่นการถอดรหัส ตัวแปรแบบ GET ผ่าน URL
// การใช้งาน decodeURL($_SERVER["QUERY_STRING"]);
    $key = "xitgmLwmp";

    $ex = explode("WP=", $enVariable);
    $enVariable = $ex[1];
    $enVariable = str_replace("o7o", "%", $enVariable);

    $enVariable = str_rot13($enVariable);
    $enVariable = urldecode($enVariable);
    $enVariable = utf8_decode($enVariable);
    $enVariable = base64_decode($enVariable);
    $enVariable = strrev($enVariable);

    $current = 0;
    $temp = "";
    for ($i = 0; $i < strlen($enVariable); $i++) {
        if ($current % 2 == 0) {
            $temp .= $enVariable{$i};
        }
        $current++;
    }
    $temp = str_replace("๐O", "=", $temp);
    
    parse_str($temp, $variable);
    //echo "temp=".$temp;

    foreach ($variable as $key => $value) {
        $_REQUEST[$key] = $value;
        global $$key;
        $$key = $value;
    }
}


function fileinclude($filename, $fileType = 'html', $mod_tb_about_masterkey, $for = 'check', $crop = false, $cropthumb = false)
{
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

##############################################
function DateThai($strDate, $function = null, $lang = "th", $type = "shot")
{

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

####################################################

function txtReplaceAPIService($data)
{
    ####################################################
    $data = str_replace("/ckeditor/upload/", _URL_FRONTEND . "ckeditor/upload/", $data);
    $data = str_replace("/fckupload/upload/", _URL_FRONTEND . "fckupload/upload/", $data);
    $data = str_replace("/dmcr/fckupload/upload/", _URL_FRONTEND . "dmcr/fckupload/upload/", $data);
    $dataHTML = str_replace("\\", "", $data);
    return $dataHTML;
}


####################################################

function get_IconSize($LinkRelativePath)
{
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

function get_Icon($DownloadFile, $type = "")
{
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
