create table test (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `sex` varchar(2) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



insert into test values(null,"tianli","male",19970112);
insert into test values(null,"miss","female",19971012);
insert into test values(null,"maria","female",19980602);
insert into test values(null,"kety","female",19970515);
