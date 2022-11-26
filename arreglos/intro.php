<?php
//Forma Clasica
//define('NUMEROE',2.71);
//var_dump(NUMEROE);

//Forma moderna
/* const NUMEROE = 2.71;
echo NUMEROE; */

//Algunas superconstantes

/* echo PHP_OS;
echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_URL_HOST;
echo '<br>' . PHP_URL_PATH; */
//Link constantes de php
//https://www.php.net/manual/en/reserved.constants.php

$frutas = ["Papaya", 9, true, 5.23];
// var_dump($frutas);
echo "<pre>";
//var_dump($frutas);
echo "</pre>";

//Los anteriores son arreglos asociativos

//recorrer arreglo Forma 1 : Ciclo for
/* for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . '<br>';
} */
//recorrer arreglo Forma 2 : Ciclo foreach
foreach ($frutas as $llave =>  $valor) {
    echo "Posicion {$llave} => {$valor} <br>";
}
