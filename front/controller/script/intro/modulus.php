<?php
class introPage
{
  function callintro($masterkey = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_id as id,
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_masterkey as masterkey,
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_subject as subject,
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_title as title,
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_pic as pic,
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_credate as credate,
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_typevdo as typevdo,
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_filevdo as filevdo
    FROM
    " . $config['intro']['db']['main'] . "
    WHERE
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_status != 'Disable' AND
    ((" . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    $sql .= " ORDER  BY " . $config['intro']['db']['main'] . "." . $config['intro']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
}
