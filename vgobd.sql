-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 12:32 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vgobd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edisplacement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emaxpower` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emaxtorque` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carburettor` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compression` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `borestroke` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eoilcap` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `killswitch` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chassistype` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noofgears` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sfront` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `srear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bfront` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tfront` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuelcap` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `esystem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headlamp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passlight` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dlength` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dgroundclear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dheight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dwidth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dwheelbase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dkerbweight` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topspeed` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `milagecompany` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `milageusers` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coolingsystem` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startingmethod` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abs` varchar(202) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`id`, `name`, `status`, `brand`, `price`, `etype`, `edisplacement`, `emaxpower`, `emaxtorque`, `carburettor`, `compression`, `borestroke`, `eoilcap`, `killswitch`, `chassistype`, `noofgears`, `sfront`, `srear`, `bfront`, `brear`, `tfront`, `trear`, `fuelcap`, `esystem`, `headlamp`, `passlight`, `dlength`, `dgroundclear`, `dheight`, `dwidth`, `dwheelbase`, `dkerbweight`, `topspeed`, `milagecompany`, `milageusers`, `coolingsystem`, `startingmethod`, `abs`, `created_at`, `updated_at`) VALUES
(5, 'test final', 'newarrival', 'brand', 'price', 'etype', 'edis', 'epow', 'etor', 'carbu', 'compre', 'bore', 'eoilcap', 'Not Available', 'chassty', 'noofgre', 'susf', 'susr', 'braf', 'brar', 'tyrf', 'tyrr', 'fuelcap', 'sys', 'head', 'Not Available', 'len', 'groun', 'heigh', 'wid', 'wheel', 'kerb', 'top', 'milcom', 'milusa', 'air cooled', 'Self ignition Only', 'Not Available', '2019-04-27 09:29:10', '2019-04-28 00:00:31');

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
(3, '2019_03_26_040948_create_bikes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'max', 'max@vgo.com', '$2y$10$2N/qE5v.HqiJoGJJhnq5fulAEZRQsnzdZfnX.dTNbdQT.BJBT829u', 'suRfQDhfz2i25aZuNgTxwQ2UDmv5fsZUZGluOUn6v7kRIMYJLqLgg5hNKGKJ', '2019-03-26 10:11:34', '2019-03-26 10:11:34'),
(2, 'Reday khan', 'reday123@gmail.com', '$2y$10$ZxZrcx48k.C11y1oiNOeS.t/y5o2oH5YsEH2EcI1l3iD5Qns7xS5C', 'kdbonsnsNbIPZZYqKnTVwVomwzUJXrez5iiKaK776GIm8yvLs3tkWAh36nQs', '2019-04-07 03:02:10', '2019-04-07 03:02:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
