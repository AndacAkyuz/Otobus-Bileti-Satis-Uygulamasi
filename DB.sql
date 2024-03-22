-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: otobus_bilet
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
-- Table structure for table `biletler`
--

DROP TABLE IF EXISTS `biletler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `biletler` (
  `BiletlerID` int NOT NULL AUTO_INCREMENT,
  `SatisTarihi` date DEFAULT NULL,
  `OdemeYontemi` varchar(50) DEFAULT NULL,
  `Seferler_SeferlerID` int NOT NULL,
  `PNRKodlari_PNRKod` varchar(50) NOT NULL,
  `Odemeler_OdemelerID` int NOT NULL,
  PRIMARY KEY (`BiletlerID`),
  KEY `fk_Biletler_Seferler1_idx` (`Seferler_SeferlerID`),
  KEY `fk_Biletler_PNRKodlari1_idx` (`PNRKodlari_PNRKod`),
  KEY `fk_Biletler_Odemeler1_idx` (`Odemeler_OdemelerID`),
  CONSTRAINT `fk_Biletler_Odemeler1` FOREIGN KEY (`Odemeler_OdemelerID`) REFERENCES `odemeler` (`OdemelerID`),
  CONSTRAINT `fk_Biletler_PNRKodlari1` FOREIGN KEY (`PNRKodlari_PNRKod`) REFERENCES `pnrkodlari` (`PNRKod`),
  CONSTRAINT `fk_Biletler_Seferler1` FOREIGN KEY (`Seferler_SeferlerID`) REFERENCES `seferler` (`SeferlerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biletler`
--

LOCK TABLES `biletler` WRITE;
/*!40000 ALTER TABLE `biletler` DISABLE KEYS */;
/*!40000 ALTER TABLE `biletler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `koltuklar`
--

DROP TABLE IF EXISTS `koltuklar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `koltuklar` (
  `KoltukID` int NOT NULL AUTO_INCREMENT,
  `KoltukNo` int DEFAULT NULL,
  `Durum` varchar(5) DEFAULT NULL,
  `Biletler_BiletlerID` int NOT NULL,
  PRIMARY KEY (`KoltukID`),
  KEY `fk_Koltuklar_Biletler1_idx` (`Biletler_BiletlerID`),
  CONSTRAINT `fk_Koltuklar_Biletler1` FOREIGN KEY (`Biletler_BiletlerID`) REFERENCES `biletler` (`BiletlerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `koltuklar`
--

