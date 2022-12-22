<?php
class policyPage
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

  function callContactGroup($masterkey)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_id as id,
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_masterkey as masterkey,
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_title" . $lang . " as title,
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_lastdate as lastdate,
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_credate as credate

    FROM
    " . $config['comg']['db']['main'] . "
    WHERE
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_status != 'Disable' AND
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_subject" . $lang . " != '' 
    ";

    $sql .= " ORDER  BY " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callComsGroup($masterkey,$id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_id as id,
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_masterkey as masterkey,
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_title" . $lang . " as title,
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_lastdate as lastdate,
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_credate as credate

    FROM
    " . $config['comg']['db']['main'] . "
    WHERE
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_id = '" . $id . "' AND
    " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_masterkey = '" . $masterkey . "'
    ";

    $sql .= " ORDER  BY " . $config['comg']['db']['main'] . "." . $config['comg']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
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

    $sql .= " ORDER  BY " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_order DESC ";

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

  
  function callCMSList($masterkey, $id = null, $gid = null, $page = 1, $limit = 10, $order = "DESC", $year = null, $sid = null)
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

    if (!empty($year)) {
      $sql .= " AND YEAR(" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate) = '" . $year . "' ";
    }

    if (!empty($sid)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_sid = '" . $sid . "' ";
    }

    $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order ".$order." ";

    // print_pre($sql);
    $result = $db->pageexecute($sql, $limit, $page);
    return $result;
  }

  function callmailcontact($masterkey, $id = null, $arr_id = null){
    global $config, $db, $url;
  
    $sql = "SELECT
    " . $config['cue']['db']['main'] . "." . $config['cue']['db']['main'] . "_id,
    " . $config['cue']['db']['main'] . "." . $config['cue']['db']['main'] . "_gid,
    " . $config['cue']['db']['main'] . "." . $config['cue']['db']['main'] . "_email
  FROM
    " . $config['cue']['db']['main'] . "
  WHERE
     " . $config['cue']['db']['main'] . "." . $config['cue']['db']['main'] . "_masterkey = '".$masterkey."'
    ";

    if (!empty($id)) {
      $sql .=" AND " . $config['cue']['db']['main'] . "." . $config['cue']['db']['main'] . "_gid = '".$id."'";
    }

    if (!empty($arr_id)) {
      $sql .=" AND " . $config['cue']['db']['main'] . "." . $config['cue']['db']['main'] . "_gid IN (" . implode(',', array_values($arr_id)) . ")";
    }
    
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function generateKey()
  {
    global $menuActive, $url;
    // สร้างรหัสสุ่ม
    $arr_a_z = range('a', 'z');
    $arr_A_Z = range('A', 'Z');
    $arr_0_9 = range(0, 9);
    $arr_a_9 = array_merge($arr_a_z, $arr_A_Z, $arr_0_9);
    $str_a_9 = implode($arr_a_9);
    $str_a_9 = str_shuffle($str_a_9);
    $member_verify_code = substr($str_a_9, 0, 15);
    // get path 
    // $urlVerify = _URL ."/". $url->pagelang[2] ."/". $menuActive." /step-2?token=".$member_verify_code."";

    return $member_verify_code;
  }

  
  function callcustp($key)
  {
    global $config, $db, $url;

    $sql = "SELECT
    " . $config['custp']['db']['main'] . "." . $config['custp']['db']['main'] . "_id as id,
    " . $config['custp']['db']['main'] . "." . $config['custp']['db']['main'] . "_masterkey as masterkey,
    " . $config['custp']['db']['main'] . "." . $config['custp']['db']['main'] . "_fname as fname,
    " . $config['custp']['db']['main'] . "." . $config['custp']['db']['main'] . "_lname as lname,
    " . $config['custp']['db']['main'] . "." . $config['custp']['db']['main'] . "_email as email,
    " . $config['custp']['db']['main'] . "." . $config['custp']['db']['main'] . "_tel as tel,
    " . $config['custp']['db']['main'] . "." . $config['custp']['db']['main'] . "_key as token,
    " . $config['custp']['db']['main'] . "." . $config['custp']['db']['main'] . "_credate as credate
  FROM
    " . $config['custp']['db']['main'] . "
  WHERE
    " . $config['custp']['db']['main'] . "." . $config['custp']['db']['main'] . "_masterkey = '" . $config['policy']['req']['masterkey'] . "'
    ";

    if (!empty($key)) {
      $sql .= "
          AND " . $config['custp']['db']['main'] . "." . $config['custp']['db']['main'] . "_key = '" . $key . "'
      ";
    }
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

    //#################################################
    function DateDiff($strDate1, $strDate2 = null)
    {
      //#################################################
  
      $Date = (strtotime($strDate2) - strtotime($strDate1)) / (60 * 60 * 24);  // 1 day = 60*60*24
      return $Date;
    }

    function getSiteName($HTTP_SITEKEY, $HTTP_SECRETKEY)
    {
      global $config, $db, $url;
  
      $sql = " SELECT 
      " . $config['cmg']['main']['db'] . "_id as id, 
      " . $config['cmg']['main']['db'] . "_subject as subject, 
      " . $config['cmg']['main']['db'] . "_controlkey as controlkey,
      " . $config['cmg']['main']['db'] . "_secretkey as secretkey,
      " . $config['cmg']['main']['db'] . "_url as url           
      FROM 
      " . $config['cmg']['main']['db'] . " 
      WHERE 
      " . $config['cmg']['main']['db'] . "_controlkey = '" . $HTTP_SITEKEY . "' AND 
      " . $config['cmg']['main']['db'] . "_secretkey = '" . $HTTP_SECRETKEY . "' AND 
      " . $config['cmg']['main']['db'] . "_status != 'Disable'
      
      ";
      $result = $db->execute($sql);
      return $result;
    }
    
  function callCusGroup()
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_id as id,
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_masterkey as masterkey,
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_subject" . $lang . " as subject
  
  
    FROM
    " . $config['cug']['db']['main'] . "
    WHERE
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_masterkey = '" . $config['policy']['req']['masterkey'] . "' AND
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_status = 'Enable'
    ";


    $sql .= " ORDER  BY " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_order DESC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callCountry()
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['ct']['main']['db'] . "." . $config['ct']['main']['db'] . "_id as id,
    " . $config['ct']['main']['db'] . "." . $config['ct']['main']['db'] . "_name" . $lang . " as subject
  
  
    FROM
    " . $config['ct']['main']['db'] . "
    WHERE
    1=1
    ";


    $sql .= " ORDER  BY " . $config['ct']['main']['db'] . "." . $config['ct']['main']['db'] . "_name" . $lang . " ASC ";

    $result = $db->execute($sql);
    return $result;
  }

  function callGroupContact($id)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cug']['main']['db'] . "." . $config['cug']['main']['db'] . "_id,
    " . $config['cug']['main']['db'] . "." . $config['cug']['main']['db'] . "_masterkey,
    " . $config['cug']['main']['db'] . "." . $config['cug']['main']['db'] . "_subject".$lang."
  FROM
    " . $config['cug']['main']['db'] . "
  WHERE
    " . $config['cug']['main']['db'] . "." . $config['cug']['main']['db'] . "_masterkey = '" . $config['policy']['req']['masterkey'] . "' AND
    " . $config['cug']['main']['db'] . "." . $config['cug']['main']['db'] . "_status = 'Enable'
    ";

    if (!empty($id)) {
      $sql .= "
          AND " . $config['cug']['main']['db'] . "." . $config['cug']['main']['db'] . "_id = $id
      ";
    }

    $sql .= "
        ORDER  BY " . $config['cug']['main']['db'] . "." . $config['cug']['main']['db'] . "_order DESC
        ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
  
  function callSubGroupContact($id)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_id,
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_masterkey,
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_subject".$lang."
  FROM
    " . $config['cug']['db']['main'] . "
  WHERE
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_masterkey = '" . $config['policy']['req']['masterkey'] . "' AND
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_status = 'Enable'
    ";

    if (!empty($id)) {
      $sql .= "
          AND " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_id in (".implode(",",array_values($id)).")
      ";
    }

    $sql .= "
        ORDER  BY " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_order DESC
        ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
}
