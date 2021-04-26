-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2021 a las 04:42:36
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `booking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caracteristicas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `caracteristicas`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Standard', '<p><strong>Magnolia Hotel </strong>dispone de habitaciones tipo <strong>Standard</strong>, de 42 m2, ideadas para el descanso y la tranquilidad, con cama de matrimonio tamaño king size (o dos individuales), escritorio, baño completo con bañera y terraza. Además dispone también de <strong>habitaciones triples</strong> (edad mínima 15 años, compartiendo con 2 adultos).<br>Las <strong>habitaciones Standard</strong> están situadas en las 1ª, 2ª y 3ª plantas.</p><ul><li>Carta de almohadas</li><li>Conexión a Internet (Wifi y cable)</li><li>Aire Acondicionado/calefacción</li><li>TV con antena parabólica</li><li>Caja fuerte (5€/día)</li><li>Servicio de habitaciones 14 horas (con cargo 10€/servicio)</li><li>Secador de pelo, neceser</li><li>Superficie de la habitación: 42m2</li><li>Carta de fragancias: escoge el aroma de tu habitación a tu llegada al hotel</li><li>Las habitaciones Standard disponen de unas habitaciones exclusivas, las <strong>Standard Premium</strong>, aquellas con las mejores vistas en esta categoría, situadas en la 4ª, 5ª y 6ª planta.</li></ul>', 125.00, '2021-04-22 03:33:19', '2021-04-22 04:05:36'),
(3, 'Superior', '<p><strong>Magnolia Hotel</strong> dispone de<strong> habitaciones tipo Superior</strong>, de <strong>42 m2</strong>, exquisitamente decoradas en un estilo minimalista de muebles de diseño y colores claros y luminosos. Todas ellas cuentan con amplio salón con escritorio y zona de dormitorio, gran cuarto de baño completo con ducha de hidromasaje y terraza con vistas laterales al mar.<br>Las habitaciones de tipo superior están <strong>situadas en la 4ª, 5ª y 6ª planta del hotel</strong>.</p><ul><li>Carta de almohadas</li><li>Conexión a Internet (WiFi y cable)</li><li>Aire Acondicionado/calefacción</li><li>TV con antena parabólica</li><li>Caja fuerte (5€/día)</li><li>Servicio de habitaciones 14 horas (con cargo 10€/servicio)</li><li>Secador de pelo y neceser</li><li>Carta de fragancias: escoge el aroma de tu habitación a tu llegada al hotel</li><li>En las Habitaciones Superiores disponemos además de unas habitaciones con las mejores vistas al mar: las <strong>Habitaciones Superior Premium</strong>. Están estratégicamente situadas con unas <strong>vistas privilegiadas al Mediterráneo</strong>.</li></ul>', 160.00, '2021-04-22 04:13:10', '2021-04-22 04:13:10'),
(4, 'Club', '<p>El Magnolia Hotel dispone de 2 tipos de habitación extra con<strong> servicios exclusivos</strong>: las denominadas <strong>CLUB y POOL</strong>.</p><p>Los servicios exclusivos de las Habitaciones Club del Hotel Magnolia son: toallas de playa en la habitación, amenities Bulgari, zapatillas, detalle de bienvenida, reserva parking (pago en recepción), bolsa de playa.</p><ul><li>Carta de almohadas</li><li>Conexión a Internet (WiFi y cable)</li><li>Aire Acondicionado/calefacción</li><li>TV con antena parabólica</li><li>Caja fuerte (5€/día)</li><li>Servicio de habitaciones 14 horas (con cargo 10€/servicio)</li><li>Secador de pelo,&nbsp;neceser</li><li><strong>Superficie de la habitación: 58,8m2</strong></li><li>Carta de fragancias: escoge el aroma de tu habitación a tu llegada al hotel</li><li>Las <strong>habitaciones Club Estándar</strong> estan situadas en la 1ª, 2ª y 3ª planta del hotel. Disponen de una gran terraza esquinera con hamacas y de <strong>bañera</strong> en el cuarto de baño.</li><li>Las <strong>habitaciones</strong> <strong>Club Superior</strong> estan situadas en las plantas altas del hotel (<strong>4ª, 5ª y sexta planta</strong>). Disponen de una gran terraza esquinera con hamacas y de <strong>ducha de hidromasaje</strong> en el cuarto de baño.</li></ul>', 230.00, '2021-04-22 04:15:26', '2021-04-22 04:15:26'),
(5, 'Pool', '<p>Nuestro Hotel en Salou dispone de 2 tipos de habitación extra con <strong>servicios exclusivos</strong>: las denominadas <strong>CLUB y POOL</strong>.</p><p>Las Habitaciones Pool son habitaciones con amplias terrazas y las mejores vistas al mar. Sus servicios exclusivos son: servicio privado de hamacas y toallas de playa en habitación, amenities Bulgari, zapatillas, detalle de bienvenida, obsequio botella aceite virgen extra La Boella, plaza parking incluida, bolsa de playa.</p><ul><li>Carta de almohadas</li><li>Conexión a Internet (WiFi y cable)</li><li>Aire Acondicionado/calefacción</li><li>TV con antena parabólica</li><li>Caja fuerte (5€/día)</li><li>Servicio de habitaciones 14 horas (con cargo 10€/servicio)</li><li>Secador de pelo y&nbsp;neceser</li><li><strong>Superficie de la habitación: 58,8m2</strong></li><li>Carta de fragancias: escoge el aroma de tu habitación a tu llegada al hotel</li><li>Las habitaciones <strong>Pool Estándar</strong> estan situadas en al 2ª y 3ª planta del hotel con vistas a la piscina. Disponen de una gran terraza esquinera con servicio privado de hamacas y de bañera en el cuarto de baño.</li><li>Las habitaciones <strong>Pool Superior</strong> estan situadas en las plantas altas del hotel (4ª, 5ª y 6ª planta) ofreciendo <strong>las mejores vistas al mar del hotel</strong>. Disponen de una gran terraza esquinera con servicio privado de hamacas y de una increible ducha de hidromasaje en el cuarto de baño.</li></ul>', 300.00, '2021-04-22 04:17:52', '2021-04-22 04:17:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poblacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `poblacion`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Alfonso Dominguez Campos', 'Reus', '654343212', 'alfonsodominguez@gmail.com', '2021-04-22 13:25:56', '2021-04-22 14:13:21'),
(2, 'Maria Perez Tarda', 'Cervera', '656545444', 'maria@gmail.com', '2021-04-22 13:27:43', '2021-04-22 13:27:43'),
(3, 'Santos Velazquez Mur', 'Gijon', '657890123', 'santos@gmail.com', '2021-04-22 13:29:08', '2021-04-22 13:29:08'),
(4, 'Susana Fillol Mir', 'Zaragoza', '657899000', 'susana@gmail.com', '2021-04-22 13:30:10', '2021-04-22 13:30:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galerias`
--

