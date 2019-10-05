-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-06-2019 a las 11:05:17
-- Versión del servidor: 10.2.25-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `t2webtilia_essalud_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hora` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lugar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` tinyint(1) NOT NULL DEFAULT 1,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `activities`
--

INSERT INTO `activities` (`id`, `nombre`, `fecha`, `descripcion`, `hora`, `lugar`, `descripcion2`, `banner`, `autor`, `orden`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Exposición: “La historia de la Caja Nacional del Seguro Social”', '2019-05-29', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '05:30 pm', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex quam, feugiat in augue sit amet, vulputate pellentesque augue. Morbi ultrices tincidunt massa, eget ultricies ex consequat ut. Sed at augue in odio convallis rutrum. Quisque vestibulum sit amet sem ut sagittis. Nunc ac interdum ligula, a pulvinar eros. Proin laoreet erat id ante auctor, et sodales quam tincidunt. Duis ac tincidunt nisl. Nunc vel augue sem. Mauris ante risus, rhoncus nec eros id, mollis dictum felis. Donec vel rutrum purus, convallis pretium erat. Praesent fermentum ornare felis, eu imperdiet turpis vestibulum sed. Vestibulum ut purus tellus. Vivamus bibendum luctus egestas. Vivamus interdum, elit id lacinia suscipit, est felis luctus nulla, varius fermentum libero arcu et nibh.', 'actividades/May2019/f1fG6KP0SMRWpN1TT7So.png', 'Eric Alán Peña Sánchez', 1, 1, NULL, '2019-06-01 01:52:02'),
(2, 'Conversatorio: “Beneficios de la biblioterapia”', '2019-06-20', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '05:30 pm', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex quam, feugiat in augue sit amet, vulputate pellentesque augue. Morbi ultrices tincidunt massa, eget ultricies ex consequat ut. Sed at augue in odio convallis rutrum. Quisque vestibulum sit amet sem ut sagittis. Nunc ac interdum ligula, a pulvinar eros. Proin laoreet erat id ante auctor, et sodales quam tincidunt. Duis ac tincidunt nisl. Nunc vel augue sem. Mauris ante risus, rhoncus nec eros id, mollis dictum felis. Donec vel rutrum purus, convallis pretium erat. Praesent fermentum ornare felis, eu imperdiet turpis vestibulum sed. Vestibulum ut purus tellus. Vivamus bibendum luctus egestas. Vivamus interdum, elit id lacinia suscipit, est felis luctus nulla, varius fermentum libero arcu et nibh.', 'actividades/May2019/f1fG6KP0SMRWpN1TT7So.png', NULL, 1, 1, NULL, '2019-05-31 04:51:57'),
(3, 'Exposición de libros históricos', '2019-06-11', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '05:30 pm', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex quam, feugiat in augue sit amet, vulputate pellentesque augue. Morbi ultrices tincidunt massa, eget ultricies ex consequat ut. Sed at augue in odio convallis rutrum. Quisque vestibulum sit amet sem ut sagittis. Nunc ac interdum ligula, a pulvinar eros. Proin laoreet erat id ante auctor, et sodales quam tincidunt. Duis ac tincidunt nisl. Nunc vel augue sem. Mauris ante risus, rhoncus nec eros id, mollis dictum felis. Donec vel rutrum purus, convallis pretium erat. Praesent fermentum ornare felis, eu imperdiet turpis vestibulum sed. Vestibulum ut purus tellus. Vivamus bibendum luctus egestas. Vivamus interdum, elit id lacinia suscipit, est felis luctus nulla, varius fermentum libero arcu et nibh.', 'actividades/May2019/f1fG6KP0SMRWpN1TT7So.png', 'Nilo Kenji Alex Dávila', 1, 1, NULL, '2019-05-31 04:51:49'),
(4, 'Taller: Estructura e Implementación del Sistema Institucional de Bibliotecas (SIB)', '2019-07-15', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '05:30 pm', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex quam, feugiat in augue sit amet, vulputate pellentesque augue. Morbi ultrices tincidunt massa, eget ultricies ex consequat ut. Sed at augue in odio convallis rutrum. Quisque vestibulum sit amet sem ut sagittis. Nunc ac interdum ligula, a pulvinar eros. Proin laoreet erat id ante auctor, et sodales quam tincidunt. Duis ac tincidunt nisl. Nunc vel augue sem. Mauris ante risus, rhoncus nec eros id, mollis dictum felis. Donec vel rutrum purus, convallis pretium erat. Praesent fermentum ornare felis, eu imperdiet turpis vestibulum sed. Vestibulum ut purus tellus. Vivamus bibendum luctus egestas. Vivamus interdum, elit id lacinia suscipit, est felis luctus nulla, varius fermentum libero arcu et nibh.', 'actividades/May2019/f1fG6KP0SMRWpN1TT7So.png', NULL, 1, 1, NULL, '2019-05-31 04:52:07'),
(5, 'Taller: “Sistema de Gestión de Bibliotecas – Koha”', '2019-07-15', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '05:30 pm', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex quam, feugiat in augue sit amet, vulputate pellentesque augue. Morbi ultrices tincidunt massa, eget ultricies ex consequat ut. Sed at augue in odio convallis rutrum. Quisque vestibulum sit amet sem ut sagittis. Nunc ac interdum ligula, a pulvinar eros. Proin laoreet erat id ante auctor, et sodales quam tincidunt. Duis ac tincidunt nisl. Nunc vel augue sem. Mauris ante risus, rhoncus nec eros id, mollis dictum felis. Donec vel rutrum purus, convallis pretium erat. Praesent fermentum ornare felis, eu imperdiet turpis vestibulum sed. Vestibulum ut purus tellus. Vivamus bibendum luctus egestas. Vivamus interdum, elit id lacinia suscipit, est felis luctus nulla, varius fermentum libero arcu et nibh.', 'actividades/May2019/f1fG6KP0SMRWpN1TT7So.png', 'Lilian Lizeth Rojas Mendoza', 1, 1, NULL, '2019-05-31 04:52:17'),
(6, 'Taller: “Biblioteca Virtual del Seguro Social de Salud – ESSALUD”', '2019-08-19', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '05:30 pm', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex quam, feugiat in augue sit amet, vulputate pellentesque augue. Morbi ultrices tincidunt massa, eget ultricies ex consequat ut. Sed at augue in odio convallis rutrum. Quisque vestibulum sit amet sem ut sagittis. Nunc ac interdum ligula, a pulvinar eros. Proin laoreet erat id ante auctor, et sodales quam tincidunt. Duis ac tincidunt nisl. Nunc vel augue sem. Mauris ante risus, rhoncus nec eros id, mollis dictum felis. Donec vel rutrum purus, convallis pretium erat. Praesent fermentum ornare felis, eu imperdiet turpis vestibulum sed. Vestibulum ut purus tellus. Vivamus bibendum luctus egestas. Vivamus interdum, elit id lacinia suscipit, est felis luctus nulla, varius fermentum libero arcu et nibh.', 'actividades/May2019/f1fG6KP0SMRWpN1TT7So.png', 'Lilian Lizeth Rojas Mendoza', 1, 1, NULL, '2019-05-31 04:52:26'),
(7, 'Charla: “Uso del Repositorio Institucional de ESSALUD”\r\n\r\n', '2019-09-16', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '05:30 pm', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex quam, feugiat in augue sit amet, vulputate pellentesque augue. Morbi ultrices tincidunt massa, eget ultricies ex consequat ut. Sed at augue in odio convallis rutrum. Quisque vestibulum sit amet sem ut sagittis. Nunc ac interdum ligula, a pulvinar eros. Proin laoreet erat id ante auctor, et sodales quam tincidunt. Duis ac tincidunt nisl. Nunc vel augue sem. Mauris ante risus, rhoncus nec eros id, mollis dictum felis. Donec vel rutrum purus, convallis pretium erat. Praesent fermentum ornare felis, eu imperdiet turpis vestibulum sed. Vestibulum ut purus tellus. Vivamus bibendum luctus egestas. Vivamus interdum, elit id lacinia suscipit, est felis luctus nulla, varius fermentum libero arcu et nibh.', 'actividades/May2019/f1fG6KP0SMRWpN1TT7So.png', 'Nilo Kenji Alex Dávila', 1, 1, NULL, NULL),
(8, 'Charla: “El proceso de descarte de colecciones”\r\n', '2019-10-22', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '05:30 pm', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex quam, feugiat in augue sit amet, vulputate pellentesque augue. Morbi ultrices tincidunt massa, eget ultricies ex consequat ut. Sed at augue in odio convallis rutrum. Quisque vestibulum sit amet sem ut sagittis. Nunc ac interdum ligula, a pulvinar eros. Proin laoreet erat id ante auctor, et sodales quam tincidunt. Duis ac tincidunt nisl. Nunc vel augue sem. Mauris ante risus, rhoncus nec eros id, mollis dictum felis. Donec vel rutrum purus, convallis pretium erat. Praesent fermentum ornare felis, eu imperdiet turpis vestibulum sed. Vestibulum ut purus tellus. Vivamus bibendum luctus egestas. Vivamus interdum, elit id lacinia suscipit, est felis luctus nulla, varius fermentum libero arcu et nibh.', 'actividades/May2019/f1fG6KP0SMRWpN1TT7So.png', 'Teddy Sánchez Gómez', 1, 1, NULL, NULL),
(9, 'Exposición: “La Historia del Seguro Social del Empleado”\r\n\r\n', '2019-11-04', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '05:30 pm', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex quam, feugiat in augue sit amet, vulputate pellentesque augue. Morbi ultrices tincidunt massa, eget ultricies ex consequat ut. Sed at augue in odio convallis rutrum. Quisque vestibulum sit amet sem ut sagittis. Nunc ac interdum ligula, a pulvinar eros. Proin laoreet erat id ante auctor, et sodales quam tincidunt. Duis ac tincidunt nisl. Nunc vel augue sem. Mauris ante risus, rhoncus nec eros id, mollis dictum felis. Donec vel rutrum purus, convallis pretium erat. Praesent fermentum ornare felis, eu imperdiet turpis vestibulum sed. Vestibulum ut purus tellus. Vivamus bibendum luctus egestas. Vivamus interdum, elit id lacinia suscipit, est felis luctus nulla, varius fermentum libero arcu et nibh.', 'actividades/May2019/f1fG6KP0SMRWpN1TT7So.png', 'Eric Alán Peña Sánchez', 1, 1, NULL, NULL),
(10, 'Exposición fotográfica sobre la evolución histórica del Seguro Social de Salud', '2019-12-10', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '05:30 pm', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ex quam, feugiat in augue sit amet, vulputate pellentesque augue. Morbi ultrices tincidunt massa, eget ultricies ex consequat ut. Sed at augue in odio convallis rutrum. Quisque vestibulum sit amet sem ut sagittis. Nunc ac interdum ligula, a pulvinar eros. Proin laoreet erat id ante auctor, et sodales quam tincidunt. Duis ac tincidunt nisl. Nunc vel augue sem. Mauris ante risus, rhoncus nec eros id, mollis dictum felis. Donec vel rutrum purus, convallis pretium erat. Praesent fermentum ornare felis, eu imperdiet turpis vestibulum sed. Vestibulum ut purus tellus. Vivamus bibendum luctus egestas. Vivamus interdum, elit id lacinia suscipit, est felis luctus nulla, varius fermentum libero arcu et nibh.', 'actividades/May2019/f1fG6KP0SMRWpN1TT7So.png', NULL, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` tinyint(1) NOT NULL DEFAULT 1,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `imagen`, `titulo`, `subtitulo`, `seccion`, `orden`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'banners\\May2019\\yhb36O59KUI8RrecKvsK.jpg', 'Bienvenidos', 'Busca en nuestros recursos digitales: libros, revistas y material audio visual.', 'home', 1, 1, '2019-05-08 19:28:12', '2019-06-01 01:33:56'),
(2, 'banners\\May2019\\zfOcgYqbbL2WE4a5tFQ5.jpg', NULL, NULL, 'home', 2, 1, '2019-05-08 19:28:24', '2019-05-09 01:47:45'),
(3, 'banners\\May2019\\7H8uBwDk0jkqkTfYyGta.jpg', NULL, NULL, 'home', 3, 1, '2019-05-08 19:28:39', '2019-05-08 19:28:39'),
(4, 'banners\\May2019\\Ox115ypwy2RM9M5d1pkl.jpg', NULL, NULL, 'home', 4, 1, '2019-05-08 19:28:52', '2019-05-09 01:48:04'),
(5, 'banners\\May2019\\REphrApzqtxtHDcHGSzI.jpg', NULL, NULL, 'nosotros', 1, 1, '2019-05-08 20:43:03', '2019-05-09 01:46:12'),
(6, 'banners\\May2019\\Pq3r2OYvxam4cJzcm7YZ.jpg', NULL, NULL, 'nosotros', 2, 1, '2019-05-08 20:43:13', '2019-05-09 01:46:36'),
(7, 'banners\\May2019\\KcBItxYExPLL9rxGFr5z.jpg', NULL, NULL, 'nosotros', 3, 1, '2019-05-08 20:43:28', '2019-05-09 01:46:48'),
(8, 'banners\\May2019\\1Wwf7FUCLeaLRAyUKqos.png', NULL, NULL, 'normativa', 1, 1, '2019-05-08 20:43:56', '2019-05-08 20:43:56'),
(9, 'banners\\May2019\\57p2KRApPtkOMVvZghpe.png', NULL, NULL, 'normativa', 2, 1, '2019-05-08 20:44:05', '2019-05-08 20:47:29'),
(10, 'banners\\May2019\\Z9AtfhCo3jknZcY07mNp.jpg', NULL, NULL, 'recursos', 1, 1, '2019-05-08 20:44:24', '2019-05-08 20:44:24'),
(11, 'banners\\May2019\\9SNDIcfcJ8TG3GCgJTTj.jpg', NULL, NULL, 'recursos', 2, 1, '2019-05-08 20:44:34', '2019-05-08 20:44:40'),
(12, 'banners\\May2019\\I596mRCtuolDc5i5mvXm.jpg', NULL, NULL, 'servicios', 1, 1, '2019-05-08 20:45:39', '2019-05-08 20:45:39'),
(13, 'banners\\May2019\\oPkCRBGhMk4UGiVGlr5N.jpg', NULL, NULL, 'servicios', 2, 0, '2019-05-08 20:45:54', '2019-05-09 19:16:07'),
(14, 'banners\\May2019\\2nzXyyy47fdRBAJ6cJDC.jpg', NULL, NULL, 'actividades', 1, 1, '2019-05-08 20:46:27', '2019-05-08 20:46:27'),
(15, 'banners\\May2019\\PAQLMfSya5MQxKsduVWy.jpg', NULL, NULL, 'novedades', 1, 1, '2019-05-08 20:47:06', '2019-05-08 20:47:06'),
(16, 'banners\\May2019\\NK4kRLLbdYmOgSOUCgWZ.jpg', NULL, NULL, 'actividades', 2, 1, '2019-05-09 01:10:42', '2019-05-09 01:11:54'),
(17, 'banners\\May2019\\Ixr9fAjsJrZwquLibAIc.png', NULL, NULL, 'interna-normativa', 1, 1, '2019-05-09 01:10:42', '2019-05-09 01:10:42'),
(18, 'banners\\May2019\\otM47kOIjFSnjHQ164az.jpg', NULL, NULL, 'actividades', 3, 1, '2019-05-09 01:12:10', '2019-05-09 01:12:10'),
(19, 'banners\\May2019\\tfijp5N8xS9LwTg3WxWR.jpg', NULL, NULL, 'novedades', 2, 1, '2019-05-09 01:16:12', '2019-05-09 01:16:12'),
(20, 'banners\\May2019\\E6Nla42jA34IEGwBHB3T.jpg', NULL, NULL, 'novedades', 3, 1, '2019-05-09 01:16:26', '2019-05-09 01:16:26'),
(21, 'banners\\May2019\\dQmsBPKC2iud5FMUtMK5.jpg', NULL, NULL, 'servicios', 3, 1, '2019-05-09 01:44:11', '2019-05-09 01:44:11'),
(22, 'banners\\May2019\\6gDvJhnBP5LH0aZMJg8z.jpg', NULL, NULL, 'servicios', 4, 1, '2019-05-09 01:44:21', '2019-05-09 01:44:21'),
(23, 'banners\\May2019\\RvlJcDBzXvEw2daF76s1.jpg', NULL, NULL, 'servicios', 5, 1, '2019-05-09 01:44:33', '2019-05-09 01:44:33'),
(24, 'banners\\May2019\\ehRpmM1JcMfwu43Q8hGg.jpg', NULL, NULL, 'servicios', 6, 1, '2019-05-09 01:44:45', '2019-05-09 01:44:45'),
(25, 'banners\\May2019\\t0hKWO8cOb2OiSEIfYDj.jpg', NULL, NULL, 'nosotros', 4, 1, '2019-05-09 01:47:00', '2019-05-09 01:47:00'),
(26, 'banners\\May2019\\tbe0sGCe74PIPwZGfd8Z.jpg', NULL, NULL, 'home', 5, 1, '2019-05-09 01:48:17', '2019-05-09 01:48:17'),
(27, 'banners\\May2019\\Ee6KFD9V4zJbnzqNZXYY.jpg', NULL, NULL, 'home', 6, 1, '2019-05-09 01:48:26', '2019-06-01 01:32:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bibliotecas`
--

CREATE TABLE `bibliotecas` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `novedad_id` int(10) UNSIGNED NOT NULL,
  `estado` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bibliotecas`
--

INSERT INTO `bibliotecas` (`id`, `imagen`, `banner`, `titulo`, `descripcion`, `fecha`, `novedad_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, '1.png', 'banner-boletines.png', 'Morbi in sem quis dui', '', '2019-06-11', 8, 1, '2019-06-06 20:58:10', '2019-06-06 22:50:22'),
(2, '2.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-06-12', 8, 1, '2019-06-06 21:00:07', '2019-06-06 22:48:27'),
(3, '3.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-06-04', 8, 1, '2019-06-06 21:00:25', '2019-06-06 21:00:25'),
(4, '4.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-06-08', 8, 1, '2019-06-06 21:00:36', '2019-06-06 21:00:36'),
(5, '5.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-05-22', 8, 1, '2019-06-06 21:18:56', '2019-06-06 22:50:29'),
(6, '6.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-03-04', 8, 1, NULL, NULL),
(7, '7.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-02-19', 8, 1, NULL, NULL),
(8, '1.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-02-19', 8, 1, NULL, NULL),
(9, '2.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-01-23', 8, 1, NULL, NULL),
(10, '3.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-04-17', 8, 1, NULL, NULL),
(11, '4.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-05-22', 8, 1, NULL, NULL),
(12, '5.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-04-09', 8, 1, NULL, NULL),
(13, '6.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-04-09', 8, 1, NULL, NULL),
(14, '7.png', 'banner-boletines.png', 'Morbi in sem quis dui', NULL, '2019-04-09', 8, 1, NULL, NULL),
(15, '1.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-01-09', 7, 1, NULL, NULL),
(16, '2.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-01-09', 7, 1, NULL, NULL),
(17, '3.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-03-09', 7, 1, NULL, NULL),
(18, '4.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', NULL, '2019-03-09', 7, 1, NULL, NULL),
(19, '5.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', NULL, '2019-03-09', 7, 1, NULL, NULL),
(20, '6.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-04-09', 7, 1, NULL, NULL),
(21, '7.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-04-09', 7, 1, NULL, NULL),
(22, '1.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-05-09', 7, 1, NULL, NULL),
(23, '2.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-06-09', 7, 1, NULL, NULL),
(24, '3.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-07-09', 7, 1, NULL, NULL),
(25, '4.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-07-09', 7, 1, NULL, NULL),
(26, '5.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-04-09', 7, 1, NULL, NULL),
(27, '6.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-04-09', 7, 1, NULL, NULL),
(28, '7.png', 'banner-biblioteca.png', 'Morbi in sem quis dui', '', '2019-04-09', 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` tinyint(1) NOT NULL DEFAULT 1,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `direccion`, `telefono`, `telefono2`, `correo`, `horario`, `orden`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Complejo Arenales - Oficina 217', 'Teléf: (01)265-6000, anexos: 2556 - 2911', '012656000', 'bibliotecacentral@essalud.gob.pe', 'Horario de atención: L-V 08:00 a 17:00 h', 1, 1, '2019-05-08 19:31:36', '2019-05-08 21:20:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'locale', 'text', 'Locale', 0, 1, 1, 1, 1, 0, NULL, 12),
(12, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(22, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(23, 5, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(24, 5, 'nombre', 'text', 'Nombre', 0, 1, 1, 1, 1, 1, '{}', 2),
(25, 5, 'slug', 'text', 'Slug', 0, 0, 0, 0, 0, 0, '{}', 3),
(26, 5, 'imagen', 'image', 'Imagen 330 x 385', 0, 1, 1, 1, 1, 1, '{}', 4),
(27, 5, 'banner', 'image', 'Banner 1903 x 501', 0, 1, 1, 1, 1, 1, '{}', 5),
(28, 5, 'fecha', 'date', 'Fecha', 0, 0, 1, 1, 1, 1, '{}', 6),
(29, 5, 'hora', 'text', 'Hora', 0, 0, 1, 1, 1, 1, '{}', 7),
(30, 5, 'descripcion', 'rich_text_box', 'Descripción', 0, 1, 1, 1, 1, 1, '{}', 8),
(31, 5, 'titulo', 'text', 'Título', 0, 0, 1, 1, 1, 1, '{}', 9),
(32, 5, 'descripcion2', 'text_area', 'Descripción 2', 0, 0, 1, 1, 1, 1, '{}', 10),
(33, 5, 'relacion', 'text', 'Relación', 0, 1, 1, 1, 1, 1, '{}', 11),
(35, 5, 'orden', 'select_dropdown', 'Orden', 1, 0, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"Orden 1\",\"2\":\"Orden 2\",\"3\":\"Orden 3\",\"4\":\"Orden 4\",\"5\":\"Orden 5\",\"6\":\"Orden 6\",\"7\":\"Orden 7\",\"8\":\"Orden 8\",\"9\":\"Orden 9\",\"10\":\"Orden 10\",\"11\":\"Orden 11\",\"12\":\"Orden 12\"}}', 13),
(36, 5, 'estado', 'select_dropdown', 'Estado', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"No disponible\",\"1\":\"Disponible\"}}', 14),
(37, 5, 'created_at', 'timestamp', 'Fecha de registro', 0, 0, 1, 0, 0, 0, '{}', 15),
(38, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 16),
(39, 6, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(40, 6, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 2),
(41, 6, 'created_at', 'timestamp', 'Fecha de registro', 0, 1, 1, 0, 0, 0, '{}', 3),
(42, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(43, 7, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(44, 7, 'nombre', 'text', 'Nombre', 0, 1, 1, 1, 1, 1, '{}', 2),
(45, 7, 'fecha', 'date', 'Fecha', 0, 0, 1, 1, 1, 1, '{}', 3),
(46, 7, 'descripcion', 'text', 'Descripción', 0, 1, 1, 1, 1, 1, '{}', 4),
(47, 7, 'hora', 'text', 'Hora', 0, 1, 1, 1, 1, 1, '{}', 5),
(48, 7, 'lugar', 'text', 'Lugar', 0, 1, 1, 1, 1, 1, '{}', 6),
(49, 7, 'descripcion2', 'rich_text_box', 'Descripción 2', 0, 0, 1, 1, 1, 1, '{}', 7),
(50, 7, 'banner', 'image', 'Imagen interna 1903 x 501', 0, 1, 1, 1, 1, 1, '{}', 8),
(51, 7, 'autor', 'text', 'Autor', 0, 1, 1, 1, 1, 1, '{}', 9),
(52, 7, 'orden', 'text', 'Orden', 1, 0, 0, 0, 0, 0, '{}', 10),
(53, 7, 'estado', 'select_dropdown', 'Estado', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"No disponible\",\"1\":\"Disponible\"}}', 11),
(54, 7, 'created_at', 'timestamp', 'Fecha de registro', 0, 0, 1, 0, 0, 0, '{}', 12),
(55, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(56, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 9, 'nombre', 'text', 'Nombre', 0, 1, 1, 1, 1, 1, '{}', 2),
(58, 9, 'descripcion', 'text', 'Descripción', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 9, 'imagen', 'image', 'Imagen 215 x 82', 0, 1, 1, 1, 1, 1, '{}', 4),
(60, 9, 'icono', 'image', 'Icono 20 x 20', 0, 0, 1, 1, 1, 1, '{}', 5),
(61, 9, 'enlace', 'text', 'Enlace', 0, 1, 1, 1, 1, 1, '{}', 6),
(62, 9, 'estado', 'select_dropdown', 'Estado', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"Acceso por suscripci\\u00f3n\",\"1\":\"Acceso libre\"}}', 7),
(63, 9, 'orden', 'text', 'Orden', 1, 0, 0, 0, 0, 0, '{}', 8),
(64, 9, 'created_at', 'timestamp', 'Fecha de registro', 0, 0, 1, 0, 0, 0, '{}', 9),
(65, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(66, 10, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(67, 10, 'imagen', 'image', 'Imagen 355 x 516', 0, 1, 1, 1, 1, 1, '{}', 3),
(68, 10, 'descripcion', 'rich_text_box', 'Descripción', 0, 1, 1, 1, 1, 1, '{}', 4),
(69, 10, 'novedad_id', 'text', 'Novedad Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(70, 10, 'created_at', 'timestamp', 'Fecha de registro', 0, 0, 1, 0, 0, 0, '{}', 5),
(71, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(72, 10, 'novedad_id', 'relationship', 'Novedad', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Novedad\",\"table\":\"news\",\"type\":\"belongsTo\",\"column\":\"novedad_id\",\"key\":\"id\",\"label\":\"nombre\",\"pivot_table\":\"activities\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(73, 11, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(74, 11, 'nombre', 'text', 'Nombre', 0, 1, 1, 1, 1, 1, '{}', 2),
(75, 11, 'statu', 'text', 'Nombre 2', 0, 1, 1, 1, 1, 1, '{}', 3),
(76, 11, 'imagen', 'image', 'Imagen 330 x 651', 0, 1, 1, 1, 1, 1, '{}', 4),
(77, 11, 'banner', 'image', 'Banner', 0, 0, 0, 0, 0, 0, '{}', 5),
(78, 11, 'descripcion', 'rich_text_box', 'Descripción', 0, 1, 1, 1, 1, 1, '{}', 6),
(79, 11, 'enlace', 'file', 'Enlace', 0, 1, 1, 1, 1, 1, '{}', 7),
(80, 11, 'orden', 'text', 'Orden', 1, 0, 0, 0, 0, 0, '{}', 8),
(81, 11, 'estado', 'text', 'Estado', 1, 0, 0, 0, 0, 0, '{}', 9),
(82, 11, 'created_at', 'timestamp', 'Fecha de registro', 0, 0, 1, 0, 0, 0, '{}', 10),
(83, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(84, 11, 'titulo', 'text', 'Título de enlace', 0, 1, 1, 1, 1, 1, '{}', 3),
(85, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(86, 12, 'imagen', 'image', 'Imagen 1903 x 500', 0, 1, 1, 1, 1, 1, '{}', 2),
(87, 12, 'titulo', 'text', 'Título', 0, 1, 1, 1, 1, 1, '{}', 3),
(88, 12, 'subtitulo', 'text', 'Subtítulo', 0, 1, 1, 1, 1, 1, '{}', 4),
(89, 12, 'seccion', 'select_dropdown', 'Sección', 0, 1, 1, 1, 1, 1, '{\"default\":\"home\",\"options\":{\"home\":\"Inicio\",\"nosotros\":\"Nosotros\",\"normativa\":\"Normativa\",\"recursos\":\"Recursos\",\"servicios\":\"Servicios\",\"actividades\":\"Actividades\",\"novedades\":\"Novedades\",\"interna-normativa\":\"Interna Normativa\",\"biblioteca\":\"Biblioteca en 1 minuto\",\"boletines\":\"Boletines\"}}', 5),
(90, 12, 'orden', 'select_dropdown', 'Orden', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"Orden 1\",\"2\":\"Orden 2\",\"3\":\"Orden 3\",\"4\":\"Orden 4\",\"5\":\"Orden 5\",\"6\":\"Orden 6\",\"7\":\"Orden 7\",\"8\":\"Orden 8\",\"9\":\"Orden 9\",\"10\":\"Orden 10\"}}', 6),
(91, 12, 'estado', 'select_dropdown', 'Estado', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"No disponible\",\"1\":\"Disponible\"}}', 7),
(92, 12, 'created_at', 'timestamp', 'Fecha de registro', 0, 0, 1, 0, 0, 0, '{}', 8),
(93, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(94, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(95, 13, 'direccion', 'text', 'Dirección', 0, 1, 1, 1, 1, 1, '{}', 2),
(96, 13, 'telefono', 'text', 'Teléfono (Texto)', 0, 1, 1, 1, 1, 1, '{}', 3),
(97, 13, 'correo', 'text', 'Correo', 0, 1, 1, 1, 1, 1, '{}', 4),
(98, 13, 'horario', 'text', 'Horario', 0, 1, 1, 1, 1, 1, '{}', 5),
(99, 13, 'orden', 'text', 'Orden', 1, 0, 0, 0, 0, 0, '{}', 6),
(100, 13, 'estado', 'select_dropdown', 'Estado', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"No disponible\",\"1\":\"Disponible\"}}', 7),
(101, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 8),
(102, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(103, 14, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(104, 14, 'imagen', 'image', 'Imagen 208 x 85', 0, 1, 1, 1, 1, 1, '{}', 2),
(105, 14, 'enlace', 'text', 'Enlace', 0, 1, 1, 1, 1, 1, '{}', 3),
(106, 14, 'orden', 'select_dropdown', 'Orden', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"Orden 1\",\"2\":\"Orden 2\",\"3\":\"Orden 3\",\"4\":\"Orden 4\",\"5\":\"Orden 5\",\"6\":\"Orden 6\",\"7\":\"Orden 7\",\"8\":\"Orden 8\",\"9\":\"Orden 9\",\"10\":\"Orden 10\",\"11\":\"Orden 11\",\"12\":\"Orden 12\"}}', 4),
(107, 14, 'estado', 'select_dropdown', 'Estado', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"No disponible\",\"1\":\"Disponible\"}}', 5),
(108, 14, 'created_at', 'timestamp', 'Fecha de registro', 0, 0, 1, 0, 0, 0, '{}', 6),
(109, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(110, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(111, 15, 'imagen', 'image', 'Imagen 152 x 50', 0, 1, 1, 1, 1, 1, '{}', 2),
(112, 15, 'enlace', 'text', 'Enlace', 0, 0, 0, 0, 0, 0, '{}', 3),
(113, 15, 'orden', 'select_dropdown', 'Orden', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"Orden 1\",\"2\":\"Orden 2\",\"3\":\"Orden 3\"}}', 4),
(114, 15, 'estado', 'select_dropdown', 'Estado', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"No disponible\",\"1\":\"Disponible\"}}', 5),
(115, 15, 'created_at', 'timestamp', 'Fecha de registro', 0, 0, 1, 0, 0, 0, '{}', 6),
(116, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(117, 16, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(118, 16, 'imagen', 'image', 'Imagen 450 x 651', 0, 1, 1, 1, 1, 1, '{}', 2),
(119, 16, 'titulo', 'text', 'Título', 0, 1, 1, 1, 1, 1, '{}', 3),
(120, 16, 'descripcion', 'rich_text_box', 'Descripción', 0, 1, 1, 1, 1, 1, '{}', 4),
(121, 16, 'enlace', 'text', 'Enlace', 0, 1, 1, 1, 1, 1, '{}', 5),
(122, 16, 'seccion', 'select_dropdown', 'Sección', 0, 1, 1, 1, 1, 1, '{\"default\":\"nosotros\",\"options\":{\"nosotros\":\"Nosotros\",\"recursos\":\"Recursos\",\"servicios\":\"Servicios\"}}', 6),
(123, 16, 'orden', 'select_dropdown', 'Orden', 1, 0, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"Orden 1\",\"2\":\"Orden 2\",\"3\":\"Orden 3\"}}', 7),
(124, 16, 'estado', 'select_dropdown', 'Estado', 1, 0, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"No disponible\",\"1\":\"Disponible\"}}', 8),
(125, 16, 'created_at', 'timestamp', 'Fecha de registro', 0, 0, 1, 0, 0, 0, '{}', 9),
(126, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(127, 17, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(128, 17, 'enlace', 'text', 'Enlace', 0, 1, 1, 1, 1, 1, '{}', 2),
(129, 17, 'orden', 'select_dropdown', 'Orden', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"Orden 1\",\"2\":\"Orden 2\",\"3\":\"Orden 3\",\"4\":\"Orden 4\",\"5\":\"Orden 5\",\"6\":\"Orden 6\"}}', 3),
(130, 17, 'estado', 'select_dropdown', 'Estado', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"No disponible\",\"1\":\"Disponible\"}}', 4),
(131, 17, 'created_at', 'timestamp', 'Fecha de registro', 0, 0, 1, 0, 0, 0, '{}', 5),
(132, 17, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(133, 17, 'nombre', 'select_dropdown', 'Nombre', 0, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"whatsapp\":\"Whatsaap\",\"youtube\":\"Youtube\",\"twitter\":\"Twitter\",\"facebook-f\":\"Facebook\"}}', 3),
(134, 13, 'telefono2', 'text', 'Teléfono', 0, 1, 1, 1, 1, 1, '{}', 4),
(135, 16, 'imagen2', 'image', 'Imagen 2 450 x 223', 0, 1, 1, 1, 1, 1, '{}', 2),
(136, 5, 'tipo', 'select_dropdown', 'Tipo', 0, 1, 1, 1, 1, 1, '{\"default\":\"noticias\",\"options\":{\"noticias\":\"Noticias\",\"otro\":\"Biblioteca\\/boletin\"}}', 12),
(167, 21, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(168, 21, 'backround', 'image', 'Fondo 929 x 420', 0, 1, 1, 1, 1, 1, '{}', 2),
(169, 21, 'popup1', 'image', 'Imagen 1 252 x 58', 0, 1, 1, 1, 1, 1, '{}', 3),
(170, 21, 'popup2', 'image', 'Imagen 2 359 x 56', 0, 1, 1, 1, 1, 1, '{}', 4),
(171, 21, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, '{}', 5),
(172, 21, 'estado', 'select_dropdown', 'Estado', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"No disponible\",\"1\":\"Disponible\"}}', 6),
(173, 21, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 7),
(174, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(187, 23, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(188, 23, 'imagen', 'image', 'Imagen 330 x 385', 0, 1, 1, 1, 1, 1, '{}', 3),
(189, 23, 'banner', 'image', 'Imagen interna 1903 x 500', 0, 1, 1, 1, 1, 1, '{}', 4),
(190, 23, 'titulo', 'text', 'Título', 0, 1, 1, 1, 1, 1, '{}', 5),
(191, 23, 'descripcion', 'text_area', 'Descripción', 0, 1, 1, 1, 1, 1, '{}', 6),
(192, 23, 'fecha', 'date', 'Fecha', 0, 1, 1, 1, 1, 1, '{}', 7),
(193, 23, 'novedad_id', 'text', 'Novedad Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(194, 23, 'estado', 'select_dropdown', 'Estado', 0, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"0\":\"No disponible\",\"1\":\"Disponible\"}}', 8),
(195, 23, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 9),
(196, 23, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(197, 23, 'biblioteca_belongsto_news_relationship', 'relationship', 'Novedad', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Novedad\",\"table\":\"news\",\"type\":\"belongsTo\",\"column\":\"novedad_id\",\"key\":\"id\",\"label\":\"nombre\",\"pivot_table\":\"activities\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, NULL, '2019-04-26 22:03:20', '2019-04-26 22:03:20'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-04-26 22:03:20', '2019-04-26 22:03:20'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-04-26 22:03:20', '2019-04-26 22:03:20'),
(5, 'news', 'novedades', 'Novedad', 'Novedades', NULL, 'App\\Novedad', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-02 20:05:33', '2019-06-24 21:04:55'),
(6, 'subscribers', 'suscripciones-al-boletin', 'Suscripción al boletín', 'Suscripciones al boletín', NULL, 'App\\Subscriber', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-07 01:20:54', '2019-05-31 19:32:54'),
(7, 'activities', 'actividades', 'Actividad', 'Actividades', NULL, 'App\\Activity', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-07 01:23:18', '2019-06-21 22:02:09'),
(9, 'datos', 'datos', 'Base de dato', 'Base de datos', NULL, 'App\\Datos', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-07 01:31:31', '2019-06-22 03:43:25'),
(10, 'detalles', 'detalles', 'Detalle de novedad', 'Detalles de novedades', NULL, 'App\\Detalle', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-07 02:31:09', '2019-05-31 21:08:00'),
(11, 'normativas', 'normativas', 'Normativa', 'Normativas', NULL, 'App\\Normativa', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-08 01:13:25', '2019-05-31 19:17:36'),
(12, 'banners', 'banners', 'Banner', 'Banners', NULL, 'App\\Banner', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-08 04:20:08', '2019-06-21 21:24:05'),
(13, 'contactos', 'contacto', 'Contacto', 'Contacto', NULL, 'App\\Contacto', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-08 04:21:09', '2019-05-31 19:35:12'),
(14, 'enlaces', 'enlaces-interes', 'Enlace de Interés', 'Enlaces de Interés', NULL, 'App\\Enlace', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-08 04:24:46', '2019-05-31 19:24:07'),
(15, 'headers', 'header', 'Header', 'Header', NULL, 'App\\Header', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-08 04:26:06', '2019-05-31 19:36:12'),
(16, 'informacions', 'bloques', 'Bloque', 'Bloques', NULL, 'App\\Informacion', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-08 04:28:08', '2019-05-31 19:23:07'),
(17, 'redes', 'redes-sociales', 'Rede', 'Redes sociales', NULL, 'App\\Rede', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-05-08 04:30:12', '2019-05-09 23:52:44'),
(21, 'popups', 'popup', 'Popup', 'Popup', NULL, 'App\\Popup', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-06-21 21:22:33', '2019-06-21 21:27:26'),
(23, 'bibliotecas', 'biblioteca-boletines', 'Biblioteca/boletin', 'Biblioteca/boletines', NULL, 'App\\Biblioteca', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-06-21 21:33:12', '2019-06-21 22:57:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `orden` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `descripcion`, `imagen`, `icono`, `enlace`, `estado`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Base Internacional de guías.', NULL, 'datos\\May2019\\ntGhNtmjbGXW4MtoBt8M.png', 'datos\\May2019\\Qf90T3koZpt7YY2ppjhk.png', 'http://sites.bvsalud.org/bigg/biblio/', 1, 1, NULL, '2019-05-07 03:31:38'),
(2, 'Base Regional de informes de Evaluación de Tecnologías en Salud de las Américas.', NULL, 'datos\\May2019\\MYUfjfj8Ou5WrmXjV8tq.png', 'datos\\May2019\\vmVZViV17g71vliYdFi4.png', 'http://sites.bvsalud.org/redetsa/pt/brisa/', 1, 1, NULL, '2019-05-07 03:34:18'),
(3, 'Repositorio Institucional de la OPS', 'Difunde información científica y técnica generado por la Organización Panamericana de la salud', 'datos\\May2019\\SaZzPoNTXx0wyyExthXM.png', 'datos\\May2019\\RDAiQ5utaqPRPEcbXQfp.png', 'http://iris.paho.org/xmlui/?locale-attribute=es', 1, 1, NULL, '2019-05-07 03:35:55'),
(4, 'PubMed', 'Más de 24 millones de citas de artículos biomédicos de MEDLINE y revistas de ciencias de la vida. Las citas pueden incluir enlaces a artículos de texto completo de PubMed Central o en los sitios Web Publisher.', 'datos\\May2019\\sfBMGvixbnp1LPrUQc60.png', 'datos\\May2019\\JMhk3bhpDhyEemLbuV7Y.png', '#', 1, 1, NULL, '2019-05-07 03:36:03'),
(5, 'Lilacs', 'Acceso a revistas en texto completo en el área de las ciencias de la salud.', 'datos\\May2019\\nfyPFXF8agfxrWsT4Jym.png', 'datos\\May2019\\3ItgiMrkE8EHWx6bW8S8.png', 'https://www.scielo.org/', 1, 1, NULL, '2019-05-14 20:59:06'),
(6, 'Scielo', 'Biblioteca virtual que abarca una colección seleccionada de revistas científicas', 'datos\\May2019\\IDxcFQajRFpITYbke8X9.png', 'datos/May2019/VDHOyvS0sEIKbHYDchpc.png', 'https://www.scielo.org/', 1, 1, NULL, '2019-05-14 20:58:46'),
(7, 'Trip', 'Libros electrónicos exclusivamente sobre Medicina.', 'datos/May2019/yMj5T4UQKhTEu9letv23.jpg', 'datos/May2019/0KzYMY91VcRql97FhRMd.png', 'https://www.tripdatabase.com/', 1, 1, '2019-05-14 20:17:36', '2019-05-14 20:23:42'),
(8, 'NICE', 'Guías basadas en evidencia', 'datos/May2019/dYZEdN9vp2kIKczSnIkG.jpg', 'datos/May2019/0TJ5n1J7NxUbHFWi5LKk.png', 'https://www.nice.org.uk/', 1, 1, '2019-05-14 20:20:29', '2019-05-14 20:20:29'),
(9, 'Pedro', 'Revisiones sistemáticas y guías de práctica clínica de fisioterapia.', 'datos/May2019/J89Hv8E2PskUJoog889b.jpg', 'datos/May2019/bd8qOBfYKU2I6kqoQGct.png', 'https://search.pedro.org.au/search', 1, 1, '2019-05-14 20:22:28', '2019-05-14 20:22:28'),
(10, 'Pubchem', 'Base de datos de moléculas químicas y sus actividades contra los ensayos biológicos. El sistema es mantenido por el Centro Nacional de Información Biotecnológica', 'datos/May2019/eOMq5Ek4OPAhky3MdQdk.jpg', 'datos/May2019/pB403EsAMKys9e1IbhEL.png', 'Base de datos de moléculas químicas y sus actividades contra los ensayos biológicos. El sistema es mantenido por el Centro Nacional de Información Biotecnológica', 1, 1, '2019-05-14 20:23:10', '2019-05-14 20:24:06'),
(11, 'PubPsych', 'Buscador gratuito de recursos de información sobre psicología.', 'datos/May2019/R28FPtxLGKOKOs3Dzddi.jpg', 'datos/May2019/gbge7lOJiY9DbT9Zynpj.png', 'Buscador gratuito de recursos de información sobre psicología.', 1, 1, '2019-05-14 20:24:31', '2019-05-14 20:31:45'),
(12, 'Acta Médica Peruana', 'Es una revista que Tiene como finalidad difundir el conocimiento médico entre sus miembros colegiados y profesionales interesados.', 'datos/May2019/CMvdZB6DU2teFQyDwYru.jpg', 'datos/May2019/ufUtQNRrUGn30vYcE8pt.png', 'http://www.amp.cmp.org.pe/index.php/AMP', 1, 1, '2019-05-14 20:25:36', '2019-05-14 20:25:36'),
(13, 'Anales de la Facultad de Medicina', 'Revista de Investigación de la Universidad Nacional Mayor de San Marcos.', 'datos/May2019/9tM59Hfs8pOekWhQxCof.jpg', 'datos/May2019/5DrmyPhgQYShZQFD0fLW.png', 'https://rpmesp.ins.gob.pe/index.php/rpmesp', 1, 1, '2019-05-14 20:27:15', '2019-05-14 20:29:11'),
(14, 'Revista Peruana de Medicina Experimental y Salud Pública.', NULL, 'datos/May2019/abWx2ZCZCQD1hF7RjhPK.jpg', 'datos/May2019/whAbRdg2ELjJ3s94Tw8M.png', 'https://rpmesp.ins.gob.pe/index.php/rpmesp', 1, 1, '2019-05-14 20:28:10', '2019-05-14 20:28:10'),
(15, 'Hona', 'Buscador de información médica y sanitaria en línea.', 'datos/May2019/9Pop1SqaqoH2iPBq4JFA.jpg', 'datos/May2019/3uo3oFieRdcV9fA4VeZv.png', 'https://search.kconnect.eu/beta/', 1, 1, '2019-05-14 20:29:53', '2019-05-14 20:29:53'),
(16, 'NHS', 'Información sobre el uso de tecnologías de salud, práctica clínica.', 'datos/May2019/Ywc234RSJNgTzgVFybWK.jpg', 'datos/May2019/X9RntIe7sZ4KTi95c3OL.png', 'https://www.nice.org.uk/', 1, 1, '2019-05-14 20:30:47', '2019-05-14 20:30:47'),
(17, 'Amedeo', 'Literatura en medicina científica.', 'datos/May2019/VpGtlCymmalwTMtE94Vd.jpg', 'datos/May2019/MJzNuqOLg9HPLMDO6LKz.png', 'https://www.amedeo.com/', 1, 1, '2019-05-14 20:32:26', '2019-05-14 20:32:26'),
(18, 'University of York', 'CRD es un instituto de renombre mundial que produce investigaciones relevantes para políticas y métodos innovadores que promueven el uso de pruebas de investigación para mejorar la salud de la población.', 'datos/May2019/zc2IfEicXZrTBA7R7wjc.jpg', 'datos/May2019/UL36ASp1SspKMqpZN6aK.png', 'https://www.york.ac.uk/crd/', 1, 1, '2019-05-14 20:33:10', '2019-05-14 20:33:10'),
(19, 'Cincinnati Children\'s', 'Investigaciones en la especialidad de pediatría.', 'datos/May2019/ZNdav9H7ac08WdsrzZaj.jpg', 'datos/May2019/5pq8AWXlOG3KGJDB5SwB.png', 'https://www.cincinnatichildrens.org/service/j/anderson-', 1, 1, '2019-05-14 20:33:39', '2019-05-14 20:33:39'),
(20, 'Guiasalud', 'Guías de práctica clínica, metodología, información para pacientes, etc.', 'datos/May2019/MZbPIeW84WoYcOIIaGWt.jpg', 'datos/May2019/vNJGWH2TZ1uftbMWElti.png', 'http://portal.guiasalud.es/web/guest/home;jsessionid=eca4cd9f0c', 1, 1, '2019-05-14 20:34:08', '2019-05-14 20:34:08'),
(21, 'Biblioteca Virtual en Salud', 'Sistema Latinoamericano y del Caribe de información en ciencias de la salud que brinda acceso a artículos de revistas, revisiones sistemáticas de la Colaboración Cochrane, información de medicina basada en evidencia y otros', 'datos/May2019/zrBt4aedg8OBlLglUV0L.jpg', 'datos/May2019/XKLEunt4rYZYVqoKPk8W.png', 'http://pesquisa.bvsalud.org/portal/?output=site&amp;lang=es&amp;from=0', 1, 1, '2019-05-14 20:35:43', '2019-05-14 20:35:43'),
(22, 'Pathology', 'Es el diario oficial de la Sociedad Americana de Patología de Investigación (ASIP).', 'datos/May2019/hQ6LAyQMXQ6ZyXfKBLj8.jpg', 'datos/May2019/X6A6GB0T9dyIsxFL7AKD.png', 'Es el diario oficial de la Sociedad Americana de Patología de Investigación (ASIP).', 1, 1, '2019-05-14 20:36:45', '2019-05-14 20:36:45'),
(23, 'Ajog', 'Revista revisada por pares de obstetricia y ginecología.', 'datos/May2019/DWMxu5x2REHNgiwU6hhB.jpg', 'datos/May2019/Ti766kVtjKGWfVGPd35z.png', 'www.ajog.org', 1, 1, '2019-05-14 20:37:23', '2019-05-14 20:37:23'),
(24, 'Ajg', 'Revista médica revisada por expertos publicada por el Colegio Americano de Gastroenterología.', 'datos/May2019/pXgDgqHmCWq7dZMTzECf.jpg', 'datos/May2019/0aXIfXOtuD2w2b8j1a30.png', 'Revista revisada por pares de obstetricia y ginecología.', 1, 1, '2019-05-14 20:38:06', '2019-05-14 21:18:32'),
(25, 'American Journal of Cardiology', 'Revista científica revisada por expertos en el campo de la cardiología y la enfermedad cardiovascular en general.', 'datos/May2019/pd1kI6y45y2Wm6YELsFU.jpg', 'datos/May2019/vhVXhgNIpMtzgl7MejVI.png', 'http://www.ajconline.org/', 1, 1, '2019-05-14 20:39:07', '2019-05-14 20:39:07'),
(26, 'Allergy, Asthma & Clinical Immunology', 'Revista oficial de la Sociedad Canadiense de Alergia e Inmunología Clínica (CSACI), es una revista de acceso abierto que abarca todos los aspectos del diagnóstico, la epidemiología, la prevención y el tratamiento de enfermedades alérgicas e inmunológicas.', 'datos/May2019/fpUopzh592mo8AMUuQFc.jpg', 'datos/May2019/XzTHaEZq0gu7iv1730A5.png', 'https://aacijournal.biomedcentral.com/articles', 1, 1, '2019-05-14 20:39:51', '2019-05-14 20:39:51'),
(27, 'IntechOpen', 'Libros de acceso abierto.', 'datos/May2019/DAfzlyrZvgQV4mwWW1sW.jpg', 'datos/May2019/0swEIRALDe7D0MAOq0wg.png', 'https://www.intechopen.com/books/subject/health-sciences', 1, 1, '2019-05-14 20:40:55', '2019-05-14 20:40:55'),
(28, 'SpringerOpen', 'Sitio Web de revistas y libros de acceso totalmente abierto que cubren todas las áreas de la ciencia.', 'datos/May2019/ARiGTK5yuO8lVxE7qY9H.jpg', 'datos/May2019/y35L0SSST4AvTua3iCM9.png', 'https://www.springeropen.com/', 1, 1, '2019-05-14 20:41:35', '2019-05-14 20:55:37'),
(29, 'U.S National Library of Medicine', 'Biblioteca Nacional de Medicina de los Estados Unidos', 'datos/May2019/4WYVq4Iw8KwMxxaGezWQ.jpg', 'datos/May2019/bvRmsIiHIARs1Brl4qzn.png', 'https://www.nlm.nih.gov/', 1, 1, '2019-05-14 20:42:36', '2019-05-14 20:42:36'),
(30, 'Plos | Medicine', 'Es una revista médica que cubre el aspecto global de la medicina.', 'datos/May2019/fxiqL5C6Xl39gsgWCx2T.jpg', 'datos/May2019/IOI0s0wwk4107qvrmhc4.png', 'https://journals.plos.org/plosmedicine/', 1, 1, '2019-05-14 20:43:34', '2019-05-14 20:43:34'),
(31, 'Epistemonikos', 'Base de datos de evidencia en salud, fuente de revisiones sistemáticas para la toma de decisiones en salud, y otros tipos de evidencia científica.', 'datos/May2019/dp2afG8Myq92SOEwy7xh.jpg', 'datos/May2019/h4xbP971m0mC9dXJUjlL.png', 'https://www.epistemonikos.org/', 1, 1, '2019-05-14 20:44:03', '2019-05-14 20:44:20'),
(32, 'FreeBook 4 Doctors', 'Libros electrónicos exclusivamente sobre Medicina.', 'datos/May2019/qr8AlzoyB4YqrE9Vz8fK.jpg', 'datos/May2019/ekzEwoo1NtQLf18oPDwG.png', 'http://www.freebooks4doctors.com/', 1, 1, '2019-05-14 20:46:45', '2019-05-14 20:46:45'),
(33, 'Dynamed', NULL, 'datos/May2019/Xe35Whx3eaNFMXQwRusg.jpg', 'datos/May2019/8Tnf5wwcjttqgZdDHMLl.png', 'https://dynamed.com/home/', 0, 1, '2019-05-14 20:47:41', '2019-05-14 21:04:08'),
(35, 'Medline Complete', NULL, 'datos/May2019/HZTqAMtaC4KXBYkwrwip.jpg', 'datos/May2019/VPpY6k4MMnGQTUR1v3r4.png', 'https://www.ebsco.com/e/latam/productos-y-servicios/base-de-datos-para-investigacion/medline-complete', 0, 1, '2019-05-14 20:48:45', '2019-05-15 19:31:19'),
(36, 'Cochrane', NULL, 'datos/May2019/4ldb7OQcUPSHhZ1LKPKc.jpg', 'datos/May2019/K9U5zC9BznjY3aOP8so6.png', 'https://www.cochranelibrary.com/', 0, 1, '2019-05-14 20:52:57', '2019-05-14 21:13:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `novedad_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`id`, `imagen`, `descripcion`, `novedad_id`, `created_at`, `updated_at`) VALUES
(1, 'detalles\\May2019\\M9TB71Y3KEyq8Ri5Epuj.jpg', '<p><strong>Salud p&uacute;blica durante la rep&uacute;blica olig&aacute;rquica.</strong> Lima: Oficina General de Investigaci&oacute;n de la UNMSM, 1997. 101 p.</p>\r\n<p>C&oacute;digo: 353.60985.B98</p>\r\n<p>Bust&iacute;os Roman&iacute;, Carlos.</p>', 2, '2019-05-07 02:37:45', '2019-05-07 02:56:41'),
(2, 'detalles\\May2019\\pOiKJTG6f261gdwVtehu.png', '<p><strong>Per&uacute;: la salud p&uacute;blica durante la Rep&uacute;blica Olig&aacute;rquica, segunda parte 1896-1933 (primera versi&oacute;n).</strong> Lima: Oficina General de Investigaci&oacute;n de la UNMSM, 1997. 127 p.</p>\r\n<p>C&oacute;digo: 353.60985.B982</p>\r\n<p>Bust&iacute;os Roman&iacute;,&nbsp; Carlos</p>', 2, '2019-05-07 02:38:08', '2019-06-06 21:53:28'),
(3, 'detalles\\May2019\\zDcizjXPzuKapmxeP0D4.png', '<p><strong>La salud p&uacute;blica, la seguridad social y el Per&uacute; demoliberal: 1933-1968.</strong> Lima: CONCYTEC, 2005. 658 p.</p>\r\n<p>C&oacute;digo: 353.60985.B984</p>\r\n<p>Bust&iacute;os Roman&iacute;, Carlos; Sifuentes Valverde, El&iacute;as</p>', 2, '2019-05-07 02:38:30', '2019-05-07 02:57:29'),
(4, 'detalles\\May2019\\SyzxbC2BoG2zwGceQk9k.png', '<p><strong>Per&uacute;: la salud p&uacute;blica durante la rep&uacute;blica demoliberal, primera parte: 1933-1968.</strong> Lima: Universidad Nacional Mayor de San Marcos, 1998. 236 p</p>\r\n<p>C&oacute;digo: 353.60985.B984.1998</p>\r\n<p>Bust&iacute;os Roman&iacute;, Carlos</p>', 2, '2019-05-07 02:38:45', '2019-05-07 02:57:47'),
(5, 'detalles\\May2019\\8si4SIY5XOUpyIrevXwt.png', '<p><strong>Crisis de los sistemas de salud y de seguridad social en el Per&uacute;: 1968-1990.</strong> Lima: Fondo Editorial de la Universidad Nacional Mayor de San Marcos, 2007. 490 p.</p>\r\n<p>C&oacute;digo: 353.60985.B985</p>\r\n<p>Bust&iacute;os Roman&iacute;, Carlos</p>', 2, '2019-05-07 02:38:59', '2019-05-07 02:58:04'),
(6, 'detalles\\May2019\\8JjT6tiCPX5wnnB4HgCV.png', '<p><strong>Cuidado de la salud poblacional en el mundo occidental: 555 a&ntilde;os de historia.</strong> Lima: CONCYTEC, 2013. 254 p.</p>\r\n<p>C&oacute;digo: 353.60985.B986</p>\r\n<p>Bust&iacute;os Roman&iacute;, Carlos</p>', 2, '2019-05-07 02:39:15', '2019-05-07 02:58:18'),
(7, 'detalles\\May2019\\AVoJPvFrN0n5W1NX8Cx8.png', '<p><strong>La cuesti&oacute;n demogr&aacute;fica y la planificaci&oacute;n familiar en la historia de la salud p&uacute;blica peruana 1821-2005.</strong> Lima: CONCYTEC, 2011. 264 p.</p>\r\n<p>C&oacute;digo: 363.960985.B98</p>\r\n<p>Bust&iacute;os Roman&iacute;, Carlos</p>', 2, '2019-05-07 02:39:32', '2019-05-07 02:58:35'),
(8, 'detalles\\May2019\\oi3E7y6UIO1BzFHkShrr.png', '<p><strong>Educaci&oacute;n m&eacute;dica y su contexto: Facultad de Medicina de San Fernando, Per&uacute;: 1856-1969.</strong> Lima: Facultad de Medicina de la UNMSM, 2006. 245 p.</p>\r\n<p>C&oacute;digo: 610.7.B98</p>\r\n<p>Bust&iacute;os Roman&iacute;, Carlos; Swaynw Ossa, Julio</p>', 2, '2019-05-07 02:39:49', '2019-05-07 02:58:50'),
(9, 'detalles\\May2019\\6yRgRJ4wVdq7MhZnaper.png', '<p><strong>Situaci&oacute;n de la fuerza de trabajo m&eacute;dica en el Per&uacute;.</strong> Lima: Escuela Nacional de Salud P&uacute;blica, 1998. 174 p.</p>\r\n<p>C&oacute;digo: 610.985.B98</p>', 2, '2019-05-07 02:40:05', '2019-05-08 01:02:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enlaces`
--

CREATE TABLE `enlaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` tinyint(1) NOT NULL DEFAULT 1,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `enlaces`
--

INSERT INTO `enlaces` (`id`, `imagen`, `enlace`, `orden`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'enlaces-interes\\May2019\\q2hOzUEY5UC3Lm0SdEVs.png', 'http://www.essalud.gob.pe/ietsi/', 1, 1, '2019-05-08 19:35:56', '2019-05-08 19:37:13'),
(2, 'enlaces-interes\\May2019\\2mR9SSHUR4pT5zGM5qa3.png', 'http://biblioteca.ciess.org', 2, 1, '2019-05-08 19:37:31', '2019-05-08 19:37:52'),
(3, 'enlaces-interes\\May2019\\15MQ2sDPoUxCXnZHcHQ0.png', 'https://www.issa.int/en_GB/resources/all-publications', 3, 1, '2019-05-08 19:37:46', '2019-05-08 19:37:46'),
(4, 'enlaces-interes\\May2019\\Ini6RXuiyFQ8wc9Qnbik.png', 'https://oiss.org/bioiss/', 4, 1, '2019-05-08 19:38:09', '2019-05-08 19:38:09'),
(5, 'enlaces-interes\\May2019\\bdUpKjcS131p386QP0gn.png', 'https://bvsalud.org/es/', 5, 1, '2019-05-08 19:38:26', '2019-05-08 19:38:26'),
(6, 'enlaces-interes\\May2019\\iTmTOQIZ9dBoRdgqN6cv.png', 'https://www.zona.cmp.org.pe/index.php/clinicalkey', 6, 1, '2019-05-08 19:38:39', '2019-05-08 19:38:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `headers`
--

CREATE TABLE `headers` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` tinyint(1) NOT NULL DEFAULT 1,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `headers`
--

INSERT INTO `headers` (`id`, `imagen`, `enlace`, `orden`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'headers\\May2019\\auAPCemCYjpLtIkZzQnf.png', '#', 1, 1, '2019-05-08 19:44:16', '2019-05-08 20:51:30'),
(2, 'headers\\May2019\\YJboNtvqsS3Kl8llr4fE.png', '#', 2, 1, '2019-05-08 19:44:30', '2019-05-08 20:51:24'),
(3, 'headers\\May2019\\3u1csM0FwjSDd4r1nuBt.png', '#', 3, 1, '2019-05-08 19:44:42', '2019-05-08 20:51:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacions`
--

CREATE TABLE `informacions` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` tinyint(1) NOT NULL DEFAULT 1,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `informacions`
--

INSERT INTO `informacions` (`id`, `imagen2`, `imagen`, `titulo`, `descripcion`, `enlace`, `seccion`, `orden`, `estado`, `created_at`, `updated_at`) VALUES
(1, NULL, 'informaciones\\May2019\\Km8z05jYXE24P5O0EKRa.jpg', 'Historia', '<p>La Biblioteca Central de EsSalud fue creada con Resoluci&oacute;n N&deg; 723-DE-IPSS-92, de fecha 30 de abril de 1992, y actualmente forma parte de la Oficina de Servicios de la Informaci&oacute;n de la Secretar&iacute;a General.</p>', '#', 'nosotros', 1, 1, '2019-05-08 20:24:57', '2019-05-08 20:52:33'),
(2, NULL, 'informaciones\\May2019\\X1ssqoJF0MpiOJOHzsRY.jpg', 'Visión', '<p>Ser la biblioteca l&iacute;der del pa&iacute;s, especializada en Seguridad social y Salud, sin l&iacute;mite de espacio o lugar.</p>', '#', 'nosotros', 2, 1, '2019-05-08 20:25:29', '2019-05-08 20:52:25'),
(3, NULL, 'informaciones\\May2019\\g1OMaCB8iAPvm6ZNpjLf.jpg', 'Misión', '<p>Ofrecer servicios bibliotecarios, de documentaci&oacute;n e informaci&oacute;n especializada en el &aacute;rea de la salud y seguridad social; como un recurso indispensable para apoyar la gesti&oacute;n, investigaci&oacute;n y el mejoramiento de la pr&aacute;ctica de la salud p&uacute;blica.</p>', '#', 'nosotros', 3, 1, '2019-05-08 20:27:47', '2019-05-08 20:52:18'),
(4, 'informaciones\\May2019\\1bfv9U3KgMth0DKMbnxr.png', 'informaciones\\May2019\\3l08qfGq60VwjAowKexg.png', 'Catálogo en línea', '<p>Es un cat&aacute;logo automatizado de acceso p&uacute;blico en l&iacute;nea de todos los materiales de la biblioteca.</p>', 'http://catalogoessalud.bibliolatino.com/', 'recursos', 1, 1, '2019-05-08 20:29:28', '2019-05-08 22:48:11'),
(5, 'informaciones\\May2019\\4hsc3Aphw55Xw7yR1kDS.png', 'informaciones\\May2019\\KryTweErDVU4bcfr7DgD.png', 'Repositorio', '<p>Es un espacio centralizado donde se almacena, organiza, mantiene y difunde informaci&oacute;n producida por Essalud.</p>', 'http://repositorio.essalud.gob.pe/', 'recursos', 2, 1, '2019-05-08 20:29:47', '2019-05-08 22:48:26'),
(6, 'informaciones\\May2019\\V2vzLzFCQg2hDoRccTFQ.png', 'informaciones\\May2019\\qFq2ZJjoaXHC7aHRi5pD.png', 'Base de datos', '<p>Son colecciones de informaci&oacute;n organizada que cubren la especialidad de medicina.</p>', 'base-de-datos', 'recursos', 3, 1, '2019-05-08 20:30:15', '2019-05-08 22:48:34'),
(7, NULL, 'informaciones\\May2019\\aFW36n3GgIb7ljmyYfnV.png', 'Préstamos domicilio', '<p>Este servicio est&aacute; dirigido a los usuarios internos, a quienes podemos prestarle libros, revistas y material audiovisual para su uso fuera de las instalaciones de la Biblioteca.</p>\r\n<p>El pr&eacute;stamo a domicilio es de 03 d&iacute;as h&aacute;biles contados a partir del d&iacute;a siguiente de realizado el pr&eacute;stamo y el usuario deber&aacute; llenar un formulario de servicio dejando su documento de identidad mientras tenga el material bibliogr&aacute;fico.</p>\r\n<p>En caso de requerir mayor plazo podr&aacute; solicitar al bibliotecario la ampliaci&oacute;n del pr&eacute;stamo por 02 d&iacute;as h&aacute;biles adicionales.</p>', '#', 'servicios', 2, 1, '2019-05-08 20:33:19', '2019-05-08 20:52:10'),
(8, NULL, 'informaciones\\May2019\\fh540lPFzAePSfqnDShy.png', 'Búsqueda de información y bibliografías', '<p>Los usuarios pueden solicitar al bibliotecario informaci&oacute;n requerida y el bibliotecario entregar&aacute; la informaci&oacute;n al usuario por correo electr&oacute;nico o le comunicar&aacute; la disponibilidad del material para que pueda apersonarse a solicitarlo para su uso en sala o pr&eacute;stamo a domicilio.</p>\r\n<p>Asimismo, el bibliotecario podr&aacute; elaborar una bibliograf&iacute;a especializada sobre un tema requerido por el usuario y envi&aacute;rsela por correo electr&oacute;nico.</p>', '#', 'servicios', 3, 1, '2019-05-08 20:38:52', '2019-05-08 22:27:19'),
(9, NULL, 'informaciones\\May2019\\Ddxs0ganc16GWVuYDie5.png', 'Préstamos sala', '<p>Este servicio está dirigido a los usuarios internos, a quienes podemos prestarle libros, revistas y material audiovisual para su uso fuera de las instalaciones de la Biblioteca.</p>\r\n<p>El préstamo a domicilio es de 03 días hábiles contados a partir del día siguiente de realizado el préstamo y el usuario deberá llenar un formulario de servicio dejando su documento de identidad mientras tenga el material bibliográfico.</p>\r\n<p>En caso de requerir mayor plazo podrá solicitar al bibliotecario la ampliación del préstamo por 02 días hábiles adicionales.</p>', '#', 'servicios', 1, 1, '2019-05-09 00:53:38', '2019-05-31 03:51:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-04-26 22:03:21', '2019-04-26 22:03:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2019-04-26 22:03:21', '2019-04-26 22:03:21', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2019-04-26 22:03:21', '2019-05-07 20:50:44', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2019-04-26 22:03:21', '2019-04-26 22:03:21', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2019-04-26 22:03:21', '2019-04-26 22:03:21', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 5, '2019-04-26 22:03:21', '2019-05-07 20:50:44', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-04-26 22:03:21', '2019-05-07 20:50:44', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-04-26 22:03:21', '2019-05-07 20:50:44', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-04-26 22:03:21', '2019-05-07 20:50:44', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-04-26 22:03:21', '2019-05-07 20:50:44', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 6, '2019-04-26 22:03:21', '2019-05-07 20:50:44', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2019-04-26 22:03:25', '2019-05-07 20:50:44', 'voyager.hooks', NULL),
(12, 1, 'Novedades', '', '_self', NULL, NULL, NULL, 17, '2019-05-02 20:05:33', '2019-05-31 19:37:04', 'voyager.novedades.index', NULL),
(13, 1, 'Suscripciones al boletín', '', '_self', NULL, '#000000', NULL, 16, '2019-05-07 01:20:54', '2019-05-31 19:37:05', 'voyager.suscripciones-al-boletin.index', 'null'),
(14, 1, 'Actividades', '', '_self', NULL, NULL, NULL, 15, '2019-05-07 01:23:19', '2019-05-31 19:37:05', 'voyager.actividades.index', NULL),
(15, 1, 'Base de datos', '', '_self', NULL, NULL, NULL, 14, '2019-05-07 01:31:31', '2019-05-31 19:36:48', 'voyager.datos.index', NULL),
(16, 1, 'Detalles de novedades', '', '_self', NULL, '#000000', NULL, 18, '2019-05-07 02:31:09', '2019-05-31 21:07:12', 'voyager.detalles.index', 'null'),
(17, 1, 'Normativas', '', '_self', NULL, NULL, NULL, 13, '2019-05-08 01:13:25', '2019-05-31 19:36:48', 'voyager.normativas.index', NULL),
(18, 1, 'Banners', '', '_self', NULL, NULL, NULL, 11, '2019-05-08 04:20:08', '2019-05-31 19:36:50', 'voyager.banners.index', NULL),
(19, 1, 'Contacto', '', '_self', NULL, '#000000', NULL, 8, '2019-05-08 04:21:09', '2019-05-31 19:34:50', 'voyager.contacto.index', 'null'),
(20, 1, 'Enlaces de interés', '', '_self', NULL, '#000000', NULL, 10, '2019-05-08 04:24:46', '2019-05-31 20:07:26', 'voyager.enlaces-interes.index', 'null'),
(21, 1, 'Header', '', '_self', NULL, '#000000', NULL, 7, '2019-05-08 04:26:06', '2019-05-31 19:35:51', 'voyager.header.index', 'null'),
(22, 1, 'Bloques', '', '_self', NULL, '#000000', NULL, 12, '2019-05-08 04:28:08', '2019-05-31 19:36:50', 'voyager.bloques.index', 'null'),
(23, 1, 'Redes sociales', '', '_self', NULL, NULL, NULL, 9, '2019-05-08 04:30:13', '2019-05-31 19:36:35', 'voyager.redes-sociales.index', NULL),
(27, 1, 'Popup', '', '_self', NULL, NULL, NULL, 20, '2019-06-21 21:22:33', '2019-06-21 21:22:33', 'voyager.popup.index', NULL),
(29, 1, 'Biblioteca/boletines', '', '_self', NULL, '#000000', NULL, 19, '2019-06-21 21:33:12', '2019-06-21 22:10:24', 'voyager.biblioteca-boletines.index', 'null');

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_04_26_162159_create_subscribers_table', 1),
(24, '2019_04_26_162334_create_news_table', 1),
(25, '2019_04_26_162523_create_activities_table', 1),
(26, '2019_04_29_233256_create_datos_table', 2),
(27, '2019_04_29_233926_add_descripcion_to_datos_table', 3),
(28, '2019_05_06_211637_create_detalles_table', 4),
(29, '2019_05_07_180359_create_normativas_table', 5),
(30, '2019_05_07_201742_add_titulo_to_normativas_table', 6),
(31, '2019_05_07_230509_create_enlaces_table', 7),
(32, '2019_05_07_230535_create_contactos_table', 7),
(33, '2019_05_07_230553_create_redes_table', 7),
(34, '2019_05_07_230617_create_banners_table', 7),
(35, '2019_05_07_230628_create_headers_table', 7),
(36, '2019_05_07_230642_create_informacions_table', 7),
(37, '2019_05_08_145529_add_nombre_to_redes_table', 8),
(38, '2019_05_08_161450_add_telefono2_to_contactos_table', 9),
(39, '2019_05_08_174417_add_imagen2_to_informacions_table', 10),
(40, '2019_06_06_152601_create_bibliotecas_table', 11),
(41, '2019_06_06_154538_add_tipo_to_bibliotecas_table', 12),
(42, '2019_06_21_153735_add_banner_to_bibliotecas_table', 13),
(43, '2019_06_21_161221_create_popups_table', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relacion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` tinyint(1) NOT NULL DEFAULT 1,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `news`
--

INSERT INTO `news` (`id`, `nombre`, `slug`, `imagen`, `banner`, `fecha`, `hora`, `descripcion`, `titulo`, `descripcion2`, `relacion`, `tipo`, `orden`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Nuevo Catálogo Online', NULL, 'novedades/May2019/iWVTX7NMMQTWF9oOuezR.jpg', 'novedades/May2019/Qeg5GXbXXFcKvOTKTlzn.jpg', NULL, NULL, '<p>La Biblioteca Central cuenta con un Cat&aacute;logo Bibliogr&aacute;fico el cual permitir&aacute; conocer todo el material bibliogr&aacute;fico con el que cuenta la Biblioteca Central desde cualquier computadora que tenga acceso a internet. Por otra parte permitir&aacute; automatizar los procesos operativos de la Biblioteca Central como el ingreso de libros, revistas y otras fuentes de informaci&oacute;n.</p>\r\n<p>La direcci&oacute;n electr&oacute;nica es:</p>\r\n<p><a href=\"http://catalogoessalud.bibliolatino.com/\">http://catalogoessalud.bibliolatino.com/</a></p>', '', '', 'hospital', 'noticias', 1, 1, NULL, '2019-05-07 03:08:42'),
(2, 'Donación de Libros Históricos', NULL, 'novedades/May2019/m6rDIaZdjhimDx8Y9gZE.jpg', '', NULL, NULL, '<p>La Biblioteca Central recibi&oacute; la donaci&oacute;n de 09 libros del reconocido Dr. Carlos Bustos Roman&iacute;, investigador de salud p&uacute;blica, seguridad social y pol&iacute;tica social peruana y mundial.</p>', '', '', 'hospital', 'noticias', 1, 1, NULL, '2019-05-07 20:47:35'),
(3, 'Inclusión del Repositorio Institucional de Essalud en el Repositorio Nacional Digital de Ciencia, Tecnología e Innovación de Acceso Abierto del Consejo Nacional de Ciencia, Tecnología e Innovación Tecnológica – ALICIA de CONCYTEC', NULL, '3.jpg', 'novedades/May2019/1rIc5Ga6FKkGLKrYyp7M.jpg', NULL, NULL, '<p>El Seguro Social de Salud se integr&oacute; al Repositorio Nacional Alicia, el 30 de enero del presente, mediante Oficio N&deg; 006-2019-CONCYTEC-DEGC.</p>\r\n<p>Actualmente, Alicia cuenta ahora con m&aacute;s de 48 mil archivos de 45 instituciones y entidades p&uacute;blicas y privadas del pa&iacute;s que han registrado los documentos de su producci&oacute;n cient&iacute;fica y tecnol&oacute;gica, a trav&eacute;s de sus repositorios institucionales.</p>\r\n<p>Alicia, permite el acceso a la informaci&oacute;n cient&iacute;fica y promueve el intercambio de informaci&oacute;n entre las diferentes instituciones de nuestro pa&iacute;s.</p>\r\n<p>Al respecto CONCYTEC, m&aacute;xima instancia de la Red Nacional de Repositorios Digitales de Ciencia, Tecnolog&iacute;a e Innovaci&oacute;n de Acceso Abierto (RENARE), realizar&aacute; de manera peri&oacute;dica el monitoreo y evaluaci&oacute;n correspondiente de los metadatos, as&iacute; como el acceso a los textos completos de las publicaciones.</p>', '', '', 'hospital', 'noticias', 1, 1, NULL, '2019-05-07 03:09:07'),
(4, 'Adquisición de dos escáneres planetarios', NULL, '4.jpg', 'novedades/May2019/1h2RHTBGHqYvPexTnrT6.jpg', NULL, NULL, '<p>La Biblioteca Central, tendr&aacute; la posibilidad de digitalizar las publicaciones del Seguro Social de Salud, gracias a la adquisici&oacute;n de dos esc&aacute;neres planetarios. Asimismo, este equipo tecnol&oacute;gico, permitir&aacute; digitalizar sus publicaciones antiguas sobre la historia del Seguro Social de Salud.</p>', '', '', 'hospital', 'noticias', 1, 1, NULL, '2019-05-07 03:09:22'),
(7, 'Biblioteca en 1 minuto', NULL, 'novedades\\May2019\\RhwoCnkFZ7CHeYLAjwj8.jpg', 'novedades/June2019/cUNyEci7WyUbUSoSg9Ps.png', NULL, NULL, '<p>La Biblioteca Central ha puesto a disposici&oacute;n de los usuarios este servicio gratuito, el cual consiste en notificaciones a trav&eacute;s de correo electr&oacute;nico con informaci&oacute;n muy puntual sobre alg&uacute;n aspecto u novedad de la biblioteca. Por ejemplo, los &uacute;ltimos libros adquiridos, visita de alg&uacute;n autor, implementaci&oacute;n de un nuevo servicio, etc.</p>', NULL, NULL, NULL, 'otro', 1, 1, '2019-05-08 22:32:41', '2019-06-22 01:46:13'),
(8, 'Boletines', NULL, 'novedades/June2019/STGuoZzYY3kTFyQhKf1R.jpg', 'novedades\\June2019\\lyhtvOtxFFqX6A6tqwQ4.png', NULL, NULL, '<p>La Biblioteca Central ha puesto a disposici&oacute;n de los usuarios este servicio gratuito, el cual consiste en notificaciones a trav&eacute;s de correo electr&oacute;nico con informaci&oacute;n muy puntual sobre alg&uacute;n aspecto u novedad de la biblioteca. Por ejemplo, los &uacute;ltimos libros adquiridos, visita de alg&uacute;n autor, implementaci&oacute;n de un nuevo servicio, etc.</p>', NULL, NULL, NULL, 'otro', 2, 1, '2019-06-06 20:06:30', '2019-06-22 02:42:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `normativas`
--

CREATE TABLE `normativas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titulo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlace` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` tinyint(1) NOT NULL DEFAULT 1,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `normativas`
--

INSERT INTO `normativas` (`id`, `nombre`, `titulo`, `statu`, `imagen`, `banner`, `descripcion`, `enlace`, `orden`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Directiva', 'Directiva N° 011-GG-ESSALUD-2016: “Normas de Bibliotecas del Seguro Social de Salud (ESSALUD)”', 'Directiva N° 011-GG-ESSALUD-2016: “Normas de Bibliotecas del Seguro Social de Salud (ESSALUD)”', 'normativas/May2019/ljbPvgMGGQr4NUcXhm4S.jpg', NULL, '<p>La Biblioteca Central, pone a disposici&oacute;n de su comunidad de usuarios la <a href=\"http://t2.webtilia.com/clientes/in/essalud2/public/storage/directiva.pdf\" target=\"_blank\" rel=\"noopener noreferrer\">Directiva N&deg; 011-GG-ESSALUD-2016: &ldquo;Normas de Bibliotecas del Seguro Social de Salud (ESSALUD)&rdquo;</a>, el cual es un instrumento institucional que integra y regula estructural, normativa y funcionalmente el Sistema de Bibliotecas del Seguro Social de Salud &ndash; ESSALUD.</p>\r\n<p>Copyright &copy; Todos los Derechos Reservados.</p>\r\n<p>&nbsp;</p>', 'directiva.pdf', 1, 1, '2019-05-08 01:21:32', '2019-05-31 04:53:10'),
(2, 'Manual de Procedimientos', 'Manual de Procedimientos', 'Manual de Procedimientos', 'normativas/May2019/2zfmk6rA9g6exAnhWi7I.jpg', NULL, '<p>El Seguro Social de Salud - ESSALUD en el Marco de la Pol&iacute;tica Nacional de Modernizaci&oacute;n de la Gesti&oacute;n P&uacute;blica aprobada mediante Decreto Supremo N&ordm; 004-2013-PCM, viene implementando la gesti&oacute;n por procesos con la finalidad de brindar a los usuarios servicios eficientes, para satisfacer sus necesidades y demandas. En dicho contexto se ha elaborado el&nbsp;<a href=\"http://t2.webtilia.com/clientes/in/essalud2/public/storage/procedimientos.pdf\" target=\"_blank\" rel=\"noopener noreferrer\">\"Manual de Procedimientos\"</a> que contiene los procesos que desarrolla la Biblioteca Central.</p>\r\n<p>Copyright &copy; Todos los Derechos Reservados.</p>', 'procedimientos.pdf', 1, 1, '2019-05-08 01:27:04', '2019-05-08 02:06:09'),
(3, 'Reglamento de uso de la biblioteca', NULL, 'Reglamento de uso de la biblioteca', 'normativas/May2019/2leGlUG9PiotEfzk5Stv.jpg', NULL, NULL, NULL, 1, 1, NULL, '2019-05-08 01:32:35'),
(4, 'Plan de Desarrollo de Colecciones', NULL, 'Plan de Desarrollo de Colecciones', 'normativas/May2019/tMC5S5lvfByPPmEqn9yP.jpg', NULL, NULL, NULL, 1, 1, NULL, '2019-05-08 01:32:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-04-26 22:03:21', '2019-04-26 22:03:21'),
(2, 'browse_bread', NULL, '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(3, 'browse_database', NULL, '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(4, 'browse_media', NULL, '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(5, 'browse_compass', NULL, '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(6, 'browse_menus', 'menus', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(7, 'read_menus', 'menus', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(8, 'edit_menus', 'menus', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(9, 'add_menus', 'menus', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(10, 'delete_menus', 'menus', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(11, 'browse_roles', 'roles', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(12, 'read_roles', 'roles', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(13, 'edit_roles', 'roles', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(14, 'add_roles', 'roles', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(15, 'delete_roles', 'roles', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(16, 'browse_users', 'users', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(17, 'read_users', 'users', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(18, 'edit_users', 'users', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(19, 'add_users', 'users', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(20, 'delete_users', 'users', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(21, 'browse_settings', 'settings', '2019-04-26 22:03:22', '2019-04-26 22:03:22'),
(22, 'read_settings', 'settings', '2019-04-26 22:03:23', '2019-04-26 22:03:23'),
(23, 'edit_settings', 'settings', '2019-04-26 22:03:23', '2019-04-26 22:03:23'),
(24, 'add_settings', 'settings', '2019-04-26 22:03:23', '2019-04-26 22:03:23'),
(25, 'delete_settings', 'settings', '2019-04-26 22:03:23', '2019-04-26 22:03:23'),
(26, 'browse_hooks', NULL, '2019-04-26 22:03:25', '2019-04-26 22:03:25'),
(27, 'browse_news', 'news', '2019-05-02 20:05:33', '2019-05-02 20:05:33'),
(28, 'read_news', 'news', '2019-05-02 20:05:33', '2019-05-02 20:05:33'),
(29, 'edit_news', 'news', '2019-05-02 20:05:33', '2019-05-02 20:05:33'),
(30, 'add_news', 'news', '2019-05-02 20:05:33', '2019-05-02 20:05:33'),
(31, 'delete_news', 'news', '2019-05-02 20:05:33', '2019-05-02 20:05:33'),
(32, 'browse_subscribers', 'subscribers', '2019-05-07 01:20:54', '2019-05-07 01:20:54'),
(33, 'read_subscribers', 'subscribers', '2019-05-07 01:20:54', '2019-05-07 01:20:54'),
(34, 'edit_subscribers', 'subscribers', '2019-05-07 01:20:54', '2019-05-07 01:20:54'),
(35, 'add_subscribers', 'subscribers', '2019-05-07 01:20:54', '2019-05-07 01:20:54'),
(36, 'delete_subscribers', 'subscribers', '2019-05-07 01:20:54', '2019-05-07 01:20:54'),
(37, 'browse_activities', 'activities', '2019-05-07 01:23:18', '2019-05-07 01:23:18'),
(38, 'read_activities', 'activities', '2019-05-07 01:23:18', '2019-05-07 01:23:18'),
(39, 'edit_activities', 'activities', '2019-05-07 01:23:18', '2019-05-07 01:23:18'),
(40, 'add_activities', 'activities', '2019-05-07 01:23:18', '2019-05-07 01:23:18'),
(41, 'delete_activities', 'activities', '2019-05-07 01:23:18', '2019-05-07 01:23:18'),
(42, 'browse_datos', 'datos', '2019-05-07 01:31:31', '2019-05-07 01:31:31'),
(43, 'read_datos', 'datos', '2019-05-07 01:31:31', '2019-05-07 01:31:31'),
(44, 'edit_datos', 'datos', '2019-05-07 01:31:31', '2019-05-07 01:31:31'),
(45, 'add_datos', 'datos', '2019-05-07 01:31:31', '2019-05-07 01:31:31'),
(46, 'delete_datos', 'datos', '2019-05-07 01:31:31', '2019-05-07 01:31:31'),
(47, 'browse_detalles', 'detalles', '2019-05-07 02:31:09', '2019-05-07 02:31:09'),
(48, 'read_detalles', 'detalles', '2019-05-07 02:31:09', '2019-05-07 02:31:09'),
(49, 'edit_detalles', 'detalles', '2019-05-07 02:31:09', '2019-05-07 02:31:09'),
(50, 'add_detalles', 'detalles', '2019-05-07 02:31:09', '2019-05-07 02:31:09'),
(51, 'delete_detalles', 'detalles', '2019-05-07 02:31:09', '2019-05-07 02:31:09'),
(52, 'browse_normativas', 'normativas', '2019-05-08 01:13:25', '2019-05-08 01:13:25'),
(53, 'read_normativas', 'normativas', '2019-05-08 01:13:25', '2019-05-08 01:13:25'),
(54, 'edit_normativas', 'normativas', '2019-05-08 01:13:25', '2019-05-08 01:13:25'),
(55, 'add_normativas', 'normativas', '2019-05-08 01:13:25', '2019-05-08 01:13:25'),
(56, 'delete_normativas', 'normativas', '2019-05-08 01:13:25', '2019-05-08 01:13:25'),
(57, 'browse_banners', 'banners', '2019-05-08 04:20:08', '2019-05-08 04:20:08'),
(58, 'read_banners', 'banners', '2019-05-08 04:20:08', '2019-05-08 04:20:08'),
(59, 'edit_banners', 'banners', '2019-05-08 04:20:08', '2019-05-08 04:20:08'),
(60, 'add_banners', 'banners', '2019-05-08 04:20:08', '2019-05-08 04:20:08'),
(61, 'delete_banners', 'banners', '2019-05-08 04:20:08', '2019-05-08 04:20:08'),
(62, 'browse_contactos', 'contactos', '2019-05-08 04:21:09', '2019-05-08 04:21:09'),
(63, 'read_contactos', 'contactos', '2019-05-08 04:21:09', '2019-05-08 04:21:09'),
(64, 'edit_contactos', 'contactos', '2019-05-08 04:21:09', '2019-05-08 04:21:09'),
(65, 'add_contactos', 'contactos', '2019-05-08 04:21:09', '2019-05-08 04:21:09'),
(66, 'delete_contactos', 'contactos', '2019-05-08 04:21:09', '2019-05-08 04:21:09'),
(67, 'browse_enlaces', 'enlaces', '2019-05-08 04:24:46', '2019-05-08 04:24:46'),
(68, 'read_enlaces', 'enlaces', '2019-05-08 04:24:46', '2019-05-08 04:24:46'),
(69, 'edit_enlaces', 'enlaces', '2019-05-08 04:24:46', '2019-05-08 04:24:46'),
(70, 'add_enlaces', 'enlaces', '2019-05-08 04:24:46', '2019-05-08 04:24:46'),
(71, 'delete_enlaces', 'enlaces', '2019-05-08 04:24:46', '2019-05-08 04:24:46'),
(72, 'browse_headers', 'headers', '2019-05-08 04:26:06', '2019-05-08 04:26:06'),
(73, 'read_headers', 'headers', '2019-05-08 04:26:06', '2019-05-08 04:26:06'),
(74, 'edit_headers', 'headers', '2019-05-08 04:26:06', '2019-05-08 04:26:06'),
(75, 'add_headers', 'headers', '2019-05-08 04:26:06', '2019-05-08 04:26:06'),
(76, 'delete_headers', 'headers', '2019-05-08 04:26:06', '2019-05-08 04:26:06'),
(77, 'browse_informacions', 'informacions', '2019-05-08 04:28:08', '2019-05-08 04:28:08'),
(78, 'read_informacions', 'informacions', '2019-05-08 04:28:08', '2019-05-08 04:28:08'),
(79, 'edit_informacions', 'informacions', '2019-05-08 04:28:08', '2019-05-08 04:28:08'),
(80, 'add_informacions', 'informacions', '2019-05-08 04:28:08', '2019-05-08 04:28:08'),
(81, 'delete_informacions', 'informacions', '2019-05-08 04:28:08', '2019-05-08 04:28:08'),
(82, 'browse_redes', 'redes', '2019-05-08 04:30:12', '2019-05-08 04:30:12'),
(83, 'read_redes', 'redes', '2019-05-08 04:30:12', '2019-05-08 04:30:12'),
(84, 'edit_redes', 'redes', '2019-05-08 04:30:12', '2019-05-08 04:30:12'),
(85, 'add_redes', 'redes', '2019-05-08 04:30:12', '2019-05-08 04:30:12'),
(86, 'delete_redes', 'redes', '2019-05-08 04:30:12', '2019-05-08 04:30:12'),
(102, 'browse_popups', 'popups', '2019-06-21 21:22:33', '2019-06-21 21:22:33'),
(103, 'read_popups', 'popups', '2019-06-21 21:22:33', '2019-06-21 21:22:33'),
(104, 'edit_popups', 'popups', '2019-06-21 21:22:33', '2019-06-21 21:22:33'),
(105, 'add_popups', 'popups', '2019-06-21 21:22:33', '2019-06-21 21:22:33'),
(106, 'delete_popups', 'popups', '2019-06-21 21:22:33', '2019-06-21 21:22:33'),
(112, 'browse_bibliotecas', 'bibliotecas', '2019-06-21 21:33:12', '2019-06-21 21:33:12'),
(113, 'read_bibliotecas', 'bibliotecas', '2019-06-21 21:33:12', '2019-06-21 21:33:12'),
(114, 'edit_bibliotecas', 'bibliotecas', '2019-06-21 21:33:12', '2019-06-21 21:33:12'),
(115, 'add_bibliotecas', 'bibliotecas', '2019-06-21 21:33:12', '2019-06-21 21:33:12'),
(116, 'delete_bibliotecas', 'bibliotecas', '2019-06-21 21:33:12', '2019-06-21 21:33:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2),
(45, 1),
(45, 2),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(48, 2),
(49, 1),
(49, 2),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 2),
(54, 1),
(54, 2),
(55, 1),
(55, 2),
(56, 1),
(56, 2),
(57, 1),
(57, 2),
(58, 1),
(58, 2),
(59, 1),
(59, 2),
(60, 1),
(60, 2),
(61, 1),
(61, 2),
(62, 1),
(62, 2),
(63, 1),
(63, 2),
(64, 1),
(64, 2),
(65, 1),
(66, 1),
(67, 1),
(67, 2),
(68, 1),
(68, 2),
(69, 1),
(69, 2),
(70, 1),
(70, 2),
(71, 1),
(71, 2),
(72, 1),
(72, 2),
(73, 1),
(73, 2),
(74, 1),
(74, 2),
(75, 1),
(75, 2),
(76, 1),
(76, 2),
(77, 1),
(77, 2),
(78, 1),
(78, 2),
(79, 1),
(79, 2),
(80, 1),
(80, 2),
(81, 1),
(81, 2),
(82, 1),
(82, 2),
(83, 1),
(83, 2),
(84, 1),
(84, 2),
(85, 1),
(85, 2),
(86, 1),
(86, 2),
(102, 1),
(102, 2),
(103, 1),
(103, 2),
(104, 1),
(104, 2),
(112, 1),
(112, 2),
(113, 1),
(113, 2),
(114, 1),
(114, 2),
(115, 1),
(115, 2),
(116, 1),
(116, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `popups`
--

CREATE TABLE `popups` (
  `id` int(10) UNSIGNED NOT NULL,
  `backround` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popup1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popup2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `popups`
--

INSERT INTO `popups` (`id`, `backround`, `popup1`, `popup2`, `link`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'bg-modal.png', 'pop-up1.png', 'pop-up2.png', '#', 1, NULL, '2019-06-22 00:26:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(10) UNSIGNED NOT NULL,
  `enlace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` tinyint(1) NOT NULL DEFAULT 1,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `enlace`, `nombre`, `orden`, `estado`, `created_at`, `updated_at`) VALUES
(2, 'https://www.youtube.com/channel/UCmRX5tKgzi32LzAvfTjx3gA', 'youtube', 3, 1, '2019-05-08 20:15:49', '2019-05-11 00:39:47'),
(3, 'https://twitter.com/EsSaludPeru?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'twitter', 2, 1, '2019-05-08 20:16:16', '2019-05-11 00:40:00'),
(4, 'https://www.facebook.com/EsSaludPeruOficial/', 'facebook-f', 1, 1, '2019-05-08 20:16:27', '2019-05-11 00:39:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-04-26 22:03:21', '2019-04-26 22:03:21'),
(2, 'user', 'Normal User', '2019-04-26 22:03:21', '2019-04-26 22:03:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\May2019\\0gtIZjsOPHVPK30gOQXX.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'EsSalud', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Bienvenido al administrador de EsSalud', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings\\May2019\\xdBdqymRz9LQ1VM6YnOe.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\May2019\\9KLRTee7MB4LXyHO8ctl.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'zmacayo@gmail.com', '2019-05-31 21:34:46', '2019-05-31 22:03:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@essalud.com', 'users\\May2019\\aGJwm26g4ImMVbvxHMra.png', '$2y$10$iLDISP0pk4T0THmkinaYzODPfG0fuhKSDfts.DUOdzJcUib8nKIu2', 'CRShdpS7f2yb0EU4PeFHqILvDSEcYTBxjaHgGEfZpoyPlXuKeL29oEX364FA', '{\"locale\":\"es\"}', '2019-04-26 22:03:48', '2019-05-09 19:48:41'),
(2, 2, 'user', 'user@essalud.com', 'users\\May2019\\a1cq72X172AyOtFyX2NC.png', '$2y$10$M3lfRMMR0kE.lOfzS5NEDO36iNuIEUwYz.OrrTG7sRNxf4BBRgd.W', 'tLIVXUZRLnWNySAFGcAoeEREvHETLoGTTEdVOteUnL4cHRU6fdBvEmUO96SY', '{\"locale\":\"es\"}', '2019-05-07 22:30:15', '2019-05-09 19:48:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bibliotecas`
--
ALTER TABLE `bibliotecas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bibliotecas_novedad_id_foreign` (`novedad_id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indices de la tabla `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalles_novedad_id_foreign` (`novedad_id`);

--
-- Indices de la tabla `enlaces`
--
ALTER TABLE `enlaces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informacions`
--
ALTER TABLE `informacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indices de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `normativas`
--
ALTER TABLE `normativas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indices de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `bibliotecas`
--
ALTER TABLE `bibliotecas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT de la tabla `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `enlaces`
--
ALTER TABLE `enlaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `informacions`
--
ALTER TABLE `informacions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `normativas`
--
ALTER TABLE `normativas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de la tabla `popups`
--
ALTER TABLE `popups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bibliotecas`
--
ALTER TABLE `bibliotecas`
  ADD CONSTRAINT `bibliotecas_novedad_id_foreign` FOREIGN KEY (`novedad_id`) REFERENCES `news` (`id`);

--
-- Filtros para la tabla `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_novedad_id_foreign` FOREIGN KEY (`novedad_id`) REFERENCES `news` (`id`);

--
-- Filtros para la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
