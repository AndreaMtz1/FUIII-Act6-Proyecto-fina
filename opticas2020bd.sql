-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 02:22:18
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `opticas2020bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `PrimerApellido` varchar(50) NOT NULL,
  `SegundoApellido` varchar(50) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id`, `Nombre`, `PrimerApellido`, `SegundoApellido`, `Telefono`, `Correo`, `Direccion`) VALUES
(1, 'Carla', 'Martinez', 'Rodriguez', '6561584535', 'carandmtzrdz@gmail.com', 'Ixcoatl'),
(3, 'Alejandra', 'Martinez', 'Rodriguez', '6569877887', 'alejandra@gmail.com', 'Ixcoatl'),
(5, 'Uriel', 'Acosta', 'Ruiz', '6561584535', 'uriel@gmail.com', 'Tapioca'),
(9, 'Ximena', 'Martinez', 'Longoria', '6561239874', 'ximena@gmail.com', 'Melocoton'),
(11, 'Jazmin', 'Rodriguez', 'Ruiz', '6561472589', 'jazmin@outlook.com', 'Ixcoatl'),
(12, 'Justin', 'Bieber', 'Gonzalez', '6561231234', 'justin@gmail.com', 'El Paso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `PrimerApellido` varchar(50) NOT NULL,
  `SegundoApellido` varchar(50) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id`, `Nombre`, `PrimerApellido`, `SegundoApellido`, `Telefono`, `Correo`, `Direccion`) VALUES
(1, 'Carla', 'Martinez', 'Rodriguez', '6561584535', 'carandmtzrdz@gmail.com', 'Ixcoatl'),
(3, 'Alejandra', 'Martinez', 'Rodriguez', '6569877887', 'alejandra@gmail.com', 'Ixcoatl'),
(5, 'Uriel', 'Acosta', 'Ruiz', '6561584535', 'uriel@gmail.com', 'Tapioca'),
(9, 'Ximena', 'Martinez', 'Longoria', '6561239874', 'ximena@gmail.com', 'Melocoton'),
(10, 'Victor', 'Martinez', 'Gallegos', '65614756984', 'victor@gmail.com', 'Melocoton'),
(11, 'Jazmin', 'Rodriguez', 'Ruiz', '6561472589', 'jazmin@outlook.com', 'Ixcoatl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `Existencia` int(11) NOT NULL,
  `ProveedorId` int(11) NOT NULL,
  `Departamento` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`Id`, `Nombre`, `Precio`, `Existencia`, `ProveedorId`, `Departamento`, `Descripcion`) VALUES
(1, 'Armazon Orcar de la Renta', '3500', 3, 1, 'Ventas', 'Color Negro'),
(3, 'Armazon Ray Ban', '4500', 2, 1, 'Ventas', 'Color Gris'),
(4, 'Armazon Boss', '1500', 5, 2, 'Ventas', 'Super Delgados'),
(5, 'Armazon Polaroid', '2800', 1, 1, 'Reventa', 'Armazon metalico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `PaginaWeb` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `RFC` varchar(50) NOT NULL,
  `RepEmpresa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`Id`, `Nombre`, `PaginaWeb`, `Direccion`, `Telefono`, `Correo`, `RFC`, `RepEmpresa`) VALUES
(1, 'Armazones del Norte', 'www.armazonesdelnorte.com', '16 de septiembre 123', '6561234567', 'info@armazonezdelnorte.com', 'ADEN052632FGT', 'Leon Larregui'),
(3, 'Lentes de Mexico', 'www.lentesdemexico.com', '20 De Noviembre', '6561234567', 'ingo@lentesdemexico.com', 'ABCD341232DFR', 'Alejandra Martinez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
