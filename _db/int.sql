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

-- Dumping structure for table 2022_nrct.md_int
CREATE TABLE IF NOT EXISTS `md_int` (
  `md_int_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_int_masterkey` varchar(20) NOT NULL,
  `md_int_language` varchar(50) NOT NULL,
  `md_int_subject` text NOT NULL,
  `md_int_pic` varchar(255) NOT NULL,
  `md_int_pic2` varchar(255) NOT NULL,
  `md_int_pic3` varchar(255) NOT NULL,
  `md_int_pic4` varchar(255) NOT NULL,
  `md_int_pic5` varchar(255) NOT NULL,
  `md_int_pic6` varchar(255) NOT NULL,
  `md_int_pic7` varchar(255) NOT NULL,
  `md_int_icon` varchar(255) NOT NULL,
  `md_int_url` text NOT NULL,
  `md_int_crebyid` int(11) NOT NULL DEFAULT 0,
  `md_int_creby` varchar(100) NOT NULL,
  `md_int_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_int_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_int_status` varchar(50) NOT NULL,
  `md_int_order` int(11) NOT NULL DEFAULT 0,
  `md_int_title` text NOT NULL,
  `md_int_head` text NOT NULL,
  `md_int_sdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_int_edate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_int_target` int(11) NOT NULL,
  `md_int_lastbyid` int(11) NOT NULL,
  `md_int_lastby` varchar(100) NOT NULL,
  `md_int_subjecten` text NOT NULL,
  `md_int_urlen` text NOT NULL,
  `md_int_titleen` text NOT NULL,
  `md_int_picen` text NOT NULL,
  `md_int_gid` int(11) NOT NULL,
  `md_int_menu` varchar(255) NOT NULL,
  `md_int_subjectcn` text NOT NULL,
  `md_int_urlcn` text NOT NULL,
  `md_int_titlecn` text NOT NULL,
  `md_int_piccn` text NOT NULL,
  `md_int_typevdo` varchar(255) DEFAULT NULL,
  `md_int_filevdo` text DEFAULT NULL,
  `md_int_urlvdo` text DEFAULT NULL,
  `md_int_targetlang` text DEFAULT NULL,
  `md_int_targetlangen` text DEFAULT NULL,
  `md_int_targetlangcn` text DEFAULT NULL,
  `md_int_filevdoen` text DEFAULT NULL,
  `md_int_urlvdoen` text DEFAULT NULL,
  `md_int_filevdocn` text DEFAULT NULL,
  `md_int_urlvdocn` text DEFAULT NULL,
  `md_int_typevdoen` varchar(255) DEFAULT NULL,
  `md_int_typevdocn` varchar(255) DEFAULT NULL,
  `md_int_desc` varchar(255) NOT NULL,
  `md_int_desccn` varchar(255) NOT NULL,
  `md_int_descen` varchar(255) NOT NULL,
  `md_int_langth` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show 	',
  `md_int_langen` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show 	',
  `md_int_langcn` int(11) DEFAULT NULL COMMENT '0=not show, 1 = show 	',
  PRIMARY KEY (`md_int_id`),
  UNIQUE KEY `md_int_id` (`md_int_id`),
  KEY `md_int_id_2` (`md_int_id`),
  KEY `md_int_id_3` (`md_int_id`,`md_int_crebyid`,`md_int_lastbyid`,`md_int_gid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
