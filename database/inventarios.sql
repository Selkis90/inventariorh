-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: inventarios
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.23.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Ajustes_Inventario`
--

DROP TABLE IF EXISTS `Ajustes_Inventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Ajustes_Inventario` (
  `ID_Ajuste` int NOT NULL AUTO_INCREMENT,
  `ID_Stock` int DEFAULT NULL,
  `Cantidad_Ajustada` int DEFAULT NULL,
  `Motivo` varchar(255) DEFAULT NULL,
  `Fecha_Ajuste` date DEFAULT NULL,
  `Responsable_Ajuste` varchar(100) DEFAULT NULL,
  `Comentarios` text,
  `Tipo_Ajuste` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Documento_Relacionado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_Ajuste`),
  KEY `Ajustes_Inventario_ibfk_1` (`ID_Stock`),
  CONSTRAINT `Ajustes_Inventario_ibfk_1` FOREIGN KEY (`ID_Stock`) REFERENCES `Stock` (`ID_Stock`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `chk_Tipo_Ajuste` CHECK ((`Tipo_Ajuste` in (_utf8mb4'Incremento',_utf8mb4'Decremento')))
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ajustes_Inventario`
--

LOCK TABLES `Ajustes_Inventario` WRITE;
/*!40000 ALTER TABLE `Ajustes_Inventario` DISABLE KEYS */;
INSERT INTO `Ajustes_Inventario` VALUES (8,NULL,46,'Aut laboris repudian','2015-06-02','Eu sunt eu sint vel','Voluptate ducimus i','Decremento','Mollitia et optio m'),(9,NULL,1,'Sit in consequat C','1977-01-22','Id molestiae quas do','Adipisicing magnam s','Decremento','Molestiae eos reicie'),(10,NULL,54,'Eum molestias cumque','2019-12-10','Reprehenderit quos ','Culpa quo sunt veni','Incremento','Sed nisi eius conseq'),(11,NULL,67,'Amet quis praesenti','1992-08-02','Dolorum totam laboru','Nisi dolores nisi et','Decremento','Labore in duis susci');
/*!40000 ALTER TABLE `Ajustes_Inventario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Compras`
--

DROP TABLE IF EXISTS `Compras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Compras` (
  `ID_Compra` int NOT NULL AUTO_INCREMENT,
  `ID_Proveedor` int DEFAULT NULL,
  `Numero_Orden_Compra` varchar(20) DEFAULT NULL,
  `Fecha_Compra` date DEFAULT NULL,
  `Total_Compra` decimal(10,2) DEFAULT NULL,
  `Numero_Factura` varchar(20) DEFAULT NULL,
  `Metodo_Pago` varchar(50) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Pendiente',
  `Observaciones` text,
  `Detalles` text,
  PRIMARY KEY (`ID_Compra`),
  KEY `ID_Proveedor` (`ID_Proveedor`),
  CONSTRAINT `Compras_ibfk_1` FOREIGN KEY (`ID_Proveedor`) REFERENCES `Proveedor` (`ID_Proveedor`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Compras`
--

LOCK TABLES `Compras` WRITE;
/*!40000 ALTER TABLE `Compras` DISABLE KEYS */;
INSERT INTO `Compras` VALUES (8,NULL,'Id sit sed sunt rei','1985-06-20',24.00,'Nihil maxime ex ipsu','Sunt in maiores id q','Ut sunt et voluptate','Placeat lorem aliqu','Omnis ab mollitia cu'),(9,NULL,'Aut optio eiusmod q','1991-10-08',94.00,'Quos vel enim laboru','Tempore magna volup','Et tempore velit v','Consectetur reprehen','Recusandae Adipisic');
/*!40000 ALTER TABLE `Compras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Producto`
--

DROP TABLE IF EXISTS `Producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Producto` (
  `ID_Producto` int NOT NULL AUTO_INCREMENT,
  `Serial` varchar(50) DEFAULT NULL,
  `Placa` varchar(50) DEFAULT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` text,
  `Precio_Unitario` decimal(10,2) DEFAULT NULL,
  `Marca` varchar(100) DEFAULT NULL,
  `Categoria` varchar(100) DEFAULT NULL,
  `Stock` int DEFAULT NULL,
  `Fecha_Ingreso` date DEFAULT NULL,
  `Proveedor_ID` int DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Activo',
  `Peso` decimal(8,2) DEFAULT NULL,
  `Dimensiones` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_Producto`),
  UNIQUE KEY `Serial` (`Serial`),
  UNIQUE KEY `Placa` (`Placa`),
  KEY `Proveedor_ID` (`Proveedor_ID`),
  CONSTRAINT `Producto_ibfk_1` FOREIGN KEY (`Proveedor_ID`) REFERENCES `Proveedor` (`ID_Proveedor`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Producto`
--

LOCK TABLES `Producto` WRITE;
/*!40000 ALTER TABLE `Producto` DISABLE KEYS */;
INSERT INTO `Producto` VALUES (14,'Quisquam autem praes','Corporis pariatur A','Aperiam iste sint mi','Amet veritatis corp',99.00,'Fugit tempore itaq','Atque voluptas neces',61,'1980-02-23',NULL,'Sequi aut alias corp',73.00,'Harum tempora expedi','Ipsam molestias quo '),(15,'Cum mollit sapiente ','Et ducimus eos reru','Et sit nisi perspic','Enim et optio elit',95.00,'Autem qui et unde do','Vel numquam sit illo',74,'2019-01-05',NULL,'0',34.00,'Quibusdam officiis m','Numquam accusamus li'),(16,'Quis repudiandae dic','Voluptatem ea aut d','Tempora nobis offici','Laudantium rerum hi',4.00,'Nisi dolor explicabo','Adipisci consequuntu',18,'1979-03-28',NULL,'0',44.00,'Dolorum est dolor ei','Esse eiusmod quo se'),(17,'Dolorum cupidatat do','Iste maiores quia ve','Quia blanditiis dolo','Est eaque qui numqu',63.00,'Ullamco neque quos v','Explicabo Recusanda',32,'1990-03-01',NULL,'0',46.00,'Aut quisquam qui bla','Ex praesentium conse'),(18,'At est illo voluptas','Sint voluptate modi ','Anim mollit tenetur ','Eaque nihil ipsa un',4.00,'Ut nisi quo aute ali','Sit numquam laboris',70,'2009-12-10',NULL,'0',45.00,'Provident quis aper','Alias ut vero enim r'),(19,'Ex maxime iste volup','Nisi soluta neque vo','Quia omnis reiciendi','Et omnis sed totam e',46.00,'Dolor at dicta conse','Aut beatae in quod h',11,'2008-12-18',NULL,'0',25.00,'Unde voluptas ration','Consectetur cupidat'),(20,'1','1','1','1',33.00,'1','1',49,'1993-02-04',NULL,'Ex quisquam alias ci',10.00,'1','1'),(21,'Libero voluptatem im','Occaecat nostrum nul','Molestiae dolor perf','Deleniti a iste debi',23.00,'Molestiae sint prae','Aut est vero et volu',35,'2006-05-15',NULL,'Qui voluptas dolorib',16.00,'Totam adipisci dolor','Nulla sint minus qui'),(22,'8888888','5454','CABLE USB','CABLE TIPO C, CON CONVERTIDOR 12V',9.00,'USB','CABLES',30,'2024-01-25',NULL,'NUEVO',3.00,'SDAS','NEGRO'),(23,'697979797','4321','RELOJ','RELOJ DIESEL',50000.00,'DIESEL','RELOJES',25,'2024-01-25',NULL,'USADO',50.00,'50X50X50','ROJO');
/*!40000 ALTER TABLE `Producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Proveedor`
--

DROP TABLE IF EXISTS `Proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Proveedor` (
  `ID_Proveedor` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) DEFAULT NULL,
  `Contacto` varchar(255) DEFAULT NULL,
  `Telefono` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Direccion` text,
  `Correo_Electronico` varchar(255) DEFAULT NULL,
  `Observaciones` text,
  PRIMARY KEY (`ID_Proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Proveedor`
--

LOCK TABLES `Proveedor` WRITE;
/*!40000 ALTER TABLE `Proveedor` DISABLE KEYS */;
INSERT INTO `Proveedor` VALUES (12,'Esse consequatur ven','Modi magni dolore ha','Odio voluptas quas m','Porro molestias a et','caqu@mailinator.com','Tempore obcaecati r'),(13,'victor manuel','Laborum ad id Nam au','Eos asperiores volup','In at molestiae aliq','tomogepyde@mailinator.com','Inventore nemo nostr'),(14,'Numquam eaque dolor ','Id laudantium mole','Aut sunt lorem fugi','Dolorem laboriosam ','qotalyk@mailinator.com','Aut ab commodi sit '),(15,'OTRA EMPRESA','ERES EL MEJOR ','321321321','CRER 321 321','ERESELMEJOR@GMAIL.COM','QUE BIEN '),(16,'Mollit magni alias o','Sit quia laborum id','Non voluptate at est','Vel cumque elit pos','xozycyrixo@mailinator.com','Ut impedit voluptat'),(17,'NUEVA EMPRESA','ANDRES','3214866648','sdfdsf','CARRERA@GMAIL.COM','sdfdsf'),(18,'Cupiditate in eos vo','Aut excepturi ipsum','In quidem nostrum qu','Porro cum cum minus ','remofi@mailinator.com','Lorem dolore in nisi');
/*!40000 ALTER TABLE `Proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Stock`
--

DROP TABLE IF EXISTS `Stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Stock` (
  `ID_Stock` int NOT NULL AUTO_INCREMENT,
  `Nombre_Producto` varchar(255) DEFAULT NULL,
  `Cantidad` int DEFAULT NULL,
  `Producto_ID` int DEFAULT NULL,
  PRIMARY KEY (`ID_Stock`),
  KEY `Producto_ID` (`Producto_ID`),
  CONSTRAINT `Stock_ibfk_1` FOREIGN KEY (`Producto_ID`) REFERENCES `Producto` (`ID_Producto`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Stock`
--

LOCK TABLES `Stock` WRITE;
/*!40000 ALTER TABLE `Stock` DISABLE KEYS */;
INSERT INTO `Stock` VALUES (15,'computador',10,NULL),(18,'mesa',2,NULL),(19,'TELEVISOR HD',10,NULL);
/*!40000 ALTER TABLE `Stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Traslado`
--

DROP TABLE IF EXISTS `Traslado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Traslado` (
  `ID_Traslado` int NOT NULL AUTO_INCREMENT,
  `Tipo_Activo` varchar(50) DEFAULT NULL,
  `ID_Activo` int DEFAULT NULL,
  `ID_Stock` int DEFAULT NULL,
  `Fecha_Traslado` date DEFAULT NULL,
  `De_Ubicacion` varchar(255) DEFAULT NULL,
  `A_Ubicacion` varchar(255) DEFAULT NULL,
  `Motivo` varchar(255) DEFAULT NULL,
  `Responsable_Traslado` varchar(100) DEFAULT NULL,
  `Persona_Entrega` varchar(100) DEFAULT NULL,
  `Cedula_Entrega` varchar(20) DEFAULT NULL,
  `Cargo_Entrega` varchar(50) DEFAULT NULL,
  `Telefono_Entrega` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Centro_Costo_Entrega` varchar(50) DEFAULT NULL,
  `Persona_Responsable` varchar(100) DEFAULT NULL,
  `Cedula_Responsable` varchar(20) DEFAULT NULL,
  `Cargo_Responsable` varchar(50) DEFAULT NULL,
  `Telefono_Responsable` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Centro_Costo_Responsable` varchar(50) DEFAULT NULL,
  `Comentarios` text,
  `Estado` varchar(20) DEFAULT 'En Proceso',
  PRIMARY KEY (`ID_Traslado`),
  KEY `ID_Activo` (`ID_Activo`),
  KEY `ID_Stock` (`ID_Stock`),
  CONSTRAINT `Traslado_ibfk_1` FOREIGN KEY (`ID_Activo`) REFERENCES `Producto` (`ID_Producto`) ON DELETE SET NULL,
  CONSTRAINT `Traslado_ibfk_2` FOREIGN KEY (`ID_Stock`) REFERENCES `Stock` (`ID_Stock`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Traslado`
--

LOCK TABLES `Traslado` WRITE;
/*!40000 ALTER TABLE `Traslado` DISABLE KEYS */;
/*!40000 ALTER TABLE `Traslado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingreso_activos`
--

DROP TABLE IF EXISTS `ingreso_activos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingreso_activos` (
  `ID_Ingreso` int NOT NULL AUTO_INCREMENT,
  `Tipo_Activo` varchar(50) DEFAULT NULL,
  `Descripcion` text,
  `Marca` varchar(100) DEFAULT NULL,
  `Modelo` varchar(100) DEFAULT NULL,
  `Numero_Serie` varchar(50) DEFAULT NULL,
  `Placa` varchar(50) DEFAULT NULL,
  `Cantidad` int DEFAULT NULL,
  `Fecha_Ingreso` date DEFAULT NULL,
  `Proveedor_ID` int DEFAULT NULL,
  `Costo_Unitario` decimal(10,2) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Disponible',
  `Ubicacion_Almacen` varchar(255) DEFAULT NULL,
  `Garantia` date DEFAULT NULL,
  `Vida_Util` int DEFAULT NULL,
  `Fecha_Caducidad` date DEFAULT NULL,
  `Proxima_Fecha_Calibracion` date DEFAULT NULL,
  `Observaciones` text,
  PRIMARY KEY (`ID_Ingreso`),
  KEY `Proveedor_ID` (`Proveedor_ID`),
  CONSTRAINT `ingreso_activos_ibfk_1` FOREIGN KEY (`Proveedor_ID`) REFERENCES `Proveedor` (`ID_Proveedor`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingreso_activos`
--

LOCK TABLES `ingreso_activos` WRITE;
/*!40000 ALTER TABLE `ingreso_activos` DISABLE KEYS */;
INSERT INTO `ingreso_activos` VALUES (12,'Obcaecati do perfere','Velit rerum voluptas','Ex enim distinctio ','Et doloremque ut ali','Alias quis assumenda','Irure aperiam deleni',54,'1973-05-08',NULL,6.00,'Quis molestias facil','Laudantium et non d','1980-10-22',76,'1971-02-19','2005-05-20','Eius tempor qui modi');
/*!40000 ALTER TABLE `ingreso_activos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'andres ramirez','programmer.arh@gmail.com','$2y$10$o0yHW0ix6qhQm27EZyl0P.ewE4AnZpsWFRuQr1imOeUcyKBR05av6'),(2,'alisson','alisson@gmail.com','$2y$10$S6G2tYIzN34hF0Julf5cUOwcdfatXCm5R1Hm3MADbdR7H41Mnhffa'),(3,'irma huertas corrales','irma@gmail.com','$2y$10$qP3x4kUN6AY98w/CAungTOjOQHiiZ67.nMfmxKYsP4gD1/.OxMp2S'),(4,'jorge','jorge@gmail.com','$2y$10$Lg2h8rYPcuVo4jty8R7uE.ZxTwNv.YWnLSfbcd9swliwT/Bxjvba2'),(5,'fifi','fifi@gmail.com','$2y$10$Z0gbGRBoiMlG3xb9FD9wZ.uMJX6A3H/RVp89jUDIopsf3iXdd5Fbu'),(6,'hugo andres ramirez ','selkis90@gmail.com','$2y$10$LkliHVZr4A91Lf/CJ94U1urjxO2oQ6Git2XxtKbisRpM8w2S0ZaSC'),(7,'diana  marcela ramirez','diana@gmail.com','$2y$10$ROXmfKOKhOM.7ODh6QRMYe6nQBNRP5Z3I.VzVd1oe6LmCcDOHoJBa'),(8,'ester corrales','ester@gmail.com','$2y$10$JC1dsc2W3aTCEeWBKrgc9ur8Pf7dxuA2KlkWhRRsxQp9lGap4a2/m'),(9,'jessica','jessica@gmail.com','$2y$10$62NbrgkOu6SKYdhEdwHySuaY.rGEIBCW0TVfRje76l8HcgJkycDyq'),(10,'matias','matias@gmail.com','$2y$10$ZUxcynMe9HdYpiyugCgPnui/gMkbmdCuee2Z9pKsfmrxorW4KSkYq'),(11,'matias','matias@gmail.com','$2y$10$jJzSrrnkOZv6kFIx/K7yderGhSg7dMyMBlyt74nazR9JFS8fJqyZ2'),(12,'jissel','jissel@gmail.com','$2y$10$KG58.JkGjt/zRSLJv1024.6KUoahaPE9UjXrPw.oZaClUJ4ays03m');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-06 21:26:34
