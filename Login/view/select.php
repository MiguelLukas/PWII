<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/table.css" media="screen"/>
    </head>
    <body>
        <?php
        

        include '../model/connect.php';

        //Verifica se os dados de login estão corretos
        $usuario = $_POST ['usuario'];
        $senha = $_POST ['senha'];

        //Pesquisa no banco de dados 
        $sql = "SELECT usuario, senha FROM usuario where usuario='$usuario' and senha='$senha'";
        
        $result = $conn->query($sql); // coloca na variavel result o resultado da pesquisa e conexão 
        
        if ($result->num_rows > 0) {
            //Inicia a sessão na pagina
            session_start();

            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;

            //Redireciona para a pagina de bem-vindo
            header("location: welcome.php");
            exit();
        } else {
            echo "Não foi possivel realizar o login";// imprime a mensagem 
        }
        $conn->close();
        
        ?>
    </body>

</html>