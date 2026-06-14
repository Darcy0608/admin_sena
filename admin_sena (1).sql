-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2026 a las 00:49:13
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin_sena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apprentices`
--

CREATE TABLE `apprentices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cell_number` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `computer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `apprentices`
--

INSERT INTO `apprentices` (`id`, `name`, `email`, `cell_number`, `course_id`, `computer_id`, `created_at`, `updated_at`) VALUES
(1, 'Andres Ruiz', 'andres@gmail.com', '3001112233', 1, 1, NULL, NULL),
(2, 'Paula Gomez', 'paula@gmail.com', '3001112234', 2, 2, NULL, NULL),
(3, 'David Rojas', 'david@gmail.com', '3001112235', 3, 3, NULL, NULL),
(4, 'Camila Mora', 'camila@gmail.com', '3001112236', 4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sistemas', NULL, NULL),
(2, 'Tecnologia', NULL, NULL),
(3, 'Matematicas', NULL, NULL),
(4, 'Ingles', NULL, NULL),
(7, 'Computacion', '2026-06-14 14:47:53', '2026-06-14 14:47:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computers`
--

CREATE TABLE `computers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `computers`
--

INSERT INTO `computers` (`id`, `number`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'PC-01', 'Dell', NULL, NULL),
(2, 'PC-02', 'HP', NULL, NULL),
(3, 'PC-03', 'Lenovo', NULL, NULL),
(4, 'PC-04', 'Asus', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_number` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `training_center_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `course_number`, `day`, `area_id`, `training_center_id`, `created_at`, `updated_at`) VALUES
(1, '2876541', 'Lunes', 1, 1, NULL, NULL),
(2, '2876542', 'Martes', 2, 2, NULL, NULL),
(3, '2876543', 'Miercoles', 3, 3, NULL, NULL),
(4, ' 2876544', 'Jueves', 4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course_teachers`
--

CREATE TABLE `course_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `course_teachers`
--

INSERT INTO `course_teachers` (`id`, `course_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2026_04_25_015836_create_areas_table', 1),
(6, '2026_04_25_020327_create_computers_table', 1),
(7, '2026_04_25_020452_create_training_centers_table', 1),
(8, '2026_04_25_020923_create_teachers_table', 1),
(9, '2026_04_25_022412_create_courses_table', 1),
(10, '2026_04_25_023412_create_course_teachers_table', 1),
(11, '2026_04_25_023724_create_apprentices_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `training_center_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `area_id`, `training_center_id`, `created_at`, `updated_at`) VALUES
(1, 'Carlos Perez', 'carlos@sena.edu.co', 1, 1, NULL, NULL),
(2, 'Maria lopez', 'maria@sena.edu.co', 2, 2, NULL, NULL),
(3, 'Juan Torrez', 'juan@sena.edu.co', 3, 3, NULL, NULL),
(4, 'Laura Diaz', 'laura@sena.edu.co', 4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `training_centers`
--

CREATE TABLE `training_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `training_centers`
--

INSERT INTO `training_centers` (`id`, `name`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Centro Industrial', 'Bogota', NULL, NULL),
(2, 'Centro Tecnologico', 'Medellin', NULL, NULL),
(3, 'Centro Empresarial', 'Cali', NULL, NULL),
(4, 'Centro Agroindustrial', 'Palmira', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apprentices`
--
ALTER TABLE `apprentices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `apprentices_course_id_unique` (`course_id`),
  ADD UNIQUE KEY `apprentices_computer_id_unique` (`computer_id`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_area_id_unique` (`area_id`),
  ADD UNIQUE KEY `courses_training_center_id_unique` (`training_center_id`);

--
-- Indices de la tabla `course_teachers`
--
ALTER TABLE `course_teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_teachers_course_id_unique` (`course_id`),
  ADD UNIQUE KEY `course_teachers_teacher_id_unique` (`teacher_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_area_id_unique` (`area_id`),
  ADD UNIQUE KEY `teachers_training_center_id_unique` (`training_center_id`);

--
-- Indices de la tabla `training_centers`
--
ALTER TABLE `training_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apprentices`
--
ALTER TABLE `apprentices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `computers`
--
ALTER TABLE `computers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `course_teachers`
--
ALTER TABLE `course_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `training_centers`
--
ALTER TABLE `training_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apprentices`
--
ALTER TABLE `apprentices`
  ADD CONSTRAINT `apprentices_computer_id_foreign` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `apprentices_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `courses_training_center_id_foreign` FOREIGN KEY (`training_center_id`) REFERENCES `training_centers` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `course_teachers`
--
ALTER TABLE `course_teachers`
  ADD CONSTRAINT `course_teachers_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `course_teachers_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `teachers_training_center_id_foreign` FOREIGN KEY (`training_center_id`) REFERENCES `training_centers` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
