CREATE DATABASE  IF NOT EXISTS `feed` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `feed`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: feed
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `feed`
--

DROP TABLE IF EXISTS `feed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feed` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `image` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feed`
--

LOCK TABLES `feed` WRITE;
/*!40000 ALTER TABLE `feed` DISABLE KEYS */;
INSERT INTO `feed` VALUES (7,'Artículo de prueba 001 (Editado)','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra faucibus erat, quis consequat justo. Etiam fringilla lacinia aliquet. Praesent gravida arcu sem, a euismod massa condimentum at. Sed id magna sit amet arcu pellentesque vulputate. Praesent placerat nisi vitae imperdiet pulvinar. Aenean cursus vitae nulla non tristique. Nulla sit amet est nec eros laoreet malesuada nec a purus. Morbi interdum gravida metus, eget condimentum velit aliquam sit amet. Morbi nec est blandit, consectetur elit id, maximus augue. Donec et sagittis neque, non rutrum odio. Aliquam quam ante, commodo tristique est vitae, imperdiet varius dui. Donec finibus nibh at imperdiet aliquam. Aliquam porttitor luctus dui, nec accumsan mauris lobortis ac.\r\n\r\nProin aliquet ligula placerat ex auctor, ac aliquam sapien varius. Morbi maximus mi nec elementum tincidunt. Donec pulvinar iaculis odio quis dapibus. Pellentesque pellentesque justo nec nisi ullamcorper pretium. Etiam porta lacinia sollicitudin. Morbi sed orci non tortor porttitor suscipit eu et nibh. Nullam viverra tincidunt risus at commodo. Mauris vel metus arcu. Suspendisse mattis lorem ante, vitae tristique leo euismod a.\r\n\r\nNullam velit velit, cursus eu condimentum eu, facilisis sed nibh. Nunc sollicitudin porta eros id sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer gravida, libero at iaculis porta, diam magna euismod magna, vel ullamcorper augue eros ut lacus. Nullam nec libero eu dolor aliquet elementum. Vivamus purus sapien, euismod sed turpis ut, fermentum cursus metus. Nulla fermentum, metus et lacinia fermentum, ex eros tincidunt tellus, vitae semper nunc nisi imperdiet mi. Vestibulum ex nisi, hendrerit eu quam maximus, ullamcorper mollis lectus. Vivamus mattis fermentum leo, a tristique justo.','1622736595iSkilled-alejandro-estarlich-marketing-digital-diseno-web-imagen.jpg',NULL,'1','2021-06-03 16:09:55','2021-06-03 16:12:55'),(8,'Artículo de prueba 002','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra faucibus erat, quis consequat justo. Etiam fringilla lacinia aliquet. Praesent gravida arcu sem, a euismod massa condimentum at. Sed id magna sit amet arcu pellentesque vulputate. Praesent placerat nisi vitae imperdiet pulvinar. Aenean cursus vitae nulla non tristique. Nulla sit amet est nec eros laoreet malesuada nec a purus. Morbi interdum gravida metus, eget condimentum velit aliquam sit amet. Morbi nec est blandit, consectetur elit id, maximus augue. Donec et sagittis neque, non rutrum odio. Aliquam quam ante, commodo tristique est vitae, imperdiet varius dui. Donec finibus nibh at imperdiet aliquam. Aliquam porttitor luctus dui, nec accumsan mauris lobortis ac.\r\n\r\nProin aliquet ligula placerat ex auctor, ac aliquam sapien varius. Morbi maximus mi nec elementum tincidunt. Donec pulvinar iaculis odio quis dapibus. Pellentesque pellentesque justo nec nisi ullamcorper pretium. Etiam porta lacinia sollicitudin. Morbi sed orci non tortor porttitor suscipit eu et nibh. Nullam viverra tincidunt risus at commodo. Mauris vel metus arcu. Suspendisse mattis lorem ante, vitae tristique leo euismod a.\r\n\r\nNullam velit velit, cursus eu condimentum eu, facilisis sed nibh. Nunc sollicitudin porta eros id sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer gravida, libero at iaculis porta, diam magna euismod magna, vel ullamcorper augue eros ut lacus. Nullam nec libero eu dolor aliquet elementum. Vivamus purus sapien, euismod sed turpis ut, fermentum cursus metus. Nulla fermentum, metus et lacinia fermentum, ex eros tincidunt tellus, vitae semper nunc nisi imperdiet mi. Vestibulum ex nisi, hendrerit eu quam maximus, ullamcorper mollis lectus. Vivamus mattis fermentum leo, a tristique justo.','1622736628lablucident.jpg',NULL,'1','2021-06-03 16:10:28','2021-06-03 16:10:28'),(9,'Artículo de prueba 003','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra faucibus erat, quis consequat justo. Etiam fringilla lacinia aliquet. Praesent gravida arcu sem, a euismod massa condimentum at. Sed id magna sit amet arcu pellentesque vulputate. Praesent placerat nisi vitae imperdiet pulvinar. Aenean cursus vitae nulla non tristique. Nulla sit amet est nec eros laoreet malesuada nec a purus. Morbi interdum gravida metus, eget condimentum velit aliquam sit amet. Morbi nec est blandit, consectetur elit id, maximus augue. Donec et sagittis neque, non rutrum odio. Aliquam quam ante, commodo tristique est vitae, imperdiet varius dui. Donec finibus nibh at imperdiet aliquam. Aliquam porttitor luctus dui, nec accumsan mauris lobortis ac.\r\n\r\nProin aliquet ligula placerat ex auctor, ac aliquam sapien varius. Morbi maximus mi nec elementum tincidunt. Donec pulvinar iaculis odio quis dapibus. Pellentesque pellentesque justo nec nisi ullamcorper pretium. Etiam porta lacinia sollicitudin. Morbi sed orci non tortor porttitor suscipit eu et nibh. Nullam viverra tincidunt risus at commodo. Mauris vel metus arcu. Suspendisse mattis lorem ante, vitae tristique leo euismod a.\r\n\r\nNullam velit velit, cursus eu condimentum eu, facilisis sed nibh. Nunc sollicitudin porta eros id sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer gravida, libero at iaculis porta, diam magna euismod magna, vel ullamcorper augue eros ut lacus. Nullam nec libero eu dolor aliquet elementum. Vivamus purus sapien, euismod sed turpis ut, fermentum cursus metus. Nulla fermentum, metus et lacinia fermentum, ex eros tincidunt tellus, vitae semper nunc nisi imperdiet mi. Vestibulum ex nisi, hendrerit eu quam maximus, ullamcorper mollis lectus. Vivamus mattis fermentum leo, a tristique justo.','1622736855coachfootballmotion.jpg',NULL,'1','2021-06-03 16:14:15','2021-06-03 16:14:15'),(10,'Artículo de publisher','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pharetra faucibus erat, quis consequat justo. Etiam fringilla lacinia aliquet. Praesent gravida arcu sem, a euismod massa condimentum at. Sed id magna sit amet arcu pellentesque vulputate. Praesent placerat nisi vitae imperdiet pulvinar. Aenean cursus vitae nulla non tristique. Nulla sit amet est nec eros laoreet malesuada nec a purus. Morbi interdum gravida metus, eget condimentum velit aliquam sit amet. Morbi nec est blandit, consectetur elit id, maximus augue. Donec et sagittis neque, non rutrum odio. Aliquam quam ante, commodo tristique est vitae, imperdiet varius dui. Donec finibus nibh at imperdiet aliquam. Aliquam porttitor luctus dui, nec accumsan mauris lobortis ac.\r\n\r\nProin aliquet ligula placerat ex auctor, ac aliquam sapien varius. Morbi maximus mi nec elementum tincidunt. Donec pulvinar iaculis odio quis dapibus. Pellentesque pellentesque justo nec nisi ullamcorper pretium. Etiam porta lacinia sollicitudin. Morbi sed orci non tortor porttitor suscipit eu et nibh. Nullam viverra tincidunt risus at commodo. Mauris vel metus arcu. Suspendisse mattis lorem ante, vitae tristique leo euismod a.\r\n\r\nNullam velit velit, cursus eu condimentum eu, facilisis sed nibh. Nunc sollicitudin porta eros id sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer gravida, libero at iaculis porta, diam magna euismod magna, vel ullamcorper augue eros ut lacus. Nullam nec libero eu dolor aliquet elementum. Vivamus purus sapien, euismod sed turpis ut, fermentum cursus metus. Nulla fermentum, metus et lacinia fermentum, ex eros tincidunt tellus, vitae semper nunc nisi imperdiet mi. Vestibulum ex nisi, hendrerit eu quam maximus, ullamcorper mollis lectus. Vivamus mattis fermentum leo, a tristique justo.','1622737556invierte-en-colombia.jpg',NULL,'2','2021-06-03 16:25:56','2021-06-03 16:25:56');
/*!40000 ALTER TABLE `feed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Alejandro Estarlich','hello@alejandroestarlich.es','$2y$10$qvb4kmmMY5jX.s5WLLXTNumViocTIvKugrzwQhy21w.UDvz3wWB4C','admin',NULL,'2021-06-02 15:22:12','2021-06-02 15:22:12'),(2,'Usuario Publisher','publisher@publisher.com','$2y$10$Lp/.lp8nbcjjREHdceN2vOp156SCbl.EksRnmOI92gfGwj8HrKmWC','publisher',NULL,'2021-06-03 15:15:45','2021-06-03 15:15:45');
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

-- Dump completed on 2021-06-03 20:22:38
