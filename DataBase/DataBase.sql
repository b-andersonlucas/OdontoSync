create database IF not exists OdontoSync;

use OdontoSync;

create table Pessoa(
email  VARCHAR (50)  primary key NOT null,
usuario char(20) NOT null ,
senha char(15) NOT null,
priv_pessoa char(1) NOT null, -- if priv = "c" or "d" login in adm page
nome varchar(35) NOT null,
telefone char(15)
);
 
create table Cliente(
pessoa_email VARCHAR (50),
FOREIGN KEY  (pessoa_email) REFERENCES Pessoa(email) ON DELETE CASCADE
 ON UPDATE CASCADE ,
cidade char(20),
data_nascimento date
);

create table Secretaria(
pessoa_email VARCHAR (50),
FOREIGN KEY (pessoa_email) REFERENCES Pessoa(email) ON DELETE CASCADE
 ON UPDATE CASCADE,
data_vinculo char(20)
);

create table Dentista(
pessoa_email VARCHAR (50),
FOREIGN KEY (pessoa_email) REFERENCES Pessoa(email) ON DELETE CASCADE
 ON UPDATE CASCADE,
codigo_registro char(10)
);

create table Historico(
Cliente_email VARCHAR (50),
FOREIGN KEY  (Cliente_email) REFERENCES Cliente(pessoa_email) ON DELETE CASCADE
 ON UPDATE CASCADE,
nome_cliente char(50),-- criar um campo pro nome ok(x)
dentista_email VARCHAR (50),
FOREIGN KEY (dentista_email) REFERENCES Dentista(pessoa_email) ON DELETE CASCADE, 
nome_dentista char(50), -- substituir o email do dentista pelo nome(ok)// precisou colocar o nome de todo modo para que haja alguma chave no banco de dados 
dia date,
hora time,
procedimento varchar(450)
);

create table Agenda_dentista(
dentista_email VARCHAR (50),
FOREIGN KEY (dentista_email) REFERENCES Dentista(pessoa_email) ON DELETE CASCADE,
nome_dentista char(50), -- mudar email pelo nome ok (x)
dia date,
n_clientes int(5),
inicio_ex time,
fim_ex time
);

create table Horarios(
Cliente_email VARCHAR (50) ,
FOREIGN KEY  (Cliente_email) REFERENCES Cliente(pessoa_email) ON DELETE CASCADE -- adicionar o nome do cliente e do dentista
 ON UPDATE CASCADE,
dentista_email VARCHAR (50),
FOREIGN KEY (dentista_email) REFERENCES Dentista(pessoa_email) ON DELETE CASCADE
 ON UPDATE CASCADE,
dia date,
horario time
);

-- ALTER DATABASE odontosync CHARACTER SET = 'utf8'  COLLATE = 'utf8_general_ci';
-- ALTER DATABASE OdontoSync CHARSET = Latin1 COLLATE = latin1_swedish_ci;

insert into Pessoa values('d@i.o', 'dickson', '123', 'c', 'dickson teixeira', '(84) 99999-9999');
insert into Cliente values ('d@i.o', 'serrinha', '2002/02/22');

-- insert into Pessoa values('j@a.o', 'bôcapodé', '123', 'c', 'junior', '(84)99999-9996');

insert into Pessoa values('a@a.o', 'cavalo', '123', 'd', 'ze', '(00) 90000-0000');
insert into Dentista values('a@a.o','0003222');

insert into Pessoa values('b@a.o', 'touro', '123', 'd', 'bruno', '(00) 90000-0001');
insert into Dentista values('b@a.o','0003223');

insert into Pessoa values('j@c.o', 'galo', '123', 'd', 'josé camargo', '(00) 90000-0002');
insert into Dentista values('j@c.o','0003224');


insert into Historico values('d@i.o','dickson','a@a.o','ze','21/01/15','17:30','arranquei o dente pela raiz'); -- mudar email pelo nome e inserir o nome ok(x)
insert into Agenda_dentista values('a@a.o','ze','2021/01/15',6,'08:30','18:30'); -- mudar email pelo nome (ok)
insert into Horarios values('d@i.o','a@a.o','21/01/15','17:30');

-- select senha from pessoa where senha = '123';
-- select usuario from pessoa where usuario = 'cavalo';
-- select * from pessoa where usuario ='cavalo' and senha = '123';
-- select * from Pessoa;
-- select * from Cliente;
-- select * from Dentista;
-- select * from Historico;
-- select * from Agenda_dentista;
-- select * from Horarios;
-- select * from ;

-- delete from Agenda_dentista where dia='2021/02/05';
-- delete from pessoa where email = 'j@a.o';
-- delete from Agenda_dentista where nome_dentista = 'ze';
 
-- drop database odontosync;