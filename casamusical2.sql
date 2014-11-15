-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2014 a las 22:03:57
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
  `Nombre` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `Tipo` varchar(255) CHARACTER SET utf16 NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` double NOT NULL,
  `Total` double NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`Id`, `Cedula`, `Codp`, `Nombre`, `Tipo`, `Cantidad`, `Precio`, `Total`) VALUES
(9, '10239201123', '223322', 'Acordeonado', 'Percusion', 1, 230000, 230000),
(10, '2039102939', '330294', 'Guitarra', 'Cuerda', 1, 300000, 300000);

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
('223322', 235000, 22, 'Acordeonado', 'Percusion', 'C:/wamp/www/Sistemas_2/productos/Percusion/223322.png', 'acordeon'),
('330294', 300000, 29, 'Guitarra', 'Cuerda', 'C:/wamp/www/Sistemas_2/productos/Cuerda/330294.png', 'sdd');

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
('1069750096', 'Administrador', 'administrador', '', 'administrador@server.com', '3333333', 'calle x n x - x', 'Fusagasuga', 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec9b2cdaa30b8b51bd6cf43d5c5c8d566d', 'Administrador', '9b2cdaa30b8b51bd6cf43d5c5c8d566d'),
('12345', 'Javier Andres', 'Valencia', 'Muñoz', 'javierandres222@gmail.com', '3134605663', 'Calle 23 # 1 este 19 Santa Barbara', 'Fusagasuga', 'jvalencia', '5c65d57cc7ea960024f887d67d664aabc3ed0774009f8060168c918071b35aed1016e09ff35edf948248d46ef3c91c46eec36acd801a578c3459d093b7edc92008056324f0ed2380a2a307002ef7fc5e', 'Administrador', '08056324f0ed2380a2a307002ef7fc5e'),
('2039102939', 'Mayerly', 'Muñoz', '', 'maye@h.com', '2330293884', 'Calle 2', 'Fusa', 'maye', '9737b2842b9004cd98568490f96eb5beb81206ace9b8bc6a227c9f7042b1474f89bf4753bde92b8a6d28c9f2638239fa38379c60e1801e0fe56fc1bebf9a30f4da8f6b90a7b0999407cdbb21c50bf177', 'Usuario', 'da8f6b90a7b0999407cdbb21c50bf177');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
