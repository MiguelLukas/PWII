<?php

   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "banco";

   try {
       $sconn = new PDO("mysql:host=$host;dbname=$database", $user, $password); // conexão ao banco de dados
                   
       // configura o modo de erro PDO para a excesão
       echo"Conexão bem secedida";

   }catch(PDOException $ex){    
       echo" Erro de conexão: " . $ex->getmessage(); // saida de erro
   }
   $conn = null 

?>