<?php

//resibimos la data de la interfaz (Formulario)

$numero1 = $_POST['numero1'];

$resultado = ($numero1 * 1.8) + 32;

//Renderizar el resultado en el navegador
echo "{$numero1} grados celsius equivalen a {$resultado} grados fahrenheit";
