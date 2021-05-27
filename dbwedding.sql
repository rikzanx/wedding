-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 12.49
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwedding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapesanan`
--

CREATE TABLE `datapesanan` (
  `id_pesanan` varchar(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_paket` int(10) NOT NULL,
  `tgl_resepsi` date NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapesanan`
--

INSERT INTO `datapesanan` (`id_pesanan`, `id_user`, `id_paket`, `tgl_resepsi`, `no_telpon`, `alamat`, `status`) VALUES
('WDG018', 128, 5557, '2021-05-29', '081999664455', 'Karawang', 'Sudah Bayar'),
('WDG019', 139, 5560, '2021-05-13', '081999664455', 'Karawang', 'Mohon Tunggu Konfirmasi'),
('WDG020', 128, 5565, '2021-05-05', '081999664455', 'cawang', 'Sudah Bayar'),
('WDG022', 140, 5567, '2021-05-28', '085101440330', 'suarabaya', 'Mohon tunggu konfirmasi'),
('WDG023', 140, 5571, '2021-05-29', '085101440330', 'surabaya', 'Belum Bayar'),
('WDG024', 140, 5571, '2021-05-29', '87', 'iuhuj', 'Belum Bayar'),
('WDG025', 140, 5560, '2021-05-22', '98989', 'jhkj', 'Belum Bayar'),
('WDG026', 140, 5569, '2021-05-29', '8987987', 'jjlk', 'Mohon tunggu konfirmasi'),
('WDG027', 140, 5571, '2021-05-28', '897', 'jh', 'Sudah Bayar'),
('WDG028', 140, 5564, '2021-05-07', '987', 'rdht', 'Belum Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(10) NOT NULL,
  `harga` int(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `jumlah_tamu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `harga`, `keterangan`, `tipe`, `jumlah_tamu`) VALUES
(5557, 200000000, 'Tradisional Mewah', 'tipe 1', '100'),
(5559, 550000000, 'Tradisional Mewah', 'tipe 1', '300'),
(5560, 700000000, 'Tradisional Mewah', 'tipe 1', '500'),
(5561, 900000000, 'Tradisional Mewah', 'tipe 1', '1000'),
(5562, 120000000, 'Tradisional Sederhana', 'tipe 2', '100'),
(5563, 340000000, 'Tradisional Sederhana', 'tipe 2', '300'),
(5564, 560000000, 'Tradisional Sederhana', 'tipe 2', '500'),
(5565, 600000000, 'Tradisional Sederhana', 'tipe 2', '1000'),
(5566, 210000000, 'Modern Mewah', 'tipe 3', '100'),
(5567, 590000000, 'Modern Mewah', 'tipe 3', '300'),
(5568, 830000000, 'Modern Mewah', 'tipe 3', '500'),
(5569, 1300000000, 'Modern Mewah', 'tipe 3', '1000'),
(5570, 150000000, 'Modern Sederhana', 'tipe 4', '100'),
(5571, 430000000, 'Modern Sederhana', 'tipe 4', '300'),
(5572, 600000000, 'Modern Sederhana', 'tipe 4', '500'),
(5573, 900000000, 'Modern Sederhana', 'tipe 4', '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `id_pesanan` varchar(30) NOT NULL,
  `total_pembayaran` int(20) NOT NULL,
  `bukti_pembayaran` varchar(225) NOT NULL,
  `bank` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pesanan`, `total_pembayaran`, `bukti_pembayaran`, `bank`) VALUES
(11133485, 'WDG027', 987098, 'GATE VALVE 14INCH 300.jpg', 'BNI'),
(11133486, 'WDG022', 89789, '156944703_2639142909668597_7624897998029448836_n.jpg', 'Mandiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` enum('admin','pelanggan') NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `hak_akses`, `email`) VALUES
(128, 'aisya', 'aisya', 'aisya', 'pelanggan', 'bellaa123@gmail.com'),
(135, 'ulu', 'ulu', 'ulu', 'admin', 'bellaa123@gmail.com'),
(139, 'santi', 'santi', 'santi', 'pelanggan', 'bellaa123@gmail.com'),
(140, 'erik', 'erik', 'erik', 'pelanggan', 'erik@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(10) NOT NULL,
  `nama_vendor` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `no_telpon` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_teleponvendor` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `datapesanan`
--
ALTER TABLE `datapesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5574;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11133487;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
