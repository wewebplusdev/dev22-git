<?php
    $ContentID = GetContentID($url->segment[2]);
    $callPhoto = $embedPage->callCMSInfo($ContentID);
    $callCMSAlbum = $embedPage->callCMSAlbum($ContentID);
    if ($callPhoto->_numOfRows < 1) {
        header('location:'.$linklang.'/404');
        exit(0);
    }
    $smarty->assign("callCMS", $callPhoto);
    $MenuID = $callPhoto->fields['masterkey'];
    foreach ($callCMSAlbum as $key => $image) {
        if (!empty($image['filename'])) {
            $fullpath_pic = fileinclude($image['filename'], 'album', $MenuID, 'link');
            $albumCMSImageURL[] = $fullpath_pic;
        }
    }
    $smarty->assign("albumCMSImageURL", $albumCMSImageURL);
    $settingPage = array(
        "page" => $menuActive,
        "template" => "photo.tpl",
        "display" => "page-single"
    );
?>