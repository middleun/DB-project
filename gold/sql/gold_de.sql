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
-- 테이블 구조 `gold_de`
--

CREATE TABLE `gold_de` (
  `gold_de_num` int(11) NOT NULL COMMENT '고유번호',
  `gold_de_tit` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `gold_de_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '일련번호',
  `gold_de_des` text CHARACTER SET utf8 NOT NULL COMMENT '설명',
  `gold_de_img1` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상세페이지이미지1',
  `gold_de_img2` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상세페이지이미지2',
  `gold_de_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일이미지',
  `gold_de_cli` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '고객사',
  `gold_de_reg` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_de`
--

INSERT INTO `gold_de` (`gold_de_num`, `gold_de_tit`, `gold_de_ser`, `gold_de_des`, `gold_de_img1`, `gold_de_img2`, `gold_de_thumb`, `gold_de_cli`, `gold_de_reg`) VALUES
(3, 'MIT Technology Revie', 'DE2101_01', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br />\r\n<br />\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\n<br />\r\n It was popularised in the 1960s with the release of Letraset sheets containing', 'design_01_01.jpg', 'design_01_02.jpg', 'design_thumb_01.jpg', 'Samsung SDS', '2021-01-06'),
(4, 'MIT Technology', 'DE2101_02', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et <br/>\r\n\r\nquasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,<br/> \r\n\r\nsed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,<br/>', 'design_02_01.jpg', 'design_02_02.jpg', 'design_thumb_02.jpg', 'Samsung SDS', '2021-01-06'),
(5, 'Down The Rabbit', 'DE2101_03', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled<br/>\r\n and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee <br/>\r\n\r\nthe pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, <br/>\r\n\r\nwhich is the same as saying through shrinking from toil and pain.<br/>', 'design_03_01.jpg', 'design_03_02.jpg', 'design_thumb_03.jpg', 'Samsung SDS', '2021-01-06'),
(6, 'Diptyque', 'DE2101_04', 'These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best,<br/>\r\n\r\n every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty <br/>\r\n\r\nor the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. <br/>', 'design_04_01.jpg', 'design_04_02.jpg', 'design_thumb_04.jpg', 'Samsung SDS', '2021-01-06'),
(7, 'RVL', 'DE2101_05', 'Duis tristique elit ac ligula congue, et sodales sapien pretium. Curabitur eget imperdiet felis. Vivamus sed feugiat mi. Fusce molestie nunc ac consectetur venenatis. <br/>\r\n\r\nAenean congue volutpat laoreet. Suspendisse non erat quis magna commodo convallis. Aenean et mattis dui. <br/>\r\n\r\nUt convallis urna vel urna porttitor, nec luctus justo commodo.\r\nDuis vel pretium lacus, <br/>\r\n\r\n', 'design_05_01.jpg', 'design_05_02.jpg', 'design_thumb_05.jpg', 'Samsung SDS', '2021-01-06'),
(8, 'Dropbox', 'DE2101_06', 'Suspendisse id nibh eget ipsum consequat semper et et sapien. Nulla rhoncus posuere felis at sollicitudin. Nulla mattis mauris vitae mi elementum, <br/>\r\n\r\nnon sodales nisi feugiat. Aenean nulla magna, malesuada at nibh a, sollicitudin rhoncus turpis. Donec eleifend scelerisque elit, <br/>\r\n\r\nnon malesuada risus lacinia a. Mauris varius porttitor porttitor. Ut faucibus ullamcorper risus, sed scelerisque nunc lacinia eu.<br/>', 'design_06_01.jpg', 'design_06_02.jpg', 'design_thumb_06.jpg', 'Samsung SDS', '2021-01-06'),
(9, 'Mohawk Maker ', 'DE2101_07', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, <br />\r\n<br />\r\nas opposed to using \'Content here, content here\', making it look like readable English.<br />\r\n<br />\r\n Many desktop publishing packages and web page editors now use Lorem Ipsum', 'design_07_01.jpg', 'design_07_02.jpg', 'design_thumb_07.jpg', 'Samsung SDS', '2021-01-06'),
(10, 'Gradient Exploration', 'DE2101_08', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, <br />\r\n<br />\r\nsometimes by accident, sometimes on purpose (injected humour and the like).The first line of Lorem Ipsum,<br />\r\n<br />\r\n \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'design_08_01.jpg', 'design_08_02.jpg', 'design_thumb_08.jpg', 'Samsung SDS', '2021-01-06'),
(11, 'Secret 7', 'DE2101_09', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,<br />\r\n<br />\r\n looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, <br />\r\n<br />\r\nand going through the cites of the word in classical literature, discovered the undoubtable source.', 'design_09_01.jpg', 'design_09_02.jpg', 'design_thumb_09.jpg', 'Samsung SDS', '2021-01-06'),
(12, 'Jawbone', 'DE2101_10', 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. <br />\r\n<br />\r\nThis book is a treatise on the theory of ethics, very popular during the Renaissance. <br />\r\n<br />\r\nThe first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'design_10_01.jpg', 'design_10_02.jpg', 'design_thumb_10.jpg', 'Samsung SDS', '2021-01-06'),
(13, 'The Griffin Farley', 'DE2101_11', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.<br />\r\n<br />\r\nIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. <br />\r\n<br />\r\nThe generated Lorem Ipsum is therefore always free from repetition,', 'design_11_01.jpg', 'design_11_02.jpg', 'design_thumb_11.jpg', 'Samsung SDS', '2021-01-06'),
(14, 'The very small office', 'DE2101_12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />\r\n<br />\r\n Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br />\r\n<br />\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'design_12_01.jpg', 'design_12_02.jpg', 'design_thumb_12.jpg', 'Samsung SDS', '2021-01-06');

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
  MODIFY `gold_de_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
