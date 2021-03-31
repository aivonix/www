-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22 юли 2014 в 11:16
-- Версия на сървъра: 5.5.28
-- PHP Version: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hearthstone`
--

-- --------------------------------------------------------

--
-- Структура на таблица `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `quality` varchar(100) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `race` varchar(100) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  `cost` smallint(2) DEFAULT NULL,
  `attack` smallint(2) DEFAULT NULL,
  `health` smallint(2) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `temp` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `players` varchar(100) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `history_id` int(11) DEFAULT NULL,
  `finished` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `games_actions`
--

CREATE TABLE IF NOT EXISTS `games_actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `games_queue`
--

CREATE TABLE IF NOT EXISTS `games_queue` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player1` smallint(6) DEFAULT NULL,
  `player2` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `games_queue`
--

INSERT INTO `games_queue` (`id`, `player1`, `player2`) VALUES
(3, 3, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `turn` smallint(6) DEFAULT '0',
  `action` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `paintball`
--

CREATE TABLE IF NOT EXISTS `paintball` (
  `int` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateRegistered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hash` varchar(100) NOT NULL,
  `registered` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`int`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Схема на данните от таблица `paintball`
--

INSERT INTO `paintball` (`int`, `name`, `email`, `dateRegistered`, `hash`, `registered`) VALUES
(1, 'Adrian Daudov', 'adrian.d@processflows.co.uk', '2014-06-03 08:18:03', '3216', 0),
(2, 'Alan Ivanov', 'alan.i@processflows.co.uk', '2014-06-03 08:18:03', '7869', 0),
(3, 'Alex Grivekov', 'alex.g@processflows.co.uk', '2014-06-03 08:18:03', '7893', 0),
(4, 'Alex Naydenov', 'alex.n@processflows.co.uk', '2014-06-03 08:18:03', '1980', 0),
(5, 'Alex Pehlev', 'alex.p@processflows.co.uk', '2014-06-03 12:19:38', '8350', 1),
(6, 'Ana Obbova', 'ana.o@processflows.co.uk', '2014-06-03 08:18:03', '6622', 0),
(7, 'Andy Ivanov', 'andy.i@processflows.co.uk', '2014-06-03 08:18:03', '3900', 0),
(8, 'Billy Dunchev', 'billy.d@processflows.co.uk', '2014-06-03 08:18:03', '0184', 0),
(9, 'Bobby Boychev', 'bobby.b@processflows.co.uk', '2014-06-03 08:18:03', '3000', 0),
(10, 'Bobby Ivanov', 'bobby.i@processflows.co.uk', '2014-06-03 08:18:03', '9606', 0),
(11, 'Bobby Markova', 'bobby.m@processflows.co.uk', '2014-06-03 08:18:03', '5906', 0),
(12, 'Borislav Nikitov', 'borislav.n@processflows.co.uk', '2014-06-03 08:18:03', '9868', 0),
(13, 'Brian Ninchev', 'brian.n@processflows.co.uk', '2014-06-03 08:18:03', '1198', 0),
(14, 'Chris Georgiev', 'chris.g@processflows.co.uk', '2014-06-03 08:18:03', '8211', 0),
(15, 'Damian Hristov', 'damian.h@processflows.co.uk', '2014-06-03 08:18:03', '2122', 0),
(16, 'Dani Danailova', 'dani@processflows.co.uk', '2014-06-03 08:18:03', '2166', 0),
(17, 'Danielle Kidwell', 'danielle.k@processflows.co.uk', '2014-06-03 08:18:03', '2771', 0),
(18, 'Debbie Stoeva', 'debbie.s@processflows.co.uk', '2014-06-03 08:18:03', '4879', 0),
(19, 'Desi Boncheva', 'desi.b@processflows.co.uk', '2014-06-03 08:18:03', '7867', 0),
(20, 'Diana Alexandrova', 'diana.a@processflows.co.uk', '2014-06-03 08:18:03', '6258', 0),
(21, 'Diana Hinova', 'diana.h@processflows.co.uk', '2014-06-03 08:18:03', '4462', 0),
(22, 'Dillan Vassilev', 'dillan.v@processflows.co.uk', '2014-06-03 08:18:03', '6848', 0),
(23, 'Dima Dimitrova', 'dima.d@processflows.co.uk', '2014-06-03 08:18:03', '0712', 0),
(24, 'Donika Tankovska', 'donika.t@processflows.co.uk', '2014-06-03 08:18:03', '8891', 0),
(25, 'Elen Galova', 'elen.g@processflows.co.uk', '2014-06-03 08:18:03', '5720', 0),
(26, 'George Aleksiev', 'george.a@processflows.co.uk', '2014-06-03 08:18:03', '5092', 0),
(27, 'George Alexandrov', 'george.alex@processflows.co.uk', '2014-06-03 08:18:03', '8595', 0),
(28, 'George Kotsev', 'george.k@processflows.co.uk', '2014-06-03 08:18:03', '8532', 0),
(29, 'Glen Petkov', 'glen.p@processflows.co.uk', '2014-06-03 08:18:03', '9056', 0),
(30, 'Graham Reddie', 'greddie@processflows.co.uk', '2014-06-03 08:18:03', '8959', 0),
(31, 'Ian Iliev', 'ian.i@processflows.co.uk', '2014-06-03 08:18:03', '7625', 0),
(32, 'Ian Stefanov', 'ian.s@processflows.co.uk', '2014-06-03 08:18:03', '4160', 0),
(33, 'Irena Kostova', 'irena.k@processflows.co.uk', '2014-06-03 08:18:03', '8904', 0),
(34, 'Irene Georgieva', 'irene@processflows.co.uk', '2014-06-03 08:18:03', '9067', 0),
(35, 'Iva Pencheva', 'iva@processflows.co.uk', '2014-06-03 08:18:03', '6624', 0),
(36, 'Ivo Bachkov', 'ivo.b@processflows.co.uk', '2014-06-03 08:18:03', '2672', 0),
(37, 'Ivo Gradinarov', 'ivo.g@processflows.co.uk', '2014-06-03 08:18:03', '7286', 0),
(38, 'Ivy Zlateva', 'ivy.z@processflows.co.uk', '2014-06-03 08:18:03', '2359', 0),
(39, 'James Hristov', 'james.h@processflows.co.uk', '2014-06-03 08:18:03', '0755', 0),
(40, 'Jason Kolev', 'jason.k@processflows.co.uk', '2014-06-03 08:18:03', '9267', 0),
(41, 'Javiera Canales', 'javiera.c@processflows.co.uk', '2014-06-03 08:18:03', '1610', 0),
(42, 'Jenny Miteva', 'emiteva@processflows.co.uk', '2014-06-03 08:18:03', '7883', 0),
(43, 'Jim Koev', 'jim.k@processflows.co.uk', '2014-06-03 08:18:03', '5177', 0),
(44, 'Joanna Robova', 'joanna.r@processflows.co.uk', '2014-06-03 08:18:03', '7594', 0),
(45, 'Joe Mladenovski', 'joe.m@processflows.co.uk', '2014-06-03 08:18:03', '8810', 0),
(46, 'John Kadiyski', 'john.k@processflows.co.uk', '2014-06-03 08:18:03', '2692', 0),
(47, 'Jorge Zhelyazkov', 'jorge.z@processflows.co.uk', '2014-06-03 08:18:03', '3472', 0),
(48, 'Katie Atanasova', 'katy@processflows.co.uk', '2014-06-03 08:18:03', '7308', 0),
(49, 'Klaudia Georgieva', 'klaudia.g@processflows.co.uk', '2014-06-03 08:18:03', '0287', 0),
(50, 'Kosio Kunev', 'kosio.k@processflows.co.uk', '2014-06-03 08:18:03', '1716', 0),
(51, 'Laure Bonnefoi', 'laure.b@processflows.co.uk', '2014-06-03 08:18:03', '8935', 0),
(52, 'Liz Murphy', 'elizabeth.m@processflows.co.uk', '2014-06-03 08:18:03', '4302', 0),
(53, 'Lyubo Tochev', 'lyubo.t@processflows.co.uk', '2014-06-03 08:18:03', '1123', 0),
(54, 'Maria Kaneva', 'maria.k@processflows.co.uk', '2014-06-03 08:18:03', '8252', 0),
(55, 'Mariana Petkova', 'mariana.p@processflows.co.uk', '2014-06-03 08:18:03', '7354', 0),
(56, 'Marina Zipkin', 'marina.z@processflows.co.uk', '2014-06-03 08:18:03', '7538', 0),
(57, 'Mariya Stoyanova', 'mariya.s@processflows.co.uk', '2014-06-03 08:18:03', '8169', 0),
(58, 'Martin Popov', 'martin.p@processflows.co.uk', '2014-06-03 08:18:03', '9757', 0),
(59, 'Martin Stavrev', 'martin.s@processflows.co.uk', '2014-06-03 08:18:03', '6931', 0),
(60, 'Martina Georgieva', 'martina.g@processflows.co.uk', '2014-06-03 08:18:03', '3334', 0),
(61, 'Maya Ninova', 'maya.n@processflows.co.uk', '2014-06-03 08:18:03', '5674', 0),
(62, 'Michael Pyra', 'mpyra@processflows.co.uk', '2014-06-03 08:18:03', '8366', 0),
(63, 'Milena Stoilova', 'milena.s@processflows.co.uk', '2014-06-03 08:18:03', '7105', 0),
(64, 'Monica Dimitrova', 'monica.d@processflows.co.uk', '2014-06-03 08:18:03', '7345', 0),
(65, 'Natali Mladenova', 'natali.m@processflows.co.uk', '2014-06-03 08:18:03', '5054', 0),
(66, 'Nick Aleksandrov', 'nick.a@processflows.co.uk', '2014-06-03 08:18:03', '8125', 0),
(67, 'Nick Krustev', 'nick.k@processflows.co.uk', '2014-06-03 08:18:03', '1564', 0),
(68, 'Nick Tsenkov', 'nick.t@processflows.co.uk', '2014-06-03 08:18:03', '8984', 0),
(69, 'Nicky Parvanova', 'nicky.p@processflows.co.uk', '2014-06-03 08:18:03', '6685', 0),
(70, 'Nina Dimitrova', 'nina@processflows.co.uk', '2014-06-03 08:18:03', '0518', 0),
(71, 'Peter Kolev', 'peter.k@processflows.co.uk', '2014-06-03 08:18:03', '7234', 0),
(72, 'Petya Ivanova', 'petya.i@processflows.co.uk', '2014-06-03 08:18:03', '5801', 0),
(73, 'Philip Totin', 'philip.t@processflows.co.uk', '2014-06-03 08:18:03', '8567', 0),
(74, 'Rali Dzhambazova', 'rali.d@processflows.co.uk', '2014-06-03 08:18:03', '7828', 0),
(75, 'Richard Vincent', 'rvincent@processflows.co.uk', '2014-06-03 08:18:03', '3822', 0),
(76, 'Rob Avramov', 'rob.a@processflows.co.uk', '2014-06-03 08:18:03', '8174', 0),
(77, 'Rosita Kostova', 'rosita.k@processflows.co.uk', '2014-06-03 08:18:03', '7698', 0),
(78, 'Rosy Velikova', 'rosy.v@processflows.co.uk', '2014-06-03 08:18:03', '2169', 0),
(79, 'Simon Sinyovski', 'simon.s@processflows.co.uk', '2014-06-03 08:18:03', '3039', 0),
(80, 'Snow Bezus', 'sbezus@processflows.co.uk', '2014-06-03 08:18:03', '8416', 0),
(81, 'Stan Andonov', 'stan.a@processflows.co.uk', '2014-06-03 08:18:03', '9736', 0),
(82, 'Stan Chavdarov', 'stan.c@processflows.co.uk', '2014-06-03 08:18:03', '6650', 0),
(83, 'Steve Hinkov', 'steve.h@processflows.co.uk', '2014-06-03 08:18:03', '4732', 0),
(84, 'Sunny Kovacheva', 'skovacheva@processflows.co.uk', '2014-06-03 08:18:03', '9076', 0),
(85, 'Ted Hristov', 'ted.h@processflows.co.uk', '2014-06-03 08:18:03', '7759', 0),
(86, 'Teodora Nikolova', 'teodora.n@processflows.co.uk', '2014-06-03 08:18:03', '8181', 0),
(87, 'Tim Antonov', 'tim.a@processflows.co.uk', '2014-06-03 08:18:03', '1219', 0),
(88, 'Tod Vutov', 'tod.v@processflows.co.uk', '2014-06-03 08:18:03', '6265', 0),
(89, 'Tony Nikolov', 'tony@processflows.co.uk', '2014-06-03 08:18:03', '9026', 0),
(90, 'Vanessa Ternyanova', 'vannessa.t@processflows.co.uk', '2014-06-03 08:18:03', '6760', 0),
(91, 'Veli Boteva', 'veli.b@processflows.co.uk', '2014-06-03 08:18:03', '5934', 0),
(92, 'Velina Bozhkova', 'velina.b@processflows.co.uk', '2014-06-03 08:18:03', '0017', 0),
(93, 'Victor Dimitrov', 'victor.d@processflows.co.uk', '2014-06-03 08:18:03', '7675', 0),
(94, 'Vincent Ivanov', 'vincent.i@processflows.co.uk', '2014-06-03 08:18:03', '8579', 0),
(95, 'Violette Hristova', 'violette.h@processflows.co.uk', '2014-06-03 08:18:03', '7893', 0),
(96, 'Vladi Ninov', 'vninov@processflows.co.uk', '2014-06-03 08:18:03', '0590', 0);

-- --------------------------------------------------------

--
-- Структура на таблица `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `skills` text NOT NULL,
  `description` text NOT NULL,
  `imgs_path` varchar(255) NOT NULL,
  `href` varchar(100) NOT NULL,
  `likes` smallint(10) unsigned NOT NULL,
  `related` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Схема на данните от таблица `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `skills`, `description`, `imgs_path`, `href`, `likes`, `related`, `created`) VALUES
(1, 'claire bella', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/Clairebella', 'http://www.clairebella.com/', 1, '1,2', '2014-06-22 12:42:39'),
(2, 'CanvasWorld', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/CanvasWorld', 'http://www.canvasworld.com/', 1, '1', '2014-06-22 12:42:39'),
(3, 'elibrium', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/Elibrium', 'http://www.elibrium.com/', 1, '1', '2014-06-22 12:44:25'),
(4, 'My Custom Case', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/MyCustomCase', 'http://www.mycustomcase.com/', 1, '1', '2014-06-22 12:44:25'),
(5, 'Photo Affections', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/PhotoAffections', 'http://www.photoaffections.com/', 1, '1,2,3', '2014-06-22 12:46:05'),
(6, 'simplytoimpress', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/SimplytoImpress', 'http://www.simplytoimpress.com/', 1, '1,2,3', '2014-06-22 12:46:05'),
(7, 'Winsby', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian and other OS', 'Their custom-made back-end framework dealt with many issues. It can be summarized as an ERP/BPM system with attached functionality. Statistically they had impressive numbers throughout their infrastructure and systems, like 1800+ DB tables going on, the dump of which was 5gb+ raw, at least 150 other company vendors and many employees in their system. The system, though, was very hard to maintain. It had workflow logic for all clients, workload distribution, ticketing system, survey system working together overall, with additional features e.g. a new stamp creation module and many other similar managerial modules ', '/style/imgs/portfolio/Winsby', 'http://www.winsbyinc.com/', 1, '1,2,3', '2014-06-22 12:47:33'),
(8, 'Shoppe Scene', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian', 'The project I worked on for Shoppe Scene was a panoramic viewer. They use http://ggnome.com/pano2vr#downloads this program and one similar to it to build a 3D panoramic viewer on their website The idea is that a person is redirected to the landing page of the 3D viewer, and it has links for all the "rooms" on it. There were 2 versions of the rooms, I worked on the deployment of the flash version, which has to work with their WebGL version if needed be', '/style/imgs/portfolio/ShoppeScene', 'http://www.interactivewalkthru.com/shoppescene/', 10, '1,2,3', '2014-06-22 12:47:33'),
(9, 'Realtech Services', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian', 'The work for this customer involved back-end support and module integration, code clean up, introduction and tweaking of a few modules, as well as addition and maintenance of a few modules for the front-end on display (news feed, blog, top active stories).', '/style/imgs/portfolio/RealTechServices', 'http://www.rtservices.net/', 1, '1,2,3', '2014-06-22 12:48:56'),
(10, 'Quest Fore', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian', 'The work for this customer involved 2 projects. One was the addition and maintenance of a few modules, including a (type) user module for their back-end. The second one involved a presentation using HTML5/CSS3 and some jQuery code to do the rotation and movement of the elements on the screen. The work for the second project had to be done together with a team from a different company that was working on one part of the presentation', '/style/imgs/portfolio/QuestFore', 'http://www.questfore.com/', 1, '1,2,3', '2014-06-22 12:48:56'),
(11, 'Encompass', 'CodeIgniter,PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian', 'The work for this client involved the creation and maintenance of a survey and data collection modules in the back-end system. This website is built with CodeIgniter', '/style/imgs/portfolio/Encompass', 'http://www.encompassinsurance.com/', 1, '1,2,3', '2014-06-22 12:49:28'),
(12, 'Cobit 5', 'CodeIgniter,PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian', 'The work for Cobit 5 involved installation and maintenance of a few modules in the back-end system. This website is built with CodeIgniter', '/style/imgs/portfolio/Cobit5', 'http://www.isaca.org/COBIT/Pages/Product-Family.aspx', 1, '1,2,3', '2014-06-22 12:49:28'),
(13, 'Civic Solar', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian,Zabbix', 'The tasks for Civic Solar involved the installation, maintenance and support of the monitoring system of choice: http://www.zabbix.com/ . This was a really interesting task, as it involved the custom installation of the tool on both a test and live servers, the addition and creation of widgets for the tool to monitor specific parts of the server, as well as some AWK and shell scripting', '/style/imgs/portfolio/CivicSolar', 'http://www.civicsolar.com/', 1, '1,2,3', '2014-06-22 12:51:07'),
(14, 'Net1', 'Perl,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian Squeeze', 'A Bulgarian internet provider using a custom ERP/BPM framework solution written in Perl. I had never programmed in Perl before this job, and it took me 2 weeks to get accustomed to it. After the initial learning period I worked on this project and created a few of the modules that had to do with IP/router and device management', '/style/imgs/portfolio/net1', 'http://net1.bg/', 1, '1,2,3', '2014-06-22 12:51:07'),
(15, 'Unipek', 'Perl,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian Squeeze', 'A Bulgarian pastry/bakery company that uses a custom ERP/BPM framework solution written in Perl. I worked on the installation and maintainance of a few modules for them. As an additional project I worked on the creation of a custom built UI for a tablet/handheld to serve as a replacement of a typical cash', '/style/imgs/portfolio/Unipek', 'http://www.unipek.com/', 1, '1,2,3', '2014-06-22 12:51:39');

-- --------------------------------------------------------

--
-- Структура на таблица `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `goals` varchar(100) DEFAULT NULL,
  `progress` enum('default','started','working','finished') DEFAULT 'default',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `session`
--

INSERT INTO `session` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`, `user_id`) VALUES
('03051e524fa8a56acb8bdd009205a232', '69.58.178.59', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1398090302, '', NULL),
('03d5b124009fe163f6af300754bc9f40', '5.255.253.12', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 1398213518, '', NULL),
('03d5dcaa0d0f33d4f7137ad578292d5a', '74.52.245.146', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0', 1397920678, '', NULL),
('0627d62c40aa092bb7b560dfec409160', '95.111.101.189', 'curl/7.26.0', 1394158196, '', NULL),
('085b16db6d6e4c1bb2b2e11dd273a1b6', '50.57.68.14', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1392284066, '', NULL),
('0995cbbbd24dd321752981fc61cb7453', '66.249.76.174', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1396238329, '', NULL),
('122aacc7e1c912b88e90c0443d08fafa', '69.58.178.58', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1392937843, '', NULL),
('13e27c3d927d0e7e8c42047f014fc6ed', '66.249.73.176', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1395052716, '', NULL),
('21295b68ec1215e190d800bed7439a7e', '207.182.143.242', 'niki-bot', 1394093894, '', NULL),
('21a6cc76847ec25225b9ab06e2f3e35e', '66.249.76.178', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1397502564, '', NULL),
('2ba8e74bac2dc42f5cc823d11ba9d711', '212.50.23.69', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36', 1399542511, '', NULL),
('34531f9caceca682ac42bcb4e972cfa4', '66.249.66.100', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1392826070, '', NULL),
('350200a4d76d89df634598fdb1b156fc', '5.255.253.12', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 1396710383, '', NULL),
('3d3a5315fdfeee9075f591f8f7b810ba', '69.84.207.246', 'LSSRocketCrawler/1.0 LightspeedSystems', 1397339852, '', NULL),
('3dd1e2d24ef8b07949c52cc09798289f', '5.56.63.84', 'CATExplorador/1.0beta (sistemes at domini dot cat; http://domini.cat/catexplorador.html)', 1394551405, '', NULL),
('4c25a54ec8c406ce0aa3ae2327ab2af5', '5.56.63.84', 'CATExplorador/1.0beta (sistemes at domini dot cat; http://domini.cat/catexplorador.html)', 1394551406, '', NULL),
('4cd09b0ede8edb477bffc4f4139cdd90', '66.249.64.27', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1397536920, '', NULL),
('52bae497900168a92cfc57f18f8d22c3', '69.84.207.246', 'LSSRocketCrawler/1.0 LightspeedSystems', 1397339853, '', NULL),
('5f8b2b9e2dab29843cda1c10f07d3b1c', '195.91.224.113', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12', 1395653257, '', NULL),
('60ec6d8c7017e9ca5dfb04e5ca768f18', '66.249.64.27', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1398773734, '', NULL),
('66b7a3cf6180d6b1f321be49cc40bc3a', '54.202.181.79', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/25.0', 1394100723, '', NULL),
('761c0dee412875b2dc3f5f2d9f98c2e9', '5.255.253.12', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 1396720670, '', NULL),
('77b058ab06b5c080adf5dd96391e6126', '74.52.245.146', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0', 1393425491, '', NULL),
('78cdbfd938844038a4a22ea24f914661', '5.255.253.12', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 1396732761, '', NULL),
('7f299b37fd261d87d3142e9314f8b5b0', '74.52.245.146', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0', 1397920684, '', NULL),
('7f89e5c62f5a0dc84356767159517575', '69.58.178.59', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1394134970, '', NULL),
('81254badaea1e05f0e2341454ae33102', '69.58.178.59', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1398090309, '', NULL),
('85f77d058c5ef1155564a82a1147f52d', '50.57.64.198', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:14.0) Gecko/20100101 Firefox/14.0.1', 1398252633, '', NULL),
('90311a8280c32b1d9c0bcb3c8b7d353b', '69.58.178.58', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1392937835, '', NULL),
('9093529365c704953779ab01fbe981e8', '69.58.178.59', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1398090310, '', NULL),
('9278c9772e3997ba69d1175519db072e', '69.58.178.59', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1394134962, '', NULL),
('957986a30d218869fb43f657053e486d', '5.199.142.250', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; Win 9x 4.90)', 1399531895, '', NULL),
('95b6b64e77c270abff6d1a314b9d4415', '69.58.178.59', 'BlackBerry9000/4.6.0.167 Profile/MIDP-2.0 Configuration/CLDC-1.1 VendorID/102 ips-agent', 1394134972, '', NULL),
('9d65a1d0312736670775a5103391345c', '5.255.253.12', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 1394596155, '', NULL),
('a1e72d4893cfc2fb4f631a4a31f24bfb', '69.58.178.58', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1392937845, '', NULL),
('a33460496f47eba23423fa859eb0a3ff', '212.50.23.69', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', 1397125471, '', NULL),
('a3415e58daa80cc9c4b8746480b25713', '74.52.245.146', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.7.5) Gecko/20041107 Firefox/1.0', 1393425491, '', NULL),
('a37e9a0a5867d4bd1a9b2c4d1e1b04b6', '54.212.223.190', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/25.0', 1392743602, '', NULL),
('aeea760a5f48c858f4e467e33e8d0220', '66.249.64.242', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1398811551, '', NULL),
('b02b2521df6d0ed6bf3d4e4b051b73e6', '78.142.16.169', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 1396042414, '', NULL),
('bb9c2de3f4ea1e4ec31139641c3bdda6', '5.199.142.250', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98; Win 9x 4.90)', 1398339368, '', NULL),
('bd5673ce63acb8c4297fc2c4b8f2b1f8', '89.190.209.130', 'curl/7.26.0', 1394161962, '', NULL),
('c27af1b96da8f78a46913dad49bcce5b', '5.255.253.12', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 1394596160, '', NULL),
('c2bd5c15ce011ddcd36527d9c5c394ed', '69.58.178.58', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1392937842, '', NULL),
('ceb829ebc1946ec59fdf2c0af138db5e', '5.255.253.12', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 1396710386, '', NULL),
('d446b1d814645c1d9fda17ac79a600e8', '89.190.209.130', 'Mozilla/5.0 (compatible; MSIE 9.10; Windows NT 6.1; Trident/5.0)', 1394162669, '', NULL),
('d71e073fe6092d42e9e3966f061f8f87', '66.249.65.112', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1393780792, '', NULL),
('d72e962b462065787c9d8764226b1a49', '5.255.253.12', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 1398213520, '', NULL),
('dc8a4d1fb0feaf9360c01587d3bd1998', '66.249.66.100', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1392800851, '', NULL),
('e18306c2943d7ba17a4ee0030f54ce44', '66.249.65.48', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1395026154, '', NULL),
('e4953e998f80e79a9f680dc614f0496a', '69.58.178.59', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1398090300, '', NULL),
('e719b3fd9e90d2f71016c6fe3303f5fe', '212.50.23.69', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0', 1399892349, '', NULL),
('e8ed96e7c677cdf1ddab29140379b9fb', '69.58.178.59', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1394134960, '', NULL),
('e9707af8e6222efa0e1e48816edeb486', '69.58.178.58', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1392937833, '', NULL),
('f1936008a8e6bb5e6d8ab7541435b37a', '69.58.178.59', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1398090312, '', NULL),
('f57a2233d4a861ce135162810fa77999', '91.215.188.105', 'Opera/9.80 (Windows NT 6.1; WOW64; U; ru) Presto/2.10.289 Version/12.02', 1392002430, '', NULL),
('f7fc5280e31b2d74efdd40ed999bce68', '69.58.178.59', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:14.0; ips-agent) Gecko/20100101 Firefox/14.0.1', 1394134969, '', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `game_id` int(11) DEFAULT NULL COMMENT 'this is redundant, but for quick access',
  `p1_id` int(11) DEFAULT NULL,
  `p1_cards` varchar(100) DEFAULT NULL COMMENT 'opponent''s cards in json',
  `p1_hero_hp` tinyint(2) DEFAULT '30',
  `field_cards` varchar(100) DEFAULT NULL COMMENT 'played cards in json',
  `p2_id` int(11) DEFAULT NULL,
  `p2_cards` varchar(100) DEFAULT NULL COMMENT 'player''s cards in json',
  `p2_hero_hp` tinyint(2) DEFAULT '30',
  `turn` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `registered`) VALUES
(3, 'aivonix', '3821c62a8e794f35ab7309b09f25613e21481d0d', 'Nikolay', 'Aleksandrov', 'aivonix.home@gmail.com', '2013-12-04 17:14:27'),
(4, 'nnnn', '3821c62a8e794f35ab7309b09f25613e21481d0d', 'nn', 'nn', 'nn@dsa@das', '2013-12-04 17:14:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
