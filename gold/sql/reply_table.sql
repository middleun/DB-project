CREATE TABLE `gold_re` (
  `GOLD_re_num` int(11) NOT NULL COMMENT '고유변호',
  `GOLD_re_wr_num` int(11) NOT NULL COMMENT '원글 번호',
  `GOLD_re_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '답글 작성자',
  `GOLD_re_cont` text NOT NULL COMMENT '답글 내용'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;