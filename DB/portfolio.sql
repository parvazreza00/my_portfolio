-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2024 at 12:23 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_1_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details_1_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details_2_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details_2_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title_english`, `title_bangla`, `details_1_eng`, `details_1_bng`, `details_2_eng`, `details_2_bng`, `profile_image`, `main_image`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'About my Personal Details', 'About my Personal Details', NULL, NULL, NULL, NULL, 'backend/about/1802623258951484.png', 'backend/about/1802537382784872.png', 'backend/about/1800633538712913.png', '2024-06-01 04:59:19', '2024-06-23 04:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `banner_and_titles`
--

DROP TABLE IF EXISTS `banner_and_titles`;
CREATE TABLE IF NOT EXISTS `banner_and_titles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_and_titles`
--

INSERT INTO `banner_and_titles` (`id`, `title_english`, `title_bangla`, `banner_image`, `page`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Banner Image', 'Banner Image', 'backend/banner_image/1800633148237619.jpeg', 'research', '1', '2024-06-01 04:53:07', '2024-06-01 04:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_des_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_des_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `main_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_image1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_image2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_image3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sent_by` int DEFAULT NULL,
  `name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counter_icons`
--

DROP TABLE IF EXISTS `counter_icons`;
CREATE TABLE IF NOT EXISTS `counter_icons` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_english_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incon_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incon_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incon_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incon_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counter_images`
--

DROP TABLE IF EXISTS `counter_images`;
CREATE TABLE IF NOT EXISTS `counter_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_english_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cvfiles`
--

DROP TABLE IF EXISTS `cvfiles`;
CREATE TABLE IF NOT EXISTS `cvfiles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cv_file` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cvfiles`
--

INSERT INTO `cvfiles` (`id`, `cv_file`, `status`, `created_at`, `updated_at`) VALUES
(1, 'backend/cv/PHP Laravel Developr.pdf', 1, '2024-06-01 04:38:10', '2024-06-20 09:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

DROP TABLE IF EXISTS `footers`;
CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `footer_details_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_details_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `copy_right_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `footer_details_eng`, `footer_details_bng`, `copy_right_text`, `created_at`, `updated_at`) VALUES
(1, 'Nulla in praesentium', 'Ea sint recusandae', 'Ut laborum dolore cu', '2024-06-01 04:55:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

DROP TABLE IF EXISTS `image_galleries`;
CREATE TABLE IF NOT EXISTS `image_galleries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
CREATE TABLE IF NOT EXISTS `logos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_logo_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frontend_logo_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frontend_footer_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `site_name_english`, `site_name_bangla`, `admin_logo_image`, `frontend_logo_image`, `frontend_footer_image`, `favicon_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'parvaz', 'parvaz', 'backend/logo/1800633220931024.png', 'backend/logo/1800633221533662.png', 'backend/logo/1800633222109401.png', 'backend/logo/1800633222634796.png', '0', '2024-06-01 04:54:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_21_065218_create_banner_and_titles_table', 1),
(6, '2023_10_22_063533_create_logos_table', 1),
(7, '2023_10_22_085429_create_website_links_table', 1),
(8, '2023_10_22_103212_create_website_banners_table', 1),
(9, '2023_10_23_050602_create_footers_table', 1),
(10, '2023_10_23_065803_create_services_table', 1),
(11, '2023_10_26_073022_create_abouts_table', 1),
(12, '2023_10_26_095230_create_teams_table', 1),
(13, '2023_10_27_125514_create_blogs_table', 1),
(14, '2023_10_29_050142_create_testimonials_table', 1),
(15, '2023_10_29_070908_create_image_galleries_table', 1),
(16, '2023_10_29_070937_create_video_galleries_table', 1),
(17, '2023_10_29_092653_create_notices_table', 1),
(18, '2023_10_30_044312_create_sponsors_table', 1),
(19, '2023_10_30_055705_create_counter_icons_table', 1),
(20, '2023_10_30_055718_create_counter_images_table', 1),
(21, '2023_11_05_110507_create_testimonial2s_table', 1),
(22, '2023_11_06_041856_create_contact_us_table', 1),
(23, '2023_11_11_070358_create_sliders_table', 1),
(24, '2023_11_22_142809_create_cvfiles_table', 1),
(25, '2023_12_08_061935_create_service_comments_table', 1),
(26, '2023_12_13_211347_create_projects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pdf_file` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_des_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_des_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_des_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_des_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `main_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_image1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_image2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_image3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detais_image_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detais_image_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detais_image_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_sm_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `des_sm_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_comments`
--

DROP TABLE IF EXISTS `service_comments`;
CREATE TABLE IF NOT EXISTS `service_comments` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_id` int NOT NULL,
  `name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_comment_english` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `service_comment_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text_eng` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text_bng` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `add_home` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE IF NOT EXISTS `sponsors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `committee` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial2s`
--

DROP TABLE IF EXISTS `testimonial2s`;
CREATE TABLE IF NOT EXISTS `testimonial2s` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_eng` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_bng` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `review_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `star` int DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `add_home` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_eng` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_bng` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `review_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `star` int DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `add_home` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `photo`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', '01738920277', NULL, NULL, NULL, '$2y$10$ZwgwnSNfzlczK5HJh7Spc.vbHv5tHUWtito5wrut2wLGFrLelL2MO', NULL, NULL, NULL),
(2, 'User', 'user@user.com', 'user', '01738920277', NULL, NULL, NULL, '$2y$10$h3SmPpIHY6uVxtOP3oJVNeNZ9MaanVWjuB7OkDCFzPpycqytwvxLm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

DROP TABLE IF EXISTS `video_galleries`;
CREATE TABLE IF NOT EXISTS `video_galleries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `video_link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_banners`
--

DROP TABLE IF EXISTS `website_banners`;
CREATE TABLE IF NOT EXISTS `website_banners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_details_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_details_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_banners`
--

INSERT INTO `website_banners` (`id`, `title_english`, `title_bangla`, `short_details_eng`, `short_details_bng`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'parvaz', 'parvaz', 'parvaz', 'parvaz', 'backend/website_banner/1800633283888839.jpg', '1', '2024-06-01 04:55:16', '2024-06-01 04:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `website_links`
--

DROP TABLE IF EXISTS `website_links`;
CREATE TABLE IF NOT EXISTS `website_links` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_links`
--

INSERT INTO `website_links` (`id`, `email`, `phone`, `address_english`, `address_bangla`, `website_link`, `facebook`, `instagram`, `linkedIn`, `twitter`, `telegram`, `youtube`, `map_link`, `created_at`, `updated_at`) VALUES
(1, 'relupy@mailinator.com', '+1 (352) 557-5606', 'Labore autem alias n', 'Qui voluptate non vo', 'https://www.myvykyjid.mobi', 'Sunt pariatur Est', 'Do duis earum sunt o', 'Ea sint vel ex sed v', 'Impedit fugit veni', 'Ea qui architecto nu', 'Deleniti commodi in', 'Aspernatur delectus', '2024-06-01 04:54:37', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
