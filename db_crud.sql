-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 06:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `name`, `email`, `phone`, `photo`, `address`) VALUES
(1, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/2a91071467.jpeg', '16/6 garden road'),
(2, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/10de79a609.jpeg', '16/6 garden road'),
(3, 'ahmed', 'rabbi1@gmail.com', '22456768799786543', 'upload/a7548b4b57.jpg', 'wer 3r, fgg'),
(4, 'bd', 'admin@gmail.com', '234567', 'upload/cd03973363.jpg', '1323,heh'),
(5, 'Tanvir asd', 'admin@admin.com', '0185343564', 'upload/1369d73992.', '16/6 garden road'),
(6, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/691dff2f3f.', '16/6 garden road'),
(7, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/691dff2f3f.', '16/6 garden road'),
(8, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/19bc8e5ee3.', '16/6 garden road'),
(9, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/f90e3be149.', '16/6 garden road'),
(10, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/f90e3be149.', '16/6 garden road'),
(11, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/f1f9a5e1f3.', '16/6 garden road'),
(12, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/f1f9a5e1f3.', '16/6 garden road'),
(13, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/af09e20917.', '16/6 garden road'),
(14, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/5621f86ce7.', '16/6 garden road'),
(15, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/d99a5c751e.', '16/6 garden road'),
(16, 'Tanvir', 'admin@admin.com', '0185343564', 'upload/07b1a5fd35.', '16/6 garden road'),
(17, 'romes', 'admin@admin.com', '0185343564', 'upload/07ccb66fb1.', 'abc park'),
(18, 'romes', 'admin@admin.com', '0185343564', 'upload/48666e7a0b.', 'abc park'),
(19, 'qerwyhd', 'dwgg45@gmail.com', '0185343564', 'upload/5c3a41357c.jpeg', '626bbdj'),
(20, 'romes', 'admin@admin.com', '0185343564', 'upload/4077d1bba2.jpg', 'abc park'),
(21, 'romes', 'admin@admin.com', '0185343564', 'upload/8b5a0c0610.jpg', 'abc park'),
(22, 'romes', 'admin@admin.com', '0185343564', 'upload/d9c1f0b247.jpg', 'abc park'),
(23, 'wwe', 'wwe@gmail.com', '0172837622', 'upload/75e5612975.jpeg', '234ffgg'),
(24, 'ahmed', 'rabbi1@gmail.com', '22456768799786543', 'upload/f678fade7d.jpg', 'wer 3r, fgg'),
(25, 'ahmed', 'rabbi1@gmail.com', '22456768799786543', 'upload/564966fb11.jpg', 'wer 3r, fgg'),
(26, 'ahmed', 'rabbi1@gmail.com', '22456768799786543', 'upload/c15d05686c.', 'wer 3r, fgg'),
(27, 'ahmed', 'rabbi1@gmail.com', '22456768799786543', 'upload/5fccf4d598.jpeg', 'wer 3r, fgg'),
(28, 'ahmed', 'rabbi1@gmail.com', '22456768799786543', 'upload/e02b58470e.jpeg', 'wer 3r, fgg'),
(29, 'ahmed', 'rabbi1@gmail.com', '22456768799786543', 'upload/2f13cf9ebf.jpeg', 'wer 3r, fgg'),
(30, 'ahmed', 'rabbi1@gmail.com', '22456768799786543', 'upload/e8d5c4c34c.jpg', 'wer 3r, fgg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
