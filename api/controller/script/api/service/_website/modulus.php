<?php
class _website {
    function SettingWeb(){
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $sql = "SELECT
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_id as id,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_masterkey as masterkey,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_subject".$lang." as subject,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_subjectoffice".$lang." as subjectoffice,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_description".$lang." as description,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_keywords".$lang." as keywords,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_metatitle".$lang." as metatitle,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_social as social,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_config as config,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_addresspic  as addresspic,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_qr as qr
      
        FROM
        " . $config['setting']['db'] . "
        WHERE
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_masterkey = '" . $config['setting']['masterkey'] . "' 
        ";

        $result = $db->execute($sql);
        return $result;
    }
}