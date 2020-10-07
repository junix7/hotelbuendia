-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-01-2020 a las 19:08:48
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdhotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblhotel`
--

CREATE TABLE `tblhotel` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` varchar(99) NOT NULL,
  `tiempo` int(99) NOT NULL,
  `habitacion` varchar(200) NOT NULL,
  `valor` int(99) NOT NULL,
  `personas` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblhotel`
--

INSERT INTO `tblhotel` (`id`, `nombre`, `apellido`, `dni`, `tiempo`, `habitacion`, `valor`, `personas`) VALUES
(1, 'CARLOS', 'MIRALLES ROBLES', '0954325689', 12, 'sencilla', 10, 1),
(3, 'GONZALO', 'MIRANDA ALONSO', '0956322558', 12, 'sencilla', 10, 2),
(4, 'MIGUEL', 'VALDEZ BOLUFER', '0956325444', 24, 'doble', 25, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblhotel`
--
ALTER TABLE `tblhotel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblhotel`
--
ALTER TABLE `tblhotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
