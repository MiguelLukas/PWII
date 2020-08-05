<?php

include '../modal/PessoaDao.php'; // importando classe de banco de dados da classe Pessoa 


 class PessoaController{

    // metodo para inserir o objPessoa com os dados para o banco
    public function inserirPessoa(Pessoa $objPessoa){

        //validações 
        if ($objPessoa->getNome() == '' || $objPessoa->getNome() == null){ // verifica se o nome não foi preencido
             
            if(session_status() !== PHP_SESSION_ACTIVE){ // se não tem nenhuma sessão aberta 
               session_start(); //uma sessão ira se abrir
            }

            // Criando mensagem de alerta de erro caso o  nome não seja inserido 
            $_SESSION['status'] =" Digite o nome "; 
            $_SESSION['css'] ='alert';  

            include '../view/form.php'; // controller devolve para view
            exit(); // Interrompe o fluxo de dados/ para as demais açoes não proceguirem

        } // fechamento do if de validação do nome 

        // chamar a classe de banco de dados e metodo de inserção
        $objPessoaDao = new PessoaDao(); // criando obj da classe PessoaDao
        $retorno = $objPessoaDao->inserirPessoa($objPessoa); //variavel que recebe o resultado do metodo inserirPessoa

        if($retorno != 0){

            // verifica se a sessão ja esta aberta 
            if(session_status() !== PHP_SESSION_ACTIVE){
               session_start(); //se a sessão não estiver aberta sera criada uma sessão
            }

            // criando mensagem de alerta de sucesso 
            $_SESSION['status'] = " Dados inseridos com sucesso "; 
            $_SESSION['css'] ='alert success';

            include '../view/form.php'; // controller devolve para view
            exit(); // Interrompe o fluxo de dados/ para as demais açoes não proceguirem
        }
        else
        {
            // verifica se a sessão ja esta aberta 
            if(session_status() !== PHP_SESSION_ACTIVE){
               session_start(); //se a sessão não estiver aberta sera criada uma sessão
            }

            // criando mensagem de alerta de sucesso 
            $_SESSION['status'] =" Dados não foram inseridos "; 
            $_SESSION['css'] ='alert';

            include '../view/form.php'; // controller devolve para view
            exit(); // Interrompe o fluxo de dados/ para as demais açoes não proceguirem
        }

    }// fechamento do metodo inserirPessoa

    public function pesquisarPessoa($conteudo, $pesquisa){

        // chama a classe do banco de dados o metodo de inserção
        $pesDao = new PessoaDao();

        $retorno = $pesDao->pesquisarPessoa($conteudo, $pesquisa);

        // verifica o resultado de $retorno, caso existir dados devolve para view
        // os dados, ou se ocorreu erro na pesquisa retorna para view erro

        if(isset($retorno)){ // se retorno estiver ok

            // verifica se a sessão esta aberta
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }
            // variavel de sessão que possui o array de dados com as dados da tabela pessoa 
            $_SESSION['retorno'] = $retorno; 
            include '../view/tabelaDados.php';
            exit();

        } else { // em caso de erro da variavel retorno 

            // verifica se a sessão esta aberta
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }

            // variavel de sessão que possui o array de dados com as dados da tabela pessoa 
            $_SESSION['erroPesquisa'] = "Erro: não foi possivel executar a pesquisa";
            include '../view/tabelaDados.php';
            exit();
        }

    }// fechaneto do metodo de PesquisaPessoa

    public function excluirPessoa(Pessoa $objPessoa){

        // chama a classe do banco de dados o metodo de inserção
        $objPes = new PessoaDao();
        $delete = $objPes->excluirPessoa($objPessoa);

        // verifica o resultado $delete, se o dado foi excluido retorna ok 
        // senão retorna erro
        if(isset($delete)){ // em caso de ok

            // verificar a sessão não esta aberta 
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }

            // criando variavel de sessão para delete com sucesso
            $_SESSION['delete'] = 'Dado foi excluido com sucesso !';
            include '../view/tabelaDados.php';
            exit();

        } else { // em caso de erro 
            
            // verificar a sessão não esta aberta 
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }

            // criando variavel de sessão em caso de erro da tentativa de excluir registro
            $_SESSION['erroDelete'] = "Erro: Não foi possivel excluir o dado! ";
            include '../view/tabelaDados.php';
            exit();
            
        }

    }// fechamento dometodo de excluirPessoa 

    public function atualizarPessoa(Pessoa $objPessoa, $id){
        
        // chama a classe do banco de dados o metodo de inserção
        $objPes = new PessoaDao();

        $upgrade = $objPes->atualizarPessoa($objPessoa, $id);

        // verifica o resultado $update, se o dado foi atualizado retorna ok 
        // senão retorna erro
        if(isset($upgrade)){ // em caso de ok

            // verificar a sessão não esta aberta 
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }

            // criando variavel de sessão com a atualização.
            $_SESSION['upgrade'] = 'Dado foi atualizado com sucesso! ';
            include '../view/tabelaDados.php';
            exit();

        } else { // em caso de erro 
            
            // verificar a sessão não esta aberta 
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }
            $_SESSION['erroUpgrade'] = "Erro: Não foi possivel Atualizar o dado! ";
            include '../view/tabelaDados.php';
            exit();
        }

    }// fechamento do metodo atualizarPessoa

    public function atualizarPessoaId(Pessoa $objid){
        
        // chama a classe do banco de dados o metodo de inserção
        $objPes = new PessoaDao();
        
        // chamando metodo da classe PessoaDao e passando os parametros
        $upgrade_pesquisa = $objPes->pesquisarPessoaId($objid);

        // verifica o resultado $update, se o dado foi atualizado retorna ok 
        // senão retorna erro
        if(isset($upgrade_pesquisa)){ // em caso de ok

            // verificar a sessão não esta aberta 
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }

            // criando variavel de sessão com dados do usuario a ser atualizado 
            $_SESSION['upgrade_pesquisa'] = $upgrade_pesquisa;
            include '../view/upgrade.php';
            exit();

        } else { // em caso de erro 
            
            // verificar a sessão não esta aberta 
            if(session_status() !== PHP_SESSION_ACTIVE){
                session_start();
            }
            $_SESSION['erro_upgrade_pesquisa'] = "Erro: Não foi possivel Atualizar o dado! ";
            include '../view/upgrade.php';
            exit();
        }

    }// fechamento do metodo atualizarPessoa

} // fechamemto da classe PessoaController
