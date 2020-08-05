<?php

    //include '../modal/ConnectDao.php'; // importando a classe de conexão com banco de dados

    class Select{

        // atributos
        private $idS;
        private $nomeS;
        private $enderecoS;
        private $cepS;
        private $obsS;
        private $dataS;

        //contrutor da classe Select
        public function __contruct($id, $nome, $endereco, $cep, $obs, $data){
            
            $this->idS = $id;
            $this->nomeS = $nome;
            $this->enderecoS = $endereco;
            $this->cepS = $cep;
            $this->obsS = $obs;
            $this->dataS = $data;

        }

        //metodos especiais da classe Select
        //get e set idS
        public function getIdS(){
            return $this->IdS;
        }
        public function setIdS($idS){
            $this->idS = $idS;
        }

        //get e set nomeS
        public function getNomeS(){
            return $this->nomeS;
        }
        public function setNomeS($nomeS){
            $this->nomeS = $nomeS;
        }

        //get e set enderecoS
        public function getEnderecoS(){
            return $this->nomeS;
        }
        public function setEnderecoS($enderecoS){
            $this->enderecoS = $enderecoS;
        }

        //get e set cepS
        public function getCepS(){
            return $this->nomeS;
        }
        public function setCepS($cepS){
            $this->cepS = $cepS;
        }

        //get e set obs / observação
        public function getObsS(){
           return $this->obsS;
        }
        public function setObsS($obsS){
            $this->obsS = $obsS;
        }

        //get e set dataS
        public function getDataS(){
           return $this->dataS;
        }
        public function setDataS($dataS){
            $this->dataS = $dataS;
        }

    } // fechamento da classe Select
