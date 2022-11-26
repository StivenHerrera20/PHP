<?php

//datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

//Conexion
require_once 'conexion.php';

//Consulta
$sql = 'INSERT INTO contacto (nombre,apellido,email,telefono) values (?,?,?,?)';
$query = $pdo->prepare($sql);
$query->execute([$nombre, $apellido, $email, $telefono]);
//Llama a la pagina principal
header('Location:../index.php');
