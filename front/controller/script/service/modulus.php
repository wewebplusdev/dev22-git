<?php
class servicePage
{
  
  function callCMS($masterkey, $id = null, $gid = null)
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
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname

    FROM
    " . $config['cms']['db']['main'] . "
    INNER JOIN 
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey
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

    if (!empty($gid)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid = '" . $gid . "' ";
    }

    if (!empty($id)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callCMSS($masterkey, $id = null, $gid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_id as id,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_masterkey as masterkey,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_lastdate as lastdate,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_view as view,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_credate as credate,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_description" . $lang . " as description,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_keywords" . $lang . " as keywords,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname

    FROM
    " . $config['cmsss']['db']['main'] . "
    INNER JOIN 
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_masterkey
    WHERE
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_status != 'Disable' AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_subject" . $lang . " != '' AND
    ((" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    if (!empty($gid)) {
      $sql .= " AND " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_gid = '" . $gid . "' ";
    }

    if (!empty($id)) {
      $sql .= " AND " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
}
