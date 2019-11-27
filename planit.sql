-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 27, 2019 at 02:02 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `plan-it`
--

-- --------------------------------------------------------

--
-- Table structure for table `aveve`
--

CREATE TABLE `aveve` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `prijs` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mediamarkt`
--

CREATE TABLE `mediamarkt` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `prijs` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE `producten` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `winkels`
--

CREATE TABLE `winkels` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `adres` text,
  `gemeente` varchar(255) NOT NULL,
  `regio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aveve`
--
ALTER TABLE `aveve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mediamarkt`
--
ALTER TABLE `mediamarkt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winkels`
--
ALTER TABLE `winkels`
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
-- AUTO_INCREMENT for table `mediamarkt`
--
ALTER TABLE `mediamarkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `winkels`
--
ALTER TABLE `winkels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
