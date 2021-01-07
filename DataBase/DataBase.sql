create database IF not exists OdontoSync;

use OdontoSync;

create table Paciente(
id int(10) primary key NOT null auto_increment,
nome char(35),
telefone char(15),
cidade char(20),
data_nascimento char(12)
);

create table Odonto(
id int(10) primary key not null,
nome char(35),
telefone char(15),
numero_registro char(10)
);

create table Atendente(
id int(10) primary key not null,
nome char(35),
telefone char(15)
);


insert into Paciente(id,nome,telefone,cidade,data_nascimento) values(1,'OdontoSyncManager','9xxxx-xxxx','Santo Antônio,RN','01/12/2020');
insert into Paciente(id,nome,telefone,cidade,data_nascimento) values(101,'nulo','9xxxx-xxxx','not found','00/00/0000');
-- insert into Paciente(nome,telefone,cidade,data_nascimento) values();

-- select * from Paciente;
