-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 05:25 AM
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
-- Database: `asaraf_job_for_basak`
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
  `expected_rate` varchar(10) DEFAULT NULL,
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

INSERT INTO `applications` (`application_id`, `application_fullname`, `application_email`, `seeker_id`, `expected_rate`, `job_id`, `cv`, `apply_message`, `apply_note`, `rating`, `apply_date`) VALUES
(2, 'Shamim', 'shamim@gmail.com', 7, NULL, 11, '9240520.pdf', 'This is my first application. Pleas don\'t ignore it at all', NULL, NULL, '2019-10-27'),
(3, 'Shamim', 'shamim@gmail.com', 7, NULL, 13, '3470046.pdf', 'Here is my cv i attached', NULL, NULL, '2019-10-27'),
(4, 'Kamal Uddin', 'kamal@gmail.com', 8, NULL, 13, NULL, 'Hey', NULL, NULL, '2019-10-27'),
(5, 'Kamal Uddin', 'kamal@gmail.com', 8, NULL, 11, '8142008.pdf', 'Here is my cv', '', NULL, '2019-10-27'),
(6, 'subrota', 'subrota@gmail.com', 9, NULL, 14, NULL, 'Hi , I am subrota . I need a job.', NULL, NULL, '2019-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `commentor` varchar(100) DEFAULT NULL,
  `comment_email` varchar(100) DEFAULT NULL,
  `comment` text,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `commentor`, `comment_email`, `comment`, `comment_time`) VALUES
