<?php
$callSetWebsite = new settingWebsite();
$smarty->assign("callSetWebsite", $callSetWebsite);
$infoSetting = $callSetWebsite->callSetting();

/* Start Google Recaptcha */
$sitekey = '6Lfdr9ofAAAAAJ58ujhLf_Uh41snFL1Alx7QfEEC';
$smarty->assign("sitekey", $sitekey);
$secretkey = '6Lfdr9ofAAAAAFighzBCgBIcb04AKKKisRJ8YoWG';
$smarty->assign("secretkey", $secretkey);
/* End Google Recaptcha */

Seo();
function Seo($title = '', $desc = '', $keyword = '', $pic = '')
{
    global $smarty, $infoSetting, $lang;
    $list = array();
    if (!empty($title)) {
        if (!empty($infoSetting->fields['metatitle'])) {
            $list_last = $infoSetting->fields['metatitle'];
        } elseif (!empty($infoSetting->fields['subject'])) {
            $list_last = $infoSetting->fields['subject'];
        } else {
            $list_last = $lang['seo']['title'];
        }

        $list['title'] = trim($title) . " - " . $list_last;
    } else {
        if (!empty($infoSetting->fields['metatitle'])) {
            $list['title'] = $infoSetting->fields['metatitle'];
        } elseif (!empty($infoSetting->fields['subject'])) {
            $list['title'] = $infoSetting->fields['subject'];
        } else {
            $list['title'] = $lang['seo']['title'];
        }
    }

    if (!empty($desc)) {
        $list['desc'] = trim($desc);
    } else {
        $list['desc'] = $infoSetting->fields['description'];
    }

    if (!empty($keyword)) {
        $list['keyword'] = trim($keyword);
    } else {
        $list['keyword'] = $infoSetting->fields['keywords'];
    }

    $list['pic'] = $pic;

    $smarty->assign("seo", $list);
}

#### SETTING


$settingWeb = array();
$settingWeb['masterkey'] = $infoSetting->fields['masterkey'];
$settingWeb['subject'] = $infoSetting->fields['subject'];
$settingWeb['subjectoffice'] = $infoSetting->fields['subjectoffice'];
$settingWeb['description'] = $infoSetting->fields['description'];
$settingWeb['keywords'] = $infoSetting->fields['keywords'];
$settingWeb['metatitle'] = $infoSetting->fields['metatitle'];
$settingWeb['contact'] = unserialize($infoSetting->fields['config']);
$settingWeb['social'] = unserialize($infoSetting->fields['social']);
$settingWeb['addresspic'] = $infoSetting->fields['addresspic'];
$settingWeb['qr'] = $infoSetting->fields['qr'];
// print_pre($settingWeb);
$smarty->assign("settingWeb", $settingWeb);

#### SETTING ABOUT
class settingWebsite
{
    function callSetting()
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $sql = "SELECT
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_id as id,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_masterkey as masterkey,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_subject as subject,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_subjectoffice as subjectoffice,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_description as description,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_keywords as keywords,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_metatitle as metatitle,
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

    function callSettingMn($key)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $sql = "SELECT
        " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_id as id,
        " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_masterkey as masterkey,
        " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_namethai as subject

        FROM
        " . $config['mnu']['db'] . "
        WHERE
        " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_status != 'Disable'
        AND " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_masterkey LIKE '" . $key . "%'
        ";

