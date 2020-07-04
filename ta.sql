-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 02:34 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kabid`
--

CREATE TABLE `data_kabid` (
  `id_kabid` int(5) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kabid`
--

INSERT INTO `data_kabid` (`id_kabid`, `nip`, `nama`) VALUES
(4, 325357, 'Dita Agustina');

-- --------------------------------------------------------

--
-- Table structure for table `data_kapal`
--

CREATE TABLE `data_kapal` (
  `id_kapal` int(5) NOT NULL,
  `namakapal` varchar(35) NOT NULL,
  `bendera` varchar(30) NOT NULL,
  `namaperusahaan` varchar(40) NOT NULL,
  `kapasitas` varchar(5) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `bahan` enum('Fibreglass','Aluminium','Baja/Besi','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kapal`
--

INSERT INTO `data_kapal` (`id_kapal`, `namakapal`, `bendera`, `namaperusahaan`, `kapasitas`, `tahun`, `bahan`) VALUES
(1134, 'MV. MARINA BATAM 2/ GT 63', 'INDONESIA', 'PT. MARINATAMA GEMANUSA', '129', '1991', 'Fibreglass'),
(1135, 'MV. MARINA BATAM 10/ GT 85', 'INDONESIA', 'PT. MARINATAMA GEMANUSA', '200', '1993', 'Fibreglass'),
(1136, 'MV. MARINA BATAM 11/ GT 108', 'INDONESIA', 'PT. MARINATAMA GEMANUSA', '180', '2008', 'Fibreglass'),
(1137, 'SB. MARINA SRIKANDI 7 /  GT 20', 'INDONESIA', 'PT. PELRA BUDIMAN INDAH', '64', '2010', 'Fibreglass'),
(1138, 'SB. MARINA SRIKANDI 10 /  GT 3', 'INDONESIA', 'PT. PELRA BUDIMAN INDAH', '112', '2012', 'Fibreglass'),
(1140, 'MV. DUMAI EXPRESS -03/ GT 92', 'INDONESIA', 'PT. LESTARI INDOMA BAHARI', '92', '1993', 'Fibreglass'),
(1141, 'MV. DUMAI EXPRESS -08/ GT 172', 'INDONESIA', 'PT. LESTARI INDOMA BAHARI', '308', '1996', 'Fibreglass'),
(1145, 'MV. BATAM JET - 03/ GT 185', 'INDONESIA', 'PT. BATAM BAHARI SEJAHTERA', '242', '2002', 'Fibreglass'),
(1146, 'MV. ERA MANDIRI / GT 58', 'INDONESIA', 'PT. MARINATAMA GEMANUSA', '121', '2011', 'Fibreglass'),
(1147, 'MV. ERA MANDIRI 2/ GT 92', 'INDONESIA', 'PT. MARINATAMA GEMANUSA', '180', '2013', 'Fibreglass'),
(1148, 'MV. MIKO NATALIA/ GT 67', 'INDONESIA', 'PT. MIKO NATALIA', '105', '1999', 'Fibreglass'),
(1149, 'MV. MIKO NATALIA 33/  GT 68', 'INDONESIA', 'PT. MIKO NATALIA', '120', '1999', 'Fibreglass'),
(1151, 'SB. MARINA SRIKANDI 7 /  GT 20', 'INDONESIA', 'PT. PELRA BUDIMAN INDAH', '72', '2010', 'Fibreglass'),
(1152, 'SB. BINTANG MORO/ GT 20', 'INDONESIA', 'PT. PELRA BUDIMAN INDAH', '76', '2000', 'Fibreglass'),
(1154, 'SB. TOBINDO EXPRESS/ GT 18', 'INDONESIA', 'PT. PELRA AYODHIA BAHARI', '80', '2011', 'Fibreglass'),
(1155, 'SB. TENGGIRI 5/ GT 18', 'INDONESIA', 'PT. PELRA AYODHIA BAHARI', '65', '2010', 'Fibreglass'),
(1156, 'SB. BINTANG RIZKI EXPRESS/ GT ', 'INDONESIA', 'PT. PELRA AYODHIA BAHARI', '80', '2015', 'Fibreglass'),
(1157, 'SB. BUDI JASA 37/ GT 20', 'INDONESIA', 'PT. PELRA AWANG PASS', '80', '2010', 'Fibreglass'),
(1161, 'MV. OCEANNA/ GT 100', 'INDONESIA', 'PT. BARUNA JAYA', '156', '2011', 'Aluminium'),
(1162, 'MV. OCEANNA 1/ GT 101', 'INDONESIA', 'PT. BARUNA JAYA', '166', '2012', 'Aluminium'),
(1163, 'MV. SINDO -1/ GT 144', 'SINGAPORE', 'PT. LAUTAN SARANA NUSANTARA', '220', '1991', 'Aluminium'),
(1164, 'MV. SINDO -6/ GT 121', 'SINGAPORE', 'PT. LAUTAN SARANA NUSANTARA', '200', '1995', 'Aluminium'),
(1167, 'MV. JET RAIDER/ GT 255', 'SINGAPORE', 'PT. BATAM FAST', '338', '1990', 'Aluminium'),
(1168, 'MV. WAVE MASTER -3/ GT 253', 'SINGAPORE', 'PT. PELNAS PACIFIC FERRY LINES', '166', '2000', 'Aluminium'),
(1169, 'MV. WAVE MASTER -5/ GT 253', 'SINGAPORE', 'PT. PELNAS PACIFIC FERRY LINES', '166', '2000', 'Aluminium'),
(1170, 'MV. DUMAI LINE -2/ GT 259', 'INDONESIA', 'PT. LESTARI INDOMA BAHARI', '305', '2010', 'Aluminium'),
(1172, 'SB. MEGA FAJAR 6/ GT 12', 'INDONESIA', 'PT. PELRA BATAM LESTARI BAHARI', '40', '2015', 'Fibreglass'),
(1173, 'KM. KAROMAH 2/ GT 14', 'INDONESIA', 'PT. PELRA TRI MITRA BATAM', '52', '2010', 'Fibreglass'),
(1174, 'MV. MIRANGGA ALPHA / GT 115', 'INDONESIA', 'PT. PINTAS SAMUDRA', '196', '1983', 'Aluminium'),
(1175, 'MV. INDO MASTER 3/ GT 117', 'INDONESIA', 'PT. BAHTERA EMPAT WISESA SHIPPING', '178', '1995', 'Fibreglass'),
(1176, 'MV. WIDI EXPRESS 3/ GT 82', 'INDONESIA', 'PT. INTERNATIONAL GOLDEN SHIPPING', '119', '1995', 'Fibreglass');

-- --------------------------------------------------------

--
-- Table structure for table `data_lokasi`
--

CREATE TABLE `data_lokasi` (
  `id` int(11) NOT NULL,
  `pelabuhan` varchar(50) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_lokasi`
--

INSERT INTO `data_lokasi` (`id`, `pelabuhan`, `latitude`, `longitude`) VALUES
(3, 'PELABUHAN DOMESTIK TELAGA PUNGGUR', 1.0352, 104.133),
(4, 'PELABUHAN BETON BATU AMPAR', 1.1289, 103.925),
(6, 'PELABUHAN PENYEBRANGAN RORO TELAGA PUNGGUR', 1.03353, 104.132),
(19, 'PELABUHAN INTERNASIONAL BATAM CENTERE', 1.13083, 104.055),
(20, 'PELABUHAN INTERNASIONAL HARBOURBAY', 1.15333, 103.997),
(21, 'PELABUHAN INTERNASIONAL KHUSUS PARIWISATA NONGSA', 1.18865, 104.095),
(22, 'PELABUHAN DOMESTIK SEKUPANG', 1.12668, 103.928),
(23, 'PELABUHAN DOMESTIK HARBOUR BAY', 1.15333, 103.997),
(24, 'PELABUHAN INTERNASIONAL SEKUPANG', 1.1257, 103.927),
(26, 'PELABUHAN STULANG LAUT MALAYSIA', 1.47184, 103.781),
(27, 'PELABUHAN TANJUNG BELUNGKOR MALAYSIA', 1.44575, 104.062),
(28, 'PELABUHAN TANJUNG PENGELIH MALAYSIA', 1.36732, 104.105),
(29, 'PELABUHAN TANAH MERAH SINGAPORE', 1.314, 103.989),
(30, 'PELABUHAN PUTERI HARBOUR MALAYSIA', 1.41489, 103.658),
(31, 'PELABUHAN TANJUNG BALAI KARIMUN', 0.988505, 103.436),
(32, 'PELABUHAN SUNGAI PAKNING DUMAI', 1.3775, 102.148);

-- --------------------------------------------------------

--
-- Table structure for table `data_pelabuhan`
--

CREATE TABLE `data_pelabuhan` (
  `id_pelabuhan` int(5) NOT NULL,
  `nama_pel` varchar(60) NOT NULL,
  `jenis` enum('Pelabuhan Internasional','Pelabuhan Domestik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pelabuhan`
--

INSERT INTO `data_pelabuhan` (`id_pelabuhan`, `nama_pel`, `jenis`) VALUES
(152, 'PELABUHAN PENYEBRANGAN RORO TELAGA PUNGGUR', 'Pelabuhan Domestik'),
(154, 'PELABUHAN STULANG LAUT MALAYSIA', 'Pelabuhan Internasional'),
(155, 'PELABUHAN TANJUNG BELUNGKOR MALAYSIA', 'Pelabuhan Internasional'),
(157, 'PELABUHAN TANJUNG PENGELIH MALAYSIA', 'Pelabuhan Internasional'),
(159, 'PELABUHAN TANAH MERAH SINGAPORE', 'Pelabuhan Internasional'),
(160, 'PELABUHAN PUTERI HARBOUR MALAYSIA', 'Pelabuhan Internasional'),
(163, 'PELABUHAN TANJUNG BALAI KARIMUN', 'Pelabuhan Domestik'),
(165, 'PELABUHAN SUNGAI PAKNING DUMAI', 'Pelabuhan Domestik'),
(166, 'PELABUHAN TANJUNG BUTON LINGGA', 'Pelabuhan Domestik'),
(168, 'PELABUHAN SRI BINTAN PURA TANJUNGPINANG', 'Pelabuhan Domestik'),
(169, 'PELABUHAN SRI PAYUNG TANJUNGPINANG', 'Pelabuhan Domestik'),
(170, 'PELABUHAN SELAT PANJANG', 'Pelabuhan Domestik'),
(171, 'PELABUHAN TANJUNG SAMAK', 'Pelabuhan Domestik'),
(172, 'PELABUHAN SUNGAI GUNTUNG', 'Pelabuhan Domestik'),
(173, 'PELABUHAN INTERNASIONAL BATAM CENTERE', 'Pelabuhan Internasional'),
(174, 'PELABUHAN INTERNASIONAL SEKUPANG', 'Pelabuhan Internasional'),
(175, 'PELABUHAN INTERNASIONAL HARBOURBAY', 'Pelabuhan Internasional'),
(176, 'PELABUHAN INTERNASIONAL KHUSUS PARIWISATA NONGSA', 'Pelabuhan Internasional'),
(177, 'PELABUHAN DOMESTIK SEKUPANG', 'Pelabuhan Domestik'),
(178, 'PELABUHAN DOMESTIK TELAGA PUNGGUR', 'Pelabuhan Domestik'),
(185, 'test', 'Pelabuhan Domestik');

-- --------------------------------------------------------

--
-- Table structure for table `data_perusahaan`
--

CREATE TABLE `data_perusahaan` (
  `id_perusahaan` int(5) NOT NULL,
  `namaperusahaan` varchar(40) NOT NULL,
  `kedudukan` enum('Kantor Pusat','Kantor Cabang') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pimpinan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_perusahaan`
--

INSERT INTO `data_perusahaan` (`id_perusahaan`, `namaperusahaan`, `kedudukan`, `alamat`, `pimpinan`) VALUES
(20, 'PT. LESTARI INDOMA BAHARI', 'Kantor Cabang', 'Pelabuhan Domestik Sekupang JL.R.E. Martadinata Sekupang Kelurahan Tanjung Pinggir Kecamatan Sekupan', 'BUDI INDRA SUSANTO'),
(21, 'PT. BATAM BAHARI SEJAHTERA', 'Kantor Pusat', 'Terminal Domestik Pelabuhan Sekupang JL. RE. Martadinata Sekupang Batam', 'TOGU HASIHOLAN S'),
(22, 'PT. MARINATAMA GEMANUSA', 'Kantor Pusat', 'Komplek Ruko Citra Mas Blok A No, 6-7 Jln. Pembangunan  Baloi - Batam & Counter Pelabuhan Domestik S', 'BUDI HALIM'),
(23, 'PT. MIKO NATALIA', 'Kantor Pusat', 'Komplek Pasar Green Land Blok O No. 09-10 Kelurahan Teluk Tering Kecamatan Batam Kota - Batam', 'ABIDIN AMID'),
(24, 'PT. LAUTAN INTI MEGA', 'Kantor Pusat', 'Counter Pelabuhan Domestik Sekupang Batam ', 'HENDY DJUSNI'),
(26, 'PT. PELRA BUDIMAN INDAH', 'Kantor Pusat', 'Komp. Ruko Citra Mas Blok A No, 6-7 Jln. Pembangunan  Baloi - Batam & Counter Pelabuhan Domestik Sek', 'BUDI HALIM'),
(27, 'PT. PELRA AYODHIA BAHARI', 'Kantor Pusat', 'Counter Pelabuhan Domestik Sekupang JL. R.E.Martadinata Sekupang Batam, & JL. Kuda Laut No. 1A Kel.S', 'H. EKMAL YONAS ALBERT'),
(28, 'PT. PELRA AWANG PASS', 'Kantor Pusat', 'JL. R.E. Martadinata No. 3 Pelabuhan Domestik Sekupang Kelurahan Tanjung Pinggir Kecamatan Sekupang ', 'ELIA AGUS'),
(29, 'PT. PELRA BATAM LESTARI BAHARI', 'Kantor Pusat', 'JL. R.E. Martadinata No. 3 Pelabuhan Domestik Sekupang Kelurahan Tanjung Pinggir Kecamatan Sekupang ', 'ASMADI'),
(30, 'PT. PELRA TRI MITRA BATAM', 'Kantor Pusat', 'Bengkong Mahkota Blok D No. 46 Kelurahan Bengkong Laut Kecamatan Bengkong - Batam', 'RUSLAN'),
(32, 'PT. MARINATAMA GEMANUSA', 'Kantor Pusat', 'Pelabuhan Domestik Telaga Punggur Counter No. 6    9     JL. Pattimura/Teluk Nipah RT.01 RW.02   Kel', 'BUDI HALIM'),
(34, 'PT. LAUTAN SARANA NUSANTARA', 'Kantor Pusat', 'Komplek Windsor Central Blok C No. 13 Kelurahan Lubuk Baja Kota Kecamatan Lubuk Baja - Batam', 'HENDY'),
(35, 'PT. BATAM FAST', 'Kantor Pusat', 'AMI Building JL. RE. Martadi nata Lot. 02 RT.01 RW. 04 Sekupang Kel. Tanjung Pinggir Kecamatan Sekup', 'PIPIN KUSNADI'),
(36, 'PT. PELNAS PACIFIC FERRY LINES', 'Kantor Pusat', 'Komplek Mahkota Raya Blok A No. 6 JL. Engku Putri Hamidah Batam Centre Kelurahan Teluk Tering Kecama', 'SUDARMAN'),
(37, 'PT. PINTAS SAMUDRA', 'Kantor Pusat', 'Terminal Ferry Internasional Batam Centre Office No.7 Kelurahan Belian Kecamatan Batam Kota Batam', 'DJAMIAN'),
(40, 'PT. INTERNATIONAL GOLDEN SHIPPING', 'Kantor Pusat', 'Komplek Royal Sincom Blok D No. 11 Batam Centre Kecamatan Batam Kota - Batam Telp. 465330', 'H. SAYUTI. SE. MM');

-- --------------------------------------------------------

--
-- Table structure for table `data_trayek`
--

CREATE TABLE `data_trayek` (
  `id_trayek` int(10) NOT NULL,
  `armada` enum('Armada Internasional','Armada Domestik') NOT NULL,
  `berangkat` time(5) NOT NULL,
  `tujuan` varchar(60) NOT NULL,
  `status` enum('Dioperasikan','Keagenan','Milik') NOT NULL,
  `masaberlaku` date NOT NULL,
  `namaperusahaan` varchar(40) NOT NULL,
  `kedudukan` enum('Kantor Pusat','Kantor Cabang') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pimpinan` varchar(25) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `bendera` varchar(30) NOT NULL,
  `kapasitas` varchar(5) NOT NULL,
  `jumlah` varchar(5) NOT NULL,
  `bahan` enum('Fibreglass','Aluminium','Baja/Besi') NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `p_faktor` float NOT NULL,
  `pelabuhan` varchar(60) NOT NULL,
  `tgl_sekarang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_trayek`
--

INSERT INTO `data_trayek` (`id_trayek`, `armada`, `berangkat`, `tujuan`, `status`, `masaberlaku`, `namaperusahaan`, `kedudukan`, `alamat`, `pimpinan`, `nama`, `bendera`, `kapasitas`, `jumlah`, `bahan`, `tahun`, `keterangan`, `p_faktor`, `pelabuhan`, `tgl_sekarang`) VALUES
(66, 'Armada Domestik', '12:30:00.00000', 'PELABUHAN TANJUNG BALAI KARIMUN', 'Dioperasikan', '2019-08-08', 'PT. PELRA AWANG PASS', 'Kantor Pusat', 'JL. R.E. Martadinata No. 3 Pelabuhan Domestik Sekupang Kelurahan Tanjung Pinggir Kecamatan Sekupang ', 'ELIA AGUS', 'SB. BUDI JASA 37/ GT 20', 'INDONESIA', '80', '76', 'Fibreglass', '2010', 'DISETUJUI', 95, 'PELABUHAN DOMESTIK SEKUPANG', '0000-00-00'),
(71, 'Armada Internasional', '03:03:00.00000', 'PELABUHAN PUTERI HARBOUR MALAYSIA', 'Dioperasikan', '2019-08-15', 'PT. INTERNATIONAL GOLDEN SHIPPING', 'Kantor Pusat', 'Komplek Royal Sincom Blok D No. 11 Batam Centre Kecamatan Batam Kota - Batam Telp. 465330', 'H. SAYUTI. SE. MM', 'MV. WIDI EXPRESS 3/ GT 82', 'INDONESIA', '119', '0', 'Fibreglass', '1995', 'BELUM DISETUJUI', 0, 'PELABUHAN INTERNASIONAL HARBOURBAY', '0000-00-00'),
(72, 'Armada Domestik', '07:15:00.00000', 'PELABUHAN SRI PAYUNG TANJUNGPINANG', 'Milik', '2019-08-20', 'PT. LESTARI INDOMA BAHARI', 'Kantor Cabang', 'Pelabuhan Domestik Sekupang JL.R.E. Martadinata Sekupang Kelurahan Tanjung Pinggir Kecamatan Sekupan', 'BUDI INDRA SUSANTO', 'MV. DUMAI EXPRESS -03/ GT 92', 'INDONESIA', '92', '0', 'Fibreglass', '1993', 'BELUM DISETUJUI', 0, 'PELABUHAN DOMESTIK SEKUPANG', '0000-00-00'),
(73, 'Armada Domestik', '10:30:00.00000', 'PELABUHAN SELAT PANJANG', 'Milik', '2019-08-20', 'PT. BATAM BAHARI SEJAHTERA', 'Kantor Pusat', 'Terminal Domestik Pelabuhan Sekupang JL. RE. Martadinata Sekupang Batam', 'TOGU HASIHOLAN S', 'MV. BATAM JET - 03/ GT 185', 'INDONESIA', '242', '0', 'Fibreglass', '2002', 'BELUM DISETUJUI', 0, 'PELABUHAN DOMESTIK SEKUPANG', '0000-00-00'),
(74, 'Armada Internasional', '06:00:00.00000', 'PELABUHAN TANJUNG PENGELIH MALAYSIA', 'Milik', '2019-08-20', 'PT. PELNAS PACIFIC FERRY LINES', 'Kantor Pusat', 'Komplek Mahkota Raya Blok A No. 6 JL. Engku Putri Hamidah Batam Centre Kelurahan Teluk Tering Kecama', 'SUDARMAN', 'MV. WAVE MASTER -5/ GT 253', 'SINGAPORE', '166', '0', 'Aluminium', '2000', 'BELUM DISETUJUI', 0, 'PELABUHAN INTERNASIONAL BATAM CENTERE', '0000-00-00'),
(75, 'Armada Internasional', '14:00:00.00000', 'PELABUHAN INTERNASIONAL SEKUPANG', 'Dioperasikan', '2019-08-20', 'PT. BATAM FAST', 'Kantor Pusat', 'AMI Building JL. RE. Martadi nata Lot. 02 RT.01 RW. 04 Sekupang Kel. Tanjung Pinggir Kecamatan Sekup', 'PIPIN KUSNADI', 'MV. JET RAIDER/ GT 255', 'SINGAPORE', '338', '200', 'Aluminium', '1990', 'DISETUJUI', 59.1716, 'PELABUHAN INTERNASIONAL KHUSUS PARIWISATA NONGSA', '0000-00-00'),
(76, 'Armada Domestik', '09:30:00.00000', 'PELABUHAN DOMESTIK TELAGA PUNGGUR', 'Milik', '2019-08-20', 'PT. PELRA BATAM LESTARI BAHARI', 'Kantor Pusat', 'JL. R.E. Martadinata No. 3 Pelabuhan Domestik Sekupang Kelurahan Tanjung Pinggir Kecamatan Sekupang ', 'ASMADI', 'SB. MEGA FAJAR 6/ GT 12', 'INDONESIA', '40', '0', 'Fibreglass', '2015', 'BELUM DISETUJUI', 0, 'PELABUHAN DOMESTIK SEKUPANG', '0000-00-00'),
(77, 'Armada Domestik', '07:00:00.00000', 'PELABUHAN SRI PAYUNG TANJUNGPINANG', 'Keagenan', '2019-08-20', 'PT. LAUTAN SARANA NUSANTARA', 'Kantor Pusat', 'Komplek Windsor Central Blok C No. 13 Kelurahan Lubuk Baja Kota Kecamatan Lubuk Baja - Batam', 'HENDY', 'MV. SINDO -6/ GT 121', 'SINGAPORE', '200', '0', 'Aluminium', '1995', 'BELUM DISETUJUI', 0, 'PELABUHAN DOMESTIK SEKUPANG', '2019-05-20'),
(78, 'Armada Domestik', '10:00:00.00000', 'PELABUHAN TANJUNG BUTON LINGGA', 'Dioperasikan', '2019-08-20', 'PT. PELRA TRI MITRA BATAM', 'Kantor Pusat', 'Bengkong Mahkota Blok D No. 46 Kelurahan Bengkong Laut Kecamatan Bengkong - Batam', 'RUSLAN', 'KM. KAROMAH 2/ GT 14', 'INDONESIA', '52', '45', 'Fibreglass', '2010', 'BELUM DISETUJUI', 86.5385, 'PELABUHAN DOMESTIK SEKUPANG', '2019-05-20'),
(79, 'Armada Internasional', '09:00:00.00000', 'PELABUHAN TANAH MERAH SINGAPORE', 'Keagenan', '2019-08-20', 'PT. PINTAS SAMUDRA', 'Kantor Pusat', 'Terminal Ferry Internasional Batam Centre Office No.7 Kelurahan Belian Kecamatan Batam Kota Batam', 'DJAMIAN', 'MV. MIRANGGA ALPHA / GT 115', 'INDONESIA', '196', '100', 'Aluminium', '1983', 'BELUM DISETUJUI', 51.0204, 'PELABUHAN INTERNASIONAL HARBOURBAY', '2019-05-20'),
(86, 'Armada Internasional', '15:15:00.00000', 'PELABUHAN STULANG LAUT MALAYSIA', 'Dioperasikan', '2019-08-20', 'PT. LESTARI INDOMA BAHARI', 'Kantor Cabang', 'Pelabuhan Domestik Sekupang JL.R.E. Martadinata Sekupang Kelurahan Tanjung Pinggir Kecamatan Sekupan', 'BUDI INDRA SUSANTO', 'MV. DUMAI EXPRESS -03/ GT 92', 'INDONESIA', '92', '0', 'Fibreglass', '1993', 'BELUM DISETUJUI', 0, 'PELABUHAN STULANG LAUT MALAYSIA', '2019-05-20'),
(88, 'Armada Internasional', '15:15:00.00000', 'PELABUHAN STULANG LAUT MALAYSIA', 'Dioperasikan', '2019-08-20', 'PT. LESTARI INDOMA BAHARI', 'Kantor Cabang', 'Pelabuhan Domestik Sekupang JL.R.E. Martadinata Sekupang Kelurahan Tanjung Pinggir Kecamatan Sekupan', 'BUDI INDRA SUSANTO', 'MV. DUMAI EXPRESS -03/ GT 92', 'INDONESIA', '92', '0', 'Fibreglass', '1993', 'BELUM DISETUJUI', 0, 'PELABUHAN STULANG LAUT MALAYSIA', '2019-05-20'),
(89, 'Armada Internasional', '15:15:00.00000', 'PELABUHAN STULANG LAUT MALAYSIA', 'Dioperasikan', '2019-08-20', 'PT. LESTARI INDOMA BAHARI', 'Kantor Cabang', 'Pelabuhan Domestik Sekupang JL.R.E. Martadinata Sekupang Kelurahan Tanjung Pinggir Kecamatan Sekupan', 'BUDI INDRA SUSANTO', 'MV. DUMAI EXPRESS -03/ GT 92', 'INDONESIA', '92', '0', 'Fibreglass', '1993', 'BELUM DISETUJUI', 0, 'PELABUHAN STULANG LAUT MALAYSIA', '2019-05-20'),
(90, 'Armada Internasional', '16:19:00.00000', 'PELABUHAN STULANG LAUT MALAYSIA', 'Dioperasikan', '2019-08-21', 'PT. LESTARI INDOMA BAHARI', 'Kantor Cabang', 'Pelabuhan Domestik Sekupang JL.R.E. Martadinata Sekupang Kelurahan Tanjung Pinggir Kecamatan Sekupan', 'BUDI INDRA SUSANTO', 'MV. DUMAI EXPRESS -03/ GT 92', 'INDONESIA', '92', '0', 'Fibreglass', '1993', 'BELUM DISETUJUI', 0, 'PELABUHAN STULANG LAUT MALAYSIA', '2019-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'User', 'user', '123', 'user'),
(3, 'Admin', 'admin', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `nama` varchar(10) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`nama`, `pass`) VALUES
('Admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user_anggota`
--

CREATE TABLE `user_anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_anggota`
--

INSERT INTO `user_anggota` (`id_anggota`, `nama`, `pass`) VALUES
('A001', 'Bella', '12345'),
('A002', 'Haris', '12345'),
('A003', 'ditasss', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user_kasie`
--

CREATE TABLE `user_kasie` (
  `username` varchar(15) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_kasie`
--

INSERT INTO `user_kasie` (`username`, `nama`, `pass`) VALUES
('kasie', 'Rahardi Bintang', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kabid`
--
ALTER TABLE `data_kabid`
  ADD PRIMARY KEY (`id_kabid`);

--
-- Indexes for table `data_kapal`
--
ALTER TABLE `data_kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- Indexes for table `data_lokasi`
--
ALTER TABLE `data_lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pelabuhan`
--
ALTER TABLE `data_pelabuhan`
  ADD PRIMARY KEY (`id_pelabuhan`);

--
-- Indexes for table `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `data_trayek`
--
ALTER TABLE `data_trayek`
  ADD PRIMARY KEY (`id_trayek`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_anggota`
--
ALTER TABLE `user_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `user_kasie`
--
ALTER TABLE `user_kasie`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kabid`
--
ALTER TABLE `data_kabid`
  MODIFY `id_kabid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_kapal`
--
ALTER TABLE `data_kapal`
  MODIFY `id_kapal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1177;
--
-- AUTO_INCREMENT for table `data_lokasi`
--
ALTER TABLE `data_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `data_pelabuhan`
--
ALTER TABLE `data_pelabuhan`
  MODIFY `id_pelabuhan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
--
-- AUTO_INCREMENT for table `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  MODIFY `id_perusahaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `data_trayek`
--
ALTER TABLE `data_trayek`
  MODIFY `id_trayek` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
