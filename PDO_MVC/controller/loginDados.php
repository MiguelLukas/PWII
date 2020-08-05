<?php
// importando as classes
include '../dto/Login.php';
include '../controller/LoginController.php';

// recebendo dados do formulario de validação
$email = $_POST['email'];
$senha = $_POST['senha'];

// criando o obj da classe LogarDados
$objLogin = new Login($email,$senha);

// chamando o controller
$objLoginCont = new LoginController();
$objLoginCont->validarLoginCont($objLogin);


