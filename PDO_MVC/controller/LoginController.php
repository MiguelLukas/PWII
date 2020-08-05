<?php

include '../modal/LoginDao.php'; // importando classe de banco de dados da classe Pessoa 

 class LoginController{

    public function validarLoginCont(Login $objLogin){

        //inseri atributos do obj recebido para variaveis
        $email = $objLogin->getEmail();
        $senha = $objLogin->getSenha();

        // chama a classe do banco de dados o metodo de inserção
        $objLog = new LoginDao();
        $loginValidado = $objLog->validarLoginDao($email, $senha);

        // verifica o resultado $loginVerificado, se o dado foi atualizado retorna conteudo OK, 
        // senão retorna erro
        if(isset($loginValidado))
        { // em caso de ok
        
            // retorna dados verificados 
            // verificar a sessão não esta aberta 
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }

            // iterado o array $loginValidado e colocando conteudo nas variaveis para a validação  
            foreach($loginValidado as $value){
                $emailV = $value['email'];
                $senhaV = $value['senha'];
            }

            if(isset($senhaV) & isset($emailV))
            {

                // validando email e senha do usuario direto do banco de dados 
                if($objLogin->getEmail() == $emailV & $objLogin->getSenha() == $senhaV){
                    // caso a validação retorno ok
                    
                    //criando as variaveis de sessão com os dados do usuario
                    $_SESSION['loginValidado'] = $loginValidado;
                    $_SESSION['SuccessVerifica'] = "Usuario verificado com secesso"; 

                    include '../view/form.php';
                    exit();
                } else {

                    // verificar a sessão não esta aberta 
                    if(session_status() !== PHP_SESSION_ACTIVE){
                        session_start();
                    }

                    // criando variavelde sessão  de erro  
                    $_SESSION['erroVerifica'] = "Erro de verificação de usuario! ";
                    include '../view/login.php';
                    exit();
                }
            }

        } else { // em caso de erro da validação 
            
            // verificar a sessão não esta aberta 
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }

            // criando variavelde sessão  de erro  
            $_SESSION['erroVerifica'] = "Erro na Busca por usuario talvez o email ou senha esteja errado ! ";
            include '../view/login.php';
            exit();
        }

    }// fechamento do metodo validarLogin

 } // fechamento da classe LoginController
