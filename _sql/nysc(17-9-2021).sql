-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 06:26 AM
-- Server version: 10.4.20-MariaDB-log
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nysc`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_photo`
--

CREATE TABLE `album_photo` (
  `id` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album_photo`
--

INSERT INTO `album_photo` (`id`, `album`, `image_name`, `caption`, `queue`) VALUES
(2, 5, '-173648161516_17554979390_1623057498_n.jpg', 'Image 01', 0),
(3, 5, '-43759883597_147443257309_1628159276_n.jpg', 'Image 02', 0),
(4, 5, '-3176697926_188026442980_1628159345_n.jpg', 'Image 03', 0),
(5, 5, '-55843452767_135359688139_1628159362_n.jpg', 'Image 04', 0),
(6, 8, '-184653226973_6549913933_1628160006_n.jpg', '10000 Beds Apeksha Hospital', 0),
(7, 8, '-26725265534_164477875372_1628160035_n.jpg', '10000 Beds Apeksha Hospital', 0);

-- --------------------------------------------------------

--
-- Table structure for table `album_video`
--

CREATE TABLE `album_video` (
  `id` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `album_video`
--

INSERT INTO `album_video` (`id`, `album`, `url`, `image_name`, `caption`, `queue`) VALUES
(1, 2, 'JrJe_xZzU5M', '-149755974152_41447166754_1631777887_n.jpg', 'Jerusalema', 1),
(2, 2, '4aYLdE0juO4', '-146305295312_44897845594_1631778144_n.jpg', 'Upan Mawbima', 2);

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `full_name` text NOT NULL,
  `nic` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address_line_1` varchar(100) NOT NULL,
  `address_line_2` varchar(100) NOT NULL,
  `address_line_3` varchar(100) NOT NULL,
  `district` int(11) NOT NULL,
  `telephone_1` varchar(20) NOT NULL,
  `telephone_2` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ol` varchar(10) NOT NULL,
  `al` varchar(10) NOT NULL,
  `inserted` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `center_id`, `course_id`, `first_name`, `last_name`, `full_name`, `nic`, `gender`, `dob`, `address_line_1`, `address_line_2`, `address_line_3`, `district`, `telephone_1`, `telephone_2`, `email`, `ol`, `al`, `inserted`, `updated`) VALUES
(25, 1, 7, 'aa', 'aa', 'aa', 'aa', 'male', '2021-08-10', 'aa', '', '', 1, 'aaa', '', 'pasindu5457@gmail.com', 'pass', 'pass', '2021-08-19 07:43:01', NULL),
(26, 1, 7, 'Pasindu', 'ss', 'jjij', 'jjk', 'male', '2021-08-02', 'pp', '', '', 1, 'oo', '', 'pasindu5457@gmail.com', 'pass', 'pass', '2021-08-19 07:46:45', NULL),
(27, 1, 7, 'Pasindu', 'Kavinda', 'Pasindu Kavinda', '99999999', 'male', '2021-09-14', 'wwwwwwwwwww', 'wwwwwwwwwww', '', 1, '444444444444444', '', 'pasindu5457@gmail.com', 'pass', 'pass', '2021-09-17 06:52:05', NULL),
(28, 1, 7, 'aaa', 'aa', 'aa', '546546', 'male', '2021-09-15', 'dd', 'f', 'ff', 1, 'ff', '', 'pasindu5457@gmail.com', 'pass', 'pass', '2021-09-17 09:39:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact1` varchar(255) NOT NULL,
  `contact2` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`id`, `name`, `type`, `district`, `image_name`, `email`, `contact1`, `contact2`, `map`, `longitude`, `latitude`, `queue`) VALUES
(1, 'Maharagama', '1', '5', '-39797803120_151405337786_1625980933_n.jpg', 'nysctraining@yahoo.com', '011 2848771', '', '-', '79.9253', '6.8474', 0),
(2, 'Rathmalana', '1', '5', '-90304465603_100898675303_1625981050_n.jpg', 'lavtc@sti.lk', '011 2636910', '', '-', '79.8774', '6.8142', 0),
(3, 'Kolonnawa', '1', '5', '-103532781733_87670359173_1625981170_n.jpg', 'kolonnawavtc@gmail.com', '011 2572966', '', '-', '79.8939', '6.9305', 0),
(4, 'Jinarathana', '1', '5', '-41723577355_149479563551_1625981644_n.jpg', 'nyscjvtc@gmail.com', '011 2472659', '', '-', '79.8557', '6.9154', 0),
(5, 'Dehiwala', '1', '5', '-145615533489_45587607417_1625981797_n.jpg', 'dehiwala.vtc@gmail.com', '011 2761964', '', '-', '79.8703', '6.8481', 0),
(6, 'Panadura', '1', '10', '-24763384604_166439756302_1625981934_n.jpg', 'youthpanadura@gmail.com', '038 2230706', '', '-', '79.9111', '6.7105', 0),
(7, 'Sapugaskanda', '1', '7', '-24025144822_167177996084_1625986581_n.jpg', 'nyscsapugaskanda@gmail.com', '011 2400322', '', '-', '79.96405672963564', '6.977227132808908', 0),
(8, 'Kobawaka', '1', '10', '-97445140330_93758000576_1626060922_n.jpg', 'nysckobawaka@gmail.com', '034 2250466', '', '-', NULL, NULL, 0),
(9, 'Agalawatta', '1', '10', '-45142179977_146060960929_1626061038_n.jpg', 'youthagalawathta@gmail.com', '034 2249440', '', '-', '79.8774', '6.8142', 0),
(10, 'Mirigama', '1', '7', '-22490909917_168712230989_1626061192_n.jpg', 'srilankayouthmirigama@gmail.com', '033 2273343', '', '-', '80.1283', '7.2430', 0),
(11, 'Pugoda', '1', '7', '-170780768802_20422372104_1626061323_n.jpg', 'nyscpugoga@yahoo.com', '011 2404892', '', '-', '80.1175', '6.9748', 0),
(12, 'Heiyanthuduwa', '1', '7', '-52212035583_138991105323_1626061789_n.jpg', 'slyouthhey@gmail.com', '011 2962047', '', '-', '79.99299', '7.08576', 0),
(13, 'Elpitiya', '1', '6', '-93161793008_98041347898_1626061916_n.jpg', 'youthelpitiyasrilanka@gmail.com', '091 2291960', '', '-', '80.1632', '6.2952', 0),
(14, 'Kahawa', '1', '6', '-136283370884_54919770022_1626062027_n.jpg', 'srilankayouthkahawa@gmail.com', '091 2254055', '', '-', NULL, NULL, 0),
(15, 'Akmimana', '1', '6', '-44456283350_146746857556_1626062159_n.jpg', 'nyscakmeemanatc@gmail.com', '091 2222423', '', '-', NULL, NULL, 0),
(16, 'Akuressa', '1', '17', '-76234615449_114968525457_1626062318_n.jpg', 'slyttcakuressa@gmail.com', '041 2283065', '', '-', '80.4799', '6.099', 0),
(17, 'Matara', '1', '17', '-7694311325_183508829581_1626062483_n.jpg', 'nyscyec.matara@gmail.com', '041 2234084', '', '-', '80.5441', '5.9565', 0),
(18, 'Eraminiyaya', '1', '8', '-162220406211_28982734695_1626062961_n.jpg', 'infomaths10@gmail.com', '047 3620074', '', '-', '80.9055', '6.1558', 0),
(19, 'Hambanthoata', '1', '8', '-134484021594_56719119312_1626064032_n.jpg', 'yayawattanysc69@gmail.com', '047 2244911', '', '-', '80.9191', '6.1532', 0),
(20, 'Eraminiyaya Aesthatics', '1', '8', '-79373819819_111829321087_1626064562_n.jpg', 'b.sameera@ymail.com', '047 3626761', '', '-', NULL, NULL, 0),
(21, 'Ratnapura', '1', '23', '-110299893523_80903247383_1626064806_n.jpg', 'adrathnapura@gmail.com', '045 2228236', '', '-', '80.3831', '6.7069', 0),
(22, 'Pelmadulla', '1', '23', '-32424999491_158778141415_1626064964_n.jpg', 'youth.pelmadulla@gmail.com', '045 2275992', '', '-', '80.5493', '6.6082', 0),
(23, 'Embilipitiya', '1', '23', '-161113566555_30089574351_1626065152_n.jpg', 'embyouth9@gmail.com', '047 2261069', '', '-', '80.8613', '6.3267', 0),
(24, 'Batangala', '1', '12', '-178550785926_12652354980_1626065291_n.jpg', 'nyscbatangala@yahoo.com', '036 2234208', '', '-', '80.2525', '6.9114', 0),
(25, 'Monaragala', '1', '18', '-177879782531_13323358375_1626065711_n.jpg', 'monaragalayouthtrainingcenter@gmail.com', '055 2277108', '', '-', '81.3447', '6.8583', 0),
(26, 'Orubediwewa', '1', '3', '-68836114261_122367026645_1626070251_n.jpg', 'samaraweeragunadasa@gmail.com', '055 2257165', '', '-', '81.0622', '6.9945', 0),
(27, 'Lewwegoda', '1', '3', '-79184241110_112018899796_1626078757_n.jpg', 'lewwegodatc@gmail.com', '057 3572077', '', '-', NULL, NULL, 0),
(28, 'Halawatha', '1', '22', '-97374039597_93829101309_1626078913_n.jpg', 'youthcenterchilaw@gmail.com', '032 2223384', '', '-', '79.7955', '7.5770', 0),
(29, 'Anamaduwa', '1', '22', '-165661116023_25542024883_1626079105_n.jpg', 'twmweerasingha5@gmail.com', '032 3294076', '', '-', '80.0201', '7.8881', 0),
(30, 'Mawathagama', '1', '14', '-89898270571_101304870335_1626079351_n.jpg', 'slyouth_mawathagama@hotmail.com', '037 2298205', '', '-', '80.2712', '7.2550', 0),
(31, 'Galgamuwa', '1', '14', '-30066044294_161137096612_1626079496_n.jpg', 'srilankayouthgalgamuwa@gmail.com', '037 2253488', '', '-', '80.2695', '7.9949', 0),
(32, 'Athugalpura', '1', '14', '-174391149285_16811991621_1626079663_n.jpg', 'athugalpura.youth@gmail.com', '037 2227100', '', '-', '80.3422', '7.4779', 0),
(33, 'Polgahawela', '1', '14', '-175345534697_15857606209_1626079937_n.jpg', 'nyscpolgahawela@gmail.com', '037 2241713', '', '-', '80.3064', '7.3281', 0),
(34, 'Pannala', '1', '14', '-95743159529_95459981377_1626080414_n.jpg', 'pannalanysc394@gmail.com', '037 2246827', '', '-', NULL, NULL, 0),
(35, 'Rikillagaskada', '1', '11', '-175324373510_15878767396_1626080668_n.jpg', 'nyscunuwinna@gmail.com', '081 2365927', '', '-', '80.7884', '7.1484', 0),
(36, 'Polgolla', '1', '11', '-43558275228_147644865678_1626080894_n.jpg', 'polgollanysc@gmail.com', '081 2499500', '', '-', '80.6504', '7.3257', 0),
(37, 'Ulapane', '1', '11', '-13031447873_178171693033_1626081284_n.jpg', 'nysculpane@yahoo.com', '081 2356468', '', '-', '80.3358', '7.0638', 0),
(38, 'Doluwa', '1', '11', '-30348436206_160854704700_1626081488_n.jpg', 'wgpbrk@gmail.com', '071 8046781', '', '-', '80.3746', '7.1220', 0),
(39, 'Bellwood', '1', '11', '-150157133722_41046007184_1626081850_n.jpg', '-', '701836788', '', '-', '80.6810', '7.2187', 0);

-- --------------------------------------------------------

--
-- Table structure for table `center_type`
--

