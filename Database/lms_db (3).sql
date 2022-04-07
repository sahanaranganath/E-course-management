-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 04:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Admin ', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `email`, `contact`, `description`) VALUES
(2, 'itachi', 'itachi@example.com', '8765443563', 'Fee'),
(3, 'Levi Ackerman', 'levi@example.com', '987654321', 'Enquiry on free courses'),
(4, 'Levi Ackerman', 'levi@example.com', '8765456324', 'Bring me the founding titan'),
(5, 'abc', 'abc@gmail.com', '9876543523', 'Fee'),
(6, 'fsgsfg', 'fsdvbs', '873584163', 'dsgryh'),
(7, 'SAHANA R', 'sahana.ranganath@gmail.com', '7259416364', 'asdasgarsh');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` text COLLATE utf8_bin NOT NULL,
  `course_desc` text COLLATE utf8_bin NOT NULL,
  `course_author` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_img` text COLLATE utf8_bin NOT NULL,
  `course_duration` text COLLATE utf8_bin NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_original_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_author`, `course_img`, `course_duration`, `course_price`, `course_original_price`) VALUES
(8, 'Learn Architecture', 'Architecture is both the process and the product of planning, designing, and constructing buildings or other structures. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art.', 'Zeke', '../image/courseimg/Architectre.jpg', '3 Hours', 1800, 2800),
(9, ' PHP ', 'This course will help you get all the Object Oriented PHP, MYSQLi and ending the course by building a CMS system.', 'Rengoku', '../image/courseimg/123.jpg', '3 Months', 700, 1700),
(10, ' Python for begginers', 'This is the most comprehensive, yet straight-forward, course for the Python programming language.', 'Eren Jaeger ', '../image/courseimg/Python.jpg', '4 Months', 800, 1800),
(11, 'Artificial Intelligence', 'Learn and Master how AI works and how it is changing our lives in this Course.\r\nlives in this Course.', 'Levi Ackermann', '../image/courseimg/ai123.jpg', '6 Months', 900, 1900),
(12, 'Flutter', 'The skills you will learn from this course is applicable to the real world, so you can go ahead and build similar app.', 'Brad Pitt', '../image/courseimg/flutter.png', '2 Months', 100, 1000),
(13, 'Angular JS', 'Angular is one of the most popular frameworks for building client apps with HTML, CSS and TypeScript.', 'Tom Holland', '../image/courseimg/angular123.jpg', '4 Month', 800, 1600),
(16, 'Python Complete', 'This is complete Python COurse', 'Mikasa Ackermann', '../image/courseimg/Python.jpg', '4 hours', 500, 4000),
(17, 'Learn React Native', 'This is react native for android and iso app development.', 'Grisha Jaeger', '../image/courseimg/reactimage.png', '2 months', 200, 3000),
(18, 'Big Data', 'screenshots', 'Shikamaru Nara', '../image/courseimg/vue.jpg', '2 weeks', 60, 100),
(19, 'Business Technology Management ', 'Organizations of all types and sizes rely on information and communication technologies to remain competitive. BTM graduates will learn how to analyze business needs, design appropriate technology-based processes and solutions, and communicate these effectively.', 'Harry', '../image/courseimg/program-business-technology-management.jpg', '2 weeks', 824, 1000),
(20, 'Introduction to Law', 'Law is a system of rules created and enforced through social or governmental institutions to regulate behavior, with its precise definition a matter of longstanding debate. It has been variously described as a science and the art of justice. ', 'Naruto', '../image/courseimg/law.jpg', '2 weeks', 980, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `courseorder`
--

CREATE TABLE `courseorder` (
  `co_id` int(11) NOT NULL,
  `order_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL,
  `respmsg` text COLLATE utf8_bin NOT NULL,
  `amount` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `courseorder`
--

