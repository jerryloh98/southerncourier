-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 04:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `name`, `address`, `city`, `state`, `contact`) VALUES
(1, 'Branch 1', 'SUC', 'Johor Bahru', 'Johor', '1234'),
(2, 'Branch 2', 'AS', 'Alor Setar', 'Kedah', '123'),
(3, 'Branch 3', 'SP', 'Sungai Petani', 'Kedah', '12345'),
(4, 'Branch 4', 'KL', 'Kampung Lemal', 'Kelantan', '123'),
(5, 'Branch 5', 'K', 'Ketereh', 'Kelantan', '123'),
(6, 'Branch 6', 'KB', 'Kota Bharu', 'Kelantan', '123'),
(7, 'Branch 7', 'PM', 'Pasir Mas', 'Kelantan', '123'),
(8, 'Branch 8', 'PC', 'Pulai Chondong', 'Kelantan', '123'),
(9, 'Branch 9', 'T', 'Tumpat', 'Kelantan', '123'),
(10, 'Branch 10', 'KL', 'Kuala Lumpur', 'Kuala Lumpur', '123'),
(11, 'Branch 11', 'L', 'Labuan', 'Labuan', '123'),
(12, 'Branch 12', 'M', 'Melaka', 'Melaka', '123'),
(13, 'Branch 13', 'S', 'Seremban', 'Negeri Sembilan', '123'),
(14, 'Branch 14', 'K', 'Kuantan', 'Pahang', '123'),
(15, 'Branch 15', 'I', 'Ipoh', 'Perak', '123'),
(16, 'Branch 16', 'K', 'Kangar', 'Perlis', '123'),
(17, 'Branch 17', 'B', 'Butterworth', 'Pulau Pinang', '123'),
(18, 'Branch 18', 'GT', 'George Town', 'Pulau Pinang', '123'),
(19, 'Branch 19', 'P', 'Putrajaya', 'Putrajaya', '123'),
(20, 'Branch 20', 'KK', 'Kota Kinabalu', 'Sabah', '123'),
(21, 'Branch 21', 'S', 'Sandakan', 'Sabah', '123'),
(22, 'Branch 22', 'K', 'Kuching', 'Sarawak', '123'),
(23, 'Branch 23', 'K', 'Klang', 'Selangor', '123'),
(24, 'Branch 24', 'PJ', 'Petaling Jaya', 'Selangor', '123'),
(25, 'Branch 25', 'SA', 'Shah Alam', 'Selangor', '123'),
(26, 'Branch 26', 'KT', 'Kuala Terengganu', 'Terengganu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `pid` int(5) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Semail` varchar(30) NOT NULL,
  `Snumber` varchar(11) NOT NULL,
  `Saddress` varchar(256) NOT NULL,
  `Spostcode` int(5) NOT NULL,
  `Sstate` varchar(20) NOT NULL,
  `Scity` varchar(20) NOT NULL,
  `Sdate` date NOT NULL,
  `Rname` varchar(20) NOT NULL,
  `Remail` varchar(30) NOT NULL,
  `Rnumber` varchar(11) NOT NULL,
  `Raddress` varchar(256) NOT NULL,
  `Rpostcode` int(5) NOT NULL,
  `Rstate` varchar(20) NOT NULL,
  `Rcity` varchar(20) NOT NULL,
  `trackingNo` int(10) NOT NULL,
  `weight` float NOT NULL,
  `content` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `Timestamp` datetime NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state_city`
--

CREATE TABLE `state_city` (
  `id` int(5) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `city` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state_city`
--

INSERT INTO `state_city` (`id`, `state`, `city`) VALUES
(1, 'Johor', 'Ayer Baloi'),
(2, 'Johor', 'Ayer Hitam'),
(3, 'Johor', 'Ayer Tawar 2'),
(4, 'Johor', 'Bandar Penawar'),
(5, 'Johor', 'Bandar Tenggara'),
(6, 'Johor', 'Batu Anam'),
(7, 'Johor', 'Batu Pahat'),
(8, 'Johor', 'Bekok'),
(9, 'Johor', 'Benut'),
(10, 'Johor', 'Bukit Gambir'),
(11, 'Johor', 'Bukit Pasir'),
(12, 'Johor', 'Chaah'),
(13, 'Johor', 'Endau'),
(14, 'Johor', 'Gelang Patah'),
(15, 'Johor', 'Gerisek'),
(16, 'Johor', 'Gugusan Taib Andak'),
(17, 'Johor', 'Jementah'),
(18, 'Johor', 'Johor Bahru'),
(19, 'Johor', 'Kahang'),
(20, 'Johor', 'Kluang'),
(21, 'Johor', 'Kota Tinggi'),
(22, 'Johor', 'Kukup'),
(23, 'Johor', 'Kulai'),
(24, 'Johor', 'Labis'),
(25, 'Johor', 'Layang-Layang'),
(26, 'Johor', 'Masai'),
(27, 'Johor', 'Mersing'),
(28, 'Johor', 'Muar'),
(29, 'Johor', 'Nusajaya'),
(30, 'Johor', 'Pagoh'),
(31, 'Johor', 'Paloh'),
(32, 'Johor', 'Panchor'),
(33, 'Johor', 'Parit Jawa'),
(34, 'Johor', 'Parit Raja'),
(35, 'Johor', 'Parit Sulong'),
(36, 'Johor', 'Pasir Gudang'),
(37, 'Johor', 'Pekan Nenas'),
(38, 'Johor', 'Pengerang'),
(39, 'Johor', 'Pontian'),
(40, 'Johor', 'Pulau Satu'),
(41, 'Johor', 'Rengam'),
(42, 'Johor', 'Rengit'),
(43, 'Johor', 'Segamat'),
(44, 'Johor', 'Semerah'),
(45, 'Johor', 'Senai'),
(46, 'Johor', 'Senggarang'),
(47, 'Johor', 'Seri Gading'),
(48, 'Johor', 'Seri Medan'),
(49, 'Johor', 'Simpang Rengam'),
(50, 'Johor', 'Sungai Mati'),
(51, 'Johor', 'Tangkak'),
(52, 'Johor', 'Ulu Tiram'),
(53, 'Johor', 'Yong Peng'),
(54, 'Kedah', 'Alor Setar'),
(55, 'Kedah', 'Ayer Hitam'),
(56, 'Kedah', 'Baling'),
(57, 'Kedah', 'Bandar Baharu'),
(58, 'Kedah', 'Bedong'),
(59, 'Kedah', 'Bukit Kayu Hitam'),
(60, 'Kedah', 'Changloon'),
(61, 'Kedah', 'Gurun'),
(62, 'Kedah', 'Jeniang'),
(63, 'Kedah', 'Jitra'),
(64, 'Kedah', 'Karangan'),
(65, 'Kedah', 'Kepala Batas'),
(66, 'Kedah', 'Kodiang'),
(67, 'Kedah', 'Kota Kuala Muda'),
(68, 'Kedah', 'Kota Sarang Semut'),
(69, 'Kedah', 'Kuala Kedah'),
(70, 'Kedah', 'Kuala Ketil'),
(71, 'Kedah', 'Kuala Nerang'),
(72, 'Kedah', 'Kuala Pegang'),
(73, 'Kedah', 'Kulim'),
(74, 'Kedah', 'Kupang'),
(75, 'Kedah', 'Langgar'),
(76, 'Kedah', 'Langkawi'),
(77, 'Kedah', 'Lunas'),
(78, 'Kedah', 'Merbok'),
(79, 'Kedah', 'Padang Serai'),
(80, 'Kedah', 'Pendang'),
(81, 'Kedah', 'Pokok Sena'),
(82, 'Kedah', 'Serdang'),
(83, 'Kedah', 'Sik'),
(84, 'Kedah', 'Simpang Empat'),
(85, 'Kedah', 'Sungai Petani'),
(86, 'Kedah', 'Yan'),
(87, 'Kelantan', 'Ayer Lanas'),
(88, 'Kelantan', 'Bachok'),
(89, 'Kelantan', 'Cherang Ruku'),
(90, 'Kelantan', 'Dabong'),
(91, 'Kelantan', 'Gua Musang'),
(92, 'Kelantan', 'Jeli'),
(93, 'Kelantan', 'Kem Desa Pahlawan'),
(94, 'Kelantan', 'Ketereh'),
(95, 'Kelantan', 'Kota Bharu'),
(96, 'Kelantan', 'Kuala Balah'),
(97, 'Kelantan', 'Kuala Krai'),
(98, 'Kelantan', 'Machang'),
(99, 'Kelantan', 'Melor'),
(100, 'Kelantan', 'Pasir Mas'),
(101, 'Kelantan', 'Pasir Puteh'),
(102, 'Kelantan', 'Pulai Chondong'),
(103, 'Kelantan', 'Rantau Panjang'),
(104, 'Kelantan', 'Selising'),
(105, 'Kelantan', 'Tanah Merah'),
(106, 'Kelantan', 'Temangan'),
(107, 'Kelantan', 'Tumpat'),
(108, 'Kelantan', 'Wakaf Bharu'),
(109, 'Kuala Lumpur', 'Hulu Langat'),
(110, 'Kuala Lumpur', 'Kuala Lumpur'),
(111, 'Labuan', 'Labuan'),
(112, 'Melaka', 'Alor Gajah'),
(113, 'Melaka', 'Asahan'),
(114, 'Melaka', 'Ayer Keroh'),
(115, 'Melaka', 'Bemban'),
(116, 'Melaka', 'Durian Tunggal'),
(117, 'Melaka', 'Jasin'),
(118, 'Melaka', 'Kem Trendak'),
(119, 'Melaka', 'Kuala Sungai Baru'),
(120, 'Melaka', 'Lubok China'),
(121, 'Melaka', 'Masjid Tanah'),
(122, 'Melaka', 'Melaka'),
(123, 'Melaka', 'Merlimau'),
(124, 'Melaka', 'Selandar'),
(125, 'Melaka', 'Sungai Rambai'),
(126, 'Melaka', 'Sungai Udang'),
(127, 'Melaka', 'Tanjong Kling'),
(128, 'Negeri Sembilan', 'Bahau'),
(129, 'Negeri Sembilan', 'Bandar Enstek'),
(130, 'Negeri Sembilan', 'Bandar Seri Jempol'),
(131, 'Negeri Sembilan', 'Batu Kikir'),
(132, 'Negeri Sembilan', 'Gemas'),
(133, 'Negeri Sembilan', 'Gemencheh'),
(134, 'Negeri Sembilan', 'Johol'),
(135, 'Negeri Sembilan', 'Kota'),
(136, 'Negeri Sembilan', 'Kuala Klawang'),
(137, 'Negeri Sembilan', 'Kuala Pilah'),
(138, 'Negeri Sembilan', 'Labu'),
(139, 'Negeri Sembilan', 'Linggi'),
(140, 'Negeri Sembilan', 'Mantin'),
(141, 'Negeri Sembilan', 'Nilai'),
(142, 'Negeri Sembilan', 'Port Dickson'),
(143, 'Negeri Sembilan', 'Pusat Bandar Palong'),
(144, 'Negeri Sembilan', 'Rantau'),
(145, 'Negeri Sembilan', 'Rembau'),
(146, 'Negeri Sembilan', 'Rompin'),
(147, 'Negeri Sembilan', 'Seremban'),
(148, 'Negeri Sembilan', 'Si Rusa'),
(149, 'Negeri Sembilan', 'Simpang Durian'),
(150, 'Negeri Sembilan', 'Simpang Pertang'),
(151, 'Negeri Sembilan', 'Tampin'),
(152, 'Negeri Sembilan', 'Tanjong Ipoh'),
(153, 'Pahang', 'Balok'),
(154, 'Pahang', 'Bandar Bera'),
(155, 'Pahang', 'Bandar Pusat Jengka'),
(156, 'Pahang', 'Bandar Tun Abdul Razak'),
(157, 'Pahang', 'Benta'),
(158, 'Pahang', 'Bentong'),
(159, 'Pahang', 'Brinchang'),
(160, 'Pahang', 'Bukit Fraser'),
(161, 'Pahang', 'Bukit Goh'),
(162, 'Pahang', 'Bukit Kuin'),
(163, 'Pahang', 'Chenor'),
(164, 'Pahang', 'Chini'),
(165, 'Pahang', 'Damak'),
(166, 'Pahang', 'Dong'),
(167, 'Pahang', 'Gambang'),
(168, 'Pahang', 'Genting Highlands'),
(169, 'Pahang', 'Jerantut'),
(170, 'Pahang', 'Karak'),
(171, 'Pahang', 'Kemayan'),
(172, 'Pahang', 'Kuala Krau'),
(173, 'Pahang', 'Kuala Lipis'),
(174, 'Pahang', 'Kuala Rompin'),
(175, 'Pahang', 'Kuantan'),
(176, 'Pahang', 'Lanchang'),
(177, 'Pahang', 'Lurah Bilut'),
(178, 'Pahang', 'Maran'),
(179, 'Pahang', 'Mentakab'),
(180, 'Pahang', 'Muadzam Shah'),
(181, 'Pahang', 'Padang Tengku'),
(182, 'Pahang', 'Pekan'),
(183, 'Pahang', 'Raub'),
(184, 'Pahang', 'Ringlet'),
(185, 'Pahang', 'Sega'),
(186, 'Pahang', 'Sungai Koyan'),
(187, 'Pahang', 'Sungai Lembing'),
(188, 'Pahang', 'Tanah Rata'),
(189, 'Pahang', 'Temerloh'),
(190, 'Pahang', 'Triang'),
(191, 'Perak', 'Ayer Tawar'),
(192, 'Perak', 'Bagan Datoh'),
(193, 'Perak', 'Bagan Serai'),
(194, 'Perak', 'Bandar Seri Iskandar'),
(195, 'Perak', 'Batu Gajah'),
(196, 'Perak', 'Batu Kurau'),
(197, 'Perak', 'Behrang Stesen'),
(198, 'Perak', 'Bidor'),
(199, 'Perak', 'Bota'),
(200, 'Perak', 'Bruas'),
(201, 'Perak', 'Changkat Jering'),
(202, 'Perak', 'Changkat Keruing'),
(203, 'Perak', 'Chemor'),
(204, 'Perak', 'Chenderiang'),
(205, 'Perak', 'Chenderong Balai'),
(206, 'Perak', 'Chikus'),
(207, 'Perak', 'Enggor'),
(208, 'Perak', 'Gerik'),
(209, 'Perak', 'Gopeng'),
(210, 'Perak', 'Hutan Melintang'),
(211, 'Perak', 'Intan'),
(212, 'Perak', 'Ipoh'),
(213, 'Perak', 'Jeram'),
(214, 'Perak', 'Kampar'),
(215, 'Perak', 'Kampung Gajah'),
(216, 'Perak', 'Kampung Kepayang'),
(217, 'Perak', 'Kamunting'),
(218, 'Perak', 'Kuala Kangsar'),
(219, 'Perak', 'Kuala Kurau'),
(220, 'Perak', 'Kuala Sepetang'),
(221, 'Perak', 'Lambor Kanan'),
(222, 'Perak', 'Langkap'),
(223, 'Perak', 'Lenggong'),
(224, 'Perak', 'Lumut'),
(225, 'Perak', 'Malim Nawar'),
(226, 'Perak', 'Manong'),
(227, 'Perak', 'Matang'),
(228, 'Perak', 'Padang Rengas'),
(229, 'Perak', 'Pangkor'),
(230, 'Perak', 'Pantai Remis'),
(231, 'Perak', 'Parit Buntar'),
(232, 'Perak', 'Pengkalan Hulu'),
(233, 'Perak', 'Pusing'),
(234, 'Perak', 'Rantau Panjang'),
(235, 'Perak', 'Sauk'),
(236, 'Perak', 'Selama'),
(237, 'Perak', 'Selekoh'),
(238, 'Perak', 'Seri Manjong'),
(239, 'Perak', 'Simpang'),
(240, 'Perak', 'Simpang Ampat Semanggol'),
(241, 'Perak', 'Sitiawan'),
(242, 'Perak', 'Slim River'),
(243, 'Perak', 'Sungai Siput'),
(244, 'Perak', 'Sungai Sumun'),
(245, 'Perak', 'Sungkai'),
(246, 'Perak', 'Taiping'),
(247, 'Perak', 'Tanjong Malim'),
(248, 'Perak', 'Tanjong Piandang'),
(249, 'Perak', 'Tanjong Rambutan'),
(250, 'Perak', 'Tanjong Tualang'),
(251, 'Perak', 'Tapah'),
(252, 'Perak', 'Teluk Intan'),
(253, 'Perak', 'Temoh'),
(254, 'Perak', 'TLDM Lumut'),
(255, 'Perak', 'Trolak'),
(256, 'Perak', 'Trong'),
(257, 'Perak', 'Tronoh'),
(258, 'Perak', 'Ulu Bernam'),
(259, 'Perak', 'Ulu Kinta'),
(260, 'Perlis', 'Arau'),
(261, 'Perlis', 'Kaki Bukit'),
(262, 'Perlis', 'Kangar'),
(263, 'Perlis', 'Kuala Perlis'),
(264, 'Perlis', 'Padang Besar'),
(265, 'Perlis', 'Simpang Ampat'),
(266, 'Pulau Pinang', 'Ayer Itam'),
(267, 'Pulau Pinang', 'Balik Pulau'),
(268, 'Pulau Pinang', 'Batu Ferringhi'),
(269, 'Pulau Pinang', 'Batu Maung'),
(270, 'Pulau Pinang', 'Bayan Lepas'),
(271, 'Pulau Pinang', 'Bukit Mertajam'),
(272, 'Pulau Pinang', 'Butterworth'),
(273, 'Pulau Pinang', 'Gelugor'),
(274, 'Pulau Pinang', 'Jelutong'),
(275, 'Pulau Pinang', 'Kepala Batas'),
(276, 'Pulau Pinang', 'Kubang Semang'),
(277, 'Pulau Pinang', 'Nibong Tebal'),
(278, 'Pulau Pinang', 'Penaga'),
(279, 'Pulau Pinang', 'Penang Hill'),
(280, 'Pulau Pinang', 'Perai'),
(281, 'Pulau Pinang', 'Permatang Pauh'),
(282, 'Pulau Pinang', 'Pulau Pinang'),
(283, 'Pulau Pinang', 'Simpang Ampat'),
(284, 'Pulau Pinang', 'Sungai Jawi'),
(285, 'Pulau Pinang', 'Tanjung Bungah'),
(286, 'Pulau Pinang', 'Tasek Gelugor'),
(287, 'Putrajaya', 'Putrajaya'),
(288, 'Sabah', 'Beaufort'),
(289, 'Sabah', 'Beluran'),
(290, 'Sabah', 'Beverly'),
(291, 'Sabah', 'Bongawan'),
(292, 'Sabah', 'Inanam'),
(293, 'Sabah', 'Keningau'),
(294, 'Sabah', 'Kota Belud'),
(295, 'Sabah', 'Kota Kinabalu'),
(296, 'Sabah', 'Kota Kinabatangan'),
(297, 'Sabah', 'Kota Marudu'),
(298, 'Sabah', 'Kuala Penyu'),
(299, 'Sabah', 'Kudat'),
(300, 'Sabah', 'Kunak'),
(301, 'Sabah', 'Lahad Datu'),
(302, 'Sabah', 'Likas'),
(303, 'Sabah', 'Membakut'),
(304, 'Sabah', 'Menumbok'),
(305, 'Sabah', 'Nabawan'),
(306, 'Sabah', 'Pamol'),
(307, 'Sabah', 'Papar'),
(308, 'Sabah', 'Penampang'),
(309, 'Sabah', 'Putatan'),
(310, 'Sabah', 'Ranau'),
(311, 'Sabah', 'Sandakan'),
(312, 'Sabah', 'Semporna'),
(313, 'Sabah', 'Sipitang'),
(314, 'Sabah', 'Tambunan'),
(315, 'Sabah', 'Tamparuli'),
(316, 'Sabah', 'Tanjung Aru'),
(317, 'Sabah', 'Tawau'),
(318, 'Sabah', 'Tenghilan'),
(319, 'Sabah', 'Tenom'),
(320, 'Sabah', 'Tuaran'),
(321, 'Sarawak', 'Asajaya'),
(322, 'Sarawak', 'Balingian'),
(323, 'Sarawak', 'Baram'),
(324, 'Sarawak', 'Bau'),
(325, 'Sarawak', 'Bekenu'),
(326, 'Sarawak', 'Belaga'),
(327, 'Sarawak', 'Belawai'),
(328, 'Sarawak', 'Betong'),
(329, 'Sarawak', 'Bintangor'),
(330, 'Sarawak', 'Bintulu'),
(331, 'Sarawak', 'Dalat'),
(332, 'Sarawak', 'Daro'),
(333, 'Sarawak', 'Debak'),
(334, 'Sarawak', 'Engkilili'),
(335, 'Sarawak', 'Julau'),
(336, 'Sarawak', 'Kabong'),
(337, 'Sarawak', 'Kanowit'),
(338, 'Sarawak', 'Kapit'),
(339, 'Sarawak', 'Kota Samarahan'),
(340, 'Sarawak', 'Kuching'),
(341, 'Sarawak', 'Lawas'),
(342, 'Sarawak', 'Limbang'),
(343, 'Sarawak', 'Lingga'),
(344, 'Sarawak', 'Long Lama'),
(345, 'Sarawak', 'Lubok Antu'),
(346, 'Sarawak', 'Lundu'),
(347, 'Sarawak', 'Lutong'),
(348, 'Sarawak', 'Matu'),
(349, 'Sarawak', 'Miri'),
(350, 'Sarawak', 'Mukah'),
(351, 'Sarawak', 'Nanga Medamit'),
(352, 'Sarawak', 'Niah'),
(353, 'Sarawak', 'Pusa'),
(354, 'Sarawak', 'Roban'),
(355, 'Sarawak', 'Saratok'),
(356, 'Sarawak', 'Sarikei'),
(357, 'Sarawak', 'Sebauh'),
(358, 'Sarawak', 'Sebuyau'),
(359, 'Sarawak', 'Serian'),
(360, 'Sarawak', 'Sibu'),
(361, 'Sarawak', 'Siburan'),
(362, 'Sarawak', 'Simunjan'),
(363, 'Sarawak', 'Song'),
(364, 'Sarawak', 'Spaoh'),
(365, 'Sarawak', 'Sri Aman'),
(366, 'Sarawak', 'Sundar'),
(367, 'Sarawak', 'Tatau'),
(368, 'Selangor', 'Ampang'),
(369, 'Selangor', 'Bandar Baru Bangi'),
(370, 'Selangor', 'Bandar Puncak Alam'),
(371, 'Selangor', 'Banting'),
(372, 'Selangor', 'Batang Kali'),
(373, 'Selangor', 'Batu Arang'),
(374, 'Selangor', 'Batu Caves'),
(375, 'Selangor', 'Beranang'),
(376, 'Selangor', 'Bestari Jaya'),
(377, 'Selangor', 'Bukit Rotan'),
(378, 'Selangor', 'Cheras'),
(379, 'Selangor', 'Cyberjaya'),
(380, 'Selangor', 'Dengkil'),
(381, 'Selangor', 'Hulu Langat'),
(382, 'Selangor', 'Jenjarom'),
(383, 'Selangor', 'Jeram'),
(384, 'Selangor', 'Kajang'),
(385, 'Selangor', 'Kapar'),
(386, 'Selangor', 'Kerling'),
(387, 'Selangor', 'Klang'),
(388, 'Selangor', 'Kuala Kubu Baru'),
(389, 'Selangor', 'Kuala Selangor'),
(390, 'Selangor', 'Kuang'),
(391, 'Selangor', 'Pelabuhan Klang'),
(392, 'Selangor', 'Petaling Jaya'),
(393, 'Selangor', 'Puchong'),
(394, 'Selangor', 'Pulau Carey'),
(395, 'Selangor', 'Pulau Indah'),
(396, 'Selangor', 'Pulau Ketam'),
(397, 'Selangor', 'Rasa'),
(398, 'Selangor', 'Rawang'),
(399, 'Selangor', 'Sabak Bernam'),
(400, 'Selangor', 'Sekinchan'),
(401, 'Selangor', 'Semenyih'),
(402, 'Selangor', 'Sepang'),
(403, 'Selangor', 'Serdang'),
(404, 'Selangor', 'Serendah'),
(405, 'Selangor', 'Seri Kembangan'),
(406, 'Selangor', 'Shah Alam'),
(407, 'Selangor', 'Subang Jaya'),
(408, 'Selangor', 'Sungai Ayer Tawar'),
(409, 'Selangor', 'Sungai Besar'),
(410, 'Selangor', 'Sungai Buloh'),
(411, 'Selangor', 'Sungai Pelek'),
(412, 'Selangor', 'Tanjong Karang'),
(413, 'Selangor', 'Tanjong Sepat'),
(414, 'Selangor', 'Tanjung Sepat'),
(415, 'Selangor', 'Telok Panglima Garang'),
(416, 'Terengganu', 'Ajil'),
(417, 'Terengganu', 'Al Muktatfi Billah Shah'),
(418, 'Terengganu', 'Ayer Puteh'),
(419, 'Terengganu', 'Bukit Besi'),
(420, 'Terengganu', 'Bukit Payong'),
(421, 'Terengganu', 'Ceneh'),
(422, 'Terengganu', 'Chalok'),
(423, 'Terengganu', 'Cukai'),
(424, 'Terengganu', 'Dungun'),
(425, 'Terengganu', 'Jerteh'),
(426, 'Terengganu', 'Kampung Raja'),
(427, 'Terengganu', 'Kemasek'),
(428, 'Terengganu', 'Kerteh'),
(429, 'Terengganu', 'Ketengah Jaya'),
(430, 'Terengganu', 'Kijal'),
(431, 'Terengganu', 'Kuala Berang'),
(432, 'Terengganu', 'Kuala Besut'),
(433, 'Terengganu', 'Kuala Terengganu'),
(434, 'Terengganu', 'Marang'),
(435, 'Terengganu', 'Paka'),
(436, 'Terengganu', 'Permaisuri'),
(437, 'Terengganu', 'Sungai Tong'),
(438, 'Johor', 'Skudai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(5) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `id` (`username`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12313;

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
