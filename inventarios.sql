-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-10-2024 a las 03:11:34
-- Versión del servidor: 8.0.39-0ubuntu0.24.04.2
-- Versión de PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ajustes_Inventario`
--

CREATE TABLE `Ajustes_Inventario` (
  `ID_Ajuste` int NOT NULL,
  `ID_Stock` int DEFAULT NULL,
  `Cantidad_Ajustada` int DEFAULT NULL,
  `Motivo` varchar(255) DEFAULT NULL,
  `Fecha_Ajuste` date DEFAULT NULL,
  `Responsable_Ajuste` varchar(100) DEFAULT NULL,
  `Comentarios` text,
  `Tipo_Ajuste` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Documento_Relacionado` varchar(50) DEFAULT NULL
) ;

--
-- Volcado de datos para la tabla `Ajustes_Inventario`
--

INSERT INTO `Ajustes_Inventario` (`ID_Ajuste`, `ID_Stock`, `Cantidad_Ajustada`, `Motivo`, `Fecha_Ajuste`, `Responsable_Ajuste`, `Comentarios`, `Tipo_Ajuste`, `Documento_Relacionado`) VALUES
(8, NULL, 46, 'Aut laboris repudian', '2015-06-02', 'Eu sunt eu sint vel', 'Voluptate ducimus i', 'Decremento', 'Mollitia et optio m'),
(9, NULL, 1, 'Sit in consequat C', '1977-01-22', 'Id molestiae quas do', 'Adipisicing magnam s', 'Decremento', 'Molestiae eos reicie'),
(10, NULL, 54, 'Eum molestias cumque', '2019-12-10', 'Reprehenderit quos ', 'Culpa quo sunt veni', 'Incremento', 'Sed nisi eius conseq'),
(11, NULL, 67, 'Amet quis praesenti', '1992-08-02', 'Dolorum totam laboru', 'Nisi dolores nisi et', 'Decremento', 'Labore in duis susci'),
(12, NULL, 10, 'DAÑADA', '2024-06-23', 'Andreas Ramirez', 'se da de baja ', 'Decremento', '0001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Compras`
--

CREATE TABLE `Compras` (
  `ID_Compra` int NOT NULL,
  `ID_Proveedor` int DEFAULT NULL,
  `Numero_Orden_Compra` varchar(20) DEFAULT NULL,
  `Fecha_Compra` date DEFAULT NULL,
  `Total_Compra` decimal(10,2) DEFAULT NULL,
  `Numero_Factura` varchar(20) DEFAULT NULL,
  `Metodo_Pago` varchar(50) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Pendiente',
  `Observaciones` text,
  `Detalles` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Compras`
--

INSERT INTO `Compras` (`ID_Compra`, `ID_Proveedor`, `Numero_Orden_Compra`, `Fecha_Compra`, `Total_Compra`, `Numero_Factura`, `Metodo_Pago`, `Estado`, `Observaciones`, `Detalles`) VALUES
(8, NULL, 'Id sit sed sunt rei', '1985-06-20', 24.00, 'Nihil maxime ex ipsu', 'Sunt in maiores id q', 'Ut sunt et voluptate', 'Placeat lorem aliqu', 'Omnis ab mollitia cu'),
(9, NULL, 'Aut optio eiusmod q', '1991-10-08', 94.00, 'Quos vel enim laboru', 'Tempore magna volup', 'Et tempore velit v', 'Consectetur reprehen', 'Recusandae Adipisic'),
(10, NULL, '0011', '2024-06-23', 1500000.00, 'FVE999', 'EFECTIVO', 'OK', 'Se obsequia mouse gamer', 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_activos`
--

CREATE TABLE `ingreso_activos` (
  `ID_Ingreso` int NOT NULL,
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
  `Observaciones` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ingreso_activos`
--

INSERT INTO `ingreso_activos` (`ID_Ingreso`, `Tipo_Activo`, `Descripcion`, `Marca`, `Modelo`, `Numero_Serie`, `Placa`, `Cantidad`, `Fecha_Ingreso`, `Proveedor_ID`, `Costo_Unitario`, `Estado`, `Ubicacion_Almacen`, `Garantia`, `Vida_Util`, `Fecha_Caducidad`, `Proxima_Fecha_Calibracion`, `Observaciones`) VALUES
(12, 'Obcaecati do perfere', 'Velit rerum voluptas', 'Ex enim distinctio ', 'Et doloremque ut ali', 'Alias quis assumenda', 'Irure aperiam deleni', 54, '1973-05-08', NULL, 6.00, 'Quis molestias facil', 'Laudantium et non d', '1980-10-22', 76, '1971-02-19', '2005-05-20', 'Eius tempor qui modi'),
(13, 'CAMARA', 'full imagen', 'canon', '3200', '012345', '0002', 10, '2024-06-22', NULL, 500000.00, 'activivo', 'bodega sacs', '2025-06-22', 5, '2030-09-22', '2024-06-22', 'en buen estado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `ID_Producto` int NOT NULL,
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
  `Color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`ID_Producto`, `Serial`, `Placa`, `Nombre`, `Descripcion`, `Precio_Unitario`, `Marca`, `Categoria`, `Stock`, `Fecha_Ingreso`, `Proveedor_ID`, `Estado`, `Peso`, `Dimensiones`, `Color`) VALUES
(14, 'Quisquam autem praes', 'Corporis pariatur A', 'Aperiam iste sint mi', 'Amet veritatis corp', 99.00, 'Fugit tempore itaq', 'Atque voluptas neces', 61, '1980-02-23', NULL, 'Sequi aut alias corp', 73.00, 'Harum tempora expedi', 'Ipsam molestias quo '),
(15, 'Cum mollit sapiente ', 'Et ducimus eos reru', 'Et sit nisi perspic', 'Enim et optio elit', 95.00, 'Autem qui et unde do', 'Vel numquam sit illo', 74, '2019-01-05', NULL, '0', 34.00, 'Quibusdam officiis m', 'Numquam accusamus li'),
(16, 'Quis repudiandae dic', 'Voluptatem ea aut d', 'Tempora nobis offici', 'Laudantium rerum hi', 4.00, 'Nisi dolor explicabo', 'Adipisci consequuntu', 18, '1979-03-28', NULL, '0', 44.00, 'Dolorum est dolor ei', 'Esse eiusmod quo se'),
(17, 'Dolorum cupidatat do', 'Iste maiores quia ve', 'Quia blanditiis dolo', 'Est eaque qui numqu', 63.00, 'Ullamco neque quos v', 'Explicabo Recusanda', 32, '1990-03-01', NULL, '0', 46.00, 'Aut quisquam qui bla', 'Ex praesentium conse'),
(18, 'At est illo voluptas', 'Sint voluptate modi ', 'Anim mollit tenetur ', 'Eaque nihil ipsa un', 4.00, 'Ut nisi quo aute ali', 'Sit numquam laboris', 70, '2009-12-10', NULL, '0', 45.00, 'Provident quis aper', 'Alias ut vero enim r'),
(19, 'Ex maxime iste volup', 'Nisi soluta neque vo', 'Quia omnis reiciendi', 'Et omnis sed totam e', 46.00, 'Dolor at dicta conse', 'Aut beatae in quod h', 11, '2008-12-18', NULL, '0', 25.00, 'Unde voluptas ration', 'Consectetur cupidat'),
(20, '1', '1', '1', '1', 33.00, '1', '1', 49, '1993-02-04', NULL, 'Ex quisquam alias ci', 10.00, '1', '1'),
(21, 'Libero voluptatem im', 'Occaecat nostrum nul', 'Molestiae dolor perf', 'Deleniti a iste debi', 23.00, 'Molestiae sint prae', 'Aut est vero et volu', 35, '2006-05-15', NULL, 'Qui voluptas dolorib', 16.00, 'Totam adipisci dolor', 'Nulla sint minus qui'),
(22, '8888888', '5454', 'CABLE USB', 'CABLE TIPO C, CON CONVERTIDOR 12V', 9.00, 'USB', 'CABLES', 30, '2024-01-25', NULL, 'NUEVO', 3.00, 'SDAS', 'NEGRO'),
(23, '697979797', '4321', 'RELOJ', 'RELOJ DIESEL', 50000.00, 'DIESEL', 'RELOJES', 25, '2024-01-25', NULL, 'USADO', 50.00, '50X50X50', 'ROJO'),
(24, '12345', '0001', 'computador dell', 'nuevo', 1000000.00, 'dell', 'sistemas', 10, '2024-06-22', NULL, '0', 5.00, '35x25x2', 'negro'),
(25, 'Ad architecto ea exp', 'Quis nisi asperiores', 'Praesentium ea nemo ', 'Excepturi qui evenie', 22.00, 'Nihil esse odit ips', 'Fuga Voluptatibus d', 33, '1971-09-27', NULL, '0', 94.00, 'Aut dolores laborum ', 'Est sint eius tempo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proveedor`
--

CREATE TABLE `Proveedor` (
  `ID_Proveedor` int NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Contacto` varchar(255) DEFAULT NULL,
  `Telefono` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Direccion` text,
  `Correo_Electronico` varchar(255) DEFAULT NULL,
  `Observaciones` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Proveedor`
--

INSERT INTO `Proveedor` (`ID_Proveedor`, `Nombre`, `Contacto`, `Telefono`, `Direccion`, `Correo_Electronico`, `Observaciones`) VALUES
(12, 'Esse consequatur ven', 'Modi magni dolore ha', 'Odio voluptas quas m', 'Porro molestias a et', 'caqu@mailinator.com', 'Tempore obcaecati r'),
(13, 'victor manuel', 'Laborum ad id Nam au', 'Eos asperiores volup', 'In at molestiae aliq', 'tomogepyde@mailinator.com', 'Inventore nemo nostr'),
(14, 'Numquam eaque dolor ', 'Id laudantium mole', 'Aut sunt lorem fugi', 'Dolorem laboriosam ', 'qotalyk@mailinator.com', 'Aut ab commodi sit '),
(15, 'OTRA EMPRESA', 'ERES EL MEJOR ', '321321321', 'CRER 321 321', 'ERESELMEJOR@GMAIL.COM', 'QUE BIEN '),
(16, 'Mollit magni alias o', 'Sit quia laborum id', 'Non voluptate at est', 'Vel cumque elit pos', 'xozycyrixo@mailinator.com', 'Ut impedit voluptat'),
(17, 'NUEVA EMPRESA', 'ANDRES', '3214866648', 'sdfdsf', 'CARRERA@GMAIL.COM', 'sdfdsf'),
(18, 'Cupiditate in eos vo', 'Aut excepturi ipsum', 'In quidem nostrum qu', 'Porro cum cum minus ', 'remofi@mailinator.com', 'Lorem dolore in nisi'),
(22, 'Ab optio animi ea ', 'Occaecat consequatur', 'Modi iure dolores in', 'Eveniet ex ullam op', 'dexo@mailinator.com', 'Est molestiae sed eu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Stock`
--

CREATE TABLE `Stock` (
  `ID_Stock` int NOT NULL,
  `Nombre_Producto` varchar(255) DEFAULT NULL,
  `Cantidad` int DEFAULT NULL,
  `Producto_ID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Stock`
--

INSERT INTO `Stock` (`ID_Stock`, `Nombre_Producto`, `Cantidad`, `Producto_ID`) VALUES
(18, 'mesa', 2, NULL),
(19, 'TELEVISOR HD', 10, NULL),
(24, 'mouse', 32, NULL),
(25, 'celular', 321, NULL),
(27, 'M2', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Traslado`
--

CREATE TABLE `Traslado` (
  `ID_Traslado` int NOT NULL,
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
  `Telefono_Entrega` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Centro_Costo_Entrega` varchar(50) DEFAULT NULL,
  `Persona_Responsable` varchar(100) DEFAULT NULL,
  `Cedula_Responsable` varchar(20) DEFAULT NULL,
  `Cargo_Responsable` varchar(50) DEFAULT NULL,
  `Telefono_Responsable` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Centro_Costo_Responsable` varchar(50) DEFAULT NULL,
  `Comentarios` text,
  `Estado` varchar(20) DEFAULT 'En Proceso'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Traslado`
--

INSERT INTO `Traslado` (`ID_Traslado`, `Tipo_Activo`, `ID_Activo`, `ID_Stock`, `Fecha_Traslado`, `De_Ubicacion`, `A_Ubicacion`, `Motivo`, `Responsable_Traslado`, `Persona_Entrega`, `Cedula_Entrega`, `Cargo_Entrega`, `Telefono_Entrega`, `Centro_Costo_Entrega`, `Persona_Responsable`, `Cedula_Responsable`, `Cargo_Responsable`, `Telefono_Responsable`, `Centro_Costo_Responsable`, `Comentarios`, `Estado`) VALUES
(12, 'CAMARA 1', NULL, NULL, '2024-05-29', 'BOGOTA', 'ARMENIA', 'REPARADO', 'CAMILO', 'CAMILO', '321321', 'LIDER', '32131321', '1155', 'ANDRES', '321321', 'LIDER', '321321321', '1122', 'REPARADO', 'ARREGLADO'),
(13, 'CAMARA', NULL, NULL, '2024-06-22', 'cartagena', 'BOGOTA', 'DAÑADA', 'ANDRES', 'ANDRES RAMIREZ', '13232132', 'LIDER', '3214866648', '11788', 'CAMILO', '3213213', 'AUX ', '3145141699', '117811', 'repara lo antes posible', 'DAÑADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contraseña`) VALUES
(17, 'andres', 'programmer.arh@gmail.com', '$2y$10$roYoQCUiaFvojjX5DUsYMeu2p2sOMxZXLDgEtjOCskOtHGmPV1uWm'),
(18, 'fifi ramirez', 'fifi@gmail.com', '$2y$10$gNS8qvP8e2KA4tdiW.QMHObChEKbhJ7CJjbYgjVXaeGwuGwNO5XEm'),
(19, 'andres', 'andres@gmail.com', '$2y$10$C/VSs.sdatfuDxmo/Lby3.G4wUfry4I4cllRYQ00QjPd9lCR0xxvW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Ajustes_Inventario`
--
ALTER TABLE `Ajustes_Inventario`
  ADD PRIMARY KEY (`ID_Ajuste`),
  ADD KEY `Ajustes_Inventario_ibfk_1` (`ID_Stock`);

--
-- Indices de la tabla `Compras`
--
ALTER TABLE `Compras`
  ADD PRIMARY KEY (`ID_Compra`),
  ADD KEY `ID_Proveedor` (`ID_Proveedor`);

--
-- Indices de la tabla `ingreso_activos`
--
ALTER TABLE `ingreso_activos`
  ADD PRIMARY KEY (`ID_Ingreso`),
  ADD KEY `Proveedor_ID` (`Proveedor_ID`);

--
-- Indices de la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`ID_Producto`),
  ADD UNIQUE KEY `Serial` (`Serial`),
  ADD UNIQUE KEY `Placa` (`Placa`),
  ADD KEY `Proveedor_ID` (`Proveedor_ID`);

--
-- Indices de la tabla `Proveedor`
--
ALTER TABLE `Proveedor`
  ADD PRIMARY KEY (`ID_Proveedor`);

--
-- Indices de la tabla `Stock`
--
ALTER TABLE `Stock`
  ADD PRIMARY KEY (`ID_Stock`),
  ADD KEY `Producto_ID` (`Producto_ID`);

--
-- Indices de la tabla `Traslado`
--
ALTER TABLE `Traslado`
  ADD PRIMARY KEY (`ID_Traslado`),
  ADD KEY `ID_Activo` (`ID_Activo`),
  ADD KEY `ID_Stock` (`ID_Stock`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Ajustes_Inventario`
--
ALTER TABLE `Ajustes_Inventario`
  MODIFY `ID_Ajuste` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Compras`
--
ALTER TABLE `Compras`
  MODIFY `ID_Compra` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ingreso_activos`
--
ALTER TABLE `ingreso_activos`
  MODIFY `ID_Ingreso` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `Producto`
--
ALTER TABLE `Producto`
  MODIFY `ID_Producto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `Proveedor`
--
ALTER TABLE `Proveedor`
  MODIFY `ID_Proveedor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `Stock`
--
ALTER TABLE `Stock`
  MODIFY `ID_Stock` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `Traslado`
--
ALTER TABLE `Traslado`
  MODIFY `ID_Traslado` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Ajustes_Inventario`
--
ALTER TABLE `Ajustes_Inventario`
  ADD CONSTRAINT `Ajustes_Inventario_ibfk_1` FOREIGN KEY (`ID_Stock`) REFERENCES `Stock` (`ID_Stock`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Compras`
--
ALTER TABLE `Compras`
  ADD CONSTRAINT `Compras_ibfk_1` FOREIGN KEY (`ID_Proveedor`) REFERENCES `Proveedor` (`ID_Proveedor`) ON DELETE SET NULL;

--
-- Filtros para la tabla `ingreso_activos`
--
ALTER TABLE `ingreso_activos`
  ADD CONSTRAINT `ingreso_activos_ibfk_1` FOREIGN KEY (`Proveedor_ID`) REFERENCES `Proveedor` (`ID_Proveedor`) ON DELETE SET NULL;

--
-- Filtros para la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `Producto_ibfk_1` FOREIGN KEY (`Proveedor_ID`) REFERENCES `Proveedor` (`ID_Proveedor`) ON DELETE SET NULL;

--
-- Filtros para la tabla `Stock`
--
ALTER TABLE `Stock`
  ADD CONSTRAINT `Stock_ibfk_1` FOREIGN KEY (`Producto_ID`) REFERENCES `Producto` (`ID_Producto`) ON DELETE CASCADE;

--
-- Filtros para la tabla `Traslado`
--
ALTER TABLE `Traslado`
  ADD CONSTRAINT `Traslado_ibfk_1` FOREIGN KEY (`ID_Activo`) REFERENCES `Producto` (`ID_Producto`) ON DELETE SET NULL,
  ADD CONSTRAINT `Traslado_ibfk_2` FOREIGN KEY (`ID_Stock`) REFERENCES `Stock` (`ID_Stock`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
