<?php

//resibimos la data de la interfaz (Formulario)

$radio = $_POST['radio'];

$resultado = pi() * ($radio * $radio);

//Renderizar el resultado en el navegador
echo "El area del circulo es: {$resultado}";
