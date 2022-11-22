<?php
$callSetWebsite = new settingWebsite();
$smarty->assign("callSetWebsite", $callSetWebsite);
$infoSetting = $callSetWebsite->callSetting();

/* Start Google Recaptcha */
$sitekey = '6LfP21siAAAAADlhcMQ0tNH_528_DWC67mmqSxRa';
$smarty->assign("sitekey", $sitekey);
$secretkey = '6LfP21siAAAAADZThwKgdO_EN9w6atBwzyiBcCAR';
$smarty->assign("secretkey", $secretkey);
/* End Google Recaptcha */

/* Start Site map */
$arrSitemap = $_SESSION['arrSitemap'];
if (count($arrMenu) < 1) {
    $getGroupMenu = $callSetWebsite->getGroupMenu($config['setting']['mnu']['masterkey']);
    $arrSitemap = array();
    foreach ($getGroupMenu as $keygetGroupMenu => $valuegetGroupMenu) {
        $getSubGroupMenu = $callSetWebsite->getSubGroupMenu($config['setting']['mnu']['masterkey'], $valuegetGroupMenu['id']);
        $arrSitemap[$keygetGroupMenu]['group'] = $valuegetGroupMenu;
        foreach ($getSubGroupMenu as $keygetSubGroupMenu => $valuegetSubGroupMenu) {
            $arrSitemap[$keygetGroupMenu]['list'][$keygetSubGroupMenu]['subgroup'] = $valuegetSubGroupMenu;
            $getMenu = $callSetWebsite->getMenu($config['setting']['mnu']['masterkey'], $valuegetSubGroupMenu['id']);
            foreach ($getMenu as $keygetMenu => $valuegetMenu) {
                $arrSitemap[$keygetGroupMenu]['list'][$keygetSubGroupMenu]['menu'][] = $valuegetMenu;
            }
        }
    }
    $_SESSION['Sitemap'] = $arrSitemap;
}
$smarty->assign("arrSitemap", $arrSitemap);
// print_pre($arrSitemap);
/* End Site map */

//segment active menu
$smarty->assign("segment", $url->segment[0]);

/* Start Policy */
$calPolicy = $callSetWebsite->callCMS($config['about']['plc']['masterkey'], 'Show');
$smarty->assign("calPolicy", $calPolicy);
/* End Policy */

/* Start Menu */
// require_once _DIR . '/front/controller/script/_mainpage/service/menu.php';
/* End Menu */

/* Start Theme */
$previewID = 0;
if ($url->segment[0] == 'preview') {
    $previewID = decodeStr($url->segment[1]);
}
$callSettingMainpage = $callSetWebsite->callSettingWebsite($config['setting']['main']['masterkey'], $previewID);
$themeWebsite = $callSettingMainpage->fields['theme'] ? $callSettingMainpage->fields['theme'] : 'theme-3';
$themeWebsite = themeWebsite($themeWebsite);
$themeWebsite['color'] = $callSettingMainpage->fields['color'] ? $callSettingMainpage->fields['color'] : '#FFFFFF';
$smarty->assign("themeWebsite", $themeWebsite);
// print_pre($themeWebsite);
/* End Theme */

/* Start chat FB */
$getChatFB = file_get_contents('./webservice_json/facebook.json');
$arr_ChatFB = json_decode($getChatFB, true); // json decode from web service
if ($arr_ChatFB['status'] != 'Disable') {
    if(
            (
                $arr_ChatFB['date']['sdate'] == "0000-00-00 00:00:00" && 
                $arr_ChatFB['date']['edate'] == "0000-00-00 00:00:00"
            ) || 
            (
                $arr_ChatFB['date']['sdate'] == "0000-00-00 00:00:00" && 
                strtotime($arr_ChatFB['date']['edate']) >= strtotime(date('Y-m-d H:i:s'))
            ) || 
            (
                strtotime($arr_ChatFB['date']['sdate']) <= strtotime(date('Y-m-d H:i:s')) && 
                $arr_ChatFB['date']['edate'] == "0000-00-00 00:00:00"
            ) || 
            (
                strtotime($arr_ChatFB['date']['sdate']) <= strtotime(date('Y-m-d H:i:s')) && 
                strtotime($arr_ChatFB['date']['edate']) >= strtotime(date('Y-m-d H:i:s'))
            )
        ) 
        {
            $smarty->assign("arr_ChatFB", rechangeQuot_code($arr_ChatFB['source']));
    }
}
/* Start chat FB */

