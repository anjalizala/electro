-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 01:25 PM
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
-- Database: `electro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `username`, `password`) VALUES
(1, 'dhvani', '1234'),
(2, 'dhvani', '1234'),
(3, 'dhvani', '1234'),
(4, 'jay', '456'),
(5, 'jay', '456'),
(6, 'jay', '456'),
(7, 'anjali', '123'),
(8, 'anjali', '123'),
(9, 'anjali', '123'),
(10, 'anjali', '123'),
(11, 'dimpal', '123'),
(12, 'dimpal', '123'),
(13, 'nidhi', '456'),
(14, 'nidhi', '456'),
(15, 'nidhi', '456'),
(16, 'nidhi', '456'),
(17, 'dhvani', '789'),
(18, 'dhvani', '789'),
(19, 'dhvani', '789'),
(20, 'dhvani', '789'),
(21, 'dhvani', '123'),
(22, 'dhvani', '123'),
(23, 'dhvani', '123'),
(24, 'dhvani', '123'),
(25, 'dhvani', '123'),
(26, 'dhvani', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(2) NOT NULL,
  `p_id` int(2) NOT NULL,
  `l_id` int(2) NOT NULL,
  `lp_id` int(2) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `lp_id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` int(6) NOT NULL,
  `des` varchar(100) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`lp_id`, `name`, `model`, `price`, `des`, `img`) VALUES
(1, 'hp', 'hp 15', 50000, 'good and lighweight laptop.', ''),
(2, 'dell', '23', 2435, '            lurdgflds,', 'images/h.jpg'),
(3, 'hp', '34', 89000, '            lasjhsfdvfkjhugsdfdladj', 'images/hp_15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `led`
--

CREATE TABLE `led` (
  `l_id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `led`
--

INSERT INTO `led` (`l_id`, `name`, `model`, `price`, `des`, `img`) VALUES
(1, 'lg', 'LG 121 cm (48 inches) 4K Ultra HD Smart OLED TV 48', 75990, '  Dolby Vision IQ & Dolby Atmos | Built-in Amazon Alexa & Google Assistant | Apple Airplay & Homekit | WebOS 22 with User Profiles | AI Sound Pro (virtual 5.1.2 surround sound) | Game Dashboard & Optimizer, HGiG, ALLM, 0.1 ms Response Time | Eye Comfort Display: Low-Blue Light, Flicker-Free, Discomfort Glare-free', 'images/lg__.jpg'),
(2, 'sony', 'Sony Bravia 139 cm (55 inches) XR series 4K Ultra ', 124990, '            Built-In Speaker, Smart TV, Voice Assistant.. Browser1 LED TV, 1 Warranty Card, 1 AC Power Cord, 1 Remote Control, 1 Table-Top Stand, 1 User Manual, 2 AAA Batteries1 LED TV, 1 Warranty Card, 1 AC Power Cord, 1 Remote Control, 1 Table-Top Stand, 1 User Manual, 2 AAA Batteries', 'images/sony_oled.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `p_id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` int(6) NOT NULL,
  `des` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`p_id`, `name`, `model`, `price`, `des`, `img`) VALUES
(1, 'apple', 'Apple iPhone 15 pro', 89900, '            Apple iPhone 15 Pro (512 GB) - Blue Titanium', 'images/i_15'),
(2, 'samsung', 'Samsung Galaxy S23 5G', 79999, '  Samsung Galaxy S23 5G (Phantom Black, 8GB, 256GB Storage)          ', 'images/s_23'),
(3, 'one plus', 'OnePlus 11 5G ', 61999, '       OnePlus 11 5G (Eternal Green, 16GB RAM, 256GB Storage)\r\nInclusive of all taxes\r\nEMI starts at ₹3,006. No Cost EMI available EMI\r\n\r\n\r\n', 'images/1_11'),
(4, 'apple', 'Apple iPhone 14 Pro Max', 143990, '            Apple iPhone 14 Pro Max (256 GB) - Silver', 'images/iphone__14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `r_id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` int(12) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`r_id`, `name`, `email`, `mobileno`, `password`, `address`) VALUES
(13, 'jaypatel', 'jay23@gmail.com', 2147483647, 'jay@123', 'c-403,sheemleela,bhadaj'),
(14, 'anjali', 'jay@gamil.com', 2147483647, '1234', 'c-403,sheemleela,bhadaj'),
(15, 'nidhi', 'nidhi123@gmail.com', 2147483647, '123', 'jhdibdfbwj'),
(16, 'dhvani', 'jay@gamil.com', 2147483647, '1234', 'ajcndsjndejnc'),
(17, 'dhvani', 'jay@gamil.com', 2147483647, '123', 'c-403,sheemleela,bhadaj'),
(18, 'jay', 'jay23@gmail.com', 2147483647, '123', 'c-403,sheemleela,bhadaj'),
(19, 'jay', 'jay23@gmail.com', 2147483647, '123456', 'c-403,sheemleela,bhadaj'),
(20, 'nidhi', 'nidhi123@gmail.com', 2147483647, 'nidhi@123', 'jhdibdfbwj'),
(21, 'jay', 'jay23@gmail.com', 2147483647, '1234', 'c-403,sheemleela,bhadaj'),
(22, 'kenil', 'k123@gmail.com', 2147483647, 'k@123', 'jhdibdfbwj'),
(23, 'dhvani', 'dhvani13@gmail.com', 2147483647, '123456', 'dcabin'),
(24, 'gaytri', 'galu18@gamil.com', 2147483647, 'IOC road', '12345678'),
(25, 'mansi', 'mansi10@gmail.com', 2147483647, 'IOC road', '12345678'),
(26, 'sujal', 'sujal14@gmail.com', 2147483647, 'HOUSING', '12345678'),
(27, 'dimpal', 'dimpal30@gmail.com', 2147483647, 'dcabin', '12345678'),
(28, 'anjali', 'anjali13@gmail.com', 2147483647, 'Naroda', '12345678'),
(29, 'devu', 'devu09@gmail.com', 2147483647, 'mansa', '12345678'),
(30, 'ddd', 'dd45@gmail.com', 2147483647, 'dcabin', '12345678'),
(31, 'dd', 'dd13@gamil.com', 2147483647, 'dcabin', '12345678'),
(32, 'dd', 'dd3@gmail.com', 2147483647, 'dcabin', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`lp_id`);

--
-- Indexes for table `led`
--
ALTER TABLE `led`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `lp_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `led`
--
ALTER TABLE `led`
  MODIFY `l_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `p_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `r_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
