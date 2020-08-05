<?php

    include "connect.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];

    $sql = "INSERT INTO usuarios(nome, email, senha, nivel)
        VALUES ('$nome','$email','$senha','$nivel')";



    if ($conn->query($sql)=== true)
    {
        echo "Dados salvos com sucesso.";
    } 
    else
    {
        echo "Error: " . $sql . "<br />" . $conn->error;
    }

    $conn->close();

    header("Location: consult.php"); // direcionamento para a pagina consult
    
?>