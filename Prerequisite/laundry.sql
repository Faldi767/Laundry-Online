-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 04:42 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `KodeBarang` int(5) NOT NULL,
  `NmBarang` varchar(50) NOT NULL,
  `Stok` int(10) NOT NULL,
  `TglUpdateStok` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`KodeBarang`, `NmBarang`, `Stok`, `TglUpdateStok`) VALUES
(1, 'Rinso', 70, '2016-03-03'),
(2, 'Attack', 10, '2016-03-02'),
(3, 'jzkaksd', 234, '2016-03-03'),
(4, 'Sabun', 101, '2016-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `jenislaundry`
--

CREATE TABLE `jenislaundry` (
  `IDJenisLaundry` int(5) NOT NULL,
  `NmJenisLaundry` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenislaundry`
--

INSERT INTO `jenislaundry` (`IDJenisLaundry`, `NmJenisLaundry`) VALUES
(1, 'Cuci Bersih'),
(2, 'Cuci Kering'),
(3, 'Cuci Kering Setrika'),
(4, 'Laundry Khusus');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `NIK` varchar(20) NOT NULL,
  `NmKaryawan` varchar(50) NOT NULL,
  `AlmtKaryawan` varchar(50) NOT NULL,
  `TelpKaryawan` varchar(20) NOT NULL,
  `GenderKaryawan` varchar(1) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `NmKaryawan`, `AlmtKaryawan`, `TelpKaryawan`, `GenderKaryawan`, `aktif`) VALUES
('001', 'Muhammad Rifaldi Akbar', 'Malang', '082331033367', 'L', 1),
('002', 'Ramadhan Nur Cholis Januar', 'Pendem', '08212345678', 'L', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `KodeKonsumen` int(5) NOT NULL,
  `NmKonsumen` varchar(50) NOT NULL,
  `AlmKonsumen` varchar(50) NOT NULL,
  `TelpKonsumen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`KodeKonsumen`, `NmKonsumen`, `AlmKonsumen`, `TelpKonsumen`) VALUES
(1, 'Muhammad Rifaldi Akbar', 'Malang', '082331033367'),
(3, 'Ramadhan Nur Cholis Januar', 'Pendem', '08212345678'),
(4, 'Rian Abdillah Hasan', 'Polowijen', '03418428832');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `TypeUser` varchar(2) NOT NULL,
  `NIK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserName`, `Password`, `TypeUser`, `NIK`) VALUES
('admin', 'admin', '1', '001');

-- --------------------------------------------------------

--
-- Table structure for table `pemakaianbarang`
--

