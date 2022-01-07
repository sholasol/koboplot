-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 08:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `own`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `userID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `created` date NOT NULL,
  `amount_invested` double NOT NULL,
  `no_investment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userID`, `fname`, `lname`, `email`, `password`, `address`, `phone`, `created`, `amount_invested`, `no_investment`) VALUES
(1, 'Shola', 'Ojo', 'sol@yahoo.com', '$2y$12$heLUzHFGwgIXehP2HiYDK.LQxJjb0pK2tVzsZvttxsmsx4BgrDBte', 'Lekki', '08173522090', '2018-12-04', 0, 0),
(3, 'Ojo', 'Solomon', 'sojo@ithorizonsng.com', '$2y$12$XQQZmX8EX7r1soWkah81AeUemXPdu0e.EsrH7wbsclgHlAX3PGYWm', '', '08173853143', '2018-12-15', 40000000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
  `lID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `detail` varchar(400) NOT NULL,
  `location` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `message` text NOT NULL,
  `subject` varchar(200) NOT NULL,
  `receiver` int(11) NOT NULL,
  `created` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender`, `message`, `subject`, `receiver`, `created`, `status`) VALUES
(1, 1, 'Testing Message Body', 'Testing', 3, '2019-02-22', 0),
(2, 3, 'Your testing email is duly acknowledged', 'Acknowledged', 1, '2019-02-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payout`
--

