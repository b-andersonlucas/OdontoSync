create database IF not exists OdontoSync;

use OdontoSync;

create table Cliente(
id int(10) primary key NOT null auto_increment,
nome varchar(35),
telefone char(15),
cidade char(20),
data_nascimento char(12),
login char(20),
senha char(15)
);

create table Dentista(
id int(10) primary key not null,
nome varchar(35),
telefone char(15),
numero_registro char(10),
login char(20),
senha char(15)
);

create table Secretaria(
id int(10) primary key not null,
nome varchar(35),
telefone char(15),
login char(20),
senha char(15)
);


insert into Cliente(id,nome,telefone,cidade,data_nascimento,login,senha) values(1,'OdontoSyncManager','9xxxx-xxxx','Santo Antônio,RN','01/12/2020','admin','admin');
insert into Cliente(id,nome,telefone,cidade,data_nascimento,login,senha) values(101,'nulo','9xxxx-xxxx','not found','00/00/0000','usernull','senhanull');
-- insert into Cliente(nome,telefone,cidade,data_nascimento,login,senha) values();

-- select * from Cliente;

