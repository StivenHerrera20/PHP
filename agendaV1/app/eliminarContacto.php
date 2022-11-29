<?php

//datos del formulario
$id = $_GET['id'];
//Conexion
require_once 'conexion.php';

//Consulta
$sql = "DELETE FROM contacto WHERE id = {$id}";
$query = $pdo->prepare($sql);
$query->execute();
//Llama a la pagina principal
header('Location:../index.php');
