<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../cs/tabeladados.css">
        <title> Pequisa Registros </title>
        <script> // metodo 
            function post_to_url(path, params, method){
                method = method || "post"; //default: POST

                var form = document.createElement("form");

                form._submit_function_ = form.submit;

                form.setAttibute("method", method);
                form.setAttibute("action", path);

                for (var key in params){
                    var hiddenField = document.createElemente("input");
                    hiddenField.setAttribute("type", "hidden");
                    hiddenField.setAttribute("name", key);
                    hiddenField.setAttribute("value", params[key]);

                    form.appedChild(hiddenField);
                }

                document.body.appendChield(form);
                form._submit_function_();
            }
        </script>
        <style> /* documento css interno */
            .container{
                margin: 0 auto;
                text-align: center;
                width: 100%;
                font-family: cursive;
                color: blueviolet;
            }
            .cont{
                margin-left: 50px;
                margin-right: 50px;
                display: flex;
                justify-content:row ;
                align-items: center;
                flex-direction: column;
            }
            a{
                text-decoration: none;
                color: blueviolet;
            }
            .header{
                padding: 20px;
                margin-bottom: 20px;
                background: blueviolet;
                color: white;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
            .font{
                font-size: larger;
            }
            .pesquisa {
                margin-top: 40px;
                margin-bottom: 50px;
                display: flex;
                justify-content: flex-start;
                flex-direction: row;
                text-align: center;
                align-items: center;
                width: 90%;
                height: 50px;
            }
            .img{
                border-radius: 5px;
                width: 50px;
                height: 50px;
            }
            .input_pesquisa{
                color: blueviolet;
                padding: 5px;
                width: fit-content;
                border: solid 2px blueviolet;
                border-radius: 10px;
            }
            .btn_pesquisa{
                padding: 10px;
                background: blueviolet;
                color: white;
                border: none;
                border-radius: 10px;
            }
            .label_filtro{
                padding: 10px;
                font-size:13px;
                width: 50px;
                margin-right: 1;
                
                
            }
            .margin_{
                margin: 5px;
            }
            .table_cabecalho{
                padding: 10px;
                width: 100%;
                margin-top: 20px;
                text-align: center;
            }
            .table_registros{
                padding: 10px;
                width: 100%;
                text-align: center;
            }
            .td_cabecalho{
                border-radius: 10px;
                border: none;
                width: 100px;
                padding: 5px;
                border: solid 2px blueviolet;
                background: blueviolet;
                color: white;
            }
            .td_registros{
                border-radius: 10px;
                border: none;
                width: 100px;
                height: 30px;
                margin: 20px;
                border: solid 2px blueviolet;
            }
            .back{
                background: blueviolet;
            }
            .alink_{
                color: white;
            }
            .alink_up:hover{
                color: green;
            }
            .alink_del:hover{
                color: red;
            }
            .footer{
                color: white;
                background-color: blueviolet;
                width: 100%;
                padding: 20px;
                
            }
            
        </style>

    </head>

    <body class="container" >

        <div class="header">
            <label class="font" > Pesquisar registros no banco de dados </label>
            <img class="img" alt="perfil" src="../img/perfil.jpg">
        </div>

        <div class="cont">
            <form class="pesquisa" method="post" action="../controller/pesquisarDadosPessoa.php">     

                <div class="pesquisa">
                    <label class="label_filtro" for="pesquisa"> Filtro de pesquisa </label>
                    <select class="input_pesquisa margin_" name="pesquisa">
                        <option value="id">
                           id:
                        </option>
                        <option value="nome"> 
                            Nome:
                        </option>
                        <option value="endereco">
                           Endereço:
                        </option>
                        <option value="cep">
                            Cep:
                        </option>
                        <option value="obs">
                           Observação:
                        </option>
                    </select>
                    <input class="input_pesquisa margin_" type="text" name="conteudo" value="<?= isset($_POST['conteudo']) ? $_POST['conteudo'] : '' ?>" placeholder="Pesquise aqui!"/>
                    <button class="btn_pesquisa margin_" type="submit"> Pesquisar </button>
                </div>

            </form>  

        <?php

        // criar relatorio 
        //$retorno = null;

        // verificando se a sessão esta aberta caso não estiver ela irá se abrir!
        if(isset($retorno)){
            if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
            }
        }
        
        // sessão de Delete
        if(isset($_SESSION['delete'])) { // se a varivel de sessão delete esta com conteudo
           echo "Dados excluidos com sucesso! ";
           // redirecionar para a pagina enviando a requisição de pesquisa
           echo "<script> post_to_url('../controller/pesquisaDadosPessoa.php',{ nome: '' }, 
           'POST'); </script> ";
        }
        if(isset($_SESSION['erroDelete'])) {
            echo "Dados não foram excluidos! ";
        }

        // sessão de Pesquisa
        if(isset($retorno)){ // em casa da variavel retorno estiver com conteudo 

            echo "
                <label class='font label_titulo'> Registros de pessoas </label>
                <table class='table_cabecalho' >
                    <tr class='tr_cabecalho'>
                        <td class='td_cabecalho'>ID</td>
                        <td class='td_cabecalho'>NOME</td>
                        <td class='td_cabecalho'>ENDEREÇO</td>
                        <td class='td_cabecalho'>CEP</td>
                        <td class='td_cabecalho'>OBS</td>
                        <td class='td_cabecalho'>AÇÃO</td>
                    </tr>
                </table>";

            foreach ($retorno as $value){ // iterando e colocando os valores do banco nas variaveis 
                $id =  $value['id'];
                $nome = $value['nome'];
                $endereco = $value['endereco'];
                $cep = $value['cep'];
                $obs = $value['obs'];


                // iterando os valores da variavel $retorno e colocando nas celulas da tabela
                echo 
                "
                    <table class='table_registros' >
                        <tr> 
                            <td class='td_registros'>$id</td>
                            <td class='td_registros'>$nome</td>
                            <td class='td_registros'>$endereco</td>
                            <td class='td_registros'>$cep</td>
                            <td class='td_registros'>$obs</td>
                            <td class='td_registros back'>
                                <a class='alink_ alink_up' name='id' value='$id' href='../controller/atualizarDadosPessoaId.php?id=$id'>
                                    Atualizar 
                                </a><br> 
                                <a class='alink_ alink_del' name='id' href='../controller/excluirDadosPessoa.php?id=$id'>
                                    Deletar  
                                </a> 
                            </td>	
                        </tr>
                    </table>
                ";

            } // fim do foreach

        } else { // em caso de erro na pesquisa 
            if(isset($_SESSION['erroPesquisa'])) 
               echo $_SESSION['erroPesquisa'];
            
        }
        // apagando todos os dados da sessão
        session_unset();

        if(isset($retorno)){
            // destroi a variavel de sessão 
            session_destroy();
        }

        ?>
        </div> <!-- Fechaento da div cont -->

        <footer class="footer" >
            <label class="font"> Copyright Miguel Lukas </label>
        </footer>

    </body>
<html>