-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 07:49 AM
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
-- Database: `farmbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(6, 1, 1, 'Mango', 25, 1, 'Mango.jpg'),
(9, 14, 11, 'Green Peas', 60, 1, 'Green Peas.jpg'),
(10, 15, 9, 'Maize', 25, 1, 'Maize.jpg'),
(11, 16, 12, 'Apple', 120, 1, 'Apple.jpg'),
(12, 17, 4, 'Marigold', 45, 1, 'zendu.jpeg'),
(13, 18, 6, 'wheat', 30, 1, 'Wheat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(255) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1119926354, 132590549, 'hi'),
(2, 823751385, 1119926354, 'hi '),
(3, 823751385, 1119926354, 'niramala your products are amazing and organic.'),
(4, 823751385, 1119926354, 'I am complete order.'),
(5, 1119926354, 823751385, 'Thank ram for buy my product '),
(6, 1119926354, 823751385, 'Price discuss after complete order'),
(7, 1119926354, 823751385, 'by ram and buy product next time again');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `farmer_id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `farmer_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(2, 1, 2, 'ram', '1234567890', 'ram@gmail.com', 'paytm', 'xyz mumbai maharastra india - 12345', ', Mango ( 1 )', 25, '20-Apr-2023', 'completed'),
(3, 1, 3, 'ram', '1234567890', 'ram@gmail.com', 'paypal', 'xyzmumbai maharastra india - 12345', ', Onion ( 1 )', 50, '20-Apr-2023', 'pending'),
(4, 4, 2, 'vijay', '1212121212', 'vijay@gmail.com', 'cash on delivery', 'dobevali near zananta chowk mumbai mumbai maharastra india - 42566', ', Rise ( 1 )', 35, '15-May-2023', 'pending'),
(5, 13, 8, 'Raj', '1414141414', 'Raj@gmail.com', 'cash on delivery', 'chatrapati sambhaji nager kolhapur kolhapur maharastra india - 416121', ', Brocoli ( 1 )', 50, '15-May-2023', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `farmer_id` int(255) NOT NULL,
  `farmer_email` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `farmer_id`, `farmer_email`, `name`, `category`, `details`, `price`, `image`) VALUES
(1, 2, 'vikarm@gmail.com', 'Mango', 'fruits', 'asdfasd', 25, 'Mango.jpg'),
(3, 2, 'vikarm@gmail.com', 'jawar', 'grains_crops', 'best and healthy. Assal marathi.', 50, 'jawar.jpeg'),
(4, 3, 'ajay@gmail.com', 'Marigold', 'flower', 'dadfdsaf', 45, 'zendu.jpeg'),
(6, 5, 'tukaram@gmail.com', 'wheat', 'grains_crops', 'It is amazing wheat.', 30, 'Wheat.jpg'),
(7, 6, 'laxmi@gmail.com', 'Rose', 'flower', 'Red and smooth rose.', 15, 'rose.jpeg'),
(8, 7, 'abhi@gmail.com', 'Rise', 'grains_crops', 'Pure organic rise.', 35, 'Rice.jpg'),
(9, 8, 'lokesh@gmail.com', 'Maize', 'grains_crops', 'sweet maize', 25, 'Maize.jpg'),
(10, 8, 'lokesh@gmail.com', 'Brocoli', 'vegitables', 'use upto 8 day&#39;s. after cutting crops.', 50, 'brocoli.jpg'),
(11, 11, 'komal@gmail.com', 'Green Peas', 'legumes', 'Best ....!', 60, 'Green Peas.jpg'),
(12, 10, 'kajal@gmail.com', 'Apple', 'fruits', 'Sweet and  tasty.', 120, 'Apple.jpg'),
(13, 12, 'nirmala@gmail.com', 'Onion', 'vegitables', 'spicy and organic.', 25, 'onion.png'),
(14, 12, 'nirmala@gmail.com', 'Fenugreek', 'vegitables', 'green and fresh.', 50, 'Fenugreek.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `name`, `email`, `mobile`, `password`, `user_type`, `image`, `status`) VALUES
(1, 1119926354, 'Ram', 'ram@gmail.com', '1234567890', 'c4ca4238a0b923820dcc509a6f75849b', 'buyer', 'pic-1.png', 'Offline now'),
(2, 878967786, 'vikarm', 'vikarm@gmail.com', '2345678910', 'c4ca4238a0b923820dcc509a6f75849b', 'farmer', 'pic-2.jpg', 'Offline now'),
(3, 132590549, 'Ajay', 'ajay@gmail.com', '1010101010', 'c4ca4238a0b923820dcc509a6f75849b', 'farmer', 'pic-4.jpg', 'Offline now'),
(4, 124829771, 'vijay', 'vijay@gmail.com', '1212121212', 'c4ca4238a0b923820dcc509a6f75849b', 'buyer', 'pic-3.png', 'Offline now'),
(5, 776321469, 'Tukaram', 'tukaram@gmail.com', '11111111', 'c4ca4238a0b923820dcc509a6f75849b', 'farmer', 'pic-7.jpg', 'Offline now'),
(6, 650209717, 'Laxmi', 'laxmi@gmail.com', ' 8169193101', 'c4ca4238a0b923820dcc509a6f75849b', 'farmer', 'pic-11.jpg', 'Offline now'),
(7, 108018058, 'Abhishek', 'abhi@gmail.com', '8169193102', 'c4ca4238a0b923820dcc509a6f75849b', 'farmer', 'pic-6.jpg', 'Offline now'),
(8, 1439207997, 'Lokesh', 'lokesh@gmail.com', '8169193104', 'c4ca4238a0b923820dcc509a6f75849b', 'farmer', 'pic-5.jpg', 'Offline now'),
(9, 997566268, 'Samiksha', 'samiksha@gmail.com', ' 8169193106', 'c4ca4238a0b923820dcc509a6f75849b', 'farmer', 'pic-8.jpg', 'Offline now'),
(10, 1237630923, 'Kajal', 'kajal@gmail.com', ' 8169193111', 'c4ca4238a0b923820dcc509a6f75849b', 'farmer', 'pic-9.jpg', 'Offline now'),
(11, 794221678, 'Komal', 'komal@gmail.com', '1313131313', 'c4ca4238a0b923820dcc509a6f75849b', 'farmer', 'pic-10.jpg', 'Offline now'),
(12, 823751385, 'Niramala', 'niramala@gmail.com', '2525252525', 'c4ca4238a0b923820dcc509a6f75849b', 'farmer', 'pic-12.jpeg', 'Offline now'),
(13, 1249882824, 'Raj', 'Raj@gmail.com', '1414141414', 'c4ca4238a0b923820dcc509a6f75849b', 'buyer', 'pic-13.jpg', 'Offline now'),
(14, 886871372, 'Shiv', 'shiv@gmail.com', '1515151515', 'c4ca4238a0b923820dcc509a6f75849b', 'buyer', 'pic-14.jpg', 'Offline now'),
(15, 1496687541, 'Ganesh', 'ganesh@gmail.com', '1616161616', 'c4ca4238a0b923820dcc509a6f75849b', 'buyer', 'pic-15.jpg', 'Offline now'),
(16, 1312792716, 'Deepika', 'deepika@gmail.com', '1717171717', 'c4ca4238a0b923820dcc509a6f75849b', 'buyer', 'pic-17.jpg', 'Offline now'),
(17, 856621988, 'Mansi', 'mansi@gmail.com', '1818181818', 'c4ca4238a0b923820dcc509a6f75849b', 'buyer', 'pic-18.jpg', 'Offline now'),
(18, 1568625449, 'Radhika', 'radhika@gmail.com', '1919191919', 'c4ca4238a0b923820dcc509a6f75849b', 'buyer', 'pic-16.jpg', 'Offline now'),
(19, 1498182709, 'Nikita', 'nikita@gmail.com', '2020202020', 'c4ca4238a0b923820dcc509a6f75849b', 'buyer', 'pic-19.jpg', 'Offline now'),
(20, 1569009314, 'Gita', 'gita@gmail.com', '2121212121', 'c4ca4238a0b923820dcc509a6f75849b', 'buyer', 'pic-20.jpg', 'Offline now');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `pid`, `name`, `price`, `image`) VALUES
(2, 1, 4, 'Marigold', 45, 'zendu.jpeg'),
(3, 4, 7, 'Rose', 15, 'rose.jpeg'),
(4, 13, 3, 'jawar', 50, 'jawar.jpeg'),
(5, 14, 13, 'Onion', 25, 'onion.png'),
(6, 15, 6, 'wheat', 30, 'Wheat.jpg'),
(7, 16, 14, 'Fenugreek', 50, 'Fenugreek.jpg'),
(8, 17, 12, 'Apple', 120, 'Apple.jpg'),
(9, 18, 3, 'jawar', 50, 'jawar.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
