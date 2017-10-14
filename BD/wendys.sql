-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2016 a las 03:49:59
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wendys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `combo` varchar(25) DEFAULT NULL,
  `ordenham` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`combo`, `ordenham`) VALUES
('6.75', 0),
('7.25', 0),
('Baconator 6.25', 0),
('Baconator $6.25', 0),
('Baconator $6.25', 1),
('Baconator $6.25', 1),
('Baconator $6.25', 1),
('Big Bacon $6.75', 1),
('Baconator $6.25', 1),
('Doble $7.25', 1),
('Melt $6.25', 1),
('Doble $7.25', 1),
('Melt $6.25', 1),
('Baconator $6.25', 1),
('Big Bacon $6.75', 1),
('Big Bacon $6.75', 1),
('Baconator $6.25', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagoensalada`
--

CREATE TABLE `pagoensalada` (
  `ensalada` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagoensalada`
--

INSERT INTO `pagoensalada` (`ensalada`) VALUES
('Apple Pecan $6.25'),
('Apple Pecan $6.25'),
('Caesar $6.25'),
('Caesar $6.25'),
('Caesar $6.25'),
('Baja $7.25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre_completo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `ordensalad` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre_completo`, `direccion`, `telefono`, `usuario`, `password`, `correo`, `ordensalad`) VALUES
('', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', 0),
('maira', 'bb', '7777777', 'maira', '580c95cfe378dae5a19d6832849301a4', 'maira', 0),
('Manuel', 'San Miguel', '22222222', 'manuel', 'c20ad4d76fe97759aa27a0c99bff6710', 'manuel@gmail.com', 0),
('Orlando', 'San Miguel', '29999323', 'orlando', 'c20ad4d76fe97759aa27a0c99bff6710', 'orlando.toyos.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
