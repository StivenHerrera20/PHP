<?php

//Tipos de datos por asignacion
$entero = 80;  //Entero
$real = 80.677; //Real o double
$texto = "Esto es un texto"; //String
$booleano = false; //False o True; False imprime vacio y True imprime 1

//salida por pantalla

print $entero.'<br>';
print $real.'<br>';
print $texto.'<br>';
print $booleano.'<br>'; 

echo $entero.'<br>';
echo $real.'<br>';
echo $texto.'<br>';
echo $booleano.'<br>'; 

var_dump(8>10); //Devuelve tipo de datos y la longitud, tambien compara operaciones
echo '<br>';
echo gettype($booleano); //Devuelve el tipo de dato