        $result = $db->execute($sql);
        return $result;
    }

    function callGroupProduct($status = 'Home', $type = null)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $sql = "SELECT
        " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id as id,
        " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_masterkey as masterkey,
        " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_subject" . $lang . " as subject,
        " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_description" . $lang . " as description,
        " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_keywords" . $lang . " as keywords,
        " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_metatitle" . $lang . " as metatitle,
        " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_type as type

        FROM
        " . $config['cmg']['db']['main'] . "
        WHERE
        " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_masterkey = '" . $config['cms']['product']['masterkey'] . "' 
        AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_status = '" . $status . "' 
        AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_subject" . $lang . " != '' 
        ";

        if (!empty($type)) {
            $sql .= " AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_type = '" . $type . "'";
        }

        $sql .= " ORDER  BY " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_order DESC ";

        $result = $db->execute($sql);
        return $result;
    }

    function updateView($id, $masterkey, $table)
    {
        global $config, $db, $url;

        $sql = "SELECT
        " . $table . "." . $table . "_view
        FROM
        " . $table . "
        WHERE
        " . $table . "." . $table . "_masterkey = '$masterkey' 
        AND
        " . $table . "." . $table . "_id = '$id' 
        ";
        // print_pre($sql);
        $result = $db->execute($sql);
        $view = $result->fields[0] + 1;

        $listView[$table . '_view'] = $view;
        $updateView = sqlupdate($listView, $table, $table . "_id", "'" . $id . "'");

        return $updateView;
    }

    function Call_Album($id, $table)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $langFull = $url->pagelang[4];

        $sql = "SELECT 
            " . $table . "." . $table . "_id                AS id,
            " . $table . "." . $table . "_contantid         AS contantid,
            " . $table . "." . $table . "_filename          AS filename,
            " . $table . "." . $table . "_name              AS name,
            " . $table . "." . $table . "_download          AS download
    FROM " . $table . "  
    WHERE 1=1 AND
    " . $table . "." . $table . "_contantid = '" . $id . "'
    AND " . $table . "." . $table . "_language = '" . $langFull . "'
    ";

        $sql .= " ORDER BY " . $table . "." . $table . "_id ASC ";
        // print_pre($sql);
        $result = $db->execute($sql);
        return $result;
    }


    function Call_File($id, $keyfile = null)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $langFull = $url->pagelang[4];

        $sql = "SELECT 
            " . $config['cmf']['db']['main'] . "." . $config['cmf']['db']['main'] . "_id                AS id,
            " . $config['cmf']['db']['main'] . "." . $config['cmf']['db']['main'] . "_contantid         AS contantid,
            " . $config['cmf']['db']['main'] . "." . $config['cmf']['db']['main'] . "_filename          AS filename,
            " . $config['cmf']['db']['main'] . "." . $config['cmf']['db']['main'] . "_name              AS name,
            " . $config['cmf']['db']['main'] . "." . $config['cmf']['db']['main'] . "_download          AS download,
            " . $config['cmf']['db']['main'] . "." . $config['cmf']['db']['main'] . "_credate          AS credate
    FROM " . $config['cmf']['db']['main'] . "  
    WHERE 1=1 
    AND " . $config['cmf']['db']['main'] . "." . $config['cmf']['db']['main'] . "_contantid = '" . $id . "'
    AND " . $config['cmf']['db']['main'] . "." . $config['cmf']['db']['main'] . "_language = '" . $langFull . "'
    ";

        if (!empty($keyfile)) {
            $sql .= "
        AND " . $config['product']['category'] . "." . $config['product']['category'] . "_id = $id
        ";
        }

        $sql .= " ORDER BY " . $config['cmf']['db']['main'] . "." . $config['cmf']['db']['main'] . "_id ASC ";
        // print_pre($sql);
        $result = $db->execute($sql);
        return $result;
    }

    function Call_File2($id, $keyfile = null)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $langFull = $url->pagelang[4];

        $sql = "SELECT 
            " . $config['cmsf']['db'] . "." . $config['cmsf']['db'] . "_id                AS id,
            " . $config['cmsf']['db'] . "." . $config['cmsf']['db'] . "_contantid         AS contantid,
            " . $config['cmsf']['db'] . "." . $config['cmsf']['db'] . "_filename          AS filename,
            " . $config['cmsf']['db'] . "." . $config['cmsf']['db'] . "_name              AS name,
            " . $config['cmsf']['db'] . "." . $config['cmsf']['db'] . "_download          AS download,
            " . $config['cmsf']['db'] . "." . $config['cmsf']['db'] . "_credate          AS credate
    FROM " . $config['cmsf']['db'] . "  
    WHERE 1=1 
    AND " . $config['cmsf']['db'] . "." . $config['cmsf']['db'] . "_contantid = '" . $id . "'
    AND " . $config['cmsf']['db'] . "." . $config['cmsf']['db'] . "_language = '" . $langFull . "'
    ";

        if (!empty($keyfile)) {
            $sql .= "
        AND " . $config['product']['category'] . "." . $config['product']['category'] . "_id = $id
        ";
        }

        $sql .= " ORDER BY " . $config['cmsf']['db'] . "." . $config['cmsf']['db'] . "_id ASC ";
        // print_pre($sql);
        $result = $db->execute($sql);
        return $result;
    }

    function Call_File_table($id, $table = null)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $langFull = $url->pagelang[4];

        $sql = "SELECT 
            " . $table . "." . $table . "_id                AS id,
            " . $table . "." . $table . "_contantid         AS contantid,
            " . $table . "." . $table . "_filename          AS filename,
            " . $table . "." . $table . "_name              AS name,
            " . $table . "." . $table . "_download          AS download,
            " . $table . "." . $table . "_credate          AS credate
    FROM " . $table . "  
    WHERE 1=1 
    AND " . $table . "." . $table . "_contantid = '" . $id . "'
    AND " . $table . "." . $table . "_language = '" . $langFull . "'
    ";

        $sql .= " ORDER BY " . $table . "." . $table . "_id ASC ";
        // print_pre($sql);
        $result = $db->execute($sql);
        return $result;
    }

    function getMenuID($id = null)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $langFull = $url->pagelang[4];

        $sql = "SELECT 
        " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id                AS id,
        " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey         AS masterkey
        FROM " . $config['sy_mnu']['db']['main'] . "  
        WHERE 1=1 
        AND " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_status != 'Disable'
        AND " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id = '".$id."' 
        ";

        $sql .= " ORDER BY " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id ASC ";
        $result = $db->execute($sql);
        return $result->fields['masterkey'];
    }

    function getMenuDetail($id = null, $masterkey = null, $notlike = null)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $langFull = strtolower($url->pagelang[4]);

        $sql = "SELECT 
        " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id                AS id,
        " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey         AS masterkey,
        " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull."         AS subject
        FROM " . $config['sy_mnu']['db']['main'] . "  
        WHERE 1=1 
        AND " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_status != 'Disable'
        ";

        if (!empty($id)) {
            $sql .= " AND " . $config['sy_mnu']['db']['main'] . "_id = '".$id."' ";
        }

        if (!empty($masterkey)) {
            $sql .= " AND " . $config['sy_mnu']['db']['main'] . "_masterkey LIKE '".$masterkey."%' ";
        }

        if (!empty($notlike)) {
            $sql .= " AND " . $config['sy_mnu']['db']['main'] . "_id != '".$notlike."' ";
        }

        $sql .= " ORDER BY " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_order ASC ";
        $result = $db->execute($sql);
        return $result;
    }
}
