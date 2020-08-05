<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Atividade EAD </title>
        <link rel="stylesheet" type="text/css" href="CSS/index.css">
    </head> 
    <body class="container">

        <section class="base"> 

            <form class="formulario" action="config/save.php" method="post">
               
                <div>
                    <label id="titulo"> CADASTRO DE FUNCIONARIO </label>
                </div>

                <div class="div_controler">
                    <div class="inputs" >

                        <label class="til" >Nome do Funcionario</label><br>
                        <input type="text" name="nome" value=""><br>

                    </div>
                </div>

                <div class="div_controler" >
                    <div class="inputs" >

                        <div>
                            <label class="til" >VEN: Qtd de Vendas</label><br>
                            <label class="til" >ADM: Hr extras interas</label><br>
                        </div>

                        <input type="number" name="extra" value=""><br>
                    </div>

                    <div class="inputs" >

                        <label class="til" >CPF do funcionario</label><br>
                        <input type="number" name="cpf" value=""><br>

                    </div>
                <div>
        
                <div class="check" >
                    <label> Nivel </label>

                    <div class="div_nivel">

                        <div class="div_check">
                            <label> Vendas:  </label>
                            <input type="checkbox" name="nivel" value="Vendas">
                        </div>
                        
                        <div class="div_check">
                            <label> Administração: </label>
                            <input type="checkbox" name="nivel" value="Administração">
                        </div>

                    </div>

                </div>

                <div class="btn">
                    <button type="submit">  ENVIAR </button>
                    <button type="reset">  LIMPAR FORMULARIO </button>
                </div>

            </form> 



        </section>

    </body>  
</html>

