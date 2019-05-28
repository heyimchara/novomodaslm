CREATE DATABASE basemodaslm;

USE basemodaslm;

CREATE TABLE cadastro_cliente(
cod_cadastrocliente int NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) not null,
cpf VARCHAR(10) not null,
tel  VARCHAR(50) not null,
email VARCHAR(50) not null,
senha VARCHAR(50) not null,
primary key(cod_cadastrocliente)
);

SELECT * from cadastro_cliente;

CREATE TABLE cadastro_produto(
cod_cadastroproduto int NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) not null,
descricacao VARCHAR(50) not null,
quantidade VARCHAR(50) not null,
preco VARCHAR(50) not null,
primary key(cod_cadastroproduto)
);

SELECT * from cadastro_produto;

CREATE TABLE login_cliente(
cod_cliente int NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) not null,
email VARCHAR(50) not null,
senha VARCHAR(50) not null,
primary key(cod_cliente)
);

SELECT * from login_cliente;

