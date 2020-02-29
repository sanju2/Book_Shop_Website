-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 09:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`) VALUES
(20, 'Sanju', 'Sanjeewa', 'lsanjeewa18@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `auther`
--

CREATE TABLE `auther` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auther`
--

INSERT INTO `auther` (`id`, `fname`, `lname`, `email`) VALUES
(20, 'Supun', 'Priyadarshana', 'supuna@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `path` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `image`, `price`, `path`) VALUES
(7, 'PHP Book', 'php.jpg', 590.00, 'Uploads/php.jpg'),
(8, 'Java Book', 'javabook.jpg', 890.00, 'Uploads/javabook.jpg'),
(9, 'laravel Book', 'laravel.jpg', 1020.00, 'Uploads/laravel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `email`) VALUES
(77, 'Lasantha', 'Sanjeewa', 'lsanjeewa947@gmail.com'),
(78, 'Niwanthi', 'Dilu', 'niwanthi1018@gmail.com'),
(79, 'Sanjeewa', 'silva', 'niwaumee@gmail.com'),
(80, 'lasantha', 'sanju', 'lsanjeewa947@gmail.com'),
(81, 'gihani', 'wasana', 'gihani@gmail.com'),
(82, 'lasantha', 'sanjeewa', 'lsanjeewa947@gmail.com.com'),
(83, 'niwanthi', 'dilupama', 'niwa1018@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `path`) VALUES
(1, 'JavaTheCompleteReference', 'documents/JavaTheCompleteReference.pdf'),
(2, 'Beginning PHP 5.3', 'documents/PHP.pdf'),
(3, 'C+ Notes For Professionals', 'documents/CPlusPlusNotesForProfessionals.pdf'),
(4, 'Software Project Management', 'documents/M.C.A (Sem - IV) Paper - Software Project Management.pdf'),
(5, 'python_book_01', 'documents/python_book_01.pdf'),
(15, 'big', 'documents/bgtspeech2016S.pdf'),
(16, 'bigspeech', 'documents/bgtspeech2016S.pdf'),
(17, 'python new book', 'documents/python_book_01.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'lasantha', 'lsanjeewa18@gmail.com', 'itis a good web site'),
(2, 'niwanthi', 'niwanthi1018@gmail.com', 'hello am niwa umeesfsfsf'),
(3, 'lasantha', 'lsanjeewa18@gmail.com', 'dadasdadadSDSsd'),
(4, 'ssdffsf', 'lsanjeewa18@gmail.com', 'cacaaa'),
(5, 'fsdfa', 'lsanjeewa18@gmail.com', 'fsdfqdWQDWQDQ'),
(6, 'loyya', 'lsanjeewa947@gmail.com', 'fafadasdasdada'),
(7, 'lasantha', 'sanjeewa', 'Your feedback succesfully sent'),
(8, 'hdhaj', 'jhdjhfhj@gmail.com', 'hudhidiuqwdiudouiqwoudwqdeqwe'),
(9, 'hdhaj', 'jhdjhfhj@gmail.com', 'hudhidiuqwdiudouiqwoudwqdeqwe'),
(10, 'niwanthi', 'niwaumee@gmail.com', 'Amazing web site'),
(11, 'chamantha', 'niwaumee@gmail.com', 'dwdwydwygidgydde'),
(12, 'asdad', 'sdsdsdd', 'ddada');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(10) NOT NULL,
  `bookname` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `image` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `bookname`, `author`, `price`, `image`) VALUES
(6, 'test', 'dsfsd', '5000', 'image/red-product-tag-2519790.jpg'),
(8, 'new test', 'dsfsd', '100', 'image/black-man-reading-a-newspaper-3473492.jpg'),
(9, 'ree wela', 'dsfsd', '5000', 'image/man-wearing-pink-polo-shirt-with-text-overlay-1114376.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userId` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userId`, `username`, `password`, `usertype`, `status`) VALUES
(0, 'Sanju2', '123456', 'admin', 'active'),
(0, 'lasantha', '1996', 'customer', 'active'),
(0, 'supun', '123456', 'Auther', 'active'),
(0, 'umee', '1995', 'customer', 'active'),
(0, 'sanju', '1234', 'customer', 'pending'),
(0, 'gihani', '1234', 'customer', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `price`) VALUES
(61, 'PHP Book', '2999.00'),
(60, 'PHP Book', '2999.00'),
(62, 'PHP Book', '2999.00'),
(63, 'PHP Book', '590.00'),
(64, 'Java Book', '890.00'),
(65, 'laravel Book', '1020.00'),
(66, 'laravel Book', '1020.00'),
(67, 'Java Book', '890.00'),
(68, 'PHP Book', '590.00'),
(69, 'PHP Book', '590.00'),
(70, 'PHP Book', '590.00'),
(71, 'PHP Book', '590.00'),
(72, 'PHP Book', '590.00'),
(73, 'PHP Book', '590.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auther`
--
ALTER TABLE `auther`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `auther`
--
ALTER TABLE `auther`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
