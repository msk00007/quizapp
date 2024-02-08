-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 07:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiztable`
--

CREATE TABLE `quiztable` (
  `quiz_id` int(50) NOT NULL,
  `question` varchar(500) NOT NULL,
  `opt_A` varchar(50) NOT NULL,
  `opt_B` varchar(50) NOT NULL,
  `opt_C` varchar(50) NOT NULL,
  `opt_D` varchar(50) NOT NULL,
  `crct_Ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiztable`
--

INSERT INTO `quiztable` (`quiz_id`, `question`, `opt_A`, `opt_B`, `opt_C`, `opt_D`, `crct_Ans`) VALUES
(1, 'What is the official animal of Scotland?', 'Unicorn', 'horse', 'dog', 'Buffello', 'Unicorn'),
(2, 'What is the world record for the longest hiccupping spree?', '58 years', '68 years', '25 years', '98 years', '68 years'),
(3, 'In which year did the Titanic sink?', '1985', '1947', '1854', '1912', '1912'),
(4, 'What is the capital city of Argentina?', 'Buenos Aires', 'wrong', 'wrong', 'wrong', 'Buenos Aires'),
(5, 'In which year did World War II end?', '1947', '1912', '1945', '1988', '1945'),
(6, 'What is the currency of Japan?', 'Dollor', 'Rupee', 'Japanese Yen', 'paisa', 'Japanese Yen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiztable`
--
ALTER TABLE `quiztable`
  ADD PRIMARY KEY (`quiz_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiztable`
--
ALTER TABLE `quiztable`
  MODIFY `quiz_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