CREATE TABLE `galerias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galerias`
--

INSERT INTO `galerias` (`id`, `nombre`, `url`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'Standard', '/storage/imagenes/fjdgvbyYvsc4JXBBvbljW51KBTYyTf9S7ontZ0Ma.jpg', 1, '2021-04-22 12:13:11', '2021-04-22 12:13:11'),
(2, 'Superior', '/storage/imagenes/FNo0OTfrKEQGkWbDomolYSu2euEqafUSMxzSBxEW.jpg', 3, '2021-04-22 12:19:22', '2021-04-22 12:19:22'),
(3, 'Club', '/storage/imagenes/kGyPXbsfgeeHL2ec1TPzkTEC3d43DbgKeEGAUosa.jpg', 4, '2021-04-22 12:19:49', '2021-04-22 12:19:49'),
(4, 'Pool', '/storage/imagenes/S6cf5a1LZiurRc7h2LB0aWQcOD7y1OwcOgyh0j1x.jpg', 5, '2021-04-22 12:20:16', '2021-04-22 12:20:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_22_045257_create_categorias_table', 2),
(5, '2021_04_22_062243_create_galerias_table', 3),
(6, '2021_04_22_143043_create_clientes_table', 4),
(7, '2021_04_22_161921_create_reservas_table', 5),
(8, '2021_04_24_061432_create_permission_tables', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha_llegada` date NOT NULL,
  `fecha_salida` date NOT NULL,
  `categoria_id` bigint(20) UNSIGNED NOT NULL,
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `fecha_llegada`, `fecha_salida`, `categoria_id`, `cliente_id`, `created_at`, `updated_at`) VALUES
(1, '2021-04-09', '2021-04-11', 1, 1, '2021-04-23 04:38:57', '2021-04-23 04:38:57'),
(2, '2021-04-08', '2021-04-11', 3, 2, '2021-04-23 04:39:36', '2021-04-23 12:44:13'),
(3, '2021-04-09', '2021-04-11', 4, 3, '2021-04-23 04:40:01', '2021-04-23 04:40:01');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_telefono_unique` (`telefono`),
  ADD UNIQUE KEY `clientes_email_unique` (`email`);

--
-- Indices de la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galerias_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservas_categoria_id_foreign` (`categoria_id`),
  ADD KEY `reservas_cliente_id_foreign` (`cliente_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `galerias`
--
ALTER TABLE `galerias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `galerias`
--
ALTER TABLE `galerias`
  ADD CONSTRAINT `galerias_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservas_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
