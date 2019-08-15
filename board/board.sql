-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:3306
-- 產生時間： 2019 年 08 月 15 日 15:48
-- 伺服器版本： 5.7.26
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `a`
--

-- --------------------------------------------------------

--
-- 資料表結構 `board`
--

CREATE TABLE `board` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `topic` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `board`
--

INSERT INTO `board` (`id`, `name`, `topic`, `text`, `date`) VALUES
(4, 'qqqqq', '各位', '大家今天好嗎', '2019-07-17 01:56:54'),
(6, 'rrrrr', '吃飯', '肚子超大', '2019-07-17 04:17:34'),
(7, 'anna123', '大家好', '很高興認識大家', '2019-07-17 07:30:24'),
(8, 'benson123', '颱風要來了', '最近可能有颱風，大家出門要小心\r\n', '2019-07-17 07:31:32'),
(9, 'charlie123', '嗨囉 Every One', '我是新來的請多指教', '2019-07-17 07:32:43'),
(10, 'david123', '徵女友', '性別：男\r\n身高：180\r\n個性：幽默風趣\r\n錢包：很厚', '2019-07-17 07:34:06'),
(11, 'elton123', ' &lt;img src=# onerror=&quot;alert(123)&quot;&gt; ', '&lt;script&gt;alert(大家好)&lt;/script&gt;', '2019-07-17 07:36:53'),
(12, 'elton123', 'fu123', 'd(`･∀･)bσ`∀´)σ', '2019-07-17 07:38:46'),
(13, 'anna123', '今天公告', '1234', '2019-07-17 09:36:55'),
(15, 'rrrrr', 'fd', 'fd', '2019-07-18 02:20:26'),
(17, 'rrrrr', '今天公告', '測試留言板呢', '2019-07-18 06:50:43'),
(18, 'rrrrr', 'xsx', 'yyy', '2019-07-18 07:17:02'),
(19, 'rrrrr', 'gtg', 'rgr', '2019-07-18 07:17:42'),
(20, 'rrrrr', 'fr', 'frf232', '2019-07-18 07:20:47'),
(25, 'rrrrr', '今天公告', 'dcd', '2019-07-19 04:23:48'),
(27, 'admin', 'dbfd', 'dbd', '2019-07-19 05:54:16'),
(28, 'admin', 'fr', 'y6y', '2019-07-19 05:59:34'),
(29, 'admin', 'fr', 'y6y', '2019-07-19 06:00:35'),
(30, 'admin', 'fr', 'y6y', '2019-07-19 06:00:48'),
(31, 'admin', 'fr', 'y6y', '2019-07-19 06:01:04');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `board`
--
ALTER TABLE `board`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
