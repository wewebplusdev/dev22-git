<?php
class homePage
{
  function callTopGraphic($masterkey = null)
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
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_title".$lang." as title,
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

   $sql .= $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_masterkey = '$masterkey' AND
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

    $sql .= " ORDER  BY " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_order DESC ";

    $result = $db->execute($sql);
    return $result;
  }

  function callGroupProduct($masterkey, $id = null, $type = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id as id,
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_masterkey as masterkey,
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_subject" . $lang . " as subject,
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_title" . $lang . " as title,
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_description" . $lang . " as description,
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_keywords" . $lang . " as keywords,
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_metatitle" . $lang . " as metatitle,
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_type as type,
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_pic" . $lang . " as pic,
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename

      FROM
      " . $config['cmg']['db']['main'] . "
      WHERE
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_masterkey = '" . $masterkey . "' 
      AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_status != 'Disable' 
      AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_subject" . $lang . " != '' 
      
      ";

    if (!empty($id)) {
      $sql .= " AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id = '" . $id . "'";
    }
    
    // if (!empty($lang)) {
    //   $sql .= " AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_pic$lang != ''";
    // }

    if (!empty($type)) {
      $sql .= " AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_type = '" . $type . "'";
    }

    $sql .= " ORDER  BY " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callcms($masterkey, $id = null, $gid = null, $status = 'Home', $limit = 15)
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate as credate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_typeFile" . $lang . " as typeFile,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_urlFile" . $lang . " as urlFile,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_description" . $lang . " as description,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_keywords" . $lang . " as keywords,


    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id as gid,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_subject" . $lang . " as subjectg,

    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname


    FROM
    " . $config['cms']['db']['main'] . "
    INNER JOIN 
    " . $config['cmg']['db']['main'] . "
    ON
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id = " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid
    INNER JOIN 
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_masterkey
    WHERE
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

    AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_status != 'Disable'
    AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_subject" . $lang . " != ''
    ";

    if (!empty($status)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_status = '" . $status . "' ";
    }

    if (!empty($id)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id = '" . $id . "' ";
    }

    if (!empty($gid)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid = '" . $gid . "' ";
    }

    $sql .= " ORDER  BY " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_order DESC," . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order LIMIT ".$limit." ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callPopup($masterkey){
    global $config, $db, $url;
    $lang = $url->pagelang[3];
  
    $sql = "SELECT
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_id as id,
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_masterkey as masterkey,
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_subject" . $lang . " as subject,
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_title" . $lang . " as title,
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_file" . $lang . " as file,
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_url as url,
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_target as target
  
    FROM
    " . $config['popup']['db'] . "
    WHERE
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_masterkey = '".$masterkey."' and
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_status = 'Enable' and
    ((" . $config['popup']['db'] . "." . $config['popup']['db'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['popup']['db'] . "." . $config['popup']['db'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['popup']['db'] . "." . $config['popup']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['popup']['db'] . "." . $config['popup']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['popup']['db'] . "." . $config['popup']['db'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['popup']['db'] . "." . $config['popup']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['popup']['db'] . "." . $config['popup']['db'] . "_edate)>=TO_DAYS(NOW())  ))
  
    ";
    $sql .= " ORDER  BY " . $config['popup']['db'] . "." . $config['popup']['db'] . "_order DESC ";

  // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callSection($masterkey, $order = null, $theme = null){
    global $config, $db, $url, $mod_array_conf;
    $lang = $url->pagelang[3];
  
    $sql = "SELECT
    " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_id as id,
    " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_masterkey as masterkey,
    " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_namethai as subject
  
    FROM
    " . $config['mnu']['db'] . "
    WHERE
    " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_status = 'Enable'
  
    ";

    $sql = $sql . "  AND (" . $config['mnu']['db'] . "_masterkey LIKE '%" . $mod_array_conf[$theme]['key'] . "' ";

    if (count($mod_array_conf[$theme]['component']) > 0) {
        $sql = $sql . "  OR " . $config['mnu']['db'] . "_masterkey IN (" . implode(",", array_values($mod_array_conf[$theme]['component'])) . ") ";
    }

    $sql = $sql . " ) ";

    $sql .= " AND " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_masterkey != '".$mod_array_conf[$theme]['sortmnu']."'";

    if (!empty($order)) {
      $sql .= " ORDER  BY " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "".$order." DESC ";
    }else{
      $sql .= " ORDER  BY " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_order DESC ";
    }

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

}
