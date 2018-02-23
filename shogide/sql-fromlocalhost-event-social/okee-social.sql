-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2018 at 05:37 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okee-social`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_body` text NOT NULL,
  `posted_by` varchar(60) NOT NULL,
  `posted_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `removed` varchar(3) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_body`, `posted_by`, `posted_to`, `date_added`, `removed`, `post_id`) VALUES
(1, 'kkk', 'black_blackster', 'blue_bell', '2017-11-15 19:22:12', 'no', 306),
(2, 'oooo', 'black_blackster', 'blue_bell', '2017-11-15 19:27:50', 'no', 306),
(3, 'lll', 'black_blackster', 'blue_bell', '2017-11-15 20:44:47', 'no', 306),
(4, 'comment', 'black_blackster', 'blue_bell', '2017-11-16 17:00:36', 'no', 305),
(5, '', 'black_blackster', 'blue_bell', '2017-11-16 17:00:39', 'no', 305),
(6, '4th', 'black_blackster', 'blue_bell', '2017-11-16 17:00:51', 'no', 306),
(7, 'another', 'will_bennett', 'blue_bell', '2017-11-16 17:49:29', 'no', 305),
(8, 'first', 'will_bennett', 'blue_bell', '2017-11-16 17:49:56', 'no', 304),
(9, '', 'will_bennett', 'black_blackster', '2017-11-16 17:52:07', 'no', 297),
(10, 'commnt', 'will_bennett', 'black_blackster', '2017-11-20 14:07:43', 'no', 297),
(11, 'kkllllll', 'will_bennett', 'black_blackster', '2017-11-20 14:07:52', 'no', 297),
(12, '', 'will_bennett', 'black_blackster', '2017-11-20 14:07:54', 'no', 297),
(13, 'llll', 'will_bennett', 'black_blackster', '2017-11-20 14:07:56', 'no', 297),
(14, 'llll', 'will_bennett', 'black_blackster', '2017-11-20 14:08:01', 'no', 297),
(15, '', 'will_bennett', 'black_blackster', '2017-11-20 14:08:09', 'no', 297),
(16, '', 'will_bennett', 'black_blackster', '2017-11-20 14:08:09', 'no', 297),
(17, 'mmm', 'will_bennett', 'black_blackster', '2017-11-20 14:08:23', 'no', 297),
(18, 'cvvdff', 'will_bennett', 'ben_jones', '2017-11-30 17:39:03', 'no', 311),
(19, 'its a comment', 'will_bennett', 'ben_jones', '2017-12-18 18:24:49', 'no', 313),
(20, 'hold on', 'will_bennett', 'blue_bell', '2017-12-18 18:51:33', 'no', 319),
(21, '', 'will_bennett', 'blue_bell', '2017-12-18 18:52:32', 'no', 319),
(22, '', 'will_bennett', 'blue_bell', '2017-12-18 18:57:05', 'no', 319),
(23, '', 'will_bennett', 'blue_bell', '2017-12-18 18:57:06', 'no', 319),
(24, 'yyyy', 'will_bennett', 'blue_bell', '2017-12-19 13:00:42', 'no', 319),
(25, 'coooooo', 'will_bennett', 'will_bennett', '2017-12-19 14:02:48', 'no', 322),
(26, 'pppp', 'bark_dog', 'bark_dog', '2017-12-21 16:49:51', 'no', 343),
(27, 'jjjj', 'bark_dog', 'billy_goat', '2017-12-21 16:50:01', 'no', 342),
(28, 'bbbb', 'will_bennett', 'will_bennett', '2018-01-05 10:56:24', 'no', 347),
(29, 'jjjjj', 'will_bennett', 'will_bennett', '2018-01-05 10:56:32', 'no', 347),
(30, 'mmmm', 'billy_goat', 'billy_goat', '2018-01-05 13:46:48', 'no', 351),
(31, 'dfsdf', 'billy_goat', 'greg_goo', '2018-01-06 01:03:00', 'no', 372),
(32, 'llloollll', 'billy_goat', 'greg_goo', '2018-01-06 01:11:10', 'no', 372),
(33, 'jjj', 'billy_goat', 'billy_goat', '2018-01-08 17:30:33', 'no', 377),
(34, 'ko', 'billy_goat', 'greg_goo', '2018-01-08 17:30:43', 'no', 375),
(35, 'kkkk', 'billy_goat', 'will_bennett', '2018-01-09 16:51:06', 'no', 380),
(36, 'hhh', 'crank_call', 'billy_goat', '2018-01-10 15:03:15', 'no', 386),
(37, 'my comment', 'crank_call', 'will_bennett', '2018-01-15 14:34:11', 'no', 389);

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE `friend_requests` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`, `image`) VALUES
(327, 'post1', 'mick_jag', 'none', '2017-12-21 15:22:52', 'no', 'no', 0, 'assets/images/posts/5a3bd1ccb81e920170703_073502.jpg'),
(328, 'post2', 'billy_goat', 'none', '2017-12-21 15:28:17', 'no', 'no', 0, 'assets/images/posts/5a3bd31185f3d20170712_104244.jpg'),
(329, 'll', 'billy_goat', 'none', '2017-12-21 16:19:56', 'no', 'no', 0, 'assets/images/posts/5a3bdf2c3aa2620170624_140930.jpg'),
(330, '', 'billy_goat', 'none', '2017-12-21 16:20:18', 'no', 'no', 0, 'assets/images/posts/5a3bdf42a19b620170724_183905.jpg'),
(331, '', 'billy_goat', 'none', '2017-12-21 16:24:23', 'no', 'no', 0, 'assets/images/posts/5a3be0375f42620170624_140930.jpg'),
(332, '', 'billy_goat', 'none', '2017-12-21 16:24:34', 'no', 'no', 0, 'assets/images/posts/5a3be042aaa9220170715_084735.jpg'),
(333, '', 'billy_goat', 'none', '2017-12-21 16:24:40', 'no', 'no', 0, 'assets/images/posts/5a3be048808b420170716_204847.jpg'),
(334, '', 'billy_goat', 'none', '2017-12-21 16:24:52', 'no', 'no', 0, 'assets/images/posts/5a3be054c017920170727_145638.jpg'),
(335, '', 'billy_goat', 'none', '2017-12-21 16:25:07', 'no', 'no', 0, 'assets/images/posts/5a3be0635c2e120170814_163701.jpg'),
(336, '', 'billy_goat', 'none', '2017-12-21 16:25:18', 'no', 'no', 0, 'assets/images/posts/5a3be06e8416c20170721_182035.jpg'),
(337, '', 'billy_goat', 'none', '2017-12-21 16:25:38', 'no', 'no', 0, 'assets/images/posts/5a3be082cd9d820170715_085357.jpg'),
(338, '', 'bark_dog', 'none', '2017-12-21 16:30:59', 'no', 'no', 0, 'assets/images/posts/5a3be1c38058f20170611_145630.jpg'),
(339, '', 'bark_dog', 'none', '2017-12-21 16:31:05', 'no', 'no', 0, 'assets/images/posts/5a3be1c9d725820170611_145630.jpg'),
(340, '', 'bark_dog', 'none', '2017-12-21 16:31:10', 'no', 'yes', 0, 'assets/images/posts/5a3be1ce1a03920170611_145630.jpg'),
(341, '', 'billy_goat', 'none', '2017-12-21 16:31:38', 'no', 'no', 0, 'assets/images/posts/5a3be1eac6d1a20170624_140930.jpg'),
(342, '', 'billy_goat', 'none', '2017-12-21 16:31:58', 'no', 'no', 0, 'assets/images/posts/5a3be1fe117eb20170703_073502.jpg'),
(343, '', 'bark_dog', 'none', '2017-12-21 16:49:43', 'no', 'yes', 0, 'assets/images/posts/5a3be6279345120170611_145630.jpg'),
(344, 'blue blue', 'blue_bell', 'none', '2018-01-03 14:05:54', 'no', 'no', 0, ''),
(345, '', 'bark_dog', 'none', '2018-01-05 10:41:50', 'no', 'yes', 0, 'assets/images/posts/5a4f566e42b5f20170611_145639.jpg'),
(346, '', 'blue_bell', 'none', '2018-01-05 10:52:46', 'no', 'no', 0, 'assets/images/posts/5a4f58fe0225b20170703_073502.jpg'),
(347, 'my photo', 'will_bennett', 'none', '2018-01-05 10:56:16', 'no', 'no', 0, 'assets/images/posts/5a4f59d08c13820170616_104717.jpg'),
(348, 'mmmm', 'blue_bell', 'none', '2018-01-05 10:59:38', 'no', 'no', 0, ''),
(349, 'poppp', 'blue_bell', 'none', '2018-01-05 10:59:45', 'no', 'no', 0, ''),
(350, '', 'billy_goat', 'none', '2018-01-05 11:01:14', 'no', 'no', 0, 'assets/images/posts/5a4f5afaf1f1520170624_140930.jpg'),
(351, 'goat', 'billy_goat', 'none', '2018-01-05 13:46:17', 'no', 'no', 0, ''),
(352, 'soccer', 'billy_goat', 'none', '2018-01-05 13:47:14', 'no', 'no', 0, 'assets/images/posts/5a4f81e20b39e20170611_145637.jpg'),
(353, 'dog', 'bark_dog', 'none', '2018-01-05 13:52:58', 'no', 'no', 0, 'assets/images/posts/5a4f833a0174120170612_075656.jpg'),
(354, 'wb', 'will_bennett', 'none', '2018-01-05 13:53:38', 'no', 'yes', 0, 'assets/images/posts/5a4f83621fb4320170616_101715.jpg'),
(355, 'loppy', 'billy_goat', 'none', '2018-01-05 13:56:15', 'no', 'yes', 0, ''),
(356, '1', 'billy_goat', 'none', '2018-01-05 13:56:28', 'no', 'no', 0, ''),
(357, '2', 'billy_goat', 'none', '2018-01-05 13:56:30', 'no', 'no', 0, ''),
(358, '3', 'billy_goat', 'none', '2018-01-05 13:56:33', 'no', 'no', 0, ''),
(359, 'event-webapp works', 'will_bennett', 'none', '2018-01-05 13:57:39', 'no', 'yes', 0, ''),
(360, '', 'will_bennett', 'none', '2018-01-05 15:58:36', 'no', 'no', 0, 'assets/images/posts/5a4fa0acc7f6b20170616_135042.jpg'),
(361, '', 'will_bennett', 'none', '2018-01-05 15:59:12', 'no', 'no', 0, 'assets/images/posts/5a4fa0d06596a20170618_114108.jpg'),
(362, '', 'will_bennett', 'none', '2018-01-05 16:15:16', 'no', 'no', 0, 'assets/images/posts/5a4fa49469af920170611_145354.jpg'),
(363, '', 'will_bennett', 'none', '2018-01-05 16:15:25', 'no', 'no', 0, 'assets/images/posts/5a4fa49d4ff2520170616_104327.jpg'),
(364, '', 'will_bennett', 'none', '2018-01-05 16:16:16', 'no', 'no', 0, 'assets/images/posts/5a4fa4d0a6a2420170616_104324.jpg'),
(365, '', 'will_bennett', 'none', '2018-01-05 16:19:31', 'no', 'yes', 0, 'assets/images/posts/5a4fa5935a8b020170814_163658.jpg'),
(366, '', 'will_bennett', 'none', '2018-01-05 18:21:47', 'no', 'no', 0, 'assets/images/posts/5a4fc23bc936720170616_081247.jpg'),
(367, '', 'will_bennett', 'none', '2018-01-05 18:22:00', 'no', 'no', 0, 'assets/images/posts/5a4fc24804eb120170612_075713.jpg'),
(368, '', 'billy_goat', 'none', '2018-01-05 18:23:57', 'no', 'no', 0, 'assets/images/posts/5a4fc2bd6169220170612_194143.jpg'),
(369, '', 'will_bennett', 'none', '2018-01-05 18:24:55', 'no', 'no', 0, 'assets/images/posts/5a4fc2f76096d20170703_073502.jpg'),
(370, '', 'will_bennett', 'none', '2018-01-05 18:25:40', 'no', 'no', 0, 'assets/images/posts/5a4fc32482a5e20170715_084735.jpg'),
(371, '', 'greg_goo', 'none', '2018-01-06 00:48:15', 'no', 'no', 0, 'assets/images/posts/5a501ccf0fa9120170624_140930.jpg'),
(372, '', 'greg_goo', 'none', '2018-01-06 00:53:32', 'no', 'no', 0, 'assets/images/posts/5a501e0ca16c320170806_145533.jpg'),
(373, 'mmmm', 'greg_goo', 'none', '2018-01-06 00:55:54', 'no', 'no', 0, ''),
(374, '', 'greg_goo', 'none', '2018-01-06 01:05:45', 'no', 'no', 0, 'assets/images/posts/5a5020e9b9ebb20170703_073502.jpg'),
(375, '', 'greg_goo', 'none', '2018-01-06 01:06:05', 'no', 'no', 0, 'assets/images/posts/5a5020fd0a16120170724_183859.jpg'),
(376, '', 'greg_goo', 'none', '2018-01-06 01:16:53', 'no', 'no', 0, 'assets/images/posts/5a502385a625c20170715_085357.jpg'),
(377, 'go goat', 'billy_goat', 'none', '2018-01-08 17:22:49', 'no', 'yes', 0, 'assets/images/posts/5a53a8e8e300820170703_084740.jpg'),
(378, '', 'billy_goat', 'none', '2018-01-08 17:25:21', 'no', 'no', 0, 'assets/images/posts/5a53a9819312d20170715_084740.jpg'),
(379, 'ffef', 'billy_goat', 'none', '2018-01-08 17:33:36', 'no', 'yes', 0, 'assets/images/posts/5a53ab70ed80220170712_104244.jpg'),
(380, '', 'will_bennett', 'none', '2018-01-09 16:50:26', 'no', 'no', 0, 'assets/images/posts/5a54f2d256aca20170509_183601.jpg'),
(381, '', 'crank_call', 'none', '2018-01-09 17:02:57', 'no', 'no', 0, 'assets/images/posts/5a54f5c173cc220170604_105045.jpg'),
(382, 'mmnnn', 'blue_bell', 'none', '2018-01-09 17:24:32', 'no', 'no', 0, 'assets/images/posts/5a54fad081ff820170604_092112.jpg'),
(383, 'crank', 'crank_call', 'none', '2018-01-09 17:39:07', 'no', 'no', 0, 'assets/images/posts/5a54fe3ba392220170509_183725.jpg'),
(384, '', 'billy_goat', 'none', '2018-01-09 19:11:51', 'no', 'no', 0, 'assets/images/posts/5a5513f79796220170611_105438.jpg'),
(385, '', 'billy_goat', 'none', '2018-01-09 19:12:48', 'no', 'no', 0, 'assets/images/posts/5a5514300f62520170612_075656.jpg'),
(386, '', 'billy_goat', 'none', '2018-01-09 19:13:02', 'no', 'yes', 0, 'assets/images/posts/5a55143e7b3f420170611_085931.jpg'),
(387, '', 'will_bennett', 'none', '2018-01-10 20:11:27', 'no', 'no', 0, 'assets/images/posts/5a56736f9577f20170611_071846.jpg'),
(388, '', 'will_bennett', 'none', '2018-01-11 00:49:24', 'no', 'no', 0, 'assets/images/posts/5a56b4944712820170611_105438.jpg'),
(389, 'landscape', 'will_bennett', 'none', '2018-01-12 18:56:14', 'no', 'yes', 0, 'assets/images/posts/5a5904ce3a3f820170611_145708.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

CREATE TABLE `trends` (
  `title` varchar(50) NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trends`
