<?php

    include "connect.php"; // Importando a page de conexão com banco de dados mysql

    // Atribuindo names do formulario a variaveis

    $nome = $_POST['nome'];
    $extra = $_POST['extra'];
    $cpf = $_POST['cpf'];
    $nivel = $_POST['nivel'];

    $salVendas = 1200; // salario base vendas
    $salAdmin = 2000; // salario base administração

    // if else para verificar o nivel do funcionario 
    if($nivel == "Tecnico"){

        $com = ($salVendas / 100) * 5; // calculo de porcentagem a ser acrescentado a cada venda
        $comVendas = $com * $extra; // calculo para somar as porcentagems de vendas 
        $salVendas = $salVendas + $comVendas;  // Somando salario liquido 

        $salario = $salVendas;

    } else {

        $com = 5; // taxa de hora extra para o funcionario administrador
        $comAdmin = $com * $extra; // calculo para somar as horas extras
        $salAdmin = $salAdmin + $comAdmin;   // Somando salario liquido 

        $salario = $salAdmin;
    
    } // fechamendo do if else de verificação de nivel de funcionario 

    
      
    //Inserindo valores ao banco de dados  
    $sql = "INSERT INTO funcionarios(nome, extra, cpf, nivel, salario)
            VALUES ('$nome','$extra','$cpf','$nivel','$salario')";

    // if else de Verificação de dados MySQL
    if ($conn->query($sql)=== true)
    {   
        // direcionando para a pagina de Busca de dados 
        echo " Dados salvos com sucesso.";
        header("Location: ../Select/select.php"); // direcionamento para a pagina de consulta de dados
    }else{   

        // Imprimindo erro na tela
        echo "Error: " . $sql . "<br />" . $conn->error;
    } // fechamendo de if e else de busca de dados 

    $conn->close(); // fechando conexão com banco de dados mysql

    
    
?>