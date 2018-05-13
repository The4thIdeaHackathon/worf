-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 18-05-13 16:18 
-- 서버 버전: 5.1.41
-- PHP 버전: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 데이터베이스: `worf`
--
CREATE DATABASE `worf` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `worf`;

-- --------------------------------------------------------

--
-- 테이블 구조 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `src_id` int(11) DEFAULT NULL,
  `dest_id` int(11) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- 테이블의 덤프 데이터 `message`
--

INSERT INTO `message` (`no`, `src_id`, `dest_id`, `text`, `time`) VALUES
(1, 1, 2, 'hi!', '2016-05-21'),
(2, 1, 2, '123', '2018-05-11 20:59:10'),
(3, 1, 2, '123', '2018-05-11 21:04:12'),
(4, 1, 2, 'dsgdfgsdg', '2018-05-12 07:52:58'),
(5, 1, 2, 'dsgdfgsdg', '2018-05-12 07:53:35'),
(6, 2, 1, '', '2018-05-12 07:59:22'),
(7, 2, 1, 'sdgsdfg', '2018-05-12 07:59:23'),
(8, 2, 1, 'sdgsdfg', '2018-05-12 07:59:24'),
(9, 2, 5, 'sdfgsdg', '2018-05-12 07:59:31'),
(10, 2, 5, 'sdfgsdg', '2018-05-12 07:59:31'),
(11, 2, 5, 'sdfgsdg', '2018-05-12 07:59:31'),
(12, 2, 5, 'sdfgsdg', '2018-05-12 07:59:32'),
(13, 2, 5, 'sdfg', '2018-05-12 08:13:53'),
(14, 2, 5, 'sdfg', '2018-05-12 08:14:50'),
(15, 2, 5, 'sdfg', '2018-05-12 08:14:53'),
(16, 5, 2, 'sdfgsdfg', '2018-05-12 08:16:06'),
(17, 5, 2, 'sdfgsdgfsg', '2018-05-12 08:18:41'),
(18, 2, 5, 'sdfgdsfg', '2018-05-12 08:18:44'),
(19, 6, 1, '%ED%95%98%EC%9D%B4%ED%95%98%EC%9D%B4', '2018-05-12 08:30:16'),
(20, 6, 1, '%EB%82%98%EB%8F%84%ED%95%98%EC%9D%B4', '2018-05-12 09:44:59'),
(21, 6, 2, '%EB%B0%A9%EA%B0%80%EC%9B%8C%EC%9A%94', '2018-05-12 09:45:21'),
(22, 5, 2, 'dfgdfg', '2018-05-12 09:54:59'),
(23, 7, 3, '%EB%B0%A9%EA%B0%80%EC%9A%94', '2018-05-12 10:04:56'),
(24, 7, 3, '%EB%88%84%EA%B5%AC%EC%84%B8%EC%9A%94', '2018-05-12 10:05:08'),
(25, 7, 3, '%EB%82%9C%EB%82%98%EB%82%98', '2018-05-12 10:07:28'),
(26, 6, 3, '%ED%95%98%EC%9D%B4%ED%95%98%EC%9D%B4', '2018-05-12 23:06:44'),
(27, 6, 3, '%ED%95%98%EC%9D%B4%ED%95%98%EC%9D%B4', '2018-05-12 23:06:48'),
(28, 12, 8, 'hello', '2018-05-13 01:50:39'),
(29, 12, 8, 'hello', '2018-05-13 01:50:40'),
(30, 12, 8, 'hello', '2018-05-13 01:50:46'),
(43, 10, 8, 'oh+see+you+long+time+my+friend', '2018-05-13 04:28:00'),
(42, 10, 9, 'banga+banga%21', '2018-05-13 04:27:45'),
(41, 10, 12, 'Hi+nice+meet+you', '2018-05-13 04:27:11'),
(34, 8, 9, 'Hello+Im+UnYoung', '2018-05-13 04:23:48'),
(35, 10, 11, 'Hello+Im+UnYoung', '2018-05-13 04:24:05'),
(36, 11, 10, 'Oh+....+HI%21', '2018-05-13 04:24:15'),
(37, 11, 10, 'I+Want+to+get+experience+on+Korea', '2018-05-13 04:24:36'),
(38, 10, 11, 'Yea+we+going+to+get+together', '2018-05-13 04:24:58'),
(39, 10, 11, '%3A%29', '2018-05-13 04:25:13'),
(40, 11, 10, 'Haha', '2018-05-13 04:25:20'),
(44, 10, 7, 'what+sup+man%7E+', '2018-05-13 04:28:14'),
(45, 10, 31, 'hi', '2018-05-13 13:39:31'),
(46, 10, 29, 'hey+paul', '2018-05-13 13:40:52'),
(47, 32, 31, '%EC%95%88%EB%85%95%ED%95%98%EC%84%B8%EC%9A%94', '2018-05-13 13:47:09'),
(48, 32, 31, 'hi', '2018-05-13 13:47:14'),
(49, 32, 10, 'hello+do+you+like+pocketmon%3F', '2018-05-13 13:47:55'),
(50, 32, 30, 'hi+wang', '2018-05-13 13:48:11'),
(51, 32, 29, 'gary+your+name+alike+him', '2018-05-13 13:48:36'),
(52, 31, 32, 'hi%21', '2018-05-13 13:50:40'),
(53, 32, 29, 'hi', '2018-05-13 14:06:39'),
(54, 31, 32, 'hellohello', '2018-05-13 14:07:15'),
(55, 32, 31, '%EC%95%88%EB%85%95', '2018-05-13 15:29:23'),
(56, 31, 32, 'hellohello', '2018-05-13 15:29:47'),
(57, 32, 29, 'hi+rehi', '2018-05-13 15:44:17');

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `depart` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `studID` varchar(255) DEFAULT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isforeigner` int(11) DEFAULT NULL,
  `hashtag` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`no`, `id`, `email`, `depart`, `major`, `language`, `studID`, `intro`, `name`, `password`, `isforeigner`, `hashtag`) VALUES
(10, 'dhdk33', 'soee@naver.com', '', '%EC%BB%B4%ED%93%A8%ED%84%B0', '%EC%98%81%EC%96%B4', '12112', '%EB%82%98%EB%8F%84%EC%A2%8B%EC%95%84', '%ED%8F%AC%EC%BC%93%EB%AA%AC%EC%A2%8B%EC%95%84', '1111', 1, '%23%ED%96%84%EB%B2%84%EA%B1%B0%2F%23%ED%94%BC%EC%9E%90%2F%23%EC%A4%91%EC%8B%9D%2F'),
(14, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(15, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(16, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(27, 'qwer', 'qwe', '', 'sad', 'English', 'asd', 'I+want+to+eat+Dakgalbie', 'David', '1111', 1, ''),
(28, 'qwer', 'qwe', '', 'sad', 'English', 'asd', 'I+want+to+eat+Dakgalbie', 'David', '1111', 1, ''),
(32, 'worf', '11', '', 'qq', 'Korean', '1111', 'hi', 'worf', '1111', 0, '%23%EB%8D%95%EC%A7%84%EA%B3%B5%EC%9B%90%2F%23%EC%B9%98%ED%82%A8%2F%23%EC%96%91%EA%B6%81%2F%23%ED%95%9C%EC%98%A5%EB%A7%88%EC%9D%84%2F%23%EB%83%89%EB%A9%B4%2F%23%ED%96%84%EB%B2%84%EA%B1%B0%2F%23%EC%A7%AC%EB%BD%95%2F%23%EC%A4%91%EC%8B%9D%2F%23%EA%B0%88%EB%B9'),
(12, 'sarr94', 'sjscor94@gmail.com', '', 'computer+science', 'english', '201414243', 'i+want+to+eat+dakgalbi', 'paul', '1111', 1, '%23%ED%8C%8C%EC%8A%A4%ED%83%80%2F%23%ED%96%84%EB%B2%84%EA%B1%B0%2F%23%EC%96%B8%EC%96%B4%EA%B5%90%EB%A5%98%2F%23%EC%82%BC%EA%B2%B9%EC%82%B4%2F%23%ED%94%BC%EC%9E%90%2F%23%EC%98%81%ED%99%94%2F'),
(13, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(17, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(18, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(19, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(20, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(21, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(22, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(23, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(24, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(25, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(26, 'g-dragon', 'drag@g-mail.com', '', 'computer', 'English', '20171717', 'hello%2Ci%5C%27m+g-dragon.', 'dragon', 'dragon', 1, ''),
(29, 'qwer', 'qwe', '', 'sad', 'English', 'asd', 'i+going+to+han+ok+maul', 'Gary', '1111', 1, '%23%EC%B9%98%ED%82%A8%2F%23%EB%8D%95%EC%A7%84%EA%B3%B5%EC%9B%90%2F%23%ED%95%9C%EC%98%A5%EB%A7%88%EC%9D%84%2F%23%EC%96%91%EA%B6%81%2F%23%ED%96%84%EB%B2%84%EA%B1%B0%2F%23%EC%A4%91%EC%8B%9D%2F%23%ED%95%9C%EC%8B%9D%2F%23%EC%A7%AC%EB%BD%95%2F%23%EB%83%89%EB%A9'),
(30, 'qwer', 'qwe', '', 'sad', 'Chiness', 'asd', 'enjoy', 'Wang', '1111', 1, '%23%EB%8D%95%EC%A7%84%EA%B3%B5%EC%9B%90%2F%23%ED%95%9C%EC%98%A5%EB%A7%88%EC%9D%84%2F%23%EC%A4%91%EC%8B%9D%2F%23%ED%95%9C%EC%8B%9D%2F%23%EC%A7%AC%EB%BD%95%2F%23%EB%83%89%EB%A9%B4%2F%23%EC%A7%9C%EC%9E%A5%EB%A9%B4%2F%23%ED%94%BC%EC%9E%90%2F%23%EC%82%BC%EA%B2'),
(31, 'qwer', 'qwe', '', 'sad', 'Chiness', 'asd', 'So+cool%21', 'Chen', '1111', 1, '%23%EB%8D%95%EC%A7%84%EA%B3%B5%EC%9B%90%2F%23%ED%95%9C%EC%98%A5%EB%A7%88%EC%9D%84%2F%23%EC%96%91%EA%B6%81%2F%23%ED%96%84%EB%B2%84%EA%B1%B0%2F%23%EC%A4%91%EC%8B%9D%2F%23%ED%95%9C%EC%8B%9D%2F%23%EC%A7%AC%EB%BD%95%2F%23%EB%83%89%EB%A9%B4%2F%23%EC%A7%9C%EC%9E');