--

INSERT INTO `trends` (`title`, `hits`) VALUES
('1', 1),
('1010', 1),
('1112', 1),
('1113', 1),
('1114', 9),
('2', 1),
('3', 1),
('Bbbb', 1),
('Ben', 1),
('Black', 1),
('Blue', 4),
('Cccc', 1),
('Crank', 1),
('Deleted', 1),
('Dog', 1),
('Eventwebapp', 1),
('Ff', 1),
('Ffef', 1),
('Ffffff', 13),
('Goat', 1),
('Gogogo', 1),
('Hhbn', 1),
('Jon', 1),
('Kjnbvcxaqwedxcvghn', 2),
('Kk', 1),
('Kkmmk', 1),
('L', 2),
('Landscape', 1),
('Ll', 2),
('Llllll', 1),
('Loppy', 1),
('Main', 1),
('Mm', 1),
('Mmm', 1),
('Mmmm', 4),
('Mmnnn', 1),
('Mnmmbvuiio', 3),
('Ned', 1),
('Nn', 1),
('Nnn', 6),
('Ok', 4),
('Oo', 5),
('Op', 5),
('P1', 1),
('P2', 1),
('P3', 1),
('P4', 1),
('P5', 1),
('P6', 1),
('P7', 1),
('Page', 1),
('Photo', 2),
('Poas', 1),
('Podddddd', 1),
('Poiuyt', 1),
('Poppp', 2),
('Post', 10),
('Post1', 1),
('Post2', 1),
('Postingbr', 1),
('Pppp', 1),
('Qwaszx', 1),
('Red', 3),
('Resdter', 1),
('Secons', 7),
('Soccer', 1),
('Test', 5),
('Ttt', 24),
('Tuesday', 2),
('User', 1),
('Wb', 2),
('Wednesday', 1),
('Wertfds909', 14),
('Ww', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`) VALUES
(15, 'William', 'Bennett', 'will_bennett', 'wbnntt@gmail.com', '376c43878878ac04e05946ec1dd7a55f', '2017-09-13', 'assets/images/profile_pics/will_bennett57a8302aa98ebfcc0f9121f41f4961f2n.jpeg', 63, 4, 'no', ','),
(16, 'Jonn', 'James', 'jon_james', 'jon@gmail.com', 'c64191e16b8edc341d91c8769db983af', '2017-09-13', 'assets/images/profile_pics/jon_james7bae4ac174b359fd0b94d68994771089n.jpeg', 3, 0, 'no', ','),
(24, 'BlueBlue', 'Bell', 'blue_bell', 'blue@gmail.com', '376c43878878ac04e05946ec1dd7a55f', '2017-10-19', 'assets/images/profile_pics/blue_bell968ac9c38a8a8b4c5d92946f90ea9ab4n.jpeg', 18, 19, 'no', ','),
(40, 'Billy', 'Goat', 'billy_goat', 'billy@gmail.com', '376c43878878ac04e05946ec1dd7a55f', '2017-12-21', 'assets/images/profile_pics/billy_goatd4fda26e84d5f6b77657b5f297b14089n.jpeg', 26, 0, 'no', ','),
(41, 'Mark', 'Man', 'mark_man', 'mark@gmail.com', '376c43878878ac04e05946ec1dd7a55f', '2017-12-21', 'assets/images/profile_pics/defaults/head_deep_blue.png', 0, 0, 'no', ','),
(42, 'Mick', 'Jag', 'mick_jag', 'mick@gmail.com', '376c43878878ac04e05946ec1dd7a55f', '2017-12-21', 'assets/images/profile_pics/defaults/head_emerald.png', 1, 0, 'no', ','),
(43, 'Bark', 'Dog', 'bark_dog', 'dog@gmail.com', '376c43878878ac04e05946ec1dd7a55f', '2017-12-21', 'assets/images/profile_pics/bark_dog2e1b82b678348ecb86f2298abdf85b73n.jpeg', 6, 0, 'no', ','),
(44, 'Greg', 'Goo', 'greg_goo', 'greg@gmail.com', '376c43878878ac04e05946ec1dd7a55f', '2018-01-05', 'assets/images/profile_pics/defaults/head_deep_blue.png', 7, 0, 'no', ','),
(45, 'Darth', 'Vader', 'darth_vader', 'darth@gmail.com', '376c43878878ac04e05946ec1dd7a55f', '2018-01-09', 'assets/images/profile_pics/defaults/head_deep_blue.png', 0, 0, 'no', ','),
(46, 'Crank', 'Call', 'crank_call', 'crank@gmail.com', '376c43878878ac04e05946ec1dd7a55f', '2018-01-09', 'assets/images/profile_pics/crank_call40fc97b5d7b057a260abe55e0afcc6b0n.jpeg', 2, 0, 'no', ',');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `trends`
--
ALTER TABLE `trends`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `friend_requests`
--
ALTER TABLE `friend_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
