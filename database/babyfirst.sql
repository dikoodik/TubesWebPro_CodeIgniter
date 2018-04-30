-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 02:51 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babyfirst`
--

-- --------------------------------------------------------

--
-- Table structure for table `carseat`
--

CREATE TABLE `carseat` (
  `id_carseat` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `carseat_photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carseat`
--

INSERT INTO `carseat` (`id_carseat`, `nama_produk`, `summary`, `price`, `quantity`, `carseat_photo`) VALUES
('c1', 'Dark Grey Carseat', 'tes tes 1', '5550000', '1', '1.jpg'),
('c12', 'Dark Grey Carseat', 'tes tes 1', '5550000', '1', '2.jpg'),
('c2', 'Tes 2', 'tes tes 1', '5550000', '1', '3.jpg'),
('c2323', 'Dark Grey Carseataaaa', 'tes tes 1', '5550000', '1', '4.jpg'),
('c2323222', 'Dark Grey Carseatdadasdas', 'tes tes 1', '5550000', '1', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `id_fashion` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `fashion_photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg',
  `level` enum('admin','member','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `alamat`, `photo`, `level`) VALUES
(2, 'dikoodik', 'c@gmail.com', 'dikoodik', 'Riandi Kartiko', '', 'default.svg', 'admin'),
(3, 'diko', 'diko@mail.com', '$2y$10$rcMshms8bvCUqVgxZp9fsebqiAZ/9is/DWt86QSFJQ3qbKr08TH5i', 'Riandi Kartiko', 'Komp. Reni Jaya Af-1/11 Pamulang Bart, Pamulang, Banten', 'IMG_8191.JPG', 'admin'),
(4, 'okid', 'okid@mail.com', 'okid', 'diko', 'dimana', 'default.svg', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carseat`
--
ALTER TABLE `carseat`
  ADD PRIMARY KEY (`id_carseat`);

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
