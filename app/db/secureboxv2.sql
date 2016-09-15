-- MySQL dump 10.13  Distrib 5.5.50, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: securebox
-- ------------------------------------------------------
-- Server version	5.5.50-0ubuntu0.14.04.1

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
-- Table structure for table `transacoes`
--

DROP TABLE IF EXISTS `transacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transacoes` (
  `id_transacao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_mediador` int(11) DEFAULT NULL,
  `aes_key` text,
  `gpg_key` text,
  `path` varchar(50) DEFAULT NULL,
  `dt_inicio` datetime DEFAULT NULL,
  `dt_fim` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `encfile` blob,
  `transacao_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id_transacao`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transacoes`
--

LOCK TABLES `transacoes` WRITE;
/*!40000 ALTER TABLE `transacoes` DISABLE KEYS */;
INSERT INTO `transacoes` VALUES (10,'Transacao Teste',5,1,'1oz6Q0j!BsGDf&uGA&wdMhN&RLH#Kr5uFnkghtaILH#RGrh8qE','@4LI3neukPL%!bleitxi30QYLh&T%qh!dTD77HlbhX&bYlf7ED',NULL,NULL,NULL,'2016-09-14 15:54:25','2016-09-14 16:57:09',NULL,'dno8rDFXS#0j%gG#DMc0'),(11,'Transacao Teste',5,1,'X&LWqTQuwdknLwoSdoT2AZS5nSfKtfDae&WuSxO&AZn#fCOjQs','@acN6pq@1JanKfnrz6O%6&Yc@4EK#e49f6F!fW77q7d1@rbvgQ',NULL,NULL,NULL,'2016-09-14 16:04:06','2016-09-14 16:04:06',NULL,'u#Pc%K7Ce4H8VMXlH49x');
/*!40000 ALTER TABLE `transacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `PASSWORD` varchar(250) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `stat` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `pubkey` text NOT NULL,
  `privkey` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Matheus','msfidelis01@gmail.com','msfidelis','63357985e8642b2b70d01ed961e366492c7a2f7754c90ef385434f1d1ff63049',1,1,'2016-06-04 20:51:01','2016-06-04 20:51:01','',''),(2,'Administrador','admin@admin.com','admin','4f50949d08ecd5d81b27960829f10ac5a50a06c0475d45ed08ad778e6400b3bb',1,1,'2016-06-05 03:18:25','2016-07-28 00:45:09','',''),(5,'Abreu Ferreira','abreu@abreu.com','abreu','28f2765b62dbaecfc1b309c51a05fa176be781f2d9a175fe7f31f946f41f82e1',2,1,'2016-09-14 12:20:00','2016-09-14 12:20:00','',''),(6,'Bernardo','loko@loko.com','loko','2b6447e16a306c2aa752013f146f6a43cdcd232cecf4a1efb94c8857f7c60927',1,1,'2016-09-14 15:06:28','2016-09-14 15:06:28','-----BEGIN PUBLIC KEY-----\nMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuLUaG89oZzWFDDrhQdld\nT7mZR3b2sRuj9+qpnRVA/Tp6MQUBQpHljYCz2knTZehoRympU+VGjYsV+r9JWC2T\nDyDlrIiDrcN/02ml9QE2V/2CVwNZ8smOxbVXjorYXcg15brBDDFXyxL1xui/9jjl\ni++em9YOFzuGqxSPOR+HhrRr8c8ekREavDFoO1qE34RGp7DRTtZC+svM4s8U8I1v\noCEbDXAWSMyVi1IbYVH0/GAPu9YHk1BcFnOkO4rQS303wtMWa3yiIJseJxqHqv5X\nlMJf4HW7kB5EHNwinm1JMpdJ6HBUSDW5CHOCE1Iakuv78XqfiMj5asUnZncKtEHi\n9QIDAQAB\n-----END PUBLIC KEY-----\n','-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC4tRobz2hnNYUM\nOuFB2V1PuZlHdvaxG6P36qmdFUD9OnoxBQFCkeWNgLPaSdNl6GhHKalT5UaNixX6\nv0lYLZMPIOWsiIOtw3/TaaX1ATZX/YJXA1nyyY7FtVeOithdyDXlusEMMVfLEvXG\n6L/2OOWL756b1g4XO4arFI85H4eGtGvxzx6RERq8MWg7WoTfhEansNFO1kL6y8zi\nzxTwjW+gIRsNcBZIzJWLUhthUfT8YA+71geTUFwWc6Q7itBLfTfC0xZrfKIgmx4n\nGoeq/leUwl/gdbuQHkQc3CKebUkyl0nocFRINbkIc4ITUhqS6/vxep+IyPlqxSdm\ndwq0QeL1AgMBAAECggEBAIHXnXDrTmMvNkYwpeTaXkQLHnskX6qE2bEPnwgzxqm8\nj+UhtY8MbKgaT1QmDZtX0uYjnUrCo+QgX+USzwZTk0tRPuMYXCisg5EkdWtT3NXh\n+dwdGQAZPGozXkdvx0W11l2V+NsPXL3+qBOZzkfSG1tRqNe3k9Q1Hifpnfzz8xt3\nS6i/h2L3O9+jhN+ij18YTqBoB89LVRgoO6UMzBC483HJH4r0Gtahtpdtsf4ToDGN\ni4k+sj40I7KTaPyexj3QUTTDPWFQQ5CUKwHttWp/zrWvDgQuasvlddxgDvzHWr3D\n10YelYKA5hUog1RpDOeDTHw4g/os6dsbwkBZzwQc/kECgYEA2gGEbg9J1Pd/rTyq\n4rQtmJMUqq9b1IgyiC8G8e1SrsBtmBtxwx1lVvs41f4gYRpaXyfYE/5QLcf7Anja\nR9IFGAWoS9VxF8O2l7Lt0+kHzDsrQoV5060PFdogtjhLyIm4lGGIZS+nAFVuuVn+\nJSVfChft1eIVz97xd/LvX5Mzlc0CgYEA2OXzF4mksZY+PGIZhHyrTMcUEIh0rv9x\nsbgDeg5v+aM6uOxZiONidXI8Lozqe6ND/0pxAGQTrK9/SpMi2mZtvQAZ9vWXCyzO\nUpvS3TW/gOJEBUEhrNx9Yj1R/jQmxebbos/gz/BNU4V+kDe4TndiiRiuKRcbsidL\nzcpklithWckCgYA4lUA8GLe/EOYQnrhz0vQqr7IjgxRAm4ESG7KfxEs7lDJd0nG6\nhLyy0M21rRnWWjKuk/bfaZiB6W/a+mcdUQOFcqJ13FZYJrITuZtE7yzY81qND3vJ\nVxedQlpPMVlqGWTRDmeKa83aplHwxczS81oxknhmlSG4LFNcIK/EjL5M2QKBgEq2\nkxElkby2g0OrixyvERbGcKvtRTxOs6xDNbdip8G3L3ApwgG8Sdso+YATfGYQbEjR\nLLG0x24xmchnfJb8t4pmMYt3N4ta6Mtd77nRXOEZj9K7h80SuoIPm2HUNxLunfOs\nZcVbAlfl4R3ug6dLyn5tKPjwg9LPZHZD5HgyAzu5AoGAOahJLr67UyESfoFPozvF\nLam62wIE1cHGuuylREGAHhQq/8cnyL5KrDm3pb0Hzhu4RNgFXMbUZwZQa9QDj3cL\nhfALuZurutsVPS1S01awr4LBPhnK0TDT/jdf/Wki0Ol0elOU0Ts3iTpn8loj8fDq\nTWNoIEJtQj/Lqopq/gPYMXU=\n-----END PRIVATE KEY-----\n');
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

-- Dump completed on 2016-09-14 13:58:04
