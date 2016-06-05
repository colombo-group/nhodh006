-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2016 at 03:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `des` varchar(100) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `level` int(2) NOT NULL,
  `date` datetime NOT NULL,
  `introduce` varchar(200) NOT NULL,
  `list_introduce` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `mail`, `phone`, `des`, `fullname`, `level`, `date`, `introduce`, `list_introduce`) VALUES
(2, 'a', '123', '  nhodoan2@gmail.com', '          0', '          ...', 'doan huu nho2', 1, '0000-00-00 00:00:00', '', '#admin#admin'),
(13, 'nhodoan', '1234', 'nhodoan@gmail.com', '123456789', 'nhodoan', 'doan huu nho', 1, '0000-00-00 00:00:00', '', '#a1#doannho0#admin#a#t#ÄoÃ n Há»¯u Nho'),
(115, 'doannho0', ' 123456780', ' nhodoan110@gmail.com', ' 12340', ' AFF', 'doan huu nho0', 0, '2016-06-03 10:09:30', 'nhodoan', ''),
(116, 'doannho1', '123456781', 'nhodoan111@gmail.com', '12341', '', 'doan huu nho1', 0, '2016-06-03 10:09:30', '', ''),
(117, 'doannho2', '123456782', 'nhodoan112@gmail.com', '12342', '', 'doan huu nho2', 0, '2016-06-03 10:09:30', '', ''),
(118, 'doannho3', '123456783', 'nhodoan113@gmail.com', '12343', '', 'doan huu nho3', 0, '2016-06-03 10:09:30', '', ''),
(119, 'doannho4', '123456784', 'nhodoan114@gmail.com', '12344', '', 'doan huu nho4', 0, '2016-06-03 10:09:30', '', ''),
(120, 'doannho5', '123456785', 'nhodoan115@gmail.com', '12345', '', 'doan huu nho5', 0, '2016-06-03 10:09:31', '', ''),
(121, 'doannho6', '123456786', 'nhodoan116@gmail.com', '12346', '', 'doan huu nho6', 0, '2016-06-03 10:09:31', '', ''),
(122, 'doannho7', '123456787', 'nhodoan117@gmail.com', '12347', '', 'doan huu nho7', 0, '2016-06-03 10:09:31', '', ''),
(123, 'doannho8', '123456788', 'nhodoan118@gmail.com', '12348', '', 'doan huu nho8', 0, '2016-06-03 10:09:31', '', ''),
(124, 'doannho9', '123456789', 'nhodoan119@gmail.com', '12349', '', 'doan huu nho9', 0, '2016-06-03 10:09:31', '', ''),
(125, 'doannho10', '1234567810', 'nhodoan1110@gmail.com', '123410', '', 'doan huu nho10', 0, '2016-06-03 10:09:31', '', ''),
(126, 'doannho11', '1234567811', 'nhodoan1111@gmail.com', '123411', '', 'doan huu nho11', 0, '2016-06-03 10:09:31', '', ''),
(127, 'doannho12', '1234567812', 'nhodoan1112@gmail.com', '123412', '', 'doan huu nho12', 0, '2016-06-03 10:09:31', '', ''),
(128, 'doannho13', '1234567813', 'nhodoan1113@gmail.com', '123413', '', 'doan huu nho13', 0, '2016-06-03 10:09:31', '', ''),
(129, 'doannho14', '1234567814', 'nhodoan1114@gmail.com', '123414', '', 'doan huu nho14', 0, '2016-06-03 10:09:32', '', ''),
(130, 'doannho15', '1234567815', 'nhodoan1115@gmail.com', '123415', '', 'doan huu nho15', 0, '2016-06-03 10:09:32', '', ''),
(131, 'doannho16', '1234567816', 'nhodoan1116@gmail.com', '123416', '', 'doan huu nho16', 0, '2016-06-03 10:09:32', '', ''),
(132, 'doannho17', '1234567817', 'nhodoan1117@gmail.com', '123417', '', 'doan huu nho17', 0, '2016-06-03 10:09:32', '', ''),
(133, 'doannho18', '1234567818', 'nhodoan1118@gmail.com', '123418', '', 'doan huu nho18', 0, '2016-06-03 10:09:32', '', ''),
(134, 'doannho19', '1234567819', 'nhodoan1119@gmail.com', '123419', '', 'doan huu nho19', 0, '2016-06-03 10:09:32', '', ''),
(135, 'doannho20', '1234567820', 'nhodoan1120@gmail.com', '123420', '', 'doan huu nho20', 0, '2016-06-03 10:09:32', '', ''),
(136, 'doannho21', '1234567821', 'nhodoan1121@gmail.com', '123421', '', 'doan huu nho21', 0, '2016-06-03 10:09:32', '', ''),
(137, 'doannho22', '1234567822', 'nhodoan1122@gmail.com', '123422', '', 'doan huu nho22', 0, '2016-06-03 10:09:32', '', ''),
(138, 'doannho23', '1234567823', 'nhodoan1123@gmail.com', '123423', '', 'doan huu nho23', 0, '2016-06-03 10:09:32', '', ''),
(139, 'doannho24', '1234567824', 'nhodoan1124@gmail.com', '123424', '', 'doan huu nho24', 0, '2016-06-03 10:09:32', '', ''),
(140, 'doannho25', '1234567825', 'nhodoan1125@gmail.com', '123425', '', 'doan huu nho25', 0, '2016-06-03 10:09:32', '', ''),
(141, 'doannho26', '1234567826', 'nhodoan1126@gmail.com', '123426', '', 'doan huu nho26', 0, '2016-06-03 10:09:32', '', ''),
(142, 'doannho27', '1234567827', 'nhodoan1127@gmail.com', '123427', '', 'doan huu nho27', 0, '2016-06-03 10:09:32', '', ''),
(143, 'doannho28', '1234567828', 'nhodoan1128@gmail.com', '123428', '', 'doan huu nho28', 0, '2016-06-03 10:09:32', '', ''),
(144, 'doannho29', '1234567829', 'nhodoan1129@gmail.com', '123429', '', 'doan huu nho29', 0, '2016-06-03 10:09:32', '', ''),
(145, 'doannho30', '1234567830', 'nhodoan1130@gmail.com', '123430', '', 'doan huu nho30', 0, '2016-06-03 10:09:32', '', ''),
(146, 'doannho31', '1234567831', 'nhodoan1131@gmail.com', '123431', '', 'doan huu nho31', 0, '2016-06-03 10:09:32', '', ''),
(147, 'doannho32', '1234567832', 'nhodoan1132@gmail.com', '123432', '', 'doan huu nho32', 0, '2016-06-03 10:09:32', '', ''),
(148, 'doannho33', '1234567833', 'nhodoan1133@gmail.com', '123433', '', 'doan huu nho33', 0, '2016-06-03 10:09:33', '', ''),
(149, 'doannho34', '1234567834', 'nhodoan1134@gmail.com', '123434', '', 'doan huu nho34', 0, '2016-06-03 10:09:33', '', ''),
(150, 'doannho35', '1234567835', 'nhodoan1135@gmail.com', '123435', '', 'doan huu nho35', 0, '2016-06-03 10:09:33', '', ''),
(151, 'doannho36', '1234567836', 'nhodoan1136@gmail.com', '123436', '', 'doan huu nho36', 0, '2016-06-03 10:09:33', '', ''),
(152, 'doannho37', '1234567837', 'nhodoan1137@gmail.com', '123437', '', 'doan huu nho37', 0, '2016-06-03 10:09:33', '', ''),
(153, 'doannho38', '1234567838', 'nhodoan1138@gmail.com', '123438', '', 'doan huu nho38', 0, '2016-06-03 10:09:33', '', ''),
(154, 'doannho39', '1234567839', 'nhodoan1139@gmail.com', '123439', '', 'doan huu nho39', 0, '2016-06-03 10:09:33', '', ''),
(155, 'doannho40', '1234567840', 'nhodoan1140@gmail.com', '123440', '', 'doan huu nho40', 0, '2016-06-03 10:09:33', '', ''),
(156, 'doannho41', '1234567841', 'nhodoan1141@gmail.com', '123441', '', 'doan huu nho41', 0, '2016-06-03 10:09:33', '', ''),
(157, 'doannho42', '1234567842', 'nhodoan1142@gmail.com', '123442', '', 'doan huu nho42', 0, '2016-06-03 10:09:33', '', ''),
(158, 'doannho43', '1234567843', 'nhodoan1143@gmail.com', '123443', '', 'doan huu nho43', 0, '2016-06-03 10:09:33', '', ''),
(159, 'doannho44', '1234567844', 'nhodoan1144@gmail.com', '123444', '', 'doan huu nho44', 0, '2016-06-03 10:09:33', '', ''),
(160, 'doannho45', '1234567845', 'nhodoan1145@gmail.com', '123445', '', 'doan huu nho45', 0, '2016-06-03 10:09:33', '', ''),
(161, 'doannho46', '1234567846', 'nhodoan1146@gmail.com', '123446', '', 'doan huu nho46', 0, '2016-06-03 10:09:33', '', ''),
(162, 'doannho47', '1234567847', 'nhodoan1147@gmail.com', '123447', '', 'doan huu nho47', 0, '2016-06-03 10:09:33', '', ''),
(163, 'doannho48', '1234567848', 'nhodoan1148@gmail.com', '123448', '', 'doan huu nho48', 0, '2016-06-03 10:09:33', '', ''),
(164, 'doannho49', '1234567849', 'nhodoan1149@gmail.com', '123449', '', 'doan huu nho49', 0, '2016-06-03 10:09:33', '', ''),
(165, 'abcd', '123', '123@gmail.com', '123321', '', 'abcd', 0, '2016-06-03 10:50:22', '', ''),
(166, '1234', '1234', '1234@gmail.com', '1234', '1234', '1234', 0, '2016-06-03 11:00:49', '', ''),
(171, '1212', '1212', '1212@gmail.com', '1212', '1212', '1212', 0, '2016-06-03 12:21:36', '', ''),
(172, '123123', '12', '123123@gmail.com', '123123', '123123', '123123', 0, '2016-06-03 12:22:59', '', ''),
(173, '21', '21', '21@gmail.com', '21', '21', '21', 0, '2016-06-03 12:25:40', '', ''),
(174, 'xxx', '123', 'xxx@gmail.com', '989898', '', 'xyz', 0, '2016-06-03 17:40:04', '', ''),
(176, 'q', 'q', 'q@gmail.com', '111111', '21312', 'q', 0, '2016-06-03 18:30:44', '', ''),
(177, 'anhnho', '1', 'anhnho@gmail.com', '12341234', '', 'anhnho', 0, '2016-06-03 18:32:22', '', ''),
(178, 'a1', 'a1', 'a1@gmail.com', '121212', '', 'a1', 0, '2016-06-03 18:35:10', '', ''),
(180, 't', 't', 't@gmail.com', '1', '1', 't', 0, '2016-06-04 11:38:46', '', ''),
(182, 'admin', '23', 'admin@gmail.com', '9999', '', 'admin', 0, '2016-06-05 09:58:23', '', ''),
(183, 'ÄoÃ n Há»¯u Nho', '123456', 'nhodoan@gmai.com', '1234512345', '', 'ÄoÃ n Há»¯u Nho', 0, '2016-06-05 11:24:49', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
