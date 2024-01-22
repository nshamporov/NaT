-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: musicprojectdb
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album` (
  `album_id` int NOT NULL,
  `album_name` varchar(100) DEFAULT NULL,
  `artist_id` int DEFAULT NULL,
  PRIMARY KEY (`album_id`),
  KEY `artist_id` (`artist_id`),
  CONSTRAINT `album_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`artist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES (1,'Mind of Mine',1),(2,'Icarus Falls',1),(3,'Starboy',2),(4,'After Hours',2),(5,'When We All Fall Asleep, Where Do We Go?',3),(6,'Happier Than Ever',3),(7,'Fearless',4),(8,'Red',4),(9,'Badlands',5),(10,'Manic',5),(11,'Lemonade',6),(12,'Renaissance',6),(13,'The Fame',7),(14,'Born This Way',7),(15,'Born to Die',8),(16,'Honeymoon',8),(17,'The Eminem Show',9),(18,'Encore',9),(19,'Sky on Fire',10),(20,'Howling',10);
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artist` (
  `artist_id` int NOT NULL,
  `artist_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artist`
--

LOCK TABLES `artist` WRITE;
/*!40000 ALTER TABLE `artist` DISABLE KEYS */;
INSERT INTO `artist` VALUES (1,'Zayn'),(2,'The Weekend'),(3,'Billie Eilish'),(4,'Taylor Swift'),(5,'Halsey'),(6,'Beyonce'),(7,'Lady Gaga'),(8,'Lana Del Rey'),(9,'Eminem'),(10,'Mehro');
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deleted_user`
--

DROP TABLE IF EXISTS `deleted_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deleted_user` (
  `id` int NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `deleted_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deleted_user`
--

LOCK TABLES `deleted_user` WRITE;
/*!40000 ALTER TABLE `deleted_user` DISABLE KEYS */;
INSERT INTO `deleted_user` VALUES (4,'alex','alexiasdf@gmail.com','2023-06-20 09:21:36.233385'),(5,'alex','','2023-06-20 09:28:29.458292');
/*!40000 ALTER TABLE `deleted_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_log`
--

DROP TABLE IF EXISTS `email_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `email_log` (
  `user_id` int DEFAULT NULL,
  `old_email` varchar(45) DEFAULT NULL,
  `new_email` varchar(45) DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_log`
--

LOCK TABLES `email_log` WRITE;
/*!40000 ALTER TABLE `email_log` DISABLE KEYS */;
INSERT INTO `email_log` VALUES (4,'alex@gmail.com','alexiasdf@gmail.com','2023-06-20'),(6,'alexstandall87@gmail.com','alex@gmail.com','2023-06-20');
/*!40000 ALTER TABLE `email_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `track`
--

DROP TABLE IF EXISTS `track`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `track` (
  `track_id` int NOT NULL,
  `track_name` varchar(100) DEFAULT NULL,
  `track_duration` varchar(10) DEFAULT NULL,
  `album_id` int DEFAULT NULL,
  PRIMARY KEY (`track_id`),
  KEY `album_id` (`album_id`),
  CONSTRAINT `track_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `track`
--

LOCK TABLES `track` WRITE;
/*!40000 ALTER TABLE `track` DISABLE KEYS */;
INSERT INTO `track` VALUES (1,'Pillowtalk','3:23',1),(2,'It\'s You','3:47',1),(3,'Befour','3:28',1),(4,'Let Me','3:05',2),(5,'Sour Diesel','4:04',2),(6,'Entertainer','3:20',2),(7,'Starboy','3:50',3),(8,'Party Monster','4:09',3),(9,'Reminder','3:38',3),(10,'Blinding Lights','3:20',4),(11,'Heartless','3:20',4),(12,'In Your Eyes','3:57',4),(13,'Bad Guy','3:14',5),(14,'Bury a Friend','3:13',5),(15,'When the Party\'s Over','3:16',5),(16,'Therefore I Am','2:54',6),(17,'Your Power','4:07',6),(18,'NDA','3:15',6),(19,'Love Story','3:55',7),(20,'You Belong with Me','3:52',7),(21,'Fearless','4:01',7),(22,'We Are Never Ever Getting Back Together','3:13',8),(23,'I Knew You Were Trouble','3:39',8),(24,'22','3:52',8),(25,'New Americana','3:04',9),(26,'Colors','4:09',9),(27,'Castle','4:38',9),(28,'Without Me','3:22',10),(29,'Graveyard','3:01',10),(30,'You Should Be Sad','3:25',10),(31,'Formation','3:26',11),(32,'Sorry','3:53',11),(33,'Hold Up','3:41',11),(34,'ENERGY','1:56',12),(35,'MOVE','3:23',12),(36,'VIRGO\'S GROOVE','6:08',12),(37,'Just Dance','4:02',13),(38,'Poker Face','3:58',13),(39,'Bad Romance','4:54',13),(40,'Born This Way','4:20',14),(41,'Judas','4:10',14),(42,'The Edge of Glory','5:21',14),(43,'Video Games','4:42',15),(44,'Summertime Sadness','4:25',15),(45,'Born to Die','4:45',15),(46,'Music to Watch Boys To','4:50',16),(47,'High by the Beach','4:17',16),(48,'Honeymoon','5:50',16),(49,'Without Me','4:50',17),(50,'Cleaning Out My Closet','4:58',17),(51,'Sing for the Moment','5:40',17),(52,'Like Toy Soldiers','4:56',18),(53,'Mockingbird','4:11',18),(54,'Just Lose It','4:08',18),(55,'Thinking of U','3:30',19),(56,'Hideous','4:07',19),(57,'Coastline','3:40',19),(58,'Perfume','3:32',20),(59,'Chance with You','3:16',20),(60,'Not Alone','3:57',20);
/*!40000 ALTER TABLE `track` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ana','anascence@gmail.com','gargar'),(9,'Nikita','nikitosshamporov061006@gmail.com','061006nik');
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

-- Dump completed on 2023-06-22  2:43:00
