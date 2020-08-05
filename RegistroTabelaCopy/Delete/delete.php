<html !DOCTYPE>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title> Delete </title>
</head>
<body class="container">
    <section>
        <form action="../config/del.php" class="form" method="post">

            <label id="titulo"> DELETAR REGISTRO DE FUNCIONARIO </label>
            <div class="inputs">
                <label> Digite o id do registro que quer apagar da tabela funcionarios</label><br>
                <input type="text" name="del" placeholder=" Digite o id "> 
            </div>
            <div class="btn">
                <button class="button" type="submit"> Deletar Registro </button>
                <button class="button" type="reset" > Limpar Id </button>
            </div>

        </form>

    </section>
</body>
</html>