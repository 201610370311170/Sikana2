-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2019 pada 02.20
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayi`
--

CREATE TABLE `bayi` (
  `id_bayi` int(11) NOT NULL,
  `No_pasien` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jenis_kelamin` varchar(20) NOT NULL,
  `Tgl_lahir` date NOT NULL,
  `Kategori` varchar(4) NOT NULL,
  `NIK_Ibu` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bayi`
--

INSERT INTO `bayi` (`id_bayi`, `No_pasien`, `Nama`, `Jenis_kelamin`, `Tgl_lahir`, `Kategori`, `NIK_Ibu`) VALUES
(123, 1, '123', 'Laki-Laki', '2018-02-03', 'Umum', 5001),
(2001, 2, 'Dedek', 'Laki-laki', '2016-01-22', 'Umum', 5001),
(2005, 3, 'Andi', 'Laki-laki', '2017-01-24', 'BPJS', 5001),
(2006, 4, 'Ananta', 'Laki-Laki', '2018-02-03', 'BPJS', 5001),
(2009, 5, 'Ashyla', 'Perempuan', '2017-02-06', 'BPJS', 5006),
(2010, 6, 'Asyta', 'Perempuan', '2018-02-05', 'BPJS', 5003);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_rs` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `Nama_dokter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ibu`
--

