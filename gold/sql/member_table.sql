CREATE TABLE `gold_mem` (
  `GOLD_mem_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_mem_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '아이디',
  `GOLD_mem_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '이름',
  `GOLD_mem_email` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '이메일',
  `GOLD_mem_pass` varchar(80) CHARACTER SET utf8 NOT NULL COMMENT '비밀번호',
  `GOLD_mem_regi_day` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '가입일',
  `GOLD_mem_level` int(11) DEFAULT NULL COMMENT '레벨(회원등급)',
  `GOLD_mem_point` int(11) NOT NULL COMMENT '포인트'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;