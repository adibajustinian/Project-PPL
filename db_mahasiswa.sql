-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 05:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIP` varchar(18) NOT NULL,
  `nama_doswal` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_HP` varchar(15) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `nama_doswal`, `email`, `alamat`, `no_HP`, `foto`) VALUES
('197404011999031002', 'Dr. Aris Puji Widodo, S.Si, M.T', 'arispujiwidodo@lecturer.undip.ac.id', 'Jl. Gunung Pati Raya 19 no.19', '086182361872631', ''),
('197601102009122002', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'dinarmutiara@lecturer.undip.ac.id', 'Jl. Seokarno Hatta I No. 212', '081231928319', ''),
('199112092022041001', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'adhesetyapramayoga@lecturer.undip.ac.id', 'Jl. Jagakarsa 1 no.89', '0868273618723', '');

-- --------------------------------------------------------

--
-- Table structure for table `irs`
--

CREATE TABLE `irs` (
  `id_irs` int(11) NOT NULL,
  `smst_aktif` int(11) DEFAULT NULL,
  `jumlah_sks` int(11) DEFAULT NULL,
  `berkas_irs` varchar(100) DEFAULT NULL,
  `status_irs` varchar(20) NOT NULL,
  `id_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irs`
--

INSERT INTO `irs` (`id_irs`, `smst_aktif`, `jumlah_sks`, `berkas_irs`, `status_irs`, `id_mhs`) VALUES
(1, 9, 126, '', 'Terisi', 1),
(2, 9, 120, '', 'Terisi', 2),
(3, 7, 112, '', 'Terisi', 3),
(4, 8, 22, '', 'Belum Terisi', 4),
(5, NULL, NULL, '', 'Belum Terisi', 5),
(6, 5, 90, '', 'Terisi', 6),
(7, 9, 140, '', 'Terisi', 7),
(8, 9, 141, '', 'Terisi', 8),
(9, NULL, NULL, '', 'Belum Terisi', 9),
(10, 9, 135, '', 'Terisi', 10),
(11, 9, 138, '', 'Terisi', 11),
(12, 9, 140, '', 'Terisi', 12),
(13, NULL, NULL, '', 'Belum Terisi', 13),
(14, 7, 130, '', 'Terisi', 14),
(15, 7, 128, '', 'Terisi', 15),
(16, NULL, NULL, '', 'Belum Terisi', 16),
(17, 7, 131, '', 'Terisi', 17),
(18, 7, 128, '', 'Terisi', 18),
(19, 7, 128, '', 'Terisi', 19),
(20, 7, 131, '', 'Terisi', 20),
(21, 5, 90, '', 'Terisi', 21),
(22, 5, 86, '', 'Terisi', 22),
(23, 5, 70, '', 'Terisi', 23),
(24, NULL, NULL, '', 'Belum Terisi', 24),
(25, 5, 78, '', 'Terisi', 25),
(26, 5, 85, '', 'Terisi', 26),
(27, NULL, NULL, '', 'Belum Terisi', 27),
(28, 5, 90, '', 'Terisi', 28),
(29, 5, 92, '', 'Terisi', 29),
(30, NULL, NULL, '', 'Belum Terisi', 30),
(31, NULL, NULL, '', 'Belum Terisi', 31),
(32, 3, 40, '', 'Terisi', 32),
(33, 3, 49, '', 'Terisi', 33),
(34, NULL, NULL, '', 'Belum Terisi', 34),
(35, 3, 39, '', 'Terisi', 35),
(36, 3, 50, '', 'Terisi', 36),
(37, 3, 45, '', 'Terisi', 37),
(38, NULL, NULL, '', 'Belum Terisi', 38),
(39, 5, 90, '', 'Terisi', 39),
(40, 3, 40, '', 'Terisi', 40),
(41, 13, 138, NULL, 'Terisi', 41),
(42, 11, 138, NULL, 'Terisi', 42),
(43, NULL, NULL, NULL, 'Belum Terisi', 43),
(44, 11, 138, NULL, 'Terisi', 44),
(45, 1, 0, NULL, 'Terisi', 45),
(46, 1, 0, NULL, 'Terisi', 46),
(47, 1, 0, NULL, 'Terisi', 47),
(48, NULL, NULL, NULL, 'Belum Terisi', 48);

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `id_khs` int(11) NOT NULL,
  `smt_aktif` varchar(2) DEFAULT NULL,
  `SKS_semester` varchar(3) DEFAULT NULL,
  `SKS_kumulatif` varchar(3) DEFAULT NULL,
  `IP_smt` float DEFAULT NULL,
  `IP_kumulatif` float DEFAULT NULL,
  `berkas_KHS` varchar(100) DEFAULT NULL,
  `status_khs` varchar(20) NOT NULL,
  `id_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`id_khs`, `smt_aktif`, `SKS_semester`, `SKS_kumulatif`, `IP_smt`, `IP_kumulatif`, `berkas_KHS`, `status_khs`, `id_mhs`) VALUES
(1, '9', '18', '126', 3.91, 3.85, '', 'Terisi', 1),
(2, '7', '21', '110', 3.67, 3.78, '', 'Terisi', 2),
(3, '5', '22', '90', 3.51, 3.45, '', 'Terisi', 3),
(4, '5', '22', '114', 3.7, 3.53, 'dosen.png', 'Terisi', 4),
(5, NULL, NULL, NULL, NULL, NULL, '', 'Belum Terisi', 5),
(6, '5', '20', '84', 3.11, 3.1, '', 'Terisi', 6),
(7, '9', '6', '140', 3.21, 3.28, '', 'Terisi', 7),
(8, '9', '6', '141', 3.75, 3.76, '', 'Terisi', 8),
(9, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Terisi', 9),
(10, '9', '15', '135', 3.87, 3.42, '', 'Terisi', 10),
(11, '9', '6', '138', 3.6, 3.63, '', 'Terisi', 11),
(12, '9', '6', '140', 3.91, 3.87, '', 'Terisi', 12),
(13, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Terisi', 13),
(14, '7', '15', '130', 3.87, 3.43, '', 'Terisi', 14),
(15, '7', '15', '128', 3.54, 3.56, '', 'Terisi', 15),
(16, '7', '15', '129', 3.5, 3.47, '', 'Terisi', 16),
(17, NULL, NULL, NULL, NULL, NULL, '', 'Belum Terisi', 17),
(18, '7', '18', '128', 3.22, 3.55, '', 'Terisi', 18),
(19, '7', '15', '128', 3.67, 3.29, '', 'Terisi', 19),
(20, NULL, NULL, NULL, NULL, NULL, '', 'Belum Terisi', 20),
(21, '5', '22', '90', 3.29, 3.54, '', 'Terisi', 21),
(22, '5', '24', '86', 3.52, 3.67, '', 'Terisi', 22),
(23, '5', '21', '70', 3.47, 3.64, '', 'Terisi', 23),
(24, '5', '22', '65', 3.92, 3.76, '', 'Terisi', 24),
(25, NULL, NULL, NULL, NULL, NULL, '', 'Belum Terisi', 25),
(26, '5', '24', '85', 3.45, 3.55, '', 'Terisi', 26),
(27, '5', '18', '84', 3.61, 3.39, '', 'Terisi', 27),
(28, NULL, NULL, NULL, NULL, NULL, '', 'Belum Terisi', 28),
(29, '5', '18', '92', 3.65, 3.49, '', 'Terisi', 29),
(30, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Terisi', 30),
(31, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Terisi', 31),
(32, '3', '21', '40', 3.67, 3.32, '', 'Terisi', 32),
(33, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Terisi', 33),
(34, '3', '21', '48', 3.67, 3.65, '', 'Terisi', 34),
(35, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Terisi', 35),
(36, '3', '22', '50', 3.21, 3.59, '', 'Terisi', 36),
(37, '3', '18', '45', 3.7, 3.49, '', 'Terisi', 37),
(38, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Terisi', 38),
(39, '5', '22', '90', 3.12, 3.68, '', 'Terisi', 39),
(40, '3', '20', '40', 3.51, 3.67, '', 'Terisi', 40),
(41, '13', '6', '138', 3.21, 3.25, NULL, 'Terisi', 41),
(42, '', '6', '138', 3.33, 3.43, NULL, 'Terisi', 42),
(43, '11', '6', '138', 3.43, 3.34, NULL, 'Terisi', 43),
(44, '1', '21', '0', 0, 0, NULL, 'Terisi', 44),
(45, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Terisi', 45),
(46, '1', '21', '0', 0, 0, NULL, 'Terisi', 46),
(47, '1', '21', '0', 0, 0, NULL, 'Terisi', 47),
(48, NULL, NULL, NULL, NULL, NULL, NULL, 'Belum Terisi', 48);

-- --------------------------------------------------------

--
-- Table structure for table `kota_kab`
--

CREATE TABLE `kota_kab` (
  `kode_kota_kab` varchar(4) NOT NULL,
  `nama_kota_kab` varchar(50) NOT NULL,
  `kode_prov` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota_kab`
--

INSERT INTO `kota_kab` (`kode_kota_kab`, `nama_kota_kab`, `kode_prov`) VALUES
('3171', 'Kota Jakarta Pusat', '31'),
('3172', 'Kota Jakarta Utara', '31'),
('3173', 'Kota Jakarta Barat', '31'),
('3174', 'Kota Jakarta Selatan', '31'),
('3175', 'Kota Jakarta Timur', '31'),
('3201', 'Kab. Bogor', '32'),
('3202', 'Kab. Sukabumi', '32'),
('3271', 'Kota Bogor', '32'),
('3273', 'Kota Bandung', '32'),
('3274', 'Kota Cirebon', '32'),
('3275', 'Kota Bekasi', '32'),
('3321', 'Kab. Demak', '33'),
('3322', 'Kab. Semarang', '33'),
('3326', 'Kab. Pekalongan', '33'),
('3374', 'Kota Semarang', '33'),
('3375', 'Kota Surakarta', '33'),
('3510', 'Kab. Banyuwangi', '35'),
('3524', 'Kab. Lamongan', '35'),
('3573', 'Kota Malang', '35'),
('3576', 'Kota Mojokerto', '35'),
('3578', 'Kota Surabaya', '35');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `NIM` varchar(14) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_HP` varchar(15) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `status` varchar(15) NOT NULL,
  `jalur_masuk` varchar(10) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kode_kota_kab` varchar(4) NOT NULL,
  `nama_doswal` varchar(50) NOT NULL,
  `persetujuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `NIM`, `fakultas`, `nama`, `email`, `alamat`, `no_HP`, `angkatan`, `status`, `jalur_masuk`, `foto`, `kode_kota_kab`, `nama_doswal`, `persetujuan`) VALUES
(1, '24060119120001', 'Sains dan Matematika', 'Hanasui', 'hanasui@students.undip.ac..id', 'jl situ', '08672937126', '2019', 'TIDAK AKTIF', 'SNMPTN', '', '3171', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Disetujui'),
(2, '24060119120002', 'Sains dan Matematika', 'Gugun', 'gugun@students.undip.ac.id', 'Jl. Mana', '0823612793', '2019', 'TIDAK AKTIF', 'SNMPTN', '', '3374', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(3, '24060119130002', 'Sains dan Matematika', 'Laso Suharno', 'larsosuharno@students.undip.ac.id', 'Jl. Hihihihi', '0826172368172', '2019', 'TIDAK AKTIF', 'SBMPTN', '', '3524', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Disetujui'),
(4, '24060120130001', 'Sains dan Matematika', 'Kama', 'kama@students.undip.ac.id', 'Jl. Hahaha', '08237198273', '2020', 'AKTIF', 'SBMPTN', '', '3573', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Belum Disetujui'),
(5, '24060120130005', 'Sains dan Matematika', 'Jamaludin', 'jamaludin@students.undip.ac.id', 'Bogares Kidul', '085269548825', '2020', 'TIDAK AKTIF', 'SNMPTN', '', '3175', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Belum Disetujui'),
(6, '24060120130007', 'Sains dan Matematika', 'Heri', 'heri@students.undp.ac.id', 'Jl Banjarsari', '085698549952', '2020', 'AKTIF', 'MANDIRI', '', '3201', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Disetujui'),
(7, '24060118120001', 'Sains dan Matematika', 'Jodi', 'jodi@students.undip.ac.id', 'Jl. Graha', '0892839231', '2018', 'AKTIF', 'SNMPTN', '', '3171', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(8, '24060118120069', 'Sains dan Matematika', 'Adriel Silaban ', 'adrielsilaban@students.undip.ac.id', 'Jl. Banjarsari no. 19', '082492387423', '2018', 'AKTIF', 'SNMPTN', '', '3173', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Disetujui'),
(9, '24060118130015', 'Sains dan Matematika', 'Atika Resti', 'atikaresti@students.undip.ac.id', 'Jl. Baleurang raya 9 no.1', '081231928372', '2018', 'AKTIF', 'SBMPTN', '', '3174', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Belum Disetujui'),
(10, '24060118130123', 'Sains dan Matematika', 'Yoseph', 'yoseph@students.undip.ac.id', 'Jl. Sidodadi 8 no. 9', '081273918237', '2018', 'AKTIF', 'SBMPTN', '', '3174', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Disetujui'),
(11, '24060118140049', 'Sains dan Matematika', 'Angelica Debby', 'angelicadebby@students.undip.ac.id', 'Jl. Citra Grand k62', '082937263723', '2018', 'AKTIF', 'SBMPTN', '', '3175', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Disetujui'),
(12, '24060118140098', 'Sains dan Matematika', 'Nawfal Fudhayl', 'nawfalfudhayl@students.undip.ac.id', 'Jl. Bukit Anjasmara no.123', '081926371823', '2018', 'AKTIF', 'MANDIRI', '', '3201', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Disetujui'),
(13, '24060118140101', 'Sains dan Matematika', 'Vania Jessica', 'vaniajessica@students.undip.ac.id', 'Jl. Cimanuk 6 no.6', '08162876312', '2018', 'AKTIF', 'MANDIRI', '', '3202', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Belum Disetujui'),
(14, '24060119120003', 'Sains dan Matematika', 'Rijal Zeri', 'rijalzeri@students.undip.ac.id', 'Jl. Kenanga no.34', '0827346823746', '2019', 'AKTIF', 'SNMPTN', '', '3271', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(15, '24060119120006', 'Sains dan Matematika', 'Rayhan Ilyas', 'rayhanilyas@students.undip.ac.id', 'Jl. Pedurungan Raya 9 no. 19', '083462837421', '2019', 'AKTIF', 'SNMPTN', '', '3273', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Disetujui'),
(16, '24060119120023', 'Sains dan Matematika', 'Fedro', 'fedro@students.undip.ac.id', 'Jl. Banjarsari no.82', '08374623642', '2019', 'AKTIF', 'SNMPTN', '', '3274', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Belum Disetujui'),
(17, '24060119130023', 'Sains dan Matematika', 'Maria', 'maria@students.undip.ac.id', 'Jl. Mulawarman 8 no.98', '0821283712831', '2019', 'AKTIF', 'SBMPTN', '', '3275', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Belum Disetujui'),
(18, '24060119130088', 'Sains dan Matematika', 'Farhan Dwicahyo', 'farhandwicahyo@students.undip.ac.id', 'Jl. Maerasari no 102', '08283918231', '2019', 'AKTIF', 'SBMPTN', '', '3275', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(19, '24060119140111', 'Sains dan Matematika', 'Maharani Swastika', 'maharaniswastika@students.undip.ac.id', 'Jl. Ketileng Asri 9 no.12', '0869826312', '2019', 'AKTIF', 'MANDIRI', '', '3321', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Disetujui'),
(20, '24060119140167', 'Sains dan Matematika', 'Abyan Adiatama', 'abyanadiatama@students.undip.ac.id', 'Jl. Madukoro no.9', '087239182731', '2019', 'AKTIF', 'MANDIRI', '', '3321', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Belum Disetujui'),
(21, '24060120120008', 'Sains dan Matematika', 'Melani Safwa', 'melanisafwa@students.undip.ac.id', 'Jl. Banjarsari', '082931923712', '2020', 'AKTIF', 'SNMPTN', '', '3322', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Disetujui'),
(22, '24060120120011', 'Sains dan Matematika', 'Vito Ahmad', 'vitoahmad@students.undip.ac.id', 'Jl. Pendopo 9', '0876889673', '2020', 'AKTIF', 'SNMPTN', '', '3326', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Disetujui'),
(23, '24060120120019', 'Sains dan Matematika', 'Michael Arga', 'michaelarga@students.undip.ac.id', 'Jl. Gerindra Raya 68', '083642783642', '2020', 'AKTIF', 'SNMPTN', '', '3374', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(24, '24060120130002', 'Sains dan Matematika', 'Pijar', 'pijar@students.undip.ac.id', 'Jl. Mulawarman Raya No. 90', '08687263812763', '2020', 'TIDAK AKTIF', 'SBMPTN', '', '3374', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Belum Disetujui'),
(25, '24060120130040', 'Sains dan Matematika', 'Tobias Martin', 'tobiasmartin@students.undip.ac.id', 'Jl. Graha Wahid no.6', '086721764211', '2020', 'AKTIF', 'SBMPTN', '', '3375', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Belum Disetujui'),
(26, '24060120130047', 'Sains dan Matematika', 'Nora Renada', 'norarenada@students.undip.ac.id', 'Jl. Srondol No.13', '0849587235872', '2020', 'AKTIF', 'SBMPTN', '', '3510', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(27, '24060120130080', 'Sains dan Matematika', 'Adiba Justinian', 'adibajustinian@students.undip.ac.id', 'Jl. Sirojudin No.43', '08534928346238', '2020', 'AKTIF', 'SBMPTN', '', '3524', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Belum Disetujui'),
(28, '24060120130160', 'Sains dan Matematika', 'Naufal Taufiqi', 'naufaltaufiqi@students.undip.ac.id', 'Jl. Ngaliyan Indah 3 No.33', '087654335623', '2020', 'AKTIF', 'SBMPTN', '', '3573', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Belum Disetujui'),
(29, '24060120140058', 'Sains dan Matematika', 'Alfian Putra', 'alfianputra@students.undip.ac.id', 'Jl. Graha Estetika no.29', '0812312741283', '2020', 'AKTIF', 'MANDIRI', '', '3576', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Disetujui'),
(30, '24060120140147', 'Sains dan Matematika', 'Nikolas Widad', 'nikolaswidad@students.undip.ac.id', 'Jl. Sirojudin no.87', '08364734682734', '2020', 'AKTIF', 'MANDIRI', '', '3578', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Belum Disetujui'),
(31, '24060120140155', 'Sains dan Matematika', 'Ratih Adiningrum', 'ratihadiningrum@students.undip.ac.id', 'Jl. Beringin Jaya 1 no.1', '08672831723812', '2020', 'AKTIF', 'MANDIRI', '', '3578', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Belum Disetujui'),
(32, '24060121020029', 'Sains dan Matematika', 'Veronika Manalu', 'veronikamanalu@students.undip.ac.id', 'Jl. Medan Raya 2 no.121', '085676327364', '2021', 'AKTIF', 'SNMPTN', '', '3171', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(33, '24060121030004', 'Sains dan Matematika', 'Ivan Andrian', 'ivanandrian@students.undip.ac.id', 'Jl. Sigar Bencah 2 no.22', '08123198273918', '2021', 'AKTIF', 'SBMPTN', '', '3172', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Belum Disetujui'),
(34, '24060121120001', 'Sains dan Matematika', 'Ejaan', 'ejaan@students.undip.ac.id', 'Jl. Mulawarman no. 12', '087666767623', '2021', 'TIDAK AKTIF', 'SNMPTN', '', '3173', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Belum Disetujui'),
(35, '24060121120009', 'Sains dan Matematika', 'Alisya', 'alisya@students.undip.ac.id', 'Jl. Citarum Timur no.32', '087654234567', '2021', 'AKTIF', 'SNMPTN', '', '3174', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Belum Disetujui'),
(36, '24060121120012', 'Sains dan Matematika', 'Ryan SIdabutar', 'ryansidabutar@students.undip.ac.id', 'Jl. Sipodang Barat No.98', '0856725461541', '2021', 'AKTIF', 'SNMPTN', '', '3175', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(37, '24060121130098', 'Sains dan Matematika', 'Fahrel Gibran', 'fahrelgibran@students.undip.ac.id', 'Jl. Panda Raya no.4', '0867823681726', '2021', 'AKTIF', 'SBMPTN', '', '3201', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(38, '24060121140093', 'Sains dan Matematika', 'Andira Faqih', 'andirafaqih@students.undip.ac.id', 'Jl. Ngaliyan 1 no.98', '0852358172351', '2021', 'AKTIF', 'MANDIRI', '', '3202', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Belum Disetujui'),
(39, '24060120140123', 'Sains dan Matematika', 'Septiana', 'septiana@students.undip.ac.id', 'Jl. Semarang Indah II no.123', '081263817231', '2020', 'AKTIF', 'MANDIRI', '', '3374', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Disetujui'),
(40, '24060121140123', 'Sains dan Matematika', 'Liem Roy', 'liemroy@students.undip.ac.id', 'Jl. Gemah Barat no.123', '086127361872361', '2021', 'AKTIF', 'MANDIRI', '', '3174', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(41, '24060116140001', 'Sains dan Matematika', 'Reza Arap', 'rezaarap@students.undip.ac.id', 'Jl. Sipodang 5 No.43', '082638172638172', '2016', 'AKTIF', 'MANDIRI', '', '3172', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Disetujui'),
(42, '24060117120001', 'Sains dan Matematika', 'Elon Musk', 'elonmusk@students.undip.ac.id', 'Jl. Mahagoni no 123', '08627836187231', '2017', 'AKTIF', 'SNMPTN', '', '3173', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Disetujui'),
(43, '24060117130001', 'Sains dan Matematika', 'Wonu', 'wonu@students.undip.ac.id', 'Jl. Althia no. 76', '08765671253812', '2017', 'AKTIF', 'SBMPTN', '', '3321', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Belum Disetujui'),
(44, '24060117140001', 'Sains dan Matematika', 'Joshua', 'joshua@students.undip.ac.id', 'Jl. Klipang Asri 9 no12', '081236187236', '2017', 'AKTIF', 'MANDIRI', '', '3322', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Disetujui'),
(45, '24060122120002', 'Sains dan Matematika', 'Daniel Elul', 'danielelul@students.undip.ac.id', 'Jl. Diponegoro no.19', '08765672517253', '2022', 'AKTIF', 'SNMPTN', '', '3274', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Belum Disetujui'),
(46, '24060122130001', 'Sains dan Matematika', 'Dian Rospita', 'dianrospita@students.undip.ac.id', 'Jl. Maerakaca 10 no.1', '0856215371213', '2022', 'AKTIF', 'SBMPTN', '', '3573', 'Adhe Setya Pramayoga, S.Kom., M.T.', 'Disetujui'),
(47, '24060122130002', 'Sains dan Matematika', 'Garry', 'garry@students.undip.ac.id', 'J. Majapahit barat no.98', '0813652351323', '2022', 'AKTIF', 'SBMPTN', '', '3172', 'Dr. Aris Puji Widodo, S.Si, M.T', 'Disetujui'),
(48, '24060122140001', 'Sains dan Matematika', 'Gybran', 'gybran@students.undip.ac.id', 'Jl. Malika no.12', '087654345678', '2022', 'AKTIF', 'MANDIRI', '', '3275', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.', 'Belum Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `pkl`
--

CREATE TABLE `pkl` (
  `id_pkl` int(11) NOT NULL,
  `status_pkl` varchar(20) NOT NULL,
  `nilai_pkl` float DEFAULT NULL,
  `berkas_PKL` varchar(100) DEFAULT NULL,
  `id_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pkl`
--

INSERT INTO `pkl` (`id_pkl`, `status_pkl`, `nilai_pkl`, `berkas_PKL`, `id_mhs`) VALUES
(1, 'Belum PKL', NULL, NULL, 1),
(2, 'Sudah PKL', 3.88, NULL, 2),
(3, 'Sudah PKL', 3.9, NULL, 3),
(4, 'Sudah PKL', 3.7, 'Proposal Anforcom 2021.pdf', 4),
(5, 'Belum PKL', NULL, NULL, 5),
(6, 'Belum PKL', NULL, NULL, 6),
(7, 'Sudah PKL', 3.5, NULL, 7),
(8, 'Sudah PKL', 3.64, NULL, 8),
(9, 'Sudah PKL', 3.45, NULL, 9),
(10, 'Sudah PKL', 3.75, NULL, 10),
(11, 'Sudah PKL', 3.6, NULL, 11),
(12, 'Sudah PKL', 3.57, NULL, 12),
(13, 'Sudah PKL', 3.5, NULL, 13),
(14, 'Belum PKL', NULL, NULL, 14),
(15, 'Belum PKL', NULL, NULL, 15),
(16, 'Belum PKL', NULL, NULL, 16),
(17, 'Sudah PKL', 3.5, NULL, 17),
(18, 'Belum PKL', NULL, NULL, 18),
(19, 'Sudah PKL', 3.5, NULL, 19),
(20, 'Sudah PKL', 3.65, NULL, 20),
(21, 'Belum PKL', NULL, NULL, 21),
(22, 'Belum PKL', NULL, NULL, 22),
(23, 'Belum PKL', NULL, NULL, 23),
(24, 'Belum PKL', NULL, NULL, 24),
(25, 'Belum PKL', NULL, NULL, 25),
(26, 'Belum PKL', NULL, NULL, 26),
(27, 'Belum PKL', NULL, NULL, 27),
(28, 'Belum PKL', NULL, NULL, 28),
(29, 'Belum PKL', NULL, NULL, 29),
(30, 'Belum PKL', NULL, NULL, 30),
(31, 'Belum PKL', NULL, NULL, 31),
(32, 'Belum PKL', NULL, NULL, 32),
(33, 'Belum PKL', NULL, NULL, 33),
(34, 'Belum PKL', NULL, NULL, 34),
(35, 'Belum PKL', NULL, NULL, 35),
(36, 'Belum PKL', NULL, NULL, 36),
(37, 'Belum PKL', NULL, NULL, 37),
(38, 'Belum PKL', NULL, NULL, 38),
(39, 'Belum PKL', NULL, NULL, 39),
(40, 'Belum PKL', NULL, NULL, 40),
(41, 'Sudah PKL', 3.45, NULL, 41),
(42, 'Sudah PKL', 3.32, NULL, 42),
(43, 'Sudah PKL', 3.56, NULL, 43),
(44, 'Sudah PKL', 3.65, NULL, 44),
(45, 'Belum PKL', NULL, NULL, 45),
(46, 'Belum PKL', NULL, NULL, 46),
(47, 'Belum PKL', NULL, NULL, 47),
(48, 'Belum PKL', NULL, NULL, 48);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `kode_prov` varchar(2) NOT NULL,
  `nama_prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`kode_prov`, `nama_prov`) VALUES