CREATE TABLE `ibu` (
  `NIK` bigint(16) NOT NULL,
  `No_pasien` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Nomor_Telefon` varchar(50) NOT NULL,
  `Kategori` varchar(10) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ibu`
--

INSERT INTO `ibu` (`NIK`, `No_pasien`, `Nama`, `Alamat`, `Nomor_Telefon`, `Kategori`, `Status`, `Tgl_lahir`) VALUES
(5001, 1, 'Dita', 'Jl.Batanghari', '085516545258', 'BPJS', '', '1990-01-23'),
(5002, 3, 'Contoh', 'Jl.Batanghari', '0845258758', 'Umum', '', '1986-01-01'),
(5003, 4, 'Contoh3', 'Jl.Daun', '085516545258', 'BPJS', '', '2012-02-01'),
(5005, 6, 'Contoh3', 'Jl.Daun', '085516545258', 'BPJS', '', '2008-03-13'),
(5006, 7, 'Anak Bungsu', 'Jl. Kedaung Menteri 3 ', '456', 'BPJS', '', '1973-02-02'),
(5007, 8, 'Pasien', 'Jl. Kayu Manis Semapurew', '8520', 'BPJS', '', '1982-02-06'),
(5008, 9, 'Lila', 'Jl. Cemara', '085516545258', 'Umum', '', '1987-01-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesehatan_anak`
--

CREATE TABLE `kesehatan_anak` (
  `id_periksa` int(11) NOT NULL,
  `id_bayi` int(11) NOT NULL,
  `tanggal_periksa` date NOT NULL,
  `keluhan_sekarang` varchar(100) NOT NULL,
  `Diagnosa` varchar(20) NOT NULL,
  `tekanan_darah` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `dokter_periksa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kesehatan_anak`
--

INSERT INTO `kesehatan_anak` (`id_periksa`, `id_bayi`, `tanggal_periksa`, `keluhan_sekarang`, `Diagnosa`, `tekanan_darah`, `berat_badan`, `tinggi_badan`, `dokter_periksa`) VALUES
(13, 2005, '2019-01-30', '', '', 120, 123, 123, 0),
(16, 2001, '2019-01-02', 'qwe', 'Sakit Kepala\r\n', 123, 123, 123, 20195),
(17, 2001, '2019-02-11', 'Insomnia', 'Insomnia\r\n', 120, 30, 100, 20195),
(18, 2001, '2019-02-12', 'Berat badan berlebih\r\n', '', 120, 120, 120, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesehatan_ibu`
--

CREATE TABLE `kesehatan_ibu` (
  `id_periksa` int(11) NOT NULL,
  `NIK_Ibu` bigint(20) NOT NULL,
  `Tanggal_periksa` date NOT NULL,
  `Keluhan_sekarang` varchar(100) NOT NULL,
  `Diagnosa` varchar(20) NOT NULL,
  `Tekanan_darah` varchar(12) NOT NULL,
  `Berat_badan` int(11) NOT NULL,
  `Tinggi_badan` int(11) NOT NULL,
  `Umur_kehamilan` int(11) NOT NULL,
  `Tinggi_fundus` int(11) NOT NULL,
  `Letak_janin` varchar(30) NOT NULL,
  `Denyut_jantung_janin` int(11) NOT NULL,
  `dokter_periksa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kesehatan_ibu`
--

INSERT INTO `kesehatan_ibu` (`id_periksa`, `NIK_Ibu`, `Tanggal_periksa`, `Keluhan_sekarang`, `Diagnosa`, `Tekanan_darah`, `Berat_badan`, `Tinggi_badan`, `Umur_kehamilan`, `Tinggi_fundus`, `Letak_janin`, `Denyut_jantung_janin`, `dokter_periksa`) VALUES
(46, 5001, '2019-02-12', 'Tidak bisa tidur\r\n', 'Insomnia', '120', 70, 150, 10, 5, 'Baik', 120, 20195),
(47, 5001, '2019-02-11', 'baik', 'Obesitas', '123', 120, 120, 10, 7, 'baik', 120, 20195),
(48, 5002, '2019-02-12', 'Kepala Pusing ', '', '230', 50, 175, 10, 7, 'baik', 75, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `Nama`, `Password`, `Jabatan`, `Alamat`) VALUES
(20195, 'dr. Denis', '21232f297a57a5a743894a0e4a801fc3', 'Dokter', 'Lorong1'),
(20196, 'Yuro', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Addd'),
(20197, 'Fira', '21232f297a57a5a743894a0e4a801fc3', 'Bidan', 'daun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id_rs` int(11) NOT NULL,
  `Nama_RS` varchar(50) NOT NULL,
  `Alamat_RS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id_rs`, `Nama_RS`, `Alamat_RS`) VALUES
(1001, 'Puskesmas Gribig', 'Jl. Raya Ki Ageng Gribig No.97, Madyopuro, Kedungk'),
(1002, 'UPT Puskesmas Pandanwangi', 'Jalan Laksamana Adi Sucipto No.315, Pandanwangi, B'),
(1003, 'Puskesmas Dinoyo', 'Jalan Mayjend M.T. Haryono, Dinoyo, Kecamatan Lowo'),
(1004, 'Puskemas Arjuno', 'Jl. Simpang Arjuno No.17, Kauman, Klojen, Kota Mal'),
(1005, 'Puskesmas Rampal Celaket ', 'Jalan Simpang Kesembon No. 5, Rampal Celaket, Kloj'),
(1006, 'Puskesmas', 'Jl. MT. Haryono 8B, Dinoyo, Kec. Lowokwaru, Kota M'),
(1007, 'Puskesmas Bareng', 'Jl. Bareng Tenes 4A No.639, Bareng, Klojen, Kota M'),
(1008, 'Puskesmas Kedungkandang', 'Jl. Raya Ki Ageng Gribig No.142, Kedungkandang, Ko'),
(1009, 'Puskesmas Kendalsari', 'Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur'),
(1010, 'UPT Puskesmas Janti', 'Jalan Janti, Sukun, Kota Malang, Jawa Timur 65148'),
(1011, 'Puskesmas Mojolangu', 'Jalan Laksamana Adi Sucipto No.315, Pandanwangi, B'),
(1012, 'Puskesmas Mulyorejo', 'Jl. Raya Mulyorejo No.11A, Mulyorejo, Sukun, Kota '),
(1013, 'UPT Puskesmas Kendalkerep', 'Jalan Raya Sulfat No. 100, Purwantoro, Blimbing, B'),
(1014, 'Puskesmas Cisadea', 'Jl. Cisadea No.19, Purwantoro, Blimbing, Kota Mala'),
(1015, 'UPT Puskesmas Mojolangu', 'Jl. Sudimoro No.17, Mojolangu, Kec. Lowokwaru, Kot'),
(1016, 'Puskesmas Arjowinagun', 'Jl. Raya Arjowinangun No.2, Arjowinangun, Kedungka'),
(1017, 'Rumah Sakit dr. Saiful Anwar', 'Jalan Jaksa Agung Suprapto No. 2, Klojen, Kota Mal'),
(1018, 'RSIA', ' Jl. Mayjend. Panjaitan No.170, Penanggungan, Kloj'),
(1019, 'Rumah Sakit Islam UNISMA Malang', 'Jalan Mayor Jenderal Haryono 139, Dinoyo, Kecamata'),
(1020, 'RSI Aisyiyah Malang', ' Jl. Sulawesi No.16, Kasin, Klojen, Kota Malang, J'),
(1021, 'Rumah Sakit Umum Universitas Muhammadiyah Malang', 'Jl. Raya Tlogomas No.45, Dusun Rambaan, Tlogomas, '),
(1022, 'RSUD Kota Malang', ' Jl. Rajasa No.27, Bumiayu, Kedungkandang, Kota Ma'),
(1023, 'RSIA Husada Bunda', 'Malang No. 2, Jl. Pahlawan Trip, Oro-oro Dowo, Klo'),
(1024, 'Rumah Sakit Panti Nirmala', ' Jl. Kebalen Wetan No.2-8, Kotalama, Kedungkandang'),
(1025, 'Rumah Sakit Hermina Tangkubanprahu', 'Jl. Tangkuban Perahu No.31-33, Kauman, Klojen, Kot'),
(1026, 'Rumah Sakit Umum Dr Han Sik Liang', 'Jl. Simpang Ijen No.3, Oro-oro Dowo, Klojen, Kota '),
(1027, 'Rumah Sakit Ibu dan Anak Melati Husada', 'Jalan Kawi No 32 - 34, Gading Kasri, Klojen, Gadin'),
(1028, 'RST Dr. Soepraoen', 'JL. S. Supriyadi, No. 22, Sukun, Kota Malang, Jawa'),
(1029, 'Rumah Sakit Permata Bunda', 'Jl. Soekarno Hatta No.75, Mojolangu, Kec. Lowokwar'),
(1030, 'Rumah Sakit Ibu & Anak Mutiara Bunda', 'Jalan Ciujung No.19, Purwantoro, Blimbing, Purwant');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bayi`
--
ALTER TABLE `bayi`
  ADD PRIMARY KEY (`id_bayi`),
  ADD UNIQUE KEY `No_pasien` (`No_pasien`),
  ADD KEY `NIK_Ibu` (`NIK_Ibu`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_rs` (`id_rs`);

--
-- Indeks untuk tabel `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`NIK`),
  ADD UNIQUE KEY `No_pasien` (`No_pasien`);

--
-- Indeks untuk tabel `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `dokter_periksa` (`dokter_periksa`),
  ADD KEY `kesehatan_anak_ibfk_2` (`id_bayi`);

--
-- Indeks untuk tabel `kesehatan_ibu`
--
ALTER TABLE `kesehatan_ibu`
  ADD PRIMARY KEY (`id_periksa`),
  ADD KEY `NIK_Ibu` (`NIK_Ibu`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id_rs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bayi`
--
ALTER TABLE `bayi`
  MODIFY `No_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ibu`
--
ALTER TABLE `ibu`
  MODIFY `No_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  MODIFY `id_periksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kesehatan_ibu`
--
ALTER TABLE `kesehatan_ibu`
  MODIFY `id_periksa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `NIP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20198;

--
-- AUTO_INCREMENT untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1031;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bayi`
--
ALTER TABLE `bayi`
  ADD CONSTRAINT `bayi_ibfk_1` FOREIGN KEY (`NIK_Ibu`) REFERENCES `ibu` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `rumah_sakit` (`id_rs`);

--
-- Ketidakleluasaan untuk tabel `kesehatan_anak`
--
ALTER TABLE `kesehatan_anak`
  ADD CONSTRAINT `kesehatan_anak_ibfk_2` FOREIGN KEY (`id_bayi`) REFERENCES `bayi` (`id_bayi`);

--
-- Ketidakleluasaan untuk tabel `kesehatan_ibu`
--
ALTER TABLE `kesehatan_ibu`
  ADD CONSTRAINT `kesehatan_ibu_ibfk_1` FOREIGN KEY (`NIK_Ibu`) REFERENCES `ibu` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
