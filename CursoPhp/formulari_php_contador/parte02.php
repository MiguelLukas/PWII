<?php
$inicio = $_POST['inicio'];
$final =  $_POST['final'];
$passo =  $_POST['passo'];

if($inicio <= $final){

    While($inicio <= $final){

        echo " $inicio " . " <br/> ";
        $inicio = $inicio + $passo;
    }
} else if($final <= $inicio){

        While($final <= $inicio){

            echo " $final " . " <br/> ";
            $final = $final + $passo;
        }
}
?>