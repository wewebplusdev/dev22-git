<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$callSetWebsite = new settingWebsite();

class settingWebsite
{
  function Call_File($id)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langFull = $url->pagelang[4];

    $sql = "SELECT 
            " . $config['cmf']['db'] . "." . $config['cmf']['db'] . "_id                AS id,
            " . $config['cmf']['db'] . "." . $config['cmf']['db'] . "_contantid         AS contantid,
            " . $config['cmf']['db'] . "." . $config['cmf']['db'] . "_filename          AS filename,
            " . $config['cmf']['db'] . "." . $config['cmf']['db'] . "_name              AS name,
            " . $config['cmf']['db'] . "." . $config['cmf']['db'] . "_download          AS download,
            " . $config['cmf']['db'] . "." . $config['cmf']['db'] . "_credate          AS credate
    FROM " . $config['cmf']['db'] . "  
    WHERE 1=1 
    AND " . $config['cmf']['db'] . "." . $config['cmf']['db'] . "_contantid = '" . $id . "'
    AND " . $config['cmf']['db'] . "." . $config['cmf']['db'] . "_language = '" . $langFull . "'
    ";

    $sql .= " ORDER BY " . $config['cmf']['db'] . "." . $config['cmf']['db'] . "_id ASC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function Call_File_tbl($id, $table)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langFull = $url->pagelang[4];

    $sql = "SELECT 
            " . $table . "." . $table . "_id                AS id,
            " . $table . "." . $table . "_contantid         AS contantid,
            " . $table . "." . $table . "_filename          AS filename,
            " . $table . "." . $table . "_name              AS name,
            " . $table . "." . $table . "_download          AS download,
            " . $table . "." . $table . "_credate          AS credate
    FROM " . $table . "  
    WHERE 1=1 
    AND " . $table . "." . $table . "_contantid = '" . $id . "'
    AND " . $table . "." . $table . "_language = '" . $langFull . "'
    ";

    $sql .= " ORDER BY " . $table . "." . $table . "_id ASC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function Call_Album($id, $table)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langFull = $url->pagelang[4];

    $sql = "SELECT 
            " . $table . "." . $table . "_id                AS id,
            " . $table . "." . $table . "_contantid         AS contantid,
            " . $table . "." . $table . "_filename          AS filename,
            " . $table . "." . $table . "_name              AS name,
            " . $table . "." . $table . "_download          AS download
    FROM " . $table . "  
    WHERE 1=1 AND
    " . $table . "." . $table . "_contantid = '" . $id . "'
    AND " . $table . "." . $table . "_language = '" . $langFull . "'
    ";

    $sql .= " ORDER BY " . $table . "." . $table . "_id ASC ";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
  
  function callProvince_main()
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['province']['db'] . "." . $config['province']['db'] . "_id as id,
    " . $config['province']['db'] . "." . $config['province']['db'] . "_code as code,
    " . $config['province']['db'] . "." . $config['province']['db'] . "_name".$lang." as name,
    " . $config['province']['db'] . "." . $config['province']['db'] . "_geography as geography
    FROM
        " . $config['province']['db'] . "
    ";

    $sql .= "
    ORDER BY " . $config['province']['db'] . "_name ASC";
    $result = $db->execute($sql);
    return $result;
  }

  function callDistrict_main($pid = 0)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
    " . $config['amphur']['db'] . "." . $config['amphur']['db'] . "_id as id,
    " . $config['amphur']['db'] . "." . $config['amphur']['db'] . "_code as code,
    " . $config['amphur']['db'] . "." . $config['amphur']['db'] . "_name".$lang." as name,
    " . $config['amphur']['db'] . "." . $config['amphur']['db'] . "_province_id as province_id
    FROM
    " . $config['amphur']['db'] . "
    ";

    if (!empty($pid)) {
      $sql .= "
        WHERE " . $config['amphur']['db'] . "." . $config['amphur']['db'] . "_province_id = $pid  AND  " . $config['amphur']['db'] . "." . $config['amphur']['db'] . "_nameen NOT LIKE '%*%'";
    } else {
      $sql .= "
        WHERE " . $config['amphur']['db'] . "." . $config['amphur']['db'] . "_province_id = 0  AND  " . $config['amphur']['db'] . "." . $config['amphur']['db'] . "_nameen NOT LIKE '%*%'";
    }
    $sql .= "
    ORDER BY " . $config['amphur']['db'] . "_nameen ASC";
    // print_pre();
    $result = $db->execute($sql);
    return $result;
  }

  function callSubDistrict_main($aid)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
  " . $config['district']['db'] . "." . $config['district']['db'] . "_id as id,
  " . $config['district']['db'] . "." . $config['district']['db'] . "_zip_code as zip_code,
  " . $config['district']['db'] . "." . $config['district']['db'] . "_name".$lang." as name,
  " . $config['district']['db'] . "." . $config['district']['db'] . "_amphure_id as amphure_id
  FROM
  " . $config['district']['db'] . "
  ";

    $sql .= "
  WHERE 
  " . $config['district']['db'] . "." . $config['district']['db'] . "_amphure_id = $aid AND  " . $config['district']['db'] . "." . $config['district']['db'] . "_nameen NOT LIKE '%*%'
  ";

    $sql .= "
  ORDER BY " . $config['district']['db'] . "_nameen ASC";
    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }

  function callPostcode_main($id)
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];

    $sql = "SELECT
  " . $config['district']['db'] . "." . $config['district']['db'] . "_id as id,
  " . $config['district']['db'] . "." . $config['district']['db'] . "_zip_code as zip_code
  FROM
  " . $config['district']['db'] . "
  ";
    $sql .= "
  WHERE 
  " . $config['district']['db'] . "." . $config['district']['db'] . "_id = $id
  ";

    $sql .= " ORDER BY " . $config['district']['db'] . "_zip_code ASC";
    $result = $db->execute($sql);
    return $result;
  }
}
