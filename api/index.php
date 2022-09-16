<?php
// $path_root = ""; #ถ้า root อยู่ public
$path_root = "/api"; #ถ้า root ไม่ได้อยู่ public
$path_root_url = ""; #ถ้า root ไม่ได้อยู่ public

define("_http", "https");
header('Access-Control-Allow-Origin: *');

if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $protocol = 'https://';
}
else {
    $redirect= _http."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    header("Location:$redirect");
    exit();
}

define("_DIR", str_replace("\\", '/', dirname(__FILE__)));
define("_URI", basename($_SERVER["REQUEST_URI"]));
define("_URL", _http . "://" . $_SERVER['HTTP_HOST'] . $path_root . "/");
define("_FullUrl", _http . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
define("_Domain", _http . "://" . $_SERVER['HTTP_HOST']);
define("_URLPagination", _http . "://" . $_SERVER['HTTP_HOST'] . $path_root . "");
define("_DIR_FRONTEND", str_replace("/api", "", str_replace("\\", '/', dirname(__FILE__))));
define("_URL_FRONTEND", _http . "://" . $_SERVER['HTTP_HOST'] . $path_root_url . "/");

require_once _DIR . '/libs/config.php'; #load config
require_once _DIR . '/libs/setting.php'; #load setting
require_once _DIR . '/libs/function.php'; #load function
require_once _DIR . '/libs/jwt_function.php'; #load Libary
require_once _DIR . '/libs/url.php'; #load url

## call page ##
$url = new url;
$linklang = configlang($url->pagelang[2]);
$page = pagepagination($url);

## addon page ##
$loadcate = $url->loadmodulus(array("_mainpage"));
foreach ($loadcate as $loadmodulus) {
    include_once $loadmodulus;
}
##  lang ##
$lang = array();
require_once _DIR . '/libs/lang/' . $lang_default . '.php'; #load url
if ($lang_default != $url->pagelang[2]) {
    require_once _DIR . '/libs/lang/' . $url->pagelang[2] . '.php'; #load url
}
## load page ##
$pageload = $url->page();
foreach ($pageload['load'] as $loadpage) {
    include_once $loadpage;
}

$db->Close();