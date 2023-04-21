-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 04:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodcater`
--

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE `fooditem` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` double(5,2) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `imageUrl` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`id`, `name`, `price`, `description`, `imageUrl`) VALUES
(1000, 'Subject 0', 0.00, 'Something coming?', '/images/white.jpg'),
(1001, 'Hamburger', 5.99, 'A juicy hamburger with your choice of toppings.', 'images/hamburger.jpg'),
(1002, 'Cheeseburger', 6.49, 'A hamburger with cheese and your choice of toppings.', 'images/cheeseburger.jpg'),
(1003, 'French Fries', 2.99, 'Crispy golden french fries.', 'images/french_fries.jpg'),
(1004, 'Onion Rings', 3.49, 'Crispy golden onion rings.', 'images/onion_rings.jpg'),
(1005, 'Soft Drink', 1.99, 'Your choice of soda or iced tea.', 'images/soft_drink.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) UNSIGNED NOT NULL,
  `userId` int(11) UNSIGNED DEFAULT NULL,
  `cartItemList` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cartItemList`)),
  `totalPrice` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `userId`, `cartItemList`, `totalPrice`, `created_at`, `updated_at`) VALUES
(16, 1, '{\"1\":{\"id\":1004,\"name\":\"Onion Rings\",\"price\":3.49,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/onion_rings.jpg\"}}', '3.49', '2023-04-10 19:37:27', '2023-04-10 19:37:27'),
(17, 1, '{\"1\":{\"id\":1004,\"name\":\"Onion Rings\",\"price\":3.49,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/onion_rings.jpg\"}}', '3.49', '2023-04-10 19:37:30', '2023-04-10 19:37:30'),
(18, 1, '{\"1\":{\"id\":1004,\"name\":\"Onion Rings\",\"price\":3.49,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/onion_rings.jpg\"}}', '3.49', '2023-04-10 19:37:33', '2023-04-10 19:37:33'),
(19, 1, '{\"1\":{\"id\":1004,\"name\":\"Onion Rings\",\"price\":3.49,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/onion_rings.jpg\"}}', '3.49', '2023-04-10 19:37:36', '2023-04-10 19:37:36'),
(20, 1, '{\"1\":{\"id\":1004,\"name\":\"Onion Rings\",\"price\":3.49,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/onion_rings.jpg\"},\"2\":{\"id\":1005,\"name\":\"Soft Drink\",\"price\":1.99,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/soft_drink.jpeg\"}}', '5.48', '2023-04-10 19:39:44', '2023-04-10 19:39:44'),
(21, 1, '{\"1\":{\"id\":1004,\"name\":\"Onion Rings\",\"price\":3.49,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/onion_rings.jpg\"},\"2\":{\"id\":1005,\"name\":\"Soft Drink\",\"price\":1.99,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/soft_drink.jpeg\"}}', '5.48', '2023-04-10 19:42:40', '2023-04-10 19:42:40'),
(22, 1, '{\"1\":{\"id\":1004,\"name\":\"Onion Rings\",\"price\":3.49,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/onion_rings.jpg\"},\"2\":{\"id\":1005,\"name\":\"Soft Drink\",\"price\":1.99,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/soft_drink.jpeg\"}}', '5.48', '2023-04-10 19:43:05', '2023-04-10 19:43:05'),
(23, 1, '[{\"id\":1003,\"name\":\"French Fries\",\"price\":2.99,\"quantity\":2,\"remark\":null,\"imageUrl\":\"images\\/french_fries.jpg\"}]', '5.98', '2023-04-11 01:41:29', '2023-04-11 01:41:29'),
(24, 1, '[{\"id\":1004,\"name\":\"Onion Rings\",\"price\":3.49,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/onion_rings.jpg\"}]', '3.49', '2023-04-11 01:41:46', '2023-04-11 01:41:46'),
(25, 1, '{\"1\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/hamburger.jpg\"}}', '5.99', '2023-04-11 01:42:12', '2023-04-11 01:42:12'),
(26, 1, '{\"1\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/hamburger.jpg\"}}', '5.99', '2023-04-11 01:53:50', '2023-04-11 01:53:50'),
(27, 1, '{\"1\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/hamburger.jpg\"},\"2\":{\"id\":1005,\"name\":\"Soft Drink\",\"price\":1.99,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/soft_drink.jpeg\"}}', '7.98', '2023-04-11 01:59:21', '2023-04-11 01:59:21'),
(28, 1, '{\"1\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/hamburger.jpg\"},\"2\":{\"id\":1005,\"name\":\"Soft Drink\",\"price\":1.99,\"quantity\":1,\"remark\":null,\"imageUrl\":\"images\\/soft_drink.jpeg\"}}', '7.98', '2023-04-11 01:59:24', '2023-04-11 01:59:24'),
(29, 1, '{\"3\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":\"\",\"imageUrl\":\"images\\/hamburger.jpg\"},\"4\":{\"id\":1003,\"name\":\"French Fries\",\"price\":2.99,\"quantity\":1,\"remark\":\"\",\"imageUrl\":\"images\\/french_fries.jpg\"}}', '8.98', '2023-04-11 02:10:05', '2023-04-11 02:10:05'),
(30, 1, '{\"4\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":\"1233\",\"imageUrl\":\"images\\/hamburger.jpg\"},\"5\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":\"1234\",\"imageUrl\":\"images\\/hamburger.jpg\"}}', '11.98', '2023-04-11 02:20:32', '2023-04-11 02:20:32'),
(31, 1, '{\"4\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":\"1233\",\"imageUrl\":\"images\\/hamburger.jpg\"},\"5\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":\"1234\",\"imageUrl\":\"images\\/hamburger.jpg\"},\"6\":{\"id\":1002,\"name\":\"Cheeseburger\",\"price\":6.49,\"quantity\":1,\"remark\":\"cheesemore\",\"imageUrl\":\"images\\/cheeseburger.jpg\"}}', '18.47', '2023-04-11 02:20:58', '2023-04-11 02:20:58'),
(32, 1, '{\"4\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":\"1233\",\"imageUrl\":\"images\\/hamburger.jpg\"},\"5\":{\"id\":1001,\"name\":\"Hamburger\",\"price\":5.99,\"quantity\":1,\"remark\":\"1234\",\"imageUrl\":\"images\\/hamburger.jpg\"},\"6\":{\"id\":1002,\"name\":\"Cheeseburger\",\"price\":6.49,\"quantity\":1,\"remark\":\"cheesemore\",\"imageUrl\":\"images\\/cheeseburger.jpg\"}}', '18.47', '2023-04-11 02:21:01', '2023-04-11 02:21:01'),
(33, 1, '[{\"id\":1004,\"name\":\"Onion Rings\",\"price\":3.49,\"quantity\":2,\"remark\":\"1233\",\"imageUrl\":\"images\\/onion_rings.jpg\"}]', '6.98', '2023-04-11 02:23:43', '2023-04-11 02:23:43'),
(34, 1, '[{\"id\":1005,\"name\":\"Soft Drink\",\"price\":1.99,\"quantity\":3,\"remark\":\"less ice\",\"imageUrl\":\"images\\/soft_drink.jpeg\"}]', '5.97', '2023-04-11 02:24:17', '2023-04-11 02:24:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fooditem`
--
ALTER TABLE `fooditem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fooditem`
--
ALTER TABLE `fooditem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
