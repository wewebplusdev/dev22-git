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

-- Dumping structure for table 2022_bdn.md_tag
CREATE TABLE IF NOT EXISTS `md_tag` (
  `md_tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_tag_masterkey` varchar(20) NOT NULL,
  `md_tag_language` varchar(50) NOT NULL,
  `md_tag_subject` varchar(200) NOT NULL,
  `md_tag_title` mediumtext NOT NULL,
  `md_tag_subjecten` varchar(200) NOT NULL,
  `md_tag_titleen` mediumtext NOT NULL,
  `md_tag_crebyid` int(11) NOT NULL,
  `md_tag_creby` varchar(100) NOT NULL,
  `md_tag_credate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_tag_lastdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `md_tag_status` varchar(32) NOT NULL DEFAULT 'Enable',
  `md_tag_order` int(11) NOT NULL,
  `md_tag_lastbyid` int(11) NOT NULL,
  `md_tag_lastby` varchar(100) NOT NULL,
  `md_tag_pic` mediumtext NOT NULL,
  PRIMARY KEY (`md_tag_id`),
  KEY `md_tag_id` (`md_tag_id`,`md_tag_crebyid`,`md_tag_lastbyid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
