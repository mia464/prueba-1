-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2025 a las 02:11:18
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
-- Base de datos: `cargo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `edad` varchar(2) NOT NULL,
  `dpi` varchar(12) NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nombre`, `apellido`, `edad`, `dpi`, `correo`) VALUES
('lenovo', 'Berganza', '18', '09376582214', 'lenovob@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `nombre` text NOT NULL,
  `departamento` text NOT NULL,
  `municipio` text NOT NULL,
  `calle` text NOT NULL,
  `tel` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`nombre`, `departamento`, `municipio`, `calle`, `tel`) VALUES
('Francisco', 'izabal', 'morales', '12. aun costado del banco Banrural', '340972877');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

CREATE TABLE `facturacion` (
  `factura` text NOT NULL,
  `serie` text NOT NULL,
  `producto` text NOT NULL,
  `total` varchar(6) NOT NULL,
  `peso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `facturacion`
--

INSERT INTO `facturacion` (`factura`, `serie`, `producto`, `total`, `peso`) VALUES
('mk234', '45j762x8', 'cremas hidratantes', '800', '10libras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `nombre` text NOT NULL,
  `direccion` text NOT NULL,
  `cantidad` text NOT NULL,
  `peso` text NOT NULL,
  `tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`nombre`, `direccion`, `cantidad`, `peso`, `tipo`) VALUES
('Miguel', 'Moyuta, Jutiapa', '4 cjas', '10libras', ' fragil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `factura` text NOT NULL,
  `serie` text NOT NULL,
  `paquete` text NOT NULL,
  `entrega` text NOT NULL,
  `deposito` text NOT NULL,
  `total` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`factura`, `serie`, `paquete`, `entrega`, `deposito`, `total`) VALUES
('mk234', '45j762x8', 'fragil', '', '', '800'),
('mk234', '45j762x8', 'fragil', 'si', 'no', '800');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
