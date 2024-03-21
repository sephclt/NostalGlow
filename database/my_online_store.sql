-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 04:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_table`
--

CREATE TABLE `log_table` (
  `log_id` int(11) NOT NULL,
  `action` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_table`
--

INSERT INTO `log_table` (`log_id`, `action`, `timestamp`) VALUES
(1, 'insert', '2024-03-15 08:19:37'),
(2, 'insert', '2024-03-20 14:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `sender_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender_email`, `sender_message`) VALUES
(1, 'emailko@gmail.com', 'Mema sabi'),
(2, 'emailko@gmail.com', 'Mema sabi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `price` decimal(10,1) DEFAULT NULL,
  `capsule` int(11) DEFAULT NULL,
  `themes` enum('Basic','Advanced','Extended') DEFAULT NULL,
  `encryption` enum('Server End','End-to-End') DEFAULT NULL,
  `integration` enum('Basic','Advanced','Extended') DEFAULT NULL,
  `newFeatures` enum('Priority') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_name`, `price`, `capsule`, `themes`, `encryption`, `integration`, `newFeatures`) VALUES
(5, 'Basic', 250.0, 1, 'Basic', 'Server End', NULL, NULL),
(6, 'Standard', 500.0, 2, 'Advanced', 'Server End', 'Basic', NULL),
(7, 'Premium', 800.0, 4, 'Extended', 'End-to-End', 'Extended', 'Priority');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `subscription` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user_id`, `username`, `email`, `password`, `first_name`, `last_name`, `address`, `contact`, `subscription`) VALUES
(1, 'adamapple', 'adam@apple.com', '123456789', 'Adam', 'Apple', 'bahay ni adam', '09123456789', 5),
(2, 'brandonbanana', 'brandon@banana.com', '123456789', 'Brandon', 'Banana', 'bahay ni brandon', '09123456789', 7),
(3, 'chestercoconut', 'chester@coconut.com', '123456789', 'Chester', 'Coconut', 'bahay ni coconut', '09123456789', 7);

--
-- Triggers `profiles`
--
DELIMITER $$
CREATE TRIGGER `LogStudentChanges` AFTER INSERT ON `profiles` FOR EACH ROW BEGIN
	INSERT INTO log_table(action, timestamp)
    VALUES ('insert', NOW());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_memories`
--

CREATE TABLE `user_memories` (
  `memory_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `memory_link` varchar(100) NOT NULL,
  `memory_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_memories`
--

INSERT INTO `user_memories` (`memory_id`, `user_id`, `memory_link`, `memory_name`) VALUES
(1, 1, 'https://www.youtube.com/watch?v=RGeWKnr9hZY', 'favorite memory'),
(3, 1, 'https://www.youtube.com/watch?v=q9zKYh8sY_E', 'singing guy'),
(4, 3, 'https://github.com/sephclt/NostalGlow', 'My Website'),
(5, 3, 'https://www.youtube.com/watch?v=sVTy_wmn5SU&pp=ygUMbmV3amVhbnMgb21n', 'malupet na song');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_table`
--
ALTER TABLE `log_table`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_memories`
--
ALTER TABLE `user_memories`
  ADD PRIMARY KEY (`memory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_table`
--
ALTER TABLE `log_table`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_memories`
--
ALTER TABLE `user_memories`
  MODIFY `memory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
