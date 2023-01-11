<?php
class previewPage
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
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_htmlfilename".$lang." as htmlfilename,
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
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
  function callAncr($masterkey = null)
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
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_htmlfilename".$lang." as htmlfilename,
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_target as target
  
  
    FROM
    " . $config['tgp']['db']['main'] . "
    WHERE ";
    
   
if($lang){
  $sql .= $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_subject".$lang." != '' AND ";
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
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callTopGraphic2($masterkey = null)
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
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_htmlfilename".$lang." as htmlfilename,
    " . $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_target as target
  
  
    FROM
    " . $config['tgp']['db']['main'] . "
    WHERE ";
    
   
if($lang || $langOption){
  $sql .= $config['tgp']['db']['main'] . "." . $config['tgp']['db']['main'] . "_subject".$lang." != '' AND ";
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_url" . $lang . " as url,
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

    $sql .= " ORDER  BY " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_order DESC," . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC LIMIT ".$limit." ";

    //  print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callcmsTheme2($masterkey, $id = null, $status, $limit=15)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id as id,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey as masterkey,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_subjecten" . $lang . " as subjecten,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pic" . $lang . " as pic,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_lastdate as lastdate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_url" . $lang . " as url,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_target as target,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid as gid,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_view as view,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate as credate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_typeFile" . $lang . " as typeFile,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_urlFile" . $lang . " as urlFile,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_description" . $lang . " as description,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_keywords" . $lang . " as keyword

    FROM
    " . $config['cms']['db']['main'] . "
   
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
    TO_DAYS(" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))";

    if (!empty($status)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_status = '" . $status . "' ";
    }

    if (!empty($id)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id = '" . $id . "' ";
    }

    if (!empty($gid)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid = '" . $gid . "' ";
    }

    $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC LIMIT ".$limit." ";

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

  function callSection($core_theme_web, $order = null, $theme = null){
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
    AND " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_status_theme = 'Enable'
  
    ";

    if (count($mod_array_conf[$theme]['component']) > 0) {
        $sql = $sql . "  OR " . $config['mnu']['db'] . "_masterkey IN (" . implode(",", array_values($mod_array_conf[$theme]['component'])) . ") ";
    }

    $sql .= " AND " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_tid REGEXP '.*;s:[0-9]+:\"" . $core_theme_web . "\".*'";



    if (!empty($order)) {
      $sql .= " ORDER  BY " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "".$order." ASC ";
    }else{
      $sql .= " ORDER  BY " . $config['mnu']['db'] . "." . $config['mnu']['db'] . "_order ASC ";
    }

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callCMSS($masterkey, $id = null, $gid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_id as id,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_masterkey as masterkey,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_lastdate as lastdate,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_view as view,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_credate as credate,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_description" . $lang . " as description,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_keywords" . $lang . " as keywords,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname

    FROM
    " . $config['cmsss']['db']['main'] . "
    INNER JOIN 
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_masterkey
    WHERE
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_status != 'Disable' AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_subject" . $lang . " != '' AND
    ((" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    if (!empty($gid)) {
      $sql .= " AND " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_gid = '" . $gid . "' ";
    }

    if (!empty($id)) {
      $sql .= " AND " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callcmsg($masterkey)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_id as id,
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_masterkey as masterkey,
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_title" . $lang . " as title

    FROM
    " . $config['cmsg']['db']['main'] . "
    WHERE
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_status != 'Disable' AND
    " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_subject" . $lang . " != '' 
    ";

    // $sql .= " AND " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_isstatic != '1' ";

    $sql .= " ORDER  BY " . $config['cmsg']['db']['main'] . "." . $config['cmsg']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
  
  function callcmg_thmem_1($masterkey, $status = 'Enable')
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_id as id,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_masterkey as masterkey,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_title" . $lang . " as title

    FROM
    " . $config['cmg']['db']['main'] . "
    WHERE
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_status != 'Disable' AND
    " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_subject" . $lang . " != '' 
    ";

    $sql .= " AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_isstatic != '1' ";

    if (!empty($status)) {
      $sql .= " AND " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_status = '" . $status . "' ";
    }

    $sql .= " ORDER  BY " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
  function callcms_thmem_1($masterkey, $gid = null, $limit = 10, $status = 'Home',$core_theme_web = null)
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_url" . $lang . " as url,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_target as target,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid as gid,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_view as view,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_typec as typec,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate as credate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_description" . $lang . " as description,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_keywords" . $lang . " as keywords,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_tid as tid,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_head" . $lang . " as head,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_filevdo" . $lang . " as filevdo,

    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname

    FROM
    " . $config['cms']['db']['main'] . "
    INNER JOIN
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey
    WHERE
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_status = '".$status."' AND
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
    ";

    if (!empty($core_theme_web)){
      $sql .= " AND " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_tid REGEXP '.*;s:[0-9]+:\"" . $core_theme_web . "\".*'";
    }

    if (!empty($gid)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid = '" . $gid . "' ";
    }

    $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC LIMIT ".$limit." ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callcmsBySid($masterkey, $sid = null, $limit = 10)
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_url" . $lang . " as url,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_target as target,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_gid as gid,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_view as view,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_typec as typec,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_credate as credate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_description" . $lang . " as description,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_keywords" . $lang . " as keywords,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_tid as tid,

    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname

    FROM
    " . $config['cms']['db']['main'] . "
    INNER JOIN
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey
    WHERE
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_status != 'Disable' AND
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
    ";

    if (!empty($sid)) {
      $sql .= " AND " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_sid = '" . $sid . "' ";
    }

    $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC LIMIT ".$limit." ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

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

    $sql .= " ORDER  BY " . $config['wel']['db']['main'] . "." . $config['wel']['db']['main'] . "_order ASC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callCMSS_2($masterkey, $id = null, $gid = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $langFull = strtolower($url->pagelang[4]);

    $sql = "SELECT
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_id as id,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_masterkey as masterkey,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_lastdate as lastdate,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_view as view,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_credate as credate,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_metatitle" . $lang . " as metatitle,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_description" . $lang . " as description,
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_keywords" . $lang . " as keywords,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as menuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_name".$langFull." as menuname

    FROM
    " . $config['cmsss']['db']['main'] . "
    INNER JOIN 
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_masterkey
    WHERE
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_status != 'Disable' AND
    ((" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate='0000-00-00 00:00:00')   OR
    (" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(" . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
    ";

    if (!empty($gid)) {
      $sql .= " AND " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_gid = '" . $gid . "' ";
    }

    if (!empty($id)) {
      $sql .= " AND " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_id = '" . $id . "' ";
    }

    $sql .= " ORDER  BY " . $config['cmsss']['db']['main'] . "." . $config['cmsss']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

}
