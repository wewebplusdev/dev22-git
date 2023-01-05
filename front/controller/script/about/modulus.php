<?php
class aboutPage
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_url" . $lang . " as url,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_target as target,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid as gid,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_view as view,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_typec as typec,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate as credate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_refdate as refdate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_description" . $lang . " as description,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_keywords" . $lang . " as keywords,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_tid as tid,
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

    $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order ASC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callCMSList($masterkey, $id = null, $gid = null, $page = 1, $limit = 10, $order = "ASC", $year = null,$keywords=null, $sid = null)
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_url" . $lang . " as url,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_target as target,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid as gid,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_view as view,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_typec as typec,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate as credate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_refdate as refdate,
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

    if (!empty($year)) {
      $sql .= " AND YEAR(" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate) = '" . $year . "' ";
    }

    if (!empty($sid)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_sid = '" . $sid . "' ";
    }
    if (!empty($keywords)) {
      $sql .= " AND
      (
      " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_subject" . $lang . " LIKE '%" . $keywords . "%' OR
      " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_title" . $lang . " LIKE '%" . $keywords . "%'
      )";
    }
    if (!empty($order)) {
      if($order == 0){
        $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order ASC ";
      }
      if($order == 1){
        $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate DESC ";
      }
      if($order == 2){
        $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate ASC ";
      }
      if($order == 3){
        $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_view DESC ";
      }
    }else{
      $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order ASC ";
    }

    // print_pre($sql);
    $result = $db->pageexecute($sql, $limit, $page);
    return $result;
  }

  function callGroup($masterkey, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id as id,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_masterkey as masterkey,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_pic" . $lang . " as pic,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_lastdate as lastdate,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_url as url,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_types as types,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_type as type,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_isstatic as isstatic
    FROM
    " . $config['cmg']['db']['main'] . "
    INNER JOIN
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_masterkey
    WHERE
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_status != 'Disable' AND
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_subject" . $lang . " != ''
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
  function callGroupCareer($masterkey, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_id as id,
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_masterkey as masterkey,
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_title" . $lang . " as title,
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_pic" . $lang . " as pic,
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_lastdate as lastdate,
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_url as url,
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_type as type
    FROM
    " . $config['jos']['db']['main'] . "
    WHERE
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_status != 'Disable' AND
    " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_subject" . $lang . " != ''
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_order ASC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }


  function callYear($masterkey, $gid = null)
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_lastdate as lastdate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid as gid,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate as credate

    FROM
    " . $config['cms']['db']['main'] . "
    INNER JOIN
    " . $config['cmg']['db']['main'] . "
    ON
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id = " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid
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
      $sql .= " AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id = '" . $gid . "' ";
    }

    $sql .= " GROUP BY YEAR(" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate) ORDER BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callSubGroup($masterkey, $gid = null, $page = 1, $limit = 10, $order = "ASC", $year = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_id as id,
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_masterkey as masterkey,
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_lastdate as lastdate
    FROM
    " . $config['cmsg']['db']['main'] . "
    INNER JOIN
    " . $config['cms']['db']['main'] . "
    ON
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_sid = " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_id
    WHERE
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_status != 'Disable' AND
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_subject" . $lang . " != '' AND

    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_status != 'Disable' AND
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
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
      $sql .= " AND " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_gid = '" . $gid . "' ";
    }

    if (!empty($year)) {
      $sql .= " AND YEAR(" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate) = '" . $year . "' ";
    }

    $sql .= " GROUP BY " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_id ORDER  BY " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_order ".$order." ";

    // print_pre($sql);
    $result = $db->pageexecute($sql, $limit, $page);
    return $result;
  }

  ## คณะกรรมการสถาบัน
  function callGroupMem($masterkey, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_id as id,
    " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_masterkey as masterkey,
    " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_title" . $lang . " as title,
    " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_url" . $lang . " as url,
    " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_lastdate as lastdate,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname
    FROM
    " . $config['memsg']['db']['main'] . "
    INNER JOIN
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_masterkey
    WHERE
    " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_status != 'Disable' AND
    " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_subject" . $lang . " != ''
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['memsg']['db']['main'] . "." . $config['memsg']['db']['main'] . "_order ASC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callSubGroupMem($masterkey, $id = null, $arr_id = array())
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_id as id,
    " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_masterkey as masterkey,
    " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_title" . $lang . " as title,
    " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_lastdate as lastdate
    FROM
    " . $config['memg']['db']['main'] . "
    WHERE
    " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_status != 'Disable' AND
    " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_subject" . $lang . " != ''
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_gid = '" . $id . "' ";
    }

    if (!empty($arr_id)) {
      $sql .= " AND " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_id IN (" . $arr_id . ") ";
    }

    $sql .= " ORDER  BY " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_order ASC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
  function callPositionMem($masterkey, $gid = null, $pid = null, $mid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_id as id,
    " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_mid as mid,
    " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_gid as gid,
    " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_pid as pid
    FROM
    " . $config['memp']['db']['main'] . "
    INNER JOIN
    " . $config['memg']['db']['main'] . "
    ON
    " . $config['memp']['db']['main'] . " . " . $config['memp']['db']['main'] . "_gid = " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_id
    WHERE 1=1
    AND " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_masterkey = '".$masterkey."'
    AND " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_subject".$lang." != ''
    ";

    if (!empty($gid)) {
      $sql .= " AND " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_gid = '" . $gid . "' ";
    }

    if (!empty($pid)) {
      $sql .= " AND " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_pid = '" . $pid . "' ";
    }

    if (!empty($mid)) {
      $sql .= " AND " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_mid = '" . $mid . "' ";
    }

    $sql .= " GROUP BY " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_gid
    ORDER  BY " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_order ASC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callMem($masterkey, $gid = null, $pid = null, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_id as id,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_masterkey as masterkey,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_pic" . $lang . " as pic,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_sdatetxt" . $lang . " as sdatetxt,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_email" . $lang . " as email,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_tel" . $lang . " as tel,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_fname" . $lang . " as fname,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_lname" . $lang . " as lname,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_depart" . $lang . " as depart,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_lastdate as lastdate,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_url as url,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_gid as gid,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_view as view,
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_credate as credate,
    " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_gid as posi_gid,
    " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_subject".$lang." as namegroup,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname,
    " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_pid as position

    FROM
    " . $config['mem']['db']['main'] . "
    INNER JOIN
    " . $config['memp']['db']['main'] . "
    ON
    " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_mid = " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_id
    INNER JOIN
    " . $config['memg']['db']['main'] . "
    ON
    " . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_id = " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_gid
    INNER JOIN
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_masterkey
    WHERE
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_status != 'Disable' AND
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_lang".$langOption." = '1' AND
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_fname" . $lang . " != '' AND
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_lname" . $lang . " != '' AND
    ((" . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    // if (!empty($gid)) {
    //   $sql .= " AND ( ";
    //   foreach ($gid as $key => $value) {
    //     if ($key > 0) {
    //       $sql .= " OR ";
    //     }
    //     $sql .= " " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_gid REGEXP '.*;s:[0-9]+:\"".$value."\".*'";
    //   }
    //   $sql .= " ) ";
    // }

    if (!empty($gid)) {
      $sql .= " AND " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_gid IN (" . $gid . ") ";
    }

    if (!empty($pid)) {
      $sql .= " AND " . $config['memp']['db']['main'] . "." . $config['memp']['db']['main'] . "_pid = '" . $pid . "' ";
    }

    if (!empty($id)) {
      $sql .= " AND " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " GROUP BY " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_id
    ," . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id
    ORDER  BY " . $config['mem']['db']['main'] . "." . $config['mem']['db']['main'] . "_order ," . $config['memg']['db']['main'] . "." . $config['memg']['db']['main'] . "_order ASC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callSetting($masterkey = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $sql = "SELECT
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_id as id,
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_masterkey as masterkey,
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_subject" . $lang . " as subject,
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_title" . $lang . " as title,
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_description" . $lang . " as description,
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_keywords" . $lang . " as keywords,
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_metatitle" . $lang . " as metatitle,
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_type as type,
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_pic as pic,
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename

      FROM
      " . $config['joss']['db']['main'] . "
      WHERE
      " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_masterkey = '" . $masterkey . "'
      AND " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_status != 'Disable'
      ";

    $sql .= " ORDER  BY " . $config['joss']['db']['main'] . "." . $config['joss']['db']['main'] . "_order ASC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }


  function callListCareer($masterkey = null, $page = 1, $limit = 10, $order = "ASC", $keywords = null, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_id as id,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_masterkey as masterkey,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_subject" . $lang . " as subject,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_title" . $lang . " as title,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_description" . $lang . " as description,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_keywords" . $lang . " as keywords,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_metatitle" . $lang . " as metatitle,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_type as type,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_pic as pic,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_quantity as quantity,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_address" . $lang . " as address,
      " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
      " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname

      FROM
      " . $config['jos']['db']['main'] . "
      INNER JOIN
      " . $config['sy_mnu']['db']['main'] . "
      ON
      " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_masterkey
      WHERE
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_masterkey = '" . $masterkey . "'
      AND " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_status != 'Disable'
      AND " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_lang" . $langOption . " = '1'
      AND " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_subject" . $lang . " != ''
      AND
      ((" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
      (" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
      TO_DAYS(" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
      (TO_DAYS(" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
      (TO_DAYS(" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
      TO_DAYS(" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
      ";

    if (!empty($keywords)) {
      $sql .= " AND
      (
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_subject LIKE '%" . $keywords . "%' OR
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_title LIKE '%" . $keywords . "%'
      )";
    }

    if (!empty($id)) {
      $sql .= " AND " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_id = '" . $id . "' ";
    }


    $sql .= " ORDER  BY " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_order " . $order . " ";

    // print_pre($sql);
    $result = $db->pageexecute($sql, $limit, $page);
    return $result;
  }


  function callCareerDetail($masterkey = null, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_id as id,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_masterkey as masterkey,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_subject" . $lang . " as subject,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_title" . $lang . " as title,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_description" . $lang . " as description,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_keywords" . $lang . " as keywords,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_metatitle" . $lang . " as metatitle,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_type as type,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_pic as pic,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_url" . $lang . " as url,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_quantity as quantity,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_address" . $lang . " as address,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_view as view,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_statusjoin as statusjoin,
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_credate as credate,
      " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
      " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname

      FROM
      " . $config['jos']['db']['main'] . "
      INNER JOIN
      " . $config['sy_mnu']['db']['main'] . "
      ON
      " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_masterkey
      WHERE
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_masterkey = '" . $masterkey . "'
      AND " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_status != 'Disable'
      AND " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_lang" . $langOption . " = '1'
      AND " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_subject" . $lang . " != ''
      AND
      ((" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
      (" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
      TO_DAYS(" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
      (TO_DAYS(" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
      " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
      (TO_DAYS(" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
      TO_DAYS(" . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
      ";

    if (!empty($id)) {
      $sql .= " AND " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_id = '" . $id . "' ";
    }


    $sql .= " ORDER  BY " . $config['jos']['db']['main'] . "." . $config['jos']['db']['main'] . "_order ASC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callProvince_main($pid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['province']['db']['main'] . "." . $config['province']['db']['main'] . "_id as id,
    " . $config['province']['db']['main'] . "." . $config['province']['db']['main'] . "_code as code,
    " . $config['province']['db']['main'] . "." . $config['province']['db']['main'] . "_name".$lang." as name,
    " . $config['province']['db']['main'] . "." . $config['province']['db']['main'] . "_geography as geography
    FROM
        " . $config['province']['db']['main'] . "
    ";

    if (!empty($pid)) {
      $sql .= " WHERE " . $config['province']['db']['main'] . "_id = '".$pid."'";
    }

    $sql .= "
    ORDER BY " . $config['province']['db']['main'] . "_name ASC";
    $result = $db->execute($sql);
    return $result;
  }

  function callDistrict_main($pid = 0,$did = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['amphur']['db']['main'] . "." . $config['amphur']['db']['main'] . "_id as id,
    " . $config['amphur']['db']['main'] . "." . $config['amphur']['db']['main'] . "_code as code,
    " . $config['amphur']['db']['main'] . "." . $config['amphur']['db']['main'] . "_name".$lang." as name,
    " . $config['amphur']['db']['main'] . "." . $config['amphur']['db']['main'] . "_province_id as province_id
    FROM
    " . $config['amphur']['db']['main'] . "
    ";

    if (!empty($pid)) {
      $sql .= "
        WHERE " . $config['amphur']['db']['main'] . "." . $config['amphur']['db']['main'] . "_province_id = $pid  AND  " . $config['amphur']['db']['main'] . "." . $config['amphur']['db']['main'] . "_nameen NOT LIKE '%*%'";
    } else {
      $sql .= "
        WHERE " . $config['amphur']['db']['main'] . "." . $config['amphur']['db']['main'] . "_province_id = 0  AND  " . $config['amphur']['db']['main'] . "." . $config['amphur']['db']['main'] . "_nameen NOT LIKE '%*%'";
    }
    if (!empty($did)) {
      $sql .= " AND " . $config['amphur']['db']['main'] . "_id = '".$did."'";
    }
    $sql .= "
    ORDER BY " . $config['amphur']['db']['main'] . "_nameen ASC";
    // print_pre();
    $result = $db->execute($sql);
    return $result;
  }

  function callSubDistrict_main($aid,$sdid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
  " . $config['district']['db']['main'] . "." . $config['district']['db']['main'] . "_id as id,
  " . $config['district']['db']['main'] . "." . $config['district']['db']['main'] . "_zip_code as zip_code,
  " . $config['district']['db']['main'] . "." . $config['district']['db']['main'] . "_name".$lang." as name,
  " . $config['district']['db']['main'] . "." . $config['district']['db']['main'] . "_amphure_id as amphure_id
  FROM
  " . $config['district']['db']['main'] . "
  ";

    $sql .= "
  WHERE
  " . $config['district']['db']['main'] . "." . $config['district']['db']['main'] . "_amphure_id = $aid AND  " . $config['district']['db']['main'] . "." . $config['district']['db']['main'] . "_nameen NOT LIKE '%*%'
  ";

  if (!empty($sdid)) {
    $sql .= " AND " . $config['district']['db']['main'] . "_id = '".$sdid."'";
  }

    $sql .= "
  ORDER BY " . $config['district']['db']['main'] . "_nameen ASC";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callmailcareer($masterkey, $id = null){
    global $config, $db, $url;
  
    $sql = "SELECT
    " . $config['joe']['db']['main'] . "." . $config['joe']['db']['main'] . "_id,
    " . $config['joe']['db']['main'] . "." . $config['joe']['db']['main'] . "_email

  FROM
    " . $config['joe']['db']['main'] . "
  WHERE
     " . $config['joe']['db']['main'] . "." . $config['joe']['db']['main'] . "_masterkey = '".$masterkey."'
    ";
    if (!empty($id)) {
      $sql .= " AND " . $config['joe']['db']['main'] . "_gid = '".$id."'";
    }
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

}
