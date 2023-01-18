<?php
class itaPage
{
  
  function callCMSList($masterkey, $id = null, $gid = null,$sgid = null,$ssgid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_id as id,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_masterkey as masterkey,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_title" . $lang . " as title,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_pic" . $lang . " as pic,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_lastdate as lastdate,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_url as url,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_gid as gid,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_sgid as sgid,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_ssgid as ssgid,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_type as type,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_view as view,
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_credate as credate,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname

    FROM
    " . $config['dwn']['db']['main'] . "
    INNER JOIN 
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_masterkey
    WHERE
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_status != 'Disable' AND
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_subject" . $lang . " != '' AND
    ((" . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    if (!empty($gid)) {
      $sql .= " AND " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_gid = '" . $gid . "' ";
    }
    if (!empty($sgid)) {
      $sql .= " AND " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_sgid = '" . $sgid . "' ";
    }
    if (!empty($ssgid)) {
      $sql .= " AND " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_ssgid = '" . $ssgid . "' ";
    }
    if (!empty($id)) {
      $sql .= " AND " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['dwn']['db']['main'] . "." . $config['dwn']['db']['main'] . "_order DESC ";

    //print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
  function callGroup($masterkey, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_id as id,
    " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_masterkey as masterkey,
    " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_title" . $lang . " as title,
    " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_lastdate as lastdate,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname
    FROM
    " . $config['dwg']['db']['main'] . "
    INNER JOIN
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_masterkey
    WHERE
    " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_status != 'Disable' AND
    " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_subject" . $lang . " != ''
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['dwg']['db']['main'] . "." . $config['dwg']['db']['main'] . "_order DESC ";

    //print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callSubGroup($masterkey, $gid = null,$sgid = null, $page = 1, $limit = 10, $order = "ASC", $year = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_id as id,
    " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_masterkey as masterkey,
    " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_title" . $lang . " as title,
    " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_lastdate as lastdate,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname
    FROM
    " . $config['dwsg']['db']['main'] . "
    INNER JOIN
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_masterkey
    WHERE
    " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_status != 'Disable' AND
    " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_subject" . $lang . " != ''
    ";

    if (!empty($gid)) {
      $sql .= " AND " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_gid = '" . $gid . "' ";
    }
    if (!empty($sgid)) {
      $sql .= " AND " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_parentid = '" . $sgid . "' ";
    }

    $sql .= " ORDER  BY " . $config['dwsg']['db']['main'] . "." . $config['dwsg']['db']['main'] . "_order DESC ";

    //print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
  function callCMSFileList($id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[4];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);


    $sql = "SELECT
    " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_id as id,
    " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_contantid as contantid,
    " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_code as code,
    " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_filename as filename,
    " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_title as title,
    " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_type as type,
    " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_url as url,
    " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_file as file,
    " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_name as name
    FROM
    " . $config['dwf']['db']['main'] . "
    WHERE 1=1 ";
    $sql .= " AND " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_language = '" . $lang . "' ";
    if (!empty($id)) {
      $sql .= " AND " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_contantid= '" . $id . "' ";
    }
    $sql .= " ORDER  BY " . $config['dwf']['db']['main'] . "." . $config['dwf']['db']['main'] . "_order ASC ";
    //print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
}
