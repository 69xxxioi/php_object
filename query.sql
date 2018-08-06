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




//建表user1
create table user1(
id int primary key auto_increment,
name varchar(32) not null,
password varchar(64) not null,
age tinyint unsigned not null,
birthday date not null
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
//增加数据
insert into user1 (name,password,age,birthday) values ('lm',md5('lm'),23,'1991-01-02');
insert into user1 (name,password,age,birthday) values ('lxz',md5('lxz'),24,'1991-02-03');
insert into user1 (name,password,age,birthday) values ('wy',md5('wy'),25,'1991-03-04');
insert into user1 (name,password,age,birthday) values ('tl',md5('tl'),22,'1996-01-12');
insert into user1 (name,password,age,birthday) values ('miss',md5('miss'),20,'1998-10-04');
