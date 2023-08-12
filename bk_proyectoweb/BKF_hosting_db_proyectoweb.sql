-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql201.epizy.com
-- Tiempo de generación: 15-04-2023 a las 19:23:04
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epiz_34015083_db_proyectoweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `Nombre` varchar(1234) NOT NULL,
  `Correo` varchar(1234) NOT NULL,
  `Tipo` varchar(1234) NOT NULL,
  `Locacion` varchar(1234) NOT NULL,
  `Comentario` varchar(1234) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `Nombre`, `Correo`, `Tipo`, `Locacion`, `Comentario`) VALUES
(1, 'Isaac', 'infante@gmail.com', 'XV años', 'Jardín botánico', 'Con el plan básico.'),
(2, 'Juan', 'hernandez@gmail.com', 'Fotografia de retrato', 'Parque mirador Sur', 'Quiero solicitar para el día 28 de abril del 2023'),
(3, 'Rafiel', 'taverasrafiel@gmail.com', '15 aÃ±os', 'mi casa', 'asd'),
(4, 'Ezequiel', 'ezequielt@gmail.com', '15 aÃ±os', 'mi casa', 'asdad'),
(5, 'wefw', 'taverasrafiel@gmail.com', 'wef', 'wefew', 'ewffwf'),
(6, 'wefw', 'taverasrafiel@gmail.com', 'wef', 'wefew', 'ewffwf'),
(7, 'Pedro', 'pedro12@gmail.com', '15 aÃ±os', 'Parque central de santiago', 'Plan premium'),
(8, 'Isaac', 'isaac.020301@gmail.com', 'Xv aÃ±os', 'Parque central', 'MaÃ±ana'),
(9, 'Ana', 'Ana992@gmail.com', 'Xv anos', 'Parque de esperanza', 'Plan basico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(1234) NOT NULL,
  `Correo` varchar(1234) NOT NULL,
  `sujeto` varchar(1234) NOT NULL,
  `mensaje` varchar(1234) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `Correo`, `sujeto`, `mensaje`) VALUES
(8, 'Isaac', 'isaac@gmail.com', 'Isaac Infante', 'Necesito una cotización diferente a la que muestra la plataforma.'),
(9, 'Rafiel', 'taverasrafiel@gmail.com', '15 aÃ±o', 'ssss'),
(10, 'Rafiel', 'taverasrafiel@gmail.com', 'dsdd', 'sdsd'),
(11, 'Rafiel', 'taverasrafiel@gmail.com', 'dfdsfds', 'sdfsdf'),
(12, 'juan', 'juanp@gmail.co', 'Juan perez', 'asdas'),
(13, 'Rafiel', 'ezequielt@gmail.com', 'Juan perez', 'dsfefrwefwe'),
(14, 'Pedro', 'ezequielt@gmail.com', 'Pedro mendoza', 'bvjh'),
(15, 'Guzman', 'guzman12@gmail.com', 'Guzman fernandez', 'Quiero contactarlos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
