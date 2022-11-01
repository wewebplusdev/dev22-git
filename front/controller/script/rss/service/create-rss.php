<?php
header("Content-Type: application/xml; charset=utf-8");
$copyright = str_replace("http://", "", _URL); //http://www.bualuang.co.th => www.bualuang.co.th
$copyright = str_replace("www.", "", _URL); //www.bualuang.co.th => bualuang.co.th
$copyright = "&amp;copy; " . date("Y") . " " . $copyright;
$data = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n";
$data .= "<rss version=\"2.0\">\r\n";
$data .= "<channel>\r\n";

$data .= "<title>" . $TitleRSS . "</title>\r\n";
$data .= "<description>" . $settingWeb['subject'] . "</description>\r\n";
$data .= "<link>" . $urlRss . "</link>\r\n";
$data .= "<lastBuildDate>" . date("r") . "</lastBuildDate>\r\n";
$data .= "<copyright>" . $copyright . "</copyright>\r\n";
$data2 = "";
foreach ($callNews as $value) {
  /* ###### Start Img ##############*/
  $valImgNewsDb = fileinclude($value['pic'], 'pictures', $value['masterkey'], 'link');
  $url = $valImgNewsDb;
  $urlrelative = $valImgNewsDb;
  $length = filesize($urlrelative);
  $mime = @getimagesize($urlrelative);
  $type = $mime['mime'];
  /* ###### End Img ##############*/

  $link = $linkRSSDetail . '/' . $value['id'];
  $data2 .= '<item>' . "\n";
  $data2 .= '<title>' . $rssPage->chkSyntaxAnd($value[2]) . '</title>' . "\n";
  $data2 .= '<description>' . $rssPage->chkSyntaxAnd($value[3]) . '</description>' . "\n";

  if ($value[1] != "nm") {
    $data2 .= '<link>' . $link . '</link>' . "\n";
    $data2 .= "<enclosure url=\"" . $url . "\" length=\"" . $length . "\" type=\"" . $type . "\" />\r\n";
  }

  $data2 .= '<pubDate>' . $value['credate'] . '</pubDate>' . "\n";
  $data2 .= '</item>' . "\n";
}

$data .= $data2;
$data .= "</channel>" . "\n";
$data .= "</rss>" . "\n";
echo $data;
