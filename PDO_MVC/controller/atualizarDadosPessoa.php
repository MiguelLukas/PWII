<?php
include '../dto/Pessoa.php';
include 'PessoaController.php';

//recebendo os dados do formulario para pesquisa
$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$obs = $_POST['obs'];   
    
// criando a instancia de um obj Pessoa
// e apartir do construtor ele ja inplementa os dados do formulario no objPessoa
$objPessoa = new Pessoa($nome,$endereco,$cep,$obs);

// chamando o controller
$objPessoaCont = new PessoaController();

$objPessoaCont->atualizarPessoa($objPessoa, $id);
