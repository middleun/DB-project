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
-- 테이블 구조 `gold_app`
--

CREATE TABLE `gold_app` (
  `gold_app_num` int(11) NOT NULL COMMENT '고유번호',
  `gold_app_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `gold_app_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '일련번호',
  `gold_app_des` text CHARACTER SET utf8 NOT NULL COMMENT '설명',
  `gold_app_img` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상세페이지이미지',
  `gold_app_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일이미지',
  `gold_app_cli` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '고객사',
  `gold_app_reg` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_app`
--

INSERT INTO `gold_app` (`gold_app_num`, `gold_app_tit`, `gold_app_ser`, `gold_app_des`, `gold_app_img`, `gold_app_thumb`, `gold_app_cli`, `gold_app_reg`) VALUES
(15, 'Calory Checker', 'AP2101_01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br />\r\n<br />\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br />\r\n<br />\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'app_main_001.png', 'app_001.png', 'Appstore', '2021-01-20'),
(16, 'Portfolio', 'AP2101_02', 'The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. <br />\r\n<br />\r\nToday it\'s seen all around the web; on templates, websites, and stock designs. Use our generator to get your own,<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'app_main_002.jpg', 'app_002.jpg', 'Appstore', '2021-01-20'),
(17, 'Plant Store', 'AP2101_03', 'Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering the source behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by consectetur—a genuine, albeit rare, Latin word.<br />\r\n<br />\r\n Consulting a Latin dictionary led McClintock to a passage from De Finibus Bonorum et Malorum <br />\r\n<br />\r\nOn the Extremes of Good and Evil”), a first-century B.C. text from the Roman philosopher Cicero.', 'app_main_003.png', 'app_003.png', 'Appstore', '2021-01-20'),
(18, 'Beranda', 'AP2101_04', 'It\'s difficult to find examples of lorem ipsum in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across the lorem ipsum passage in a book of old metal type samples. <br />\r\n<br />\r\nSo far he hasn\'t relocated where he once saw the passage, <br />\r\n<br />\r\nBut the popularity of Cicero in the 15th century supports the theory that the filler text has been used for centuries.', 'app_main_004.png', 'app_004.png', 'Appstore', '2021-01-20'),
(19, 'Optimist', 'AP2101_05', 'What I find remarkable is that this text has been the industry\'s standard dummy text ever since some printer in the 1500s took a galley of type and scrambled it to make a type specimen book; it has survived not only four centuries of letter-by-letter resetting <br />\r\n<br />\r\nBut even the leap into electronic typesetting, essentially unchanged except for an occasional \'ing\' or \'y\' thrown in. <br />\r\n<br />\r\nIt\'s ironic that when the then-understood Latin was scrambled, it became as incomprehensible as Greek; the phrase \'it\'s Greek to me\' and \'greeking\' have common semantic roots!”<br />\r\n<br />\r\n', 'app_main_005.png', 'app_005.png', 'Appstore', '2021-01-20'),
(20, 'Plants', 'AP2101_06', 'As an alternative theory, (and because Latin scholars do this sort of thing) someone tracked down a 1914 Latin edition of De Finibus which challenges McClintock\'s 15th century claims and suggests that the dawn of lorem ipsum was as recent as the 20th century. <br />\r\n<br />\r\nThe 1914 Loeb Classical Library Edition ran out of room on page 34 for the Latin phrase “dolorem ipsum” (sorrow in itself).<br />\r\n<br />\r\n Thus, the truncated phrase leaves one page dangling with “do-”, while another begins with the now ubiquitous “lorem ipsum”', 'app_main_006.png', 'app_006.png', 'Appstore', '2021-01-20'),
(21, 'Credit', 'AP2101_07', 'One brave soul did take a stab at translating the almost-not-quite-Latin. According to The Guardian, Jaspreet Singh Boparai undertook the challenge with the goal of making the text “precisely as incoherent in English as it is in Latin - and to make it incoherent in the same way”. <br />\r\n<br />\r\nAs a result, “the Greek \'eu\' in Latin became the French \'bien\' [...] and the \'-ing\' ending in \'lorem ipsum\' seemed best rendered by an \'-iendum\' in English.”<br />\r\n<br />\r\nHere is the classic lorem ipsum passage followed by Boparai\'s odd, yet mesmerizing version', 'app_main_007.png', 'app_007.png', 'Appstore', '2021-01-20'),
(22, 'Medicine Reminder', 'AP2101_08', 'Aldus Corporation, which later merged with Adobe Systems, ushered lorem ipsum into the information age with its desktop publishing software Aldus PageMaker. The program came bundled with lorem ipsum dummy text for laying out page content, and other word processors like Microsoft Word followed suit. <br />\r\n<br />\r\nMore recently the growth of web design has helped proliferate lorem ipsum across the internet as a placeholder for future text—<br />\r\n<br />\r\nAnd in some cases the final content (this is why we proofread, kids).', 'app_main_008.jpg', 'app_008.jpg', 'Appstore', '2021-01-20');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_app`
--
ALTER TABLE `gold_app`
  ADD PRIMARY KEY (`gold_app_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_app`
--
ALTER TABLE `gold_app`
  MODIFY `gold_app_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
