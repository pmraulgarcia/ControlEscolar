-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2014 a las 23:14:25
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `practica00`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_grupo`
--

CREATE TABLE IF NOT EXISTS `alumno_grupo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(5) NOT NULL,
  `id_grupo` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `alumno_grupo`
--

INSERT INTO `alumno_grupo` (`id`, `id_alumno`, `id_grupo`) VALUES
(44, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `orden` int(3) NOT NULL,
  `estatus` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `nombre`, `avatar`, `orden`, `estatus`) VALUES
(1, 'TIC101', '', 1, 1),
(2, 'TIC102', '', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro_materia`
--

CREATE TABLE IF NOT EXISTS `maestro_materia` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(5) NOT NULL,
  `id_materia` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `maestro_materia`
--

INSERT INTO `maestro_materia` (`id`, `id_maestro`, `id_materia`) VALUES
(17, 13, 2),
(20, 10, 1),
(25, 2, 1),
(26, 2, 2),
(34, 8, 1),
(35, 18, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `avatar` varchar(250) NOT NULL,
  `orden` int(3) NOT NULL,
  `estatus` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `avatar`, `orden`, `estatus`) VALUES
(1, 'Español', '', 0, 1),
(2, 'Matemáticas', '', 0, 1),
(3, 'Programación', '', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) NOT NULL,
  `ApellidoPaterno` varchar(250) NOT NULL,
  `ApellidoMaterno` varchar(250) NOT NULL,
  `Telefono` varchar(250) NOT NULL,
  `Calle` varchar(250) NOT NULL,
  `NumeroExterior` int(5) NOT NULL,
  `NumeroInterior` int(5) NOT NULL,
  `Colonia` varchar(250) NOT NULL,
  `Municipio` varchar(250) NOT NULL,
  `Estado` varchar(250) NOT NULL,
  `CP` int(6) NOT NULL,
  `Correo` varchar(250) NOT NULL,
  `Usuario` varchar(250) NOT NULL,
  `Contrasena` varchar(250) NOT NULL,
  `Nivel` varchar(250) NOT NULL,
  `Estatus` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Nombre`, `ApellidoPaterno`, `ApellidoMaterno`, `Telefono`, `Calle`, `NumeroExterior`, `NumeroInterior`, `Colonia`, `Municipio`, `Estado`, `CP`, `Correo`, `Usuario`, `Contrasena`, `Nivel`, `Estatus`) VALUES
(2, 'Arturo', 'Gómez', 'Gutiérrez', '6666', 'Lerdo', 504, 3, 'Centro', 'Toluca', 'Mexico', 50000, 'arturo@gmail.com', 'arturo', '12345', '3', '1'),
(3, 'Raul', 'G', 'M', '', '', 0, 0, '', '', '', 0, '', '', '', '3', '1'),
(4, 'Raul', 'G', 'M', '', '', 0, 0, '', '', '', 0, '', '', '', '1', '1'),
(5, 'Arturo', 'M', 'G', '', '', 0, 0, '', '', '', 0, '', '', '', '2', '1'),
(7, 'Raul', 'G', 'M', '', '', 0, 0, '', '', '', 0, '', '', '', '1', '1'),
(8, '.a.', '.b.', '.c.', '', '', 0, 0, '', '', '', 0, '', '', '', '2', '1'),
(9, '.kk.', '.ll.', '.nnn.', '', '', 0, 0, '', '', '', 0, '', '', '', '2', '1'),
(10, 'Juan', 'A', 'B', '', '', 0, 0, '', '', '', 0, '', '', '', '3', '1'),
(12, '.dfdf.', '.d.', '.f.', '', '', 0, 0, '', '', '', 0, '', '', '', '1', '1'),
(13, '.otro.', '.x.', '.y.', '', '', 0, 0, '', '', '', 0, '', '', '', '2', '1'),
(14, 'dfdf', 'd', 'd', '', '', 0, 0, '', '', '', 0, '', '', '', '1', '1'),
(15, 'jolaaa', 'sdsdsd', 'sdsd', '', '', 0, 0, '', '', '', 0, '', '', '', '1', '1'),
(17, '.sdsd.', '.s.', '.c.', '', '', 0, 0, '', '', '', 0, '', '', '', '1', '1'),
(18, 'reaul', 'jj', 'j', '', '', 0, 0, '', '', '', 0, '', '', '', '2', '1'),
(19, 'qwqwwqw', 'qwwqwqwq', 'wqwqw', '', '', 0, 0, '', '', '', 0, '', '', '', '2', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
