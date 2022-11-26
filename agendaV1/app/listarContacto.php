<?php

//Usa el archivo de conexion dentro de este codigo
require_once 'conexion.php';

//armamos la consulta
$sql = 'SELECT * FROM contacto';

//prepare: prepara la consulta para ejecutarse, limpia caracteres y previene sql injection
$query = $pdo->prepare($sql);
$query->execute(); //Ejecuta la consulta en la BD
$resultado = $query->fetchAll(); //Transforma el resultado de la consulta en un arreglo asociativo
