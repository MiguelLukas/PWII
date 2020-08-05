<?php

    include 'ConnectDao.php'; // importando a classe de conexão d=com banco de dados

    class PessoaDao{

        public function inserirPessoa(Pessoa $objPessoa){

            // conexão com banco
            $dao = new ConnectDao();

            // cria variavel $conn que recebe a conexão por meio do objeto $dao
            $conn = $dao->connect();

            //realiza o processo de insert no banco de dados
            try{ // tentativa de atribuição de dados no banco de dados 

                // variavel de inserçãpo de dados $insert
                $insert = $conn->prepare("INSERT INTO pessoa(nome, endereco, cep, obs)"
                ."VALUES(:nome, :endereco, :cep, :obs)"); //inserindo dados na tabela no banco pessoa

                //inserindo dados no banco de dados 
                $insert->BindValue(":nome", $objPessoa->getNome());
                $insert->BindValue(":endereco", $objPessoa->getEndereco());
                $insert->BindValue(":cep", $objPessoa->getCep());
                $insert->BindValue(":obs", $objPessoa->getObs());
                $insert->execute(); // executa a inserçãode dados

                return 1; //retornando ok

            } catch (Exception $e) {
                //echo "$e ERRO na class PessoaDao, metodo inserirPessoa() ";
                //echo 'erro de inserção: ' . $e->getMessage();
                //devolve para o objPessoa o status de erro
                return 0;
            }

            $dao->disconnect();  //fecha conexão com o banco de dados

        }// fechamento do metodo inserir Pessoa
        
        public function pesquisarPessoa($conteudo, $pesquisa) {

            // conexão com banco
            $dao = new ConnectDao();

            // cria variavel $conn que recebe a conexão por meio do objeto $dao
            $conn = $dao->connect();

            // realiza o processo de select no banco de dados
            try { //tentativa de select no banco de dados 
                
                $res = $conn->prepare("SELECT * FROM pessoa WHERE $pesquisa LIKE '%$conteudo%' ");
                $res->execute();
     
                /* retorna todos resultados da pesquisa */
                
                $result = $res->fetchAll();
 
                // retorna  dados pesquisados
                return $result;

            }catch (Exception $e) {
                //echo "$e ERRO na class PessoaDao, metodo pesquisarPessoa() ";// erro de SQL Execute   
                return null;
            

             // fecha a conexão
             $dao->disconnect();
            }

        }// fechamento da metodo pesquisarPessao

        public function pesquisarPessoaId(Pessoa $objPessoa){

              // conexão com banco
              $dao = new ConnectDao();

              // cria variavel $conn que recebe a conexão por meio do objeto $dao
              $conn = $dao->connect();
       
               // realiza o processo de select no banco de dados apartir do ID 
               try { //tentativa de select no banco de dados para 
   
                   $res = $conn->prepare("SELECT * FROM pessoa WHERE id=". $objPessoa->getId().";");
                   $res->execute();
       
                   /* retorna todos resultados da pesquisa */
                   $resultId = $res->fetchAll();
   
                   // retorna  dados inseridos
                   return $resultId;
   
               } catch (Exception $e) {
                   echo "$e ERRO na class PessoaDao, metodo pesquisarPessoaId() ";
                   // erro de SQL Execute
                   return null;
               }
       
               // fecha a conexão
               $dao->disconnect();
               
        }// fechamento de metodo pesquisaPessoaId

        public function excluirPessoa(Pessoa $objPessoa) {

            // conexão com banco
            $dao = new ConnectDao();

            // cria variavel $conn que recebe a conexão por meio do objeto $dao
            $conn = $dao->connect();
    
            // realiza o processo de select no banco de dados
            try {

                // $res recebe o delete com o id para excluir o registro
                $res = $conn->prepare("DELETE FROM pessoa WHERE id = " . $objPessoa->getId() . ";"); 
                $res->execute();
    
                // retorna  1 para dado excluído com sucesso
                return 1;
            } catch (Exception $e) {
                echo "$e ERRO na class PessoaDao, metodo excluirPessoa() ";
                // erro de SQL Execute
                return null;
            }
    
            // fecha a conexão
            $dao->disconnect();
        }// fechamento da metodo excluirPessoa

        public function atualizarPessoa(Pessoa $objPessoa, $id){

            // conexão com banco
            $dao = new ConnectDao();

            // cria variavel $conn que recebe a conexão por meio do objeto $dao
            $conn = $dao->connect();

            // realiza o processo de atualização no banco de dados
            try {

                // $res recebe o delete com o id para excluir o registro
                $res = $conn->prepare("UPDATE pessoa SET nome = '".$objPessoa->getNome()."'
                                    ,endereco = '".$objPessoa->getEndereco()."'
                                    ,cep = '".$objPessoa->getCep()."'
                                    ,obs = '".$objPessoa->getObs()."' WHERE id = $id ;");
                $res->execute();

                $upgrade = 1;

                return $upgrade;
            } catch (Exception $e) {
                echo "$e ERRO na class PessoaDao, metodo atualizarPessoa() ";
                // erro de SQL Execute
                return null;
            }


        } // fechamento do metodo atualizarPessoa
        
    }// fechamento da classe PessoaDao
