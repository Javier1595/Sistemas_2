-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2014 a las 23:26:04
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `casamusical2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` varchar(255) NOT NULL,
  `Codp` varchar(255) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `Total` double NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `codp` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `precio` float DEFAULT NULL,
  `cantidad` int(255) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Ruta_img` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`codp`, `precio`, `cantidad`, `nombre`, `tipo`, `Ruta_img`, `Descripcion`) VALUES
('1212029', 230000, 12, 'Teclado', 'Teclado', 'C:/wamp/www/Sistemas_de_informacion/productos/Teclado/1212029.png', 'Teclado YAMAHA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Cedula` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Apellido1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Contrasena` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cedula`, `Nombre`, `Apellido1`, `Apellido2`, `Email`, `Telefono`, `Direccion`, `Ciudad`, `Usuario`, `Contrasena`, `Tipo`, `salt`) VALUES
('10239201123', 'usuario', 'usuario', 'usuario', 'usuario@server.com', '3333333', 'calle x n x-xx', 'Fusagasuga', 'usuario', 'd9e94fd2b4c5522e5bb7996aa4df48a3f6b8f1b0c3e7fadb5fcc724e3ab6d85dc401b0a2789fe56c209b80e86102b218ff74ff8614f315599a180691846138b6bff9dbd31ee092db2fb0c659eaba629e', 'Usuario', 'bff9dbd31ee092db2fb0c659eaba629e'),
('1069750096', 'Administrador', 'administra', '', 'administrador@server.com', '3333333', 'calle x n x - x', 'Fusagasuga', 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec9b2cdaa30b8b51bd6cf43d5c5c8d566d', 'Administrador', '9b2cdaa30b8b51bd6cf43d5c5c8d566d');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
