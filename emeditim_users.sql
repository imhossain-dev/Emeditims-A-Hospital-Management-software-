-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2021 at 01:35 AM
-- Server version: 10.3.31-MariaDB-log-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emeditim_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adminName` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `adminName`, `password`) VALUES
(1, 'adib.shahriar@northsouth.edu', 'AdibCSE482', 'cse482adib'),
(2, 'imran.hasan03@northsouth.edu', 'ImranCSE482', 'cse482imran'),
(3, 'saffat@northsouth.edu', 'SaffatCSE482', 'cse482saffat');

-- --------------------------------------------------------

--
-- Table structure for table `doc_register`
--

CREATE TABLE `doc_register` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `age` varchar(10) NOT NULL,
  `medicaldegree` varchar(50) NOT NULL,
  `emg_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_register`
--

INSERT INTO `doc_register` (`first_name`, `last_name`, `password`, `email`, `contact`, `gender`, `age`, `medicaldegree`, `emg_contact`) VALUES
('Tonny', 'Rehnuma', '456', 'rehnumatonny@gmail.com', '01521204602', 'Female', '25', 'hoibo', '01303112529'),
('test', 'user', '1234', 'sharifh530@gmail.com', '01408636637', 'Male', '25', 'MBBS', '01726730999'),
('dr', 'Arnob', '1234', 'Imranhasan49.rt@gmail.com', '01686499081', 'Male', '30', 'mbbs', '01686119213'),
('Sazzad', 'Hossain', '1234', 'codemen.sazzad@gmail.com', '01408636637', 'Male', '35', 'MBBS', '01726730999'),
('Foysal', 'Hossain', '2020', 'foysallnirob23@gmail.com', '01716344419', 'Male', '25', 'MBBS', '01686199213'),
('emedi', 'times', '123456', 'Imranhasan49.rt@gmail.com', '01515604269', 'Male', '26', 'mbbs', '01726730333'),
('Shahadat', 'Hossain', '1234', 'sharifh530@gmail.com', '01710853807', 'Male', '35', 'MBBS', '01726730999'),
('adib', '', '', '', '', 'Male', '', '', ''),
('Imposter', 'adib', '123456', 'adib@gamil.com', '01552359479', 'Male', '25', 'among us', '0111111'),
('U', '', '', '', '', 'Male', '', '', ''),
('XXV4V3ZNMNIJGH604QD6AVXX http:', 'XXV4V3ZNMNIJGH604QD6AVXX http:', 'http://mail.com/777 XXV4V3ZNMN', 'carillofrancoise.23455645@gmai', 'carillofrancois', '1', '26', '', 'carillofrancois'),
('XXVF6GMO6V9KAR9WL06XZVXX http:', 'XXVF6GMO6V9KAR9WL06XZVXX http:', 'http://mail.com/008 XXVF6GMO6V', 'waggamantitus18157413@gmail.co', 'waggamantitus18', '1', '37', '', 'waggamantitus18'),
('SIXSKDDSJYXO0I6U8BZEPXIS http:', 'SIXSKDDSJYXO0I6U8BZEPXIS http:', 'http://mail.com/708 SIXSKDDSJY', 'elainewilde29174400@gmail.com', 'elainewilde2917', '1', '42', '', 'elainewilde2917'),
('arnob', 'juckto', '654321', 'b@a.com', '654321', 'Male', '50', 'mbbs', '4321'),
('ninad', 'rafi', '1234156', 'ninad@gmail.com', '01515151515', 'Male', '50', 'mbbs', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `hos_register`
--

CREATE TABLE `hos_register` (
  `hospital_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `emg_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hos_register`
--