('31', 'DKI Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('35', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE `skripsi` (
  `id_skripsi` int(11) NOT NULL,
  `status_skripsi` varchar(15) NOT NULL,
  `nilai_skripsi` float DEFAULT NULL,
  `berkas_skripsi` varchar(100) DEFAULT NULL,
  `lama_studi` varchar(10) DEFAULT NULL,
  `tanggal_sidang` date DEFAULT NULL,
  `id_mhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`id_skripsi`, `status_skripsi`, `nilai_skripsi`, `berkas_skripsi`, `lama_studi`, `tanggal_sidang`, `id_mhs`) VALUES
(1, 'Sudah Skripsi', 4, '', '9 SEMESTER', '2022-08-12', 1),
(2, 'Sudah Skripsi', 3, '', '9 SEMESTER', '2022-08-10', 2),
(3, 'Belum Skripsi', NULL, NULL, NULL, NULL, 3),
(4, 'Belum Skripsi', 0, 'headphones.jpg', '', '0000-00-00', 4),
(5, 'Belum Skripsi', NULL, NULL, NULL, NULL, 5),
(6, 'Belum Skripsi', NULL, NULL, NULL, NULL, 6),
(7, 'Sudah Skripsi', 4, NULL, '9 SEMESTER', '2022-10-11', 7),
(8, 'Sudah Skripsi', 0, NULL, '9 SEMESTER', '2022-09-22', 8),
(9, 'Belum Skripsi', NULL, NULL, NULL, NULL, 9),
(10, 'Sudah Skripsi', 4, NULL, '9 SEMESTER', '2022-10-13', 10),
(11, 'Sudah Skripsi', 4, NULL, '9 SEMESTER', '2022-10-03', 11),
(12, 'Sudah Skripsi', 3, NULL, '9 SEMESTER', '2022-10-13', 12),
(13, 'Sudah Skripsi', 3, NULL, '9 SEMESTER', '2022-10-25', 13),
(14, 'Belum Skripsi', NULL, NULL, NULL, NULL, 14),
(15, 'Belum Skripsi', NULL, NULL, NULL, NULL, 15),
(16, 'Belum Skripsi', NULL, NULL, NULL, NULL, 16),
(17, 'Belum Skripsi', NULL, NULL, NULL, NULL, 17),
(18, 'Belum Skripsi', NULL, NULL, NULL, NULL, 18),
(19, 'Belum Skripsi', NULL, NULL, NULL, NULL, 19),
(20, 'Sudah Skripsi', 4, NULL, '7 SEMESTER', '2022-10-26', 20),
(21, 'Belum Skripsi', NULL, NULL, NULL, NULL, 21),
(22, 'Belum Skripsi', NULL, NULL, NULL, NULL, 22),
(23, 'Belum Skripsi', NULL, NULL, NULL, NULL, 23),
(24, 'Belum Skripsi', NULL, NULL, NULL, NULL, 24),
(25, 'Belum Skripsi', NULL, NULL, NULL, NULL, 25),
(26, 'Belum Skripsi', NULL, NULL, NULL, NULL, 26),
(27, 'Belum Skripsi', NULL, NULL, NULL, NULL, 27),
(28, 'Belum Skripsi', NULL, NULL, NULL, NULL, 28),
(29, 'Belum Skripsi', NULL, NULL, NULL, NULL, 29),
(30, 'Belum Skripsi', NULL, NULL, NULL, NULL, 30),
(31, 'Belum Skripsi', NULL, NULL, NULL, NULL, 31),
(32, 'Belum Skripsi', NULL, NULL, NULL, NULL, 32),
(33, 'Belum Skripsi', NULL, NULL, NULL, NULL, 33),
(34, 'Belum Skripsi', NULL, NULL, NULL, NULL, 34),
(35, 'Belum Skripsi', NULL, NULL, NULL, NULL, 35),
(36, 'Belum Skripsi', NULL, NULL, NULL, NULL, 36),
(37, 'Belum Skripsi', NULL, NULL, NULL, NULL, 37),
(38, 'Belum Skripsi', NULL, NULL, NULL, NULL, 38),
(39, 'Belum Skripsi', NULL, NULL, NULL, NULL, 39),
(40, 'Belum Skripsi', NULL, NULL, NULL, NULL, 40),
(41, 'Sudah Skripsi', 3, NULL, '13 SEMESTE', '2022-10-26', 41),
(42, 'Belum Skripsi', NULL, NULL, NULL, NULL, 42),
(43, 'Sudah Skripsi', 4, NULL, '11 SEMESTE', '2022-10-25', 43),
(44, 'Sudah Skripsi', 3, NULL, '11 SEMESTE', '2022-10-19', 44),
(45, 'Belum Skripsi', NULL, NULL, NULL, NULL, 45),
(46, 'Belum Skripsi', NULL, NULL, NULL, NULL, 46),
(47, 'Belum Skripsi', NULL, NULL, NULL, NULL, 47),
(48, 'Belum Skripsi', NULL, NULL, NULL, NULL, 48);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `password` varchar(50) NOT NULL,
  `peran` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `NIM` varchar(14) DEFAULT NULL,
  `NIP` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`password`, `peran`, `email`, `NIM`, `NIP`) VALUES
('mahasiswa', 'mahasiswa', 'abyanadiatama@students.undip.ac.id', '24060119140167', NULL),
('dosen', 'dosen', 'adhesetyapramayoga@lecturer.undip.ac.id', NULL, '199112092022041001'),
('mahasiswa', 'mahasiswa', 'adibajustinian@students.undip.ac.id', '24060120130080', NULL),
('mahasiswa', 'mahasiswa', 'adrielsilaban@students.undip.ac.id', '24060118120069', NULL),
('mahasiswa', 'mahasiswa', 'alfianputra@students.undip.ac.id', '24060120140058', NULL),
('mahasiswa', 'mahasiswa', 'alisya@students.undip.ac.id', '24060121120009', NULL),
('mahasiswa', 'mahasiswa', 'andirafaqih@students.undip.ac.id', '24060121140093', NULL),
('mahasiswa', 'mahasiswa', 'angelicadebby@students.undip.ac.id', '24060118140049', NULL),
('dosen', 'dosen', 'arispujiwidodo@lecturer.undip.ac.id', NULL, '197404011999031002'),
('mahasiswa', 'mahasiswa', 'atikaresti@students.undip.ac.id', '24060118130015', NULL),
('mahasiswa', 'mahasiswa', 'benhardsimanulang@students.undip.ac.id', '24060122120001', NULL),
('mahasiswa', 'mahasiswa', 'danielelul@students.undip.ac.id', '24060122120002', NULL),
('mahasiswa', 'mahasiswa', 'dianrospita@students.undip.ac.id', '24060122130001', NULL),
('dosen', 'dosen', 'dinarmutiara@lecturer.undip.ac.id', NULL, '197601102009122002'),
('mahasiswa', 'mahasiswa', 'ejaan@students.undip.ac.id', '24060121120001', NULL),
('mahasiswa', 'mahasiswa', 'elonmusk@students.undip.ac.id', '24060117120001', NULL),
('mahasiswa', 'mahasiswa', 'fahrelgibran@students.undip.ac.id', '24060121130098', NULL),
('mahasiswa', 'mahasiswa', 'farhandwicahyo@students.undip.ac.id', '24060119130088', NULL),
('mahasiswa', 'mahasiswa', 'fedro@students.undip.ac.id', '24060119120023', NULL),
('mahasiswa', 'mahasiswa', 'garry@students.undip.ac.id', '24060122130002', NULL),
('mahasiswa', 'mahasiswa', 'gugun@students.undip.ac.id', '24060119120002', NULL),
('mahasiswa', 'mahasiswa', 'gybran@students.undip.ac.id', '24060122140001', NULL),
('mahasiswa', 'mahasiswa', 'hanasui@students.undip.ac..id', '24060119120001', NULL),
('mahasiswa', 'mahasiswa', 'heri@students.undp.ac.id', '24060121140001', NULL),
('mahasiswa', 'mahasiswa', 'inimhs@students.undip.ac.id', '24060120140001', NULL),
('mahasiswa', 'mahasiswa', 'ivanandrian@students.undip.ac.id', '24060121030004', NULL),
('jamaludin', 'mahasiswa', 'jamaludin@students.undip.ac.id', '24060118140001', NULL),
('mahasiswa', 'mahasiswa', 'jodi@students.undip.ac.id', '24060118120001', NULL),
('mahasiswa', 'mahasiswa', 'jonatan@students.undip.ac.id', '24060122140002', NULL),
('mahasiswa', 'mahasiswa', 'joshua@students.undip.ac.id', '24060117140001', NULL),
('mahasiswa', 'mahasiswa', 'kama@students.undip.ac.id', '24060120130001', NULL),
('mahasiswa', 'mahasiswa', 'larsosuharno@students.undip.ac.id', '24060119130002', NULL),
('mahasiswa', 'mahasiswa', 'liemroy@students.undip.ac.id', '24060121140123', NULL),
('mahasiswa', 'mahasiswa', 'maharaniswastika@students.undip.ac.id', '24060119140111', NULL),
('mahasiswa', 'mahasiswa', 'maria@students.undip.ac.id', '24060119130023', NULL),
('mahasiswa', 'mahasiswa', 'melanisafwa@students.undip.ac.id', '24060120120008', NULL),
('mahasiswa', 'mahasiswa', 'michaelarga@students.undip.ac.id', '24060120120019', NULL),
('mahasiswa', 'mahasiswa', 'naufaltaufiqi@students.undip.ac.id', '24060120130160', NULL),
('mahasiswa', 'mahasiswa', 'nawfalfudhayl@students.undip.ac.id', '24060118140098', NULL),
('mahasiswa', 'mahasiswa', 'nikolaswidad@students.undip.ac.id', '24060120140147', NULL),
('mahasiswa', 'mahasiswa', 'norarenada@students.undip.ac.id', '24060120130047', NULL),
('operator', 'operator', 'operator@operator.undip.ac.id', '', NULL),
('mahasiswa', 'mahasiswa', 'pijar@students.undip.ac.id', '24060120130002', NULL),
('mahasiswa', 'mahasiswa', 'ratihadiningrum@students.undip.ac.id', '24060120140155', NULL),
('mahasiswa', 'mahasiswa', 'rayhanilyas@students.undip.ac.id', '24060119120006', NULL),
('mahasiswa', 'mahasiswa', 'rezaarap@students.undip.ac.id', '24060116140001', NULL),
('mahasiswa', 'mahasiswa', 'rijalzeri@students.undip.ac.id', '24060119120003', NULL),
('mahasiswa', 'mahasiswa', 'ryansidabutar@students.undip.ac.id', '24060121120012', NULL),
('mahasiswa', 'mahasiswa', 'sabdiel@students.undip.ac.id', '24060122140003', NULL),
('departemen', 'departemen', 'samsul@departemen.undip.ac.id', NULL, '199501022017080701'),
('mahasiswa', 'mahasiswa', 'septiana@students.undip.ac.id', '24060120140123', NULL),
('mahasiswa', 'mahasiswa', 'tobiasmartin@students.undip.ac.id', '24060120130040', NULL),
('mahasiswa', 'mahasiswa', 'vaniajessica@students.undip.ac.id', '24060118140101', NULL),
('mahasiswa', 'mahasiswa', 'veronikamanalu@students.undip.ac.id', '24060121020029', NULL),
('mahasiswa', 'mahasiswa', 'vitoahmad@students.undip.ac.id', '24060120120011', NULL),
('mahasiswa', 'mahasiswa', 'wonu@students.undip.ac.id', '24060117130001', NULL),
('mahasiswa', 'mahasiswa', 'yoseph@students.undip.ac.id', '24060118130123', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nama_doswal` (`nama_doswal`);

--
-- Indexes for table `irs`
--
ALTER TABLE `irs`
  ADD PRIMARY KEY (`id_irs`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indexes for table `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`id_khs`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indexes for table `kota_kab`
--
ALTER TABLE `kota_kab`
  ADD PRIMARY KEY (`kode_kota_kab`),
  ADD KEY `kode_prov` (`kode_prov`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `nama_doswal` (`nama_doswal`),
  ADD KEY `kode_kota_kab` (`kode_kota_kab`);

--
-- Indexes for table `pkl`
--
ALTER TABLE `pkl`
  ADD PRIMARY KEY (`id_pkl`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`kode_prov`);

--
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`id_skripsi`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `irs`
--
ALTER TABLE `irs`
  MODIFY `id_irs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `khs`
--
ALTER TABLE `khs`
  MODIFY `id_khs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `pkl`
--
ALTER TABLE `pkl`
  MODIFY `id_pkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id_skripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

--
-- Constraints for table `irs`
--
ALTER TABLE `irs`
  ADD CONSTRAINT `irs_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE,
  ADD CONSTRAINT `irs_ibfk_2` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE;

--
-- Constraints for table `khs`
--
ALTER TABLE `khs`
  ADD CONSTRAINT `khs_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE;

--
-- Constraints for table `kota_kab`
--
ALTER TABLE `kota_kab`
  ADD CONSTRAINT `kota_kab_ibfk_1` FOREIGN KEY (`kode_prov`) REFERENCES `provinsi` (`kode_prov`);

--
-- Constraints for table `pkl`
--
ALTER TABLE `pkl`
  ADD CONSTRAINT `pkl_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE;

--
-- Constraints for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD CONSTRAINT `skripsi_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
