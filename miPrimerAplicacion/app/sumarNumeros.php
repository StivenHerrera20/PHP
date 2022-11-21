<?php

//resibimos la data de la interfaz (Formulario)

$numero1 = $_POST['numero1']; 
$numero2 = $_POST['numero2']; 
$numero3 = $_POST['numero3'];

$resultado = $numero1 + $numero2 + $numero3;

//Renderizar el resultado en el navegador
echo "La suma de los 3 numeros ingresados es: {$resultado}";
