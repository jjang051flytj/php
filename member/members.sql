drop table members;
create table members (
	num       int not null auto_increment primary key,
	userid    varchar(100) not null,
	username    varchar(100) not null,
	password  varchar(100) not null,
	userEmail varchar(100) not null,
	regdate   varchar(100),
	level     int,
	point     int
);
select * from members;