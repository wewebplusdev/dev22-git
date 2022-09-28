<?php
$config['setting']['db'] = "md_sit";
$config['setting']['masterkey'] = "set";
$config['mnu']['db'] = "sy_mnu";

// table
$config['cms']['db']['main'] = "md_cms";
$config['popup']['db'] = "md_int";

// masterkey
$config['about']['ab_odc']['masterkey'] = 'ab_odc';
$config['about']['ab_odw']['masterkey'] = 'ab_odw';

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
