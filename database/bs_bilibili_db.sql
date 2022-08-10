-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019-05-16 07:59:04
-- 服务器版本： 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bs_bilibili_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `administrator`
--

CREATE TABLE `administrator` (
  `a_username` text NOT NULL,
  `a_password` text NOT NULL,
  `a_tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `administrator`
--

INSERT INTO `administrator` (`a_username`, `a_password`, `a_tel`) VALUES
('管理员账号', 'guanliyuan123', '12345678901');

-- --------------------------------------------------------

--
-- 表的结构 `a_video`
--

CREATE TABLE `a_video` (
  `a_v_id` int(11) NOT NULL,
  `a_v_name` text NOT NULL,
  `a_v_pic` text NOT NULL,
  `a_v_path` text NOT NULL,
  `a_v_uploader` text NOT NULL,
  `a_v_time` datetime NOT NULL,
  `a_v_tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `a_video`
--

INSERT INTO `a_video` (`a_v_id`, `a_v_name`, `a_v_pic`, `a_v_path`, `a_v_uploader`, `a_v_time`, `a_v_tel`) VALUES
(0, 'test', 'test', 'test', 'test', '2019-04-24 01:00:00', '');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `c_id` int(11) NOT NULL,
  `c_content` text NOT NULL,
  `c_username` text NOT NULL,
  `c_time` datetime NOT NULL,
  `c_head` text,
  `c_tel` char(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `i` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `identity_information`
--

CREATE TABLE `identity_information` (
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `adress` text NOT NULL,
  `tel` char(11) NOT NULL,
  `head` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`id`, `time`, `text`) VALUES
(1, '2', '3'),
(2, '3', '4'),
(3, '4', '5'),
(4, '5', '6'),
(5, '6', '7');

-- --------------------------------------------------------

--
-- 表的结构 `up_video`
--

CREATE TABLE `up_video` (
  `v_id` int(11) NOT NULL,
  `v_name` text NOT NULL,
  `v_pic` text NOT NULL,
  `v_path` text NOT NULL,
  `v_uploader` text NOT NULL,
  `v_time` datetime NOT NULL,
  `v_tel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `up_video`
--

INSERT INTO `up_video` (`v_id`, `v_name`, `v_pic`, `v_path`, `v_uploader`, `v_time`, `v_tel`) VALUES
(0, '测试视频 请勿删除！！！', 'test', 'test', 'test', '2019-05-01 00:00:00', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`a_tel`);

--
-- Indexes for table `a_video`
--
ALTER TABLE `a_video`
  ADD PRIMARY KEY (`a_v_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `identity_information`
--
ALTER TABLE `identity_information`
  ADD PRIMARY KEY (`tel`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_video`
--
ALTER TABLE `up_video`
  ADD PRIMARY KEY (`v_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `a_video`
--
ALTER TABLE `a_video`
  MODIFY `a_v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- 使用表AUTO_INCREMENT `up_video`
--
ALTER TABLE `up_video`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
