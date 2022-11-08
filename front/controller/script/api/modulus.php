<?php
class apiPage{
  ################# Start Function Chat Facebook ##################
  function callChatFB()
  {
    global $config, $db, $url;
    $lang = $url->pagelang[3];
    $langOption = $url->pagelang[2];

    $sql = "SELECT
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_id as id,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey as masterkey,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_title as title,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_sdate as sdate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_edate as edate,
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_status as status

    FROM
    " . $config['cms']['db']['main'] . "
    WHERE
    " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_masterkey = '" . $config['lcf_s']['main']['masterkey'] . "'
    ";

    $sql .= " ORDER  BY " . $config['cms']['db']['main'] . "." . $config['cms']['db']['main'] . "_order DESC ";

    // print_pre($sql);
    $result = $db->execute($sql);
    return $result;
  }
  ################# End Function Chat Facebook ##################

}

