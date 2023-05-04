-- --------------------------------------------------------
-- Host:                         
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para pestanias
CREATE DATABASE IF NOT EXISTS `pestanias` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `pestanias`;

-- Volcando estructura para tabla pestanias.carrucel
CREATE TABLE IF NOT EXISTS `carrucel` (
  `id_carrucel` int(11) DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `texto` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `estatus` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla pestanias.carrucel: ~3 rows (aproximadamente)
DELETE FROM `carrucel`;
/*!40000 ALTER TABLE `carrucel` DISABLE KEYS */;
INSERT INTO `carrucel` (`id_carrucel`, `foto`, `texto`, `estatus`) VALUES
	(1, 'carousel-1.jpg', '¡SIÉNTETE HERMOSA EN UN ABRIR Y CERRAR DE OJOS!', 'activo'),
	(2, 'carousel-2.jpg', '¡LUCIRÁS RADIANTE EN CUALQUIER OCASIÓN!', 'activo'),
	(3, 'carousel-3.jpg', '¡COMIENZA TU DÍA CON ESTILO Y ELEGANCIA!', 'activo');
/*!40000 ALTER TABLE `carrucel` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.cat_movimiento
CREATE TABLE IF NOT EXISTS `cat_movimiento` (
  `CVE_MOVIMIENTO` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Movimiento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`CVE_MOVIMIENTO`),
  KEY `cat_movimiento_cve_movimiento_index` (`CVE_MOVIMIENTO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.cat_movimiento: ~0 rows (aproximadamente)
DELETE FROM `cat_movimiento`;
/*!40000 ALTER TABLE `cat_movimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_movimiento` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.cat_permiso
CREATE TABLE IF NOT EXISTS `cat_permiso` (
  `ID_Permiso` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `permiso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_Permiso`),
  KEY `cat_permiso_id_permiso_index` (`ID_Permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.cat_permiso: ~0 rows (aproximadamente)
DELETE FROM `cat_permiso`;
/*!40000 ALTER TABLE `cat_permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_permiso` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.migrations: ~6 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_07_08_204013_create_permission_tables', 1),
	(2, '2019_07_10_143359_cat_movimiento', 1),
	(3, '2019_07_10_143525_tb_bitacora', 1),
	(4, '2019_07_10_143549_cat_permisos', 1),
	(5, '2019_07_10_143634_tb_users', 1),
	(6, '2019_07_10_143701_tb_permiso_usuario', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.model_has_permissions: ~0 rows (aproximadamente)
DELETE FROM `model_has_permissions`;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.model_has_roles: ~1 rows (aproximadamente)
DELETE FROM `model_has_roles`;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\User', 1);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.permissions: ~8 rows (aproximadamente)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador', 'web', NULL, NULL),
	(2, 'Personal', 'web', NULL, NULL),
	(3, 'Clientes', 'web', NULL, NULL),
	(4, 'Recursos Humanos', 'web', NULL, NULL),
	(5, 'Ejecutivo de cuenta(Capturista)', 'web', NULL, NULL),
	(6, 'Ejecutivo de proyectos', 'web', NULL, NULL),
	(7, 'Cobranza', 'web', NULL, NULL),
	(8, 'Ejecutivo de Inventarios', 'web', NULL, NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.roles: ~6 rows (aproximadamente)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador', 'web', NULL, NULL),
	(2, 'Vendedor', 'web', NULL, NULL),
	(3, 'Clientes', 'web', NULL, NULL),
	(4, 'Recursos Humanos', 'web', NULL, NULL),
	(5, 'Ejecutivo de cuenta(Capturista)', 'web', NULL, NULL),
	(6, 'Ejecutivo de proyectos', 'web', NULL, NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.role_has_permissions: ~1 rows (aproximadamente)
DELETE FROM `role_has_permissions`;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.tb_bitacora
CREATE TABLE IF NOT EXISTS `tb_bitacora` (
  `ID_Bitacora` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ID_EMPLEADO` bigint(20) NOT NULL,
  `nomempleado` bigint(20) NOT NULL,
  `CVE_MOVIMIENTO` bigint(20) NOT NULL,
  `Movimiento` varchar(1200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_Bitacora`),
  KEY `tb_bitacora_id_bitacora_index` (`ID_Bitacora`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.tb_bitacora: ~16 rows (aproximadamente)
DELETE FROM `tb_bitacora`;
/*!40000 ALTER TABLE `tb_bitacora` DISABLE KEYS */;
INSERT INTO `tb_bitacora` (`ID_Bitacora`, `ID_EMPLEADO`, `nomempleado`, `CVE_MOVIMIENTO`, `Movimiento`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 0, 6, 'El usuario Luis Enrique Camarena Serratos con el ID_Empleado 1 se logueo en el sistema', NULL, '2023-03-22 19:32:58', NULL),
	(2, 1, 0, 4, 'Ingreso al modulo de mi perfil', NULL, '2023-03-22 19:33:44', NULL),
	(3, 1, 0, 4, 'Actualizo su informacion de perfil', NULL, '2023-03-22 19:34:01', NULL),
	(4, 1, 0, 4, 'Ingreso al modulo de mi perfil', NULL, '2023-03-22 19:34:01', NULL),
	(5, 1, 0, 4, 'Ingreso al modulo de mi perfil', NULL, '2023-03-22 19:39:01', NULL),
	(6, 1, 0, 4, 'Ingreso al modulo de mi perfil', NULL, '2023-03-22 19:39:17', NULL),
	(7, 1, 0, 4, 'Ingreso al modulo de mi perfil', NULL, '2023-03-22 19:42:03', NULL),
	(8, 1, 0, 4, 'Ingreso al modulo de nuevo usuario de sistema ', NULL, '2023-03-22 19:42:09', NULL),
	(9, 1, 0, 4, 'Ingreso al modulo de listado de usuarios ', NULL, '2023-03-22 19:42:12', NULL),
	(10, 1, 0, 6, 'El usuario Luis Enrique Camarena Serratos con el ID_Empleado 1  cerro sesión en el sistema', NULL, '2023-03-22 19:42:22', NULL),
	(11, 1, 0, 6, 'El usuario Luis Enrique Camarena Serratos con el ID_Empleado 1 se logueo en el sistema', NULL, '2023-03-22 19:55:34', NULL),
	(12, 1, 0, 6, 'El usuario Luis Enrique Camarena Serratos con el ID_Empleado 1  cerro sesión en el sistema', NULL, '2023-03-22 19:57:05', NULL),
	(13, 1, 0, 6, 'El usuario Luis Enrique Camarena Serratos con el ID_Empleado 1 se logueo en el sistema', NULL, '2023-03-22 20:03:36', NULL),
	(14, 1, 0, 6, 'El usuario Luis Enrique Camarena Serratos con el ID_Empleado 1  cerro sesión en el sistema', NULL, '2023-03-22 20:03:58', NULL),
	(15, 1, 0, 6, 'El usuario Luis Enrique Camarena Serratos con el ID_Empleado 1 se logueo en el sistema', NULL, '2023-03-22 20:04:39', NULL),
	(16, 1, 0, 4, 'Ingreso al modulo de mi perfil', NULL, '2023-03-22 20:38:58', NULL);
/*!40000 ALTER TABLE `tb_bitacora` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.tb_permiso_usuario
CREATE TABLE IF NOT EXISTS `tb_permiso_usuario` (
  `ID_REGISTRO` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ID` bigint(20) unsigned NOT NULL,
  `ID_Permiso` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID_REGISTRO`),
  KEY `tb_permiso_usuario_id_foreign` (`ID`),
  KEY `tb_permiso_usuario_id_permiso_foreign` (`ID_Permiso`),
  KEY `tb_permiso_usuario_id_registro_index` (`ID_REGISTRO`),
  CONSTRAINT `tb_permiso_usuario_id_foreign` FOREIGN KEY (`ID`) REFERENCES `users` (`id`),
  CONSTRAINT `tb_permiso_usuario_id_permiso_foreign` FOREIGN KEY (`ID_Permiso`) REFERENCES `cat_permiso` (`ID_Permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.tb_permiso_usuario: ~0 rows (aproximadamente)
DELETE FROM `tb_permiso_usuario`;
/*!40000 ALTER TABLE `tb_permiso_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_permiso_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla pestanias.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellido_Paterno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellido_Materno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Género` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNac` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla pestanias.users: ~1 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Género`, `fechaNac`, `email`, `password`, `estatus`, `Foto`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Luis Enrique', 'Camarena', 'Serratos', '', '0000-00-00', 'admin@gmail.com', '$2y$10$owk1wmllBNzGXCQPHF4j/e5q2BRHBMdwpCXVQYuMphz9BOGR/7Yp2', '1', '1-22-03-2023-167953524179702.jpg', NULL, NULL, '2023-03-22 19:34:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
