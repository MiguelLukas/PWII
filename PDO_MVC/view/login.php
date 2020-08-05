<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login de usuario </title>
    <link rel="stylesheet" type="text/css" href="../css/log.css"/>
    <style> /* documentop css interno */
        .container{
            text-align: center;
            margin: 0 auto;
            width: 100%;
            color: blueviolet;
            font-family: cursive;
        }
        .font {
            font-size: larger;
            font-family: cursive;
        }
        .header{
            padding: 20px;
            margin-bottom: 100px;
            background: blueviolet;
            color: white;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }
        @media(max-width: 700px){
            .header{
                flex-direction: column;
            }
            .normal{
                margin: 20px;
                padding: 2px;
                width: 50%;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }
        .img{
            border-radius: 10px;
            width: 50px;
            height: 50px;
        }   
        .normal{ /* css das divs que carregam uma label e um input */
            margin: 0 auto;
            padding: 10px;
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            border: solid 2px blueviolet;
            border-radius: 10px;
            background-color: white;

        }
        .box{
            margin-top: 30px;
            color: blueviolet;
            padding-left: inherit;
            
        }
        .input{ /* css dos inputs de entrada de dados */
            color:blueviolet;
            padding: 5px;
            border: solid 1px blueviolet;
            border-radius: 10px;
            cursor: pointer;
            font-family: cursive;
        }  
        .input:hover{
            border: solid 2px purple;
        }
        .btn{
            margin-top: 30px;
            background-color: white;
            color: blueviolet;
            border-radius: 5px;
            height: 30px;
            border: solid 1px blueviolet;
            cursor: pointer;
            font-family: cursive;
        }
        .btn:hover{
            border: solid 2px purple;
            color: purple;
        }
        .footer{
            color: white;
            background-color: blueviolet;
            width: 100%;
            margin-top: 50px; 
            padding: 20px;
        }
    </style>
</head>

<body class="container" > <!--Pagina de login-->
        <header class="header" >
            <label class="font" > Login de Usuario  </label>
            <img class="img" alt="perfil" src="../img/perfil.jpg"> 
        </header>

        
		<form class="normal" method="post" action="../controller/loginDados.php" method="post">
            <label class="font" > Login de Usuario  </label>

            <div class="box">
                Email:
                <input class="input" type="text" name="email" required>
            </div>

            <div class="box" >
                Senha:
                <input class="input" type="password"  name="senha" required>
             </div>
            
            <button  class="btn" type="submit">
                ENTRAR
            </button>

        </form>
        
        <!--<footer class='footer' >
            <label class='font' >Copyright Miguel Lukas</label>
        </footer>-->

    </body>
</html>