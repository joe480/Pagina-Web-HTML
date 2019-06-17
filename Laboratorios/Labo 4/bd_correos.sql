-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2019 a las 20:12:33
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_correos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enviados`
--

CREATE TABLE `enviados` (
  `ID` int(11) NOT NULL,
  `Mensaje` varchar(500) COLLATE utf8_bin NOT NULL,
  `Asunto` varchar(100) COLLATE utf8_bin NOT NULL,
  `Destino` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `enviados`
--

INSERT INTO `enviados` (`ID`, `Mensaje`, `Asunto`, `Destino`) VALUES
(7, 'Los informes estan listos', 'Informes', 'admin@admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibidos`
--

CREATE TABLE `recibidos` (
  `ID` int(11) NOT NULL,
  `Mensaje` varchar(500) COLLATE utf8_bin NOT NULL,
  `Asunto` varchar(100) COLLATE utf8_bin NOT NULL,
  `Origen` varchar(50) COLLATE utf8_bin NOT NULL,
  `Estado` varchar(1) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `recibidos`
--

INSERT INTO `recibidos` (`ID`, `Mensaje`, `Asunto`, `Origen`, `Estado`) VALUES
(3, 'Hola como estas?', 'Saludos', 'user@user', 'L'),
(4, 'Necesito los informes', 'Informes', 'admin@admin', 'L'),
(5, 'Ganaste un millon de dolares', 'Spam', 'spam@spam', 'L');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `enviados`
--
ALTER TABLE `enviados`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `recibidos`
--
ALTER TABLE `recibidos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `enviados`
--
ALTER TABLE `enviados`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `recibidos`
--
ALTER TABLE `recibidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
