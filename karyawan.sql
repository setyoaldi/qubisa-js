-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 09:47 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `gaji` int(10) NOT NULL,
  `cuti` int(10) NOT NULL,
  `absen` int(10) DEFAULT NULL,
  `sakit` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `jabatan`, `gaji`, `cuti`, `absen`, `sakit`) VALUES
('k01', 'Alfreds Futterkiste', 'Germany', 'CEO', 40000000, 20, 3, NULL),
('k02', 'Fransisco Chang', 'Singapore', 'General Manager', 25000000, 20, NULL, NULL),
('k03', 'Carrol Denvers', 'India', 'Secretary', 7500000, 20, NULL, NULL),
('k04', 'Henry Cavil', 'Mexico', 'Manager', 17500000, 20, NULL, NULL),
('k05', 'Ben Affleck', 'USA', 'Manager', 17500000, 20, NULL, NULL),
('k06', 'Kamala Khan', 'India', 'Asistant Manager', 8000000, 20, NULL, NULL),
('k07', 'Pepper Pots', 'Canada', 'Asistant Manager', 8000000, 20, NULL, NULL),
('k08', 'Mark Ruffalo', 'Canada', 'Staff', 10000000, 20, NULL, NULL),
('k09', 'Jason Momoa', 'Canada', 'Staff', 10000000, 20, NULL, NULL),
('k10', 'Don Cheadle', 'USA', 'Staff', 10000000, 20, NULL, NULL),
('k11', 'Jeremy Renner', 'USA', 'Staff', 10000000, 20, NULL, NULL),
('k12', 'Tony Dalton', 'USA', 'Staff', 10000000, 20, NULL, NULL),
('k13', 'Florence Pugh', 'USA', 'Staff', 10000000, 20, NULL, NULL),
('k14', 'Vera Farmiga', 'USA', 'Staff', 10000000, 20, NULL, NULL),
('k15', 'Alaqua Cox', 'Canada', 'Staff', 10000000, 20, NULL, NULL),
('k16', 'Paul Rudd', 'Canada', 'Staff', 10000000, 20, 8, NULL),
('k17', 'Josh Brolin', 'Canada', 'Staff', 10000000, 20, NULL, NULL),
('k18', 'Karen Gillan', 'Scotland', 'Staff', 10000000, 20, NULL, NULL),
('k19', 'Brie Larson', 'USA', 'Staff', 10000000, 20, NULL, NULL),
('k20', 'Gwyneth Paltrow', 'USA', 'Staff', 10000000, 20, NULL, NULL),
('k21', 'Lexi Rabe', 'USA', 'Staff', 10000000, 20, NULL, NULL),
('k22', 'Hiroyuki Sanada', 'Japan', 'Staff', 10000000, 20, NULL, NULL),
('k23', 'Benedict Wong', 'England', 'Staff', 10000000, 20, NULL, NULL),
('k24', 'Tom Vaughan-Lawlor', 'Ireland', 'Staff', 10000000, 20, NULL, NULL),
('k25', 'Michael Douglas', 'USA', 'Staff', 10000000, 20, NULL, NULL),
('k26', 'Frank Grillo', 'USA', 'Staff', 10000000, 20, NULL, NULL),
('k27', 'Sebastian Stan', 'Romania', 'Staff', 10000000, 20, NULL, NULL),
('k28', 'Paijo', 'Bangladesh', 'Office Boy', 3000000, 20, NULL, NULL),
('k29', 'Budi', 'NAD', 'Office Boy', 3500000, 20, NULL, NULL),
('k30', 'Parman', 'Solo', 'Office Boy', 3500000, 20, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
