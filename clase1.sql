-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-09-2020 a las 23:46:31
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clase1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cod` char(10) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `tipo_cliente` int(1) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `codZona` char(3) NOT NULL,
  `cantidadPedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cod`, `nombre`, `direccion`, `tipo_cliente`, `fechaRegistro`, `codZona`, `cantidadPedido`) VALUES
('0001', 'Soultrooper', 'DOOM', 2, '2020-11-11', '001', 1),
('0002', 'Nordic', 'Carrera Blanca', 1, '2011-11-11', '002', 3),
('0003', 'Doom Slayer', 'The Hell or Mars', 3, '1993-12-10', '003', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `cod` char(3) NOT NULL,
  `des` varchar(40) NOT NULL,
  `ubi` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`cod`, `des`, `ubi`) VALUES
('002', 'Skyrim', '2'),
('003', 'DOOM', '3'),
('001', 'Budapest', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
