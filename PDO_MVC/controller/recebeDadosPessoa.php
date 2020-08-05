<?php

 // importando classes php
 include '../dto/Pessoa.php'; // importando classe Pessoa 
 include 'PessoaController.php'; // importando clasee PessoaController

 // Recebendo dados do formulario 
 $nome = $_POST['nome'];
 $endereco = $_POST['endereco'];
 $cep = $_POST['cep'];
 $observacao = $_POST['obs'];

 //crio minha instancia de obj da classe pessoa 
 $objPessoa = new Pessoa($nome, $endereco, $cep, $observacao);  //passando dados recidos do formulario para o obj

 //Chamar controller
 $objPessoaCont = new PessoaController();
 $objPessoaCont->inserirPessoa($objPessoa); // inserindo os dados no banco atraves do metodo da classe PessoaController
