-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2019 pada 10.44
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku_1151705001`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_buku_1151705001`
--

CREATE TABLE `jenis_buku_1151705001` (
  `jenis_buku_1151705001` int(10) NOT NULL,
  `nama_jns_buku_1151705001` varchar(20) NOT NULL,
  `ket_jenis_1151705001` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_buku_1151705001`
--

INSERT INTO `jenis_buku_1151705001` (`jenis_buku_1151705001`, `nama_jns_buku_1151705001`, `ket_jenis_1151705001`) VALUES
(1, 'Cergam', 'Cerita Bergambar'),
(2, 'Komik', 'Komik dengan berbagai Genre'),
(3, 'Nomik', 'Novel Komik'),
(4, 'Kamus', 'Kamus dengan berbagai tema'),
(5, 'Antologi', 'Kumpulan'),
(6, 'Fotografi', 'Belajar Foto'),
(7, 'Novel', 'Novel'),
(8, 'Biografi', 'Biografi'),
(9, 'Catatan', 'Catatan Harian / Jurnal / Diary'),
(10, 'Novelet', 'Novelet'),
(11, 'Ensiklopedia', 'Ensiklopedia'),
(12, 'Karya Ilmiah', 'Karya Ilmiah'),
(13, 'Tafsir', 'Tafsir'),
(14, 'Dongeng', 'Dongeng'),
(15, 'Panduan', 'How to'),
(16, 'Atlas', 'Atlas'),
(17, 'Teks', 'Teks'),
(18, 'Mewarnai', 'Mewarnai'),
(19, 'Ilmiah', 'Ilmiah'),
(20, 'Pemrograman', 'Program');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_access_1151705001`
--

CREATE TABLE `login_access_1151705001` (
  `username_1151705001` varchar(20) NOT NULL,
  `password_1151705001` varchar(50) NOT NULL,
  `status_1151705001` varchar(10) NOT NULL,
  `date_created_1151705001` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_access_1151705001`
--

INSERT INTO `login_access_1151705001` (`username_1151705001`, `password_1151705001`, `status_1151705001`, `date_created_1151705001`) VALUES
('candrandiyasa', '202cb962ac59075b964b07152d234b70', '1', '2019-06-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku_1151705001`
--

CREATE TABLE `tb_buku_1151705001` (
  `kode_buku_1151705001` varchar(10) NOT NULL,
  `judul_buku_1151705001` text NOT NULL,
  `jenis_buku_1151705001` int(10) NOT NULL,
  `pengarang_buku_1151705001` varchar(20) NOT NULL,
  `penerbit_buku_1151705001` varchar(20) NOT NULL,
  `thn_terbit_1151705001` int(5) NOT NULL,
  `tgl_entry_1151705001` date NOT NULL,
  `tgl_update_1151705001` date NOT NULL,
  `creator_1151705001` varchar(10) NOT NULL,
  `stock_buku_1151705001` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku_1151705001`
--

INSERT INTO `tb_buku_1151705001` (`kode_buku_1151705001`, `judul_buku_1151705001`, `jenis_buku_1151705001`, `pengarang_buku_1151705001`, `penerbit_buku_1151705001`, `thn_terbit_1151705001`, `tgl_entry_1151705001`, `tgl_update_1151705001`, `creator_1151705001`, `stock_buku_1151705001`) VALUES
('11512312', 'Javascript for Beginner Programing', 9, 'Aladdin', 'Welex Media', 2006, '2019-06-12', '2019-06-12', 'Kadek', 0),
('11512313', 'Javascipt Object Oriented Programming', 3, 'Aladdin', 'Gramedia', 2008, '2019-06-14', '2019-06-13', 'Gede', 0),
('12309895', 'PHP Object Oriented Programing', 12, 'Abdul Kadir', 'Cipta Persada', 2016, '2019-06-12', '2019-06-12', 'Candra', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_buku_1151705001`
--
ALTER TABLE `jenis_buku_1151705001`
  ADD PRIMARY KEY (`jenis_buku_1151705001`);

--
-- Indeks untuk tabel `login_access_1151705001`
--
ALTER TABLE `login_access_1151705001`
  ADD PRIMARY KEY (`username_1151705001`);

--
-- Indeks untuk tabel `tb_buku_1151705001`
--
ALTER TABLE `tb_buku_1151705001`
  ADD PRIMARY KEY (`kode_buku_1151705001`),
  ADD KEY `jenis_buku_1151705001` (`jenis_buku_1151705001`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_buku_1151705001`
--
ALTER TABLE `jenis_buku_1151705001`
  MODIFY `jenis_buku_1151705001` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_buku_1151705001`
--
ALTER TABLE `tb_buku_1151705001`
  ADD CONSTRAINT `tb_buku_1151705001_ibfk_1` FOREIGN KEY (`jenis_buku_1151705001`) REFERENCES `jenis_buku_1151705001` (`jenis_buku_1151705001`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
