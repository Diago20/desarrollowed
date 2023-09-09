-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2023 a las 06:15:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `cedula` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `referencia` varchar(60) NOT NULL,
  `nPedido` varchar(50) NOT NULL,
  `password1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`nombre`, `apellido`, `correo`, `cedula`, `telefono`, `direccion`, `localidad`, `referencia`, `nPedido`, `password1`) VALUES
('Diego', 'Diaz', 'dia@gmail.com', 123421, 28365452, 'clasgqg12', 'xosjagav', '', '7dh2b2', '123'),
('andres', 'varfas', 'qwisha@2232.cpm', 123421, 12431, 'clasgqg12', 'xosjagav', 'cjdggafa', '23dj', '12345'),
('andres', 'varfas', 'qwisha@2232.cpmas', 123421, 28365452, 'clasgqg12', 'xosjagav', 'cjdggafa', '7dh2b2', '1234'),
('oscar', 'feliz', 'awodi@fgsd.co', 12345, 7634151, 'daskj276', 'fsiyn', 'jsuu271', '1233dss', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
