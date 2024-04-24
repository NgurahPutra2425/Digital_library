-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2024 pada 05.38
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_library`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `BukuID` int(11) NOT NULL,
  `KategoriID` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Penulis` varchar(255) NOT NULL,
  `Penerbit` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `TahunTerbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`BukuID`, `KategoriID`, `Judul`, `Penulis`, `Penerbit`, `Foto`, `TahunTerbit`) VALUES
(16, 1, 'Buku paket matematika yudhistira', 'Kemendikbud', 'Kemendikbud', '714-buku matik.jfif', 2013),
(17, 2, 'Ragna Crimson', 'Daiki Kobayashi', 'm&c!', '620-crimson.jpg', 2024),
(20, 9, 'Cerdas Dengan Game', 'Samuel Henry', 'Gramedia Pustaka Utama', '36-cerdas2.jpg', 2013),
(21, 9, 'Bahaya Kecanduan Game', 'Pusat Data dan Analisa Tempo', 'TEMPO Publishing', '569-bahaya.webp', 2013),
(22, 1, 'Computer Coding for Kids', 'Carol Vorderman', 'Dorling Kindersley Limited', '556-coding.jpg', 2019),
(23, 3, 'Hans', 'Risa Saraswati', 'Bukune', '358-Hans.jpg', 2017),
(24, 3, 'Creepy Case Club 1: Kasus Nyanyian Berhantu', 'Rizal Iwan', 'Kepustakaan Populer Gramedia', '694-Creepy-Case-C1.jpg', 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `KategoriID` int(11) NOT NULL,
  `NamaKategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategoribuku`
--

INSERT INTO `kategoribuku` (`KategoriID`, `NamaKategori`) VALUES
(1, 'Buku Pelajaran'),
(2, 'Komik'),
(3, 'Novel'),
(4, 'Cerpen'),
(5, 'biografi'),
(6, 'literatur'),
(7, 'Antologi'),
(8, 'Dongeng'),
(9, 'Karya Ilmiah'),
(10, 'Kamus'),
(11, 'Atlas '),
(12, 'Majalah'),
(14, 'Skripsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_relasi`
--

CREATE TABLE `kategori_relasi` (
  `KategoriBukuID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL,
  `KategoriID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `KoleksiID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `koleksipribadi`
--

INSERT INTO `koleksipribadi` (`KoleksiID`, `UserID`, `BukuID`) VALUES
(17, 17, 20),
(19, 17, 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `PeminjamanID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL,
  `Tgl_Pinjam` date NOT NULL,
  `Tgl_Pengembalian` date NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`PeminjamanID`, `UserID`, `BukuID`, `Tgl_Pinjam`, `Tgl_Pengembalian`, `Status`) VALUES
(1, 17, 16, '2024-04-27', '2024-04-30', 'Dikembalikan'),
(3, 17, 20, '2024-04-30', '0000-00-00', 'Dipinjam'),
(4, 17, 24, '2024-04-23', '0000-00-00', 'Meminjam'),
(5, 17, 16, '2024-05-02', '0000-00-00', 'Meminjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `UlasanID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL,
  `Ulasan` text NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`UlasanID`, `UserID`, `BukuID`, `Ulasan`, `Rating`) VALUES
(1, 17, 16, 'sangat membantu dan bagus', 10),
(2, 17, 22, 'kurang menarik', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `NamaLengkap` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Level` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`UserID`, `NamaLengkap`, `Username`, `Level`, `Email`, `Alamat`, `Password`) VALUES
(15, 'admin', 'admin', 1, 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(16, 'petugas', 'petugas', 2, 'petugas@gmail.com', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c'),
(17, 'Ngurah Putra', 'Ngurah', 3, 'ngurah@gmail.com', 'Dalung', 'bb7946e7d85c81a9e69fee1cea4a087c'),
(18, 'Amerta', 'Amerta', 2, 'amerta@gmail.com', 'Padang Luwih', '4297f44b13955235245b2497399d7a93');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`BukuID`),
  ADD KEY `fk_kategori` (`KategoriID`);

--
-- Indeks untuk tabel `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`KategoriID`);

--
-- Indeks untuk tabel `kategori_relasi`
--
ALTER TABLE `kategori_relasi`
  ADD PRIMARY KEY (`KategoriBukuID`);

--
-- Indeks untuk tabel `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`KoleksiID`),
  ADD KEY `fk_buku_koleksi` (`BukuID`),
  ADD KEY `fk_user_koleksi` (`UserID`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`PeminjamanID`),
  ADD KEY `fk_buku_pinjam` (`BukuID`),
  ADD KEY `fk_user_pinjam` (`UserID`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`UlasanID`),
  ADD KEY `fk_buku_ulasan` (`BukuID`),
  ADD KEY `fk_user_ulasan` (`UserID`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `BukuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `KategoriID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kategori_relasi`
--
ALTER TABLE `kategori_relasi`
  MODIFY `KategoriBukuID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  MODIFY `KoleksiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `PeminjamanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `UlasanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_kategori` FOREIGN KEY (`KategoriID`) REFERENCES `kategoribuku` (`KategoriID`);

--
-- Ketidakleluasaan untuk tabel `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD CONSTRAINT `fk_buku_koleksi` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`),
  ADD CONSTRAINT `fk_user_koleksi` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_buku_pinjam` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`),
  ADD CONSTRAINT `fk_user_pinjam` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Ketidakleluasaan untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `fk_buku_ulasan` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`),
  ADD CONSTRAINT `fk_user_ulasan` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
