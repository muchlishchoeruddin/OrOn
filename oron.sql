-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Apr 2018 pada 04.18
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oron`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nis` char(8) NOT NULL,
  `nisn` char(10) DEFAULT NULL,
  `or_id` int(1) DEFAULT NULL,
  `nama_depan` varchar(25) DEFAULT NULL,
  `nama_belakang` varchar(100) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `alasan_masuk_or` text,
  `prinsip` varchar(225) DEFAULT NULL,
  `jabatan` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nis`, `nisn`, `or_id`, `nama_depan`, `nama_belakang`, `kelas`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `alamat`, `alasan_masuk_or`, `prinsip`, `jabatan`) VALUES
('11600001', '0010112202', 3, 'Cahya', 'Ramdansyah', 'XI TKJ 1', 'Subang', '2001-02-10', 'L', 'Islam', 'Subang', 'Ingin meningkatkan ilmu keorganisasian dalam islam', 'Istiqamah', NULL),
('11602017', '0014273429', 1, 'Daffa', 'Alief D', 'XI RPL 2', 'Subang', '2000-12-01', 'L', 'Islam', 'Griya Cinangsi Asri', 'Menjadi lebih lebih baik, bisa mengatur waktu', 'melakukan hal yang baik dan benar untuk masa depan', ''),
('11602059', '0011551341', 1, 'Dewi', 'Susanti', 'XI AK 4', 'Subang', '2001-05-08', 'P', 'Islam', 'Kp. Rancabogo 03/01 Ds. Tambak Mekar', 'Menambah wawasan, meningkatkan public speaking, menambah teman, melatih diri untuk tanggung jawab dan amanah', 'Hidup adalah pilihan dan pilihan adalah hidup', ''),
('11602195', '0005511174', 1, 'Gita', 'Nur Pitri', 'XI AP 2', 'Tasik Malaya', '2000-07-21', 'P', 'Islam', 'Kp. Cipaku RT 04 RW 01 Desa Cibogo Kec. Cibogo', 'Menambah pengalaman, belajar hidup berorganisasi', 'katakan tidak untuk menyerah', 'admin'),
('11602337', '0020213303', 1, 'Muchlish', 'Choeruddin', 'XI RPL 1', 'Subang', '2002-04-07', 'L', 'Islam', 'Blok Padasuka, RT 67 RW 11 Kel. Cigadung - Subang', 'Ingin berubah menjadi lebih baik, mengisi waktu kosong untuk menghindari hal hal yang tidak diharapkan orang tua, menambah pengalaman, dan portofolio', 'gak sungguh-sungguh, gk sukses - Man Jadda waJada', 'admin'),
('11602349', '0008576842', 1, 'Adzrial', 'Fauzi', 'XI TKJ 2', 'Jakarta', '2000-11-10', 'L', 'Islam', 'Kp. Tanjungwangi RT 4 RW 2', '-', 'Nikmati hidup yang sebentar ini dengan melakukan hal yang bermanfaat', ''),
('11602430', '0012597468', 1, 'Prima Dhea', 'Iffa Nabila', 'XI AP 2', 'Bukit Tinggi', '2001-04-11', 'P', 'Islam', 'Perumahan Depag', 'Belajar mandiri dan bertanggung jawab', 'Man Shabara Zhafira', ''),
('11602458', '0009047081', 1, 'Ratu', 'Ainul Yaqin', 'XI AP 2', 'Subang', '2000-08-26', 'P', 'Islam', 'Jl. Panji, blok Padajaya, RT 43 RW 26 no.35 Kel. Cigadung - Subang', 'Mencari pengalaman berorganisasi dan menambah rasa kesosialisasian', 'Berkaryalah sebanyak mungkin sampai kita tak tau berapa banyak kita berkarya', ''),
('11602482', '0012613931', 1, 'Ria', 'Fuzi Zenica', 'XI PS 1', 'Subang', '2001-01-23', 'P', 'Islam', 'Jl. Mt Haryono kel. Cigadung - Subang', 'Belajar menjadi diri bertanggung jawab, disiplin dan dapat menjaga amanah juga menambah wawasan dalam berorganisasi', 'Hidup adalah kesabaran', ''),
('11602593', '0004038468', 1, 'Siti', 'Zulfah', 'XI RPL 2', 'Jakarta', '2000-06-16', 'P', 'Islam', 'Kp Bunut Ds Pangsor RT 22 RW 07 Pagaden Barat - Subang', 'Memperluas wawasan, mendapat pengalaman, belajar merealisasikan segala sesuatu', 'mulai belajar bahwa tekanan membuat mentalmu dirimu menjadi lebih kuat dan bijaksana dalam memandang permasalahan', ''),
('11602606', '0010933970', 1, 'Suci', 'Maharani', 'XI PS 2', 'Subang', '2001-03-02', 'P', 'Islam', 'Kp. Talaga RT 03 RW 01 Desa Jati Kec. Cipunagara - Subang', 'Ingin menjadi contoh yang lebih baik dan teladan untuk siswa siswi yang lainnya, menjadi siswa yang aktif dalam berorganisasi untuk meraih prestasi akademik dan non akademik', 'Manfaatkan masa muda mu dengan hal hal yang bermanfaat bagi nusa bangsa dan agama', ''),
('1160xxx1', '002xxxxxx1', 1, 'Rocxye', 'Redi D.S', 'XI TKJ 1', 'Subang', '2002-04-18', 'L', 'Islam', 'Pasir Harja Sukamelang', 'Ingin bisa bertanggung jawab', 'jadilah diri sendiri jangan menjadi diri orang lain', ''),
('1160xxx2', '000xxxxxx1', 1, 'Rita', 'Destiana Putri', 'XI AK 3', 'Subang', '2000-12-11', 'P', 'Islam', 'Tambak Mekar, Rancabogo', 'ikut berpartisivasi dan mengembangkan kreativitas diri dalam organisasi', 'menjadi generasi bangsa yang mengguncang dunia', ''),
('11700303', '0012599014', 1, 'Istifany', 'Pujiastuti', 'X RPL 1', 'Subang', '2001-09-13', 'P', 'Islam', 'Blok Nusa Indah RT 44 RW 03 Kel Dangdeur - Subang', 'Menambah wawasan dan pengalaman', '-', ''),
('11700355', '0027864793', 1, 'Melia', 'Kartika Yolanda', 'X OTKP 2', 'Bandung', '2002-05-15', 'P', 'Islam', 'Jl. veteran no.2 kampung Hegarsari sukamelang Subang', 'Menambah pengalaman, teman, belajar mengabdikan diri pada sekolah', 'Man Jadda WaJada', ''),
('11700387', '0029186795', 1, 'Muhammad Bintang', 'Fadlillah', 'X RPL 2', 'Tegal', '2002-08-12', 'P', 'Islam', 'Jl. Bima, Sukamekar, kel. Cigadung - Subang', 'Menjadi Pribadi yang lebih bertanggung jawab dan ingin berorganisasi untuk menambah pengalaman diorganisasi itu sendiri', 'Selalu berprasangka positif, karena prasangka Allah sesuai dengan prasangka hambanya', ''),
('11700393', '0022650004', 1, 'Muhammad Iza', 'Haris Fadhillah', 'X TKJ 1', 'Subang', '2002-07-06', 'L', 'Islam', 'Ds. Kaliangsana RT 05 RW 11 Kec. Kalijati - Subang', 'Ingin meningkatkan kemampuan public speaking', 'Standby behind and work silently', ''),
('11700407', '0021778053', 1, 'Naufal', 'Rizki Auliya', 'X TBSM 2', 'Subang', '2002-06-09', 'L', 'Islam', 'Jabong 1 RT 20 RW 06 Desa Curugredeng Kec. Jalancagak - Subang', 'Menambah wawasan berorganisasi, aktif dalam berbagai kegiatan organisasi.', 'From, To, For', ''),
('11700452', '002xxxxxx2', 1, 'Puspita', 'Suryaningsih', 'X AKL 1', 'Subang', '2002-04-27', 'P', 'Islam', 'Kp. Babakan Oncom RT 07 RW 02 Ds Dawuan Kaler Kec. Dawuan - Subang', '-', '-', ''),
('11700467', '0021775109', 1, 'Rafika', 'Cahyani Febrianti', 'X AKL 1', 'Subang', '2002-02-26', 'P', 'Islam', 'Desa Tambak Mekar, Kec. Jalan Cagak - Subang', 'Menambah Wawasan dan menambah banyak teman, belajar memegang amanah dan tanggung jawab.', 'bersyukur adalah cara terindah menikmati hidup', ''),
('11700579', '0029585239', 1, 'Shinta', 'Apriyani', 'X RPL 1', 'Subang', '2002-04-10', 'P', 'Islam', 'Kp. Depong kaler, RT 17 RW 07, desa Parigimulya - Cipunagara', 'Menambah pengalaman, teman.', 'Hargai diri sendiri jika ingin dihargai', ''),
('11700667', '0030298257', 1, 'Veronika', 'Angelita Ziliwu', 'X AKL 3', 'Indramayu', '2003-06-11', 'P', 'Protestan', 'Perumahan Surya Cigadung, Jl. Rajawali 2, Blok U 140d RT 85 RW 25 kel. Cigadung - Subang', 'Ingin mempunyai pengalaman organisasi, ingin belajar tanggung jawab', 'Hidup seperti roda yang berputar', ''),
('11700711', '0027975510', 1, 'Zahra', 'Maharani', 'X RPL 2', 'Subang', '2002-03-14', 'P', 'Islam', 'Ds. kamarung selatan RT 37 RW 10 kec. Pagaden - Subang', 'Menambah pengalaman', 'Ketika kalian mengejar kebahagiaan dunia, jangan lupakan akhirat', ''),
('11702337', '0040415505', 1, 'Jhonny', 'Becky', NULL, 'London', '2004-12-10', 'L', 'Islam', 'Sukamaju', 'wanna be better', 'don''t give up', NULL),
('1170xxx1', '0023853012', 1, 'Restu', 'Adi Prasetyo', 'X RPL 2', 'Subang', '2002-07-08', 'L', 'Islam', 'Jl. Kapten Hanafiah No. 26, RT 96 RW 27, Gang Ipeng, Rawabadak, Karanganyar, Subang Kode Pos:41211', 'Hal utama adalah ingin menambah kepercayaan diri, menambah wawasan sudah pasti, dan ingin mencoba hal yang baru', 'jangan takut akan hari ini, karena hari ini hanyalah masa lalu di masa depan kelak', ''),
('1170xxx3', '002xxxxxx3', 1, 'Diani', '-', 'X OTKP 3', 'Subang', '2002-10-18', 'P', 'Islam', 'Jl. Letnan Ukin RT 34 RW 09 Cibarola, Soklat Subang', 'Ingin meningkatkan kebribadian yang lebih baik lagi dan maju', 'setiap langkah baruku akan menjadi awal baru bagi kebahagian kedua orang tua ku', ''),
('1170xxx4', '0013887949', 1, 'Fitri', 'Yani', 'X AKL 3', 'Subang', '2001-12-25', 'P', 'Islam', 'Ds Kumpay RT 06 RW 02 Jalancagak Subang', 'Mencari pengalaman baru dalam berorganisasi juga bersosialisasi terhadap sesama', 'just work hard, to be a clever girl', ''),
('1170xxx5', '0021556527', 1, 'Cici', 'Amelia', 'X AKL 3', 'Subang', '2002-03-26', 'P', 'Islam', 'Kp Ciherang RT 03 RW 08 Ds Gunung Tua Kec. Cijambe - Subang', 'ingin menambah wawasan dan belajar bersosialisasi dengan baik', 'hari ini harus lebih baik dari hari kemarin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
