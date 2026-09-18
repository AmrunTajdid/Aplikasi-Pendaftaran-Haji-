-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2023 pada 04.04
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran_haji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('admin', '123123'),
('amrunadmin', '123123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keberangkatan`
--

CREATE TABLE `tb_keberangkatan` (
  `id_keberangkatan` varchar(50) NOT NULL,
  `id_pembayaran` varchar(50) NOT NULL,
  `id_pendaftaran` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_kloter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_keberangkatan`
--

INSERT INTO `tb_keberangkatan` (`id_keberangkatan`, `id_pembayaran`, `id_pendaftaran`, `id_user`, `id_kloter`) VALUES
('1-040823-033746KBR', '1-040823-033746PBY', '1-040823-033746PFT', '1', ''),
('1-040823-033813KBR', '1-040823-033813PBY', '1-040823-033813PFT', '1', ''),
('1-040823-033836KBR', '1-040823-033836PBY', '1-040823-033836PFT', '1', ''),
('2-040823-034111KBR', '2-040823-034111PBY', '2-040823-034111PFT', '2', ''),
('2-040823-034133KBR', '2-040823-034133PBY', '2-040823-034133PFT', '2', ''),
('2-040823-034149KBR', '2-040823-034149PBY', '2-040823-034149PFT', '2', ''),
('3-040823-034254KBR', '3-040823-034254PBY', '3-040823-034254PFT', '3', '040823-033941KTL'),
('3-040823-034309KBR', '3-040823-034309PBY', '3-040823-034309PFT', '3', ''),
('3-040823-034322KBR', '3-040823-034322PBY', '3-040823-034322PFT', '3', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kloter`
--

CREATE TABLE `tb_kloter` (
  `id_kloter` varchar(255) NOT NULL,
  `keberangkatan` varchar(255) NOT NULL,
  `tanggal_keberangkatan` varchar(255) NOT NULL,
  `titik_kumpul` varchar(255) NOT NULL,
  `Tanggal_pulang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kloter`
--

INSERT INTO `tb_kloter` (`id_kloter`, `keberangkatan`, `tanggal_keberangkatan`, `titik_kumpul`, `Tanggal_pulang`) VALUES
('040823-033941KTL', 'Umrah', '2023-08-04', 'Monas', '2023-08-04'),
('040823-034006KTL', 'Umrah Plus', '2023-08-04', 'gambir', '2023-08-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` varchar(50) NOT NULL,
  `id_pendaftaran` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nominal_pembayaran` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `verifikasi_pembayaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_pendaftaran`, `id_user`, `nominal_pembayaran`, `bukti_pembayaran`, `verifikasi_pembayaran`) VALUES
('1-040823-033746PBY', '1-040823-033746PFT', '1', '2.000.000', '', 'not'),
('1-040823-033813PBY', '1-040823-033813PFT', '1', '2.000.000', '', 'not'),
('1-040823-033836PBY', '1-040823-033836PFT', '1', '2.000.000', '', 'not'),
('2-040823-034111PBY', '2-040823-034111PFT', '2', '2.000.000', '', 'not'),
('2-040823-034133PBY', '2-040823-034133PFT', '2', '2.000.000', '', 'not'),
('2-040823-034149PBY', '2-040823-034149PFT', '2', '2.000.000', '', 'not'),
('3-040823-034254PBY', '3-040823-034254PFT', '3', '2.000.000', 'module_table_bottom.png', 'not'),
('3-040823-034309PBY', '3-040823-034309PFT', '3', '2.000.000', '', 'not'),
('3-040823-034322PBY', '3-040823-034322PFT', '3', '2.000.000', '', 'not');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` varchar(255) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `pendaftaran` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `umur` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pergi_haji` varchar(25) NOT NULL,
  `alamat_lengkap` longtext NOT NULL,
  `nomer_telepon` varchar(15) NOT NULL,
  `mahram` varchar(255) NOT NULL,
  `hubungan_mahram` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `paspor` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `verifikasi_data` varchar(10) NOT NULL,
  `tanggal_pendaftaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `id_user`, `pendaftaran`, `nama_lengkap`, `nama_ayah`, `nama_ibu`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jenis_kelamin`, `pendidikan_terakhir`, `pekerjaan`, `pergi_haji`, `alamat_lengkap`, `nomer_telepon`, `mahram`, `hubungan_mahram`, `status`, `paspor`, `foto`, `verifikasi_data`, `tanggal_pendaftaran`) VALUES
('1-040823-033746PFT', '1', 'Haji', 'a', 'a', 'a', 'a', '2023-08-04', 'a', 'Laki-Laki', 'SD', '', 'Sudah Pernah', 'a', 'a', 'a', 'a', 'Menikah', 'Memiliki', '', 'not', 'Friday / 04-08-2023'),
('1-040823-033813PFT', '1', 'Umrah', 'a', 'a', 'a', 'a', '2023-08-04', 'a', 'Laki-Laki', 'SD', '', 'Sudah Pernah', 'a', 'a', 'a', 'a', 'Menikah', 'Memiliki', '', 'not', 'Friday / 04-08-2023'),
('1-040823-033836PFT', '1', 'Umrah Plus', 'a', 'a', 'a', 'a', '2023-08-04', 'a', 'Laki-Laki', 'SD', 'a', 'Sudah Pernah', 'a', 'a', 'a', 'a', 'Menikah', 'Memiliki', '', 'not', 'Friday / 04-08-2023'),
('2-040823-034111PFT', '2', 'Haji', 'b', 'b', 'b', 'b', '', 'b', 'Laki-Laki', 'SD', 'b', 'Sudah Pernah', 'b', 'b', 'b', 'b', 'Menikah', 'Memiliki', '', 'not', 'Friday / 04-08-2023'),
('2-040823-034133PFT', '2', 'Umrah', 'b', 'b', 'b', 'b', '2023-08-04', 'b', 'Perempuan', 'SD', 'b', 'Sudah Pernah', 'b', 'b', 'b', 'b', 'Menikah', 'Memiliki', '', 'not', 'Friday / 04-08-2023'),
('2-040823-034149PFT', '2', 'Umrah Plus', 'b', 'b', 'b', 'b', '', 'b', 'Laki-Laki', 'SD', 'b', 'Sudah Pernah', 'b', 'b', 'b', 'b', 'Menikah', 'Memiliki', '', 'not', 'Friday / 04-08-2023'),
('3-040823-034254PFT', '3', 'Haji', 'c', 'c', 'c', 'c', '2023-08-04', 'c', 'Laki-Laki', 'SD', 'c', 'Sudah Pernah', 'c', 'c', 'c', 'c', 'Menikah', 'Memiliki', '', 'not', 'Friday / 04-08-2023'),
('3-040823-034309PFT', '3', 'Umrah', 'c', 'c', 'c', 'c', '', '', 'Laki-Laki', 'SD', '', 'Sudah Pernah', '', '', '', '', 'Menikah', 'Memiliki', '', 'not', 'Friday / 04-08-2023'),
('3-040823-034322PFT', '3', 'Umrah Plus', 'c', 'c', '', 'c', '', '', 'Laki-Laki', 'SD', '', 'Sudah Pernah', '', '', '', '', 'Menikah', 'Memiliki', '', 'not', 'Friday / 04-08-2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`) VALUES
(1, 'testing1', 'testing1@gmail.com', '123123'),
(2, 'testing2', 'testing2@gmail.com', '123123'),
(3, 'testing3', 'testing3@gmail.com', '123123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
