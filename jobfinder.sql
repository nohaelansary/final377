-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: jobfinder
-- ------------------------------------------------------
-- Server version	5.6.34-log

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
-- Table structure for table `job_results`
--

DROP TABLE IF EXISTS `job_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_results` (
  `idjob_results` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `job_title` varchar(45) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`idjob_results`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_results`
--

LOCK TABLES `job_results` WRITE;
/*!40000 ALTER TABLE `job_results` DISABLE KEYS */;
INSERT INTO `job_results` VALUES (1,'Technical Manager',100),(2,'Technical Manager',99),(3,'Technical Manager',98),(4,'Technical Manager',97),(5,'Technical Manager',96),(6,'Technical Manager',95),(7,'Technical Manager',94),(8,'Technical Manager',93),(9,'Technical Manager',92),(10,'Technical Manager',91),(11,'Technical Manager',90),(12,'Director',89),(13,'Director',88),(14,'Director',87),(15,'Director',86),(16,'Director',85),(17,'Director',84),(18,'Director',83),(19,'Director',82),(20,'Director',81),(21,'Director',80),(22,'Information Researcher',79),(23,'Information Researcher',78),(24,'Information Researcher',77),(25,'Information Researcher',76),(26,'Information Researcher',75),(27,'Information Researcher',74),(28,'Information Researcher',73),(29,'Information Researcher',72),(30,'Information Researcher',71),(31,'Information Researcher',70),(32,'Information Researcher',69),(33,'Information Researcher',68),(34,'Information Researcher',67),(35,'Information Researcher',66),(36,'Information Researcher',65),(37,'UI Developer',64),(38,'UI Developer',63),(39,'UI Developer',62),(40,'UI Developer',61),(41,'UI Developer',60),(42,'UI Developer',59),(43,'UI Developer',58),(44,'UI Developer',57),(45,'UI Developer',55),(46,'UI Developer',56),(47,'Python Developer',54),(48,'Python Developer',54),(49,'Python Developer',53),(50,'Python Developer',52),(51,'Python Developer',51),(52,'Python Developer',50),(53,'Python Developer',49),(54,'Python Developer',48),(55,'Python Developer',47),(56,'Python Developer',46),(57,'Data Scientist',45),(58,'Data Scientist',44),(59,'Data Scientist',43),(60,'Data Scientist',43),(61,'Data Scientist',42),(62,'Data Scientist',41),(63,'Data Scientist',40),(64,'Data Scientist',39),(65,'Data Scientist',38),(66,'Data Scientist',37),(67,'Data Scientist',36),(68,'UX Designer',35),(69,'UX Designer',34),(70,'UX Designer',33),(71,'UX Designer',32),(72,'UX Designer',31),(73,'UX Designer',31),(74,'UX Designer',30),(75,'UX Designer',29),(76,'UX Designer',28),(77,'UX Designer',26),(78,'UX Designer',27),(79,'UX Designer',26),(80,'UX Designer',25),(81,'Graphic Designer',24),(82,'Graphic Designer',23),(83,'Graphic Designer',22),(84,'Graphic Designer',21),(85,'Graphic Designer',20),(86,'Graphic Designer',19),(87,'Graphic Designer',18),(88,'Graphic Designer',17),(89,'Graphic Designer',16),(90,'Graphic Designer',15),(91,'Graphic Designer',14),(92,'Graphic Designer',13),(93,'Graphic Designer',12),(94,'Graphic Designer',11),(95,'Graphic Designer',10),(96,'Graphic Designer',9),(97,'Graphic Designer',8),(98,'Graphic Designer',7),(99,'Graphic Designer',6),(100,'Graphic Designer',5),(101,'Graphic Designer',4),(102,'Graphic Designer',3),(103,'Graphic Designer',3),(104,'Graphic Designer',2),(105,'Graphic Designer',1);
/*!40000 ALTER TABLE `job_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userinfo` (
  `score_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `score` int(6) NOT NULL,
  `score1` int(6) NOT NULL,
  `score2` int(6) NOT NULL,
  `score3` int(6) NOT NULL,
  `users_user_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`score_id`,`users_user_id`),
  KEY `fk_userinfo_users_idx` (`users_user_id`),
  CONSTRAINT `fk_userinfo_users` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfo`
--

LOCK TABLES `userinfo` WRITE;
/*!40000 ALTER TABLE `userinfo` DISABLE KEYS */;
/*!40000 ALTER TABLE `userinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-15  5:32:47
