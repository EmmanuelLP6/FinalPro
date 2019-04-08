-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2019 a las 17:41:50
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pueblosmagicos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artesania`
--

CREATE TABLE `artesania` (
  `id_artesania` int(11) NOT NULL,
  `nombre_artesania` varchar(60) NOT NULL,
  `materiales` text NOT NULL,
  `significado` text NOT NULL,
  `img_artesania` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artesania`
--

INSERT INTO `artesania` (`id_artesania`, `nombre_artesania`, `materiales`, `significado`, `img_artesania`) VALUES
(21, 'Mascara ', 'Madera ', 'animales de la región o a personajes de sus tradiciones ', 'img/p21art.jpg '),
(22, ' Esculturas ', 'Naturales a base de geodas y tallado en piedra caliza de estalactitas y estalagmitas ', 'Actividad Minera', 'img/p22art.jpg '),
(23, 'Piezas de Barro y Talavera ', 'Barro y Talabera ', 'Lugar donde se cazan palomas desendencia de los chichimecas ', ' img/p23art.jpg'),
(24, ' Trompos', 'Madera ', 'Los juguetes de los antepasados ', 'img/p24art.jpg  '),
(25, 'Muñecas', 'Tela ', ' Muñecas Hechas a mano.\nSon 32 vestuarios completos y típicos de los estados de la república los que se bordan a mano en el taller de costura,  entre diseños de ropa chichimeca, trajes de Colima, Durango, Puebla, Veracruz y la vestimenta de la región ', 'img/p25art.jpg'),
(26, ' Manteles bordados', 'Tela ', 'Tradiccion de la region ', 'img/p26art.jpg '),
(27, ' Rebozos', 'Tela ', 'Cultura y tradicion del lugar ', 'img/p27art.jpg'),
(28, ' Articulos de plata', ' Plata', 'Cultura y  tradicion del lugar ya que son proveedores de plata.', ' img/p28art.jpg'),
(29, 'Barro ', 'Barro ', ' Se ofrecen jarros, cazuelas, ceniceros, juguetes y desde luego vajillas completas, en las que los artesanos graban el nombre y apellido de las familias compradoras.', 'p29art.jpg '),
(30, 'Tapetes ', 'Tela ', ' Tras el paso de los años el elaborar tapetes es una tradicion', ' p30art.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre_estado`) VALUES
(21, 'Colima '),
(22, ' Durango'),
(23, 'Guanajuato'),
(24, ' Guerrero'),
(25, 'Hidalgo ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id_localidad` int(11) NOT NULL,
  `nombre_localidad` varchar(60) NOT NULL,
  `id_municipio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id_localidad`, `nombre_localidad`, `id_municipio`) VALUES
(21, 'Comala ', 21),
(22, ' Mapimí', 22),
(23, 'Dolores Hidalgo ', 23),
(24, ' Jalpa de Cánovas', 24),
(25, 'San Pedro de los Pozos ', 25),
(26, 'Salvatierra ', 26),
(27, 'Yuriria ', 27),
(28, ' Taxco de Alarcón', 28),
(29, 'Huasca de Ocampo', 29),
(30, 'Huichapan ', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `nombre_municipio` varchar(60) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `nombre_municipio`, `id_estado`) VALUES
(21, 'Comala', 21),
(22, 'Mapimí ', 22),
(23, 'Dolores Hidalgo ', 23),
(24, ' Purisima del Rincón', 23),
(25, 'San Luis de la Paz ', 23),
(26, 'Salvatierra', 23),
(27, 'Yuriria ', 23),
(28, 'Taxco de Alarcón ', 24),
(29, 'Huasca de Ocampo ', 25),
(30, 'Huichapan ', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillo`
--

CREATE TABLE `platillo` (
  `id_platillo` int(11) NOT NULL,
  `nombre_platillo` varchar(60) NOT NULL,
  `preparacion` text,
  `imagen_platillo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `platillo`
--

INSERT INTO `platillo` (`id_platillo`, `nombre_platillo`, `preparacion`, `imagen_platillo`) VALUES
(21, 'Sopitos ', 'bocadillos oriundos que son pequeñas tortillas de masa con carne molida y salsa de tomate servidos con col rallada, cebolla picada, rábanos rebanados y queso fresco. ', 'img/p21comida.jpg'),
(22, 'Sotol ', 'el Sotol no es obtenida a partir de un Agave, sino de una planta agrupada en el genero Dasylirien. Dasylirien sp conocida entre los pobladores como Cuchara del deseirto o sereque y tiene la particularidad de sobrevivir a los cambios extremos de temparatura, es decir desde con congelados inviernos hasta los calurosos dias que se presentan. ', 'img/p22comida.jpg '),
(23, 'Enchiladas Mineras ', 'rellenas de zanahoria, papa y queso ranchero, con cebolla picada para darle sabor. Cubiertas en salsa de chile huajillo asado con ajo y una pizca de orégano y comino; por encima tienen lechuga, queso ranchero desmoronado y van acompañadas de rajas de jalapeño en escabeche. ', 'img/p23comida.jpg  '),
(24, 'Caldo de Zorra ', 'Previamente desvenados, hay que rellenar los chiles con queso y freírlos en manteca. Ya partidos los jitomates, la cebolla, el ajo, el cilantro y el xoconoztle lo freiremos todo juntos y añadiremos el caldo y los chiles rellenos.Tras dejarla hervir, se echan los huevos previamente estrellados depositándolos con cuidado para que no se rompan. Se deben servir con suficiente caldo caliente.  ', 'img/p24comida.jpg  '),
(25, ' Pollo en Nogada', '\nDeshuese la pechuga y coloque una mitad en cada plato.\nLicue los demás ingredientes, y bañe las pechugas con la salsa en frío.\nSirva acompañado de brócoli a la mantequilla. ', 'img/p25comida.jpg '),
(26, ' Cochinillo', 'Pelailla de cerdo, matado a pocos meses de su nacimiento y que se suele cocinar en las tahonas de pan. ', 'img/p26comida.jpg '),
(27, ' Barbacoa', 'se coloca la leña encendida con otra capa de madera natural para que se consuma mientras se cuece la carne; después se le coloca una pequeña rejilla hecha con ramas de árbol para poder sostener la olla con la carne. ', 'img/p27comida.jpg '),
(28, ' Platillo de iguana', 'En una cazuela de barro, se vierte un poco de aceite y cebolla. Ahí se sofríe la carne unos minutos. Se muelen chiles, tomates, cebolla, pimienta, ajo y sal. Luego se echan a la cazuela, junto con la carne. En vez de agua, se le agrega un poco del caldo en el que se coció la iguana, para darle la textura de salsa. 10 minutos después el platillo está listo, se sirve con frijoles y tortillas. ', ' img/p28comida.jpg'),
(29, ' Pastes', 'Empanadas hecha a base de harina, manteca o mantequilla y sal, rellena de carne de res, papa y poro o cebolla.  ', 'img/p29comida.jpg '),
(30, ' Barbacoa', 'se coloca la leña encendida con otra capa de madera natural para que se consuma mientras se cuece la carne; después se le coloca una pequeña rejilla hecha con ramas de árbol para poder sostener la olla con la carne. ', 'img/p27comida.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pueblo`
--

CREATE TABLE `pueblo` (
  `id_pueblo` int(11) NOT NULL,
  `nombre_pueblo` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estatus` int(1) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `id_platillo` int(11) NOT NULL,
  `id_artesania` int(11) NOT NULL,
  `id_localidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pueblo`
--

INSERT INTO `pueblo` (`id_pueblo`, `nombre_pueblo`, `fecha`, `hora`, `estatus`, `img1`, `img2`, `img3`, `id_platillo`, `id_artesania`, `id_localidad`) VALUES
(21, 'Comala', '0000-00-00', '00:00:00', 1, ' img/p21.jpg', ' img/p212.jpg', 'img/p213.png ', 21, 21, 21),
(22, ' Mapimí', '0000-00-00', '00:00:00', 1, ' img/p22.jpg', ' img/p222.jpg', 'img/p223.jpg ', 22, 22, 22),
(23, 'Dolores Hidalgo ', '0000-00-00', '00:00:00', 1, ' img/p23.jpg', ' img/p232.jpg', 'img/p233.jpg', 23, 23, 23),
(24, 'Jalpa', '0000-00-00', '00:00:00', 1, ' img/p24.jpg', ' img/p242.jpg', 'img/p243.jpg ', 24, 24, 24),
(25, ' Mineral de Pozos', '0000-00-00', '00:00:00', 1, ' img/p25.jpg', ' img/p252.jpg', 'img/p253.jpg ', 25, 25, 25),
(26, ' Salvatierra', '0000-00-00', '00:00:00', 1, ' img/p26.jpg', ' img/p262.jpg', 'img/p263.jpg ', 26, 26, 26),
(27, ' Yuriria', '0000-00-00', '00:00:00', 1, ' img/p27.jpg', ' img/p272.jpg', 'img/p273.jpg ', 27, 27, 27),
(28, ' Taxco', '0000-00-00', '00:00:00', 1, ' img/p28.jpg', ' img/p282.jpg', 'img/p283.jpg', 28, 28, 28),
(29, 'Huasca de Ocampo ', '0000-00-00', '00:00:00', 1, ' img/p29.jpg', ' img/p292.jpg', 'img/p293.jpg ', 29, 29, 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razon`
--

CREATE TABLE `razon` (
  `id_razon` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `id_pueblo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(5) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `ape_paterno` varchar(30) NOT NULL,
  `ape_materno` varchar(30) NOT NULL,
  `correo_electronico` varchar(40) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `ape_paterno`, `ape_materno`, `correo_electronico`, `password`) VALUES
(1, 'Administrador', 'Pueblo', 'Mágico', 'administrador@pueblomagico.com', '0521c86db1b2fc3d0a9e333ffda2d277a14cf20924f033afff3e0cb4f15928c2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artesania`
--
ALTER TABLE `artesania`
  ADD PRIMARY KEY (`id_artesania`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id_localidad`),
  ADD KEY `id_municipio` (`id_municipio`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `platillo`
--
ALTER TABLE `platillo`
  ADD PRIMARY KEY (`id_platillo`);

--
-- Indices de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  ADD PRIMARY KEY (`id_pueblo`),
  ADD KEY `id_localidad` (`id_localidad`),
  ADD KEY `id_artesania` (`id_artesania`),
  ADD KEY `id_platillo` (`id_platillo`);

--
-- Indices de la tabla `razon`
--
ALTER TABLE `razon`
  ADD PRIMARY KEY (`id_razon`),
  ADD KEY `id_pueblo` (`id_pueblo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artesania`
--
ALTER TABLE `artesania`
  MODIFY `id_artesania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id_localidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `platillo`
--
ALTER TABLE `platillo`
  MODIFY `id_platillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  MODIFY `id_pueblo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `razon`
--
ALTER TABLE `razon`
  MODIFY `id_razon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `localidad_ibfk_1` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pueblo`
--
ALTER TABLE `pueblo`
  ADD CONSTRAINT `pueblo_ibfk_1` FOREIGN KEY (`id_localidad`) REFERENCES `localidad` (`id_localidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pueblo_ibfk_2` FOREIGN KEY (`id_artesania`) REFERENCES `artesania` (`id_artesania`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pueblo_ibfk_3` FOREIGN KEY (`id_platillo`) REFERENCES `platillo` (`id_platillo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `razon`
--
ALTER TABLE `razon`
  ADD CONSTRAINT `razon_ibfk_1` FOREIGN KEY (`id_pueblo`) REFERENCES `pueblo` (`id_pueblo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
