<?php
class searchPage{

  function callSearchAll($page = 1, $limit = 10, $order = "DESC", $keyword = null, $tid = null, $Sdate = null, $Edate = null, $masterkey = null){
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_id as id,
    " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_contantid as contantid,
    " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_masterkey as masterkey,
    " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_subject".$lang." as subject,
    " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_title".$lang." as title,
    " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_url as url,
    " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_tid as tid,

    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_id as mnuid,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_namethai as mnusubject,
    " . $config['sy_mnu']['db']['main'] . "." . $config['sy_mnu']['db']['main'] . "_masterkey as mnumasterkey


    FROM
    " . $config['sea']['db']['main'];
    $sql .= "
    INNER JOIN
    " . $config['sy_mnu']['db']['main'] . "
    ON
    " . $config['sy_mnu']['db']['main'] . "_masterkey = " . $config['sea']['db']['main'] . "_masterkey
    ";
    if (!empty($tid)) {
      $sql .= " LEFT JOIN ".$config['cms']['db']['main']." ON   " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_contantid = " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id";
    }
    $sql .= " WHERE
    " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_status != 'Disable' AND
    " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_subject".$lang." != ''
    ";

    if (!empty($keyword)) {
      $sql .= " AND (
        " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_subject".$lang." LIKE '%".$keyword."%' OR
        " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_title".$lang." LIKE '%".$keyword."%' OR
        " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_keyword".$lang." LIKE '%".$keyword."%'
        )";
    }

    if (!empty($tid)) {
      $sql .= $tid;
    }

