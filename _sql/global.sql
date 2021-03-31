-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22 юли 2014 в 11:14
-- Версия на сървъра: 5.5.28
-- PHP Version: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `global`
--

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
(1, 'claire bella', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/Clairebella', 'http://www.clairebella.com/', 1, '1,2', '2014-06-22 09:42:39'),
(2, 'CanvasWorld', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/CanvasWorld', 'http://www.canvasworld.com/', 1, '1', '2014-06-22 09:42:39'),
(3, 'elibrium', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/Elibrium', 'http://www.elibrium.com/', 1, '1', '2014-06-22 09:44:25'),
(4, 'My Custom Case', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/MyCustomCase', 'http://www.mycustomcase.com/', 1, '1', '2014-06-22 09:44:25'),
(5, 'Photo Affections', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/PhotoAffections', 'http://www.photoaffections.com/', 1, '1,2,3', '2014-06-22 09:46:05'),
(6, 'simplytoimpress', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN,CentOS', 'Heavy work involving a legacy custom made framework. The work involving this project had both a remake and recreate functions added to it. Some of the features I worked on: A new custom login built with AJAX requests, new font selector in the designer tool, new alert and modal/popup features to replace the existing alert system, custom purchase email feedback in several languages, overall bug fixing and others', '/style/imgs/portfolio/SimplytoImpress', 'http://www.simplytoimpress.com/', 1, '1,2,3', '2014-06-22 09:46:05'),
(7, 'Winsby', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian and other OS', 'Their custom-made back-end framework dealt with many issues. It can be summarized as an ERP/BPM system with attached functionality. Statistically they had impressive numbers throughout their infrastructure and systems, like 1800+ DB tables going on, the dump of which was 5gb+ raw, at least 150 other company vendors and many employees in their system. The system, though, was very hard to maintain. It had workflow logic for all clients, workload distribution, ticketing system, survey system working together overall, with additional features e.g. a new stamp creation module and many other similar managerial modules ', '/style/imgs/portfolio/Winsby', 'http://www.winsbyinc.com/', 1, '1,2,3', '2014-06-22 09:47:33'),
(8, 'Shoppe Scene', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian', 'The project I worked on for Shoppe Scene was a panoramic viewer. They use http://ggnome.com/pano2vr#downloads this program and one similar to it to build a 3D panoramic viewer on their website The idea is that a person is redirected to the landing page of the 3D viewer, and it has links for all the "rooms" on it. There were 2 versions of the rooms, I worked on the deployment of the flash version, which has to work with their WebGL version if needed be', '/style/imgs/portfolio/ShoppeScene', 'http://www.interactivewalkthru.com/shoppescene/', 10, '1,2,3', '2014-06-22 09:47:33'),
(9, 'Realtech Services', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian', 'The work for this customer involved back-end support and module integration, code clean up, introduction and tweaking of a few modules, as well as addition and maintenance of a few modules for the front-end on display (news feed, blog, top active stories).', '/style/imgs/portfolio/RealTechServices', 'http://www.rtservices.net/', 1, '1,2,3', '2014-06-22 09:48:56'),
(10, 'Quest Fore', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian', 'The work for this customer involved 2 projects. One was the addition and maintenance of a few modules, including a (type) user module for their back-end. The second one involved a presentation using HTML5/CSS3 and some jQuery code to do the rotation and movement of the elements on the screen. The work for the second project had to be done together with a team from a different company that was working on one part of the presentation', '/style/imgs/portfolio/QuestFore', 'http://www.questfore.com/', 1, '1,2,3', '2014-06-22 09:48:56'),
(11, 'Encompass', 'CodeIgniter,PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian', 'The work for this client involved the creation and maintenance of a survey and data collection modules in the back-end system. This website is built with CodeIgniter', '/style/imgs/portfolio/Encompass', 'http://www.encompassinsurance.com/', 1, '1,2,3', '2014-06-22 09:49:28'),
(12, 'Cobit 5', 'CodeIgniter,PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian', 'The work for Cobit 5 involved installation and maintenance of a few modules in the back-end system. This website is built with CodeIgniter', '/style/imgs/portfolio/Cobit5', 'http://www.isaca.org/COBIT/Pages/Product-Family.aspx', 1, '1,2,3', '2014-06-22 09:49:28'),
(13, 'Civic Solar', 'PHP,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian,Zabbix', 'The tasks for Civic Solar involved the installation, maintenance and support of the monitoring system of choice: http://www.zabbix.com/ . This was a really interesting task, as it involved the custom installation of the tool on both a test and live servers, the addition and creation of widgets for the tool to monitor specific parts of the server, as well as some AWK and shell scripting', '/style/imgs/portfolio/CivicSolar', 'http://www.civicsolar.com/', 1, '1,2,3', '2014-06-22 09:51:07'),
(14, 'Net1', 'Perl,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian Squeeze', 'A Bulgarian internet provider using a custom ERP/BPM framework solution written in Perl. I had never programmed in Perl before this job, and it took me 2 weeks to get accustomed to it. After the initial learning period I worked on this project and created a few of the modules that had to do with IP/router and device management', '/style/imgs/portfolio/net1', 'http://net1.bg/', 1, '1,2,3', '2014-06-22 09:51:07'),
(15, 'Unipek', 'Perl,MySQL,JS/jQuery,CSS,HTML,SVN/GIT,Debian Squeeze', 'A Bulgarian pastry/bakery company that uses a custom ERP/BPM framework solution written in Perl. I worked on the installation and maintainance of a few modules for them. As an additional project I worked on the creation of a custom built UI for a tablet/handheld to serve as a replacement of a typical cash', '/style/imgs/portfolio/Unipek', 'http://www.unipek.com/', 1, '1,2,3', '2014-06-22 09:51:39');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
