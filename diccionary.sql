-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2022 a las 22:42:33
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diccionary`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diccionary`
--

CREATE TABLE `diccionary` (
  `ID` int(11) NOT NULL,
  `english` varchar(50) NOT NULL,
  `español` varchar(50) NOT NULL,
  `русский` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `diccionary`
--

INSERT INTO `diccionary` (`ID`, `english`, `español`, `русский`) VALUES
(1, 'to read', 'leer', 'читать'),
(2, 'to write', 'escribir', 'писать'),
(3, 'to study', 'estudiar', 'учиться'),
(4, 'to teach', 'enseñar', 'обучать'),
(5, 'to know', 'saber', 'знать');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diccionary`
--
ALTER TABLE `diccionary`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diccionary`
--
ALTER TABLE `diccionary`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
