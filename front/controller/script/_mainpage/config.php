<?php
$config['setting']['db'] = "md_sit";
$config['setting']['masterkey'] = "set";
$config['mnu']['db'] = "sy_mnu";

$config['member']['db'] = "md_mem";
$config['member']['masterkey'] = "mem";

// table
$config['cms']['db']['main'] = "md_cms";
$config['cmsg']['db']['main'] = "md_cmsg";
$config['cms']['db']['setting'] = "md_cmss";
$config['cms']['db']['setting2'] = "md_cmss2";
$config['cmg']['db']['main'] = "md_cmg";
$config['cmf']['db']['main'] = "md_cmf";
$config['cmf']['db']['temp'] = "md_cmftp";
$config['album']['db']['main'] = "md_cma";
$config['album']['db']['temp'] = "md_cmatp";
$config['tgp']['db'] = "md_tgp";
$config['cue']['db'] = "md_cue";
$config['cug']['db'] = "md_cug";
$config['cus']['db'] = "md_cus";
$config['provice']['db'] = "md_ads_provinces";
$config['cuf']['db'] = "md_cuf";
$config['joss']['db'] = "md_joss";
$config['jos']['db'] = "md_jos";
$config['wel']['db'] = "md_wel";
$config['joe']['db'] = "md_joe";
$config['ab']['db'] = "md_ab";
$config['mem']['db'] = "md_mem";
$config['memg']['db'] = "md_memg";
$config['memsg']['db'] = "md_memsg";
$config['cmss']['db']['main'] = "md_cmss";
$config['position']['db'] = "md_mem_position";
$config['mem']['group'] = "md_memg";
$config['cmsf']['db'] = "md_cmsf";
$config['cmfg']['db'] = "md_cmfg";
$config['province']['db'] = "md_ads_provinces";
$config['amphur']['db'] = "md_ads_amphures";
$config['district']['db'] = "md_ads_districts";
$config['career']['join'] = "md_joy";
$config['popup']['db'] = "md_int";

// masterkey
$config['cms']['product']['masterkey'] = 'pro';
$config['tgp']['masterkey'] = 'tgp';
$config['cms']['setting2']['masterkey'] = "pro";
$config['jos']['masterkey'] = "jb";
$config['news']['masterkey'] = "nw";
$config['cu']['masterkey'] = "cu";
$config['ird']['masterkey'] = "ird";
$config['ir_nd']['masterkey'] = "ir_nd";
$config['ab_main']['masterkey'] = "ab_main";
$config['csr']['masterkey'] = "csr";
$config['plc']['masterkey'] = "plc";
$config['ab_mem']['masterkey'] = "bde";
$config['cht']['masterkey'] = "cht";
$config['investor']['masterkey:wel'] = "ir_wel";
$config['investor']['masterkey:ir_fi_0'] = "ir_fi_0";
$config['investor']['masterkey:ir_fi_1'] = "ir_fi_1";
$config['investor']['masterkey:ir_fi_2'] = "ir_fi_2";
$config['investor']['masterkey:ir_pub'] = "ir_pub";
$config['investor']['masterkey:ir_cod'] = "ir_cod";
$config['investor']['masterkey:ir_spi'] = "ir_spi";
$config['investor']['masterkey:ir_nd'] = "ir_nd";
$config['investor']['masterkey:ir_ifn'] = "ir_ifn";
$config['investor']['masterkey:ir_ifn_2'] = "ir_ifn_2";
$config['investor']['masterkey:ir_ifn_1'] = "ir_ifn_1";
$config['investor']['masterkey:ir_ifn_3'] = "ir_ifn_3";
$config['investor']['masterkey:ir_acm'] = "ir_acm";
$config['investor']['masterkey:ir_ar'] = "ir_ar";
$config['bun']['masterkey'] = "bun";
$config['5pd']['masterkey'] = "5pd";
$config['rel']['masterkey'] = "rel";
$config['popup']['masterkey'] = "popup";

//PDPA
$config['pdpa']['db'] = 'md_pdpa';
$config['policy']['db'] = 'md_ab';
$config['policy_file']['db'] = 'md_abf';
$config['policy']['masterkey'] = 'pl';
$config['pdpa']['masterkey'] = 'accept';

//setting menu
// about
$menu_masterkey_ab = array(
  'abu' => array(
    'subject' => 'เกี่ยวกับเรา',
    'subjecten' => 'About US',
  ),
  'abhis' => array(
    'subject' => 'ประวัติความเป็นมา',
    'subjecten' => 'History',
  ),
  'abvm' => array(
    'subject' => 'วิสัยทัศน์และพันธกิจ',
    'subjecten' => 'Vision and Mission',
  ),
  'abmfc' => array(
    'subject' => 'สารจากประธานกรรมการ',
    'subjecten' => 'Message from Chief Executive Officer',
  ),
  'abos' => array(
    'subject' => 'โครงสร้างองค์กร',
    'subjecten' => 'Organizational Structure',
  ),
  'abdax' => array(
    'subject' => 'กรรมการและผู้บริหาร',
    'subjecten' => 'Director and Executive',
  ),
  'csr' => array(
    'subject' => 'กิจกรรมเพื่อสังคม (CSR)',
    'subjecten' => 'Social Activities (CSR)',
  ),
);
// investor
$menu_masterkey_ir = array(
  '' => array(
    'subject' => 'หน้าหลักนักลงทุน',
    'subjecten' => 'Investor Homepage',
  ),
  'ir_sp' => array(
    'subject' => 'ราคาหลักทรัพย์',
    'subjecten' => 'Stock Price',
  ),
  'ir_fi' => array(
    'subject' => 'ข้อมูลทางการเงิน',
    'subjecten' => 'Financial Information',
  ),
  'ir_pub' => array(
    'subject' => 'เอกสารเผยแพร่',
    'subjecten' => 'Publication',
  ),
  'ir_cod' => array(
    'subject' => 'เอกสารสำคัญของบริษัท',
    'subjecten' => 'Company Certificate',
  ),
  'ir_spi' => array(
    'subject' => 'ข้อมูลราคาหลักทรัพย์',
    'subjecten' => 'Stock Price Information',
  ),
  'ir_nd' => array(
    'subject' => 'ข่าวแจ้งตลาดหลักทรัพย์',
    'subjecten' => 'Stock Market News',
  ),
  'ir_ifn' => array(
    'subject' => 'ข้อมูลสำหรับผู้ถือหุ้น',
    'subjecten' => 'Information For Shareholders',
  ),
  'ir_cg' => array(
    'subject' => 'การกำกับดูแลกิจการ',
    'subjecten' => 'Corporate Governance',
  ),
  'ir_ini' => array(
    'subject' => 'ข้อมูลนักลงทุน',
    'subjecten' => 'Investor Information',
  ),
  'ir_ar' => array(
    'subject' => 'รายงานประจำปี',
    'subjecten' => 'Annual Report',
  ),
  'ir_acm' => array(
    'subject' => 'มาตรการต่อต้านการคอร์รัปชั่น',
    'subjecten' => 'Anti-Corruption Measures',
  ),
);