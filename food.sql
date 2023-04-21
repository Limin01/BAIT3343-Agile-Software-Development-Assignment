-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 02:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bait3343`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_price` decimal(5,2) NOT NULL,
  `food_desc` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_img` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_category`, `food_name`, `food_price`, `food_desc`, `food_img`) VALUES
('B001', 'Burger', 'Beef Burger', '12.00', 'Beef burger consists of a beef patty that is typically cooked on a grill or griddle and placed between two slices of bread, known as the bun. The patty is often seasoned with salt and pepper and can be made from ground beef or other meats, such as bison or lamb. The burger can also be topped with various ingredients, such as cheese, lettuce, tomato, onion, pickles, bacon, and condiments like ketchup, mustard, or mayonnaise.', 'f2.png'),
('P001', 'Pizza', 'Seafood Pizza', '18.00', 'Seafood pizza is a type of pizza that is topped with various types of seafood, such as shrimp, calamari, clams, mussels, and sometimes even fish. It is typically made with a tomato-based sauce and mozzarella cheese, but can also include other ingredients like garlic, onions, peppers, and herbs. Seafood pizza is often associated with coastal regions and is a popular option for those who enjoy the taste of seafood and pizza together.', 'f1.png'),
('P002', 'Pizza', 'Margherita Pizza', '16.00', 'Margherita pizza is a traditional Italian pizza that is made with simple ingredients. It typically consists of a thin, crispy crust that is topped with a tomato sauce, fresh mozzarella cheese, and fresh basil leaves. The pizza is named after Queen Margherita of Savoy, who visited Naples in the late 19th century and was served a pizza with the colors of the Italian flag: red (tomato sauce), white (mozzarella cheese), and green (basil leaves).', 'f3.png'),
('P003', 'Pizza', 'Mixed Pizza', '22.00', 'Mixed pizza usually consisting of both meat and vegetables. The specific toppings can vary depending on the pizzeria or individual preference, but commonly used ingredients include sausage, pepperoni, ham, bell peppers, mushrooms, onions, and olives. Mixed pizza offers a range of flavors and textures, making it a popular option for those who want to try multiple toppings on their pizza. It can be served with a variety of sauces, such as tomato sauce or garlic butter, and is often topped with melted mozzarella cheese.', 'f6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
