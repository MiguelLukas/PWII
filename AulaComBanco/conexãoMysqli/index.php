<DOCTYPE! html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title> CONEXÃO COM SQLi </title>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script></script>

</head>
    <body>
    <?php // index do php com banco de dados
                              
            require 'configuração.php';
            require 'conexão.php';

            $link = DBconnect();
            echo " pego sa porraa dessa conexãooo";
            DBclose($link);
            
    ?>        
    </body>
</html>