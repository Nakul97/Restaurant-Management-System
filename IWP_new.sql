-- MySQL dump 10.13  Distrib 5.7.16, for osx10.11 (x86_64)
--
-- Host: localhost    Database: IWP_restaurant
-- ------------------------------------------------------
-- Server version	5.7.16

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
-- Table structure for table `atRest`
--

DROP TABLE IF EXISTS `atRest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atRest` (
  `ID` int(6) NOT NULL,
  `Water` int(1) DEFAULT NULL,
  `clean` int(1) DEFAULT NULL,
  `Util` int(1) DEFAULT NULL,
  `Bill` int(1) DEFAULT NULL,
  `parcel` int(1) DEFAULT NULL,
  `other` int(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atRest`
--

LOCK TABLES `atRest` WRITE;
/*!40000 ALTER TABLE `atRest` DISABLE KEYS */;
INSERT INTO `atRest` VALUES (1,1,0,0,0,0,0),(2,1,0,1,0,0,0),(3,0,1,0,1,1,0),(4,1,1,0,1,0,0),(17,1,1,1,1,0,0);
/*!40000 ALTER TABLE `atRest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `RestID` int(11) NOT NULL,
  `longitude` decimal(9,6) DEFAULT NULL,
  `latitude` decimal(9,6) DEFAULT NULL,
  `isOpen` bit(1) DEFAULT b'1',
  PRIMARY KEY (`RestID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,12.971600,79.588000,''),(2,12.972600,79.598000,''),(3,12.974600,79.298000,''),(4,12.974600,79.588000,''),(5,12.974600,79.158200,'\0'),(6,12.994600,79.158400,'\0'),(7,12.997800,79.158900,'\0'),(8,12.970800,79.158900,'\0');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menuItems`
--

DROP TABLE IF EXISTS `menuItems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menuItems` (
  `ItemID` int(6) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `price` int(6) DEFAULT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menuItems`
--

LOCK TABLES `menuItems` WRITE;
/*!40000 ALTER TABLE `menuItems` DISABLE KEYS */;
/*!40000 ALTER TABLE `menuItems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderedItems`
--

DROP TABLE IF EXISTS `orderedItems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orderedItems` (
  `orderID` int(6) NOT NULL,
  `itemID` int(6) NOT NULL,
  KEY `orderID` (`orderID`),
  KEY `itemID` (`itemID`),
  CONSTRAINT `ordereditems_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`),
  CONSTRAINT `ordereditems_ibfk_2` FOREIGN KEY (`itemID`) REFERENCES `menuItems` (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderedItems`
--

LOCK TABLES `orderedItems` WRITE;
/*!40000 ALTER TABLE `orderedItems` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderedItems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `Name` varchar(50) DEFAULT NULL,
  `phoneNumber` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `longitude` decimal(9,6) DEFAULT NULL,
  `latitude` decimal(9,6) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `orderID` int(6) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isRest` int(1) DEFAULT NULL,
  PRIMARY KEY (`orderID`),
  UNIQUE KEY `phoneNumber` (`phoneNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES ('Nakul','9790610196','nakul.sakhuja@gmail.com','1997-07-16',79.158900,12.970800,0,1,'2017-11-06 09:10:01',0),('nakul','9898989899','nakul.sakhuja@gmail.com','1997-07-16',79.158900,12.970800,0,2,'2017-11-06 09:15:28',0),('Nakul','9891198888','nakul.sakhuja@gmail.com','1997-07-16',79.158900,12.970800,0,5,'2017-11-06 09:37:12',0),('Nakul','9181919991','nakul.sakhuja@gmail.com','1997-07-16',79.158900,12.970800,0,6,'2017-11-06 09:48:05',0),('Nakul','9991119991','nakul.sakhuja@gmail.com','1997-07-16',79.158900,12.970800,0,7,'2017-11-06 09:59:12',0),('NAKUL','9123188811','nakul.sakhuja@gmail.com','1997-07-16',0.000000,0.000000,0,8,'2017-11-06 11:32:24',0),('Nakul','9891110000','nakul.sakhuja@gmail.com','1997-07-16',79.158900,12.970800,0,9,'2017-11-06 16:11:03',0);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restOrders`
--

DROP TABLE IF EXISTS `restOrders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restOrders` (
  `orderID` int(6) DEFAULT NULL,
  `restID` int(6) DEFAULT NULL,
  KEY `restID` (`restID`),
  KEY `orderID` (`orderID`),
  CONSTRAINT `restorders_ibfk_1` FOREIGN KEY (`restID`) REFERENCES `atRest` (`ID`),
  CONSTRAINT `restorders_ibfk_2` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restOrders`
--

LOCK TABLES `restOrders` WRITE;
/*!40000 ALTER TABLE `restOrders` DISABLE KEYS */;
/*!40000 ALTER TABLE `restOrders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-06 21:57:38
