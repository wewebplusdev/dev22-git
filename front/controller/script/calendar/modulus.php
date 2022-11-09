<?php
class calendarPage{
  function callCalendarList($masterkey, $myStartDateOfMonth, $myEndDateOfMonth){
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_id as id,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_masterkey as masterkey,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_subject".$lang." as subject,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_sdate as sdate,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_edate as edate,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_typeSal as typeSal,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_typeDateTo as typeDateTo,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_typeTimeTo as typeTimeTo,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_fromHH as fromHH,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_fromMM as fromMM,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_toHH as toHH,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_toMM as toMM,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_gid as gid,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_pic as pic
    FROM
    " . $config['cas']['db']['main'] . "
    WHERE
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_masterkey = '".$masterkey."' AND
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_status != 'Disable' AND
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_subject".$lang." != ''
    ";

    if( $_POST['myCalendarDatePer']!=""){
      $sql .= " AND  ( ";
      $sql .= " ( ".$config['cas']['db']['main']."_sdate>='".$_POST['myCalendarDatePer']."' AND ".$config['cas']['db']['main']."_sdate<='".$_POST['myCalendarDatePer']."' ) OR ";
      $sql .= " ( ".$config['cas']['db']['main']."_edate>='".$_POST['myCalendarDatePer']."' AND ".$config['cas']['db']['main']."_edate<='".$_POST['myCalendarDatePer']."' ) OR ";
      $sql .= " ( ".$config['cas']['db']['main']."_sdate<='".$_POST['myCalendarDatePer']."' AND ".$config['cas']['db']['main']."_edate>='".$_POST['myCalendarDatePer']."' ) ";
      $sql .= " )  ";
    }else{
      $sql .= " AND  ( ";
      $sql .= " ( ".$config['cas']['db']['main']."_sdate>='".$myStartDateOfMonth."' AND ".$config['cas']['db']['main']."_sdate<='".$myEndDateOfMonth."' ) OR ";
      $sql .= " ( ".$config['cas']['db']['main']."_edate>='".$myStartDateOfMonth."' AND ".$config['cas']['db']['main']."_edate<='".$myEndDateOfMonth."' ) OR ";
      $sql .= " ( ".$config['cas']['db']['main']."_sdate<='".$myStartDateOfMonth."' AND ".$config['cas']['db']['main']."_edate>='".$myEndDateOfMonth."' ) ";
      $sql .= " )  ";
    }
  
    $sql .= " ORDER  BY " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_order DESC ";
    $result = $db->execute($sql);
    return $result;
  }

  function CallActivityData($myStart, $myEnd, $page, $gid = null){
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT * 
    FROM
    " . $config['cas']['db']['main'] . "
    WHERE
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_masterkey = '".$config['cl']['masterkey']."' AND
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_status != 'Disable' AND
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_subject".$lang." != ''
    ";
    if( $_POST['myCalendarDatePer']!="" && $page == 'day'){
      $sql .= " AND  ( ";
      $sql .= " ( ".$config['cas']['db']['main']."_sdate>='".$_POST['myCalendarDatePer']."' AND ".$config['cas']['db']['main']."_sdate<='".$_POST['myCalendarDatePer']."' ) OR ";
      $sql .= " ( ".$config['cas']['db']['main']."_edate>='".$_POST['myCalendarDatePer']."' AND ".$config['cas']['db']['main']."_edate<='".$_POST['myCalendarDatePer']."' ) OR ";
      $sql .= " ( ".$config['cas']['db']['main']."_sdate<='".$_POST['myCalendarDatePer']."' AND ".$config['cas']['db']['main']."_edate>='".$_POST['myCalendarDatePer']."' ) ";
      $sql .= " )  ";
    }else{
      $sql .= " AND  ( ";
      $sql .= " ( ".$config['cas']['db']['main']."_sdate>='".$myStart."' AND ".$config['cas']['db']['main']."_sdate<='".$myEnd."' ) OR ";
      $sql .= " ( ".$config['cas']['db']['main']."_edate>='".$myStart."' AND ".$config['cas']['db']['main']."_edate<='".$myEnd."' ) OR ";
      $sql .= " ( ".$config['cas']['db']['main']."_sdate<='".$myStart."' AND ".$config['cas']['db']['main']."_edate>='".$myEnd."' ) ";
      $sql .= " )  ";
    }

    if (!empty($gid)) {
      $sql .= " AND " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_gid = '" . $gid . "' ";
    }

    $sql .= " ORDER  BY " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_sdate ASC ";
    $result = $db->execute($sql);
    return $result;
  }

  function callCalendarDetail($masterkey, $id = null){
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_id as id,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_masterkey as masterkey,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_subject".$lang." as subject,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_title".$lang." as title,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_sdate as sdate,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_edate as edate,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_typeSal as typeSal,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_typeDateTo as typeDateTo,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_typeTimeTo as typeTimeTo,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_fromHH as fromHH,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_fromMM as fromMM,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_toHH as toHH,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_toMM as toMM,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_gid as gid,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_pic as pic,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_dwswitch as dwswitch,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_type as type,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_url as url,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_filevdo as filevdo,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_view as view,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_tid as tid,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_credate as credate,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_htmlfilename".$lang." as htmlfilename,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_description".$lang." as description,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_keywords".$lang." as keywords,
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_metatitle".$lang." as metatitle
    FROM
    " . $config['cas']['db']['main'] . "
    WHERE
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_masterkey = '".$masterkey."' AND
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_status != 'Disable' AND
    " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_subject".$lang." != ''
    ";
    if (!empty($id)) {
      $sql .= " AND " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_id = '".$id."'";
    }
  
    $sql .= " ORDER  BY " . $config['cas']['db']['main'] . "." . $config['cas']['db']['main'] . "_order DESC ";
    $result = $db->execute($sql);
    return $result;
  }

  function callCalendarGroup($masterkey, $id = null, $lsit = null){
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['cag']['db']['main'] . "." . $config['cag']['db']['main'] . "_id as id,
    " . $config['cag']['db']['main'] . "." . $config['cag']['db']['main'] . "_masterkey as masterkey,
    " . $config['cag']['db']['main'] . "." . $config['cag']['db']['main'] . "_subject".$lang." as subject,
    " . $config['cag']['db']['main'] . "." . $config['cag']['db']['main'] . "_title".$lang." as title,
    " . $config['cag']['db']['main'] . "." . $config['cag']['db']['main'] . "_color as color
    FROM
    " . $config['cag']['db']['main'] . "
    WHERE
    " . $config['cag']['db']['main'] . "." . $config['cag']['db']['main'] . "_masterkey = '".$masterkey."' AND
    " . $config['cag']['db']['main'] . "." . $config['cag']['db']['main'] . "_status != 'Disable' AND
    " . $config['cag']['db']['main'] . "." . $config['cag']['db']['main'] . "_subject".$lang." != ''
    ";
    if (!empty($id) || $lsit == "list") {
      $sql .= " AND " . $config['cag']['db']['main'] . "." . $config['cag']['db']['main'] . "_id = '".$id."'";
    }
  
    $sql .= " ORDER  BY " . $config['cag']['db']['main'] . "." . $config['cag']['db']['main'] . "_order DESC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function CallMonthPage($myDate){
    global $date_array, $url;
    $newDate = explode('-', $myDate);
    return $date_array[$url->pagelang[2]][$newDate[1]];
  }

  function showDateCalendarDay($myDate) {
    $myDateArray = explode(" ", $myDate);
    $myDateArray = explode("-", $myDateArray[0]);
    return $myDateArray[2];
  }
}

