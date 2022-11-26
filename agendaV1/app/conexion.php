<?php

/* 
 * Codigo de conexion a la base de datos
 * Usamos la superclase PDO de pho
 * PHP DATA OBJECTS
 * PDO: Es una clase nativa de PHP que me permite conectarme
 * con cualquier base de datos.
 */

$usuario = 'root';
$password = '';


try {
    $pdo = new PDO('mysql:host=localhost;dbname=agenda;', $usuario, $password);
    //var_dump($pdo);
} catch (PDOException $error) {
    echo "Hay un error en la conexion {$error->getMessage()}";
}
