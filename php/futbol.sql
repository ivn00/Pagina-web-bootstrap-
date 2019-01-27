-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2019 a las 23:26:22
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equips`
--

CREATE TABLE `equips` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `localitat` varchar(30) COLLATE utf8_bin NOT NULL,
  `web` varchar(100) COLLATE utf8_bin NOT NULL,
  `escut` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `equips`
--

INSERT INTO `equips` (`codi`, `nom`, `localitat`, `web`, `escut`) VALUES
(1, 'FC Barcelona', 'Barcelona', 'http://www.fcbarcelona.cat', '/AW/php/img/barça.png'),
(2, 'Real Madrid', 'Madrid', 'https://www.realmadrid.com', '/AW/php/img/madrid.png'),
(3, 'Valencia CF', 'Valencia', 'http://www.valenciacf.com', '/AW/php/img/valencia.png'),
(4, 'RCD Español', 'Barcelona', 'http://www.rcdespañol.com', '/AW/php/img/español.png'),
(5, 'Real Betis Balompié', 'Sevilla', 'http://www.realbetisbalompie.es', '/AW/php/img/betis.png'),
(6, 'Llevant Unió Esportiva', 'Valencia', 'http://www.levante-emv.com', '/AW/php/img/levante.png'),
(7, 'Sevilla FC', 'Sevilla', 'http://www.sevillafc.es', '/AW/php/img/sevilla.png'),
(8, 'Real Sociedad', 'Sant Sebastià(País Basc)', 'http://www.realsociedad.eus', '/AW/php/img/sociedad.png'),
(9, 'Villareal CF', 'Valencia', 'http://www.valenciacf.com', '/AW/php/img/villareal.png'),
(10, 'Atletico de Madrid', 'Madrid', 'http://www.atleticodemadrid.com', '/AW/php/img/atletico.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titols`
--

CREATE TABLE `titols` (
  `codi` int(10) NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `codiequip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `titols`
--

INSERT INTO `titols` (`codi`, `nom`, `codiequip`) VALUES
(1, '30 copas del rey', 1),
(2, '20 copas del rey', 2),
(3, '7 copas del rey', 3),
(4, '4 copas del rey', 4),
(5, '2 copas del rey', 5),
(6, '0 copas del rey', 6),
(7, '5 copas del rey', 7),
(8, '2 copas del rey', 8),
(9, '0 copas del rey', 9),
(10, '10 copas del rey', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equips`
--
ALTER TABLE `equips`
  ADD PRIMARY KEY (`codi`);

--
-- Indices de la tabla `titols`
--
ALTER TABLE `titols`
  ADD PRIMARY KEY (`codi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equips`
--
ALTER TABLE `equips`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `titols`
--
ALTER TABLE `titols`
  MODIFY `codi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
