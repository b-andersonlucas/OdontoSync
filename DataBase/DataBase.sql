create database IF not exists OdontoSync;

use OdontoSync;

create table Pessoa(
email  VARCHAR (50)  primary key NOT null,
usuario char(20) NOT null,
senha char(15) NOT null,
priv_pessoa char(1) NOT null,
nome varchar(35) NOT null,
telefone char(15)
);
 
create table Cliente(
pessoa_email VARCHAR (50),
FOREIGN KEY  (pessoa_email) REFERENCES Pessoa(email) ,
cidade char(20),
data_nascimento date
);

create table Secretaria(
pessoa_email VARCHAR (50),
FOREIGN KEY (pessoa_email) REFERENCES Pessoa(email),
data_vinculo char(20)
);

create table Dentista(
pessoa_email VARCHAR (50),
FOREIGN KEY (pessoa_email) REFERENCES Pessoa(email),
codigo_registro char(10)
);

create table Historico(
Cliente_email VARCHAR (50),
FOREIGN KEY  (Cliente_email) REFERENCES Cliente(pessoa_email),
dentista_email VARCHAR (50),
FOREIGN KEY (dentista_email) REFERENCES Dentista(pessoa_email),
dia date,
hora time,
procedimento varchar(450)
);

create table Agenda_dentista(
dentista_email VARCHAR (50),
FOREIGN KEY (dentista_email) REFERENCES Dentista(pessoa_email),
dia date primary key,
n_clientes int(5),
inicio_ex time,
fim_ex time
);

create table Horarios(
Cliente_email VARCHAR (50),
FOREIGN KEY  (Cliente_email) REFERENCES Cliente(pessoa_email),
dentista_email VARCHAR (50),
FOREIGN KEY (dentista_email) REFERENCES Dentista(pessoa_email),
dia date primary key,
horario time
);

insert into Pessoa values('d@i.o', 'dickson', '123', 'c', 'dickson teixeira', '(84) 99999-9999');
insert into Cliente values ('d@i.o', 'serrinha', '2002/02/22');
insert into Pessoa values('a@a.o', 'cavalo', '123', 'd', 'zé', '(00) 90000-0000');
insert into Dentista values('a@a.o','0003222');
insert into Historico values('d@i.o','a@a.o','21/01/15','17:30','arranquei o dente pela raiz');
insert into Agenda_dentista values('a@a.o','2021/01/15',6,'08:30','18:30');
insert into Horarios values('d@i.o','a@a.o','21/01/15','17:30');


-- select * from Pessoa;
-- select * from Cliente;
-- select * from Dentista;
-- select * from Historico;
-- select * from Agenda_dentista;
-- select * from Horarios;
-- select * from ;

-- delete from Agenda_dentista where dia='2021/02/05';

-- drop database odontosync;