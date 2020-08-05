<?php

    class Login
    {

        // atributos da classe Login
        private $email;
        private $senha;

        // metodo construtor da classe Login
        public function __construct($email, $senha){
            
        $this->email = $email;
        $this->senha = $senha;

        }

        // get e set dos atributos da classe Login
        // get e set de $email
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        // get e set de $senha
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }

    } // fechamento da classe Login
    