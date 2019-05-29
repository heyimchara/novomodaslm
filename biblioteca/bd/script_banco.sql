CREATE DATABASE basemodaslm;

USE basemodaslm;

CREATE TABLE cliente(
cod_cliente int NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) not null,
cpf VARCHAR(10) not null,
tel  VARCHAR(50) not null,
email VARCHAR(50) not null,
senha VARCHAR(50) not null,
primary key(cod_cliente)
);



CREATE TABLE cadastro_produto(
cod_cadastroproduto int NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) not null,
descricacao VARCHAR(50) not null,
quantidade VARCHAR(50) not null,
preco VARCHAR(50) not null,
primary key(cod_cadastroproduto)
);

CREATE TABLE categoria(
cod_categoria INT not null auto_increment,
nome VARCHAR(50) NOT NULL,
primary key(cod_categoria)
);






