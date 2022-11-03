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
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
      " . $config['cmg']['db']['main'] . "." . $config['cmg']['db']['main'] . "_htmlfilename" . $lang . "2 as htmlfilename2

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

    $sql = "SELECT
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id as id,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey as masterkey,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pic" . $lang . " as pic,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pic2 as pic2,
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_keywords" . $lang . " as keywords


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
    TO_DAYS(" . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_edate)>=TO_DAYS(NOW())  ))
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

    $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC LIMIT ".$limit." ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callWeblink($masterkey = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];
    $sql = "SELECT
      " . $config['wel']['db']  . "." . $config['wel']['db']  . "_id as id,
      " . $config['wel']['db']  . "." . $config['wel']['db']  . "_masterkey as masterkey,
      " . $config['wel']['db']  . "." . $config['wel']['db']  . "_subject" . $lang . " as subject,
      " . $config['wel']['db']  . "." . $config['wel']['db']  . "_title" . $lang . " as title,
      " . $config['wel']['db']  . "." . $config['wel']['db']  . "_url" . $lang . " as url,
      " . $config['wel']['db']  . "." . $config['wel']['db']  . "_pic" . $lang . " as pic,
      " . $config['wel']['db']  . "." . $config['wel']['db']  . "_target as target

      FROM
      " . $config['wel']['db']  . "
      WHERE
      " . $config['wel']['db']  . "." . $config['wel']['db']  . "_masterkey = '" . $masterkey . "' 
      AND " . $config['wel']['db']  . "." . $config['wel']['db']  . "_status != 'Disable'
      AND " . $config['wel']['db'] . "." . $config['wel']['db'] . "_lang".$langOption." = '1' 
      AND " . $config['wel']['db'] . "." . $config['wel']['db'] . "_subject" . $lang . " != '' 
      AND 
      ((" . $config['wel']['db'] . "." . $config['wel']['db'] . "_sdate='0000-00-00 00:00:00' AND
      " . $config['wel']['db'] . "." . $config['wel']['db'] . "_edate='0000-00-00 00:00:00')   OR
      (" . $config['wel']['db'] . "." . $config['wel']['db'] . "_sdate='0000-00-00 00:00:00' AND
      TO_DAYS(" . $config['wel']['db'] . "." . $config['wel']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
      (TO_DAYS(" . $config['wel']['db'] . "." . $config['wel']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
      " . $config['wel']['db'] . "." . $config['wel']['db'] . "_edate='0000-00-00 00:00:00' )  OR
      (TO_DAYS(" . $config['wel']['db'] . "." . $config['wel']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
      TO_DAYS(" . $config['wel']['db'] . "." . $config['wel']['db'] . "_edate)>=TO_DAYS(NOW())  ))
      ";

    $sql .= " ORDER  BY " . $config['wel']['db']  . "." . $config['wel']['db']  . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }


  
  function callcms5pd($masterkey)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id as id,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey as masterkey,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pic$lang as pic,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pic2 as pic2,
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
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_keywords" . $lang . " as keywords


    FROM
    " . $config['cms']['db']['main'] . "
    WHERE
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_lang".$langOption." = '1' AND
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_subject" . $lang . " != '' AND
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pic$lang != '' AND
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

    $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC ";

    // " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_pic" . $lang . " != '' AND

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callCareerDetail($masterkey = null, $limit = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_id as id,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_masterkey as masterkey,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_subject" . $lang . " as subject,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_title" . $lang . " as title,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_description" . $lang . " as description,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_keywords" . $lang . " as keywords,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_metatitle" . $lang . " as metatitle,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_type as type,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_pic as pic,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_htmlfilename" . $lang . " as htmlfilename,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_quantity as quantity,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_address" . $lang . " as address,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_view as view,
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_credate as credate

      FROM
      " . $config['jos']['db'] . "
      WHERE
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_masterkey = '" . $masterkey . "' 
      AND " . $config['jos']['db'] . "." . $config['jos']['db'] . "_status = 'Home' 
      AND " . $config['jos']['db'] . "." . $config['jos']['db'] . "_lang" . $langOption . " = '1' 
      AND " . $config['jos']['db'] . "." . $config['jos']['db'] . "_subject" . $lang . " != '' 
      AND 
      ((" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate='0000-00-00 00:00:00' AND
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate='0000-00-00 00:00:00')   OR
      (" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate='0000-00-00 00:00:00' AND
      TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate)>=TO_DAYS(NOW()) ) OR
      (TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
      " . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate='0000-00-00 00:00:00' )  OR
      (TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_sdate)<=TO_DAYS(NOW()) AND
      TO_DAYS(" . $config['jos']['db'] . "." . $config['jos']['db'] . "_edate)>=TO_DAYS(NOW())  ))
      ";


    $sql .= " ORDER  BY " . $config['jos']['db'] . "." . $config['jos']['db'] . "_order DESC LIMIT ".$limit."";

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
  
}
