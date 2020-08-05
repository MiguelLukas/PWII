CREATE DATABASE atividade_ead;

/*Selecionar o banco de dados criado.*/

USE atividade_ead;

/*Criar a tabela de usuários.*/

CREATE TABLE `funcionarios`(

`id_func` int(11) NOT NULL,

`nome` varchar(30) NOT NULL,

`extra` INT NOT NULL,

`cpf` varchar(25) NOT NULL,

`nivel` varchar(25) NOT NULL,

`salario` int(50) NOT NULL,

`data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Adicionar a chave primaria a tabela funcionarios */

ALTER TABLE `funcionarios` ADD PRIMARY KEY (`id_func`);

/*Adicionar auto incremento à tabela de usuários.*/

ALTER TABLE `funcionarios` MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;