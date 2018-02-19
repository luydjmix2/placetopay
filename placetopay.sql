-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-02-2018 a las 18:01:19
-- Versión del servidor: 5.6.38
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `placetopay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritoCompra`
--

CREATE TABLE `carritoCompra` (
  `idCarrito` int(10) NOT NULL,
  `idCliente` int(10) NOT NULL,
  `tipoCUenta` varchar(60) NOT NULL,
  `bancoCliente` int(10) NOT NULL,
  `valorPagoTotal` int(20) NOT NULL,
  `ipclinte` varchar(60) NOT NULL,
  `navegadorCliente` varchar(160) NOT NULL,
  `fechaHora` date NOT NULL,
  `urlDesvio` varchar(140) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carritoCompra`
--

INSERT INTO `carritoCompra` (`idCarrito`, `idCliente`, `tipoCUenta`, `bancoCliente`, `valorPagoTotal`, `ipclinte`, `navegadorCliente`, `fechaHora`, `urlDesvio`) VALUES
(1, 1, 'per', 1, 100000, '186.31.88.82', 'cheomsgdfhjsdfjhsagfdhjasf skdfhjshfasfd*as/dfas54f544sfshjdfhksjhfds0df9sa849e7te8876&/(&/(', '2018-02-19', 'http://fjhaskdfhksjahfdkjasfd.sadfhjsfd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `passwd` varchar(120) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `passwd`, `status`) VALUES
(1, 'car', '123', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritoCompra`
--
ALTER TABLE `carritoCompra`
  ADD PRIMARY KEY (`idCarrito`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritoCompra`
--
ALTER TABLE `carritoCompra`
  MODIFY `idCarrito` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
