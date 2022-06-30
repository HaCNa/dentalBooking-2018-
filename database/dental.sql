-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 10:59 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(10) NOT NULL,
  `admin_password` varchar(10) NOT NULL,
  `admin_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_name`) VALUES
(1, 'admin', 'password', 'Admin 1');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(30) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `service_price` int(30) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `User_ID` int(30) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_date`, `booking_time`, `service_name`, `service_price`, `doctor_name`, `User_ID`, `Name`) VALUES
(123, '2018-12-20', '09:00:00', 'Fillings', 50, 'Dr. Adeeb bin Taahir', 30, 'Muhd Ai Bin Kil'),
(124, '2018-12-20', '09:00:00', 'Scaling / Dental Cleaning', 50, 'Dr. Adeeb bin Taahir', 30, 'Muhd Ai Bin Kil'),
(125, '2018-12-31', '09:00:00', 'Teeth Whitening', 700, 'Dr. Mariah binti Shuib', 30, 'Muhd Ai Bin Kil'),
(126, '2018-12-22', '09:00:00', 'Fillings', 50, 'Dr. Chong Weh Feng', 30, 'Muhd Ai Bin Kil'),
(127, '2018-12-31', '09:00:00', 'Fillings', 50, 'Dr. Abdul Hai bin Amru', 30, 'Muhd Ai Bin Kil'),
(128, '2018-12-31', '12:00:00', 'Teeth Whitening', 700, 'Dr. Adeeb bin Taahir', 30, 'Muhd Ai Bin Kil'),
(129, '2018-12-31', '15:00:00', 'Scaling / Dental Cleaning', 50, 'Dr. Abdul Hai bin Amru', 30, 'Muhd Ai Bin Kil'),
(130, '2018-12-31', '15:00:00', 'Teeth Whitening', 700, 'Dr. Abdul Hai bin Amru', 29, 'Nur Hana Binti Hanan'),
(134, '2018-12-20', '09:00:00', 'Scaling / Dental Cleaning', 50, 'Dr. Abdul Hai bin Amru', 29, 'Nur Hana Binti Hanan'),
(135, '2019-01-05', '15:00:00', 'Dental Complete Exams', 35, 'Dr. Chong Weh Feng', 31, 'Fazliana Binti Ruslan'),
(136, '2018-12-31', '09:00:00', 'Wisdom Tooth', 130, 'Dr. Adeeb bin Taahir', 31, 'Fazliana Binti Ruslan'),
(137, '2019-01-08', '11:00:00', 'Dental Complete Exams', 35, 'Dr. Mariah binti Shuib', 32, 'Faqihah'),
(138, '2019-01-16', '15:00:00', 'Teeth Whitening', 700, 'Dr. Chong Weh Feng', 32, 'Faqihah'),
(139, '2018-12-26', '16:00:00', 'Dental Complete Exams', 35, 'Dr. Mariah binti Shuib', 33, 'Farah'),
(140, '2018-12-28', '17:00:00', 'Teeth Whitening', 700, 'Dr. Chong Weh Feng', 33, 'Farah'),
(141, '2018-12-27', '11:00:00', 'Dental Complete Exams', 35, 'Dr. Chong Weh Feng', 34, 'Sarah'),
(143, '2018-12-31', '15:00:00', 'Wisdom Tooth', 130, 'Dr. Abdul Hai bin Amru', 41, 'Anis'),
(145, '2019-01-25', '09:00:00', 'Dental Complete Exams', 35, 'Dr. Adeeb bin Taahir', 31, 'Fazliana Binti Ruslan'),
(146, '2019-02-02', '16:00:00', 'Dental Complete Exams', 35, 'Dr. Chong Weh Feng', 31, 'Fazliana Binti Ruslan');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(30) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `doctor_contact` varchar(20) NOT NULL,
  `doctor_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `doctor_name`, `doctor_contact`, `doctor_desc`) VALUES
(5, 'Dr. Mariah binti Shuib', '010-29483367', 'She graduated from University of Malaya (UM) with a doctoral degree in dental medicine.'),
(6, 'Dr. Chong Weh Feng', '012-55428976', 'She has a five years clinical experience as a dentist.\r\nShe was graduated from University of Japan with a degree in orthodontics.'),
(8, 'Dr. Abdul Hai bin Amru', '013-11233727', 'He graduated from International Islamic University Malaysia (IIUM) in bachelor degree of dentistry.'),
(9, 'Dr. Adeeb bin Taahir', '019-22837743', 'He graduated from National University of Malaysia (UKM) in bachelor degree of dentistry.');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `service_desc` varchar(500) NOT NULL,
  `service_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_desc`, `service_price`) VALUES
(7, 'Wisdom Tooth', 'Wisdom tooth extractions are a fairly common procedure. Wisdom teeth often cause problems as they are trying to protrude through the gums. When a wisdom tooth is impacted, it means the tooth is coming in at an angle and not straight through the gum line. This can cause pain, the tooth can come in unevenly, or the tooth may only emerge partially. ', 130),
(9, 'Scaling / Dental Cleaning', 'The objective for scaling is to remove dental plaque and calculus (tartar), which house bacteria that release toxins which cause inflammation to the gum tissue and surrounding bone.', 50),
(11, 'Teeth Whitening', 'Overtime, your teeth can become discolored and the enamel breaks down. In order to restore your teeth to their original state, you may think of looking into teeth whitening services.', 700),
(12, 'Dental Complete Exams', '	A Complete Oral Exam should be performed by your dentist and dental hygienist every three to five years depending on your oral health.During a dental exam, the dentist or hygienist will clean your teeth and check for cavities and gum disease. The dentist or hygienist will also evaluate your risk of developing other oral health problems. ', 35),
(13, 'Fillings', 'By closing off spaces where bacteria can enter, a filling also helps prevent further decay. Materials used for fillings include gold, porcelain, a composite resin (tooth-colored fillings), and an amalgam (an alloy of mercury, silver, copper, tin and sometimes zinc).', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(30) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `IC` varchar(14) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Age` int(10) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Username`, `Name`, `IC`, `Password`, `Age`, `Contact`, `Address`) VALUES
(29, 'Hana', 'Nur Hana Binti Hanan', '980621-04-8846', 'hana', 20, '014-22388943', 'Taman Seri Jaya'),
(30, 'aikil', 'Muhd Ai Bin Kil', '981201-01-8833', 'aikil8', 20, '011-2349185', 'Taman Indah Jaya'),
(31, 'fzlianaa', 'Fazliana Binti Ruslan', '980318-38-5100', 'fazzy', 20, '0123456789', 'Taman Indah Seri, Durian Tunggal'),
(32, 'qiahahaha8', 'Faqihah', '980108-38-7568', 'qiah', 20, '011-133299857', 'Taman Batu 8'),
(33, 'fafau', 'Farah', '980402-02-5666', 'farah', 20, '013-2249123', 'Taman Sungai Jauh'),
(34, 'sarah', 'Sarah', '880404-04-5894', 'sarah', 30, '0111-23354574', 'Taman Setia Rambai'),
(39, 'mai', 'Maimunah Binti Hairun', '990123045884', 'maimunah', 19, '011-23456789', 'Taman Rambai Jaya'),
(40, 'siti', 'Siti Nurhalizah', '980121045894', '123456', 20, '011-2349184', 'Batu 8'),
(41, 'anis', 'Anis', '980217045258', '123456', 20, '011-12348756', 'Kem Terendak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
