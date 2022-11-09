<?php

class search {

   public function __construct() {

   }

   public function searching($txt = '', $page = 1, $limit = 10, $order = "DESC") {
      global $config, $db, $url;
      $lang = $url->pagelang[3];
      $langOption = $url->pagelang[2];
      $langFull = strtolower($url->pagelang[4]);

      $sql = "SELECT sy_sea_id AS id"
              . ",sy_sea_subject".$lang." AS subject "
              . ",sy_sea_title".$lang." AS title "
              . ",sy_sea_url".$lang." AS url "
              . "FROM sy_sea "
              . "WHERE sy_sea_status NOT IN ('Disable') AND
    ((sy_sea_sdate='0000-00-00 00:00:00' AND
    sy_sea_edate='0000-00-00 00:00:00')   OR
    (sy_sea_sdate='0000-00-00 00:00:00' AND
    TO_DAYS(sy_sea_edate)>=TO_DAYS(NOW()) ) OR
    (TO_DAYS(sy_sea_sdate)<=TO_DAYS(NOW()) AND
    sy_sea_edate='0000-00-00 00:00:00' )  OR
    (TO_DAYS(sy_sea_sdate)<=TO_DAYS(NOW()) AND
    TO_DAYS(sy_sea_edate)>=TO_DAYS(NOW())  )) ";
      if (!empty($txt)) {
         $sql .= " AND (sy_sea_subject LIKE '%$txt%' OR sy_sea_title LIKE '%$txt%' OR sy_sea_keyword LIKE '%$txt%' OR sy_sea_subjecten LIKE '%$txt%' OR sy_sea_titleen LIKE '%$txt%' OR sy_sea_keyworden LIKE '%$txt%' OR sy_sea_subjectcn LIKE '%$txt%' OR sy_sea_titlecn LIKE '%$txt%' OR sy_sea_keywordcn LIKE '%$txt%')";
      }
      $sql .= " ORDER BY sy_sea_id $order";

      $result = $db->pageexecute($sql, $limit, $page);
//      print_pre($result);
      return $result;
   }

}
