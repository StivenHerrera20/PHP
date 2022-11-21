<?php

//resibimos la data de la interfaz (Formulario)

$numero1 = $_POST['numero1'];

$perimetro = 4 * $numero1;

$superficie = $numero1 * $numero1;

//Renderizar el resultado en el navegador
echo "El perimetro del cuadrado es: {$perimetro} <br>" ;
echo "La superficie del cuadrado es: {$superficie}";
