-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 01, 2019 at 07:26 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planit`
--

-- --------------------------------------------------------

--
-- Table structure for table `aveve`
--

CREATE TABLE `aveve` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'consoles'),
(2, 'gezelschapsspellen'),
(3, 'speelgoed'),
(4, 'games'),
(5, 'smartphones'),
(6, 'camera\'s');

-- --------------------------------------------------------

--
-- Table structure for table `complete`
--

CREATE TABLE `complete` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` varchar(64) NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complete`
--

INSERT INTO `complete` (`id`, `product_id`, `date`, `region_id`) VALUES
(1, 15, '2019-12-25', 1),
(2, 14, '2019-12-27', 1),
(3, 18, '', 1),
(4, 2, '', 1),
(5, 2, '', 1),
(6, 2, '', 1),
(7, 2, '', 1),
(8, 4, '2019-12-27', 1),
(9, 2, '', 1),
(10, 2, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coolblue`
--

CREATE TABLE `coolblue` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coolblue`
--

INSERT INTO `coolblue` (`id`, `name`, `price`, `product_id`) VALUES
(1, 'PlayStation 4', '289.00', 1),
(2, 'Xbox One', '199.00', 3),
(3, 'Nintendo Switch', '319.00', 6),
(4, 'Fifa 20', '64.99', 9),
(5, 'Call of Duty: Modern Warfare', '69.99', 10),
(6, 'Pokemon Sword', '59.99', 11),
(7, 'Huawei P30 PRO', '882.00', 14),
(8, 'Apple iPhone 11 PRO', '1149.00', 15),
(9, 'Samsung Galaxy Note 10+', '1049.00', 16),
(15, 'Nikon D3500', '469.00', 17),
(16, 'Canon EOS M50', '865.00', 18),
(17, 'Panasonic Lumix DMC-GX80', '516.00', 19);

-- --------------------------------------------------------

--
-- Table structure for table `krefel`
--

CREATE TABLE `krefel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `krefel`
--

INSERT INTO `krefel` (`id`, `name`, `price`, `product_id`) VALUES
(1, 'PlayStation 4', '289.00', 1),
(2, 'Xbox One', '199.00', 3),
(3, 'Nintendo Switch', '319.00', 6),
(4, 'Fifa 20', '64.99', 9),
(5, 'Call of Duty: Modern Warfare', '69.99', 10),
(6, 'Pokemon Sword', '59.99', 11),
(7, 'Huawei P30 PRO', '882.00', 14),
(8, 'Apple iPhone 11 PRO', '1149.00', 15),
(9, 'Samsung Galaxy Note 10+', '1049.00', 16),
(15, 'Nikon D3500', '469.00', 17),
(16, 'Canon EOS M50', '865.00', 18),
(17, 'Panasonic Lumix DMC-GX80', '516.00', 19);

-- --------------------------------------------------------

--
-- Table structure for table `mediamarkt`
--

CREATE TABLE `mediamarkt` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mediamarkt`
--

INSERT INTO `mediamarkt` (`id`, `name`, `price`, `product_id`) VALUES
(1, 'PlayStation 4', '289.00', 1),
(2, 'Xbox One', '199.00', 3),
(3, 'Nintendo Switch', '319.00', 6),
(4, 'Fifa 20', '64.99', 9),
(5, 'Call of Duty: Modern Warfare', '69.99', 10),
(6, 'Pokemon Sword', '59.99', 11),
(7, 'Huawei P30 PRO', '882.00', 14),
(8, 'Apple iPhone 11 PRO', '1149.00', 15),
(9, 'Samsung Galaxy Note 10+', '1049.00', 16),
(15, 'Nikon D3500', '469.00', 17),
(16, 'Canon EOS M50', '865.00', 18),
(17, 'Panasonic Lumix DMC-GX80', '516.00', 19);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`) VALUES
(1, 'PlayStation 4', 1),
(2, 'Risk', 2),
(3, 'Xbox One', 1),
(4, 'Dokter Bibber', 2),
(5, 'De slimste mens ter wereld - Bordspel', 2),
(6, 'Nintendo Switch', 1),
(7, 'PLAYMOBIL Groot ziekenhuis', 3),
(8, 'LEGO Technic Porsche 911 RSR', 3),
(9, 'Fifa 20', 4),
(10, 'Call of Duty: Modern Warfare', 4),
(11, 'Pokemon Sword', 4),
(14, 'Huawei P30 PRO', 5),
(15, 'Apple iPhone 11 PRO', 5),
(16, 'Samsung Galaxy Note 10+', 5),
(17, 'Nikon D3500', 6),
(18, 'Canon EOS M50', 6),
(19, 'Panasonic Lumix DMC-GX80', 6);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
(1, 'gent'),
(2, 'kortrijk');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `address` text,
  `town` varchar(255) NOT NULL,
  `region_id` int(11) NOT NULL,
  `zip` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `name`, `category_id`, `address`, `town`, `region_id`, `zip`) VALUES
(1, 'MediaMarkt', 1, 'Oudenaardse Steenweg 76-86', 'Gent', 1, '9000'),
(2, 'Vanden Borre', 1, 'Ringlaan 11', 'Kuurne', 2, '8520'),
(3, 'Krefel', 1, 'Kortrijksesteenweg 1192', 'Gent', 1, '9051'),
(4, 'Coolblue', 1, 'Antwerpsesteenweg 693', 'Gent', 1, '9040');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aveve`
--
ALTER TABLE `aveve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complete`
--
ALTER TABLE `complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coolblue`
--
ALTER TABLE `coolblue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `krefel`
--
ALTER TABLE `krefel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mediamarkt`
--
ALTER TABLE `mediamarkt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aveve`
--
ALTER TABLE `aveve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complete`
--
ALTER TABLE `complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coolblue`
--
ALTER TABLE `coolblue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `krefel`
--
ALTER TABLE `krefel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mediamarkt`
--
ALTER TABLE `mediamarkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
