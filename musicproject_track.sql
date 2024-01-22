CREATE DATABASE  IF NOT EXISTS `musicproject` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `musicproject`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: musicproject
-- ------------------------------------------------------
-- Server version	8.0.31

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
INSERT INTO `track` VALUES (1,'Pillowtalk','3:23',1),(2,'It\'s You','3:47',1),(3,'Befour','3:28',1),(4,'Let Me','3:05',2),(5,'Sour Diesel','4:04',2),(6,'Entertainer','3:20',2),(7,'Starboy','3:50',3),(8,'Party Monster','4:09',3),(9,'Reminder','3:38',3),(10,'Blinding Lights','3:20',4),(11,'Heartless','3:20',4),(12,'In Your Eyes','3:57',4),(13,'Bad Guy','3:14',5),(14,'Bury a Friend','3:13',5),(15,'When the Party\'s Over','3:16',5),(16,'Therefore I Am','2:54',6),(17,'Your Power','4:07',6),(18,'NDA','3:15',6),(19,'Love Story','3:55',7),(20,'You Belong with Me','3:52',7),(21,'Fearless','4:01',7),(22,'We Are Never Ever Getting Back Together','3:13',8),(23,'I Knew You Were Trouble','3:39',8),(24,'22','3:52',8),(25,'New Americana','3:04',9),(26,'Colors','4:09',9),(27,'Castle','4:38',9),(28,'Without Me','3:22',10),(29,'Graveyard','3:01',10),(30,'You Should Be Sad','3:25',10),(31,'Formation','3:26',11),(32,'Sorry','3:53',11),(33,'Hold Up','3:41',11),(34,'ENERGY','1:56',12),(35,'MOVE','3:23',12),(36,'VIRGO\'S GROOVE','6:08',12),(37,'Just Dance','4:02',13),(38,'Poker Face','3:58',13),(39,'Bad Romance','4:54',13),(40,'Born This Way','4:20',14),(41,'Judas','4:10',14),(42,'The Edge of Glory','5:21',14),(43,'Video Games','4:42',15),(44,'Summertime Sadness','4:25',15),(45,'Born to Die','4:45',15),(46,'Music to Watch Boys To','4:50',16),(47,'High by the Beach','4:17',16),(48,'Honeymoon','5:50',16),(49,'Without Me','4:50',17),(50,'Cleaning Out My Closet','4:58',17),(51,'Sing for the Moment','5:40',17),(52,'Like Toy Soldiers','4:56',18),(53,'Mockingbird','4:11',18),(54,'Just Lose It','4:08',18),(55,'Thinking of U','3:30',19),(56,'Hideout','4:07',19),(57,'Coastline','3:40',19),(58,'Perfume','3:32',20),(59,'Chance with You','3:16',20),(60,'Lonely','3:57',20);
/*!40000 ALTER TABLE `track` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-19 20:49:56
