<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$callSetWebsite = new settingWebsite();

 class settingWebsite{
  function Call_File($id){
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
 }