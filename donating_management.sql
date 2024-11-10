-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 06:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donating_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) DEFAULT NULL,
  `donor_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `donation_amount` decimal(10,0) NOT NULL,
  `donation_date` date NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `donor_name`, `email`, `password`, `phone_number`, `donation_amount`, `donation_date`, `message`) VALUES
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', ''),
(NULL, '', 'plmvreign@gmail.com', '', '', 0, '0000-00-00', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
