create database lssemsdb;
use lssemsdb;

create table users (
  id  int(11) auto_increment primary key,
  name varchar(30) not null,
  email varchar(30) not null
);