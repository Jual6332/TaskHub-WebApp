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

/*!40000 ALTER TABLE `CompletedTasks` DISABLE KEYS */;
INSERT INTO `CompletedTasks` VALUES (4,'Lucy Wilkinson','Sean Oneal','Set up trello',10,'2016-06-14'),(5,'Lucy Wilkinson','Sean Oneal','Project part 1',9,'2016-06-12'),(6,'Sean Oneal','Justin Alvey','Team meating',10,'2016-06-16'),(7,'Sean Oneal','Brandon Spitler','create database',8,'2016-06-16');
/*!40000 ALTER TABLE `CompletedTasks` ENABLE KEYS */;
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

/*!40000 ALTER TABLE `InProgress` DISABLE KEYS */;
INSERT INTO `InProgress` VALUES (0,'Lucy Wilkinson','Sean Oneal','Create USER-1 function',2,'2016-07-01','2016-06-10','Just started'),(1,'Sean Oneal','Justin Alvey','create USER-2 function',3,'2016-06-23','2016-06-11','Testing'),(2,'Sean Oneal','Justin Alvey','create USER-3 function',2,'2016-06-22','2016-06-12','Designing'),(3,'Sean Oneal','Brandon Spitler','create Func-01 fucntion',2,'2016-06-17','2016-06-11','Have not started');

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
ALTER TABLE `users` ADD PRIMARY KEY(`key`);
ALTER TABLE `users` DROP PRIMARY KEY, ADD PRIMARY KEY(`id`);
ALTER TABLE `users` CHANGE `id` `id` INT(2) NOT NULL AUTO_INCREMENT;
ALTER TABLE `users` CHANGE `recieved` `received` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES (1,NULL,'Sean ONeal','Lucy Wilkinson','Head Honcho','luwi8498@colorado.edu','yaySchool!',NULL,'0',123),(2,'Lucy Wilkinson','Justin Alvey, Brandon Spitler','Sean ONeal','Hungry','seon7364@colorado.edu','password','0','1,2,3',456),(3,'Sean ONeal',NULL,'Justin Alvey','Guy 1','jual6332@colorado.edu','8674lion','1,2',NULL,789),(4,'Sean ONeal',NULL,'Brandon Spitler','Guy 2','brsp7274@colorado.edu','guest','3',NULL,719);