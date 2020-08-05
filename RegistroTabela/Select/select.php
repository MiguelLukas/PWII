<head>
	<!--<link rel="stylesheet" type="text/css" href="CSS\style.css">-->
	<script type="text/javascript" src="JS/java.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/footer.css"> 
	<style>
	.container{
		font-family: "Lucida Console", Courier, monospace;
		width: 100%;
		display: flex;
		justify-content: flex-start;
		margin: 0 auto;
		flex-direction: column;
		align-items: center;
	}
	.base{
		padding-bottom: 30px;

	}
	.titulo{
		width: 100%;
		display: flex;
        justify-content: space-around;
        flex-direction: row;
        align-items: center;
		padding: 40;
		margin-bottom: 20px;
		background-color: blueviolet ;
		color: white;
		font-size: 25;
	}
	.img_header{
		border-radius: 10px;
		text-align: center;
		width: 70px;
		height: 70px;
	}
	.alink_voltar{
		text-decoration: none;
		color: blueviolet;
	}
	.btn_voltar{
		background: white;
		border: solid 2px white;
		border-radius: 10px;
		width: 60px;
		height: 40px; 
	}
	.alink_delete{
		text-decoration: none;
		color: red;
	}
	.alink_upgrade{
		text-decoration: none;
		color: green;
	}
	.celulaBase{
		color: blueviolet;
		width: 100px;
		height: 40;
		text-decoration: none;
		border: solid 2px blueviolet;
		text-align: center;
		padding-top: 25;
		background-color: white;
	}
	.celulaBasex{
		color: white;
		width: 100px;
		height: 40;
		text-decoration: none;
		border: solid 2px grey;
		background-color: blueviolet;
		text-align: center;
		padding-top: 25;
	}
	.tabelafora{
		display: flex;
    	align-items: center;
    	flex-direction: row;
		justify-content: center;
		width: 100%;
	}
	.tabelaforax{
		display: flex;
    	align-items: center;
    	flex-direction: row;
		justify-content: center;
		width: 100%;
	}

	</style>

</head>
	<body class="container" >

		<div class="titulo">
			<button class="btn_voltar" ><a class="alink_voltar" href="../index.html" > voltar </a></button>
			<label> REGISTROS DO BANCO DE DADOS </label>
			<img class="img_header" src="../IMG/perfil.png">
		</div>

		<div class="base" >

		<table>
			<tbody>
				<tr class="tabelaforax" > 
			        <td class="celulaBasex" >CODIGO</td>
					<td class="celulaBasex" >NOME</td>
					<td class="celulaBasex" >COMISSÃO</td>
					<td class="celulaBasex" >CPF</td>
					<td class="celulaBasex" >NIVEL</td>
					<td class="celulaBasex" >SALARIO</td>	
					<td class="celulaBasex" >DATA</td>	
					<td class="celulaBasex" >ATUALIZAR</td>	
					<td class="celulaBasex" >DELETAR</td>								
				</tr>
			</tbody>
		</table>
					
		<?php

			include '..\Config\connect.php'; // incluindo ao projeto o arquivo connect.php

			/*
			Pesquisando a tabela usuarios no banco de dados
			e implementando na variavel sql
			*/

			$sql = "SELECT * FROM funcionarios"; 
			
			$result = $conn->query($sql); // variavel que recebe a pesquisa da variavel sql
			

			if ($result->num_rows > 0) // if que testa se o tamanho da variavel result é maior que 0
			{	

				// laço que repetição que itera de acordo com o tamanho da variavel result 
				while( $row = $result->fetch_assoc()){

					//variaveis que recebem o valor do formulario // 

					$id = $row["id_func"]; // nome  do id tem 	ue ser identico ao campo de id			                       
					$nome = $row["nome"];  // do banco de dados
					$extra = $row["extra"];
					$cpf = $row["cpf"];
					$nivel = $row["nivel"];
					$salario = $row["salario"];
					$data = $row["data"];			

					// imprimi tabela com os dados da consulta com o banco de dados
							echo"
								<table>
									<tbody>
										<tr class='tabelafora' >
											<td class='celulaBase'>$id</td>
											<td class='celulaBase'>$nome</td>
											<td class='celulaBase'>$extra</td>
											<td class='celulaBase'>$cpf</td>
											<td class='celulaBase'>$nivel</td>
											<td class='celulaBase'>$salario</td>	
											<td class='celulaBase'>$data</td>	
											<td class='celulaBase'>
											    <a class='alink_upgrade' href='../Upgrade/upgrade.php?id=$id'> 
											        Atualizar 
											    </a> 
											</td>	
											<td class='celulaBase'>
											    <a class='alink_delete' href='../Config/del.php?id=$id'>
											        Deletar  
											    </a> 
											</td>
																		
										</tr>
									</tbody>								
								</table>		
						";

						// ?nome=$nome?extra=$extra?cpf=$cpf?nivel=$nivel

				}// fechamendo da condição do while

			// else para exibir uma mensagem caso a variavel result nao seja maior que zero
			}else{
				header("Location: ../Delete/offresul.html");
			}
			
			//-----------------------------------------
			
		$conn->close();
		?>

		</div><!-- Fechamento da div com classe base -->

		<footer class="footer" >
            <label> Copyright Miguel Lukas </label>
		</footer>
	</body>
<html>