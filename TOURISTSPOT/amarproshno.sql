-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 10:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amarproshno`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answeradmin`
--

CREATE TABLE `answeradmin` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `answer` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `user_id`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 13, 1, 'hi', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, 6, 1, 'j', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, 6, 1, 'hj', '0000-00-00', '0000-00-00', '0000-00-00'),
(11, 8, 1, '<p>vhgh,hu</p>', '0000-00-00', '0000-00-00', '0000-00-00'),
(12, 8, 1, '<p>hi</p>\r\n<p>&nbsp;</p>', '0000-00-00', '0000-00-00', '0000-00-00'),
(13, 8, 1, '<p>xfb</p>', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `farecost`
--

CREATE TABLE `farecost` (
  `id` int(11) NOT NULL,
  `cfrom` varchar(255) NOT NULL,
  `cto` varchar(255) NOT NULL,
  `ACcost` varchar(255) NOT NULL,
  `NonAccost` varchar(255) NOT NULL,
  `air` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farecost`
--

INSERT INTO `farecost` (`id`, `cfrom`, `cto`, `ACcost`, `NonAccost`, `air`) VALUES
(9, '1', '2', '2000', '810', '5200'),
(10, '1', '2', '2000', '810', '5200'),
(11, '1', '2', '2000', '810', '5200'),
(12, '1', '2', '2000', '810', '5200'),
(13, '1', '2', '2000', '810', '5200'),
(14, '1', '2', '2000', '810', '5200');

-- --------------------------------------------------------

--
-- Table structure for table `farename`
--

CREATE TABLE `farename` (
  `id` int(11) NOT NULL,
  `disname` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farename`
--

INSERT INTO `farename` (`id`, `disname`, `Title`, `details`) VALUES
(16, 'Dhaka', 'Ahsan Manzil', 'Ahsan Manzil is a beautiful pink palace with a rich history. It dates from 1872 when it was built by Nawab Abdul Ghani, Dhakaâ€™s wealthiest land owner at the time. Nearly two decades later, the palace was destroyed by a tornado. It was reconstructed by Lord Curzon but almost went to oblivion after his demise. In the late 1980s, Ahsan Manzil was thoroughly restored to glory. Today, various family portraits and the skull of Nawabâ€™s favourite elephant are on display.'),
(17, 'Sylhet', 'Jaflong', 'Jaflong is a hill station and popular tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District and situated at the border between Bangladesh and the Indian state of Meghalaya, overshadowed by subtropical mountains and rainforests.'),
(20, 'khulna', 'sundarban', 'The Sundarbans is a vast forest in the coastal region of the Bay of Bengal. Located in the delta region of Padma, Meghna and Brahmaputra river basins, this unique forest extends across Khulna, Satkhira, Bagerhat districts of Bangladesh and South 24 Parganas, North 24 Parganas districts of West Bengal,');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `title`, `image_text`) VALUES
(47, 'nilgiri-bandarban.jpg', 'Nilgiri bandarban', 'History\r\nThe high steppes of the Nilgiri Hills have been inhabited since prehistoric times, demonstrated by a large number of artifacts unearthed by excavators. A particularly important collection from the region can be seen in the British Museum, including those assembled by colonial officers James Wilkinson Breeks, Major M. J. Walhouse and Sir Walter Elliot.[7]\r\nThe first recorded use of the word Nila applied to this region can be traced back to 1117 AD. In the report of a general of Vishnuvardhana, King of Hoysalas, who in reference to his enemies, claimed to have \"frightened the Todas, driven the Kongas underground, slaughtered the Poluvas, put to death the Maleyalas, terrified Chieftain Kala Nirpala and then proceeded to offer the peak of Nila Mountain (presumably Doddabetta or Rangaswami peak of Peranganad in East Nilgiris) to Lakshmi, Goddess of Wealth\r\n'),
(48, 'coxs-bazar-web.gif', 'Cox\'s Bazar', 'Coxâ€™s Bazar city is not so big. It has only 6.85 kmÂ² of area. But its weather condition is always good for healthy life. Bangladesh is situated in the monsoon area. So in the Coxâ€™s Bazar there is very seasonal change. In this region most of the time there stay high temperature, heavy rainfall excessive humidity because of the Bay of Bengal. The weather is controlled by the beautiful sea Bay of Bengal. The Bay of Bengal in Coxâ€™s Bazar is a small port and health resort.\r\n\r\nNear the Coxâ€™s Bazar city there are several places to visit which places are really attractive for the tourists. Himchari, Laboni Beach, Sonadia Island, Maheshkhali, Teknaf, ST Martin Island etc places are really exciting and enjoyable spot for the viewers.\r\n'),
(49, 'lalakhal(1).jpg', 'Rangamati', 'Rangamati was a contesting ground for the kings of Tripura and Arakan. This region came under the Mughal Empire after the Muslim invasion in 1566.[3] In 1737 Sher Mosta Khan, a tribal leader, took refuge with the Mughals. After this the Chakma settlement began along with various other settlements of varying ethnicity.[3] From 1760 to 1761, this land was leased to the East India Company.'),
(50, 'download.jpg', 'St. Martin\'s Island', 'If you are done partying in Coxâ€™s Bazar, St. Martinâ€™s Island is the right place to calm down your soul. This coral island is about 10km (6mi) south-west of the southern tip of the mainland is a tropical clichÃ©, with beaches fringed with coconut palms and bountiful marine life. This island has the most amazing blue water. Far from the maddening crowd, the serenity in this island will help your meditate and purify your soul. This air is so fresh and soothing. And the water is clearer than crystal. During any moonlight in St. Island you may end up deciding to stay in this island forever. And sea-foods here are not only delicious, but also abundant in variation.\r\nThis amazing island is so small that it is possible to walk around the entire island. Each day a ferry leaves Teknaf for St. Martinâ€™s Island which takes only 3 hours. You can hop in a Bus from Coxâ€™s Bazar which will easily take you to St. Martinâ€™s Island. And if you want to go directly from Dhaka, hop in a Dhaka-Teknaf Bus.\r\n'),
(51, 'Jaflong-sylhet-Tourist-places-in-Sylhet.jpg', 'Jaflong sylhet', 'In early 2005, Laskar Muqsudur Rahman, Deputy Conservator of Forests, Sylhet Forest Division, observed that Jaflong that he heard in his boyhood as the \'lungs\' of Greater Sylhet was at stake due to on going encroachments and establishment of unauthorized stone crushing mills. He took initiatives to recover the land and establish a recreation-cum-botanical park named as \'Jaflong Green Park\'. The first foundation stone for the thematic Green Park at Jaflong was laid by Laskar Muqsudur Rahman, Deputy Conservator of Forests in 2005 with the cooperation of local forest staffs led by Forest Ranger Mohammad Ali. Nonetheless, at the inception it was a challenging task due to local conflicts and procedural constraints. The forestation program in Jaflong Green Park has been started under supervision of the joint forces, Jaflong Foundation and Forest Department. They have jointly taken up the forestation program with about 100 hectares of grabbed land. Under the forestation program, various types of trees, including hybrid Akash-moni, are being planted in the park to maintain ecological balance.');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `name`
--

INSERT INTO `name` (`id`, `name`) VALUES
(1, 'Dhaka'),
(2, 'Cox\'s_Bazar'),
(3, 'Rangamati'),
(4, 'Sylhet'),
(5, 'sirajganj'),
(6, 'rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `hobby` varchar(150) NOT NULL,
  `interesting` varchar(150) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `views` int(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `title`, `description`, `views`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 1, 'hellow', '<p>hi</p>', 0, '2018-08-05', '0000-00-00', '0000-00-00'),
(7, 1, 'jinis', '<p>xcb</p>', 0, '2018-09-03', '0000-00-00', '0000-00-00'),
(8, 1, 'dsg', '<p>AGRSG</p>', 0, '2018-09-03', '0000-00-00', '0000-00-00'),
(9, 1, 'fdb', '<p>dbf</p>', 0, '2018-10-28', '0000-00-00', '0000-00-00'),
(10, 1, 'hi', '<p>dgd</p>', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(11, 1, 'me', '<p>xzbf</p>', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(12, 1, 'agr', '<p>athryh</p>', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(13, 1, 'radid', '<p>radid</p>', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(14, 1, 'sham saha', '', 0, '2018-10-29', '0000-00-00', '0000-00-00'),
(15, 1, 'jasim', '', 0, '2018-10-29', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_admin`, `username`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 0, 'radid', 'mehedihassan3112@gmail.com', '1234', '0000-00-00', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answeradmin`
--
ALTER TABLE `answeradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farecost`
--
ALTER TABLE `farecost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farename`
--
ALTER TABLE `farename`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `answeradmin`
--
ALTER TABLE `answeradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `farecost`
--
ALTER TABLE `farecost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `farename`
--
ALTER TABLE `farename`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
