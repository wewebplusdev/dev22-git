<?php
$req['masterkey'] = $_REQUEST['masterkey'];
$logs = array(
  'version' => 1,
  'time' => date('Y-m-d H:i:s'),
  'req' => $req,
);
file_put_contents(_DIR . '/front/controller/script/'.$menuActive.'/service/log.txt', json_encode($logs, JSON_PRETTY_PRINT), FILE_APPEND);

## config
$_conf['pathupload'] = _DIR . "/upload";

if (!empty($req['masterkey'])) {
  ## script
  $path_convert = $_conf['pathupload'] . "/" . $req['masterkey'] ."/html";
  $scandir = scandir($path_convert, SCANDIR_SORT_DESCENDING);
  array_pop($scandir); // pop outer file
  array_pop($scandir); // pop outer file


  if (!is_dir($_conf['pathupload'] . "/" . $req['masterkey'] . "/html_new")) {
    mkdir($_conf['pathupload'] . "/" . $req['masterkey'] . "/html_new", 0777);
  }
  if (!is_dir($_conf['pathupload'] . "/" . $req['masterkey'] . "/html_new")) {
    mkdir($_conf['pathupload'] . "/" . $req['masterkey'] . "/html_new", 0777);
  }

  foreach ($scandir as $keyscandir => $valuescandir) {
    $valHtml = $_conf['pathupload'] . "/" . $req['masterkey'] ."/html/" . $valuescandir;

    if(file_exists($valHtml)){
      $fd = @fopen ($valHtml, "r");
      $contents = @fread ($fd, filesize ($valHtml));
      @ fclose ($fd);

      ## replace form configuration
      foreach ($_config['replace'] as $key_replace => $value_replace) {
        $contents = str_replace($key_replace, $value_replace, $contents);
      }

      $contents = txtReplaceHTML($contents);

      if ($contents != "") {
        $filename = $valuescandir;
        $HTMLToolContent = str_replace("\\\"", "\"", $contents);
        $fp = fopen($_conf['pathupload'] . "/" . $req['masterkey'] . "/html_new" . "/" . $filename, "w");
        chmod($_conf['pathupload'] . "/" . $req['masterkey'] . "/html_new" . "/" . $filename, 0777);
        fwrite($fp, $HTMLToolContent);
        fclose($fp);
      }
    }
  }
  echo 'OK.';
}else{
  echo 'ERROR';
}
