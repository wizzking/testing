-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: wapik
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_cont`
--

DROP TABLE IF EXISTS `data_cont`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_cont` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_cont`
--

LOCK TABLES `data_cont` WRITE;
/*!40000 ALTER TABLE `data_cont` DISABLE KEYS */;
INSERT INTO `data_cont` VALUES (1,'cuadro.png','Random#1','descripcion#1',1),(2,'quimica.png','Random#2','descrip#2',1),(3,'ionic.png','Random#3','descrip#3',1),(4,'quimica.png','ran','qwe',1);
/*!40000 ALTER TABLE `data_cont` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_general`
--

DROP TABLE IF EXISTS `data_general`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `Best_of_our_features` text,
  `Meet_Our_Team` text,
  `Get_In_Touch_With_Us` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_general`
--

LOCK TABLES `data_general` WRITE;
/*!40000 ALTER TABLE `data_general` DISABLE KEYS */;
INSERT INTO `data_general` VALUES (1,'+52 6691005726','okami_@hotmail.com','miguel lavegaa #6729','lalala','lololololo','lulululu',1);
/*!40000 ALTER TABLE `data_general` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_home_cont`
--

DROP TABLE IF EXISTS `data_home_cont`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_home_cont` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_home_cont`
--

LOCK TABLES `data_home_cont` WRITE;
/*!40000 ALTER TABLE `data_home_cont` DISABLE KEYS */;
INSERT INTO `data_home_cont` VALUES (1,'esfera.png','1111','aaaaaa',1),(2,'idea.png','2222','bbbbb',1),(3,'pixel.png','3333','ccccc',1),(4,'nuve.png','4444','ddddd',1),(5,'pixel.png','5555','eeeee',1),(6,'pixel.png','6666','ffffff',1);
/*!40000 ALTER TABLE `data_home_cont` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_include`
--

DROP TABLE IF EXISTS `data_include`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_include` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_include`
--

LOCK TABLES `data_include` WRITE;
/*!40000 ALTER TABLE `data_include` DISABLE KEYS */;
INSERT INTO `data_include` VALUES (1,'Maecenas faucibus mollis interdum',1),(2,'Maecenas faucibus mollis interdum',1),(3,'Maecenas faucibus mollis interdum',1),(4,'Maecenas faucibus mollis interdum',1),(5,'Maecenas faucibus mollis interdum',1),(6,'Maecenas faucibus mollis interdum',1),(7,'Maecenas faucibus mollis interdum',1),(8,'asdasdas',1),(9,'kmjnhbgvfcdxs',1),(10,'kmjnhbgvfcdxs',1),(11,'olol',1),(12,'zzzzz',0),(13,'wwwww',0);
/*!40000 ALTER TABLE `data_include` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_plan`
--

DROP TABLE IF EXISTS `data_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_plan`
--

LOCK TABLES `data_plan` WRITE;
/*!40000 ALTER TABLE `data_plan` DISABLE KEYS */;
INSERT INTO `data_plan` VALUES (1,'soso',1,'gt','asdasdasd<br>asd',1),(2,'asd',2,'rf','asdasdasdas',1),(3,'zxc',3,'fr','asdasdasdqweqw',1),(4,'asd',4,'de','asdasdqweafdas',1),(5,'eqw',5,'ed','asd2dqsadas',1),(6,'asd',6,'q','dfsnvuoewfwe',0),(7,'jojo',12,'jo','jojo',1);
/*!40000 ALTER TABLE `data_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_team`
--

DROP TABLE IF EXISTS `data_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `select` int(11) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_team`
--

LOCK TABLES `data_team` WRITE;
/*!40000 ALTER TABLE `data_team` DISABLE KEYS */;
INSERT INTO `data_team` VALUES (1,'doña.jpg','random','jefasa',1,1,'nosenosenosenosenose'),(2,'doña2.jpg','asd','asd',1,0,'asdasdas'),(3,'doña.jpg','zxc','cvb',1,0,'asdasd'),(4,'doña.jpg','zasd','cew',1,0,'asdas');
/*!40000 ALTER TABLE `data_team` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-12  5:29:51