INSERT INTO `hos_register` (`hospital_name`, `password`, `email`, `contact`, `address`, `emg_contact`) VALUES
('', '123', 'www.northsouth.edu', '123456', 'bashundhora', '456789');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `bill` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pat_register`
--

CREATE TABLE `pat_register` (
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `age` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `emg_contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_register`
--

INSERT INTO `pat_register` (`first_name`, `last_name`, `password`, `email`, `contact`, `gender`, `age`, `weight`, `emg_contact`) VALUES
('Sazzad', 'Hossain', '1234', 'sharifh530@gmail.com', '01680138471', 'Male', '25', '62', '01726730999'),
('Imarn', 'hasan', '123', 'Imranhasan49.rt@gmail.com', '01687977344', 'Male', '25', '80', '01303112529'),
('Foysal', 'Hossain', '2020', 'foysallnirob23@gmail.com', '01300681001', 'Male', '24', '65', '01716344419'),
('Saffat', 'Al Amin', '1234', 'frost1196@gmail.com', '01303112529', 'Male', '25', '72', '01687977344'),
('Foysal', 'Hossain', '4545', 'foysallnirob23@gmail.com', '01300681001', 'Male', '26', '63', '01716344419'),
('Imran', 'Arnob', '1234', 'Imranhasan@yahoo.com', '01515604269', 'Male', '25', '81', '01686499081'),
('Rehnuma', 'Tonny', '171095rt', 'rehnumatonny@gmail.com', '01521204602', 'Female', '24', '45', '01515604269'),
('Rafi', 'Mohammad', '18katrina82', 'rafimohammad.one@gmail.com', '01847356023', 'Male', '38', '', '01786491298'),
('Imtiaz ', 'Ahmed', '12345678', '12345678', '01743306033', 'Male', '24', '58', '01743306033 '),
('adib', 'sha', '123456', 'adib@gamil.ocm', '015151515', 'Male', '25', '75', '0211654654'),
('player', 'working', '01234', 'player@gmail.com', '123456789', 'Male', '25', '60', '124567'),
('juckto', 'arnob', '123456', 'a@b.com', '123456', 'Male', '26', '72', '1234'),
('your', 'name', 'your', 'www.you.com', '123456', 'Male', '25', '65', '789'),
('Saffst', 'Al Amin', '1234', '123@gmail.com', '01687977344', 'Male', '24', '70', '01303112529');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `patient` varchar(30) NOT NULL,
  `disease` varchar(30) NOT NULL,
  `medicine` varchar(30) NOT NULL,
  `durability` varchar(30) NOT NULL,
  `daily` varchar(30) NOT NULL,
  `take` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`patient`, `disease`, `medicine`, `durability`, `daily`, `take`) VALUES
('sharifh530@gmail.com', '', 'Napa', 'One Week', 'Morning', 'After Food'),
('sharifh530@gmail.com', 'Fever', 'Napa', 'One Week', 'Morning', 'After Food'),
('sharifh530@gmail.com', 'feaber', 'napa', 'One Week', 'Morning', 'After Food'),
('Imranhasan@yahoo.com', 'fever', 'prera', 'Two Week', 'Morning and Night', 'After Food'),
('rehnumatonny@gmail.com', 'fever', 'paracitamol', 'Two Week', 'Morning and Night', 'After Food'),
('Imranhasan49.rt@gmail.com', 'Fever', 'Napa', 'One Week', 'Morning', 'After Food'),
('rehnumatonny@gmail.com', 'fever', 'paracitamol', 'One Week', 'Morning and Night', 'After Food'),
('a@b.com', 'ads', 'saf', 'Two Week', 'Night', 'Before Food'),
('sharifh530@gmail.com', '', '', 'One Week', 'Morning', 'After Food'),
('adib@gamil.ocm', 'sick', 'pera', 'One Week', 'Morning', 'After Food'),
('123@gmail.com', 'horny', 'birthcontroll', 'One Week', 'Morning and Night', 'After Food'),
('123@gmail.com', 'dead', 'ddkk', 'Three Week', 'Night', 'After Food'),
('rehnumatonny@gmail.com', 'del', 'dl', 'One Week', 'Morning', 'After Food'),
('rehnumatonny@gmail.com', '', '', 'One Week', 'Morning', 'After Food'),
('rehnumatonny@gmail.com', '', '', 'One Week', 'Morning', 'After Food'),
('player@gmail.com', 'sick', 'pera', 'Two Week', 'Morning and Night', 'After Food');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`first_name`, `last_name`, `password`, `email`, `contact`, `gender`) VALUES
('arnob', 'mota', '1234', 'imranhasan49.rt@gmail.com', '046451', 'Female'),
('foysal', 'hosain', '101010', 'risharahman143@yahoo.com', '01686199213', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `contact`) VALUES
(1, 'Saffat', 'safu', '123', '1234@gmail.com', '98977');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
