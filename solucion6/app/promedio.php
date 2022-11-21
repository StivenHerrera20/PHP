<?php

//resibimos la data de la interfaz (Formulario)

$Estudiante1 = $_POST['Estudiante1'];
$Estudiante2 = $_POST['Estudiante2'];
$Estudiante3 = $_POST['Estudiante3'];
$Estudiante4 = $_POST['Estudiante4'];
$Estudiante5 = $_POST['Estudiante5'];
$Estudiante6 = $_POST['Estudiante6'];

$prom = ($Estudiante1 + $Estudiante2 + $Estudiante3 + $Estudiante4 + $Estudiante5 + $Estudiante6) / 6;

//Renderizar el resultado en el navegador
echo "El promedio de las notas es: {$prom}";
