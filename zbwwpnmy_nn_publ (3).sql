-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2022 at 12:06 AM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zbwwpnmy_nn_publ`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `username` varchar(200) NOT NULL,
  `order_id` int(200) NOT NULL,
  `journal_name` varchar(200) NOT NULL,
  `volume` varchar(200) NOT NULL,
  `article_title` varchar(200) NOT NULL,
  `file` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `new_name` varchar(255) NOT NULL,
  `size` int(200) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `published` varchar(255) DEFAULT NULL,
  `published_new` varchar(255) DEFAULT NULL,
  `linkd` date DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `confirm` varchar(255) DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `usercfile` varchar(255) DEFAULT NULL,
  `comdate` date DEFAULT NULL,
  `galley` varchar(255) DEFAULT NULL,
  `galley_date` date DEFAULT NULL,
  `galley_new` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`username`, `order_id`, `journal_name`, `volume`, `article_title`, `file`, `Date`, `new_name`, `size`, `link`, `published`, `published_new`, `linkd`, `status`, `remark`, `confirm`, `cdate`, `comments`, `usercfile`, `comdate`, `galley`, `galley_date`, `galley_new`) VALUES
('india.green', 3, 'International Journal of Early Childhood Special Education', 'Volume 14 Number 5', 'FEMINISM IN MANJU KAPURâ€™S HOME', '1563.docx', '2022-08-25', '1563.docx', 44449, NULL, '', '', NULL, 'PENDING', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.riset', 4, 'Journal of positive School psychology ', 'August- 2022, Volume. 6 No. 9', 'The Basics of Disabilities Etiquette: The Awareness of People First Language (PFL) among Special Education Students in Prayagraj, India.', '40081.docx', '2022-08-25', '40081.docx', 40190, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('user1', 5, 'web of science', '9', 'International Journal of Early Childhood Special Education', 'allusers.php', '2022-08-25', 'allusers.php', 3280, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('user1', 6, 'TRY', 'TRY', 'TRY', 'Manuscript.docx', '2022-08-25', 'Manuscript.docx', 206001, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('naveenmalikk', 7, 'TRY', 'TRY', 'TRY', 'Aceptance Letter__(DET) -5309[152] (1).docx', '2022-08-25', 'Aceptance Letter__(DET) -5309[152] (1).docx', 27971, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.green', 9, 'Journal of Positive School Psychology', 'Volume 6 Number 8', 'THE PORTRAYAL OF WOMEN IN MANJU KAPURâ€™S CUSTODY', '1564.docx', '2022-08-25', '1564.docx', 42248, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.riset', 10, 'Journal of Language and Linguistic Studies ', 'Current issue', 'An Illegitimate and Slangy attempt to call â€˜Mantoâ€™ the Herald of Obscenity: A Critical Study of Mantoâ€™s THANDA GHOSTH (Cold Meat)', '40083.docx', '2022-08-25', '40083.docx', 36601, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.green', 11, 'Journal of Positive School Psychology', 'Volume 6 Number 8', 'A SURVEY REGARDING COMFORTS AND OBSTACLES OF USING DIGITAL BANKING SERVICES AMONG THE PEOPLE OF KACHCHH DISTRICT', '1565.docx', '2022-08-25', '1565.docx', 43750, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.green', 12, 'Journal of Positive School Psychology', 'Volume 6 Number 8', 'Emerging Trends in E-commerce and Its Impact on Retail Business - an Empirical Study', '1566.docx', '2022-08-25', '1566.docx', 74000, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', 13, 'Solid State Phenomena', 'August 2022', 'Climatic monitoring to assess the crop status by modeling method in the watershed of bouregreg in Morocco', '3024.docx', '2022-08-26', '3024.docx', 3385056, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.ijrdo', 14, 'Journal of Postitve School Psychology', 'volume:6/issue:8 (2022)', 'Resting State Autonomic Markers, Depression And Anxiety In Women With Altered Thyroid Status', 'IJ-134.docx', '2022-08-26', 'IJ-134.docx', 58998, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', 15, 'NeuroQuantology', 'Current issue', 'REMAPPING THE HUMAN ABSURD LIFE THROUGH THE STUDYOF LITERATURE AND SCIENCE', '40084.docx', '2022-08-26', '40084.docx', 1143809, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.riset', 16, 'NeuroQuantology', 'Current issue', 'REMAPPING THE HUMAN ABSURD LIFE THROUGH THE STUDYOF LITERATURE AND SCIENCE', '40084.docx', '2022-08-26', '40084.docx', 1143809, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.green', 17, 'Journal of Positive School Psychology', 'Volume 6 Number 8', 'Decrypting the Correlates of School Bullying and Child Behaviour Problems', '1567.docx', '2022-08-26', '1567.docx', 40896, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.eph', 18, 'Journal of Pharmaceutical Negative Results', 'volume 13 Number 2', 'A Simplified Method For Evaluating Optimized Gingival Contour  For Single Implant Supported Zirconia Crown In The Aesthetic Zone - An In Vivo Study.', '10292_updated article.docx', '2022-08-26', '10292_updated article.docx', 464111, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.ink', 19, 'Journal of Positive School Psychology', 'Volume 6/ issue 8', 'Decrypting the Correlates of School Bullying and Child Behaviour Problems', '7007.docx', '2022-08-26', '7007.docx', 43643, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.i', 20, 'Journal of Positive school Pyschology', 'Volume 8', 'AN ANALYTICAL STUDY ON PERCEPTION OF STUDENTS TOWARDS HOSPITALITY INDUSTRY AFTER THEIR INDUSTRIAL TRAINING', 'Ipp-2007.docx', '2022-08-27', 'Ipp-2007.docx', 426756, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.nn', 21, 'Journal of Positive School Psychology', 'Vol. 6 No. 8 (2022)', 'RUSSIA-UKRAINE WAR : INDIAâ€™S POSITION AND OPERATION GANGA', 'NN-19.docx', '2022-08-27', 'NN-19.docx', 28416, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.mikky', 22, 'NeuroQuantology', 'Volume 20 Number 9 2022', 'Budget Concerned Anti-drone System with Wifi Connectivity ', '10782.docx', '2022-08-27', '10782.docx', 2215198, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('india.mikky', 23, 'NeuroQuantology', 'Volume 20 Number 9 2022', 'The Role of Emotional Intelligence & Artificial Intelligence in Customer Loyalty and Engagement', '10783.docx', '2022-08-27', '10783.docx', 98540, NULL, NULL, NULL, NULL, 'PENDING', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `order_id` int(255) NOT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `comdate` date NOT NULL,
  `cfile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `editorcfile`
