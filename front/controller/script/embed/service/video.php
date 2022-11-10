<?php
    $ContentID = GetContentID($url->segment[2]);
    $callVideo = $embedPage->callCMSInfo($ContentID);
    if ($callVideo->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callVideo", $callVideo);
        $fullpath_vdo = "";
        if (!empty($callVideo->fields['filevdo'])) {
            $MenuID = $callVideo->fields['masterkey'];
            $fullpath_vdo = fileinclude($callVideo->fields['filevdo'], 'vdo', $MenuID, 'link');
        }
        $smarty->assign("fullpath_vdo", $fullpath_vdo);
    $settingPage = array(
        "page" => $menuActive,
        "template" => "video.tpl",
        "display" => "page-single"
    );
?>