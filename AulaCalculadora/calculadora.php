<?php

    session_start();

    // Função soma 
    function soma($num1,$num2){
         $a = $num1;
         $b = $num2;
         $resul = $a + $b;
         return $resul;
    }

    // Função Subtrair
    function sub($num1,$num2){
        $a = $num1;
        $b = $num2;
        $resul = $a - $b;
        return $resul;
    }

   // Função Multiplicação
    function mult($num1,$num2){
        $a = $num1;
        $b = $num2;
        $resul = $a * $b;
        return $resul;
    }

    // Função Divisão
    function div($num1,$num2){
        $a = $num1;
        $b = $num2;
        $resul = $a / $b;
        return $resul;
    }

    // variaveis de entrada de dados
    $num1 = $_POST ['num1'];
    $num2 = $_POST ['num2'];
    $op = $_POST ['operador'];

    // Estrutura condicional 
     if($op == "+"){
        $result = soma($num1,$num2); // chamando a função soma
        echo "$result";

    }else if($op == "-"){
        $result = sub($num1,$num2); // chamando a função sub
        echo "$result";

    }else if($op == "*"){
        $result = mult($num1,$num2); // chamando a função mult
        echo "$result";

    }else if($op == "/"){
        if($num2 == 0){
            echo " Não é possivel dividir o numero 0";
        }
        else{
        $result = div($num1,$num2); // chamando a função div
        echo "$result";
        }
    }
    
    // Saida de dados
    // Saida de dados na pagina da caulculadora
    

    


?>

 