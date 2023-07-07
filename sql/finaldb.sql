-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 09:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finaldb_funolympic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Anish', 'Paudel', 'paudelanish@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentID`, `username`, `comment`, `date`, `rate`) VALUES
(1, 'anish@gmail.com', 'Nice!!', '2023-07-05', 5),
(2, 'anish@gmail.com', 'Nice Video!! Love It', '2023-07-05', 5),
(3, 'anish@gmail.com', 'nice', '2023-07-06', 3),
(4, 'anish@gmail.com', 'nice', '2023-07-06', 4),
(5, 'anish@gmail.com', 'nice video', '2023-07-06', 5);

-- --------------------------------------------------------

--
-- Table structure for table `otp_admins`
--

CREATE TABLE `otp_admins` (
  `id` int(11) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp_admins`
--

INSERT INTO `otp_admins` (`id`, `otp`, `created_at`) VALUES
(1, '12', '2023-07-04 13:23:20'),
(2, '44', '2023-07-04 13:25:14'),
(3, '18', '2023-07-04 17:14:34'),
(4, '22', '2023-07-06 01:26:15'),
(5, '65', '2023-07-06 03:47:43'),
(6, '58', '2023-07-06 04:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `otp_users`
--

CREATE TABLE `otp_users` (
  `id` int(11) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp_users`
--

INSERT INTO `otp_users` (`id`, `otp`, `created_at`) VALUES
(1, '66', '2023-07-04 12:37:02'),
(2, '88', '2023-07-04 13:48:56'),
(3, '86', '2023-07-05 20:39:43'),
(4, '87', '2023-07-06 02:36:49'),
(5, '45', '2023-07-06 03:44:00'),
(6, '67', '2023-07-06 04:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `content` longtext NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `image`) VALUES
(16, '2023 U.S. Swimming Championships TV, live stream schedule', 'The U.S. Swimming Championships, the meet to determine the world championships team, airs on NBC, NBCSports.com/live, the NBC Sports app and Peacock this week.\r\n\r\nPeacock airs live finals sessions from Tuesday through Saturday at 7 p.m. ET from Indianapolis.\r\n\r\nThe top two in most individual events qualify for July’s world championships in Fukuoka, Japan.\r\n\r\nExpected headliners include all five individual U.S. Olympic gold medalists from Tokyo: Katie Ledecky, Caeleb Dressel, Bobby Finke, Chase Kalisz and Lydia Jacoby. Plus individual Rio gold medalists Lilly King and Ryan Murphy. Simone Manuel chose not to enter the meet, prioritizing preparing for the 2024 Olympic year.\r\n\r\nLedecky and Kalisz bid to compete at a sixth world championships, which would tie the U.S. record shared by Michael Phelps, Ryan Lochte, Nathan Adrian, Natalie Coughlin and Elizabeth Beisel.\r\n\r\nLedecky enters as the fastest American woman this year in all of her primary events -- 200m, 400m, 800m and 1500m freestyles.\r\n\r\nLast year, she made the team in all four, then dropped the 200m free because of the busy world championships schedule and to focus more on the longer distances. She then swept the 400m, 800m and 1500m frees at worlds, along with 4x200m free gold, to break Coughlin’s female record for world championships medals (now up to 22 -- 19 golds and three silvers).\r\n\r\nLast month, Dressel returned from an 11-month competition break after withdrawing during last June’s worlds on unspecified medical grounds and then taking at least two and a half months off from swimming. He is ranked outside the top five in the nation this year in his primary events -- 50m and 100m frees and 100m butterfly -- but he’s only raced at one full meet in 2023 and is known for significant time drops come major meets.\r\n\r\nRegan Smith has been arguably the most impressive swimmer this year. Smith, a world champion in both backstrokes, is the fastest U.S. woman in 2023 in five different events.', 0x312e706e67),
(17, 'Paris 2024 reveals routes of Olympic road cycling events', 'From the sidelines of Stage 4 of the Tour de France, Paris 2024 President Tony Estanguet revealed that the cycling routes for the next Olympic Games are aligned to the Paris 2024 Games philosophy of spectacular, challenging and open to all.\r\n\r\nDistinctive in length – 273km for the men and 158km for the women – the road race courses will be challenging for their rolling profile, a final climb up Montmartre and their technical nature, with cobbled streets and tightly winding sections to negotiate on the last part of the course before returning to the Trocadéro.\r\n\r\nThe courses are also special for bringing the Games to the more undiscovered areas of Ile-de-France, the region that encompasses Paris, with the Val-de-Marne département hosting the time trials and the Essonne département, the road races.\r\n\r\n“Road cycling races in cities are exceptional, and they are free access events for the fans,\" commented Paris 2024 President Tony Estanguet. \"We’ll have a combination of a great show and great sporting event. It’s also the longest race in the history of the Olympic Games. It will be a difficult race with a very exciting final.”\r\n\r\n', 0x322e706e67),
(18, 'Kristof Milak to miss world swimming championships', 'Olympic 200m butterfly champion Kristof Milak will miss next month’s world swimming championships, saying he is not physically or mentally ready to compete at the highest level, according to Hungary’s swim federation .\r\n\r\nMilak said he plans to rest this summer ahead of returning to competition, according to the federation.\r\n\r\nMilak, 23, swept the 100m and 200m butterflies at last June’s worlds in Budapest as the host nation’s biggest star. He lowered his 200m fly world record from 1:50.73 to 1:50.34 after initially breaking Michael Phelps’ record in 2019.\r\n\r\nMilak also won the 100m fly at worlds, a year after taking silver behind American Caeleb Dressel at the Olympics. Dressel withdrew during last year’s worlds before the 100m fly on unspecified medical grounds. Dressel is the world record holder. Milak is the second-fastest man in history.\r\n\r\nDressel is expected to compete at next week’s USA Swimming Championships, bidding for a spot at July’s worlds in Fukuoka, Japan.\r\n\r\nMilak ranks first in the world this year in the 200m fly by best times and tied for third in the 100m fly with American Shaine Casas, behind Canadian Josh Liendo and Frenchman Maxime Grousset. Milak’s times were from the Hungarian Championships in April.', 0x53637265656e73686f7420323032332d30372d3035203133333734332e706e67),
(19, 'What the U.S. Women’s World Cup roster means for the 2024 Paris Olympics', 'A place on the U.S. women’s World Cup soccer team likely leads to an Olympic roster spot, though the Olympic team size is expected to be smaller for Paris than in Tokyo.\r\n\r\nCoach Vlatko Andonovski’s 23-player roster for the World Cup that starts next month in Australia and New Zealand is headlined by forwards Megan Rapinoe and Alex Morgan and defender Kelley O’Hara, all members of the last three Olympic teams.\r\n\r\nAbout a year from now, the U.S. will name a roster of 18 players for the Paris Olympics. It’s expected that up to four alternates can also be named, but with more restrictions than in Tokyo.\r\n\r\nAt the last Olympics, alternates essentially became full-fledged team members to add flexibility amid the pandemic, though each team still had to pick 18 out of the 22 for each match. For Paris, it’s expected that the rule will revert to alternates in the traditional sense of being on call in case of injury.\r\n\r\nFor Tokyo, the original roster of 18 players (two goalies, six defenders, five midfielders, five forwards) included 17 from the 2019 World Cup roster (the outlier being midfielder Kristie Mewis). That’s an impressive holdover count given the two years separating the tournaments -- rather than the usual one -- and because the U.S. changed head coaches during that time, from Jill Ellis to Andonovski.\r\n\r\nFor Paris, the turnaround from World Cup to the Olympics goes back to one year. Andonovski may still be the head coach.', 0x53637265656e73686f7420323032332d30372d3035203133343235332e706e67),
(20, 'Paris 2024 Olympic organizers HQ searched by French investigators', 'French investigators searched the headquarters of Paris Olympic organizers on Tuesday in a probe into suspected corruption, according to the national financial prosecutor’s office.\r\n\r\nThe Paris organizing committee said in a statement that a search was under way at their headquarters in the suburb of Saint-Denis, and that “Paris 2024 is cooperating with the investigators to facilitate their investigations.” It would not comment further.\r\n\r\nAn official with the financial prosecutor’s office said Tuesday the searches are linked to two preliminary investigations related to the Paris Olympics that had not previously been made public. The official was not authorized to be publicly named according to prosecutor’s office policy.\r\n\r\nAccording to Le Monde , raids also took place at the offices of the public body in charge of Olympic infrastructure, and at the headquarters of several companies and consultants linked to the organization of the Games.\r\n\r\nParis organizers declined to comment.\r\n\r\nOne of the probes was opened in 2017 — the year Paris was picked by the IOC as the 2024 host — into suspected embezzlement of public funds and favoritism, and concerns about an unspecified contract reached by Paris organizers, the prosecutor’s office said.\r\n\r\nThe other was opened in 2022 following an audit by the French Anti-corruption Agency. The prosecutor’s office said that case targets suspected conflict of interest and favoritism involving several contracts reached by the organizing committee and Solideo, the company in charge of Olympic facilities.\r\n\r\nThe Paris Olympics are scheduled for July 26-Aug. 11, 2024.\r\n\r\nThe raids unfolded at the same time as the IOC executive board began a two-day meeting in Lausanne, Switzerland, expecting to praise Paris organizers for their progress.\r\n\r\nIOC president Thomas Bach told reporters early Monday the meeting “of course will be about Paris, where we have some good news after the visit of the coordination mission and after my visit to France, to President Macron, and also the organizing committee.”\r\n\r\nThe IOC said it expected to release a statement Tuesday about the raids in Paris ahead of a previously scheduled online news briefing once its meeting closed for the day.', 0x53637265656e73686f7420323032332d30372d3035203133343430312e706e67),
(21, 'Faith Kipyegon given a house by Kenya president for breaking two world records', 'Faith Kipyegon was given $35,000 and a house by Kenyan President William Ruto on Tuesday as a reward for breaking two world records in the space of a week.\r\n\r\nKipyegon, who met with Ruto at the president’s office, said she would now fulfill a promise she had made to buy her father a new car.\r\n\r\nThe 29-year-old Kipyegon, a two-time Olympic 1500m champion, broke the 1500m world record in Florence, Italy on June 2, lowering the eight-year-old mark set by Genzebe Dibaba of Ethiopia. Kipyegon became the first woman to go under 3 minutes, 50 seconds with her 3:49.11.\r\n\r\nShe broke the 5000m record last Friday at the Paris Diamond League meet by clocking 14:05.20, winning that race ahead of former world record-holder Letesenbet Gidey of Ethiopia.\r\n\r\n“Faith has made Kenya incredibly proud,” Ruto said. “She stands as a shining model of consistency, discipline, hard work, as well as family. Faith is a great Kenyan woman — a mother, a wife and a world champion rolled into one.”\r\n\r\nRuto pledged that the Kenyan government will also give similar rewards to future world-record breakers.', 0x53637265656e73686f7420323032332d30372d3035203133343732322e706e67),
(22, 'Solidarity and Peace: the IOC publishes 2022 Annual Report and Financial Statements', 'In addition to outlining the activities carried out during the past year, the Report includes the audited consolidated financial statements for 2022, along with the IOC Members’ Indemnity Policy. The consolidated financial statements are prepared in accordance with the International Financial Reporting Standards (IFRS), even though the IOC is not legally obliged to comply with these higher standards.\r\n\r\nOnce again, the IOC, which is entirely privately funded, has continued to redistribute 90 per cent of distributable revenues to support the organisation of the Olympic Games, the promotion of athletes and sport at all levels worldwide, and the dissemination of the Olympic values. In 2022, the IOC contributed USD 2 billion to support the Olympic Movement through direct IOC contributions as well as various IOC activities, projects and programmes aimed at supporting the staging of the Games and promoting the worldwide development of sport and the Olympic Movement.\r\n\r\nThe IOC Annual Report 2022 has as its subtitle \"Solidarity and Peace\", which reflects the emphasis of the activities of the IOC and the Olympic Movement during the year. This year it has again been structured around the five key trends that underpin Olympic Agenda 2020+5.\r\n\r\nHighlights of the year include the Olympic Winter Games Beijing 2022, which took place in February. Some 2,897 athletes from 91 National Olympic Committees participated. Forty-five per cent of the athletes were women, making these the most gender-balanced Olympic Winter Games to date. Although the pandemic was still very present in February 2022 and spectator numbers restricted to a small Chinese audience, this did nothing to dim the enthusiasm, with fans tuning in from around the world to watch the action on digital platforms. The result was the most digitally engaged Olympic Winter Games to date, with a record 3.2 billion engagements on Olympic social media handles, while 2.01 billion viewers tuned in to watch coverage on Media Rights-Holders’ linear and digital platforms.', 0x53637265656e73686f7420323032332d30372d3036203032333834372e706e67),
(24, 'hello', 'hi', 0x7069632e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_booking`
--

CREATE TABLE `ticket_booking` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `game` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_booking`
--

INSERT INTO `ticket_booking` (`id`, `first_name`, `last_name`, `gender`, `address`, `phone`, `email`, `game`, `country`) VALUES
(1, 'Anish', 'Paudel', 'Male', 'Bharatpur', 9779846877694, 'anish@gmail.com', 'Hockey', 'Nepal'),
(2, 'Anish', 'Paudel', 'Male', 'bharatpur', 1234567890, 'anishp@gmail.com', 'Hockey', 'Nepal'),
(3, 'Anish', 'Paudel', 'Male', 'Bharatpur, Chitwan', 1234566789, 'anish@gmail.com', 'Volleyball', 'Nepal'),
(4, 'Anish', 'Paudel', 'Male', 'chitwan', 1234567898, 'anishpaudel1@gmail.com', 'Volleyball', 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `Username`, `Password`) VALUES
(1, 'Anish', 'Paudel', 'anish@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Suman', 'Paudel', 'suman@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Suman', 'Kc', 'sumankc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Anish', 'Paudel', 'anishpaudel1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `otp_admins`
--
ALTER TABLE `otp_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_users`
--
ALTER TABLE `otp_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_booking`
--
ALTER TABLE `ticket_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `otp_admins`
--
ALTER TABLE `otp_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `otp_users`
--
ALTER TABLE `otp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ticket_booking`
--
ALTER TABLE `ticket_booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
