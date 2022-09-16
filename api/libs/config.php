<?php

session_cache_expire(1280);
$cache_expire = session_cache_expire();
@session_start();

date_default_timezone_set('Asia/Bangkok');
ini_set('memory_limit', '128M');

ini_set('display_startup_errors', -1);
ini_set('display_errors', -1);
error_reporting(-1);

if (!empty($_REQUEST['mode'])) {
    $modefunction = $_REQUEST['mode'];
} else {
    $modefunction = null;
}

switch ($modefunction) {
    case 'debug':
        echo "<pre>";
        echo "<i>## DEBUG MODE ##</i>";
        break;

    case 'delsession':
        echo "<i>## TOKEN DEL MODE ##</i>";
        $_SESSION["token"] = "";
        unset($_SESSION["token"]);
        exit();
        break;

    case 'delcookie':
        echo "<i>## TOKEN DEL MODE ##</i>";
        $_COOKIE["token"] = "";
        unset($_COOKIE["token"]);

        setcookie("token", null, time() - 3600, "/");
        setcookie("token", null, time() - 3600);

        exit();
        break;


    default:
        error_reporting(0);
        break;
}

## Database Connect #################################################
// CORE_ENV จะไป config ต่อที่ setting.php
$coreLanguageSQL = "mysqli"; // php version 7
$GET_ENV = file_get_contents(str_replace("\\", '/', dirname(__FILE__)).'/webservice_json/env.json');
$_ENV = json_decode($GET_ENV, true); // json decode from web service
$CORE_ENV = 'DEV';

$core_db_charecter_set = array(
    'charset' => "utf8",
    'collation' => "utf8_general_ci"
);

## limit ##
$limitpage['showperPage'] = 8;
$limitpage['showperPageSeller'] = 11;

## config token ##
$token_timeout = 240; // หน่วยเป็นนาที
$token_cookie_timeout = "8"; // หน่วยเป็นชม
$token_action = "10"; // การเข้าที่หน้าสงสัยจำนวนครั้ง จะบล๊อคไม่ให้เข้าสู่ระบบตามจำนวน $token_cookie_timeout
## lang ## ex. "xx" => array("dbinclude","fullname","shortname")
$lang_set = array(
    "th" => array("", "Thai", "th", "", "Thai", "thai"),
    "en" => array("", "English", "en", "en", "Eng", "eng"),
    "cn" => array("", "China", "en", "cn", "Chi", "chi")
);
$lang_default = "th";

## url ##
$url_show_lang = true;
$url_show_default = "api";

## config path upload ##
$path_upload = _DIR_FRONTEND . '/upload';
$path_upload_url = _URL_FRONTEND . '/upload';

## config path system ##
$path_template = array(
    "default" => array('front/template/default', 'style.css')
);

## template Set ##
$templateweb = "default";

## file ##
$validextensions = array("jpeg", "jpg", "png");
$validsizefile = 1024; // kb
## date month ##
$strMonthCut['shot']['th'] = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
$strMonthCut['shot']['en'] = array("", 'Jan.', 'Feb.', 'Mar.', 'Apr.', 'May', 'Jun.', 'Jul.', 'Aug.', 'Sep.', 'Oct.', 'Nov.', 'Dec.');
$strMonthCut['shot2']['en'] = array("", 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
$strMonthCut['shot3']['th'] = array("", '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
$strMonthCut['shot3']['en'] = array("", '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');

$strMonthCut['full']['th'] = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
$strMonthCut['full']['en'] = array('', 'January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December',);

$weekDay['th'] = array('อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส');
$weekDay['en'] = array('Su', 'M', 'T', 'W', 'Th', 'F', 'Sa');

$colorpatten = array("#e6e6e6", "#f46b23", "#ffb400", "#e7352b", "#8d42a1", "#3853d8", "#20a5ea", "#5cb328", "#7c5e4c", "#484848", "#01d2f9", "#7f8c8d");


## Core Config JWT #############################################
$keyProject = "git";
$keyCode = "200";
$keyType = "api";
$key = $keyProject."_".$keyType."_".$keyCode;
$keyencrypt = $keyProject."_ect_".$keyType."_".$keyCode;
$ivencrypt = $keyProject."_iv_".$keyType."_".$keyCode;

## Core Config Status Code #############################################
$coreStatusCode = array();
$coreStatusCode['1000']['code'] = "1000";
$coreStatusCode['1000']['msg'] = "User Not found.";

$coreStatusCode['1001']['code'] = "1001";
$coreStatusCode['1001']['msg'] = "Success.";

$coreStatusCode['1002']['code'] = "1002";
$coreStatusCode['1002']['msg'] = "Tokenid expire.";

$coreStatusCode['1003']['code'] = "1003";
$coreStatusCode['1003']['msg'] = "Missing parameter.";

$coreStatusCode['1007']['code'] = "1007";
$coreStatusCode['1007']['msg'] = "Tokenid is not available.";

$coreStatusCode['1010']['code'] = "1010";
$coreStatusCode['1010']['msg'] = "Unable to request a new OTP.";

$coreStatusCode['1011']['code'] = "1011";
$coreStatusCode['1011']['msg'] = "Identification number is invalid.";

$coreStatusCode['1012']['code'] = "1012";
$coreStatusCode['1012']['msg'] = "OTP timed out, please request a new OTP.";

$coreStatusCode['1013']['code'] = "1013";
$coreStatusCode['1013']['msg'] = "OTP is not available.";

$coreStatusCode['400']['code'] = "400";
$coreStatusCode['400']['msg'] = "Data Not found.";