CREATE TABLE `pemakaianbarang` (
  `KodePengeluaran` int(5) NOT NULL,
  `Jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemakaianbarang`
--

INSERT INTO `pemakaianbarang` (`KodePengeluaran`, `Jumlah`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `NoPembelian` int(5) NOT NULL,
  `TglPembelian` date NOT NULL,
  `TotalBiaya` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`NoPembelian`, `TglPembelian`, `TotalBiaya`) VALUES
(1, '2016-03-02', 600000),
(2, '2016-03-02', 50000),
(3, '2016-03-03', 120000),
(4, '2016-03-03', 120000),
(5, '2016-03-03', 120000),
(6, '2016-03-03', 123),
(7, '2016-03-03', 500000),
(8, '2016-03-03', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `rincianpembelian`
--

CREATE TABLE `rincianpembelian` (
  `NoRincian` int(10) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `NmBarang` varchar(50) NOT NULL,
  `TglStok` date NOT NULL,
  `Barang` int(5) NOT NULL,
  `NamaSupplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincianpembelian`
--

INSERT INTO `rincianpembelian` (`NoRincian`, `Jumlah`, `NmBarang`, `TglStok`, `Barang`, `NamaSupplier`) VALUES
(1, 600000, 'Rinso', '2016-03-02', 50, ''),
(2, 50000, 'Attack', '2016-03-02', 10, ''),
(3, 120000, 'Rinso', '2016-03-03', 10, ''),
(4, 120000, 'Rinso', '2016-03-03', 10, ''),
(5, 120000, 'Rinso', '2016-03-03', 10, ''),
(6, 123, 'jzkaksd', '2016-03-03', 234, ''),
(7, 5000, 'Sabun', '2016-03-03', 1, 'Unilever2356');

-- --------------------------------------------------------

--
-- Table structure for table `rinciantransaksi`
--

CREATE TABLE `rinciantransaksi` (
  `IDRincian` int(10) NOT NULL,
  `Jumlah` int(10) NOT NULL,
  `JenisLaundry` varchar(20) NOT NULL,
  `Diskon` varchar(4) NOT NULL,
  `IDJenisPakaian` int(10) NOT NULL,
  `Berat` int(10) NOT NULL,
  `JumlahPakaian` int(10) NOT NULL,
  `NamaKonsumen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rinciantransaksi`
--

INSERT INTO `rinciantransaksi` (`IDRincian`, `Jumlah`, `JenisLaundry`, `Diskon`, `IDJenisPakaian`, `Berat`, `JumlahPakaian`, `NamaKonsumen`) VALUES
(1, 18000, 'Cuci Bersih', '10', 1, 0, 0, ''),
(2, 47500, 'Cuci Bersih', '5', 4, 0, 0, ''),
(3, 42750, 'Laundry Khusus', '5', 3, 0, 0, ''),
(4, 14250, 'Cuci Kering', '5', 5, 0, 0, ''),
(5, 950048788, 'Cuci Bersih', '5', 1, 2, 10, ''),
(6, 450023110, 'Cuci Bersih', '10', 1, 1, 5, ''),
(7, 4750, 'Cuci Bersih', '5', 1, 1, 3, 'Rian Abdillah Hasan'),
(8, 4900, 'Cuci Bersih', '2', 1, 1, 20, 'Ramadhan Nur Cholis Januar');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `IDSupplier` int(5) NOT NULL,
  `NmSupplier` varchar(50) NOT NULL,
  `AlmtSupplier` varchar(50) NOT NULL,
  `TelpSupplier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`IDSupplier`, `NmSupplier`, `AlmtSupplier`, `TelpSupplier`) VALUES
(1, 'Unilever', 'Jakarta', '0816756346847');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `IDJenisPakaian` int(10) NOT NULL,
  `NmPakaian` varchar(50) NOT NULL,
  `Tarif` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`IDJenisPakaian`, `NmPakaian`, `Tarif`) VALUES
(1, 'Pakaian Sehari-Hari', 5000),
(2, 'Pakaian Sehari-Hari Express', 6000),
(3, 'Boneka', 3000),
(4, 'Bed Cover', 10000),
(5, 'Tas', 7500),
(6, 'Karpet', 10000),
(7, 'Sepatu', 3000),
(8, 'Jas', 8000),
(9, 'Jaket', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `NoTransaksi` int(5) NOT NULL,
  `TglTransaksi` date NOT NULL,
  `TglAmbil` date NOT NULL,
  `Diskon` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`NoTransaksi`, `TglTransaksi`, `TglAmbil`, `Diskon`) VALUES
(1, '2016-03-02', '2016-03-06', 10),
(2, '2016-03-02', '2016-03-03', 5),
(3, '2016-03-03', '2011-08-01', 5),
(4, '2016-03-03', '2016-03-05', 5),
(5, '2016-03-03', '2016-04-03', 5),
(6, '2016-03-03', '2016-03-05', 10),
(7, '2016-03-03', '2016-04-01', 5),
(8, '2016-03-03', '2012-03-03', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`KodeBarang`);

--
-- Indexes for table `jenislaundry`
--
ALTER TABLE `jenislaundry`
  ADD PRIMARY KEY (`IDJenisLaundry`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`KodeKonsumen`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserName`),
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `pemakaianbarang`
--
ALTER TABLE `pemakaianbarang`
  ADD PRIMARY KEY (`KodePengeluaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`NoPembelian`);

--
-- Indexes for table `rincianpembelian`
--
ALTER TABLE `rincianpembelian`
  ADD PRIMARY KEY (`NoRincian`);

--
-- Indexes for table `rinciantransaksi`
--
ALTER TABLE `rinciantransaksi`
  ADD PRIMARY KEY (`IDRincian`),
  ADD KEY `IDJenisPakaian` (`IDJenisPakaian`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`IDSupplier`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`IDJenisPakaian`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`NoTransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `KodeBarang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jenislaundry`
--
ALTER TABLE `jenislaundry`
  MODIFY `IDJenisLaundry` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `KodeKonsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemakaianbarang`
--
ALTER TABLE `pemakaianbarang`
  MODIFY `KodePengeluaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `NoPembelian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rincianpembelian`
--
ALTER TABLE `rincianpembelian`
  MODIFY `NoRincian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rinciantransaksi`
--
ALTER TABLE `rinciantransaksi`
  MODIFY `IDRincian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `IDSupplier` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `IDJenisPakaian` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `NoTransaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `karyawan` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rinciantransaksi`
--
ALTER TABLE `rinciantransaksi`
  ADD CONSTRAINT `rinciantransaksi_ibfk_1` FOREIGN KEY (`IDJenisPakaian`) REFERENCES `tarif` (`IDJenisPakaian`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
