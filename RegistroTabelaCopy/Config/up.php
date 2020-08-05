<?php

    include "connect.php"; // importando a page de conexão com banco de dados


    // Atribuindo names do formulario a variaveis
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $extra = $_POST['extra'];
    $cpf = $_POST['cpf'];
    $nivel = $_POST['nivel'];

    // Atualizando dados da tabela funcionarios no banco de dados e atribuindo a veriaveis  
    $up0 = " UPDATE funcionarios SET nome = '$nome' WHERE id_func = '$id'; ";
    $up1 = " UPDATE funcionarios SET extra = '$extra' WHERE id_func = '$id'; ";
    $up2 = " UPDATE funcionarios SET cpf = '$cpf' WHERE id_func = '$id'; ";
    $up3 = " UPDATE funcionarios SET nivel = '$nivel' WHERE id_func = '$id'; ";
           

    // if else de Verificação de dados MySQL
    if ($conn->query($up0)===true && $conn->query($up1)===true 
        && $conn->query($up2)===true && $conn->query($up3)===true)
    {
        // direcionando para a pagina de busca de dados 
        echo "Dados atualizados com sucesso com sucesso.";
        header("Location: ../Select/select.php"); // direcionamento para a pagina de consulta de dados
    } 
    else
    {   // Imprimindo erro na tela
        echo "Error: " . $up . "<br />" . $conn->error;
    }
    
    $conn->close(); // fechando conexãocom banco de dados

    
    
?>