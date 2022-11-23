<?php

//Inicializacion de variables
$bandera = 5; //Variable que controla el bucle
$contador = 0; //Variable que hace girar el bucle

//Definicion del bucle

do {
    echo "El numero del ciclo/vuelta es: {$contador} <br>";
    $contador++;
} while ($bandera >= $contador);
