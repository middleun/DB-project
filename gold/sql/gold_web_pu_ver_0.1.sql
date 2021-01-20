-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-01-15 08:08
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
  `gold_web_img` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '사진',
  `gold_web_mimg` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '모바일사진',
  `gold_web_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일사진',
  `gold_web_cli` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '납품처',
  `gold_web_reg` varchar(15) CHARACTER SET utf8 DEFAULT NULL COMMENT '등록일',
  `gold_web_dom` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '도메인'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_web`
--

INSERT INTO `gold_web` (`gold_web_num`, `gold_web_tit`, `gold_web_ser`, `gold_web_des`, `gold_web_img`, `gold_web_mimg`, `gold_web_thumb`, `gold_web_cli`, `gold_web_reg`, `gold_web_dom`) VALUES
(4, 'Architects', 'WE2101_01', 'The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. <br />\r\n<br />\r\nToday it\'s seen all around the web; on templates, websites, and stock designs. <br />\r\n<br />\r\nUse our generator to get your own, or read on for the authoritative history of lorem ipsum.', 'web_01.jpg', 'web_m_01.jpg', 'web_thumb_01.jpg', 'IT Company', '2021-01-13', 'http://www.architect.com'),
(5, 'Covid', 'WE2101_02', 'Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering the source behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by consectetur<br />\r\n<br />\r\n—a genuine, albeit rare, Latin word. Consulting a Latin dictionary led McClintock to a passage from De Finibus Bonorum et Malorum <br />\r\n<br />\r\n(“On the Extremes of Good and Evil”), a first-century B.C. text from the Roman philosopher Cicero.', 'web_02.jpg', 'web_m_02.jpg', 'web_thumb_02.jpg', 'IT Company', '2021-01-13', 'http://www.covidocare.com'),
(6, 'Foodfun', 'WE2101_03', 'It\'s difficult to find examples of lorem ipsum in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the lorem ipsum passage in a book of old metal type samples. <br />\r\n<br />\r\nSo far he hasn\'t relocated where he once saw the passage, <br />\r\n<br />\r\nbut the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.', 'web_03.jpg', 'web_m_03.jpg', 'web_thumb_03.jpg', 'IT Company', '2021-01-13', 'http://www.foodfun.com'),
(7, 'Software Maker', 'WE2101_04', 'As an alternative theory, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of De Finibus which challenges McClintock\'s 15th century claims.<br />\r\n<br />\r\nThe 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself). <br />\r\n<br />\r\nThus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”.', 'web_04.jpg', 'web_m_04.jpg', 'web_thumb_04.jpg', 'IT Company', '2021-01-13', 'http://www.softwaremaker.com'),
(8, 'Environment', 'WE2101_05', 'The French lettering company Letraset manufactured a set of dry-transfer sheets which included the lorem ipsum filler text in a variety of fonts, sizes, and layouts.<br />\r\n<br />\r\nThese sheets of lettering could be rubbed on anywhere and were quickly adopted by graphic artists, <br />\r\n<br />\r\nPrinters, architects, and advertisers for their professional look and ease of use.<br />\r\n<br />\r\n', 'web_05.jpg', 'web_m_05.jpg', 'web_thumb_05.jpg', 'IT Company', '2021-01-13', 'http://www.environment.com'),
(9, 'Staging', 'WE2101_06', 'Lorem Ipsum doesn’t exist because people think the content is meaningless window dressing, only there to be decorated by designers who can’t be bothered to read. Lorem Ipsum exists because words are powerful. <br />\r\n<br />\r\nIf you fill up your page with draft copy about your client’s business, they will read it. They will comment on it. <br />\r\n<br />\r\nThey will be inexorably drawn to it. Presented the wrong way, draft copy can send your design review off the rails.', 'web_06.jpg', 'web_m_06.jpg', 'web_thumb_06.jpg', 'IT Company', '2021-01-13', 'http://www.staging.com');

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
  MODIFY `gold_web_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
