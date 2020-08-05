<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="CSS/style.css"/>
    <link rel="" type="post" href="base php.php"/>
	<link rel="icon" type="imagem/png" href="IMG/icon.png"/>

</head>
<body class="container"> 
    <form method="post" action="parte2.php">
        <?php
        $c =1;
        while($c <= 5){
            echo "valor 1: <input type='number' name='v1' max='100' min='0' value='0' /><br/>";     
        $c++;
        }
        ?>
    </form>
    





    </form>
</body>
</html>