# MySQL-Front 3.2  (Build 13.39)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='SYSTEM' */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;


# Host: localhost    Database: produtos
# ------------------------------------------------------
# Server version 5.0.24a-community-nt

DROP DATABASE IF EXISTS `produtos`;
CREATE DATABASE `produtos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `produtos`;

#
# Table structure for table produtos
#

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Dumping data for table produtos
#

INSERT INTO `produtos` VALUES (1,'hd');
INSERT INTO `produtos` VALUES (2,'memória');
INSERT INTO `produtos` VALUES (3,'processador');
INSERT INTO `produtos` VALUES (4,'gabinete');
INSERT INTO `produtos` VALUES (5,'gravadora');
INSERT INTO `produtos` VALUES (6,'fonte');
INSERT INTO `produtos` VALUES (7,'cooler');

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
