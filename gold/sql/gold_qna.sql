-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-01-29 02:17
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
-- 테이블 구조 `gold_qna`
--

CREATE TABLE `gold_qna` (
  `gold_qna_num` int(11) NOT NULL COMMENT '고유번호',
  `gold_qna_id` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '글쓴이',
  `gold_qna_tit` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '글제목',
  `gold_qna_con` text CHARACTER SET utf8 NOT NULL COMMENT '내용',
  `gold_qna_reg` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '등록일',
  `gold_qna_hit` int(11) NOT NULL COMMENT '조회수'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_qna`
--

INSERT INTO `gold_qna` (`gold_qna_num`, `gold_qna_id`, `gold_qna_tit`, `gold_qna_con`, `gold_qna_reg`, `gold_qna_hit`) VALUES
(1, 'gold', '첫번째', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '2021-01-25', 8),
(2, 'gold', 'ddd', 'ddd', '2021-01-25', 57),
(3, 'gold', 'dfw', 'qwe', '2021-01-25', 0),
(4, 'gold', '234', 'ewrt', '2021-01-25', 0),
(5, 'gold', '5745', 'sdge', '2021-01-25', 4),
(6, 'gold', '1111', '33333', '2021-01-27', 29),
(7, 'gold', 'ikjh', '8976', '2021-01-25', 21),
(8, 'gold', 'qwr', 'tdryry          ', '2021-01-27', 8),
(9, 'gold', 'dd', 'dddd                                      ', '2021-01-27', 9),
(11, 'gold', '첫번째게시글입니다', 'UI 시나리오 기반의 태스크 분석 결과로부터 사용자에게 필요한 인터페이스의 정보 및 콘텐츠, 기능, 절차 등을 도출한다. 기능 구조는 사용자가 수행하는 태스크를 지원하기 위해 앱에서 제공해야 하는 인터페이스 구조이다. <br />\r\n<br />\r\n앱의 기능은 사용자들이 필요로 하는 메뉴, 또는 콘텐츠이며 기능에 따른 세부 기능 요소를 필요로 한다. 다음의 문화콘텐츠 앱의 기능 정의 작성 사례는 다음과 같이 구성하였다. <br />\r\n<br />\r\n주요 기능인 문화 콘텐츠 분야를 장르별로 구분하여 사용자가 앱에 진입 시 초기 화면에서 직관적으로 확인할 수 있도록 구성한 사례이다. <br />\r\n', '2021-01-26', 54);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_qna`
--
ALTER TABLE `gold_qna`
  ADD PRIMARY KEY (`gold_qna_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_qna`
--
ALTER TABLE `gold_qna`
  MODIFY `gold_qna_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
