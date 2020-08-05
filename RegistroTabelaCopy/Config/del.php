<?php

   include "connect.php"; //Importando a pagina de conexão com MySQL

   // Atribuindo names do formulario a variaveis
   $del = $_POST['del'];

   // Atribuindo a variavel o id do registro a ser deletado
   $delete =" DELETE FROM funcionarios where id_func = $del;";

   // if else de Verificação de dados
   if ($conn->query($delete) === true)
   {    
       // direcionando para a pagina de Busca de dados
       echo "Dados excluidos com sucesso .";
       header("Location: ../Select/select.php"); // direcionamento para a pagina de consulta de dados
   }else{

        // Imprimindo erro na tela
       echo "Error: " . $delete . "<br />" . $conn->error;
   } // fechamendo de if e else de busca de dados 

   $conn->close();// fechando conexão com banco de dados mysql

?>        