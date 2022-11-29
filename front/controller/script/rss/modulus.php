<?php
class rssPage
{
  
  function chkSyntaxAnd($var){
    return str_replace("&","And",$var);
  }

  function rssNews($masterkey, $gid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id as id,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey as masterkey,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate as credate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pic as pic,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid as gid

    FROM
    " . $config['cms']['db']['main'] . "
    WHERE
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_status != 'Disable' AND
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
      $sql .= "

      AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid = '" . $gid . "'

      ";
    }
    $sql .= "
    ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC LIMIT 0,30
    ";


    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callDataTableNoneDate($table, $masterkey, $id = null, $status = "Enable")
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $table . "." . $table . "_id as id,
    " . $table . "." . $table . "_masterkey as masterkey,
    " . $table . "." . $table . "_subject" . $lang . " as subject,
    " . $table . "." . $table . "_title" . $lang . " as title,
    " . $table . "." . $table . "_credate as credate
  
    FROM
    " . $table . "
    WHERE
    " . $table . "." . $table . "_masterkey = '" . $masterkey . "' AND
    " . $table . "." . $table . "_status = '" . $status . "' AND
    " . $table . "." . $table . "_subject" . $lang . " != ''
    ";

    $sql .= " AND " . $table . "." . $table . "_id = " . $id . "";


    $sql .= " ORDER  BY " . $table . "." . $table . "_order DESC ";

    print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
}
