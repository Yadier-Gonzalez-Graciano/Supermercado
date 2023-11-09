-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 06:45:26
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_supermercado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_provedores`
--

CREATE TABLE `tbl_provedores` (
  `id_user` int(11) NOT NULL,
  `nameComercial_user` varchar(40) DEFAULT NULL,
  `rfc_user` varchar(40) DEFAULT NULL,
  `nameSocial_user` varchar(50) DEFAULT NULL,
  `tipoProducto_user` varchar(50) DEFAULT NULL,
  `direccion_user` varchar(50) DEFAULT NULL,
  `telefono_user` varchar(50) DEFAULT NULL,
  `correo_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_provedores`
--

INSERT INTO `tbl_provedores` (`id_user`, `nameComercial_user`, `rfc_user`, `nameSocial_user`, `tipoProducto_user`, `direccion_user`, `telefono_user`, `correo_user`) VALUES
(454, '2', '3', '4', '5', '6', '7', '8'),
(455, '4', '4', '4', '4', '4', '4', '4'),
(456, 'www', 'www', 'www', 'ww', 'ww', 'ww', 'ww'),
(457, '5', '5', '5', '5', '5', '5', '5'),
(458, 'sabritas', 'sabit888', 'Sabritas Sa de CV ', 'Papitas', 'puerto caliz 7777', '6557809797', 'sabritas@.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_provedores`
--
ALTER TABLE `tbl_provedores`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_provedores`
--
ALTER TABLE `tbl_provedores`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=459;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
