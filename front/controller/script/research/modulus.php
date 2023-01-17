<?php
class researchPage
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_type as type,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_factor as factor,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_factor_arr as factor_arr,
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

  function callGroup($masterkey, $id = null, $arrID = array())
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
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_factor as factor,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_ratio as ratio,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname
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

    if (!empty($arrID)) {
      $sql .= " AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id IN (" . implode(" , ", $arrID) . ") ";
    }

    $sql .= " ORDER  BY " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callGroupRatio($masterkey, $id = null, $arrID = array())
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
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_factor as factor,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_ratio as ratio,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname
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

    if (!empty($arrID)) {
      $sql .= " AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id IN (" . implode(" , ", $arrID) . ") ";
    }

    $sql .= " ORDER  BY " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_ratio ASC ";

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

  function callSubGroup($masterkey, $gid = null, $page = 1, $limit = 10, $order = "DESC", $year = null)
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

  
  function callCMSList($masterkey, $id = null, $gid = null, $page = 1, $limit = 10, $order = "DESC", $year = null,$keywords=null, $sid = null)
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_description" . $lang . " as description,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_keywords" . $lang . " as keywords,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_url2 as url2,
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
        $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC ";
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
      $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC ";
    }

    // print_pre($sql);
    $result = $db->pageexecute($sql, $limit, $page);
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

    //print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

}
