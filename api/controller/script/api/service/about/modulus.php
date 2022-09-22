<?php
class aboutPage
{

  function callCmsDetail($masterkey, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_id as id,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_masterkey as masterkey,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_subject" . $lang . " as subject,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_title" . $lang . " as title,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_pic" . $lang . " as pic,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_credate as credate,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_url" . $lang . " as url,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_target as target,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_credate as credate,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_view as view,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_typec as typec,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_gid as gid,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_keywords" . $lang . " as keywords,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_description" . $lang . " as description
    FROM
    " . $config['cms']['db'] . "
    WHERE 
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_lang" . $langOption . " = '1' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_status = 'Enable' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_subject" . $lang . " != ''  AND 
    ((" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['cms']['db'] . "." . $config['cms']['db'] . "_id = '".$id."'";
    }

    $sql .= " ORDER  BY " . $config['cms']['db'] . "." . $config['cms']['db'] . "_order DESC ";
    $result = $db->execute($sql);
    return $result;
  }

  function callCmsDetailList($masterkey, $page = 1, $limit = 20, $order = "DESC", $gid = null, $sid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_id as id,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_masterkey as masterkey,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_subject" . $lang . " as subject,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_title" . $lang . " as title,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_pic" . $lang . " as pic,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_credate as credate,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_url" . $lang . " as url,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_target as target,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_credate as credate,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_view as view,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_gid as gid,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_sid as sid,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_typec as typec,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_keywords" . $lang . " as keywords,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_description" . $lang . " as description
    FROM
    " . $config['cms']['db'] . "
    WHERE 
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_lang" . $langOption . " = '1' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_status = 'Enable' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_subject" . $lang . " != '' AND
    ((" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    if (!empty($gid)) {
      $sql .= " AND " . $config['cms']['db'] . "." . $config['cms']['db'] . "_gid = '".$gid."'";
    }

    if (!empty($sid)) {
      $sql .= " AND " . $config['cms']['db'] . "." . $config['cms']['db'] . "_sid = '".$sid."'";
    }

    $sql .= " ORDER  BY " . $config['cms']['db'] . "." . $config['cms']['db'] . "_order ".$order." ";
    // print_pre($sql);
    $result = $db->pageexecute($sql, $limit, $page);
    return $result;
  }

  function callCmg($masterkey, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_id as id,
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_masterkey as masterkey,
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_subject" . $lang . " as subject,
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_title" . $lang . " as title,
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_credate as credate,
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_type as theme,
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_types as typesub
    FROM
    " . $config['cmg']['db'] . "
    WHERE 
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_status = 'Enable' AND 
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_subject" . $lang . " != '' 
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_id = '".$id."'";
    }

    $sql .= " ORDER  BY " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_order DESC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callCmsg($masterkey, $gid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_id as id,
    " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_masterkey as masterkey,
    " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_subject" . $lang . " as subject,
    " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_title" . $lang . " as title,
    " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_credate as credate
    FROM
    " . $config['cmsg']['db'] . "
    WHERE 
    " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_status = 'Enable' AND 
    " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_subject" . $lang . " != '' 
    ";

    if (!empty($gid)) {
      $sql .= " AND " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_gid = '".$gid."'";
    }

    $sql .= " ORDER  BY " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_order DESC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callMemsg($masterkey, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_id as id,
    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_masterkey as masterkey,
    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_subject" . $lang . " as subject,
    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_title" . $lang . " as title,
    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_url" . $lang . " as url,
    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_credate as credate
    FROM
    " . $config['memsg']['db'] . "
    WHERE 
    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_status = 'Enable' AND 
    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_subject" . $lang . " != '' 
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_id = '".$id."'";
    }

    $sql .= " ORDER  BY " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_order DESC ";
    // print_pre($sql);die;
    $result = $db->execute($sql);
    return $result;
  }

  function callMemDetail($masterkey, $gid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_id as id,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_masterkey as masterkey,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_fname" . $lang . " as fname,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_lname" . $lang . " as lname,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_depart" . $lang . " as depart,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_pic as pic,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_sdatetxt" . $lang . " as sdatetxt,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_email" . $lang . " as email,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_tel" . $lang . " as tel,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_gid as gid,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_credate as credate,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_view as view
    FROM
    " . $config['mem']['db'] . "
    WHERE 
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_lang" . $langOption . " = '1' AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_status = 'Enable' AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_fname" . $lang . " != ''  AND 
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_lname" . $lang . " != ''  AND 
    ((" . $config['mem']['db'] . "." . $config['mem']['db'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['mem']['db'] . "." . $config['mem']['db'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['mem']['db'] . "." . $config['mem']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['mem']['db'] . "." . $config['mem']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['mem']['db'] . "." . $config['mem']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['mem']['db'] . "." . $config['mem']['db'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['mem']['db'] . "." . $config['mem']['db'] . "_id = '".$id."'";
    }

    if (!empty($gid)) {
      $sql .= " AND " . $config['mem']['db'] . "." . $config['mem']['db'] . "_gid REGEXP '.*;s:[0-9]+:\"".$gid."\".*'";
    }

    $sql .= " ORDER  BY " . $config['mem']['db'] . "." . $config['mem']['db'] . "_order DESC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callMemPos($masterkey, $gid = null, $sid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
    " . $config['memposi']['db'] . "." . $config['memposi']['db'] . "_mid as mid,
    " . $config['memposi']['db'] . "." . $config['memposi']['db'] . "_gid as gid,
    " . $config['memposi']['db'] . "." . $config['memposi']['db'] . "_pid as pid,

    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_subject".$lang." as sgsubject,

    " . $config['memg']['db'] . "." . $config['memg']['db'] . "_subject".$lang." as gsubject,

    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_id as id,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_masterkey as masterkey,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_fname" . $lang . " as fname,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_lname" . $lang . " as lname,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_depart" . $lang . " as depart,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_pic as pic,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_sdatetxt" . $lang . " as sdatetxt,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_email" . $lang . " as email,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_tel" . $lang . " as tel,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_gid as arrgid,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_credate as credate,
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_view as view

    FROM
    " . $config['memposi']['db'] . "
    INNER JOIN 
    " . $config['memg']['db'] . "
    ON
    " . $config['memg']['db'] . "." . $config['memg']['db'] . "_id = " . $config['memposi']['db'] . "." . $config['memposi']['db'] . "_gid
    INNER JOIN
    " . $config['mem']['db'] . "
    ON
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_id = " . $config['memposi']['db'] . "." . $config['memposi']['db'] . "_mid
    INNER JOIN
    " . $config['memsg']['db'] . "
    ON
    " . $config['memsg']['db'] . "." . $config['memsg']['db'] . "_id = " . $config['memposi']['db'] . "." . $config['memposi']['db'] . "_pid
    WHERE 
    " . $config['memposi']['db'] . "." . $config['memposi']['db'] . "_pid = '".$gid."' AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_lang" . $langOption . " = '1' AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_status = 'Enable' AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_fname" . $lang . " != ''  AND 
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_lname" . $lang . " != ''  AND 
    ((" . $config['mem']['db'] . "." . $config['mem']['db'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['mem']['db'] . "." . $config['mem']['db'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['mem']['db'] . "." . $config['mem']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['mem']['db'] . "." . $config['mem']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['mem']['db'] . "." . $config['mem']['db'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['mem']['db'] . "." . $config['mem']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['mem']['db'] . "." . $config['mem']['db'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    $sql .= " ORDER  BY " . $config['mem']['db'] . "." . $config['mem']['db'] . "_order," . $config['memg']['db'] . "." . $config['memg']['db'] . "_order DESC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callCareerList($masterkey, $page = 1, $limit = 20, $order = "DESC", $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_id as id,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_masterkey as masterkey,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_subject" . $lang . " as subject,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_title" . $lang . " as title,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_address" . $lang . " as address,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_quantity as quantity,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_credate as credate,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_view as view,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_gid as gid,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_keywords" . $lang . " as keywords,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_metatitle" . $lang . " as metatitle,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_description" . $lang . " as description
    FROM
    " . $config['jos']['db'] . "
    WHERE 
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_lang" . $langOption . " = '1' AND
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_status = 'Enable' AND
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_subject" . $lang . " != '' AND
    ((" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['jos']['db'] . "." . $config['jos']['db'] . "_id = '".$id."'";
    }

    $sql .= " ORDER  BY " . $config['jos']['db'] . "." . $config['jos']['db'] . "_order ".$order." ";
    // print_pre($sql);
    $result = $db->pageexecute($sql, $limit, $page);
    return $result;
  }

  function callCareerDetail($masterkey, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_id as id,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_masterkey as masterkey,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_subject" . $lang . " as subject,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_title" . $lang . " as title,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_address" . $lang . " as address,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_url" . $lang . " as url,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_quantity as quantity,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_credate as credate,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_view as view,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_gid as gid,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_keywords" . $lang . " as keywords,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_metatitle" . $lang . " as metatitle,
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_description" . $lang . " as description
    FROM
    " . $config['jos']['db'] . "
    WHERE 
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_lang" . $langOption . " = '1' AND
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_status = 'Enable' AND
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_subject" . $lang . " != '' AND
    ((" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['jos']['db'] . "." . $config['jos']['db'] . "_id = '".$id."'";
    }

    $sql .= " ORDER  BY " . $config['jos']['db'] . "." . $config['jos']['db'] . "_order DESC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

}


