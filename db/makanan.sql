-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 13 Sep 2020 pada 22.27
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_pelanggan`, `alamat`, `hp`) VALUES
(6, 'ikbal ramadhan', 'JL. GUNTUNG MANGGIS', '085423817263'),
(8, 'HARY TANOE', 'JL. BERLINA NO.32', '0895383556258'),
(9, 'USMAN BIN YAQUB', 'KOMPLEK KAMPUNG BARU ', '0895383556258');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datagudang`
--

CREATE TABLE `datagudang` (
  `id_gudang` int(11) NOT NULL,
  `namawarung` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `bahanbaku` varchar(100) NOT NULL,
  `stok` varchar(50) NOT NULL,
  `pengeluaran` varchar(50) NOT NULL,
  `tambahan` varchar(100) NOT NULL,
  `jumlahseluruhstok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datagudang`
--

INSERT INTO `datagudang` (`id_gudang`, `namawarung`, `alamat`, `bahanbaku`, `stok`, `pengeluaran`, `tambahan`, `jumlahseluruhstok`) VALUES
(1, 'Siringan', 'Jl. Kapten Piere Tendean Banjarmasin', 'Beras', '10', '5', '3', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL,
  `stok` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_order`
--

INSERT INTO `detail_order` (`id_detail`, `menu`, `stok`, `harga`, `keterangan`) VALUES
(58, 'Nasi Goreng', 'Tersedia', '12000', 'Nasi Goreng Khas Jawa Timur'),
(59, 'Bakso', 'Tersedia', '15000', 'Bakso Sapi'),
(60, 'Rendang', 'Tersedia', '15000', 'Rendang Daging Sapi Empuk'),
(61, 'Cumi-Cumi', 'Tersedia', '24000', 'Cumi Cumi Basah Dengan Jagung'),
(62, 'Gado-Gado', 'Tersedia', '12000', 'Gado Gado Bumbu Kacang'),
(63, 'Cireng', 'Tersedia', '10000', 'Cireng Dengan Saus Pedas'),
(64, 'Kerang', 'Tersedia', '12000', 'Kerang Dengan Saus Padang'),
(65, 'Nasi Kuning', 'Tersedia', '15000', 'Nasi Kuning Khas Nusantara'),
(66, 'Nasi Padang', 'Tersedia', '15000', 'Nasi Padang Rendang'),
(67, 'Rawon', 'Tersedia', '15000', 'Rawon Khas Jawa Timur'),
(68, 'Sup Buntut', 'Tersedia', '15000', 'Sup Buntut Bumbu Special'),
(69, 'Sate Ayam', 'Tersedia', '15000', 'Sate Ayam Special'),
(70, 'Ice Tea', 'Tersedia', '5000', 'Ice Tea Segar'),
(71, 'Ice Tea Strawberry', 'Tersedia', '10000', 'Ice Tea Strawberry Segar'),
(72, 'Lemon Ice Tea', 'Tersedia', '6000', 'Lemon Ice Tea Segar'),
(73, 'Teh Tarik', 'Tersedia', '5000', 'Teh Tarik Segar'),
(74, 'Thai Tea Boba', 'Tersedia', '12000', 'Thai Tea Boba Segar'),
(75, 'Es Campur', 'Tersedia', '13000', 'Es Campur Segar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konf_pembayaran`
--

CREATE TABLE `konf_pembayaran` (
  `idkonfir_bayar` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konf_pembayaran`
--

INSERT INTO `konf_pembayaran` (`idkonfir_bayar`, `id_order`, `nama`, `bank`, `total_harga`, `tanggal`, `bukti`) VALUES
(34, 105, 'yusufbudiman', 'BCA', '24,000', '2020-08-21', '5f4c82a4e2663.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konf_pengiriman`
--

CREATE TABLE `konf_pengiriman` (
  `id_konf` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `jumlah_pesan` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_makan`
--

CREATE TABLE `menu_makan` (
  `id_menu` int(11) NOT NULL,
  `id_stok_makanan` int(11) NOT NULL,
  `menu_makanan` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu_makan`
--

INSERT INTO `menu_makan` (`id_menu`, `id_stok_makanan`, `menu_makanan`, `harga`) VALUES
(63, 47, 'bakso', '15000'),
(64, 47, 'rendang', '15000'),
(65, 47, 'cumicumi', '24000'),
(66, 47, 'gado gado', '12000'),
(68, 47, 'cireng', '10000'),
(69, 47, 'kerang', '12000'),
(70, 47, 'nasi kuning', '15000'),
(71, 47, 'nasi padang', '15000'),
(72, 47, 'rawon daging sapi', '15000'),
(73, 47, 'sup buntut', '15000'),
(74, 47, 'sate ayam', '15000'),
(75, 47, 'Ice Tea', '5000'),
(76, 47, 'ice tea strawberry', '10000'),
(77, 47, 'ice tea lemon', '6000'),
(78, 47, 'teh tarik', '5000'),
(79, 47, 'Ice Tea boba', '12000'),
(84, 47, 'es campur', '13000'),
(90, 47, 'Nasi Goreng', '12000'),
(91, 47, 'cumicumi', '24000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `id_stok_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jumlah_pesan` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `status` enum('Pending','Sedang disiapkan','Sedang dikirim','Telah diterima') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_order`, `id_customer`, `nama_pelanggan`, `id_stok_makanan`, `nama_makanan`, `alamat`, `jumlah_pesan`, `harga`, `tanggal`, `gambar`, `status`) VALUES
(105, 6, 'abiyahya', 47, 'nasi goreng', 'JL. AHMAD YANI', '2', '24000', '2020-08-19', '5f3aac53502e4.jpg', 'Sedang dikirim'),
(106, 6, 'customer', 47, 'nasi goreng', 'JL. AHMAD YANI', '5', '0', '2020-09-02', '5f3aac53502e4.jpg', 'Pending'),
(107, 6, 'Customer', 47, 'nasi goreng', 'JL. AHMAD YANI', '1', '12000', '2020-09-13', '5f3aac53502e4.jpg', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_makanan_masuk`
--

CREATE TABLE `stok_makanan_masuk` (
  `id_stok_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `modal` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stok_makanan_masuk`
--

INSERT INTO `stok_makanan_masuk` (`id_stok_makanan`, `nama_makanan`, `harga`, `modal`, `gambar`) VALUES
(47, 'nasi goreng', 12000, 0, '5f3aac53502e4.jpg'),
(48, 'bakso', 15000, 0, '5f190a02557c1.jpg'),
(49, 'rendang', 15000, 0, '5f190a11db6e5.jpg'),
(50, 'cumicumi', 24000, 0, '5f190a2c43e92.jpeg'),
(51, 'gado gado', 12000, 0, '5f190a39dedbf.jpg'),
(52, 'cireng', 10000, 0, '5f190a466d5f1.jpg'),
(53, 'kerang', 12000, 0, '5f190a5237930.jpeg'),
(54, 'nasi kuning', 15000, 0, '5f190a671e104.jpg'),
(55, 'nasi padang', 15000, 0, '5f190a7895dd7.jpg'),
(56, 'rawon daging sapi', 15000, 0, '5f190a8929aa5.jpg'),
(57, 'sup buntut', 15000, 0, '5f190ab2952b6.jpg'),
(58, 'sate ayam', 15000, 0, '5f190aca2fcbe.jpg'),
(59, 'Ice Tea', 5000, 0, '5f1928e61a799.jpg'),
(60, 'ice tea strawberry', 10000, 0, '5f1928f4afd44.jpg'),
(61, 'ice tea lemon', 6000, 0, '5f19290c79a18.jpg'),
(62, 'teh tarik', 5000, 0, '5f192925a3d96.jpg'),
(63, 'Ice Tea boba', 12000, 0, '5f1929339959d.jpg'),
(66, 'es campur', 12000, 0, '5f357020c0efc.jpg'),
(77, 'Iwak Pitik', 24000, 15000, '5f5e21438273d.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `bahanbaku` varchar(100) NOT NULL,
  `makanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `alamat`, `bahanbaku`, `makanan`) VALUES
(1, 'HJ. Ima', 'Jl. Bengkulu', 'Beras | Kecap | Bawang | Telor', 'Nasi goreng'),
(2, 'Barabai Mahligai', 'Jl. Bumi mas raya, Banjarmasin', 'Daging Sapi | Bawang putih | Bawang merah | Tepung kanji | Lada bubuk | Garam', 'Bakso'),
(3, 'Mama dela', 'Jl. Cemp. Putih Banjarmasin', 'Daging sapi | Santan | Bawang merah | Bawang putih | Jahe | Daun jeruk | Daun salam | Daun kunyit | ', 'Rendang'),
(4, 'Emmy', 'Jl. Pangeran Hidayatullah Banjarmasin', 'Kol | Kacang panjang | Timun | Tahu | Tomat | Kentang | Daun selada | Lontong | Emping | Bawang Gore', 'Gado gado'),
(5, 'Siringan', 'Jl. Kapten Piere Tendean Banjarmasin', 'Merica | Tepung | Telur | Jeruk nipis | Bawang merah | Bawang putih | Cabe rawit', 'Cumi cumi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_login` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_login`, `username`, `password`, `alamat`) VALUES
(19, 'yuansmith', '$2y$10$AfM1rTDGmgRJwLNAVGZINeGshx.Rg2ti805/lNh.ftZAQLwFfyFpi', 'komplek adhi upaya'),
(20, 'yuansandra', '$2y$10$v.JadEqB1Tc5t7pKe3MWjeOATwf2WbVNzvqahcjwdZ/fxQEUpy.vq', 'KOMPLEK ADHI UPAYA'),
(21, 'yusufbudiman', '$2y$10$KJWTM1Bxx7tRrVH8iI7byuAKt/IDyX05fksXC6xKSZco6ccP/aA0y', 'KOMPLEK KAMPUNG BARU '),
(22, 'abiyahya', '$2y$10$f6yQQcltP2dXErfIA9JMYuqYp99S0e0wFIsxEvHj0qoz9K7HsWjBu', 'komplek a yani'),
(23, 'customer', '$2y$10$2TyV4ZdKdl/ZOYMH/6nYf.ByjJGIuCoqEZYRPi93OSRIoU3N7h/NO', 'JL. AHMAD YANI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE `user_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'yuansmith', '$2y$10$gmf/V3HicDZdyM3y561kUu.KmKBQ665A9AzO6uLVUM58HlG4YP9jq'),
(2, 'yusufbudiman', '$2y$10$.mDkxOaV7JkawsRVwBTdYeYLVdAt3w5ykpWcSgr2z5REqo3UYtT.u'),
(3, 'admin', '$2y$10$s8GPNiE5neKsnYK0krC7B.34osstfs044JCpQkef9.riD5B0XQh22');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_keuntungan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_keuntungan` (
`id_stok_makanan` int(11)
,`nama_makanan` varchar(100)
,`harga` int(11)
,`modal` int(11)
,`gambar` varchar(100)
,`keuntungan` double
,`laku` varchar(50)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_keuntungan`
--
DROP TABLE IF EXISTS `v_keuntungan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`makanan`@`localhost` SQL SECURITY DEFINER VIEW `v_keuntungan`  AS  select `smm`.`id_stok_makanan` AS `id_stok_makanan`,`smm`.`nama_makanan` AS `nama_makanan`,`smm`.`harga` AS `harga`,`smm`.`modal` AS `modal`,`smm`.`gambar` AS `gambar`,if(`p`.`jumlah_pesan` is null,0,`p`.`jumlah_pesan`) * (`smm`.`harga` - `smm`.`modal`) AS `keuntungan`,if(`p`.`jumlah_pesan` is null,0,`p`.`jumlah_pesan`) AS `laku` from (`stok_makanan_masuk` `smm` left join (select `pm`.`id_order` AS `id_order`,`pm`.`id_customer` AS `id_customer`,`pm`.`nama_pelanggan` AS `nama_pelanggan`,`pm`.`id_stok_makanan` AS `id_stok_makanan`,`pm`.`nama_makanan` AS `nama_makanan`,`pm`.`alamat` AS `alamat`,`pm`.`jumlah_pesan` AS `jumlah_pesan`,`pm`.`harga` AS `harga`,`pm`.`tanggal` AS `tanggal`,`pm`.`gambar` AS `gambar`,`pm`.`status` AS `status` from `pemesanan` `pm` where `pm`.`jumlah_pesan` = (select `pemesanan`.`jumlah_pesan` from `pemesanan` where `pemesanan`.`id_stok_makanan` = `pm`.`id_stok_makanan` order by `pemesanan`.`jumlah_pesan` desc limit 1)) `p` on(`p`.`id_stok_makanan` = `smm`.`id_stok_makanan`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `datagudang`
--
ALTER TABLE `datagudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indeks untuk tabel `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `konf_pembayaran`
--
ALTER TABLE `konf_pembayaran`
  ADD PRIMARY KEY (`idkonfir_bayar`),
  ADD KEY `id_order` (`id_order`);

--
-- Indeks untuk tabel `konf_pengiriman`
--
ALTER TABLE `konf_pengiriman`
  ADD PRIMARY KEY (`id_konf`),
  ADD KEY `id_order` (`id_order`);

--
-- Indeks untuk tabel `menu_makan`
--
ALTER TABLE `menu_makan`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_stok_makanan` (`id_stok_makanan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `stok_makanan_masuk`
--
ALTER TABLE `stok_makanan_masuk`
  ADD PRIMARY KEY (`id_stok_makanan`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `datagudang`
--
ALTER TABLE `datagudang`
  MODIFY `id_gudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `konf_pembayaran`
--
ALTER TABLE `konf_pembayaran`
  MODIFY `idkonfir_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `konf_pengiriman`
--
ALTER TABLE `konf_pengiriman`
  MODIFY `id_konf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `menu_makan`
--
ALTER TABLE `menu_makan`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `stok_makanan_masuk`
--
ALTER TABLE `stok_makanan_masuk`
  MODIFY `id_stok_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konf_pembayaran`
--
ALTER TABLE `konf_pembayaran`
  ADD CONSTRAINT `konf_pembayaran_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `pemesanan` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konf_pengiriman`
--
ALTER TABLE `konf_pengiriman`
  ADD CONSTRAINT `konf_pengiriman_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `pemesanan` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menu_makan`
--
ALTER TABLE `menu_makan`
  ADD CONSTRAINT `menu_makan_ibfk_1` FOREIGN KEY (`id_stok_makanan`) REFERENCES `stok_makanan_masuk` (`id_stok_makanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
