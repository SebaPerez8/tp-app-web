-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2019 a las 20:56:11
-- Versión del servidor: 5.5.39
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inmobiliaria`
--
CREATE DATABASE IF NOT EXISTS `inmobiliaria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `inmobiliaria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE IF NOT EXISTS `barrios` (
  `barrio` int(8) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `barrios`
--

INSERT INTO `barrios` (`barrio`, `nombre`) VALUES
(101, 'CENTRO'),
(102, 'OBSERVATORIO'),
(103, 'JARDIN'),
(104, 'ALTO ALBERDI'),
(105, 'NUEVA CORDOBA'),
(106, 'IES21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE IF NOT EXISTS `inmuebles` (
  `inmueble` int(8) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `situacion` varchar(1) NOT NULL,
  `propietario` int(8) NOT NULL,
  `barrio` int(8) NOT NULL,
  `importe` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`inmueble`, `domicilio`, `tipo`, `situacion`, `propietario`, `barrio`, `importe`) VALUES
(11, 'LAPRIDA 490', 'C', 'V', 1005, 101, '5000000.00'),
(12, 'CHILE 1480', 'C', 'V', 1005, 101, '9300000.00'),
(13, 'SOL DE MAYO 2489', 'C', 'A', 1004, 102, '65000.00'),
(14, 'SARMIENTO 3604', 'C', 'A', 1004, 102, '47000.00'),
(15, 'INDEPENDENCIA 1181', 'D', 'V', 1003, 103, '4800000.00'),
(16, 'JUJUY 74', 'D', 'V', 1003, 103, '6300000.00'),
(17, 'CHACO 389', 'D', 'A', 1002, 104, '35000.00'),
(18, 'COLON 4075', 'D', 'A', 1002, 104, '71000.00'),
(19, 'CHUBUT 508', 'L', 'V', 1001, 105, '3900000.00'),
(20, 'RESISTENCIA 5021', 'L', 'V', 1001, 105, '7500000.00'),
(21, 'OLMOS 691', 'L', 'A', 1005, 101, '14000.00'),
(22, 'DEAN FUNES 2705', 'L', 'A', 1005, 101, '12000.00'),
(23, 'SANTIAGO DEL ESTERO 914', 'C', 'V', 1004, 102, '8400000.00'),
(24, 'CASTRO BARROS 691', 'C', 'A', 1004, 102, '8900.00'),
(25, 'CASTRO BARROS 1745', 'D', 'V', 1003, 103, '6100000.00'),
(26, 'CASEROS 3452', 'D', 'A', 1003, 103, '5750.00'),
(27, 'FLORIDA 2489', 'L', 'V', 1002, 104, '8100000.00'),
(28, 'PUEYRREDON 5001', 'L', 'A', 1002, 104, '24000.00'),
(29, 'SAN MARTIN 4501', 'C', 'V', 1001, 105, '1230000.00'),
(30, 'TINOGASTA 2697', 'C', 'A', 1001, 105, '7450.00'),
(31, 'GENERAL PAZ', 'C', 'V', 1001, 101, '2800000.00'),
(32, 'ROSALES 1141', 'D', 'V', 1002, 102, '1500000.00'),
(33, 'ROSALES 3698', 'L', 'V', 1003, 103, '6470000.00'),
(34, 'AGUSTIN GARZON 1647', 'C', 'A', 1004, 104, '58500.00'),
(35, 'JAVIER LUQUE 272', 'D', 'A', 1005, 105, '62100.00'),
(36, 'PADRE LOZANO 3399', 'L', 'A', 1001, 101, '13250.00'),
(37, 'RONDEAU 111', 'C', 'V', 1006, 106, '9100000.00'),
(38, 'RONDEAU 222', 'D', 'V', 1006, 106, '9200000.00'),
(39, 'RONDEAU 333', 'L', 'V', 1006, 106, '9300000.00'),
(40, 'RONDEAU 444', 'C', 'A', 1006, 106, '9100.00'),
(41, 'RONDEAU 555', 'D', 'A', 1006, 106, '9200.00'),
(42, 'RONDEAU 666', 'L', 'A', 1006, 106, '9300.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE IF NOT EXISTS `propietarios` (
  `propietario` int(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`propietario`, `nombre`, `telefono`) VALUES
(1001, 'PEREZ CARLOS', '4880101'),
(1002, 'LOCICERO OSCAR', '4336602'),
(1003, 'PAEZ SILVIA', '4557703'),
(1004, 'FERNANDEZ CAROLINA', '4919104'),
(1005, 'BENITEZ PEDRO', '4718205'),
(1006, 'CARRIZO MIGUEL', '4010203');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrios`
--
ALTER TABLE `barrios`
 ADD PRIMARY KEY (`barrio`);

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
 ADD PRIMARY KEY (`inmueble`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
 ADD PRIMARY KEY (`propietario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
