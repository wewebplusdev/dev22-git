<?php
$config['setting']['db'] = "md_sit";
$config['setting']['masterkey'] = "set";
$config['mnu']['db'] = "sy_mnu";

// table
$config['cms']['db']['main'] = "md_cms";
$config['cmg']['db']['main'] = "md_cmg";
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
$config['cue']['db']['main'] = "md_cue";  

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
