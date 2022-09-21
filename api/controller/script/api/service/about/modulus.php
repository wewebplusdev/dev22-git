<?php
class aboutPage
{

  function callCmsDetail($masterkey)
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
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_keywords" . $lang . " as keywords,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_description" . $lang . " as description
    FROM
    " . $config['cms']['db'] . "
    WHERE 
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_lang" . $langOption . " = '1' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_status = 'Enable' AND
    ((" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['cms']['db'] . "." . $config['cms']['db'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

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
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_keywords" . $lang . " as keywords,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_description" . $lang . " as description
    FROM
    " . $config['cms']['db'] . "
    WHERE 
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_lang" . $langOption . " = '1' AND
    " . $config['cms']['db'] . "." . $config['cms']['db'] . "_status = 'Enable' AND
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
    " . $config['cmg']['db'] . "." . $config['cmg']['db'] . "_status = 'Enable'
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
    " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_status = 'Enable'
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_gid = '".$gid."'";
    }

    $sql .= " ORDER  BY " . $config['cmsg']['db'] . "." . $config['cmsg']['db'] . "_order DESC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
}
