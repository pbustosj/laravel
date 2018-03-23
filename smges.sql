-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2018 a las 14:52:48
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smges`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE `client` (
  `idclient` decimal(10,0) NOT NULL,
  `runclient` decimal(8,0) NOT NULL,
  `dvclient` char(1) NOT NULL,
  `nameclient` varchar(100) NOT NULL,
  `datecreateclient` date NOT NULL,
  `clienttype_idclienttype` decimal(10,0) NOT NULL,
  `status_idstatus` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clienttype`
--

CREATE TABLE `clienttype` (
  `idclienttype` decimal(10,0) NOT NULL,
  `nameclienttype` varchar(20) NOT NULL,
  `descriptionclienttype` varchar(100) NOT NULL,
  `status_idstatus` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commune`
--

CREATE TABLE `commune` (
  `idcommune` decimal(10,0) NOT NULL,
  `namecommune` varchar(20) NOT NULL,
  `province_idprovince` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `commune`
--

INSERT INTO `commune` (`idcommune`, `namecommune`, `province_idprovince`) VALUES
('1', 'Iquique', '3'),
('2', 'Alto Hospicio', '3'),
('3', 'Pozo Almonte', '4'),
('4', 'Camiña', '4'),
('5', 'Colchane', '4'),
('6', 'Huara', '4'),
('7', 'Pica', '4'),
('8', 'Antofagasta', '5'),
('9', 'Mejillones', '5'),
('10', 'Sierra Gorda', '5'),
('11', 'Taltal', '5'),
('12', 'Calama', '6'),
('13', 'Ollagüe', '6'),
('14', 'San Pedro de Atacama', '6'),
('15', 'Tocopilla', '7'),
('16', 'María Elena', '7'),
('17', 'Copiapó', '8'),
('18', 'Caldera', '8'),
('19', 'Tierra Amarilla', '8'),
('20', 'Chañaral', '9'),
('21', 'Diego de Almagro', '9'),
('22', 'Vallenar', '10'),
('23', 'Alto del Carmen', '10'),
('24', 'Freirina', '10'),
('25', 'Huasco', '10'),
('26', 'La Serena', '11'),
('27', 'Coquimbo', '11'),
('28', 'Andacollo', '11'),
('29', 'La Higuera', '11'),
('30', 'Paihuano', '11'),
('31', 'Vicuña', '11'),
('32', 'Illapel', '12'),
('33', 'Canela', '12'),
('34', 'Los Vilos', '12'),
('35', 'Salamanca', '12'),
('36', 'Ovalle', '13'),
('37', 'Combarbalá', '13'),
('38', 'Monte Patria', '13'),
('39', 'Punitaqui', '13'),
('40', 'Río Hurtado', '13'),
('41', 'Valparaíso', '14'),
('42', 'Casablanca', '14'),
('43', 'Concón', '14'),
('44', 'Juan Fernández', '14'),
('45', 'Puchuncaví', '14'),
('46', 'Quintero', '14'),
('47', 'Viña del Mar', '14'),
('48', 'Isla de Pascua', '15'),
('49', 'Los Andes', '16'),
('50', 'Calle Larga', '16'),
('51', 'Rinconada', '16'),
('52', 'San Esteban', '16'),
('53', 'La Ligua', '17'),
('54', 'Cabildo', '17'),
('55', 'Papudo', '17'),
('56', 'Petorca', '17'),
('57', 'Zapallar', '17'),
('58', 'Quillota', '18'),
('59', 'La Calera', '18'),
('60', 'Hijuelas', '18'),
('61', 'La Cruz', '18'),
('62', 'Nogales', '18'),
('63', 'San Antonio', '19'),
('64', 'Algarrobo', '19'),
('65', 'Cartagena', '19'),
('66', 'El Quisco', '19'),
('67', 'El Tabo', '19'),
('68', 'Santo Domingo', '19'),
('69', 'San Felipe', '20'),
('70', 'Catemu', '20'),
('71', 'Llay Llay', '20'),
('72', 'Panquehue', '20'),
('73', 'Putaendo', '20'),
('74', 'Santa María', '20'),
('75', 'Quilpué', '21'),
('76', 'Limache', '21'),
('77', 'Olmué', '21'),
('78', 'Villa Alemana', '21'),
('79', 'Rancagua', '22'),
('80', 'Codegua', '22'),
('81', 'Coinco', '22'),
('82', 'Coltauco', '22'),
('83', 'Doñihue', '22'),
('84', 'Graneros', '22'),
('85', 'Las Cabras', '22'),
('86', 'Machalí', '22'),
('87', 'Malloa', '22'),
('88', 'Mostazal', '22'),
('89', 'Olivar', '22'),
('90', 'Peumo', '22'),
('91', 'Pichidegua', '22'),
('92', 'Quinta de Tilcoco', '22'),
('93', 'Rengo', '22'),
('94', 'Requínoa', '22'),
('95', 'San Vicente', '22'),
('96', 'Pichilemu', '23'),
('97', 'La Estrella', '23'),
('98', 'Litueche', '23'),
('99', 'Marchihue', '23'),
('100', 'Navidad', '23'),
('101', 'Paredones', '23'),
('102', 'San Fernando', '24'),
('103', 'Chépica', '24'),
('104', 'Chimbarongo', '24'),
('105', 'Lolol', '24'),
('106', 'Nancagua', '24'),
('107', 'Palmilla', '24'),
('108', 'Peralillo', '24'),
('109', 'Placilla', '24'),
('110', 'Pumanque', '24'),
('111', 'Santa Cruz', '24'),
('112', 'Talca', '25'),
('113', 'Constitución', '25'),
('114', 'Curepto', '25'),
('115', 'Empedrado', '25'),
('116', 'Maule', '25'),
('117', 'Pelarco', '25'),
('118', 'Pencahue', '25'),
('119', 'Río Claro', '25'),
('120', 'San Clemente', '25'),
('121', 'San Rafael', '25'),
('122', 'Cauquenes', '26'),
('123', 'Chanco', '26'),
('124', 'Pelluhue', '26'),
('125', 'Curicó', '27'),
('126', 'Hualañé', '27'),
('127', 'Licantén', '27'),
('128', 'Molina', '27'),
('129', 'Rauco', '27'),
('130', 'Romeral', '27'),
('131', 'Sagrada Familia', '27'),
('132', 'Teno', '27'),
('133', 'Vichuquén', '27'),
('134', 'Linares', '28'),
('135', 'Colbún', '28'),
('136', 'Longaví', '28'),
('137', 'Parral', '28'),
('138', 'Retiro', '28'),
('139', 'San Javier', '28'),
('140', 'Villa Alegre', '28'),
('141', 'Yerbas Buenas', '28'),
('142', 'Concepción', '29'),
('143', 'Coronel', '29'),
('144', 'Chiguayante', '29'),
('145', 'Florida', '29'),
('146', 'Hualqui', '29'),
('147', 'Lota', '29'),
('148', 'Penco', '29'),
('149', 'San Pedro de la Paz', '29'),
('150', 'Santa Juana', '29'),
('151', 'Talcahuano', '29'),
('152', 'Tomé', '29'),
('153', 'Hualpén', '29'),
('154', 'Lebu', '30'),
('155', 'Arauco', '30'),
('156', 'Cañete', '30'),
('157', 'Contulmo', '30'),
('158', 'Curanilahue', '30'),
('159', 'Los Álamos', '30'),
('160', 'Tirúa', '30'),
('161', 'Los Ángeles', '31'),
('162', 'Antuco', '31'),
('163', 'Cabrero', '31'),
('164', 'Laja', '31'),
('165', 'Mulchén', '31'),
('166', 'Nacimiento', '31'),
('167', 'Negrete', '31'),
('168', 'Quilaco', '31'),
('169', 'Quilleco', '31'),
('170', 'San Rosendo', '31'),
('171', 'Santa Bárbara', '31'),
('172', 'Tucapel', '31'),
('173', 'Yumbel', '31'),
('174', 'Alto Biobío', '31'),
('175', 'Chillán', '32'),
('176', 'Bulnes', '32'),
('177', 'Cobquecura', '32'),
('178', 'Coelemu', '32'),
('179', 'Coihueco', '32'),
('180', 'Chillán Viejo', '32'),
('181', 'El Carmen', '32'),
('182', 'Ninhue', '32'),
('183', 'Ñiquén', '32'),
('184', 'Pemuco', '32'),
('185', 'Pinto', '32'),
('186', 'Portezuelo', '32'),
('187', 'Quillón', '32'),
('188', 'Quirihue', '32'),
('189', 'Ránquil', '32'),
('190', 'San Carlos', '32'),
('191', 'San Fabián', '32'),
('192', 'San Ignacio', '32'),
('193', 'San Nicolás', '32'),
('194', 'Treguaco', '32'),
('195', 'Yungay', '32'),
('196', 'Temuco', '33'),
('197', 'Carahue', '33'),
('198', 'Cunco', '33'),
('199', 'Curarrehue', '33'),
('200', 'Freire', '33'),
('201', 'Galvarino', '33'),
('202', 'Gorbea', '33'),
('203', 'Lautaro', '33'),
('204', 'Loncoche', '33'),
('205', 'Melipeuco', '33'),
('206', 'Nueva Imperial', '33'),
('207', 'Padre las Casas', '33'),
('208', 'Perquenco', '33'),
('209', 'Pitrufquén', '33'),
('210', 'Pucón', '33'),
('211', 'Saavedra', '33'),
('212', 'Teodoro Schmidt', '33'),
('213', 'Toltén', '33'),
('214', 'Vilcún', '33'),
('215', 'Villarrica', '33'),
('216', 'Cholchol', '33'),
('217', 'Angol', '34'),
('218', 'Collipulli', '34'),
('219', 'Curacautín', '34'),
('220', 'Ercilla', '34'),
('221', 'Lonquimay', '34'),
('222', 'Los Sauces', '34'),
('223', 'Lumaco', '34'),
('224', 'Purén', '34'),
('225', 'Renaico', '34'),
('226', 'Traiguén', '34'),
('227', 'Victoria', '34'),
('228', 'Puerto Montt', '37'),
('229', 'Calbuco', '37'),
('230', 'Cochamó', '37'),
('231', 'Fresia', '37'),
('232', 'Frutillar', '37'),
('233', 'Los Muermos', '37'),
('234', 'Llanquihue', '37'),
('235', 'Maullín', '37'),
('236', 'Puerto Varas', '37'),
('237', 'Castro', '38'),
('238', 'Ancud', '38'),
('239', 'Chonchi', '38'),
('240', 'Curaco de Vélez', '38'),
('241', 'Dalcahue', '38'),
('242', 'Puqueldón', '38'),
('243', 'Queilén', '38'),
('244', 'Quellón', '38'),
('245', 'Quemchi', '38'),
('246', 'Quinchao', '38'),
('247', 'Osorno', '39'),
('248', 'Puerto Octay', '39'),
('249', 'Purranque', '39'),
('250', 'Puyehue', '39'),
('251', 'Río Negro', '39'),
('252', 'San Juan de la Costa', '39'),
('253', 'San Pablo', '39'),
('254', 'Chaitén', '40'),
('255', 'Futaleufú', '40'),
('256', 'Hualaihué', '40'),
('257', 'Palena', '40'),
('258', 'Coyhaique', '41'),
('259', 'Lago Verde', '41'),
('260', 'Aysén', '42'),
('261', 'Cisnes', '42'),
('262', 'Guaitecas', '42'),
('263', 'Cochrane', '43'),
('264', 'O\'Higgins', '43'),
('265', 'Tortel', '43'),
('266', 'Chile Chico', '44'),
('267', 'Río Ibáñez', '44'),
('268', 'Punta Arenas', '45'),
('269', 'Laguna Blanca', '45'),
('270', 'Río Verde', '45'),
('271', 'San Gregorio', '45'),
('272', 'Cabo de Hornos', '46'),
('273', 'Antártica', '46'),
('274', 'Porvenir', '47'),
('275', 'Primavera', '47'),
('276', 'Timaukel', '47'),
('277', 'Natales', '48'),
('278', 'Torres del Paine', '48'),
('279', 'Santiago', '49'),
('280', 'Cerrillos', '49'),
('281', 'Cerro Navia', '49'),
('282', 'Conchalí', '49'),
('283', 'El Bosque', '49'),
('284', 'Estación Central', '49'),
('285', 'Huechuraba', '49'),
('286', 'Independencia', '49'),
('287', 'La Cisterna', '49'),
('288', 'La Florida', '49'),
('289', 'La Granja', '49'),
('290', 'La Pintana', '49'),
('291', 'La Reina', '49'),
('292', 'Las Condes', '49'),
('293', 'Lo Barnechea', '49'),
('294', 'Lo Espejo', '49'),
('295', 'Lo Prado', '49'),
('296', 'Macul', '49'),
('297', 'Maipú', '49'),
('298', 'Ñuñoa', '49'),
('299', 'Pedro Aguirre Cerda', '49'),
('300', 'Peñalolén', '49'),
('301', 'Providencia', '49'),
('302', 'Pudahuel', '49'),
('303', 'Quilicura', '49'),
('304', 'Quinta Normal', '49'),
('305', 'Recoleta', '49'),
('306', 'Renca', '49'),
('307', 'San Joaquín', '49'),
('308', 'San Miguel', '49'),
('309', 'San Ramón', '49'),
('310', 'Vitacura', '49'),
('311', 'Puente Alto', '50'),
('312', 'Pirque', '50'),
('313', 'San José de Maipo', '50'),
('314', 'Colina', '51'),
('315', 'Lampa', '51'),
('316', 'Tiltil', '51'),
('317', 'San Bernardo', '52'),
('318', 'Buin', '52'),
('319', 'Calera de Tango', '52'),
('320', 'Paine', '52'),
('321', 'Melipilla', '53'),
('322', 'Alhué', '53'),
('323', 'Curacaví', '53'),
('324', 'María Pinto', '53'),
('325', 'San Pedro', '53'),
('326', 'Talagante', '54'),
('327', 'El Monte', '54'),
('328', 'Isla de Maipo', '54'),
('329', 'Padre Hurtado', '54'),
('330', 'Peñaflor', '54'),
('331', 'Valdivia', '35'),
('332', 'Corral', '35'),
('333', 'Lanco', '35'),
('334', 'Los Lagos', '35'),
('335', 'Máfil', '35'),
('336', 'Mariquina', '35'),
('337', 'Paillaco', '35'),
('338', 'Panguipulli', '35'),
('339', 'La Unión', '36'),
('340', 'Futrono', '36'),
('341', 'Lago Ranco', '36'),
('342', 'Río Bueno', '36'),
('343', 'Arica', '1'),
('344', 'Camarones', '1'),
('345', 'Putre', '2'),
('346', 'General Lagos', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuration`
--

CREATE TABLE `configuration` (
  `idconfiguration` decimal(10,0) NOT NULL,
  `keyconfiguration` varchar(40) NOT NULL,
  `valueconfiguration` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `idcontact` decimal(10,0) NOT NULL,
  `nameContact` varchar(200) DEFAULT NULL,
  `phoneContact` int(12) DEFAULT NULL,
  `mailcontact` varchar(100) NOT NULL,
  `subjectcontact` varchar(80) NOT NULL,
  `messagecontact` varchar(200) NOT NULL,
  `senddatecontact` datetime NOT NULL,
  `mailuserresponse` varchar(100) NOT NULL,
  `senddateresponse` datetime DEFAULT NULL,
  `status_idstatus` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`idcontact`, `nameContact`, `phoneContact`, `mailcontact`, `subjectcontact`, `messagecontact`, `senddatecontact`, `mailuserresponse`, `senddateresponse`, `status_idstatus`) VALUES
('1', NULL, NULL, 'asdas@asdas.cl', 'qwe', 'qweqw', '2018-03-22 00:00:00', 'desawebchi@gmail.com', NULL, '0'),
('2', NULL, NULL, 'test@test.cl', 'asdasdasd', '\"longer\" than the format string like in this case: Carbon::createFromFormat(\'Y-m-d H:i\', \'2017-01-02 00:27:00\')', '2018-03-22 00:00:00', 'desawebchi@gmail.com', NULL, '0'),
('3', NULL, NULL, 'qweqwe@asdasdac.cl', 'asdasdas', 'Carbon will throw:\r\n\r\nInvalidArgumentException in Carbon.php line 425:\r\nData missing', '2018-03-22 00:00:00', 'desawebchi@gmail.com', NULL, '0'),
('4', NULL, NULL, 'asdas@asdas.cl', 'asdasdasd', 'asdasdasdas', '2018-03-22 13:27:07', 'desawebchi@gmail.com', NULL, '0'),
('5', NULL, NULL, 'bustos.jorquera.pedro@gmail.com', 'query', 'I have a dude about your services. i\'m american boy and i need your help yo get mi ID in chile.\r\n\r\nI stay wait for your answer.\r\n\r\nThanks!', '2018-03-22 13:29:57', 'desawebchi@gmail.com', NULL, '0'),
('6', 'tsasdasd', 2147483647, 'asdas@asdas.cl', 'adasda', 'asdasdasdasd', '2018-03-22 13:41:58', 'desawebchi@gmail.com', NULL, '0'),
('7', 'pedro bustos', 985207643, 'bustos.jorquera.pedro@gmail.com', 'asdasdasdsadasd', 'asdasdasjlasfhalsdfha\r\nasdassdfsdfsdfsdfsdf', '2018-03-22 13:46:30', 'desawebchi@gmail.com', NULL, '0'),
('8', 'asd', 2123131, 'asdas@asdas.cl', 'asdasdasd', 'adasdas', '2018-03-22 13:49:52', 'desawebchi@gmail.com', NULL, '0'),
('9', 'asdasdas', 2123123, 'asdas@asdas.cl', 'asdasd', 'asd', '2018-03-22 13:51:44', 'desawebchi@gmail.com', NULL, '0'),
('10', 'asdasdas', 2123123, 'asdas@asdas.cl', 'asdasd', 'asd', '2018-03-22 13:59:51', 'desawebchi@gmail.com', NULL, '0'),
('11', 'asdasj', 123123123, 'asdas@asdas.cl', '123', 'qweqqweqwe\r\n\r\n\r\n\r\n\r\natt-adad', '2018-03-22 14:00:42', 'desawebchi@gmail.com', NULL, '0'),
('12', 'askljh', 2147483647, 'asdkjashdlasdhaslkdjh@asdasd.cl', 'asdñasdasd', 'asdasdasfdfasdfqwerqrwe', '2018-03-23 13:29:08', 'desawebchi@gmail.com', NULL, '0'),
('13', 'askljh', 2147483647, 'asdkjashdlasdhaslkdjh@asdasd.cl', 'asdñasdasd', 'asdasdasfdfasdfqwerqrwe', '2018-03-23 13:29:09', 'desawebchi@gmail.com', NULL, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item`
--

CREATE TABLE `item` (
  `iditem` decimal(10,0) NOT NULL,
  `nameitem` varchar(40) DEFAULT NULL,
  `descriptionitem` varchar(100) NOT NULL,
  `status_idstatus` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modules`
--

CREATE TABLE `modules` (
  `idmodule` decimal(10,0) NOT NULL,
  `namemodule` varchar(40) NOT NULL,
  `descriptionmodule` varchar(100) NOT NULL,
  `status_idstatus` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `idprofile` decimal(10,0) NOT NULL,
  `nameprofile` varchar(20) NOT NULL,
  `descriptionprofile` varchar(100) NOT NULL,
  `status_idstatus` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`idprofile`, `nameprofile`, `descriptionprofile`, `status_idstatus`) VALUES
('1', 'admin', 'Administrador de sistema', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profilemodule`
--

CREATE TABLE `profilemodule` (
  `idprofilemodule` decimal(10,0) NOT NULL,
  `modules_idmodule` decimal(10,0) NOT NULL,
  `profile_idprofile` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `province`
--

CREATE TABLE `province` (
  `idprovince` decimal(10,0) NOT NULL,
  `nameprovince` varchar(23) NOT NULL,
  `region_idregion` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `province`
--

INSERT INTO `province` (`idprovince`, `nameprovince`, `region_idregion`) VALUES
('1', 'Arica', '15'),
('2', 'Parinacota', '15'),
('3', 'Iquique', '1'),
('4', 'Tamarugal', '1'),
('5', 'Antofagasta', '2'),
('6', 'El Loa', '2'),
('7', 'Tocopilla', '2'),
('8', 'Copiapó', '3'),
('9', 'Chañaral', '3'),
('10', 'Huasco', '3'),
('11', 'Elqui', '4'),
('12', 'Choapa', '4'),
('13', 'Limarí', '4'),
('14', 'Valparaíso', '5'),
('15', 'Isla de Pascua', '5'),
('16', 'Los Andes', '5'),
('17', 'Petorca', '5'),
('18', 'Quillota', '5'),
('19', 'San Antonio', '5'),
('20', 'San Felipe de Aconcagua', '5'),
('21', 'Marga Marga', '5'),
('22', 'Cachapoal', '6'),
('23', 'Cardenal Caro', '6'),
('24', 'Colchagua', '6'),
('25', 'Talca', '7'),
('26', 'Cauquenes', '7'),
('27', 'Curicó', '7'),
('28', 'Linares', '7'),
('29', 'Concepción', '8'),
('30', 'Arauco', '8'),
('31', 'Biobío', '8'),
('32', 'Ñuble', '8'),
('33', 'Cautín', '9'),
('34', 'Malleco', '9'),
('35', 'Valdivia', '14'),
('36', 'Ranco', '14'),
('37', 'Llanquihue', '10'),
('38', 'Chiloé', '10'),
('39', 'Osorno', '10'),
('40', 'Palena', '10'),
('41', 'Coihaique', '11'),
('42', 'Aisén', '11'),
('43', 'Capitán Prat', '11'),
('44', 'General Carrera', '11'),
('45', 'Magallanes', '12'),
('46', 'Antártica Chilena', '12'),
('47', 'Tierra del Fuego', '12'),
('48', 'Última Esperanza', '12'),
('49', 'Santiago', '13'),
('50', 'Cordillera', '13'),
('51', 'Chacabuco', '13'),
('52', 'Maipo', '13'),
('53', 'Melipilla', '13'),
('54', 'Talagante', '13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `idregion` decimal(10,0) NOT NULL,
  `nameregion` varchar(100) NOT NULL,
  `iso_3166_2_cl` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`idregion`, `nameregion`, `iso_3166_2_cl`) VALUES
('1', 'Tarapacá', 'CL-TA'),
('2', 'Antofagasta', 'CL-AN'),
('3', 'Atacama', 'CL-AT'),
('4', 'Coquimbo', 'CL-CO'),
('5', 'Valparaíso', 'CL-VS'),
('6', 'Región del Libertador Gral. Bernardo O’Higgins', 'CL-LI'),
('7', 'Región del Maule', 'CL-ML'),
('8', 'Región del Biobío', 'CL-BI'),
('9', 'Región de la Araucanía', 'CL-AR'),
('10', 'Región de Los Lagos', 'CL-LL'),
('11', 'Región Aisén del Gral. Carlos Ibáñez del Campo', 'CL-AI'),
('12', 'Región de Magallanes y de la Antártica Chilena', 'CL-MA'),
('13', 'Región Metropolitana de Santiago', 'CL-RM'),
('14', 'Región de Los Ríos', 'CL-LR'),
('15', 'Arica y Parinacota', 'CL-AP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `request`
--

CREATE TABLE `request` (
  `idrequest` decimal(10,0) NOT NULL,
  `client_idclient` decimal(10,0) NOT NULL,
  `daterequest` date NOT NULL,
  `dateresponse` date NOT NULL,
  `status_idstatus` decimal(10,0) NOT NULL,
  `iduserplanner` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requestdetails`
--

CREATE TABLE `requestdetails` (
  `idrequestdetail` decimal(10,0) NOT NULL,
  `subitem_idsubitem` decimal(10,0) NOT NULL,
  `request_idrequest` decimal(10,0) NOT NULL,
  `daterequestdetail` date NOT NULL,
  `dateresponsedetail` date NOT NULL,
  `statusrequestdetail` char(1) NOT NULL,
  `descriptionrequestdetail` varchar(200) DEFAULT NULL,
  `pathdocumentrequestdetail` varchar(200) DEFAULT NULL,
  `iduserincharge` decimal(10,0) NOT NULL,
  `status_idstatus` decimal(10,0) NOT NULL,
  `commune_idcommune` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `idstatus` decimal(10,0) NOT NULL,
  `namestatus` varchar(40) NOT NULL,
  `descriptionstatus` varchar(200) NOT NULL,
  `tipeofstatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`idstatus`, `namestatus`, `descriptionstatus`, `tipeofstatus`) VALUES
('0', 'inactivo', 'Define estado de usuario inactivo', 'user,profile'),
('1', 'activo', 'Define estado activo para usuarios', 'user,profile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subitem`
--

CREATE TABLE `subitem` (
  `idsubitem` decimal(10,0) NOT NULL,
  `namesubitem` varchar(40) NOT NULL,
  `descriptionsubitem` varchar(200) NOT NULL,
  `item_iditem` decimal(10,0) NOT NULL,
  `status_idstatus` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `iduser` decimal(10,0) NOT NULL,
  `runuser` decimal(8,0) NOT NULL,
  `dvuser` char(1) NOT NULL,
  `firstnameuser` varchar(40) NOT NULL,
  `lastnameuser` varchar(40) NOT NULL,
  `mailuser` varchar(100) NOT NULL,
  `passuser` varchar(40) NOT NULL,
  `profile_idprofile` decimal(10,0) NOT NULL,
  `status_idstatus` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`iduser`, `runuser`, `dvuser`, `firstnameuser`, `lastnameuser`, `mailuser`, `passuser`, `profile_idprofile`, `status_idstatus`) VALUES
('1', '18702516', '8', 'Pedro Fabián', 'Bustos Jorquera', 'pbustosj@sanmartingestorias.cl', '123', '1', '1'),
('2', '17372877', '8', 'Venecia Guisella', 'Barahona Concha', 'vbarahona@sanmartingestorias.cl', '123', '1', '1'),
('3', '9970750', 'K', 'Test', '123', 'asdasdasd@asdasd.cl', '123', '1', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`),
  ADD KEY `client_clienttype_fk` (`clienttype_idclienttype`),
  ADD KEY `client_status_fk` (`status_idstatus`);

--
-- Indices de la tabla `clienttype`
--
ALTER TABLE `clienttype`
  ADD PRIMARY KEY (`idclienttype`),
  ADD KEY `clienttype_status_fk` (`status_idstatus`);

--
-- Indices de la tabla `commune`
--
ALTER TABLE `commune`
  ADD PRIMARY KEY (`idcommune`),
  ADD KEY `commune_province_fk` (`province_idprovince`);

--
-- Indices de la tabla `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`idconfiguration`);

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idcontact`),
  ADD KEY `contact_status_fk` (`status_idstatus`);

--
-- Indices de la tabla `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`iditem`),
  ADD KEY `item_status_fk` (`status_idstatus`);

--
-- Indices de la tabla `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`idmodule`),
  ADD KEY `modules_status_fk` (`status_idstatus`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`idprofile`),
  ADD KEY `profile_status_fk` (`status_idstatus`);

--
-- Indices de la tabla `profilemodule`
--
ALTER TABLE `profilemodule`
  ADD PRIMARY KEY (`idprofilemodule`),
  ADD KEY `profilemodule_modules_fk` (`modules_idmodule`),
  ADD KEY `profilemodule_profile_fk` (`profile_idprofile`);

--
-- Indices de la tabla `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`idprovince`),
  ADD KEY `province_region_fk` (`region_idregion`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`idregion`);

--
-- Indices de la tabla `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`idrequest`),
  ADD KEY `request_client_fk` (`client_idclient`),
  ADD KEY `request_status_fk` (`status_idstatus`),
  ADD KEY `request_user_fk` (`iduserplanner`);

--
-- Indices de la tabla `requestdetails`
--
ALTER TABLE `requestdetails`
  ADD PRIMARY KEY (`idrequestdetail`),
  ADD KEY `requestdetails_commune_fk` (`commune_idcommune`),
  ADD KEY `requestdetails_request_fk` (`request_idrequest`),
  ADD KEY `requestdetails_status_fk` (`status_idstatus`),
  ADD KEY `requestdetails_subitem_fk` (`subitem_idsubitem`),
  ADD KEY `requestdetails_user_fk` (`iduserincharge`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indices de la tabla `subitem`
--
ALTER TABLE `subitem`
  ADD PRIMARY KEY (`idsubitem`),
  ADD KEY `subitem_item_fk` (`item_iditem`),
  ADD KEY `subitem_status_fk` (`status_idstatus`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `user_profile_fk` (`profile_idprofile`),
  ADD KEY `user_status_fk` (`status_idstatus`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_clienttype_fk` FOREIGN KEY (`clienttype_idclienttype`) REFERENCES `clienttype` (`idclienttype`),
  ADD CONSTRAINT `client_status_fk` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`);

--
-- Filtros para la tabla `clienttype`
--
ALTER TABLE `clienttype`
  ADD CONSTRAINT `clienttype_status_fk` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`);

--
-- Filtros para la tabla `commune`
--
ALTER TABLE `commune`
  ADD CONSTRAINT `commune_province_fk` FOREIGN KEY (`province_idprovince`) REFERENCES `province` (`idprovince`);

--
-- Filtros para la tabla `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_status_fk` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`);

--
-- Filtros para la tabla `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_status_fk` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`);

