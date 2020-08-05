CREATE DATABASE projeto_jal;

/*Selecionar o banco de dados criado.*/

USE projeto_jal;

/*Criar a tabela de usuários.*/

CREATE TABLE `usuarios` (

`id` int(11) NOT NULL,

`nome` varchar(30) NOT NULL,

`email` varchar(100) NOT NULL,

`senha` varchar(25) NOT NULL,

`nivel` varchar(25) NOT NULL,

`data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Dados para tabela de usuários.*/

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel`) VALUES

(1, 'João Carlos', 'joaocarlos@gmail.com', '123', 'admin'),

(2, 'Henrique', 'henry@hotmail.com.br', '123', 'tecnico');

/*Adicionar chave primária à tabela de usuários.*/

ALTER TABLE `usuarios` ADD PRIMARY KEY (`id`);

/*Adicionar auto incremento à tabela de usuários.*/

ALTER TABLE `usuarios` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;