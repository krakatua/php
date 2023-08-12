-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-04-2023 a las 17:43:48
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_proyectoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE IF NOT EXISTS `citas` (
  `id_cita` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(1234) NOT NULL,
  `Correo` varchar(1234) NOT NULL,
  `Tipo` varchar(1234) NOT NULL,
  `Locacion` varchar(1234) NOT NULL,
  `Comentario` varchar(1234) NOT NULL,
  PRIMARY KEY (`id_cita`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `Nombre`, `Correo`, `Tipo`, `Locacion`, `Comentario`) VALUES
(1, 'Isaac', 'infante@gmail.com', 'XV años', 'Jardín botánico', 'Con el plan básico.'),
(2, 'Juan', 'hernandez@gmail.com', 'Fotografia de retrato', 'Parque mirador Sur', 'Quiero solicitar para el día 28 de abril del 2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id_contacto` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(1234) NOT NULL,
  `Correo` varchar(1234) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sujeto` varchar(1234) NOT NULL,
  `mensaje` varchar(1234) NOT NULL,
  PRIMARY KEY (`id_contacto`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `Correo`, `sujeto`, `mensaje`) VALUES
(8, 'Isaac', 'isaac@gmail.com', 'Isaac Infante', 'Necesito una cotización diferente a la que muestra la plataforma.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
