-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 01:54 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museum_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `no_inventaris` int(10) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jenis` varchar(35) NOT NULL,
  `nama_koleksi` varchar(30) NOT NULL,
  `daerah_asal` varchar(50) NOT NULL,
  `tanggal_pembuatan` date DEFAULT NULL,
  `tanggal_pemakaian` date DEFAULT NULL,
  `bentuk` varchar(20) DEFAULT NULL,
  `banyaknya` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `ukuran` varchar(20) DEFAULT NULL,
  `bahan` varchar(50) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `teknik_pembuatan` varchar(20) NOT NULL,
  `deskripsi` text,
  `sejarah` text,
  `foto` text,
  `kondisi` text,
  `kode_qr` text NOT NULL,
  `audio` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koleksi`
--

INSERT INTO `koleksi` (`no_inventaris`, `tanggal_masuk`, `jenis`, `nama_koleksi`, `daerah_asal`, `tanggal_pembuatan`, `tanggal_pemakaian`, `bentuk`, `banyaknya`, `nilai`, `ukuran`, `bahan`, `warna`, `teknik_pembuatan`, `deskripsi`, `sejarah`, `foto`, `kondisi`, `kode_qr`, `audio`) VALUES
(10001, '1983-09-27', 'peralatan', 'Timbangan Surat Kilat Khusus', 'PT. Pos Indonesia (Bag. Aset)', NULL, NULL, 'Segitiga', NULL, NULL, '36 x 39 cm', 'Besi dan plat alumunium', 'Silver dan hijau muda', 'Cetakan', 'Timbangan surat untuk pengiriman surat kilat khusus dengan batas maksimal 100 gram dipergunakan di Pos Indonesia untuk mengetahui berat surat yang akan dikirimkan.Bahan yang dipergunakan adalah besi dan plat alumunium  yang dibuat dengan cara dicetak dengan desain pada bagian bawah terdapat besi yang berbentuk segitiga yang pada salah satunya terdapat bulatan besi seperti skrup yang berfungsi sebagai alat untuk mengatur posisi nol jika alas timbangan tidak rata, selain itu dilengkapi juga dengan tiang penyangga untuk menyimpan alat ukur yang berbentuk oval dengan tiga besi yang menempel pada tiang penyangga ,sehingga apabila dilakukan penimbangan maka alat ukur tersebut akan bergoyang pada angka yang sesuai dengan berat surat yang disimpan pada alat yang berbentuk cekungan yang dikaitkan pada tiang penyangga bagian atas. Selanjutnya pada bagian atas tiang penyangga terdapat lobang untuk membawa timbangan.', 'Timbangan surat kilat khusus dipergunakan khusus untuk pengiriman surat kilat khusus, timbangan ini merupakan  koleksi peralatan di museum Pos Indonesia, benda koleksi tersebut diperoleh dari PT Pos Indonesia yang menjadi sumber untuk mendapatkan benda atau peralatan yang akan dijadikan koleksi museum.  Peralatan atau timbangan tersebut dipergunakan untuk mengetahui berat kiriman surat yang akan dikirimkan oleh PT Pos Indonesia ke  Alamat tujuan atau penerima, timbangan ini dipergunakan pada masa Perum Pos dan Giro.', 'http://192.168.43.33/museum-pos/uploads/images/10001.png', 'Warna timbangan telah banyak di warnai dengan kerak besi baik yang berwarna hitam ataupun putih, selain itu cat warna hijaupun telah ada yang tekelupas pada beberapa bagian timbangan, ada sedikit kerusakan atau penyok pada bagian bawah alat ukur sehingga apabila dipergunakan sedikit macet.', 'http://192.168.43.33/museum-pos/uploads/qrcodes/10001.png', 'http://192.168.43.33/museum-pos/uploads/audios/10001.mp3'),
(10002, '1983-09-27', 'peralatan', 'Timbangan Surat', 'PT. Pos Indonesia (Bag. Aset)', NULL, NULL, 'Segitiga', NULL, NULL, '36 x 39 cm', 'Besi dan plat alumunium', 'Silver dan hijau', 'Cetakan', 'Timbangan surat untuk pengiriman surat kilat khusus dengan batas maksimal 1000 gram dipergunakan di Pos Indonesia untuk mengetahui berat surat yang akan dikirimkan. Bahan yang dipergunakan adalah besi dan plat alumunium yang dibuat dengan cara dicetak dengan desain pada bagian bawah terdapat besi yang berbentuk segitiga yang pada salah satunya terdapat bulatan besi seperti skrup yang berfungsi sebagai alat untuk mengatur posisi nol jika alas timbangan tidak rata, selain itu dilengkapi juga dengan tiang penyangga untuk menyimpan alat ukur yang berbentuk oval dengan tiga besi yang menempel pada tiang penyangga yang diskrup selain itu pada bagian atas dan bagian dalam alat ukur terdapat besi untuk menambah batas maksimal surat yang akan ditimbang,sehingga apabila dilakukan penimbangan maka alat ukur tersebut akan bergoyang pada angka yang sesuai dengan berat surat yang disimpan pada alat yang berbentuk cekungan yang dikaitkan pada tiang penyangga bagian atas. Selanjutnya pada bagian atas tiang penyangga terdapat lobang untuk membawa timbangan, pada tiang penyangga bagian atas terdapat penambahan kayu yang ditempelkan dan diskrup untuk keseimbangan timbangan.', 'Timbangan surat kilat khusus dipergunakan khusus untuk pengiriman surat kilat khusus, timbangan ini merupakan  koleksi peralatan di museum Pos Indonesia, benda koleksi tersebut diperoleh dari PT Pos Indonesia yang menjadi sumber untuk mendapatkan benda atau peralatan yang akan dijadikan koleksi museum.  Peralatan atau timbangan tersebut dipergunakan untuk mengetahui berat kiriman surat yang akan dikirimkan oleh PT Pos Indonesia ke  Alamat tujuan atau penerima, timbangan ini mulai dipergunakan pada masa PTT.', 'http://192.168.43.33/museum-pos/uploads/images/10001.png', 'Timbangan surat tersebut masih bisa dipergunakan karena telah ditambah dengan kayu sebagai penyeimbang timbangan pada bagian atas besi yang menempel ditiang penyangga, untuk bentuk masih dalam kondisi bagus, warna cat hijau masih terlihat seperti aslinya terkecuali pada tiga besi yang menyatu dengan alat ukur warna silver yang terkelupas cukup banyak  akibat dari kerak besi yang dibersihkan dengan digosok terlalu keras. ', 'http://192.168.43.33/museum-pos/uploads/qrcodes/10001.png', 'http://192.168.43.33/museum-pos/uploads/audios/10001.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `koleksis`
--

CREATE TABLE `koleksis` (
  `no_inventaris` varchar(50) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `koleksis`
--

INSERT INTO `koleksis` (`no_inventaris`, `qr_code`, `foto`) VALUES
('12345', 'C:\\xampp\\htdocs\\museum-pos\\application\\../uploads/', ''),
('12345', 'C:\\xampp\\htdocs\\museum-pos\\application\\12345.png', ''),
('11111', '../../uploads/qrcodes/11111.png', ''),
('12345', 'base_urluploads/qrcodes/12345.png', ''),
('12345', 'http://localhost/museum-pos/index.php/uploads/qrco', ''),
('12345', 'http://192.168.43.33/museum-pos/uploads/qrcodes/12', ''),
('12345', 'http://192.168.43.33/museum-pos/uploads/qrcodes/12', ''),
('0505', 'http://192.168.43.33/museum-pos/uploads/qrcodes/05', ''),
('3333', 'http://192.168.43.33/museum-pos/uploads/qrcodes/3333.png', ''),
('9999', 'http://192.168.43.33/museum-pos/uploads/qrcodes/9999.png', ''),
('9999', 'http://192.168.43.33/museum-pos/uploads/qrcodes/9999.png', ''),
('CCCC', 'http://192.168.43.33/museum-pos/uploads/qrcodes/CCCC.png', ''),
('VVVV', 'C:\\xampp\\htdocs\\museum-pos\\application\\../../VVVV.png', ''),
('www', 'C:\\xampp\\htdocs\\museum-pos\\application\\', ''),
('www', 'C:\\xampp\\htdocs\\museum-pos\\application\\', ''),
('www', 'C:\\xampp\\htdocs\\museum-pos\\application\\', ''),
('ccc', 'C:\\xampp\\htdocs\\museum-pos\\application\\', ''),
('ccc', '../../uploads/qrcodes/ccc.png', ''),
('ccc', '../../uploads/qrcodes/ccc.png', ''),
('ccc', 'C:\\xampp\\htdocs\\museum-pos\\uploads/qrcodes/ccc.png', ''),
('121212', 'C:\\xampp\\htdocs\\museum-pos\\uploads/qrcodes/121212.png', ''),
('121212', 'C:\\xampp\\htdocs\\museum-pos\\uploads/qrcodes/121212.png', ''),
('121212', 'C:\\xampp\\htdocs\\museum-pos\\uploads/qrcodes/121212.png', ''),
('121212', 'C:\\xampp\\htdocs\\museum-pos\\uploads/qrcodes/121212.png', ''),
('anjing', 'http://localhost/museum-pos/uploads/qrcodes/anjing.png', ''),
('anjing', './uploads/qrcodes/anjing.png', ''),
('kuy', './uploads/qrcodes/kuy.png', ''),
('rani', './uploads/qrcodes/rani.png', './uploads/images/'),
('riska', './uploads/qrcodes/riska.png', './uploads/images/riska'),
('kira', './uploads/qrcodes/kira.png', './uploads/images/kira'),
('siri', './uploads/qrcodes/siri.png', './uploads/images/siri'),
('siri', './uploads/qrcodes/siri.png', './uploads/images/siri'),
('wooo', './uploads/qrcodes/wooo.png', 'C:/xampp/htdocs/museum-pos/uploads/images/wooo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kritik_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritik_saran`
--

INSERT INTO `kritik_saran` (`id`, `nama`, `email`, `no_hp`, `kritik_saran`) VALUES
(1, 'tayo', 'tayo@tayo.com', '089677709045', 'kepo lu'),
(2, 'andrew', 'andrew@andrew.com', '089677709045', 'apa ya'),
(3, 'Xxx', 'Harun.arrasyid1804@gmail.com', '082319331212 ', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `nik` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'aktif',
  `role` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`, `username`, `password`, `status`, `role`) VALUES
('1174006', 'kadek diva krishna murti', 'situbondo', '1999-09-09', 'jalan merdeka no. 121 denpasar, bali', '089677709045', 'diva', 'aa62f8527389d3b9531faad76d772b9f', 'aktif', 'admin'),
('1174009', 'dwi yulianingsih', 'karawang', '1999-06-06', 'jalan citarum no. 34 karawang, jawa barat', '089677709045', 'dwi', '7aa2602c588c05a93baf10128861aeb9', 'aktif', 'super admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`no_inventaris`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
