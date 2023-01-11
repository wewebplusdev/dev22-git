<?php
$logs = array(
  'version' => 2,
  'time' => date('Y-m-d H:i:s'),
  'req' => 'reaplce all in directory upload',
);
file_put_contents(_DIR . '/front/controller/script/'.$menuActive.'/service/log.txt', json_encode($logs, JSON_PRETTY_PRINT), FILE_APPEND);

## config
$_conf['pathupload'] = _DIR . "/upload";

## script
$path_convert = $_conf['pathupload'];
$scandir = scandir($path_convert, SCANDIR_SORT_DESCENDING);
array_pop($scandir); // pop outer file
array_pop($scandir); // pop outer file

foreach ($scandir as $keyscandir => $valuescandir) {
  $path_dir = $_conf['pathupload'] . "/" . $valuescandir ."/html/";

  if (is_dir($path_dir)) {
    if (!is_dir($_conf['pathupload'] . "/" . $valuescandir . "/html_new")) {
      mkdir($_conf['pathupload'] . "/" . $valuescandir . "/html_new", 0777);
    }
    if (!is_dir($_conf['pathupload'] . "/" . $valuescandir . "/html_new")) {
      mkdir($_conf['pathupload'] . "/" . $valuescandir . "/html_new", 0777);
    }
    $scandir_html = scandir($path_dir, SCANDIR_SORT_DESCENDING);
    array_pop($scandir_html); // pop outer file
    array_pop($scandir_html); // pop outer file
    foreach ($scandir_html as $keyscandir_html => $valuescandir_html) {
      $valHtml = $_conf['pathupload'] . "/" . $valuescandir ."/html/" . $valuescandir_html;

      $fd = @fopen ($valHtml, "r");
      $contents = @fread ($fd, filesize ($valHtml));
      @ fclose ($fd);

      ## replace form configuration
      foreach ($_config['replace'] as $key_replace => $value_replace) {
        $contents = str_replace($key_replace, $value_replace, $contents);
      }

      $contents = txtReplaceHTML($contents);
  	  // echo txtReplaceHTML($contents);
      // print_pre($valHtml);

      if ($contents != "") {
        $filename = $valuescandir;
        $HTMLToolContent = str_replace("\\\"", "\"", $contents);
        $fp = fopen($_conf['pathupload'] . "/" . $valuescandir . "/html_new" . "/" . $filename, "w");
        chmod($_conf['pathupload'] . "/" . $valuescandir . "/html_new" . "/" . $filename, 0777);
        fwrite($fp, $HTMLToolContent);
        fclose($fp);
      }
    }
  }
}

echo 'OK.';
