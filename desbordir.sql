-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 10:38 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `desbordir`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `idbarang` int(11) NOT NULL AUTO_INCREMENT,
  `stokbrg` varchar(25) NOT NULL,
  `detailbrg` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`idbarang`,`stokbrg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `barang`
--


-- --------------------------------------------------------

--
-- Table structure for table `ongkirr`
--

CREATE TABLE IF NOT EXISTS `ongkirr` (
  `idkota` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(50) NOT NULL,
  `ongkir` int(11) NOT NULL,
  PRIMARY KEY (`idkota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `ongkirr`
--

INSERT INTO `ongkirr` (`idkota`, `kota`, `ongkir`) VALUES
(7, 'Palembang', 32000),
(8, 'Jambi', 25000),
(9, 'Jakarta', 33000),
(10, 'Karawang', 36000),
(11, 'Cilegon', 36000),
(12, 'Subang', 30000),
(13, 'Indramayu', 26000),
(14, 'Cirebon', 22000),
(15, 'Serang', 22000),
(16, 'Garut', 26000),
(17, 'Cianjur', 26000),
(18, 'Sukabumi', 22000),
(19, 'Gresik', 30000),
(20, 'Kediri', 34000),
(21, 'Lamongan', 34000),
(22, 'Madiun', 34000),
(23, 'Malang', 34000),
(24, 'Mojokerto', 34000),
(25, 'Ponorogo', 38000),
(26, 'Probolinggo', 34000),
(27, 'Sidoarjo', 30000),
(28, 'Surabaya', 30000),
(29, 'Boyolalli', 29000),
(30, 'Solo', 25000),
(31, 'Cilacap', 25000),
(32, 'Demak', 29000),
(33, 'Jepara', 29000),
(34, 'Kebumen', 29000),
(35, 'Purworejo', 29000),
(36, 'Bantul', 25000),
(37, 'Bandung', 22000),
(38, 'Semarang', 25000),
(39, 'Yogyakarta', 25000),
(40, 'Bekasi', 22000),
(41, 'Depok', 22000),
(42, 'Tangerang', 22000),
(43, 'Bogor', 22000),
(44, 'Tebing TInggi', 27000),
(45, 'Lahat', 40000),
(46, 'Lubuk Linggau', 40000),
(47, 'Muko-Muko', 42000),
(48, 'Bengkulu', 36000),
(49, 'Sarolangun', 40000),
(50, 'Bangko', 30000),
(51, 'Muara Tebo', 40000),
(52, 'Batam', 28000),
(53, 'Bengkalis', 24000),
(54, 'Tembilahan', 24000),
(55, 'Rengat', 24000),
(56, 'Bangkinang', 24000),
(57, 'Selat Panjang', 30000),
(58, 'Teluk Kuantan', 24000),
(59, 'Pangkalan Kerinci', 24000),
(60, 'Pasir Pangaraian', 24000),
(61, 'Siak', 30000),
(62, 'Dumai', 24000),
(63, 'Pekanbaru', 17000),
(64, 'Lubuk Basung', 11000),
(65, 'Painan', 11000),
(66, 'Solok', 11000),
(67, 'Padang Aro', 11000),
(68, 'Batusangkar', 11000),
(69, 'Sawahlunto', 11000),
(70, 'Padang Panjang', 11000),
(71, 'Pariaman', 11000),
(72, 'Payakumbuh', 11000),
(73, 'Kisaran', 31000),
(74, 'Lubuk Pakam', 31000),
(75, 'Kota Pinang', 25000),
(76, 'Binjai', 31000),
(77, 'Kijang Bintan', 63000),
(78, 'Medan', 25000),
(79, 'Padang Sidempuan', 31000),
(80, 'Tanjung Balai', 38000),
(81, 'Banda Aceh', 55000),
(82, 'Makasar', 55000),
(83, 'Kendari', 77000),
(84, 'Pare-Pare', 64000),
(85, 'Gorontalo', 77000),
(86, 'Ketapang', 42000),
(87, 'Pontianak', 52000),
(88, 'Sambas', 61000),
(89, 'Palangkaraya', 57000),
(90, 'Samarinda', 70000),
(91, 'Banjarbaru', 54000),
(92, 'Banjarmasin', 54000),
(93, 'Balikpapan', 65000),
(94, 'Bontang', 73000),
(95, 'Denpasar', 33000),
(96, 'Kupang', 77000),
(97, 'Mataram', 39000),
(98, 'Sumbawa', 46000),
(99, 'Ambon', 77000),
(100, 'Ternate', 88000),
(101, 'Jayapura', 132000),
(102, 'Manokwari', 141000),
(103, 'Merauke', 141000),
(104, 'Sicincin', 15000),
(105, 'Padang', 11000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `idpelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `usernamepel` varchar(25) NOT NULL,
  `passwordpel` varchar(25) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jk` varchar(12) NOT NULL,
  PRIMARY KEY (`idpelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `usernamepel`, `passwordpel`, `nama_pelanggan`, `nohp`, `alamat`, `jk`) VALUES
(1, 'ijep', 'ijep', 'da jep', '09929289302', 'bukittinggi', 'Laki Laki'),
(2, 'toni', 'toni', 'toni a', '0812121212112', 'padang', 'Laki Laki');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_barang`
--

CREATE TABLE IF NOT EXISTS `pesan_barang` (
  `idpesanan` int(11) NOT NULL AUTO_INCREMENT,
  `idpelanggan` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`idpesanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `pesan_barang`
--

INSERT INTO `pesan_barang` (`idpesanan`, `idpelanggan`, `idbarang`, `kota`, `alamat`, `nama_barang`, `jumlah`, `total`, `tgl_pesan`, `foto`) VALUES
(60, 10, 12, 'Padang', 'Ujung tanah', 'Anak Daro', 1, 1000000, '2020-01-01', 'WhatsApp Image 2020-01-08 at 15.22.54.jpeg'),
(61, 10, 36, 'Padang', 'Ujung Tanah', 'Anting Telepom', 2, 50000, '2020-01-17', 'sasa.jpg'),
(62, 13, 56, 'Medan', 'Jl. Karya Gang Suka Damai No.22', 'Sunting Kurai Emas', 10, 1250000, '2020-01-23', 'bni.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_penjualan`
--

CREATE TABLE IF NOT EXISTS `transaksi_penjualan` (
  `idtransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `kdbrg` varchar(25) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `foto` text NOT NULL,
  `tgl_transaksi` date NOT NULL,
  PRIMARY KEY (`idtransaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `transaksi_penjualan`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama_user`, `username`, `password`) VALUES
(1, 'admin 1', 'admin', 'admin'),
(2, 'Pimpinan', 'pimpinan', 'pimpinan');
