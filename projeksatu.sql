-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2020 pada 07.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeksatu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `level` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama`, `email`, `level`) VALUES
(13, 'admin', 'admin', NULL, NULL, 'A'),
(14, 'penjual', 'penjual', NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biaya_kirim`
--

CREATE TABLE `tbl_biaya_kirim` (
  `id_biaya_kirim` int(10) NOT NULL,
  `id_kota` int(5) NOT NULL,
  `id_kurir` int(5) NOT NULL,
  `biaya` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_biaya_kirim`
--

INSERT INTO `tbl_biaya_kirim` (`id_biaya_kirim`, `id_kota`, `id_kurir`, `biaya`) VALUES
(1, 1, 1, 100000),
(2, 3, 3, 20000),
(5, 1, 1, 2300);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(3) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(21, 'biji Kopi Mentah'),
(22, 'Biji Kopi Roasting'),
(23, 'Bubuk Kopi'),
(24, 'Masker Muka dari bubuk Kopi'),
(25, 'Kulit Kopi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `id_kota` int(5) NOT NULL,
  `nama_kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kota`
--

INSERT INTO `tbl_kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Yogyakarta'),
(3, 'Magelang'),
(4, 'Solo'),
(5, 'Temanggung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kurir`
--

CREATE TABLE `tbl_kurir` (
  `id_kurir` int(5) NOT NULL,
  `nama_kurir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kurir`
--

INSERT INTO `tbl_kurir` (`id_kurir`, `nama_kurir`) VALUES
(1, 'JNE'),
(3, 'J&T'),
(4, 'POS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_merek`
--

CREATE TABLE `tbl_merek` (
  `id_merek` int(3) NOT NULL,
  `nama_merek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_merek`
--

INSERT INTO `tbl_merek` (`id_merek`, `nama_merek`) VALUES
(1, 'kopi rejeng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(5) NOT NULL,
  `status_order` char(1) NOT NULL,
  `tgl_order` date NOT NULL,
  `jam_order` time NOT NULL,
  `id_member` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(20) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_kategori`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `jumlah`) VALUES
(1, 24, 'kopi123', 'ala123', 100, 'Screenshot 2020-12-05 071254.jpg', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  ADD PRIMARY KEY (`id_biaya_kirim`);

--
-- Indeks untuk tabel `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id_detail_order`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indeks untuk tabel `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  ADD PRIMARY KEY (`id_kurir`);

--
-- Indeks untuk tabel `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tbl_merek`
--
ALTER TABLE `tbl_merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indeks untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_biaya_kirim`
--
ALTER TABLE `tbl_biaya_kirim`
  MODIFY `id_biaya_kirim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_kota`
--
ALTER TABLE `tbl_kota`
  MODIFY `id_kota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_kurir`
--
ALTER TABLE `tbl_kurir`
  MODIFY `id_kurir` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_merek`
--
ALTER TABLE `tbl_merek`
  MODIFY `id_merek` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
