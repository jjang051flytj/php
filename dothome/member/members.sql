drop table members;
create table members (
	num             int not null auto_increment primary key,
	userID          varchar(100) not null,
	userName        varchar(100) not null,
	password        varchar(100) not null,
	userEmail       varchar(100) not null,
	profile         varchar(200),
	renameProfile   varchar(200),
	regdate         varchar(100),
	level           int,
	point           int
);
select * from members;