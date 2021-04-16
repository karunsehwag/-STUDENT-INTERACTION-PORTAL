-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 11:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `id` int(50) NOT NULL,
  `answer` varchar(256) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pid` int(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`id`, `answer`, `name`, `pid`, `date`) VALUES
(5, 'iiit bhopal is college of national importance', 'Karun Choudhary', 1, '2021-04-14'),
(6, 'it is established in 2017', 'Karun Choudhary', 1, '2021-04-14'),
(5, 'It is currently running in manit', 'Harsh gupta', 2, '2021-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(50) NOT NULL,
  `image` longblob NOT NULL,
  `image_text` varchar(50) NOT NULL,
  `TOPIC` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`, `TOPIC`, `name`, `pid`, `date`) VALUES
(1, 0x696d616765322e6a7067, 'wqetrq', 'wefsa', 'Karun Choudhary', '1', '2021-04-13'),
(2, 0x696d61676531332e6a7067, 'qwerq ', 'rfeerqw', '', '1', '2021-04-13'),
(3, 0x696d61676531312e6a7067, 'jwnkjbqkwf', 'best moments of life', '', '1', '2021-04-13'),
(6, 0x696d61676531332e6a7067, 'efwe', 'weqfwf', '', '1', '2021-04-13'),
(17, 0x696d61676531312e6a7067, '654', '', 'Karun Choudhary', '1', '2021-04-13'),
(18, 0x696d61676531332e6a7067, 'this is life', 'moments of life', 'Karun Choudhary', '1', '2021-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `id` int(11) NOT NULL,
  `ques1` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `ques1`, `name`, `email`, `date`) VALUES
(5, 'How is iiit bhopal?', 'Karun Choudhary', 'karunchoudhary2000@gmail.com', '2021-04-13'),
(6, 'WHEN IIIT BHOPAL IS STARTED?', 'Ashutosh gupta', 'aksdmklsdm@com', '2021-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `NAME` varchar(256) NOT NULL,
  `SCHOLAR` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `PHONE` varchar(10) NOT NULL,
  `EMAIL` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`NAME`, `SCHOLAR`, `DOB`, `PHONE`, `EMAIL`) VALUES
('Karun Choudhary', '18U02038', '2021-04-08', '+917060491', 'karunchoudhary2000@gmail.com'),
('HARSH gupta', '18U02042', '2021-04-23', '+917060491', 'Harshgupta@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `scholar` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `scholar`, `name`) VALUES
(1, '18U02038', '1234567', '18U02038', 'Karun Choudhary'),
(2, '18U02042', '2345678', '18U02042', 'Harsh gupta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image_text` (`image_text`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`SCHOLAR`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
