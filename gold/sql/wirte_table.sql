CREATE TABLE `gold_wr` (
`GOLD_wr_num` int(11) NOT NULL COMMENT '고유번호',
`GOLD_wr_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '글쓰기 아이디',
`GOLD_wr_title` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '글쓰기 제목',
`GOLD_wr_cont` text CHARACTER SET utf8 NOT NULL COMMENT '글쓰기 내용',
`GOLD_wr_hit` int(11) NOT NULL COMMENT '조회수'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

