-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: authorization
-- ------------------------------------------------------
-- Server version	10.3.22-MariaDB

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
-- Table structure for table `password_reset_temp`
--

DROP TABLE IF EXISTS `password_reset_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_temp` (
  `email` varchar(90) DEFAULT NULL,
  `kkey` varchar(150) DEFAULT NULL,
  `exptime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_temp`
--

LOCK TABLES `password_reset_temp` WRITE;
/*!40000 ALTER TABLE `password_reset_temp` DISABLE KEYS */;
INSERT INTO `password_reset_temp` VALUES ('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f6474563c8fad24a','2020-09-20 11:28:49'),('somnath.mondal@americaniche.com','768e78024aa8fdb9b8fe87be86f6474580d6335fdc','2020-09-20 11:34:17'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f6474569c3a20769','2020-09-20 11:34:53'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f647450e07344410','2020-09-20 11:35:28'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f64745d1df6c2014','2020-09-20 11:38:11'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f64745832124fb2f','2020-09-20 11:44:00'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f64745ca2a527a74','2020-09-20 11:59:30'),('somnath.mondal@americaniche.com','768e78024aa8fdb9b8fe87be86f647452733fa7482','2020-09-20 12:07:05'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f64745e91f90b918','2020-09-20 12:33:16'),('somnath.mondal@americaniche.com','768e78024aa8fdb9b8fe87be86f64745d049e47645','2020-09-20 12:57:01'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f647458c2175d0a1','2020-09-20 13:02:26'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f6474517ecf1e4c5','2020-09-20 13:07:20'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f6474530fef70d34','2020-09-20 13:08:35'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f64745c69a31e3b5','2020-09-20 13:09:53'),('somnath.mondal@americaniche.com','768e78024aa8fdb9b8fe87be86f64745842b057574','2020-09-21 06:28:03'),('anamika.singh@americaniche.com','768e78024aa8fdb9b8fe87be86f647457f20111c79','2020-09-22 18:33:26');
/*!40000 ALTER TABLE `password_reset_temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_pswd`
--

DROP TABLE IF EXISTS `user_pswd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_pswd` (
  `user_id` int(11) NOT NULL,
  `password` varchar(59) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  UNIQUE KEY `userid` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_pswd`
--

LOCK TABLES `user_pswd` WRITE;
/*!40000 ALTER TABLE `user_pswd` DISABLE KEYS */;
INSERT INTO `user_pswd` VALUES (1,'americaniche','2020-09-19 14:01:02'),(3,'mobile','2020-09-19 14:02:02'),(4,'guitar','2020-09-19 14:02:02'),(5,'violin','2020-09-19 14:02:02'),(7,'123',NULL);
/*!40000 ALTER TABLE `user_pswd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userdetails` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `privilege` varchar(50) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `userid` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userdetails`
--

LOCK TABLES `userdetails` WRITE;
/*!40000 ALTER TABLE `userdetails` DISABLE KEYS */;
INSERT INTO `userdetails` VALUES (1,'khounish','admin','info@americaniche.com'),(2,'santanu','admin','santanu@americaniche.com'),(3,'anamika','student','anamika.singh@americaniche.com'),(4,'abhishek','student','abhishek@americaniche.com'),(5,'somnath','student','somnath.mondal@americaniche.com'),(6,'kiranmayi','student','kiranmayi@americaniche.com'),(7,'user','student',NULL);
/*!40000 ALTER TABLE `userdetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-19 16:38:13