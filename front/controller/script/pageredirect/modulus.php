<?php
class pageredirectPage
{
  function callTopGraphic($masterkey = null, $id = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_id as id,
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_masterkey as masterkey,
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_subject".$lang." as subject,
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_pic".$lang." as pic,
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_credate as credate,
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_url".$lang." as url,
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_title as title,
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_target as target
  
  
    FROM
    " . $config['tgp']['db']['main'] . "
    WHERE ";
    
   
if($lang){
  $sql .= $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_subject".$lang." != '' AND ";
  $sql .= $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_pic".$lang." != '' AND ";
}else{
  $sql .= $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_subject != '' AND ";
}

   $sql .= $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_masterkey = '".$masterkey."' AND
   " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_lang".$langOption." = '1' AND
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_status = 'Enable' AND
    ((" . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
  
    ";

    if (!empty($id)) {
      $sql .= " AND  " .$config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_id = '".$id."'";
    }

    $sql .= " ORDER  BY " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_order DESC ";

    $result = $db->execute($sql);
    return $result;
  }
}
