-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 03:21 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_adi`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_mahasiswa`
-- (See below for the actual view)
--
CREATE TABLE `data_mahasiswa` (
`nim` varchar(12)
,`nama` varchar(100)
,`jenis_kelamin` varchar(1)
,`alamat` varchar(100)
,`nomor_hp` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `alamat`, `nomor_hp`) VALUES
('161240000478', 'Safira', 'P', 'Tegal Sambi Jepara', '082323732567'),
('161240000497', 'Andhaka', 'L', 'Mantingan Jepara', '082323732998'),
('161240000499', 'Cahyo', 'L', 'Bulungan Jepara', '082323732813'),
('161240000516', 'Farid Kate', 'L', 'Kecapi Jepara', '082323732000'),
('161240000517', 'Ali Akbar', 'L', 'Pesajen Jepara', '082323732809');

--
-- Triggers `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `update_nomor_hp` AFTER UPDATE ON `mahasiswa` FOR EACH ROW begin if (new.nomor_hp != old.nomor_hp) then insert into riwayat (nim,no_hp_lama, no_hp_baru, tgl_diubah) values (old.nim, old.nomor_hp, new.nomor_hp, now()); end if; end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `nim` varchar(12) DEFAULT NULL,
  `no_hp_lama` varchar(100) DEFAULT NULL,
  `no_hp_baru` varchar(100) DEFAULT NULL,
  `tgl_diubah` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `nim`, `no_hp_lama`, `no_hp_baru`, `tgl_diubah`) VALUES
(1, '161240000497', '082323732800', '082323732999', '2019-10-29 16:01:25'),
(2, '161240000497', '082323732999', '082323732998', '2019-10-29 16:01:40'),
(17, '161240000517', '082323732801', '082323732801', '2019-11-06 14:38:48'),
(18, '161240000517', '082323732801', '082323732809', '2019-11-06 14:42:32'),
(19, '161240000516', '082323732900', '082323732000', '2019-11-06 14:44:15'),
(20, '161240000478', '082323732853', '082323732567', '2019-11-06 14:47:54'),
(21, '161240000444', '085641486311', '085641486321', '2019-11-10 09:14:26');

-- --------------------------------------------------------

--
-- Structure for view `data_mahasiswa`
--
DROP TABLE IF EXISTS `data_mahasiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_mahasiswa`  AS  select `mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama` AS `nama`,`mahasiswa`.`jenis_kelamin` AS `jenis_kelamin`,`mahasiswa`.`alamat` AS `alamat`,`mahasiswa`.`nomor_hp` AS `nomor_hp` from `mahasiswa` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