LOCK TABLES `koltuklar` WRITE;
/*!40000 ALTER TABLE `koltuklar` DISABLE KEYS */;
/*!40000 ALTER TABLE `koltuklar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kredikarti`
--

DROP TABLE IF EXISTS `kredikarti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kredikarti` (
  `KartNo` varchar(16) NOT NULL,
  `CVV` varchar(3) DEFAULT NULL,
  `SonKullanmaTarihi` date DEFAULT NULL,
  `KartSahibi` varchar(255) DEFAULT NULL,
  `Bakiye` int DEFAULT NULL,
  PRIMARY KEY (`KartNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kredikarti`
--

LOCK TABLES `kredikarti` WRITE;
/*!40000 ALTER TABLE `kredikarti` DISABLE KEYS */;
/*!40000 ALTER TABLE `kredikarti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kullanici` (
  `KullaniciID` int NOT NULL AUTO_INCREMENT,
  `AdSoyad` varchar(255) DEFAULT NULL,
  `Eposta` varchar(255) DEFAULT NULL,
  `TelefonNo` varchar(20) DEFAULT NULL,
  `Sifre` varchar(255) DEFAULT NULL,
  `DogumTarihi` date DEFAULT NULL,
  `Cinsiyet` varchar(5) DEFAULT NULL,
  `TCNo` varchar(11) DEFAULT NULL,
  `Bakiye` decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (`KullaniciID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kullanici`
--

LOCK TABLES `kullanici` WRITE;
/*!40000 ALTER TABLE `kullanici` DISABLE KEYS */;
INSERT INTO `kullanici` VALUES (1,'A','a@gmail.com','1','123','2000-01-01','E','1',100.00);
/*!40000 ALTER TABLE `kullanici` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loglar`
--

DROP TABLE IF EXISTS `loglar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loglar` (
  `LogID` int NOT NULL AUTO_INCREMENT,
  `Islem` varchar(255) DEFAULT NULL,
  `Tarih` datetime DEFAULT NULL,
  PRIMARY KEY (`LogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loglar`
--

LOCK TABLES `loglar` WRITE;
/*!40000 ALTER TABLE `loglar` DISABLE KEYS */;
/*!40000 ALTER TABLE `loglar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `odemeler`
--

DROP TABLE IF EXISTS `odemeler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `odemeler` (
  `OdemelerID` int NOT NULL AUTO_INCREMENT,
  `Tutar` decimal(18,2) DEFAULT NULL,
  `OdemeYontemi` varchar(50) DEFAULT NULL,
  `OdemiTarihi` date DEFAULT NULL,
  PRIMARY KEY (`OdemelerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `odemeler`
--

LOCK TABLES `odemeler` WRITE;
/*!40000 ALTER TABLE `odemeler` DISABLE KEYS */;
/*!40000 ALTER TABLE `odemeler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otobusler`
--

DROP TABLE IF EXISTS `otobusler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otobusler` (
  `OtobusID` int NOT NULL,
  `Plaka` varchar(10) DEFAULT NULL,
  `KoltukSayisi` int DEFAULT NULL,
  `Terminaller_TerminalId` int NOT NULL,
  PRIMARY KEY (`OtobusID`),
  KEY `fk_Otobusler_Terminaller1_idx` (`Terminaller_TerminalId`),
  CONSTRAINT `fk_Otobusler_Terminaller1` FOREIGN KEY (`Terminaller_TerminalId`) REFERENCES `terminaller` (`TerminalId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otobusler`
--

LOCK TABLES `otobusler` WRITE;
/*!40000 ALTER TABLE `otobusler` DISABLE KEYS */;
/*!40000 ALTER TABLE `otobusler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pnrkodlari`
--

DROP TABLE IF EXISTS `pnrkodlari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pnrkodlari` (
  `PNRKod` varchar(50) NOT NULL,
  `PeronNo` varchar(10) DEFAULT NULL,
  `SatisZamani` datetime DEFAULT NULL,
  `Seferler_SeferlerID` int NOT NULL,
  `Otobusler_OtobusID` int NOT NULL,
  PRIMARY KEY (`PNRKod`),
  KEY `fk_PNRKodlari_Seferler_idx` (`Seferler_SeferlerID`),
  KEY `fk_PNRKodlari_Otobusler1_idx` (`Otobusler_OtobusID`),
  CONSTRAINT `fk_PNRKodlari_Otobusler1` FOREIGN KEY (`Otobusler_OtobusID`) REFERENCES `otobusler` (`OtobusID`),
  CONSTRAINT `fk_PNRKodlari_Seferler` FOREIGN KEY (`Seferler_SeferlerID`) REFERENCES `seferler` (`SeferlerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pnrkodlari`
--

LOCK TABLES `pnrkodlari` WRITE;
/*!40000 ALTER TABLE `pnrkodlari` DISABLE KEYS */;
/*!40000 ALTER TABLE `pnrkodlari` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rezervasyonlar`
--

DROP TABLE IF EXISTS `rezervasyonlar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rezervasyonlar` (
  `RezervasyonID` int NOT NULL AUTO_INCREMENT,
  `RezervasyonTarihi` date DEFAULT NULL,
  `Durum` varchar(5) DEFAULT NULL,
  `Seferler_SeferlerID` int NOT NULL,
  `Koltuklar_KoltukID` int NOT NULL,
  PRIMARY KEY (`RezervasyonID`),
  KEY `fk_Rezervasyonlar_Seferler1_idx` (`Seferler_SeferlerID`),
  KEY `fk_Rezervasyonlar_Koltuklar1_idx` (`Koltuklar_KoltukID`),
  CONSTRAINT `fk_Rezervasyonlar_Koltuklar1` FOREIGN KEY (`Koltuklar_KoltukID`) REFERENCES `koltuklar` (`KoltukID`),
  CONSTRAINT `fk_Rezervasyonlar_Seferler1` FOREIGN KEY (`Seferler_SeferlerID`) REFERENCES `seferler` (`SeferlerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rezervasyonlar`
--

LOCK TABLES `rezervasyonlar` WRITE;
/*!40000 ALTER TABLE `rezervasyonlar` DISABLE KEYS */;
/*!40000 ALTER TABLE `rezervasyonlar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seferler`
--

DROP TABLE IF EXISTS `seferler`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seferler` (
  `SeferlerID` int NOT NULL AUTO_INCREMENT,
  `KalkisNoktasi` varchar(45) DEFAULT NULL,
  `VarisNoktasi` varchar(45) DEFAULT NULL,
  `KalkisZamani` time DEFAULT NULL,
  `VarisZamani` time DEFAULT NULL,
  `YolculukSuresi` int DEFAULT NULL,
  `Fiyat` decimal(18,2) DEFAULT NULL,
  `Otobusler_OtobusID` int NOT NULL,
  `Koltuklar_KoltukID` int NOT NULL,
  PRIMARY KEY (`SeferlerID`),
  KEY `fk_Seferler_Otobusler1_idx` (`Otobusler_OtobusID`),
  KEY `fk_Seferler_Koltuklar1_idx` (`Koltuklar_KoltukID`),
  CONSTRAINT `fk_Seferler_Koltuklar1` FOREIGN KEY (`Koltuklar_KoltukID`) REFERENCES `koltuklar` (`KoltukID`),
  CONSTRAINT `fk_Seferler_Otobusler1` FOREIGN KEY (`Otobusler_OtobusID`) REFERENCES `otobusler` (`OtobusID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seferler`
--

LOCK TABLES `seferler` WRITE;
/*!40000 ALTER TABLE `seferler` DISABLE KEYS */;
/*!40000 ALTER TABLE `seferler` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terminaller`
--

DROP TABLE IF EXISTS `terminaller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `terminaller` (
  `TerminalId` int NOT NULL AUTO_INCREMENT,
  `Sehir` varchar(50) DEFAULT NULL,
  `Adres` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`TerminalId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terminaller`
--

LOCK TABLES `terminaller` WRITE;
/*!40000 ALTER TABLE `terminaller` DISABLE KEYS */;
/*!40000 ALTER TABLE `terminaller` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-22 15:51:31
