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
data_nascimento char(12)
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


insert into Pessoa values('d@i.o', 'dickson', '123', 'c', 'dickson teixeira', '(84) 99999-9999');
insert into Cliente values ('d@i.o', 'serrinha', '22/02/2002');