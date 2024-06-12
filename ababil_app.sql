-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 08:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ababil_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin & Dashboard', 'upload/category-images/114299.jpg', 1, '2024-03-30 05:19:40', '2024-06-09 08:51:43'),
(2, 'ECommerce', 'upload/category-images/481700.png', 1, '2024-03-30 05:20:46', '2024-04-27 12:33:44'),
(3, 'Business & Corporate', 'upload/category-images/27105.png', 1, '2024-03-30 05:20:40', '2024-05-01 00:34:34'),
(4, 'Portfolio', 'upload/category-images/17792.jpg', 1, '2024-03-30 05:20:58', '2024-05-01 04:17:56'),
(5, 'Educational', 'upload/category-images/464401.png', 1, '2024-03-30 05:20:52', '2024-04-27 12:34:28'),
(6, 'Blogging', 'upload/category-images/139841.png', 1, '2024-03-30 12:31:41', '2024-05-01 04:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Unblock,0=Block',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `address`, `gender`, `date_of_birth`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Asraf', 'Zaman', '01314924003', 'asrafuzzaman705@gmail.com', '$2y$10$p1vXGRyphN5a.7Ig/Zl9fu8NN7wVG7KadlA72KAWCD9c.jiJuYgEK', 'Ibrahimpur, kaful, Dhaka-1206', 'Male', '2001-05-31', 'upload/customer-images/29935272550.png', 1, '2024-06-04 05:00:21', '2024-06-09 10:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `name`, `percentage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 2, 0, '2024-03-30 05:17:55', '2024-03-30 05:17:55'),
(2, 'Pro', 5, 0, '2024-03-30 05:17:55', '2024-03-30 05:17:55'),
(3, 'Premium', 10, 0, '2024-03-30 05:17:55', '2024-03-30 05:17:55');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_20_145622_create_sessions_table', 1),
(7, '2024_03_28_153641_create_categories_table', 1),
(8, '2024_03_28_171421_create_discounts_table', 1),
(14, '2024_03_30_110012_create_product_types_table', 1),
(15, '2024_03_30_113420_create_posts_table', 2),
(16, '2024_03_30_124903_create_skills_table', 3),
(22, '2014_10_12_000000_create_users_table', 6),
(23, '2024_03_28_181314_create_products_table', 7),
(34, '2024_04_22_171354_create_product_prices_table', 10),
(36, '2024_04_26_182346_create_testimonials_table', 11),
(37, '2024_03_28_235139_create_product_basic_auths_table', 12),
(38, '2024_03_28_235344_create_product_pro_auths_table', 13),
(39, '2024_03_28_235556_create_product_pre_auths_table', 13),
(43, '2024_05_01_131116_create_theme_infos_table', 14),
(44, '2024_05_10_173731_create_texes_table', 15),
(48, '2024_05_22_073647_create_policies_table', 17),
(68, '2024_05_16_181255_create_customers_table', 18),
(69, '2024_05_27_161059_create_orders_table', 18),
(70, '2024_05_27_161109_create_order_details_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `package_type` varchar(255) DEFAULT NULL,
  `subtotel_price` double(8,2) NOT NULL,
  `tax_ammount` int(11) NOT NULL,
  `package_price` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_date` text NOT NULL,
  `order_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `address` text NOT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `delivery_date` date DEFAULT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_amount` varchar(255) NOT NULL DEFAULT '0',
  `payment_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `payment_date` text DEFAULT NULL,
  `payment_timestamp` text DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `currency` text NOT NULL DEFAULT '$',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `company_name`, `comment`, `package_type`, `subtotel_price`, `tax_ammount`, `package_price`, `order_total`, `order_date`, `order_timestamp`, `order_status`, `address`, `delivery_status`, `delivery_date`, `payment_method`, `payment_amount`, `payment_status`, `payment_date`, `payment_timestamp`, `transaction_id`, `currency`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'Pro', 70.30, 15, 48, 87.97, '0606-0606-24242424', '2024-06-09 18:44:07', 'Processing', 'Ibrahimpur, kaful, Dhaka-1206', 'Pending', '2024-06-09', 'Online', '87.97', 'Pending', NULL, '0', '66621478a59e8', 'USD', '2024-06-06 13:56:40', '2024-06-09 12:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `customer_id`, `product_id`, `product_name`, `product_code`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 9, 'Modernize – Free Bootstrap 5 HTML5 Admin Dashboard Template', 'AD-0002', 17.10, 1, '2024-06-06 13:56:40', NULL),
(2, 1, 1, 8, 'Travela – Free HTML5 Tourism Business Website Template', 'BUS-0001', 19.00, 1, '2024-06-06 13:56:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$VwNe1d86Yt90uivEWBfOX.ri.5TWVeKpkX/WxOoFZhPB84rQeiwhq', '2024-04-16 01:34:02'),
('asrafuzzamanshodow@gmail.com', '$2y$10$cQso6TMhl/06KKTc.QxppO0hTyoserb6XSMozLqvnOgHO1QGmgvde', '2024-04-12 09:33:32');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `one_name` varchar(255) NOT NULL,
  `one_policy` longtext NOT NULL,
  `two_name` varchar(255) DEFAULT NULL,
  `two_policy` longtext DEFAULT NULL,
  `three_name` varchar(255) DEFAULT NULL,
  `three_policy` longtext DEFAULT NULL,
  `four_name` varchar(255) DEFAULT NULL,
  `four_policy` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `one_name`, `one_policy`, `two_name`, `two_policy`, `three_name`, `three_policy`, `four_name`, `four_policy`, `created_at`, `updated_at`) VALUES
(1, 'License', '<p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">When you purchase or free download a Theme from ThemeWagon, you are granted a license to use that product. All the products in ThemeWagon can be used for personal &amp; commercial purposes. To understand our licenses, please read the following details.</p><h2 class=\"wp-block-heading\" style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 2.0736rem;\">Free Themes:</h2><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">All themes published on ThemeWagon can be used for free. You can use them for commercial and non-commercial purposes. You can use them to make a website for your clients and get paid.</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">Template authors have different licensing regarding&nbsp;<span style=\"font-weight: 700;\">attribution link removal</span>. Some authors require you to keep the attribution link in the footer others not. Please see the corresponding template author license on their website for this purpose.</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">This license does not include the right to compile themes from ThemeWagon to replicate a similar or competing service and to use the themes in derivative themes or “generators.”</p><hr class=\"wp-block-separator\" style=\"box-sizing: border-box; margin-right: 0px; margin-left: 0px; color: rgb(216, 226, 239); background-color: currentcolor; border-top-color: initial; border-right-width: initial; border-right-style: none; border-bottom-width: 1px; border-bottom-style: solid; border-left-width: initial; border-left-style: none; opacity: 1; height: 1px; font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><div aria-hidden=\"true\" class=\"wp-block-spacer\" style=\"clear: both; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; height: 50px;\"></div><h2 class=\"wp-block-heading\" style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 2.0736rem;\">Premium Themes:</h2><h3 class=\"wp-block-heading\" style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Summary</h3><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">Here’s an overview of what each license allows for to make it easy to pick what you need:</p><figure class=\"wp-block-table is-style-stripes\" style=\"overflow-x: auto; border-bottom: 1px solid rgb(240, 240, 240); border-collapse: inherit; border-spacing: 0px; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><table style=\"caption-side: bottom; width: 750px;\"><tbody style=\"border-style: solid; border-width: 0px;\"><tr style=\"border-style: solid; border-width: 0px; background-color: rgb(240, 240, 240);\"><td style=\"border: 1px solid transparent; padding: 0.5em;\"></td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\">Standard</td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\">Multisite</td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\">Extended</td></tr><tr style=\"border-style: solid; border-width: 0px;\"><td style=\"border: 1px solid transparent; padding: 0.5em;\">Number of end products</td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\">1</td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\">Unlimited</td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\">1</td></tr><tr style=\"border-style: solid; border-width: 0px; background-color: rgb(240, 240, 240);\"><td style=\"border: 1px solid transparent; padding: 0.5em;\">Use for personal or a client</td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✅\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2705.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✅\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2705.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✅\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2705.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td></tr><tr style=\"border-style: solid; border-width: 0px;\"><td style=\"border: 1px solid transparent; padding: 0.5em;\">Use in a free end product<br>(Can have multiple users)</td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✅\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2705.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✅\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2705.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✅\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2705.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td></tr><tr style=\"border-style: solid; border-width: 0px; background-color: rgb(240, 240, 240);\"><td style=\"border: 1px solid transparent; padding: 0.5em;\">Use in an end product that is “sold”<br>(Can have multiple paying users)</td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"❌\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/274c.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"❌\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/274c.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"✅\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/2705.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td></tr><tr style=\"border-style: solid; border-width: 0px;\"><td style=\"border: 1px solid transparent; padding: 0.5em;\">Use in derivative themes or “generators”</td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"❌\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/274c.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"❌\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/274c.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td><td class=\"has-text-align-center\" data-align=\"center\" style=\"border: 1px solid transparent; text-align: center; padding: 0.5em;\"><img draggable=\"false\" role=\"img\" class=\"emoji\" alt=\"❌\" src=\"https://s.w.org/images/core/emoji/14.0.0/svg/274c.svg\" style=\"vertical-align: -0.1em !important; display: inline !important; border-width: initial !important; border-color: initial !important; border-image: initial !important; box-shadow: none !important; height: 1em !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></td></tr></tbody></table></figure><div aria-hidden=\"true\" class=\"wp-block-spacer\" style=\"clear: both; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; height: 50px;\"></div><h3 class=\"wp-block-heading\" id=\"fullStandardLicense\" style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">The Full Standard License</h3><h4 class=\"wp-block-heading\" style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Basics</h4><div class=\"wp-block-group is-layout-flow wp-block-group-is-layout-flow\" style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><div class=\"wp-block-group__inner-container\"><ol type=\"1\" style=\"padding-left: 2rem;\"><li>The Standard License provides you the non-exclusive right to use the Theme you bought.</li><li>You are legally permitted to use the Item to build one End Product for yourself or for a client (a “single application”), and the End Product can be distributed for free.<br><br></li><li><span style=\"font-weight: 700;\"><em>You can</em>–</span><ul style=\"padding-left: 2rem;\"><li>Build one End Product for a client, transfer that End Product to them, and charge them for your services. The license is then passed to the client.</li><li>Create duplicates of the single End Product as long as it is distributed for free.</li><li>Modify or combine the Theme with other works to create a copy. This license applies to the outcome. This clause also applies to extracting individual components from the Theme and using them in derivative works.<br><br></li></ul></li><li><span style=\"font-weight: 700;\"><em>You cannot</em>–</span><ul style=\"padding-left: 2rem;\"><li>Sell the End Product to multiple clients.</li><li>Redistribute the source code of the Theme, modified or not.</li><li>The Theme can be used in applications that allow the End users to modify and customize the Theme, like “build it yourself” or “theme generators.”</li><li>Permit the final user of the End Product to access the Theme’s source and use it separately from the End Product.<br><br></li></ul></li><li>If a Theme uses codes, images, or other content from somewhere else with a different license, that item keeps the license from where it came from. The theme’s author will note the license for any code, images, or content. You have to be responsible for sticking to the original license or getting permission from the author of the code, image, or content.</li><li>Breach of any kind will result in the license termination and your right to distribute the End Product until the Theme is completely removed from the End Product.&nbsp;</li></ol></div></div><div aria-hidden=\"true\" class=\"wp-block-spacer\" style=\"clear: both; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; height: 50px;\"></div><h3 class=\"wp-block-heading\" id=\"fullMultisiteLicense\" style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">The Full Multisite License</h3><h4 class=\"wp-block-heading\" style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Basics</h4><ol style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li>The Multisite License grants you a universal right to use the Theme you purchased.</li><li>You are authorized to use the Item to create unlimited End Products for yourself or multiple clients; the End Products can also be distributed for Free.<br><br></li><li><span style=\"font-weight: 700;\"><em>You can</em></span>–<ul style=\"padding-left: 2rem;\"><li>Create as many End Products as needed, transfer that to your clients, and charge them for your services. The client is granted the equivalent of a Standard License. They do not assume the Multisite License’s unlimited use.</li><li>Make an unlimited number of copies of a single End Product as long as it is distributed for free.</li><li>Modify or combine the Theme with other works to create a derivative. This license applies to the result. This clause also applies to extracting individual components from the Theme and using them in the derivatives.<br><br></li></ul></li><li>You cannot-<ul style=\"padding-left: 2rem;\"><li>Sell the End Product to anyone other than the clients.</li><li>Hand out the Theme’s source, modified or not, even if the Theme is modified.</li><li>Use the Theme in any program that lets the End User change the Theme, such as “build it yourself” or “theme generators.”</li><li>Permit access to the Theme’s source and use it separately from an end product to an End User.<br><br></li></ul></li><li>If a Theme uses code, images, or other content from somewhere else with a different license, that item retains the original one. The theme’s author will note the license for any code, images, or content. You are responsible for sticking to the original license or getting permission from the code, image, or content creator.</li><li>Breach of any sort will result in the termination of the license and losing the distribution rights of the End Products until the Theme is fully removed from the End Product.</li></ol><div aria-hidden=\"true\" class=\"wp-block-spacer\" style=\"clear: both; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; height: 50px;\"></div><h3 class=\"wp-block-heading\" id=\"fullExtendedLicense\" style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">The Full Extended License</h3><h4 class=\"wp-block-heading\" style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Basics</h4><ol style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li>The Extended License gives you a non-exclusive right to use the Theme you have bought.</li><li>You are licensed to use the Item and create a single End Product for yourself or for a client (a “single application”), and the End Product can be sold or distributed for free.<br><br></li><li><span style=\"font-weight: 700;\"><em>You can</em>–</span><ul style=\"padding-left: 2rem;\"><li>Create one End Product for a client, hand it to them, and charge them for your services. The license is then handed to the client.</li><li>Sell and create an unlimited number of versions of the single End Product.</li><li>Modify or incorporate the Theme with other works to create a derivative work. This license applies to the outcome. This clause also applies to extracting individual components from the Theme and using them in derivative works.<br><br></li></ul></li><li><span style=\"font-weight: 700;\"><em>You cannot</em>–</span><ul style=\"padding-left: 2rem;\"><li>Use the Theme to create multiple distinct End Products. This is a “single application” license instead of a “multi-use” one.</li><li>Re-distribute the Theme’s source code, regardless of modifications, even if the Theme has been modified.</li><li>Use the Theme in any application allowing an End User to customize the Theme, like “build it yourself” or “theme generators.” You can purchase separate licenses for each final product incorporating the theme created using the application.</li><li>Allow the End User access to the theme source and use it separately from the End Product.<br><br></li></ul></li><li>If a Theme includes code, images, or contents registered under a different license, that item retains its original license. The Theme author will note the license for the code, images, or content. You must comply with the original license or obtain permission from the code, image, or content author.</li><li>Violation of any clause of this license will result in losing the right to distribute the End Product until the Theme is completely removed from the End Product.</li></ol>', 'Esigned', '<p>sdfsdfsdfsfsdfsdfsdf</p>', NULL, NULL, NULL, NULL, '2024-05-22 02:42:51', '2024-06-09 04:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Developer', 1, '2024-03-30 06:42:57', '2024-03-30 06:47:17'),
(2, 'Back-End Developer', 1, '2024-03-30 06:44:41', '2024-03-30 11:00:57'),
(3, 'Full Stack Developer', 1, '2024-03-30 06:45:10', '2024-03-30 06:45:10'),
(4, 'Front-End Developer', 1, '2024-03-30 06:47:41', '2024-03-30 06:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `auther_id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `web_page` int(11) DEFAULT NULL,
  `view_url` text DEFAULT NULL,
  `download_url` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `template_delivery` int(11) NOT NULL,
  `template_regular_price` double(8,2) DEFAULT NULL,
  `template_selling_price` double(8,2) NOT NULL,
  `template_discount_type` varchar(255) NOT NULL,
  `template_discount_amount` double(8,2) DEFAULT NULL,
  `sales_count` int(11) NOT NULL DEFAULT 0,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `feature_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `auther_id`, `code`, `short_description`, `long_description`, `web_page`, `view_url`, `download_url`, `image`, `template_delivery`, `template_regular_price`, `template_selling_price`, `template_discount_type`, `template_discount_amount`, `sales_count`, `hit_count`, `feature_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Argon – Free Material UI Admin Dashboard Template React', 0, 'AD-0001', 'Argon is a free template built ideally for admin & dashboards. It is rich with responsive UI components, including 2 authentication pages, a vertical navigation bar, a billing section, tabbed contents, a project and author table, grid layouts, and many more. To enhance user experience, this dashboard supports RTL and incorporates a virtual reality section. The admin dashboard allows different side navigation styles, including two different modes, 6 different colors, and toggle switches for easy customization. The theme offers light and dark modes to enhance accessibility and readability for visitors. It is ready to use for any project management or analytical web dashboard.', '<p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><span style=\"font-weight: 800;\">Free Responsive MUI React Admin Dashboard Template</span><br></p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">Additionally, the MUI-React theme provides easy access to the admin panel, ensuring design consistency across the page. It also allows you to customize the elements easily to enhance the site’s uniqueness.&nbsp;The&nbsp;<a href=\"https://themewagon.com/theme-tag/clean/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">clean codebase</a>&nbsp;is developer-friendly and replaces dozens of lines of code to ensure efficient and hassle-free customization This page speed-optimized template has a quicker loading time and reduced bounce rates, so it is likely to rank higher in search engine results. It has fewer cross-browser bugs, so it remains compatible with any available browser on all major user agents.</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Key Features</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li aria-level=\"1\">Burger Menu</li><li aria-level=\"1\">Search Filter</li><li aria-level=\"1\">Call-to-Action Button</li><li aria-level=\"1\">On-Hover Effects</li><li aria-level=\"1\">Documentation</li><li aria-level=\"1\">6 Different Colors</li><li aria-level=\"1\">Dark and Light Modes</li><li aria-level=\"1\">RTL Support</li><li aria-level=\"1\"><span style=\"font-weight: 700;\">2 Authentication Pages</span></li><li aria-level=\"1\">Virtual Reality Effect</li><li aria-level=\"1\">Horizontal &amp; Vertical Navigation</li><li aria-level=\"1\"><span style=\"font-weight: 700;\">100% Responsive</span></li><li aria-level=\"1\">Clean Codebase</li><li aria-level=\"1\">Developer-Friendly</li><li aria-level=\"1\">Cross-Browser Compatible</li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">In the Box</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li>All Demo Images</li><li>JavaScript Source Files</li><li>Library &amp; Plugins</li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Library &amp; Plugins</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"https://react.dev/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">ReactJS</a></li><li><a href=\"http://mui.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">MUI</a></li><li><a href=\"https://favicon.io/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Favicon</a></li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><span style=\"font-weight: 700;\">Thank you for downloading Argon!</span></p><h4 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Here are some of our latest templates for you:</h4><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"https://themewagon.com/themes/buildermax/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">BuilderMax – Free Bootstrap 4 HTML5 Website Template</a></li><li><a href=\"https://themewagon.com/themes/alien/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Alien – Free Bootstrap 4 HTML5 Business Website Template</a></li><li><a href=\"https://themewagon.com/themes/scholar/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Scholar – Free Bootstrap 5 Educational Website Template</a></li></ul>', NULL, 'https://themewagon.github.io/argon-dashboard-material-ui/dashboard', 'https://github.com/themewagon/argon-dashboard-material-ui/archive/refs/tags/v1.0.0.zip', 'upload/product-images/210196.png', 0, 0.00, 0.00, 'free', 0.00, 0, 1, 0, 1, '2024-04-21 00:15:36', '2024-06-09 12:02:30'),
(2, 6, 'LifestyleMag – Free HTML Template for Blogging Websites', 0, 'BLO-0001', 'LifestyleMag is a free blogging template for creative business websites with HTML5 & CSS3. The theme has a clean and easily customizable codebase for developers. The one-page template is cross-browser-compatible. It takes a quicker time to load as well. Moreover, the theme can be used as it is or easily modified as necessary. It can help you rank higher in search engine results as well.', '<h4 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Free One-page HTML Template for Blogging Websites</h4><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">Furthermore, the HTML theme has UI components like&nbsp;<span style=\"font-weight: 700;\">a top navigation bar, a hero header, subscription form UI, footer navigation, call-to-action buttons, on-hover effects, and more</span>. All the elements are&nbsp;<a href=\"https://themewagon.com/theme-tag/responsive\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">100% respons100% responsiveive</a>&nbsp;and run seamlessly on any device and screen size. You can certainly hope for better user engagement and higher ranking on search engine results. Enjoy creating with LifestyleMag.</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Key Features</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li>HTML5 &amp; CSS3</li><li>Call-to-action Buttons</li><li>On-hover Effects</li><li>Newsletter Subscription Form UI</li><li>100% Responsive</li><li>Single-page Design</li><li>Cross-browser Compatible</li><li>Smooth Scroll</li></ul><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">In the Box</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><span style=\"font-weight: 700;\">1 HTML Page</span></li><li>HTML &amp; CSS</li><li>JavaScript Source Files</li><li>Demo Images</li><li>Library &amp; Plugins</li></ul><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Library &amp; Plugin</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"http://icomoon.io/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">IcoMoon</a></li><li><a href=\"https://jquery.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">jQuery</a></li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><span style=\"font-weight: 700;\">Thank you for downloading LifestyleMag!</span></p><h4 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Here are more similar themes from our latest collection for you:</h4><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"https://themewagon.com/themes/spurgeon/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Spurgeon – Free Minimal HTML5 Blogging Website Template</a></li><li><a href=\"https://themewagon.com/themes/augustine/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Augustine – Free HTML5 CSS3 Landing Page Template</a></li><li><a href=\"https://themewagon.com/themes/monica/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Monica – Free Responsive HTML5 Portfolio Website Template</a></li></ul>', NULL, 'https://themewagon.github.io/LifeStyleMag/', 'https://github.com/themewagon/LifeStyleMag/archive/refs/tags/v1.0.0.zip', 'upload/product-images/482729.png', 65, 0.00, 0.00, 'free', 0.00, 0, 2, 0, 1, '2024-04-21 11:40:53', '2024-06-09 11:53:31'),
(5, 2, 'MiniStore – Free Bootstrap 5 E-Commerce Website Template', 0, 'ECOM-001', 'MiniStore is a free website template made especially for e-commerce websites. The template is made using Bootstrap 5.3.1, HTML5 & CSS3. It’s a meticulously designed template with user-friendly UI components on the page. It’s got a beautiful hero section with header carousels and call-to-action buttons. Scroll down with its smooth scrolling, and you’ll find two different product sections with product sliders. You can highlight your yearly sales in its banner section. The theme avails a blog section and testimonial section with carousels, followed by a newsletter subscription form UI. It also allows easy social media engagement with provided links and icons with a dedicated section. Lastly, a responsive burger menu and a detailed footer will let your users easily navigate the site.', '<h4 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Free Bootstrap 5 Single-Page E-Commerce Website Template</h4><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">Moreover, all the UI components are made to be&nbsp;<a href=\"https://themewagon.com/theme-tag/responsive/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">fully responsive,</a>&nbsp;regardless of the screen sizes they’re running on. The single-page theme has fewer cross-browser bugs and runs smoothly on all available browsers. It’s written with a well-commented codebase to retain developer-friendly access. The clean codebase helps it rank higher in search engine rankings as well. Furthermore, the theme’s page speed optimization makes it more engaging for the users and reduces bounce-offs from the site. Enjoy your next creative project with MiniStore!</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Key Features</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><span style=\"font-weight: 700;\">Bootstrap 5.3.1</span></li><li><span style=\"font-weight: 700;\">HTML5 &amp; CSS3</span></li><li>Burger Menu</li><li>Hero Header</li><li>Hero Image</li><li>Header Carousels</li><li>Sticky Top Navigation</li><li>Call-to-action Buttons</li><li><span style=\"font-weight: 700;\">On-hover Effects</span></li><li>Product Sections</li><li>Product Sliders</li><li>Banner Section</li><li>Blog Section</li><li>Testimonial Sliders</li><li>Newsletter Subscription Form UI</li><li>Cross-Browser Compatible</li><li><span style=\"font-weight: 700;\">100% Responsive</span></li><li>Social Media Links &amp; Icons</li><li>A Detailed Footer</li><li>Developer-friendly Codebase</li><li>SEO-friendly Codebase</li><li>Page-speed Optimized</li><li>User-friendly Navigation</li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">In the Box</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><span style=\"font-weight: 700;\">1 HTML Page</span></li><li><span style=\"font-weight: 700;\">HTML5 &amp; CSS3</span></li><li>All Demo Images</li><li>JavaScript Source Files</li><li>Library &amp; Plug-ins</li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Library &amp; Plug-ins</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"https://getbootstrap.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Bootstrap 5</a></li><li><a href=\"https://fonts.google.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Google Fonts</a></li><li><a href=\"http://jquery.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">jQuery</a></li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><span style=\"font-weight: 700;\">Thank you for downloading MiniStore!</span></p><h4 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Here are more similar themes for your reference:</h4><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"https://themewagon.com/themes/esigned/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Esigned – Free Bootstrap 4 Multi-Page Business &amp; Corporate Website Template</a></li><li><a href=\"https://themewagon.com/themes/edgecut/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">EdgeCut – Free Responsive Bootstrap 4 Landing Page Template</a></li><li><a href=\"https://themewagon.com/themes/carint/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Carint – Free Transportation Service Landing Page Template</a></li></ul>', NULL, 'https://themewagon.github.io/MiniStore/', 'https://github.com/themewagon/MiniStore/archive/refs/tags/v1.0.0.zip', 'upload/product-images/480305.png', 0, 0.00, 0.00, 'free', 0.00, 0, 1, 0, 1, '2024-05-01 02:07:05', '2024-06-09 11:53:07'),
(6, 5, 'Grad School – Free Bootstrap 4 HTML5 Educational Website Template', 0, 'EDU-0001', 'GradSchool is a free, straightforward Bootstrap template for educational websites. This one-page responsive template is a fine option if you want to create an presentable online educational hub. The HTML theme got a full-size video banner as well as three rollover content boxes at the bottom. This dark template can be expanded as a large dynamic website or a custom CMS template thanks to its many useful features. Grad School is designed in a modern and aesthetic manner, yet it maintains a clean and minimalist appearance. Moreover, it is 100% responsive, well-designed, and compatible with all browsers and devices.', '<h4 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Free Responsive Bootstrap 4 HTML5 Educational Website Template</h4><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">Grad School ensures your perfectly organized web presence with its educational-specific aspects and functionalities. This responsive education template got many exciting features like&nbsp;<span style=\"font-weight: 800;\">hero header, a full-screen video banner, sticky top navigation bar, drop-down menu bar, call to action button, countdown timer, modal video player, Google Maps, and many more</span>. You can use this template right out of the box, or you can customize it to meet your specific needs and requirements. So begin your project with Grad School, make your course lucrative and factual by promoting, and take it a very long way.</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Key Features</h3><ul class=\"special\" style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><span style=\"font-weight: 800;\">Bootstrap v4.5.2</span></li><li><span style=\"font-weight: 800;\">HTML5 &amp; CSS3</span></li><li>Cross-browser compatibility</li><li>Single-page template</li><li>Clean and minimal design</li><li><span style=\"font-weight: 800;\">Fully responsive</span></li><li>Hero header</li><li><span style=\"font-weight: 800;\">Full-screen video Banner</span></li><li>On-hover effects</li><li>Sticky top navigation bar</li><li><span style=\"font-weight: 800;\">Drop-down menu</span></li><li>Call-to-action button</li><li>Count-down timer</li><li>Google Maps</li><li><span style=\"font-weight: 800;\">Three Rollover Content Boxes</span></li><li>Course cards</li><li>Modal video player</li><li><span style=\"font-weight: 800;\">Registration form UI</span></li><li>FontAwesome font icons</li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">In The Box</h3><ul class=\"special\" style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li>One HTML Page</li><li>All demo images</li><li>HTML &amp; CSS files</li><li>Font Icons</li><li>JavaScript source files</li><li>Library and plugin files</li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Libraries and Plugins</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"https://getbootstrap.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Bootstrap 4</a></li><li><a href=\"https://fontawesome.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Font Awesome</a></li><li><a href=\"https://fonts.google.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Google fonts</a></li><li><a href=\"https://jquery.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">jQuery</a></li><li><a href=\"https://github.com/lokesh/lightbox2\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">LightBox</a></li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><span style=\"font-weight: 800;\">Thank you for downloading Grad School.</span></p>', NULL, 'https://themewagon.github.io/grad-school/', 'https://github.com/technext/grad-school/archive/refs/tags/v1.0.0.zip', 'upload/product-images/296264.png', 0, 0.00, 0.00, 'free', 0.00, 0, 2, 0, 1, '2024-05-01 02:11:33', '2024-06-08 11:29:34'),
(7, 4, 'Monica – Free Responsive HTML5 Portfolio Website Template', 0, 'PRO-0001', 'Monica is a beautifully designed portfolio website template. The free HTML5 website template has a hero header with a hero image and a scroll-down button. A testimonial section with sliders followed by call-to-action buttons, newsletter subscription form UI, and footer navigation make it easily accessible.  Moreover, it has a collapsible burger menu, a preloader, and a pagination UI to help your visitor across the page. All the elements retain complete responsiveness across all devices, regardless of screen size. You can ace your next creative project with this theme.', '<h4 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Responsive HTML5 CSS3 Portfolio Website Template</h4><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">Additionally, the theme is search engine optimized and can rank higher in search results. The multipage template is cross-browser compatible and doesn’t break down on the available user agents. Moreover, the theme has a clean, well-commented codebase to help developers with the customization. You can also use the theme as it is or customize it as needed, even with little development knowledge. Enjoy creating with Monica!</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Key Features</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li>HTML5 &amp; CSS3</li><li>Preloader</li><li>Collapsible Burger Menu</li><li>Scroll-Down Button</li><li>Call-to-action Button</li><li>Testimonial Slider</li><li>Newsletter Subscription Form UI</li><li>Footer Navigation</li><li>Pagination UI</li><li>Back-to-top Button</li><li>On-hover Effects</li><li>Multipage Design</li><li>100% Responsive</li><li>Cross-browser Compatible</li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">In the Box</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><span style=\"font-weight: 700;\">8 HTML Pages</span></li><li>HTML &amp; CSS</li><li>JavaScript Source Files</li><li>Demo Images</li><li>Library &amp; Plugins</li></ul><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Library &amp; Plugin</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"http://favicon.io/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Favicon</a></li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><span style=\"font-weight: 700;\">Thank you for downloading Monica.</span></p><h4 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Here are more of our latest themes for you:</h4><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"https://themewagon.com/themes/fruitables-free/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Fruitables – Free Bootstrap 5 eCommerce Website Template</a></li><li><a href=\"https://themewagon.com/themes/sparlex/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Sparlex – Free Bootstrap 5 Multi-page Business Website Template</a></li><li><a href=\"https://themewagon.com/themes/mrmrs/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Mr&amp;Mrs – Free Single Page Wedding Service Website Template</a></li></ul>', NULL, 'https://themewagon.github.io/monica/', 'https://github.com/themewagon/monica/archive/refs/tags/v1.0.0.zip', 'upload/product-images/351619.png', 0, 0.00, 0.00, 'free', 0.00, 0, 1, 0, 1, '2024-05-01 02:19:42', '2024-06-09 11:53:41'),
(8, 3, 'Travela – Free HTML5 Tourism Business Website Template', 0, 'BUS-0001', 'Travela is a business and corporate website template for travel and tourism websites. It’s a free website template built using the latest technologies, such as Bootstrap 5, HTML5, and CSS3. This fully responsive theme runs seamlessly across all devices, regardless of size. Moreover, the template has fewer cross-browser bugs, so it runs flawlessly across all major browsers. All the codes are clean and well-commented, making them easily readable for search engines. This template ensures easy and simplified development and customization.', '<h4 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Free Responsive Bootstrap 5 Tourism Website Template</h4><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">Furthermore, the theme is rich with meticulously laid out UI components on its pages. Some of its user-friendly components include&nbsp;<span style=\"font-weight: 700;\">a sticky top navigation bar with drop-down menu, an on-scroll animated navigation bar, hero header with hero images and a search filter, tabbed contents, package carousels, booking form UI, call-to-action buttons with on-hover effects, back-to-top button, blog section, testimonial carousel, newsletter subscription form UI, footer navigation, breadcrumbs, contact form UI, geolocation, and many more.</span>&nbsp;All the UIs are oriented in a thoughtful manner for better user navigation. With its easily readable codebase, you’ll be able to rank higher in search engine results, increasing your chances of acquiring better web visibility. Additionally, its speed-optimized pages reduce bounce-offs of your site by cutting off the wait time for visitors. You can also use it without any issue, as it will work flawlessly on any device and screen and with available browsers. Enjoy creating with Travela!</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Key Features</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><span style=\"font-weight: 700;\">Bootstrap 5</span></li><li><span style=\"font-weight: 700;\">HTML5 &amp; CSS3</span></li><li>Sticky Top Navigation Bar</li><li>Drop-down Menu</li><li>Sticky navigation bar</li><li>Hero header carousel</li><li>Tour search form</li><li>Smooth page scrolling</li><li>Destination filtration</li><li>Smooth image popup</li><li>Category carousel</li><li>Package carousel</li><li>Testimonial carousel</li><li>Gallery image popup</li><li><span style=\"font-weight: 700;\">13+ HTML pages</span></li><li>Online booking form</li><li>Sass supported coding</li><li>Back-to-top Button</li><li>On-hover Effects</li><li>Geolocation</li><li>Contact form UI</li><li><span style=\"font-weight: 700;\">100% Responsive</span></li><li>SEO-Optimized</li><li>Page-speed Optimized</li><li>Google web font supported</li><li>Bootstrap icon font</li><li>Font Awesome icon font</li><li>Clean, Well-commented codebase</li><li>Developer-friendly code</li><li>Cross-browser compatibility</li><li>Newsletter Subscription form UI</li><li>Social Media link with icon</li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">In the Box</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><span style=\"font-weight: 700;\">13+ HTML Pages</span></li><li>JavaScript Source Files</li><li>Demo Images</li><li>Library &amp; Plugins</li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Library &amp; Plugins</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"https://getbootstrap.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Bootstrap 5</a></li><li><a href=\"https://owlcarousel2.github.io/OwlCarousel2/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Owl Carousel</a></li><li><a href=\"https://lokeshdhakar.com/projects/lightbox2/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">LightBox</a></li><li><a href=\"https://jquery.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">jQuery</a></li><li><a href=\"https://fontawesome.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">FontAwesome</a></li><li><a href=\"https://fonts.google.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Google Fonts</a></li><li><a href=\"https://maps.google.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Google Maps</a></li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><span style=\"font-weight: 700;\">Thank you for downloading Travela!</span></p>', NULL, 'https://themewagon.github.io/travela/', 'https://github.com/themewagon/travela/archive/refs/tags/v1.0.0.zip', 'upload/product-images/98438.png', 0, 20.00, 19.00, 'percent', 5.00, 2, 3, 0, 1, '2024-05-01 02:42:53', '2024-06-09 12:34:44');
INSERT INTO `products` (`id`, `category_id`, `name`, `auther_id`, `code`, `short_description`, `long_description`, `web_page`, `view_url`, `download_url`, `image`, `template_delivery`, `template_regular_price`, `template_selling_price`, `template_discount_type`, `template_discount_amount`, `sales_count`, `hit_count`, `feature_status`, `status`, `created_at`, `updated_at`) VALUES
(9, 1, 'Modernize – Free Bootstrap 5 HTML5 Admin Dashboard Template', 0, 'AD-0002', 'Modernize is a free template efficiently made to be an admin dashboard. This is made with all latest frameworks such as Bootstrap 5, HTML5 & CSS3. This template is SEO optimized, and ranks higher in search engine results. It comes with quicker page loading time and reduces wait time for the visitors. The template comes with a well-chosen color scheme and fully responsive UI components laid out on it. Its user-friendly components include 10 HTML pages, 5 UI components, one basic dashboard, well-commented codebase, on-hover effect, burger menu and many more.', '<h4 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.44rem;\">Free Bootstrap 5 HTML5 CSS3 Admin Dashboard Template</h4><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">Moreover, this template is cross-browser compatible and works neatly on all available device and screen sizes without breaking the layout. Also, quicker page-speed reduces the wait time for this template. All the UI components are&nbsp;<a href=\"https://themewagon.com/theme-tag/responsive/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">100% responsive</a>&nbsp;and responds to all devices. The dashboard is cross-browser compatible and comes with fewer cross-browser bugs. So you won’t need to worry about broken layout while working with this template. Enjoy creating user-friendly apps and stay with us!</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Key Features</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><span style=\"font-weight: 700;\">1 Basic Dashboard</span></li><li><span style=\"font-weight: 700;\">10+ Pages Template</span></li><li><span style=\"font-weight: 700;\">5+ UI Components</span></li><li>Bootstrap 5 Version</li><li>Tabler Icons</li><li>No Support Provided</li><li>SCSS Base CSS</li><li>Easy To Customize</li><li>Basic Form Examples</li><li>Fully Responsive Pages</li><li>Developer-friendly codebase</li><li>On-hover Effects</li><li>Burger Menu</li></ul><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\"></h3><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">In the Box</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><span style=\"font-weight: 700;\">&nbsp;10 HTML pages</span></li><li><span style=\"font-weight: 700;\">5 UI components</span></li><li>Demo Images</li><li>HTML &amp; CSS</li><li>JavaScript Source Files</li><li>Library &amp; Plug-ins</li></ul><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\"></h3><h3 style=\"font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, S-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; color: rgb(52, 64, 80); font-size: 1.728rem;\">Library &amp; Plug-in</h3><ul style=\"padding-left: 2rem; color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><li><a href=\"https://jquery.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">&nbsp;jQuery</a></li><li><a href=\"https://getbootstrap.com/\" target=\"_blank\" rel=\"noopener\" style=\"color: rgb(69, 129, 253);\">Bootstrap 5</a></li></ul><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">&nbsp;</p><p style=\"color: rgb(52, 64, 80); font-family: &quot;Nunito Sans&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\"><span style=\"font-weight: 700;\">Thank you for downloading Modernize!</span></p>', NULL, 'https://themewagon.github.io/Modernize/src/html/', 'https://github.com/themewagon/Modernize/archive/refs/tags/v1.0.0.zip', 'upload/product-images/208228.png', 0, 18.00, 17.10, 'percent', 5.00, 2, 1, 0, 1, '2024-05-10 07:16:09', '2024-06-09 12:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_basic_auths`
--

CREATE TABLE `product_basic_auths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_price_id` int(11) NOT NULL,
  `basic_type_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_basic_auths`
--

INSERT INTO `product_basic_auths` (`id`, `product_price_id`, `basic_type_id`, `created_at`, `updated_at`) VALUES
(20, 1, 1, '2024-05-27 06:31:25', '2024-05-27 06:31:25'),
(21, 1, 2, '2024-05-27 06:31:25', '2024-05-27 06:31:25'),
(22, 1, 5, '2024-05-27 06:31:25', '2024-05-27 06:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_pre_auths`
--

CREATE TABLE `product_pre_auths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_price_id` int(11) NOT NULL,
  `pre_type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_pre_auths`
--

INSERT INTO `product_pre_auths` (`id`, `product_price_id`, `pre_type`, `created_at`, `updated_at`) VALUES
(21, 1, 1, '2024-05-27 06:31:25', '2024-05-27 06:31:25'),
(22, 1, 3, '2024-05-27 06:31:25', '2024-05-27 06:31:25'),
(23, 1, 5, '2024-05-27 06:31:25', '2024-05-27 06:31:25'),
(24, 1, 8, '2024-05-27 06:31:25', '2024-05-27 06:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_prices`
--

CREATE TABLE `product_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basic_page` int(11) DEFAULT NULL,
  `basic_delivery` int(11) DEFAULT NULL,
  `basic_regular_price` double(8,2) DEFAULT NULL,
  `basic_discount_amount` double(8,2) DEFAULT NULL,
  `basic_discount_type` varchar(255) DEFAULT NULL,
  `basic_selling_price` double(8,2) DEFAULT NULL,
  `pro_page` int(11) DEFAULT NULL,
  `pro_delivery` int(11) DEFAULT NULL,
  `pro_regular_price` double(8,2) DEFAULT NULL,
  `pro_discount_amount` double(8,2) DEFAULT NULL,
  `pro_discount_type` varchar(255) DEFAULT NULL,
  `pro_selling_price` double(8,2) DEFAULT NULL,
  `pre_page` int(11) DEFAULT NULL,
  `pre_delivery` int(11) DEFAULT NULL,
  `pre_regular_price` double(8,2) DEFAULT NULL,
  `pre_discount_amount` double(8,2) DEFAULT NULL,
  `pre_discount_type` varchar(255) DEFAULT NULL,
  `pre_selling_price` double(8,2) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_prices`
--

INSERT INTO `product_prices` (`id`, `basic_page`, `basic_delivery`, `basic_regular_price`, `basic_discount_amount`, `basic_discount_type`, `basic_selling_price`, `pro_page`, `pro_delivery`, `pro_regular_price`, `pro_discount_amount`, `pro_discount_type`, `pro_selling_price`, `pre_page`, `pre_delivery`, `pre_regular_price`, `pre_discount_amount`, `pre_discount_type`, `pre_selling_price`, `status`, `created_at`, `updated_at`) VALUES
(1, 20, 15, 40.00, 0.00, 'percent', 40.00, 25, 20, 50.00, 5.00, 'percent', 47.50, 30, 25, 70.00, 10.00, 'percent', 63.00, 1, '2024-05-11 12:15:48', '2024-05-27 06:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_pro_auths`
--

CREATE TABLE `product_pro_auths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_price_id` int(11) NOT NULL,
  `pro_type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_pro_auths`
--

INSERT INTO `product_pro_auths` (`id`, `product_price_id`, `pro_type`, `created_at`, `updated_at`) VALUES
(19, 1, 1, '2024-05-27 06:31:25', '2024-05-27 06:31:25'),
(20, 1, 3, '2024-05-27 06:31:25', '2024-05-27 06:31:25'),
(21, 1, 5, '2024-05-27 06:31:25', '2024-05-27 06:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT 'Null',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Template', NULL, 1, '2024-03-30 05:21:48', '2024-03-30 05:21:48'),
(2, 'Single Admin', NULL, 1, '2024-03-30 05:21:58', '2024-03-30 05:21:58'),
(3, 'Double Admin', NULL, 1, '2024-03-30 05:22:08', '2024-03-30 05:22:08'),
(4, 'There Admin', NULL, 1, '2024-03-30 05:22:16', '2024-03-30 05:22:16'),
(5, 'User', NULL, 1, '2024-03-30 05:22:26', '2024-03-30 05:22:26'),
(8, 'Custome', NULL, 1, '2024-03-30 05:28:03', '2024-03-30 05:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7Nf5wd90TZvrVQtF6dfyPrYwlnsxigTHKg8cit0M', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia3VmNnVyWmc2QzRWQTloWklXSWFxYVNGSk1FZXQ3OUVKaG5nM3N3USI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkdzd4ZzFmbDgwdXVWQmhYVlJKSkRaT2NOaUo5RDl6S0tUUDhUakQyV0lqQmN2ZUdpU1AzRU8iO30=', 1718044141),
('JLfN61yvOJ4ScpxxssEbarejgpxHs3ll56PTFL2f', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTZjRGFEYXFDVFplbEVpRmtWN2hwOXZyQml3MXNPb1V3ZDF5NE9RRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjEvc2Vydi0yL2FiYWJpbC1hcHAvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1718133451),
('NwRbPmx0FMMbwAFwS1tEuOvCPClDCgKI5DqF7FeO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibHBKUktqWWQ2OUVEZXlBRFo0Tk5kZTFmdFM2SDhoTHE3cm9tdnBMMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjEvc2Vydi0yL2FiYWJpbC1hcHAvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1718132101);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 1, '2024-03-30 06:58:48', '2024-03-30 07:04:53'),
(2, 'CSS', 1, '2024-03-30 12:24:21', '2024-03-30 12:24:21'),
(3, 'SASS', 1, '2024-03-30 12:25:10', '2024-03-30 12:25:10'),
(4, 'Python (Django)', 1, '2024-03-30 12:25:39', '2024-05-09 13:21:15'),
(5, 'Python (Flask)', 0, '2024-03-30 12:26:26', '2024-03-30 12:30:34'),
(6, 'Python (Tornado)', 0, '2024-03-30 12:26:40', '2024-03-30 12:30:29'),
(7, 'JavaScript', 1, '2024-03-30 12:26:47', '2024-03-30 12:26:47'),
(8, 'JavaScript (React)', 1, '2024-03-30 12:27:03', '2024-03-30 12:27:03'),
(9, 'JavaScript (Angular)', 1, '2024-03-30 12:27:23', '2024-03-30 12:27:23'),
(10, 'JavaScript (Vue.js)', 1, '2024-03-30 12:27:36', '2024-03-30 12:27:36'),
(11, 'PHP (Laravel)', 1, '2024-03-30 12:27:56', '2024-03-30 12:28:54'),
(12, 'PHP (Symfony)', 1, '2024-03-30 12:28:18', '2024-05-09 13:21:20'),
(13, 'PHP (CodeIgniter)', 1, '2024-03-30 12:28:29', '2024-05-09 13:21:18'),
(14, 'MySql', 1, '2024-05-10 03:22:42', '2024-05-10 03:22:42'),
(15, 'Sqlite', 1, '2024-05-10 03:23:41', '2024-05-10 03:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `post`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Md. Asrafuzzaman', 'Freelancer', 'Our satisfied customers rave about our attention to detail, responsive design, and easy-to-use interface. With our web templates developed in PHP, you can rest assured that your website will stand out from the competition and provide a seamless user experience. Try us today and see the difference!', 'upload/testimonial-images/370875.png', 1, '2024-04-27 11:55:12', '2024-04-27 12:31:58'),
(2, 'Mr. Slirag', 'Full Stack Developer', 'Silrag Our satisfied customers rave about our attention to detail, responsive design, and easy-to-use interface. With our web templates developed in PHP, you can rest assured that your website will stand out from the competition and provide a seamless user experience. Try us today and see the difference!', 'upload/testimonial-images/437135.jpg', 1, '2024-04-27 11:55:12', '2024-05-01 15:12:06'),
(3, 'Mahir', 'Freelancer', 'I recently visited Ababil and was impressed by its sleek design and easy navigation. The content was informative and engaging, and I found the resources provided to be helpful. Overall, I had a great experience on the website and would recommend it to others.', 'upload/testimonial-images/175751.jpg', 1, '2024-05-01 15:11:48', '2024-05-01 15:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `texes`
--

CREATE TABLE `texes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tex` int(11) NOT NULL,
  `currency_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `texes`
--

INSERT INTO `texes` (`id`, `tex`, `currency_type`, `created_at`, `updated_at`) VALUES
(1, 15, '$', '2024-05-10 11:45:51', '2024-05-27 06:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `theme_infos`
--

CREATE TABLE `theme_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `motto` text DEFAULT '0',
  `biography` text DEFAULT '0',
  `contact_mobile` varchar(255) DEFAULT '0',
  `whapp_mobile` varchar(255) DEFAULT '0',
  `support_mobile` varchar(255) DEFAULT '0',
  `contact_email` varchar(255) DEFAULT '0',
  `support_email` varchar(255) DEFAULT '0',
  `address` text DEFAULT '0',
  `domain_url` text DEFAULT '0',
  `facebook_url` text DEFAULT '0',
  `twitter_url` text DEFAULT '0',
  `youtube_url` text DEFAULT '0',
  `linked_in_url` text DEFAULT '0',
  `instagram_url` text DEFAULT '0',
  `header_logo` text DEFAULT '0',
  `footer_logo` text DEFAULT '0',
  `favicon` text DEFAULT '0',
  `trade_license` text DEFAULT '0',
  `tin_certificate` text DEFAULT '0',
  `ecab_certificate` text DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_infos`
--

INSERT INTO `theme_infos` (`id`, `name`, `motto`, `biography`, `contact_mobile`, `whapp_mobile`, `support_mobile`, `contact_email`, `support_email`, `address`, `domain_url`, `facebook_url`, `twitter_url`, `youtube_url`, `linked_in_url`, `instagram_url`, `header_logo`, `footer_logo`, `favicon`, `trade_license`, `tin_certificate`, `ecab_certificate`, `created_at`, `updated_at`) VALUES
(1, 'Ababil', NULL, 'I am a web template developer and seller with a passion for creating beautiful and functional websites using PHP Laravel. With over 5 years of experience in the web industry, I have honed my skills in PHP and Laravel development to create dynamic and responsive templates that can be easily customized to fit any project.', '8801314924003', '8801314924003', NULL, 'asrafuzzaman705@gmail.com', NULL, 'dhaka can\'t,dhaka-1206', 'http://127.0.0.1/serv-2/ababil-app/public/', 'https://www.facebook.com/profile.php?id=100026887309289&mibextid=ZbWKwL', 'http://127.0.0.1/serv-2/ababil-app/public/', 'https://www.youtube.com/watch?v=mLW35YMzELE&list=RDmLW35YMzELE&start_radio=1', 'http://127.0.0.1/serv-2/ababil-app/public/', 'http://127.0.0.1/serv-2/ababil-app/public/', 'upload/themeInfo-images/2429278557.png', 'upload/themeInfo-images/27415013748.png', 'upload/themeInfo-images/43752807447.ico', 'upload/themeInfo-images/34588997873.pdf', 'upload/themeInfo-images/1352784241.pdf', 'upload/themeInfo-images/38160756411.pdf', '2014-05-14 14:23:56', '2024-05-11 11:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Asrafuzzaman', 'admin@gmail.com', NULL, '$2y$10$w7xg1fl80uuVBhXVRJJDZOcNiJ9D9zKKTP8TjD2WIjBcveGiSP3EO', 'zArn5PYPtMRsYr33WfUP2RMH8172yl1OX2vR2qPuiVokgbB3ItvGflFcBVRe', NULL, NULL, '2024-04-12 08:49:23', '2024-04-12 08:49:23'),
(2, 'Asrafuzzaman Opu', 'asrafuzzamanshodow@gmail.com', NULL, '$2y$10$h9VZ7vO7taQrtVbRp1Wa0eDZU5/ZfceFs/sThbSpDafFjc6r7ge9u', NULL, NULL, NULL, '2024-04-12 09:30:30', '2024-04-12 09:30:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `discounts_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_name_unique` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`);

--
-- Indexes for table `product_basic_auths`
--
ALTER TABLE `product_basic_auths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_pre_auths`
--
ALTER TABLE `product_pre_auths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_prices`
--
ALTER TABLE `product_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_pro_auths`
--
ALTER TABLE `product_pro_auths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_types_name_unique` (`name`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skills_name_unique` (`name`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texes`
--
ALTER TABLE `texes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_infos`
--
ALTER TABLE `theme_infos`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_basic_auths`
--
ALTER TABLE `product_basic_auths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_pre_auths`
--
ALTER TABLE `product_pre_auths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_prices`
--
ALTER TABLE `product_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_pro_auths`
--
ALTER TABLE `product_pro_auths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `texes`
--
ALTER TABLE `texes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `theme_infos`
--
ALTER TABLE `theme_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
