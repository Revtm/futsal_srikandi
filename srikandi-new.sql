-- MySQL dump 10.16  Distrib 10.1.41-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: srikandi
-- ------------------------------------------------------
-- Server version	10.1.41-MariaDB-0ubuntu0.18.04.1

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
-- Table structure for table `jadwal`
--

DROP TABLE IF EXISTS `jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwal` (
  `kode_jadwal` varchar(5) NOT NULL,
  `jam` varchar(15) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  PRIMARY KEY (`kode_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal`
--

LOCK TABLES `jadwal` WRITE;
/*!40000 ALTER TABLE `jadwal` DISABLE KEYS */;
INSERT INTO `jadwal` VALUES ('A08','08.00-09.00',110000),('A09','09.00-10.00',110000),('A10','10.00-11.00',110000),('A11','11.00-12.00',110000),('A12','12.00-13.00',110000),('A13','13.00-14.00',110000),('B14','14.00-15.00',120000),('B15','15.00-16.00',120000),('B16','16.00-17.00',120000),('B17','17.00-18.00',120000),('C18','18.00-19.00',150000),('C19','19.00-20.00',150000),('C20','20.00-21.00',150000),('C21','21.00-22.00',150000),('C22','22.00-23.00',150000);
/*!40000 ALTER TABLE `jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lapangan`
--

DROP TABLE IF EXISTS `lapangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lapangan` (
  `kode_lapangan` varchar(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `lokasi` varchar(20) DEFAULT NULL,
  `kode_jadwal` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`kode_lapangan`),
  KEY `kode_jadwal` (`kode_jadwal`),
  CONSTRAINT `lapangan_ibfk_1` FOREIGN KEY (`kode_jadwal`) REFERENCES `jadwal` (`kode_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lapangan`
--

LOCK TABLES `lapangan` WRITE;
/*!40000 ALTER TABLE `lapangan` DISABLE KEYS */;
INSERT INTO `lapangan` VALUES ('LA-08','Lapangan Atas','Atas','A08'),('LA-09','Lapangan Atas','Atas','A09'),('LA-14','Lapangan Atas','Atas','B14'),('LA-20','Lapangan Atas','Atas','C20'),('LB-08','Lapangan Bawah','Bawah','A08'),('LB-09','Lapangan Bawah','Bawah','A09'),('LB-14','Lapangan Bawah','Bawah','B14'),('LB-20','Lapangan Bawah','Bawah','C20'),('LT-08','Lapangan Tengah','tengah','A08'),('LT-09','Lapangan Tengah','tengah','A09'),('LT-14','Lapangan Tengah','tengah','B14'),('LT-20','Lapangan Tengah','tengah','C20');
/*!40000 ALTER TABLE `lapangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operator`
--

DROP TABLE IF EXISTS `operator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `operator` (
  `nama` varchar(50) DEFAULT NULL,
  `kode_operator` varchar(5) NOT NULL,
  PRIMARY KEY (`kode_operator`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operator`
--

LOCK TABLES `operator` WRITE;
/*!40000 ALTER TABLE `operator` DISABLE KEYS */;
INSERT INTO `operator` VALUES ('Yusuf Ramadhan','00001');
/*!40000 ALTER TABLE `operator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(5) NOT NULL,
  `kode_operator` varchar(5) DEFAULT NULL,
  `kode_user` varchar(5) DEFAULT NULL,
  `kode_lapangan` varchar(5) DEFAULT NULL,
  `kode_jadwal` varchar(5) DEFAULT NULL,
  `diskon` int(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`kode_transaksi`),
  KEY `kode_jadwal` (`kode_jadwal`),
  KEY `kode_operator` (`kode_operator`),
  KEY `kode_user` (`kode_user`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kode_jadwal`) REFERENCES `lapangan` (`kode_jadwal`),
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kode_operator`) REFERENCES `operator` (`kode_operator`),
  CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kode_user`) REFERENCES `user` (`kode_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES ('00001','00001','00001','LA-08','A08',0,'2020-03-16'),('00002','00001','00002','LT-14','B14',0,'2020-03-17'),('00003','00001','00003','LB-20','C20',0,'2020-03-18');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `kode_user` varchar(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`kode_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('00001','Budi Budiman','Jl Anggrek','085345673526'),('00002','Angga Setiawan','Jl Nangka','085334657892'),('00003','Clark Johnanson','Jl Rose','0821134567');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-17 15:07:49
