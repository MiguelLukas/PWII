<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Formomulário </title>
    </head>
    <body>
        <section> 

            <form action="save.php" method="post">

                <label >Nome:</label><br>
                <input type="text"  name="nome" value=""><br>
                    
                <label >Senha:</label><br>
                <input type="text" name="senha" value=""><br>
                    
                <label >email:</label><br>
                <input type="text" name="email" value=""><br>

                <label >Nivel:</label><br>

                <div class="check" >
                    <label > Graduação: </label>
                    <input type="checkbox"  name="nivel" value=" Graduação "><br>
                    <label > Tecnico: </label>
                    <input type="checkbox"  name="nivel" value=" Tecnico "><br>
                </div>

                <button type="submit" >enviar</button>
                <button type="reset" >limpar formulario</button>
            </form> 



        </section>
    </body>  
</html>

