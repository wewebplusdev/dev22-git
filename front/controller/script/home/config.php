<?php
$arr_conf['gcon_t1']['masterkey'] = "gcon_t1";
$arr_conf['ab_nm']['masterkey'] = $config['ab_nm']['main']['masterkey'];
$arr_conf['gel_t1']['masterkey'] = "gel_t1";
$arr_conf['trw_semi']['masterkey'] = "trw_semi";
$arr_conf['gca_t1']['masterkey'] = "gca_t1";
$arr_conf['gwj_t1']['masterkey'] = "gwj_t1";
$arr_conf['gjt_t1']['masterkey'] = "gjt_t1";
$arr_conf['osv']['masterkey'] = $config['about']['osv']['masterkey'];
// $mod_array_conf = array(
//   'theme-3' => array(
//     'key' => '_t3',
//     'order' => '_order_theme_3',
//     'component' => array(
//       "'ab_nm'",
//     ),
//     'sortmnu' => 'sort_t3',
//   ),
//   'theme-2' => array(
//     'key' => '_t2',
//     'order' => '_order_theme_2',
//     'sortmnu' => 'sort_t2',
//   ),
//   'theme-1' => array(
//     'key' => '_t1',
//     'order' => '_order_theme_1',
//     'sortmnu' => 'sort_t1',
//   ),
// );
$mod_array_conf = array(
  'theme-3' => array(
    'order' => '_order_theme_3',
  ),
  'theme-2' => array(
    'order' => '_order_theme_2',
  ),
  'theme-1' => array(
    'order' => '_order_theme_1',
  ),
);

$arrThemeFile = array(
  '3' => array(
    'km_t3' => 'front/controller/script/home/template/theme-3/section-km.tpl',
    'ban_t3' => 'front/controller/script/home/template/theme-3/section-banner.tpl',
    'ab_nm' => 'front/controller/script/home/template/theme-3/section-news.tpl',
    'wb_t3' => 'front/controller/script/home/template/theme-3/section-weblink.tpl',
  ),
  '2' => array(
    'km_t3' => 'front/controller/script/home/template/theme-3/section-km.tpl',
    'ban_t3' => 'front/controller/script/home/template/theme-3/section-banner.tpl',
    'ab_nm' => 'front/controller/script/home/template/theme-3/section-news.tpl',
    'wb_t3' => 'front/controller/script/home/template/theme-3/section-weblink.tpl',
  ),
  '1' => array(
    'gcon_t1' => 'front/controller/script/home/template/theme-1/section-html-1.tpl',
    'ab_nm' => 'front/controller/script/home/template/theme-1/section-news.tpl',
    'gel_t1' => 'front/controller/script/home/template/theme-1/section-weblink-1.tpl',
    'gca_t1' => 'front/controller/script/home/template/theme-1/section-html-2.tpl',
    'gwj_t1' => 'front/controller/script/home/template/theme-1/section-html-3.tpl',
    'trw_cou' => 'front/controller/script/home/template/theme-1/section-training-1.tpl',
    'service' => 'front/controller/script/home/template/theme-1/section-service.tpl',
    'gjt_t1' => 'front/controller/script/home/template/theme-1/section-html-4.tpl',
    'osv' => 'front/controller/script/home/template/theme-1/section-online-service.tpl',
    'information-service' => 'front/controller/script/home/template/theme-1/section-information-service.tpl',
    'wb_t3' => 'front/controller/script/home/template/theme-1/section-weblink-2.tpl',
    'is_ms' => 'front/controller/script/home/template/theme-1/section-museum.tpl',
    'wb_book' => 'front/controller/script/home/template/theme-1/section-weblink-3.tpl',
    'vdo' => 'front/controller/script/home/template/theme-1/section-video.tpl',
    'trw_semi' => 'front/controller/script/home/template/theme-1/section-training-2.tpl',
  ),
);
