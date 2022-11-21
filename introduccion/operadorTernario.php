<?php

$a = 18;
$b = 12;

//Estilo clasico
/* if ($a > $b) {
    //literal expresion
    echo "El valor {$a} es mayor que: {$b}<br>";
    //Modo clasico
    echo "El valor ". $a ." es mayor que: ". $b;
}
echo'<br>'; */

//Operador ternario

//echo ($a > $b) ? "El valor {$a} es mayor que: {$b} <br>": "El valor {$a} es menor que: {$b}";

$resultado = ($a > $b) ? true: false;

if($resultado){
    echo 'Excelente !! ';
}