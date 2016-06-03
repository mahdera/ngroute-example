drop database if exists db_school;
create database if not exists db_school;
use db_school;

create table tbl_student(
	id int auto_increment,
	name varchar(70) not null,
	city varchar(100) not null,
	primary key(id)
);