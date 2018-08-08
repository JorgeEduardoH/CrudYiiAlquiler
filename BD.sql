-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2017 a las 20:28:33
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alquilerautos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `id_Alquiler` int(11) NOT NULL,
  `fechaFinal_Alquiler` date DEFAULT NULL,
  `fechaInicio_Alquiler` date DEFAULT NULL,
  `id_Sucursal` int(11) NOT NULL,
  `cedula_Vendedor` int(11) NOT NULL,
  `cedula_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`id_Alquiler`, `fechaFinal_Alquiler`, `fechaInicio_Alquiler`, `id_Sucursal`, `cedula_Vendedor`, `cedula_Cliente`) VALUES
(2, '2017-06-30', '2017-05-11', 1, 1013673538, 1234343);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler_automovil`
--

CREATE TABLE `alquiler_automovil` (
  `id_Alquiler_Automovil` int(11) NOT NULL,
  `id_Automovil` int(11) NOT NULL,
  `id_Alquiler` int(11) NOT NULL,
  `galones_Alquiler_Automovil` int(11) DEFAULT NULL,
  `precio_Alquiler_Automovil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alquiler_automovil`
--

INSERT INTO `alquiler_automovil` (`id_Alquiler_Automovil`, `id_Automovil`, `id_Alquiler`, `galones_Alquiler_Automovil`, `precio_Alquiler_Automovil`) VALUES
(1, 1, 2, 12, 13300),
(2, 1, 2, 12, 13300),
(3, 1, 2, 34, 67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automovil`
--

CREATE TABLE `automovil` (
  `id_Automovil` int(11) NOT NULL,
  `placa_Automovil` varchar(20) NOT NULL,
  `modelo_Automovil` int(11) DEFAULT NULL,
  `precioAlquiler_Automovil` int(11) DEFAULT NULL,
  `id_gama` int(11) DEFAULT NULL,
  `id_TipoVehiculo` int(11) NOT NULL,
  `id_Estado` int(11) NOT NULL,
  `id_Color` int(11) NOT NULL,
  `id_Marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `automovil`
--

INSERT INTO `automovil` (`id_Automovil`, `placa_Automovil`, `modelo_Automovil`, `precioAlquiler_Automovil`, `id_gama`, `id_TipoVehiculo`, `id_Estado`, `id_Color`, `id_Marca`) VALUES
(1, 'wer123', 2012, 120000, 3, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cedula_Cliente` int(11) NOT NULL,
  `telefono_Cliente` int(11) DEFAULT NULL,
  `direccion_Cliente` varchar(90) DEFAULT NULL,
  `nombre_Cliente` varchar(90) DEFAULT NULL,
  `precio_Descuento_cliente` int(11) DEFAULT NULL,
  `fecha_Descuento_cliente` date DEFAULT NULL,
  `Cliente_Recomendado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula_Cliente`, `telefono_Cliente`, `direccion_Cliente`, `nombre_Cliente`, `precio_Descuento_cliente`, `fecha_Descuento_cliente`, `Cliente_Recomendado`) VALUES
(1234343, 345568, 'cr 34- sur 78- 67', 'jose eliecer arias', 30000, '2017-05-31', 234545444),
(234545444, 345568, 'cr 34- sur 56 -12', 'edimiro cardenas ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id_Color` int(11) NOT NULL,
  `nombre_Color` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id_Color`, `nombre_Color`) VALUES
(1, 'rojo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authassignment`
--

CREATE TABLE `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  `itemname` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitem`
--

CREATE TABLE `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_alquilerautomovil_admin', 0, '', NULL, 'N;'),
('action_alquilerautomovil_create', 0, '', NULL, 'N;'),
('action_alquilerautomovil_delete', 0, '', NULL, 'N;'),
('action_alquilerautomovil_index', 0, '', NULL, 'N;'),
('action_alquilerautomovil_update', 0, '', NULL, 'N;'),
('action_alquilerautomovil_view', 0, '', NULL, 'N;'),
('action_alquiler_admin', 0, '', NULL, 'N;'),
('action_alquiler_create', 0, '', NULL, 'N;'),
('action_alquiler_delete', 0, '', NULL, 'N;'),
('action_alquiler_index', 0, '', NULL, 'N;'),
('action_alquiler_update', 0, '', NULL, 'N;'),
('action_alquiler_view', 0, '', NULL, 'N;'),
('action_automovil_admin', 0, '', NULL, 'N;'),
('action_automovil_create', 0, '', NULL, 'N;'),
('action_automovil_delete', 0, '', NULL, 'N;'),
('action_automovil_index', 0, '', NULL, 'N;'),
('action_automovil_update', 0, '', NULL, 'N;'),
('action_automovil_view', 0, '', NULL, 'N;'),
('action_cliente_admin', 0, '', NULL, 'N;'),
('action_cliente_create', 0, '', NULL, 'N;'),
('action_cliente_delete', 0, '', NULL, 'N;'),
('action_cliente_index', 0, '', NULL, 'N;'),
('action_cliente_update', 0, '', NULL, 'N;'),
('action_cliente_view', 0, '', NULL, 'N;'),
('action_color_admin', 0, '', NULL, 'N;'),
('action_color_create', 0, '', NULL, 'N;'),
('action_color_delete', 0, '', NULL, 'N;'),
('action_color_index', 0, '', NULL, 'N;'),
('action_color_update', 0, '', NULL, 'N;'),
('action_color_view', 0, '', NULL, 'N;'),
('action_descuento_admin', 0, '', NULL, 'N;'),
('action_descuento_create', 0, '', NULL, 'N;'),
('action_descuento_delete', 0, '', NULL, 'N;'),
('action_descuento_index', 0, '', NULL, 'N;'),
('action_descuento_update', 0, '', NULL, 'N;'),
('action_descuento_view', 0, '', NULL, 'N;'),
('action_estado_admin', 0, '', NULL, 'N;'),
('action_estado_create', 0, '', NULL, 'N;'),
('action_estado_delete', 0, '', NULL, 'N;'),
('action_estado_index', 0, '', NULL, 'N;'),
('action_estado_update', 0, '', NULL, 'N;'),
('action_estado_view', 0, '', NULL, 'N;'),
('action_gama_admin', 0, '', NULL, 'N;'),
('action_gama_create', 0, '', NULL, 'N;'),
('action_gama_delete', 0, '', NULL, 'N;'),
('action_gama_index', 0, '', NULL, 'N;'),
('action_gama_update', 0, '', NULL, 'N;'),
('action_gama_view', 0, '', NULL, 'N;'),
('action_marca_admin', 0, '', NULL, 'N;'),
('action_marca_create', 0, '', NULL, 'N;'),
('action_marca_delete', 0, '', NULL, 'N;'),
('action_marca_index', 0, '', NULL, 'N;'),
('action_marca_update', 0, '', NULL, 'N;'),
('action_marca_view', 0, '', NULL, 'N;'),
('action_site_contact', 0, '', NULL, 'N;'),
('action_site_cuenta', 0, '', NULL, 'N;'),
('action_site_error', 0, '', NULL, 'N;'),
('action_site_index', 0, '', NULL, 'N;'),
('action_site_login', 0, '', NULL, 'N;'),
('action_site_logout', 0, '', NULL, 'N;'),
('action_sucursal_admin', 0, '', NULL, 'N;'),
('action_sucursal_create', 0, '', NULL, 'N;'),
('action_sucursal_delete', 0, '', NULL, 'N;'),
('action_sucursal_index', 0, '', NULL, 'N;'),
('action_sucursal_update', 0, '', NULL, 'N;'),
('action_sucursal_view', 0, '', NULL, 'N;'),
('action_tipovehiculo_admin', 0, '', NULL, 'N;'),
('action_tipovehiculo_create', 0, '', NULL, 'N;'),
('action_tipovehiculo_delete', 0, '', NULL, 'N;'),
('action_tipovehiculo_index', 0, '', NULL, 'N;'),
('action_tipovehiculo_update', 0, '', NULL, 'N;'),
('action_tipovehiculo_view', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_vendedortelefonos_admin', 0, '', NULL, 'N;'),
('action_vendedortelefonos_create', 0, '', NULL, 'N;'),
('action_vendedortelefonos_delete', 0, '', NULL, 'N;'),
('action_vendedortelefonos_index', 0, '', NULL, 'N;'),
('action_vendedortelefonos_update', 0, '', NULL, 'N;'),
('action_vendedortelefonos_view', 0, '', NULL, 'N;'),
('action_vendedor_admin', 0, '', NULL, 'N;'),
('action_vendedor_create', 0, '', NULL, 'N;'),
('action_vendedor_delete', 0, '', NULL, 'N;'),
('action_vendedor_index', 0, '', NULL, 'N;'),
('action_vendedor_update', 0, '', NULL, 'N;'),
('action_vendedor_view', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('controller_alquiler', 0, '', NULL, 'N;'),
('controller_alquilerautomovil', 0, '', NULL, 'N;'),
('controller_automovil', 0, '', NULL, 'N;'),
('controller_cliente', 0, '', NULL, 'N;'),
('controller_color', 0, '', NULL, 'N;'),
('controller_descuento', 0, '', NULL, 'N;'),
('controller_estado', 0, '', NULL, 'N;'),
('controller_gama', 0, '', NULL, 'N;'),
('controller_marca', 0, '', NULL, 'N;'),
('controller_site', 0, '', NULL, 'N;'),
('controller_sucursal', 0, '', NULL, 'N;'),
('controller_tipovehiculo', 0, '', NULL, 'N;'),
('controller_vendedor', 0, '', NULL, 'N;'),
('controller_vendedortelefonos', 0, '', NULL, 'N;'),
('jury', 0, '', NULL, 'N;'),
('Vendedor', 2, 'vende', '', 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitemchild`
--

CREATE TABLE `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_field`
--

CREATE TABLE `cruge_field` (
  `idfield` int(11) NOT NULL,
  `fieldname` varchar(20) NOT NULL,
  `longname` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) DEFAULT NULL,
  `useregexpmsg` varchar(512) DEFAULT NULL,
  `predetvalue` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_fieldvalue`
--

CREATE TABLE `cruge_fieldvalue` (
  `idfieldvalue` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_session`
--

CREATE TABLE `cruge_session` (
  `idsession` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_session`
--

INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
(1, 1, 1496002687, 1496004487, 0, '::1', 2, 1496002988, NULL, NULL),
(2, 1, 1496004583, 1496006383, 0, '::1', 2, 1496004838, NULL, NULL),
(3, 1, 1496006492, 1496008292, 0, '::1', 1, 1496006492, NULL, NULL),
(4, 1, 1496008507, 1496010307, 0, '::1', 1, 1496008507, NULL, NULL),
(5, 1, 1496010346, 1496012146, 0, '::1', 1, 1496010346, NULL, NULL),
(6, 1, 1496015267, 1496017067, 0, '::1', 1, 1496015267, NULL, NULL),
(7, 1, 1496021383, 1496023183, 1, '::1', 1, 1496021383, NULL, NULL),
(8, 1, 1496060553, 1496062353, 0, '::1', 1, 1496060553, NULL, NULL),
(9, 1, 1496062473, 1496064273, 0, '::1', 1, 1496062473, NULL, NULL),
(10, 4, 1496064368, 1496066168, 0, '::1', 2, 1496064533, 1496064920, '::1'),
(11, 1, 1496064392, 1496066192, 0, '::1', 1, 1496064392, 1496064516, '::1'),
(12, 1, 1496066576, 1496068376, 0, '::1', 1, 1496066576, 1496066679, '::1'),
(13, 4, 1496066698, 1496068498, 0, '::1', 1, 1496066698, NULL, NULL),
(14, 1, 1496072096, 1496073896, 0, '::1', 1, 1496072096, NULL, NULL),
(15, 1, 1496074432, 1496076232, 0, '::1', 1, 1496074432, 1496074460, '::1'),
(16, 4, 1496074479, 1496076279, 0, '::1', 1, 1496074479, NULL, NULL),
(17, 1, 1496076467, 1496078267, 0, '::1', 1, 1496076467, 1496076471, '::1'),
(18, 4, 1496076488, 1496078288, 0, '::1', 1, 1496076488, NULL, NULL),
(19, 4, 1496078312, 1496080112, 0, '::1', 1, 1496078312, NULL, NULL),
(20, 4, 1496080188, 1496081988, 1, '::1', 1, 1496080188, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_system`
--

CREATE TABLE `cruge_system` (
  `idsystem` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `largename` varchar(45) DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) DEFAULT NULL,
  `registerusingtermslabel` varchar(100) DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 30, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_user`
--

CREATE TABLE `cruge_user` (
  `iduser` int(11) NOT NULL,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'Hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1496076467, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0),
(4, 1496061691, 1496061691, 1496080188, '1013673538', 'juan@prada.com', '123456', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_Estado` int(11) NOT NULL,
  `nombre_Estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_Estado`, `nombre_Estado`) VALUES
(1, 'Disponible'),
(2, 'Alquilado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gama`
--

CREATE TABLE `gama` (
  `id_gama` int(11) NOT NULL,
  `nombre_gama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gama`
--

INSERT INTO `gama` (`id_gama`, `nombre_gama`) VALUES
(1, 'alta'),
(2, 'Media'),
(3, 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_Marca` int(11) NOT NULL,
  `nombre_Marca` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_Marca`, `nombre_Marca`) VALUES
(1, 'chevrolet 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_Sucursal` int(11) NOT NULL,
  `nombre_Sucursal` varchar(60) DEFAULT NULL,
  `direccion_Sucursal` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_Sucursal`, `nombre_Sucursal`, `direccion_Sucursal`) VALUES
(1, 'Central', 'cr 20 c 40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovehiculo`
--

CREATE TABLE `tipovehiculo` (
  `id_TipoVehiculo` int(11) NOT NULL,
  `nombre_TipoVehiculo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipovehiculo`
--

INSERT INTO `tipovehiculo` (`id_TipoVehiculo`, `nombre_TipoVehiculo`) VALUES
(1, 'carro'),
(2, 'camioneta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `cedula_Vendedor` int(11) NOT NULL,
  `direccion_Vendedor` varchar(90) DEFAULT NULL,
  `nombre_Vendedor` varchar(90) DEFAULT NULL,
  `id_Sucursal` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `clave` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`cedula_Vendedor`, `direccion_Vendedor`, `nombre_Vendedor`, `id_Sucursal`, `id_user`, `clave`, `email`) VALUES
(1013673538, 'cr 20 12-sur', 'juan emilio  prada', 1, 4, '123456', 'juan@prada.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor_telefonos`
--

CREATE TABLE `vendedor_telefonos` (
  `id_vendedor_telefonos` int(11) NOT NULL,
  `cedula_Vendedor` int(11) NOT NULL,
  `telefono_Vendedor_telefonos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendedor_telefonos`
--

INSERT INTO `vendedor_telefonos` (`id_vendedor_telefonos`, `cedula_Vendedor`, `telefono_Vendedor_telefonos`) VALUES
(1, 1013673538, 7920982),
(2, 1013673538, 22222);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`id_Alquiler`),
  ADD KEY `id_Sucursal` (`id_Sucursal`),
  ADD KEY `cedula_Vendedor` (`cedula_Vendedor`),
  ADD KEY `cedula_Cliente` (`cedula_Cliente`);

--
-- Indices de la tabla `alquiler_automovil`
--
ALTER TABLE `alquiler_automovil`
  ADD PRIMARY KEY (`id_Alquiler_Automovil`),
  ADD KEY `id_Alquiler` (`id_Alquiler`),
  ADD KEY `id_Automovil` (`id_Automovil`);

--
-- Indices de la tabla `automovil`
--
ALTER TABLE `automovil`
  ADD PRIMARY KEY (`id_Automovil`),
  ADD UNIQUE KEY `placa_Automovil` (`placa_Automovil`),
  ADD KEY `id_gama` (`id_gama`),
  ADD KEY `id_TipoVehiculo` (`id_TipoVehiculo`),
  ADD KEY `id_Estado` (`id_Estado`),
  ADD KEY `id_Color` (`id_Color`),
  ADD KEY `id_Marca` (`id_Marca`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cedula_Cliente`),
  ADD UNIQUE KEY `cedula_Cliente` (`cedula_Cliente`),
  ADD KEY `Cliente_Recomendado` (`Cliente_Recomendado`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_Color`);

--
-- Indices de la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
  ADD PRIMARY KEY (`userid`,`itemname`),
  ADD KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`),
  ADD KEY `fk_cruge_authassignment_user` (`userid`);

--
-- Indices de la tabla `cruge_authitem`
--
ALTER TABLE `cruge_authitem`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `cruge_field`
--
ALTER TABLE `cruge_field`
  ADD PRIMARY KEY (`idfield`);

--
-- Indices de la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  ADD PRIMARY KEY (`idfieldvalue`),
  ADD KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`),
  ADD KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`);

--
-- Indices de la tabla `cruge_session`
--
ALTER TABLE `cruge_session`
  ADD PRIMARY KEY (`idsession`),
  ADD KEY `crugesession_iduser` (`iduser`);

--
-- Indices de la tabla `cruge_system`
--
ALTER TABLE `cruge_system`
  ADD PRIMARY KEY (`idsystem`);

--
-- Indices de la tabla `cruge_user`
--
ALTER TABLE `cruge_user`
  ADD PRIMARY KEY (`iduser`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_Estado`);

--
-- Indices de la tabla `gama`
--
ALTER TABLE `gama`
  ADD PRIMARY KEY (`id_gama`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_Marca`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_Sucursal`);

--
-- Indices de la tabla `tipovehiculo`
--
ALTER TABLE `tipovehiculo`
  ADD PRIMARY KEY (`id_TipoVehiculo`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`cedula_Vendedor`),
  ADD KEY `id_Sucursal` (`id_Sucursal`);

--
-- Indices de la tabla `vendedor_telefonos`
--
ALTER TABLE `vendedor_telefonos`
  ADD PRIMARY KEY (`id_vendedor_telefonos`),
  ADD KEY `cedula_Vendedor` (`cedula_Vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id_Alquiler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `alquiler_automovil`
--
ALTER TABLE `alquiler_automovil`
  MODIFY `id_Alquiler_Automovil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `automovil`
--
ALTER TABLE `automovil`
  MODIFY `id_Automovil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cruge_field`
--
ALTER TABLE `cruge_field`
  MODIFY `idfield` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  MODIFY `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cruge_session`
--
ALTER TABLE `cruge_session`
  MODIFY `idsession` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `cruge_system`
--
ALTER TABLE `cruge_system`
  MODIFY `idsystem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cruge_user`
--
ALTER TABLE `cruge_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_Sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `vendedor_telefonos`
--
ALTER TABLE `vendedor_telefonos`
  MODIFY `id_vendedor_telefonos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `alquiler_ibfk_1` FOREIGN KEY (`id_Sucursal`) REFERENCES `sucursal` (`id_Sucursal`),
  ADD CONSTRAINT `alquiler_ibfk_2` FOREIGN KEY (`cedula_Vendedor`) REFERENCES `vendedor` (`cedula_Vendedor`),
  ADD CONSTRAINT `alquiler_ibfk_3` FOREIGN KEY (`cedula_Cliente`) REFERENCES `cliente` (`cedula_Cliente`);

--
-- Filtros para la tabla `alquiler_automovil`
--
ALTER TABLE `alquiler_automovil`
  ADD CONSTRAINT `alquiler_automovil_ibfk_1` FOREIGN KEY (`id_Alquiler`) REFERENCES `alquiler` (`id_Alquiler`),
  ADD CONSTRAINT `alquiler_automovil_ibfk_2` FOREIGN KEY (`id_Automovil`) REFERENCES `automovil` (`id_Automovil`);

--
-- Filtros para la tabla `automovil`
--
ALTER TABLE `automovil`
  ADD CONSTRAINT `automovil_ibfk_1` FOREIGN KEY (`id_gama`) REFERENCES `gama` (`id_gama`),
  ADD CONSTRAINT `automovil_ibfk_2` FOREIGN KEY (`id_TipoVehiculo`) REFERENCES `tipovehiculo` (`id_TipoVehiculo`),
  ADD CONSTRAINT `automovil_ibfk_3` FOREIGN KEY (`id_Estado`) REFERENCES `estado` (`id_Estado`),
  ADD CONSTRAINT `automovil_ibfk_4` FOREIGN KEY (`id_Color`) REFERENCES `color` (`id_Color`),
  ADD CONSTRAINT `automovil_ibfk_5` FOREIGN KEY (`id_Marca`) REFERENCES `marca` (`id_Marca`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`Cliente_Recomendado`) REFERENCES `cliente` (`cedula_Cliente`);

--
-- Filtros para la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
  ADD CONSTRAINT `fk_cruge_authassignment_cruge_authitem1` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_authassignment_user` FOREIGN KEY (`userid`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
  ADD CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`id_Sucursal`) REFERENCES `sucursal` (`id_Sucursal`);

--
-- Filtros para la tabla `vendedor_telefonos`
--
ALTER TABLE `vendedor_telefonos`
  ADD CONSTRAINT `vendedor_telefonos_ibfk_1` FOREIGN KEY (`cedula_Vendedor`) REFERENCES `vendedor` (`cedula_Vendedor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