(1, 12, 'Shiplu', 'shiplu@gmail.com', 'Test', '2019-10-28 03:51:31');

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
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `resume_id` int(11) NOT NULL,
  `resume_name` varchar(100) DEFAULT NULL,
  `seeker_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `posted_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resume_education`
--

CREATE TABLE `resume_education` (
  `r_educationid` int(11) NOT NULL,
  `school_name` varchar(100) DEFAULT NULL,
  `seeker_id` int(11) DEFAULT NULL,
  `resume_id` int(11) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `notes` text,
  `start_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `rate` varchar(50) DEFAULT NULL,
  `cv` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` (`seeker_id`, `name`, `tagline`, `username`, `password`, `mobile`, `email`, `about_me`, `address`, `website`, `rate`, `cv`, `image`, `last_update`) VALUES
(6, 'Ariful Islam', 'Professional Content Writer', NULL, '202cb962ac59075b964b07152d234b70', NULL, 'arif@gmail.com', 'Here is the defination boss', 'Elenga, Tangail', NULL, '10', NULL, 'img7668792.png', '2019-10-26 22:57:19'),
(7, 'Shamim', 'PHP Developer', NULL, '202cb962ac59075b964b07152d234b70', NULL, 'shamim@gmail.com', 'Something is better than nothing', 'Dhalapara, Ghatail, Tangail', NULL, '15', NULL, 'img3838134.png', '2019-10-26 23:13:47'),
(8, 'Kamal Uddin', 'Database Administrator', NULL, '202cb962ac59075b964b07152d234b70', NULL, 'kamal@gmail.com', 'This is best i have ever seen in my life', 'Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut la', NULL, '50', NULL, 'img7509496.png', '2019-10-26 23:37:28'),
(9, 'subrota', NULL, NULL, 'fc7fc678608590b123692867f176fe63', NULL, 'subrota@gmail.com', NULL, 'Dhamrai', NULL, NULL, NULL, 'img7790493.png', '2019-10-28 04:16:47');

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

-- --------------------------------------------------------

--
-- Table structure for table `seeker_tag`
--

CREATE TABLE `seeker_tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(40) NOT NULL,
  `seeker_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `thumb` varchar(100) DEFAULT NULL,
  `blog_attachment` varchar(200) NOT NULL,
  `blog_status` varchar(30) NOT NULL DEFAULT 'published',
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_description`, `tbcid`, `blog_slug`, `view`, `thumb`, `blog_attachment`, `blog_status`, `create`, `update`) VALUES
(9, 'First Blog', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 5, 'first-blog', 0, '9-1571142961.jpeg', '', 'published', '2019-10-15 12:49:08', '2019-10-15 12:36:01'),
(10, 'Second Blog', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 5, 'se', 0, '10-1571142977.jpeg', '', 'published', '2019-10-15 12:49:12', '2019-10-15 12:36:17'),
(11, 'Thid blog', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 3, 'third-blog', 0, NULL, '', 'published', '2019-10-15 12:49:18', '2019-10-15 12:36:37'),
(12, 'Fifth Blog', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', 4, 'fifth-blog', 0, '12-1571143115.jpeg', '', 'published', '2019-10-15 12:49:16', '2019-10-15 12:38:35'),
(13, 'Testing blog', '<p>dsfd</p>\r\n', 5, 'something-is-better', 0, '13-1572215698.jpg', '', 'published', '2019-10-27 22:34:58', '2019-10-27 22:34:58');

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
(1, 'Khan Mohammad Ataur Rahman', 'Square Pharmacy Limited', NULL, '202cb962ac59075b964b07152d234b70', 'info@square.edu.bd', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Ejajur Rahman', 'Infomatics Private Ltd.', NULL, '202cb962ac59075b964b07152d234b70', 'info@informatics.com.bd', NULL, 'Dhaka, Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Daffodil', 'Daffodil Company', NULL, 'fc7fc678608590b123692867f176fe63', 'daffodil@gmail.com', NULL, 'Datta-Para', NULL, NULL, NULL, NULL, NULL, NULL);

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
(10, 'Marketing Officer at IT', 'London, Dhaka', 18, '25000', 1, 'Full-Time', 'Marketing, Database, IT', 'ThankContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\n', NULL, '2019-12-12', 'database,management,something', NULL, 'This is a baseline', '', NULL, NULL),
(11, 'Seminar Host for Managments', 'Mohammadpur, Dhakas', 13, '35000', 1, 'Full-Time', 'avbcd, dlj,d', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\n', NULL, '2019-10-30', 'php,python, ruby on rails', NULL, 'something is better than nothing', '', NULL, NULL),
(13, 'Senior Data Anylist', 'Kamlapur, Dhaka', 18, '56000', 2, 'Part-Time', 'Dabase, Analysis, System Engineer', 'Something is better than nothging', NULL, '2019-10-30', '', NULL, 'A great history of time.', '', NULL, NULL),
(14, 'Senior Developer', 'Datta-Para', 15, '50000', 3, 'Full-Time', 'PHP,MYSQL,JSP', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', NULL, '2019-10-20', '', NULL, 'Good Day', '', NULL, NULL);

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
(18, 'Database');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`resume_id`),
  ADD KEY `seeker_id` (`seeker_id`);

--
-- Indexes for table `resume_education`
--
ALTER TABLE `resume_education`
  ADD PRIMARY KEY (`r_educationid`),
  ADD KEY `seeker_id` (`seeker_id`),
  ADD KEY `resume_id` (`resume_id`);

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
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resume_education`
--
ALTER TABLE `resume_education`
  MODIFY `r_educationid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seeker`
--
ALTER TABLE `seeker`
  MODIFY `seeker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seeker_education`
--
ALTER TABLE `seeker_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seeker_tag`
--
ALTER TABLE `seeker_tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_blog_category`
--
ALTER TABLE `tbl_blog_category`
  MODIFY `tbcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `tbl_blog` (`blog_id`);

--
-- Constraints for table `resumes`
--
ALTER TABLE `resumes`
  ADD CONSTRAINT `resumes_ibfk_1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resume_education`
--
ALTER TABLE `resume_education`
  ADD CONSTRAINT `resume_education_ibfk_1` FOREIGN KEY (`seeker_id`) REFERENCES `seeker` (`seeker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resume_education_ibfk_2` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`seeker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
