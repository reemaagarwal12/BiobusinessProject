-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 02:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `Blood_group` varchar(4) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Hospital` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`Blood_group`, `Cost`, `Quantity`, `City`, `Hospital`) VALUES
('AB+', 1100, 180, 'Bangalore', 'Apollo'),
('AB-', 1500, 300, 'Delhi', 'AIIMS'),
('O-', 1600, 100, 'Delhi', 'Fortis'),
('O+', 1000, 200, 'Hyderabad', 'Apollo'),
('A+', 900, 500, 'Kolkata', 'CMC'),
('A-', 1400, 300, 'Mumbai', 'Nanavati'),
('B+', 800, 1000, 'Mumbai', 'Tata Memorial'),
('B-', 1300, 1100, 'Pune', 'AFMC');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Blood_group` varchar(7) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `City` varchar(25) NOT NULL,
  `Contact_No` varchar(10) NOT NULL,
  `Health_Issues` varchar(30) DEFAULT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`Blood_group`, `Name`, `DOB`, `City`, `Contact_No`, `Health_Issues`, `Quantity`) VALUES
('7943', 'krnow]', '2000-01-26', 'nklknowrK', '@?>=<;?<>C', 'vvx', 450),
('6643', 'kr}K', '2000-02-04', 'o|yvvo€', ':CBA@?>=<;', 'oxyx', 100),
('7943', 'or|wZ', '1985-12-17', 's€}zou|oP', 'A@BFEBDEFG', '', 350),
('6545', 'o|pnW', '1972-03-11', '„|{xp‚Y', 'BFDC@=B?EF', 'r{|{', 300),
('656643', 's|w{oX', '1987-04-23', 's€}zzsd', '?>E>B@EFFG', 'oqw‚owqa', 180),
('6545', 's}{€„s‚', '2001-01-01', 's„svvsˆ', 'FJDKDBBFJI', 'w€€', 100),
('7943', 'tŒ|…c', '1999-12-25', '…ˆƒzta', 'EDGJKKJJJL', '‚', 430),
('656645', 'xƒu|y^', '1985-03-13', 'yqr}…]', 'EEDIHHDFGI', '', 380),
('7943', '[ZV[D', '2000-02-16', 'da[^Si9', '&%$#\"$+)%*', 'S[bak?', 80),
('6645', '_WdB', '1983-01-14', '[Z^W6', '$)(%#++\"++', 'dWV^gaZE`Wlad8', 360),
('7943', '~|oly\\', '1986-05-13', 'nklknowrK', ':;?>BCC<CC', 'oxyX', 450),
('6643', '~‰wo', '1978-06-12', 'wŠw‚…a', 'FLOMJIMLOO', '‰{‹‰‰6…„', 270),
('6543', '†nU', '1990-09-21', 'yn}|uO', 'F>@==BEFFF', 'zryo|]-nrU', 200),
('7945', '‡€o[', '1989-11-03', 'wo||svQ', '@EAGBED@GG', 's|}\\', 400);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('jeet@1400', '$2y$10$apt1gRV85PtWGfS8EOt15uS3Bny.2XZohigQB4/A5UggHBXUdXUwS'),
('meera@1477', '$2y$10$S/KEFYp4ohkqqBMLe9MqrelzlTRi.w5Cl37PohIUPic.HU0wgxspq'),
('meet@1974', '$2y$10$QAWx76dToVGga7Pdu3ahAehu80RE5UkxcJOa.TPn6M3iK/MJUxZRG'),
('nalini@1865', '$2y$10$iozHfp/6CSBvDS1.871GXe1k9IiNteoK8vTVZxx3Q8z2J5oLCusma'),
('neeraj@1339', '$2y$10$d2pPW/vQ8.nmQ3r848Lw9uWkldWowzmuNyw5Ymdba7xH8zFbOkjKa'),
('nora@1555', '$2y$10$511jtsg8jUnb.aMFQKglx.eH1cMBxLxS6C11oLxal8XYJfginmN6q'),
('prabh@1797', '$2y$10$lfSAsObd7BGUsCVBDCyDKOmfem9MvPXaLSQjnKoXVxiTy09cf6b56'),
('radha@1857', '$2y$10$56vGvsJoQMKZ92p07lHdv.grgo8.9uDUU45jOe9axSHNAGrUSyRCO'),
('reema ', '$2y$10$1do0heUyWoAqT.5GrEIZw.Zcbw/iCLZ6GxbPK/YWaHFxAc03lj3Bq'),
('Ridhi', '$2y$10$RSBEN9YP2Bz5pio8XeFD4uP7IgM5.qaDcwAt9fDcCfnDrNrysPkny'),
('siddhi@5491', '$2y$10$cPb2Fxvac1N1VZAXkucLAuZh.mJGAr2U.DNwpfCOM6I60p3gciulq'),
('vish@1672', '$2y$10$kOVVVrDN2RhIvq/03qXTAu0WQ2INZbDLuzFee2e0JQdVCwS62vflG');

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `Blood_group` varchar(4) NOT NULL,
  `Rname` varchar(25) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Age` int(11) NOT NULL,
  `Hospital` varchar(25) NOT NULL,
  `Units_received` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipient`
--

INSERT INTO `recipient` (`Blood_group`, `Rname`, `Gender`, `Age`, `Hospital`, `Units_received`) VALUES
('O+', 'Meera', 'F', 24, 'Lilavati', 450),
('O+', 'Meet', 'M', 57, 'Apollo', 900),
('AB+', 'Nalini', 'F', 65, 'Sanjivani', 1200),
('O-', 'Nora', 'F', 76, 'Sahara', 1100),
('B-', 'Neeraj', 'M', 84, 'Gujarat State', 750),
('A+', 'Jeet', 'M', 87, 'Taravati', 1600),
('O-', 'Vishwanath', 'M', 34, 'Jeevan', 700),
('B+', 'Prabhakar', 'M', 47, 'Malti', 850),
('AB+', 'Siddhi', 'F', 54, 'Hamida', 550),
('A-', 'Radha', 'F', 72, 'Jagannath', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`City`,`Hospital`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`Name`,`DOB`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
