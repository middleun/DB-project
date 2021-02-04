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
-- 테이블 구조 `gold_mem`
--

CREATE TABLE `gold_mem` (
  `gold_mem_num` int(11) NOT NULL COMMENT '고유번호',
  `gold_mem_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '아이디',
  `gold_mem_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '이름',
  `gold_mem_email` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '이메일',
  `gold_mem_pass` varchar(80) CHARACTER SET utf8 NOT NULL COMMENT '비밀번호',
  `gold_mem_reg` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '가입일',
  `gold_mem_level` int(11) DEFAULT NULL COMMENT '레벨(회원등급)',
  `gold_mem_point` int(11) NOT NULL COMMENT '포인트'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_mem`
--

INSERT INTO `gold_mem` (`gold_mem_num`, `gold_mem_id`, `gold_mem_name`, `gold_mem_email`, `gold_mem_pass`, `gold_mem_reg`, `gold_mem_level`, `gold_mem_point`) VALUES
(5, 'luxury', '이중은', 'luxury@gmail.com', '1234', '2020-12-28 18:02:39', 9, 0),
(6, 'gold', '중은', 'gold@naver.com', '12345', '2020-12-28 18:03:38', 1, 0),
(7, 'nanana', '이나나', 'nana@daum.net', 'akakak', '2020-12-28 18:07:29', 9, 0),
(8, 'allright_3', '맑음', 'rightright@gmail.com', '0987', '2020-12-28 18:09:50', 9, 0),
(9, 'dd', 'dd', 'dd@dd', 'dd', '2020-12-30 10:31:35', 8, 50),
(10, 'fullants', 'leaf', 'leaf@naver.com', 'leaf3', '2021-01-07 11:47:29', 5, 300),
(11, 'joy', 'jojo', 'jojo@jojo.com', 'jojo', '2021-02-02 10:41:44', 9, 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_mem`
--
ALTER TABLE `gold_mem`
  ADD PRIMARY KEY (`gold_mem_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_mem`
--
ALTER TABLE `gold_mem`
  MODIFY `gold_mem_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
