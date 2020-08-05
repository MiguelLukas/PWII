<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="CSS/style.css"/>    
	<link rel="icon" type="imagem/png" href="IMG/icon.png"/>

</head>
<body class="container"> 

    <form id="formulario" action="save.php" method="post">

        <div class="t">
            <label>Nome</label><br>
            <input class="in" type="text" require  name="nome" placeholder=" Informe o seu nome " >
            <br/> 
        </div>

        <div class="t">
            <label>E-mail</label><br>
            <input class="in" type="email" name="email" placeholder=" Informe o seu e-mail " >
            <br/>
        </div>

        <div class="t">
            <label>Telefone</label><br>
            <input class="in" type="text" name="tel" placeholder=" Informe o seu telefone " >
            <br/>
        </div>

        <div class="t">
            <label>Sexo</label><br>
            <input class="in" type="text"  name="sexo" placeholder=" Informe o seu sexo " >
            <br/>
        </div>


        <div class="t">
            <input class="in" type="submit" value="Enviar" name="botao">
        </div>
    </form>

</body>
</html>