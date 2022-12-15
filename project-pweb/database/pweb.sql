-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 06:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `trx`
--

CREATE TABLE `trx` (
  `id` int(11) NOT NULL,
  `berat` float NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(100) DEFAULT 'belum dikerjakan',
  `dikerjakan_oleh` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trx`
--

INSERT INTO `trx` (`id`, `berat`, `nama`, `tipe`, `harga`, `status`, `dikerjakan_oleh`) VALUES
(6, 2, 'tatangg', 'cucian basah', 10000, 'selesai', 1),
(7, 2, 'tatting', 'cucian basah', 10000, 'selesai', 1),
(8, 12, 'yoga', 'cucian kering', 84000, 'selesai', 8),
(9, 12, 'yoga', 'cucian kering', 84000, 'selesai', 8),
(10, 2, 'bambang', 'cucian kering', 14000, 'on progress', 8),
(11, 1, 'tatangg', 'cucian basah', 5000, 'selesai', 1),
(12, 12, 'toting', 'cucian basah', 60000, 'selesai', 1),
(13, 15, 'surahman', 'cucian kering', 105000, 'selesai', 1),
(14, 15, 'surahman', 'cucian kering', 105000, 'selesai', 1),
(15, 15, 'surahman', 'cucian kering', 105000, 'selesai', 1),
(16, 12, 'toting', 'cucian basah', 60000, 'on progress', 8),
(17, 2, 'angga', 'cucian kering', 14000, 'on progress', 8),
(18, 1, 'totong', 'cucian basah', 5000, 'on progress', 8),
(19, 50, 'sultan arab', 'cucian basah', 250000, 'selesai', 8),
(20, 1, 'aris tampan', 'cucian kering', 7000, 'on progress', 11),
(21, 20, 'somad', 'cucian kering', 140000, 'on progress', 8),
(22, 30, 'mamad', 'cucian basah', 150000, 'selesai', 8),
(23, 1, 'Anggita', 'cucian kering', 8750, 'on progress', 8),
(24, 20, 'gigolo', 'cucian kering', 140000, 'belum dikerjakan', 1),
(25, 1, 'Sasa', 'cucian basah', 5000, 'belum dikerjakan', 1),
(26, 3, 'Sinta', 'cucian kering', 21000, 'belum dikerjakan', 1),
(27, 2, 'Ika', 'cucian kering', 10500, 'belum dikerjakan', 1),
(28, 2, 'Susi', 'cucian basah', 7500, 'belum dikerjakan', 1),
(29, 12, 'ariz jr', 'cucian kering', 84000, 'belum dikerjakan', 1),
(30, 2, 'Uum', 'cucian basah', 10000, 'belum dikerjakan', 1),
(31, 2, 'mukidi', 'cucian basah', 8000, 'belum dikerjakan', 1),
(32, 1.75, 'Tita', 'cucian kering', 12250, 'belum dikerjakan', 1),
(33, 1.75, 'Sisi', 'cucian basah', 8750, 'belum dikerjakan', 1),
(34, 1.25, 'Jeno', 'cucian basah', 6250, 'belum dikerjakan', 1),
(35, 2.25, 'Kai', 'cucian kering', 15750, 'belum dikerjakan', 1),
(36, 1.5, 'Jeffry', 'cucian basah', 7500, 'belum dikerjakan', 1),
(37, 9.5, 'Jennie', 'cucian basah', 47500, 'belum dikerjakan', 1),
(38, 8, 'Krystal', 'cucian kering', 56000, 'belum dikerjakan', 1),
(39, 1.75, 'yerem', 'cucian basah', 8750, 'belum dikerjakan', 1),
(40, 4, 'Azalia', 'cucian basah', 20000, 'belum dikerjakan', 1),
(41, 5, 'Restu', 'cucian basah', 25000, 'belum dikerjakan', 1),
(42, 3.25, 'Tri', 'cucian kering', 22750, 'belum dikerjakan', 1),
(43, 4.5, 'Budi', 'cucian basah', 22500, 'belum dikerjakan', 1),
(44, 4.75, 'Utami', 'cucian kering', 33250, 'belum dikerjakan', 1),
(45, 1, 'Hasanah', 'cucian basah', 5000, 'belum dikerjakan', 1),
(46, 5.5, 'Mustika', 'cucian basah', 27500, 'belum dikerjakan', 1),
(47, 6, 'Fitrianto', 'cucian basah', 30000, 'belum dikerjakan', 1),
(48, 6.25, 'Rian', 'cucian kering', 43750, 'belum dikerjakan', 1),
(49, 7, 'Nisa', 'cucian basah', 35000, 'belum dikerjakan', 1),
(50, 3.5, 'Lutfi', 'cucian kering', 24500, 'belum dikerjakan', 1),
(51, 8.5, 'Risma', 'cucian basah', 42500, 'belum dikerjakan', 1),
(52, 2, 'Wasana', 'cucian kering', 14000, 'belum dikerjakan', 1),
(53, 4, 'Estu', 'cucian basah', 20000, 'belum dikerjakan', 1),
(54, 5, 'Aji', 'cucian basah', 25000, 'belum dikerjakan', 1),
(55, 4.75, 'Kusuma', 'cucian kering', 33250, 'belum dikerjakan', 1),
(56, 1.8, 'Yulianti', 'cucian basah', 9000, 'belum dikerjakan', 1),
(57, 7.25, 'Ridho', 'cucian basah', 36250, 'belum dikerjakan', 1),
(58, 6.75, 'Eko', 'cucian kering', 47250, 'belum dikerjakan', 1),
(59, 7, 'Bambang', 'cucian basah', 35000, 'belum dikerjakan', 1),
(60, 3.5, 'Agus', 'cucian basah', 17500, 'belum dikerjakan', 1),
(61, 6.5, 'Deka', 'cucian kering', 45500, 'belum dikerjakan', 1),
(62, 1, 'Wati', 'cucian kering', 7000, 'belum dikerjakan', 1),
(63, 2.5, 'Nina', 'cucian basah', 12500, 'belum dikerjakan', 1),
(64, 10, 'Lulu', 'cucian kering', 70000, 'belum dikerjakan', 1),
(65, 2.25, 'Lisa', 'cucian basah', 11250, 'belum dikerjakan', 1),
(66, 4.75, 'Rose', 'cucian kering', 33250, 'belum dikerjakan', 1),
(67, 5.25, 'Jennie', 'cucian basah', 26250, 'belum dikerjakan', 1),
(68, 3.75, 'Jiso', 'cucian basah', 18750, 'belum dikerjakan', 1),
(69, 5.75, 'Adi', 'cucian basah', 28750, 'belum dikerjakan', 1),
(70, 6.8, 'Putra', 'cucian kering', 47600, 'belum dikerjakan', 1),
(71, 3, 'Vera', 'cucian basah', 15000, 'belum dikerjakan', 1),
(72, 3.8, 'Fira', 'cucian basah', 19000, 'belum dikerjakan', 1),
(73, 5.1, 'Septi', 'cucian basah', 25500, 'belum dikerjakan', 1),
(74, 4.6, 'Kirana', 'cucian basah', 23000, 'belum dikerjakan', 1),
(75, 9.3, 'Zizah', 'cucian basah', 46500, 'belum dikerjakan', 1),
(76, 7.6, 'Gina', 'cucian kering', 53200, 'belum dikerjakan', 1),
(77, 8.7, 'Gigi', 'cucian basah', 43500, 'belum dikerjakan', 1),
(78, 6.5, 'Hesti', 'cucian basah', 32500, 'belum dikerjakan', 1),
(79, 6.8, 'Enzie', 'cucian kering', 47600, 'belum dikerjakan', 1),
(80, 1, 'Desta', 'cucian basah', 5000, 'belum dikerjakan', 1),
(81, 6.25, 'Anggi', 'cucian kering', 43750, 'belum dikerjakan', 1),
(82, 4, 'Kiki', 'cucian basah', 20000, 'belum dikerjakan', 1),
(83, 2.75, 'Koko', 'cucian kering', 19250, 'belum dikerjakan', 1),
(84, 4.8, 'Sania', 'cucian basah', 24000, 'belum dikerjakan', 1),
(85, 7.5, 'Rida', 'cucian kering', 52500, 'belum dikerjakan', 1),
(86, 5.75, 'Rita', 'cucian basah', 28750, 'belum dikerjakan', 1),
(87, 4.5, 'Rama', 'cucian basah', 22500, 'belum dikerjakan', 1),
(88, 7.5, 'Ikhsan', 'cucian basah', 37500, 'belum dikerjakan', 1),
(89, 1.75, 'Dewi', 'cucian basah', 8750, 'belum dikerjakan', 1),
(90, 2.25, 'Rizky', 'cucian basah', 11250, 'belum dikerjakan', 1),
(91, 11.75, 'Bagus', 'cucian kering', 82250, 'belum dikerjakan', 1),
(92, 6.75, 'Anto', 'cucian basah', 33750, 'belum dikerjakan', 1),
(93, 6.5, 'Isna', 'cucian kering', 45500, 'belum dikerjakan', 1),
(94, 7.25, 'Ummu', 'cucian basah', 36250, 'belum dikerjakan', 1),
(95, 6, 'Kafi', 'cucian kering', 42000, 'belum dikerjakan', 1),
(96, 8.75, 'Sindi', 'cucian basah', 43750, 'belum dikerjakan', 1),
(97, 5.5, 'Iska', 'cucian basah', 27500, 'belum dikerjakan', 1),
(98, 7.25, 'Novia', 'cucian basah', 36250, 'belum dikerjakan', 1),
(99, 3.5, 'Novia', 'cucian basah', 17500, 'belum dikerjakan', 1),
(100, 8.25, 'Lindania', 'cucian basah', 41250, 'belum dikerjakan', 1),
(101, 1.8, 'Dwi', 'cucian basah', 9000, 'belum dikerjakan', 1),
(102, 6.25, 'Siska', 'cucian kering', 43750, 'belum dikerjakan', 1),
(103, 7, 'Ahmad', 'cucian basah', 35000, 'belum dikerjakan', 1),
(104, 8.25, 'Rasyid', 'cucian basah', 41250, 'belum dikerjakan', 1),
(105, 7, 'Pandi', 'cucian basah', 35000, 'belum dikerjakan', 1),
(106, 8, 'Ilham', 'cucian basah', 40000, 'belum dikerjakan', 1),
(107, 6.5, 'Kurnia', 'cucian basah', 32500, 'belum dikerjakan', 1),
(108, 12, 'asep', 'cucian basah', 60000, 'belum dikerjakan', 1),
(109, 10, 'hasim', 'cucian kering', 70000, 'belum dikerjakan', 1),
(110, 1.75, 'Kintan', 'cucian kering', 12250, 'belum dikerjakan', 1),
(111, 1.75, 'Kintan', 'cucian kering', 12250, 'belum dikerjakan', 1),
(112, 12, 'dayat', 'cucian kering', 84000, 'belum dikerjakan', 1),
(113, 20, 'marya', 'cucian basah', 100000, 'belum dikerjakan', 1),
(114, 3, 'Keysha', 'cucian kering', 21000, 'belum dikerjakan', 1),
(115, 200, 'totong', 'cucian kering', 1400000, 'belum dikerjakan', 1),
(116, 29, 'yogades', 'cucian kering', 203000, 'belum dikerjakan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) DEFAULT 'pegawai',
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`, `email`) VALUES
(1, '-', 'admin', 'admin', 'admin', 'spartancoc04@gmail.com'),
(8, 'Ahmad Rizky Febianto', 'aris', 'aris123', 'pegawai', 'ahmadrizky13jkl@gmail.com'),
(11, 'maulida', 'uli', 'uli123', 'pegawai', 'maulida@gmail.com'),
(12, 'mahmud', 'mahmud', '1234', 'pegawai', 'zeuzpers@gmail.com'),
(13, 'totong', 'totong', 'aris', 'pegawai', 'totong@gmail.com'),
(14, 'asa', 'asa', 'asa', 'pegawai', 'asa'),
(15, 'Rizky Febianto', 'ariz', 'ariz', 'admin', 'ahmadrizky@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trx`
--
ALTER TABLE `trx`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dikerjakan oleh` (`dikerjakan_oleh`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trx`
--
ALTER TABLE `trx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trx`
--
ALTER TABLE `trx`
  ADD CONSTRAINT `trx_ibfk_1` FOREIGN KEY (`dikerjakan_oleh`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
