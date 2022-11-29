<?php

//datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

//Conexion
require_once 'conexion.php';

//Consulta
$sql = "UPDATE contacto SET nombre=?,apellido=?,email=?,telefono=? WHERE id={$id}";
$query = $pdo->prepare($sql);
$query->execute([$nombre, $apellido, $email, $telefono]);
//Llama a la pagina principal
header('Location:../index.php');