CREATE TABLE `payout` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `sub_amount` int(11) NOT NULL,
  `roi` double NOT NULL,
  `tot_amount` double NOT NULL,
  `created` date NOT NULL,
  `subID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `payout`
--

INSERT INTO `payout` (`id`, `userID`, `pID`, `sub_amount`, `roi`, `tot_amount`, `created`, `subID`) VALUES
(1, 3, 4, 50000000, 100000, 50100000, '2019-02-21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pID` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `markup` double NOT NULL,
  `percent_markup` double NOT NULL,
  `area` double NOT NULL,
  `koboplot` double NOT NULL,
  `kobounit` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `location` varchar(40) NOT NULL,
  `start` date NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `progress` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `category` varchar(30) NOT NULL,
  `investment` varchar(20) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pID`, `name`, `price`, `markup`, `percent_markup`, `area`, `koboplot`, `kobounit`, `address`, `location`, `start`, `detail`, `image`, `progress`, `status`, `category`, `investment`, `created`) VALUES
(1, 'Test Property', 60000000, 0, 0, 0, 0, 0, 'Lekki Free Trade Zone', 'Lagos', '2019-01-25', 'A new project has just been created and the project was updated twice', '944912.jpg', 0, 'Initial', 'Estate', '', '2018-11-29'),
(2, 'Second Property', 45000000, 0, 0, 0, 0, 0, 'Abijo Lekki Lagos', '', '2018-12-25', 'A new project to be situated in Abijo', '144977.jpg', 15, 'Ground Breaking', 'Estate', '', '2018-11-29'),
(3, 'Champions Mall', 500000000, 0, 0, 0, 0, 0, 'Ajah Lagos', '', '2019-03-20', 'A new multi purpose shopping mall project to be situated in Ajah Lagos', '31493.jpg', 10, 'Documentation', 'Mall', '', '2018-11-30'),
(4, 'Crystal Homes', 200000000, 0, 0, 0, 0, 0, 'Lekki Lagos', '', '2018-12-18', 'Lekki Crystal Home project', '147048.jpg', 0, 'Initial', 'Housing', '', '2018-12-02'),
(5, 'Liester Mall', 250000000, 0, 0, 0, 0, 0, 'Lekki Free Trade Zone', '', '2019-02-06', 'Lekki Free Trade Zone will witness another ground breaking shopping mall', '886451.jpg', 0, 'Initial', 'Mall', '', '2018-12-02'),
(6, 'Opulent Home', 20000000, 0, 0, 0, 0, 0, 'Chevron, Lagos', '', '2018-12-12', 'Opulent Home is here', '804930.jpg', 0, NULL, '', '', '2018-12-02'),
(7, 'Home Project', 2000000, 0, 0, 0, 0, 0, 'Eleko', '', '2018-12-12', 'Eleko Housing Project', '249671.jpg', 0, NULL, '', '', '2018-12-02'),
(8, 'Project 2', 100000000, 0, 0, 0, 0, 0, 'Sangotedo', '', '2019-01-15', 'Project Testing', '561266.jpg', 0, NULL, '', '', '2018-12-02'),
(9, 'Ajah Project', 100000000, 10000000, 10, 0, 110000, 0, '', 'Ajah', '0000-00-00', '', '964971.gif', 0, NULL, '', '', '2019-06-05'),
(10, 'Abijo Cresent', 200000000, 10000000, 5, 0, 1050000, 0, '', 'Abijo', '0000-00-00', '', '708361.jpg', 0, NULL, '', '', '2019-06-11'),
(11, 'Hopewell Park', 300000000, 60000000, 20, 0, 72000, 0, '', 'Abijo GRA', '0000-00-00', '', '255109.jpg', 0, NULL, '', '', '2019-06-11'),
(12, 'Victory Park', 150000000, 33000000, 22, 2000, 91500, 0, 'Golf Course', 'Lakowe', '0000-00-00', '', '243799.jpg', 0, NULL, '', '', '2019-06-11'),
(13, 'Abijo Shopping Mall', 150000000, 22500000, 15, 50, 3450000, 0, 'Abijo Lagos', 'Abijo', '0000-00-00', '', '994177.jpg', 0, 'Opened', '', '', '2019-06-24'),
(14, 'Sample Project', 200000000, 60000000, 30, 5000, 52000, 0, 'Ajah', 'Ajah', '0000-00-00', '', '885430.jpg', 0, 'Opened', '', '', '2019-06-29'),
(15, 'Hopewell mall', 350000000, 87500000, 25, 500, 0, 875000, 'Lekki Phase 1', 'Lekki', '0000-00-00', '', '396234.jpeg', 0, 'Opened', '', '', '2019-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `projectID` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sID`, `userID`, `projectID`, `amount`, `period`, `status`, `created`) VALUES
(1, 1, 2, 10000000, 1, 'paid', '2018-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created` date NOT NULL,
  `msg` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Active',
  `koboplot` int(11) NOT NULL,
  `kobounit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`subID`, `userID`, `pID`, `amount`, `created`, `msg`, `status`, `koboplot`, `kobounit`) VALUES
(1, 3, 4, 50000000, '2018-12-15', '', 'Sold', 0, 0),
(2, 3, 1, 10000000, '2019-02-02', '', 'Transfer', 0, 0),
(3, 3, 3, 30000000, '2019-02-08', '', 'Active', 0, 0),
(11, 3, 4, 50100000, '2019-02-21', '', 'Active', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `totalview`
--

CREATE TABLE `totalview` (
  `id` int(11) NOT NULL,
  `visitdate` datetime NOT NULL,
  `pagefrom` varchar(100) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `pageno` int(11) NOT NULL,
  `browser` varchar(200) NOT NULL,
  `page` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalview`
--

INSERT INTO `totalview` (`id`, `visitdate`, `pagefrom`, `ip`, `pageno`, `browser`, `page`) VALUES
(1, '2016-11-25 04:29:26', 'private.localhost', '127.0.0.1', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
(2, '2016-12-03 04:29:26', 'private.localhost', '127.0.0.1', 2, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
(3, '2016-12-06 04:29:27', 'private.localhost', '127.0.0.1', 3, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
(4, '2016-12-08 04:29:28', 'private.localhost', '127.0.0.1', 4, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
(5, '2016-12-09 04:29:29', 'private.localhost', '127.0.0.1', 5, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
(6, '2016-12-09 04:29:30', 'private.localhost', '127.0.0.1', 6, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
(7, '2016-12-10 04:29:30', 'private.localhost', '127.0.0.1', 7, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
(8, '2016-12-10 04:29:31', 'private.localhost', '127.0.0.1', 8, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
(9, '2016-12-11 04:29:31', 'private.localhost', '127.0.0.1', 9, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
(10, '2016-12-11 04:29:32', 'private.localhost', '127.0.0.1', 10, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
(11, '2016-12-11 04:29:33', 'private.localhost', '127.0.0.1', 11, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page2.php'),
(12, '2016-12-11 04:29:33', 'private.localhost', '127.0.0.1', 12, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
(13, '2016-12-12 04:29:34', 'private.localhost', '198:78:0:12', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php'),
(14, '2016-12-12 04:29:34', 'private.localhost', '10.0.0.1', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php'),
(15, '2016-12-12 04:29:34', 'private.localhost', '127.0.0.1', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
(16, '2016-12-12 04:29:35', 'private.localhost', '168:0:2:56', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php'),
(17, '2016-12-12 04:29:35', 'private.localhost', '10.0.0.1', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php'),
(18, '2016-12-13 04:29:36', 'private.localhost', '127.0.0.1', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'page1.php'),
(19, '2016-12-13 04:29:36', 'private.localhost', '101.0.0.34', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php'),
(20, '2016-12-14 00:00:00', 'private.localhost', '100:56:89:01', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393', 'index.php');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created` date NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `koboplot` int(11) NOT NULL,
  `kobounit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `pID`, `userID`, `buyer_id`, `amount`, `created`, `status`, `koboplot`, `kobounit`) VALUES
(1, 4, 3, 3, 50100000, '2019-02-13', 'Sold', 0, 0),
(2, 1, 3, 3, 10100000, '2019-02-14', 'Active', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `name` varchar(400) DEFAULT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `address` varchar(400) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `amount_invested` double NOT NULL,
  `no_investment` int(11) NOT NULL,
  `created` date NOT NULL,
  `createdby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `lname`, `email`, `password`, `role`, `address`, `phone`, `amount_invested`, `no_investment`, `created`, `createdby`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', '$2y$12$WMlX5qiCG.TdUPhbtfbGh.wGiF3zBn1FVBd4Re.V1L5UjArKvooyO', 'Admin', '', '', 0, 0, '2018-12-02', 0),
(2, 'Shadola', 'Yemi', 's.ola@owned.com', '$2y$12$jJxA643iL.BdBNRq/Su8D.lM6zw5nUWvyK6Dr.uVUZoIFH6TriOYq', 'User', '', '', 0, 0, '2019-02-23', 0),
(3, 'Solomon', 'Ojo', 'sojo@ithorizonsng.com', '$2y$12$XQQZmX8EX7r1soWkah81AeUemXPdu0e.EsrH7wbsclgHlAX3PGYWm', 'Client', 'Abijo Lekki Lagos', '08173853134', 40000000, 2, '2019-03-05', 0),
(4, 'User', 'User', 'user@user.com', '$2y$12$zB3coLgMmlr1n.XrTHY22OwBs55SCOYo/F/1R/dTVIbpmO0YZmMoW', 'User', 'Alpha Hydrocarbon, Abijo', '09088800011', 0, 0, '2019-07-03', 1),
(5, 'Agent', 'Agent', 'agent@agent.com', '$2y$12$lbuqIFiQxIvFKGURJtVJ7OfgLnXlwrSpEnZh4/GYWiJA4KkKP7OG2', 'Agent', 'Alpha Hydrocarbon Abijo', '09022233300', 0, 0, '2019-07-03', 1),
(6, 'John', 'Doe', 'john@yahoo.com', '$2y$12$jhLsvYws.hPkw6wu7JVNGuQYsaB2JGELUHtkQ.CYGLOmg4tfCDmOy', 'Agent', 'Alpha Hydrocarbon Abijo', '09022200011', 0, 0, '2019-07-03', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`lID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payout`
--
ALTER TABLE `payout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sID`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subID`);

--
-- Indexes for table `totalview`
--
ALTER TABLE `totalview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `totalview_idx_page01` (`page`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `lID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payout`
--
ALTER TABLE `payout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `totalview`
--
ALTER TABLE `totalview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