INSERT INTO `courseorder` (`co_id`, `order_id`, `stu_email`, `course_id`, `status`, `respmsg`, `amount`, `order_date`) VALUES
(3, 'ORDS98956453', 'ant@example.com', 10, 'TXN_SUCCESS', 'Txn Success', 800, '2019-09-12'),
(7, 'ORDS57717951', 'jay@ischool.com', 14, 'TXN_SUCCESS', 'Txn Success', 400, '2019-09-13'),
(8, 'ORDS22968322', 'mario@ischool.com', 10, 'TXN_SUCCESS', 'Txn Success', 800, '2019-09-13'),
(10, 'ORDS59885531', 'sonam@gmail.com', 10, 'TXN_SUCCESS', 'Txn Success', 800, '2020-07-04'),
(11, 'ORDS41910371', 'cap@example.com', 12, 'Success', 'Done', 100, '2003-01-22'),
(13, 'ORDS12999943', 'itachi@example.com', 18, 'Success', 'Done', 60, '2003-01-22'),
(14, 'ORDS22037945', 'itachi@example.com', 9, 'Success', 'Done', 700, '2004-01-22'),
(15, 'ORDS17334512', 'itachi@example.com', 10, 'Success', 'Done', 800, '2022-01-04'),
(16, 'ORDS62809697', 'itachi@example.com', 11, 'Success', 'Done', 900, '2022-01-08'),
(17, 'ORDS31163920', 'levi@example.com', 19, 'Success', 'Done', 60, '2022-01-09'),
(18, 'ORDS40135172', 'itachi@example.com', 17, 'Success', 'Done', 200, '2022-01-09'),
(19, 'ORDS62958672', 'itachi@example.com', 8, 'Success', 'Done', 1800, '2022-01-10'),
(20, 'ORDS83389202', 'tanjiro@example.com', 20, 'Success', 'Done', 980, '2022-01-10'),
(21, 'ORDS9584560', 'tanjiro@example.com', 19, 'Success', 'Done', 824, '2022-01-10'),
(22, 'ORDS24406991', 'tanjiro@example.com', 9, 'Success', 'Done', 700, '2022-01-10'),
(23, 'ORDS77031217', 'tanjiro@example.com', 9, 'Success', 'Done', 700, '2022-01-12'),
(24, 'ORDS76548066', 'alice@example.com', 8, 'Success', 'Done', 1800, '2022-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_content` text COLLATE utf8_bin NOT NULL,
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_content`, `stu_id`) VALUES
(3, 'This course was short but very informative and very helpful for an aspiring leader like myself. It also helped me understand how to view or understand when I receive feedback. I highly recommend it!!', 171),
(8, 'I enjoyed the course and learned a lot from it. The content is well organised and focused on practical situations. I particularly enjoyed the bits of psychological research shared in the content.', 172),
(9, 'nice explanation of the videos. visually attractive and descriptive. questions were great as well. learnt a lot of stuff.', 173),
(10, 'Excellent course. I started it being a bit skeptical, just with the intention to go quickly through some video scripts. but I changed my mind. There is so much to learn here', 174),
(12, 'I enjoyed the course and learned a lot from it. The content is well organised and focused on practical situations. I particularly enjoyed the bits of psychological research shared in the content. ', 180),
(13, '3 a.m. and I\'m still awake, I\'ll bet you\'re just fine\r\nFast asleep in your city that\'s better than mine\r\nAnd the girl in your bed has a fine pedigree\r\nAnd I\'ll bet your friends tell you she\'s better than me', 182),
(15, 'AoT is awesomeeeeeeeeeee', 183),
(16, 'Yooooooo', 183),
(17, 'Very Informative. Enjoyed learning', 185);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` text COLLATE utf8_bin NOT NULL,
  `lesson_desc` text COLLATE utf8_bin NOT NULL,
  `lesson_link` text COLLATE utf8_bin NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_name`, `lesson_desc`, `lesson_link`, `course_id`, `course_name`) VALUES
(32, 'Introduction to Python ', 'Introduction to Python Desc', '../lessonvid/video2.mp4', 10, 'Learn Python A-Z'),
(33, 'How Python Works', 'How Python Works Descc', '../lessonvid/video3.mp4', 10, 'Learn Python A-Z'),
(34, 'Why Python is powerful', 'Why Python is powerful Desc', '../lessonvid/video9.mp4', 10, 'Learn Python A-Z'),
(36, 'Introduction to PHP', 'Introduction to PHP Desc', '../lessonvid/video4.mp4', 9, 'Complete PHP Bootcamp'),
(37, 'How PHP works', 'How PHP works Desc', '../lessonvid/video5.mp4', 9, 'Complete PHP Bootcamp'),
(38, 'is PHP really easy ?', 'is PHP really easy ? desc', '../lessonvid/video6.mp4', 9, 'Complete PHP Bootcamp'),
(39, 'Introduction to Architecture', 'Start your Careeer with architecture', '../lessonvid/Architecture.mp4', 8, 'Learn Guitar The Easy Way'),
(40, 'Build your Career', 'More about Architecture', '../lessonvid/Architecture1.mp4', 8, 'Learn Guitar The Easy Way'),
(41, 'Intro Hands-on Artificial Intelligence', 'Intro Hands-on Artificial Intelligence desc', '../lessonvid/video10.mp4', 11, 'Hands-on Artificial Intelligence'),
(42, 'How it works', 'How it works descccccc', '../lessonvid/video11.mp4', 11, 'Hands-on Artificial Intelligence'),
(43, 'Inro Learn Vue JS', 'Inro Learn Vue JS desc', '../lessonvid/video12.mp4', 12, 'Learn Vue JS'),
(44, 'intro Angular JS', 'intro Angular JS desc', '../lessonvid/video13.mp4', 13, 'Angular JS'),
(48, 'Intro to Python Complete', 'This is lesson number 1', '../lessonvid/video11.mp4', 16, 'Python Complete'),
(49, 'Introduction to React Native', 'This intro video of React native', '../lessonvid/video11.mp4', 17, 'Learn React Native'),
(50, 'part 1', 'part 1', '../lessonvid/videoplayback.mp4', 18, 'Learn Screenshot'),
(51, 'sfa', 'dsfgsgf', '../lessonvid/videoplayback.mp4', 18, 'Learn Screenshot'),
(52, 'part 1', 'What is BTM? and why is it ncessary', '../lessonvid/Bussiness.mp4', 19, 'ABCDEF'),
(53, 'More about BTM', 'Business Technology Management is an emerging trans-disciplinary research area and professional discipline in business administration', '../lessonvid/Bussiness1.mp4', 19, 'Business Technology Management '),
(54, 'Introduction to Law', 'Why law is necessary', '../lessonvid/Law1.mp4', 20, 'Introduction to Law'),
(55, 'Types of Law', 'Criminal vs civil', '../lessonvid/Law2.mp4', 20, 'Introduction to Law'),
(56, 'part 3', 'dsfabf', '../lessonvid/iot1.mp4', 18, 'Big Data');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_pass` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_occ` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_img` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(171, ' Alice', 'alice@example.com', '123456', ' Student', '../image/stu/alice.jpg'),
(172, ' Shoyo Hinata', 'shoyo@example.com', '123456', ' Vollyball Player', '../image/stu/hinatashoyo.jpg'),
(173, ' kenma', 'kenma@example.com', '123456', '  Web Developer', '../image/stu/kenma.jpg'),
(174, ' Peter Parker', 'peter@example.com', '123456', ' Web Designer', '../image/stu/peter.jpg'),
(176, ' Tony', 'tony@example.com', '123456', ' Software ENgg', '../image/stu/tony.jpg'),
(178, ' Jake Peralta', 'jake@example.com', '123456', '  Web Dev', '../image/stu/jake.jpg'),
(182, '  Ted Mosby', 'ted@example.com', '123456', '  Web Dev', '../image/stu/ted.jpg'),
(183, 'Itachi', 'itachi@example.com', '123456', '    Student', '../image/stu/Itachi.png'),
(184, ' levi ackerman', 'levi@example.com', '123456', ' Survey Cops', '../image/stu/levi.jpg'),
(185, ' Tanjiro', 'tanjiro@example.com', '123456', ' Demon Slayer', '../image/stu/tanjiro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courseorder`
--
ALTER TABLE `courseorder`
  ADD PRIMARY KEY (`co_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `courseorder`
--
ALTER TABLE `courseorder`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
