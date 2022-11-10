<?php
class embedPage
{
  
  function callCMSInfo($id = 0)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id as id,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey as masterkey,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pic" . $lang . " as pic,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_lastdate as lastdate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_url as url,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid as gid,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_view as view,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_filevdo as filevdo,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate as credate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_description" . $lang . " as description,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_keywords" . $lang . " as keywords
    FROM
    " . $config['cms']['db']['main']."
    WHERE 1 = 1 ";
    if (!empty($id)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id = '" . $id . "' ";
    }
    //print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callCMSAlbum($id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[4];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['cma']['db']['main'] . "." . $config['cma']['db']['main'] . "_id as id,
    " . $config['cma']['db']['main'] . "." . $config['cma']['db']['main'] . "_filename as filename,
    " . $config['cma']['db']['main'] . "." . $config['cma']['db']['main'] . "_name as name
    FROM
    " . $config['cma']['db']['main'] . "
    WHERE 1=1 ";
      $sql .= " AND " . $config['cma']['db']['main'] . "." . $config['cma']['db']['main'] . "_language= '" . $lang . "' ";
    if (!empty($id)) {
      $sql .= " AND " . $config['cma']['db']['main'] . "." . $config['cma']['db']['main'] . "_contantid= '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['cma']['db']['main'] . "." . $config['cma']['db']['main'] . "_id ASC ";
    $result = $db->execute($sql);
    return $result;
  }


}
