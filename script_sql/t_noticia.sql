-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2016 a las 08:01:58
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `noticia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_noticia`
--

CREATE TABLE IF NOT EXISTS `t_noticia` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Noticia` varchar(200) NOT NULL,
  `Descripcion_Noticia` varchar(2000) NOT NULL,
  `Imagen` varchar(300) NOT NULL,
  `Fecha_Publicacion` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `t_noticia`
--

INSERT INTO `t_noticia` (`Id`, `Nombre_Noticia`, `Descripcion_Noticia`, `Imagen`, `Fecha_Publicacion`) VALUES
(1, 'carlos', ' cadc', 'images/exito.jpg', '2016-11-23 00:02:24'),
(2, 'noticia n2', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eum illum repellendus, vel quos id consequuntur officiis placeat fugiat, consectetur, distinctio laborum deserunt minima incidunt iusto eos quam nobis dolores?', 'images/meadow.jpg', '2016-11-23 00:06:44'),
(3, 'noticia n2', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo eum illum repellendus, vel quos id consequuntur officiis placeat fugiat, consectetur, distinctio laborum deserunt minima incidunt iusto eos quam nobis dolores?', 'images/meadow.jpg', '2016-11-23 00:07:11'),
(4, 'noticia n3', ' caaadad', 'images/meadow.jpg', '2016-11-23 00:08:44'),
(5, 'noticia n3', ' caaadad', 'images/portada-facebook-frases-6.jpg', '2016-11-23 00:10:21'),
(6, 'carlos prueba de noticia', 'lorem pixel', 'images/14358778_1291982184153499_2768412696575096486_n.jpg', '2016-11-23 01:39:13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
