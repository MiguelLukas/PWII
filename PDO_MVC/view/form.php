<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> CADASTRAR PESSOA </title>
        <link rel="stylesheet" type="text/css" href="../css/.css">
        <link rel="stylesheet" type="text/css" href="../css/alert.css">
        
        <!--<script type="text/javascript" href="../js/functions.js"></script>-->
        <script> // função para fechar o botão de alerta 

            // função do botão de fechar alerta 
            function fecharBtn() {
                //var x = document.getElementById("alertOk");
                //x.getElementsByClassName("alert success") [0].style.display = 'none';
                document.getElementById("alertok");
                window.location = "../index.php";
                alert("copyrigth Miguel Lukas Costa Almeida");
            }
            
        </script>
        <style> /* documento css interno */

            .container{ /* css do body */
                /*width: 80%;*/
                text-align: center;
                margin: auto 0;
                color: blueviolet;
            }
            .font{
                font-family: cursive;
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
            .img{
                border-radius: 5px;
                width: 50px;
                height: 50px;
            }
            .link{
                text-decoration: none;
            }
            .div_normal{ /* css das divs que carregam uma label e um input */
                margin: 20px;
                padding: 2px;
                width: 300px;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
            .corpo{ /* css do corpo do formulario */
                display: flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }
            .margin{ /* css para definição de margin top */
                margin-top: 20px;
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
                font-size: 13px;
            }
            .btn:hover{ /* css do botão cadastrar */
                color: white;
                background-color: blueviolet;
            }
            a{
                text-decoration: none;
            }
            .footer{
                color: white;
                background-color: blueviolet;
                width: 100%;
                padding: 20px;
            }

        </style>
    </head>

    <body class="container font">

            <?php // codigo do alerta de erro e sucesso

        // verifica se a sessão ja não esta aberta 
        // se não estiver aberta, a sessão sera aberta 

        if(session_status() !== PHP_SESSION_ACTIVE){
        session_start(); //uma sessão ira se abrir
        }

        // if que cria a div de alerta
        if (isset($_SESSION['status'])) { // se $_SESSION['status'] contem valor, ira ser criada uma div id="alertOk"

        ?>

        <div id="alertok"><!-- div do alerta  -->
            <div class="<?php echo $_SESSION['css']; ?>" > <!--esta sendo passada a class css que contem o valor = 'alert' uma classe atribuida no css-->

                <?php echo $_SESSION['status']; // sera mostrada a mensagem dentro do alert ?> 
                <span class="closebtn" onclick="fecharBtn();" > &times; </span><!-- Criando botão que chama o metodo em js para fechar  alerta -->

            </div>
        </div>

        <?php
        } // fechamento do if de criação da div 

        //apagando todos os dados da sessão
        session_unset();
        //destroi as variaveis 
        session_destroy();

        ?>

        <div class="header" >
            <label class="font" > CADASTRO DE PESSOAS </label>
            <img class="img" alt="perfil" src="../img/perfil.jpg"> 
        </div>

        <form method ="post" action="../controller/recebeDadosPessoa.php">

            <div class="corpo margin">

                <div class="div_normal">
                    <label class="label" > Nome: </label>
                    <input class="input" name="nome" type="text" placeholder=" Digite seu nome " value="<?= isset($_POST['nome']) ? $_POST['nome'] : '' ?>" />
                </div>

                <div class="div_normal">
                    <label class="label"  > Endereço: </label>
                    <input class="input" name="endereco" type="text" placeholder=" Digite seu endereço " value="<?= isset($_POST['endereco']) ? $_POST['endereco'] : '' ?>" />
                </div>

                <div class="div_normal">
                    <label class="label" > Cep: </label>
                    <input class="input" name="cep" type="text" placeholder=" Digite seu cep " value="<?= isset($_POST['cep']) ? $_POST['cep'] : '' ?>" />
                </div>

                <div class="div_normal">
                    <label class="label" > Observação: </label>
                    <input class="input" name="obs" type="text" placeholder=" Digite uma observação " value="<?= isset($_POST['obs']) ? $_POST['obs'] : '' ?>" />
                </div>

                <div class="div_normal">
                    <button class="btn" name="cadastrar" type="submit">
                        CADASTRAR
                    </button>
                    <a class="btn" href='../view/tabelaDados.php'>
                        REGISTROS
                    </a>
                    </button>
                </div>

            </div><!-- Fechamento da div class corpo -->
        </form>

        <footer class="footer font" >
            <label> Copyright Miguel Lukas </label>
        </footer>
       
    </body>
</html>