    if (!empty($Sdate) && !empty($Edate)) {
      $sql .= " AND (" . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_sdate 
      BETWEEN '" . $Sdate . " 00:00:00' AND '" . $Edate . " 23:59:59' 
      )
      ";
    }elseif(!empty($Sdate) && empty($Edate)){
      $sql .= " AND (" . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_sdate >= '" . $Sdate . " 00:00:00' )
      ";
    }elseif(empty($Sdate) && !empty($Edate)){
      $sql .= " AND (" . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_edate <= '" . $Edate . " 00:00:00' )
      ";
    }

    if (!empty($masterkey)) {
      $sql .= " AND " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_masterkey LIKE '%".$masterkey."%' ";
    }
  
    $sql .= " ORDER  BY " . $config['sea']['db']['main'] . "." . $config['sea']['db']['main'] . "_id ".$order." ";
    // print_pre($sql);
    $result = $db->pageexecute($sql, $limit, $page);
    return $result;

  }

  function checkUrl($masterkey, $id){
    global $array_path, $linklang;

    $newlinks = array();
    $getlinks = $array_path[$masterkey];
    if (!empty($getlinks)) {
      $newlinks['path'] = _Domain ."/". $getlinks ."/". encodeStr($id);
      $newlinks['url'] = $linklang ."/". $getlinks ."/". encodeStr($id);
    }else{
      $newlinks['path'] = "#";
      $newlinks['url'] ="javascript:void(0);";
    }
    return $newlinks;

  }

  function call_hashtag($masterkey = null, $id = null, $keywords = null)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
  

    $sql = "SELECT
    " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_id as id,
    " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_masterkey as masterkey,
    " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_subject".$lang." as subject,
    " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_title".$lang." as title,
    " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_credate as credate
  
    FROM
    " . $config['tag']['db']['main'] . "
    WHERE
    " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_status = 'Enable' AND
    " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_subject".$lang." != '' 
    ";

    if (!empty($id)) {
      $sql .= " AND " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_id in (" . implode(" , ", $id) . ")";
    }

    if (!empty($keywords)) {
      $sql .= " AND (
        " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_subject".$lang." LIKE '%".$keywords."%' OR
        " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_title".$lang." LIKE '%".$keywords."%'
        )";
    }
  
    $sql .= " ORDER  BY " . $config['tag']['db']['main'] . "." . $config['tag']['db']['main'] . "_order DESC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callSystemMenu($arr)
  {
    global $config, $db, $url, $array_masterkey_menu;
    $lang = $url->pagelang[5];
  

    $sql = "SELECT
    " . $config['mnu']['db']['main'] . "." . $config['mnu']['db']['main'] . "_id as id,
    " . $config['mnu']['db']['main'] . "." . $config['mnu']['db']['main'] . "_masterkey as masterkey,
    " . $config['mnu']['db']['main'] . "." . $config['mnu']['db']['main'] . "_name".$lang." as subject,
    " . $config['mnu']['db']['main'] . "." . $config['mnu']['db']['main'] . "_credate as credate
  
    FROM
    " . $config['mnu']['db']['main'] . "
    WHERE
    " . $config['mnu']['db']['main'] . "." . $config['mnu']['db']['main'] . "_status = 'Enable' 
    ";

    if (!empty($arr)) {
      $sql .= " AND " . $config['mnu']['db']['main'] . "." . $config['mnu']['db']['main'] . "_namethai in (" . implode(" , ", $arr) . ")";
    }

    $sql .= " AND " . $config['mnu']['db']['main'] . "." . $config['mnu']['db']['main'] . "_masterkey not in (" . implode(" , ", $array_masterkey_menu) . ")";

  
    $sql .= " ORDER  BY " . $config['mnu']['db']['main'] . "." . $config['mnu']['db']['main'] . "_order DESC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callText($keywords)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[5];
  
    $sql = "SELECT
    " . $config['seatxt']['db']['main'] . "." . $config['seatxt']['db']['main'] . "_id as id,
    " . $config['seatxt']['db']['main'] . "." . $config['seatxt']['db']['main'] . "_count as counter
  
    FROM
    " . $config['seatxt']['db']['main'] . "
    WHERE 
    1=1
    ";

    if (!empty($keywords)) {
      $sql .= " AND " . $config['seatxt']['db']['main'] . "." . $config['seatxt']['db']['main'] . "_keyword = '" . $keywords . "' ";
    }
  
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function insertText($keywords, $type)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[4];

    $insert = array();
		$insert[$config['seatxt']['db']['main']."_language"] = "'".$lang."'";
		$insert[$config['seatxt']['db']['main']."_masterkey"] = "'".$config['sch_logs']['masterkey']."'";
		$insert[$config['seatxt']['db']['main']."_keyword"] = "'".$keywords."'";
		$insert[$config['seatxt']['db']['main']."_type"] = "'".$type."'";
		$insert[$config['seatxt']['db']['main']."_count"] = "'1'";
		$insert[$config['seatxt']['db']['main']."_credate"] = "NOW()";
		$sql_sch="INSERT INTO ".$config['seatxt']['db']['main']."(".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";
    // print_pre($sql_sch);
    $result = $db->execute($sql_sch);
    return $result;
  }

  function updateText($id, $counter)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[4];

		$update = array();
		$update[]=$config['seatxt']['db']['main']."_count='".$counter."'";

		$sql_sch="UPDATE ".$config['seatxt']['db']['main']." SET ".implode(",",$update)." WHERE ".$config['seatxt']['db']['main']."_id='".$id."' ";
    $result = $db->execute($sql_sch);
    return $result;
  }

  function insertLogs($gid, $getip)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[4];

    $insert = array();
		$insert[$config['seatxts']['db']['main']."_language"] = "'".$lang."'";
		$insert[$config['seatxts']['db']['main']."_masterkey"] = "'".$config['sch_logs']['masterkey']."'";
		$insert[$config['seatxts']['db']['main']."_ip"] = "'".$getip."'";
		$insert[$config['seatxts']['db']['main']."_gid"] = "'".$gid."'";
		$insert[$config['seatxts']['db']['main']."_session"] = "'".$_COOKIE['PHPSESSID']."'";
		$insert[$config['seatxts']['db']['main']."_credate"] = "NOW()";
		$sql_sch="INSERT INTO ".$config['seatxts']['db']['main']."(".implode(",",array_keys($insert)).") VALUES (".implode(",",array_values($insert)).")";
    // print_pre($sql_sch);
    $result = $db->execute($sql_sch);
    return $result;
  }
  
}

