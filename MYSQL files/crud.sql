-- MySQL dump 10.13  Distrib 8.0.11, for Win64 (x86_64)
--
-- Host: localhost    Database: crud
-- ------------------------------------------------------
-- Server version	8.0.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `imagegallery`
--

DROP TABLE IF EXISTS `imagegallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `imagegallery` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) DEFAULT NULL,
  `Image` longtext,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagegallery`
--

LOCK TABLES `imagegallery` WRITE;
/*!40000 ALTER TABLE `imagegallery` DISABLE KEYS */;
INSERT INTO `imagegallery` VALUES (53,'Rohit Sharma','rohit-cropped_1f08ca1b4ub9a1b87g8xyoyyqf.jpg'),(54,'Rohit Sharma','rohit-sharma-1st-odi-ton-1531420502.jpg'),(55,'Rohit Sharma','rohitsharma-1537862345.jpg'),(56,'Rohit Sharma','rohitsharma-1538026454.jpg'),(57,'Rohit Sharma','rohitsharma-1540200745.jpg'),(58,'Rohit Sharma','rohitsharma-1541258700.jpg'),(59,'Rohit Sharma','rohitsharma-1542001559.jpg'),(60,'Rohit Sharma','rohitsharmaandshikhardhawan-1536240974.jpg'),(61,'Rohit Sharma','rohitsharma-cropped_fg3ec7qrkgv1b6j0scq9o1gr.jpg'),(62,'Rohit Sharma','rohit-sharma-t20i-century-vs-windies-1541523687.jpg');
/*!40000 ALTER TABLE `imagegallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `info` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `PlayerName` varchar(45) NOT NULL,
  `Born` varchar(45) DEFAULT NULL,
  `Role` varchar(45) DEFAULT NULL,
  `BattingStyle` varchar(45) DEFAULT NULL,
  `BowlingStyle` varchar(45) DEFAULT NULL,
  `Image` varchar(45) DEFAULT 'nophoto.png',
  `Country` varchar(45) DEFAULT NULL,
  `BirthPlace` varchar(45) DEFAULT '-',
  `Teams` longtext,
  `Description` longtext,
  PRIMARY KEY (`SN`,`PlayerName`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` VALUES (35,'Rohit Sharma','1987-04-30','Batsman','Right handed batsman','Right-arm medium','rohitsharma-1537789211.jpg','India','Nagpur, Maharashtra','Mumbai, India U19, India Green, India A, Deccan Chargers, India, Mumbai Indians, Indians, India Blue','Talent – an apparently heartening term that has followed Rohit Sharma around like a shadow; even haunted him at times. It seems to be a burden that the cricketing fraternity has enforced upon him and, after more than a decade in the national setting, he has been weighed down by the label.\r\n\r\nHarsha Bhogle spoke of whispers in the domestic circuit; of coaches and scouts spotting the effortless, free-flowing stroke-play of a Mumbai teenager. Having cruised through first-class cricket, with an average well above 50, he shot to the limelight when he scored a brisk unbeaten triple-hundred at the Ranji level.\r\n\r\nIt all began after an injury to an in-form Yuvraj Singh in the 2007 World T20, when Rohit was called upon as a last-minute emergency replacement to play a league game against the hosts. After a lacklustre start to the Indian innings, the 20-year-old strode out into Kingsmead and stroked his way to a fluent half-century against the likes of Pollock, Ntini and Morkel as though he were having a net session. He showed startling maturity under pressure to survive till the end of the innings, escorting India to a respectable total that they ultimately defended, knocking South Africa out of the tournament in their own backyard. ');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-10 11:18:44
