-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-01-04 03:20
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
-- 테이블 구조 `gold_de`
--

CREATE TABLE `gold_de` (
  `gold_de_num` int(11) NOT NULL COMMENT '고유번호',
  `gold_de_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `gold_de_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '일련번호',
  `gold_de_des` text CHARACTER SET utf8 NOT NULL COMMENT '설명',
  `gold_de_img1` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '사진1',
  `gold_de_img2` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '사진2',
  `gold_de_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일이미지',
  `gold_de_cli` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '납품처',
  `gold_de_reg` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_de`
--
ALTER TABLE `gold_de`
  ADD PRIMARY KEY (`gold_de_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_de`
--
ALTER TABLE `gold_de`
  MODIFY `gold_de_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
