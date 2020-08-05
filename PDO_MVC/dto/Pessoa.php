<?php

    // dto = data tranfer object: constitue as classes que são representadas tambem no banco de dados

    class Pessoa {

    // Atributos da classe Pessoa
    private $id;
    private $nome;
    private $endereco;
    private $cep;
    private $obs;

    // Metodo contrutor da classe Pessoa
    public function __construct($nome, $endereco, $cep, $obs) {
    
     $this->nome = $nome;
     $this->endereco = $endereco;
     $this->cep = $cep;
     $this->obs = $obs;

    }
    
    // Metodos especiais get(acessar o atributo) e set(modifica o atributo) da classe Pessoa 

    // get e set Id 
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    // get e set nome 
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    // get e set endereco 
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    // get e set cep 
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }

    // get e set observação abreviado para obs 
    public function getObs(){
        return $this->obs;
    }
    public function setObs($obs){
        $this->obs = $obs;
    }

} // fechamento da classe Pessoa 
