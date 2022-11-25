<?php
$menuActive = "rss";
$menuDetail = "detail";
// include script for page
$listjs[] = '<script type="text/javascript" src="'._URL.'front/controller/script/'.$menuActive.'/js/script.js'.$lastModify.'"></script>';

// class loaded
$rssPage = new rssPage;

$explo1 = explode(".xml",$url->segment[1]);
$explo2 = explode("GIT",$explo1[0]);
$masterkey = $explo2[0]; //masterkey
$group = $explo2[1]; //group
switch ($explo2[0]) {
    case 'ab_nm':
        $MenuID = $callSetWebsite->getMenuDetail(null, $masterkey);
        $callNews = $rssPage->rssNews($masterkey, $group);
        // $callNameGroup = $rssPage->callDataTableNoneDate($config['cmg']['db']['main'], $masterkey,$group);
        // print_pre($callNameGroup);die;
        $linkRSSDetail = _URL.''. $url->pagelang[2] ."/about/" . $MenuID->fields['id'] . "/" . $callNews->fields['gid'] . "/detail";
        $TitleRSS = $callNameGroup->fields[2] != "" ? $callNameGroup->fields[2] : $lang['menu']['news'];
        $urlRss = _URL.''. $url->pagelang[2] .'/about/'. $MenuID->fields['id'];
        if ($callNews->_numOfRows > 0) {
            require_once _DIR . '/front/controller/script/'.$menuActive.'/service/create-rss.php';
        }else{
            header('Content-Type: application/json; charset=utf-8');
            http_response_code(403);
            $arrData = array(
                'status' => 403,
                'msg' => 'Not Found RSS feed',
            );
            echo json_encode($arrData);
            exit();
        }
        break;

    default:
        header('Content-Type: application/json; charset=utf-8');
        http_response_code(403);
        $arrData = array(
            'status' => 403,
            'msg' => 'Not Found RSS feed',
        );
        echo json_encode($arrData);
        exit();
        break;
}
