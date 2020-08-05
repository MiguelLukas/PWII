<?php

    // importando arquivos
    include 'ConnectDao.php'; // importando a classe de conexão d=com banco de dados

    class LoginDao{

        public function validarLoginDao($email, $senha)
        {

            // conexão com banco
            $dao = new ConnectDao();

            // cria variavel $conn que recebe a conexão por meio do objeto $dao
            $conn = $dao->connect();

            // criando obj da classe Login

            // realiza o processo de atualização no banco de dados
            try {
                
                //realizando a busca no banco de dados pessoa
                $res = $conn->prepare(" SELECT * FROM login WHERE email = '$email'");
                $res->execute();
        
                // retorna todos resultados da verificação pesquisados
                $result = $res->fetchAll();

                //verificando se a sessão está aberta caso não esteja uma sessão ira se abrir
                if(session_status() !== PHP_SESSION_ACTIVE){
                    session_start();
                }
                //declarando as variaveis de sessão
                $_SESSION['loginValidado'] = $result;
                $_SESSION['SuccessVerifica'] = "Usuario verificado com secesso"; 

            //retornando a variavel de sessão com a validação do banco de dados 
            return $_SESSION['loginValidado'];
            }
            catch (Exception $e) {
                // erro de SQL Execute
               echo "$e ERRO na classe LoginDao metodo validarLogin()";
                return $e;
            }

        } // fechamento do metodo de validarLogin

    } // fechamento  da classe LoginDao

