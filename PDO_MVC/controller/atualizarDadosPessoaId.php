<?php
include '../dto/Pessoa.php';
include 'PessoaController.php';

//recebendo os dados do formulario para pesquisa
$id = $_GET['id'];
    
// criando a instancia de um obj Pessoa
$objid = new Pessoa('','','','');

// colocando o valor do id no atributo id da classe Pessoa
$objid->setId($id);

// chamando o controller
$objPessoaCont = new PessoaController();
$objPessoaCont->atualizarPessoaId($objid);
