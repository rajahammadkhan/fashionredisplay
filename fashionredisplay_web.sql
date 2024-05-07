-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 08:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashionredisplay_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `by` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `meta_description` text NOT NULL,
  `keywords` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `name`, `by`, `slug`, `date`, `description`, `status`, `meta_description`, `keywords`, `meta_title`, `created_at`, `updated_at`) VALUES
(13, 'Y5naGKbYiM6HXWYGONOzw8CI8nIMspupkjB6HEoo.jpg', 'Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas', 'Fashion Redisplay', 'welcome-christmas-in-style-fashion-rerun-s-sweater-outfit-ideas', '2023-01-26', '<h3>Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas</h3>\r\n\r\n                                <p>Quuntur magni dolores eos qui ratione\r\n voluptatem sequi nesciunt. Neque porro quia non numquam eius modi \r\ntempora incidunt ut labore et dolore magnam dolor sit amet, consectetur \r\nadipisicing.</p>\r\n\r\n                                <p>Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud \r\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in  sed quia non numquam eius \r\nmodi tempora incidunt ut labore et dolore magnam aliquam quaerat \r\nvoluptatem.</p>\r\n\r\n                               \r\n\r\n                                <p>Quuntur magni dolores eos qui ratione\r\n voluptatem sequi nesciunt. Neque porro quia non numquam eius modi \r\ntempora incidunt ut labore et dolore magnam dolor sit amet, consectetur \r\nadipisicing.</p>\r\n\r\n                                <h3>Setting the mood with incense</h3>\r\n                                <p>Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud \r\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in  sed quia non numquam eius \r\nmodi tempora incidunt ut labore et dolore magnam aliquam quaerat \r\nvoluptatem.</p>\r\n\r\n                                <h3>The rise of marketing and why you need it</h3>\r\n                                <p>Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>', 1, 'Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas', 'Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas', 'Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas', '2022-06-06 03:35:53', '2023-01-26 05:09:18'),
(15, 'CSt47UsH3NH3vpWzj047dwiTUoP9ZCnHeVBb5YsZ.jpg', 'Being Stylish, Being You: Easy Ways to Upgrade Your Denim Game', 'Fashion Redisplay', 'being-stylish-being-you-easy-ways-to-upgrade-your-denim-game', '2023-01-26', '<h3>Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas</h3>\r\n\r\n                                <p>Quuntur magni dolores eos qui ratione\r\n voluptatem sequi nesciunt. Neque porro quia non numquam eius modi \r\ntempora incidunt ut labore et dolore magnam dolor sit amet, consectetur \r\nadipisicing.</p>\r\n\r\n                                <p>Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud \r\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in  sed quia non numquam eius \r\nmodi tempora incidunt ut labore et dolore magnam aliquam quaerat \r\nvoluptatem.</p>\r\n\r\n                               \r\n\r\n                                <p>Quuntur magni dolores eos qui ratione\r\n voluptatem sequi nesciunt. Neque porro quia non numquam eius modi \r\ntempora incidunt ut labore et dolore magnam dolor sit amet, consectetur \r\nadipisicing.</p>\r\n\r\n                                <h3>Setting the mood with incense</h3>\r\n                                <p>Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud \r\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in  sed quia non numquam eius \r\nmodi tempora incidunt ut labore et dolore magnam aliquam quaerat \r\nvoluptatem.</p>\r\n\r\n                                <h3>The rise of marketing and why you need it</h3>\r\n                                <p>Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>', 1, 'Being Stylish, Being You: Easy Ways to Upgrade Your Denim Game', 'Being Stylish, Being You: Easy Ways to Upgrade Your Denim Game', 'Being Stylish, Being You: Easy Ways to Upgrade Your Denim Game', '2022-06-13 19:56:51', '2023-01-26 05:08:25'),
(16, '49aCMeqRXmGNDHmrDh45iUM7YBm1pbOw16FCdUSn.jpg', 'Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas', 'Fashion Redisplay', 'welcome-christmas-in-style-fashion-rerun-s-sweater-outfit-ideas', '2023-01-26', '<h3>Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas</h3>\r\n\r\n                                <p>Quuntur magni dolores eos qui ratione\r\n voluptatem sequi nesciunt. Neque porro quia non numquam eius modi \r\ntempora incidunt ut labore et dolore magnam dolor sit amet, consectetur \r\nadipisicing.</p>\r\n\r\n                                <p>Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud \r\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in  sed quia non numquam eius \r\nmodi tempora incidunt ut labore et dolore magnam aliquam quaerat \r\nvoluptatem.</p>\r\n\r\n                               \r\n\r\n                                <p>Quuntur magni dolores eos qui ratione\r\n voluptatem sequi nesciunt. Neque porro quia non numquam eius modi \r\ntempora incidunt ut labore et dolore magnam dolor sit amet, consectetur \r\nadipisicing.</p>\r\n\r\n                                <h3>Setting the mood with incense</h3>\r\n                                <p>Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud \r\nexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in  sed quia non numquam eius \r\nmodi tempora incidunt ut labore et dolore magnam aliquam quaerat \r\nvoluptatem.</p>\r\n\r\n                                <h3>The rise of marketing and why you need it</h3>\r\n                                <p>Lorem ipsum dolor sit amet, \r\nconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore\r\n et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>', 1, 'Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas', 'Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas', 'Welcome Christmas in Style: Fashion Rerun’s Sweater Outfit Ideas', '2022-06-13 19:58:03', '2023-01-26 04:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `blouse_tops_make`
--

CREATE TABLE `blouse_tops_make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blouse_tops_make`
--

INSERT INTO `blouse_tops_make` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Casual Long Sleeves', 'casual-long-sleeves', 1, '2023-03-07 02:02:26', '2023-03-07 02:02:26'),
(2, 'Casual Short Sleeves', 'casual-short-sleeves', 1, '2023-03-07 02:02:33', '2023-03-07 02:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_alpha` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_alpha`, `slug`, `created_at`, `updated_at`) VALUES
(8, 'Abercrombie', 'a', 'abercrombie', '2023-01-26 00:49:01', '2023-01-26 00:49:01'),
(9, 'Active & Co.', 'a', 'active-co-', '2023-01-26 00:56:22', '2023-01-26 00:56:22'),
(10, 'Adidas', 'a', 'adidas', '2023-01-26 00:58:46', '2023-01-26 00:58:46'),
(11, 'Aerie', 'a', 'aerie', '2023-01-26 00:59:53', '2023-01-26 00:59:53'),
(12, 'Aeropostale', 'a', 'aeropostale', '2023-01-26 01:00:22', '2023-01-26 01:00:22'),
(13, 'Alfani', 'a', 'alfani', '2023-01-26 01:00:30', '2023-01-26 01:00:30'),
(14, 'All Saints', 'a', 'all-saints', '2023-01-26 01:00:40', '2023-01-26 01:00:40'),
(15, 'Ally', 'a', 'ally', '2023-01-26 01:00:46', '2023-01-26 01:00:46'),
(16, 'Almost Famous', 'a', 'almost-famous', '2023-01-26 01:01:04', '2023-01-26 01:01:04'),
(17, 'Alore', 'a', 'alore', '2023-01-26 01:01:15', '2023-01-26 01:01:15'),
(18, 'Alstyle Apparel & Activewear', 'a', 'alstyle-apparel-activewear', '2023-01-26 01:01:27', '2023-01-26 01:01:27'),
(19, 'Ambiance', 'a', 'ambiance', '2023-01-26 01:01:34', '2023-01-26 01:01:34'),
(20, 'American Apparel', 'a', 'american-apparel', '2023-01-26 01:01:55', '2023-01-26 01:01:55'),
(21, 'American Eagle', 'a', 'american-eagle', '2023-01-26 01:02:09', '2023-01-26 01:02:09'),
(22, 'AND 1', 'a', 'and-1', '2023-01-26 01:02:18', '2023-01-26 01:02:18'),
(23, 'Ann Taylor', 'a', 'ann-taylor', '2023-01-26 01:02:24', '2023-01-26 01:02:24'),
(24, 'Anne Klein', 'a', 'anne-klein', '2023-01-26 01:06:53', '2023-01-26 01:06:53'),
(25, 'Anvil', 'a', 'anvil', '2023-01-26 01:07:12', '2023-01-26 01:07:12'),
(26, 'Apt.9', 'a', 'apt-9', '2023-01-26 01:07:27', '2023-01-26 01:07:27'),
(27, 'Ardene', 'a', 'ardene', '2023-01-26 01:07:32', '2023-01-26 01:07:32'),
(28, 'Arizona', 'a', 'arizona', '2023-01-26 01:07:43', '2023-01-26 01:07:43'),
(29, 'Armani', 'a', 'armani', '2023-01-26 01:07:49', '2023-01-26 01:07:49'),
(30, 'Artex', 'a', 'artex', '2023-01-26 01:07:55', '2023-01-26 01:07:55'),
(31, 'Asics', 'a', 'asics', '2023-01-26 01:07:59', '2023-01-26 01:07:59'),
(32, 'Athleta', 'a', 'athleta', '2023-01-26 01:08:13', '2023-01-26 01:08:13'),
(33, 'Athletic Works', 'a', 'athletic-works', '2023-01-26 01:08:20', '2023-01-26 01:08:20'),
(34, 'Atmosphere', 'a', 'atmosphere', '2023-01-26 01:08:29', '2023-01-26 01:08:29'),
(35, 'Avia', 'a', 'avia', '2023-01-26 01:08:34', '2023-01-26 01:08:34'),
(36, 'Babaton', 'b', 'babaton', '2023-01-26 01:08:46', '2023-01-26 01:08:46'),
(37, 'Banana Republic', 'b', 'banana-republic', '2023-01-26 01:08:54', '2023-01-26 01:08:54'),
(38, 'Bardot', 'b', 'bardot', '2023-01-26 01:09:01', '2023-01-26 01:09:01'),
(39, 'BCBG', 'b', 'bcbg', '2023-01-26 01:09:07', '2023-01-26 01:09:07'),
(40, 'Bebe', 'b', 'bebe', '2023-01-26 01:09:28', '2023-01-26 01:09:28'),
(41, 'Ben Sherman', 'b', 'ben-sherman', '2023-01-26 01:09:37', '2023-01-26 01:09:37'),
(42, 'Bench', 'b', 'bench', '2023-01-26 01:09:44', '2023-01-26 01:09:44'),
(43, 'Bershka', 'b', 'bershka', '2023-01-26 01:09:48', '2023-01-26 01:09:48'),
(44, 'Beverly Hills Polo Club', 'b', 'beverly-hills-polo-club', '2023-01-26 01:10:02', '2023-01-26 01:10:02'),
(45, 'Billabong', 'b', 'billabong', '2023-01-26 01:10:09', '2023-01-26 01:10:09'),
(46, 'Blue Notes', 'b', 'blue-notes', '2023-01-26 01:10:15', '2023-01-26 01:10:15'),
(47, 'Bluenotes', 'b', 'bluenotes', '2023-01-26 01:10:19', '2023-01-26 01:10:19'),
(48, 'Bonds', 'b', 'bonds', '2023-01-26 01:10:32', '2023-01-26 01:10:32'),
(49, 'Bongo', 'b', 'bongo', '2023-01-26 01:10:40', '2023-01-26 01:10:40'),
(50, 'Boohoo', 'b', 'boohoo', '2023-01-26 01:10:51', '2023-01-26 01:10:51'),
(51, 'BOSS', 'b', 'boss', '2023-01-26 01:10:56', '2023-01-26 01:10:56'),
(52, 'Brockum', 'b', 'brockum', '2023-01-26 01:11:12', '2023-01-26 01:11:12'),
(53, 'Brooklyn', 'b', 'brooklyn', '2023-01-26 01:11:18', '2023-01-26 01:11:18'),
(54, 'Brooks Brothers', 'b', 'brooks-brothers', '2023-01-26 01:11:26', '2023-01-26 01:11:26'),
(55, 'C PORT and COMPANY', 'c', 'c-port-and-company', '2023-01-26 01:11:39', '2023-01-26 01:11:39'),
(56, 'Cable & Gauge', 'c', 'cable-gauge', '2023-01-26 01:11:45', '2023-01-26 01:11:45'),
(57, 'Calvin Klein', 'c', 'calvin-klein', '2023-01-26 01:11:51', '2023-01-26 01:11:51'),
(58, 'Campia Moda', 'c', 'campia-moda', '2023-01-26 01:11:57', '2023-01-26 01:11:57'),
(59, 'Candie\'s', 'c', 'candie-s', '2023-01-26 01:12:20', '2023-01-26 01:12:20'),
(60, 'Carhartt', 'c', 'carhartt', '2023-01-26 01:12:30', '2023-01-26 01:12:30'),
(61, 'CG by Champion', 'c', 'cg-by-champion', '2023-01-26 01:12:38', '2023-01-26 01:12:38'),
(62, 'Champion', 'c', 'champion', '2023-01-26 01:12:43', '2023-01-26 01:12:43'),
(63, 'Champs', 'c', 'champs', '2023-01-26 01:12:56', '2023-01-26 01:12:56'),
(64, 'Chaps', 'c', 'chaps', '2023-01-26 01:13:03', '2023-01-26 01:13:03'),
(65, 'Charlotte Russe', 'c', 'charlotte-russe', '2023-01-26 01:13:13', '2023-01-26 01:13:13'),
(66, 'Cherokee', 'c', 'cherokee', '2023-01-26 01:13:26', '2023-01-26 01:13:26'),
(67, 'Citizens of Humanity', 'c', 'citizens-of-humanity', '2023-01-26 01:13:38', '2023-01-26 01:13:38'),
(68, 'City Chic', 'c', 'city-chic', '2023-01-26 01:13:45', '2023-01-26 01:13:45'),
(69, 'Claiborne', 'c', 'claiborne', '2023-01-26 01:13:52', '2023-01-26 01:13:52'),
(70, 'Cleo', 'c', 'cleo', '2023-01-26 01:13:58', '2023-01-26 01:13:58'),
(71, 'Colosseum', 'c', 'colosseum', '2023-01-26 01:14:11', '2023-01-26 01:14:11'),
(72, 'Columbia', 'c', 'columbia', '2023-01-26 01:14:17', '2023-01-26 01:14:17'),
(73, 'Converse', 'c', 'converse', '2023-01-26 01:14:22', '2023-01-26 01:14:22'),
(74, 'Coogi', 'c', 'coogi', '2023-01-26 01:14:27', '2023-01-26 01:14:27'),
(75, 'Cotton On', 'c', 'cotton-on', '2023-01-26 01:14:39', '2023-01-26 01:14:39'),
(76, 'Crazy 8', 'c', 'crazy-8', '2023-01-26 01:14:45', '2023-01-26 01:14:45'),
(77, 'Croft & barrow', 'c', 'croft-barrow', '2023-01-26 01:14:51', '2023-01-26 01:14:51'),
(78, 'Danskin Now', 'd', 'danskin-now', '2023-01-26 01:15:11', '2023-01-26 01:15:11'),
(79, 'DC', 'd', 'dc', '2023-01-26 01:15:21', '2023-01-26 01:15:21'),
(80, 'Delta Pro Weight', 'd', 'delta-pro-weight', '2023-01-26 01:15:31', '2023-01-26 01:15:31'),
(81, 'Denver Hayes', 'd', 'denver-hayes', '2023-01-26 01:15:37', '2023-01-26 01:15:37'),
(82, 'Dickies', 'd', 'dickies', '2023-01-26 01:15:47', '2023-01-26 01:15:47'),
(83, 'Diesel', 'd', 'diesel', '2023-01-26 01:15:53', '2023-01-26 01:15:53'),
(84, 'Disney', 'd', 'disney', '2023-01-26 01:15:59', '2023-01-26 01:15:59'),
(85, 'DKNY', 'd', 'dkny', '2023-01-26 01:16:05', '2023-01-26 01:16:05'),
(86, 'Dockers', 'd', 'dockers', '2023-01-26 01:16:15', '2023-01-26 01:16:15'),
(87, 'Dotti', 'd', 'dotti', '2023-01-26 01:16:22', '2023-01-26 01:16:22'),
(88, 'Dynamite', 'd', 'dynamite', '2023-01-26 01:16:26', '2023-01-26 01:16:26'),
(89, 'Ecko Unltd.', 'e', 'ecko-unltd-', '2023-01-26 01:16:42', '2023-01-26 01:17:11'),
(90, 'Ed Hardy', 'e', 'ed-hardy', '2023-01-26 01:16:48', '2023-01-26 01:16:48'),
(91, 'Eddie Bauer', 'e', 'eddie-bauer', '2023-01-26 01:16:56', '2023-01-26 01:16:56'),
(92, 'Eileen Fisher', 'e', 'eileen-fisher', '2023-01-26 01:17:01', '2023-01-26 01:17:01'),
(93, 'Elie Tahari', 'e', 'elie-tahari', '2023-01-26 01:17:33', '2023-01-26 01:17:33'),
(94, 'Emerson', 'e', 'emerson', '2023-01-26 01:17:41', '2023-01-26 01:17:41'),
(95, 'Esprit', 'e', 'esprit', '2023-01-26 01:17:46', '2023-01-26 01:17:46'),
(96, 'Factorie', 'f', 'factorie', '2023-01-26 01:17:56', '2023-01-26 01:17:56'),
(97, 'Faded Glory', 'f', 'faded-glory', '2023-01-26 01:18:05', '2023-01-26 01:18:05'),
(98, 'Fashion Nova', 'f', 'fashion-nova', '2023-01-26 01:18:12', '2023-01-26 01:18:12'),
(99, 'Ferrari', 'f', 'ferrari', '2023-01-26 01:18:18', '2023-01-26 01:18:18'),
(100, 'FILA', 'f', 'fila', '2023-01-26 01:18:29', '2023-01-26 01:18:29'),
(101, 'Forever 21', 'f', 'forever-21', '2023-01-26 01:18:36', '2023-01-26 01:18:36'),
(102, 'Free People', 'f', 'free-people', '2023-01-26 01:18:44', '2023-01-26 01:18:44'),
(103, 'Fruit of the Loom', 'f', 'fruit-of-the-loom', '2023-01-26 01:18:57', '2023-01-26 01:18:57'),
(104, 'G:21', 'g', 'g-21', '2023-01-26 01:19:21', '2023-01-26 01:19:21'),
(105, 'GAP', 'g', 'gap', '2023-01-26 01:19:31', '2023-01-26 01:19:31'),
(106, 'Garage', 'g', 'garage', '2023-01-26 01:19:39', '2023-01-26 01:19:39'),
(107, 'Genuine Merchandise', 'g', 'genuine-merchandise', '2023-01-26 01:19:44', '2023-01-26 01:19:44'),
(108, 'George', 'g', 'george', '2023-01-26 01:19:56', '2023-01-26 01:19:56'),
(109, 'Gildan', 'g', 'gildan', '2023-01-26 01:20:02', '2023-01-26 01:20:02'),
(110, 'GILLIGAN & O\'MALLEY', 'g', 'gilligan-o-malley', '2023-01-26 01:20:08', '2023-01-26 01:20:08'),
(111, 'Giordano', 'g', 'giordano', '2023-01-26 01:20:13', '2023-01-26 01:20:13'),
(112, 'Guess', 'g', 'guess', '2023-01-26 01:20:25', '2023-01-26 01:20:25'),
(113, 'Guns N Roses', 'g', 'guns-n-roses', '2023-01-26 01:20:29', '2023-01-26 01:20:29'),
(114, 'H & M', 'h', 'h-m', '2023-01-26 01:20:43', '2023-01-26 01:20:43'),
(115, 'Haggar', 'h', 'haggar', '2023-01-26 01:20:49', '2023-01-26 01:20:49'),
(116, 'Hanes', 'h', 'hanes', '2023-01-26 01:20:58', '2023-01-26 01:20:58'),
(117, 'Hard Rock Cafe', 'h', 'hard-rock-cafe', '2023-01-26 01:21:02', '2023-01-26 01:21:02'),
(118, 'Harley Davidson', 'h', 'harley-davidson', '2023-01-26 01:21:13', '2023-01-26 01:21:13'),
(119, 'Harry Potter', 'h', 'harry-potter', '2023-01-26 01:21:21', '2023-01-26 01:21:21'),
(120, 'Hawk', 'h', 'hawk', '2023-01-26 01:21:27', '2023-01-26 01:21:27'),
(121, 'Hollister', 'h', 'hollister', '2023-01-26 01:21:31', '2023-01-26 01:21:31'),
(122, 'Hurley', 'h', 'hurley', '2023-01-26 01:21:38', '2023-01-26 01:21:38'),
(123, 'IZOD', 'i', 'izod', '2023-01-26 01:21:45', '2023-01-26 01:21:45'),
(124, 'J.Crew', 'j', 'j-crew', '2023-01-26 02:52:38', '2023-01-26 02:52:38'),
(125, 'Jack & Jones', 'j', 'jack-jones', '2023-01-26 02:52:47', '2023-01-26 02:52:47'),
(126, 'Jansport', 'j', 'jansport', '2023-01-26 02:52:56', '2023-01-26 02:52:56'),
(127, 'Jennifer Lopez', 'j', 'jennifer-lopez', '2023-01-26 02:53:01', '2023-01-26 02:53:01'),
(128, 'Jerzees', 'j', 'jerzees', '2023-01-26 02:53:11', '2023-01-26 02:53:11'),
(129, 'Jessica Simpson', 'j', 'jessica-simpson', '2023-01-26 02:53:18', '2023-01-26 02:53:18'),
(130, 'Jockey', 'j', 'jockey', '2023-01-26 02:53:23', '2023-01-26 02:53:23'),
(131, 'Joe Fresh', 'j', 'joe-fresh', '2023-01-26 02:53:27', '2023-01-26 02:53:27'),
(132, 'Jones New York', 'j', 'jones-new-york', '2023-01-26 02:53:41', '2023-01-26 02:53:41'),
(133, 'Jordan', 'j', 'jordan', '2023-01-26 02:53:48', '2023-01-26 02:53:48'),
(134, 'Juicy Couture', 'j', 'juicy-couture', '2023-01-26 02:53:54', '2023-01-26 02:53:54'),
(135, 'Just Jeans', 'j', 'just-jeans', '2023-01-26 02:53:59', '2023-01-26 02:53:59'),
(136, 'Kappa', 'k', 'kappa', '2023-01-26 02:54:10', '2023-01-26 02:54:10'),
(137, 'Katies', 'k', 'katies', '2023-01-26 02:54:16', '2023-01-26 02:54:16'),
(138, 'Kenneth Cole', 'k', 'kenneth-cole', '2023-01-26 02:54:24', '2023-01-26 02:54:24'),
(139, 'Kenneth Cole Reaction', 'k', 'kenneth-cole-reaction', '2023-01-26 02:54:35', '2023-01-26 02:54:35'),
(140, 'KirkLand', 'k', 'kirkland', '2023-01-26 02:54:39', '2023-01-26 02:54:39'),
(141, 'L.L.Bean', 'l', 'l-l-bean', '2023-01-26 02:55:27', '2023-01-26 02:55:27'),
(142, 'La Senza', 'l', 'la-senza', '2023-01-26 02:55:33', '2023-01-26 02:55:33'),
(143, 'La Vie en Rose', 'l', 'la-vie-en-rose', '2023-01-26 02:55:40', '2023-01-26 02:55:40'),
(144, 'Lacoste', 'l', 'lacoste', '2023-01-26 02:55:44', '2023-01-26 02:55:44'),
(145, 'Le Chateau', 'l', 'le-chateau', '2023-01-26 02:55:54', '2023-01-26 02:55:54'),
(146, 'Lee', 'l', 'lee', '2023-01-26 02:56:03', '2023-01-26 02:56:03'),
(147, 'Levi Strauss & Co.', 'l', 'levi-strauss-co-', '2023-01-26 02:56:12', '2023-01-26 02:56:12'),
(148, 'Lilly Pulitzer', 'l', 'lilly-pulitzer', '2023-01-26 02:56:18', '2023-01-26 02:56:18'),
(149, 'Lily Loves', 'l', 'lily-loves', '2023-01-26 02:56:35', '2023-01-26 02:56:35'),
(150, 'Lily Rose', 'l', 'lily-rose', '2023-01-26 02:56:41', '2023-01-26 02:56:41'),
(151, 'Liquid Blue', 'l', 'liquid-blue', '2023-01-26 02:56:47', '2023-01-26 02:56:47'),
(152, 'Liz claiborne', 'l', 'liz-claiborne', '2023-01-26 02:56:54', '2023-01-26 02:56:54'),
(153, 'Loft', 'l', 'loft', '2023-01-26 02:57:07', '2023-01-26 02:57:07'),
(154, 'Looney Tunes', 'l', 'looney-tunes', '2023-01-26 02:57:13', '2023-01-26 02:57:13'),
(155, 'Lucky Brand', 'l', 'lucky-brand', '2023-01-26 02:57:21', '2023-01-26 02:57:21'),
(156, 'LuLaRoe', 'l', 'lularoe', '2023-01-26 02:57:29', '2023-01-26 02:57:29'),
(157, 'Lulu Lemon', 'l', 'lulu-lemon', '2023-01-26 02:57:34', '2023-01-26 02:57:34'),
(158, 'Majestic', 'm', 'majestic', '2023-01-26 02:57:45', '2023-01-26 02:57:45'),
(159, 'Mango', 'm', 'mango', '2023-01-26 02:57:53', '2023-01-26 02:57:53'),
(160, 'Marvel', 'm', 'marvel', '2023-01-26 02:57:59', '2023-01-26 02:57:59'),
(161, 'Maurices', 'm', 'maurices', '2023-01-26 02:58:03', '2023-01-26 02:58:03'),
(162, 'Max Studio', 'm', 'max-studio', '2023-01-26 02:58:15', '2023-01-26 02:58:15'),
(163, 'Merona', 'm', 'merona', '2023-01-26 02:58:22', '2023-01-26 02:58:22'),
(164, 'Mexx', 'm', 'mexx', '2023-01-26 02:58:28', '2023-01-26 02:58:28'),
(165, 'Michael Kors', 'm', 'michael-kors', '2023-01-26 02:58:33', '2023-01-26 02:58:33'),
(166, 'Millers', 'm', 'millers', '2023-01-26 02:58:41', '2023-01-26 02:58:41'),
(167, 'Miss Valley', 'm', 'miss-valley', '2023-01-26 02:58:48', '2023-01-26 02:58:48'),
(168, 'MISSGUIDED', 'm', 'missguided', '2023-01-26 02:58:54', '2023-01-26 02:58:54'),
(169, 'Mitchell & Ness', 'm', 'mitchell-ness', '2023-01-26 02:58:58', '2023-01-26 02:58:58'),
(170, 'Mossimo', 'm', 'mossimo', '2023-01-26 02:59:09', '2023-01-26 02:59:09'),
(171, 'Mossimo Supply Co.', 'm', 'mossimo-supply-co-', '2023-01-26 02:59:14', '2023-01-26 02:59:14'),
(172, 'Nautica', 'n', 'nautica', '2023-01-26 02:59:27', '2023-01-26 02:59:27'),
(173, 'NBA', 'n', 'nba', '2023-01-26 02:59:34', '2023-01-26 02:59:34'),
(174, 'New Balance', 'n', 'new-balance', '2023-01-26 02:59:39', '2023-01-26 02:59:39'),
(175, 'New York & Company', 'n', 'new-york-company', '2023-01-26 02:59:44', '2023-01-26 02:59:44'),
(176, 'Next Level Apparel', 'n', 'next-level-apparel', '2023-01-26 02:59:59', '2023-01-26 02:59:59'),
(177, 'NFL', 'n', 'nfl', '2023-01-26 03:00:06', '2023-01-26 03:00:06'),
(178, 'NHL', 'n', 'nhl', '2023-01-26 03:00:11', '2023-01-26 03:00:11'),
(179, 'Nike', 'n', 'nike', '2023-01-26 03:00:16', '2023-01-26 03:00:16'),
(180, 'Nine West', 'n', 'nine-west', '2023-01-26 03:00:24', '2023-01-26 03:00:24'),
(181, 'No boundaries', 'n', 'no-boundaries', '2023-01-26 03:00:30', '2023-01-26 03:00:30'),
(182, 'Northern Reflections', 'n', 'northern-reflections', '2023-01-26 03:00:39', '2023-01-26 03:00:39'),
(183, 'Now', 'n', 'now', '2023-01-26 03:00:49', '2023-01-26 03:00:49'),
(184, 'Nutmeg mills', 'n', 'nutmeg-mills', '2023-01-26 03:00:54', '2023-01-26 03:00:54'),
(185, 'O\'Neill', 'o', 'o-neill', '2023-01-26 03:01:05', '2023-01-26 03:01:05'),
(186, 'Oakley', 'o', 'oakley', '2023-01-26 03:01:11', '2023-01-26 03:01:11'),
(187, 'Obey', 'o', 'obey', '2023-01-26 03:01:17', '2023-01-26 03:01:17'),
(188, 'Old Navy', 'o', 'old-navy', '2023-01-26 03:01:22', '2023-01-26 03:01:22'),
(189, 'Others', 'o', 'others', '2023-01-26 03:01:31', '2023-01-26 03:01:31'),
(190, 'Others-Vintage', 'o', 'others-vintage', '2023-01-26 03:01:35', '2023-01-26 03:01:35'),
(191, 'Paradise Found', 'p', 'paradise-found', '2023-01-26 03:01:48', '2023-01-26 03:01:48'),
(192, 'Patagonia', 'p', 'patagonia', '2023-01-26 03:01:54', '2023-01-26 03:01:54'),
(193, 'Pendleton', 'p', 'pendleton', '2023-01-26 03:02:01', '2023-01-26 03:02:01'),
(194, 'Penguin', 'p', 'penguin', '2023-01-26 03:02:05', '2023-01-26 03:02:05'),
(195, 'Perry Ellis', 'p', 'perry-ellis', '2023-01-26 03:02:13', '2023-01-26 03:02:13'),
(196, 'Pierre Cardin', 'p', 'pierre-cardin', '2023-01-26 03:02:19', '2023-01-26 03:02:19'),
(197, 'PINK', 'p', 'pink', '2023-01-26 03:02:27', '2023-01-26 03:02:27'),
(198, 'Place', 'p', 'place', '2023-01-26 03:02:32', '2023-01-26 03:02:32'),
(199, 'Pokemon', 'p', 'pokemon', '2023-01-26 03:02:39', '2023-01-26 03:02:39'),
(200, 'Polo', 'p', 'polo', '2023-01-26 03:02:45', '2023-01-26 03:02:45'),
(201, 'Portmans', 'p', 'portmans', '2023-01-26 03:02:51', '2023-01-26 03:02:51'),
(202, 'Pull & Bear', 'p', 'pull-bear', '2023-01-26 03:02:58', '2023-01-26 03:02:58'),
(203, 'Puma', 'p', 'puma', '2023-01-26 03:03:02', '2023-01-26 03:03:02'),
(204, 'Quiksilver', 'q', 'quiksilver', '2023-01-26 03:03:10', '2023-01-26 03:03:10'),
(205, 'Rachel Roy', 'r', 'rachel-roy', '2023-01-26 03:04:20', '2023-01-26 03:04:20'),
(206, 'Ralph Lauren', 'r', 'ralph-lauren', '2023-01-26 03:04:28', '2023-01-26 03:04:28'),
(207, 'RBX', 'r', 'rbx', '2023-01-26 03:04:33', '2023-01-26 03:04:33'),
(208, 'Reebok', 'r', 'reebok', '2023-01-26 03:04:38', '2023-01-26 03:04:38'),
(209, 'Reitmans', 'r', 'reitmans', '2023-01-26 03:04:46', '2023-01-26 03:04:46'),
(210, 'REVAMPED', 'r', 'revamped', '2023-01-26 03:04:55', '2023-01-26 03:04:55'),
(211, 'Roots', 'r', 'roots', '2023-01-26 03:05:01', '2023-01-26 03:05:01'),
(212, 'Rue 21', 'r', 'rue-21', '2023-01-26 03:05:09', '2023-01-26 03:05:09'),
(213, 'Russell', 'r', 'russell', '2023-01-26 03:05:16', '2023-01-26 03:05:16'),
(214, 'RW & Co.', 'r', 'rw-co-', '2023-01-26 03:05:20', '2023-01-26 03:05:20'),
(215, 'SCREEN STARS BEST', 's', 'screen-stars-best', '2023-01-26 03:05:46', '2023-01-26 03:05:46'),
(216, 'Seductions', 's', 'seductions', '2023-01-26 03:05:52', '2023-01-26 03:05:52'),
(217, 'Sesame Street', 's', 'sesame-street', '2023-01-26 03:05:57', '2023-01-26 03:05:57'),
(218, 'Skechers', 's', 'skechers', '2023-01-26 03:06:01', '2023-01-26 03:06:01'),
(219, 'Slazenger', 's', 'slazenger', '2023-01-26 03:06:09', '2023-01-26 03:06:09'),
(220, 'So', 's', 'so', '2023-01-26 03:06:14', '2023-01-26 03:06:14'),
(221, 'Sonoma', 's', 'sonoma', '2023-01-26 03:06:20', '2023-01-26 03:06:20'),
(222, 'Speedo', 's', 'speedo', '2023-01-26 03:06:26', '2023-01-26 03:06:26'),
(223, 'Sports Girl', 's', 'sports-girl', '2023-01-26 03:06:38', '2023-01-26 03:06:38'),
(224, 'SSI', 's', 'ssi', '2023-01-26 03:06:46', '2023-01-26 03:06:46'),
(225, 'St. John\'s Bay', 's', 'st-john-s-bay', '2023-01-26 03:06:56', '2023-01-26 03:06:56'),
(226, 'Star Wars', 's', 'star-wars', '2023-01-26 03:07:01', '2023-01-26 03:07:01'),
(227, 'Starter', 's', 'starter', '2023-01-26 03:07:14', '2023-01-26 03:07:14'),
(228, 'Stradivarius', 's', 'stradivarius', '2023-01-26 03:07:21', '2023-01-26 03:07:21'),
(229, 'StreetWear Society', 's', 'streetwear-society', '2023-01-26 03:07:27', '2023-01-26 03:08:29'),
(231, 'Stussy', 's', 'stussy', '2023-01-26 03:07:37', '2023-01-26 03:07:37'),
(232, 'Style & Co.', 's', 'style-co-', '2023-01-26 03:08:38', '2023-01-26 03:08:38'),
(233, 'Superdry', 's', 'superdry', '2023-01-26 03:08:44', '2023-01-26 03:08:44'),
(234, 'Superman', 's', 'superman', '2023-01-26 03:08:50', '2023-01-26 03:08:50'),
(235, 'Supre', 's', 'supre', '2023-01-26 03:08:54', '2023-01-26 03:08:54'),
(236, 'Suzy Shier', 's', 'suzy-shier', '2023-01-26 03:09:03', '2023-01-26 03:09:03'),
(237, 'SWS', 's', 'sws', '2023-01-26 03:09:06', '2023-01-26 03:09:06'),
(238, 'T Tahari', 't', 't-tahari', '2023-01-26 03:09:28', '2023-01-26 03:09:28'),
(239, 'Tahari', 't', 'tahari', '2023-01-26 03:09:33', '2023-01-26 03:09:33'),
(240, 'Talbots', 't', 'talbots', '2023-01-26 03:09:39', '2023-01-26 03:09:39'),
(241, 'Target', 't', 'target', '2023-01-26 03:09:43', '2023-01-26 03:09:43'),
(242, 'Tek Gear', 't', 'tek-gear', '2023-01-26 03:09:52', '2023-01-26 03:09:52'),
(243, 'Temt', 't', 'temt', '2023-01-26 03:09:58', '2023-01-26 03:09:58'),
(244, 'THE GO-TO TEE', 't', 'the-go-to-tee', '2023-01-26 03:10:03', '2023-01-26 03:10:03'),
(245, 'The Limited', 't', 'the-limited', '2023-01-26 03:10:08', '2023-01-26 03:10:08'),
(246, 'The Mountain', 't', 'the-mountain', '2023-01-26 03:10:23', '2023-01-26 03:10:23'),
(247, 'The North Face', 't', 'the-north-face', '2023-01-26 03:10:29', '2023-01-26 03:10:29'),
(248, 'Theory', 't', 'theory', '2023-01-26 03:10:35', '2023-01-26 03:10:35'),
(249, 'Tommy Bahama', 't', 'tommy-bahama', '2023-01-26 03:10:40', '2023-01-26 03:10:40'),
(250, 'Tommy Hilfiger', 't', 'tommy-hilfiger', '2023-01-26 03:10:51', '2023-01-26 03:10:51'),
(251, 'Topshop', 't', 'topshop', '2023-01-26 03:10:59', '2023-01-26 03:10:59'),
(252, 'True Religion', 't', 'true-religion', '2023-01-26 03:11:06', '2023-01-26 03:11:06'),
(253, 'Tultex', 't', 'tultex', '2023-01-26 03:11:12', '2023-01-26 03:11:12'),
(254, 'Tundra Canada', 't', 'tundra-canada', '2023-01-26 03:11:17', '2023-01-26 03:11:17'),
(255, 'U 2 B', 'u', 'u-2-b', '2023-01-26 03:11:29', '2023-01-26 03:11:29'),
(256, 'U.S. Polo Assn.', 'u', 'u-s-polo-assn-', '2023-01-26 03:11:36', '2023-01-26 03:11:36'),
(257, 'UK 2 LA', 'u', 'uk-2-la', '2023-01-26 03:11:42', '2023-01-26 03:11:42'),
(258, 'Umbro', 'u', 'umbro', '2023-01-26 03:11:47', '2023-01-26 03:11:47'),
(259, 'Under Armour', 'u', 'under-armour', '2023-01-26 03:11:53', '2023-01-26 03:11:53'),
(260, 'Uni Qlo', 'u', 'uni-qlo', '2023-01-26 03:11:57', '2023-01-26 03:11:57'),
(261, 'Valley Girl', 'v', 'valley-girl', '2023-01-26 03:12:20', '2023-01-26 03:12:20'),
(262, 'Van Heusen', 'v', 'van-heusen', '2023-01-26 03:12:29', '2023-01-26 03:12:29'),
(263, 'Vanity', 'v', 'vanity', '2023-01-26 03:12:36', '2023-01-26 03:12:36'),
(264, 'Vans', 'v', 'vans', '2023-01-26 03:12:43', '2023-01-26 03:12:43'),
(265, 'VERO MODA', 'v', 'vero-moda', '2023-01-26 03:12:48', '2023-01-26 03:12:48'),
(266, 'Victoria\'s Secret', 'v', 'victoria-s-secret', '2023-01-26 03:12:52', '2023-01-26 03:12:52'),
(267, 'Wet Seal', 'w', 'wet-seal', '2023-01-26 03:12:59', '2023-01-26 03:12:59'),
(268, 'White House Black Market', 'w', 'white-house-black-market', '2023-01-26 03:13:07', '2023-01-26 03:13:07'),
(269, 'Wilson', 'w', 'wilson', '2023-01-26 03:13:13', '2023-01-26 03:13:13'),
(270, 'Woolrich', 'w', 'woolrich', '2023-01-26 03:13:20', '2023-01-26 03:13:20'),
(271, 'Wrangler', 'w', 'wrangler', '2023-01-26 03:13:24', '2023-01-26 03:13:24'),
(272, 'Xhilaration', 'x', 'xhilaration', '2023-01-26 03:13:33', '2023-01-26 03:13:33'),
(273, 'Yazbek', 'y', 'yazbek', '2023-01-26 03:13:41', '2023-01-26 03:13:41'),
(274, 'YD', 'y', 'yd', '2023-01-26 03:13:47', '2023-01-26 03:13:47'),
(275, 'Zara', 'z', 'zara', '2023-01-26 03:13:54', '2023-01-26 03:13:54'),
(276, '1st Kiss', '#', '1st-kiss', '2023-01-26 03:14:03', '2023-01-26 03:14:03'),
(277, '7 For All Mankind', '#', '7-for-all-mankind', '2023-01-26 03:14:10', '2023-01-26 03:14:10'),
(278, '725 Originals', '#', '725-originals', '2023-01-26 03:14:16', '2023-01-26 03:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gift` varchar(255) DEFAULT NULL,
  `gift_card_thumbnail` text DEFAULT NULL,
  `gift_card_id` varchar(255) DEFAULT NULL,
  `sender_name` varchar(255) DEFAULT NULL,
  `recipient_name` varchar(255) DEFAULT NULL,
  `sender_email` varchar(255) DEFAULT NULL,
  `recipient_email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `delivery_date` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL,
  `sku_no` varchar(255) DEFAULT NULL,
  `expiry_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `quantity`, `price`, `user_id`, `gift`, `gift_card_thumbnail`, `gift_card_id`, `sender_name`, `recipient_name`, `sender_email`, `recipient_email`, `message`, `delivery_date`, `template`, `sku_no`, `expiry_date`, `created_at`, `updated_at`) VALUES
(383, 16, 1, 123.00, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 03:05:32', '2023-03-16 03:05:32'),
(384, 17, 1, 123.00, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 03:07:38', '2023-03-16 03:07:38'),
(385, 6, 1, 12.00, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 03:07:43', '2023-03-16 03:07:43'),
(393, 5, 1, 435.00, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 03:18:42', '2023-03-16 03:18:42'),
(394, 4, 1, 675.00, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-16 03:29:03', '2023-03-16 03:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `chart_size`
--

CREATE TABLE `chart_size` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chart_size`
--

INSERT INTO `chart_size` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'XS', '2023-02-24 07:06:29', '2023-02-24 07:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(19, 'Test1', '03444', 'test@test.com', '3:57 31-01-2023', '2023-01-31 05:57:58', '2023-01-31 05:57:58'),
(20, 'Test2', '3444854553', 'test@test.com', 'Test2 3:58 31-1-2023', '2023-01-31 05:59:00', '2023-01-31 05:59:00'),
(21, 'Huzaifa1', '03444', 'mrhuzaifa29@gmail.com', 'sasdaasd', '2023-03-08 02:01:43', '2023-03-08 02:01:43'),
(22, 'Huzaifadsa123asdsda', '03444', 'admin@admin.com', 'sdasadsda asd dsasd das', '2023-03-08 03:21:57', '2023-03-08 03:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `gift_cards`
--

CREATE TABLE `gift_cards` (
  `id` int(11) NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `in_stock` varchar(255) NOT NULL,
  `expire_date` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gift_cards`
--

INSERT INTO `gift_cards` (`id`, `card_name`, `price`, `sku`, `in_stock`, `expire_date`, `thumbnail`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'CHRISTMAS GIFT CARD 50', '50', 'MERRY-CHRISTMAS-50', 'out_of_stock', '90', 'ygu8nteX3GyQnMuDaTIr3xXoKaUGX6r58Kih30LR.png', 'christmas-gift-card-50', 1, '2023-01-26 07:11:19', '2023-01-26 08:01:11'),
(3, 'CHRISTMAS GIFT CARD 100', '100', 'MERRY-CHRISTMAS-100', 'in_stock', '90', 'B0ovKZEdDQ69mVYQvynvJH1PP08JOLlOGH1Rdfmw.png', 'christmas-gift-card-100', 1, '2023-01-26 07:22:53', '2023-01-26 07:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `gift_purchase`
--

CREATE TABLE `gift_purchase` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 2,
  `card_id` int(11) NOT NULL DEFAULT 3,
  `sender_name` varchar(255) NOT NULL,
  `recipient_name` varchar(255) NOT NULL,
  `sender_email` varchar(255) NOT NULL,
  `recipient_email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `template` varchar(255) NOT NULL,
  `sku_no` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gift_purchase`
--

INSERT INTO `gift_purchase` (`id`, `user_id`, `card_id`, `sender_name`, `recipient_name`, `sender_email`, `recipient_email`, `message`, `delivery_date`, `price`, `template`, `sku_no`, `expiry_date`, `created_at`, `updated_at`) VALUES
(20, 2, 3, 'Huzaifa', 'Huzaifa', 'Huzaifa', 'Huzaifa', 'Huzaifa', 'March 8, 2023', '50', 'CHRISTMAS GIFT CARD 100', 'MERRY-CHRISTMAS-100', '90', '2023-03-08 05:30:05', '2023-03-08 05:30:05'),
(23, 2, 21, 'asd', 'asd', 'asd', 'asd', 'asd', 'March 9, 2023', '50', 'Test Gifts 1', 'sdadassda', '90', '2023-03-09 02:15:23', '2023-03-09 02:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `hoodies_sweatshirts_make`
--

CREATE TABLE `hoodies_sweatshirts_make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoodies_sweatshirts_make`
--

INSERT INTO `hoodies_sweatshirts_make` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hoodies & Sweatshirts', 'hoodies-sweatshirts', 1, '2023-03-07 02:18:56', '2023-03-07 02:18:56'),
(2, 'Sweatshirts', 'sweatshirts', 1, '2023-03-07 02:19:07', '2023-03-07 02:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `jackets_make`
--

CREATE TABLE `jackets_make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jackets_make`
--

INSERT INTO `jackets_make` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Denim Jackets', 'denim-jackets', 1, '2023-03-07 00:49:41', '2023-03-07 00:59:37'),
(3, 'Vests', 'vests', 1, '2023-03-07 00:53:09', '2023-03-07 00:59:40'),
(4, 'Jackets', 'jackets', 1, '2023-03-07 00:53:20', '2023-03-07 00:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `jeans_make`
--

CREATE TABLE `jeans_make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jeans_make`
--

INSERT INTO `jeans_make` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Straight Jeans', 'straight-jeans', 1, '2023-03-07 01:31:54', '2023-03-07 01:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `jerseys_make`
--

CREATE TABLE `jerseys_make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jerseys_make`
--

INSERT INTO `jerseys_make` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Football / Soccer', 'football-soccer', 1, '2023-03-07 02:32:58', '2023-03-07 02:32:58'),
(2, 'Baseball', 'baseball', 1, '2023-03-07 02:33:05', '2023-03-07 02:33:05'),
(3, 'Jerseys', 'jerseys', 1, '2023-03-07 02:33:15', '2023-03-07 02:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `route` varchar(255) NOT NULL,
  `status` tinyint(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `meta_title`, `keywords`, `meta_description`, `route`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', 'Helolo Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'home', 1, '2022-06-03 06:37:28', '2023-05-31 06:45:31'),
(2, 'Product', 'product', 'Product | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'product', 1, '2022-06-03 06:55:33', '2022-06-03 06:55:33'),
(3, 'Rework', 'rework', 'Rework | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'reworks', 1, '2022-06-03 06:55:33', '2022-06-03 06:55:33'),
(4, 'Cart', 'cart', 'Shopping Cart | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'cart', 1, '2022-06-03 07:00:01', '2022-06-03 07:00:01'),
(5, 'Gift Cards', 'gift-cards', 'Gift Cards | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'gift-cards', 1, '2022-06-03 07:00:01', '2022-06-03 07:00:01'),
(6, 'Brands', 'brands', 'Brands | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'brands', 1, '2022-06-03 07:02:34', '2022-06-03 07:02:34'),
(7, 'Blog', 'blog', 'Blog | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'blog', 1, '2022-06-03 07:02:34', '2022-06-03 07:02:34'),
(8, 'Contact Us', 'contact_us', 'Contact Us | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'contact-us', 1, '2022-06-03 07:03:37', '2022-06-03 07:03:37'),
(9, 'Checkout', 'checkout', 'Checkout | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'checkout', 1, '2022-06-13 13:19:32', '2022-06-13 20:26:51'),
(10, 'About Us', 'about-us', 'About Us | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'about-us', 1, '2023-01-31 11:28:04', '2023-01-31 11:28:04'),
(11, 'Customer Service', 'customer-service', 'Customer Service | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'customer-service', 1, '2023-01-31 11:28:04', '2023-01-31 11:28:04'),
(12, 'Faqs', 'faqs', 'Faqs | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'faqs', 1, '2023-01-31 11:28:04', '2023-01-31 11:28:04'),
(13, 'Track Order', 'track-order', 'Track Order | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'track-order', 1, '2023-01-31 11:28:04', '2023-01-31 11:28:04'),
(14, 'Size Guide', 'size-guide', 'Size Guide | Fashion Redisplay', 'Fashion Redisplay', 'Fashion Redisplay', 'size-guide', 1, '2023-01-31 11:28:04', '2023-01-31 11:28:04'),
(15, 'Profile', 'profile', 'Profile | Fashion Redisplay', 'Profile | Fashion Redisplay', 'Profile | Fashion Redisplay', 'user.edit', 1, '2023-03-16 13:01:40', '2023-03-16 13:01:40'),
(16, 'Order List', 'order_list', 'Order List | Fashion Redisplay', 'Order List | Fashion Redisplay', 'Order List | Fashion Redisplay', 'order_list', 1, '2023-03-16 13:04:28', '2023-03-16 13:04:28'),
(17, 'Wish List', 'wishlist', 'Wish List | Fashion Redisplay', 'Wish List | Fashion Redisplay', 'Wish List | Fashion Redisplay', 'wishlist', 1, '2023-03-16 13:04:28', '2023-03-16 13:04:28'),
(18, 'Gift Card List', 'gift_card_list', 'Gift Card List | Fashion Redisplay', 'Gift Card List | Fashion Redisplay', 'Gift Card List | Fashion Redisplay', 'gift_card_list', 1, '2023-03-16 13:04:28', '2023-03-16 13:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(37, '2023_01_09_073558_create_products_table', 1),
(38, '2023_01_09_073617_create_carts_table', 1),
(39, '2023_01_09_075134_create_brands_table', 1),
(40, '2023_01_31_104850_create_contacts_table', 2),
(41, '2023_03_17_073201_create_notifications_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE `navigation` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `parent_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 0, 'VINTAGE', 'vintage', '2023-01-24 11:39:25', '2023-01-27 06:55:14'),
(2, 0, 'RETRO', 'retro', '2023-01-24 11:39:25', '2023-01-27 06:55:15'),
(3, 0, 'Y2K', 'y2k', '2023-01-24 11:39:25', '2023-01-27 06:55:15'),
(4, 0, 'THRIFT', 'thrift', '2023-01-24 11:39:25', '2023-01-27 06:55:15'),
(5, 0, 'REWORKS', 'reworks', '2023-01-24 11:39:25', '2023-01-27 06:55:15'),
(6, 5000000, 'FEATURED', 'featured', '2023-01-24 11:39:25', '2023-02-23 08:11:58'),
(7, 0, 'BRANDS', 'brands', '2023-01-24 11:39:25', '2023-01-27 06:55:15'),
(8, 0, 'GIFT CARDS', 'gift-cards', '2023-01-24 11:39:25', '2023-01-27 06:55:15'),
(9, 0, 'BLOG', 'blog', '2023-01-24 11:39:25', '2023-01-27 06:55:15'),
(10, 1, 'WOMEN', 'women', '2023-01-24 11:40:00', '2023-01-27 06:55:15'),
(11, 1, 'MEN', 'men', '2023-01-24 11:40:00', '2023-01-27 06:55:15'),
(12, 1, 'YOUTH', 'youth', '2023-01-24 11:40:00', '2023-01-27 06:55:15'),
(13, 10, 'Blouses & Tops', 'blouses-tops', '2023-01-24 11:42:19', '2023-01-27 06:55:15'),
(14, 10, 'Dresses', 'dresses', '2023-01-24 11:42:19', '2023-01-27 06:55:15'),
(15, 10, 'Jackets', 'jackets', '2023-01-24 11:42:19', '2023-01-27 06:55:15'),
(16, 10, 'Jerseys', 'jerseys', '2023-01-24 11:42:19', '2023-01-27 06:55:15'),
(17, 10, 'Pants', 'pants', '2023-01-24 11:42:19', '2023-01-27 06:55:15'),
(18, 10, 'Shirts', 'shirts', '2023-01-24 11:42:19', '2023-01-27 06:55:15'),
(19, 10, 'Sweaters', 'sweaters', '2023-01-24 11:42:19', '2023-01-27 06:55:15'),
(20, 10, 'Hoodies & Sweatshirts', 'hoodies-sweatshirts', '2023-01-24 11:42:19', '2023-01-27 06:55:15'),
(21, 11, 'Jackets', 'jackets', '2023-01-24 11:43:44', '2023-01-27 06:55:15'),
(22, 11, 'Jerseys', 'jerseys', '2023-01-24 11:43:44', '2023-01-27 06:55:15'),
(23, 11, 'Paints', 'paints', '2023-01-24 11:43:44', '2023-01-27 06:55:15'),
(24, 11, 'Shirts', 'shirts', '2023-01-24 11:43:44', '2023-01-27 06:55:15'),
(25, 11, 'Shorts', 'shorts', '2023-01-24 11:43:44', '2023-01-27 06:55:15'),
(26, 11, 'Sweaters', 'sweaters', '2023-01-24 11:43:44', '2023-01-27 06:55:15'),
(27, 11, 'T-Shirts', 't-shirts', '2023-01-24 11:43:44', '2023-01-27 06:55:15'),
(28, 11, 'Hoodies & Sweatshirts', 'hoodies-sweatshirts', '2023-01-24 11:43:44', '2023-01-27 06:55:15'),
(29, 12, 'Jackets', 'jackets', '2023-01-24 11:44:41', '2023-01-27 06:55:15'),
(30, 12, 'Jerseys', 'jerseys', '2023-01-24 11:44:41', '2023-01-27 06:55:15'),
(31, 12, 'T-Shirts', 't-shirts', '2023-01-24 11:44:41', '2023-01-27 06:55:16'),
(35, 32, 'Blouses & Tops', 'blouses-tops', '2023-01-24 11:46:57', '2023-01-27 06:55:16'),
(36, 32, 'Dresses', 'dresses', '2023-01-24 11:46:57', '2023-01-27 06:55:16'),
(37, 32, 'Jackets', 'jackets', '2023-01-24 11:46:57', '2023-01-27 06:55:16'),
(38, 32, 'Pants', 'pants', '2023-01-24 11:46:57', '2023-01-27 06:55:16'),
(39, 32, 'Hoodies & Sweatshirts', 'hoodies-sweatshirts', '2023-01-24 11:46:57', '2023-01-27 06:55:16'),
(40, 32, 'Shorts', 'shorts', '2023-01-24 11:46:57', '2023-01-27 06:55:16'),
(41, 32, 'T-Shirt', 't-shirt', '2023-01-24 11:46:57', '2023-01-27 06:55:16'),
(42, 33, 'Jackets', 'jackets', '2023-01-24 11:48:20', '2023-01-27 06:55:16'),
(43, 33, 'Paints', 'paints', '2023-01-24 11:48:20', '2023-01-27 06:55:16'),
(44, 33, 'Shirts', 'shirts', '2023-01-24 11:48:20', '2023-01-27 06:55:16'),
(45, 33, 'Shorts', 'shorts', '2023-01-24 11:48:20', '2023-01-27 06:55:16'),
(46, 33, 'Sweaters', 'sweaters', '2023-01-24 11:48:20', '2023-01-27 06:55:16'),
(47, 33, 'T-Shirts', 't-shirts', '2023-01-24 11:48:20', '2023-01-27 06:55:16'),
(48, 33, 'Hoodies & Sweatshirts', 'hoodies-sweatshirts', '2023-01-24 11:48:20', '2023-01-27 06:55:16'),
(49, 33, 'Jeans', 'jeans', '2023-01-24 11:48:20', '2023-01-27 06:55:16'),
(50, 34, 'Jackets', 'jackets', '2023-01-24 11:48:46', '2023-01-27 06:55:16'),
(53, 51, 'Hoodies & Sweatshirts', 'hoodies-sweatshirts', '2023-01-24 11:51:09', '2023-01-27 06:55:16'),
(54, 51, 'Jackets', 'jackets', '2023-01-24 11:51:09', '2023-01-27 06:55:16'),
(55, 51, 'Jeans', 'jeans', '2023-01-24 11:51:09', '2023-01-27 06:55:16'),
(56, 51, 'Pants', 'pants', '2023-01-24 11:51:09', '2023-01-27 06:55:16'),
(57, 51, 'Shorts', 'shorts', '2023-01-24 11:51:09', '2023-01-27 06:55:16'),
(58, 51, 'Shirts', 'shirts', '2023-01-24 11:51:09', '2023-01-27 06:55:16'),
(59, 52, 'Juicy Couture', 'juicy-couture', '2023-01-24 11:52:50', '2023-01-27 06:55:16'),
(60, 52, 'True Religion', 'true-religion', '2023-01-24 11:52:50', '2023-01-27 06:55:16'),
(61, 52, 'Guess', 'guess', '2023-01-24 11:52:50', '2023-01-27 06:55:16'),
(62, 52, 'GAP', 'gap', '2023-01-24 11:52:50', '2023-01-27 06:55:16'),
(63, 52, 'Calvin Klein', 'calvin-klein', '2023-01-24 11:52:50', '2023-01-27 06:55:16'),
(64, 52, 'Eddie Bauer', 'eddie-bauer', '2023-01-24 11:52:50', '2023-01-27 06:55:16'),
(65, 52, 'Levi Strauss & Co.', 'levi-strauss-co', '2023-01-24 11:52:50', '2023-01-27 06:55:16'),
(66, 52, 'Mossimo', 'mossimo', '2023-01-24 11:52:50', '2023-01-27 06:55:16'),
(67, 52, 'Old Navy', 'old-navy', '2023-01-24 11:52:50', '2023-01-27 06:55:16'),
(68, 52, 'Tommv Hilfiqer', 'tommv-hilfiqer', '2023-01-24 11:52:50', '2023-01-27 06:55:17'),
(69, 4, 'WOMEN', 'women', '2023-01-24 11:53:52', '2023-01-27 06:55:17'),
(70, 4, 'MEN', 'men', '2023-01-24 11:53:52', '2023-01-27 06:55:17'),
(71, 4, 'YOUTH GIRLS', 'youth-girls', '2023-01-24 11:53:52', '2023-01-27 06:55:17'),
(72, 4, 'YOUTH BOYS', 'youth-boys', '2023-01-24 11:53:52', '2023-01-27 06:55:17'),
(73, 69, 'Active Wears', 'active-wears', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(74, 69, 'Blouses & Tops', 'blouses-tops', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(75, 69, 'Dresses', 'dresses', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(76, 69, 'Hoodies & Sweetshirts', 'hoodies-sweetshirts', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(77, 69, 'Jackets', 'jackets', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(78, 69, 'Jeans', 'jeans', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(79, 69, 'Jerseys', 'jerseys', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(80, 69, 'Jumpsuits & Rompers', 'jumpsuits-rompers', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(81, 69, 'Nightwears', 'nightwears', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(82, 69, 'Paints', 'paints', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(83, 69, 'Shorts', 'shorts', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(84, 69, 'Shirts', 'shirts', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(85, 69, 'Sweaters', 'sweaters', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(86, 69, 'Swimwears', 'swimwears', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(87, 69, 'T-Shirts', 't-shirts', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(88, 69, 'Scarf', 'scarf', '2023-01-24 11:56:05', '2023-01-27 06:55:17'),
(89, 70, 'Active Wears', 'active-wears', '2023-01-24 11:58:12', '2023-01-27 06:55:17'),
(90, 70, 'Hoodies & Sweetshirts', 'hoodies-sweetshirts', '2023-01-24 11:58:12', '2023-01-27 06:55:17'),
(91, 70, 'Jackets', 'jackets', '2023-01-24 11:58:12', '2023-01-27 06:55:17'),
(92, 70, 'Jeans', 'jeans', '2023-01-24 11:58:12', '2023-01-27 06:55:17'),
(93, 70, 'Jerseys', 'jerseys', '2023-01-24 11:58:12', '2023-01-27 06:55:17'),
(94, 70, 'Paints', 'paints', '2023-01-24 11:58:12', '2023-01-27 06:55:17'),
(95, 70, 'Shirts', 'shirts', '2023-01-24 11:58:12', '2023-01-27 06:55:17'),
(96, 70, 'Shorts', 'shorts', '2023-01-24 11:58:12', '2023-01-27 06:55:17'),
(97, 70, 'Sweaters', 'sweaters', '2023-01-24 11:58:12', '2023-01-27 06:55:17'),
(98, 70, 'T-Shirts', 't-shirts', '2023-01-24 11:58:12', '2023-01-27 06:55:17'),
(99, 71, 'Active Wears', 'active-wears', '2023-01-24 12:03:57', '2023-01-27 06:55:17'),
(100, 71, 'Blouses & Tops', 'blouses-tops', '2023-01-24 12:03:57', '2023-01-27 06:55:17'),
(101, 71, 'Dresses', 'dresses', '2023-01-24 12:03:57', '2023-01-27 06:55:17'),
(102, 71, 'Hoodies & Sweetshirts', 'hoodies-sweetshirts', '2023-01-24 12:03:57', '2023-01-27 06:55:17'),
(103, 71, 'Jackets', 'jackets', '2023-01-24 12:03:57', '2023-01-27 06:55:17'),
(104, 71, 'Jeans', 'jeans', '2023-01-24 12:03:57', '2023-01-27 06:55:17'),
(105, 71, 'Jerseys', 'jerseys', '2023-01-24 12:03:57', '2023-01-27 06:55:17'),
(106, 71, 'Paints', 'paints', '2023-01-24 12:03:57', '2023-01-27 06:55:18'),
(107, 71, 'Shorts', 'shorts', '2023-01-24 12:03:57', '2023-01-27 06:55:18'),
(108, 71, 'Shirts', 'shirts', '2023-01-24 12:03:57', '2023-01-27 06:55:18'),
(109, 71, 'Sweaters', 'sweaters', '2023-01-24 12:03:57', '2023-01-27 06:55:18'),
(110, 71, 'Swimwears', 'swimwears', '2023-01-24 12:03:57', '2023-01-27 06:55:18'),
(111, 71, 'T-Shirts', 't-shirts', '2023-01-24 12:03:57', '2023-01-27 06:55:18'),
(112, 72, 'Active Wears', 'active-wears', '2023-01-24 12:05:29', '2023-01-27 06:55:18'),
(113, 72, 'Hoodies & Sweetshirts', 'hoodies-sweetshirts', '2023-01-24 12:05:29', '2023-01-27 06:55:18'),
(114, 72, 'Jackets', 'jackets', '2023-01-24 12:05:29', '2023-01-27 06:55:18'),
(115, 72, 'Jeans', 'jeans', '2023-01-24 12:05:29', '2023-01-27 06:55:18'),
(116, 72, 'Jerseys', 'jerseys', '2023-01-24 12:05:29', '2023-01-27 06:55:18'),
(117, 72, 'Paints', 'paints', '2023-01-24 12:05:29', '2023-01-27 06:55:18'),
(118, 72, 'Shirts', 'shirts', '2023-01-24 12:05:29', '2023-01-27 06:55:18'),
(119, 72, 'Shorts', 'shorts', '2023-01-24 12:05:29', '2023-01-27 06:55:18'),
(120, 72, 'Sweaters', 'sweaters', '2023-01-24 12:05:29', '2023-01-27 06:55:18'),
(121, 72, 'T-Shirts', 't-shirts', '2023-01-24 12:05:29', '2023-01-27 06:55:18'),
(122, 7, 'TOP BRANDS', 'top-brands', '2023-01-24 12:06:10', '2023-01-27 06:55:18'),
(123, 122, 'Nike', 'nike', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(124, 122, 'Jordan', 'jordan', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(125, 122, 'Adidas', 'adidas', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(126, 122, 'Reebok', 'reebok', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(127, 122, 'Puma', 'puma', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(128, 122, 'Fila', 'fila', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(129, 122, 'Supreme', 'supreme', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(130, 122, 'Stussy', 'stussy', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(131, 122, 'Brockum', 'brockum', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(132, 122, 'Carhartt', 'carhartt', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(133, 122, 'Dickies', 'dickies', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(134, 122, 'The Northface', 'the-northface', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(135, 122, 'Patagonia', 'patagonia', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(136, 122, 'The Mountain', 'the-mountain', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(137, 122, 'Columbia', 'columbia', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(138, 122, 'Champion', 'champion', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(139, 122, 'Russell', 'russell', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(140, 122, 'Starter', 'starter', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(141, 122, 'Ralph Lauren', 'ralph-lauren', '2023-01-24 12:10:05', '2023-01-27 06:55:18'),
(142, 122, 'Tommy Hilfiger', 'tommy-hilfiger', '2023-01-24 12:10:05', '2023-01-27 06:55:19'),
(143, 122, 'GAP', 'gap', '2023-01-24 12:10:05', '2023-01-27 06:55:19'),
(144, 122, 'Calvin Klein', 'calvin-klein', '2023-01-24 12:10:05', '2023-01-27 06:55:19'),
(145, 122, 'Levi\'s', 'levis', '2023-01-24 12:10:05', '2023-01-27 06:55:19'),
(146, 122, 'Coogi', 'coogi', '2023-01-24 12:10:05', '2023-01-27 06:55:19'),
(147, 122, 'Van Heusen', 'van-heusen', '2023-01-24 12:10:05', '2023-01-27 06:55:19'),
(148, 122, 'Lee', 'lee', '2023-01-24 12:10:05', '2023-01-27 06:55:19'),
(149, 122, 'Harley Davidson', 'harley-davidson', '2023-01-24 12:10:05', '2023-01-27 06:55:19'),
(152, 0, 'SHOES', 'shoes', '2023-07-05 07:11:58', '2023-07-05 07:12:46'),
(153, 152, 'TOP SHOES BRANDS', 'top-shoes-brands', '2023-07-05 07:15:46', '2023-07-05 07:17:42'),
(154, 153, 'Doctor Martin', 'doctor-martin', '2023-07-05 07:18:37', NULL),
(156, 153, 'Clark', 'clark', '2023-07-05 07:21:42', NULL),
(157, 153, 'Ugg', 'ugg', '2023-07-05 07:21:42', NULL),
(158, 153, 'Cross', 'cross', '2023-07-05 07:21:42', NULL),
(159, 153, 'Cow Boy', 'cow-boy', '2023-07-05 07:21:42', NULL),
(160, 153, 'Brocken Stock', 'brocken-stock', '2023-07-05 07:21:42', NULL),
(161, 153, 'Addidas (Sliper)', 'addidas-sliper', '2023-07-05 07:21:42', NULL),
(162, 153, 'Tava', 'tava', '2023-07-05 07:21:42', NULL),
(163, 153, 'USA Canvas All Star', 'usa-canvas-all-star', '2023-07-05 07:21:42', NULL),
(178, 153, 'Red Wing', 'red-wing', '2023-07-05 11:53:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('1d88bc6f-9511-4c34-aca4-b29d0a656df2', 'App\\Notifications\\PurchaseNotification', 'App\\Models\\User', 2, '{\"repliedTime\":\"2023-05-29T07:29:30.820528Z\"}', NULL, '2023-05-29 02:29:30', '2023-05-29 02:29:30'),
('9664b471-930d-4fc1-8bfc-377a3dcd9802', 'App\\Notifications\\PurchaseNotification', 'App\\Models\\User', 2, '{\"repliedTime\":\"2023-05-31T11:39:23.425441Z\"}', NULL, '2023-05-31 06:39:23', '2023-05-31 06:39:23'),
('975eb974-a278-41af-b29a-562c194bf392', 'App\\Notifications\\PurchaseNotification', 'App\\Models\\total_users', 2, '{\"repliedTime\":\"2023-03-17T07:52:09.718955Z\"}', NULL, '2023-03-17 02:52:09', '2023-03-17 02:52:09'),
('aa4633f2-4f62-44e8-a618-d6f1cf81d757', 'App\\Notifications\\PurchaseNotification', 'App\\Models\\User', 2, '{\"repliedTime\":\"2023-05-29T07:30:18.326415Z\"}', NULL, '2023-05-29 02:30:18', '2023-05-29 02:30:18'),
('e44eaf2c-7c43-4933-90b9-29fbab73df32', 'App\\Notifications\\PurchaseNotification', 'App\\Models\\User', 2, '{\"repliedTime\":\"2023-03-17T07:41:44.503522Z\"}', NULL, '2023-03-17 02:41:44', '2023-03-17 02:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `pants_make`
--

CREATE TABLE `pants_make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pants_make`
--

INSERT INTO `pants_make` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Leggings', 'leggings', 1, '2023-03-07 02:26:15', '2023-03-07 02:26:15'),
(2, 'Pants', 'pants', 1, '2023-03-07 02:26:22', '2023-03-07 02:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `processing`
--

CREATE TABLE `processing` (
  `id` int(11) NOT NULL,
  `order_number` text DEFAULT NULL,
  `client_id` text NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_address` text NOT NULL,
  `client_country` varchar(255) NOT NULL,
  `order_details` text NOT NULL,
  `product_name` text NOT NULL,
  `client_number` varchar(255) NOT NULL,
  `client_alternate_number` varchar(255) DEFAULT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_shipaddress` text DEFAULT NULL,
  `client_note` text DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `received_by` varchar(255) NOT NULL,
  `order_status` text NOT NULL,
  `reason_cancel` text DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `processing`
--

INSERT INTO `processing` (`id`, `order_number`, `client_id`, `client_name`, `client_address`, `client_country`, `order_details`, `product_name`, `client_number`, `client_alternate_number`, `client_email`, `client_shipaddress`, `client_note`, `amount`, `received_by`, `order_status`, `reason_cancel`, `read_at`, `created_at`, `updated_at`) VALUES
(10, NULL, '', '', '', '', '', '', '', '', '', 'Null', 'Null', '1222', 'Cash', 'Cancelled', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, '2023-02-21 02:54:32', '2023-09-25 12:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sku` text NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL,
  `shoe_id` bigint(20) UNSIGNED DEFAULT NULL,
  `shoe_name` varchar(255) DEFAULT NULL,
  `brand_size` varchar(255) DEFAULT NULL,
  `chart_size_id` int(11) DEFAULT NULL,
  `chart_size` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_category_name` varchar(255) DEFAULT NULL,
  `rework` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `condition` varchar(255) DEFAULT NULL,
  `colors` text DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `descriptions` text DEFAULT NULL,
  `additional_info` text DEFAULT NULL,
  `shipping` text DEFAULT NULL,
  `thumbnail` text NOT NULL,
  `product_images` text DEFAULT NULL,
  `in_stock` text DEFAULT NULL,
  `expire_date` varchar(255) DEFAULT NULL,
  `gift` varchar(255) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `size_qty` text DEFAULT NULL,
  `fabric` text DEFAULT NULL,
  `jackets` varchar(255) DEFAULT NULL,
  `shirts` varchar(255) DEFAULT NULL,
  `jeans` varchar(255) DEFAULT NULL,
  `skirts` varchar(255) DEFAULT NULL,
  `blouse_tops` varchar(255) DEFAULT NULL,
  `shorts` varchar(255) DEFAULT NULL,
  `hoodies_sweatshirts` varchar(255) DEFAULT NULL,
  `pants` varchar(255) DEFAULT NULL,
  `jerseys` varchar(255) DEFAULT NULL,
  `t_shirts` varchar(255) DEFAULT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_des` text NOT NULL,
  `keyword` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `is_new_arrival` tinyint(1) DEFAULT 1,
  `is_polular` tinyint(1) DEFAULT 0,
  `is_best_selling` tinyint(1) DEFAULT 0,
  `published` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sku`, `brand_id`, `brand_name`, `shoe_id`, `shoe_name`, `brand_size`, `chart_size_id`, `chart_size`, `category`, `category_id`, `product_category_id`, `product_category_name`, `rework`, `weight`, `condition`, `colors`, `size`, `descriptions`, `additional_info`, `shipping`, `thumbnail`, `product_images`, `in_stock`, `expire_date`, `gift`, `slug`, `size_qty`, `fabric`, `jackets`, `shirts`, `jeans`, `skirts`, `blouse_tops`, `shorts`, `hoodies_sweatshirts`, `pants`, `jerseys`, `t_shirts`, `meta_title`, `meta_keyword`, `meta_des`, `keyword`, `status`, `is_new_arrival`, `is_polular`, `is_best_selling`, `published`, `created_at`, `updated_at`) VALUES
(4, 'Product 4', '675', 'Et iure corporis modi.', 15, 'Ally', NULL, NULL, 'XS', 1, 'XS', 'vintage, women, jackets', '1, 10, 15', 3, 'hoodies', NULL, '0.25', 'Excellent', 'Black', 'M', 'Description Product 4', 'Additional Information Product 4', 'Yes', 'img1.jpg', 'img1.jpg,img1.jpg', '0', NULL, NULL, 'product-4', 'S-1, M-2, XS-30', 'Cotton', 'Sports Jackets', 'Hawaii Shirts', '', '', '', '', 'Sweatshirts', 'Leggings', '', '', 'Product 4', 'Product 4', 'Product 4', 'Product 4', 0, 1, 0, 0, 0, '2023-01-09 05:06:08', '2023-01-27 05:58:50'),
(5, 'Product 5', '435', 'Et quidem sunt ea.', 18, 'Alstyle Apparel & Activewear', NULL, NULL, 'L', 1, 'L', 'VINTAGE, MEN, Jackets, ', '1, 11, 21', 3, 'hoodies', NULL, '0.25', 'Excellent', 'Yellowgreen', 'S, M, XS', 'Description Product 5', 'Additional Information Product 5', 'No', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'product-5', 'M-25, X-26', 'Cotton', 'Vests', '', '', '', '', '', 'Hoodies', 'Sports Pants', 'Football / Soccer', 'Sports T-Shirts', 'Product 5', 'Product 5', 'Product 5', 'Product 5', 0, 1, 0, 0, 0, '2023-01-09 05:06:08', '2023-01-27 05:58:57'),
(6, 'Product 6', '12', '13212', 33, 'Athletic Works', NULL, NULL, 'M', 1, 'M', 'VINTAGE, YOUTH, Jerseys, ', '1, 12, 30', 3, 'hoodies', NULL, '0.25', 'Excellent', 'Pink', 'M, X', 'Description Product 6', 'Additional Information Product 6', 'Yes', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'product-6', 'M-25, X-26', 'Cotton', 'Winter Jackets', 'Hawaii Shirts', '', '', '', 'Casual Shorts', '', '', '', '', 'Product 6', 'Product 6', 'Product 6', 'Product 6', 0, 1, 1, 0, 0, '2023-01-25 05:43:13', '2023-02-23 02:57:11'),
(12, 'Product 12', '2500', 'MERRY-CHRISTMAS-50', 179, 'Nike', NULL, NULL, 'M', 1, 'M', 'brands, top-brands, nike, ', '7, 122, 123', 3, 'hoodies', NULL, '0.25', 'Excellent', 'Blue', 'M', 'Product 12', 'Product 12', 'No', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'product-12', 'S-50', 'Cotton', '', 'Hawaii Shirts', '', '', 'Flannel Blouses', 'Swim / Board Shorts', '', 'Pants', 'NFL', 'Nascar T-Shirts', 'Product 12', 'Product 12', 'Product 12', 'Product 12', 0, 1, 0, 1, 0, '2023-01-27 07:42:53', '2023-02-23 02:57:08'),
(13, 'Reworks1', '12231', '23123123', 8, 'Abercrombie', NULL, NULL, 'M', 1, 'M', 'reworks, ', '5', 3, 'hoodies', 'bags', 'M', 'Bad', 'dassda', 'sdasd', 'sadsdasad', 'asdsad', 'sadas', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'reworks1', '123', 'sda', '', '', '', '', '', '', '', '', '', '', 'asd', 'asd', 'asd', 'asd', 0, 1, 0, 0, 0, '2023-02-22 07:25:16', '2023-02-22 07:25:16'),
(14, 'Huzaifa', '50', 'MERRY-CHRISTMAS-50', 9, 'active-co-', NULL, NULL, 'M', 1, 'M', 'reworks, ', '5', 3, 'hoodies', 'hats', '0.25', 'Excellent', 'asd', 'sdaasd', 'asdasd', 'asd', 'asd', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'huzaifa', 'asd', 'sda', '', '', '', '', '', '', '', '', '', '', 'sad', 'das', 'sda', 'asdasd asd asd as', 0, 1, 0, 0, 0, '2023-02-22 07:48:16', '2023-02-22 07:48:16'),
(15, 'Bags', '100', 'Bags', 8, 'Abercrombie', NULL, NULL, 'XS', 1, 'Bags', 'reworks, ', '5', 3, 'hoodies', 'bags', 'Bags', 'Good', 'Bags', 'Bags', 'Bags', 'Bags', 'Bags', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'bags', 'Bags', 'Bags', '', '', '', '', '', '', '', '', '', '', 'Bags', 'Bags', 'Bags', 'Bags', 0, 1, 0, 0, 0, '2023-02-23 07:08:23', '2023-02-23 07:08:23'),
(16, 'abc', '123', 'MERRY-CHRISTMAS-50', 8, 'abercrombie', NULL, NULL, 'XS', NULL, 'XS', 'vintage, women, dresses, ', '1, 10, 14', 3, 'hoodies', NULL, '123', 'Excellent', 'Black', 'sad', 'ads', 'asd', 'Yes', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'abc', 'sad', 'Cotton', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ABC', 'ABC', 'ABC', 'ABC', 0, 1, 0, 0, 0, '2023-03-06 06:48:23', '2023-03-06 06:48:23'),
(17, 'test1', '123', 'test1', 8, 'abercrombie', NULL, NULL, 'XS', NULL, 'XS', 'vintage, women, blouses-tops, ', '1, 10, 13', 3, 'hoodies', NULL, '12312', 'Very Good', 'Black', 'XS', 'dassdasda', 'asdsda', 'Yes', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'test1', '123', 'Cotton', '3', NULL, '2', '1', '2', '2', '2', '2', '2', '2', 'test1', 'test1', 'test1', 'test1', 0, 1, 0, 0, 0, '2023-03-07 03:38:12', '2023-03-07 03:38:12'),
(23, 'cap1', '1500', '12123312', 179, 'nike', NULL, NULL, 'XS', NULL, 'XS', 'vintage, men, sweaters, ', '1, 11, 26', 2, 'caps', NULL, '2grm', 'Very Good', 'Black', 'sad', 'asasdasd', 'asd', 'sda', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'cap1', '12', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cap1', 'cap1', 'cap1', 'cap1', 1, 1, 0, 0, 0, '2023-06-15 01:40:39', '2023-06-15 01:40:39'),
(24, 'cap2', '3453', '12123231123', 9, 'nike', NULL, NULL, 'XS', NULL, 'XS', 'vintage, women, dresses, ', '1, 10, 14', 2, 'caps', NULL, '123', 'Very Good', 'Yellow', '12331', '123123', '123123', NULL, 'img1.jpg', 'img1.jpg,img1.jpg', NULL, NULL, NULL, 'httpsrpmcaraeassetsnewassetsbanner-new-updated-arwebp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', '123', '231', '123', 1, 1, 0, 0, 0, '2023-06-15 02:44:51', '2023-06-15 02:44:51'),
(25, 'hfghfgh', '1665', '6+415454', 179, 'nike', NULL, NULL, 'XS', NULL, 'S', 'vintage, men, jackets, ', '1, 11, 21', 4, 't-shirt', NULL, '456465', 'Good', 'Black', '423123', 'gfgcgcg', '154654', NULL, 'img1.jpg', 'img1.jpg,img1.jpg', '0', NULL, NULL, 'hfghfgh', '5445', '45545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hello 123 Title', '55456465', '54456', '54464645', 1, 1, 0, 0, 0, '2023-07-03 01:07:00', '2023-07-03 01:07:00'),
(32, 'Huzaifa', '3453', '12123231123', NULL, NULL, 2, 'doctor-martin', 'S', NULL, 'XS', 'shoes, ', NULL, NULL, NULL, NULL, '0.5', 'Good', 'Red', 'sad', 'sad', 'sad', 'sad', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'huzaifa12', '23123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sad', 'sad', 'sad', 'sad', 1, 1, 0, 0, 0, '2023-07-06 00:42:35', '2023-07-06 00:42:35'),
(33, 'asdsad', '3453', '12123231123', NULL, NULL, 2, 'doctor-martin', 'XS', NULL, 'XS', 'shoes, ', NULL, NULL, NULL, NULL, '0.5', 'Good', 'Black', 'sad', 'sad', 'sad', 'sad', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'asdsad', '12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sad', 'sad', 'sad', 'sad', 1, 1, 0, 0, 0, '2023-07-06 01:06:54', '2023-07-06 01:06:54'),
(34, 'asdsadasd231', '2311', '12123231123', NULL, NULL, 3, 'red-wing', 'M', NULL, 'M', 'shoes, ', NULL, NULL, NULL, NULL, 'sad', 'Good', 'Yellow', 'sad', 'sad', 'sad', 'sad', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, 'asdsadasd231', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sad', 'sad', 'sad', 'sad', 1, 1, 0, 0, 0, '2023-07-06 01:52:02', '2023-07-06 01:52:02'),
(35, '455456454656', '652546645', 'MERRY-CHRISTMAS-50', NULL, NULL, 4, 'clark', 'S', NULL, 'XS', 'shoes, ', NULL, NULL, NULL, NULL, '0.5', 'Bad', 'Black', 'asddsads', 'asddsads', 'asddsads', 'asddsads', 'img1.jpg', 'img1.jpg,img1.jpg', '1', NULL, NULL, '455456454656', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asddsads', 'asddsads', 'asddsads', 'asddsads', 1, 1, 0, 0, 0, '2023-07-07 00:39:44', '2023-07-07 00:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `brand_id`, `brand_name`, `slug`, `thumbnail`, `created_at`, `updated_at`) VALUES
(2, 'Caps', 179, 'nike', 'caps', 'wc019iO8GWg6xAOIdMgzF07oNwXW5yuvWX0GIocq.png', '2023-06-14 07:08:09', '2023-06-15 06:57:29'),
(3, 'Hoodies', 179, 'nike', 'hoodies', 'VbvhiVaAfyVehZwTrXllQc2TVW9eZDA8ZPrI7Mqy.png', '2023-06-14 07:36:26', '2023-06-15 06:57:32'),
(4, 'T-shirt', 179, 'Nike', 't-shirt', 'Ub1lse0xI78RmTbACLEanHQu0hHWhMlYtc8hgDS5.png', '2023-07-03 01:04:46', '2023-07-03 01:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `reworks`
--

CREATE TABLE `reworks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `meta_title` varchar(25) NOT NULL,
  `keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reworks`
--

INSERT INTO `reworks` (`id`, `name`, `slug`, `image`, `status`, `meta_title`, `keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Hat', 'hat', '4gWzsi4tOxbsVeuhu8FzYp7dpZtWm1ltSfXOT5lC.jpg', 1, 'Hat', 'Hat', 'Hat', '2023-02-23 01:13:02', '2023-02-23 01:13:02'),
(2, 'Bags', 'bags', 'k13S3PzUP4wx1SpmWihl6X39VR4jBLyqnqKQqz6x.jpg', 1, 'Bags', 'Bags', 'Bags', '2023-02-23 01:13:35', '2023-02-23 01:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting_key` varchar(50) NOT NULL DEFAULT '',
  `setting_value` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting_key`, `setting_value`, `created_at`, `updated_at`) VALUES
(1, 'website_url', 'https://www.fashionredisplay.com', '2022-05-11 05:52:35', '2023-03-08 03:28:00'),
(2, 'site_name', 'Fashion Redisplay', '2022-05-11 05:52:35', '2023-03-08 03:28:00'),
(3, 'info_email', 'info@fashionredisplay.com', '2022-05-11 05:52:35', '2022-06-06 01:51:49'),
(4, 'contact_no', '+971 00 000 0000', '2022-05-11 05:52:35', '2022-06-23 20:54:29'),
(5, 'site_logo_header_dark', 'vmHj2TpLOpHMnUB40QdhGyfm0kbss0mMExK0PFfX.png', '2022-05-11 05:52:35', '2023-05-31 06:13:47'),
(6, 'site_logo_header_light', 'iGGy5Zglwy74E9BqmW70ezFzsH6psJl7YviGucTg.png', '2022-05-11 10:11:32', '2023-05-31 06:13:53'),
(7, 'footer_about', 'One of the most popular on the web is shopping.', '2022-05-11 10:11:32', '2023-09-25 07:12:54'),
(8, 'address', 'Dubai', '2022-05-11 10:17:57', '2022-06-23 20:54:29'),
(9, 'google_location', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462561.6574537445!2d55.22748795!3d25.076022449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1671523589444!5m2!1sen!2s', '2022-05-11 10:17:57', '2023-03-08 03:55:00'),
(10, 'facebook_page', '#', '2022-05-11 10:20:44', '2023-09-25 07:12:48'),
(11, 'twitter_page', '#', '2022-05-11 10:22:53', '2023-09-25 07:12:48'),
(12, 'social_instagram', '#', '2022-05-11 10:25:28', '2023-09-25 07:12:48'),
(13, 'social_linkedin', '#', '2022-05-11 10:27:05', '2023-09-25 07:12:48'),
(14, 'social_youtube', '#', '2022-05-13 11:46:54', '2023-09-25 07:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `shirts_make`
--

CREATE TABLE `shirts_make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shirts_make`
--

INSERT INTO `shirts_make` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Short Sleeve Shirts', 'short-sleeve-shirts', 1, '2023-03-07 01:16:09', '2023-03-07 01:17:16'),
(2, 'Hawaii Shirts', 'hawaii-shirts', 1, '2023-03-07 01:16:20', '2023-03-07 01:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `shoe_brands`
--

CREATE TABLE `shoe_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_alpha` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoe_brands`
--

INSERT INTO `shoe_brands` (`id`, `brand_name`, `brand_alpha`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Doctor Martin', 'd', 'doctor-martin', '2023-07-05 03:02:17', '2023-07-05 06:38:53'),
(3, 'Red Wing', 'r', 'red-wing', '2023-07-05 03:05:46', '2023-07-05 06:38:39'),
(4, 'Clark', 'c', 'clark', '2023-07-05 06:49:42', '2023-07-05 06:49:42'),
(5, 'Uggs', 'u', 'uggs', '2023-07-05 06:52:17', '2023-07-05 06:52:31'),
(6, 'Cross', 'c', 'cross', '2023-07-05 06:54:20', '2023-07-05 06:54:20'),
(7, 'Cow Boy', 'c', 'cow-boy', '2023-07-05 06:54:29', '2023-07-05 06:54:29'),
(8, 'Brocken Stock', 'b', 'brocken-stock', '2023-07-05 06:54:40', '2023-07-05 06:54:40'),
(9, 'Addidas (Sliper)', 'a', 'addidas-sliper', '2023-07-05 06:54:49', '2023-07-05 06:54:49'),
(10, 'Tava', 't', 'tava', '2023-07-05 06:54:57', '2023-07-05 06:54:57'),
(11, 'USA Canvas All Star', 'u', 'usa-canvas-all-star', '2023-07-05 06:55:12', '2023-07-05 06:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `shorts_make`
--

CREATE TABLE `shorts_make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shorts_make`
--

INSERT INTO `shorts_make` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sports Shorts', 'sports-shorts', 1, '2023-03-07 02:09:53', '2023-03-07 02:09:53'),
(2, 'Casual Shorts', 'casual-shorts', 1, '2023-03-07 02:09:59', '2023-03-07 02:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `skirts_make`
--

CREATE TABLE `skirts_make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skirts_make`
--

INSERT INTO `skirts_make` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Midi Skirts', 'midi-skirts', 1, '2023-03-07 01:48:51', '2023-03-07 01:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `t_shirts_make`
--

CREATE TABLE `t_shirts_make` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_shirts_make`
--

INSERT INTO `t_shirts_make` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'T-Shirts', 't-shirts', 1, '2023-03-07 01:06:24', '2023-03-07 01:08:28'),
(2, 'Sports T-Shirts', 'sports-t-shirts', 1, '2023-03-07 01:06:51', '2023-03-07 01:06:51'),
(3, 'Nascar T-Shirts', 'nascar-t-shirts', 1, '2023-03-07 01:07:10', '2023-03-07 01:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `date_of_birth`, `email`, `email_verified_at`, `google_id`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Huzaifa Khan', 'Khan', '2001-12-29', 'mrhuzaifa29@gmail.com', NULL, '112496141705256242360', '03444854553', '$2y$10$RvoIxwcGQpaatourlGpcr.1sskHLhzdTw2WU9sXikjxX9wRgy4CXq', 'D6bx3NLaHL22I97PoDlPDlB1bsoj8sSQEu6FSWWxqYsWqMcVznjutC4Dpctl', '2023-02-08 03:08:54', '2023-03-16 05:54:17'),
(4, 'Ali', 'Khan', '2005-11-04', 'ali@gmail.com', NULL, NULL, '03170244104', '$2y$10$zM8sF4Oq9IwNd5ofSHZjgevyeKDT5jDYXSl45UiCx70LuMhn81mtK', NULL, '2023-02-13 01:44:33', '2023-02-21 05:29:10'),
(5, 'Hamza', 'Khan', '1992-01-17', 'hamza@gmail.com', NULL, NULL, '03114545', '$2y$10$0plsHY0lfFq04PU.4PMVJeAdfrmWRvl/MAYKmm.qDoN9/MbAJXowa', NULL, '2023-03-16 01:57:29', '2023-03-16 01:58:29'),
(6, 'Huzaifa', 'Abbasi', '2023-03-16', 'huzikhan901@gmail.com', NULL, '110546064787758949015', '0312313', '$2y$10$0jQV7RzuEIM6ItW44FLR2.hZ785QtxY9rXqJj7E1B8YD4hk8jaEWi', 'OSU1VqVZUu47VlqIvEIsAH4b7MCet7rvbnEfC8Uodu2ET9BHFSaXfSoYpEqD', '2023-03-16 05:41:04', '2023-03-16 07:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `product_id`, `quantity`, `user_id`, `created_at`, `updated_at`) VALUES
(27, 4, 1, 4, '2023-03-06 05:31:40', '2023-03-06 05:31:40'),
(34, 12, 1, 2, '2023-05-31 06:37:50', '2023-05-31 06:37:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blouse_tops_make`
--
ALTER TABLE `blouse_tops_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `chart_size`
--
ALTER TABLE `chart_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gift_cards`
--
ALTER TABLE `gift_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_purchase`
--
ALTER TABLE `gift_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoodies_sweatshirts_make`
--
ALTER TABLE `hoodies_sweatshirts_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jackets_make`
--
ALTER TABLE `jackets_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeans_make`
--
ALTER TABLE `jeans_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jerseys_make`
--
ALTER TABLE `jerseys_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `pants_make`
--
ALTER TABLE `pants_make`
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
-- Indexes for table `processing`
--
ALTER TABLE `processing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `chart_size` (`chart_size_id`),
  ADD KEY `test` (`product_category_id`),
  ADD KEY `shoe_brand` (`shoe_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_brand` (`brand_id`);

--
-- Indexes for table `reworks`
--
ALTER TABLE `reworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirts_make`
--
ALTER TABLE `shirts_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoe_brands`
--
ALTER TABLE `shoe_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shorts_make`
--
ALTER TABLE `shorts_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skirts_make`
--
ALTER TABLE `skirts_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_shirts_make`
--
ALTER TABLE `t_shirts_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test1` (`product_id`),
  ADD KEY `test2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blouse_tops_make`
--
ALTER TABLE `blouse_tops_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT for table `chart_size`
--
ALTER TABLE `chart_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gift_cards`
--
ALTER TABLE `gift_cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gift_purchase`
--
ALTER TABLE `gift_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hoodies_sweatshirts_make`
--
ALTER TABLE `hoodies_sweatshirts_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jackets_make`
--
ALTER TABLE `jackets_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jeans_make`
--
ALTER TABLE `jeans_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jerseys_make`
--
ALTER TABLE `jerseys_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `pants_make`
--
ALTER TABLE `pants_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `processing`
--
ALTER TABLE `processing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reworks`
--
ALTER TABLE `reworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1085;

--
-- AUTO_INCREMENT for table `shirts_make`
--
ALTER TABLE `shirts_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shoe_brands`
--
ALTER TABLE `shoe_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shorts_make`
--
ALTER TABLE `shorts_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skirts_make`
--
ALTER TABLE `skirts_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_shirts_make`
--
ALTER TABLE `t_shirts_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `chart_size` FOREIGN KEY (`chart_size_id`) REFERENCES `chart_size` (`id`),
  ADD CONSTRAINT `shoe_brand` FOREIGN KEY (`shoe_id`) REFERENCES `shoe_brands` (`id`),
  ADD CONSTRAINT `test` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`id`);

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `test_brand` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `test1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `test2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
