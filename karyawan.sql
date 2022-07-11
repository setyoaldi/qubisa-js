-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 08:43 AM
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
  `jhk` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `jabatan`, `gaji`, `jhk`) VALUES
('k01', 'Alfreds Futterkiste', 'Germany', 'CEO', 40000000, 20),
('k02', 'Fransisco Chang', 'Singapore', 'General Manager', 25000000, 20),
('k03', 'Carrol Denvers', 'India', 'Secretary', 7500000, 20),
('k04', 'Henry Cavil', 'Mexico', 'Manager', 17500000, 20),
('k05', 'Ben Affleck', 'USA', 'Manager', 17500000, 20),
('k06', 'Kamala Khan', 'India', 'Asistant Manager', 8000000, 20),
('k07', 'Pepper Pots', 'Canada', 'Asistant Manager', 8000000, 20),
('k08', 'Mark Ruffalo', 'Canada', 'Staff', 10000000, 20),
('k09', 'Jason Momoa', 'Canada', 'Staff', 10000000, 20),
('k10', 'Don Cheadle', 'USA', 'Staff', 10000000, 20),
('k11', 'Jeremy Renner', 'USA', 'Staff', 10000000, 20),
('k12', 'Tony Dalton', 'USA', 'Staff', 10000000, 20),
('k13', 'Florence Pugh', 'USA', 'Staff', 10000000, 20),
('k14', 'Vera Farmiga', 'USA', 'Staff', 10000000, 20),
('k15', 'Alaqua Cox', 'Canada', 'Staff', 10000000, 20),
('k16', 'Paul Rudd', 'Canada', 'Staff', 10000000, 20),
('k17', 'Josh Brolin', 'Canada', 'Staff', 10000000, 20),
('k18', 'Karen Gillan', 'Scotland', 'Staff', 10000000, 20),
('k19', 'Brie Larson', 'USA', 'Staff', 10000000, 20),
('k20', 'Gwyneth Paltrow', 'USA', 'Staff', 10000000, 20),
('k21', 'Lexi Rabe', 'USA', 'Staff', 10000000, 20),
('k22', 'Hiroyuki Sanada', 'Japan', 'Staff', 10000000, 20),
('k23', 'Benedict Wong', 'England', 'Staff', 10000000, 20),
('k24', 'Tom Vaughan-Lawlor', 'Ireland', 'Staff', 10000000, 20),
('k25', 'Michael Douglas', 'USA', 'Staff', 10000000, 20),
('k26', 'Frank Grillo', 'USA', 'Staff', 10000000, 20),
('k27', 'Sebastian Stan', 'Romania', 'Staff', 10000000, 20),
('k28', 'Paijo', 'Bangladesh', 'Office Boy', 3000000, 20),
('k29', 'Budi', 'NAD', 'Office Boy', 3500000, 20),
('k30', 'Parman', 'Solo', 'Office Boy', 3500000, 20);

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
