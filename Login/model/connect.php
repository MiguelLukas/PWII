<?php
include '../config/config.php';

//Conecta com o banco de dados
$conn = new mysqli($host, $user, $password, $database);

$conn->set_charset("utf8");

if ($conn->connect_error){
    die("Erro de conexão: " . $conn->connect_error);
}
    
?>