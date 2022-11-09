<?php
    $embed_url = trim($_REQUEST['embed_url']);
    $smarty->assign("embed_url", $embed_url);
    $settingPage = array(
        "page" => $menuActive,
        "template" => "embed-code.tpl",
        "display" => "page-single"
    );
?>