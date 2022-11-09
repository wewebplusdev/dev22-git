<?php
$menuActive = "api";
$menuDetail = "detail";
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

$apiPage = new apiPage;

$productID = intval($_REQUEST['inputProductID']);
$productAmount = intval($_REQUEST['inputCountCart']);
$productLineID = $_REQUEST['inputLineID'];
// print_pre($accountID);

switch ($url->segment[1]) {
    case 'update-chat-facebook':
        header('Content-Type: application/json; charset=utf-8');
        require_once _DIR . '/front/controller/script/'.$menuActive.'/service/update-chat-facebook.php';
        break;

    default:
        header('Content-Type: application/json; charset=utf-8');
        http_response_code(403);
        $dataJson = array(
            'status' => 403,
            'msg' => 'Not Found API.',
        );
            
        echo json_encode($dataJson);
        exit();
        break;
}
