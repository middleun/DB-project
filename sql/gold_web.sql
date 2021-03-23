-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-02-04 03:41
-- 서버 버전: 10.4.16-MariaDB
-- PHP 버전: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `gold_web`
--

CREATE TABLE `gold_web` (
  `gold_web_num` int(11) NOT NULL COMMENT '고유번호',
  `gold_web_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `gold_web_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '일련번호',
  `gold_web_des` text CHARACTER SET utf8 NOT NULL COMMENT '설명',
  `gold_web_img` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상세페이지이미지',
  `gold_web_mimg` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '모바일이미지',
  `gold_web_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일이미지',
  `gold_web_cli` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '고객사',
  `gold_web_reg` varchar(15) CHARACTER SET utf8 DEFAULT NULL COMMENT '등록일',
  `gold_web_dom` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '도메인'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_web`
--
ALTER TABLE `gold_web`
  ADD PRIMARY KEY (`gold_web_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_web`
--
ALTER TABLE `gold_web`
  MODIFY `gold_web_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
