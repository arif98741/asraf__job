-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 08:52 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asraf_job`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `application_id` int(11) NOT NULL,
  `application_fullname` varchar(100) DEFAULT NULL,
  `application_email` varchar(100) DEFAULT NULL,
  `seeker_id` int(11) DEFAULT NULL,
  `job_id` int(11) NOT NULL,
  `cv` varchar(50) DEFAULT NULL,
  `apply_message` text,
  `apply_note` text,
  `rating` varchar(10) DEFAULT NULL,
  `apply_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`application_id`, `application_fullname`, `application_email`, `seeker_id`, `job_id`, `cv`, `apply_message`, `apply_note`, `rating`, `apply_date`) VALUES
(19, 'Jalal Ahmed Bhuiyan', 'jalal@gmail.com', 2, 8, '9425786.pdf', '', 'thanks', NULL, '2019-10-14'),
(20, 'Ariful Islam', 'arif@gmail.com', 1, 8, '5182799.pdf', 'My Application', NULL, NULL, '2019-10-14'),
(21, 'Kamrul Islam', 'arif@gmail.com', 1, 7, '1353794.pdf', 'MY application and expected salary is 36000', NULL, NULL, '2019-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `description`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(96, 'About Us', '<p>Freshers Is Steadfast To Protect The Privacy Of Our Users And We Are Doing Our Best To Make The Users Comfortable While Using The Portal. This Is To Make Sure That The Information Submitted By The Users Will Be Strictly Private . This Privacy Commitment Only Applies To Data Gathered On The Http://Www.Inetfresherjobs.Com/ Web Site (The \"Web Site\"), And It Will Not Be Applicable To Any Other Information Or Web Site.</p>\r\n\r\n<p>Freshers Is Steadfast To Protect The Privacy Of Our Users And We Are Doing Our Best To Make The Users Comfortable While Using The Portal. This Is To Make Sure That The Information Submitted By The Users Will Be Strictly Private . This Privacy Commitment Only Applies To Data Gathered On The Http://Www.Inetfresherjobs.Com/ Web Site (The \"Web Site\"), And It Will Not Be Applicable To Any Other Information Or Web Site.</p>\r\n\r\n<p>Freshers Is Steadfast To Protect The Privacy Of Our Users And We Are Doing Our Best To Make The Users Comfortable While Using The Portal. This Is To Make Sure That The Information Submitted By The Users Will Be Strictly Private . This Privacy Commitment Only Applies To Data Gathered On The Http://Www.Inetfresherjobs.Com/ Web Site (The \"Web Site\"), And It Will Not Be Applicable To Any Other Information Or Web Site.</p>\r\n\r\n<p>Freshers Is Steadfast To Protect The Privacy Of Our Users And We Are Doing Our Best To Make The Users Comfortable While Using The Portal. This Is To Make Sure That The Information Submitted By The Users Will Be Strictly Private . This Privacy Commitment Only Applies To Data Gathered On The Http://Www.Inetfresherjobs.Com/ Web Site (The \"Web Site\"), And It Will Not Be Applicable To Any Other Information Or Web Site.</p>\r\n\r\n<p>Freshers Is Steadfast To Protect The Privacy Of Our Users And We Are Doing Our Best To Make The Users Comfortable While Using The Portal. This Is To Make Sure That The Information Submitted By The Users Will Be Strictly Private . This Privacy Commitment Only Applies To Data Gathered On The Http://Www.Inetfresherjobs.Com/ Web Site (The \"Web Site\"), And It Will Not Be Applicable To Any Other Information Or Web Site.</p>\r\n', 'about-us', '', '2019-05-20 18:00:00', '2019-10-14 18:00:00'),
(97, 'Terms and Conditions', '<p>Please Read The Entire Terms And Conditions Carefully Before Accepting It. Jobs Portal Has The Right To Alter And Change The Terms And Conditions At Any Time And It Is The Duty Of Visitor To Check The Updates By Frequently Visiting The Web Page Because It Binds You. The Term “You “Refers To All The Users Who Are Registered And Visiting The Website</p>\r\n', 'terms-and-policy', 'pexels-photo-699122.jpeg', '2019-05-20 18:00:00', '2019-05-20 18:00:00'),
(98, 'Privacy Policy', '<p>We Use To Gather Some Information About The Users Such As Frequent Visiting Areas, Jobs That Has Been Preferred Most, And The Various Services That Has Been Accessed By You Etc In A Collective Manner. This Is Purely For The Welfare Of The Users Accessing The Website. By Using Those Information We Will Increase The Website Quality So That More Number Of Users Will Be Benefited. It Is The Right Of Jobs Portal To Access Those Information And We Will Not Provide It To The Third Parties. In Some Cases We Will Ask You To Provide Some Information Such As Users Experience In Accessing The Website Etc This Is An Initiative To Deliver You The Best Site Experience.</p>\r\n\r\n<p>We Use To Gather Some Information About The Users Such As Frequent Visiting Areas, Jobs That Has Been Preferred Most, And The Various Services That Has Been Accessed By You Etc In A Collective Manner. This Is Purely For The Welfare Of The Users Accessing The Website. By Using Those Information We Will Increase The Website Quality So That More Number Of Users Will Be Benefited. It Is The Right Of Jobs Portal To Access Those Information And We Will Not Provide It To The Third Parties. In Some Cases We Will Ask You To Provide Some Information Such As Users Experience In Accessing The Website Etc This Is An Initiative To Deliver You The Best Site Experience.</p>\r\n', 'privacy_policy', 'pexels-photo-844923.jpeg', '2019-05-20 18:00:00', '2019-05-20 18:00:00'),
(99, 'Help and Faq', '<p>We Use To Gather Some Information About The Users Such As Frequent Visiting Areas, Jobs That Has Been Preferred Most, And The Various Services That Has Been Accessed By You Etc In A Collective Manner. This Is Purely For The Welfare Of The Users Accessing The Website. By Using Those Information We Will Increase The Website Quality So That More Number Of Users Will Be Benefited. It Is The Right Of Jobs Portal To Access Those Information And We Will Not Provide It To The Third Parties. In Some Cases We Will Ask You To Provide Some Information Such As Users Experience In Accessing The Website Etc This Is An Initiative To Deliver You The Best Site Experience.</p>\r\n\r\n<p>We Use To Gather Some Information About The Users Such As Frequent Visiting Areas, Jobs That Has Been Preferred Most, And The Various Services That Has Been Accessed By You Etc In A Collective Manner. This Is Purely For The Welfare Of The Users Accessing The Website. By Using Those Information We Will Increase The Website Quality So That More Number Of Users Will Be Benefited. It Is The Right Of Jobs Portal To Access Those Information And We Will Not Provide It To The Third Parties. In Some Cases We Will Ask You To Provide Some Information Such As Users Experience In Accessing The Website Etc This Is An Initiative To Deliver You The Best Site Experience.</p>\r\n', 'help-and-faq', 'pexels-photo-844923.jpeg', '2019-05-20 18:00:00', '2019-05-20 18:00:00'),
(100, 'Contact Us', '<p>We Use To Gather Some Information About The Users Such As Frequent Visiting Areas, Jobs That Has Been Preferred Most, And The Various Services That Has Been Accessed By You Etc In A Collective Manner. This Is Purely For The Welfare Of The Users Accessing The Website. By Using Those Information We Will Increase The Website Quality So That More Number Of Users Will Be Benefited. It Is The Right Of Jobs Portal To Access Those Information And We Will Not Provide It To The Third Parties. In Some Cases We Will Ask You To Provide Some Information Such As Users Experience In Accessing The Website Etc This Is An Initiative To Deliver You The Best Site Experience.</p>\r\n\r\n<p>We Use To Gather Some Information About The Users Such As Frequent Visiting Areas, Jobs That Has Been Preferred Most, And The Various Services That Has Been Accessed By You Etc In A Collective Manner. This Is Purely For The Welfare Of The Users Accessing The Website. By Using Those Information We Will Increase The Website Quality So That More Number Of Users Will Be Benefited. It Is The Right Of Jobs Portal To Access Those Information And We Will Not Provide It To The Third Parties. In Some Cases We Will Ask You To Provide Some Information Such As Users Experience In Accessing The Website Etc This Is An Initiative To Deliver You The Best Site Experience.</p>\r\n', 'contact-us', 'pexels-photo-844923.jpeg', '2019-05-20 18:00:00', '2019-05-20 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seeker`
--

CREATE TABLE `seeker` (
  `seeker_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `about_me` varchar(255) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `website` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cv` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` (`seeker_id`, `name`, `tagline`, `username`, `password`, `mobile`, `email`, `about_me`, `address`, `website`, `cv`, `image`, `last_update`) VALUES
(1, 'Ariful Islam', 'Professional Web Developer', NULL, '202cb962ac59075b964b07152d234b70', NULL, 'arif@gmail.com', 'Captain, why are we out here chasing comets? Maybe we better talk out here; the observation lounge has turned into a swamp. Ensign Babyface!', 'Dhaka', 'www.phpdark.com', NULL, NULL, '2019-10-13 21:46:00'),
(2, 'Jalal Ahmed Bhuiyan', 'Server Administrator', NULL, '202cb962ac59075b964b07152d234b70', NULL, 'jalal@gmail.com', NULL, 'Ghatail, Tangial', 'www.facebook.com', NULL, NULL, '2019-10-13 21:50:39'),
(3, 'Kader Ahmed', 'Data Analysist', NULL, '202cb962ac59075b964b07152d234b70', NULL, 'kader@gmail.com', NULL, 'Kader Aliance, Dhaka, bangladesh', 'wwww.google.com', NULL, NULL, '2019-10-13 21:51:20'),
(4, 'Kamrul Islam', NULL, NULL, '202cb962ac59075b964b07152d234b70', NULL, 'kamrul@gmail.com', NULL, 'Dhaka, Bangladesh', NULL, NULL, 'img7767828.png', '2019-10-14 19:39:17'),
(5, 'Khalilur Rahman Borhan', NULL, NULL, '202cb962ac59075b964b07152d234b70', NULL, 'khalil@gmail.com', NULL, 'Dhaka, Bangladesh', NULL, NULL, 'img6266955.png', '2019-10-14 21:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `seeker_education`
--

CREATE TABLE `seeker_education` (
  `education_id` int(11) NOT NULL,
  `grade` varchar(40) NOT NULL,
  `grade_year` varchar(50) DEFAULT NULL,
  `grade_description` text,
  `seeker_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeker_education`
--

INSERT INTO `seeker_education` (`education_id`, `grade`, `grade_year`, `grade_description`, `seeker_id`) VALUES
(1, 'SSC', '2012-2013', 'Test 2', 1),
(2, 'HSC', '2014-2015', 'ABCD DLJF', 1),
(3, 'BSC', '2016-2019', 'Thanks for coming to news', 1),
(4, 'SSC', '2012-2013', 'Hastag is the main issue', 2),
(5, 'HSC', '2014-2015', 'sdfds', 2),
(6, 'BSC', '2016-2019', 'sdfsdf sdjf', 2),
(7, 'SSC', '2014-2015', 'sdfsdf sdjf', 3),
(8, 'Degree', '2016-2019', 'sdfsdf sdjf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `seeker_tag`
--

CREATE TABLE `seeker_tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(40) NOT NULL,
  `seeker_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeker_tag`
--

INSERT INTO `seeker_tag` (`tag_id`, `tag_name`, `seeker_id`) VALUES
(9, 'PHP', 1),
(10, 'JavaScript', 1),
(11, 'Server Administrator', 2),
(12, 'Laravel', 3),
(13, 'PHP', 1),
(14, 'Slim', 1),
(15, 'Network Advisor', 2),
(16, 'NodeJs', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `blog_description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `tbcid` int(11) NOT NULL,
  `blog_slug` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `thumb` varchar(100) DEFAULT 'default.png',
  `blog_attachment` varchar(200) NOT NULL,
  `blog_status` varchar(30) NOT NULL DEFAULT 'published',
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_description`, `tbcid`, `blog_slug`, `view`, `thumb`, `blog_attachment`, `blog_status`, `create`, `update`) VALUES
(1, 'Something is bigger than that', '<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n\r\n<p>Apparently we had reached a great height in the atmosphere, for the sky was a dead black, and the stars had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level of the spectator on a hillside, the sable cloud beneath was dished out, and the car seemed to float in the middle of an immense dark sphere, whose upper half was strewn with silver. Looking down into the dark gulf below, I could see a ruddy light streaming through a rift in the clouds.</p>\r\n', 7, 'something-is-bigger', 17, '1-1569802541-235X180.jpg', '1-1569802541.png', 'published', '2019-09-30 00:53:50', '2019-09-30 00:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_category`
--

CREATE TABLE `tbl_blog_category` (
  `tbcid` int(11) NOT NULL,
  `category_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog_category`
--

INSERT INTO `tbl_blog_category` (`tbcid`, `category_title`, `created_at`, `updated_at`) VALUES
(3, 'Recent News', NULL, '0000-00-00 00:00:00'),
(4, 'Important', NULL, '0000-00-00 00:00:00'),
(5, 'Ecommerce', '2019-03-12 15:16:05', '2019-03-12 15:16:05'),
(7, 'Cyber Crimes', '2019-03-12 15:16:55', '2019-03-12 15:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `company_id` int(11) NOT NULL,
  `full_name` varchar(200) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `founded_on` varchar(100) DEFAULT NULL,
  `total_employee` varchar(100) DEFAULT NULL,
  `company_contact` varchar(199) DEFAULT NULL,
  `company_email` varchar(199) DEFAULT NULL,
  `company_website` varchar(199) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `full_name`, `company_name`, `username`, `password`, `email`, `address`, `location`, `founded_on`, `total_employee`, `company_contact`, `company_email`, `company_website`, `logo`) VALUES
(102, 'Ariful Islam', 'Test Company', NULL, '202cb962ac59075b964b07152d234b70', 'test@gmail.com', NULL, 'Dhaka', NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'Azizul Haque', 'Delta Life Insourance', NULL, '202cb962ac59075b964b07152d234b70', 'delta@gmail.com', NULL, 'Dhanmondi', NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'Kamrul Islam', 'Kamrul Trading Co. Limited', NULL, '202cb962ac59075b964b07152d234b70', 'kamrul@gmail.com', NULL, 'Bangra, Kalihati, Tangail', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `location` varchar(100) NOT NULL,
  `jobcat_id` int(11) DEFAULT NULL,
  `salary` varchar(80) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `job_type` varchar(100) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `job_description` text,
  `application_urlmail` varchar(100) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `skill` varchar(100) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `education` varchar(100) NOT NULL,
  `featured_job` int(5) DEFAULT NULL,
  `posted_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`job_id`, `job_title`, `location`, `jobcat_id`, `salary`, `company_id`, `job_type`, `tags`, `job_description`, `application_urlmail`, `deadline`, `skill`, `designation`, `tagline`, `education`, `featured_job`, `posted_date`) VALUES
(5, 'Appliance Officer for Multi National Company', 'Chandra Dhaka', 13, '25600', 102, 'Part-Time', 'Database, Server Administration', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', NULL, '2019-12-14', '', NULL, 'Database is the bsest option', '', NULL, '2019-10-02'),
(7, 'Senior Lab Assistant Needed', 'Asulia, Savar, Dhaka', 13, '36500', 102, 'Full-Time', 'Bank, Education, Accounting', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', NULL, '2019-10-25', '', NULL, 'Dhaka is the biggest city', '', NULL, '2019-11-02'),
(8, 'Appliance Officer for Multi National Company', 'Chandra Dhaka', 13, '25600', 102, 'Part-Time', 'Database, Server Administration', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', NULL, '2019-12-14', '', NULL, 'Database is the bsest option', '', NULL, '2019-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_category`
--

CREATE TABLE `tbl_job_category` (
  `jobcat_id` int(11) NOT NULL,
  `jobcat_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job_category`
--

INSERT INTO `tbl_job_category` (`jobcat_id`, `jobcat_name`) VALUES
(9, 'Marketing'),
(10, 'Marchandizing'),
(11, 'Journalism'),
(12, 'Low Enforcement'),
(13, 'Banking'),
(14, 'Service'),
(15, 'Marketing'),
(16, 'Marchandizing'),
(17, 'Fine Arts'),
(18, 'Database'),
(19, 'Anylisis'),
(20, 'Media Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `username`, `password`, `mobile`, `email`, `website`, `image`, `last_update`) VALUES
(1, 'Arif', 'admin', '21232f297a57a5a743894a0e4a801fc3', '4567987570999', 'admin@gmail.com', 'www.admin.com', 'adim.jpg', '2019-04-04 12:35:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `seeker_id` (`seeker_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeker`
--
ALTER TABLE `seeker`
  ADD PRIMARY KEY (`seeker_id`);

--
-- Indexes for table `seeker_education`
--
ALTER TABLE `seeker_education`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `seeker_id` (`seeker_id`);

--
-- Indexes for table `seeker_tag`
--
ALTER TABLE `seeker_tag`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `seeker_id` (`seeker_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `tbcid` (`tbcid`);

--
-- Indexes for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  ADD PRIMARY KEY (`tbcid`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `jobcat_id` (`jobcat_id`);

--
-- Indexes for table `tbl_job_category`
--
ALTER TABLE `tbl_job_category`
  ADD PRIMARY KEY (`jobcat_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `seeker`
--
ALTER TABLE `seeker`
  MODIFY `seeker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seeker_education`
--
ALTER TABLE `seeker_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seeker_tag`
--
ALTER TABLE `seeker_tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  MODIFY `tbcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_job_category`
--
ALTER TABLE `tbl_job_category`
  MODIFY `jobcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `tbl_job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seeker_education`
--
ALTER TABLE `seeker_education`
  ADD CONSTRAINT `seeker_education_ibfk_1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seeker_tag`
--
ALTER TABLE `seeker_tag`
  ADD CONSTRAINT `seeker_tag_ibfk_1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD CONSTRAINT `tbl_blog_ibfk_1` FOREIGN KEY (`tbcid`) REFERENCES `tbl_blog_category` (`tbcid`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD CONSTRAINT `tbl_job_ibfk_1` FOREIGN KEY (`jobcat_id`) REFERENCES `tbl_job_category` (`jobcat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
