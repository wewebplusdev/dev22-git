<?php
$config['setting']['db'] = "md_sit";
$config['setting']['masterkey'] = "set";
$config['mnu']['db'] = "sy_mnu";

// table
$config['cms']['db']['main'] = "md_cms";
$config['cmg']['db']['main'] = "md_cmg";
$config['cma']['db']['main'] = "md_cma";
$config['popup']['db'] = "md_int";
$config['cmf']['db']['main'] = "md_cmf";
$config['cmsg']['db']['main'] = "md_cmsg";
$config['mng']['db']['main'] = "md_mng";
$config['mnsg']['db']['main'] = "md_mnsg";
$config['mn']['db']['main'] = "md_mn";
$config['mem']['db']['main'] = "md_mem";
$config['memsg']['db']['main'] = "md_memsg";
$config['memg']['db']['main'] = "md_memg";
$config['memp']['db']['main'] = "md_mem_position";
$config['memf']['db']['main'] = "md_memf";
$config['wel']['db']['main'] = "md_wel";
$config['cmss']['db']['main'] = "md_cmss2";
$config['cmsf']['db']['main'] = "md_cmsf";
$config['cug']['db']['main'] = "md_cug";
$config['cus']['db']['main'] = "md_cus";
$config['coms']['db']['main'] = "md_coms";
$config['comg']['db']['main'] = "md_comg";
$config['cue']['db']['main'] = "md_cue";
$config['joss']['db']['main'] = "md_joss";
$config['jos']['db']['main'] = "md_jos";
$config['jof']['db']['main'] = "md_jof";
$config['province']['db']['main'] = "md_ads_provinces";
$config['amphur']['db']['main'] = "md_ads_amphures";
$config['district']['db']['main'] = "md_ads_districts";
$config['career']['join']['main'] = "md_joy";
$config['career']['file']['main'] = "md_joyf";
$config['intro']['db']['main'] = "md_int";
$config['tgp']['db']['main'] = "md_tgp";
$config['tag']['db']['main'] = "md_tag";
$config['cmsss']['db']['main'] = "md_cmss";
$config['cas']['db']['main'] = "md_cas";
$config['cag']['db']['main'] = "md_cag";
$config['caa']['db']['main'] = "md_caa";
$config['caf']['db']['main'] = "md_caf";

// masterkey
$config['setting']['mnu']['masterkey'] = 'mnu';
$config['about']['ab_odc']['masterkey'] = 'ab_odc';
$config['about']['ab_odw']['masterkey'] = 'ab_odw';
$config['about']['ab_ib']['masterkey'] = 'ab_ib';
$config['about']['ab_st']['masterkey'] = 'ab_st';
$config['about']['ab_pcm']['masterkey'] = 'ab_pcm';
$config['about']['ab_hrm']['masterkey'] = 'ab_hrm';
$config['about']['ab_qs']['masterkey'] = 'ab_qs';
$config['about']['sv_gc']['masterkey'] = 'sv_gc';
$config['about']['rs_ri']['masterkey'] = 'rs_ri';
$config['about']['osv']['masterkey'] = 'osv';
$config['about']['mr']['masterkey'] = 'mr';
$config['about']['plc']['masterkey'] = 'plc';
$config['contact']['cu']['masterkey'] = 'cu';
$config['about']['ab_js']['masterkey'] = "ab_js";
$config['infoservice']['is_art']['masterkey'] = "is_art";
$config['infoservice']['is_ms']['masterkey'] = "is_ms";
$config['intro']['main']['masterkey'] = "int";
$config['ban']['main']['masterkey'] = "ban";
$config['tag']['main']['masterkey'] = "tag";
$config['cod_f']['main']['masterkey'] = "cod_f";
$config['tgp']['main']['masterkey'] = "tgp";
$config['ban_t3']['main']['masterkey'] = "ban_t3";
$config['wb_t3']['main']['masterkey'] = "wb_t3";
$config['ab_nm']['main']['masterkey'] = "ab_nm";
$config['km_t3']['main']['masterkey'] = "km_t3";
$config['setting']['main']['masterkey'] = "setting";
$config['lcf_s']['main']['masterkey'] = "lcf_s";
$config['video']['vdo']['masterkey'] = "vdo";
$config['photo']['ptg']['masterkey'] = "ptg";
$config['cou_trw']['main']['masterkey'] = "trw_cou";
$config['policy']['coms']['masterkey'] = 'coms';
$config['policy']['req']['masterkey'] = 'req';
$config['cl']['masterkey'] = "cl";

$config['req']['main']['masterkey'] = "req";
$config['trw_his']['main']['masterkey'] = "trw_his";
$config['trw_con']['main']['masterkey'] = "trw_con";
$config['trw_web']['main']['masterkey'] = "trw_web";
//PDPA
$config['pdpa']['db'] = 'md_pdpa';
$config['policy']['db'] = 'md_ab';
$config['policy_file']['db'] = 'md_abf';
$config['policy']['masterkey'] = 'pl';

$config['pdpa']['masterkey'] = 'accept';

//setting menu
// about
$menu_masterkey_ab = array(
  'ab_od' => array(
    'subject' => 'ทิศทางองค์กร',
    'subjecten' => 'Organization Direction',
  ),
  'ab_pap' => array(
    'subject' => 'นโยบายและแผน',
    'subjecten' => 'Policies And Plans',
  ),
  'ab_ib' => array(
    'subject' => 'คณะกรรมการสถาบัน',
    'subjecten' => 'Institute Board',
  ),
  'xxxx' => array(
    'subject' => 'คณะผู้บริหารสถาบัน',
    'subjecten' => 'Institute Of Management',
  ),
  'ab_st' => array(
    'subject' => 'โครงสร้าง',
    'subjecten' => 'Structure',
  ),
  'ab_pcm' => array(
    'subject' => 'การจัดซื้อ/จัดจ้าง',
    'subjecten' => 'Purchasing/Procurement',
  ),
  'ab_hrm' => array(
    'subject' => 'การบริหารและพัฒนาทรัพยากรบุคคล',
    'subjecten' => 'Human Resources Management And Development',
  ),
  'ab_qs' => array(
    'subject' => 'ระบบคุณภาพ',
    'subjecten' => 'Quality System',
  ),
  'ab_nm' => array(
    'subject' => 'ข่าวสารความเคลื่อนไหว',
    'subjecten' => 'Movement News',
  ),
  'ab_js' => array(
    'subject' => 'แหล่งงาน',
    'subjecten' => 'Career',
  ),
);

$fontsize = array(
  'th' => 'ก',
  'en' => 'A',
  'cn' => 'A',
);