--
-- Filtros para la tabla `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_status_fk` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`);

--
-- Filtros para la tabla `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_status_fk` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`);

--
-- Filtros para la tabla `profilemodule`
--
ALTER TABLE `profilemodule`
  ADD CONSTRAINT `profilemodule_modules_fk` FOREIGN KEY (`modules_idmodule`) REFERENCES `modules` (`idmodule`),
  ADD CONSTRAINT `profilemodule_profile_fk` FOREIGN KEY (`profile_idprofile`) REFERENCES `profile` (`idprofile`);

--
-- Filtros para la tabla `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `province_region_fk` FOREIGN KEY (`region_idregion`) REFERENCES `region` (`idregion`);

--
-- Filtros para la tabla `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_client_fk` FOREIGN KEY (`client_idclient`) REFERENCES `client` (`idclient`),
  ADD CONSTRAINT `request_status_fk` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`),
  ADD CONSTRAINT `request_user_fk` FOREIGN KEY (`iduserplanner`) REFERENCES `user` (`iduser`);

--
-- Filtros para la tabla `requestdetails`
--
ALTER TABLE `requestdetails`
  ADD CONSTRAINT `requestdetails_commune_fk` FOREIGN KEY (`commune_idcommune`) REFERENCES `commune` (`idcommune`),
  ADD CONSTRAINT `requestdetails_request_fk` FOREIGN KEY (`request_idrequest`) REFERENCES `request` (`idrequest`),
  ADD CONSTRAINT `requestdetails_status_fk` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`),
  ADD CONSTRAINT `requestdetails_subitem_fk` FOREIGN KEY (`subitem_idsubitem`) REFERENCES `subitem` (`idsubitem`),
  ADD CONSTRAINT `requestdetails_user_fk` FOREIGN KEY (`iduserincharge`) REFERENCES `user` (`iduser`);

--
-- Filtros para la tabla `subitem`
--
ALTER TABLE `subitem`
  ADD CONSTRAINT `subitem_item_fk` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`),
  ADD CONSTRAINT `subitem_status_fk` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_profile_fk` FOREIGN KEY (`profile_idprofile`) REFERENCES `profile` (`idprofile`),
  ADD CONSTRAINT `user_status_fk` FOREIGN KEY (`status_idstatus`) REFERENCES `status` (`idstatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
