-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: location_de_voiture
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
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `IdClient` smallint NOT NULL,
  `Nom` varchar(40) NOT NULL,
  `Prenom` varchar(40) NOT NULL,
  `CodePostal` varchar(10) NOT NULL,
  `Localite` varchar(50) NOT NULL,
  `Telephone` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  UNIQUE KEY `unique` (`IdClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'Dupont','Jean','75001','Paris','0612345678','jean.dupont@example.com'),(2,'Martin','Marie','69003','Lyon','0623456789','marie.martin@example.com'),(3,'Leroy','Pierre','13001','Marseille','0634567890','pierre.leroy@example.com'),(4,'Dubois','Sophie','31000','Toulouse','0645678901','sophie.dubois@example.com'),(5,'Moreau','Luc','33000','Bordeaux','0656789012','luc.moreau@example.com'),(6,'Laurent','Claire','59000','Lille','0667890123','claire.laurent@example.com'),(7,'Simon','Thomas','44000','Nantes','0678901234','thomas.simon@example.com'),(8,'Michel','Alice','67000','Strasbourg','0689012345','alice.michel@example.com'),(9,'Bernard','Julien','06000','Nice','0690123456','julien.bernard@example.com'),(10,'Petit','Camille','35000','Rennes','0601234567','camille.petit@example.com');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-23 23:08:57
