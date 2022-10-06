<?php
class contactPage
{
  
  function callCMSS($masterkey)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cmss']['db']['main'] . "." . $config['cmss']['db']['main'] . "_id as id,
    " . $config['cmss']['db']['main'] . "." . $config['cmss']['db']['main'] . "_masterkey as masterkey,
    " . $config['cmss']['db']['main'] . "." . $config['cmss']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cmss']['db']['main'] . "." . $config['cmss']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cmss']['db']['main'] . "." . $config['cmss']['db']['main'] . "_lastdate as lastdate,
    " . $config['cmss']['db']['main'] . "." . $config['cmss']['db']['main'] . "_htmlfilename" . $lang . " as htmlfilename,
    " . $config['cmss']['db']['main'] . "." . $config['cmss']['db']['main'] . "_credate as credate

    FROM
    " . $config['cmss']['db']['main'] . "
    WHERE
    " . $config['cmss']['db']['main'] . "." . $config['cmss']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cmss']['db']['main'] . "." . $config['cmss']['db']['main'] . "_status != 'Disable' 
    ";

    $sql .= " ORDER  BY " . $config['cmss']['db']['main'] . "." . $config['cmss']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callContactGroup($masterkey)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_id as id,
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_masterkey as masterkey,
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_subject" . $lang . " as subject,
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_title" . $lang . " as title,
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_lastdate as lastdate,
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_credate as credate

    FROM
    " . $config['cug']['db']['main'] . "
    WHERE
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_masterkey = '" . $masterkey . "' AND
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_status != 'Disable' AND
    " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_subject" . $lang . " != '' 
    ";

    $sql .= " ORDER  BY " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callmailcontact($masterkey, $id = null){
    global $config, $db, $url;
  
    $sql = "SELECT
    " . $config['cue']['db']['main'] . "." . $config['cue']['db']['main'] . "_id,
    " . $config['cue']['db']['main'] . "." . $config['cue']['db']['main'] . "_gid,
    " . $config['cue']['db']['main'] . "." . $config['cue']['db']['main'] . "_email
  FROM
    " . $config['cue']['db']['main'] . "
  WHERE
     " . $config['cue']['db']['main'] . "." . $config['cue']['db']['main'] . "_masterkey = '".$masterkey."'
    ";
    if (!empty($id)) {
      $sql .= " AND " . $config['cue']['db']['main'] . "_gid = '".$id."'";
    }
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callGroup($masterkey = null, $id = null, $table = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[5];

    if(!empty($table)){
      $sql = "SELECT 
      " . $table . "_id as id,
      " . $table . "_masterkey as masterkey,
      " . $table . "_subject".$lang." as subject,
      " . $table . "_title".$lang." as title
      FROM " . $table . "
      ";
      $sql .= " WHERE 
    " . $table . "_status != 'Disable' AND
    " . $table . "_masterkey = '".$masterkey."'
    ";
    if (!empty($id)) {
      $sql .= " AND " . $table . "_id = '".$id."'";
    }
    }else{
      $sql = "SELECT 
    " . $config['cug']['db']['main'] . "_id as id,
    " . $config['cug']['db']['main'] . "_masterkey as masterkey,
    " . $config['cug']['db']['main'] . "_subject".$lang." as subject,
    " . $config['cug']['db']['main'] . "_title".$lang." as title
    FROM " . $config['cug']['db']['main'] . "
    ";
    $sql .= " WHERE 
  " . $config['cug']['db']['main'] . "_status != 'Disable' AND
  " . $config['cug']['db']['main'] . "_masterkey = '".$masterkey."'
  ";
    if (!empty($id)) {
      $sql .= " AND " . $config['cug']['db']['main'] . "_id = '".$id."'";
    }

    $sql .= " ORDER  BY " . $config['cug']['db']['main'] . "." . $config['cug']['db']['main'] . "_order DESC ";
    }

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }


}
