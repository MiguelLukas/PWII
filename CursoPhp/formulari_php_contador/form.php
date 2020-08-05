<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="CSS/style.css"/>
    <!--<link rel="" type="post" href="base php.php"/>-->
    <link rel="icon" type="imagem/png" href="IMG/icon.png"/>
    <title> Formulario com contador </title>

</head>
<body class="container"> 
    <form method="post" action="parte02.php">
    
        <div class="input">
            Numero de inicio : <input  type="number" name="inicio" max="100" min="0"><br/>
        </div>
        <div class="input">
            Numero final : <input  type="number" name="final" max="100" min="0"><br/>
        </div>
        <div class="input">
            Passo : <input  type="number" name="passo" max="100" min="0"><br/>
        <div>
              <input  type="submit" name="btn" value=" Contar " ><br/>
         </div>


    </form>
</body>
</html>