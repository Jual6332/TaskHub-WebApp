-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Table structure for table `CompletedTasks`
--

DROP TABLE IF EXISTS `CompletedTasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CompletedTasks` (
  `id` int(2) NOT NULL,
  `manager` text NOT NULL,
  `workers` text NOT NULL,
  `description` text NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `completed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CompletedTasks`
--

LOCK TABLES `CompletedTasks` WRITE;
/*!40000 ALTER TABLE `CompletedTasks` DISABLE KEYS */;
INSERT INTO `CompletedTasks` VALUES (4,'Lucy Wilkinson','Sean Oneal','Set up trello',10,'2016-06-14'),(5,'Lucy Wilkinson','Sean Oneal','Project part 1',9,'2016-06-12'),(6,'Sean Oneal','Justn Alvey','Team meating',10,'2016-06-16'),(7,'Sean Oneal','Brandon Spitler','create database',8,'2016-06-16');
/*!40000 ALTER TABLE `CompletedTasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `InProgress`
--

DROP TABLE IF EXISTS `InProgress`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `InProgress` (
  `id` int(2) NOT NULL,
  `manager` text NOT NULL,
  `workers` text NOT NULL,
  `description` text NOT NULL,
  `difficulty` int(11) NOT NULL,
  `due` date NOT NULL,
  `assigned` date NOT NULL,
  `progress` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `InProgress`
--

LOCK TABLES `InProgress` WRITE;
/*!40000 ALTER TABLE `InProgress` DISABLE KEYS */;
INSERT INTO `InProgress` VALUES (0,'Lucy Wilkinson','Sean Oneal','Create USER-1 function',2,'2016-07-01','2016-06-10','Just started'),(1,'Sean Oneal','Justin Alvey','create USER-2 function',3,'2016-06-23','2016-06-11','Testing'),(2,'Sean Oneal','Justin Alvey','create USER-3 function',2,'2016-06-22','2016-06-12','Designing'),(3,'Sean Oneal','Brandon Spitler','create Func-01 fucntion',2,'2016-06-17','2016-06-11','Have not started'),(0,'Lucy Wilkinson','Sean Oneal','Create USER-1 function',2,'2016-07-01','2016-06-10','Just started'),(1,'Sean Oneal','Justin Alvey','create USER-2 function',3,'2016-06-23','2016-06-11','Testing'),(2,'Sean Oneal','Justin Alvey','create USER-3 function',2,'2016-06-22','2016-06-12','Designing'),(3,'Sean Oneal','Brandon Spitler','create Func-01 fucntion',2,'2016-06-17','2016-06-11','Have not started');
/*!40000 ALTER TABLE `InProgress` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `manager` text,
  `employees` text,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `recieved` text,
  `sent` text,
  `key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'Sean ONeal','Lucy Wilkinson','Head Honcho','luwi8498','yaySchool!',NULL,'0',123),(2,'Lucy Wilkinson','Justin Alvey, Brandon Spitler','Sean ONeal','Hungry','seon7364','password','0','1,2,3',456),(3,'Sean ONeal',NULL,'Justin Alvey','Guy 1','jual6332','8674lion','1,2',NULL,789),(4,'Sean ONeal',NULL,'Brandon Spitler','Guy 2','brsp7274','guest','3',NULL,719),(1,NULL,'Sean ONeal','Lucy Wilkinson','Head Honcho','luwi8498','yaySchool!',NULL,'0',123),(2,'Lucy Wilkinson','Justin Alvey, Brandon Spitler','Sean ONeal','Hungry','seon7364','password','0','1,2,3',456),(3,'Sean ONeal',NULL,'Justin Alvey','Guy 1','jual6332','8674lion','1,2',NULL,789),(4,'Sean ONeal',NULL,'Brandon Spitler','Guy 2','brsp7274','guest','3',NULL,719),(1,NULL,'Sean ONeal','Lucy Wilkinson','Head Honcho','luwi8498','yaySchool!',NULL,'0',123),(2,'Lucy Wilkinson','Justin Alvey, Brandon Spitler','Sean ONeal','Hungry','seon7364','password','0','1,2,3',456),(3,'Sean ONeal',NULL,'Justin Alvey','Guy 1','jual6332','8674lion','1,2',NULL,789),(4,'Sean ONeal',NULL,'Brandon Spitler','Guy 2','brsp7274','guest','3',NULL,719),(1,NULL,'Sean ONeal','Lucy Wilkinson','Head Honcho','luwi8498','yaySchool!',NULL,'0',123),(2,'Lucy Wilkinson','Justin Alvey, Brandon Spitler','Sean ONeal','Hungry','seon7364','password','0','1,2,3',456),(3,'Sean ONeal',NULL,'Justin Alvey','Guy 1','jual6332','8674lion','1,2',NULL,789),(4,'Sean ONeal',NULL,'Brandon Spitler','Guy 2','brsp7274','guest','3',NULL,719);
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

-- Dump completed on 2016-06-16 13:32:28
