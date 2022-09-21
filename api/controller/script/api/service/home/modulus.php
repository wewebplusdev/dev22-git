<?php
class homePage
{

  function callTgp()
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_id as id,
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_masterkey as masterkey,
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_subject" . $lang . " as subject,
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_pic" . $lang . " as pic,
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_credate as credate,
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_url" . $lang . " as url,
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_title as title,
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_target as target
    FROM
    " . $config['tgp']['db'] . "
    WHERE 
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_masterkey = '" . $config['tgp']['masterkey'] . "' AND
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_lang" . $langOption . " = '1' AND
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_status = 'Enable' AND
    ((" . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    $sql .= " ORDER  BY " . $config['tgp']['db'] . "." . $config['tgp']['db'] . "_order DESC ";
    $result = $db->execute($sql);
    return $result;
  }
}
