<?php

## load modulus ##
// require_once _DIR . '/front/libs/adodb5/adodb.inc.php';
// require_once _DIR . '/front/libs/smarty3130/Smarty.class.php';
// require_once _DIR . '/front/libs/smarty3130/SmartyBC.class.php';

require_once _DIR . '/front/libs/adodb5/adodb.inc.php';
require_once _DIR . '/front/libs/smarty400/Smarty.class.php';
require_once _DIR . '/front/libs/smarty400/SmartyBC.class.php';

## adodb start ##
$db = NewADOConnection($coreLanguageSQL);
$db->Connect(decodeEnv($_ENV[$CORE_ENV]['hostname']), decodeEnv($_ENV[$CORE_ENV]['user']), decodeEnv($_ENV[$CORE_ENV]['pw']), decodeEnv($_ENV[$CORE_ENV]['dbname'])) or die("Warning !! N0 Connect DataBase");

$db->charSet = "SET NAMES " . $core_db_charecter_set['charset'];
$db->Execute("SET character_set_results=" . $core_db_charecter_set['charset']);
$db->Execute("SET collation_connection=" . $core_db_charecter_set['collation']);
$db->Execute("SET NAMES '" . $core_db_charecter_set['charset'] . "'");


$db->cacheSecs = 3600 * 12;

## smarty start ##
$smarty = new Smarty;
$smarty = new SmartyBC();
$smarty->loadPlugin('smarty_compiler_switch');
$smarty->debugging = FALSE;
$smarty->caching = FALSE;
$smarty->setTemplateDir($path_template[$templateweb])->setCompileDir($path_compile)->setCacheDir($path_cache);

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
