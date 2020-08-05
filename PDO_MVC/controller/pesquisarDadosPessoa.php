<?php

include '../dto/Pessoa.php';
include 'PessoaController.php';

//recebendo os dados do formulario para pesquisa
$pesquisa = $_POST['pesquisa'];
$conteudo = $_POST['conteudo'];

// criando a instancia de um obj Pessoa

//chamando metodo da classe controller
$objPessoaCont = new PessoaController();
$objPessoaCont->pesquisarPessoa($conteudo, $pesquisa); 
