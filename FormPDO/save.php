<?php

    include 'connect.php';
    include 'config.php';

    $nome = "$_POST[nome]";

    $email = "$_POST[email]";

    $senha = "$_POST[tel]";

    $nivel = "$_POST[sexo]";

    $sql = "INSERT INTO usuarios(nome, email, senha, nivel)

    VALUES ('$nome','$email','$tel','$sexo')";

    //$conn->query("INSERT INTO usuarios(nome, email, senha, nivel)
    //VALUES ('$nome','$email','$senha','$nivel')");

    if ($conn->query($sql) === TRUE) {

    echo "Dados salvo com sucesso.";

    } else {

    echo "Error: " . $sql . "<br>" . $conn->error;

    }

    $conn->close()
    
     /*
     $sql = $conn->prepare("INSERT INTO cliente(nome, email, tel, sexo)
                            VALUES (:n, :e, :t, :s)");
    
     $sql->binValue(":n",$nome);
     $sql->binValue(":e",$email);
     $sql->binValue(":t",$tel);
     $sql->binValue(":s",$sexo);

     $sql->execute();

    */



?>