<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> ATUALIZAR REGISTRO </title>
        <link rel="stylesheet" type="text/css" href="../css/upgrade.css">
        <style> /* documento css interno  */
            .container{
                margin: 0 auto;
                text-align: center;
                width: 80%;
                font-family: cursive;
                color: blueviolet;
            }
            .header{
                padding: 20px;
                margin-top: 20px;
                background: blueviolet;
                color: white;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
            .corpo{
                margin-top: 20px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
            }
            .div_normal{ /* css das divs que carregam uma label e um input */
                margin: 20px;
                padding: 2px;
                width: 300px;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
            .label{
                color: white;
                background-color: blueviolet;
                padding: 10px;
                border-bottom-left-radius: 5px;
                border-top-left-radius: 5px;
                width: 50%;
                margin-right: 20px;
            }
            .input{ /* css dos inputs de entrada de dados */
                color:blueviolet;
                padding: 5px;
                border: solid 1px blueviolet;
                border-bottom-right-radius: 5px;
                border-top-right-radius: 5px;
            }
            .btn{ /* css do botão cadastrar */
                padding: 10px;
                color: blueviolet;
                border-radius: 15px;
                border: solid 2px white;
                background-color: white;
                font-family: cursive;
                font-size: large;
            }
            .btn:hover{ /* css do botão cadastrar */
                color: white;
                background-color: blueviolet;
            }
            .footer{
                color: white;
                background-color: blueviolet;
                width: 100%;
                padding: 20px;
            }
            .img{
                border-radius: 5px;
                width: 50px;
                height: 50px;
            }
        </style>
    </head>
    <body class="container">

        <header class="header">
            <label> ATUALIZAÇÃO DE DADOS   </label>
            <img class="img" alt="perfil" src="../img/perfil.jpg">
        </header>

    <?php    

        // verificando se a sessão esta aberta caso não estiver ela irá se abrir!
        if(session_status() !== PHP_SESSION_ACTIVE){
           session_start();
        }

        // verifica se a variavel $upgrade_pesquisa esta com conteudo

        if(isset($upgrade_pesquisa)){ // caso tiver conteudo a pagina ira ser imprimida na tela

            //iteração dos index as variaveis a partir do array $upgrade_pesquisa
            foreach ($upgrade_pesquisa as $value){ // iterando e colocando os valores do banco nas variaveis 
                $id =  $value['id'];
                $nome = $value['nome'];
                $endereco = $value['endereco'];
                $cep = $value['cep'];
                $obs = $value['obs'];

                // imprimi todo o conteudo html
                echo "

                <form method='post' action='../controller/atualizarDadosPessoa.php'>
                    
                    <div class='corpo margin'>

                        <div class='div_normal'>
                            <label class='label' > Id: </label>
                            <input class='input' name='id' type='text' value='$id' />
                        </div>

                        <div class='div_normal'>
                            <label class='label' > Nome: </label>
                            <input class='input' name='nome' type='text' value='$nome' />
                        </div>

                        <div class='div_normal'>
                            <label class='label' > Endereco: </label>
                            <input class='input' name='endereco' type='text' value='$endereco' />
                        </div>

                        <div class='div_normal'>
                            <label class='label' > Cep: </label>
                            <input class='input' name='cep' type='text' value='$cep' />
                        </div>

                        <div class='div_normal'>
                            <label class='label' > Observação: </label>
                            <input class='input' name='obs' type='text' value='$obs' />
                        </div>

                        <div class='div_normal'>
                            <button class='btn' name='att' type='submit'>
                                ATUALIZAR
                            </button>
                        </div>
                        
                    </div>

                </form>";

            }// fechamento do foreach

        } else { // em caso de erro na atualização

            // verifica se a variavel de sessão erroUpgrade esta com conteudo 
            if(isset($_SESSION['erroUpgrade'])) 
               echo $_SESSION['erroUpgrade.upgrade.php'];
                
            }
            // apagando todos os dados da sessão
            session_unset();
    
            // destroi a variavel de sessão 
            session_destroy();

    ?>

        <footer class="footer" >
            <label> Copyright Miguel Lukas </label>
        </footer>
        
    </body>
<html>
