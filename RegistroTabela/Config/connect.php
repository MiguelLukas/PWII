<?php

    include 'config.php';

    $conn = new mysqli($host, $user, $password, $database);

    $conn->set_charset("utf8");

    if ($conn->connect_error)
    {
        die("Erro de conexão: " . $conn->connect_error);
    }

    if ($log)
    {
        echo "";
    }



?>