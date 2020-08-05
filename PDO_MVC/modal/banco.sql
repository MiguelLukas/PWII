create database Pessoa;

use Pessoa;

create table if not exists `pessoa`(
`id` int(11) AUTO_INCREMENT,
`nome` varchar(50) DEFAULT NULL,
`endereco` varchar(100) UNIQUE DEFAULT NULL,
`cep` varchar(14) DEFAULT NULL,
`obs` varchar(250) DEFAULT NULL,
`data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
) 
CHARACTER SET utf8 COLLATE utf8_general_ci;

create table if not exists `login`(
`id` int(11) AUTO_INCREMENT,
`email` varchar(50) DEFAULT NULL,
`senha` varchar(14) DEFAULT NULL,
`data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
) 
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO login(email, senha) VALUES ('admin',123456);