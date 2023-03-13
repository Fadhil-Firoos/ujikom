-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 06:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_fadhil`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('76865674', 'masyarakat 3', 'masyarakat 3', 'masyarakat 3', '8979879879'),
('896445858', 'masyarakat 2', 'masyarakat 2', 'masyarakat 2', '665696'),
('89796976796', 'masyarakat 4', 'masyarakat 4', 'masyarakat 4', '67868768767'),
('987987', 'masyarakat 1', 'masyarakat 1', 'masyarakat 1', '98908098098');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `isi_laporan` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('0','proses','selesai') DEFAULT NULL,
  `verifikasi` enum('tolak','terima') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`, `verifikasi`) VALUES
(4, '2021-04-08', '987987', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, possimus maiores. Temporibus aut pariatur possimus exercitationem cum dolore a, blanditiis hic, amet ipsum saepe? Exercitationem vitae maxime corrupti nobis non!', '2.jpg', 'selesai', 'terima'),
(5, '2021-04-08', '987987', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, possimus maiores. Temporibus aut pariatur possimus exercitationem cum dolore a, blanditiis hic, amet ipsum saepe? Exercitationem vitae maxime corrupti nobis non!', 'BestCitiesInTheWorld-2020-Beijing, China-GettyImages-700672514.jpg', 'selesai', 'tolak'),
(6, '2021-04-08', '896445858', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias distinctio voluptas expedita nobis repellat reprehenderit aperiam quaerat sint enim cum et, praesentium numquam delectus sequi odio id. Architecto, qui quidem!', 'dsc09657.jpg', 'proses', ''),
(7, '2021-04-08', '896445858', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias distinctio voluptas expedita nobis repellat reprehenderit aperiam quaerat sint enim cum et, praesentium numquam delectus sequi odio id. Architecto, qui quidem!', '274_(1).jpg', 'proses', ''),
(8, '2021-04-08', '76865674', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias distinctio voluptas expedita nobis repellat reprehenderit aperiam quaerat sint enim cum et, praesentium numquam delectus sequi odio id. Architecto, qui quidem!', 'BestCitiesInTheWorld-2020-Beijing, China-GettyImages-700672514.jpg', 'selesai', 'terima'),
(9, '2021-04-08', '76865674', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias distinctio voluptas expedita nobis repellat reprehenderit aperiam quaerat sint enim cum et, praesentium numquam delectus sequi odio id. Architecto, qui quidem!', 'Gapura_Bandar_Lampung_1_6521.jpg', 'selesai', 'tolak'),
(10, '2021-04-08', '89796976796', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias distinctio voluptas expedita nobis repellat reprehenderit aperiam quaerat sint enim cum et, praesentium numquam delectus sequi odio id. Architecto, qui quidem!', '2018-10best-cars-the-best-cars-for-sale-in-america-today-feature-car-and-driver-photo-696572-s-original.jpg', 'proses', ''),
(11, '2021-04-08', '897969767964', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias distinctio voluptas expedita nobis repellat reprehenderit aperiam quaerat sint enim cum et, praesentium numquam delectus sequi odio id. Architecto, qui quidem!', 'landscape_photography_course_ian_plant_01.jpg', 'proses', '');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `level` enum('admin','petugas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'admin', 'admin', 'admin', '9809967', 'admin'),
(3, 'petugas 1', 'petugas 1', 'petugas 1', '786876876876', 'petugas'),
(4, 'petugas 2', 'petugas 2', 'petugas 2', '8789797586597', 'petugas'),
(5, 'petugas 3', 'petugas 3', 'petugas 3', '57657657656', 'petugas'),
(6, 'petugas 4', 'petugas 4', 'petugas 4', '635425423', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) DEFAULT NULL,
  `tgl_tanggapan` date DEFAULT NULL,
  `tanggapan` text DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(3, 4, '2021-04-08', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum modi at animi, culpa iste praesentium! Labore illum ipsa quod ad incidunt assumenda obcaecati nostrum, iusto ipsam voluptate vel dicta quaerat.', 3),
(4, 8, '2021-04-08', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum modi at animi, culpa iste praesentium! Labore illum ipsa quod ad incidunt assumenda obcaecati nostrum, iusto ipsam voluptate vel dicta quaerat.', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
