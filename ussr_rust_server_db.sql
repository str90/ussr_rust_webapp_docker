-- MySQL dump 10.16  Distrib 10.1.23-MariaDB, for debian-linux-gnueabihf (armv7l)
--
-- Host: localhost    Database: ussr_rust_server_db
-- ------------------------------------------------------
-- Server version	10.1.23-MariaDB-9+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `billing_table`
--

DROP TABLE IF EXISTS `billing_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(50) NOT NULL,
  `Item` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Pay_amount` int(11) NOT NULL,
  `isDispensed` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing_table`
--

LOCK TABLES `billing_table` WRITE;
/*!40000 ALTER TABLE `billing_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `billing_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billing_table_costs`
--

DROP TABLE IF EXISTS `billing_table_costs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_table_costs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Item` varchar(50) NOT NULL,
  `Cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing_table_costs`
--

LOCK TABLES `billing_table_costs` WRITE;
/*!40000 ALTER TABLE `billing_table_costs` DISABLE KEYS */;
INSERT INTO `billing_table_costs` VALUES (1,'wpn_ak47',400),(2,'wpn_bolt',600),(3,'wpn_crossbow',20),(4,'wpn_csmg',300),(5,'wpn_db',150),(6,'wpn_eoka',70),(7,'wpn_legolas',10),(8,'wpn_pump_shotgun',150),(9,'wpn_checkist',100),(10,'wpn_pistol',110),(11,'wpn_dmr',350),(12,'wpn_thompson',250),(13,'wpn_waterpipe',70),(14,'wpn_holo',100),(15,'wpn_4x',300),(16,'wpn_boost',400),(17,'wpn_brake',100);
/*!40000 ALTER TABLE `billing_table_costs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('00970lceauosdvohh4j3k716porvauj3','192.168.57.16',1513750499,'__ci_last_regenerate|i:1513750499;'),('2jkvg01m7ch8ni3hmhgasnfnn7930e55','192.168.57.16',1514719629,'__ci_last_regenerate|i:1514719629;'),('4e04ads2eai86lfi96p245bndcrdm84a','168.1.128.53',1513786321,'__ci_last_regenerate|i:1513786321;'),('4lf1l74djigl2jf9vmril5smh157485f','192.168.55.254',1513787301,'__ci_last_regenerate|i:1513787248;'),('4lvpn2d427neu9llf380nbpltljm6c99','192.168.57.16',1513763323,'__ci_last_regenerate|i:1513763323;'),('7sbkh7cs43titp89oj9ccdrkmfr9pmnk','192.168.57.16',1513779679,'__ci_last_regenerate|i:1513779679;cart_objects|a:1:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:12:\"wpn_crossbow\";s:23:\"\0MarketItem\0item_amount\";s:1:\"5\";}}'),('858j5lmipundli60hmsmi3seq3i8o8ga','192.168.57.16',1513782540,'__ci_last_regenerate|i:1513782536;'),('85uq19n2e04hsit7rsae9k15ah509qjo','192.168.57.16',1513764879,'__ci_last_regenerate|i:1513764879;'),('8gobts7ljgg3mubdod63vd2kd2cal8sh','192.168.57.16',1513762234,'__ci_last_regenerate|i:1513762234;'),('8vqgi7pdde5ne95o58n5e2sv9tbqeq3e','192.168.57.16',1513768246,'__ci_last_regenerate|i:1513768246;'),('953q3gcuiu683m16gpjdc7rm8fdkunt1','192.168.57.16',1513764576,'__ci_last_regenerate|i:1513764576;'),('a67b7kdh6jgma08ic14mji5r4jcs79sn','192.168.57.16',1513761628,'__ci_last_regenerate|i:1513761628;'),('a6fk8eb3vqttdlh4q0srk4b4s0c589s0','192.168.57.16',1513775180,'__ci_last_regenerate|i:1513775180;'),('aqjc8qmbubjigrl901lni9fjh9rp871b','192.168.57.16',1513787417,'__ci_last_regenerate|i:1513787405;'),('bkag2e076ieuvvfkt5767noe41nd0ksi','192.168.57.16',1513781104,'__ci_last_regenerate|i:1513781104;cart_objects|a:2:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:12:\"wpn_crossbow\";s:23:\"\0MarketItem\0item_amount\";s:1:\"5\";}i:1;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:8:\"wpn_bolt\";s:23:\"\0MarketItem\0item_amount\";s:1:\"2\";}}'),('ct9t6o3etrgi7o326cp7avl42qlfjcgu','192.168.57.16',1513764256,'__ci_last_regenerate|i:1513764256;'),('d1jbh2g8g6koaugnvd4k5t8ro7he9bt3','192.168.57.16',1513787352,'__ci_last_regenerate|i:1513787343;'),('dhilvlvn8iued13btohqkkd2q00mcjp7','192.168.57.16',1513781601,'__ci_last_regenerate|i:1513781601;cart_objects|a:2:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:12:\"wpn_crossbow\";s:23:\"\0MarketItem\0item_amount\";s:1:\"5\";}i:1;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:8:\"wpn_bolt\";s:23:\"\0MarketItem\0item_amount\";s:1:\"2\";}}'),('dnjlcrhl6plcuqvc9fkv7pfveut8hsf6','192.168.57.16',1513753801,'__ci_last_regenerate|i:1513753767;'),('dssthqrc5rbb0ub887g0nk38i7dgnldg','192.168.57.16',1513753767,'__ci_last_regenerate|i:1513753767;'),('e0ppa7brfcs8n42c6udcsiivjkm513nc','192.168.57.16',1513768498,'__ci_last_regenerate|i:1513768246;'),('e3k8nmav918hpjar0t0c72pjkmsqu4nr','192.168.57.16',1513874230,'__ci_last_regenerate|i:1513874230;'),('e4pd4qmpobunso29tbc3qt7vo83jba8o','192.168.57.16',1513787430,'__ci_last_regenerate|i:1513787284;'),('e61tsnklst21o8f1f7ghl9q2vo2k4v2t','192.168.57.16',1513763641,'__ci_last_regenerate|i:1513763641;'),('ed53mo1jusj0ovin3ssu75duvv81ks0l','192.168.57.16',1513783353,'__ci_last_regenerate|i:1513783353;'),('g9uh1rl8ilvsdb5t5qgpev9rl3pgc9t0','192.168.57.16',1513782332,'__ci_last_regenerate|i:1513782281;cart_objects|a:3:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:8:\"wpn_bolt\";s:23:\"\0MarketItem\0item_amount\";s:1:\"2\";}i:1;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:8:\"wpn_ak47\";s:23:\"\0MarketItem\0item_amount\";s:1:\"3\";}i:2;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:8:\"wpn_bolt\";s:23:\"\0MarketItem\0item_amount\";s:1:\"2\";}}'),('gpvho1etjdv3jdvjbo800cae76eddk25','192.168.57.16',1513761325,'__ci_last_regenerate|i:1513761325;'),('hfg0fbfkgievb3820qttb4mvlshmmv3v','192.168.57.16',1513775516,'__ci_last_regenerate|i:1513775516;'),('hp9blt1vj1ig62g9ne5fo8bs6ho6h6i3','192.168.57.16',1513782281,'__ci_last_regenerate|i:1513782281;cart_objects|a:3:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:8:\"wpn_bolt\";s:23:\"\0MarketItem\0item_amount\";s:1:\"2\";}i:1;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:8:\"wpn_ak47\";s:23:\"\0MarketItem\0item_amount\";s:1:\"3\";}i:2;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:8:\"wpn_bolt\";s:23:\"\0MarketItem\0item_amount\";s:1:\"2\";}}'),('j5npmcf1qt7kfmcn065567f4epoa5dck','192.168.57.16',1513769020,'__ci_last_regenerate|i:1513769020;'),('jfl12ascg3d0c0pkk9q50639r7vtgjac','192.168.57.16',1513763954,'__ci_last_regenerate|i:1513763954;'),('lb1cd2nn7na00a6fgnp7n1dg50db8ne1','192.168.57.16',1513786111,'__ci_last_regenerate|i:1513786111;'),('lntg8s9cdsd8d3ibilumkv6l99etb6ip','192.168.57.16',1513774445,'__ci_last_regenerate|i:1513774445;'),('m2hapdqfkvi7rb6pr7rdf4unitgklcqk','192.168.57.16',1513874531,'__ci_last_regenerate|i:1513874244;'),('n9g37m4je6gnl0he739s7vu128n9oua6','192.168.57.16',1513775833,'__ci_last_regenerate|i:1513775833;cart_objects|a:1:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:12:\"wpn_crossbow\";s:23:\"\0MarketItem\0item_amount\";s:1:\"5\";}}'),('nkc4j2p3a8oj3p9v8cbh4ue3bflbung9','192.168.57.16',1513781977,'__ci_last_regenerate|i:1513781977;cart_objects|a:1:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:8:\"wpn_ak47\";s:23:\"\0MarketItem\0item_amount\";s:1:\"2\";}}'),('npl7enitdg983pjs95ab1f96o2s1gnpk','192.168.57.16',1513768315,'__ci_last_regenerate|i:1513768307;'),('op5bcsnaljbvtip7kqj39trm2n1aoje0','192.168.57.16',1513774139,'__ci_last_regenerate|i:1513774139;'),('ovi8lb5sqni350chjmc9be92el63urju','192.168.57.16',1513780769,'__ci_last_regenerate|i:1513780769;cart_objects|a:1:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:12:\"wpn_crossbow\";s:23:\"\0MarketItem\0item_amount\";s:1:\"5\";}}'),('pf1hjk40gp3egss5s8sac3pqnbkrm5ck','192.168.57.16',1513787284,'__ci_last_regenerate|i:1513787284;'),('pl4ja5rehh0i232vm3uasurmdpftv4ui','192.168.57.16',1513765306,'__ci_last_regenerate|i:1513765306;'),('s6kvjfbkljdrra300h9u7hrpfh9os4gg','192.168.57.16',1513776771,'__ci_last_regenerate|i:1513776771;cart_objects|a:1:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:12:\"wpn_crossbow\";s:23:\"\0MarketItem\0item_amount\";s:1:\"5\";}}'),('s8d57s3qhrvp4r1nhk1pnrg14l6hhrkv','192.168.57.16',1513748916,'__ci_last_regenerate|i:1513748916;'),('sggb8ceuj1s6tqr8mpoebs30jp8qebi6','192.168.57.16',1513782999,'__ci_last_regenerate|i:1513782999;cart_objects|a:1:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:8:\"wpn_ak47\";s:23:\"\0MarketItem\0item_amount\";s:1:\"2\";}}'),('v5u0gaidag5puti24tsqkjfeeh5g1s33','192.168.57.16',1513762607,'__ci_last_regenerate|i:1513762607;'),('v8t7jvp11qd6vchd0j17fnfghosa3nha','192.168.57.16',1513780425,'__ci_last_regenerate|i:1513780425;cart_objects|a:1:{i:0;O:10:\"MarketItem\":2:{s:16:\"\0MarketItem\0item\";s:12:\"wpn_crossbow\";s:23:\"\0MarketItem\0item_amount\";s:1:\"5\";}}');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-23 10:16:54
