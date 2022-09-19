<?php
include 'adodb5/adodb.inc.php';
$dbConnect = NewADOConnection($coreLanguageSQL);

wewebConnect($coreLanguageSQL, decodeEnv($_ENV[$CORE_ENV]['hostname']), decodeEnv($_ENV[$CORE_ENV]['user']), decodeEnv($_ENV[$CORE_ENV]['pw']), decodeEnv($_ENV[$CORE_ENV]['dbname'])) or die("Warning !! N0 Connect DataBase");
/* ADODB CONNECT */

############################################
function getNameSeo($valTable, $valField) {
############################################
    global $coreLanguageSQL;
    global $dbConnect;
    $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
    $sql_pic = "SELECT " . $valField . "  FROM " . $valTable . " WHERE  1=1";
    $row_pic = $dbConnect->execute($sql_pic);
    $txt_pic_funtion = $row_pic->fields[$valField];
    return $txt_pic_funtion;
}


## Core Title  ######################################################

$fornt_name_keywords =getNameSeo($core_tb_setting,$core_tb_setting."_titleB");
$fornt_name_description =getNameSeo($core_tb_setting,$core_tb_setting."_titleB");
$core_name_title =getNameSeo($core_tb_setting,$core_tb_setting."_titleB");
$valNameSystem = getNameSeo($core_tb_setting,$core_tb_setting."_subject");
$valTitleSystem = getNameSeo($core_tb_setting,$core_tb_setting."_title");
$valPicSystem = getNameSeo($core_tb_setting,$core_tb_setting."_pic");
$valPicHeaderSystem = getNameSeo($core_tb_setting,$core_tb_setting."_header");
$valPicBgSystem = getNameSeo($core_tb_setting,$core_tb_setting."_bg");

// function
function decodeEnv($enVariable)
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
?>
