-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2023 at 03:11 PM
-- Server version: 8.0.33-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grc_interns`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int NOT NULL,
  `admin_name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_contact` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_loginID` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_password` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_avatar` varchar(350) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `admin_role` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `onboarding_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `admin_name`, `admin_email`, `admin_contact`, `admin_loginID`, `admin_password`, `admin_avatar`, `admin_role`, `onboarding_date`) VALUES
(1, 'Vivek Robin Kujur', 'robinkujur@aidcom.in', 'To be updated', 'SME/I5DKAH', '7c99513dfff3a33145710fe22f2d0a25', 'http://localhost/grc_interns/modules/profile/avatar2.png', 'Super Admin', '2023-07-18 20:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile_details`
--

CREATE TABLE `admin_profile_details` (
  `id` int NOT NULL,
  `admin_name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_loginID` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `profession` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `total_earnings` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `working_rate` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `short_message` text COLLATE utf8mb4_general_ci NOT NULL,
  `website` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `location` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `experience_in_yrs` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `github_link` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook_link` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `insta_link` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `linkedin_profile` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_status` text COLLATE utf8mb4_general_ci NOT NULL,
  `cover_photo` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `updation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_profile_details`
--
ALTER TABLE `admin_profile_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_profile_details`
--
ALTER TABLE `admin_profile_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
