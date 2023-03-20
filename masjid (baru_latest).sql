-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 02:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `daerah`
--

CREATE TABLE `daerah` (
  `id_daerah` int(11) NOT NULL,
  `nama_daerah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daerah`
--

INSERT INTO `daerah` (`id_daerah`, `nama_daerah`) VALUES
(1, 'Dungun'),
(2, 'Kuala Terengganu'),
(4, 'Marang');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `id_officer` varchar(255) NOT NULL,
  `img_event` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time_start` varchar(255) NOT NULL,
  `time_end` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `id_officer`, `img_event`, `date`, `time_start`, `time_end`, `place`, `title`, `description`, `status`) VALUES
(3, '1', 'fima.jpg', '2023-01-10', '10.00 AM', '3.00 PM', 'Masjid Kubang Ikan', 'Fima Lifesavers', 'Projek Lifesavers oleh Persekutuan Persatuan Perubatan Islam (FIMA) ialah acara antarabangsa yang melibatkan pelbagai negara. Projek ini dilakukan untuk menyebarkan kesedaran tentang kepentingan CPR. ', 'available'),
(9, '', 'dhuha.jpg', '2023-01-17', '08:00 AM', '11:00 AM', 'Masjid Kristal', 'Program Kuliah Dhuha Bulanan', 'Program yang dilakukan setiap bulan untuk semua penduduk yang berdekatan.', 'available'),
(10, '', 'kursus.jpg', '2023-01-20', '09:00 AM', '1.00 PM', 'Masjid Terapung', 'Kursus Penyembelihan HALAL', 'Kursus penyembelihan HALAL disertakan sijil dan makanan.', 'available'),
(11, '', 'foto.jpg', '2023-01-24', '08:00 AM', '12:00 PM', 'Masjid Kubang Ikan', 'Kursus Fotografi DSLR', 'Peralatan:Kamera DSLR/Mirrorless, laptop, dan lain-lain peralatan', 'available'),
(12, '1', 'mufti.jpg', '2023-01-26', '9.00 AM', '12:00 PM', 'Masjid Kristal', 'Bicara Mufti Siri', 'Program ini dilakukan khas untuk penduduk yang ingin lebih mengenali tentang Mufti ', 'available'),
(13, '1', 'majlis.jpg', '2023-02-05', '08:00 AM', '12:00 PM', 'Masjid Terapung', 'Majlis Bacaan Yasin, Asma ulhusna & Solat Hajat', 'Dimulakan dengan bacaan surah Yasin, Asma\'ulhusna dan Solat Hajat. Majlis dipimpin oleh Al-Habib Naquib bin Muhammad Al-Attas', 'available'),
(14, '1', 'karnival.jpg', '2023-02-11', '8.00 AM', '12.00 PM', 'Masjid Kubang Ikan', 'Karnival Planet Ummah', 'Karnival Planet Ummah Masjid Utama untuk semua penduduk yang terdekat.', 'available'),
(15, '1', 'dermadarah.jpg', '2023-02-15', '8.00 AM', '2.00 PM', 'Masjid Kristal', 'Kempen Derma Darah dan Pameran Kesihatan', 'Pemeriksaan Tekanan Darah & Gula, Pemeriksaan Gigi, Derma Darah dan lain-lain pameran kesihatan dari agensi kerajaan.', 'available'),
(17, '1', 'ceramah.jpg', '2023-02-27', '08:00', '17:00', 'Masjid Terapung', 'Ceramah Perdana - Ustaz Abdul Somad', 'Ceramah Perdana bersama Ustaz Abdul Somad di Masjid Terapung untuk semua penduduk yang terdekat.', 'available'),
(18, '12', 'foodbank.jpg', '2023-03-17', '08:00', '10:00', 'Masjid Negara', 'Food Bank', 'Food bank untuk rakyat berdekatan', 'available'),
(20, '14', 'kuliah.jpg', '2023-03-10', '08:00', '10:00', 'Masjid Lama Sura', 'Kuliah Dhuha', 'Kuliah kali ini berbentuk module bersama Ust Md Mazdiuky Ishak.', 'available'),
(21, '14', 'amalan.jpg', '2023-03-15', '08:00', '12:00', 'Masjid Lama Sura', 'Amalan Bersama Rasulullah', 'Mari sertai kursus Khas sempena Maulidurrasul!', 'available'),
(22, '14', 'baktiterakhir.jpg', '2023-03-17', '09:00', '12:00', 'Masjid Lama Sura', 'Bakti Terakhir Buat Tersayang', 'Dengan kerjasama pengurusan jenazah Al-Hakeem Services BAKTI TERAKHIR ANDA BUAT TERSAYANG', 'available'),
(23, '15', 'malam.jpg', '2023-03-10', '20:00', '22:00', 'Masjid Sultanah Nur Zahirah', 'Malam Seribu Dinar', 'Mari wakaf buat yang tersayang  dan letakkan nama untuk dibacakan Tahlil pada derma wakaf yang anda ingin lakukan.', 'available'),
(24, '15', 'qiyamulail.jpg', '2023-03-17', '20:00', '22:00', 'Masjid Sultanah Nur Zahirah', 'Qiyamulail ', 'Mari hadiri Qiyamulail berjemaah bersama keluarga dan rakan rakan!', 'available'),
(25, '15', 'toharah.jpg', '2023-03-20', '08:00', '10:00', 'Masjid Sultanah Nur Zahirah', 'Toharah', 'Mari Wakaf Buat Yang Tersayang  Letakkan Nama untuk dibacakan Tahlil pada derma wakaf yang anda ingin lakukan.', 'available'),
(26, '16', 'quran.jpg', '2023-03-09', '08:00', '10:00', 'Masjid Sultan Mahmud', 'Jom Belajar Al-Quran', 'Jom Belajar Al-Quran 1 On 1 bersama Ustaz Md Syafiee Md Hassan iaitu setiap slot adalah 25 Minit', 'available'),
(27, '16', 'psikologi.jpg', '2023-03-16', '20:00', '22:00', 'Masjid Sultan Mahmud', 'Psikologi Dakwah Rasulullah', 'Belajar bagaimana cara-cara pendekatan yang diambil oleh Rasulullah ketika beliau berdakwah. ', 'available'),
(28, '16', 'wanita.jpg', '2023-03-18', '08:00', '10:00', 'Masjid Sultan Mahmud', '5 wanita dijamin Syurga', ' Mari kita dengarkan kelebihan 5 wanita syurga ini untuk kita mengamalkannya dalam kehidupan kita. ', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `id_officer` varchar(10) NOT NULL,
  `date_time` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `log_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id_log`, `id_officer`, `date_time`, `log_desc`) VALUES
(2, '7', '23-03-09 06:34:22', 'Ajk Login'),
(3, '7', '23-03-09 09:18:38', 'Ajk Login'),
(4, '7', '23-03-09 01:05:06', 'Ajk Login');

-- --------------------------------------------------------

--
-- Table structure for table `masjid`
--

CREATE TABLE `masjid` (
  `id_masjid` int(11) NOT NULL,
  `nama_masjid` varchar(255) NOT NULL,
  `desc_masjid` varchar(255) NOT NULL,
  `img_masjid` varchar(255) NOT NULL,
  `daerah_masjid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masjid`
--

INSERT INTO `masjid` (`id_masjid`, `nama_masjid`, `desc_masjid`, `img_masjid`, `daerah_masjid`) VALUES
(1, 'Masjid Kristal', 'Masjid Kristal merupakan sebuah masjid yang terletak di Taman Tamadun Islam di Pulau Wan Man, Kuala Terengganu, Terengganu.\r\nMasjid ini dibina daripada kaca dan keluli, masjid pintar pertama di Malaysia dan mempunyai keluasan 2,146 meter persegi.', 'masjidkristal.jpg', 'Kuala Terengganu'),
(2, 'Masjid Terapung', 'Masjid Tengku Tengah Zaharah atau Masjid Terapung terletak 4 km dari pusat bandar Kuala Terengganu. Masjid ini dibina di atas air di muara Sungai Ibai yang sekaligus menjadikan masjid terapung yang terulung di Malaysia.', 'masjidterapung.jpg', 'Kuala Terengganu'),
(3, 'Masjid Kubang Ikan', 'Masjid Kampung Kubang Ikan merupakan sebuah masjid yang terletak di Kampung Kubang Ikan, Cendering,Kuala Terengganu yang boleh memuatkan antara 1500 jemaah malah reka bentuknya menarik perhatian orang ramai malah ada memanggilnya sebagai ‘masjid kaca’.', 'masjidkubangikan.jpg', 'Kuala Terengganu'),
(10, 'Masjid Lama Sura', 'Antara masjid tertua di Dungun ini yang di asaskan pada tahun 1917. Masjid  ini telah begitu pesat membangun dan menjalankan akitivitinya yang berpaksikan kepada kebajikan dan jamaai.', 'lamasura.webp', 'Dungun'),
(11, 'Masjid Sultanah Nur Zahirah', 'Pada 21 Julai 2006, masjid baharu di Marang telah dirasmikan oleh Kebawah Duli Yang Maha Mulia Sultan Mizan Zainal Abidin, Sultan Terengganu dan menamakan Masjid Sultanah Nur Zahirah sebagai penghormatan kepada Permaisuri Terengganu.', 'sultanahnurzahirah.jpg', 'Marang'),
(12, 'Masjid Sultan Mahmud', 'Masjid Sultan Mahmud atau juga dikenali sebagai Masjid Bandar Al-Muktafi Billah Shah, merupakan sebuah masjid yang terletak di Bandar Al-Muktafi Billah Shah, 23400 Dungun, Terengganu.', 'sultanmahmud.jpg', 'Dungun'),
(13, 'Masjid Abidin', ' Masjid Putih atau Masjid Besar merupakan masjid DiRaja negeri Terengganu lama yang dibina oleh Sultan Zainal Abidin II antara 1793 dan 1808. Masjid ini juga dikenali sebagai Masjid Abidin atau Masjid Besar, terletak di Kuala Terengganu.', 'masjidabidin.jpg', 'Kuala Terengganu'),
(14, 'Masjid Al-Hidayah', 'Masjid Al-Hidayah dibina di Banggol Mempelam , Kuala Terengganu.', 'masjidalhidayah.jpg', 'Kuala Terengganu'),
(15, 'Masjid Al-Ikhlas', 'Masjid Al-Ikhlas dibina pada 22 Julai 1997 selepas Jawatankuasa Fatwa Negeri Terengganu bersetuju dengan pembinaannya selepas bermesyuarat pada 23 Jun 1996. ', 'masjidalikhlas.jpg', 'Kuala Terengganu'),
(16, 'Masjid Ar-Ridha', 'Masjid Ar-Ridha merupakan sebuah masjid yang terletak di Kampung Manir, 21200 Kuala Terengganu, Terengganu Darul Iman.', 'masjidarridha.jpg', 'Kuala Terengganu'),
(17, 'Masjid Al-Muttaqin', 'Masjid Al-Muttaqin dibina di Kepong, Kuala Terengganu iaitu berhampiran dengan pasar kepong.', 'masjidalmuttaqin.jpg', 'Kuala Terengganu'),
(18, 'Masjid At-Taqwa', 'Masjid At-Takwa merupakan sebuah masjid yang terletak di Kampung Durian Burung, 20000 Kuala Terengganu Terengganu Darul Iman.', 'masjidattaqwa.jpg', 'Kuala Terengganu'),
(19, 'Masjid Kuala Bekah', 'Masjid Kampung Kuala Bekah merupakan sebuah masjid yang terletak di Kampung Kuala Bekah, Paloh , 21040 Kuala Terengganu Terengganu Darul Iman.', 'masjidkualabekah.jpg', 'Kuala Terengganu'),
(20, 'Masjid Kampung Rantau Abang', 'Masjid Kampung Rantau Abang merupakan sebuah masjid yang terletak di Kampung Rantau Abang Rantau Abang, 23050 Dungun, Terengganu Darul Iman.', 'masjidkgrantauabang.jpg', 'Dungun'),
(21, 'Masjid As-Solihin ', 'Masjid As-Solihin yang dibina di Kampung Durian Mentangau, Dungun, Terengganu.', 'masjidassolihin.jpg', 'Dungun'),
(22, 'Masjid Felda Kerteh 1', 'Masjid Felda Kerteh 1 merupakan sebuah masjid yang terletak di Felda Kerteh 1, Rasau, 23100 Dungun Terengganu Darul Iman.', 'felda1.jpg', 'Dungun'),
(23, 'Masjid Felda Kerteh 2', 'Masjid Felda Kerteh 2 merupakan sebuah masjid yang terletak di Felda Kerteh 2 Ketengah Jaya, Paka Dungun Terengganu Darul Iman.', 'felda2.jpg', 'Dungun'),
(24, 'Masjid Kampung Che Lijah', 'Masjid Kampung Che Lijah merupakan sebuah masjid yang terletak di Kampung Che Lijah, Kuala Dungun, 23000 Dungun Terengganu Darul Iman.', 'kampungchelijah.png', 'Dungun'),
(25, 'Masjid Kampung Jongok Batu', 'Masjid Kampung Jongok Batu merupakan sebuah masjid yang terletak di Kampung Jongok Batu, Pasir Raja, 23000 Dungun Terengganu Darul Iman.', 'masjidkgjongok.jpg', 'Dungun'),
(26, 'Masjid Kampung Pak Sabah', 'Masjid Kampung Pak Sabah merupakan sebuah masjid yang terletak di Kampung Pak Sabah, Kuala Dungun, 23000 Dungun, Terengganu Darul Iman.', 'masjidpaksabah.jpg', 'Dungun'),
(27, 'Masjid Balai Besar', 'Masjid yang dibina di Kampung Balai Besar, Dungun, Terengganu.', 'masjidbalaibesar.jpg', 'Dungun'),
(28, 'Masjid Seberang Marang', 'Masjid Kampung Seberang Marang merupakan sebuah masjid yang terletak di Kampung Seberang Marang, Pulau Kerengga, 21600 Marang, Terengganu Darul Iman.', 'masjidmarang.jpg', 'Marang'),
(29, 'Masjid Jamek Merchang', 'Masjid Merchang merupakan sebuah masjid yang terletak di Mercang, 21610 Marang Terengganu Darul Iman. ', 'masjidjamekmerchang.jpg', 'Marang'),
(30, 'Masjid Pengkalan Berangan', 'Masjid Kampung Pengkalan Berangan merupakan sebuah masjid yang terletak di Kampung Pengkalan Berangan, Jerong, 21400 Marang, Terengganu Darul Iman.', 'masjidpengkalanberangan.jpg', 'Marang'),
(31, 'Masjid Kampung Jerong Seberang', 'Masjid Kampung Jerong Seberang merupakan sebuah masjid yang terletak di Kampung Kampung Jerong Seberang|Jerong Seberang]], Bukit Payong, 21040 Marang, Terengganu.', 'masjidkgjerong.jpg', 'Marang'),
(32, 'Masjid Kampung Alur Limbat', 'Masjid Kampung Alur Limbat dibina di Bukit Payong, Marang, Terengganu', 'masjidkgalurlimbat.jpg', 'Marang'),
(33, 'Masjid Kampung Kijing', 'Masjid Kampung Kijing merupakan sebuah masjid yang terletak di Kampung Kijing, Rusila, 21800 Marang Terengganu Darul Iman.', 'masjidkgjinjing.jpeg', 'Marang'),
(34, 'Masjid Kampung Batangan', 'Masjid Kampung Batangan merupakan sebuah masjid yang terletak di Lot. 6203, Kampung Batangan, Terengganu Darul Iman.', 'kampungbatangan.jpeg', 'Marang'),
(35, 'Masjid Rhu Muda', 'Masjid Kampung Rhu Muda merupakan sebuah masjid yang terletak di Kampung Ru Muda, Pulau Kerengga, 21600 Marang, Terengganu Darul Iman.', 'masjidrhumuda.jpg', 'Marang'),
(36, 'Masjid Kampung Sentul Patah', 'Masjid Kampung Sentul Patah merupakan sebuah masjid yang terletak di Kampung Sentul Patah, Rusila, 21600 Marang, Terengganu Darul Iman.', 'masjidkgsentulpatah.jpg', 'Marang');

-- --------------------------------------------------------

--
-- Table structure for table `masjid_event`
--

CREATE TABLE `masjid_event` (
  `id` int(11) NOT NULL,
  `id_masjid` varchar(100) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masjid_event`
--

INSERT INTO `masjid_event` (`id`, `id_masjid`, `id_event`) VALUES
(1, '8', 3),
(2, '1', 9),
(3, '2', 10),
(4, '3', 11),
(5, '1', 12),
(6, '2', 13),
(7, '3', 14),
(8, '1', 15),
(9, '8', 16),
(10, '2', 17);

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id_officer` int(11) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id_officer`, `staff_id`, `username`, `email`, `address`, `pass`, `status`) VALUES
(7, '2020', 'masjidterapung', 'masjidterapung@gmail.com', '', '123', 'active'),
(8, '10B1', 'masjidkristal', 'masjidkristal@gmail.com', 'uitm', '123', 'active'),
(11, '', 'masjidkubangikan', 'masjidkubangikan@gmail.com', '', '123', 'active'),
(14, '', 'masjidlamasura', 'masjidlamasura@gmail.com', '', '123', 'active'),
(15, '', 'masjidsultanahnurzahirah', 'masjidsultanahnurzahirah@gmail.com', '', '123', 'active'),
(16, '', 'masjidsultanmahmud', 'masjidsultanmahmud@gmail.com', '', '123', 'active'),
(18, '', 'masjidabidin', 'masjidabidin@gmail.com', '', '123', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `officer_masjid`
--

CREATE TABLE `officer_masjid` (
  `id` int(11) NOT NULL,
  `officer_id` varchar(100) NOT NULL,
  `masjid_id` varchar(100) NOT NULL,
  `daerah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer_masjid`
--

INSERT INTO `officer_masjid` (`id`, `officer_id`, `masjid_id`, `daerah`) VALUES
(1, '7', '2', 'Kuala Terengganu'),
(2, '8', '1', 'Kuala Terengganu'),
(4, '11', '3', 'Kuala Terengganu'),
(7, '14', '10', 'Dungun'),
(8, '15', '11', 'Marang'),
(9, '16', '12', 'Dungun'),
(10, '17', '2', 'Kuala Terengganu'),
(11, '18', '13', 'Kuala Terengganu');

-- --------------------------------------------------------

--
-- Table structure for table `user_event`
--

CREATE TABLE `user_event` (
  `id` int(11) NOT NULL,
  `id_event` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_event`
--

INSERT INTO `user_event` (`id`, `id_event`, `id_user`, `status`) VALUES
(108, '17', '1', 'joined'),
(109, '15', '1', 'joined'),
(110, '18', '1', 'joined'),
(111, '9', '1', 'joined');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `poskod` varchar(100) NOT NULL,
  `negeri` varchar(100) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sID` varchar(255) NOT NULL,
  `campus` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `address`, `daerah`, `poskod`, `negeri`, `phone`, `sID`, `campus`, `course_name`, `course_code`, `semester`, `pass`, `cpass`, `user_type`) VALUES
(1, 'misha', 'misha@gmail.com', '3, jalan jenaris d', '', '', '', '0182069623', '2020490848', 'UITM Kampus Kuala Terengganu', 'Computer Science', 'CS110', '5', '123456', '123456', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_user`
--

CREATE TABLE `volunteer_user` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `describe` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `daerah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer_user`
--

INSERT INTO `volunteer_user` (`id`, `id_user`, `name`, `email`, `event`, `describe`, `location`, `daerah`) VALUES
(20, '1', 'misha', 'misha@gmail.com', 'Ceramah Perdana', 'Ceramah perdana secara besar besaran di Masjid Kristal ', 'Masjid Kristal, Kuala Terengganu', ''),
(21, '1', 'misha', 'misha@gmail.com', 'Ceramah Perdana', 'Ceramah Perdana untuk semua masyarakat berdekataan', 'Masjid Negara', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id_daerah`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `masjid`
--
ALTER TABLE `masjid`
  ADD PRIMARY KEY (`id_masjid`);

--
-- Indexes for table `masjid_event`
--
ALTER TABLE `masjid_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id_officer`);

--
-- Indexes for table `officer_masjid`
--
ALTER TABLE `officer_masjid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_event`
--
ALTER TABLE `user_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer_user`
--
ALTER TABLE `volunteer_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daerah`
--
ALTER TABLE `daerah`
  MODIFY `id_daerah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `masjid`
--
ALTER TABLE `masjid`
  MODIFY `id_masjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `masjid_event`
--
ALTER TABLE `masjid_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id_officer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `officer_masjid`
--
ALTER TABLE `officer_masjid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_event`
--
ALTER TABLE `user_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `volunteer_user`
--
ALTER TABLE `volunteer_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
