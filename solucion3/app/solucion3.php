<?php

//resibimos la data de la interfaz (Formulario)

$radio = $_POST['radio']; 
$altura = $_POST['altura'];

$area = 2 * (pi() * $radio  * ($radio+$altura));
$volumen = pi() * ($radio * $radio ) * $altura;

//Renderizar el resultado en el navegador
echo "El area del cilindro es: {$area} <br>";

echo "El volumen del cilindro es: {$volumen}";
