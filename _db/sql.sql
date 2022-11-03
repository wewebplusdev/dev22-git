-- --------------------------------------------------------
-- Host:                         192.168.1.129
-- Server version:               10.3.32-MariaDB - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table 2022_git.md_ads_amphures
CREATE TABLE IF NOT EXISTS `md_ads_amphures` (
  `md_ads_amphures_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_ads_amphures_code` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `md_ads_amphures_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `md_ads_amphures_nameen` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `md_ads_amphures_province_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`md_ads_amphures_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1007 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_ads_districts
CREATE TABLE IF NOT EXISTS `md_ads_districts` (
  `md_ads_districts_id` varchar(6) COLLATE utf8_bin NOT NULL,
  `md_ads_districts_zip_code` int(11) NOT NULL,
  `md_ads_districts_name` varchar(150) COLLATE utf8_bin NOT NULL,
  `md_ads_districts_nameen` varchar(150) COLLATE utf8_bin NOT NULL,
  `md_ads_districts_amphure_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`md_ads_districts_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC COMMENT='InnoDB free: 8192 kB';

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_ads_geographies
CREATE TABLE IF NOT EXISTS `md_ads_geographies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC COMMENT='InnoDB free: 8192 kB';

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_ads_provinces
CREATE TABLE IF NOT EXISTS `md_ads_provinces` (
  `md_ads_provinces_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_ads_provinces_code` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `md_ads_provinces_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `md_ads_provinces_nameen` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `md_ads_provinces_geography` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`md_ads_provinces_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_alss
CREATE TABLE IF NOT EXISTS `md_alss` (
  `md_alss_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_alss_masterkey` varchar(20) NOT NULL,
  `md_alss_language` varchar(50) NOT NULL,
  `md_alss_subject` text NOT NULL,
  `md_alss_title` text NOT NULL,
  `md_alss_htmlfilename` text NOT NULL,
  `md_alss_pic` varchar(50) NOT NULL,
  `md_alss_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_alss_creby` varchar(100) NOT NULL,
  `md_alss_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_alss_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_alss_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_alss_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_alss_status` varchar(50) NOT NULL,
  `md_alss_order` int(11) NOT NULL DEFAULT 0,
  `md_alss_view` int(11) NOT NULL DEFAULT 0,
  `md_alss_description` text NOT NULL,
  `md_alss_keywords` text NOT NULL,
  `md_alss_metatitle` text NOT NULL,
  `md_alss_type` varchar(50) NOT NULL,
  `md_alss_filevdo` varchar(255) NOT NULL,
  `md_alss_url` text NOT NULL,
  `md_alss_subjecten` varchar(255) NOT NULL,
  `md_alss_subjectcn` varchar(255) DEFAULT NULL,
  `md_alss_lastbyid` int(11) NOT NULL,
  `md_alss_lastby` varchar(255) NOT NULL,
  `md_alss_htmlfilenameen` text NOT NULL,
  `md_alss_htmlfilenamecn` text DEFAULT NULL,
  `md_alss_titleen` text NOT NULL,
  `md_alss_titlecn` text DEFAULT NULL,
  `md_alss_gid` int(11) NOT NULL,
  `md_alss_keywordsen` text NOT NULL,
  `md_alss_metatitleen` text NOT NULL,
  `md_alss_descriptionen` text NOT NULL,
  `md_alss_keywordscn` text NOT NULL,
  `md_alss_metatitlecn` text NOT NULL,
  `md_alss_descriptioncn` text NOT NULL,
  `md_alss_ribbon` varchar(50) NOT NULL,
  `md_alss_pin` varchar(50) NOT NULL,
  `md_alss_picshow` int(11) NOT NULL,
  `md_alss_typec` int(11) NOT NULL,
  `md_alss_urlc` varchar(255) NOT NULL,
  `md_alss_target` int(11) NOT NULL,
  `md_alss_tags` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `md_alss_pic2` text NOT NULL,
  `md_alss_title2` text NOT NULL,
  `md_alss_ecdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_alss_eedate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_alss_postdate` datetime DEFAULT '0000-00-00 00:00:00',
  `md_alss_html` text NOT NULL,
  `md_alss_htmlfilename2` text NOT NULL,
  `md_alss_htmlfilename2en` text NOT NULL,
  `md_alss_htmlfilename2cn` text NOT NULL,
  `md_alss_color` varchar(255) NOT NULL,
  `md_alss_urlfriendly` varchar(255) NOT NULL,
  `md_alss_credit` varchar(255) DEFAULT NULL,
  `md_alss_crediten` varchar(255) DEFAULT NULL,
  `md_alss_creditcn` varchar(255) DEFAULT NULL,
  `md_alss_start` datetime DEFAULT '0000-00-00 00:00:00',
  `md_alss_typefile` varchar(50) NOT NULL,
  `md_alss_typefileen` varchar(50) NOT NULL,
  `md_alss_typefilecn` varchar(50) NOT NULL,
  `md_alss_urlfile` text NOT NULL,
  `md_alss_urlfileen` text NOT NULL,
  `md_alss_urlfilecn` text NOT NULL,
  PRIMARY KEY (`md_alss_id`) USING BTREE,
  UNIQUE KEY `md_alss_id` (`md_alss_id`),
  KEY `md_alss_id_2` (`md_alss_id`),
  KEY `md_alss_id_3` (`md_alss_id`,`md_alss_crebyid`,`md_alss_lastbyid`,`md_alss_gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cma
CREATE TABLE IF NOT EXISTS `md_cma` (
  `md_cma_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cma_contantid` int(11) NOT NULL DEFAULT 0,
  `md_cma_filename` varchar(200) NOT NULL,
  `md_cma_name` varchar(200) NOT NULL,
  `md_cma_download` int(11) NOT NULL DEFAULT 0,
  `md_cma_language` varchar(25) NOT NULL,
  `md_cma_masterkey` varchar(20) NOT NULL,
  PRIMARY KEY (`md_cma_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cmatp
CREATE TABLE IF NOT EXISTS `md_cmatp` (
  `md_cmatp_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cmatp_contantid` varchar(255) NOT NULL DEFAULT '0',
  `md_cmatp_filename` varchar(200) NOT NULL,
  `md_cmatp_download` int(11) NOT NULL DEFAULT 0,
  `md_cmatp_language` varchar(25) NOT NULL,
  PRIMARY KEY (`md_cmatp_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cmf
CREATE TABLE IF NOT EXISTS `md_cmf` (
  `md_cmf_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cmf_contantid` int(11) NOT NULL DEFAULT 0,
  `md_cmf_filename` varchar(200) NOT NULL,
  `md_cmf_name` varchar(200) NOT NULL,
  `md_cmf_download` int(11) NOT NULL DEFAULT 0,
  `md_cmf_language` varchar(25) NOT NULL,
  `md_cmf_masterkey` varchar(20) NOT NULL,
  `md_cmf_credate` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`md_cmf_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cmg
CREATE TABLE IF NOT EXISTS `md_cmg` (
  `md_cmg_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cmg_masterkey` varchar(20) NOT NULL,
  `md_cmg_language` varchar(50) NOT NULL,
  `md_cmg_subject` varchar(200) NOT NULL,
  `md_cmg_title` text NOT NULL,
  `md_cmg_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_cmg_creby` varchar(100) NOT NULL,
  `md_cmg_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmg_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmg_status` varchar(50) NOT NULL,
  `md_cmg_order` int(11) NOT NULL DEFAULT 0,
  `md_cmg_subjecten` varchar(255) NOT NULL,
  `md_cmg_titleen` text NOT NULL,
  `md_cmg_lastbyid` int(11) NOT NULL,
  `md_cmg_lastby` varchar(255) NOT NULL,
  `md_cmg_pic` varchar(255) NOT NULL,
  `md_cmg_gid` int(11) NOT NULL,
  `md_cmg_pid` int(11) NOT NULL,
  `md_cmg_type` int(11) NOT NULL,
  `md_cmg_url` varchar(255) NOT NULL,
  `md_cmg_target` int(11) NOT NULL,
  `md_cmg_color` varchar(255) NOT NULL,
  `md_cmg_subjectcn` varchar(255) DEFAULT NULL,
  `md_cmg_titlecn` text DEFAULT NULL,
  `md_cmg_layout` int(11) DEFAULT NULL,
  `md_cmg_htmlfilename` text DEFAULT NULL,
  `md_cmg_htmlfilenameen` text DEFAULT NULL,
  `md_cmg_htmlfilenamecn` text DEFAULT NULL,
  `md_cmg_description` text DEFAULT NULL,
  `md_cmg_keywords` text DEFAULT NULL,
  `md_cmg_metatitle` text DEFAULT NULL,
  `md_cmg_descriptionen` text DEFAULT NULL,
  `md_cmg_keywordsen` text DEFAULT NULL,
  `md_cmg_metatitleen` text DEFAULT NULL,
  `md_cmg_picen` varchar(255) NOT NULL,
  `md_cmg_piccn` varchar(255) NOT NULL,
  `md_cmg_types` int(5) NOT NULL DEFAULT 0 COMMENT '1 = ไม่มีกลุ่มย่อย , 2 = มีกลุ่มย่อย',
  PRIMARY KEY (`md_cmg_id`) USING BTREE,
  UNIQUE KEY `md_cmg_id` (`md_cmg_id`) USING BTREE,
  KEY `md_cmg_id_2` (`md_cmg_id`) USING BTREE,
  KEY `md_cmg_id_3` (`md_cmg_id`,`md_cmg_crebyid`,`md_cmg_lastbyid`,`md_cmg_gid`,`md_cmg_pid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cms
CREATE TABLE IF NOT EXISTS `md_cms` (
  `md_cms_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cms_masterkey` varchar(20) NOT NULL,
  `md_cms_language` varchar(50) NOT NULL,
  `md_cms_subject` text NOT NULL,
  `md_cms_title` text NOT NULL,
  `md_cms_htmlfilename` text NOT NULL,
  `md_cms_pic` varchar(50) NOT NULL,
  `md_cms_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_cms_creby` varchar(100) NOT NULL,
  `md_cms_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cms_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cms_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cms_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cms_status` varchar(50) NOT NULL,
  `md_cms_order` int(11) NOT NULL DEFAULT 0,
  `md_cms_view` int(11) NOT NULL DEFAULT 0,
  `md_cms_description` text NOT NULL,
  `md_cms_keywords` text NOT NULL,
  `md_cms_metatitle` text NOT NULL,
  `md_cms_type` varchar(50) NOT NULL,
  `md_cms_filevdo` varchar(255) NOT NULL,
  `md_cms_url` text NOT NULL,
  `md_cms_urlen` text NOT NULL,
  `md_cms_urlcn` text NOT NULL,
  `md_cms_subjecten` varchar(255) DEFAULT NULL,
  `md_cms_subjectcn` varchar(255) DEFAULT NULL,
  `md_cms_lastbyid` int(11) NOT NULL,
  `md_cms_lastby` varchar(255) NOT NULL,
  `md_cms_htmlfilenameen` text NOT NULL,
  `md_cms_htmlfilenamecn` text DEFAULT NULL,
  `md_cms_titleen` text NOT NULL,
  `md_cms_titlecn` text DEFAULT NULL,
  `md_cms_gid` int(11) NOT NULL,
  `md_cms_sid` int(11) NOT NULL,
  `md_cms_keywordsen` text NOT NULL,
  `md_cms_metatitleen` text NOT NULL,
  `md_cms_descriptionen` text NOT NULL,
  `md_cms_keywordscn` text NOT NULL,
  `md_cms_metatitlecn` text NOT NULL,
  `md_cms_descriptioncn` text NOT NULL,
  `md_cms_pin` varchar(50) NOT NULL,
  `md_cms_picshow` int(11) NOT NULL,
  `md_cms_typec` int(11) NOT NULL COMMENT '(dwn 1 = show detail, 2 = not show detail)',
  `md_cms_urlc` varchar(255) NOT NULL,
  `md_cms_target` int(11) NOT NULL,
  `md_cms_tags` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `md_cms_urlfriendly` varchar(255) NOT NULL,
  `md_cms_langth` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show',
  `md_cms_langen` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show',
  `md_cms_langcn` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show',
  `md_cms_typeFile` varchar(50) NOT NULL,
  `md_cms_typeFileen` varchar(50) NOT NULL,
  `md_cms_typeFilecn` varchar(50) NOT NULL,
  `md_cms_urlFile` text NOT NULL,
  `md_cms_urlFileen` text NOT NULL,
  `md_cms_urlFilecn` text NOT NULL,
  `md_cms_picen` varchar(50) NOT NULL,
  `md_cms_piccn` varchar(50) NOT NULL,
  `md_cms_urleregis` varchar(255) NOT NULL,
  `md_cms_urleregisen` varchar(255) NOT NULL,
  `md_cms_urleregiscn` varchar(255) NOT NULL,
  `md_cms_urlformd` varchar(255) NOT NULL,
  `md_cms_urlformden` varchar(255) NOT NULL,
  `md_cms_urlformdcn` varchar(255) NOT NULL,
  `md_cms_factor` varchar(255) NOT NULL,
  `md_cms_ref` varchar(255) NOT NULL,
  `md_cms_refdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`md_cms_id`) USING BTREE,
  UNIQUE KEY `md_cms_id` (`md_cms_id`) USING BTREE,
  KEY `md_cms_id_2` (`md_cms_id`) USING BTREE,
  KEY `md_cms_id_3` (`md_cms_id`,`md_cms_crebyid`,`md_cms_lastbyid`,`md_cms_gid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cmsf
CREATE TABLE IF NOT EXISTS `md_cmsf` (
  `md_cmsf_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cmsf_contantid` int(11) NOT NULL DEFAULT 0,
  `md_cmsf_filename` varchar(200) NOT NULL,
  `md_cmsf_name` varchar(200) NOT NULL,
  `md_cmsf_download` int(11) NOT NULL DEFAULT 0,
  `md_cmsf_language` varchar(25) NOT NULL,
  `md_cmsf_masterkey` varchar(20) NOT NULL,
  `md_cmsf_credate` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`md_cmsf_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cmsg
CREATE TABLE IF NOT EXISTS `md_cmsg` (
  `md_cmsg_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cmsg_masterkey` varchar(20) NOT NULL,
  `md_cmsg_language` varchar(50) NOT NULL,
  `md_cmsg_subject` varchar(200) NOT NULL,
  `md_cmsg_title` text NOT NULL,
  `md_cmsg_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_cmsg_creby` varchar(100) NOT NULL,
  `md_cmsg_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmsg_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmsg_status` varchar(50) NOT NULL,
  `md_cmsg_order` int(11) NOT NULL DEFAULT 0,
  `md_cmsg_subjecten` varchar(255) NOT NULL,
  `md_cmsg_titleen` text NOT NULL,
  `md_cmsg_lastbyid` int(11) NOT NULL,
  `md_cmsg_lastby` varchar(255) NOT NULL,
  `md_cmsg_pic` varchar(255) NOT NULL,
  `md_cmsg_gid` int(11) NOT NULL,
  `md_cmsg_pid` int(11) NOT NULL,
  `md_cmsg_type` int(11) NOT NULL,
  `md_cmsg_url` varchar(255) NOT NULL,
  `md_cmsg_target` int(11) NOT NULL,
  `md_cmsg_color` varchar(255) NOT NULL,
  `md_cmsg_subjectcn` varchar(255) DEFAULT NULL,
  `md_cmsg_titlecn` text DEFAULT NULL,
  `md_cmsg_htmlfilename` text DEFAULT NULL,
  `md_cmsg_htmlfilenameen` text DEFAULT NULL,
  `md_cmsg_description` text DEFAULT NULL,
  `md_cmsg_keywords` text DEFAULT NULL,
  `md_cmsg_metatitle` text DEFAULT NULL,
  `md_cmsg_descriptionen` text DEFAULT NULL,
  `md_cmsg_keywordsen` text DEFAULT NULL,
  `md_cmsg_metatitleen` text DEFAULT NULL,
  PRIMARY KEY (`md_cmsg_id`) USING BTREE,
  UNIQUE KEY `md_cmsg_id` (`md_cmsg_id`) USING BTREE,
  KEY `md_cmsg_id_2` (`md_cmsg_id`) USING BTREE,
  KEY `md_cmsg_id_3` (`md_cmsg_id`,`md_cmsg_crebyid`,`md_cmsg_lastbyid`,`md_cmsg_gid`,`md_cmsg_pid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cmss
CREATE TABLE IF NOT EXISTS `md_cmss` (
  `md_cmss_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cmss_masterkey` varchar(20) NOT NULL,
  `md_cmss_language` varchar(50) NOT NULL,
  `md_cmss_subject` text NOT NULL,
  `md_cmss_title` text NOT NULL,
  `md_cmss_htmlfilename` text NOT NULL,
  `md_cmss_pic` varchar(50) NOT NULL,
  `md_cmss_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_cmss_creby` varchar(100) NOT NULL,
  `md_cmss_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss_status` varchar(50) NOT NULL,
  `md_cmss_order` int(11) NOT NULL DEFAULT 0,
  `md_cmss_view` int(11) NOT NULL DEFAULT 0,
  `md_cmss_description` text NOT NULL,
  `md_cmss_keywords` text NOT NULL,
  `md_cmss_metatitle` text NOT NULL,
  `md_cmss_type` varchar(50) NOT NULL,
  `md_cmss_filevdo` varchar(255) NOT NULL,
  `md_cmss_url` text NOT NULL,
  `md_cmss_subjecten` varchar(255) NOT NULL,
  `md_cmss_subjectcn` varchar(255) DEFAULT NULL,
  `md_cmss_lastbyid` int(11) NOT NULL,
  `md_cmss_lastby` varchar(255) NOT NULL,
  `md_cmss_htmlfilenameen` text NOT NULL,
  `md_cmss_htmlfilenamecn` text DEFAULT NULL,
  `md_cmss_titleen` text NOT NULL,
  `md_cmss_titlecn` text DEFAULT NULL,
  `md_cmss_gid` int(11) NOT NULL,
  `md_cmss_keywordsen` text NOT NULL,
  `md_cmss_metatitleen` text NOT NULL,
  `md_cmss_descriptionen` text NOT NULL,
  `md_cmss_keywordscn` text NOT NULL,
  `md_cmss_metatitlecn` text NOT NULL,
  `md_cmss_descriptioncn` text NOT NULL,
  `md_cmss_ribbon` varchar(50) NOT NULL,
  `md_cmss_pin` varchar(50) NOT NULL,
  `md_cmss_picshow` int(11) NOT NULL,
  `md_cmss_typec` int(11) NOT NULL,
  `md_cmss_urlc` varchar(255) NOT NULL,
  `md_cmss_target` int(11) NOT NULL,
  `md_cmss_tags` int(11) NOT NULL COMMENT 'sorting',
  `md_cmss_pic2` text NOT NULL,
  `md_cmss_title2` text NOT NULL,
  `md_cmss_ecdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss_eedate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss_postdate` datetime DEFAULT '0000-00-00 00:00:00',
  `md_cmss_html` text NOT NULL,
  `md_cmss_htmlfilename2` text NOT NULL,
  `md_cmss_htmlfilename2en` text NOT NULL,
  `md_cmss_htmlfilename2cn` text NOT NULL,
  `md_cmss_color` varchar(255) NOT NULL,
  `md_cmss_urlfriendly` varchar(255) NOT NULL,
  `md_cmss_credit` varchar(255) DEFAULT NULL,
  `md_cmss_crediten` varchar(255) DEFAULT NULL,
  `md_cmss_creditcn` varchar(255) DEFAULT NULL,
  `md_cmss_start` datetime DEFAULT '0000-00-00 00:00:00',
  `md_cmss_file` varchar(255) NOT NULL,
  `md_cmss_filename` varchar(255) NOT NULL,
  `md_cmss_fileen` varchar(255) NOT NULL,
  `md_cmss_filenameen` varchar(255) NOT NULL,
  `md_cmss_filecn` varchar(255) NOT NULL,
  `md_cmss_filenamecn` varchar(255) NOT NULL,
  `md_cmss_typefile` varchar(50) NOT NULL,
  `md_cmss_typefileen` varchar(50) NOT NULL,
  `md_cmss_typefilecn` varchar(50) NOT NULL,
  `md_cmss_urlfile` text NOT NULL,
  `md_cmss_urlfileen` text NOT NULL,
  `md_cmss_urlfilecn` text NOT NULL,
  `md_cmss_download` int(11) NOT NULL DEFAULT 0,
  `md_cmss_speedpin` varchar(20) DEFAULT '0',
  `md_cmss_speed` varchar(20) DEFAULT '0',
  PRIMARY KEY (`md_cmss_id`) USING BTREE,
  UNIQUE KEY `md_cmss_id` (`md_cmss_id`),
  KEY `md_cmss_id_2` (`md_cmss_id`),
  KEY `md_cmss_id_3` (`md_cmss_id`,`md_cmss_crebyid`,`md_cmss_lastbyid`,`md_cmss_gid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cmss2
CREATE TABLE IF NOT EXISTS `md_cmss2` (
  `md_cmss2_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cmss2_masterkey` varchar(20) NOT NULL,
  `md_cmss2_language` varchar(50) NOT NULL,
  `md_cmss2_subject` text NOT NULL,
  `md_cmss2_title` text NOT NULL,
  `md_cmss2_htmlfilename` text NOT NULL,
  `md_cmss2_pic` varchar(50) NOT NULL,
  `md_cmss2_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_cmss2_creby` varchar(100) NOT NULL,
  `md_cmss2_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss2_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss2_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss2_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss2_status` varchar(50) NOT NULL,
  `md_cmss2_order` int(11) NOT NULL DEFAULT 0,
  `md_cmss2_view` int(11) NOT NULL DEFAULT 0,
  `md_cmss2_description` text NOT NULL,
  `md_cmss2_keywords` text NOT NULL,
  `md_cmss2_metatitle` text NOT NULL,
  `md_cmss2_type` varchar(50) NOT NULL,
  `md_cmss2_filevdo` varchar(255) NOT NULL,
  `md_cmss2_url` text NOT NULL,
  `md_cmss2_subjecten` varchar(255) NOT NULL,
  `md_cmss2_subjectcn` varchar(255) DEFAULT NULL,
  `md_cmss2_lastbyid` int(11) NOT NULL,
  `md_cmss2_lastby` varchar(255) NOT NULL,
  `md_cmss2_htmlfilenameen` text NOT NULL,
  `md_cmss2_htmlfilenamecn` text DEFAULT NULL,
  `md_cmss2_titleen` text NOT NULL,
  `md_cmss2_titlecn` text DEFAULT NULL,
  `md_cmss2_gid` int(11) NOT NULL,
  `md_cmss2_keywordsen` text NOT NULL,
  `md_cmss2_metatitleen` text NOT NULL,
  `md_cmss2_descriptionen` text NOT NULL,
  `md_cmss2_keywordscn` text NOT NULL,
  `md_cmss2_metatitlecn` text NOT NULL,
  `md_cmss2_descriptioncn` text NOT NULL,
  `md_cmss2_ribbon` varchar(50) NOT NULL,
  `md_cmss2_pin` varchar(50) NOT NULL,
  `md_cmss2_picshow` int(11) NOT NULL,
  `md_cmss2_typec` int(11) NOT NULL,
  `md_cmss2_urlc` varchar(255) NOT NULL,
  `md_cmss2_target` int(11) NOT NULL,
  `md_cmss2_tags` int(11) NOT NULL COMMENT 'sorting',
  `md_cmss2_pic2` text NOT NULL,
  `md_cmss2_title2` text NOT NULL,
  `md_cmss2_ecdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss2_eedate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cmss2_postdate` datetime DEFAULT '0000-00-00 00:00:00',
  `md_cmss2_html` text NOT NULL,
  `md_cmss2_htmlfilename2` text NOT NULL,
  `md_cmss2_htmlfilename2en` text NOT NULL,
  `md_cmss2_htmlfilename2cn` text NOT NULL,
  `md_cmss2_color` varchar(255) NOT NULL,
  `md_cmss2_urlfriendly` varchar(255) NOT NULL,
  `md_cmss2_credit` varchar(255) DEFAULT NULL,
  `md_cmss2_crediten` varchar(255) DEFAULT NULL,
  `md_cmss2_creditcn` varchar(255) DEFAULT NULL,
  `md_cmss2_start` datetime DEFAULT '0000-00-00 00:00:00',
  `md_cmss2_file` varchar(255) NOT NULL,
  `md_cmss2_filename` varchar(255) NOT NULL,
  `md_cmss2_fileen` varchar(255) NOT NULL,
  `md_cmss2_filenameen` varchar(255) NOT NULL,
  `md_cmss2_filecn` varchar(255) NOT NULL,
  `md_cmss2_filenamecn` varchar(255) NOT NULL,
  `md_cmss2_typefile` varchar(50) NOT NULL,
  `md_cmss2_typefileen` varchar(50) NOT NULL,
  `md_cmss2_typefilecn` varchar(50) NOT NULL,
  `md_cmss2_urlfile` text NOT NULL,
  `md_cmss2_urlfileen` text NOT NULL,
  `md_cmss2_urlfilecn` text NOT NULL,
  `md_cmss2_download` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`md_cmss2_id`) USING BTREE,
  UNIQUE KEY `md_cmss2_id` (`md_cmss2_id`) USING BTREE,
  KEY `md_cmss2_id_2` (`md_cmss2_id`) USING BTREE,
  KEY `md_cmss2_id_3` (`md_cmss2_id`,`md_cmss2_crebyid`,`md_cmss2_lastbyid`,`md_cmss2_gid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cmtp
CREATE TABLE IF NOT EXISTS `md_cmtp` (
  `md_cmtp_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cmtp_contantid` varchar(255) NOT NULL DEFAULT '0',
  `md_cmtp_filename` varchar(200) NOT NULL,
  `md_cmtp_name` varchar(200) NOT NULL,
  `md_cmtp_language` varchar(25) NOT NULL,
  `md_cmtp_download` int(11) NOT NULL,
  `md_cmtp_masterkey` varchar(200) NOT NULL,
  PRIMARY KEY (`md_cmtp_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cue
CREATE TABLE IF NOT EXISTS `md_cue` (
  `md_cue_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cue_gid` int(11) NOT NULL DEFAULT 0,
  `md_cue_email` varchar(255) NOT NULL,
  `md_cue_masterkey` varchar(150) NOT NULL,
  PRIMARY KEY (`md_cue_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cuf
CREATE TABLE IF NOT EXISTS `md_cuf` (
  `md_cuf_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cuf_contantid` int(11) NOT NULL DEFAULT 0,
  `md_cuf_filename` varchar(200) NOT NULL,
  `md_cuf_name` varchar(200) NOT NULL,
  `md_cuf_download` int(11) NOT NULL DEFAULT 0,
  `md_cuf_language` varchar(25) NOT NULL,
  `md_cuf_masterkey` varchar(20) NOT NULL,
  PRIMARY KEY (`md_cuf_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cug
CREATE TABLE IF NOT EXISTS `md_cug` (
  `md_cug_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cug_masterkey` varchar(20) NOT NULL,
  `md_cug_language` varchar(50) NOT NULL,
  `md_cug_subject` varchar(200) NOT NULL,
  `md_cug_title` text NOT NULL,
  `md_cug_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_cug_creby` varchar(100) NOT NULL,
  `md_cug_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cug_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cug_status` varchar(50) NOT NULL,
  `md_cug_order` int(11) NOT NULL DEFAULT 0,
  `md_cug_subjecten` varchar(255) NOT NULL,
  `md_cug_titleen` text NOT NULL,
  `md_cug_lastbyid` int(11) NOT NULL,
  `md_cug_lastby` varchar(255) NOT NULL,
  `md_cug_subjectcn` varchar(255) DEFAULT NULL,
  `md_cug_titlecn` text DEFAULT NULL,
  PRIMARY KEY (`md_cug_id`) USING BTREE,
  UNIQUE KEY `md_cug_id` (`md_cug_id`) USING BTREE,
  KEY `md_cug_id_2` (`md_cug_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_cus
CREATE TABLE IF NOT EXISTS `md_cus` (
  `md_cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_cus_gid` int(11) NOT NULL DEFAULT 0 COMMENT 'id กลุ่มสินเชื่อ',
  `md_cus_masterkey` varchar(20) NOT NULL,
  `md_cus_language` varchar(50) NOT NULL,
  `md_cus_fname` varchar(255) NOT NULL,
  `md_cus_lname` varchar(255) NOT NULL,
  `md_cus_email` varchar(255) NOT NULL,
  `md_cus_subject` varchar(255) NOT NULL,
  `md_cus_address` text NOT NULL,
  `md_cus_message` text NOT NULL,
  `md_cus_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_cus_status` varchar(50) NOT NULL,
  `md_cus_tel` varchar(25) NOT NULL,
  `md_cus_ip` varchar(100) NOT NULL,
  `md_cus_organization` varchar(255) NOT NULL,
  `md_cus_company` varchar(255) NOT NULL,
  `md_cus_model` text NOT NULL,
  `md_cus_qty` text NOT NULL,
  `md_cus_pid` int(11) NOT NULL DEFAULT 0 COMMENT 'id provice',
  `md_cus_sid` int(11) NOT NULL DEFAULT 0 COMMENT 'id product',
  `md_cus_mid` int(11) NOT NULL DEFAULT 0 COMMENT 'id money',
  `md_cus_sgid` int(11) DEFAULT 0,
  PRIMARY KEY (`md_cus_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_int
CREATE TABLE IF NOT EXISTS `md_int` (
  `md_int_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_int_masterkey` varchar(20) NOT NULL,
  `md_int_language` varchar(50) NOT NULL,
  `md_int_subject` text NOT NULL,
  `md_int_description` text NOT NULL,
  `md_int_pic` varchar(255) NOT NULL,
  `md_int_url` text NOT NULL,
  `md_int_type` varchar(50) NOT NULL,
  `md_int_filevdo` varchar(255) NOT NULL,
  `md_int_play` int(1) NOT NULL COMMENT '0=don''tplay,1=Play',
  `md_int_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_int_creby` varchar(100) NOT NULL,
  `md_int_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_int_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_int_status` varchar(50) NOT NULL,
  `md_int_order` int(11) NOT NULL DEFAULT 0,
  `md_int_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_int_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_int_target` int(11) NOT NULL,
  `md_int_lastbyid` int(11) NOT NULL,
  `md_int_lastby` varchar(200) NOT NULL,
  `md_int_color` varchar(50) NOT NULL,
  `md_int_urlm` text NOT NULL,
  PRIMARY KEY (`md_int_id`),
  UNIQUE KEY `md_int_id` (`md_int_id`),
  KEY `md_int_id_2` (`md_int_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_joa
CREATE TABLE IF NOT EXISTS `md_joa` (
  `md_joa_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_joa_contantid` int(11) DEFAULT NULL,
  `md_joa_filename` varchar(255) DEFAULT NULL,
  `md_joa_name` varchar(255) DEFAULT NULL,
  `md_joa_language` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`md_joa_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_joatp
CREATE TABLE IF NOT EXISTS `md_joatp` (
  `md_joatp_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_joatp_filename` varchar(255) DEFAULT NULL,
  `md_joatp_name` varchar(255) DEFAULT NULL,
  `md_joatp_contantid` text DEFAULT NULL,
  PRIMARY KEY (`md_joatp_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_joe
CREATE TABLE IF NOT EXISTS `md_joe` (
  `md_joe_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_joe_email` varchar(255) DEFAULT NULL,
  `md_joe_masterkey` text DEFAULT NULL,
  PRIMARY KEY (`md_joe_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_jof
CREATE TABLE IF NOT EXISTS `md_jof` (
  `md_jof_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_jof_contantid` int(11) NOT NULL DEFAULT 0,
  `md_jof_filename` varchar(255) NOT NULL,
  `md_jof_name` varchar(255) NOT NULL,
  `md_jof_download` int(11) NOT NULL DEFAULT 0,
  `md_jof_masterkey` varchar(255) NOT NULL,
  `md_jof_credate` datetime NOT NULL,
  `md_jof_language` varchar(255) NOT NULL,
  PRIMARY KEY (`md_jof_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_jos
CREATE TABLE IF NOT EXISTS `md_jos` (
  `md_jos_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_jos_language` varchar(255) DEFAULT NULL,
  `md_jos_masterkey` varchar(255) DEFAULT NULL,
  `md_jos_subject` varchar(255) DEFAULT NULL,
  `md_jos_title` varchar(255) DEFAULT NULL,
  `md_jos_typeSal` int(11) DEFAULT NULL,
  `md_jos_salaryFr` double(10,2) DEFAULT NULL,
  `md_jos_salaryTo` double(10,2) DEFAULT NULL,
  `md_jos_salaryOne` double(10,2) DEFAULT NULL,
  `md_jos_quantity` double(10,0) DEFAULT NULL,
  `md_jos_address` text DEFAULT NULL,
  `md_jos_pic` text DEFAULT NULL,
  `md_jos_type` varchar(50) DEFAULT NULL,
  `md_jos_url` text NOT NULL,
  `md_jos_urlen` text NOT NULL,
  `md_jos_urlcn` text NOT NULL,
  `md_jos_filevdo` text DEFAULT NULL,
  `md_jos_htmlfilename` text DEFAULT NULL,
  `md_jos_crebyid` varchar(100) DEFAULT NULL,
  `md_jos_creby` varchar(100) DEFAULT NULL,
  `md_jos_lastbyid` varchar(100) DEFAULT NULL,
  `md_jos_lastby` varchar(100) DEFAULT NULL,
  `md_jos_description` text DEFAULT NULL,
  `md_jos_keywords` text DEFAULT NULL,
  `md_jos_metatitle` text DEFAULT NULL,
  `md_jos_sdate` datetime DEFAULT '0000-00-00 00:00:00',
  `md_jos_edate` datetime DEFAULT '0000-00-00 00:00:00',
  `md_jos_credate` datetime DEFAULT NULL,
  `md_jos_lastdate` datetime DEFAULT NULL,
  `md_jos_status` varchar(20) DEFAULT NULL,
  `md_jos_order` int(11) DEFAULT NULL,
  `md_jos_subjecten` varchar(255) DEFAULT NULL,
  `md_jos_pin` varchar(20) DEFAULT NULL,
  `md_jos_gid` int(11) NOT NULL,
  `md_jos_subjectcn` varchar(255) DEFAULT NULL,
  `md_jos_htmlfilenameen` text DEFAULT NULL,
  `md_jos_titleen` text DEFAULT NULL,
  `md_jos_metatitleen` varchar(255) DEFAULT NULL,
  `md_jos_descriptionen` varchar(255) DEFAULT NULL,
  `md_jos_keywordsen` varchar(255) DEFAULT NULL,
  `md_jos_addressen` text DEFAULT NULL,
  `md_jos_htmlfilenamecn` text DEFAULT NULL,
  `md_jos_titlecn` text DEFAULT NULL,
  `md_jos_metatitlecn` varchar(255) DEFAULT NULL,
  `md_jos_descriptioncn` varchar(255) DEFAULT NULL,
  `md_jos_keywordscn` varchar(255) DEFAULT NULL,
  `md_jos_addresscn` text DEFAULT NULL,
  `md_jos_langth` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show',
  `md_jos_langen` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show',
  `md_jos_langcn` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show',
  `md_jos_view` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`md_jos_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_josg
CREATE TABLE IF NOT EXISTS `md_josg` (
  `md_josg_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_josg_language` varchar(255) DEFAULT NULL,
  `md_josg_masterkey` varchar(255) DEFAULT NULL,
  `md_josg_subject` varchar(255) DEFAULT NULL,
  `md_josg_title` text DEFAULT NULL,
  `md_josg_crebyid` varchar(100) DEFAULT NULL,
  `md_josg_creby` varchar(100) DEFAULT NULL,
  `md_josg_lastbyid` varchar(100) DEFAULT NULL,
  `md_josg_lastby` varchar(100) DEFAULT NULL,
  `md_josg_sdate` date DEFAULT NULL,
  `md_josg_edate` date DEFAULT NULL,
  `md_josg_credate` datetime DEFAULT NULL,
  `md_josg_lastdate` datetime DEFAULT NULL,
  `md_josg_status` varchar(20) DEFAULT NULL,
  `md_josg_order` int(11) DEFAULT NULL,
  `md_josg_subjecten` varchar(255) DEFAULT NULL,
  `md_josg_subjectcn` varchar(255) DEFAULT NULL,
  `md_josg_titleen` text DEFAULT NULL,
  `md_josg_titlecn` text DEFAULT NULL,
  PRIMARY KEY (`md_josg_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_joss
CREATE TABLE IF NOT EXISTS `md_joss` (
  `md_joss_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_joss_masterkey` varchar(20) NOT NULL,
  `md_joss_language` varchar(50) NOT NULL,
  `md_joss_subject` text NOT NULL,
  `md_joss_title` text NOT NULL,
  `md_joss_htmlfilename` text NOT NULL,
  `md_joss_pic` varchar(50) NOT NULL,
  `md_joss_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_joss_creby` varchar(100) NOT NULL,
  `md_joss_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_joss_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_joss_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_joss_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_joss_status` varchar(50) NOT NULL,
  `md_joss_order` int(11) NOT NULL DEFAULT 0,
  `md_joss_view` int(11) NOT NULL DEFAULT 0,
  `md_joss_description` text NOT NULL,
  `md_joss_keywords` text NOT NULL,
  `md_joss_metatitle` text NOT NULL,
  `md_joss_type` varchar(50) NOT NULL,
  `md_joss_filevdo` varchar(255) NOT NULL,
  `md_joss_url` text NOT NULL,
  `md_joss_subjecten` varchar(255) NOT NULL,
  `md_joss_subjectcn` varchar(255) DEFAULT NULL,
  `md_joss_lastbyid` int(11) NOT NULL,
  `md_joss_lastby` varchar(255) NOT NULL,
  `md_joss_htmlfilenameen` text NOT NULL,
  `md_joss_htmlfilenamecn` text DEFAULT NULL,
  `md_joss_titleen` text NOT NULL,
  `md_joss_titlecn` text DEFAULT NULL,
  `md_joss_gid` int(11) NOT NULL,
  `md_joss_keywordsen` text NOT NULL,
  `md_joss_metatitleen` text NOT NULL,
  `md_joss_descriptionen` text NOT NULL,
  `md_joss_keywordscn` text NOT NULL,
  `md_joss_metatitlecn` text NOT NULL,
  `md_joss_descriptioncn` text NOT NULL,
  `md_joss_ribbon` varchar(50) NOT NULL,
  `md_joss_pin` varchar(50) NOT NULL,
  `md_joss_picshow` int(11) NOT NULL,
  `md_joss_typec` int(11) NOT NULL,
  `md_joss_urlc` varchar(255) NOT NULL,
  `md_joss_target` int(11) NOT NULL,
  `md_joss_tags` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `md_joss_pic2` text NOT NULL,
  `md_joss_title2` text NOT NULL,
  `md_joss_ecdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_joss_eedate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_joss_postdate` datetime DEFAULT '0000-00-00 00:00:00',
  `md_joss_html` text NOT NULL,
  `md_joss_htmlfilename2` text NOT NULL,
  `md_joss_htmlfilename2en` text NOT NULL,
  `md_joss_htmlfilename2cn` text NOT NULL,
  `md_joss_color` varchar(255) NOT NULL,
  `md_joss_urlfriendly` varchar(255) NOT NULL,
  `md_joss_credit` varchar(255) DEFAULT NULL,
  `md_joss_crediten` varchar(255) DEFAULT NULL,
  `md_joss_creditcn` varchar(255) DEFAULT NULL,
  `md_joss_start` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`md_joss_id`) USING BTREE,
  UNIQUE KEY `md_joss_id` (`md_joss_id`) USING BTREE,
  KEY `md_joss_id_2` (`md_joss_id`) USING BTREE,
  KEY `md_joss_id_3` (`md_joss_id`,`md_joss_crebyid`,`md_joss_lastbyid`,`md_joss_gid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_jot
CREATE TABLE IF NOT EXISTS `md_jot` (
  `md_jot_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_jot_masterkey` varchar(20) NOT NULL,
  `md_jot_language` varchar(50) NOT NULL,
  `md_jot_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_jot_creby` varchar(100) NOT NULL,
  `md_jot_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_jot_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_jot_lastbyid` int(11) NOT NULL,
  `md_jot_lastby` varchar(255) NOT NULL,
  PRIMARY KEY (`md_jot_id`) USING BTREE,
  UNIQUE KEY `md_jot_id` (`md_jot_id`) USING BTREE,
  KEY `md_jot_id_2` (`md_jot_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_jotp
CREATE TABLE IF NOT EXISTS `md_jotp` (
  `md_jotp_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_jotp_filename` varchar(255) NOT NULL,
  `md_jotp_name` varchar(255) NOT NULL,
  `md_jotp_masterkey` varchar(50) NOT NULL,
  `md_jotp_contantid` varchar(255) NOT NULL,
  `md_jotp_language` varchar(50) NOT NULL,
  `md_jotp_download` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`md_jotp_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_joy
CREATE TABLE IF NOT EXISTS `md_joy` (
  `md_joy_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_joy_masterkey` varchar(50) DEFAULT NULL,
  `md_joy_name` text DEFAULT NULL,
  `md_joy_credate` datetime DEFAULT NULL,
  `md_joy_status` varchar(20) DEFAULT NULL,
  `md_joy_pic` text DEFAULT NULL,
  `md_joy_province` text DEFAULT NULL,
  `md_joy_sex` varchar(20) DEFAULT NULL,
  `md_joy_edu` text DEFAULT NULL,
  `md_joy_sdate` datetime DEFAULT NULL,
  `md_joy_salary` double(10,2) DEFAULT NULL,
  `md_joy_email` varchar(50) DEFAULT NULL,
  `md_joy_jID` varchar(50) DEFAULT NULL,
  `md_joy_prefix` varchar(50) NOT NULL DEFAULT '',
  `md_joy_fname` varchar(255) NOT NULL,
  `md_joy_lname` varchar(255) NOT NULL,
  `md_joy_info` text NOT NULL,
  `md_joy_general` text NOT NULL,
  `md_joy_address` text NOT NULL,
  `md_joy_military` text NOT NULL,
  `md_joy_emergency` text NOT NULL,
  `md_joy_family` text NOT NULL,
  `md_joy_brother` text NOT NULL,
  `md_joy_education` text NOT NULL,
  `md_joy_training` text NOT NULL,
  `md_joy_workhistory` text NOT NULL,
  `md_joy_language` text NOT NULL,
  `md_joy_information` text NOT NULL,
  `md_joy_reference` text NOT NULL,
  `md_joy_comment` text NOT NULL,
  PRIMARY KEY (`md_joy_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_joyf
CREATE TABLE IF NOT EXISTS `md_joyf` (
  `md_joyf_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_joyf_contantid` int(11) NOT NULL DEFAULT 0,
  `md_joyf_filename` varchar(255) NOT NULL,
  `md_joyf_name` varchar(255) NOT NULL,
  `md_joyf_download` int(11) NOT NULL DEFAULT 0,
  `md_joyf_masterkey` varchar(255) NOT NULL,
  `md_joyf_credate` datetime NOT NULL,
  `md_joyf_language` varchar(255) NOT NULL,
  `md_joyf_key` varchar(255) NOT NULL,
  PRIMARY KEY (`md_joyf_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_mem
CREATE TABLE IF NOT EXISTS `md_mem` (
  `md_mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_mem_masterkey` varchar(20) NOT NULL,
  `md_mem_language` varchar(50) NOT NULL,
  `md_mem_fname` varchar(255) NOT NULL,
  `md_mem_lname` varchar(255) NOT NULL,
  `md_mem_position` text NOT NULL,
  `md_mem_positionen` text NOT NULL,
  `md_mem_positioncn` text NOT NULL,
  `md_mem_depart` varchar(255) NOT NULL,
  `md_mem_departen` varchar(255) NOT NULL,
  `md_mem_departcn` varchar(255) NOT NULL,
  `md_mem_education` varchar(255) NOT NULL,
  `md_mem_educationen` varchar(255) NOT NULL,
  `md_mem_educationcn` varchar(255) NOT NULL,
  `md_mem_trian` varchar(255) NOT NULL,
  `md_mem_triancn` varchar(255) NOT NULL,
  `md_mem_trianen` varchar(255) NOT NULL,
  `md_mem_htmlfilename` text NOT NULL,
  `md_mem_pic` varchar(50) NOT NULL,
  `md_mem_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_mem_creby` varchar(100) NOT NULL,
  `md_mem_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mem_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mem_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mem_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mem_status` varchar(50) NOT NULL,
  `md_mem_order` int(11) NOT NULL DEFAULT 0,
  `md_mem_view` int(11) NOT NULL DEFAULT 0,
  `md_mem_description` text NOT NULL,
  `md_mem_keywords` text NOT NULL,
  `md_mem_metatitle` text NOT NULL,
  `md_mem_type` varchar(50) NOT NULL,
  `md_mem_filevdo` varchar(255) NOT NULL,
  `md_mem_url` text NOT NULL,
  `md_mem_fnameen` varchar(255) NOT NULL,
  `md_mem_lnameen` varchar(255) NOT NULL,
  `md_mem_fnamecn` varchar(255) DEFAULT NULL,
  `md_mem_lnamecn` varchar(255) NOT NULL,
  `md_mem_share` varchar(255) NOT NULL,
  `md_mem_sharecn` varchar(255) NOT NULL,
  `md_mem_shareen` varchar(255) NOT NULL,
  `md_mem_lastbyid` int(11) NOT NULL,
  `md_mem_lastby` varchar(255) NOT NULL,
  `md_mem_htmlfilenameen` text NOT NULL,
  `md_mem_htmlfilenamecn` text DEFAULT NULL,
  `md_mem_titleen` text NOT NULL,
  `md_mem_titlecn` text DEFAULT NULL,
  `md_mem_gid` text NOT NULL,
  `md_mem_keywordsen` text NOT NULL,
  `md_mem_metatitleen` text NOT NULL,
  `md_mem_descriptionen` text NOT NULL,
  `md_mem_keywordscn` text NOT NULL,
  `md_mem_metatitlecn` text NOT NULL,
  `md_mem_descriptioncn` text NOT NULL,
  `md_mem_pin` varchar(50) NOT NULL,
  `md_mem_sdatetxt` text NOT NULL,
  `md_mem_email` text NOT NULL,
  `md_mem_tel` text NOT NULL,
  `md_mem_sdatetxten` text NOT NULL,
  `md_mem_emailen` text NOT NULL,
  `md_mem_telen` text NOT NULL,
  `md_mem_sdatetxtcn` text NOT NULL,
  `md_mem_emailcn` text NOT NULL,
  `md_mem_telcn` text NOT NULL,
  `md_mem_langth` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show',
  `md_mem_langen` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show',
  `md_mem_langcn` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show',
  PRIMARY KEY (`md_mem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_memf
CREATE TABLE IF NOT EXISTS `md_memf` (
  `md_memf_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_memf_contantid` int(11) NOT NULL DEFAULT 0,
  `md_memf_filename` varchar(200) NOT NULL,
  `md_memf_name` varchar(200) NOT NULL,
  `md_memf_download` int(11) NOT NULL DEFAULT 0,
  `md_memf_language` varchar(25) NOT NULL,
  `md_memf_masterkey` varchar(20) NOT NULL,
  `md_memf_credate` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`md_memf_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_memg
CREATE TABLE IF NOT EXISTS `md_memg` (
  `md_memg_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_memg_masterkey` varchar(20) NOT NULL,
  `md_memg_language` varchar(50) NOT NULL,
  `md_memg_subject` varchar(200) NOT NULL,
  `md_memg_title` text NOT NULL,
  `md_memg_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_memg_creby` varchar(100) NOT NULL,
  `md_memg_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_memg_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_memg_status` varchar(50) NOT NULL,
  `md_memg_order` int(11) NOT NULL DEFAULT 0,
  `md_memg_subjecten` varchar(255) NOT NULL,
  `md_memg_titleen` text NOT NULL,
  `md_memg_lastbyid` int(11) NOT NULL,
  `md_memg_lastby` varchar(255) NOT NULL,
  `md_memg_pic` varchar(255) NOT NULL,
  `md_memg_pic2` varchar(255) NOT NULL,
  `md_memg_gid` int(11) NOT NULL,
  `md_memg_pid` int(11) NOT NULL,
  `md_memg_type` int(11) NOT NULL,
  `md_memg_url` varchar(255) NOT NULL,
  `md_memg_target` int(11) NOT NULL,
  `md_memg_color` varchar(255) NOT NULL,
  `md_memg_subjectcn` varchar(255) DEFAULT NULL,
  `md_memg_titlecn` text DEFAULT NULL,
  `md_memg_layout` int(11) DEFAULT NULL,
  PRIMARY KEY (`md_memg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_memsg
CREATE TABLE IF NOT EXISTS `md_memsg` (
  `md_memsg_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_memsg_masterkey` varchar(20) NOT NULL,
  `md_memsg_language` varchar(50) NOT NULL,
  `md_memsg_subject` varchar(200) NOT NULL,
  `md_memsg_title` text NOT NULL,
  `md_memsg_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_memsg_creby` varchar(100) NOT NULL,
  `md_memsg_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_memsg_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_memsg_status` varchar(50) NOT NULL,
  `md_memsg_order` int(11) NOT NULL DEFAULT 0,
  `md_memsg_subjecten` varchar(255) NOT NULL,
  `md_memsg_titleen` text NOT NULL,
  `md_memsg_lastbyid` int(11) NOT NULL,
  `md_memsg_lastby` varchar(255) NOT NULL,
  `md_memsg_pic` varchar(255) NOT NULL,
  `md_memsg_pic2` varchar(255) NOT NULL,
  `md_memsg_gid` int(11) NOT NULL,
  `md_memsg_pid` int(11) NOT NULL,
  `md_memsg_type` int(11) NOT NULL,
  `md_memsg_url` varchar(255) NOT NULL,
  `md_memsg_urlen` varchar(255) NOT NULL,
  `md_memsg_urlcn` varchar(255) NOT NULL,
  `md_memsg_target` int(11) NOT NULL,
  `md_memsg_color` varchar(255) NOT NULL,
  `md_memsg_subjectcn` varchar(255) DEFAULT NULL,
  `md_memsg_titlecn` text DEFAULT NULL,
  `md_memsg_layout` int(11) DEFAULT NULL,
  `md_memsg_htmlfilename` text DEFAULT NULL,
  `md_memsg_htmlfilenameen` text DEFAULT NULL,
  `md_memsg_htmlfilenamecn` text DEFAULT NULL,
  PRIMARY KEY (`md_memsg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_memss
CREATE TABLE IF NOT EXISTS `md_memss` (
  `md_memss_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_memss_masterkey` varchar(20) NOT NULL,
  `md_memss_language` varchar(50) NOT NULL,
  `md_memss_subject` text NOT NULL,
  `md_memss_title` text NOT NULL,
  `md_memss_htmlfilename` text NOT NULL,
  `md_memss_pic` varchar(50) NOT NULL,
  `md_memss_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_memss_creby` varchar(100) NOT NULL,
  `md_memss_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_memss_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_memss_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_memss_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_memss_status` varchar(50) NOT NULL,
  `md_memss_order` int(11) NOT NULL DEFAULT 0,
  `md_memss_view` int(11) NOT NULL DEFAULT 0,
  `md_memss_description` text NOT NULL,
  `md_memss_keywords` text NOT NULL,
  `md_memss_metatitle` text NOT NULL,
  `md_memss_type` varchar(50) NOT NULL,
  `md_memss_filevdo` varchar(255) NOT NULL,
  `md_memss_url` text NOT NULL,
  `md_memss_subjecten` varchar(255) NOT NULL,
  `md_memss_subjectcn` varchar(255) DEFAULT NULL,
  `md_memss_lastbyid` int(11) NOT NULL,
  `md_memss_lastby` varchar(255) NOT NULL,
  `md_memss_htmlfilenameen` text NOT NULL,
  `md_memss_htmlfilenamecn` text DEFAULT NULL,
  `md_memss_titleen` text NOT NULL,
  `md_memss_titlecn` text DEFAULT NULL,
  `md_memss_gid` int(11) NOT NULL,
  `md_memss_keywordsen` text NOT NULL,
  `md_memss_metatitleen` text NOT NULL,
  `md_memss_descriptionen` text NOT NULL,
  `md_memss_keywordscn` text NOT NULL,
  `md_memss_metatitlecn` text NOT NULL,
  `md_memss_descriptioncn` text NOT NULL,
  `md_memss_ribbon` varchar(50) NOT NULL,
  `md_memss_pin` varchar(50) NOT NULL,
  `md_memss_picshow` int(11) NOT NULL,
  `md_memss_typec` int(11) NOT NULL,
  `md_memss_urlc` varchar(255) NOT NULL,
  `md_memss_target` int(11) NOT NULL,
  `md_memss_tags` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `md_memss_pic2` text NOT NULL,
  `md_memss_title2` text NOT NULL,
  `md_memss_ecdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_memss_eedate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_memss_postdate` datetime DEFAULT '0000-00-00 00:00:00',
  `md_memss_html` text NOT NULL,
  `md_memss_htmlfilename2` text NOT NULL,
  `md_memss_htmlfilename2en` text NOT NULL,
  `md_memss_htmlfilename2cn` text NOT NULL,
  `md_memss_color` varchar(255) NOT NULL,
  `md_memss_urlfriendly` varchar(255) NOT NULL,
  `md_memss_credit` varchar(255) DEFAULT NULL,
  `md_memss_crediten` varchar(255) DEFAULT NULL,
  `md_memss_creditcn` varchar(255) DEFAULT NULL,
  `md_memss_start` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`md_memss_id`) USING BTREE,
  UNIQUE KEY `md_memss_id` (`md_memss_id`),
  KEY `md_memss_id_2` (`md_memss_id`),
  KEY `md_memss_id_3` (`md_memss_id`,`md_memss_crebyid`,`md_memss_lastbyid`,`md_memss_gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_memtp
CREATE TABLE IF NOT EXISTS `md_memtp` (
  `md_memtp_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_memtp_contantid` varchar(255) NOT NULL DEFAULT '0',
  `md_memtp_filename` varchar(200) NOT NULL,
  `md_memtp_name` varchar(200) NOT NULL,
  `md_memtp_language` varchar(25) NOT NULL,
  `md_memtp_download` int(11) NOT NULL,
  PRIMARY KEY (`md_memtp_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_mem_position
CREATE TABLE IF NOT EXISTS `md_mem_position` (
  `md_mem_position_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_mem_position_mid` int(11) NOT NULL,
  `md_mem_position_gid` int(11) NOT NULL,
  `md_mem_position_pid` text NOT NULL,
  PRIMARY KEY (`md_mem_position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_mn
CREATE TABLE IF NOT EXISTS `md_mn` (
  `md_mn_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_mn_masterkey` varchar(20) NOT NULL,
  `md_mn_language` varchar(50) NOT NULL,
  `md_mn_subject` text NOT NULL,
  `md_mn_title` text NOT NULL,
  `md_mn_subjecten` varchar(255) NOT NULL,
  `md_mn_titleen` text NOT NULL,
  `md_mn_subjectcn` text NOT NULL,
  `md_mn_titlecn` text NOT NULL,
  `md_mn_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_mn_creby` varchar(100) NOT NULL,
  `md_mn_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mn_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mn_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mn_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mn_status` varchar(50) NOT NULL,
  `md_mn_order` int(11) NOT NULL DEFAULT 0,
  `md_mn_view` int(11) NOT NULL DEFAULT 0,
  `md_mn_groupProoject` int(11) NOT NULL,
  `md_mn_url` text NOT NULL,
  `md_mn_sid` int(11) NOT NULL,
  `md_mn_lastbyid` int(11) NOT NULL,
  `md_mn_lastby` varchar(100) NOT NULL,
  `md_mn_urlen` text NOT NULL,
  `md_mn_urlcn` text NOT NULL,
  `md_mn_target` int(11) NOT NULL,
  PRIMARY KEY (`md_mn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_mng
CREATE TABLE IF NOT EXISTS `md_mng` (
  `md_mng_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_mng_masterkey` varchar(20) NOT NULL,
  `md_mng_language` varchar(50) NOT NULL,
  `md_mng_subject` varchar(200) NOT NULL,
  `md_mng_title` text NOT NULL,
  `md_mng_subjecten` varchar(200) NOT NULL,
  `md_mng_titleen` text NOT NULL,
  `md_mng_subjectcn` text NOT NULL,
  `md_mng_titlecn` text NOT NULL,
  `md_mng_crebyid` int(11) NOT NULL,
  `md_mng_creby` varchar(100) NOT NULL,
  `md_mng_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mng_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mng_status` varchar(32) NOT NULL DEFAULT 'Enable',
  `md_mng_order` int(11) NOT NULL,
  `md_mng_lastbyid` int(11) NOT NULL,
  `md_mng_lastby` varchar(100) NOT NULL,
  `md_mng_url` varchar(255) NOT NULL,
  `md_mng_urlen` varchar(255) NOT NULL,
  `md_mng_urlcn` varchar(255) NOT NULL,
  `md_mng_target` int(11) NOT NULL,
  `md_mng_view` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`md_mng_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_mnsg
CREATE TABLE IF NOT EXISTS `md_mnsg` (
  `md_mnsg_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_mnsg_masterkey` varchar(20) NOT NULL,
  `md_mnsg_language` varchar(50) NOT NULL,
  `md_mnsg_subject` varchar(200) NOT NULL,
  `md_mnsg_title` text NOT NULL,
  `md_mnsg_subjecten` varchar(200) NOT NULL,
  `md_mnsg_titleen` text NOT NULL,
  `md_mnsg_subjectcn` text NOT NULL,
  `md_mnsg_titlecn` text NOT NULL,
  `md_mnsg_crebyid` int(11) NOT NULL,
  `md_mnsg_creby` varchar(100) NOT NULL,
  `md_mnsg_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mnsg_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_mnsg_status` varchar(32) NOT NULL DEFAULT 'Enable',
  `md_mnsg_order` int(11) NOT NULL,
  `md_mnsg_gid` int(11) NOT NULL,
  `md_mnsg_lastbyid` int(11) NOT NULL,
  `md_mnsg_lastby` varchar(100) NOT NULL,
  `md_mnsg_url` varchar(255) NOT NULL,
  `md_mnsg_urlen` varchar(255) NOT NULL,
  `md_mnsg_urlcn` varchar(255) NOT NULL,
  `md_mnsg_target` int(11) NOT NULL,
  `md_mnsg_view` int(11) NOT NULL,
  PRIMARY KEY (`md_mnsg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_pdpa
CREATE TABLE IF NOT EXISTS `md_pdpa` (
  `md_pdpa_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_pdpa_masterkey` varchar(20) NOT NULL,
  `md_pdpa_language` varchar(50) NOT NULL,
  `md_pdpa_subject` text NOT NULL,
  `md_pdpa_title` text NOT NULL,
  `md_pdpa_htmlfilename` varchar(255) NOT NULL,
  `md_pdpa_pic` varchar(255) NOT NULL,
  `md_pdpa_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_pdpa_creby` varchar(100) NOT NULL,
  `md_pdpa_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_pdpa_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_pdpa_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_pdpa_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_pdpa_status` varchar(50) NOT NULL,
  `md_pdpa_order` int(11) NOT NULL DEFAULT 0,
  `md_pdpa_view` int(11) NOT NULL DEFAULT 0,
  `md_pdpa_year` int(11) NOT NULL,
  `md_pdpa_groupProoject` int(11) NOT NULL,
  `md_pdpa_description` text NOT NULL,
  `md_pdpa_keywords` text NOT NULL,
  `md_pdpa_metatitle` text NOT NULL,
  `md_pdpa_type` varchar(50) NOT NULL,
  `md_pdpa_filevdo` varchar(255) NOT NULL,
  `md_pdpa_url` text NOT NULL,
  `md_pdpa_updateBy` int(11) NOT NULL,
  `md_pdpa_pic2` varchar(255) NOT NULL,
  `md_pdpa_sid` int(11) NOT NULL,
  `md_pdpa_lastbyid` int(11) NOT NULL,
  `md_pdpa_lastby` varchar(100) NOT NULL,
  `md_pdpa_picshow` int(11) NOT NULL DEFAULT 0,
  `md_pdpa_theme` int(11) NOT NULL,
  `md_pdpa_theme_link` text NOT NULL,
  `md_pdpa_theme_type` int(11) NOT NULL,
  `md_pdpa_typeInfo` int(11) NOT NULL,
  `md_pdpa_urlc` text NOT NULL,
  `md_pdpa_target` int(11) NOT NULL,
  `md_pdpa_longi` varchar(255) NOT NULL,
  `md_pdpa_lati` varchar(255) NOT NULL,
  `md_pdpa_typec` int(11) NOT NULL,
  `md_pdpa_repicture` text NOT NULL,
  `md_pdpa_color` varchar(50) NOT NULL,
  `md_pdpa_ipaddress` varchar(255) NOT NULL,
  `md_pdpa_keysite` varchar(255) NOT NULL,
  `md_pdpa_accesstoken` text NOT NULL COMMENT 'ip + expire date',
  `md_pdpa_countsecretkey` int(11) NOT NULL,
  `md_pdpa_secretkeysite` text NOT NULL COMMENT 'md_cmg_secretkey',
  `md_pdpa_controlkey` varchar(255) NOT NULL,
  `md_pdpa_iprouter` varchar(255) NOT NULL,
  `md_pdpa_browser` varchar(100) NOT NULL,
  PRIMARY KEY (`md_pdpa_id`),
  UNIQUE KEY `md_pdpa_id` (`md_pdpa_id`),
  KEY `md_pdpa_id_2` (`md_pdpa_id`),
  KEY `md_pdpa_id_3` (`md_pdpa_id`),
  KEY `md_pdpa_crebyid` (`md_pdpa_crebyid`,`md_pdpa_groupProoject`,`md_pdpa_lastbyid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_short_urls
CREATE TABLE IF NOT EXISTS `md_short_urls` (
  `md_short_urls_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_short_urls_masterkey` text NOT NULL,
  `md_short_urls_long_url` text NOT NULL,
  `md_short_urls_short_url` text NOT NULL,
  `md_short_urls_contantid` int(11) NOT NULL,
  PRIMARY KEY (`md_short_urls_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_sit
CREATE TABLE IF NOT EXISTS `md_sit` (
  `md_sit_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_sit_masterkey` varchar(20) NOT NULL,
  `md_sit_language` varchar(50) NOT NULL,
  `md_sit_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_sit_creby` varchar(100) NOT NULL,
  `md_sit_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_sit_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_sit_lastbyid` int(11) NOT NULL,
  `md_sit_lastby` varchar(255) NOT NULL,
  `md_sit_description` text NOT NULL,
  `md_sit_keywords` text NOT NULL,
  `md_sit_metatitle` text NOT NULL,
  `md_sit_subject` varchar(255) NOT NULL,
  `md_sit_title` varchar(255) NOT NULL,
  `md_sit_titleen` varchar(255) NOT NULL,
  `md_sit_subjectsm` varchar(255) NOT NULL,
  `md_sit_titlesm` varchar(255) NOT NULL,
  `md_sit_social` text DEFAULT NULL,
  `md_sit_config` text DEFAULT NULL,
  `md_sit_addresspic` text DEFAULT NULL,
  `md_sit_addresspicen` text DEFAULT NULL,
  `md_sit_addresspiccn` text DEFAULT NULL,
  `md_sit_hotline` varchar(255) DEFAULT NULL,
  `md_sit_subjectoffice` varchar(150) NOT NULL,
  `md_sit_titleoffice` varchar(150) NOT NULL,
  `md_sit_keywordsen` varchar(255) DEFAULT NULL,
  `md_sit_descriptionen` varchar(255) DEFAULT NULL,
  `md_sit_metatitleen` varchar(255) DEFAULT NULL,
  `md_sit_subjecten` varchar(255) DEFAULT NULL,
  `md_sit_subjectofficeen` varchar(150) NOT NULL,
  `md_sit_subjectcn` varchar(150) NOT NULL,
  `md_sit_subjectofficecn` varchar(150) NOT NULL,
  `md_sit_keywordscn` varchar(150) NOT NULL,
  `md_sit_descriptioncn` varchar(150) NOT NULL,
  `md_sit_metatitlecn` varchar(150) NOT NULL,
  `md_sit_qr` varchar(255) DEFAULT NULL,
  `md_sit_hotlinepic` varchar(255) DEFAULT NULL,
  `md_sit_pic` varchar(255) DEFAULT NULL,
  `md_sit_slogan` text NOT NULL,
  `md_sit_sloganen` text NOT NULL,
  `md_sit_fac` text NOT NULL,
  `md_sit_about1` text NOT NULL,
  `md_sit_about2` text NOT NULL,
  `md_sit_about3` text NOT NULL,
  `md_sit_issn` text NOT NULL,
  `md_sit_suggestion1` text NOT NULL,
  `md_sit_suggestion2` text NOT NULL,
  `md_sit_journalth` varchar(255) NOT NULL,
  `md_sit_journalen` varchar(255) NOT NULL,
  `md_sit_aboutpic` text NOT NULL,
  PRIMARY KEY (`md_sit_id`),
  UNIQUE KEY `md_sit_id` (`md_sit_id`),
  KEY `md_sit_id_2` (`md_sit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_tgp
CREATE TABLE IF NOT EXISTS `md_tgp` (
  `md_tgp_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_tgp_masterkey` varchar(20) NOT NULL,
  `md_tgp_language` varchar(50) NOT NULL,
  `md_tgp_subject` text NOT NULL,
  `md_tgp_pic` varchar(255) NOT NULL,
  `md_tgp_url` text NOT NULL,
  `md_tgp_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_tgp_creby` varchar(100) NOT NULL,
  `md_tgp_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_tgp_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_tgp_status` varchar(50) NOT NULL,
  `md_tgp_order` int(11) NOT NULL DEFAULT 0,
  `md_tgp_title` text NOT NULL,
  `md_tgp_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_tgp_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_tgp_target` int(11) NOT NULL,
  `md_tgp_lastbyid` int(11) NOT NULL,
  `md_tgp_lastby` varchar(100) NOT NULL,
  `md_tgp_subjecten` text NOT NULL,
  `md_tgp_urlen` text NOT NULL,
  `md_tgp_titleen` text NOT NULL,
  `md_tgp_picen` text NOT NULL,
  `md_tgp_menu` varchar(255) NOT NULL,
  `md_tgp_subjectcn` text NOT NULL,
  `md_tgp_urlcn` text NOT NULL,
  `md_tgp_titlecn` text NOT NULL,
  `md_tgp_piccn` text NOT NULL,
  `md_tgp_typevdo` varchar(255) DEFAULT NULL,
  `md_tgp_filevdo` text DEFAULT NULL,
  `md_tgp_urlvdo` text DEFAULT NULL,
  `md_tgp_targetlang` text DEFAULT NULL,
  `md_tgp_targetlangen` text DEFAULT NULL,
  `md_tgp_targetlangcn` text DEFAULT NULL,
  `md_tgp_filevdoen` text DEFAULT NULL,
  `md_tgp_urlvdoen` text DEFAULT NULL,
  `md_tgp_filevdocn` text DEFAULT NULL,
  `md_tgp_urlvdocn` text DEFAULT NULL,
  `md_tgp_typevdoen` varchar(255) DEFAULT NULL,
  `md_tgp_typevdocn` varchar(255) DEFAULT NULL,
  `md_tgp_desc` varchar(255) NOT NULL,
  `md_tgp_desccn` varchar(255) NOT NULL,
  `md_tgp_descen` varchar(255) NOT NULL,
  `md_tgp_langth` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show 	',
  `md_tgp_langen` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show 	',
  `md_tgp_langcn` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show 	',
  PRIMARY KEY (`md_tgp_id`) USING BTREE,
  UNIQUE KEY `md_tgp_id` (`md_tgp_id`) USING BTREE,
  KEY `md_tgp_id_2` (`md_tgp_id`) USING BTREE,
  KEY `md_tgp_id_3` (`md_tgp_id`,`md_tgp_crebyid`,`md_tgp_lastbyid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.md_wel
CREATE TABLE IF NOT EXISTS `md_wel` (
  `md_wel_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_wel_masterkey` varchar(20) NOT NULL,
  `md_wel_language` varchar(50) NOT NULL,
  `md_wel_subject` text NOT NULL,
  `md_wel_pic` varchar(255) NOT NULL,
  `md_wel_url` text NOT NULL,
  `md_wel_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_wel_creby` varchar(100) NOT NULL,
  `md_wel_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_wel_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_wel_status` varchar(50) NOT NULL,
  `md_wel_order` int(11) NOT NULL DEFAULT 0,
  `md_wel_title` text NOT NULL,
  `md_wel_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_wel_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_wel_target` int(11) NOT NULL,
  `md_wel_lastbyid` int(11) NOT NULL,
  `md_wel_lastby` varchar(100) NOT NULL,
  `md_wel_subjecten` text NOT NULL,
  `md_wel_urlen` text NOT NULL,
  `md_wel_titleen` text NOT NULL,
  `md_wel_picen` text NOT NULL,
  `md_wel_menu` varchar(255) NOT NULL,
  `md_wel_subjectcn` text NOT NULL,
  `md_wel_urlcn` text NOT NULL,
  `md_wel_titlecn` text NOT NULL,
  `md_wel_piccn` text NOT NULL,
  `md_wel_typevdo` varchar(255) DEFAULT NULL,
  `md_wel_filevdo` text DEFAULT NULL,
  `md_wel_urlvdo` text DEFAULT NULL,
  `md_wel_targetlang` text DEFAULT NULL,
  `md_wel_targetlangen` text DEFAULT NULL,
  `md_wel_targetlangcn` text DEFAULT NULL,
  `md_wel_filevdoen` text DEFAULT NULL,
  `md_wel_urlvdoen` text DEFAULT NULL,
  `md_wel_filevdocn` text DEFAULT NULL,
  `md_wel_urlvdocn` text DEFAULT NULL,
  `md_wel_typevdoen` varchar(255) DEFAULT NULL,
  `md_wel_typevdocn` varchar(255) DEFAULT NULL,
  `md_wel_desc` varchar(255) NOT NULL,
  `md_wel_desccn` varchar(255) NOT NULL,
  `md_wel_descen` varchar(255) NOT NULL,
  `md_wel_langth` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show 	',
  `md_wel_langen` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show 	',
  `md_wel_langcn` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show 	',
  PRIMARY KEY (`md_wel_id`) USING BTREE,
  UNIQUE KEY `md_wel_id` (`md_wel_id`) USING BTREE,
  KEY `md_wel_id_2` (`md_wel_id`) USING BTREE,
  KEY `md_wel_id_3` (`md_wel_id`,`md_wel_crebyid`,`md_wel_lastbyid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.ot_amp
CREATE TABLE IF NOT EXISTS `ot_amp` (
  `ot_amp_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ot_amp_CODE` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ot_amp_NAME` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GEO_ID` int(11) NOT NULL DEFAULT 0,
  `PROVINCE_ID` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ot_amp_ID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=999 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.ot_dis
CREATE TABLE IF NOT EXISTS `ot_dis` (
  `ot_dis_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ot_dis_CODE` varchar(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ot_dis_NAME` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `AMPHUR_ID` int(11) NOT NULL DEFAULT 0,
  `PROVINCE_ID` int(11) NOT NULL DEFAULT 0,
  `GEO_ID` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ot_dis_ID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8861 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.ot_geo
CREATE TABLE IF NOT EXISTS `ot_geo` (
  `GEO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `GEO_NAME` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`GEO_ID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.ot_pro
CREATE TABLE IF NOT EXISTS `ot_pro` (
  `ot_pro_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ot_pro_CODE` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ot_pro_NAME` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GEO_ID` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ot_pro_ID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.ot_zipcodes
CREATE TABLE IF NOT EXISTS `ot_zipcodes` (
  `ot_zipcodes_id` int(11) NOT NULL AUTO_INCREMENT,
  `ot_zipcodes_district_code` varchar(6) COLLATE utf8_bin NOT NULL,
  `ot_zipcodes_zipcode` varchar(5) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ot_zipcodes_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7512 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.sy_grp
CREATE TABLE IF NOT EXISTS `sy_grp` (
  `sy_grp_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy_grp_name` varchar(150) NOT NULL,
  `sy_grp_lv` varchar(15) NOT NULL,
  `sy_grp_crebyid` int(11) NOT NULL,
  `sy_grp_creby` varchar(150) NOT NULL,
  `sy_grp_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sy_grp_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sy_grp_status` varchar(15) NOT NULL,
  `sy_grp_order` int(11) NOT NULL DEFAULT 0,
  `sy_grp_language` varchar(15) NOT NULL,
  `sy_grp_typemini` int(11) NOT NULL,
  PRIMARY KEY (`sy_grp_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.sy_logs
CREATE TABLE IF NOT EXISTS `sy_logs` (
  `sy_logs_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy_logs_action` varchar(255) NOT NULL,
  `sy_logs_sessid` text NOT NULL,
  `sy_logs_sid` int(11) NOT NULL,
  `sy_logs_sname` varchar(255) NOT NULL,
  `sy_logs_ip` varchar(255) NOT NULL,
  `sy_logs_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sy_logs_type` varchar(255) NOT NULL,
  `sy_logs_actiontype` int(11) NOT NULL,
  `sy_logs_url` text NOT NULL,
  `sy_logs_key` varchar(255) NOT NULL,
  `sy_logs_menuid` int(11) NOT NULL,
  PRIMARY KEY (`sy_logs_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1509 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.sy_mis
CREATE TABLE IF NOT EXISTS `sy_mis` (
  `sy_mis_perid` int(11) NOT NULL DEFAULT 0,
  `sy_mis_menuid` int(11) NOT NULL DEFAULT 0,
  `sy_mis_permission` varchar(255) NOT NULL,
  `sy_mis_language` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.sy_mnu
CREATE TABLE IF NOT EXISTS `sy_mnu` (
  `sy_mnu_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy_mnu_namethai` varchar(255) NOT NULL,
  `sy_mnu_parentid` varchar(255) NOT NULL DEFAULT '0',
  `sy_mnu_masterkey` varchar(255) NOT NULL,
  `sy_mnu_ismodule` varchar(255) NOT NULL,
  `sy_mnu_moduletype` varchar(255) NOT NULL,
  `sy_mnu_target` varchar(255) NOT NULL,
  `sy_mnu_icon` varchar(255) NOT NULL,
  `sy_mnu_linkpath` varchar(255) NOT NULL,
  `sy_mnu_order` int(11) NOT NULL DEFAULT 0,
  `sy_mnu_status` varchar(255) NOT NULL,
  `sy_mnu_language` varchar(255) NOT NULL,
  `sy_mnu_nameeng` varchar(255) NOT NULL,
  `sy_mnu_namechi` varchar(255) NOT NULL,
  `sy_mnu_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sy_mnu_hidden` varchar(255) DEFAULT NULL,
  `sy_mnu_typemini` int(11) NOT NULL,
  `sy_mnu_typepath` int(11) DEFAULT NULL,
  PRIMARY KEY (`sy_mnu_id`) USING BTREE,
  UNIQUE KEY `onesqa_sy_mnu_ID` (`sy_mnu_id`) USING BTREE,
  KEY `onesqa_sy_mnu_ID_2` (`sy_mnu_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=273 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.sy_sea
CREATE TABLE IF NOT EXISTS `sy_sea` (
  `sy_sea_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy_sea_language` varchar(40) NOT NULL,
  `sy_sea_masterkey` varchar(40) NOT NULL,
  `sy_sea_contantid` int(11) NOT NULL,
  `sy_sea_subject` text NOT NULL,
  `sy_sea_title` text NOT NULL,
  `sy_sea_keyword` longtext NOT NULL,
  `sy_sea_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sy_sea_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sy_sea_status` varchar(20) NOT NULL,
  `sy_sea_url` varchar(255) NOT NULL,
  `sy_sea_urlen` text NOT NULL,
  `sy_sea_subjecten` text NOT NULL,
  `sy_sea_titleen` text NOT NULL,
  `sy_sea_keyworden` text NOT NULL,
  `sy_sea_subjectcn` text NOT NULL,
  `sy_sea_titlecn` text NOT NULL,
  `sy_sea_keywordcn` text NOT NULL,
  `sy_sea_urlcn` varchar(255) NOT NULL,
  `sy_sea_show` int(5) NOT NULL DEFAULT 0 COMMENT '1 = show search, 2 not show search',
  PRIMARY KEY (`sy_sea_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.sy_stf
CREATE TABLE IF NOT EXISTS `sy_stf` (
  `sy_stf_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy_stf_prefix` varchar(10) NOT NULL,
  `sy_stf_gender` varchar(10) NOT NULL,
  `sy_stf_fnameeng` varchar(100) NOT NULL,
  `sy_stf_fnamethai` varchar(100) NOT NULL,
  `sy_stf_lnameeng` varchar(100) NOT NULL,
  `sy_stf_lnamethai` varchar(100) NOT NULL,
  `sy_stf_username` varchar(250) NOT NULL,
  `sy_stf_password` varchar(250) NOT NULL,
  `sy_stf_groupid` int(11) DEFAULT NULL,
  `sy_stf_address` varchar(255) DEFAULT NULL,
  `sy_stf_telephone` varchar(16) DEFAULT NULL,
  `sy_stf_mobile` varchar(16) DEFAULT NULL,
  `sy_stf_email` varchar(150) NOT NULL,
  `sy_stf_other` varchar(150) DEFAULT NULL,
  `sy_stf_picture` varchar(33) DEFAULT 'default.gif',
  `sy_stf_crebyid` int(11) NOT NULL DEFAULT 0,
  `sy_stf_creby` varchar(150) NOT NULL,
  `sy_stf_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sy_stf_lastdate` datetime DEFAULT NULL,
  `sy_stf_status` varchar(15) NOT NULL,
  `sy_stf_order` int(11) NOT NULL DEFAULT 0,
  `sy_stf_logdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sy_stf_masterkey` varchar(25) NOT NULL,
  `sy_stf_position` varchar(255) NOT NULL,
  PRIMARY KEY (`sy_stf_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.sy_stm
CREATE TABLE IF NOT EXISTS `sy_stm` (
  `sy_stm_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy_stm_memberID` int(11) NOT NULL,
  `sy_stm_menuID` int(11) NOT NULL,
  `sy_stm_order` int(11) NOT NULL,
  PRIMARY KEY (`sy_stm_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

-- Dumping structure for table 2022_git.sy_stt
CREATE TABLE IF NOT EXISTS `sy_stt` (
  `sy_stt_id` int(11) NOT NULL AUTO_INCREMENT,
  `sy_stt_lang` varchar(25) NOT NULL,
  `sy_stt_type` int(11) NOT NULL DEFAULT 0,
  `sy_stt_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sy_stt_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sy_stt_subject` varchar(255) DEFAULT NULL,
  `sy_stt_title` varchar(255) DEFAULT NULL,
  `sy_stt_titleB` varchar(255) DEFAULT NULL,
  `sy_stt_pic` varchar(255) DEFAULT NULL,
  `sy_stt_header` varchar(255) NOT NULL,
  `sy_stt_bg` varchar(255) NOT NULL,
  PRIMARY KEY (`sy_stt_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
