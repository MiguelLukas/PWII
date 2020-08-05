<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BEM VINDO </title>

</head>

<body>
    <?php

    //Se o usuario conseguiu se conectar, entra na pagina com a sessão ativa
    if (session_status() !== PHP_SESSION_ACTIVE){
        session_start();
    }

    if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset ($_SESSION['usuario']);
        unset ($_SESSION['senha']);
        header("location: ../index.php");
    } else {
        echo $usuario = $_SESSION['usuario'];
    }

    ?>
    <h2>Bem-Vindo!!</h2>s
    <br/>

    <!--Botão de logout-->
    <button onclick="location.href = 'logout.php';">Logout</button>

</body>
</html>