--

CREATE TABLE `editorcfile` (
  `order_id` int(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(101, 'naveenmalikk', '', 'admin@1234', 'admin'),
(102, 'user1', 'harshchauhan327@gmail.com', '1234', 'user'),
(103, 'editor1', 'info@ijrdo.org', '12345', 'editor'),
(104, 'mikky.foreign', 'submit@mikkypub.com', 'Mikky@123', 'user'),
(105, 'naeem akhtar ', 'naeem.akhtar130@gmail.com', 'naeem', 'user'),
(106, 'waali aafaq', 'nnpub2022@gmail.com', 'nn@1234', 'user'),
(107, 'user11', 'navmalik@ymail.com', '1234', 'user'),
(108, 'editor11', 'mastjaatmalik@gmail.com', '1234', 'editor'),
(109, 'pragati', 'nayeem@gmail.com', '12345678', 'user'),
(110, 'edpr', 'edpr12@gmail.com', '123456', 'editor'),
(111, 'india.green', 'submit.india@gpubservice.com', 'Green@123', 'user'),
(112, 'india.mikky', 'submit.india@mikkypub.com', 'Mikky@123', 'user'),
(113, 'india.ijrdo', 'submit@ijrdopubservice.in', 'Ijrdo@123', 'user'),
(114, 'india.eph', 'submit.india@epublicationservice.com', 'EPH@123', 'user'),
(115, 'india.writerr', 'submission@thewriterr.in', 'Writerr@123', 'user'),
(116, 'india.i', 'article@ipubservice.in', 'Ipub@123', 'user'),
(117, 'india.ink', 'submission@inkpubs.in', 'Ink@123', 'user'),
(118, 'india.alpha', 'paper@publicationsservice.in', 'Alpha@123', 'user'),
(119, 'india.nn', 'submit@nnpubservice.in', 'NN@123', 'user'),
(120, 'india.riset', 'submit.india@risetpub.com', 'Riset@123', 'user'),
(121, 'riset.foreign', 'publication@risetpub.com', 'Riset@1234', 'user'),
(122, 'eph.foreign', 'submission@epublicationservice.com', 'EPh@1234', 'user'),
(123, 'green.foreign', 'submission@gpubservice.com', 'Green@1234', 'user'),
(124, 'ijrdo.foreign', 'submit@ijrdopubservice.com', 'Ijrdo@1234', 'user'),
(125, 'nn.foreign', 'submit@nnpubservice.com', 'NN@1234', 'user'),
(126, 'alpha.foreign', 'paper@publicationsservice.com', 'Alpha@1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `order_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
