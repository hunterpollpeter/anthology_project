-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: anthology
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `articleID` varchar(5) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `imageFile` varchar(128) DEFAULT NULL,
  `numViews` int(11) DEFAULT NULL,
  `numPurchases` int(11) DEFAULT NULL,
  `issueYear` varchar(4) DEFAULT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  PRIMARY KEY (`articleID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES ('1','Representation of the Holocaust through the Memorial to the Murdered Jews of Europe','holocaustMemorial.jpg',NULL,NULL,'2017',4,10),('2','Ibuprofen Synthesis','ibuprofen_synthesis',NULL,NULL,'2017',11,14),('3','Madness in (Stage)craft','stage_craft.jpg',NULL,NULL,'2017',15,18),('4','Nutrition and Neurology','neurology',NULL,NULL,'2017',19,22),('5','An Identity in the Seams','identity',NULL,NULL,'2017',23,27),('6','Legal and Cultural Contexts of Gay Rights in India','india_gay_rights',NULL,NULL,'2017',28,31),('7','The Judgement of \"Penelope\": A Day in the Life of Molly Bloom','molly_bloom',NULL,NULL,'2017',32,45),('8','A Measured Response: Staging the Ambiguity in Measure for Measure','measure_for_measure',NULL,NULL,'2017',46,50),('9','And Here Our Troubles Began: An American Reaction to 9/11 in Comix','9_11_in_comix',NULL,NULL,'2017',51,60),('10','Searching for the Beginning','searching_for_beginning',NULL,NULL,'2017',61,66),('11','Rebirth','rebirth',NULL,NULL,'2017',67,68),('12','An Absurd Separation: South Africa\'s Apartheid in Sizwe Bansi is Dead',NULL,NULL,NULL,'2008',3,6),('13','Poetic Strategies in Night and Black Elk Speaks',NULL,NULL,NULL,'2008',7,8),('14','Mending the Broken Spinning Wheel: Religion and a Woman\'s Place in Shadows on the Rock',NULL,NULL,NULL,'2008',9,16),('15','Progressive Passion',NULL,NULL,NULL,'2008',16,18),('16','Losing Baba',NULL,NULL,NULL,'2008',19,22),('17','The House of God: Worship in the Temple, Synagogue and Christian Church',NULL,NULL,NULL,'2008',23,25),('18','Pythagoras:The Mathematical, Cosmological, and Musical Philosophies',NULL,NULL,NULL,'2008',26,29),('19','Lab 4, Aldol Condensation: Synthesis of Dibenzalacetone (DBA)',NULL,NULL,NULL,'2008',30,32),('20','Smallpox: A Bioterrorism Threat?',NULL,NULL,NULL,'2008',32,35),('21','Fair Value Accounting: Should We Risk the Switch?',NULL,NULL,NULL,'2008',35,39),('22','Aging in the Workplace: Will You Still Need Me When I\'m 64?',NULL,NULL,NULL,'2008',40,48),('23','Austria: Country Analysis',NULL,NULL,NULL,'2008',48,53),('24','Ariel por José Enrique Rodó',NULL,NULL,NULL,'2008',54,56),('25','Dante’s Dark Forest',NULL,NULL,NULL,'2009',4,10),('26','Dubai and the UAE: A Middle East Anomaly',NULL,NULL,NULL,'2009',10,15),('27','Nonviolent War Against Violent War',NULL,NULL,NULL,'2009',16,19),('28','Obesity: The Bulge in the Healthcare Costs of America’s Businesses',NULL,NULL,NULL,'2009',19,29),('29','Fading Barns: The Family Farm in Crisis',NULL,NULL,NULL,'2009',29,32),('30','A Cut Above: The Castrato as Operatic Idol',NULL,NULL,NULL,'2009',32,35),('31','Deconstructing Citizenship',NULL,NULL,NULL,'2009',35,37),('32','International Financial Reporting: Understanding the Potentials and Limitations of Convergence',NULL,NULL,NULL,'2009',38,44),('33','Finding Myself in Vienna',NULL,NULL,NULL,'2009',44,50),('34','Calligraphy in Islamic Culture',NULL,NULL,NULL,'2009',51,55),('35','Social Capital Meets Online Dating',NULL,NULL,NULL,'2009',56,60),('36','Nitrating Methyl Benzoate',NULL,NULL,NULL,'2009',60,63),('37','Monstruos y Memoria',NULL,NULL,NULL,'2009',64,69);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authorarticle`
--

DROP TABLE IF EXISTS `authorarticle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authorarticle` (
  `authorID` varchar(10) DEFAULT NULL,
  `articleID` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authorarticle`
--

LOCK TABLES `authorarticle` WRITE;
/*!40000 ALTER TABLE `authorarticle` DISABLE KEYS */;
INSERT INTO `authorarticle` VALUES ('1','1'),('2','2'),('3','2'),('4','3'),('5','4'),('6','5'),('7','6'),('8','7'),('9','8'),('10','9'),('11','10'),('12','11'),('13','12'),('14','13'),('15','14'),('16','15'),('17','16'),('18','17'),('19','18'),('20','19'),('21','20'),('22','21'),('23','22'),('24','22'),('25','22'),('26','23'),('27','24'),('28','25'),('29','26'),('30','27'),('31','28'),('32','28'),('33','28'),('34','28'),('35','29'),('36','30'),('37','31'),('38','32'),('39','33'),('40','34'),('41','35'),('42','36'),('43','37');
/*!40000 ALTER TABLE `authorarticle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `authorID` varchar(10) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `standing` varchar(2) DEFAULT NULL,
  `gradYear` varchar(4) DEFAULT NULL,
  `course` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`authorID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES ('1','Gretchen','Kistenmacher',NULL,NULL,NULL),('2','Mckenna','Kilburg',NULL,NULL,NULL),('3','Rachel','Tyler',NULL,NULL,NULL),('4','K.E.','Daft',NULL,NULL,NULL),('5','Andrea','Artorfer',NULL,NULL,NULL),('6','Kayleigh','Rohr',NULL,NULL,NULL),('7','Duncan','Brumwell',NULL,NULL,NULL),('8','Lindsey','Greer',NULL,NULL,NULL),('9','Hannah','Marcum',NULL,NULL,NULL),('10','Sydney','Embray',NULL,NULL,NULL),('11','Josie','Youel',NULL,NULL,NULL),('12','Zach','Moss',NULL,NULL,NULL),('13','Adam','Livengood',NULL,NULL,NULL),('14','Eric','Davis',NULL,NULL,NULL),('15','Shelley','DeWeerdt',NULL,NULL,NULL),('16','Amanda','Roling',NULL,NULL,NULL),('17','Hanaa','Bouchikhi',NULL,NULL,NULL),('18','Emily','De Penning',NULL,NULL,NULL),('19','Liza','Calisesi',NULL,NULL,NULL),('20','Jana','Stallman',NULL,NULL,NULL),('21','Amanda','Whittle',NULL,NULL,NULL),('22','Stephanie','Uthe',NULL,NULL,NULL),('23','Leanna','McBride',NULL,NULL,NULL),('24','David','Schildberg',NULL,NULL,NULL),('25','Ashley','Stewart',NULL,NULL,NULL),('26','Sarah','Frese',NULL,NULL,NULL),('27','Katherine','Fuchtman',NULL,NULL,NULL),('28','Molly','Pim',NULL,NULL,NULL),('29','Kristyn','Hill',NULL,NULL,NULL),('30','Miranda','Munson',NULL,NULL,NULL),('31','Josh','Beckman',NULL,NULL,NULL),('32','Maggie','Paris',NULL,NULL,NULL),('33','Justin','Saxfield',NULL,NULL,NULL),('34','Blake','Smith',NULL,NULL,NULL),('35','Amanda','Whittle',NULL,NULL,NULL),('36','Jared','McCarty',NULL,NULL,NULL),('37','Emily','Ruschill',NULL,NULL,NULL),('38','Kirstin','Krambeck',NULL,NULL,NULL),('39','Andrea','Montrone',NULL,NULL,NULL),('40','Melissa','De Ruiter',NULL,NULL,NULL),('41','Ivy','Paul',NULL,NULL,NULL),('42','Ashley','Beck',NULL,NULL,NULL),('43','Emily','DePenning',NULL,NULL,NULL);
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `editorissue`
--

DROP TABLE IF EXISTS `editorissue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `editorissue` (
  `authorID` varchar(10) DEFAULT NULL,
  `issueYear` varchar(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `editorissue`
--

LOCK TABLES `editorissue` WRITE;
/*!40000 ALTER TABLE `editorissue` DISABLE KEYS */;
/*!40000 ALTER TABLE `editorissue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `issues` (
  `issueYear` varchar(4) NOT NULL,
  `imageFile` varchar(128) DEFAULT NULL,
  `numViews` int(11) DEFAULT NULL,
  `numPurchases` int(11) DEFAULT NULL,
  `currentIndicator` varchar(1) DEFAULT NULL,
  `issueFile` varchar(128) NOT NULL,
  `noteStart` int(11) DEFAULT NULL,
  `noteEnd` int(11) DEFAULT NULL,
  PRIMARY KEY (`issueYear`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issues`
--

LOCK TABLES `issues` WRITE;
/*!40000 ALTER TABLE `issues` DISABLE KEYS */;
INSERT INTO `issues` VALUES ('2017','cover_image',NULL,NULL,'1','2017_Writing_Anthology.pdf',2,2),('2009','cover_image',NULL,NULL,'0','Writing_Anthology_09.pdf',70,70),('2008','cover_image',NULL,NULL,'0','Writing_Anthology_WEB_08.pdf',58,58);
/*!40000 ALTER TABLE `issues` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-01 14:27:12
