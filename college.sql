-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 05:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_notice`
--

CREATE TABLE `all_notice` (
  `title` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_notice`
--

INSERT INTO `all_notice` (`title`, `time`, `body`) VALUES
('প্রতিষ্ঠান প্রধানদের প্রতি এনটিআরসিএ ’র জরুরী সতর্কতা বিজ্ঞপ্তি', '2020-10-25 14:10:35', 'কর্তৃপক্ষের নিকট বিশ্বস্থসূত্রে অবহিত করা হয়েছে যে,\r\nসুত্ৰেবর্ণিত ছকভিত্তিক তথ্য প্রেরণের ক্ষেত্রে অনেক শিক্ষা প্রতিষ্ঠান প্রধান নিয়ােগের ক্ষেত্রে এনটিআরসিএ কর্তৃক প্রদত্ত নিবন্ধন সনদ ব্যতীত বা জাল সনদের মাধ্যমে নিয়ােগপ্রাপ্ত শিক্ষকদের তথ্য প্রেরণ থেকে বিরত থেকে অসম্পূর্ণ শিক্ষক নিয়ােগের তথ্য প্রেরণ করছেন যা কোনভাবেই কাম্য নয়।\r\n\r\n\r\n \r\nপ্রসঙ্গত উল্লেখ্য যে, তাদের প্রেরিত ছকভিত্তিক তথ্য তাদের সংশ্লিষ্ট মহাপরিচালক দপ্তরে সংরক্ষিত তথ্যের সঙ্গে যাচাই করে দেখা হবে।\r\n\r\nযাচাইকালে যদি কোন শিক্ষা প্রতিষ্ঠানের শিক্ষক নিয়ােগের প্রেরিত ছকের সঙ্গে তাদের সংশ্লিষ্ট উপজেলা শিক্ষা অফিস, জেলা শিক্ষা অফিস বা সংশ্লিষ্ট মহাপরিচালকের দপ্তরে সংরক্ষিত তথ্যের সঙ্গে অসামঞ্জস্য পরিলক্ষিত হয়'),
('শিক্ষা প্রতিষ্ঠানের গুরুত্বপূর্ণ পাসওয়ার্ড রেজিষ্টার; বিনামূল্যে ডাউনলোড', '2020-10-25 14:12:47', 'কর্তৃপক্ষের নিকট বিশ্বস্থসূত্রে অবহিত করা হয়েছে যে,\r\nসুত্ৰেবর্ণিত ছকভিত্তিক তথ্য প্রেরণের ক্ষেত্রে অনেক শিক্ষা প্রতিষ্ঠান প্রধান নিয়ােগের ক্ষেত্রে এনটিআরসিএ কর্তৃক প্রদত্ত নিবন্ধন সনদ ব্যতীত বা জাল সনদের মাধ্যমে নিয়ােগপ্রাপ্ত শিক্ষকদের তথ্য প্রেরণ থেকে বিরত থেকে অসম্পূর্ণ শিক্ষক নিয়ােগের তথ্য প্রেরণ করছেন যা কোনভাবেই কাম্য নয়।\r\n\r\n\r\n \r\nপ্রসঙ্গত উল্লেখ্য যে, তাদের প্রেরিত ছকভিত্তিক তথ্য তাদের সংশ্লিষ্ট মহাপরিচালক দপ্তরে সংরক্ষিত তথ্যের সঙ্গে যাচাই করে দেখা হবে।\r\n\r\nযাচাইকালে যদি কোন শিক্ষা প্রতিষ্ঠানের শিক্ষক নিয়ােগের প্রেরিত ছকের সঙ্গে তাদের সংশ্লিষ্ট উপজেলা শিক্ষা অফিস, জেলা শিক্ষা অফিস বা সংশ্লিষ্ট মহাপরিচালকের দপ্তরে সংরক্ষিত তথ্যের সঙ্গে অসামঞ্জস্য পরিলক্ষিত হয়'),
('গুরুত্বপূর্ণ পাসওয়ার্ড রেজিষ্টার; বিনামূল্যে ডাউনলোড', '2020-10-25 14:14:06', 'বিশেষ করে শিক্ষা প্রতিষ্ঠানসমূহের সকল কার্যক্রম এখন অনলাইনে বিভিন্ন পোর্টালে করা হয়।\r\n\r\n\r\n \r\nএতে করে শিক্ষা প্রতিষ্ঠান প্রধান শিক্ষকদের কাজ যেমন সহজ হয়েছে তেমনি কাজের গতিও বৃদ্ধি পেয়েছে।\r\n\r\nএখন কোন কাজেই প্রতিষ্ঠান প্রধানগণ কে কোন অফিসে খুব বেশি দৌড়াদৌড়ি করতে হয় না। সকালবেলা কম্পিউটারে ইমেইল খুললেই পাওয়া যায় গুরুত্বপূর্ণ নয় গুরুত্বপূর্ণ তথ্য বা ঊর্ধ্বতন কর্মকর্তাদের প্রেরিত যে কোন মেসেজ বা বার্তা।\r\n\r\n\r\n \r\nএইসকল সুবিধার মাঝে হালকা একটু অসুবিধা থেকেই যায়।\r\n\r\nএতগুলো অনলাইন কার্যক্রম সম্পন্ন করতে গিয়ে প্রতিষ্ঠান প্রধানগণ ইউজার আইডি ও পাসওয়ার্ড সংরক্ষণ সম্পরকিত সমস্যায় পড়ে থাকেন।\r\n\r\n'),
('এখন কোন কাজেই প্রতিষ্ঠান প্রধানগণ ', '2020-10-25 14:21:19', 'রুত্বপূর্ণ পাসওয়ার্ড রেজিষ্টার; বিনামূল্যে ডাউনলোড\r\nTime: 2020-10-25 20:14:06\r\nবিশেষ করে শিক্ষা প্রতিষ্ঠানসমূহের সকল কার্যক্রম এখন অনলাইনে বিভিন্ন পোর্টালে করা হয়। এতে করে শিক্ষা প্রতিষ্ঠান প্রধান শিক্ষকদের কাজ যেমন সহজ হয়েছে তেমনি কাজের গতিও বৃদ্ধি পেয়েছে। এখন কোন কাজেই প্রতিষ্ঠান প্রধানগণ কে কোন অফিসে খুব বেশি দৌড়াদৌড়ি করতে হয় না। সকালবেলা কম্পিউটারে ইমেইল খুললেই পাওয়া যায় গুরুত্বপূর্ণ নয় গুরুত্বপূর্ণ তথ্য বা ঊর্ধ্বতন কর্মকর্তাদের প্রেরিত যে কোন মেসেজ বা বার্তা। এইসকল সুবিধার মাঝে হালকা একটু অসুবিধা থেকেই যায়। এতগুলো অনলাইন কার্যক্রম সম্পন্ন করতে গিয়ে প্রতিষ্ঠান প্রধানগণ ইউজার আইডি ও পাসওয়ার্ড সংরক্ষণ সম্পরকিত সমস্যায় পড়ে থাকেন।\r\nশিক্ষা প্রতিষ্ঠানের গুরুত্বপূর্ণ পাসওয়ার্ড রেজিষ্টার; বিনামূল্যে ডাউনলোড\r\nকর্তৃপক্ষের নিকট বিশ্বস্থসূত্রে অবহিত করা হয়েছে যে, সুত্ৰেবর্ণিত ছকভিত্তিক তথ্য প্রেরণের ক্ষেত্রে অনেক শিক্ষা প্রতিষ্ঠান প্রধান নিয়ােগের ক্ষেত্রে এনটিআরসিএ কর্তৃক প্রদত্ত নিবন্ধন সনদ ব্যতীত বা জাল স'),
(' তথ্য প্রেরণ থেকে বিরত থেকে অসম্পূর্ণ শিক্ষক', '2020-10-25 14:22:10', 'ক্ষা প্রতিষ্ঠানসমূহের সকল কার্যক্রম এখন অনলাইনে বিভিন্ন পোর্টালে করা হয়। এতে করে শিক্ষা প্রতিষ্ঠান প্রধান শিক্ষকদের কাজ যেমন সহজ হয়েছে তেমনি কাজের গতিও বৃদ্ধি পেয়েছে। এখন কোন কাজেই প্রতিষ্ঠান প্রধানগণ কে কোন অফিসে খুব বেশি দৌড়াদৌড়ি করতে হয় না। সকালবেলা কম্পিউটারে ইমেইল খুললেই পাওয়া যায় গুরুত্বপূর্ণ নয় গুরুত্বপূর্ণ তথ্য বা ঊর্ধ্বতন কর্মকর্তাদের প্রেরিত যে কোন মেসেজ বা বার্তা। এইসকল সুবিধার মাঝে হালকা একটু অসুবিধা থেকেই যায়। এতগুলো অনলাইন কার্যক্রম সম্পন্ন করতে গিয়ে প্রতিষ্ঠান প্রধানগণ ইউজার আইডি ও পাসওয়ার্ড সংরক্ষণ সম্পরকিত সমস্যায় পড়ে থাকেন।\r\nশিক্ষা প্রতিষ্ঠানের গুরুত্বপূর্ণ পাসওয়ার্ড রেজিষ্টার; বিনামূল্যে ডাউনলোড\r\nTime: 2020-10-25 20:12:47\r\nকর্তৃপক্ষের নিকট বিশ্বস্থসূত্রে অবহিত করা হয়েছে যে, সুত্ৰেবর্ণিত ছকভিত্তিক তথ্য প্রেরণের ক্ষেত্রে অনেক শিক্ষা প্রতিষ্ঠান প্রধান নিয়ােগের ক্ষেত্রে এনটিআরসিএ কর্তৃক প্রদত্ত নিবন্ধন সনদ ব্যতীত বা জাল সনদের মাধ্যমে নিয়ােগপ্রাপ্ত শিক্ষকদের তথ্য প্রেরণ থেকে বিরত থেকে অসম্পূর্ণ শিক্ষক নিয়ােগের তথ্য প্রেরণ করছেন যা কোনভাবেই কাম্য নয়। প্রসঙ্গত উল্লেখ্য যে, তাদের প্রেরিত');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `Serial` int(11) NOT NULL,
  `S&C` varchar(110) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`Serial`, `S&C`) VALUES
