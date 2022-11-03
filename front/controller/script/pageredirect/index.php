<?php
$menuActive = "pageredirect";
$pageredirectPage = new pageredirectPage;
$segment = $url->segment[1];
$ContantID = decodeStr($url->segment[2]);

switch ($segment) {
    case 'popup':
        $callBanner = $pageredirectPage->callTopGraphic($config['ban']['main']['masterkey'], $ContantID);
        if ($callBanner->_numOfRows > 0) {
            /*## Start Update View #####*/
            if (!isset($_COOKIE['VIEW_POPUP' . $callBanner->fields['masterkey'] . '_' . urldecode($callBanner->fields['id'])])) {
                setcookie("VIEW_POPUP" . $callBanner->fields['masterkey'] . '_' . urldecode($callBanner->fields['id']), true, time() + 600);
                $viewContent = $callSetWebsite->updateView($callBanner->fields['id'], $callBanner->fields['masterkey'], $config['tgp']['db']['main']);
            }
            /*## End Update View #####*/
            http_response_code(301);
            header('location:' . $callBanner->fields['url']);
        }else{
            http_response_code(301);
            header('location:' . $linklang . "/home");
        }
        break;
    
    default:
        http_response_code(301);
        header('location:' . $linklang . "/home");
        break;
}
