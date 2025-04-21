create database if not exists bd_twitter;

use bd_twitter;

create table if not exists tb_usuarios  (
	id_user integer primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    nome_usuario varchar(50) not null,
    senha varchar(16) not null,
    telefone varchar(14) not null,
    data_nasc date not null 
);

select * from tb_usuarios;
    
    