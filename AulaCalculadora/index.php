<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <title> Calculadora barth </title>
    </head>
    <body class="container">

        <fieldset id="fild"> 
            <legend>
                <div>
                    <h1 id="titulo">
                        Calculadora
                    </h1> 
                </div>
            </legend>
            <form id="formulario" action="calculadora.php" method="post">
                <div class="t">
                    <label>Divisor:</label>
                    <input class="in" type="text" value="" name="num1" >
                    <br/>
                </div>

                <div class="t"> 
                    <label>Operação : </label>
                    <input type="radio" name="operador" checked value="+">Somar
                    <input type="radio" name="operador" value="-">Subtrair
                    <input type="radio" name="operador" value="*">Multiplicar
                    <input type="radio" name="operador" value="/">Dividir
                    <br/>
                </div> 

                <div class="t">
                    <label>Dividendo : </label>
                    <input class="in" type="text" value="" name="num2" >
                    <br/>
                </div>
                <div class="btn_igual">
                    <br/>
                    <input type="submit" value=" = " />
                </div>
                <div>
                    
                </div>
                
            </form>
    </body>
</html>




