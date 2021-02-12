-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2021 at 06:47 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'admin', '6347israfil@gmail.com', 'admin', 1),
(3, 'md washim', 'israfilm408@gmail.com', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(1000) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `des`) VALUES
(4, 'Home', 'This is home bar to add all current news'),
(6, 'COV19', 'Cov 19 7 days information'),
(7, 'Bangladesh', 'This is all news in Bangladesh  '),
(8, 'Headline', 'headline news'),
(9, 'Top-news', 'this is top news ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `date` date NOT NULL,
  `thumbral` varchar(250) NOT NULL,
  `category` varchar(200) NOT NULL,
  `status` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `thumbral`, `category`, `status`) VALUES
(1, 'US on alert for possible pro-Trump armed protests before Biden inauguration', '<p style=\"box-sizing: border-box; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: #121212; text-align: justify; margin: 0px 0px var(--space2) 0px;\">Ten days after rioters breached the US Capitol in a deadly attack that stunned the world, cities nationwide were girding for a potential new wave of violent protests over the weekend, erecting barriers and deploying thousands of National Guard troops.</p>\r\n<p style=\"box-sizi', '2021-01-17', 'prothomalo-english_2021-01_ade4c0f2-512a-421b-8829-525bb1226e10_USA_TRUMP_PROTESTS.jpg', ' Home', 1),
(2, 'Newly-elected councillor stabbed dead in Sirajganj', '<p style=\"box-sizing: border-box; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: #121212; text-align: justify; margin: 0px 0px var(--space2) 0px;\">A newly-elected pourashava councillor has been killed in an attack by rivals immediately after winning the election in Sirajganj.</p>\r\n<p style=\"box-sizing: border-box; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: br', '2021-01-17', 'prothomalo-english_2021-01_ebdebd6c-72c3-4e40-9c55-5620c799f789_139595031_169340127861921_4947654084175229189_n.jpg', ' Home', 1),
(3, 'Global COVID-19 caseload tops 94.4m: Johns Hopkins', '<p style=\"box-sizing: border-box; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: #121212; text-align: justify; margin: 0px 0px var(--space2) 0px;\">The overall global coronavirus caseload has topped 94.4 million, while the deaths have surged to more than 2.02 million, according to the Johns Hopkins University.</p>\r\n<p style=\"box-sizing: border-box; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; ', '2021-01-17', 'prothomalo-english_2020-12_462ba475-1fa3-4cce-aa15-17781c6e09aa_Milan.jpg', ' Home', 0),
(4, 'Merkel’s party picks her ally as next leader', '<p style=\"box-sizing: border-box; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: #121212; text-align: justify; margin: 0px 0px var(--space2) 0px;\">Chancellor Angela Merkel&rsquo;s conservative CDU party picked her ally Armin Laschet as its next leader on Saturday, in a vote for &ldquo;continuity&rdquo; as Europe&rsquo;s biggest economy heads into a key election year with the deadly coronavirus pandemic still raging.</p', '2021-01-17', 'prothomalo-english_2021-01_b33d0ad4-a0f3-4984-a905-b47ea75eb5dc_GERMANY_POLITICS_CDU_ARMIN_LASCHET.jpg', ' Home', 0),
(5, 'Bangladesh to get vaccines quickly: Dora swami', '<p style=\"text-align: justify;\"><span style=\"color: #121212; font-family: Merriweather, Merriweather; font-size: 16px; white-space: break-spaces;\">Indian high commissioner to Bangladesh Vikram K Doraiswami on Saturday reiterated that Bangladesh will receive its supply of the coronavirus vaccine from an Indian manufacturer \"quickly and urgently\" as per previous assurances, reports UNB. </span><br style=\"box-sizing: border-box; color: #121212; font-family: Merriweather, Merriweather; font-size: 16', '2021-01-17', 'prothomalo-english_2020-12_ead77ed5-3272-4235-9e4e-e6d1fd128c75_ihc.jpg', ' Home', 0),
(6, 'Bangladesh likely to be affected as Russia plans to raise wheat export tax from March', '<p style=\"box-sizing: border-box; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: #121212; text-align: justify; margin: 0px 0px var(--space2) 0px;\">Russia, one of the world&rsquo;s largest wheat exporters, plans to impose a higher export tax on wheat from 1 March, its economy minister said on Friday, in another push to curb a rise in domestic food prices triggered by the COVID-19 crisis.</p>\r\n<p style=\"box-sizing: borde', '2021-01-17', 'prothomalo-english_import_media_2019_07_31_50003e758f1851891f6def6540450766-Bangladesh-2.jpg', ' Home', 0),
(7, 'I will continue my struggle: Ayesha Siddiqua', '<p style=\"text-align: justify;\"><span style=\"color: #707070; font-family: Merriweather, Merriweather; font-size: 16px;\">In 2012, Ayesha Siddiqua applied to be a \'nikah\' (marriage) registrar for three wards (wards 7, 8, and 9) of Phulbari municipality in Dinajpur district. But the law ministry at the time barred her from becoming the country&rsquo;s first woman marriage registrar. A High Court bench recently ruled against her too, upholding the government\'s decision. Ayesha Siddiqua speaks to Pro', '2021-01-17', 'prothomalo-english_2021-01_7e4cad6b-b1e6-4eaa-bfe4-c05574a1d16a_Marriage_Registrar_Ayesha_Siddika.jpeg', ' Home', 0),
(8, 'Salman exempted again in blackbuck poaching case', '<p style=\"box-sizing: border-box; padding: 0px; font-family: Merriweather, Merriweather; font-size: 2rem; line-height: 1.67; white-space: break-spaces; color: #121212; text-align: justify; margin: 0px 0px var(--space2) 0px;\">Exempting Bollywood star Salman Khan from making an appearance on Saturday in connection with a case related to the poaching of two black bucks in Jodhpur in 1998, the district and sessions court on Saturday asked him to appear before it on 6 February.</p>\r\n<p style=\"box-siz', '2021-01-17', 'prothomalo-english_import_media_2018_04_05_365a36421c3a1a3b0993cd586efe7192-Indian-Bollywood-actor-Salman-Khan.jpg', ' Home', 0),
(9, 'Quake death toll at 56 as Indonesia struggles with string of disasters', '<p style=\"margin: 0px 0px 15px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: arial, sans-serif; overflow: visible; color: #151515; text-align: justify;\">More than 820 people were injured and about 15,000 left their homes after the 6', '2021-01-17', 'indonesia-quake-170121-01.jpg', ' Home', 0),
(11, 'COVID vaccines arrive in districts as Bangladesh gears up for nationwide inoculation', '<p style=\"text-align: justify;\"><span style=\"color: #151515; font-family: arial, sans-serif; font-size: 14px;\">The doses reached 36 districts until Friday, said Dr ABM Khurshid Alam, director-general of health services. Officials of the Directorate General of Health Services will receive the vaccines on the opening day, Khurshid said at a programme at the DGHS on Saturday.</span>Health Minister Zahid Maleque will attend the launch of the mass vaccination at a hospital in Dhaka. Besides the frontline workers and 150 officials of the DGHS, &ldquo;distinguished citizens&rdquo; will also take the shots there, Khurshid saidIn the capital, 354 teams will administer doses at 43 facilities, he said, citing the initial plaAs many as 6,690 teams will be deployed across the country, but the 4,600 centres at the union level will remain out of the coverage for now.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: arial, sans-serif; overflow: visible; color: #151515;\">&nbsp;</p>', '2021-01-31', 'brahmanbaria-covid-vaccine-300121-01.jpg', 'COV19', 1),
(12, 'Elon Musk, GameStop and the CEO as internet troll', '<p style=\"margin: 0px 0px 15px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: arial, sans-serif; overflow: visible; color: #151515;\">&ldquo;The stock market is a strange thing,&rdquo; Musk said in an interview with Business Insider in December. &ldquo;It&rsquo;s like having a manic depressive who&rsquo;s constantly telling you how much your company&rsquo;s worth. And sometimes they have a good day, and sometimes they have a bad day, but the company is basically the same. The public markets are crazy.&rdquo;A month later, Musk has inserted himself into one of the most confounding stock market dramas in years &mdash; the multibillion-dollar battle over GameStop being waged between elite hedge funds and retail investors communicating on Reddit.On Tuesday, as GameStop shares skyrocketed, Musk weighed in with a one-word tweet &mdash; &ldquo;Gamestonk!!&rdquo;</p>', '2021-01-31', 'gamestop-musk-300121-01.jpg', 'Top-news', 0),
(13, 'CDC orders sweeping US transportation mask mandate as COVID-19 rages', '<p style=\"margin: 0px 0px 15px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: arial, sans-serif; overflow: visible; color: #151515; text-align: justify;\">The order, which takes effect at 11:59 pm EST on Monday (0459 GMT Tuesday), requires face masks to be worn by all travelers on airplanes, ships, trains, subways, buses, taxis, and ride-shares and at transportation hubs like airports, bus or ferry terminals, train and subway stations, and seaports. President Joe Biden on Jan 21 ordered government agencies to \"immediately take action\" to require masks in airports and on commercial aircraft, trains and public maritime vessels, including ferries, intercity bus services and all public transportation.Under Donald Trump, who was president until Jan 20, a CDC push to mandate masks in transit was blocked and the agency instead only issued strong recommendations for mask use. Trump also rejected efforts by Congress to mandate mask use.\"Requiring masks on our transportation systems will protect Americans and provide confidence that we can once again travel safely even during this pandemic,\" said the 11-page order signed by Marty Cetron, director for CDC\'s Division of Global Migration and Quarantine.</p>', '2021-01-31', 'us-travellers-310121-01.jpg', 'Headline', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` enum('active','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_email`, `user_password`, `user_status`, `token`) VALUES
(0, 'Md israfil', 'israfilm408@gmail.com', '$2y$10$9OZgwJKnN/Z68bHHYrgk/uRYQnR0MGhOgO35OAkNiNpGHDJL5i2yy', 'active', 'd8bf8f68bfa7b7c80e32e73aa8670a1c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
