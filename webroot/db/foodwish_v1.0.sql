-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 01:15 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodwish`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutimages`
--

CREATE TABLE `aboutimages` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutimages`
--

INSERT INTO `aboutimages` (`id`, `image`, `status`) VALUES
(1, '1.jpg', 1),
(2, '2.jpg', 1),
(3, '3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`) VALUES
(1, 'Know more About foodwish24', '<p>Lorem ipsum dolor sit amadipisicing elit, seddei smod dolore maaliqua. Ut enim ad miveniam, quis noion ullaml aboris nisi umt aliquip cequatL ipsum dolor sit ac adipis icling elit, se eiusmod tempor incididunt labmn hmagna aliqua. Ut enim ad minim veniam, quis nostr 1. History of Aahar (2000-2017) 2. How We prepare your meals 3. How We prepare your meals</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `aboutusbanners`
--

CREATE TABLE `aboutusbanners` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutusbanners`
--

INSERT INTO `aboutusbanners` (`id`, `image`, `status`) VALUES
(1, '20.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `videolink` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `videolink`, `image`, `status`) VALUES
(1, 'FOODWISH24', 'FOOD DELIVERY & CULINARY TRAINING SERVICES', '1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(16) NOT NULL,
  `fullname` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(64) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`) VALUES
(1, 'Breakfast', 1),
(2, 'Lunch', 1),
(3, 'Dinner', 1),
(4, 'Snacks', 1),
(5, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `phone1` varchar(32) NOT NULL,
  `phone2` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `tw` varchar(64) NOT NULL,
  `fb` varchar(64) NOT NULL,
  `gg` varchar(64) NOT NULL,
  `inst` varchar(64) NOT NULL,
  `rs` varchar(64) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone1`, `phone2`, `email`, `tw`, `fb`, `gg`, `inst`, `rs`, `status`) VALUES
(1, '<p>Elizabeth Tower. 6th Floor Medtown, New York</p>\r\n', '08035401606', '08035401606', 'info@foodwish24.com', 'https://www.twitter.com', 'https://www.facebook.com', 'https://www.google.com', 'https://www.instagram.com', 'https://www.rsfeed.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double(12,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `category_id`, `title`, `price`, `description`, `image`, `status`, `created_date`) VALUES
(1, 3, 'Testing dish 2', 1500.00, '<p>Lorem ipsum dolor sit amadipisicing elit, seddei smod dolore maaliqua. Ut enim ad miveniam, quis noion ullaml aboris nisi umt aliquip cequatL ipsum dolor sit ac adipis icling elit, se eiusmod tempor incididunt labmn hmagna aliqua. Ut enim ad minim veniam, quis nostr 2</p>\r\n', 'f3d1b1efe5eda8356cc0a6220fb140d91555536360.jpg', 1, '2019-04-19 11:04:00'),
(2, 5, 'Afang soup', 750.00, '<p>this is a delicious affang soup prepared by el chef vincent</p>\r\n', 'bab3a24174ed11fce6018de7a1662c4e1555536679.jpg', 1, '2019-04-19 11:04:00'),
(3, 3, 'Banga Soup', 1200.00, '<p>this is just a brief description for banga soup.</p>\r\n', 'a2e83942ed951f28b8506c27b035cdcc1555536798.jpg', 1, '2019-04-19 11:04:00'),
(4, 1, 'Melon Soup', 1000.00, '<p>asdfghjkl;ljkhgfdseawsQSDFGHJKL;/KJHGFDSAGHFYUJKILUO;P&#39;LKJHGFDS</p>\r\n', 'ebb9efecbd5cc03533e4a1ffdac77a0b1555666857.jpg', 1, '2019-04-19 11:04:00'),
(5, 1, 'Egusi soup', 870.00, '<p>fgdhjkl,nmbnvhgbdfsdawsdfsdghjkl;&#39;kjhgfdsafghj</p>\r\n', '26b462ce48702d3268fcf56ab2e308671555667054.jpg', 1, '2019-04-19 11:04:00'),
(6, 4, 'Biscuits', 890.00, '<p>asdfghjkl;xfdghjkmlfghjkl;&#39;\\</p>\r\n', 'e297d3f54c031223bedd09198fed7fda1555667299.jpg', 1, '2019-04-19 11:04:00'),
(7, 1, 'Tea', 1000.00, '<p>Lorem ipsum dolor sit amadipisicing elit, seddei smod dolore maaliqua. Ut enim ad miveniam, quis noion ullaml aboris nisi umt aliquip cequatL ipsum dolor sit ac adipis icling elit, se eiusmod tempor incididunt labmn hmagna aliqua. Ut enim ad minim veniam, quis nostr 1. History of Aahar (2000-2017) 2. How We prepare your meals 3. How We prepare your meals</p>\r\n', '5e96d39b6dd48c51ee679f879f344c871555669755.jpg', 1, '2019-04-19 11:04:00'),
(8, 3, 'Know more About foodwish24', 2300.00, '<p>Lorem ipsum dolor sit amadipisicing elit, seddei smod dolore maaliqua. Ut enim ad miveniam, quis noion ullaml aboris nisi umt aliquip cequatL ipsum dolor sit ac adipis icling elit, se eiusmod tempor incididunt labmn hmagna aliqua. Ut enim ad minim veniam, quis nostr 1. History of Aahar (2000-2017) 2. How We prepare your meals 3. How We prepare your meals</p>\r\n', 'f1578940c8d6b37a6bbb60b70fbe18341555669782.jpg', 1, '2019-04-19 11:04:00'),
(9, 2, 'GNS 101', 2000.00, '<p>Lorem ipsum dolor sit amadipisicing elit, seddei smod dolore maaliqua. Ut enim ad miveniam, quis noion ullaml aboris nisi umt aliquip cequatL ipsum dolor sit ac adipis icling elit, se eiusmod tempor incididunt labmn hmagna aliqua. Ut enim ad minim veniam, quis nostr 1. History of Aahar (2000-2017) 2. How We prepare your meals 3. How We prepare your meals</p>\r\n', '4798e1373fdd90e5cacce7eb4a44e74e1555669813.jpg', 1, '2019-04-19 11:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `category_id`, `status`, `created_date`) VALUES
(1, 'Testing', '4f7563b41d3e7240b52bc067d9fc938b1555506106.jpg', 1, 1, '2019-04-19 11:04:21'),
(2, 'new image', '827c6f0144d9d6e80a08f93ad453a5a21555506586.jpg', 2, 1, '2019-04-19 11:04:21'),
(3, 'FOODWISH24', 'fdd1b2293b11857930ed2863a0b071541555506639.jpg', 4, 1, '2019-04-19 11:04:21'),
(4, 'Know more About foodwish24', '76fc6243783b1d6d2030ff30c1583a221555506720.jpg', 4, 1, '2019-04-19 11:04:21'),
(5, 'GNS 101 Structure', '249867840481b6199a0d9eab46aae3cd1555506751.jpeg', 3, 1, '2019-04-19 11:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `gallerybanners`
--

CREATE TABLE `gallerybanners` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallerybanners`
--

INSERT INTO `gallerybanners` (`id`, `image`, `status`) VALUES
(1, '18.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `status`) VALUES
(1, 'Enviroments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `openingtimes`
--

CREATE TABLE `openingtimes` (
  `id` int(11) NOT NULL,
  `days` varchar(32) NOT NULL,
  `time` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `oder_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qty` int(11) NOT NULL,
  `amount` double(12,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `cost` double(12,2) NOT NULL,
  `training_date` varchar(255) NOT NULL,
  `facilitator` varchar(64) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `description`, `image`, `cost`, `training_date`, `facilitator`, `status`, `created_date`) VALUES
(1, 'asdf1', '<p>asad1</p>\r\n', 'f18f97a98a4aaaa95fac87b6253e9b691555573655.jpg', 111111.00, '04/18/2019', 'Vincent Otie', 1, '2019-04-19 11:04:50'),
(2, 'asdf', '<p>asad</p>\r\n', 'bcb172c502ae9b13f6d38075c4da2ff61555571301.jpg', 111111.00, '04/18/2019', 'Vincent Oti', 1, '2019-04-19 11:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `oder_id` int(11) NOT NULL,
  `oder_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gresponse` varchar(16) NOT NULL,
  `amount` varchar(16) NOT NULL,
  `status` varchar(16) NOT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `fullname` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `address` text NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `phone`, `address`, `created_date`, `status`, `roleid`) VALUES
(3, 'chukwudi@netpro.com.ng', 'Chukwudi Aniegboka', '$2y$10$/lCHOlkcr5avcQgaSTZHO.AQaq10vEKRJ0M.LFTkPK2VRxMRVv.1K', '8999009876', 'Imo state', '2019-04-17 07:44:00', 1, 1),
(5, 'admin@foodwish.com', 'Food Wish', '$2y$10$i4vZwhmUaX0MkqIqM.Uowuxi9.ggsyOsjiPvy.0/jQ6ZVx.m/ajdG', '08035409876', 'Abuja', '2019-04-17 21:36:00', 1, 1),
(6, 'user@foodwish.com', 'Food Wish', '$2y$10$Wckf8dIMvp9LdyMvN5uC5OA6h2x0eNmY5y22e96/97dEFkw1adfou', '8999009876', 'Imo state', '2019-04-17 21:38:00', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutimages`
--
ALTER TABLE `aboutimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutusbanners`
--
ALTER TABLE `aboutusbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerybanners`
--
ALTER TABLE `gallerybanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `openingtimes`
--
ALTER TABLE `openingtimes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `aboutimages`
--
ALTER TABLE `aboutimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutusbanners`
--
ALTER TABLE `aboutusbanners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallerybanners`
--
ALTER TABLE `gallerybanners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `openingtimes`
--
ALTER TABLE `openingtimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
