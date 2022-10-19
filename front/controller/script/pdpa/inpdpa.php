<?php

if ($_REQUEST['statusAccept'] == 'Accept') {
  $baseSite = $_POST['base'];
  $ac_token = $_COOKIE['PHPSESSID'];
  $obj_accept = insertLogAccept($baseSite, getip(), $ip_router, $ac_token);
  die($obj_accept);
} else {
  $output = array(
    'status'    => false,
    'statuscode'    => 400,
    'data'    => "",
    'msg'       => 'NOT POST DATA',
  );
  die(json_encode($output));
}