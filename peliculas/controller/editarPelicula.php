<?php
try {
    $id = $_POST['idPelicula'];
    $nombre = $_POST['nombrePelicula'];
    $descripcion = $_POST['descripcionPelicula'];
    $estado = $_POST['estadoPelicula'];
    $edad = $_POST['edad'];
    $fecha = date("Y-m-d");

    require_once "../model/mysql.php";
    $mysql = new MySql();

    $mysql->conectar();
    //Se guarda la respuesta de la consulta en la variable 
    $consulta = $mysql->efectuarConsulta("UPDATE pelicula SET nombrePelicula = '" . $nombre . "', descripcionPelicula = '" . $descripcion . "', estado = '" . $estado . "', fecha = '" . $fecha . "', edad = '" . $edad . "' WHERE idPelicula = '" . $id . "'");
    //Se desconect de la base de datos
    $mysql->desconectar();

    header("Location: ../inicio.php");

    // Paso 6: Cerrar la conexión a la base de datos.
    $pdo = null;
} catch (Exception $e) {
    // Manejo de errores en caso de que ocurra una excepción.
    echo "Error: " . $e->getMessage();
}
