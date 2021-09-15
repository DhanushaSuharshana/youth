-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 12:02 PM
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
(26, 1, 7, 'Pasindu', 'ss', 'jjij', 'jjk', 'male', '2021-08-02', 'pp', '', '', 1, 'oo', '', 'pasindu5457@gmail.com', 'pass', 'pass', '2021-08-19 07:46:45', NULL);

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
(4, 'youth-services-limited', 2, 'Youth Services Limited', 'Youth Services Limited', '-110237966632_80965174274_1631078199_n.jpg', 'aaa.jpg', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>'),
(17, 'finance', 3, 'Finance', 'ff', '-33844994690_157358146216_1631687262_n.jpg', '-54718383031_136484757875_1631687284_n.jpg', '<p>ff</p>');

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
(2, 'Chalana', 'chalanadulaj99@gmail.com', '2021-05-19 00:00:00', 1, '34515594e13081146e3c5b1c305e45a1', '2021-09-15 10:06:24', 'Chalana', 'e10adc3949ba59abbe56e057f20f883e', '-157892244_191045248662_1554483643_n.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_photo`
--
ALTER TABLE `album_photo`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_photo`
--
ALTER TABLE `album_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
