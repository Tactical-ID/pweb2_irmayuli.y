-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 07 Des 2023 pada 01.55
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `alamat`, `no_telepon`, `email`, `jenis_kelamin`, `username`, `password`) VALUES
(1, 'Gilang Tri Yulianto', 'Jalan Kalicawang', '087708579694', 'gilang@gmail.com', 'L', 'gilang', '123'),
(4, 'Deby Aditya', 'Jalan Semangka', '082134691149', 'deby@gmail.com', 'L', 'deby', '123'),
(5, 'Dindha Oktavia', 'Jalan Semanggi', '085657829113', 'dindha@gmail.com', 'P', 'dindha', '123'),
(6, 'Zahwa Serenatta', 'Jalan Kalidonan', '083116426655', 'zahwa@gmail.com', 'P', 'zahwa', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int NOT NULL,
  `nama_barang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga` int NOT NULL,
  `stok` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `stok`) VALUES
(1, 'Tepung Terigu', 15000, 100),
(2, 'Telor Ayam', 27000, 50),
(3, 'Minyak Goreng', 18000, 100),
(4, 'Beras Merah', 20000, 50),
(5, 'Mie Instan', 3000, 100),
(6, 'Beras Putih', 18000, 50),
(7, 'Susu UHT', 20000, 100),
(8, 'Kopi', 15000, 50),
(9, 'Teh', 8000, 100),
(10, 'Saos', 15000, 50),
(11, 'Mayonnaise', 15000, 100),
(12, 'Kecap', 10000, 50),
(13, 'Gula Pasir', 16000, 100),
(14, 'Garam', 5000, 50),
(15, 'Pewarna Makanan', 5000, 100),
(16, 'Cuka', 11000, 50),
(17, 'Royco Penyedap', 5000, 100),
(2037728898, 'Lada Bubuk', 6000, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jual`
--

CREATE TABLE `jual` (
  `id` int NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `nama_kurir` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `sub_total` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `jual`
--

INSERT INTO `jual` (`id`, `tanggal`, `nama_admin`, `nama_pelanggan`, `nama_kurir`, `nama_barang`, `harga`, `jumlah`, `sub_total`) VALUES
(1, '2023-12-06', 'Gilang Tri Yulianto', 'Irma Yuliyanti', 'Dhimas Guntur', 'Kopi', '15000', '1', '15000'),
(1306014628, '2023-12-06', 'Gilang Tri Yulianto', 'Irma Yuliyanti', 'Dhimas Guntur', 'Minyak Goreng', '18000', '1', '18000'),
(1306014629, '2023-12-06', 'Gilang Tri Yulianto', 'Irma Yuliyanti', 'Dhimas Guntur', 'Beras Putih', '18000', '1', '18000'),
(1306014630, '2023-12-06', 'Gilang Tri Yulianto', 'Irma Yuliyanti', 'Dhimas Guntur', 'Telor Ayam', '27000', '1', '27000'),
(1306014631, '2023-12-06', 'Gilang Tri Yulianto', 'Irma Yuliyanti', 'Dhimas Guntur', 'Mie Instan', '3000', '10', '30000'),
(1306014632, '2023-12-06', 'Gilang Tri Yulianto', 'Irma Yuliyanti', 'Dhimas Guntur', 'Susu UHT', '20000', '1', '20000'),
(1306014633, '2023-12-06', 'Gilang Tri Yulianto', 'Irma Yuliyanti', 'Dhimas Guntur', 'Gula Pasir', '16000', '1', '16000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kirim`
--

CREATE TABLE `kirim` (
  `id_kirim` int NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_pemesanan` varchar(50) NOT NULL,
  `jumlah_barang` varchar(50) NOT NULL,
  `sub_total` varchar(50) NOT NULL,
  `status_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurir`
--

CREATE TABLE `kurir` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kurir`
--

INSERT INTO `kurir` (`id`, `nama`, `no_telepon`, `email`, `username`, `password`) VALUES
(1, 'Dhimas Guntur', '085952721683', 'dimas@gmail.com', 'dhimas', '12345'),
(2, 'Noval Maulana', '085467811234', 'noval@gmail.com', 'noval', '12345'),
(3, 'Sachana Necanzeo', '087689543721', 'sachana@gmail.com', 'sacahana', '12345'),
(4, 'Maheswara Anggara', '087456835462', 'maheswara@gmail.com', 'maheswara', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `no_telepon`, `email`, `username`, `password`) VALUES
(1, 'Irma Yuliyanti', 'Jalan Kalicawang', '085952721682', 'irmayuliyanti10@gmail.com', 'irma', '1234'),
(2, 'Bilqis Naira', 'Jalan Merpati', '081363060394', 'bilqis@gmail.com', 'bilqis', '1234'),
(3, 'Lina Sarlitta', 'Jalan Kalidonan', '081328144981', 'lina@gmail.com', 'lina', '1234'),
(4, 'Meli Asreani', 'Jalan Pepaya', '081328144981', 'meli@gmail.com', 'meli', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama_barang`, `harga`, `jumlah`) VALUES
(2, 'Kopi', '15000', '1'),
(3, 'Minyak Goreng', '18000', '1'),
(4, 'Beras Putih', '18000', '1'),
(5, 'Telor Ayam', '27000', '1'),
(6, 'Mie Instan', '3000', '10'),
(7, 'Susu UHT', '20000', '1'),
(8, 'Gula Pasir', '16000', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int NOT NULL,
  `jumlah` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_pelanggan`, `nama_barang`, `harga`, `jumlah`, `total`) VALUES
(1, 'Irma Yuliyanti', 'Kopi', 15000, 1, 15000),
(2, 'Irma Yuliyanti', 'Minyak Goreng', 18000, 1, 18000),
(3, 'Irma Yuliyanti', 'Beras Putih', 18000, 1, 18000),
(4, 'Irma Yuliyanti', 'Telor Ayam', 27000, 1, 27000),
(5, 'Irma Yuliyanti', 'Mie Instan', 3000, 10, 30000),
(6, 'Irma Yuliyanti', 'Susu UHT', 20000, 1, 20000),
(7, 'Irma Yuliyanti', 'Gula Pasir', 16000, 1, 16000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kirim`
--
ALTER TABLE `kirim`
  ADD PRIMARY KEY (`id_kirim`);

--
-- Indeks untuk tabel `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1950899758;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2037728899;

--
-- AUTO_INCREMENT untuk tabel `jual`
--
ALTER TABLE `jual`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1306014634;

--
-- AUTO_INCREMENT untuk tabel `kirim`
--
ALTER TABLE `kirim`
  MODIFY `id_kirim` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2090670366;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1364180072;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
