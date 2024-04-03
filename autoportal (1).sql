-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 07:31 AM
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
-- Database: `autoportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'hitenvora5666@gmail.com', '7508');

-- --------------------------------------------------------

--
-- Table structure for table `car_brand`
--

CREATE TABLE `car_brand` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_brand`
--

INSERT INTO `car_brand` (`car_id`, `car_name`) VALUES
(1, 'maruti suzuki'),
(5, 'TATA');

-- --------------------------------------------------------

--
-- Table structure for table `car_model`
--

CREATE TABLE `car_model` (
  `model_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_model`
--

INSERT INTO `car_model` (`model_id`, `car_id`, `model_name`) VALUES
(1, 1, 'dzire'),
(4, 5, 'Tiago');

-- --------------------------------------------------------

--
-- Table structure for table `city_name`
--

CREATE TABLE `city_name` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city_name`
--

INSERT INTO `city_name` (`city_id`, `city_name`) VALUES
(1, 'surat'),
(2, 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `footeremail`
--
-- Error reading structure for table autoportal.footeremail: #1932 - Table &#039;autoportal.footeremail&#039; doesn&#039;t exist in engine
-- Error reading data for table autoportal.footeremail: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `autoportal`.`footeremail`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `fual`
--

CREATE TABLE `fual` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fual`
--

INSERT INTO `fual` (`id`, `name`) VALUES
(1, 'PETROL'),
(2, 'DIESEL'),
(3, 'CNG'),
(4, 'LPG'),
(5, 'ELECTRIC');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_id`, `name`, `email`, `mobile`, `password`, `confirm_password`) VALUES
(1, 'hiten vora', 'hiten@gmail.com', '9687431212', '120', '120'),
(2, 'hiten', 'hiten@gmail.com', '9687431212', '100', '100');

-- --------------------------------------------------------

--
-- Table structure for table `show_car`
--

CREATE TABLE `show_car` (
  `showcar_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `fual` varchar(255) NOT NULL,
  `Transmission` varchar(255) NOT NULL,
  `km_driven` varchar(255) NOT NULL,
  `owner_no` varchar(255) NOT NULL,
  `descrption` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `show_car`
--

INSERT INTO `show_car` (`showcar_id`, `car_id`, `model_id`, `city_id`, `login_id`, `year`, `fual`, `Transmission`, `km_driven`, `owner_no`, `descrption`, `price`, `images`, `mobile_no`) VALUES
(8, 1, 1, 1, 2, '2023-10', 'petrol', 'AUTOMATIC', '2121', '1st', '545', '54', 'imagesphoto-1605559424843-9e4c228bf1c2.avif', '5051155521');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_brand`
--
ALTER TABLE `car_brand`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `car_model`
--
ALTER TABLE `car_model`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `city_name`
--
ALTER TABLE `city_name`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `fual`
--
ALTER TABLE `fual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `show_car`
--
ALTER TABLE `show_car`
  ADD PRIMARY KEY (`showcar_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `model_id` (`model_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `login_id` (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_brand`
--
ALTER TABLE `car_brand`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `car_model`
--
ALTER TABLE `car_model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city_name`
--
ALTER TABLE `city_name`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fual`
--
ALTER TABLE `fual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `show_car`
--
ALTER TABLE `show_car`
  MODIFY `showcar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
