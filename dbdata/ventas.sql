-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2020 a las 01:22:08
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'pastas', 'pastas comestibles', 'inactivo'),
(2, 'Gaseosas', 'tipos de gaseosas y bebidas', 'activo'),
(3, 'Jugos', 'Tipos de jugos', 'activo'),
(4, 'Leches', 'tipos de leches', 'inactivo'),
(5, 'aceites', 'tipos de aceites', 'inactivo'),
(6, 'condimentos', 'tipos de condimentos', 'inactivo'),
(7, 'golosinas', 'tipos de golosinas', 'inactivo'),
(10, 'producto de limpieza', 'tipos de producto de limpieza', 'inactivo'),
(11, 'cosmeticos de belleza', 'base, cremas, maquillaje', 'inactivo'),
(12, 'panaderia y dulces', 'todo tipo de pan y dulce', 'activo'),
(13, 'productos de belleza', 'todo tipo de productos de belleza', 'inactivo'),
(22, 'enlatados', 'todo tipo de producto que viene en lata', 'inactivo'),
(23, 'Articulo de limpieza', 'para pizo, baño ', 'inactivo'),
(24, 'Embutidos', 'todo tipo de carne', 'activo'),
(25, 'Pasta de fideo', 'fideos de diferente tamaño', 'activo'),
(26, 'Cosmeticos', 'todo tipo comestico', 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombres`, `apellidos`, `telefono`, `direccion`, `nit`, `estado`) VALUES
(1, 'Elena Faby', 'perez perez', '77609801', 'san marcos', '345647365-89', 'activo'),
(2, 'Jorge alfredo', 'orozco maldonado', '54850646', 'Quetzaltenango', '24524534-1', 'activo'),
(3, 'Eugenio Alberto', 'Bautista', '77605645', 'San pedro Sacatepéquez ', '345234523-4', 'inactivo'),
(4, 'Mariela Gisel', 'Godinez orozco', '45667899', 'San pedro Sacatepéquez ', '3565256245-5', 'activo'),
(5, 'Eluvia  Masiel', 'Fuentes Pérez', '44345679', 'San marcos', '07689656-6', 'activo'),
(6, 'Alfredo Ismael', 'Molina perez', '45674400', 'san marcos', '456356356-009', 'inactivo'),
(7, 'Susely Elizabeth', 'Alvarado de leon', '56778545', 'Quetzaltenango', '463456-6', 'inactivo'),
(8, 'marta', 'godinez', '4564554', 'san juan', '346345-45', 'inactivo'),
(9, 'Osman', 'Cifuentes', '34567789', 'San Marcos', '45670989-4', 'inactivo'),
(10, 'Jose Alberto', 'Perez Guzman', '5656356', 'Jutiapa', '4565463-8', 'inactivo'),
(11, 'Eluvia', 'Godinez', '45667890', 'San Marcos', '45634564-7', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `importe` varchar(45) DEFAULT NULL,
  `productos_id` int(11) NOT NULL,
  `ventas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id`, `precio`, `cantidad`, `importe`, `productos_id`, `ventas_id`) VALUES
(1, '2', 2, '4', 2, 4),
(2, '25', 3, '75', 3, 5),
(3, '45', 1, '45', 8, 6),
(4, '35', 1, '35', 6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `categorias_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `descripcion`, `precio`, `stock`, `estado`, `categorias_id`) VALUES
(1, '434524352', 'leche Nestle', 'leche en lata de 500 mililitros ', '40', 10, 'activo', 2),
(2, '789AD984', 'Espagueti mexicano INA', 'espagueti mexicano de 500 gr fino ', '2', 13, 'activo', 1),
(3, '46456345FKM', 'Consome Maler', 'bote de consome maler de 100 gr', '25', 7, 'activo', 6),
(4, '434AC45B', 'Crema Sedal', 'bote de crema sedal para rizos definidos de 50 gr.', '50', 8, 'inactivo', 11),
(5, '6785AMF03', 'Aceite ideal', 'botella de aceite de 400 ml', '7.50', 10, 'inactivo', 5),
(6, 'YH7609', 'suavitel', 'suavitel fresca primavera 12x850ML', '35', 19, 'inactivo', 10),
(7, 'CR3456', 'crema nivea', 'crema facial pack aclarado 50 ml', '20', 10, 'inactivo', 11),
(8, 'MNL42564', 'jugo la granja', 'jugo la granja de 1 litro ', '45', 7, 'inactivo', 3),
(9, '567HJI', 'crema aclaradora', 'crema aclarnate B', '15', 10, 'inactivo', 12),
(10, '4565462462-5', 'jugo de la granja', 'jugo de 1 litro', '10', 5, 'activo', 3),
(11, '897989989-AF', 'leche pino', 'bote de leche de 5 litros', '45', 7, 'activo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`) VALUES
(1, 'superadministrador', 'administración de sistema total'),
(2, 'admin', 'administración de sistema total'),
(3, 'usuario', 'acceso a algunos módulos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `serie` int(11) NOT NULL,
  `iva` float(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `nombre`, `cantidad`, `serie`, `iva`) VALUES
(2, 'Factura', 7, 1, 0.12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `telefono`, `email`, `username`, `password`, `estado`, `roles_id`) VALUES
(1, 'Jennifer Aime', 'Gean Orozco', '33456678', 'jgeano@miumg.edu.gt', 'jennifer', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'activo', 1),
(2, 'Juan', 'Lopez', '', 'juanLopez@gmail.com', 'juany', '1234', 'activo', 3),
(3, 'Marta', 'Ochoa', '67453489', 'MartaOchoa8@gmail.com', 'Martita', '12345', 'activo', 3),
(4, 'Fernando', 'Lopez', '45678890', 'fernando@gmail.com', 'fer', 'fer123', 'inactivo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `subtotal` varchar(45) DEFAULT NULL,
  `iva` float(11,2) NOT NULL,
  `descuento` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `numero_documento` varchar(45) DEFAULT NULL,
  `clientes_id` int(11) NOT NULL,
  `tipo_documento_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `serie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `subtotal`, `iva`, `descuento`, `total`, `numero_documento`, `clientes_id`, `tipo_documento_id`, `usuario_id`, `serie`) VALUES
(3, '2020-10-09', '80', 0.10, '0.12', '79.976', '000004', 1, 2, 1, '1'),
(4, '2020-10-09', '4', 0.00, '0.12', '3.88', '000005', 2, 2, 1, '1'),
(5, '2020-10-29', '75', 0.09, '0.12', '74.97', '000006', 5, 2, 1, '1'),
(6, '2020-10-13', '80', 0.10, '0.12', '79.98', '000007', 7, 2, 1, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id` (`productos_id`),
  ADD KEY `ventas_id` (`ventas_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_productos_categorias` (`categorias_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_roles1` (`roles_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ventas_clientes1` (`clientes_id`),
  ADD KEY `fk_ventas_tipo_documento1` (`tipo_documento_id`),
  ADD KEY `fk_ventas_usuario1` (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`ventas_id`) REFERENCES `ventas` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categorias` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_ventas_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `fk_ventas_tipo_documento1` FOREIGN KEY (`tipo_documento_id`) REFERENCES `tipo_documento` (`id`),
  ADD CONSTRAINT `fk_ventas_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
