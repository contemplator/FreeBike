-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- 主機: localhost:3306
-- 產生時間： 2014 年 06 月 09 日 08:36
-- 伺服器版本: 5.5.34
-- PHP 版本： 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `freebike`
--

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `d_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `comTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `likes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 資料表的匯出資料 `comment`
--

INSERT INTO `comment` (`id`, `d_id`, `user`, `content`, `comTime`, `likes`) VALUES
(1, 1, 'Vera', '肉淋，用淋的看來肉真的很多!', '2014-05-25 08:50:11', 0),
(2, 1, 'Leo', 'hihi', '2014-06-04 18:46:24', 0),
(3, 2, 'asd', 'asf', '2014-06-10 16:00:00', 0),
(4, 1, 'asdf', 'gsadgasg', '2014-06-04 19:01:27', 0),
(13, 12, 'Leo', 'asdf', '2014-06-04 20:57:05', 0),
(14, 12, 'Guest', 'adf', '2014-06-04 20:58:30', 0),
(15, 12, 'Ann', 'asdf', '2014-06-04 20:59:35', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `sharetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `click` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 資料表的匯出資料 `photo`
--

INSERT INTO `photo` (`id`, `name`, `description`, `sharetime`, `click`) VALUES
(1, 'Desert.jpg', '', '2014-06-08 16:00:00', 0),
(2, 'Chrysanthemum.jpg', '', '2014-06-08 16:00:00', 0),
(3, 'Lighthouse.jpg', '', '2014-06-08 16:00:00', 0),
(4, 'Lighthouse.jpg', '', '2014-06-08 16:00:00', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `posttime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  `photoUrl` varchar(200) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 資料表的匯出資料 `review`
--

INSERT INTO `review` (`id`, `user`, `posttime`, `content`, `photoUrl`, `likes`) VALUES
(1, 'Leo Lin', '2014-05-25 08:32:55', 'test\r\ntest', 'test.jpg', 0),
(2, 'Leo Lin', '2014-05-25 15:02:40', 'HI!!*#()*#', '', 0),
(3, 'Leo', '2014-05-25 15:31:18', 'hihi', '', 0),
(4, 'Jenny', '2014-05-25 15:32:59', 'I love guys!', '', 0),
(6, 'Test', '2014-05-25 15:35:18', 'Test', '', 0),
(8, 'edit time', '2014-05-25 15:43:45', 'edit time', '', 0),
(9, 'hoho', '2014-05-25 16:09:23', 'hoho', '', 0),
(10, 'jdjdj', '2014-05-25 16:11:16', 'Dkdhdnkxxk', '', 0),
(11, 'jdjdhdn', '2014-05-25 16:11:56', 'Dkdhdnkxxk', '', 0),
(12, 'Leo', '2014-06-04 18:16:53', 'jiji\r\nasdf', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videoUrl` varchar(200) NOT NULL,
  `imgUrl` varchar(200) NOT NULL,
  `updateDate` date NOT NULL,
  `updateUser` varchar(50) NOT NULL,
  `popular` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 資料表的匯出資料 `video`
--

INSERT INTO `video` (`id`, `videoUrl`, `imgUrl`, `updateDate`, `updateUser`, `popular`) VALUES
(2, 'U6avQPy643k', 'U6avQPy643k', '2014-05-25', 'Leo Lin', 0),
(3, 'yf_f5KTztPI', 'yf_f5KTztPI', '2014-05-25', 'Leo Lin', 0),
(4, '_B5PqpQuVtg', '_B5PqpQuVtg', '2014-05-20', 'Michelle', 3),
(5, '_B5PqpQuVtg', '_B5PqpQuVtg', '2014-05-21', 'Leo Lin', 5),
(8, 'cFaKGS-kO8c', 'cFaKGS-kO8c', '2014-06-10', 'Leo', 0),
(9, 'cFaKGS-kO8c', 'cFaKGS-kO8c', '2014-06-05', 'Leo', 0),
(10, 'Ci8welIUNrQ', 'Ci8welIUNrQ', '2014-06-05', 'Vera', 0),
(11, 'BvYfoz8zR2s', 'BvYfoz8zR2s', '2014-06-05', 'Jenny', 0),
(12, 'lz0tYXzkOiI', 'lz0tYXzkOiI', '2014-06-05', ' Naz Lai', 100);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
