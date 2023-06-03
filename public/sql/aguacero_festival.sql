-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2023 a las 20:20:35
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aguacero_festival`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competition`
--

CREATE TABLE `competition` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nacionality` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `artwork_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `competition`
--

INSERT INTO `competition` (`id`, `name`, `age`, `email`, `phone`, `address`, `nacionality`, `category`, `artwork_name`, `description`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'Gustavo Quilodran', 9, 'ruwyjeq@mailinator.com', '+1 (123) 433-3885', 'Ea rerum id iusto cu', 'Lesoto', 'junior', 'obra y gracia del espiritu santo', 'Nemo irure consectet', '2023-05-23 18:19:56', '2023-05-23 18:19:56', '0000-00-00 00:00:00'),
(2, 'Fiona Bowman', 6, 'fokubage@mailinator.com', '+1 (849) 917-8839', 'Culpa saepe tempori', 'Malasia', 'junior', 'Melyssa Huber', 'Suscipit incidunt a', '2023-05-23 18:28:00', '2023-05-23 18:28:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter_users`
--

CREATE TABLE `newsletter_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `newsletter_users`
--

INSERT INTO `newsletter_users` (`id`, `name`, `lastname`, `email`, `active`, `created_at`) VALUES
(1, 'Gustavo', 'Quilodran', 'gaqs.02@gmail.com', 1, '2021-11-22 10:58:57'),
(3, 'Macarena', 'Rocher', 'macarocher@gmail.com', 1, '2021-11-24 00:11:07'),
(4, 'Italo', 'Schuller', 'italoschuller@gmail.com', 1, '2021-11-26 17:24:05'),
(5, 'Alexis', 'Borquez Oyarzo', 'borquezalexis195@gmail.com', 1, '2021-12-03 11:43:54'),
(6, 'KARENINA ', 'TEIGUEL CASTILLO', 'KARENINATEIGUEL@GMAIL.COM', 1, '2021-12-06 14:19:21'),
(7, 'Veronica', 'Cortes', 'veritocristina@yahoo.es', 1, '2021-12-08 14:39:12'),
(8, 'Felipe', 'Santander', 'felipesantanderbarria@gmail.com', 1, '2021-12-09 01:50:13'),
(9, 'victor', 'valdes', 'victor.julio.valdes@gmail.com', 1, '2021-12-09 08:00:36'),
(10, 'Robinson', 'Scheuermann urrutia', 'robinsoneduardo.scheuermann@gmail.com', 1, '2021-12-09 19:31:01'),
(11, 'Avril', 'Guerrero Coloma ', 'senyume75@gmail.com', 1, '2021-12-10 19:53:04'),
(12, 'Noelia', 'Coloma BascuÃ±an', 'noeliacoloma@gmail.com', 1, '2021-12-10 19:54:10'),
(13, 'Gustavo', 'Farfal Pineda', 'avrilemiliagc2008@gmail.com', 1, '2021-12-10 19:55:03'),
(14, 'R.', 'A.', 'ro.augusto@hotmail.com', 1, '2021-12-10 22:13:16'),
(15, 'Carolina', 'Reyes ', 'carolina.reyes.i@arauco.com', 1, '2021-12-11 15:49:18'),
(16, 'Celeste Lynn', 'Gray', 'nacopipyq@mailinator.com', 1, '2022-07-12 10:01:35'),
(17, 'Julio', 'Espinoza', 'julio.espinoza.c@gmail.com', 1, '2022-07-27 00:40:47'),
(18, 'Diego', 'Segura', 'seguramente16@gmail.com', 1, '2022-07-28 17:27:53'),
(19, 'Miguel', 'Leyton', 'm.leytonfigueroa@gmail.com', 1, '2022-08-05 12:52:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `security_tokens`
--

CREATE TABLE `security_tokens` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `security_tokens`
--

INSERT INTO `security_tokens` (`id`, `user`, `token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'matamalacamila7@gmail.com', '$2y$10$jYvrnC0/gjw9dTrXWJphlO0KbC9/Ermd.Lv14xUSC5UZ2jQTv1hGm', '2022-08-17 15:27:16', '2022-08-17 15:27:16', '2022-08-17 15:27:16'),
(2, 'gaqs.02@gmail.com', '$2y$10$YByHVwnNE4yj678r1M/aQu/LcAqEl6CJDd3b2KiF9bz0g2BeXsI9O', '2022-08-17 15:30:12', '2022-08-17 15:30:12', '2022-08-17 15:30:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stands`
--

CREATE TABLE `stands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rrss` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `medium` int(11) NOT NULL,
  `big` int(11) NOT NULL,
  `resp_name` varchar(255) NOT NULL,
  `resp_email` varchar(255) NOT NULL,
  `resp_phone` varchar(12) NOT NULL,
  `resp_participants` text NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_rut` varchar(20) NOT NULL,
  `business_sii` text NOT NULL,
  `business_sell` text NOT NULL,
  `bank_titular` varchar(255) NOT NULL,
  `bank_rut` varchar(20) NOT NULL,
  `bank_email` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_type` varchar(255) NOT NULL,
  `bank_number` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `stands`
--

INSERT INTO `stands` (`id`, `name`, `rrss`, `description`, `medium`, `big`, `resp_name`, `resp_email`, `resp_phone`, `resp_participants`, `business_name`, `business_rut`, `business_sii`, `business_sell`, `bank_titular`, `bank_rut`, `bank_email`, `bank_name`, `bank_type`, `bank_number`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DAMIVAGO', 'https://www.instagram.com/damivago/', '					Soy el autor, guionista y dibujante de mis propios libros de humor gráfico de críticas sociales, de actualidad y del día a día.  Actualmente tengo 7 libros publicados: Redes Antisociales, Humor Animal, No soy machista, pero, Chaqueteo nacional 1 y 2, Cuarentena paso a paso y Fuera de mis privilegios.	Bio completa en: https://damivago.cl/daslav-vladilo/			', 0, 1, 'DASLAV MIRKO VLADILO GOICOVIC', 'damivago.oficial@gmail.com', '997994650', '																					DASLAV MIRKO VLADILO GOICOVIC', 'DASLAV MIRKO VLADILO GOICOVIC', '141105388', 'ASE FINANCIERAS Y EMPRESARIALES/ ILUSTRACIONES HUMOR GRAFICO EN LIBROS', 'LIBROS HUMOR GRÁFICO CON ILUSTRACIONES ', 'DASLAV MIRKO VLADILO GOICOVIC', '14110538-8', 'DASLAVVLADILOG@GMAIL.COM', 'Banco de Chile', 'Cuenta Corriente', '1100643702', '2022-07-29 12:12:14', '2022-07-29 12:12:14', NULL),
(2, 'Jossy Alburquenque', 'www.instagram.com/jossyalburquenque_arts', 'Ilustradora, Dibujante de Cómics y Tatuadora.', 1, 0, 'Jocelyn alburquenque', 'jossyalburquenque@gmail.com', '965781871', '																					Marcela Catalan', 'Comercial Jocelyn Alburquenque EIRL', '76963366-9', 'Editorial', 'Comics, libros.', 'Banco Estado', '16198024-2', 'Jossyalburquenque@gmail.com', 'Banco Estado', 'Cuenta RUT', '16198024', '2022-07-29 14:38:36', '2022-07-29 14:38:36', NULL),
(3, 'Puduart', 'https://www.instagram.com/puduart/', '			Tienda de fabricacion de textiles y accesorios  con enfasis en el anime y comics							', 0, 1, 'Alex Valenzuela Ibacache', 'puduartcontacto@gmail.com', '988857732', 'Alex Valenzuela Ibacache\r\nDaniela Villa Peñailillo	\r\n\r\n																		', 'Puduart', '756568934', 'venta de articulos al por menor', 'venta de productos textiles y accesorios', 'Banco Estado', '75665893-4', 'puduartcontacto@gmail.com', 'Banco Estado', 'Cuenta Vista', '53371795924', '2022-07-29 14:58:28', '2022-07-29 14:58:28', NULL),
(4, 'Macarena Gallardo  - Ilustradora', 'https://www.instagram.com/macarenagallardo_ilustradora/', 'ARTISTA: Macarena Gallardo, Diseñadora Gráfica e ilustradora Ancuditana (Chilota)\r\nMARCA: Diseño e ilustración de una linea de productos inspirados en Chiloé, (decoración, papelería, accesorios, artículos de hogar, etc)						', 1, 0, 'Macarena Soledad Gallardo  Gonzalez', 'macarenag60@gmail.com', '+56974780533', 'Macarena Gallardo, Aracely Guentelican 															', 'Macarena Soledad Gallardo Gonzalez', '17.714.838-5', 'Diseñador Gráfico y Souvenir', ' Venta al por menor de recuerdos ', 'Banco Estado', '17714838-5', 'macarenag60@gmail.com', 'Banco Estado', 'Cuenta RUT', '17714838', '2022-07-29 17:09:53', '2022-07-29 17:09:53', NULL),
(5, 'Marina Opazo', 'https://www.instagram.com/marinaopazo/', 'Ilustraciones de flora, fauna y funga de Chile aplicadas en diferefentes soportes como papelería, tazones, stickers, banderines, estuches y articulos de decoración\r\n', 1, 0, 'marina andrea opazo ainol', 'marinaopazo.8@gmail.com', '971779821', 'Marina Opazo																			', 'Publicidad y diseño grafico marina opazo eirl', '768461619', 'publicidad, otras actividades de edición', 'ilustraciones', 'Banco Estado', '18217908-6', 'marinaopazo.8@gmail.com', 'Banco Estado', 'Cuenta RUT', '18217908', '2022-07-29 17:20:43', '2022-07-29 17:20:43', NULL),
(6, 'Desastre Natural Ediciones', 'https://www.instagram.com/desastrenatural_ed/', 'Desastre Natural Ediciones se gesta con la finalidad de dar vida a proyectos, principalmente gráficos, que aborden las complejas relaciones que existen entre los seres humanos.\r\nTenemos distintas colecciones, cada una enfocada en un tipo de narrativa diferente. Desde nuestra Colección Historietas, con un formato predefinido de 16x23cms, hasta nuestra Colección de libros y fanzines de autor, donde las publicaciones son siempre distintas entre sí, importando no sólo su contenido, sino que también su forma física y el modo de construirla.\r\nNuestro principal interés es dar un espacio a voces e historias que aún no han ingresado masivamente (y no tienen por qué hacerlo) al imaginario colectivo.							', 1, 0, 'Nataschia Navarro Macker', 'desastrenatural.ed@gmail.com', '+56952478286', 'Nataschia Navarro Macker, Sebastián Olave Maldonado																	', 'Ediciones Desastre Natural SpA', '76.838.335-9', 'Edición y comercialización de libros (giro corto)', 'Libros', 'Banco Estado', '76838335-9', 'desastrenatural.ed@gmail.com', 'Banco Estado', 'Cuenta Vista', '35671033785', '2022-07-29 19:02:54', '2022-07-29 19:02:54', NULL),
(7, 'Marlyn Becerra Berdugo ', 'https://www.facebook.com/Marlynbec', 'Marlyn Becerra es Escritora Colombo Venezolana, con más de 22 autopublicaciones de cuentos infantiles Ilustrados, venta de lapicitos, ilustraciónes. Promueve la lectura y el dibujo infantil a lo largo de todo el país, de la mano de Ilustradores de varias ciudades de Chile. Ha participado en las últimas 4 versiones de Aguacero Cómics y trae como lanzamientos nuevos \"El León y la Ratona\" y \"Pudu Puda\".						', 1, 0, 'Marlyn Becerra Berdugo ', 'marlynbec@gmail.com', '+56922202579', 'Marlyn Becerra Berdugo																', 'Marlyn Becerra Berdugo ', '26.972.856-6', 'Cuentos Ilustrados ', 'Libros tipo fanzine, lapicitos para niños, pósters, stikers, marcapaginas', 'Banco Estado', '26972856-6', 'marlynbec@gmail.com', 'Banco Estado', 'Cuenta RUT', '26972856', '2022-07-29 19:52:33', '2022-07-29 19:52:33', NULL),
(8, 'Camiluna', 'https://www.instagram.com/camiluna.rt/', 'Camiluna es una marca de diseño e ilustración esotérica independiente, con un pequeño tallercito en la zona rural de ciruelos, San José de la Mariquina. \r\nA través de la ilustración análoga y digital se crean patrones ilustrados agregando mensajes inspiradores de la vida diaria. plasmados en papelería y artilugios esotéricos .\r\nCamiluna es un eterno otoño mágico. ', 1, 0, 'Camila Caro Arias', 'camiluna.rt@gmail.com', '967273643', 'Camila Caro, Borja Torres.																			', 'Camila Caro Arias', '188863469', 'Productos ilustrados y papelería ', 'Prints, stickers, agendas, tazones, articulos de papelería, articulos decorativos ilustrados', 'Banco Estado', '18886346-9', 'camila.caroa@gmail.com', 'Banco Estado', 'Cuenta RUT', '18886346', '2022-07-29 20:12:58', '2022-07-29 20:12:58', NULL),
(9, 'D&D Anime Store', 'https://www.instagram.com/dd.animestore/', 'Tienda dedicada a la venta de Mangas y accesorios adicionales como marcapáginas, mousepad, estuches, monederos, stickers, pósters, calcetines, tazones ( productos Chilenos) \r\nTodo nuestros productos con la temática de personajes de mangas, comics, anime o similares								', 0, 1, 'Dyrce Jaramillo Berrocal', 'dd.animestore@gmail.com', '977712614', 'Daniela Alarcon Alvial\r\nDyrce Jaramillo Berrocal																					', 'Compra y venta de Anime Limitada', '77017016-8', 'COMPRA Y VENTA DE ARTICULOS DE ANIME Y ARTICULOS EN GENERAL', 'Venta de Mangas y artículos afines al anime', 'Banco Estado', '77017016-8', 'dd.animestore@gmail.com', 'Banco Estado', 'Cuenta Vista', '72171331821', '2022-07-29 20:16:38', '2022-07-29 20:16:38', NULL),
(10, 'Camilustrap ', 'https://www.instagram.com/camilustrap/', 'Soy una ilustradora de estilo cartoon, realizo pequeñas tiras cómicas, stickers, prints y libretas.									', 1, 0, 'Camila', 'camilustra.pujol@gmail.com', '±56950772767', '																					', 'Camila', '18.502.371-0', 'Ilustración ', 'Ilustración', 'Banco Estado', '18502371-0', 'camila.1993.cubillos@gmail.com', 'Banco Estado', 'Cuenta RUT', '18502371', '2022-07-29 22:44:47', '2022-07-29 22:44:47', NULL),
(11, 'COMIXSTORE.NET', 'https://instagram.com/comixstore_net', 'Librería especializada de cómic, manga y novela gráfica. Despachos a todo Chile.									', 0, 2, 'Claudio Sepúlveda', 'hola@comixstore.net', '978570702', 'Claudio Sepúlveda, Marjorie Wenderdel																					', 'Comercial, Claudio Sepúlveda, EIRL', '763550249', 'Venta de libros en comercios especializados', 'Cómic, Manga, Novela gráfica y literatura en general', 'Banco Estado', '76355024-9', 'pagos@comixstore.net', 'Banco Estado', 'Cuenta Vista', '72270097988', '2022-07-30 09:28:27', '2022-07-30 09:28:27', NULL),
(12, 'Jugodejirafa ', 'https://www.instagram.com/jugodejirafa/?hl=es-la', 'Jugodejirafa presenta ilustraciones y pinturas que retratan el cuerpo femenino, la naturaleza, el terror y el mundo onírico, a través de técnica mixta trabajada sobre papel, replicado en pronta, poleras, imanes, stickers y la creación de fanzines de diferentes temáticas.						', 1, 0, 'Yarett Carrasco ', 'yarettcarrasco@gmail.com', '+56972388181', 'Yarett Carrasco																		', 'Yarett Andrea Carrasco García ', '18589584-k', 'Artista independiente y diseñadora de vestuario ', 'Actividades de artistas realizadas de forma independiente: Actores, músicos, escritores, entre otros', 'Banco Estado', '18589584-K', 'yarettcarrasco@gmail.com', 'Banco Estado', 'Cuenta RUT', '18589584', '2022-07-30 13:39:24', '2022-07-30 13:39:24', NULL),
(13, 'Planeta Lápiz', 'https://www.instagram.com/planetalapiz/', 'Somos Planeta Lápiz. Nos dedicamos a ilustrar libros, caricaturizar en vivo y hacemos clases de dibujo para niños y adultos. 					', 1, 0, 'Sebastián Sarmiento', 'sebacapa@gmail.com', '965104777', 'Sebastián Sarmiento, Yasmina Sandoval																					', 'Sebastián Sarmiento Rodriguez', '171477603', 'Diseñador Gráfico', 'Libro Aprende a dibujar con Planeta Lápiz, caricaturas en vivo, ilustraciones', 'Banco Estado', '17147760-3', 'sebacapa@gmail.com', 'Banco Estado', 'Cuenta RUT', '17147760', '2022-07-30 15:04:26', '2022-07-30 15:04:26', NULL),
(14, 'Ariete Producciones', 'www.arietepro.cl', 'Tomamos como premisa una frase fundamental del imaginario colectivo “No somos grandes artistas, pero tampoco queremos ser menos” Nuestra intención como agrupación productiva es generar material de lectura que mantenga al lector entretenido e interesado en conocer mas de su entorno, que logre hacer que se cuestione sobre lo que lee y ve, ya que las visiones de cada uno pueden ser diametralmente distintas pero no por ello menos respetables. Queremos hacer comic porque nos gusta… Queremos hacer libros porque queremos comunicar ideas… A ti lector ocasional, a ti lector de metro, de bus, de calle, de tarde de domingo, café, cerveza y plaza… Queremos llegar a ti, lector…								', 1, 0, 'German Valenzuela', 'arieteproducciones@gmail.com', '+56940366608', '(confirmado) German Valenzuela, (sin confirmar) Claudio Muñoz															', 'German Eduardo Valenzuela Aravena Productora Editorial EIRL', '76599923-5', 'Edicion Principalmente de Libros', 'Comic, Narrativa Grafica ', 'Banco de Chile', '13669897-4', 'arieteproducciones@gmail.com', 'Banco de Chile', 'Cuenta Corriente', '00-239-03106-07', '2022-07-31 12:50:30', '2022-07-31 12:50:30', NULL),
(15, 'MangaLine Chile', 'https://www.instagram.com/mangalinecl/', 'MangaLine Chile es un equipo editorial autónomo de la marca MangaLine Ediciones, con una trayectoria de más de 20 años en el mercado del manga en español, que ha aportado un nuevo enfoque al mercado y apoyado el surgimiento de nuevos proyectos en más de cinco países.\r\nSomos la primera editorial en licenciar manga japonés desde y para Chile, con traducciones, formatos y precios personalizados al mercado nacional. \r\nPublicamos manga y artistas nacionales tanto como manga japonés. En el catálogo tenemos a autores chilenos reconocidos como Saikomic (Premio Tezuka 100° Aniversario) como a Horacio Santander (autor inédito). Y en manga japonés estamos publicando autores como Akihito Yoshitomi, Shuho Sato y Kon Kumakura\r\n', 1, 0, 'Nicolás Meneses', 'info@mangaline.cl', '+56936002270', 'Nicolás Meneses y Catalina Herrera																					', 'Provincianos Editores Limitada', '77.525.718-0', 'Edición de libros', 'Edición de libros', 'Provincianos Editores Limitada', '77525718-0', 'info@mangaline.cl', 'Banco Estado', 'Cuenta Corriente', '90271019393', '2022-07-31 15:56:10', '2022-07-31 15:56:10', NULL),
(17, 'Pamela Murtilla', 'https://www.instagram.com/pamelamurtilla/', 'La tienda ofrece variados productos con diseños e ilustraciones originales tales como cuadernos, planners, tacos, tazones, marcapáginas e imanes, entre otros. El estilo de la artista se define clásico infantil, pero con enfoque al público adulto. Personajes como Amelia Coneja y Las Ratas, que dan vida a los frecuentes cómics del Instagram de la ilustradora, estarán presentes así como otras pequeñas criaturas que evocan los cuentos de antaño e invitarán al público a sumergirse en un pequeño mundo de fantasía donde ratoncitos y variados animalitos chilenos habitan felices.				', 1, 0, 'Pamela Fierro', 'pamemurtilla@gmail.com', '981847439', 'Pamela Fierro Albornoz\r\nMariano Avello Henriquez																					', 'Pamela Murtilla Spa', '77437059-5', 'Otras actividades de venta por menor no realizadas en comercio, puestos de venta o mercados N.C.P., Otras actividades especializadas de diseño N.C.P.', 'Venta de papelería, artículos de hogar, ilustraciones, otros.', 'Pamela Andrea Fierro Albornoz', '17616652-5', 'pamemurtilla@gmail.com', 'Banco Estado', 'Cuenta Vista', '902-7-047725-8', '2022-07-31 17:23:57', '2022-07-31 17:23:57', NULL),
(18, 'Placeba - Tavo Drakk', 'https://www.instagram.com//placebailustra https://www.instagram.com//tavo_drakk', 'Hola, somos Tavo Drakk y Placeba, dos pintores e ilustradores autodidactas de Valdivia, sector Costero. \r\nTavo Drakk trata de ilustraciones de mundos y entes biorganicos surrealistas, mezclando la botánica, parajes inhóspitos, naturaleza muerta, técnicas entre acrílicos, dotwork, black and grey y demás. \r\nPlaceba retrata la belleza de la mujer en sus múltiples fascetas, desde luchas sociales, feministas, ecológicas, hasta sus trabajos de alienígenas femeninas y seres fantásticas de otras dimensiones. Las técnicas que ocupa son desde la acuarela, siendo su predilecta, a técnicas mixtas con lápices, tiralineas, crayones, etc. \r\nNuestro trabajo lo plasmamos en diversos Fanzines	de nuestra autoría, marcapáginas, prints, posters, poleras serigrafiadas, estuches, chapitas, croqueras, planners anuales, calendarios, calcetines, llaveros, tazones, monederos, aros, accesorios y mucho más.\r\n\r\nHemos participado en Ferias de Arte e Ilustración en Valdivia y la región de los Ríos, Expos, Ferias de Injuv, trabajos con Senda Previene, SERNAMEG, Municipalidad de Valdivia y Fomento-Dideco. \r\n\r\nQuedan invitad@s a revisar nuestras rrss.					', 1, 0, 'Daniela Victoria Parra Bobadilla ', 'dani.parrab@gmail.com', '982004285', 'Daniela Victoria Parra Bobadilla																					', '18.775.922-6', 'No tengo rut empresa', 'Ilustración y Accesorios ', 'Prints, posters, agendas, planners, aros, tazones, llaveros, chapitas, stickers, poleras, estuches, croqueras, imanes, calendarios, monederos', 'Daniela Victoria Parra Bobadilla ', '18775922-6', 'dani.parrab@gmail.com', 'Banco Estado', 'Cuenta RUT', '18775922', '2022-07-31 20:57:38', '2022-07-31 20:57:38', NULL),
(19, 'Editorial Nootrac', 'www.instagram.com/carlosballodibujante', 'Editorial de libros, cómics, boleras, chapitas, pins.', 1, 0, 'Carlos Balló', 'tresgatosnegros@gmail.com', '+56972850858', '																					Carlos Balló, Yenny Quiroz, Martin López Balló', 'Editorial Nootrac SpA', '76984019-2', 'Editorial Universal de libros, cómics, poesía', 'LIbros, cómics, poleras, tazones, chapitas, pins', 'Carlos Felipe Alejandro López Balló', '12881532-5', 'tresgatosnegros@gmail.com', 'Banco Estado', 'Cuenta RUT', '12881532', '2022-08-01 14:23:57', '2022-08-01 14:23:57', NULL),
(20, 'NECROSCOPIO', 'https://www.instagram.com/_necroscopio_/', 'Somos una marca de diseño, ilustración y confección de productos y accesorios, como cómics, libros, fanzines, tazas, llaveros, posters, entre otros productos, bisutería gótica artesanal, muñecas pintadas a mano. Todos relacionados con el terror y el estilo oscuro/dark.								', 1, 0, 'Débora Castillo Astorga', 'necroscopio.ltda@gmail.com', '+56965998544', 'Débora Castillo Astorga, Luis naranjo Rojas.																	', 'Diseño Gráfico Castillo Naranjo Ltda. (NECROSCOPIO)', '76.700.939-9', 'DISEÑO GRÁFICO, PUBLICIDAD Y ACTIVIDADES DE IMPRESIÓN', 'Diseño e ilustraciones en distintos formatos, soportes, productos y accesorios.', 'Débora Castillo Astorga', '16408855-3', 'necroscopio.ltda@gmail.com', 'Banco Estado', 'Cuenta RUT', '16408855', '2022-08-01 18:45:22', '2022-08-01 18:45:22', NULL),
(21, 'HORA DEL RECREO', 'www.instagram.com/jugueteriahoradelrecreo ', 'Tienda valdiviana dedicada a los Juegos de mesa, Didácticos y puzzles para todas las edades!										', 1, 0, 'Cesar Rivera', 'cesarriverabustos@gmail.com', '+56959477632', '					Cesar y vicente																', 'Cesar Rivera Bustos', '15.559.290-7', 'Jugueteria ', 'Juegos se mesa, puzzles y juegos didacticos', 'Cesar Rivera Bustos ', '15559290-7', 'Cesarriverabustos@gmail.com', 'Banco Estado', 'Cuenta RUT', '15559290', '2022-08-02 08:05:53', '2022-08-02 08:05:53', NULL),
(22, 'Cuadernísimo', 'https://www.instagram.com/cuadernisimo/', 'Cuadernísimo es la editorial a cargo de los cómics de humor/aventuras “Salchi Cómic” y “Salchi Cómic en el Mundo de los Sueños”, y también de la saga de horror/policial “La Grieta” (Vol 1, 2 y 3). Desde 2018 ha publicado sus cinco títulos destacando por una edición robusta en su encuadernación, una fuerte presencia del color y público transversal, el cual ha premiado estas entregas en varias ocasiones.\r\nSalchi Cómic fue ganador del Premio FIC 2019: mejor cómic de humor. La Grieta Vol.I obtuvo el Premio Forestal 2018: mejor novela gráfica chilena, Premio FIC 2019: mejor cómic del año y Premio FIC: mejor guión de cómic. La Grieta Vol.II obtuvo el Premio FIC 2020: mejor guión de cómic. La Grieta Vol.III, su más reciente publicación, fue ganadora del Fondo del Libro 2022.\r\nDe quedar seleccionados en el festival, Christian Luco (autor de los cómics), estará presente durante todas las jornadas quedando a disposición del público que quiera conocer al creador de las obras y también a actividades que se desarrollen en el festival.						', 1, 0, 'Christian Luco Duarte', 'contacto@cuadernisimo.cl', '+569 9238 26', 'Christian Luco\r\nMaría José Meneses																					', 'Luco & Meneses Estudio de diseño Ltda.', '76168013-7', 'Servicios de diseño, editorial, informática y comercializadora de impresos', 'Cómics, ilustraciones y cuadernos', 'LUCO Y MENESES ESTUDIO DE DISENO LIMITADA', '76168013-7', 'contacto@cuadernisimo.cl', 'Banco Estado', 'Cuenta Vista', '001-7-948578-8', '2022-08-02 09:29:33', '2022-08-02 09:29:33', NULL),
(23, 'MangaLine Chile', 'https://www.instagram.com/mangalinecl/', 'Somos la primera editorial chilena en licencia manga japonés y adaptarlo al público chileno.	MangaLine Chile está dirigido por el equipo editorial de Provincianos Editores, quienes, ante la necesidad urgente de crear una editorial de manga desde y para Chile, deciden unirse a los equipos MangaLine Ediciones, con una trayectoria de más de 20 años en el mercado del manga en español, que ha aportado un nuevo enfoque al mercado y apoyado el surgimiento de nuevos proyectos en más de cinco países.\r\n\r\nCreemos en la importancia de generar una industria local, que publique productos personalizados, con especial cuidado por la edición, cercanía con los lectores y pasión por el manga. 										', 1, 0, 'Nicolás Meneses', 'nicolas.buin@gmail.com', '+56936002270', 'Nicolás Meneses y Catalina Herrera																					', 'Provincianos Editores Limitada', '77.525.718-0', 'Edición de libros', 'Edición de libros', 'Provincianos Editores Limitada', '77525718-0', 'ventas.provincianos@gmail.com', 'Banco Estado', 'Cuenta Corriente', '90271019393', '2022-08-02 09:38:58', '2022-08-02 09:38:58', NULL),
(24, 'Camilustrap', 'https://www.instagram.com/camilustrap/', 'Camilustrap, venta de ilustraciones, stickers, prints, tiras comicas, fanzines y marcapaginas.\r\nAleginger_art, venta de llaveros, chapitas, marcapaginas, libretas con diseños propios, stickers e ilustraciones.										', 1, 0, 'Camila Cubillos Pujol', 'camilustra.pujol@gmail.cm', '+56950772767', 'Camila Cubillos Pujol, Alejandra Mansilla Vega, Ignacio Aburto 																					', 'Camila Mariel Cubillos Pujol', '18.502.371-0', 'Ilustración', 'Ilustraciones', 'Camila Mariel Cubillos Pujol', '18502371-0', 'camila.1993.cubillos@gmail.com', 'Banco Estado', 'Cuenta RUT', '18502371', '2022-08-02 11:28:46', '2022-08-02 11:28:46', NULL),
(25, 'BROTHERHOOD COMICS', 'https://www.instagram.com/brotherhoodcomics', '			Conjunto de dibujantes de cómics e ilustradores.							', 1, 0, 'Erich Rivera', 'erich.rh86@yahoo.cl', '972592747', '			Rafael Delgado, Matias Soto, Erich Rivera, Bianco Flores, Fernando Llanos.																		', 'Erich Rivera', '16563153-6', 'ACTIVIDADES DE ARTISTAS REALIZADAS DE FORMA INDEPENDIENTE: ACTORES, MUSICOS, ESCRITORES, ENTRE OTROS.', 'Ilustración, comics.', 'Erich Rivera', '16563153-6', 'erich.rh86@yahoo.cl', 'Banco Estado', 'Cuenta RUT', '16563153', '2022-08-02 18:09:39', '2022-08-02 18:09:39', NULL),
(26, 'ChariZtation Games ', 'https://www.instagram.com/chariztation_games/', 'Tienda de videojuegos y accesorios, principalmente de nintendo y playstation. También comentamos nuevos estrenos de videojuegos y conversamos acerca de ello.', 1, 0, 'Aracelli Paris Salvatierra', 'aracelli.pariss@gmail.com', '979165880', 'Aracelli Paris, Juan Pablo Aravena													', 'Aracelli Paris Salvatierra', '201280834', 'Venta de accesorios de videojuegos', 'Accesorios de videojuegos y videojuegos físicos', 'Aracelli Estefania Paris Salvatierra', '20128083-4', 'aracelli.pariss@gmail.com', 'Banco de Chile', 'Cuenta Corriente', '004463207006', '2022-08-02 18:14:17', '2022-08-02 18:14:17', NULL),
(27, 'Rada x Falla', 'https://www.instagram.com/radamandy_s/', '@falla3terea: Hago ilustraciones originales y fanart con colores vibrantes, mi estilo se caracteriza por ser más del estilo cute y disidente.\r\n\r\n@radamandy_s: Dibujitos bonitos, monos raros, cómics para liberar mi mente y muchas ratas gays. Me gusta escribir historias y transmitir algo siempre con lo que hago. ', 1, 0, 'Raiko Gacitúa', 'radamandys.contacto@gmail.com', '+56967621059', 'Raiko Gacitúa, Aike Osorio															', 'Almendra Gacitúa', '20657430-5', 'Otras actividades de servicios personales', 'Ilustraciones, libretas, stickers, fanzines, productos hechos a mano de porcelana', 'Almendra Gacitúa', '20657430-5', 'aranxamardones@gmail.com', 'Banco Estado', 'Cuenta RUT', '20657430', '2022-08-02 18:57:02', '2022-08-02 18:57:02', NULL),
(28, 'ILUSION3D', 'https://www.instagram.com/ilusion3d_gadgets/?hl=es-la', 'Somos @ilusion3d nos centramos en la cultura geek y elaboramos mates personalizados, figuras de colección, figuras en escala 1:1, imánes, aros y más. Todo lo anterior desarrollado exclusivamente con impresoras 3D y pintados a mano con aerógrafo y pincel. Básicamente hacemos personajes de animé y trabajamos con impresión 3d. 										', 1, 0, 'PAULA FRITZ', 'PAULAMAKARENNAFRITZ@GMAIL.COM', '977762881', '	AMIR SELIM SADE COLOMA, PAULA MAKARENNA FRITZ CASTILLO																				', 'SADE Y FRITZ SPA', '77187483-5', 'COMPRA Y VENTA DE ARTICULOS DE IMPRESION', 'ARTICULOS DE IMPRESION 3D', 'SADE Y FRITZ SPA', '77187483-5', 'CONTACTO@ILUSION3D.CL', 'Banco Estado', 'Cuenta Vista', '82571891171', '2022-08-02 19:06:00', '2022-08-02 19:06:00', NULL),
(29, 'LIBRERIA ITINERANTE ARBOL ROJO', '@LIBRERIA_ARBOLROJO, instagram', 'Librería Árbol Rojo es de esencia itinerante, se mueve por distintos espacios de la Región de los Ríos y Los Lagos, buscando acercar el mundo de los libros a diferentes familias. Nos especializamos en literatura infantil y juvenil, sin abandonar los clásicos literarios, destacamos: narrativa gráfica, comics, libro álbum, novelas, poesía, interculturalidad, cuentos, misceláneos, entre muchos otros.\r\n\r\nAdemás desde este año 2022 comenzamos a trabajar con diferentes ilustradores independientes nacionales, con sus fanzine y libros han permitido enriquecer nuestro catálogo. \r\n\r\nContamos con una naciente línea de papelería artesanal: libretas para niños y adultos, cuadernos y agendas perpetuas.\r\n\r\nLlevamos trabajando en la industria (ecosistema) del Libro desde hace 11 años y de forma itinerante hace 6 años.\r\n\r\nA raíz de la crisis sanitaria mundial, Librería Árbol Rojo debe comenzar a cambiar su forma de difundir y acerca los libros a las familias del sur de Chile, por ello se implementa la creación de las RR.SS. Instagram y Facebook, y una emergente página web www.arbolrojo.cl, permitiéndonos mantener el vínculo y desarrollar nuevas formas de difusión y mediación de nuestros queridos libros.								', 2, 0, 'Paola Ojeda Varas', 'libreriaarbolrojo@gmail.com', '954071357', 'RODRIGO MIRANDA VERA\r\nUBERLINDA VARAS VERA\r\nGABRIEL ECHEVERRIA QUIERO	\r\nPAOLA OJEDA VARAS														', 'Paola Ojeda Varas', '157685015', 'venta de libros al por menor', 'libros ', 'PAOLA ANDREA OJEDA VARAS', '15768501-5', 'libreriaarbolrojo@gmail.com', 'Banco Estado', 'Cuenta RUT', '15768501', '2022-08-02 20:03:18', '2022-08-02 20:03:18', NULL),
(30, 'La Guarida de Burnaby', 'https://www.instagram.com/guarida_de_burnaby/', '15 años de cultura Geek en la Región de los Ríos, encuentra juegos de mesa,. rol, accesorios, comics, mangas, pinturas para miniaturas ¡y mucho más! Ven a conocernos en pleno centro de Valdivia. #juegaburnaby #valdivialudica', 0, 1, 'Juan Salazar', 'guaridadeburnaby@gmail.com', '956908925', 'Cris Mellado\r\nSebastián Sanzana\r\nSebastián Weysmaster\r\nCarla Belmar\r\nJuan Salazar													', 'La Guarida de Burnaby', 'La Guarida de Burnab', 'Jugueteria', 'Juegos de mesa', 'Juan Eduardo Salazar Acevedo', '13771264-4', 'guaridadeburnaby@gmail.com', 'Banco Estado', 'Cuenta Vista', '72170321490', '2022-08-03 08:32:45', '2022-08-03 08:32:45', NULL),
(31, 'Jokette - Tienda de Anime', 'https://www.instagram.com/jokette.tienda/', '					Tienda de anime con productos fabricados como poster, chapitas, stickers, estampados de poleras, tazones, billeteras, cojines, etc. (no fanart), accesorios importados, figuras y snack asiáticos (con sus respectivas etiquetas de vencimiento e información nutricional) como pockys, ramen, mochis, gaseosas, dulces y salados. 	', 1, 1, 'Katerine Vivanco', 'jokette.valdivia@gmail.com', '998609009', '			Katerine Vivanco Flores, Pablo Meza Meza																		', 'Katerine Vivanco', '163202514', 'Tienda de Anime', 'Papelería, estampados y accesorios', 'Katerine Vivanco Flores', '16320251-4', 'malvistah@gmail.com', 'Banco Ripley', 'Cuenta Vista', '4043241912', '2022-08-03 15:32:02', '2022-08-03 15:32:02', NULL),
(32, 'The Fool', 'www.thefool.cl', 'Soy escritor, dibujante y editor del comic de artes marciales mixtas SOY PELEADOR.\r\nPara éste evento espero estar estrenando el capitulo 5 del mismo.', 1, 0, 'Felipe Montecinos', 'felipethefool@gmail.com', '987283117', 'Felipe Montecinos, Mylena Ibarra																					', 'PEDRO FELIPE MONTECINOS GONZALEZ', '16124080k', 'DISEÑO', 'OTRAS ACTIVIDADES ESPECIALIZADAS DE DISEÑO', 'PEDRO FELIPE MONTECINOS GONZALEZ', '16124080-K', 'felipethefool@gmail.com', 'Banco de Chile', 'Cuenta Corriente', '101-08844-02', '2022-08-03 16:32:09', '2022-08-03 16:32:09', NULL),
(33, 'Palette Colectivo', 'https://www.instagram.com/colectivo_palette', '		Colectivo de ilustradorxs de la V región. Integrado por mujeres y disidencias, todxs enfocados en el arte y desarrollo de la narrativa gráfica en Viña del Mar. Sus integrantes son Roman Castro, ilustrador y creador de cómics; Valentina Lopez, estudiante de artes; Aylin Paredes, ilustradora profesional y Constanza Olmedo, docente de la carrera de ilustración de Arcos, dibujante de cómics y ganadora del premio Pepo año 2020 al mejor fanzine. 								', 1, 0, 'Constanza Olmedo García', 'conyejo@gmail.com', '996396520', 'Constanza Olmedo, Aylin Paredes, Valentina Lopez, Daniel Ariz, Roman Castro (Nombre Social). 																					', 'Constanza Olmedo', '17673023-4', 'Ilustración (persona en segunda categoría) ', 'Papelería y artesanía', 'Constanza Paola Olmedo García', '17673023-4', 'psi.co.olmedo@gmail.com', 'Banco de Chile', 'Cuenta Vista', '00-012-32202-69', '2022-08-03 20:03:27', '2022-08-03 20:03:27', NULL),
(34, 'Ethan & Franko Artshop', 'https://www.instagram.com/frankothelion/', 'Somos tres Ilustradores y Dibujantes de cómics, Jade Gonzalez, Cristóbal Jofré y Érika Pino.\r\nEntre nuestras obras se encuentran Ethan Hound, Principe Yu, Tomas, Franko, El Otro Plano, La noche de los Invunches, entre otras. \r\nAdemás de los libros, nuestro trabajo ilustrado lo presentamos en distintos formatos, como libretas, impresiones, tacos de notas, pins, llaveros, entre otras cosas.', 0, 1, 'Erika Pino Burgos', 'Erikapino.burgos@gmail.com', '+56966249679', '		Jade González, Cristóbal Jofré, Érika Pino																			', 'Erika Pino Burgos', '15888005-9', 'persona natural', 'Papelería', 'Erika Pino Burgos', '15888005-9', 'Erikapino.burgos@gmail.com', 'Banco Santander', 'Cuenta Vista', '001708379197', '2022-08-04 15:56:42', '2022-08-04 15:56:42', NULL),
(35, 'Alma de Brujo', 'https://www.instagram.com/alma_de_brujo/', '			Alma de Brujo es un comic basado en la mitología chilena y la cosmovisión de nuestros pueblos originarios, todo esto puesto en lupa de lo que actualmente es Chile. Escrito por Rigo Padilla y dibujado por Empivi. También contamos con productos de merchandising relacionados al comic.							', 1, 0, 'Rigoberto Salatiel Padilla Velozo', 'rigobertopadillavelozo89@gmail.com', '+56972572099', '		Rigoberto Padilla																			', 'Aukan Creaciones SPA', '77.524.569-7', 'venta al por menor de libros en comercio especializado ', 'Comics, poleras, poster y stickers ', 'Rigoberto Salatiel Padilla Velozo', '17044791-3', 'rigobertopadillavelozo89@gmail.com', 'Banco Estado', 'Cuenta RUT', '17044791', '2022-08-05 23:20:57', '2022-08-05 23:20:57', NULL),
(36, 'Arcano IV', '@arcanoiv', '		Editorial dedicada a la narrativa gráfica.								', 0, 1, 'Claudia Vial', 'facturacion@arcanoiv.cl', '957264025', '		Claudia Vial.\r\n																		', 'Editorial arcano iv limitada', '76.063.296-1', 'edición de libros', 'venta al por menor de libros', 'Editorial Arcano iv limitada', '76063296-1', 'facturacion@arcanoiv.cl', 'Banco Bci', 'Cuenta Corriente', '81829329', '2022-08-07 21:44:41', '2022-08-07 21:44:41', NULL),
(37, 'Arte Nostro Valdivia', 'www.artenostro.cl', 'Empresa nacional importadora directa de materiales relacionados con el arte, el diseño, las manualidades y lapicería; particularmente de marcas Alemanas como por ejemplo Schmincke, Da vinci, AMi, Lamy, Brunnen de Lituania SMLT, de USA Daniel Smith, de Rusia Nevskaya Palitra, de España Lefrik y de Republica Checa Kooh-i-noor Hardtmuth.', 1, 0, 'Humberto Reyes Obando', 'valdivia@artenostro.cl', '+56966194140', 'Humberto																					', 'Comercial Arte Nostro Ltda (Sede Valdivia)', '76191508-8', 'Venta al por menor de artículos de escritorio.', 'Ventas de insumos para bellas artes', 'Comercial Arte Nostro Ltda', '76191508-8', 'valdivia@artenostro.cl', 'Banco BICE', 'Cuenta Corriente', '02017474', '2022-08-08 11:04:42', '2022-08-08 11:04:42', NULL),
(38, 'Arte en papel', 'www.instagram.com/arteenpapel.cl', 'Tienda dedicada a la venta de papelería hecha a mano de anime y Kpop.\r\nVendemos libretas, cuadernos, stickers, pines, mini chapitas, vinilos, entre otros, algunos productos son hechos a base de diseños e ilustraciones propias. ', 1, 0, 'Paola Mena Schneider', 'paolamn21@gmail.com', '+56996173336', 'Paola Mena Schneider, Sebastián Mena Schneider																					', 'Arte en papel SpA', '77.306.941-7', 'Fabricación de otros artículos de papel y cartón', 'Papelería hecha a mano', 'Paola Alejandra Mena Schneider', '18590159-9', 'paolamn21@gmail.com', 'Banco Estado', 'Cuenta RUT', '18590159', '2022-08-08 14:36:02', '2022-08-08 14:36:02', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `newsletter_users`
--
ALTER TABLE `newsletter_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `security_tokens`
--
ALTER TABLE `security_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stands`
--
ALTER TABLE `stands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `newsletter_users`
--
ALTER TABLE `newsletter_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `security_tokens`
--
ALTER TABLE `security_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `stands`
--
ALTER TABLE `stands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
