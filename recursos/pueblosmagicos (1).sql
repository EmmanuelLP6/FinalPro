-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2019 a las 19:21:51
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
(1, 'productos de Barro', 'Barro y Vidrio', 'Es importante mencionar en este ámbito, al Centro de Artesanías de Tecate, fundado en el año de 1970 por el Sr. José Salazar, originario de Puebla. Este centro introdujo la artesanía del vidrio soplado en la región y aunque es originario de los Estados de Jalisco y Oaxaca, en poco tiempo se convirtió en una pasión para los artesanos tecatenses, convirtiéndolo en un atractivo para los visitantes. Hoy en día además del arte en vidrio, se producen piezas en cerámica y mimbre.', 'img/t2.jpg'),
(2, 'figurillas a base de conchas de mar y prendas', 'elaboradas a base y tejidas a mano', 'tienen un suministro inagotable en el Mar de Cortés. Con sus conchas los artesanos locales hacen piezas de bisutería, adornos, figuras religiosas y otros bonitos objetos', 'conchas.jpg'),
(3, 'Piezas de joyeria', 'hechas a mano', 'Podran encontrar esculturas y pinturas de los artitas establecidos en la región.', 'santos.jpg'),
(4, 'Petacas, Ollas, Bajos, Arcos', 'Elaboradas por las rarámuris o taragumara y sotol', 'Son muy recomendables por la calidad y precio, ya que tienen un valor enorme', 'bato.jpg'),
(5, 'Vasijas de cerámica', 'Cera, hechas a mano', 'Es un elemento considerado para poder identificar su desarrollo representan a generlamente a seres humanos o animales de una manera mas natural.', 'casas.jpg'),
(8, 'Se elaboran artesanias con madera de alta calidad, vara', 'Madera', 'Reune todas las herramientas que son necesarias que se necesitan para poder realizar', 'arte.jpg'),
(21, 'Mascara ', 'Madera ', 'animales de la región o a personajes de sus tradiciones ', 'img/p21art.jpg '),
(22, ' Esculturas ', 'Naturales a base de geodas y tallado en piedra caliza de estalactitas y estalagmitas ', 'Actividad Minera', 'img/p22art.jpg '),
(23, 'Piezas de Barro y Talavera ', 'Barro y Talabera ', 'Lugar donde se cazan palomas desendencia de los chichimecas ', ' img/p23art.jpg'),
(24, ' Trompos', 'Madera ', 'Los juguetes de los antepasados ', 'img/p24art.jpg  '),
(25, 'Muñecas', 'Tela ', ' Muñecas Hechas a mano.\nSon 32 vestuarios completos y típicos de los estados de la república los que se bordan a mano en el taller de costura,  entre diseños de ropa chichimeca, trajes de Colima, Durango, Puebla, Veracruz y la vestimenta de la región ', 'img/p25art.jpg'),
(26, ' Manteles bordados', 'Tela ', 'Tradiccion de la region ', 'img/p26art.jpg '),
(27, ' Rebozos', 'Tela ', 'Cultura y tradicion del lugar ', 'img/p27art.jpg'),
(28, ' Articulos de plata', ' Plata', 'Cultura y  tradicion del lugar ya que son proveedores de plata.', ' img/p28art.jpg'),
(29, 'Barro ', 'Barro ', ' Se ofrecen jarros, cazuelas, ceniceros, juguetes y desde luego vajillas completas, en las que los artesanos graban el nombre y apellido de las familias compradoras.', 'p29art.jpg '),
(30, 'Tapetes ', 'Tela ', ' Tras el paso de los años el elaborar tapetes es una tradicion', ' p30art.jpg'),
(51, 'Prendas de lana, bordados y alfarería de barro', 'Lana, barro rojo\n', 'En este municipio es famosa la alfarería, debido a que, el barro es obtenido de las arcillas de la región y cuentan con originales decorados, que son realizados a mano.', './img/huasca_barro_tela.jpg'),
(52, 'Barriles', 'Roble colorado', 'Estos pequeños barriles pueden ir ornamentados con motivos alusivos al agave y al tequila y son una magnífica pieza de uso práctico y decorativo en el bar de la casa. Otra línea artesanal que trabajan los artífices populares tequileños son unas ánforas forradas con piel de cerdo que los turistas se apresuran a llenar de tequila recién hecha y a excelente precio. También elaboran piezas de barro y tejen accesorios de vestir con pita o candelilla, una fibra vegetal.', './img/tequila_barriles.jpg'),
(53, 'Utensilios de plata y cobre,  puros artesanales.', 'Cera de plata, cobre,hojas de tabaco', 'La técnica que utilizan en estos talleres es la de fundición a la cera perdida,con sus moldes de cerámica, todo su proceso y el empeño puesto en cada pequeño detalle para que logren darle ese brillo que hay en las vitrinas.', './img/san_sebastian_plata.jpg'),
(54, 'Objetos de Chilte', 'Cerdas obtenidas del árbol llamado de la misma manera: Chilte.', 'Con él se realizan distintos artículos como flores, sombreros, canastas, fruteros, muebles, ollas, cántaros, jarrones, cazuelas, comales, huaraches, cinturones y monturas.', './img/talpa_cestos.jpg'),
(55, 'Las figuras de tule, Adornos de hojas de maíz,talabartería.', 'Tule, Hojas de maíz, rafia, cuero,etc.', 'Las figuras de tule son únicas en todo México pues las pocas personas que las elaboran viven en el antiguo pueblo indígena de San Juan Bautista de la Laguna.', './img/lagos_arte.jpg'),
(56, 'Objetos de Cantera', 'Ixtle, Madera.', 'Labrado artesanal, huaraches, sillas de madera con tejido de ixtle, casitas de madera y otras figuras de palitos de madera.', './img/mazamitla_arte.jpg'),
(57, 'Huaraches, Alfarería', 'Cuero, Madera, hierro,etc.', 'Elaboración de huaraches, navajas para gallos de pelea, piezas de alfarería, sillas de montar, equipales y soguillas.', './img/mascota_arte.jpg'),
(58, 'Cobijas, jorongos, morrales, penachos, huaraches,etc.', 'Lana, Madera, Barro', 'Además se extraen lozas de piedra laja de distintos tamaños, muy usada en construcción para revestir fachadas o pisos. Además, artesanos juanacatlecos hacen grabados artísticos con diferentes motivos, sobre trozos de laja de dimensiones mayores a un metro cuadrado.', './img/tapalpa_arte.jpg'),
(59, 'Vajillas, floreros, figuras de ornato, candilería,etc.', 'Cerámica, Madera, Lana, Vidrio Prensado, Vidrio Soplado, Papel Maché,Madera,etc.', 'Este municipio es considerado uno de los centros de producción alfarera más importante del país. Destacan también los hilados con la elaboración de vestidos, utilizando finas telas.', './img/tlaquepaque_arte.jpg'),
(60, 'Alfarería,Metalistería,Cestería,juguetería,cantería,etc.', 'Madera, Laca, Cobre, Lana,', 'Destaca la utilización de cobre, latón y hojalata; teniendo una gran diversidad de productos, como son figuras zoomorfas, lámparas, candeleros, figuras de ornato, marcos y maceteros.', './img/patzcuaro_arte.jpg');

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
(1, 'Baja California'),
(2, 'Baja California Sur'),
(3, 'Chihuahua'),
(5, 'Coahuila'),
(21, 'Colima '),
(22, ' Durango'),
(23, 'Guanajuato'),
(24, ' Guerrero'),
(25, 'Hidalgo '),
(51, 'Hidalgo'),
(52, 'Jalisco'),
(53, 'Michoacan');

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
(1, 'Tecate de México', 1),
(2, 'Comarca Lagunera', 2),
(3, 'Nivel del mar', 2),
(4, 'Instituto nacioanl de estadistica', 3),
(5, 'El Almagre', 5),
(6, 'Sobre el mar', 5),
(7, 'El madero', 7),
(8, 'Buenavista de la Roja', 8),
(21, 'Comala ', 21),
(22, ' Mapimí', 22),
(23, 'Dolores Hidalgo ', 23),
(24, ' Jalpa de Cánovas', 24),
(25, 'San Pedro de los Pozos ', 25),
(26, 'Salvatierra ', 26),
(27, 'Yuriria ', 27),
(28, ' Taxco de Alarcón', 28),
(29, 'Huasca de Ocampo', 29),
(30, 'Huichapan ', 30),
(51, 'Huasca de Ocampo', 51),
(52, 'Tequila', 52),
(53, 'San Sebastían del Oeste', 53),
(54, 'Talpa de Allende', 54),
(55, 'Lagos de Moreno', 55),
(56, 'Mazamitla', 56),
(57, 'Mascota', 57),
(58, 'Tapalpa', 58),
(59, 'Tlaquepaque', 59),
(60, 'Pátzcuaro', 60);

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
(1, 'Tecate', 1),
(2, 'Loreto', 2),
(3, 'La paz', 3),
(5, 'Casas Grandes', 5),
(6, 'Creel', 3),
(7, 'Carranza', 3),
(8, 'Arteaga', 5),
(21, 'Comala', 21),
(22, 'Mapimí ', 22),
(23, 'Dolores Hidalgo ', 23),
(24, ' Purisima del Rincón', 23),
(25, 'San Luis de la Paz ', 23),
(26, 'Salvatierra', 23),
(27, 'Yuriria ', 23),
(28, 'Taxco de Alarcón ', 24),
(29, 'Huasca de Ocampo ', 25),
(30, 'Huichapan ', 25),
(51, 'Huasca de Ocampo', 51),
(52, 'Tequila', 52),
(53, 'San Sebastían del Oeste', 52),
(54, 'Talpa de Allende', 52),
(55, 'Lagos de Moreno', 52),
(56, 'Mazamitla', 52),
(57, 'Mascota', 52),
(58, 'Tapalpa', 52),
(59, 'Tlaquepaque', 52),
(60, 'Pátzcuaro', 53);

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
(1, 'Tacos de pescado', 'Los lugareños y visitantes disfrutan de este plato tradicional que se sirve frito en tortillas de maíz que además, incluye otros ingredientes como limón, salsa \"Pico de gallo\" y mayonesa al gusto. ', 'tac_pes.jpg'),
(2, 'Cebiche De Dorado', ' Lavar y cortar el dorado fresco en dados de 2x2 cm, salpimentar y macerarlo con el ají mono, ajo y el limón por 10 minutos. Colocar la cebolla a un costado del ceviche sin mezclarlo, solo debe estar al contacto del jugo, al final poner el sacha culantro picado.\nServir con una hoja de lechuga y una guarnición de plátano frito en tajadas finas, yuca sancochada y rodajas de rocoto.', 'cevi.jpg'),
(3, 'Patarashca', ' Limpiar los pescados. Mezclar la cebolla, ajos, aceite, pimienta, comino, ají verde o ají dulce, sacha culantro picado en juliana y sal al gusto. Rellenar los pescados con esta mezcla, luego envolver con la hoja de bijao y ponerlos a la parrilla para su cocción, por espacio de 15 minutos.\nServir acompañado con yuca sancochada o plátanos asados y un sabroso ají de cocona.', 'pata.jpg'),
(4, 'Juane De Gallina Regional', 'Preparar un guiso de gallina, dorando previamente en manteca el ajo, cebolla, comino y pimienta, sudando al mismo tiempo las presas de gallina. Añadir agua para que las presas hiervan durante una hora. Sacar la gallina y agregar a ese caldo el arroz. Dejar cocer hasta que granee. Una vez que el arroz esté listo, bañar con seis huevos crudos batidos, echar sazonador.', 'jua.jpg'),
(5, 'Inchicapi', 'Cocine la gallina en una olla con tres litros de agua. Licúe el maní, la harina de maíz, el ajo, la cebolla y el sacha culantro con un poco de caldo. Vierta la mezcla anterior en la cocción de la gallina. Cuando la sopa esté casi lista, agregue la yuca en trozos pequeños y sazone con sal. Sirva acompañando con ají de cocona.', 'pic.jpg'),
(6, 'Burritos', 'elaborados con tortillas de harina, los montados que contienen un asadero en forma de tortilla y carne asada. Y que decir de la carne seca con la que se prepara la machaca y el caldo de carne seca, el chile pasado ingrediente con el que se elaboran deliciosos platillos, la discada, carne asada en sus diferentes cortes, todo esta delicioso y hay para todos los gustos.', 'burri.jpg'),
(7, 'Utensilios de Madera para el hogas', 'Son elaboradas a mano y ofrece una garantia al 100% para poder hacer esta artesanía', 'cie.jpg'),
(8, 'Licores de frutas', 'Principalmente los de manzana y membrillo se puede adquirir en las tiendas.', 'art.jpg'),
(21, 'Sopitos ', 'bocadillos oriundos que son pequeñas tortillas de masa con carne molida y salsa de tomate servidos con col rallada, cebolla picada, rábanos rebanados y queso fresco. ', 'img/p21comida.jpg'),
(22, 'Sotol ', 'el Sotol no es obtenida a partir de un Agave, sino de una planta agrupada en el genero Dasylirien. Dasylirien sp conocida entre los pobladores como Cuchara del deseirto o sereque y tiene la particularidad de sobrevivir a los cambios extremos de temparatura, es decir desde con congelados inviernos hasta los calurosos dias que se presentan. ', 'img/p22comida.jpg '),
(23, 'Enchiladas Mineras ', 'rellenas de zanahoria, papa y queso ranchero, con cebolla picada para darle sabor. Cubiertas en salsa de chile huajillo asado con ajo y una pizca de orégano y comino; por encima tienen lechuga, queso ranchero desmoronado y van acompañadas de rajas de jalapeño en escabeche. ', 'img/p23comida.jpg  '),
(24, 'Caldo de Zorra ', 'Previamente desvenados, hay que rellenar los chiles con queso y freírlos en manteca. Ya partidos los jitomates, la cebolla, el ajo, el cilantro y el xoconoztle lo freiremos todo juntos y añadiremos el caldo y los chiles rellenos.Tras dejarla hervir, se echan los huevos previamente estrellados depositándolos con cuidado para que no se rompan. Se deben servir con suficiente caldo caliente.  ', 'img/p24comida.jpg  '),
(25, ' Pollo en Nogada', '\nDeshuese la pechuga y coloque una mitad en cada plato.\nLicue los demás ingredientes, y bañe las pechugas con la salsa en frío.\nSirva acompañado de brócoli a la mantequilla. ', 'img/p25comida.jpg '),
(26, ' Cochinillo', 'Pelailla de cerdo, matado a pocos meses de su nacimiento y que se suele cocinar en las tahonas de pan. ', 'img/p26comida.jpg '),
(27, ' Barbacoa', 'se coloca la leña encendida con otra capa de madera natural para que se consuma mientras se cuece la carne; después se le coloca una pequeña rejilla hecha con ramas de árbol para poder sostener la olla con la carne. ', 'img/p27comida.jpg '),
(28, ' Platillo de iguana', 'En una cazuela de barro, se vierte un poco de aceite y cebolla. Ahí se sofríe la carne unos minutos. Se muelen chiles, tomates, cebolla, pimienta, ajo y sal. Luego se echan a la cazuela, junto con la carne. En vez de agua, se le agrega un poco del caldo en el que se coció la iguana, para darle la textura de salsa. 10 minutos después el platillo está listo, se sirve con frijoles y tortillas. ', ' img/p28comida.jpg'),
(29, ' Pastes', 'Empanadas hecha a base de harina, manteca o mantequilla y sal, rellena de carne de res, papa y poro o cebolla.  ', 'img/p29comida.jpg '),
(30, ' Barbacoa', 'se coloca la leña encendida con otra capa de madera natural para que se consuma mientras se cuece la carne; después se le coloca una pequeña rejilla hecha con ramas de árbol para poder sostener la olla con la carne. ', 'img/p27comida.jpg'),
(51, 'Rompope San Juan y Naranjate', 'Elaborado artesanalmente desde hace 10 años por Juana Lugo Licona, producto único en su género por ser totalmente natural, sin conservadores, ni saborizantes ni colorantes artificiales. / Es una mezcla de jugo de naranja, miel de abeja, vainilla y alcohol de caña.', './img/huasca_rompope.jpg'),
(52, 'Birria Jalisciense', 'La receta original de este platillo emblemático de Jalisco es con chivo, pero la relativa escasez de esta carne ha determinado que se utilicen también el borrego, el cerdo y la res. Aparte de la carne, los ingredientes imprescindibles en una birria al estilo Jalisco son los chiles asados (guajillo, morita, cascabel y ancho rojo) y el pulque. Para beber, no vamos a recomendarte algún combinado a base de tequila o pulque, sino que te vamos a sugerir que pruebes un tejuino, bebida típica mexicana preparada con maíz fermentado y piloncillo, que en su versión jalisciense lleva limón y sal.', './img/tequila_birria.jpg'),
(53, 'Huitlacoche guisado', 'Se prepara con cebolla y especias y se acompaña con un chocorraíz o con agua de nanche.', './img/san_sebastian_comida.jpg'),
(54, 'Rollo y cuero de guayaba', 'Postres', './img/talpa_comida.jpg'),
(55, 'Pacholas,el mole de arroz y lácteos', 'En su amplia variedad gastronómica encontrarás una armoniosa combinación de la cocina europea (española y portuguesa) con la indígena (chichimeca y tlaxcalteca) e incluso la africana de manos de los esclavos de los conquistadores, logrando así una fusión sabrosa y distintiva.', './img/lagos_comida.jpg'),
(56, 'El bote, Minguiche, Frijoles puercos, Toqueras, Morelianas d', 'Se acompaña con Mezcal, Atole  de aguamiel, Jocoque, etc.', './img/mazamitla_comida.jpg'),
(57, 'Pozole,  la carne con chile, las gorditas, el jocoque y la p', 'Se acompaña con rollos de Guayaba.', './img/mascota_comida.jpg'),
(58, 'Borrego al pastor,Tamales de acelgas,Pegoste de durazno.', 'no disponible', './img/tapalpa_comida.jpg'),
(59, 'La birria de chivo,borrego o de cerdo,carne tatemada', 'no disponible', './img/tlaquepaque_comida.jpg'),
(60, 'Tamales tarascos confeccionados con acúmara,sopa tarasca', 'Acompañados con un atole de masa de maíz.', './img/patzcuaro_comida.jpg');

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
(1, 'Tecate', '2019-04-08', '11:53:39', -1, 'img/t1.jpg', 'img/t2.jpg', 'img/t3.jpg', 1, 1, 1),
(2, 'Loreto', '2019-04-08', '11:53:39', -1, 'img/l1.jpg', 'img/l2.jpg', 'img/l3.jpg', 2, 2, 2),
(3, 'Todos Santos', '2019-04-08', '11:53:39', -1, 'img/s1.jpg', 'img/s2.jpg', 'img/s3.jpg', 3, 3, 3),
(4, 'Batopilas', '2019-04-08', '11:53:40', -1, 'img/b1.jpg', 'img/b2.jpg', 'img/b3.jpg', 4, 4, 4),
(5, 'Casas Grandes', '2019-04-08', '11:53:40', -1, 'img/c1.jpg', 'img/c2.jpg', 'img/c3.jpg', 5, 5, 5),
(8, 'Arteaga', '2019-04-08', '11:53:53', -1, 'img/a1.jpg', 'img/a2.jpg', 'img/a3.jpg', 8, 8, 8),
(21, 'Comala', '0000-00-00', '00:00:00', 1, ' img/p21.jpg', ' img/p212.jpg', 'img/p213.png ', 21, 21, 21),
(22, ' Mapimí', '0000-00-00', '00:00:00', 1, ' img/p22.jpg', ' img/p222.jpg', 'img/p223.jpg ', 22, 22, 22),
(23, 'Dolores Hidalgo ', '0000-00-00', '00:00:00', 1, ' img/p23.jpg', ' img/p232.jpg', 'img/p233.jpg', 23, 23, 23),
(24, 'Jalpa', '0000-00-00', '00:00:00', 1, ' img/p24.jpg', ' img/p242.jpg', 'img/p243.jpg ', 24, 24, 24),
(25, ' Mineral de Pozos', '0000-00-00', '00:00:00', 1, ' img/p25.jpg', ' img/p252.jpg', 'img/p253.jpg ', 25, 25, 25),
(26, ' Salvatierra', '0000-00-00', '00:00:00', 1, ' img/p26.jpg', ' img/p262.jpg', 'img/p263.jpg ', 26, 26, 26),
(27, ' Yuriria', '0000-00-00', '00:00:00', 1, ' img/p27.jpg', ' img/p272.jpg', 'img/p273.jpg ', 27, 27, 27),
(28, ' Taxco', '0000-00-00', '00:00:00', 1, ' img/p28.jpg', ' img/p282.jpg', 'img/p283.jpg', 28, 28, 28),
(29, 'Huasca de Ocampo ', '0000-00-00', '00:00:00', 1, ' img/p29.jpg', ' img/p292.jpg', 'img/p293.jpg ', 29, 29, 29),
(30, ' Huichapan', '0000-00-00', '00:00:00', 1, ' img/p30.jpg', ' img/p302.jpg', 'img/p303.jpg ', 30, 30, 30),
(51, 'Huasca de Ocampo', '2019-04-08', '12:19:10', -1, './img/huasca_hidalgo.jpg', './img/huasca_hidalgo2.jpg', './img/huasca_hidalgo3.jpg', 51, 51, 51),
(52, 'Tequila', '2019-04-08', '12:19:11', -1, './img/tequila_jalisco.jpg', './img/tequila_jalisco2.jpg', './img/tequila_jalisco3.jpg', 52, 52, 52),
(53, 'San Sebastián del Oeste', '2019-04-08', '12:19:11', -1, './img/san_sebastian_jalisco.jpg', './img/san_sebastian_jalisco2.jpg', './img/san_sebastian_jalisco3.jpg', 53, 53, 53),
(54, 'Talpa de Allende', '2019-04-08', '12:19:11', -1, './img/talpa_jalisco.jpg', './img/talpa_jalisco2.jpg', './img/talpa_jalisco3.jpg', 54, 54, 54),
(55, 'Lagos de Moreno', '2019-04-08', '12:19:11', -1, './img/lagos_jalisco.jpg', './img/lagos_jalisco2.jpg', './img/lagos_jalisco3.jpg', 55, 55, 55),
(56, 'Mazamitla', '2019-04-08', '12:19:11', -1, './img/mazamitla_jalisco.jpg', './img/mazamitla_jalisco2.jpg', './img/mazamitla_jalisco3.jpg', 56, 56, 56),
(57, 'Mascota', '2019-04-08', '12:19:11', -1, './img/mascota_jalisco.jpg', './img/mascota_jalisco2.jpg', './img/mascota_jalisco3.jpg', 57, 57, 57),
(58, 'Tapalpa', '2019-04-08', '12:19:11', -1, './img/tapalpa_jalisco.jpg', './img/tapalpa_jalisco2.jpg', './img/tapalpa_jalisco3.jpg', 58, 58, 58),
(59, 'Tlaquepaque', '2019-04-08', '12:19:11', -1, './img/tlaquepaque_jalisco.jpg', './img/tlaquepaque_jalisco2.jpg', './img/tlaquepaque_jalisco3.jpg', 59, 59, 59),
(60, 'Pátzcuaro', '2019-04-08', '12:19:11', -1, './img/patzcuaro_michoacan.jpg', './img/patzcuaro_michoacan2.jpg', './img/patzcuaro_michoacan3.jpg', 60, 60, 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razon`
--

CREATE TABLE `razon` (
  `id_razon` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `id_pueblo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `razon`
--

INSERT INTO `razon` (`id_razon`, `descripcion`, `id_pueblo`) VALUES
(21, 'Comala es conocido como el \"Pueblo Blanco de América\", y esto se debe a sus tradicionales techos de teja colorada y sus altas fachadas de color blanco que resplandecen y dan brillo a este sitio que guarda una gran mística por tener el nombre que Rulfo escogió como escenario de su conocida novela Pedro Páramo. \"Lugar donde hacen comales\" es el significado de su nombre y es paso obligado para quienes visitan el Volcán de Fuego o la ciudad de Colima. ', 21),
(22, 'Es un Pueblo Mágico fuera de serie por su aguerrida historia y su ubicación en medio de un desierto inhóspito. Te quedarás sin aliento cuando a cada paso que des escuches el crujir de la madera bajo tus pies y el viento de un barranco de cien metros de profundidad, en el Puente colgante de Ojuela, te musite los secretos del pueblo al oído y de su centro mineral fantasma mientras miras las verdes montañas que completan esta imponente estructura. ', 22),
(23, 'Entre sus vías y callejones encontrarás la magia de la historia de México. Este Pueblo Mágico es reconocido como el crisol de la Independencia; por ello no es raro enterarse que resguarda sus secretos, como la Catedral, ese testigo silencio que pudo capturar en sus muros el sonido de la voz del cura Miguel Hidalgo cuando dio el grito de independencia. Y mientras paseas por este encantador y pintoresco pueblo, sus museos y monumentos te contarán la historia de México, transportándote a un mundo lleno de tradiciones', 23),
(24, 'El olor a membrillo despertará tus sentidos en Jalpa de Cánovas; la tranquilidad que se respira aquí contrasta con el imponente Templo Del Señor De La Misericordia, con sus impecables ladrillos rojos que están ahí para dar cuenta del pasado: las viejas trojes, la extinta tienda de raya, la casa del administrador y el pequeño Santuario de Guadalupe donde antes rezaban los hacendados y hoy lo hacen los habitantes. ', 24),
(25, ' En medio del semidesierto, con un paisaje cubierto de mezquites, se levanta Pozos con su historia minera que se ha convertido en el emblema de este acogedor poblado, todo el que ve sus ruinas se llena de asombro. Es un pueblo que revive como el ave legendaria pues este encantador lugar ha vuelto a renacer después de haber sido abandonado por su población en dos ocasiones a lo largo de su historia.', 25),
(26, 'Salvatierra es un encuentro de dos mundos, donde la influencia española erigió poemas en sus plazas, conventos y templos. Destaca el Templo de las Capuchinas, que forma parte de la Ruta de los Conventos, un recorrido reconocido por la UNESCO como Patrimonio Mundial de la Humanidad, rodeado por graneros de trigo que con los rayos de sol brillan como cabellos de oro. Su existencia está marcada por el curso del río Lerma, por el añejo Puente de Batanes que lo cruza y por la larga acequia y el par de canales que del caudal se han servido siempre. Cuando te sientes en las plazas podrás ser testigo de la unión entre españoles e indígenas. ', 26),
(27, 'Podrás descansar junto a la gente pescando y paseando en lancha sobre su cristalina superficie, pasear a caballo por la orilla o esperar la llegada del atardecer en otro cuerpo de agua, el Lago Cráter, cuya principal característica es que cada vez que hay un temblor o una erupción del volcán sus aguas se tiñen de rojo, también podrás descansar en sus cómodas palapas de la Isla La Angostura. ', 27),
(28, ' Es un pequeño pero encantador Pueblo Mágico enclavado en una zona rodeada de grandes cerros y montañas, gracias a la intensa explotación de sus yacimientos de plata. Su gente aún vive del comercio y manufactura de objetos que el preciado metal permite; todavía se conservan también las construcciones barrocas levantadas durante el auge minero del Virreinato.', 28),
(29, 'En este pueblo al final de la montaña aún resuena la bonanza de viejos tiempos, cuando se edificaron varias haciendas que convirtieron al Conde de Regla el hombre más rico de su época. Ahora son parte de un escenario con bosques y barrancas, donde prismas pétreos y cascadas y presas te robarán el aliento.Su arquitectura colonial se caracteriza por su sencillez que contrasta con su intrincada belleza natural. ', 29),
(30, ' Caminar por las calles de Huichapan te hará sentir la historia de generaciones que han pisado sus tierras. Tocarás las raíces del pueblo observando las pinturas rupestres que dan fe de los primeros exploradores de Huichapan, mientras te deslumbran los vestigios de las culturas Otomí, Teotihuacana, Tolteca y Azteca, que también habitaron estas tierras y que los encontrarás en museo de Arqueología e Historia que te transportará a otros tiempos. Hasta el Convento de San Mateo hasta su plaza central que resguarda las tres iglesias del Conjunto Religioso y el Palacio Municipal.', 30),
(51, 'Huasca de Ocampo fue la primera localidad mexicana declarada \"Pueblo Mágico\". Su paisaje invita a recorrer a pie la mayoría de sus rincones, dotados con la suficiente infraestructura para pasar un agradable fin de semana. Huasca proyecta en sus casas de cantera blanca con techos de dos aguas y en sus calles, la imagen provincial de un pintoresco poblado. Podrás encontrar tres haciendas, una de ellas sumergida en un lago, bosques, truchas, pan de pulque, empedrados, columnas de basalto con figuras geométricas, peña del aire, campamento, kayak, alpinismo, cabañas de madera, historia, cinematografía, pesca, tradiciones, hospitalidad y mucho más', 51),
(52, 'Esta tierra de oro azul se levanta a las faldas del volcán de Tequila y el cañon del Río Grande, entre el paisaje de los cultivos de agave, las antiguas haciendas y las destilerías que fabrican la deliciosa bebida emblema de México. El principal productor de Tequila en el mundo, donde todos los sentidos sucumben al dulce aroma de la piña, es una fiesta para el paladar. Además, recorriendo sus estrechas calles empedradas conocerás antiguas leyendas del pueblo y podrás divertirte en sus bares, muchos de ellos *callejeros*.', 52),
(53, 'Los caminos envueltos en vegetación boscosa y acompañados por perfumes frutales conducen a miradores naturales y sitios de descanso, de aprendizaje o de diversión. Casonas, ex haciendas y casitas coronadas por techos de teja son algunos de los elementos que dan vida a este Pueblo Mágico de pasado minero a orillas de la Sierra Madre Occidental.', 53),
(54, 'Paisajes montañosos, casonas y habitantes trabajadores conforman esta población perfumada diariamente de guayaba, café y chilte. Siempre atenta a la llegada de visitantes movidos por una de las fuerzas más sorprendentes del ser humano: la fe.', 54),
(55, 'A este Pueblo Mágico de Jalisco , de belleza natural, clima semiseco y relevancia histórica- se llega tras cruzar el famoso y sobrio puente de río Lagos, construido en cantera. Después de esta magnífica obra hidráulica se advierte un tranquilo poblado cuya arquitectura evoca a la época del virreinato.', 55),
(56, 'Mazamitla es un Pueblo Mágico sumergido en la sierra rodeado por el lago de Chapala; en el centro caminarás por sus calles empedradas observando las blancas casas con portones de madera y techos de teja que te harán sentir un inconmensurable sosiego y estar en armonía con la naturaleza. En el impresionante bosque que lo rodea podrás disfrutar de actividades para los amantes del ecoturismo y los deportes de aventura. También puedes disfrutar la tranquilidad de una cabaña, con noches frías y calentarte a la luz del fuego al prender la chimenea, mientras que por el día sales a caminar por senderos que llevan a cascadas o simplemente disfrutar los paisajes de la sierra mientras montas un caballo.', 56),
(57, 'Entre los pinos y encinos de la Sierra Madre Occidental bajo un cielo siempre azul está Mascota, que te dará la bienvenida con el aire fresco proveniente de las montañas que se entremezclan con el clima cálido del pacífico. Cuando llegues a la plaza principal, verás el quiosco y el templo de Nuestra Señora de los Dolores, y sentirás el ambiente tranquilo y amable de este Pueblo Mágico, mientras disfrutas de sus helados y nieves. En medio del bosque te espera la laguna de Juanacatlán con su agua cristalina que proviene de una corriente subterránea, y podrás relajarte en los spas que te esperan muy cerca de la laguna. Sentirás cómo se te eriza la piel frente al imponente Templo Inconcluso De La Preciosa Sangre, rodeado de sus jardines y buganvilias sabrás que no es propiamente que este inacabado, sino que espera pacientemente ser concluido por los ojos de quien lo mira.', 57),
(58, 'En medio de un exuberante paisaje boscoso se encuentra Tapalpa con el esplendor y sencillez de sus casas blancas con tejados rojos de dos aguas que combina casi a la perfección con la belleza natural, la arquitectura y la tranquilidad, Tapalpa es un lugar único que ofrece algo para todos. Cualquier actividad siempre está envuelta en magia.  Cuando camines por sus calles empedradas y veas su quiosco rodeado de portales y sombreado por inmensos árboles; cuando mires sus templos, y observes que entre cada fisura del cemento se escabulle su desbordante vegetación que te invitan a vivir una aventura natural al extremo; sentirás cómo el aire puro corre por tus venas y vivirás la experiencia que sólo un Pueblo Mágico pacífico como Tapalpa puede ofrecer.', 58),
(59, 'Es un centro turístico enfocado a las artesanías de alfarería, textiles y vidrio soplado. Sus calles y andadores están engalanadas de diversas Casonas del siglo pasado, además de construcciones coloniales, el Tapatío Tour llega al municipio en una de sus rutas.', 59),
(60, 'vienen a mi mente sus colores. Las casas, siempre combinando el blanco con el colorado. Las calles empedradas y serpenteantes en eterno sube y baja. Y el cielo más azul que puedas imaginar.', 60);

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
  MODIFY `id_artesania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
  MODIFY `id_platillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `pueblo`
--
ALTER TABLE `pueblo`
  MODIFY `id_pueblo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `razon`
--
ALTER TABLE `razon`
  MODIFY `id_razon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
