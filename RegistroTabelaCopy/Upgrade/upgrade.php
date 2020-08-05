<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Atividade EAD </title>
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    </head> 
    <body class="container">
        <section> 

            <form class="form" action="../config/up.php" method="post">

                <label id="titulo"> ATUALIZAÇÃO DE CADASTRO DE FUNCIONARIO </label>

                <div class="inputs" >
                    <label>Id Do funcionario:</label><br>
                    <input type="number" name="id" value=""><br>
                </div>

                <div class="inputs" >
                    <label>Nome do Funcionario:</label><br>
                    <input type="text" name="nome" value=""><br>
                </div>

                <div class="inputs" >
                    <label>Quantidade de horas extras:</label><br>
                    <input type="number" name="extra" value=""><br>
                </div>

                <div class="inputs" >
                    <label>CPF do funcionario:</label><br>
                    <input type="number" name="cpf" value=""><br>
                </div>
        
                <div class="check" >
                    <fieldset><legend>Nivel:</legend><br>
                        <label> Vendas:  </label>
                        <input type="checkbox" name="nivel" value=" Vendas "><br>
                        <label> Administração: </label>
                        <input type="checkbox"  name="nivel" value=" Administração "><br>
                    </fieldset>
                </div>

                <div class="btn">
                    <button type="submit" >enviar</button>
                    <button type="reset" >limpar formulario</button>
                </div>

            </form> 



        </section>
    </body>  
</html>