(14, 'IT'),
(5, 'Language'),
(3, 'Science'),
(12, 'Drama'),
(7, 'Debate'),
(13, 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `club info`
--

CREATE TABLE `club info` (
  `Roll` int(100) NOT NULL,
  `Full Name` varchar(160) NOT NULL,
  `Phone` varchar(160) NOT NULL,
  `Email` varchar(160) NOT NULL,
  `Password` varchar(160) NOT NULL,
  `Club` varchar(160) NOT NULL,
  `Batch` varchar(160) NOT NULL,
  `Gender` varchar(160) NOT NULL,
  `Joining Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club info`
--

INSERT INTO `club info` (`Roll`, `Full Name`, `Phone`, `Email`, `Password`, `Club`, `Batch`, `Gender`, `Joining Date`) VALUES
(1, 'Md Saazid Bin Saif', '01793467138', 'shiulye@gmail.com', 'amerdesh', 'Language', 'HSC First Year 2', 'Male', '2020-09-21 12:38:07'),
(2, 'nnn', '4546', '564juio@gmail.com', 'kjnkljnjhb', 'Computer', 'HSC Second Year New 1', 'Male', '2020-09-22 21:49:11'),
(3, 'Mosha', '0249023475', 'alkesdedo@gmail.com', '12345', 'English', 'SSC New 3', 'Male', '2020-09-22 23:25:32'),
(4, 'Md. Nur E Alam Siddiquee', '01916885044', 'manik.23042004@gmail.com', '12435', '', 'HSC 1st Year (Science)', '', '2020-10-23 12:16:57'),
(5, 'Kaka', '0193284989', 'manik.2004@gmail.com', '7183994', 'option1', 'HSC 1st Year (Commerce)', 'option1', '2020-10-23 12:21:45'),
(6, 'notice', '0189373829134', 'manik4@gmail.com', '1j2ue8', 'English', 'HSC 1st Year (Commerce)', 'Female', '2020-10-23 12:24:26'),
(7, 'Manik', '01521782748', 'ma234nik.2004@gmail.com', '12345', 'Computer, Science, ', 'HSC 1st Year (Science)', 'Male', '2020-10-23 13:07:45'),
(8, 'test2', '019283748924', 'maniww92ik.2004@gmail.com', 'dkwii23847', 'Computer, Debate, Science, ', 'HSC 1st Year (Humanities)', 'Female', '2020-10-23 13:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Batch` varchar(100) NOT NULL,
  `Notice` text NOT NULL,
  `Exam` text NOT NULL,
  `About` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Batch`, `Notice`, `Exam`, `About`) VALUES
('Home', 'প্রিয় শিক্ষার্থীবৃন্দ, শারদীয় দুর্গাপূজা উপলক্ষে বিদ্যালয়ের সমস্ত কার্যক্রম আগামী ২২/১০/২০২০ হতে ৩১/১০/২০২০ পর্যন্ত বন্ধ থাকবে। আগামী ১/১১/২০২০ হতে যথারীতি অনলাইন ক্লাস, সিটি পরীক্ষা এবং অফিস চলবে। সবাইকে অগ্রীম শারদীয় দুর্গাপূজার শুভেচ্ছা জানাই।\r\nধন্যবাদান্তে, উপাধ্যক্ষ', '', 'বিএএফ শাহীন কলেজ বাংলাদেশের ঢাকা‍য় অবস্থিত একটি শিক্ষাপ্রতিষ্ঠান। ১৯৬০ সালে তৎকালীন পাকিস্তান বিমান বাহিনী (বর্তমানে বাংলাদেশ বিমান বাহিনী) কর্তৃক এটি প্রতিষ্ঠিত হয়। এটি ঢাকা মাধ্যমিক ও উচ্চমাধ্যমিক শিক্ষা বোর্ড-এর আওতাধীন এবং বাংলাদেশ বিমানবাহিনী কর্তৃক পরিচালিত। ঢাকাতে আরও একটি সহ সারা দেশে মোট ছয়টি শাহীন কলেজ রয়েছে। মূলত বিমান বাহিনীর সন্তান ও পোষ্যদের জন্য প্রতিষ্ঠিত হলেও সাধারণ শিক্ষার্থীরাও এখানে শিক্ষাগ্রহণের সুযোগ পায়। এখানে শিশু শ্রেণি থেকে দ্বাদশ শ্রেণি পর্যন্ত ছাত্র-ছাত্রীদের পাঠ দান করা হয়। কলেজের নীতিবাক্য হচ্ছে “শিক্ষা-সংযম-শৃঙ্খলা”। (বিঃ দ্রঃ এই ওয়েবসাইটে যত বাংলা লেখা আছে সবগুলোই ডায়নামিক ভাবে অ্যাডমিন প্যানেল থেকে পরিবর্তন করা সম্ভব)'),
('HSC 1st Year (Science)', 'প্রিয় শিক্ষার্থীবৃন্দ, সকল অবগতির জন্য জানানাে যাচ্ছে যে, ৮/১০/২০২০ (বৃহস্পতিবার) এর সকল সিটি পরীক্ষা অনুষ্ঠিত হবে ১৪/১০/২০২০ (বুধবার) সকাল ৯টায়।\r\nধন্যবাদান্তে, ভাইস-প্রিন্সিপাল', '<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSdA8DhiGyd87LzSAo8ffm2CkKcg8ilv93OYhpyiAN6-t205eQ/viewform?embedded=true\" width=\"640px\" height=\"1518px\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading…</iframe>', 'এই ওয়েব পেজটি মুল্ত HSC 1st Year (Science) এর শিক্ষার্থীদের জন্য। এই ক্লাসে মোট ২৫০ জন শিক্ষার্থী আছে । এর মধ্যে ১৫০ জন ছাত্র আর ১০০ জন ছাত্রী।  এই ক্লাসের মাসিক বেতন ১৫০০ টাকা। প্রতিদিন সকাল ৮ টা থেকে ১ টা পর্যন্তো ক্লাস হয়। এর মধে ১১ টা থেকে ১ টা পর্যন্ত ল্যাব্রেটরিতে প্র্যাক্টিক্যাল ক্লাস হয়। ৩০ মিনিটের টিফিনের বিরতি দেওয়া হয়। আমাদের কলেজে ভিতরে রয়েছে মান সম্মত ক্যান্টিন। এখান থেকে শিক্ষার্থীরা তাদের টিফিন ক্রয় করতে পারে। সাইন্স এর বিষয় এই শিক্ষক যারা এই ক্লাসে ক্লাস নেয়ঃ জাহিদ হাসান স্যার, শওকত কবির স্যার, মশিউর রহমান স্যার, নজরুল ইসলাম তুহিন স্যার, মোঃ রিপন স্যার, সামিয়া নাসরিন ম্যাডাম। অন্যান্য বিষয়ে ক্লাস নেনঃ শাফিকুল ইসলাম স্যার, নুরুজ্জাম স্যার, রুপা ম্যাডাম, সাইফুল্লাহ স্যার ইত্যাদি। শিক্ষকেরা অতি যত্ন সহকারে ক্লাস নেয়।'),
('HSC 1st Year (Commerce)', 'প্রিয় শিক্ষার্থীবৃন্দ, সকল অবগতির জন্য জানানাে যাচ্ছে যে, এই বছর নতুন বই হওয়ার কারনে তোমাদের আগের সিলেবাস সংশোধন করা প্রয়োজন। খুব শীঘ্রই সংশোধিত সিলাবাস তোমাদের দেওয়া হবে।\r\nধন্যবাদান্তে, প্রিন্সিপাল', 'There have no exam yet', 'এই ওয়েব পেজটি মুল্ত HSC 1st Year (Commerce) এর শিক্ষার্থীদের জন্য। এই ক্লাসে মোট ১৫০ জন শিক্ষার্থী আছে । এর মধ্যে ৫০ জন ছাত্র আর ১০০ জন ছাত্রী।  এই ক্লাসের মাসিক বেতন ১২০০ টাকা। প্রতিদিন সকাল ৮ টা থেকে ১২ টা পর্যন্তো ক্লাস হয়। এর মধে ১২ টা থেকে ১ টা পর্যন্ত কম্পিউটারে প্রাক্টক্যাল ক্লাস হয়। ৩০ মিনিটের টিফিনের বিরতি দেওয়া হয়। আমাদের কলেজে ভিতরে রয়েছে মান সম্মত ক্যান্টিন। এখান থেকে শিক্ষার্থীরা তাদের টিফিন ক্রয় করতে পারে। কমর্স এর বিষয় এই শিক্ষক যারা এই ক্লাসে ক্লাস নেয়ঃ শাফিকুল ইসলাম স্যার, অপূর্ব স্যার,জাহিদ হাসান স্যার, মশিউর রহমান স্যার, নজরুল ইসলাম তুহিন স্যার, মোঃ রিপন স্যার, সামিয়া নাসরিন ম্যাডাম। অন্যান্য বিষয়ে ক্লাস নেনঃ ,শামিমা ম্যডাম, নুরুজ্জাম স্যার, রুপা ম্যাডাম, সাইফুল্লাহ স্যার ইত্যাদি। শিক্ষকেরা অতি যত্ন সহকারে ক্লাস নেয়।'),
('HSC 1st Year (Humanities)', 'প্রিয় শিক্ষার্থীবৃন্দ, সকল অবগতির জন্য জানানাে যাচ্ছে যে, ৯/১০/২০২০ (বৃহস্পতিবার) এর অনলাইন ক্লাস অনুষ্ঠিত হবে ১৩/১০/২০২০ (বুধবার) সকাল ৯টায়।\r\nধন্যবাদান্তে, ভাইস-প্রিন্সিপাল', '<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSc70yOW4quWE44xiNg-o5L4jqoZPlVBi0rbLx34Ft2FQoUNFQ/viewform?embedded=true\" width=\"640\" height=\"1304\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading…</iframe>', 'এই ওয়েব পেজটি মুল্ত HSC 1st Year (Humanities) এর শিক্ষার্থীদের জন্য। এই ক্লাসে মোট ১৫০ জন শিক্ষার্থী আছে । এর মধ্যে ৫০ জন ছাত্র আর ১০০ জন ছাত্রী।  এই ক্লাসের মাসিক বেতন ১২০০ টাকা। প্রতিদিন সকাল ৮ টা থেকে ১২ টা পর্যন্তো ক্লাস হয়। এর মধে ১২ টা থেকে ১ টা পর্যন্ত কম্পিউটারে প্রাক্টক্যাল ক্লাস হয়। ৩০ মিনিটের টিফিনের বিরতি দেওয়া হয়। আমাদের কলেজে ভিতরে রয়েছে মান সম্মত ক্যান্টিন। এখান থেকে শিক্ষার্থীরা তাদের টিফিন ক্রয় করতে পারে। কমর্স এর বিষয় এই শিক্ষক যারা এই ক্লাসে ক্লাস নেয়ঃ  অপূর্ব স্যার,জাহিদ হাসান স্যার, মশিউর রহমান স্যার,শাফিকুল ইসলাম স্যার , মোঃ রিপন স্যার, সামিয়া নাসরিন ম্যাডাম। অন্যান্য বিষয়ে ক্লাস নেনঃ ,শামিমা ম্যডাম, নুরুজ্জাম স্যার, রুপা ম্যাডাম,নজরুল ইসলাম তুহিন স্যার, সাইফুল্লাহ স্যার ইত্যাদি। শিক্ষকেরা অতি যত্ন সহকারে ক্লাস নেয়।'),
('HSC 2nd Year (Science)', 'প্রিয় শিক্ষার্থীবৃন্দ, সকল অবগতির জন্য জানানাে যাচ্ছে যে, আগামী ১১-১১-২০২০ তারিখ হতে তোমাদের অনলাইন সিটি পরীক্ষা শুরু হবে। \r\nধন্যবাদান্তে, প্রিন্সিপাল', 'You have no exam yet.', 'এই ওয়েব পেজটি মুল্ত HSC 2nd Year (Science) এর শিক্ষার্থীদের জন্য। এই ক্লাসে মোট ১৫০ জন শিক্ষার্থী আছে । এর মধ্যে ৫০ জন ছাত্র আর ১০০ জন ছাত্রী।  এই ক্লাসের মাসিক বেতন ১৫০০ টাকা। প্রতিদিন সকাল ১২ টা থেকে ৫ টা পর্যন্তো ক্লাস হয়। এর মধে ৫ টা থেকে ৬ টা ৩০ পর্যন্ত ল্যাব্রেটরিতে প্রাক্টক্যাল ক্লাস হয়। ৩০ মিনিটের টিফিনের বিরতি দেওয়া হয়। আমাদের কলেজে ভিতরে রয়েছে মান সম্মত ক্যান্টিন। এখান থেকে শিক্ষার্থীরা তাদের টিফিন ক্রয় করতে পারে। কমর্স এর বিষয় এই শিক্ষক যারা এই ক্লাসে ক্লাস নেয়ঃ শওকত কবির স্যার,জাহিদ হাসান স্যার, মশিউর রহমান স্যার,শাফিকুল ইসলাম স্যার , সামিয়া নাসরিন ম্যাডাম। অন্যান্য বিষয়ে ক্লাস নেনঃ ,শামিমা ম্যডাম, নুরুজ্জাম স্যার, রুপা ম্যাডাম, অপূর্ব বিশ্বাস স্যার,নজরুল ইসলাম তুহিন স্যার, সাইফুল্লাহ স্যার ইত্যাদি। শিক্ষকেরা অতি যত্ন সহকারে ক্লাস নেয়।'),
('HSC 2nd Year (Commerce)', 'প্রিয় শিক্ষার্থীবৃন্দ, সকল অবগতির জন্য জানানাে যাচ্ছে যে, ৯/১০/২০২০ এর  সিটি পরীক্ষা অনুষ্ঠিত হবে ১৩/১০/২০২০ সকাল ১০টায়।\r\nধন্যবাদান্তে, ভাইস-প্রিন্সিপাল', '<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSc70yOW4quWE44xiNg-o5L4jqoZPlVBi0rbLx34Ft2FQoUNFQ/viewform?embedded=true\" width=\"640\" height=\"1304\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading…</iframe>', 'এই ওয়েব পেজটি মুল্ত HSC 2nd Year (Commerce) এর শিক্ষার্থীদের জন্য। এই ক্লাসে মোট ১৫০ জন শিক্ষার্থী আছে । এর মধ্যে ৫০ জন ছাত্র আর ১০০ জন ছাত্রী।  এই ক্লাসের মাসিক বেতন ১২০০ টাকা। প্রতিদিন সকাল ১ টা থেকে ৫ টা পর্যন্তো ক্লাস হয়। এর মধে ৫ টা থেকে ৬ টা পর্যন্ত কম্পিউটারে প্রাক্টক্যাল ক্লাস হয়। ৩০ মিনিটের টিফিনের বিরতি দেওয়া হয়। আমাদের কলেজে ভিতরে রয়েছে মান সম্মত ক্যান্টিন। এখান থেকে শিক্ষার্থীরা তাদের টিফিন ক্রয় করতে পারে। কমর্স এর বিষয় এই শিক্ষক যারা এই ক্লাসে ক্লাস নেয়ঃ অপূর্ব স্যার,জাহিদ হাসান স্যার, মশিউর রহমান স্যার,শাফিকুল ইসলাম স্যার , সামিয়া নাসরিন ম্যাডাম। অন্যান্য বিষয়ে ক্লাস নেনঃ ,শামিমা ম্যডাম, নুরুজ্জাম স্যার, রুপা ম্যাডাম,নজরুল ইসলাম তুহিন স্যার, সাইফুল্লাহ স্যার ইত্যাদি। শিক্ষকেরা অতি যত্ন সহকারে ক্লাস নেয়।'),
('HSC 2nd Year (Humanities)', 'প্রিয় শিক্ষার্থীবৃন্দ, সকল অবগতির জন্য জানানাে যাচ্ছে যে, ১০/১০/২০২০  এর অনলাইন ক্লাস অনুষ্ঠিত হবে ১৫/১০/২০২০  সকাল ১২টায়।\r\nধন্যবাদান্তে, ভাইস-প্রিন্সিপাল', '<iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSdA8DhiGyd87LzSAo8ffm2CkKcg8ilv93OYhpyiAN6-t205eQ/viewform?embedded=true\" width=\"640\" height=\"1518\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\">Loading…</iframe>', 'এই ওয়েব পেজটি মুল্ত HSC 2nd Year (Humanities) এর শিক্ষার্থীদের জন্য। এই ক্লাসে মোট ১৫০ জন শিক্ষার্থী আছে । এর মধ্যে ৫০ জন ছাত্র আর ১০০ জন ছাত্রী।  এই ক্লাসের মাসিক বেতন ১২০০ টাকা। প্রতিদিন সকাল ১ টা থেকে ৫ টা পর্যন্তো ক্লাস হয়। এর মধে ৫ টা থেকে ৬ টা পর্যন্ত কম্পিউটারে প্রাক্টক্যাল ক্লাস হয়। ৩০ মিনিটের টিফিনের বিরতি দেওয়া হয়। আমাদের কলেজে ভিতরে রয়েছে মান সম্মত ক্যান্টিন। এখান থেকে শিক্ষার্থীরা তাদের টিফিন ক্রয় করতে পারে। কমর্স এর বিষয় এই শিক্ষক যারা এই ক্লাসে ক্লাস নেয়ঃ মোঃ রিপন স্যার, অপূর্ব স্যার,জাহিদ হাসান স্যার, মশিউর রহমান স্যার,শাফিকুল ইসলাম স্যার , সামিয়া নাসরিন ম্যাডাম। অন্যান্য বিষয়ে ক্লাস নেনঃ ,শামিমা ম্যডাম, নুরুজ্জাম স্যার, রুপা ম্যাডাম,নজরুল ইসলাম তুহিন স্যার, সাইফুল্লাহ স্যার ইত্যাদি। শিক্ষকেরা অতি যত্ন সহকারে ক্লাস নেয়।');

-- --------------------------------------------------------

--
-- Table structure for table `youtube videos`
--

CREATE TABLE `youtube videos` (
  `Serial` int(250) NOT NULL,
  `Link` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube videos`
--

INSERT INTO `youtube videos` (`Serial`, `Link`) VALUES
(3, 'ZsG9cBj9sCk'),
(4, 'w92uYFy3S-w'),
(8, 'tehNKJBmvk'),
(7, 'RIs_Km4f5CI'),
(9, 'TN9PQqNEjms');

-- --------------------------------------------------------

--
-- Table structure for table `z_hsc_1st_year_commerce_`
--

CREATE TABLE `z_hsc_1st_year_commerce_` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(24) DEFAULT NULL,
  `COL 3` varchar(8) DEFAULT NULL,
  `COL 4` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_hsc_1st_year_commerce_`
--

INSERT INTO `z_hsc_1st_year_commerce_` (`COL 1`, `COL 2`, `COL 3`, `COL 4`) VALUES
('Roll', 'Name', 'Score', 'Time'),
('1', 'Md. Nur E Alam Siddiquee', '93 / 100', '9/21/2020 6:29:39'),
('2', 'Mehrab Hassan', '94 / 100', '9/21/2020 6:32:29'),
('3', 'Samiha Tasnim', '92 / 100', '9/21/2020 6:29:39'),
('4', 'Asef Ahmed', '93 / 100', '9/21/2020 6:32:29'),
('5', 'Shariar Siam', '89 / 100', '9/21/2020 6:29:39'),
('6', 'Nure Jannat Shantona', '86 / 100', '9/21/2020 6:32:29'),
('7', 'Rebeka Sultana', '84 / 100', '9/21/2020 6:29:39'),
('8', 'Iftekhar Tanjim', '91 / 100', '9/21/2020 6:32:29'),
('9', 'Sadia Aktar', '81 / 100', '9/21/2020 6:34:39'),
('10', 'Meghla Maria', '86 / 100', '9/21/2020 6:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `z_hsc_1st_year_humanities`
--

CREATE TABLE `z_hsc_1st_year_humanities` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(24) DEFAULT NULL,
  `COL 3` varchar(8) DEFAULT NULL,
  `COL 4` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_hsc_1st_year_humanities`
--

INSERT INTO `z_hsc_1st_year_humanities` (`COL 1`, `COL 2`, `COL 3`, `COL 4`) VALUES
('Roll', 'Name', 'Score', 'Time'),
('1', 'Md. Nur E Alam Siddiquee', '93 / 100', '9/21/2020 6:29:39'),
('2', 'Mehrab Hassan', '94 / 100', '9/21/2020 6:32:29'),
('3', 'Samiha Tasnim', '92 / 100', '9/21/2020 6:29:39'),
('4', 'Asef Ahmed', '93 / 100', '9/21/2020 6:32:29'),
('5', 'Shariar Siam', '89 / 100', '9/21/2020 6:29:39'),
('6', 'Nure Jannat Shantona', '86 / 100', '9/21/2020 6:32:29'),
('7', 'Rebeka Sultana', '84 / 100', '9/21/2020 6:29:39'),
('8', 'Iftekhar Tanjim', '91 / 100', '9/21/2020 6:32:29'),
('9', 'Sadia Aktar', '81 / 100', '9/21/2020 6:34:39'),
('10', 'Meghla Maria', '86 / 100', '9/21/2020 6:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `z_hsc_1st_year_science`
--

CREATE TABLE `z_hsc_1st_year_science` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(24) DEFAULT NULL,
  `COL 3` varchar(8) DEFAULT NULL,
  `COL 4` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_hsc_1st_year_science`
--

INSERT INTO `z_hsc_1st_year_science` (`COL 1`, `COL 2`, `COL 3`, `COL 4`) VALUES
('Roll', 'Name', 'Score', 'Time'),
('1', 'Md. Nur E Alam Siddiquee', '93 / 100', '9/21/2020 6:29:39'),
('2', 'Mehrab Hassan', '94 / 100', '9/21/2020 6:32:29'),
('3', 'Samiha Tasnim', '92 / 100', '9/21/2020 6:29:39'),
('4', 'Asef Ahmed', '93 / 100', '9/21/2020 6:32:29'),
('5', 'Shariar Siam', '89 / 100', '9/21/2020 6:29:39'),
('6', 'Nure Jannat Shantona', '86 / 100', '9/21/2020 6:32:29'),
('7', 'Rebeka Sultana', '84 / 100', '9/21/2020 6:29:39'),
('8', 'Iftekhar Tanjim', '91 / 100', '9/21/2020 6:32:29'),
('9', 'Sadia Aktar', '81 / 100', '9/21/2020 6:34:39'),
('10', 'Meghla Maria', '86 / 100', '9/21/2020 6:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `z_hsc_2nd_year_commerce`
--

CREATE TABLE `z_hsc_2nd_year_commerce` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(24) DEFAULT NULL,
  `COL 3` varchar(8) DEFAULT NULL,
  `COL 4` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_hsc_2nd_year_commerce`
--

INSERT INTO `z_hsc_2nd_year_commerce` (`COL 1`, `COL 2`, `COL 3`, `COL 4`) VALUES
('Roll', 'Name', 'Score', 'Time'),
('1', 'Md. Nur E Alam Siddiquee', '93 / 100', '9/21/2020 6:29:39'),
('2', 'Mehrab Hassan', '94 / 100', '9/21/2020 6:32:29'),
('3', 'Samiha Tasnim', '92 / 100', '9/21/2020 6:29:39'),
('4', 'Asef Ahmed', '93 / 100', '9/21/2020 6:32:29'),
('5', 'Shariar Siam', '89 / 100', '9/21/2020 6:29:39'),
('6', 'Nure Jannat Shantona', '86 / 100', '9/21/2020 6:32:29'),
('7', 'Rebeka Sultana', '84 / 100', '9/21/2020 6:29:39'),
('8', 'Iftekhar Tanjim', '91 / 100', '9/21/2020 6:32:29'),
('9', 'Sadia Aktar', '81 / 100', '9/21/2020 6:34:39'),
('10', 'Meghla Maria', '86 / 100', '9/21/2020 6:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `z_hsc_2nd_year_humanities`
--

CREATE TABLE `z_hsc_2nd_year_humanities` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(24) DEFAULT NULL,
  `COL 3` varchar(8) DEFAULT NULL,
  `COL 4` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_hsc_2nd_year_humanities`
--

INSERT INTO `z_hsc_2nd_year_humanities` (`COL 1`, `COL 2`, `COL 3`, `COL 4`) VALUES
('Roll', 'Name', 'Score', 'Time'),
('1', 'Md. Nur E Alam Siddiquee', '93 / 100', '9/21/2020 6:29:39'),
('2', 'Mehrab Hassan', '94 / 100', '9/21/2020 6:32:29'),
('3', 'Samiha Tasnim', '92 / 100', '9/21/2020 6:29:39'),
('4', 'Asef Ahmed', '93 / 100', '9/21/2020 6:32:29'),
('5', 'Shariar Siam', '89 / 100', '9/21/2020 6:29:39'),
('6', 'Nure Jannat Shantona', '86 / 100', '9/21/2020 6:32:29'),
('7', 'Rebeka Sultana', '84 / 100', '9/21/2020 6:29:39'),
('8', 'Iftekhar Tanjim', '91 / 100', '9/21/2020 6:32:29'),
('9', 'Sadia Aktar', '81 / 100', '9/21/2020 6:34:39'),
('10', 'Meghla Maria', '86 / 100', '9/21/2020 6:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `z_hsc_2nd_year_science`
--

CREATE TABLE `z_hsc_2nd_year_science` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(24) DEFAULT NULL,
  `COL 3` varchar(8) DEFAULT NULL,
  `COL 4` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `z_hsc_2nd_year_science`
--

INSERT INTO `z_hsc_2nd_year_science` (`COL 1`, `COL 2`, `COL 3`, `COL 4`) VALUES
('Roll', 'Name', 'Score', 'Time'),
('1', 'Md. Nur E Alam Siddiquee', '93 / 100', '9/21/2020 6:29:39'),
('2', 'Mehrab Hassan', '94 / 100', '9/21/2020 6:32:29'),
('3', 'Samiha Tasnim', '92 / 100', '9/21/2020 6:29:39'),
('4', 'Asef Ahmed', '93 / 100', '9/21/2020 6:32:29'),
('5', 'Shariar Siam', '89 / 100', '9/21/2020 6:29:39'),
('6', 'Nure Jannat Shantona', '86 / 100', '9/21/2020 6:32:29'),
('7', 'Rebeka Sultana', '84 / 100', '9/21/2020 6:29:39'),
('8', 'Iftekhar Tanjim', '91 / 100', '9/21/2020 6:32:29'),
('9', 'Sadia Aktar', '81 / 100', '9/21/2020 6:34:39'),
('10', 'Meghla Maria', '86 / 100', '9/21/2020 6:54:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_notice`
--
ALTER TABLE `all_notice`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`Serial`);

--
-- Indexes for table `club info`
--
ALTER TABLE `club info`
  ADD PRIMARY KEY (`Roll`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Batch`);

--
-- Indexes for table `youtube videos`
--
ALTER TABLE `youtube videos`
  ADD PRIMARY KEY (`Serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `club info`
--
ALTER TABLE `club info`
  MODIFY `Roll` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `youtube videos`
--
ALTER TABLE `youtube videos`
  MODIFY `Serial` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
