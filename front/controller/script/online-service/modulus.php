<?php
class onlineservicePage
{
  
  function callWel($masterkey, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_id as id,
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_masterkey as masterkey,
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_title" . $lang . " as title,
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_desc" . $lang . " as descript,
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_pic" . $lang . " as pic,
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_lastdate as lastdate,
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_url as url,
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_target as target,
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_credate as credate,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname

    FROM
    " . $config['wel']['db']['main'] . "
    INNER JOIN 
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_masterkey
    WHERE
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_status != 'Disable' AND
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_lang".$langOption." = '1' AND
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_subject" . $lang . " != '' AND
    ((" . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
}
