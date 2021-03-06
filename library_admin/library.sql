-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 07:27 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first`, `last`, `username`, `password`, `email`, `contact`, `pic`) VALUES
(1, 'Mr.', 'Abdul', 'Hamid', '123456', 'mr.hamid@gmail.com', '12345678', 'p.jpg'),
(4, 'Nayem', 'Uddin', 'nayem', '654321', 'nayemfarhan6246@gmail.com', '01626546029', 'nayem.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `edition`, `status`, `quantity`, `department`) VALUES
(1, 'Principal of electronics', 'V.K. Mehta, Rohit Mehta', '3rd', 'Available', 3, 'EEE'),
(2, 'The Complete Reference C++', 'Herbert Schildt', '4th', 'Available', 4, 'CSE'),
(3, 'Data Structure', 'Seymour Lipschutz', '4th', 'Available', 4, 'ECE'),
(4, 'Computer application', 'Altaf Hossain', '3rd', 'Available', 15, 'CSE'),
(5, 'Graphics Design-I', 'Sirajul Islam', '4th', 'Available', 15, 'Computer'),
(6, 'Programming Essentials', 'Eng. Mahbubur Rahman', '6th', 'Available', 20, 'CSE'),
(7, 'Web Design', 'Hasin Hayder', '5th', 'Available', 30, 'Computer'),
(8, 'Object-Oriented Programming', 'Bulbul Ahmed', '2nd', 'Available', 15, 'CSE'),
(9, 'Electrical engineering fundamentals', 'Abul Basar', '4th', 'Available', 20, 'ET'),
(10, 'The principle of Digital Electronics', 'Eng.Riaj Salman', '3rd', 'Available', 30, 'ENT'),
(11, 'Electronic Devices and Circuits', 'Eng.Saifujjaman ', '6th', 'Available', 20, 'ENT'),
(12, 'Network Administration & Services', 'Obaydullah ', '3rd', 'Available', 8, 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`) VALUES
(5, 'Promi', 'hello!'),
(16, 'Afifa', 'There is no books of ETE department.When will it be available?'),
(17, 'Admin', 'Hi! which book do you need Afifa. Please let us know.'),
(18, '', 'hello! '),
(19, 'Promi', 'Hi! which book do you need Afifa. Please let us know.'),
(20, '', 'tyrty');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `returned` varchar(100) NOT NULL,
  `day` int(50) NOT NULL,
  `fine` double NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`username`, `bid`, `returned`, `day`, `fine`, `status`) VALUES
('Promi', 1, '2019-05-21', 31, 3.1, 'not paid'),
('Afifa', 1, '2019-05-21', 1, 0.1, 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `bid`, `approve`, `issue`, `return`) VALUES
('Promi', 3, '<p style=\"color:yellow; background-color:red;\">EXPIRED</p>', '2019-04-22', '2019-05-16'),
('Promi', 1, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2019-03-20', '2019-04-20'),
('Promi', 2, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2019-01-30', '2019-02-28'),
('Afifa', 1, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2019-04-20', '2019-05-20'),
('Afifa', 2, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2019-02-20', '2019-02-10'),
('Afifa', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `sender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `username`, `message`, `status`, `sender`) VALUES
(3, 'mahbub', 'hello', 'yes', 'student'),
(4, 'mahbub', 'hello how are you', 'yes', 'student'),
(5, 'mahbub', 'hey', 'yes', 'student'),
(6, 'nayem', 'hii', 'yes', 'admin'),
(7, 'nayem', 'hello', 'yes', 'student'),
(8, 'nayem', 'hello', 'yes', 'admin'),
(9, 'nayem', 'how are you', 'yes', 'admin'),
(10, 'nayem', 'hello', 'yes', 'admin'),
(11, 'nayem', 'hello', 'yes', 'admin'),
(12, 'nayem', 'how are you', 'yes', 'admin'),
(13, 'nayem', 'assalamualaikum', 'yes', 'student'),
(14, 'rubel', 'ki obc ta nayem vai ', 'yes', 'student'),
(15, 'rubel', 'aci alhamdulillah', 'yes', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first`, `last`, `username`, `password`, `roll`, `email`, `contact`, `pic`) VALUES
('Nayem', 'Uddin', 'nayem', '123456', 462001, 'nayemuddin058@gmail.com', '01623546029', 'Nayem Uddin.(LPI).jpg'),
('Salauddin', 'Ahmed', 'salauddin', '123456', 462002, 'salauddin@gmail.com', '01788754545', 'p.jpg'),
('Mahbub', 'Hossain', 'mahbub', '654321', 462003, 'mahbub@gmail.com', '01828682266', '9.png'),
('Soikot', 'Miya', 'soikot', '123', 462004, 'soikot@gmail.com', '01678226654', 'p.jpg'),
('Rubel', 'Mahmud', 'rubel', '987654', 462005, 'rubelmahamud9997@gmail.com', '01678226654', 'p.jpg'),
('Rony ', 'Hossain', 'rony', '654321', 462006, 'rony@gmail.com', '01754652365', 'p.jpg'),
('Araf', 'Abdullah', 'araf', '654321', 462007, 'araf@gmail.com', '01654623265', 'p.jpg'),
('Farhana', 'Mily', 'mily', '0258', 462008, 'farhana@gmail.com', '01565329865', 'p.jpg'),
('Afifa', 'Tarannom', 'Afifa', '123456', 462009, 'afifa@gmail.com', '01489653265', 'p.jpg'),
('Rakib ', 'sahriar', 'rakib', '123', 462010, 'rakib@gmail.com', '01854218765', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
