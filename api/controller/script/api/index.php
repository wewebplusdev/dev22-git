<?php
/*
 * API PHP VERSION 1 Coppy right 2022.
 */

//######### Start Authorization Header ########
$token=getBearerToken();//รับ token จาก client
$tokenAlready= getTokenAlready($token);
//######### End Authorization Header ########

// header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
$apiPage = new apiPage;
$getPageControlHeader = getPageControlHeader();
$get_client_ip = get_client_ip();

switch ($getPageControlHeader) {
    case 'getuser':
        header('Content-Type: application/json; charset=utf-8');
        $Authorization = $_REQUEST['Authorization'];
        $getToken = decode_jwt($Authorization);
        logs_usage('Logs Getuser API', $get_client_ip);
        echo json_encode($getToken);
        break;

    case 'authorization':
        header('Content-Type: application/json; charset=utf-8');
        if (in_array($get_client_ip, $arrSite)) {
            $getToken = encode_jwt($get_client_ip);
            logs_usage('Logs Authorization API', $get_client_ip);
            echo json_encode($getToken);
        }else{
            $valStatusCode = "1000";
            $valStatusError = "Site Not Allowed";
            $resReturn =  array(
                "status" => 	$valStatusCode,
                "msg" => 	$valStatusError
            );
            echo json_encode($resReturn);
        }
        break;

    case 'settingWebsite':
        authorization_session();
        logs_usage('Logs settingWebsite API', $get_client_ip);
        require_once _DIR . '/controller/script/'.$menuActive.'/service/_website/index.php';
        break;

    case 'home':
        authorization_session();
        logs_usage('Logs Home API', $get_client_ip);
        require_once _DIR . '/controller/script/'.$menuActive.'/service/home/index.php';
        break;
        
    default:
        http_response_code(403);
        $arrJson = array(
            'status' => 403,
            'msg' => 'API Unavailable, Action Not Allowed',
        );
        echo json_encode($arrJson);
        break;
}