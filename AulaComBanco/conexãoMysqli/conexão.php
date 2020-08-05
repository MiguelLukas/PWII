<?php 
    
    //Fecha conexão com mysqli
    function DBclose($conn){
        @mysqli_close($link) or die(mysqli_error($conn));
    }

    // Abre conexão com mysqli
    function DBconnect(){
        $conn = @mysqli_connect(host, user, password) or die(mysql_connect_error());
        mysqli_select_db($conn,'produtos');
        mysqli_set_charset($conn, charset) or die(mysqli_error($conn));

        return $conn;
    }




    // Conexão com o banco de dados
        /* 
            // teste de conexão 
            $link = mysqli_connect('localhost', 'root', '');
            if (!$link) {
                die('Nao conectou! - ' . mysqli_error());
            }
            echo 'Conectou!';
        */

?>