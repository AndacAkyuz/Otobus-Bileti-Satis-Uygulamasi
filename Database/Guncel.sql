-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: deneme
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `bilet`
--

DROP TABLE IF EXISTS `bilet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bilet` (
  `ID` int NOT NULL,
  `PNR` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `KullaniciID` int DEFAULT NULL,
  `KullaniciOlmayanID` int DEFAULT NULL,
  `SeferID` int DEFAULT NULL,
  `Tarih` date DEFAULT NULL,
  `KoltukNo` int DEFAULT NULL,
  `BiletTur` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `KullaniciID` (`KullaniciID`),
  KEY `KullaniciOlmayanID` (`KullaniciOlmayanID`),
  KEY `SeferID` (`SeferID`),
  CONSTRAINT `bilet_ibfk_1` FOREIGN KEY (`KullaniciID`) REFERENCES `kullanici` (`ID`),
  CONSTRAINT `bilet_ibfk_2` FOREIGN KEY (`KullaniciOlmayanID`) REFERENCES `kulaniciolmayan` (`ID`),
  CONSTRAINT `bilet_ibfk_3` FOREIGN KEY (`SeferID`) REFERENCES `sefer` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bilet`
--

LOCK TABLES `bilet` WRITE;
/*!40000 ALTER TABLE `bilet` DISABLE KEYS */;
INSERT INTO `bilet` VALUES (1,NULL,2,NULL,1,'2024-03-10',15,'a');
/*!40000 ALTER TABLE `bilet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kartbilgileri`
--

DROP TABLE IF EXISTS `kartbilgileri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kartbilgileri` (
  `ID` int NOT NULL,
  `KullaniciID` int DEFAULT NULL,
  `KartNumarasi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `SonKullanmaTarihi` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `CVV` int DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `KullaniciID` (`KullaniciID`),
  CONSTRAINT `kartbilgileri_ibfk_1` FOREIGN KEY (`KullaniciID`) REFERENCES `kullanici` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kartbilgileri`
--

LOCK TABLES `kartbilgileri` WRITE;
/*!40000 ALTER TABLE `kartbilgileri` DISABLE KEYS */;
/*!40000 ALTER TABLE `kartbilgileri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kulaniciolmayan`
--

DROP TABLE IF EXISTS `kulaniciolmayan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kulaniciolmayan` (
  `ID` int NOT NULL,
  `Isim` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `TcVatandas` tinyint(1) DEFAULT NULL,
  `VatandasNo` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DogumTarihi` date DEFAULT NULL,
  `Cinsiyet` tinyint(1) DEFAULT NULL,
  `TelefonNo` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Mail` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kulaniciolmayan`
--

LOCK TABLES `kulaniciolmayan` WRITE;
/*!40000 ALTER TABLE `kulaniciolmayan` DISABLE KEYS */;
/*!40000 ALTER TABLE `kulaniciolmayan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kullanici` (
  `ID` int NOT NULL,
  `AdSoyad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `TcVatandas` tinyint(1) DEFAULT NULL,
  `TCNo` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `DogumTarihi` date DEFAULT NULL,
  `Cinsiyet` tinyint(1) DEFAULT NULL,
  `TelefonNo` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Eposta` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `Sifre` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `KullaniciTipi` tinyint(1) DEFAULT NULL,
  `Bakiye` int DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kullanici`
--

LOCK TABLES `kullanici` WRITE;
/*!40000 ALTER TABLE `kullanici` DISABLE KEYS */;
INSERT INTO `kullanici` VALUES (1,'Andaç Akyüz',1,'1111111111','2000-11-01',0,'5555555555','a@gmail.com','123',0,NULL),(2,'Oktan Efe Çakar',1,'1111111111','2000-11-01',0,'5555555554','o@gmail.com','123',0,NULL),(3,'Furkan Esad Uzun',1,'1111111111','2000-11-01',0,'5555555553','f@gmail.com','123',0,NULL);
/*!40000 ALTER TABLE `kullanici` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otobus`
--

DROP TABLE IF EXISTS `otobus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otobus` (
  `ID` int NOT NULL,
  `Isim` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Plaka` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `KoltukSayisi` int NOT NULL,
  `Aktif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otobus`
--

LOCK TABLES `otobus` WRITE;
/*!40000 ALTER TABLE `otobus` DISABLE KEYS */;
INSERT INTO `otobus` VALUES (1,'Mercedes Travego','41UMT41',32,1),(2,'Mercedes Travego','41UMT42',32,1),(3,'Mercedes Travego','41UMT43',32,1),(4,'Mercedes Travego','41UMT44',32,1),(5,'Mercedes Travego','41UMT45',32,1),(6,'Mercedes Travego','41UMT46',32,1),(7,'Mercedes Travego','41UMT47',32,1),(8,'Mercedes Travego','41UMT48',32,1),(9,'Temsa Maraton','41UMT49',32,1),(10,'Temsa Maraton','41UMT50',32,1),(11,'Temsa Maraton','41UMT51',32,1),(12,'Temsa Maraton','41UMT52',32,1),(13,'Temsa Maraton','41UMT53',32,1),(14,'Mercedes Turismo','41UMT54',32,1),(15,'Mercedes Turismo','41UMT55',32,1),(16,'Mercedes Turismo','41UMT56',32,1),(17,'Mercedes Turismo','41UMT57',32,1),(18,'Mercedes Turismo','41UMT58',32,1),(19,'Mercedes Travego','41UMT59',32,0),(20,'Volvo Turismo','41UMT60',32,0),(21,'Volvo Turismo','41UMT61',32,0),(22,'Volvo Turismo','41UMT62',32,0),(23,'Volvo Turismo','41UMT63',32,0),(24,'Volvo Turismo','41UMT64',32,0);
/*!40000 ALTER TABLE `otobus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sefer`
--

DROP TABLE IF EXISTS `sefer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sefer` (
  `ID` int NOT NULL,
  `KalkisSehirID` int DEFAULT NULL,
  `VarisSehirID` int DEFAULT NULL,
  `OtobusID` int DEFAULT NULL,
  `KalkisSaat` time DEFAULT NULL,
  `VarisSaat` time DEFAULT NULL,
  `Fiyat` decimal(10,0) DEFAULT NULL,
  `Aktif` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `KalkisSehirID` (`KalkisSehirID`),
  KEY `VarisSehirID` (`VarisSehirID`),
  KEY `OtobusID` (`OtobusID`),
  CONSTRAINT `sefer_ibfk_1` FOREIGN KEY (`KalkisSehirID`) REFERENCES `sehir` (`ID`),
  CONSTRAINT `sefer_ibfk_2` FOREIGN KEY (`VarisSehirID`) REFERENCES `sehir` (`ID`),
  CONSTRAINT `sefer_ibfk_3` FOREIGN KEY (`OtobusID`) REFERENCES `otobus` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sefer`
--

LOCK TABLES `sefer` WRITE;
/*!40000 ALTER TABLE `sefer` DISABLE KEYS */;
INSERT INTO `sefer` VALUES (1,1,2,1,'10:00:00','14:40:00',100,1),(2,1,3,2,'14:00:00','22:10:00',100,1),(3,1,4,3,'08:00:00','12:30:00',100,1),(4,2,1,1,'14:50:00','19:30:00',100,1),(5,2,3,4,'09:00:00','15:20:00',100,1),(6,2,4,5,'07:00:00','13:50:00',100,1),(7,3,1,2,'22:20:00','07:30:00',100,1),(8,3,2,4,'15:30:00','21:50:00',100,1),(9,3,4,6,'11:00:00','16:30:00',100,1),(10,4,1,3,'12:40:00','17:10:00',100,1),(11,4,2,5,'14:00:00','20:50:00',100,1),(12,4,3,6,'16:40:00','22:10:00',100,1),(13,1,2,7,'18:00:00','22:40:00',100,1),(14,1,3,8,'22:00:00','06:10:00',100,1),(15,1,4,9,'16:00:00','20:30:00',100,1),(16,2,1,7,'22:50:00','03:30:00',100,1),(17,2,3,10,'17:00:00','23:20:00',100,1),(18,2,4,11,'15:00:00','21:50:00',100,1),(19,3,1,8,'06:20:00','15:30:00',100,1),(20,3,2,10,'23:30:00','05:50:00',100,1),(21,3,4,12,'19:00:00','00:30:00',100,1),(22,4,1,9,'20:40:00','01:10:00',100,1),(23,4,2,11,'22:00:00','04:50:00',100,1),(24,4,3,12,'00:40:00','06:10:00',100,1),(25,1,2,13,'02:00:00','06:40:00',100,1),(26,1,3,14,'06:00:00','14:10:00',100,1),(27,1,4,15,'00:00:00','04:30:00',100,1),(28,2,1,13,'06:50:00','11:30:00',100,1),(29,2,3,16,'01:00:00','07:20:00',100,1),(30,2,4,17,'23:00:00','05:50:00',100,1),(31,3,1,14,'14:20:00','23:30:00',100,1),(32,3,2,16,'07:30:00','13:50:00',100,1),(33,3,4,18,'03:00:00','08:30:00',100,1),(34,4,1,15,'04:40:00','09:10:00',100,1),(35,4,2,17,'06:00:00','12:50:00',100,1),(36,4,3,18,'08:40:00','14:10:00',100,1);
/*!40000 ALTER TABLE `sefer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sehir`
--

DROP TABLE IF EXISTS `sehir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sehir` (
  `ID` int NOT NULL,
  `Sehir` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `TeriminalAdi` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Plaka` int NOT NULL,
  `Peron` varchar(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Aktif` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sehir`
--

LOCK TABLES `sehir` WRITE;
/*!40000 ALTER TABLE `sehir` DISABLE KEYS */;
INSERT INTO `sehir` VALUES (1,'Kocaeli','Izmit Şehirlerarasi Otobüs Terminali',41,'1',1),(2,'Ankara','AŞTİ Ankara Şehirlerarası Otobüs Terminali',6,'2',1),(3,'İstanbul','Esenler Otogarı',34,'3',1),(4,'İzmir','Izmir Şehirlerarasi Otobüs Terminali',35,'4',1);
/*!40000 ALTER TABLE `sehir` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-03 16:00:45
