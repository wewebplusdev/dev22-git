<?php
 /*## Start SEO #####*/
 $seo_desc ="";
 $seo_title = $lang['contact']['graphic-map'];
 $seo_keyword ="";
 Seo($seo_title, $seo_desc, $seo_keyword, $seo_pic);
 /*## End SEO #####*/
 
 $settingPage = array(
     "page" => $menuActive,
     "template" => "map-graphic.tpl",
     "display" => "page-map",
    "control" => "component",
 );