-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2023 at 10:22 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diamond_homes`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_left_models`
--

CREATE TABLE `card_left_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lattitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci,
  `job_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `card_left_models`
--

INSERT INTO `card_left_models` (`id`, `action`, `assigned_to`, `lattitude`, `longitude`, `distance`, `photo`, `reason`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 'fhfdh', 'testuser', 'gfjh', 'gfjdfg', 'fdjhdf', '202210211244Web 1920 – 1.png', 'fdhdfh hkghkgh', 1, '2022-10-21 12:44:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info_models`
--

CREATE TABLE `contact_info_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `communication_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_info_models`
--

INSERT INTO `contact_info_models` (`id`, `contact_type`, `contact_name`, `job_id`, `communication_type`, `value`, `preferred`, `created_at`, `updated_at`) VALUES
(1, 'Contractor', 'sunil', '1', 'Email', '8959127121', '0', '2022-10-20 10:54:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents_models`
--

CREATE TABLE `documents_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loaded_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents_models`
--

INSERT INTO `documents_models` (`id`, `name`, `loaded_by`, `job_code`, `location`, `code`, `job_id`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'hgjghk', 'testuser', 'hgjgh', 'jhgjghj', 'hgjgh', '1', 'gfhfgh', '2022-10-21 12:25:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `downloads_models`
--

CREATE TABLE `downloads_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads_models`
--

INSERT INTO `downloads_models` (`id`, `user_id`, `file_name`, `file_type`, `created_at`, `updated_at`) VALUES
(7, '5', 'jobs-admin-2022-Nov-281104.xlsx', 'jobs', '2022-11-28 11:56:04', NULL),
(8, '5', 'jobs-admin-2022-Nov-281128.xlsx', 'jobs', '2022-11-27 11:58:28', NULL),
(9, '5', 'jobs-admin-2022-Nov-290921.xlsx', 'jobs', '2022-11-29 09:54:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exemptions_models`
--

CREATE TABLE `exemptions_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exemptions_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exemptions_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eot_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eot_date_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `acknowledged` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acknowledged_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exemptions_models`
--

INSERT INTO `exemptions_models` (`id`, `exemptions_type`, `exemptions_by`, `job_id`, `eot_type`, `eot_date_time`, `api`, `reason`, `additional_reason`, `notes`, `status`, `acknowledged`, `acknowledged_by`, `created_at`, `updated_at`) VALUES
(1, 'fdhdfhdfh', '0', '1', 'Other', '2022-10-07T17:50', NULL, 'Online', '2022-10-21T15:50', 'fdhdhdfhdf', '', 'dfhdfhdf', '0', '2022-10-20 10:20:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inforesources_models`
--

CREATE TABLE `inforesources_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resources_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expires` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inforesources_models`
--

INSERT INTO `inforesources_models` (`id`, `name`, `file_name`, `file_type`, `resources_type`, `expires`, `created_at`, `updated_at`) VALUES
(1, 'Health and Safety Equipment', 'moohniappcorrections28102022.pdf', 'pdf', 'Health & Safety', '2022-11-02', NULL, NULL),
(3, 'admin', 'risk.jpg', 'jpg', 'Health & Safety', '2022-11-11', '2022-11-21 05:27:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `informations_models`
--

CREATE TABLE `informations_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informations_models`
--

INSERT INTO `informations_models` (`id`, `job_code`, `uom`, `job_category`, `title`, `description`, `start_date`, `end_date`, `version`, `area`, `created_at`, `updated_at`) VALUES
(1, 'AAD400', '$', 'Car', 'Genral cunsultancy', 'Genral cunsultancy', '2022-11-03', '2022-11-26', '2020', '1000', '2022-11-01 09:46:50', NULL),
(2, 'AAD4012', '$', 'Trade', 'sdfsdf', 'turturtu', '2022-11-05', '2022-11-04', '2020', '1000', '2022-11-01 10:52:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobd_details_models`
--

CREATE TABLE `jobd_details_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `uom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `damages` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complete` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pwrk_req` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exclude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pre_app` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allocated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobd_details_models`
--

INSERT INTO `jobd_details_models` (`id`, `job_id`, `location`, `job_code`, `description`, `uom`, `damages`, `notes`, `quantity`, `rate`, `total`, `variance`, `complete`, `completed_by`, `pwrk_req`, `exclude`, `pre_app`, `allocated`, `created_at`, `updated_at`) VALUES
(1, '1', 'gfhfgh', 'gfhgf', 'fgjhfgj', 'fgjfgj', 'gfjfgj', 'fgjfgj', '454', '3645', '1231', '21312', 'Yes', 'testuser', '3', 'Yes', 'Yes', 'testuser', '2022-10-27 06:25:40', NULL),
(2, '1', 'fdgdf', 'hfdhd', 'fdhfdh', 'fdhfdh', 'fdhfdh', 'fdhfd', '454', '454', '454', '454', 'Yes', 'testuser', '3', 'Yes', 'Yes', 'testuser', '2022-10-27 06:45:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs_models`
--

CREATE TABLE `jobs_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `order_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `external_job_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ecd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` text COLLATE utf8mb4_unicode_ci,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allocation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ret_rem` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `approved` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `your_ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cl_access_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs_models`
--

INSERT INTO `jobs_models` (`id`, `title`, `description`, `order_no`, `address`, `external_job_no`, `ecd`, `type`, `client_name`, `priority`, `assigned`, `allocation`, `from_date`, `to_date`, `status`, `ret_rem`, `comments`, `approved`, `value`, `your_ref`, `cl_access_no`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'Test Job', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', '123', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', '20', '2022-10-26', 'Trade', 'Housing NZ Shouth 2', 'GNL', '0', 'Diamond Homes', '2022-10-27', '2022-12-28', 'New', 'NA', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', 'Approved', '1200000', '543', '4564', 'Unacknowledged sent to SHL', '2022-10-27 12:52:32', NULL),
(2, 'New job test', 'New job test', '1236', '123 sector 2 noida', '365', NULL, 'Car', '0', 'URS', '0', 'Diamond Homes', '2022-10-13', '2022-10-21', 'Completed', 'test', 'test', 'Unapproved', '45600', '54645', 'test', '0', '2022-10-28 10:01:15', NULL),
(3, 'test tow job dummy', 'test tow job dummy', '1214', 'test tow job dummy', '3', '2022-10-22', 'Car', 'Housing NZ North West', 'GNL', 'Diamond Homes Ltd', 'dgdfg', '2022-10-06', '2022-10-30', 'Started', 'vcnvcn', 'test tow job dummy', 'Unapproved', '1236547893', '54645', '4564', 'Unacknowledged sent or received by SHL', '2022-10-31 10:33:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs_models`
--

CREATE TABLE `logs_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `dispatch_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs_models`
--

INSERT INTO `logs_models` (`id`, `user`, `action`, `job_id`, `description`, `dispatch_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'gsdgsd', '1', 'safasfasfbvcb', '546456', '2022-10-21 07:24:10', NULL),
(3, 'Super', 'dfhgdfh', '1', 'hgkghkghk', '546', '2022-10-21 07:31:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_18_100338_create_jobs_models_table', 2),
(6, '2022_10_20_050821_create_notes_models_table', 3),
(7, '2022_10_20_083729_create_notes_models_table', 4),
(8, '2022_10_20_090640_create_exemptions_models_table', 5),
(9, '2022_10_20_104205_create_contact_info_models_table', 6),
(10, '2022_10_20_113342_create_logs_models_table', 7),
(11, '2022_10_21_073617_create_timne_spent_models_table', 8),
(12, '2022_10_21_074451_create_orders_models_table', 8),
(13, '2022_10_21_083834_create_documents_models_table', 9),
(14, '2022_10_21_083926_create_card_left_models_table', 9),
(15, '2022_10_21_093955_create_tenants_models_table', 9),
(16, '2022_10_21_094154_create_other_works_models_table', 9),
(17, '2022_10_27_045005_create_jobd_details_models_table', 10),
(18, '2022_11_01_084230_create_informations_models_table', 11),
(19, '2022_11_18_085342_create_inforesources_models_table', 12),
(20, '2022_11_28_085454_create_downloads_models_table', 13),
(21, '2023_01_19_084816_create_tradies_models_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `notes_models`
--

CREATE TABLE `notes_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `audiences` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `note_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes_models`
--

INSERT INTO `notes_models` (`id`, `audiences`, `title`, `job_id`, `description`, `note_type`, `created_at`, `updated_at`) VALUES
(1, 'SHL', 'dsgsdgsd', '1', 'dsgsdgsdg', 'Appointment', '2022-10-20 08:49:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders_models`
--

CREATE TABLE `orders_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_models`
--

INSERT INTO `orders_models` (`id`, `data_type`, `job_id`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'fhdfhdf', '1', 'xcbxcbhgkhghfdhfdh', '2022-10-21 12:11:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `other_works_models`
--

CREATE TABLE `other_works_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_ref` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `job_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_works_models`
--

INSERT INTO `other_works_models` (`id`, `order_id`, `client_ref`, `status`, `priority`, `description`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 'sfdsaf', 'sfgasf', 'CAN', 'safasf', 'sdfgsagffdhdfhkhjkhj', '1', '2022-10-21 13:10:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wd21.stpl@gmail.com', '$2y$10$lTa3zw8gKNjMJxGp/RVU8OYWau4gjoMQ0Q8kZN57Lrh6V.505MKkC', '2022-10-17 12:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenants_models`
--

CREATE TABLE `tenants_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `to_from` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entered_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notified_to` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `job_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants_models`
--

INSERT INTO `tenants_models` (`id`, `to_from`, `entered_by`, `notified_to`, `message`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 'fghfgjgfj', 'Admin', 'Admin', 'gfjfgjfg', '1', '2022-10-21 12:58:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timne_spent_models`
--

CREATE TABLE `timne_spent_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `card_left` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timne_spent_models`
--

INSERT INTO `timne_spent_models` (`id`, `contact_type`, `created_by`, `job_id`, `comments`, `card_left`, `created_at`, `updated_at`) VALUES
(1, 'dgsdg', 'testuser', '1', 'dsgsdgdsgsdg', 'off', '2022-10-21 11:59:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tradies_models`
--

CREATE TABLE `tradies_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tradie_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tradies_models`
--

INSERT INTO `tradies_models` (`id`, `user_id`, `tradie_name`, `phone`, `created_at`, `updated_at`) VALUES
(1, NULL, 'sunil', '8959127121', '2023-01-19 10:29:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `idr_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `user_name`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `idr_number`, `city`, `country`, `language`, `user_type`, `remember_token`, `otp`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', 'superadmin', 'Super', 'lodhi', 'superadmin@gmail.com', NULL, '$2y$10$L2hCJ9VvZsju/48S2Q7J1e872Ou7miSxTAeVuEQAB4Ori7M9XbvcW', '4563215658', 'abc nagar indore', 'ABC1258', 'indore', 'India', 'English', 'superadmin', NULL, NULL, '2022-10-03 19:35:30', '2022-10-03 19:35:30'),
(5, 'Mr', 'Admin', 'Admin', 'lodhi', 'admin@gmail.com', NULL, '$2y$10$L2hCJ9VvZsju/48S2Q7J1e872Ou7miSxTAeVuEQAB4Ori7M9XbvcW', '8959127122', '123 super markert indore  472333', '1-258', 'indore', 'India', NULL, 'admin', NULL, NULL, '2022-10-12 16:16:48', '2022-10-12 16:16:48'),
(6, 'Mr', 'user', 'fdhdfh', 'fdhdfh', 'user@gmail.com', NULL, '$2y$10$OBAEj3FDaM2nUqt6KHW/7O0UVGWnC3lvReOvqJNJrcCMDBwK1/ufy', '+918959127121', '123 super markert indore  472333', 'ghkjghkghk', 'Auckland', 'New Zealand', 'English', 'finances', NULL, NULL, '2022-10-13 16:48:16', '2022-10-13 16:48:16'),
(11, 'Mr', 'rajesh', 'rajesh', 'mehta', 'rajesh@gmail.com', NULL, '$2y$10$D2N8Mw4HiNhafkl5CLExfe5EqdURqPSOX.qlyYFmXHHUquu771hCO', '2369875632', '123 super markert indore  472333', 'FFGGG1326', 'Auckland', 'New Zealand', 'Mandarin', 'contractors', NULL, NULL, '2022-10-27 16:07:56', '2022-10-27 16:07:56'),
(12, 'Mr', 'ram12', 'ram', 'avtar', 'ram@gmail.com', NULL, '$2y$10$i8rKZlcSdPUYaKdhoeab/ul3rDOIIwHWzx2CWpymLgdZ3wMzOCj1a', '8959125698', '123 super markert', 'DFSWF1161', 'Wellington', NULL, 'English', 'user', NULL, NULL, '2022-11-17 19:14:49', '2022-11-17 19:14:49'),
(13, 'Mr', 'sunil', 'sunil', 'lodhi', 'sunil@gmail.com', NULL, '$2y$10$T4KUPCgaFSSnpMW8lv0ky.aQ1dsUkeErB0GHG/AUehTj8jZwNHZAm', '8959127121', '123 ram bag', NULL, 'indore', 'india', 'English', 'user', 'token', '1601', '2022-12-16 08:50:13', NULL),
(14, 'Mr', 'sunil', 'sunil', 'lodhi', 'wd21.stpl@gmail.com', NULL, '$2y$10$Cv36mhIGul2Vk8olkJPe9.0an7.WfUhdtAVm5nqlTKGsfVrDzzZK.', '8959127121', '123 ram bag', 'AS65465', 'indore', 'india', 'English', 'user', NULL, NULL, '2022-12-16 09:12:10', NULL),
(15, 'Mr', 'shawnik', 'Shawnik', 'Raghav', 'rshawnik@gmail.com', NULL, '$2y$10$e9dF9DIG7FVxhB8BJ5czBujQ/E0A7wv50dhKGDti7aSgmAzJgoGfO', '0211127849', '1 abc street', '111222333', 'Auckland', 'New Zealand', 'English', 'user', NULL, NULL, '2023-01-12 09:16:39', '2023-01-12 09:16:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_left_models`
--
ALTER TABLE `card_left_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info_models`
--
ALTER TABLE `contact_info_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents_models`
--
ALTER TABLE `documents_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads_models`
--
ALTER TABLE `downloads_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exemptions_models`
--
ALTER TABLE `exemptions_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inforesources_models`
--
ALTER TABLE `inforesources_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informations_models`
--
ALTER TABLE `informations_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobd_details_models`
--
ALTER TABLE `jobd_details_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_models`
--
ALTER TABLE `jobs_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs_models`
--
ALTER TABLE `logs_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes_models`
--
ALTER TABLE `notes_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_models`
--
ALTER TABLE `orders_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_works_models`
--
ALTER TABLE `other_works_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tenants_models`
--
ALTER TABLE `tenants_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timne_spent_models`
--
ALTER TABLE `timne_spent_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tradies_models`
--
ALTER TABLE `tradies_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_left_models`
--
ALTER TABLE `card_left_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_info_models`
--
ALTER TABLE `contact_info_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents_models`
--
ALTER TABLE `documents_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloads_models`
--
ALTER TABLE `downloads_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exemptions_models`
--
ALTER TABLE `exemptions_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inforesources_models`
--
ALTER TABLE `inforesources_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `informations_models`
--
ALTER TABLE `informations_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobd_details_models`
--
ALTER TABLE `jobd_details_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs_models`
--
ALTER TABLE `jobs_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs_models`
--
ALTER TABLE `logs_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notes_models`
--
ALTER TABLE `notes_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders_models`
--
ALTER TABLE `orders_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_works_models`
--
ALTER TABLE `other_works_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenants_models`
--
ALTER TABLE `tenants_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timne_spent_models`
--
ALTER TABLE `timne_spent_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tradies_models`
--
ALTER TABLE `tradies_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
