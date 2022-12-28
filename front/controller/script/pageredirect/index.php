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

    case 'url':
        $action = decodeStr($url->segment[2]);
        $ContantID = base64_decode($url->segment[3]);
        switch ($action) {
            case 'sg':
                $getSubGroupMenu = $callSetWebsite->getSubGroupMenu($config['setting']['mnu']['masterkey'], 0, $ContantID);
                if ($getSubGroupMenu->_numOfRows > 0) {
                    /*## Start Update View #####*/
                    if (!isset($_COOKIE['VIEW_URL' . $getSubGroupMenu->fields['masterkey'] . '_' . urldecode($getSubGroupMenu->fields['id'])])) {
                        setcookie("VIEW_URL" . $getSubGroupMenu->fields['masterkey'] . '_' . urldecode($getSubGroupMenu->fields['id']), true, time() + 600);
                        $viewContent = $callSetWebsite->updateView($getSubGroupMenu->fields['id'], $getSubGroupMenu->fields['masterkey'], $config['mnsg']['db']['main']);
                    }
                    /*## End Update View #####*/
                    http_response_code(301);
                    header('location:' . path_url($getSubGroupMenu->fields['url'], $switch));
                }else{
                    http_response_code(301);
                    header('location:' . $linklang . "/home");
                }
                break;

            case 'c':
                $getMenu = $callSetWebsite->getMenu($config['setting']['mnu']['masterkey'], 0, $ContantID);
                if ($getMenu->_numOfRows > 0) {
                    /*## Start Update View #####*/
                    if (!isset($_COOKIE['VIEW_URL' . $getMenu->fields['masterkey'] . '_' . urldecode($getMenu->fields['id'])])) {
                        setcookie("VIEW_URL" . $getMenu->fields['masterkey'] . '_' . urldecode($getMenu->fields['id']), true, time() + 600);
                        $viewContent = $callSetWebsite->updateView($getMenu->fields['id'], $getMenu->fields['masterkey'], $config['mn']['db']['main']);
                    }
                    /*## End Update View #####*/
                    http_response_code(301);
                    header('location:' . path_url($getMenu->fields['url'], $switch));
                }else{
                    http_response_code(301);
                    header('location:' . $linklang . "/home");
                }
                break;
            
            default:
                $getGroupMenu = $callSetWebsite->getGroupMenu($config['setting']['mnu']['masterkey'], $ContantID);
                if ($getGroupMenu->_numOfRows > 0) {
                    /*## Start Update View #####*/
                    if (!isset($_COOKIE['VIEW_URL' . $getGroupMenu->fields['masterkey'] . '_' . urldecode($getGroupMenu->fields['id'])])) {
                        setcookie("VIEW_URL" . $getGroupMenu->fields['masterkey'] . '_' . urldecode($getGroupMenu->fields['id']), true, time() + 600);
                        $viewContent = $callSetWebsite->updateView($getGroupMenu->fields['id'], $getGroupMenu->fields['masterkey'], $config['mng']['db']['main']);
                    }
                    /*## End Update View #####*/
                    http_response_code(301);
                    header('location:' . path_url($getGroupMenu->fields['url'], $switch));
                }else{
                    http_response_code(301);
                    header('location:' . $linklang . "/home");
                }
                break;
        }
        break;
    
    default:
        http_response_code(301);
        header('location:' . $linklang . "/home");
        break;
}
