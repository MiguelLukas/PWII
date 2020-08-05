<?php

    include 'config.php';   

    $conn = new mysqli($host, $user, $password, $database);
    $conn->set_charset("utf8");

    if ($conn->connect_error) {

    die("Erro de conexão: " . $conn->connect_error);

    }

    if ($log){
    echo "Conexão bem sucedida";

    }

    /*
    try {

    $sconn = new PDO("mysql:dbname=$database;host=$host", $user, $password); // conexão ao banco de dados         
    // configura o modo de erro PDO para a excesão       
    echo"Conexão bem secedida";

    }
    catch(PDOException $ex) {    
        echo" Errocom banco de dados " . $ex->getmessage(); // saida de erro

    }catch(Exception $e){
        echo "  Erro generico ";
    }
   //$conn = null 
    */

?>