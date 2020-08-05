<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Atividade EAD </title>
        <link rel="stylesheet" type="text/css" href="../CSS/upgrade.css"> 
        <link rel="stylesheet" type="text/css" href="../CSS/header.css"> 
        <link rel="stylesheet" type="text/css" href="../CSS/footer.css"> 
    </head> 
    <body class="container">

    <?php    

         include '../Config/connect.php'; // incluindo ao projeto o arquivo connect.php

         /*
         Pesquisando a tabela usuarios no banco de dados
         e implementando na variavel sql
         */

         $id = $_GET['id'];

         $sql = "SELECT * FROM funcionarios WHERE id_func = $id "; 
         
         $result = $conn->query($sql); 
        
         if ($result->num_rows > 0) // if que testa se o tamanho da variavel result é maior que 0
			{	
				// laço que repetição que itera de acordo com o tamanho da variavel result 
				while( $row = $result->fetch_assoc()){

                                           
					$nome = $row["nome"];   //variaveis que recebem os valores atribuidos do banco de dados  // 
					$extra = $row["extra"];
					$cpf = $row["cpf"];
                    $nivel = $row["nivel"];
                }
            }
            else
            {
                    header("Location: ../Delete/offresul.html");
            }

         $conn->close();
     
    ?>
        <header class="header" >
            <label> ATUALIZAÇÃO DE DADOS   </label>
        </header>

        <section class="base" > 

            <form class="form" action="../Config/up.php" method="POST">

                <div class="inputs" >

                    <label>Id Do funcionario:</label><br>
                    <?php 
                        echo "<input class='padd' type='number' name='id' value='$id'>";
                    ?>

                </div>

                <div class="inputs" >

                    <label>Nome do Funcionario:</label><br>
                    <?php 
                        echo "<input class='padd' type='text' name='nome' value='$nome' >";
                    ?>

                </div>

                <div class="inputs" >

                    <label>Quantidade de horas extras:</label><br>
                    <?php 
                        echo "<input class='padd' type='number' name='extra' value='$extra'>";
                    ?>

                </div>

                <div class="inputs" >

                    <label>CPF do funcionario:</label><br>
                    <?php 
                        echo "<input class='padd' type='number' name='cpf' value='$cpf'>";
                    ?>

                </div>
                
                <label class="inputs" > Nivel: </label>

                <div class="inputs" >
                    <div class="check" > 

                        <label> Tecnico: </label>
                        <input class="padd" type="checkbox" name="nivel" value="Tecnico">

                    </div>

                    <div class="check" >

                        <label> Admin: </label>
                        <input class="padd" type="checkbox"  name="nivel" value="Administração">

                   </div>
                </div>

                <div class="inputs" >

                    <button class="btn_up" type="submit" >ENVIAR</button>
                    <button class="btn_up" type="reset" >RESET</button>

                </div>

            </form> 
        </section>

        <footer class="footer" >
            <label> Copyright Miguel Lukas </label>
		</footer>

    </body>  
</html>

