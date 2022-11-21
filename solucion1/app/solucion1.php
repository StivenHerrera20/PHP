<?php

//resibimos la data de la interfaz (Formulario)

$numero1 = $_POST['numero1'];

$resultado = $numero1 * $numero1 * $numero1 ;

//Renderizar el resultado en el navegador
echo "El numero {$numero1} elevado al cubo es: {$resultado}";
