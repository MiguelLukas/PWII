<head>
	<!--<link rel="stylesheet" type="text/css" href="CSS\style.css">-->
	<script type="text/javascript" src="JS/java.js"></script>
	<style>
		.tabela{
			border:solid 3px blue;;
			background: #f2f2f2;
			padding: 1px;
			width: 100%;
		}
		.celulaId{
			border:solid blue;
			padding: 10px;
			width: 100px;
		}
		.celulaNome{
			border:solid blue;
			padding: 10px;
			width: 150px;
		}
		.celulaEmail{
			border:solid blue;
			padding: 10px;
			width: 200px;
		}
		.celulaSenha{
			border:solid blue;
			padding: 10px;
			width: 150px;
		}
	</style>
</head>

<?php

	include "connect.php"; // incluindo ao projeto o arquivo connect

	/*
	Pesquisando a tabela usuarios no banco de dados
	e implementando na variavel sql
	*/
	$tabela = "border-color:blue;";

	$sql = "SELECT * FROM usuarios"; 
	
	$result = $conn->query($sql); // variavel que recebe a pesquisa da variavel sql
	

	if ($result->num_rows > 0) // if que testa se o tamanho da variavel result é maior que 0
	{
		// laço que repetição que itera de acordo com o tamanho da variavel result 
		while( $row = $result->fetch_assoc()){


			/* 
			//exemplo 01 funcionando 

			echo "<br/>  id: " . $row["id"] . " - Nome: " . $row["nome"] .  " "
			. " - Email: " . $row["email"] .  " "
			. " - Senha: " . $row["senha"] .  " "
			. " - Nível: " . $row["nivel"] .  " "
			. " - Data: " . $row["data"] .  " "
			. "<br/>";
			*/
			


			//variaveis que recebem o valor do formulario
            $id = $row["id"];
            $nome = $row["nome"];
            $email = $row["email"];
            $senha = $row["senha"];
			
			

			// imprimi tabela com os dados da consulta com o banco de dados
			
					echo"
						<table class='tabela'>
							<tbody>
								<tr>
									<td class='celulaId'>$id</td>
									<td class='celulaNome'>$nome</td>
									<td class='celulaEmail'>$email</td>
									<td class='celulaSenha'>$senha</td>
								</tr>
							</tbody>
							
						</table>
					
				";

	}// fechamendo da condição do if

	// else para exibir uma mensagem caso a variavel result nao seja maior que zero
	} else {
		echo "0 resultados";
    }
    
	//-----------------------------------------
	
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