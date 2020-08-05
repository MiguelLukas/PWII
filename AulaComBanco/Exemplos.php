<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> PHP Aula 04 <title>
</head>
<body>
    <?php // Abertura codigo php

        // 2º FORMA

        //forma de conectar ao banco de dados Orientado a Objeto 2ª forma mais recomendada
        
        // variaveis de conexão
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "php_com_banco";

        $conn = new mysqli($host, $user, $password, $database) // objeto da classe mysqli para a conexão

        if ($conn->connect_error) {
            die(" ERRO DE CONEXÃO: " . $conn->connetc_error); // erro de conexão  mal sucedida
        }
        echo " CONEXÃO BEM SUCEDIDA"

        $conn->close(); // função de fechar a conexão 

        
        

        // 3º FORMA 
        
        /* forma de conectar ao banco de dados Orientado a Objeto 1ª forma mais recomendada 
        echo" Ola mundo ";

            $host = "localhost";
            $user = "root";
            $password = "";
            $database = "php_com_banco";

            try {
                $sconn = new PDO("mysql:host=$host;dbname=$database", $user, $password); // conexão ao banco de dados
                            
                // configura o modo de erro PDO para a excesão
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo"Conexão bem secedida";

            }catch(PDOException $ex){    
                echo" Erro de conexão: " . $ex->getmessage(); // saida de erro
            }
            $conn = null
        
        
        */ 


    ?><!-- Fechamendo do corpo php dentro do html  -->
</body>
</html>