CREATE TABLE `center_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `center_type`
--

INSERT INTO `center_type` (`id`, `title`, `queue`) VALUES
(1, 'Training', 0),
(2, 'Farm', 0),
(3, 'Training and District', 0),
(4, 'District', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `comment` longtext NOT NULL,
  `is_active` int(11) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `title`, `date`, `image_name`, `comment`, `is_active`, `queue`) VALUES
(12, 'K.S.C.Deshan Bandara', 'Instructor', '2021-08-16', '-178564957274_12638183632_1628148146_n.jpg', '<p>Social proof is a psychological phenomenon where people conform to the actions of others under the assumption that those actions are reflective of the correct behavior.</p>', 1, 0),
(13, 'Sujan Patel ', 'Sujan Patel ', '2021-08-16', '-134273072243_56930068663_1628148492_n.jpg', '<p>&ldquo;Great product&rdquo; or &ldquo;love it&rdquo; doesn&rsquo;t cut it in testimonials. Describe what&rsquo;s great or its benefits.</p>', 1, 0),
(14, 'Sanju Shehan', 'Programmer', '2021-08-24', '-27356788141_163846352765_1628148809_n.jpg', '<p>Use a carousel to display a series of customer testimonials in the sidebar of your #blog, says</p>', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `inserted` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `max_student` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_type`, `name`, `max_student`, `level`, `languages`, `duration`, `start_date`, `short_description`, `description`, `image_name`, `queue`) VALUES
(7, 1, 'Information & Communication Multimedia Technology - Level 5', '40', '5', 'English', '01 Year', '2021-08-11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '-135374056245_55829084661_1628136341_n.jpg', 0),
(8, 6, 'Quantity Surveyor', '40', '5', 'English', '01 Year', '2021-08-23', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '-14677649344_176525491562_1628137642_n.jpg', 0),
(9, 1, 'Information & Communication Multimedia Technology - Level 4', '20', 'Level 4', 'English', '6 Month', '2021-08-24', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '-52287106032_138916034874_1628142125_n.jpg', 0),
(10, 1, 'Graphic Designing - Level 4', '20', 'NVQ Level - 4', 'English', 'One Year ', '2021-08-19', 'Associate: a two-year program that either leads to a specific vocation Associate: a two-year program that either leads to a specific or transitions to a bachelor program', '<p>Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program</p>', '-125736036655_65467104251_1628142564_n.jpg', 0),
(12, 2, 'Cookery', '40', '4', 'Sinhala', '06 months', '2021-08-22', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>', '-161030866680_30172274226_1628154878_n.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_by_centers`
--

CREATE TABLE `course_by_centers` (
  `id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `course_id` int(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_by_centers`
--

INSERT INTO `course_by_centers` (`id`, `center_id`, `course_id`, `queue`) VALUES
(4, 1, 7, 0),
(5, 1, 8, 0),
(6, 1, 10, 0),
(7, 2, 7, 0),
(8, 3, 8, 0),
(9, 2, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_photo`
--

CREATE TABLE `course_photo` (
  `id` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_photo`
--

INSERT INTO `course_photo` (`id`, `course`, `image_name`, `caption`, `queue`) VALUES
(1, 8, '-116922854236_74280286670_1628225830_n.jpg', 'ggg', 0),
(2, 8, '-147856015430_43347125476_1628226011_n.jpg', 'kklj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_subjects`
--

CREATE TABLE `course_subjects` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_subjects`
--

INSERT INTO `course_subjects` (`id`, `course_id`, `title`, `queue`) VALUES
(2, 4, 'Assemble Computer', 0),
(3, 4, 'Upgrade Hardware', 0),
(4, 7, 'System Analysis & Design - Semester 1', 0),
(5, 7, 'Software Programming - Semester 1', 0),
(6, 7, 'Database System - Semester 1', 0),
(7, 7, 'Computer Graphics Design - Semester 1', 0),
(8, 7, 'Manage Workplace Information - Semester 1', 0),
(9, 7, 'Manage Workplace Communication - Semester 1', 0),
(10, 7, 'Documents & Resource Level 5 - Semester 1', 0),
(11, 7, 'Database Systems II - Semester 2', 0),
(12, 7, 'Software Testing - Semester 2', 0),
(13, 7, 'Web Programming - Semester 2', 0),
(14, 7, 'Local Area Network - Semester 2', 0),
(15, 7, 'Planing & Scheduling Work at Workplace - Semester 2', 0),
(16, 8, 'Contract Administration - Semester 1', 0),
(17, 8, 'Interim Valuation - Semester 1', 0),
(18, 8, 'Material Technology - Semester 1', 0),
(19, 8, 'QS Practice 02 - Semester 1', 0),
(20, 8, 'EMP 3 - Semester 1', 0),
(21, 8, 'Maths - Semester 1', 0),
(22, 8, 'Measurement 01 - Semester 1', 0),
(23, 8, 'Construction Technology - Semester 1', 0),
(24, 8, 'QS Practice 01 - Semester 1', 0),
(25, 8, 'Drawing Practice - Semester 1', 0),
(26, 8, 'Accounting - Semester 1', 0),
(27, 8, 'General Econ - Semester 1', 0),
(28, 8, 'Work place Information Management - Semester 1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_type`
--

CREATE TABLE `course_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_type`
--

INSERT INTO `course_type` (`id`, `title`, `queue`) VALUES
(1, 'ICT', 0),
(2, 'Hotel Managment', 0),
(3, 'Electrical & Electronic', 0),
(4, 'Machenic', 0),
(5, 'Fashion Desing', 0),
(6, 'Construction', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `province` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_si` varchar(45) DEFAULT NULL,
  `name_ta` varchar(45) DEFAULT NULL,
  `center_point` text DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `province`, `name`, `name_si`, `name_ta`, `center_point`, `color`, `queue`) VALUES
(1, 6, 'Ampara', 'අම්පාර', 'அம்பாறை', '7.083333 81.749997', NULL, 0),
(2, 8, 'Anuradhapura', 'අනුරාධපුරය', 'அனுராதபுரம்', '8.333332 80.499998', NULL, 0),
(3, 7, 'Badulla', 'බදුල්ල', 'பதுளை', '6.98416273 81.053833118', NULL, 0),
(4, 6, 'Batticaloa', 'මඩකලපුව', 'மட்டக்களப்பு', '7.749997 81.499998', NULL, 0),
(5, 1, 'Colombo', 'කොළඹ', 'கொழும்பு', '6.933996264 79.838996644', NULL, 0),
(6, 3, 'Galle', 'ගාල්ල', 'காலி', '6.03382819802 80.2097941608', NULL, 0),
(7, 1, 'Gampaha', 'ගම්පහ', 'கம்பஹா', '7.1333328 80.0', NULL, 0),
(8, 3, 'Hambantota', 'හම්බන්තොට', 'அம்பாந்தோட்டை', '6.249999 81.166666', '#212529', 0),
(9, 9, 'Jaffna', 'යාපනය', 'யாழ்ப்பாணம்', '9.666664 80.0', NULL, 0),
(10, 1, 'Kalutara', 'කළුතර', 'களுத்துறை', '6.583331 80.166666', NULL, 0),
(11, 2, 'Kandy', 'මහනුවර', 'கண்டி', '7.249999 80.749997', NULL, 0),
(12, 5, 'Kegalle', 'කෑගල්ල', 'கேகாலை', '7.3 80.4', NULL, 0),
(13, 9, 'Kilinochchi', 'කිලිනොච්චිය', 'கிளிநொச்சி', '9.499998 80.249999', NULL, 0),
(14, 4, 'Kurunegala', 'කුරුණෑගල', 'குருணாகல்', '7.749997 80.249999', NULL, 0),
(15, 9, 'Mannar', 'මන්නාරම', 'மன்னார்', '8.9666628 79.8833298', NULL, 0),
(16, 2, 'Matale', 'මාතලේ', 'மாத்தளை', '7.666664 80.749997', NULL, 0),
(17, 3, 'Matara', 'මාතර', 'மாத்தறை', '6.166666 80.499998', NULL, 0),
(18, 7, 'Monaragala', 'මොණරාගල', 'மொணராகலை', '6.666664 81.333332', NULL, 0),
(19, 9, 'Mullativu', 'මුලතිව්', 'முல்லைத்தீவு', '9.1499994 80.6833306', NULL, 0),
(20, 2, 'Nuwara Eliya', 'නුවර එළිය', 'நுவரேலியா', '7.0 80.749997', NULL, 0),
(21, 8, 'Polonnaruwa', 'පොළොන්නරුව', 'பொலன்னறுவை', '7.9333296 81.0', NULL, 0),
(22, 4, 'Puttalam', 'පුත්තලම', 'புத்தளம்', '8.0 80.0', NULL, 0),
(23, 5, 'Ratnapura', 'රත්නපුර', 'இரத்தினபுரி', '6.583331 80.583331', NULL, 0),
(24, 6, 'Trincomalee', 'ත්‍රිකුණාමලය', 'திருகோணமலை', '8.5666644 81.2333324', NULL, 0),
(25, 9, 'Vavuniya', 'වව්නියාව', 'வவுனியா', '9.249999 80.499998', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `date`, `location`, `image_name`, `short_description`, `address`, `description`, `queue`) VALUES
(1, 'Bellwood Old', '2021-07-29', 'NYSC,Maharagama', '-64206478284_126996662622_1627446539_n.jpg', 'Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. seddoe ius mod tempor incididunt', 'Address', '<p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nisi ut aliquip ex ea.</p>', 1),
(2, 'Blood donation Dehiwala', '2021-07-29', 'Dehiwala', '-31497549887_159705591019_1627447094_n.jpg', 'Lorem ipsum dolor sit amet, conse ctetur adipisicing elitddd..', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt</p>', 3),
(3, 'Blood donation dompe', '2021-07-29', 'Colombo', '-127906782361_63296358545_1627447721_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 10),
(4, 'Blood donation galle', '2021-07-29', 'Galle', '-128821917559_62381223347_1627451155_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 8),
(5, 'Blood donation homagama', '2021-07-28', 'Homagama', '-34125185328_157077955578_1627451705_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 11),
(6, 'Blood donation kaduwela', '2021-07-29', 'Kaduwela', '-81132435979_110070704927_1627452251_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 12),
(7, 'Blood donation Kaluthara', '2021-07-29', 'Kaluthara', '-177853716815_13349424091_1627452593_n.jpg', 'aaa', '', '<p>aaa</p>', 13),
(8, 'Blood donation mahara', '2021-07-29', 'Mahara', '-182798920310_8404220596_1627453332_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 9),
(9, 'Blood donation moratuwa', '2021-07-29', 'Moratuwa', '-88979691092_102223449814_1627453689_n.jpg', 'ggg', '', '<p>hhh</p>', 14),
(10, 'Blood donation wattala', '2021-07-30', 'Wattala', '-99241396032_91961744874_1627454066_n.jpg', 'dd', '', '<p>ddd</p>', 7),
(11, 'Cancer Hospital new ward', '2021-07-29', 'Maharagama', '-99034169134_92168971772_1627454506_n.jpg', 'Lorem ipsum dolor sit amet, consectetur.', 'asas', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 6),
(12, 'Dancing', '2021-07-29', 'Maharagama', '-103285024125_87918116781_1627455100_n.jpg', 'Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. seddoe ius mod tempor incididunt', 'Address ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt</p>', 2),
(13, 'Dancini', '2021-07-29', 'Maharagama', '-171442581307_19760559599_1627455516_n.jpg', 'sss', '', '<p>sss ss</p>', 15),
(14, 'Drama Festival', '2021-07-29', 'Maharagama', '-99459741781_91743399125_1627455853_n.jpg', 'ss', '', '<p>ss</p>', 16),
(15, '10000 Beds Apeksha Hospital', '2021-07-29', 'Maharagama', '-76957354509_114245786397_1627456812_n.jpg', 'ddd', '', '<p>ddd</p>', 17),
(16, '10000 Beds Kaluaggala', '2021-07-29', 'Kaluaggala', '-102528709187_88674431719_1627457445_n.jpg', 'hh', '', '<p>hh</p>', 19),
(17, '10000 Beds kolonnawa', '2021-07-29', 'kolonnawa', '-173838822753_17364318153_1627457875_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 20),
(18, '10000 Beds Madiwela', '2021-07-29', 'Madiwela', '-100936359394_90266781512_1627458256_n.jpg', 'aaa', '', '<p>aaaa</p>', 21),
(19, '10000 Beds Dabulla', '2021-07-30', 'Dabulla', '-179596255261_11606885645_1627458692_n.jpg', 'aaaa', '', '<p>aaaa</p>', 22),
(20, '10000 Beds Katunayaka', '2021-07-29', 'Katunayaka', '-30584661940_160618478966_1627459136_n.jpg', 'sss', '', '<p>sss</p>', 23),
(21, '10000 Beds Mathara', '2021-07-29', 'Mathara', '-133460535999_57742604907_1627463367_n.jpg', 'sss', '', '<p>sss</p>', 24),
(22, '10000 Beds dikwella', '2021-07-29', 'Dikwella', '-32472055988_158731084918_1627464123_n.jpg', 'ddddd', '', '<p>dd</p>', 25),
(23, '10000 Beds weligama', '2021-07-29', 'Weligama', '-70222224213_120980916693_1627464498_n.jpg', 'aaa', '', '<p>aaa</p>', 26),
(24, '10000 Beds Moratuwa', '2021-07-29', 'Moratuwa', '-139618640496_51584500410_1627464967_n.jpg', 'hhLorem ipsum dolor sit amet, consectetur.', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt</p>', 4),
(25, '10000 Beds modara', '2021-07-29', 'Modara', '-162639572563_28563568343_1627465282_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 27),
(26, '10000 Beds Rupawahini', '2021-07-29', 'Jathika Rupawahini', '-76535846873_114667294033_1627465743_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 28),
(27, 'Eraminiyaya Program', '2021-07-29', 'Eraminiyaya', '-119881948526_71321192380_1627469204_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 29),
(28, 'flood relief - Colombo', '2021-07-29', 'Colombo', '-188496994201_2706146705_1627470295_n.jpg', 'ddd', '', '<p>ddd</p>', 30),
(29, 'flood relief - Gampaha', '2021-07-29', 'Gampaha', '-107778121406_83425019500_1627470726_n.jpg', 'fff', '', '<p>fff</p>', 18),
(30, 'flood relief - negoda', '2021-07-29', 'Negoda', '-187331984599_3871156307_1627471701_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur.</p>', 31),
(31, 'Music', '2021-07-31', 'Maharagama', '-130074948686_61128192220_1627617400_n.jpg', 'Lorem ipsum dolor sit amet, consectetur. ', 'Address', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sed do eiusmod tempor incididunt</p>', 5);

-- --------------------------------------------------------

--
-- Table structure for table `event_photo`
--

CREATE TABLE `event_photo` (
  `id` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `linkdin` text NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`id`, `name`, `position`, `email`, `image_name`, `facebook`, `instagram`, `linkdin`, `queue`) VALUES
(7, 'Hon. Namal Rajapaksa', 'Ministry of Youth and Sports', 'namal@gmail.com', '-250521885_190952619021_1626151738_n.jpg', '#', '#', '#', 0),
(8, 'Mr. Anuradha Wijekoon', 'Secretary Youth and Sports', 'youth@gmail.com', '-29941842293_161261298613_1626151817_n.jpg', '#', '#', '#', 0),
(9, 'Mr. Damith Wickramasinghe ', 'Director General/Chairman ', 'youth@gmail.com', '-56070824762_135132316144_1626151879_n.jpg', '#', '#', '#', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_type`, `title`, `date`, `image_name`, `short_description`, `description`, `queue`) VALUES
(7, 1, '10000 Beds Apeksha Hospital2', '2021-07-29', '-116091036001_75112104905_1627543400_n.jpg', 'dddd', '<p>dd ddd</p>', 0),
(8, 1, 'Blood Donation Kaluthara2', '2021-07-30', '-14136946710_177066194196_1627543518_n.jpg', 'xx gg', '<p>jscdj sdcnd</p>', 0),
(9, 1, 'Drama Festival22', '2021-07-30', '-77237564749_113965576157_1627543582_n.jpg', 'da dsc', '<p>adc ads asd sads</p>', 0),
(10, 1, '10000 Beds Apeksha Hospital', '2021-07-29', '-116091036001_75112104905_1627543400_n.jpg', 'dddd', '<p>dd ddd</p>', 0),
(11, 1, 'Blood Donation Kaluthara', '2021-07-30', '-14136946710_177066194196_1627543518_n.jpg', 'xx gg', '<p>jscdj sdcnd</p>', 0),
(12, 1, 'Drama Festival', '2021-07-30', '-77237564749_113965576157_1627543582_n.jpg', 'da dsc', '<p>adc ads asd sads</p>', 0),
(13, 1, '10000 Beds Apeksha Hospital2', '2021-07-29', '-116091036001_75112104905_1627543400_n.jpg', 'dddd', '<p>dd ddd</p>', 0),
(14, 1, 'Blood Donation Kaluthara2', '2021-07-30', '-14136946710_177066194196_1627543518_n.jpg', 'xx gg', '<p>jscdj sdcnd</p>', 0),
(15, 1, 'Drama Festival22', '2021-07-30', '-77237564749_113965576157_1627543582_n.jpg', 'da dsc', '<p>adc ads asd sads</p>', 0),
(16, 1, 'Drama Festival22', '2021-07-30', '-77237564749_113965576157_1627543582_n.jpg', 'da dsc', '<p>adc ads asd sads</p>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `inserted` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_photo`
--

CREATE TABLE `news_photo` (
  `id` int(11) NOT NULL,
  `news` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_photo`
--

INSERT INTO `news_photo` (`id`, `news`, `image_name`, `caption`, `queue`) VALUES
(1, 7, '-74167565997_117035574909_1628249389_n.jpg', 'ss', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE `news_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`id`, `title`, `queue`) VALUES
(1, 'aa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `page_type` int(11) DEFAULT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `banner_image_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `url`, `page_type`, `title`, `sub_title`, `image_name`, `banner_image_name`, `description`) VALUES
(4, 'youth-services-limited', 2, 'Youth Services Limited', 'Youth Services Limited', '-110237966632_80965174274_1631078199_n.jpg', 'aaa.jpg', '<p>Contrary to popular belief, <strong>Lorem Ipsum</strong> is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>'),
(17, 'finance', 3, 'Finance Division', 'ff', '-33844994690_157358146216_1631687262_n.jpg', '-54718383031_136484757875_1631687284_n.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius risus suscipit, viverra mauris ut, posuere arcu. Vestibulum ultricies, orci sit amet tincidunt faucibus, nisi justo tempus justo, sed euismod urna nunc non sapien. In hac habitasse platea dictumst. Aenean tristique est vel urna accumsan gravida. Donec ornare sapien eu tempor convallis. Mauris imperdiet condimentum maximus. In hac habitasse platea dictumst. Nunc metus nibh, ultrices a neque quis, iaculis ornare lacus. Vivamus lacinia sodales fringilla. In vehicula cursus mi, non aliquet leo. Nulla rhoncus arcu sit amet commodo laoreet. Pellentesque eu tincidunt ante. Nunc pellentesque bibendum suscipit. Sed vel urna sit amet mauris tempor molestie.</p>\r\n<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur cursus, est quis pharetra rutrum, metus nunc fringilla magna, ac malesuada mauris neque eget felis. Fusce rutrum fermentum nulla eget consectetur. Sed sit amet neque non nibh accumsan mollis. Vivamus bibendum quis ligula in pretium. Nullam vulputate dictum urna, et semper elit interdum nec. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n<p>Ut vel leo dolor. Cras bibendum, nisi eu efficitur varius, tortor eros semper est, id bibendum nunc neque id urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse sagittis diam congue dapibus pulvinar. Nulla metus augue, finibus nec nibh in, auctor vehicula ipsum. Nam enim sapien, vehicula eget lectus ut, fringilla commodo urna. Nullam vel libero ac purus dapibus posuere vitae sed risus. Integer mollis eros at neque molestie, et vehicula sapien porta. Curabitur vitae nunc augue. In ac ex malesuada, efficitur urna sed, ultricies nunc. In eget diam imperdiet lectus convallis consequat sed in tellus. Curabitur a lacus vel purus congue venenatis. Vivamus vehicula turpis posuere pretium aliquam. Maecenas auctor, augue et dictum dictum, diam diam porta metus, vitae fermentum ante nunc eget odio. Suspendisse auctor lorem leo, eget tempus turpis consectetur sit amet. Donec non congue velit.</p>\r\n<p>Aenean placerat tempor metus quis auctor. Nam non diam dignissim est pulvinar varius. Aliquam varius varius tempus. Donec nulla justo, ultricies in elit eget, condimentum interdum erat. Nulla congue suscipit tellus, a viverra urna egestas ut. Duis ex metus, mollis nec arcu quis, vulputate ultrices mauris. Vestibulum quis maximus dui, sit amet accumsan mi. Praesent tristique urna augue, vitae efficitur lacus placerat nec. Integer eget accumsan turpis. Duis feugiat vulputate sapien ut elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>\r\n<p>Praesent vel nulla sit amet magna elementum hendrerit. Nullam commodo mattis diam in efficitur. Ut placerat porta pellentesque. Ut facilisis metus sed lectus tincidunt feugiat. Morbi vitae cursus risus. Proin imperdiet condimentum malesuada. Aliquam eu nunc id magna iaculis feugiat. Suspendisse non dictum augue, non dapibus dolor. Sed vehicula eu tellus sed egestas. Etiam eleifend purus nec urna gravida, vestibulum suscipit dui scelerisque</p>'),
(18, 'youth-club', 2, 'Youth Club', 'Youth Club Federation', '-16690444294_174512696612_1631843926_n.jpg', '-26191581778_165011559128_1631843926_n.jpg', '<div class=\"col-lg-12\">\r\n<h5>Date of Establishment and Location</h5>\r\n<p class=\"visionM\">On 23 March, 1983, at Bandaranaike Memorial International Conference Hall, Colombo.</p>\r\n<br />\r\n<h5>The reason in the past that lead to the establishment Sri Lanka Federation of Youth Clubs</h5>\r\n<p class=\"visionM\">In order for the young generation to express their views freely and independently and also to present the same to the Government and the administration as it was necessary to have an organization of their own which expands from the rural level to the national level, Sri Lanka Federation of Youth Clubs which was the national level organization of the youth society/club programme launched under the directives of then His Excellency the President J.R. Jayawardana, has been established.</p>\r\n<h4>Flag of Sri Lanka Federation of Youth Clubs</h4>\r\n<h4><img class=\"img-responsive\" src=\"https://www.nysc.lk/images/Divisions/youth-federation.png\" alt=\"\" width=\"242\" height=\"181\" /></h4>\r\n<p class=\"visionM\">In a background of orange colour, the emblem of youth clubs where a young male and a female wielding a bunch of paddy and a torch also preceded by the National Youth Services Flag is featured in the Youth.</p>\r\n<h4>Organizational Structure of Sri Lanka Federation of Youth Clubs</h4>\r\n<p><img class=\"img-responsive\" src=\"https://www.nysc.lk/images/Divisions/youth-federation-str-e.PNG\" alt=\"\" width=\"229\" height=\"247\" /></p>\r\n<h5 align=\"left\">National Youth Day - 23<sup>rd</sup> day of the month of May</h5>\r\n<p class=\"visionM\">Based on the day, 23 March, 1999, on which the Sri Lanka Federation of Youth Clubs was established, 23rd May has been declared the National Youth Day.</p>\r\n<p>&nbsp;</p>\r\n<h5 align=\"left\">Youth Club</h5>\r\n<p class=\"visionM\">The domain (authorized area) of a youth club would be the Grama Niladhari Division and the youth with the age group of 13-19 shall obtain the membership of youth clubs. At a general meeting a staff of 09 officials is selected and Youth Services Officer shall be the Head of Staff. (Any information regarding the establishment of youth clubs or any other details pertaining to youth clubs shall be obtained by meeting the Youth Services Officer at the relevant Divisional Secretariat on Wednesdays.)</p>\r\n<p>&nbsp;</p>\r\n<h5 align=\"left\">Affirmation of Youth Club</h5>\r\n<p class=\"visionM\">I, being member of youth clubs, hereby undertake to act based on the four fold assertions of unity, friendship, cooperation and development.</p>\r\n<p>&nbsp;</p>\r\n<h5>The First Youth Club</h5>\r\n<ul>\r\n<li>\r\n<p class=\"visionM\">Established on - 03 June, 1979</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">District - Kegalle</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Electoral Division - Dadigama</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Grama Niladhari Division - Algama</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Name of the Youth Club - Niwahal</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h5>Acts Conferring Authority to Sri Lanka Federation of Youth Clubs</h5>\r\n<ul>\r\n<li>\r\n<p class=\"visionM\">Under the establishment and registration of Youth Organizations stated in Section 5 (2) C of National Youth Services Act No: 69 of 1979, Sri Lanka Federation of Youth Clubs has been established as a youth organization.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">By the Gazette Notification dated 30.05.1979 and under the Section 31 (9) (A) Inland Revenue Act No: 28 of 1979 the Federation has been declared as an accredited charity organization.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Under the Section 02 of Voluntary Social Service Organization Act No: 137 of 1980, the Federation has been registered as a social services organization under the registration No: 11/4/1/515/85.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h5>Functions carried out by Sri Lanka Federation of Youth Clubs</h5>\r\n<ul>\r\n<li>\r\n<p class=\"visionM\">Developing the leadership capacities of the youth</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Developing sports skills</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Improving of Art skills</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Implementation of programmes to create national and religious reconciliation and co-existence</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Implementation of social welfare programmes</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Direct intervention in youth problems of the country</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h5>Benefits provided to Youth through Youth Clubs</h5>\r\n<ul>\r\n<li>\r\n<p class=\"visionM\">Leadership training</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Opportunity for local and international youth exchange programmes</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Youth Parliament</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Opportunity to participate in Announcer&rsquo;s pool</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Personality development</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Programmes for promoting national and religious coexistence and reconciliation</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Guidance for job training</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Creating opportunity to improve sports skills through National Youth Sports Festival</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Creating opportunity to develop Art skills through Youth Awards Competition.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Providing employment opportunities through NYSCO Youth Cooperative Societies Appraising the youth with special abilities/talents through Youth Got Talent programme</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h5>The Beneficiary Group/Who will be benefitted</h5>\r\n<ul>\r\n<li>\r\n<p class=\"visionM\">Youth Club membership between the age group of 13-29, distributed across the Island</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h5>Method of Providing Benefits</h5>\r\n<ul>\r\n<li>\r\n<p class=\"visionM\">The participation of youth in these programmes will be done through the awareness programmes carried out across youth including the Youth Services Officer who would be in charge of youth affairs in the relevant Divisional Secretariat and the Chairman of the Regional Board of Youth Clubs.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">The youth are affiliated to the programmes representing Divisional Secretariats at district level.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Youth will be selected in such a manner that they will be distributed district wise at the national level.</p>\r\n</li>\r\n</ul>\r\n<p class=\"visionM\">Membership will be awarded benefits through Youth clubs, Regional Boards of Youth Clubs and District Boards of Youth Clubs</p>\r\n<p>&nbsp;</p>\r\n<h5>Method of Obtaining Benefits</h5>\r\n<ul>\r\n<li>\r\n<p class=\"visionM\">By enrolling in the youth clubs above benefits could be obtained.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h5>Objectives of Sri Lanka Federation of Youth Clubs</h5>\r\n<ul>\r\n<li>\r\n<p class=\"visionM\">Taking steps to create a morally accomplished patriotic generation of youth with complete personality and who are dedicated for human development.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Building unity, friendship and cooperation within the youth population by gathering them under one organization devoid of all differences such as nationality, cast, religion and political divisions.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Creating opportunities for the youth to present their inherent skills and capabilities.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Providing youth with the knowledge on the economic, social and cultural requirements related to national development and persuading them for scientific thinking.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Persuasion of youth towards the development of Arts, recreational, sports and cultural affairs and the conservation activities.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Application of youth labour for development activities of the country and directing the generation of youth towards voluntary services.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Adapting the youth towards democratic lifestyle.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Utilizing the free time of youth in worthy and productive manner and creating platform for them to present their inherent capabilities and skills.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Personality development and leadership training for youth.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Providing a training on youth and community development.</p>\r\n</li>\r\n<li>\r\n<p class=\"visionM\">Encouraging the youth towards strengthening their economy.</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h5>Regional Board of Youth Club</h5>\r\n<p class=\"visionM\">The official namely President, Secretary, Treasurer, Organizer, Vice president and Vice Secretary of youth clubs established in one Divisional Secretariat Division, and registered with the Sri Lanka Federation of Youth Clubs, shall be permitted to represent the Regional Federation. By the secret votes/ballets of the youth representing the Regional Federation of Youth Clubs, Regional Board of Youth Clubs shall be elected. The Regional Board comprises staff of 15 officials. The Secretary of the Regional Board shall be the Youth Services Officer in charge of the Divisional Secretariat.</p>\r\n<p>&nbsp;</p>\r\n<h5>District Board of Youth Clubs</h5>\r\n<p class=\"visionM\">There are 25 administrative districts operating in Sri Lanka and only the Colombo district has been named under 02 separate divisions for the easy handling of administrative matters. As such the activities of the National Youth Services Council are implemented in 26 districts. A District Federation of Youth Clubs is conducted centering a district and it shall be an associate federation. The District Federation of Youth Clubs shall be convened by the District Youth Services Officer of National Youth Services Council and he shall be the Secretary of the federation. Amongst the President or the Secretary of the youth clubs established in the district and registered with Sri Lanka Federation of Youth Clubs and the Presidents, Secretaries and Organizers of Regional Boards of Youth Clubs, the board of official of the District Board of Youth Clubs shall be appointed. The number of officials appointed for a district board of youth clubs shall be 18.</p>\r\n<p>&nbsp;</p>\r\n<h5>National Board of Youth Clubs</h5>\r\n<p class=\"visionM\">The National Board shall be the supreme organization of Sri Lanka Federation of Youth Clubs. With fifty two (52) youth leaders (02 members from each district) who have come through the ranks by holding the leadership of regional board of youth clubs, 26 Secretaries of the district board of youth clubs (They are the District Youth Services Officers of National Youth Services Council), 09 representatives appointed by the Chairman, National Youth Services Council, and also an officer, appointed by the Hon. Chairman, as the Administrative Secretary to coordinate the activities of National Youth Services Council and Sri Lanka Federation of Youth Clubs, the total number of member of the National Board shall be 89. (together with Hon. Chairman)</p>\r\n<div class=\"row\">\r\n<div class=\"col-lg-12\">\r\n<h5>The Present Board of Staff of Sri Lanka Federation of Youth Clubs</h5>\r\n<table class=\"table table-bordered\">\r\n<tbody>\r\n<tr>\r\n<th>No.</th>\r\n<th>Post</th>\r\n<th>Name</th>\r\n</tr>\r\n<tr>\r\n<td>1.</td>\r\n<td>Hon. Chairman</td>\r\n<td>--</td>\r\n</tr>\r\n<tr>\r\n<td>2.</td>\r\n<td>Vice Chairman 1</td>\r\n<td>--</td>\r\n</tr>\r\n<tr>\r\n<td>3.</td>\r\n<td>Administrative Secretary</td>\r\n<td>Mr.--</td>\r\n</tr>\r\n<tr>\r\n<td>4.</td>\r\n<td>Secretary</td>\r\n<td>Mr. Shehan Koshila kannangara</td>\r\n</tr>\r\n<tr>\r\n<td>5.</td>\r\n<td>Vice Chairman II</td>\r\n<td>Mr. K.Yshodaran</td>\r\n</tr>\r\n<tr>\r\n<td>6.</td>\r\n<td>Vice Chairman III</td>\r\n<td>Mr. A.A.Chamara Prasad Amarasinghe</td>\r\n</tr>\r\n<tr>\r\n<td>7.</td>\r\n<td>Treasurer</td>\r\n<td>Ms. U.L.S.Hashani Perera</td>\r\n</tr>\r\n<tr>\r\n<td>8.</td>\r\n<td>Organizer</td>\r\n<td>Mr. K.W.J.Praboda Navindra</td>\r\n</tr>\r\n<tr>\r\n<td>9.</td>\r\n<td>Assistant Organizer</td>\r\n<td>Mr. Ravindran Komalaraj</td>\r\n</tr>\r\n<tr>\r\n<td>10.</td>\r\n<td>Deputy Secretary I</td>\r\n<td>Mr. A.P.Neranjan Pradeep Wickramasinghe</td>\r\n</tr>\r\n<tr>\r\n<td>11.</td>\r\n<td>Deputy Secretary II</td>\r\n<td>Mr. S.Kushan Madusanka Jayarathne</td>\r\n</tr>\r\n<tr>\r\n<td>12.</td>\r\n<td>Chairman,Education, Training and Counseling Bureau</td>\r\n<td>Miss. S.Shanika Maduwanthi Suraweera</td>\r\n</tr>\r\n<tr>\r\n<td>13.</td>\r\n<td>Chairman,Planning and Research Bureau</td>\r\n<td>Mr. S.M.Shashin Milinda</td>\r\n</tr>\r\n<tr>\r\n<td>14.</td>\r\n<td>Chairman,National Development Bureau</td>\r\n<td>Mr. S. Janagan</td>\r\n</tr>\r\n<tr>\r\n<td>15.</td>\r\n<td>Chairman,Sports and Diverse External Activities Bureau</td>\r\n<td>Mr. W.Amal Pradeep Navinda</td>\r\n</tr>\r\n<tr>\r\n<td>16.</td>\r\n<td>Chairman,Cultural Affairs Bureau</td>\r\n<td>Mr. T. Umakanthan</td>\r\n</tr>\r\n<tr>\r\n<td>17.</td>\r\n<td>Chairman,Presentation of Awards Bureau</td>\r\n<td>Mr. A.M. Tharindu Navin Kumara</td>\r\n</tr>\r\n<tr>\r\n<td>18.</td>\r\n<td>Chairman,Foreign Bureau</td>\r\n<td>Mr. G.B.Hasith Sandaruwan</td>\r\n</tr>\r\n<tr>\r\n<td>19.</td>\r\n<td>Chairman,Communication, Extension, and Youth Relations Bureau</td>\r\n<td>Mr. T.Vimalaraj</td>\r\n</tr>\r\n<tr>\r\n<td>20.</td>\r\n<td>Chairman,Social Services and Welfare Bureau</td>\r\n<td>Mr. Y.M.Dilanjana Saliya Yapa</td>\r\n</tr>\r\n<tr>\r\n<td>21.</td>\r\n<td>Chairman,Funds Bureau</td>\r\n<td>Mr. H.P.Gayashan Sachiranga</td>\r\n</tr>\r\n<tr>\r\n<td>22.</td>\r\n<td>Chairman,Entrepreneurship and Business Development Bureau</td>\r\n<td>Mr. R.M.Tharindu Gayan Madusanka</td>\r\n</tr>\r\n<tr>\r\n<td>23.</td>\r\n<td>Chairman,Earth Conservation Bureau</td>\r\n<td>Miss. M.G.Deshani Dilanka Wijesooriya</td>\r\n</tr>\r\n<tr>\r\n<td>24.</td>\r\n<td>Chairman,Civil Organizations Coordination Bureau</td>\r\n<td>Mr. W.K.Janith Vimukthi Akalanka</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-lg-12 col-sm-12 col-xs-12\">\r\n<h5>Contact Details</h5>\r\n</div>\r\n<div class=\"col-lg-6 col-sm-6 col-xs-12\">\r\n<h5>Address</h5>\r\n<p class=\"visionM\">Sri Lanka Federation of Youth Clubs,</p>\r\n<p class=\"visionM\">National Youth Services Council,</p>\r\n<p class=\"visionM\">No. 65,</p>\r\n<p class=\"visionM\">High Level Road,</p>\r\n<p class=\"visionM\">Maharagama.</p>\r\n<div class=\"col-lg-6 col-sm-6 col-xs-12\">\r\n<h5>Telephone and Email</h5>\r\n<p class=\"visionM\">Telephone - 0112844210 Ext 201</p>\r\n<p class=\"visionM\">Email - <a href=\"mailto:ycfsrilanka@gmail.com\">ycfsrilanka@gmail.com</a></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>');
INSERT INTO `pages` (`id`, `url`, `page_type`, `title`, `sub_title`, `image_name`, `banner_image_name`, `description`) VALUES
(19, 'youth-parliment', 2, 'Youth Parliment', 'Youth Parliment Members', '-83070015308_108133125598_1631845020_n.jpg', '-124403265778_66799875128_1631845020_n.jpg', '<div class=\"container newsRow\">\r\n<div class=\"row light-panel\">\r\n<div class=\"col-lg-12\">\r\n<div class=\"inner\">\r\n<h6 align=\"right\">Youth Parliment Official Web Site <a style=\"text-align: right; color: #ccc;\" href=\"http://www.slyp.lk/\" target=\"_blank\">www.slyp.lk</a></h6>\r\n</div>\r\n</div>\r\n<div class=\"col-lg-12\">\r\n<table class=\"table table-bordered\">\r\n<tbody>\r\n<tr>\r\n<th>No.</th>\r\n<th>Name with Initial</th>\r\n<th>Adress</th>\r\n<th>ID Card No</th>\r\n<th>District</th>\r\n<th>ID Photo</th>\r\n</tr>\r\n<tr>\r\n<td>1.</td>\r\n<td>Mr.P.D.C.Lakchan</td>\r\n<td>57/B, Wekanda Rd, Homagama.</td>\r\n<td>911641275 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/1.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>2.</td>\r\n<td>Miss.H.M.H.Pinipa</td>\r\n<td>858, Athurugiriya Rd, Homagama.</td>\r\n<td>968080300 v</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/2.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>3.</td>\r\n<td>Mr.M.S.L.Weerasinghe</td>\r\n<td>09, Raddoluwa, Seeduwa.</td>\r\n<td>971122757 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/3.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>4.</td>\r\n<td>Mr.A.P.P.P.Sankalpa</td>\r\n<td>663/A, Godawela, Veyangoda.</td>\r\n<td>953243130 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/4.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>5.</td>\r\n<td>Mr.M.A.L.H.Mapa</td>\r\n<td>7/1, Balathawa, Ambepussa.</td>\r\n<td>930400246 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/5.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>6.</td>\r\n<td>Mr.R.M.S.S.S.Bandara</td>\r\n<td>35, Walgampaya, Danture.</td>\r\n<td>911641020 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/6.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>7.</td>\r\n<td>Mr.S.A.D.M..Jayathilaka</td>\r\n<td>02/C, Hendimahara, Minuwangoda.</td>\r\n<td>912411800 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/7.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>8.</td>\r\n<td>Mr.K.M.K.T.Madushanka</td>\r\n<td>Priyawasa, Athubode, Walasmulla.</td>\r\n<td>892223980 V</td>\r\n<td>Hambanthota</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/8.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>9.</td>\r\n<td>Mr.W.W.M.W.M.W.U.S.B.Madawatte</td>\r\n<td>86/2A, North Makola, Kiribathgoda.</td>\r\n<td>971111240 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/9.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>10.</td>\r\n<td>Mr.D.M.Aluthgedara</td>\r\n<td>489/A, Buddayaya, Galamuna.</td>\r\n<td>970380809 V</td>\r\n<td>Polonnaruwa</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/10.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>11.</td>\r\n<td>Mr.D.M.H.R.Ariyarathne</td>\r\n<td>Sub post office, kendagolla, Badulla.</td>\r\n<td>901840121 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/11.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>12.</td>\r\n<td>Mr.M.R.S.D.Malwattage</td>\r\n<td>Siriniwasa mawatha, Kumarapitiya, Abagasdowa.</td>\r\n<td>943370516 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/12.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>13.</td>\r\n<td>Mr.W.R.D.Karunarathna</td>\r\n<td>Keli groop, Dolosbage.</td>\r\n<td>891431171 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/13.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>14.</td>\r\n<td>Miss.H.M.S.Nirmani</td>\r\n<td>161, Siriwardhana Road, Horape Ragama.</td>\r\n<td>928114775 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/14.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>15.</td>\r\n<td>Mr.K.G.Abeysuriya</td>\r\n<td>346,Lumbini Road, Dalugama,Kelaniya.</td>\r\n<td>971484020 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/15.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>16.</td>\r\n<td>Mr.W.M.J.C.Perera</td>\r\n<td>38/2,Henegama, Harankahawa.</td>\r\n<td>962701426 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/16.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>17.</td>\r\n<td>Miss.S.P.K.Jayasundara</td>\r\n<td>247/8,Maya Mawatha, Kiribathgoda.</td>\r\n<td>946810290 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/17.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>18.</td>\r\n<td>Mr.G.L.S.R.Kumara</td>\r\n<td>Godawaththa, panangala west, panangala,galle.</td>\r\n<td>981371437 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/18.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>19.</td>\r\n<td>Mr.M.K.Lakshan</td>\r\n<td>93,Walasmulla, Dammulla, Beliatta.</td>\r\n<td>971871601 V</td>\r\n<td>Hambanthota</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/19.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>20.</td>\r\n<td>Mr.H.M.D.S.Bandara</td>\r\n<td>146/1,Dunukewulla, Panvilathanna.</td>\r\n<td>930781290 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/20.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>21.</td>\r\n<td>Mr.T.A.D.U.Kumara</td>\r\n<td>260,Galagoda, Kuleegoda.</td>\r\n<td>970373616 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/21.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>22.</td>\r\n<td>Mr.M.H.Sudusinghe</td>\r\n<td>239/2,Makola Road, Kiribathgoda.</td>\r\n<td>910112473 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/22.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>23.</td>\r\n<td>Mr.W.A.A.I.N.S.D.Lowe</td>\r\n<td>763/2,Madapitipana, Negombo.</td>\r\n<td>962933130 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/23.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>24.</td>\r\n<td>Mr.W.D.R.Fernando</td>\r\n<td>656/B4,Kapuwa wewa road, Ragama.</td>\r\n<td>930940429 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/24.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>25.</td>\r\n<td>Mr.R.A.C.H.Niroshan</td>\r\n<td>582/c, Nagahawaththa, Malwana.</td>\r\n<td>901881286 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/25.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>26.</td>\r\n<td>Mr.G.G.S.L.Deshappriya</td>\r\n<td>314/A,Mudugalla, udugemmedda, Madugalla.</td>\r\n<td>971590505 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/26.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>27.</td>\r\n<td>Mr.S.M.A.D.B.M. Premarathne</td>\r\n<td>173/A,Kiridiwela road, Radawana.</td>\r\n<td>942580142 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/27.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>28.</td>\r\n<td>Mr.W.M.S.K.Wanninayaka</td>\r\n<td>Senasana road, karakole, Nikawaratiya.</td>\r\n<td>970252150 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/28.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>29.</td>\r\n<td>Mr.W.S.S.Sandaruwan</td>\r\n<td>201/4,Katulanda, Ellakkala.</td>\r\n<td>953591529 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/29.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>30.</td>\r\n<td>Mr.W.A.Lakshitha</td>\r\n<td>89/2,Gonahena, Weboda.</td>\r\n<td>923411763 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/30.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>31.</td>\r\n<td>Mr.M.W.H.Dilup</td>\r\n<td>214,Katukurunda, Habaraduwa.</td>\r\n<td>892680484 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/31.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>32.</td>\r\n<td>Mr.W.G.C.Bhanuka</td>\r\n<td>27/B,Egoda Kanaththa,Bope, Galle.</td>\r\n<td>951661155 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/32.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>33.</td>\r\n<td>Mr.M.S.Kamil</td>\r\n<td>Uda gedara waththa,Silmiyapura.</td>\r\n<td>903550058 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/33.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>34.</td>\r\n<td>Mr.S.D.W.Arachchi</td>\r\n<td>128,Apitagoda, Thunkama.</td>\r\n<td>952783696 V</td>\r\n<td>Rathnapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/34.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>35.</td>\r\n<td>Mr.W.A.H.Feranando</td>\r\n<td>Serakkuliya,karatiw,puttlam.</td>\r\n<td>982670993 V</td>\r\n<td>Puttlam</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/35.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>36.</td>\r\n<td>Mr.T.M.M.K.Thennakoon</td>\r\n<td>70, 4/B,Gammanaya, kelewewa, Nawagaththegama.</td>\r\n<td>892711763 V</td>\r\n<td>Puttlam</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/36.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>37.</td>\r\n<td>Mr.K.B.Muhandiramge</td>\r\n<td>22/1,1st lane, Gammana road, Maharagama.</td>\r\n<td>913170539 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/37.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>38.</td>\r\n<td>Mr.D.M.C.Darshana</td>\r\n<td>Pelawatta, wattegama south,Dickwella.</td>\r\n<td>932961237 V</td>\r\n<td>Matara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/38.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>39.</td>\r\n<td>Mr.P.P.Jayawickrama</td>\r\n<td>\"sirini\',Komangoda, Thihagoda.</td>\r\n<td>931611577 V</td>\r\n<td>Matara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/39.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>40.</td>\r\n<td>Mr.W.M.A.M.B. Weerasinghe</td>\r\n<td>117,siripura, polonnaruwa.</td>\r\n<td>912002390 V</td>\r\n<td>Polonnaruwa</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/40.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>41.</td>\r\n<td>Mr.M.K.S.Tharaka</td>\r\n<td>\"Tharaka\",Duwawaththa, Horagoda, Thelijjawila.</td>\r\n<td>952042734 V</td>\r\n<td>Matara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/41.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>42.</td>\r\n<td>Mr.R.P.G.N.P.Rajapaksha</td>\r\n<td>39,Kuruabemuduna, Narampanawa.</td>\r\n<td>967422797 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/42.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>43.</td>\r\n<td>Mr.A.V.D.S.Nimantha</td>\r\n<td>\"Geeth sewana\", Gedawala road, Hallala,welipitiya.</td>\r\n<td>941820859 V</td>\r\n<td>Matara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/43.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>44.</td>\r\n<td>Miss.S.A.M.A.D.S.D. Senanayaka</td>\r\n<td>01,Welewewa North, Nawagaththegama.</td>\r\n<td>907841197 V</td>\r\n<td>Puttlam</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/44.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>45.</td>\r\n<td>Miss.A.D.P.Rodrigo</td>\r\n<td>629/B,Kalpiti road, kurinjunpitiya south.</td>\r\n<td>957510485 V</td>\r\n<td>Puttlam</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/45.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>46.</td>\r\n<td>Mr.R.G.M.Wickramasingha</td>\r\n<td>52,Goomaraya janapadaya, Thawalantenna.</td>\r\n<td>961402328 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/46.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>47.</td>\r\n<td>Mr.V.Thevavithuran</td>\r\n<td>31/4,Kandasami kovil road, Trincomalee.</td>\r\n<td>902941231 V</td>\r\n<td>Trincomalee</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/47.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>48.</td>\r\n<td>Miss.M.N.D.Fernando</td>\r\n<td>214,\"Lalithra\", Meda nainamadama.</td>\r\n<td>897093898 V</td>\r\n<td>Puttlam</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/48.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>49.</td>\r\n<td>Mr.W.K.J.Isuranga</td>\r\n<td>Diyapaththugama, polgampola.</td>\r\n<td>971001151 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/49.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>50.</td>\r\n<td>Miss.R.M.E.K.K.Rathnayaka</td>\r\n<td>122,Kalupahana Estate,Beragala, Haldummulla.</td>\r\n<td>968421727 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/50.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>51.</td>\r\n<td>Mr.Aiyamuththu Dilukshan</td>\r\n<td>38/17A,Lower road, orr\'s Hill, Trincomalee.</td>\r\n<td>953180197 V</td>\r\n<td>Trincomalee</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/51.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>52.</td>\r\n<td>Miss.D.M.I.S.Dilrukshi</td>\r\n<td>274,Rajjammana, Nawajanapadaya, Madawala,Matale.</td>\r\n<td>948252562 V</td>\r\n<td>Matale</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/52.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>53.</td>\r\n<td>Miss.W.I.S.Kumarasiri</td>\r\n<td>L/292,New Town,Ampara.</td>\r\n<td>917692688 V</td>\r\n<td>Ampara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/53.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>54.</td>\r\n<td>Miss.S.G.Rajapaksha</td>\r\n<td>\"Pasendu\",Julgahawtta,kotamba, Modarawana.</td>\r\n<td>938342997 V</td>\r\n<td>Hambanthota</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/54.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>55.</td>\r\n<td>Mr.N.Habeeb Mohammed</td>\r\n<td>Ganewalpola, Kekirawa.</td>\r\n<td>920150055 V</td>\r\n<td>Anuradhapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/55.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>56.</td>\r\n<td>Mr.W.K.K.I.Lakmal</td>\r\n<td>26, Sewanagala north, Sewanagala.</td>\r\n<td>911170655 V</td>\r\n<td>Monaragala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/56.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>57.</td>\r\n<td>Mr.K.K.V.Priyankara</td>\r\n<td>25,Kotugoda dhammawa rd, Kataragama.</td>\r\n<td>199132701491</td>\r\n<td>Monaragala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/57.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>58.</td>\r\n<td>Mr.S.J.K.Prabashwara</td>\r\n<td>463/1,\"Saman\", kongala, Hakmana.</td>\r\n<td>941333648 V</td>\r\n<td>Matara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/58.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>59.</td>\r\n<td>Mr.M.A.M.Haseef</td>\r\n<td>18,Dr.sheik fassy mawatha,Dharga Town.</td>\r\n<td>901410852 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/59.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>60.</td>\r\n<td>Mr.M.K.M.Husni</td>\r\n<td>7/A,Bulugahatenna, Akurana.</td>\r\n<td>970743138 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/60.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>61.</td>\r\n<td>Mr.P.G.M.Rodrigo</td>\r\n<td>111,Agatholla, Moranthuduwa.</td>\r\n<td>930620912 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/61.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>62.</td>\r\n<td>Mr.Y.M.A.D.Gunarathne</td>\r\n<td>95/B,Dharmashoka Mw, Aruppola,Kandy.</td>\r\n<td>980593150 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/62.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>63.</td>\r\n<td>Mr.R.Mithunaraj</td>\r\n<td>Araly road,Chankanai.</td>\r\n<td>893110682 V</td>\r\n<td>Jaffna</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/63.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>64.</td>\r\n<td>Mr.A.Y.Inparasa</td>\r\n<td>Chulipuram east,Chulipuram.</td>\r\n<td>921843585 V</td>\r\n<td>Jaffna</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/64.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>65.</td>\r\n<td>Mr.C.C.Horawalawithana</td>\r\n<td>32/A/01,Ambepitiya, Beruwala.</td>\r\n<td>930840424 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/65.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>66.</td>\r\n<td>Mr.P.Banujan</td>\r\n<td>183,Kaathi Aboobaker road, Jaffna.</td>\r\n<td>962460410 V</td>\r\n<td>Jaffna</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/66.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>67.</td>\r\n<td>Mr.P.Prasath</td>\r\n<td>Malayanthoddam, Kottawaththai, Velvettithurai.</td>\r\n<td>901752788 V</td>\r\n<td>Jaffna</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/67.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>68.</td>\r\n<td>Mr.S.Robinson</td>\r\n<td>Dutch road,periyavilan, ilavali.</td>\r\n<td>911364573 V</td>\r\n<td>Jaffna</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/68.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>69.</td>\r\n<td>Mr.P.S.Laksitha</td>\r\n<td>Remunagoda, kaluthara south.</td>\r\n<td>931380761 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/69.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>70.</td>\r\n<td>Mr.S.Sajishnavan</td>\r\n<td>B28 2/2, Soysapura Flats, Moratuwa.</td>\r\n<td>980782450 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/70.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>71.</td>\r\n<td>Miss.W.M.D.M.H.Andradi</td>\r\n<td>421/8,Galle road, Aluthgama.</td>\r\n<td>917403023 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/71.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>72.</td>\r\n<td>Mr.S.Ramesh kumar</td>\r\n<td>Caskieban Division,Brunswick Estate, Maskeliya.</td>\r\n<td>933172830 V</td>\r\n<td>Nuwara - Eliya</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/72.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>73.</td>\r\n<td>Mr.A.R.W.Akbar</td>\r\n<td>3/G,Kalawewa, Vijithapura.</td>\r\n<td>900051360 V</td>\r\n<td>Anuradhapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/73.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>74.</td>\r\n<td>Mr.E.G.Luxman</td>\r\n<td>East Street, Kayts,Jaffna.</td>\r\n<td>902802207 V</td>\r\n<td>Jaffna</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/74.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>75.</td>\r\n<td>Mr.G.Ilayaraja</td>\r\n<td>Chapelton,New colony,Bogawanthalawa.</td>\r\n<td>902823654 V</td>\r\n<td>Nuwara - Eliya</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/75.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>76.</td>\r\n<td>Mr.M.S.M.Nusly</td>\r\n<td>622/8,Galle road,Kaluthara (south).</td>\r\n<td>941514243 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/76.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>77.</td>\r\n<td>Miss.I.Shainujaa</td>\r\n<td>04,5th cross,Mamangam,Batticaloa.</td>\r\n<td>973281772 V</td>\r\n<td>Batticaloa</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/77.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>78.</td>\r\n<td>MR.M.I.N.Manawasinghe</td>\r\n<td>D 95/2, Minuwangamuwa, Hettimulla, Kegalle.</td>\r\n<td>941690459 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/78.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>79.</td>\r\n<td>Mr.T.Arudkaran</td>\r\n<td>Manthovil East,Kodikamam.</td>\r\n<td>943071713 V</td>\r\n<td>Jaffna</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/79.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>80.</td>\r\n<td>Mr.W.M.M.G.M.Fernando</td>\r\n<td>Ihalagama,Mdampe.</td>\r\n<td>911143909 V</td>\r\n<td>Puttlam</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/80.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>81.</td>\r\n<td>Mr.U.Nitharshan</td>\r\n<td>Kudathannai east,kudathannai.</td>\r\n<td>941271545 V</td>\r\n<td>Jaffna</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/81.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>82.</td>\r\n<td>Mr.I.Mathusan</td>\r\n<td>Siththiyam puliyadi east, Tellippalai.</td>\r\n<td>951293873 V</td>\r\n<td>Jaffna</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/82.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>83.</td>\r\n<td>Mr.H.P.S.H.Dissanayaka</td>\r\n<td>Wewapura,NO 1, Ihala koswadiya, Mahawewa.</td>\r\n<td>940523176 V</td>\r\n<td>Puttlam</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/83.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>84.</td>\r\n<td>Mr.Y.P.L.K.Senarathna</td>\r\n<td>Ihalawathna, yaddehemulla, Dorawaka.</td>\r\n<td>970360182 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/84.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>85.</td>\r\n<td>Mr.M.F.Imamdeen</td>\r\n<td>A.17,Dambuluwawa, Hemmathagama.</td>\r\n<td>933081443 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/85.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>86.</td>\r\n<td>Mr.R.Prasanth</td>\r\n<td>Bathgoda, Haldummulla.</td>\r\n<td>953570734 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/86.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>87.</td>\r\n<td>Mr.T.P.Kumara</td>\r\n<td>46,Bollaththawela, Lunugala.</td>\r\n<td>913372182 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/87.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>88.</td>\r\n<td>Mr.W.S.M.A.S.Wijesinghe</td>\r\n<td>02,Owitawatta, Nainamadama west, Nainamadama.</td>\r\n<td>933053229 V</td>\r\n<td>Puttlam</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/88.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>89.</td>\r\n<td>Mr.E.G.T.J.Deshapriya</td>\r\n<td>35,Diyagala road, Vidulipura.</td>\r\n<td>952890883 V</td>\r\n<td>Nuwara - Eliya</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/89.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>90.</td>\r\n<td>Mr.K.M.H.Madhushanka</td>\r\n<td>1/52,Alupothagama, Gonagama, Kurunegala.</td>\r\n<td>951612936 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/90.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>91.</td>\r\n<td>MR.A.P.Rashantha</td>\r\n<td>Kithulamulahena, Pahanakaawa, Ranwala,Kegalle.</td>\r\n<td>922080992 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/91.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>92.</td>\r\n<td>Miss.K.T.I.Udeshani</td>\r\n<td>Ularachchige watta, Metaramba, Unawatuna.</td>\r\n<td>945771216 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/92.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>93.</td>\r\n<td>Miss.S.S.Hettiarachchi</td>\r\n<td>92,Mawathagama, Padukka.</td>\r\n<td>915072267 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/93.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>94.</td>\r\n<td>Miss. R.A.D.R.H. Sandamini</td>\r\n<td>No.121/35, Sapumal Place,Welikada, Rajagiriya.</td>\r\n<td>958510039 V</td>\r\n<td>Urban Youth</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/94.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>95.</td>\r\n<td>Mr. A. C. M. Silva</td>\r\n<td>No.12, Markat rd, Wathugedara.</td>\r\n<td>973110292 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/95.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>96.</td>\r\n<td>Miss. C. Edirisingha</td>\r\n<td>No. C3/2/4, Temple Road, Colombo 10.</td>\r\n<td>968441167 V</td>\r\n<td>Urban Youth</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/96.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>97.</td>\r\n<td>Miss. P.K. T. D. Nadeesha</td>\r\n<td>Mahalapitiya, Unnvitiya.</td>\r\n<td>948222493 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/97.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>98.</td>\r\n<td>Mr. W.M.L.V. Weerakoon</td>\r\n<td>\"Sirisara Sumadura\", Haputhalegama, Haputhale.</td>\r\n<td>901211124 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/98.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>99.</td>\r\n<td>Mr. L.S. Gamage</td>\r\n<td>\"Supun\", Millagaspola, Haltota.</td>\r\n<td>920692311 V</td>\r\n<td>Kalutara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/99.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>100.</td>\r\n<td>Mr. D.P. H. A. Sumanarathna</td>\r\n<td>Ranjani niwasa, Polkumbura, Rideegama.</td>\r\n<td>960922220 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/100.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>101.</td>\r\n<td>Mr. H.W.A.I.S. Withanaarachchi</td>\r\n<td>Dampathigama Road, Bibile.</td>\r\n<td>961111935 V</td>\r\n<td>Monaragala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/101.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>102.</td>\r\n<td>Mr. H. S. K. A. Abayasiri/td&gt;</td>\r\n<td>Damunawa, Moragane.</td>\r\n<td>931393170 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/102.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>103.</td>\r\n<td>Mr. M.D.S.M. Chandrasiri</td>\r\n<td>No.336, Kananvila, Horana.</td>\r\n<td>930382620 V</td>\r\n<td>Kalutara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/103.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>104.</td>\r\n<td>Mr. E.M. A. S. Banda</td>\r\n<td>Mahakade gedara, Mathatilla, Mirahawatta.</td>\r\n<td>952850865 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/104.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>105.</td>\r\n<td>Miss. D.M. K.Kavindi</td>\r\n<td>Helagedara, Meepanawa, Udapussellawa.</td>\r\n<td>987920424 V</td>\r\n<td>Nuwara Eliya</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/105.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>106.</td>\r\n<td>Mr. R.M. K. L. Rathnayake</td>\r\n<td>\"Lakmal\", Dumindarama Road, Imbulgoda, Badulla.</td>\r\n<td>942952139 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/106.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>107.</td>\r\n<td>Mr. S. K. P.Jayasooriya</td>\r\n<td>Pujapitiya, Metikubura, Polgahawela.</td>\r\n<td>951372390 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/107.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>108.</td>\r\n<td>Mr. G.V.M.V. Perera</td>\r\n<td>No.11, High level Rd, Kirulapane, Colombo 06.</td>\r\n<td>970530525 V</td>\r\n<td>Colombo 01</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/108.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>109.</td>\r\n<td>Mr. U.K. C. Darshana</td>\r\n<td>No.74, 4th Stage, Badowita, Mount Lavinia.</td>\r\n<td>933170829 V</td>\r\n<td>Urban Youth</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/109.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>110.</td>\r\n<td>Mr. A. M. C. D. J. Bandara</td>\r\n<td>Parana Janapadaya, Ethkadura.</td>\r\n<td>951570460 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/110.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>111.</td>\r\n<td>Mr. M.N. Yousuf</td>\r\n<td>158/1 Kumarathunga Mv, Matara.</td>\r\n<td>911602156 V</td>\r\n<td>Matara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/111.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>112.</td>\r\n<td>MR.M. R. Nuwanpriya</td>\r\n<td>No.1, Sri Dharmakeerthiyarama RD,Colombo 03.</td>\r\n<td>930750190 V</td>\r\n<td>Colombo 01</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/112.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>113.</td>\r\n<td>Mr. R.M.U.M.B. Rathnayake</td>\r\n<td>\"Udara\", Viridiyawa Rd, Thalammehera, Pannala.</td>\r\n<td>912720900 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/113.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>114.</td>\r\n<td>Mr. J.P.D. C. Jayalath</td>\r\n<td>No.02, Palugama, Halwella, Narammala.</td>\r\n<td>953591103 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/114.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>115.</td>\r\n<td>Mr. D.L.D.D. Rasanjana</td>\r\n<td>No.2/1, Godagandeniya, Peradeniya.</td>\r\n<td>199427310023</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/115.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>116.</td>\r\n<td>Mr. W.B.M. T. P. Weerasekara</td>\r\n<td>No.13, Wimalagama, Wellegala.</td>\r\n<td>951754021 V</td>\r\n<td>Kururnegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/116.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>117.</td>\r\n<td>Miss. K.H. A. P. Kumari</td>\r\n<td>No.15/03, Wathupola, Wattappola.</td>\r\n<td>938043221 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/117.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>118.</td>\r\n<td>Mr. D. P. Abeysingha</td>\r\n<td>No. 336, Maligathanna, Uhana.</td>\r\n<td>930254762 V</td>\r\n<td>Ampara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/118.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>119.</td>\r\n<td>Mr. J.M.Thifas</td>\r\n<td>No. 246, Hairath Road, Valaichenai-05.</td>\r\n<td>933460720 V</td>\r\n<td>Batticaloa</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/119.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>120.</td>\r\n<td>Mr. K. Thusanthan</td>\r\n<td>Main Street Mahiloor-munai 110/B, Kluwanchikudy.</td>\r\n<td>921372213 V</td>\r\n<td>Batticaloa</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/120.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>121.</td>\r\n<td>Mr. A.C. Nifras</td>\r\n<td>No. 174/A, Beech Road, Akkarapaththu-01.</td>\r\n<td>943133034 V</td>\r\n<td>Amperai</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/121.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>122.</td>\r\n<td>Mr. B.D.I.P. Wimalaweera</td>\r\n<td>Daduwagolla, Bambaragaswewa, Galewela.</td>\r\n<td>980032728 V</td>\r\n<td>Mathale</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/122.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>123.</td>\r\n<td>Mr: Z. M. Zajeeth</td>\r\n<td>No.297/D, Market Road, Sainthamaruthu-07.</td>\r\n<td>911081270 V</td>\r\n<td>Ampara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/123.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>124.</td>\r\n<td>Mr. S.H.L. R. Kumara</td>\r\n<td>Ruwan Niwasa, Ellanda, Klugahakandura.</td>\r\n<td>950532424 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/124.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>125.</td>\r\n<td>Mr.S. J. Logu</td>\r\n<td>Arippu, Chilawathurai, Mannar.</td>\r\n<td>932823691 V</td>\r\n<td>Mannar</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/125.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>126.</td>\r\n<td>Mr. T. Lushanthan</td>\r\n<td>B1-F/15, Bloemendhal Flats, Colombo 03.</td>\r\n<td>901712131 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/126.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>127.</td>\r\n<td>Mr. G.G. C. Sandeep</td>\r\n<td>Horagahapitiya, Owilikanda, Matale.</td>\r\n<td>982342430 V</td>\r\n<td>Matale</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/127.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>128.</td>\r\n<td>Mr. S.Kesavan</td>\r\n<td>No.35/5,6th Lane, Veppankulam, Vavuniya.</td>\r\n<td>942182996 V</td>\r\n<td>Vavuniya</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/128.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>129.</td>\r\n<td>Mr. Y. Ninosan</td>\r\n<td>No.748/A, Yogapuram Center, Yogapuram.</td>\r\n<td>900362692 V</td>\r\n<td>Mullaithiva</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/129.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>130.</td>\r\n<td>Mr: T. Majuran</td>\r\n<td>117, Aseervathappar Road,Nallur,Jaffna.</td>\r\n<td>892993114 V</td>\r\n<td>Jaffna</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/130.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>131.</td>\r\n<td>Mr. A.G. D. M.Premathilaka</td>\r\n<td>Bulath Aththaoya, Nagolla,Wilgamuwa.</td>\r\n<td>951833606 V</td>\r\n<td>Matale</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/131.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>132.</td>\r\n<td>Mr. K. Vijayarupan</td>\r\n<td>Darmakkeni Pallai, Kilinochchi.</td>\r\n<td>913065654 V</td>\r\n<td>Kilinichchi</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/132.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>133.</td>\r\n<td>Mr. F. T. Ahamed</td>\r\n<td>No.403/1, V.H. Road, Sainthamaruthu-11.</td>\r\n<td>910841360 V</td>\r\n<td>Ampara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/133.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>134.</td>\r\n<td>Mr. P.W.G.J.L. Sampath</td>\r\n<td>No. 16, Nayapana Janapadaya, Gampola.</td>\r\n<td>940572754 V</td>\r\n<td>Nuwara Eliya</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/134.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>135.</td>\r\n<td>Mr. L. Sulecshan</td>\r\n<td>No. 91/1, Nadarajananda Road.</td>\r\n<td>901431809 V</td>\r\n<td>Ampara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/135.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>136.</td>\r\n<td>Mr. W. D. N.Fernando</td>\r\n<td>55/1, Vilakolawatta, Tissa Road, Wadduwa.</td>\r\n<td>199625401585</td>\r\n<td>Kalutara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/136.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>137.</td>\r\n<td>Mr. N.H. I. K. Jayasena</td>\r\n<td>No. 116/1/A, Mahasenpura, Thissamaharama.</td>\r\n<td>930770248 V</td>\r\n<td>Hambantota</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/137.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>138.</td>\r\n<td>Miss. T. Dharshika</td>\r\n<td>33/1, Bodharagama Part,Yatadola, Mathugama.</td>\r\n<td>915382592 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/138.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>139.</td>\r\n<td>Mr. D.W.B.Kasun Rohana</td>\r\n<td>No.05, Mahawewa Junction, Angunukolapelessa.</td>\r\n<td>901800065 V</td>\r\n<td>Hambantota</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/139.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>140.</td>\r\n<td>Mr. T.R. Saranga</td>\r\n<td>Mangalasiripura, Kandana, Horana.</td>\r\n<td>920044034 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/140.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>141.</td>\r\n<td>Mr. W.G.R.P. Kumara</td>\r\n<td>\"Sirivijaya\", Getabaruwagama, Kotapola.</td>\r\n<td>921422776 V</td>\r\n<td>Matara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/141.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>142.</td>\r\n<td>Miss. M. V. P.Jayadewa</td>\r\n<td>No. 133, Vimalpura, Rikillagaskada.</td>\r\n<td>975462412 V</td>\r\n<td>Nuwara Eliya</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/142.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>143.</td>\r\n<td>Miss. W.A.K.M.Kumaranayaka</td>\r\n<td>\"Singhe\", Ampitiyawatta,Kirinda,Puhulwella.</td>\r\n<td>975192784 V</td>\r\n<td>Matara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/143.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>144.</td>\r\n<td>Mr. W.M. P. Y. A.Wasala</td>\r\n<td>Nawagama, Vavuniya.</td>\r\n<td>972800643 V</td>\r\n<td>Vavuniya</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/144.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>145.</td>\r\n<td>Mr. V.A. R. Madusanka</td>\r\n<td>Ihala Parussella, Yatiyantota.</td>\r\n<td>930352292 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/145.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>146.</td>\r\n<td>Mr. R.M. S. M. B. Kandekumbura</td>\r\n<td>Kandekumbura, Hela Halpe, Bandarawela.</td>\r\n<td>931361066 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/146.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>147.</td>\r\n<td>Mr. H.M.P. K. Ranasinghe</td>\r\n<td>Kurundankulama, Galgamuwa.</td>\r\n<td>911160765 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/147.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>148.</td>\r\n<td>Miss. W.R.G.N. Weragoda</td>\r\n<td>D/27, Thenna, Malawita, Hettimulla.</td>\r\n<td>915020429 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/148.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>149.</td>\r\n<td>Miss. H.M.T. M. Kumari</td>\r\n<td>\"Wedaniwasa\", Bibiladeniya, Udubaddawa.</td>\r\n<td>936540481 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/149.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>150.</td>\r\n<td>Mr. C. C. K. Jayasuriya</td>\r\n<td>\"Manel\" Bataduwa, Batapola.</td>\r\n<td>942682255 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/150.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>151.</td>\r\n<td>Mr. L.G.K. M.Somathilaka</td>\r\n<td>Deldeniya, Kegalla.</td>\r\n<td>952981536 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/151.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>152.</td>\r\n<td>Mr. P.N.V. Senavirathne</td>\r\n<td>No.676/6 A9, Bluemandal Rd, Colombo 15.</td>\r\n<td>960940474 V</td>\r\n<td>Colombo 01</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/152.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>153.</td>\r\n<td>Mr. S.D.V. Samaranayake</td>\r\n<td>Kumbukkotuwa Waththa, Anukkane.</td>\r\n<td>960872770 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/153.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>154.</td>\r\n<td>MR. W.M. S. L.Wijerathne</td>\r\n<td>Nawakatukeliyawa, Diyabeduma.</td>\r\n<td>931252615 V</td>\r\n<td>Polonnaruwa</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/154.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>155.</td>\r\n<td>Mr. M.G.G. S.Thilanka</td>\r\n<td>No. 46/23/1, 2nd Lane, Wakanda Road, Homagama.</td>\r\n<td>972683817 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/155.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>156.</td>\r\n<td>Mr. H.A. C. M. Gunawardana</td>\r\n<td>H/7,1,A, Mahalla, Wahakula, Ruwanwella.</td>\r\n<td>972560340 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/156.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>157.</td>\r\n<td>Mr. N.G. G.Chathuranga</td>\r\n<td>No.252, Godauda, Howpe, Galle.</td>\r\n<td>960302664 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/157.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>158.</td>\r\n<td>Mr. P.A.M. Prasad</td>\r\n<td>Koralegama Gedara Watta, Bambarawana.</td>\r\n<td>943352127 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/158.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>159.</td>\r\n<td>Mr. W.P. N. N. Samarajeewa</td>\r\n<td>Hambanawela, Deraniyagala.</td>\r\n<td>972461768 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/159.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>160.</td>\r\n<td>Mr. R.M. C. J. Bandara</td>\r\n<td>Walepola, Medawachchiya.</td>\r\n<td>199507000963</td>\r\n<td>Anuradhapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/160.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>161.</td>\r\n<td>Mr. R.M. A. R.Rathnayaka</td>\r\n<td>Hedeniya Niwasa, Kappagoda, Mawanella.</td>\r\n<td>953302535 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/161.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>162.</td>\r\n<td>Mr. W.A.A.C.K. Jayawardana</td>\r\n<td>No.303, Railway Town, Kekirwa.</td>\r\n<td>901081093 V</td>\r\n<td>Anuradhapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/162.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>163.</td>\r\n<td>Mr. R. Rajaram</td>\r\n<td>No.18/1, Duckwari Division, Rangala.</td>\r\n<td>953474336 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/163.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>164.</td>\r\n<td>Miss. T.M. Medagoda</td>\r\n<td>Galle Road, Athuruwela, Induruwa.</td>\r\n<td>935023734 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/164.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>165.</td>\r\n<td>Miss. A.Tharsika</td>\r\n<td>Koththiyapulai, Kannankudah, Batticaloa.</td>\r\n<td>945671440 V</td>\r\n<td>Batticaloa</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/165.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>166.</td>\r\n<td>Mr. A.M.D.M.B. Aththanayake</td>\r\n<td>No.66/5, Hadabowa, Sangarajapura.</td>\r\n<td>970532897 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/166.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>167.</td>\r\n<td>Mr. M. Sureshkanthan</td>\r\n<td>Badulla road, Karadiyanaru, Chenkalady.</td>\r\n<td>893400028 V</td>\r\n<td>Batticaloa</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/167.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>168.</td>\r\n<td>Mr. D.M.D.M.Dissanayaka</td>\r\n<td>No.47, Janajayapura, Maho.</td>\r\n<td>951702340 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/168.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>169.</td>\r\n<td>Miss. U.A.S.S. Premasiri</td>\r\n<td>No. 384, Anuladevi mw, Anuradhapura.</td>\r\n<td>947611828 V</td>\r\n<td>Anuradhapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/169.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>170.</td>\r\n<td>Mr. G. Vidanagamage</td>\r\n<td>No. 72, Pamunuwa, Maharagama.</td>\r\n<td>971220171 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/170.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>171.</td>\r\n<td>Mr.D.S.P.D.Sanjaya</td>\r\n<td>365,Galle Road, Dodanduwa.</td>\r\n<td>943660794 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/171.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>172.</td>\r\n<td>Mr.A.P.D.M.Lakshman</td>\r\n<td>193/2b,Jayanthi Mw, Himbutana.</td>\r\n<td>942840810 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/172.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>173.</td>\r\n<td>Mr.P.W.A.P.Weerasooriya</td>\r\n<td>2268,Tract 13,Sinhapura.</td>\r\n<td>931951319 V</td>\r\n<td>Trincomalee</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/173.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>174.</td>\r\n<td>Mr.K.A.K.Chandrasiri</td>\r\n<td>94/3,Aluth Ambalama, Pohorabawa.</td>\r\n<td>932044170 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/174.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>175.</td>\r\n<td>Mr.G.B.M.W.N.B.Godamunne</td>\r\n<td>Walawwatta, Kahagolla, Pilassa.</td>\r\n<td>932753715 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/175.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>176.</td>\r\n<td>Miss.B.M.N.M.Rathnasooriya</td>\r\n<td>Ralapanawagama, Nochchiyagama.</td>\r\n<td>965311823 V</td>\r\n<td>Anuradhapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/176.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>177.</td>\r\n<td>Mr.K.S.S.Wijerathna</td>\r\n<td>251 A,Molpe road,Katubedda,Moratuwa.</td>\r\n<td>902504419 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/177.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>178.</td>\r\n<td>Mr.R.M.H.P.Rajapaksha</td>\r\n<td>Muriyakadawala, Anuradhapura.</td>\r\n<td>962010970 V</td>\r\n<td>Anuradhapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/178.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>179.</td>\r\n<td>Mr.W.S.Dulanjana</td>\r\n<td>266/A, Pragathi Mawatha,Bangalawatta, Kottawa.</td>\r\n<td>900590652 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/179.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>180.</td>\r\n<td>Mr.I.A.L.S.Ileperuma</td>\r\n<td>Polwaththa, Ehaliyagoda.</td>\r\n<td>931681451 V</td>\r\n<td>Rathnapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/180.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>181.</td>\r\n<td>Mr.P.A.P.Rathnayaka</td>\r\n<td>Pallegedara,Karangoda, Rathnapura.</td>\r\n<td>930422525 V</td>\r\n<td>Rathnapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/181.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>182.</td>\r\n<td>Mr.A.C.Nabihan</td>\r\n<td>Anaichanai,Mutur,Trincomalee.</td>\r\n<td>912502872 V</td>\r\n<td>Trincomalee</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/182.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>183.</td>\r\n<td>Mr.B.M.A.N.Wijayabandara</td>\r\n<td>Ihalagedara, Kirindigalla, Ibbagamuwa.</td>\r\n<td>970853537 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/183.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>184.</td>\r\n<td>Miss.Y.Y.L.Gunathilaka</td>\r\n<td>Jayamawatha, Galapatha, Kaluthara.</td>\r\n<td>925701041 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/184.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>185.</td>\r\n<td>Mr.M.I.A.Shaheem</td>\r\n<td>Madige Anukkana, Sunandapura.</td>\r\n<td>923294201 V</td>\r\n<td>Kurunegala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/185.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>186.</td>\r\n<td>Mr.K.W.R.I.Danawardana</td>\r\n<td>Hirikubare gedara,Rabuka, Rakwana.</td>\r\n<td>901493251 V</td>\r\n<td>Rathnapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/186.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>187.</td>\r\n<td>Miss.P.N .K. L Nawarathna</td>\r\n<td>412/9/A Elapatha,Rathnapura.</td>\r\n<td>967783242 V</td>\r\n<td>Rathnapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/187.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>188.</td>\r\n<td>Mr.M.Kasun Priyanga</td>\r\n<td>No.140,Sandunpitiya, Nawasena pura.</td>\r\n<td>933582132 V</td>\r\n<td>Polonnaruwa</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/188.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>189.</td>\r\n<td>Miss. J.A.D.J.M Jayalath</td>\r\n<td>Erathnagoda, Kuruwita.</td>\r\n<td>956102537 V</td>\r\n<td>Rathnapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/189.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>190.</td>\r\n<td>Mr.J.K.P.P Karunadasa</td>\r\n<td>Dewalegama, Pathakada, Pelmadulla.</td>\r\n<td>901542660 V</td>\r\n<td>Rathnapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/190.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>191.</td>\r\n<td>Mr.D.N. Jayashanka</td>\r\n<td>288/3A, Baseline road, Colombo-91.</td>\r\n<td>951363324 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/191.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>192.</td>\r\n<td>Miss.H.K.C.N Sriwaduge</td>\r\n<td>145/2,Nawalamulla,Meegoda.</td>\r\n<td>985840296 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/192.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>193.</td>\r\n<td>Mr.D.M.C.D Dissanayake</td>\r\n<td>Mahakoonwewa, Maho.</td>\r\n<td>882693457 V</td>\r\n<td>Kurunagala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/193.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>194.</td>\r\n<td>Mr.A.K.C.S.Senarath</td>\r\n<td>Gallenakanda, Me/waleboda, Balangoda.</td>\r\n<td>961201683 V</td>\r\n<td>Rathnapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/194.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>195.</td>\r\n<td>Mr.R.M.G.B Rajaguru</td>\r\n<td>Ambalawa, Rideegama, Kurunegala.</td>\r\n<td>900841973 V</td>\r\n<td>Kurunagala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/195.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>196.</td>\r\n<td>Mr.J.M.K.Heshan</td>\r\n<td>Thalawaththa,Badalkubura.</td>\r\n<td>961281814 V</td>\r\n<td>Monaragala</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/196.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>197.</td>\r\n<td>Miss.W.D.I.S.Perera</td>\r\n<td>35/1,School lane, Gangodawila, Nugegoda.</td>\r\n<td>928173135 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/197.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>198.</td>\r\n<td>Mr.W.W.P.Y.C.Fernando</td>\r\n<td>Polgaha Udumulla,Eladuwa,Payagala.</td>\r\n<td>890750907 V</td>\r\n<td>Kaluthara</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/198.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>199.</td>\r\n<td>Miss.N.K.C.Vishuldi</td>\r\n<td>DomeeJayawardhana Mawatha, Meetiyagoda.</td>\r\n<td>965540369 V</td>\r\n<td>Galle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/199.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>200.</td>\r\n<td>Mr.W.S.P.R.Vithanage</td>\r\n<td>43/17,Sobadahama Pedesa,Moratuwa.</td>\r\n<td>199216704031</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/200.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>201.</td>\r\n<td>Mr.D.N.O.Withanage</td>\r\n<td>587,Pitipana South,Kiriwattuduwa.</td>\r\n<td>962352391 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/201.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>202.</td>\r\n<td>Mr.N.G.T.P.Wickramasineghe</td>\r\n<td>Deniya Gedara,Narissa,Opanayake.</td>\r\n<td>942271018 V</td>\r\n<td>Rathnapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/202.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>203.</td>\r\n<td>Mr.R.A.R.H.Kumara</td>\r\n<td>642/17,Thnnandahena,Koratota,Kaduwela.</td>\r\n<td>900932871 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/203.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>204.</td>\r\n<td>Mr.H.M.S.T.Herath</td>\r\n<td>No.30/2,Sorabora, Mahiyanganaya.</td>\r\n<td>970663177 V</td>\r\n<td>Badulla</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/204.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>205.</td>\r\n<td>Miss.S.M.N.Prabodhani</td>\r\n<td>No.85 yaya 06,Angamuwa, Rajanganaya.</td>\r\n<td>986570853 V</td>\r\n<td>Anuradhapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/205.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>206.</td>\r\n<td>Miss.N.H.M.B.K.Perera</td>\r\n<td>89/26A, Ketawalamulla Place,Colambo 09.</td>\r\n<td>199884510092</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/206.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>207.</td>\r\n<td>Mr.C.H.Rajakaruna</td>\r\n<td>Nelugollakada, Kahatagasdigiliya.</td>\r\n<td>911241595 V</td>\r\n<td>Anuradapura</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/207.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>208.</td>\r\n<td>Miss.A.D.Jayasinghe</td>\r\n<td>53,1st Lane,Egodawatta, Boralesgamuwa.</td>\r\n<td>906023040 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/208.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>209.</td>\r\n<td>Mr.S.N.Sudarshana</td>\r\n<td>Nikathanna, Welimanna, Aranayaka.</td>\r\n<td>932151820 V</td>\r\n<td>Kegalle</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/209.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>210.</td>\r\n<td>Mr.R.T.Egodage</td>\r\n<td>728/E, Himbutuwelgoda, Kelaniya.</td>\r\n<td>930161918 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/210.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>211.</td>\r\n<td>Mr.J.M.G.N.P.Jayamanna</td>\r\n<td>24,Jayantha Rd,Gampaha.</td>\r\n<td>913511824 V</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/211.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>212.</td>\r\n<td>Mr.A.J.C.Akarawita</td>\r\n<td>17/1,Pepiliyana Rd,Nedimala,Dehiwala.</td>\r\n<td>891261985 V</td>\r\n<td>Colombo-01</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/212.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>213.</td>\r\n<td>Mr.D.Denetthi</td>\r\n<td>305/11,Janatha Mw,Werahara,Boralesgamuwa.</td>\r\n<td>921882360 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/213.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>214.</td>\r\n<td>Mr.M.Z.M.Rizan</td>\r\n<td>48/30,Peer Saibo Street,Colombo-12.</td>\r\n<td>940300673 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/214.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>215.</td>\r\n<td>Miss.K.G.D.P.Kumari</td>\r\n<td>124/B,Neelawala,Kolabissa.</td>\r\n<td>945971754 V</td>\r\n<td>Kandy</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/215.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>216.</td>\r\n<td>Miss.R.P.T.D.Wickramasinghe</td>\r\n<td>246/A,Thotillagahawaththa,Karuwllegama.</td>\r\n<td>199366900173</td>\r\n<td>Gampaha</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/216.jpg\" alt=\"\" /></td>\r\n</tr>\r\n<tr>\r\n<td>217.</td>\r\n<td>Mr.s.l.Manar</td>\r\n<td>86\\7 Modara Street,colombo 15.</td>\r\n<td>921752245 V</td>\r\n<td>Colombo</td>\r\n<td><img src=\"https://www.nysc.lk/images/parliamentMem/217.jpg\" alt=\"\" /></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `page_character`
--

CREATE TABLE `page_character` (
  `id` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_character`
--

INSERT INTO `page_character` (`id`, `page`, `image_name`, `name`, `designation`, `contact_no`, `email`, `facebook`, `queue`) VALUES
(3, 4, '-10401288751_180801852155_1631250391_n.jpg', 'Sanju Shehan', 'MD', '22233445', 'ss@sss', 'sssssss', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_news`
--

CREATE TABLE `page_news` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_news`
--

INSERT INTO `page_news` (`id`, `page_id`, `title`, `image_name`, `date`, `short_description`, `description`, `queue`) VALUES
(10, 4, 'Sanju', '-91254524173_99948616733_1631251425_n.jpg', '2021-08-11', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. ', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced</p>', 0),
(11, 4, 'Making Your Website', '-22391678592_168811462314_1631530355_n.jpg', '2021-09-16', 'Making Your Website ', '<h1 class=\"article-page-header__title text-display-small\" data-test-id=\"article-page-header\">Making Your Website</h1>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_news_photo`
--

CREATE TABLE `page_news_photo` (
  `id` int(11) NOT NULL,
  `news` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_news_photo`
--

INSERT INTO `page_news_photo` (`id`, `news`, `image_name`, `caption`, `queue`) VALUES
(5, 1, '-99816955723_91386185183_1631000012_n.jpg', 'ggg', 3),
(7, 10, '-182285389393_8917751513_1631253912_n.jpg', 'aaaa', 0),
(8, 10, '-128306508983_62896631923_1631253925_n.jpg', 'dddd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_type`
--

CREATE TABLE `page_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_type`
--

INSERT INTO `page_type` (`id`, `title`, `queue`) VALUES
(2, 'services', 0),
(3, 'divisions', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photo_album`
--

CREATE TABLE `photo_album` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_album`
--

INSERT INTO `photo_album` (`id`, `title`, `image_name`, `queue`) VALUES
(5, 'Drama in 2019', '-10625114200_180578026706_1623057376_n.jpg', 0),
(6, 'Music Band', '-46004123302_145199017604_1628159529_n.jpg', 0),
(7, 'Dancin Festival', '-63745387228_127457753678_1628159874_n.jpg', 0),
(8, '10000 Beds Apeksha Hospital', '-112386747628_78816393278_1628159927_n.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `authToken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastLogin` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resetcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `createdAt`, `isActive`, `authToken`, `lastLogin`, `username`, `password`, `image_name`, `resetcode`) VALUES
(1, 'Suharshana', 'dinudhanusha@gmail.com', '2017-07-05 11:03:45', 1, 'b67e532a14b8d6556f53b8308237e588', '2021-09-06 15:50:33', 'Suharshana', 'e10adc3949ba59abbe56e057f20f883e', '-157892244_191045248662_1554483643_n.jpg', '97805'),
(2, 'Chalana', 'chalanadulaj99@gmail.com', '2021-05-19 00:00:00', 1, '34515594e13081146e3c5b1c305e45a1', '2021-09-15 10:06:24', 'Chalana', 'e10adc3949ba59abbe56e057f20f883e', '-157892244_191045248662_1554483643_n.jpg', ''),
(3, 'Pasindu', '@gmail.com', '2021-05-19 00:00:00', 1, '9beb02f5717acb8cecfdb4e61da53e04', '2021-09-17 07:22:17', 'pasindu', 'e10adc3949ba59abbe56e057f20f883e', '-157892244_191045248662_1554483643_n.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `video_album`
--

CREATE TABLE `video_album` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `queue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_album`
--

INSERT INTO `video_album` (`id`, `title`, `image_name`, `queue`) VALUES
(1, 'video album 01', '-188278558826_2924582080_1631777047_n.jpg', 2),
(2, 'Voice of Youth', '-56327067738_134876073168_1631777310_n.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_photo`
--
ALTER TABLE `album_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album_video`
--
ALTER TABLE `album_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center_type`
--
ALTER TABLE `center_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_by_centers`
--
ALTER TABLE `course_by_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_photo`
--
ALTER TABLE `course_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_subjects`
--
ALTER TABLE `course_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_type`
--
ALTER TABLE `course_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provinces_id` (`province`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_photo`
--
ALTER TABLE `event_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_photo`
--
ALTER TABLE `news_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_character`
--
ALTER TABLE `page_character`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_news`
--
ALTER TABLE `page_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_news_photo`
--
ALTER TABLE `page_news_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_type`
--
ALTER TABLE `page_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_album`
--
ALTER TABLE `photo_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_album`
--
ALTER TABLE `video_album`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_photo`
--
ALTER TABLE `album_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `album_video`
--
ALTER TABLE `album_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `center_type`
--
ALTER TABLE `center_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_by_centers`
--
ALTER TABLE `course_by_centers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course_photo`
--
ALTER TABLE `course_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_subjects`
--
ALTER TABLE `course_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `course_type`
--
ALTER TABLE `course_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `event_photo`
--
ALTER TABLE `event_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_photo`
--
ALTER TABLE `news_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `page_character`
--
ALTER TABLE `page_character`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_news`
--
ALTER TABLE `page_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `page_news_photo`
--
ALTER TABLE `page_news_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `page_type`
--
ALTER TABLE `page_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photo_album`
--
ALTER TABLE `photo_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video_album`
--
ALTER TABLE `video_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
