<?php
require_once '../modelo/mysql.php';
$idPelicula = $_GET['id'];
$mysql = new MySql();

//Se hace uso del metodo
$mysql->conectar();

//Se guarda la respuesta de la consulta en la variable 
$consulta = $mysql->efectuarConsulta("UPDATE peliculas.pelicula SET peliculas.pelicula.estado=0 WHERE idPelicula=" . $idPelicula);

//Se desconect de la base de datos
$mysql->desconectar();

header("Location: ../inicio.php");
