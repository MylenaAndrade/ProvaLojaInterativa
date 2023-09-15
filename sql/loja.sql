create database loja
default character set utf8mb4
default collate utf8mb4_general_ci;

use loja;

create table categorias(
	id int not null auto_increment,
    nome varchar(30) not null, 
    dtCriacao date not null,
    primary key(id)

)default charset = utf8;

create table produtos(
	id int not null auto_increment,
    nome varchar(30) not null, 
    preco decimal(6,2) not null,
    quantidade int not null,
    idCategoria int not null,
    primary key(id),
    foreign key (idCategoria) references categorias(id)

)default charset = utf8;

