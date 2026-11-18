-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2026 at 09:18 AM
-- Server version: 10.11.16-MariaDB
-- PHP Version: 8.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `sks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `matakuliah`, `sks`) VALUES
('FS303', 'Analisis Proses Bisnis', 2),
('FS319', 'Arsitektur Enterprise', 3),
('FS303', 'Analisis Proses Bisnis', 2),
('FS319', 'Arsitektur Enterprise', 3),
('SI303', 'Big Data', 3),
('FS307', 'Jaringan Komputer', 3),
('FS307', 'Jaringan Komputer', 3),
('FS307', 'Jaringan Komputer', 3),
('FS307', 'Jaringan Komputer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`nim`, `nama`, `jurusan`) VALUES
('2231376366', 'Ivan Ibnu Maulida Pratomo', 'Teknik Informatika'),
('2311477196', 'Arya Budi Estiawan', 'Sistem Informasi'),
('2311477203', 'Hilmi Andika', 'Sistem Informasi'),
('2311477477', 'Nabhil Syahdilan', 'Sistem Informasi'),
('2311490411', 'Bili Pendi Kerismawan', 'Sistem Informasi'),
('2322414870', 'Oktavia Putri Ramadhani', 'Teknik Informatika'),
('2322469050', 'Achmad Faiz Munandar', 'Teknik Informatika'),
('2322469712', 'Sodaqo Wadah', 'Teknik Informatika'),
('2322473351', 'Muhamad Azril Ferdian', 'Teknik Informatika'),
('2322473624', 'Topan Wijaksono', 'Teknik Informatika'),
('2322473662', 'Aditya Dwi Kurniawan', 'Teknik Informatika'),
('2322476484', 'Jhonsabarsen Gultom', 'Teknik Informatika'),
('2322476584', 'Faris Al Faqih', 'Teknik Informatika'),
('2322476644', 'Muhammad Ryan Alim Fasah', 'Teknik Informatika'),
('2322476655', 'Hidayat Nur Khalik', 'Teknik Informatika'),
('2322476764', 'Fawwaz Sadewo', 'Teknik Informatika'),
('2322476815', 'Muhammad Rafli Husein', 'Teknik Informatika'),
('2322476825', 'Dyo Ananta', 'Teknik Informatika'),
('2322476884', 'Adiel Baja Kelana', 'Teknik Informatika'),
('2322476917', 'Muhammad Daffa Almajid', 'Teknik Informatika'),
('2322476952', 'Muhammad Fauzan', 'Teknik Informatika'),
('2322477009', 'Mifthahul Maulana Kamal', 'Teknik Informatika'),
('2322477039', 'Rafli Surya Saputra', 'Teknik Informatika'),
('2322477047', 'Muhammad Faiz Maulana', 'Teknik Informatika'),
('2322477078', 'Ahmad Saeful amri', 'Teknik Informatika'),
('2322477083', 'Izzudin Abdul Qohar', 'Teknik Informatika'),
('2322477217', 'Muhammad Raka Arifa Ilham', 'Teknik Informatika'),
('2322477248', 'Aan Adi Pratama', 'Teknik Informatika'),
('2322477267', 'Sulistyo', 'Teknik Informatika'),
('2322477303', 'Muhammad Toha Marup Alkarhi', 'Teknik Informatika'),
('2322477411', 'Maulana Yazid Maghribi', 'Teknik Informatika'),
('2322477488', 'Angga Pramudya', 'Teknik Informatika'),
('2322477590', 'Muhamad Riffa Aulia', 'Teknik Informatika'),
('2322490227', 'Wildan Syahid Al Farisi', 'Teknik Informatika'),
('2322490273', 'Monica Cania', 'Teknik Informatika'),
('2322490342', 'Yabes Henli Salem', 'Teknik Informatika'),
('2331423855', 'Nazwa Pratiwi', 'Sistem Komputer'),
('2331435499', 'Aimar Fadli Dinata', 'Sistem Komputer'),
('2331473509', 'Mohamad Wisnu Andarma', 'Sistem Komputer'),
('2331476806', 'Ocefath Kresnajaya', 'Sistem Komputer'),
('2331477125', 'Muhamad Syahril', 'Sistem Komputer'),
('2331477132', 'Novan Firdaus', 'Sistem Komputer'),
('2331477142', 'Hikmal Fauzan', 'Sistem Komputer'),
('2331477170', 'Damar Dwi Permana', 'Sistem Komputer'),
('2331477274', 'Muhamad Pradana Arrafi', 'Sistem Komputer'),
('2331477322', 'Fauzan Agniriawan Santoso', 'Sistem Komputer'),
('2331477341', 'Widya Puspitasari', 'Sistem Komputer'),
('2331477606', 'Feliko Kariansyah', 'Sistem Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` enum('admin','dosen','mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `role`) VALUES
(2, 'admin', '12345', 'intan', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
