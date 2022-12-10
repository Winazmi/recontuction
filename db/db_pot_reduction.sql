-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2022 pada 03.36
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pot_reduction`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pot`
--

CREATE TABLE `data_pot` (
  `no_input` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `cut_up` varchar(20) NOT NULL,
  `take_out` varchar(20) NOT NULL,
  `CBD` varchar(20) NOT NULL,
  `CSE` varchar(20) NOT NULL,
  `work_b` varchar(20) NOT NULL,
  `IOS` varchar(20) NOT NULL,
  `work_12` varchar(20) NOT NULL,
  `ACDD` varchar(20) NOT NULL,
  `baking` varchar(20) NOT NULL,
  `start_up` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pot`
--

INSERT INTO `data_pot` (`no_input`, `tanggal`, `cut_up`, `take_out`, `CBD`, `CSE`, `work_b`, `IOS`, `work_12`, `ACDD`, `baking`, `start_up`, `keterangan`) VALUES
(1, '2022-10-01', '', '', '', '', '', '', '', '', '', '', 'sabtu'),
(2, '2022-10-02', '', '', '', '', '', '', '', '', '', '', 'libur'),
(3, '2022-10-03', '439', '', '228', '340', '', '', '', '', '', '280', 'start up '),
(5, '2022-10-05', '', '', '228', '', '', '', '', '', '', '', ''),
(6, '2022-10-06', '', '', '202', '228', '', '', '', '', '', '', 'proses'),
(7, '2022-10-07', '', '202', '', '', '', '', '', '', '', '', 'proses'),
(8, '2022-10-08', '', '', '', '', '', '', '', '', '', '', 'libur'),
(9, '2022-10-09', '', '', '', '', '', '', '', '', '', '', 'minggu'),
(14, '2022-11-01', '', '', '', '', '', '', '', '', '567', '', ''),
(16, '2022-10-10', '', '439', '202', '', '228', '', '', '', '', '', 'proses'),
(17, '2022-11-10', '213', '123', '1324', '124', '223', '-', '-', '-', '-', '-', ''),
(18, '2022-11-07', '123', '-', '-', '-', '-', '-', '-', '-', '321', '-', ''),
(19, '2022-12-17', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', ''),
(20, '2020-01-08', '-', '-', '-', '-', '-', '-', '-', '-', '-', '280 739 224 8888', 'upgrade'),
(22, '2022-11-08', '270p ', '-', '-', '-', '-', '-', '-', '-', '-', '-', ''),
(24, '2022-11-11', '321', '-', '-', '-', '-', '-', '-', '-', '-', '724 835  112 772', 'banyak pot yang start up');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(10) NOT NULL,
  `devisi` enum('admin','oprator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_admin`, `username`, `password`, `devisi`) VALUES
(1, 'admin', '12345', 'admin'),
(2, 'winketu', 'asdasd1', 'oprator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pot`
--
ALTER TABLE `data_pot`
  ADD PRIMARY KEY (`no_input`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pot`
--
ALTER TABLE `data_pot`
  MODIFY `no_input` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
