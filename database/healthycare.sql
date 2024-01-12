-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 01:40 PM
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
-- Database: `healthycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `username`, `phone`, `email`, `doctor`, `state`, `date`) VALUES
(1, 'aline kamagaju', 2147483647, 'a@gmail.com', 'Doctor Ignase', 'kigali', '2024-01-02 07:07:14'),
(2, 'kljdflgjkd', 894760347, 'h@gmail.com', 'Doctor Alain', 'lkgdfj', '2024-01-02 07:07:44'),
(3, 'erte', 9485674, 'f@gmail.com', 'Doctor Diane Gashumba', 'ierut', '2024-01-02 07:08:00'),
(4, 'ueritywe', 2147483647, 'j@gmail.com', 'Doctor Kami', 'nyabihu', '2024-01-02 07:08:21'),
(5, 'janvier cruise', 2147483647, 'arine@gmail.com', 'Doctor Ignase', 'kamonyi', '2024-01-04 05:51:28'),
(6, 'derry', 34865934, 'bl@gmail.com', 'Doctor Alain', 'kigali', '2024-01-04 05:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `message`) VALUES
(1, 'uhj', 'emailsdfghgf@gmail.com', 'wertdgfhdiudhgvcj'),
(2, 'uhj', 'emailsdfghgf@gmail.com', 'wertdgfhdiudhgvcj'),
(3, 'uhj', 'emailsdfghgf@gmail.com', 'wertdgfhdiudhgvcj'),
(4, 'uhj', 'emailsdfghgf@gmail.com', 'wertdgfhdiudhgvcj'),
(5, 'david', 'emailsdfghgf@gmail.com', 'kingh eb i reaally love u all we are happpy to have you as our doctor'),
(6, 'janvier cruise', 'cruise@gmail.com', 'hello '),
(7, 'janvier cruise', 'cruise@gmail.com', 'hello '),
(8, 'derry', 'derry@gmail.com', 'waguan');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `fname`, `lname`, `email`, `specialty`, `phone`, `address`, `date`) VALUES
(1, 'arine', 'ubaruta', 'arine@gmail.com', 'eye', 879346, 'nyamabuye', '2023-12-31 18:58:07'),
(2, 'ellinah', 'uwitonze', 'ellinah@gmail.com', 'heart', 2147483647, 'gatare', '2023-12-31 19:13:59'),
(3, 'fksdl;f', 'fsdkl', 'fsdkf@gmail.com', 'uiweqrw', 278723, 'sdlfwe', '2023-12-31 19:18:13'),
(4, 'betty', 'uwaje', 'uwaje@gmail.com', 'skin', 873495837, 'nyabihu', '2023-12-31 19:19:33'),
(5, 'jkldfv', 'fkdjlghhsd', 'a@gmial.com', 'skin', 123456, 'nyamabuye', '2023-12-31 19:20:36'),
(6, 'king ', 'lay', 'j@gmail.com', 'weren', 2147483647, 'fg54tfd', '2024-01-04 03:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(30) NOT NULL,
  `card` int(11) NOT NULL,
  `bill_address` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `card`, `bill_address`, `payment`, `amount`, `description`, `date`) VALUES
(1, 892892, 'nyamirambo', 'paypal', 8, 'laboratory Test', '2024-01-09 22:00:00'),
(2, 892892, 'nyamirambo', 'paypal', 8, 'laboratory Test', '2024-01-09 22:00:00'),
(3, 892892, 'nyamirambo', 'paypal', 8, 'laboratory Test', '2024-01-09 22:00:00'),
(4, 892892, 'nyamirambo', 'paypal', 8, 'laboratory Test', '2024-01-09 22:00:00'),
(5, 892892, 'nyamirambo', 'paypal', 8, 'laboratory Test', '2024-01-09 22:00:00'),
(6, 892892, 'nyamirambo', 'paypal', 8, 'laboratory Test', '2024-01-09 22:00:00'),
(7, 892892, 'nyamirambo', 'paypal', 8, 'laboratory Test', '2024-01-09 22:00:00'),
(8, 892892, 'nyamirambo', 'paypal', 8, 'laboratory Test', '2024-01-09 22:00:00'),
(9, 892892, 'nyamirambo', 'paypal', 8, 'laboratory Test', '2024-01-09 22:00:00'),
(10, 892892, 'nyamirambo', 'paypal', 8, 'laboratory Test', '2024-01-09 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `dob` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `street2` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `zip` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `mname`, `lname`, `email`, `phone`, `dob`, `gender`, `street`, `street2`, `province`, `city`, `region`, `zip`, `password`, `confirmpassword`, `date`) VALUES
(1, 'blando', 'ashimirwe', 'kkkk', 'bl@gmail.com', 8593478, 2023, 'on', 'nyami', 'nyani4', '', 'kigaki', 'nyi', '250', '', '', '2023-12-31 16:14:29'),
(2, 'kkk', 'jkds', 'cjkcn,.', 'kjsd@gmail.com', 348957304, 2023, 'on', 'jkldf', 'kljg;lsdf', 'Western', 'kdflhjd', 'klrtkwer', '234', '', '', '2023-12-31 16:21:13'),
(3, 'jhsdk', 'sdjkfgklsdf', 'sdkgsd.f', 'sdgmfds@gmail.com', 84395, 2023, 'on', 'klsdf', 'erlkgdf34', 'N', 'jksljf', 'jkslsd', '376', '', '', '2023-12-31 16:22:41'),
(4, 'ksdlfsd', 'kjdglsdf', 'dfkgldf', 'sss@gmail.com', 8956304, 2023, 'on', 'kfdo', 'ejkerl', 'N', 'ldjhsd', 'jhdfghd', '257', 'password', 'confirmpassword', '2023-12-31 16:49:12'),
(5, 'jkhlthe', 'jkerlrte', 'ekrlte', 'a@gmail.com', 893453849, 2023, 'on', 'kldfgd', 'jdksd', 'E', 'djksfld', 'skdlf', '456', '0000', '0000', '2023-12-31 16:50:42'),
(6, 'eroitier', 'dkflgs', 'kdfgs', 's@gmail.com', 905843, 2023, 'on', 'kdlfgkd', 'sdfjklfd', 'K', 'sjkf', 'sjkldfs', '734', '9090', '9099', '2023-12-31 16:51:34'),
(7, 'jkldf', 'jksdlf', 'sdj', 'd@gmail.com', 78345, 2023, 'on', 'eiurlu', 'weuirw', 'E', 'ejklr', 'erjlter', '3784', '5656', '5656', '2023-12-31 17:42:39'),
(8, 'blandon', 'khj', 'ashimirwe', 'blandonashimirwe@gmail.com', 787277075, 2024, 'on', '2345432', '234567', 'E', 'kigali', '4567', '4567', '4321', '4321', '2024-01-02 17:55:00'),
(9, 'admin', 'admin', 'admin', 'admin@gmail.com', 2147483647, 2024, 'on', 'NYARUGENGE-NYAMIRAMBO', 'nyarugenge', 'K', 'KIGALI', 'rwanda', '250', 'admin', 'admin', '2024-01-10 12:25:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
