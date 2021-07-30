-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 02:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `architecture`
--

CREATE TABLE `architecture` (
  `id` int(10) NOT NULL,
  `image` varchar(10) NOT NULL,
  `subject` varchar(35) NOT NULL,
  `description` varchar(200) NOT NULL,
  `hours` int(2) NOT NULL,
  `month` int(13) NOT NULL,
  `module` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `architecture`
--

INSERT INTO `architecture` (`id`, `image`, `subject`, `description`, `hours`, `month`, `module`) VALUES
(1, '', 'landscape architecture', 'Landscape architecture is the study and practice of designing environments (outdoors & indoors) of varying scale that encompasses', 2, 12, 4),
(2, '', 'urdan architecture', 'Urban architecture is designed for use in an urban setting, most specifically for large cities. ... Multi-use building', 2, 4, 3),
(3, '', 'restoration architecture', 'Restoration projects in architecture are undertaken to sustain the heritage value of the structure and to preserve the creative integrity', 2, 8, 1),
(4, '', 'research architecture', 'Research architecture has nothing to do with designing buildings but everything to do with the politics of space', 2, 5, 4),
(5, '', 'lighting architecture', 'The way lighting can help bring value to the function of architecture. Lighting plays a vital role in the way people experience', 2, 6, 2),
(6, '', 'political architecture', 'All architecture has a political dimension, in the sense that it expresses a set of values. The architectural object performs politically', 2, 6, 8),
(7, '', 'extreme architecture', 'The name “Extreme Architecture” refers to architecture built in extreme environments—all of them related to extreme conditions', 2, 5, 3),
(8, '', 'industrial architecture', 'Industrial architecture is the design and construction of buildings serving industry. Such buildings rose in importance ', 2, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `id` int(25) NOT NULL,
  `image` varchar(20) NOT NULL,
  `subject` varchar(35) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hours` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `module` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`id`, `image`, `subject`, `description`, `hours`, `month`, `module`) VALUES
(1, 'design1.jfif', 'fashion design', 'A fashion design course is a course that covers the art of designing beautiful clothing.', 2, 12, 5),
(2, 'design2.jfif', 'graphic design', 'graphic designing programmes you will learn to convey ideas and messages using images', 2, 8, 7),
(3, 'design3.jfif', 'animation', 'Animation is a satisfying and lucrative profession and is attracting youngsters in droves towards it.', 2, 10, 6),
(4, 'design4.jfif', 'industrial design', 'in industrial design, architecture, or engineering is usually required for entry-level industrial design jobs.', 2, 12, 7),
(5, 'design4.jfif', 'accessory design', ' Accessory Design graduates have been able to carve a niche for themselves in traditional as well as emerging sectors ', 2, 12, 5),
(6, 'design3.jfif', 'textile design', 'While most textiles designers are employed in the fashion industry, they may also be able', 2, 12, 5),
(7, 'design2.jfif', 'glass design', 'Ceramic and Glass designing course is a combination of creativity, science as well as technology', 2, 6, 6),
(8, 'design1.jfif', 'jewellery design', 'Jewellery Designing is a very rewarding career option for anyone entering the world of designing', 2, 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(25) NOT NULL,
  `image` varchar(20) NOT NULL,
  `subject` varchar(35) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hours` int(20) NOT NULL,
  `month` int(50) NOT NULL,
  `module` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `image`, `subject`, `description`, `hours`, `month`, `module`) VALUES
(1, '', 'online marketing', 'Online marketing is the practice of leveraging web-based channels to spread a message about a company\'s brand, products, or services to its potential customers.', 2, 12, 4),
(2, '', 'international market', 'International Marketing is defined as the performance of business activities designed to plan, price, promote', 2, 4, 3),
(3, '', 'sports marketing', 'Sports marketing is a subdivision of marketing which focuses both on the promotion of sports events', 2, 12, 6),
(4, '', 'business marketing', 'Business marketing is a marketing practice of individuals or organizations (including commercial businesses', 2, 5, 2),
(5, '', 'fashion marketing', 'Fashion marketing is the branch of the marketing industry that deals with the advertising of clothing and accessories to the target market', 2, 6, 7),
(6, '', 'influencer marketing', 'influencer marketing is a type of social media marketing that uses endorsements and product mentions from influencers', 2, 6, 4),
(7, '', 'email marketing', 'Email marketing is the act of sending a commercial message, typically to a group of people, using email.', 2, 8, 5),
(8, '', 'content marketing', 'Content marketing is a marketing strategy used to attract, engage, and retain an audience by creating and sharing relevant articles', 2, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(25) NOT NULL,
  `image` varchar(20) NOT NULL,
  `subject` varchar(35) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hours` int(20) NOT NULL,
  `month` int(50) NOT NULL,
  `module` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `image`, `subject`, `description`, `hours`, `month`, `module`) VALUES
(1, 'img1.jfif', 'electronic music', 'Electronic Music Production Certificate at Musicians Institute provides students with a foundation for a career as an electronic music producer.', 2, 12, 6),
(2, 'img2.jfif', 'Basic theory of musi', 'basic music theory defines the elements that form harmony, melody, and rhythm. It identifies compositional elements such as song', 2, 6, 9),
(3, 'img3.jfif', 'mixing of music', 'A lucky few have natural abilities, but for most musicians mixing is complicated and frustrating with a steep learning curve', 2, 12, 7),
(4, 'img4.jfif', 'Jazz music basic', 'Analytic practice in Jazz recognizes four basic chord types, plus diminished seventh chords. The four basic chord types are major, minor', 2, 6, 6),
(5, 'img4.jfif', 'Rap music', 'Hip hop music, also known as rap music, is a genre of popular music developed in the United States by inner-city', 2, 12, 7),
(6, 'img3.jfif', 'Carnatic music', 'Carnatic music, known as Karn??aka sa?g?ta or Karn??aka sa?g?tam in the South Indian languages, is a system of music commonly associated', 2, 12, 6),
(7, 'img2.jfif', 'Classical music', 'Classical music is art music produced or rooted in the traditions of Western culture, generally considered to have begun in Europe', 2, 10, 5),
(8, 'img1.jfif', 'Folk Music', 'Folk music is music that represents the tradition or culture of the area/place/state. As we know India is nation having 28 states', 2, 6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(15) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `id` int(10) NOT NULL,
  `image` varchar(20) NOT NULL,
  `subject` varchar(35) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hours` int(5) NOT NULL,
  `month` int(5) NOT NULL,
  `module` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`id`, `image`, `subject`, `description`, `hours`, `month`, `module`) VALUES
(1, '', 'digital photography', 'Digital photography uses cameras containing arrays of electronic photodetectors to produce images focused by a lens,', 2, 6, 6),
(2, '', 'fashion photography', 'Fashion photography is a highly exclusive and competitive industry. Getting in requires dedication, commitment', 2, 4, 4),
(3, '', 'cinematography', 'Cinematography (from ancient Greek ??????, kìnema \"movement\" and ???????, gràphein \"to write\")', 2, 8, 5),
(4, '', 'digital imaging', 'Digital imaging is the art of making digital images, including printed text, artwork, and photographs via a digital', 2, 5, 6),
(5, '', 'commercial photograp', 'Commercial photography is photography that is used to sell or promote a product or service, or otherwise support a business ', 2, 6, 2),
(6, '', 'editorial', 'These forms of social media often provide inspiration and opportunities for networking and promoting the user\'s artwork. ', 2, 6, 8),
(7, '', 'photography', 'Photography is a good career if you have an excellent skill set, good creative ability, composition, and technical expertise.', 2, 5, 3),
(8, '', 'photojournalism', 'Photojournalism is a form of journalism which tells a news story through powerful photography which traditionally are black and white images.', 2, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `programming`
--

CREATE TABLE `programming` (
  `id` int(10) NOT NULL,
  `image` varchar(15) NOT NULL,
  `subject` varchar(35) NOT NULL,
  `description` varchar(255) NOT NULL,
  `hours` int(5) NOT NULL,
  `month` int(5) NOT NULL,
  `module` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programming`
--

INSERT INTO `programming` (`id`, `image`, `subject`, `description`, `hours`, `month`, `module`) VALUES
(1, '', 'docker master', 'Docker Mastery: with Kubernetes +Swarm from a Docker Captain. Build, test, deploy containers with the best mega-course on Docker', 2, 12, 6),
(2, '', 'node.js', 'Node. js is a platform built on Chrome\'s JavaScript runtime for easily building fast and scalable network applications', 2, 5, 2),
(3, '', 'c.c++', 'When developing the operating system used on a desktop as well as a smartphone. To develop and build databases', 2, 8, 5),
(4, '', 'java script', 'JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive', 2, 5, 6),
(5, '', 'web development', 'Web development is the work involved in developing a Web site for the Internet (World Wide Web) or an intranet', 2, 6, 3),
(6, '', 'R and software devel', 'The R language is widely used among statisticians and data miners for developing statistical software and data analysis', 2, 6, 4),
(7, '', 'python', 'Python is a general-purpose programming language, so it can be used for many things. Python is used for web development', 2, 5, 3),
(8, '', 'learn front end deve', 'Front-end developers might build websites or web applications, or focus on mobile web development.', 2, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(25) NOT NULL,
  `useremail` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `useremail`, `password`) VALUES
('jagadeesan', 'jaga27.2k@gmail.com', 'jaga'),
('boopathi', 'boopathi@gmail.com', 'boopathi'),
('', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
