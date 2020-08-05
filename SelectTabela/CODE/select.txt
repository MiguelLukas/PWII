
<?php

	include "connect.php";
	
	$sql = "SELECT * FROM usuarios";
	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// imprimir o resultado da consulta
		while( $row = $result->fetch_assoc()){
			echo "<br/>  id: " . $row["id"] . " - Nome: " . $row["nome"] .  " "
			. " - Email: " . $row["email"] .  " "
			. " - Senha: " . $row["senha"] .  " "
			. " - Nível: " . $row["nivel"] .  " "
			. " - Data: " . $row["data"] .  " "
			. "<br/>";
		}
	} else {
		echo "0 resultados";
	}
	
	--------------------------------------------------------------------------------------
	
	include "connect.php";

		$sql = "SELECT email, senha FROM usuarios WHERE email='joaocarlos@gmail.com'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// coleta dado do usuário
			$row = $result->fetch_assoc();
			
			$email = $row["email"];
			$senha = $row["senha"];
			
			// if para comparar com os dados enviados do formulario
			// de login e validar acesso
			
		} else {
			echo "0 resultados";
		}

$conn->close();
?>