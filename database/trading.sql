-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 05:55 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trading`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `note` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `date`, `note`, `user_id`) VALUES
(1, 'خانه است jkfj', '1399-06-23', 'برای امتحان است', 1);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(350) DEFAULT NULL,
  `date` date NOT NULL,
  `note` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `province_id`, `name`, `img`, `date`, `note`, `user_id`) VALUES
(10, 7, 'انجیل', '../upload/user/10/10_photo.png', '1399-06-21', 'برای امتحان است', 1),
(12, 7, 'کرخ', '../upload/districts/2/2_photo.PNG', '1399-07-24', 'برای امتحان است', 1);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `image` varchar(350) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `note` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `image`, `name`, `date`, `note`, `user_id`) VALUES
(7, '../upload/province/1/1_photo.PNG', 'هرات', '1399-07-24', 'برای امتحان است', 1);

-- --------------------------------------------------------

--
-- Table structure for table `real_estates`
--

CREATE TABLE `real_estates` (
  `id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_number` varchar(20) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `img` varchar(350) NOT NULL,
  `date` date NOT NULL,
  `note` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `real_estates`
--

INSERT INTO `real_estates` (`id`, `province_id`, `district_id`, `category_id`, `type`, `amount`, `owner_name`, `owner_number`, `owner_email`, `address`, `img`, `date`, `note`, `user_id`) VALUES
(1, 7, 10, 1, 'hostage', 2000, 'کریم خان edit', '۰۷۹۹۸۸edit', 'karimedit@gmail.com', 'هرات جای خوبی است edit', '../upload/user/1/1_photo.PNG', '1399-06-21', 'این یک ملک خوب است edit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(2500) NOT NULL,
  `photo` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(355) NOT NULL,
  `date` varchar(50) NOT NULL,
  `note` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `photo`, `phone`, `email`, `username`, `password`, `date`, `note`) VALUES
(1, 'حمید رحیمی', '../upload/user/1/1_photo.jpg', '0799334455', 'Hamid@gmail.com', 'Hamid@gmail.com', '12345', '1399-05-06', 'برای امتحان است'),
(2, ';vdl', '../upload/user/1/1_photo.jpg', '039398', 'Hamid@gmail.com', 'Hamid@gmail.com', '12345', '1399-05-06', 'lkjsdlfkj'),
(3, 'احمد', '../upload/user/2/2_photo.jpg', '0799223344', 'Ahmad@gmial.com', 'Ahmad@gmial.com', '1234', '1399-05-06', 'this is for test'),
(4, 'حمید رحیمی', '../upload/user/3/3_photo.jpg', '۰۷۹۹۹۹۹۹', 'hamid@gmail.com', 'kaly', '12345', '1399-05-23', 'این یک یوز است'),
(5, 'احمد', '../upload/user/4/4_photo.jpg', '07992828', 'ahmid@gmial.com', 'ahmid123', '', '1399-05-26', 'برای امتحان اتس'),
(6, 'sdlkfj', '../upload/user/5/5_photo.jpg', '03030303', 'hamid@gmail.com', 'karimi23', '$2y$10$tabffJLFQP7OoZRyTsnpoOtDdSrLup/V.MhZnDccY9yikuZSYkR.K', '1399-05-26', ''),
(7, 'کشمسنیتب', '../upload/user/6/6_photo.PNG', '0393939', 'laskjdf@gmil.com', 'ksdjlkdjf', '$2y$10$/Dr29hPNltCT5e0myVvEDe6cVBuKkAfm0GUHUzsV.hPA8F9WUGqaW', '1399-05-26', 'skldjflkj'),
(8, 'احمد کریمی edit', '../upload/user/8/8_photo.jpg', '08383883', 'ahmid@gmail.com', 'Hamid@gmail.com', '12345', '1399-06-21', 'برای امتحان است edit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_estates`
--
ALTER TABLE `real_estates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `real_estates`
--
ALTER TABLE `real_estates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
