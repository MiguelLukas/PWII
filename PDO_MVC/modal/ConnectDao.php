<?php

    class ConnectDao{

        public function connect(){ // metodo de conexão ao banco de dados 

            try{ // tenta a conexão com o banco de dados
                $conn = new PDO( //classe capaz de criar a conexão com o banco  de dados
                    "mysql:host=localhost;dbname=pessoa",'root','12345',
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );// fechamento do obj $conn feito atraves de um contrutor da classe PDO

                //configuração do erro do PDO 
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Conexão bem sucedida"; 

                return $conn;

            }// fechamento do try/tentativade conexão
            catch (PDOException $e){ // caso a tetativa de conexão for mal sucedida ele entrara na condição e erro
                $error = "Erro de conexão: " . $e->getMessage(); //retorna o erro na web
                return $error;
            } // fechamento da catch

        }// fechamento do metodo connect

        public function disconnect(){
            $this->conn = null;
        }

    } // fechamento da classe PessoaDao    