$smarty->assign("langweb", $url->pagelang[3]);

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
$settingWeb['font'] = $fontsize;
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
            " . $table . "." . $table . "_download          AS download
    FROM " . $table . "  
    WHERE 1=1 
    AND " . $table . "." . $table . "_contantid = '" . $id . "'
    AND " . $table . "." . $table . "_language = '" . $langFull . "'
    ";

        $sql .= " ORDER BY " . $table . "." . $table . "_id ASC ";
        // print_pre($sql);die;
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

    function getMenuDetail($id = null, $masterkey = null, $notlike = null, $notlikearr = array(), $inarray = array())
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

        if (!empty($notlikearr)) {
            $sql .= " AND " . $config['sy_mnu']['db']['main'] . "_id NOT IN (" . implode(",", array_values($notlikearr)) . ") ";
        }

        if (!empty($inarray)) {
            $sql .= " AND " . $config['sy_mnu']['db']['main'] . "_masterkey IN (" . implode(",", array_values($inarray)) . ") ";
        }

        $sql .= " ORDER BY " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_order ASC ";
        $result = $db->execute($sql);
        return $result;
    }

    function getGroupMenu($masterkey = null, $id = null)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];

        $sql = "SELECT 
        " . $config['mng']['db']['main'] . "." . $config['mng']['db']['main'] . "_id                AS id,
        " . $config['mng']['db']['main'] . "." . $config['mng']['db']['main'] . "_masterkey         AS masterkey,
        " . $config['mng']['db']['main'] . "." . $config['mng']['db']['main'] . "_subject".$lang."         AS subject,
        " . $config['mng']['db']['main'] . "." . $config['mng']['db']['main'] . "_url".$lang."         AS url,
        " . $config['mng']['db']['main'] . "." . $config['mng']['db']['main'] . "_target         AS target
        FROM " . $config['mng']['db']['main'] . "  
        WHERE 1=1 
        AND " . $config['mng']['db']['main'] . "." . $config['mng']['db']['main'] . "_status != 'Disable'
        AND " . $config['mng']['db']['main'] . "." . $config['mng']['db']['main'] . "_subject".$lang." != ''
        ";

        if (!empty($id)) {
            $sql .= " AND " . $config['mng']['db']['main'] . "_id = '".$id."' ";
        }

        if (!empty($masterkey)) {
            $sql .= " AND " . $config['mng']['db']['main'] . "_masterkey = '".$masterkey."' ";
        }

        $sql .= " ORDER BY " . $config['mng']['db']['main'] . "." . $config['mng']['db']['main'] . "_order DESC ";
        // print_pre($sql);
        $result = $db->execute($sql);
        return $result;
    }

    function getSubGroupMenu($masterkey = null, $gid = null)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];

        $sql = "SELECT 
        " . $config['mnsg']['db']['main'] . "." . $config['mnsg']['db']['main'] . "_id                AS id,
        " . $config['mnsg']['db']['main'] . "." . $config['mnsg']['db']['main'] . "_masterkey         AS masterkey,
        " . $config['mnsg']['db']['main'] . "." . $config['mnsg']['db']['main'] . "_subject".$lang."         AS subject,
        " . $config['mnsg']['db']['main'] . "." . $config['mnsg']['db']['main'] . "_url".$lang."         AS url,
        " . $config['mnsg']['db']['main'] . "." . $config['mnsg']['db']['main'] . "_target         AS target
        FROM " . $config['mnsg']['db']['main'] . "  
        WHERE 1=1 
        AND " . $config['mnsg']['db']['main'] . "." . $config['mnsg']['db']['main'] . "_status != 'Disable'
        AND " . $config['mnsg']['db']['main'] . "." . $config['mnsg']['db']['main'] . "_subject".$lang." != ''
        ";

        if (!empty($gid)) {
            $sql .= " AND " . $config['mnsg']['db']['main'] . "_gid = '".$gid."' ";
        }

        if (!empty($masterkey)) {
            $sql .= " AND " . $config['mnsg']['db']['main'] . "_masterkey = '".$masterkey."' ";
        }

        $sql .= " ORDER BY " . $config['mnsg']['db']['main'] . "." . $config['mnsg']['db']['main'] . "_order DESC ";
        // print_pre($sql);
        $result = $db->execute($sql);
        return $result;
    }

    function getMenu($masterkey = null, $gid = null)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];

        $sql = "SELECT 
        " . $config['mn']['db']['main'] . "." . $config['mn']['db']['main'] . "_id                AS id,
        " . $config['mn']['db']['main'] . "." . $config['mn']['db']['main'] . "_masterkey         AS masterkey,
        " . $config['mn']['db']['main'] . "." . $config['mn']['db']['main'] . "_subject".$lang."         AS subject,
        " . $config['mn']['db']['main'] . "." . $config['mn']['db']['main'] . "_url".$lang."         AS url,
        " . $config['mn']['db']['main'] . "." . $config['mn']['db']['main'] . "_target        AS target
        FROM " . $config['mn']['db']['main'] . "  
        WHERE 1=1 
        AND " . $config['mn']['db']['main'] . "." . $config['mn']['db']['main'] . "_status != 'Disable'
        AND " . $config['mn']['db']['main'] . "." . $config['mn']['db']['main'] . "_subject".$lang." != ''
        ";

        if (!empty($gid)) {
            $sql .= " AND " . $config['mn']['db']['main'] . "_groupProoject = '".$gid."' ";
        }

        if (!empty($masterkey)) {
            $sql .= " AND " . $config['mn']['db']['main'] . "_masterkey = '".$masterkey."' ";
        }

        $sql .= " ORDER BY " . $config['mn']['db']['main'] . "." . $config['mn']['db']['main'] . "_order DESC ";
        // print_pre($sql);
        $result = $db->execute($sql);
        return $result;
    }
    
    function call_hashtag($masterkey = null, $id = null)
    {
      global $config, $db, $url;
      $lang = $url->pagelang[3];
    
  
      $sql = "SELECT
      " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_id as id,
      " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_masterkey as masterkey,
      " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_subject".$lang." as subject,
      " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_title".$lang." as title,
      " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_credate as credate
    
      FROM
      " . $config['tag']['db']['main'] . "
      WHERE
      " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_masterkey = '".$masterkey."' AND
      " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_status = 'Enable' AND
      " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_subject".$lang." != '' 
      ";

      if (!empty($id)) {
        $sql .= " AND " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_id in (" . implode(" , ", $id) . ")";
      }
    
      $sql .= " ORDER  BY " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_order DESC ";
    //    print_pre($sql);die;
      $result = $db->execute($sql);
      return $result;
    }

    function callCMS($masterkey, $pin = 'Show')
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $langOption = $url->pagelang[2];
        $langFull = strtolower($url->pagelang[4]);

        $sql = "SELECT
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id as id,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey as masterkey,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_subject" . $lang . " as subject,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_title" . $lang . " as title,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pic" . $lang . " as pic,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_lastdate as lastdate,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_url as url,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_target as target,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid as gid,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_view as view,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_typec as typec,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate as credate,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_metatitle" . $lang . " as metatitle,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_description" . $lang . " as description,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_keywords" . $lang . " as keywords,
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_tid as tid

        FROM
        " . $config['cms']['db']['main'] . "
        WHERE
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_status != 'Disable' AND
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_lang".$langOption." = '1' AND
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_subject" . $lang . " != '' AND
        ((" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
        (" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
        TO_DAYS(" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
        (TO_DAYS(" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
        " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
        (TO_DAYS(" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
        TO_DAYS(" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
        ";

        if (!empty($pin)) {
            $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pin = '" . $pin . "' ";
        }

        $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC ";

        // print_pre($sql);
        $result = $db->execute($sql);
        return $result;
    }

      
    function callSettingWebsite($masterkey, $id = null)
    {
        global $config, $db, $url;
        $lang = $url->pagelang[3];
        $sql = "SELECT
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_id as id,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_masterkey as masterkey,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_subject as subject,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_theme as theme,
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_col as color
        
        FROM
        " . $config['setting']['db'] . "
        WHERE
        " . $config['setting']['db'] . "." . $config['setting']['db'] . "_masterkey = '" . $masterkey . "' 
        ";


        if (!empty($id)) {
            $sql .= " AND " . $config['setting']['db'] . "." . $config['setting']['db'] . "_id = '" . $id . "' ";
        }else{
            $sql .= " AND " . $config['setting']['db'] . "." . $config['setting']['db'] . "_status = 'Enable' ";
        }

        $result = $db->execute($sql);
        return $result;
    }

    function template_mail($body){
        global $settingWeb, $path_template, $templateweb, $url;
        $strHTML = "<!doctype html>
        <html lang='en'>
        
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'
                integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
        </head>
        
        <body>
            <table border='0' width='100%' cellspacing='0' cellpadding='0' align='center'>
                <tbody>
                    <tr>
                        <td>
                            <table style='font-family: Arial, sans-serif; border: 1px solid #ebebeb; height: 629px;' border='0'
                                width='600' cellspacing='0' cellpadding='0' align='center'>
                                <tbody>
                                    <tr style='height: 22px;'>
                                        <td style='height: 22px; width: 596px; padding-top: 10px;border-bottom:1px solid #ebebeb;'>
                                            <table style='width: 100%;' border='0' width='100%' cellspacing='0' cellpadding='0' align='center'>
                                                <tbody>
                                                    <tr>
                                                        <td style='width: 2%;'></td>
                                                        <td style='width: 24.9161%;'><img
                                                                src='"._URL."/".$path_template[$templateweb][0]."/assets/img/static/git-logo.png'
                                                                style='width: 90px;' alt='git-logo.png'></td>
                                                        <td
                                                            style='width: 54.9161%; font-size: 14px; color: #666;text-align: right;padding-right: 20px;'>
                                                            <b>".$settingWeb['contact']['address'.$url->pagelang[3]]."</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>";
        $strHTML .= $body;
        
        $strHTML .="                <tr style='height: 298px;'>
                                        <td style='height: 298px; width: 596px;'>
                                            <table style='background-color: #fbfbfb;' border='0' width='100%' cellspacing='0' cellpadding='0' align='center'>
                                                <tbody>
                                    <tr>
                                        <td width='40'>&nbsp;</td>
                                        <td valign='top'>
                                            <table style='background-color: #fbfbfb; height: 186px; width: 100%;' border='0' width='100%'
                                                cellspacing='0' cellpadding='0' align='center'>
                                                <tbody>
                                                    <tr style='height: 45px;'>
                                                        <td style='height: 45px;'>
                                                            <div style='font-size: 13px; font-weight: bold; color: #037ee5; line-height: 1.2em;'>
                                                            ".$settingWeb['subjectoffice']."</div>
                                                        </td>
                                                    </tr>
                                                    <tr style='height: 18px;'>
                                                        <td style='height: 18px;' height='8'>&nbsp;</td>
                                                    </tr>
                                                    <tr style='height: 18px;'>
                                                        <td style='height: 18px;'>
                                                            <table border='0' width='100%' cellspacing='0' cellpadding='0' align='center'>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div style='font-size: 11px; color: #666;'><img
                                                                                    style='display: inline-block; vertical-align: middle;'
                                                                                    src='"._URL . $path_template[$templateweb][0]."/assets/img/static/template-tel.jpg' alt='template-tel.jpg' />".$settingWeb['contact']['tel']."</div>
                                                                        </td>
                                                                        <td>
                                                                            <div style='font-size: 11px; color: #666;'><img
                                                                                    style='display: inline-block; vertical-align: middle;'
                                                                                    src='"._URL . $path_template[$templateweb][0]."/assets/img/static/template-fax.jpg' alt='template-fax.jpg' />".$settingWeb['contact']['fax']."</div>
                                                                        </td>
                                                                        <td>
                                                                            <div style='font-size: 11px; color: #666;'><img
                                                                                    style='display: inline-block; vertical-align: middle;'
                                                                                    src='"._URL . $path_template[$templateweb][0]."/assets/img/static/template-email.jpg'
                                                                                    alt='template-email.jpg' />".$settingWeb['contact']['email']."</div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    <tr style='height: 18px;'>
                                                        <td style='height: 18px;'>";
                                                            if ($settingWeb['social']['Facebook']['link'] != "" && $settingWeb['social']['Facebook']['link'] != "#") {
                                                                $strHTML .="<a title='Facebook' href='".$settingWeb['social']['Facebook']['link']."'
                                                                    target='_blank' rel='nofollow'><img
                                                                    src='"._URL . $path_template[$templateweb][0]."/assets/img/static/social-fb.png' alt='social-fb.png'
                                                                    height='30' /></a>";
                                                            }
                                                            if ($settingWeb['social']['Twitter']['link'] != "" && $settingWeb['social']['Twitter']['link'] != "#") {
                                                                $strHTML .="<a title='Twitter' href='".$settingWeb['social']['Twitter']['link']."' target='_blank'
                                                                    rel='nofollow'><img src='"._URL . $path_template[$templateweb][0]."/assets/img/static/social-tw.png'
                                                                    alt='social-tw.png' height='30' /></a>";
                                                            }
                                                            if ($settingWeb['social']['Instagram']['link'] != "" && $settingWeb['social']['Instagram']['link'] != "#") {
                                                                $strHTML .="<a title='Instagram' href='".$settingWeb['social']['Instagram']['link']."' target='_blank'
                                                                    rel='nofollow'><img src='"._URL . $path_template[$templateweb][0]."/assets/img/static/social-ig.png'
                                                                    alt='social-ig.png' height='30' /></a>";
                                                            }
                                                            if ($settingWeb['social']['Youtube']['link'] != "" && $settingWeb['social']['Youtube']['link'] != "#") {
                                                                $strHTML .="<a title='Youtube' href='".$settingWeb['social']['Instagram']['link']."'
                                                                    target='_blank' rel='nofollow'><img
                                                                    src='"._URL . $path_template[$templateweb][0]."/assets/img/static/social-yt.png' alt='social-yt.png'
                                                                    height='30' /></a>";
                                                            }
                                            $strHTML .=" </td>
                                                    </tr>
                                                    <tr style='height: 20px;'>
                                                        <td style='height: 20px;' height='20'>&nbsp;</td>
                                                    </tr>
                                                    <tr style='height: 13px;'>
                                                        <td style='height: 13px;'>
                                                            <div style='font-size: 11px; color: #999; line-height: 1.2em;'>Copyright &copy;
                                                            2022 The Gem and Jewelry Institute of Thailand (Public Organization). All rights reserved. </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                <tr>
                                    <td colspan='5' height='30'>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        </td>
        </tr>
        </tbody>
        </table>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'>
        </script>
        </body>

        </html>";

        return $strHTML;
    }
}
