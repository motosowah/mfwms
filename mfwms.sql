-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2023 at 09:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfwms`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_item`
--

CREATE TABLE `master_item` (
  `id` int(11) NOT NULL,
  `item_code` text DEFAULT NULL,
  `item_name` text DEFAULT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_item`
--

INSERT INTO `master_item` (`id`, `item_code`, `item_name`, `updated`) VALUES
(1, 'aa', 'aaaa', '2023-03-03 11:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `stock_detail`
--

CREATE TABLE `stock_detail` (
  `id` int(11) NOT NULL,
  `item_code` text DEFAULT NULL,
  `batch` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `rack` text DEFAULT NULL,
  `pallet` text DEFAULT NULL,
  `qty` float NOT NULL DEFAULT 0,
  `qty_alloc` float NOT NULL DEFAULT 0,
  `unit` text DEFAULT NULL,
  `last_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_detail`
--

INSERT INTO `stock_detail` (`id`, `item_code`, `batch`, `location`, `rack`, `pallet`, `qty`, `qty_alloc`, `unit`, `last_updated`) VALUES
(1, 'item01', 'batch01', 'loc01', NULL, NULL, 12.345, 0, NULL, '2023-03-03 11:02:07'),
(2, 'item01', 'batch01', 'loc01', 'aa', NULL, 12.345, 0, NULL, '2023-03-03 11:02:30'),
(3, 'ab', '', '', NULL, NULL, 0, 0, NULL, '2023-03-03 11:04:33'),
(4, 'agasf', '', '', NULL, NULL, 0, 0, NULL, '2023-03-03 11:05:01'),
(5, 'M1AF03000068', '1A2282515G', 'PF21', NULL, NULL, 1512, 0, 'KG', '2023-03-03 13:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `trx_history`
--

CREATE TABLE `trx_history` (
  `id` int(11) NOT NULL,
  `transaction` text NOT NULL,
  `posting_date` date DEFAULT NULL,
  `doc_date` date DEFAULT NULL,
  `doc_no` text DEFAULT NULL,
  `item_code` text DEFAULT NULL,
  `batch` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `rack` text DEFAULT NULL,
  `pallet` text DEFAULT NULL,
  `qty` float NOT NULL DEFAULT 0,
  `unit` text DEFAULT NULL,
  `user` text DEFAULT NULL,
  `updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trx_history`
--

INSERT INTO `trx_history` (`id`, `transaction`, `posting_date`, `doc_date`, `doc_no`, `item_code`, `batch`, `location`, `rack`, `pallet`, `qty`, `unit`, `user`, `updated`) VALUES
(1, 'stock update test', '2022-08-24', '2022-08-24', 'TEST001', 'M1AF03000068', '1A2282515G', 'PF21', NULL, NULL, 168, 'KG', 'demo', '2023-03-03 14:50:35'),
(2, 'stock update test', '2022-08-24', '2022-08-24', 'TEST001', 'M1AF03000068', '1A2282515G', 'PF21', NULL, NULL, 168, 'KG', 'demo', '2023-07-11 21:52:38'),
(3, 'stock update test', '2022-08-24', '2022-08-24', 'TEST001', 'M1AF03000068', '1A2282515G', 'PF21', NULL, NULL, 168, 'KG', 'demo', '2023-07-11 21:53:20'),
(4, 'stock update test', '2022-08-24', '2022-08-24', 'TEST001', 'M1AF03000068', '1A2282515G', 'PF21', NULL, NULL, 168, 'KG', 'demo', '2023-07-11 21:54:15'),
(5, 'stock update test', '2022-08-24', '2022-08-24', 'TEST001', 'M1AF03000068', '1A2282515G', 'PF21', NULL, NULL, 168, 'KG', 'demo', '2023-07-13 14:44:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_item`
--
ALTER TABLE `master_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_detail`
--
ALTER TABLE `stock_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `trx_history`
--
ALTER TABLE `trx_history`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_item`
--
ALTER TABLE `master_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock_detail`
--
ALTER TABLE `stock_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trx_history`
--
ALTER TABLE `trx_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
