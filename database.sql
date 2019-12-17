drop database belajar;
create database belajar;
use belajar;
create table masuk(
id int AUTO_INCREMENT PRIMARY KEY not null,
username char(15) not null,
pwd char(15) not null
)engine=INNODB default charset=latin1;
create table iptable(
    id int AUTO_INCREMENT primary key not null,
    ippertama char(15) not null,
    ipterakhir char(15) not null,
    tglbeli date not null,
    lamasewa date not null,
    tglperemajaan date not null
)engine=INNODB;