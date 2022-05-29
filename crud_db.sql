-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2022 at 07:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_vaksin`
--

CREATE TABLE `data_vaksin` (
  `id` int(11) NOT NULL,
  `prov` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `faskes_jenis` varchar(100) NOT NULL,
  `faskes_name` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `umur` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_vaksin`
--

INSERT INTO `data_vaksin` (`id`, `prov`, `kab`, `kec`, `faskes_jenis`, `faskes_name`, `nik`, `nama`, `jk`, `umur`, `tgl_lahir`, `no_hp`, `alamat`) VALUES
(1, 'Banten', 'Tangerang Selatan', 'Rawabuntu', '1', 'test', '3412312321312', 'test', 'P', '45', '2022-05-27', '988987123', 'jauh'),
(2, 'Jakarta', 'Tangerang Selatan', 'Rawabuntu', '1', 'test', 'asds', 'asdas', 'L', 'asdas', '2022-05-05', '12321', 'asdasd'),
(7, 'Banten', 'Tangerang Selatan', 'Rawabuntu', '1', 'test', 'asdas', '12321', 'L', 'asdas', '2022-05-12', '123213', 'asdasdsa'),
(8, 'Jakarta', 'Serang', 'Slipi', '3', 'test', '1234123123', 'JOKO', 'L', '23', '2022-05-17', '123123123', 'sini'),
(9, 'Banten', 'Tangerang Selatan', 'Rawabuntu', '2', 'test', 'asdasd', '12312', 'L', 'asdasd', '2022-05-20', '123123', 'asdasd'),
(10, 'Jakarta', 'Tangerang Selatan', 'Pasar Kemis', '1', 'test', '123124123', 'JUKI TEST edited', '', '222', '2022-05-09', '1231241', 'adasdsadsad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `nama`, `no_hp`, `password`) VALUES
(1, 'admin', '081', '0192023a7bbd73250516f069df18b500'),
(2, 'admin2', '082', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_vaksin`
--
ALTER TABLE `data_vaksin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_vaksin`
--
ALTER TABLE `data_vaksin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
